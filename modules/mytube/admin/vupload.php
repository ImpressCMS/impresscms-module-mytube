<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/vupload.php
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
    case 'vupload':
        if ( $_FILES['uploadfile']['name'] != '' ) {
            if ( file_exists( ICMS_ROOT_PATH . '/' . $_POST['uploadpath'] . '/' . $_FILES['uploadfile']['name'] ) ) {
                redirect_header( 'vupload.php', 2, _AM_MYTUBE_VUPLOAD_VIDEOEXIST );
            } 
            $allowed_mimetypes = 'media/aac, media/flv, media/mp3, media/mp4';
            mytube_uploading( $_FILES, $_POST['uploadpath'], $allowed_mimetypes, 'vupload.php', 1, 0 );
            redirect_header( 'vupload.php', 2 , _AM_MYTUBE_VUPLOAD_VIDEOUPLOAD );
            exit();
        } else {
            redirect_header( 'vupload.php', 2 , _AM_MYTUBE_VUPLOAD_NOVIDEOEXIST );
            exit();
        } 
        break;

    case 'delfile':
        if ( isset( $_POST['confirm'] ) && $_POST['confirm'] == 1 ) {
            $filetodelete = ICMS_ROOT_PATH . '/' . $_POST['uploadpath'] . '/' . $_POST['videofile'];
            if ( file_exists( $filetodelete ) ) {
                chmod( $filetodelete, 0666 );
                if ( @unlink( $filetodelete ) ) {
                    redirect_header( 'vupload.php', 1, _AM_MYTUBE_VUPLOAD_FILEDELETED );
                } else {
                    redirect_header( 'vupload.php', 1, _AM_MYTUBE_VUPLOAD_FILEERRORDELETE );
                } 
            } 
            exit();
        } else {
            if ( empty( $_POST['videofile'] ) ) {
                redirect_header( 'vupload.php', 1, _AM_MYTUBE_VUPLOAD_NOFILEERROR );
                exit();
            } 
            icms_cp_header();
            icms_core_Message::confirm( array( 'op' => 'delfile', 'uploadpath' => $_POST['uploadpath'], 'videofile' => $_POST['videofile'], 'confirm' => 1 ), 'vupload.php', _AM_MYTUBE_VUPLOAD_DELETEFILE . '<br /><br />' . $_POST['videofile'], _AM_MYTUBE_BDELETE );
        } 
        break;

    case 'default':
    default:
        icms_cp_header();

        $dirarray  = array( 1 => icms::$module -> config['videodir'] );
        $namearray = array( 1 => _AM_MYTUBE_VUPLOAD_CATVIDEO );
        $listarray = array( 1 => _AM_MYTUBE_VUPLOAD_FCATVIDEO );

        mytube_adminmenu( 5, _AM_MYTUBE_VUPLOADS );

        if ( $rootpath > 0 ) {
            echo '<div><b>&nbsp;' . _AM_MYTUBE_VUPLOAD_FUPLOADPATH . '</b> ' . ICMS_ROOT_PATH . '/' . $dirarray[$rootpath] . '</div>';
            echo '<div><b>&nbsp;' . _AM_MYTUBE_VUPLOAD_FUPLOADURL . '</b> ' . ICMS_URL . '/' . $dirarray[$rootpath] . '</div><br />';
        } 
        $pathlist = ( isset( $listarray[$rootpath] ) ) ? $namearray[$rootpath] : '';
        $namelist = ( isset( $listarray[$rootpath] ) ) ? $namearray[$rootpath] : '';

        $iform = new icms_form_Theme( _AM_MYTUBE_VUPLOAD_FUPLOADVIDEOTO . $pathlist, 'op', '' );
        $iform -> setExtra( 'enctype="multipart/form-data"' );
        ob_start();
           $iform -> addElement( new icms_form_elements_Hidden( 'dir', $rootpath ) );
           mytube_VgetDirSelectOption( $namelist, $dirarray, $namearray );
           $iform -> addElement( new icms_form_elements_Label( _AM_MYTUBE_VUPLOAD_FOLDERSELECTION, ob_get_contents() ) );
        ob_end_clean();

        if ( $rootpath > 0 ) {
          
            $file_array = &mytubeLists :: getListTypeAsArray( ICMS_ROOT_PATH . '/' . $dirarray[$rootpath], $type = 'media' );
            $indexfile_select = new icms_form_elements_Select( '', 'videofile', '' );
            $indexfile_select -> addOptionArray( $file_array );
            $indexfile_select -> setExtra( "onchange='showImgSelected(\"media\", \"videofile\", \"" . $dirarray[$rootpath] . "\", \"\", \"" . ICMS_URL . "\")'" );
            $indexfile_tray = new icms_form_elements_Tray( _AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILE, '&nbsp;' );
            $indexfile_tray -> addElement( $indexfile_select );
            if ( !empty( $imgurl ) ) {
                $indexfile_tray -> addElement( new icms_form_elements_Label( '', '<br /><br /><img src="' . ICMS_URL . '/' . $dirarray[$rootpath] . '/' . $videofile . '" name="image" id="image" alt="" />' ) );
            } else {
                $indexfile_tray -> addElement( new icms_form_elements_Label( '', '<br /><br /><img src="' . ICMS_URL . '/uploads/blank.gif" name="image" id="image" alt="" />' ) );
            }
            $iform -> addElement( $indexfile_tray );

            $file_tray = new icms_form_elements_File( _AM_MYTUBE_VUPLOAD_FUPLOADVIDEO, 'uploadfile', 0 );
            $file_tray -> setDescription( '<small>' . _AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC . '</small>' );
            $iform -> addElement( $file_tray );
            $iform -> addElement( new icms_form_elements_Hidden( 'uploadpath', $dirarray[$rootpath] ) );
            $iform -> addElement( new icms_form_elements_Hidden( 'rootnumber', $rootpath ) );

            $dup_tray = new icms_form_elements_Tray( '', '' );
            $dup_tray -> addElement( new icms_form_elements_Hidden( 'op', 'vupload' ) );
            $butt_dup = new icms_form_elements_Button( '', '', _AM_MYTUBE_BUPLOAD, 'submit' );
            $butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'vupload\'"' );
            $dup_tray -> addElement( $butt_dup );

            $butt_dupct = new icms_form_elements_Button( '', '', _AM_MYTUBE_BDELETEVIDEO, 'submit' );
            $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'delfile\'"' );
            $dup_tray -> addElement( $butt_dupct );
            $iform -> addElement( $dup_tray );
        } 
        $iform -> display();
} 
icms_cp_footer();
?>