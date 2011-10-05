<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/upload.php
*
* @copyright	http://www.xoops.org/ The XOOPS Project
* @copyright	XOOPS_copyrights.txt
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since		1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				MyTube
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

include 'admin_header.php';

$op = ( isset( $_REQUEST['op'] ) && !empty( $_REQUEST['op'] ) ) ? $_REQUEST['op'] : '';
$rootpath = ( isset( $_GET['rootpath'] ) ) ? intval( $_GET['rootpath'] ) : 0;

switch ( strtolower( $op ) ) {
    case 'upload':
        if ( $_FILES['uploadfile']['name'] != '' ) {
            if ( file_exists( ICMS_ROOT_PATH . '/' . $_POST['uploadpath'] . '/' . $_FILES['uploadfile']['name'] ) ) {
                redirect_header( 'upload.php', 2, _AM_MYTUBE_VIDEO_IMAGEEXIST );
            } 
            $allowed_mimetypes = array( 'image/gif', 'image/jpeg', 'image/pjpeg', 'image/x-png', 'image/png', 'media/flv' );
            mytube_uploading( $_FILES, $_POST['uploadpath'], $allowed_mimetypes, 'upload.php', 1, 0 );
            redirect_header( 'upload.php', 2 , _AM_MYTUBE_VIDEO_IMAGEUPLOAD );
            exit();
        } else {
            redirect_header( 'upload.php', 2 , _AM_MYTUBE_VIDEO_NOIMAGEEXIST );
            exit();
        } 
        break;

    case 'delfile':
        if ( isset( $_POST['confirm'] ) && $_POST['confirm'] == 1 ) {
            $filetodelete = ICMS_ROOT_PATH . '/' . $_POST['uploadpath'] . '/' . $_POST['videofile'];
            if ( file_exists( $filetodelete ) ) {
                chmod( $filetodelete, 0666 );
                if ( @unlink( $filetodelete ) ) {
                    redirect_header( 'upload.php', 1, _AM_MYTUBE_VIDEO_FILEDELETED );
                } else {
                    redirect_header( 'upload.php', 1, _AM_MYTUBE_VIDEO_FILEERRORDELETE );
                } 
            } 
            exit();
        } else {
            if ( empty( $_POST['videofile'] ) ) {
                redirect_header( 'upload.php', 1, _AM_MYTUBE_VIDEO_NOFILEERROR );
                exit();
            } 
            icms_cp_header();
            icms_core_Message::confirm( array( 'op' => 'delfile', 'uploadpath' => $_POST['uploadpath'], 'videofile' => $_POST['videofile'], 'confirm' => 1 ), 'upload.php', _AM_MYTUBE_VIDEO_DELETEFILE . '<br /><br />' . $_POST['videofile'], _AM_MYTUBE_BDELETE );
        } 
        break;

    case 'default':
    default:
        $displayimage = '';
        icms_cp_header();

        $dirarray  = array( 1 => icms::$module -> config['catimage'], 2 => icms::$module -> config['mainimagedir'], 3 => icms::$module -> config['videoimgdir'] );
        $namearray = array( 1 => _AM_MYTUBE_VIDEO_CATIMAGE , 2 => _AM_MYTUBE_VIDEO_MAINIMAGEDIR, 3 => _AM_MYTUBE_VIDEO_CATVIDEOIMG );
        $listarray = array( 1 => _AM_MYTUBE_VIDEO_FCATIMAGE , 2 => _AM_MYTUBE_VIDEO_FMAINIMAGEDIR, 3 => _AM_MYTUBE_VIDEO_FCATVIDEOIMG );

        mytube_adminmenu( 4, _AM_MYTUBE_MUPLOADS );
        mytube_serverstats();
        if ( $rootpath > 0 ) {
            echo '<div><b>' . _AM_MYTUBE_VIDEO_FUPLOADPATH . '</b> ' . ICMS_ROOT_PATH . '/' . $dirarray[$rootpath] . '</div>';
            echo '<div><b>' . _AM_MYTUBE_VIDEO_FUPLOADURL . '</b> ' . ICMS_URL . '/' . $dirarray[$rootpath] . '</div><br />';
        } 
        $pathlist = ( isset( $listarray[$rootpath] ) ) ? $namearray[$rootpath] : '';
        $namelist = ( isset( $listarray[$rootpath] ) ) ? $namearray[$rootpath] : '';

        $iform = new icms_form_Theme( _AM_MYTUBE_VIDEO_FUPLOADIMAGETO . $pathlist, 'op', '' );
        $iform -> setExtra( 'enctype="multipart/form-data"' );
        ob_start();
			$iform -> addElement( new icms_form_elements_Hidden( 'dir', $rootpath ) );
			mytube_getDirSelectOption( $namelist, $dirarray, $namearray );
			$iform -> addElement( new icms_form_elements_Label( _AM_MYTUBE_VIDEO_FOLDERSELECTION, ob_get_contents() ) );
        ob_end_clean();

        if ( $rootpath > 0 ) {
            $graph_array = &mytubeLists :: getListTypeAsArray( ICMS_ROOT_PATH . '/' . $dirarray[$rootpath], $type = 'images' );
            $indeximage_select = new icms_form_elements_Select( '', 'videofile', '' );
            $indeximage_select -> addOptionArray( $graph_array );
            $indeximage_select -> setExtra( "onchange='showImgSelected(\"image\", \"videofile\", \"" . $dirarray[$rootpath] . "\", \"\", \"" . ICMS_URL . "\")'" );
            $indeximage_tray = new icms_form_elements_Tray( _AM_MYTUBE_VIDEO_FSHOWSELECTEDIMAGE, '&nbsp;' );
            $indeximage_tray -> addElement( $indeximage_select );
            if ( !empty( $imgurl ) ) {
                $indeximage_tray -> addElement( new icms_form_elements_Label( '', '<br /><br /><img src="' . ICMS_URL . '/' . $dirarray[$rootpath] . '/' . $videofile . '" name="image" id="image" alt"" />' ) );
            } else {
                $indeximage_tray -> addElement( new icms_form_elements_Label( '', '<br /><br /><img src="' . ICMS_URL . '/uploads/blank.gif" name="image" id="image" alt="" />' ) );
            }
            $iform -> addElement( $indeximage_tray );

            $iform -> addElement( new icms_form_elements_File( _AM_MYTUBE_VIDEO_FUPLOADIMAGE, 'uploadfile', 0 ) );
            $iform -> addElement( new icms_form_elements_Hidden( 'uploadpath', $dirarray[$rootpath] ) );
            $iform -> addElement( new icms_form_elements_Hidden( 'rootnumber', $rootpath ) );

            $dup_tray = new icms_form_elements_Tray( '', '' );
            $dup_tray -> addElement( new icms_form_elements_Hidden( 'op', 'upload' ) );
            $butt_dup = new icms_form_elements_Button( '', '', _AM_MYTUBE_BUPLOAD, 'submit' );
            $butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'upload\'"' );
            $dup_tray -> addElement( $butt_dup );

            $butt_dupct = new icms_form_elements_Button( '', '', _AM_MYTUBE_BDELETEIMAGE, 'submit' );
            $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'delfile\'"' );
            $dup_tray -> addElement( $butt_dupct );
            $iform -> addElement( $dup_tray );
        } 
        $iform -> display();
} 
icms_cp_footer();
?>