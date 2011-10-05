<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/indexpage.php
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

$op = mytube_cleanRequestVars( $_REQUEST, 'op', '' );

switch ( strtolower( $op ) ) {
    case 'save':
        $indexheading = icms_core_DataFilter::addSlashes( trim( $_REQUEST['indexheading'] ) );
        $indexheader = icms_core_DataFilter::addSlashes( trim( $_REQUEST['indexheader'] ) );
        $indexfooter = icms_core_DataFilter::addSlashes( trim( $_REQUEST['indexfooter'] ) );
        $indeximage = icms_core_DataFilter::addSlashes( $_REQUEST['indeximage'] );
        $indexheaderalign = icms_core_DataFilter::addSlashes( $_REQUEST['indexheaderalign'] );
        $indexfooteralign = icms_core_DataFilter::addSlashes( $_REQUEST['indexfooteralign'] );
		$lastvideosyn = $_REQUEST['lastvideosyn'];
        $lastvideostotal = icms_core_DataFilter::addSlashes( $_REQUEST['lastvideostotal'] );
        $sql = "UPDATE " . icms::$xoopsDB -> prefix( 'mytube_indexpage' ) . " SET indexheading='$indexheading', indexheader='$indexheader', indexfooter='$indexfooter', indeximage='$indeximage', indexheaderalign='$indexheaderalign', indexfooteralign='$indexfooteralign', lastvideosyn='$lastvideosyn', lastvideostotal='$lastvideostotal'";
        if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        redirect_header( 'index.php', 1, _AM_MYTUBE_IPAGE_UPDATED );
        break;

    default:
        $sql = 'SELECT indeximage, indexheading, indexheader, indexfooter, indexheaderalign, indexfooteralign, lastvideosyn, lastvideostotal FROM ' . icms::$xoopsDB -> prefix( 'mytube_indexpage' );
        if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        list( $indeximage, $indexheading, $indexheader, $indexfooter, $indexheaderalign, $indexfooteralign, $lastvideosyn, $lastvideostotal ) = icms::$xoopsDB -> fetchrow( $result );

        icms_cp_header();
        mytube_adminmenu( 7, _AM_MYTUBE_INDEXPAGE );

        echo '
		 <fieldset style="border: #E8E8E8 1px solid;">
		   <legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_MYTUBE_IPAGE_INFORMATION . '</legend>
		     <div style="padding: 12px;"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar('dirname') . '/images/icon/indexpage.png" alt="" style="float: left; padding-right: 10px;" />' . _AM_MYTUBE_MINDEX_PAGEINFOTXT . '</div>
		 </fieldset><br />';

        $sform = new icms_form_Theme( _AM_MYTUBE_IPAGE_MODIFY, 'op', '' );
        $sform -> addElement( new icms_form_elements_Text( _AM_MYTUBE_IPAGE_CTITLE, 'indexheading', 60, 60, $indexheading ), false );
        $graph_array = &mytubeLists :: getListTypeAsArray( ICMS_ROOT_PATH . '/' . icms::$module -> config['mainimagedir'], $type = 'images' );
        $indeximage_select = new icms_form_elements_Select( '', 'indeximage', $indeximage );
        $indeximage_select -> addOptionArray( $graph_array );
        $indeximage_select -> setExtra( "onchange='showImgSelected(\"image\", \"indeximage\", \"" . icms::$module -> config['mainimagedir'] . "\", \"\", \"" . ICMS_URL . "\")'" );
        $indeximage_tray = new icms_form_elements_Tray( _AM_MYTUBE_IPAGE_CIMAGE, '&nbsp;' );
        $indeximage_tray -> addElement( $indeximage_select );
        if ( !empty( $indeximage ) ) {
            $indeximage_tray -> addElement( new icms_form_elements_Label( '', '<br /><br /><img src="' . ICMS_URL . '/' . icms::$module -> config['mainimagedir'] . '/' . $indeximage . '" name="image" id="image" alt="" />' ) );
        } else {
            $indeximage_tray -> addElement( new icms_form_elements_Label( '', '<br /><br /><img src="' . ICMS_URL . '/uploads/blank.gif" name="image" id="image" alt="" />' ) );
        } 
        $sform -> addElement( $indeximage_tray );

        $editor = mytube_getWysiwygForm( _AM_MYTUBE_IPAGE_CHEADING, 'indexheader', $indexheader );
        $sform -> addElement( $editor, false );

        $headeralign_select = new icms_form_elements_Select( _AM_MYTUBE_IPAGE_CHEADINGA, 'indexheaderalign', $indexheaderalign );
        $headeralign_select -> addOptionArray( array( 'left' => _AM_MYTUBE_IPAGE_CLEFT, 'right' => _AM_MYTUBE_IPAGE_CRIGHT, 'center' => _AM_MYTUBE_IPAGE_CCENTER ) );
        $sform -> addElement( $headeralign_select );
        $sform -> addElement( new icms_form_elements_TextArea( _AM_MYTUBE_IPAGE_CFOOTER, 'indexfooter', $indexfooter, 10, 60 ) );
        $footeralign_select = new icms_form_elements_Select( _AM_MYTUBE_IPAGE_CFOOTERA, 'indexfooteralign', $indexfooteralign );
        $footeralign_select -> addOptionArray( array( 'left' => _AM_MYTUBE_IPAGE_CLEFT, 'right' => _AM_MYTUBE_IPAGE_CRIGHT, 'center' => _AM_MYTUBE_IPAGE_CCENTER ) );
        $sform -> addElement( $footeralign_select );
		
		$sform -> addElement(  new icms_form_elements_Radioyn( _AM_MYTUBE_IPAGE_SHOWLATEST, 'lastvideosyn', $lastvideosyn, ' ' . _YES . ' ', ' ' . _NO ) );

        $lastvideostotalform = new icms_form_elements_Text( _AM_MYTUBE_IPAGE_LATESTTOTAL, 'lastvideostotal', 2, 2, $lastvideostotal );
		$lastvideostotalform -> setDescription( '<small>' . _AM_MYTUBE_IPAGE_LATESTTOTAL_DSC . '</small>' );
        $sform -> addElement( $lastvideostotalform, false );

        $button_tray = new icms_form_elements_Tray( '', '' );
        $hidden = new icms_form_elements_Hidden( 'op', 'save' );
        $button_tray -> addElement( $hidden );
        $button_tray -> addElement( new icms_form_elements_Button( '', 'post', _AM_MYTUBE_BSAVE, 'submit' ) );
        $sform -> addElement( $button_tray );
        $sform -> display();
        break;
} 
icms_cp_footer();
?>