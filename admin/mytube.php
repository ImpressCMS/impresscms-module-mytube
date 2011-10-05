<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: admin/mytube.php
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

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );

$op  = mytube_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = mytube_cleanRequestVars( $_REQUEST, 'lid', 0 );

function edit( $lid = 0 ) {
    global $mytubemyts, $mytree, $imagearray;

    $sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid;
    if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
        icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
        return false;
    } 
    $video_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
    $directory = icms::$module -> config['videodir'];
//    $vidsource = 200;
    $lid = $video_array['lid'] ? $video_array['lid'] : 0;
    $cid = $video_array['cid'] ? $video_array['cid'] : 0;
    $title = $video_array['title'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['title'] ) : '';
    $vidid = $video_array['vidid'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['vidid'] ) : '';
    $publisher = $video_array['publisher'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['publisher'] ) : '';
    $screenshot = $video_array['screenshot'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['screenshot'] ) : '';
    $descriptionb = $video_array['description'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['description'] ) : '';
    $published = $video_array['published'] ? $video_array['published'] : time();
    $expired = $video_array['expired'] ? $video_array['expired'] : 0;
    $updated = $video_array['updated'] ? $video_array['updated'] : 0;
    $offline = $video_array['offline'] ? $video_array['offline'] : 0;
    $ipaddress = $video_array['ipaddress'] ? $video_array['ipaddress'] : 0;
    $notifypub = $video_array['notifypub'] ? $video_array['notifypub'] : 0;
    $time = $video_array['time'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['time'] ) : '0:00:00';
    $keywords = $video_array['keywords'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['keywords'] ) : '';
    $item_tag = $video_array['item_tag'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['item_tag'] ) : '';
	$nice_url = $video_array['nice_url'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['nice_url'] ) : '';

    icms_cp_header();
    mytube_adminmenu( 3, _AM_MYTUBE_MVIDEOS );
	
/*	echo '<fieldset style="border: #E8E8E8 1px solid;">
	      <legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_MYTUBE_FLV_LICENSE . '</legend>
	      <div style="padding: 8px;"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/certificate.png" alt="" style="float: left; padding-right: 10px;" />
		  <div>' . _AM_MYTUBE_FLV_LICENSEDSC . '</div>';
	echo '</div>';
    echo '</fieldset>';
*/
    if ( $lid ) {
        $_vote_data = mytube_getVoteDetails( $lid );
        $text_info = "
			<table width='100%'>
			 <tr>
			  <td width='33%' valign='top'>
			   <div><b>" . _AM_MYTUBE_VIDEO_ID . " </b>" . $lid . "</div>
			   <div><b>" . _AM_MYTUBE_MINDEX_SUBMITTED . ": </b>" . mytube_time( formatTimestamp( $video_array['date'], icms::$module -> config['dateformat'] ) ) . "</div>
			   <div><b>" . _AM_MYTUBE_MOD_MODIFYSUBMITTER . " </b>" . icms_member_user_Handler::getUserLink( $video_array['submitter'] ) . "</div>
			   <div><b>" . _AM_MYTUBE_VIDEO_IP . " </b>" . $ipaddress . "</div>
			   <div><b>" . _AM_MYTUBE_VIDEO_VIEWS . " </b>" . $video_array['hits'] . "</div>
			  </td>
			  <td>
			   <div><b>" . _AM_MYTUBE_VOTE_TOTALRATE . ": </b>" . intval( $_vote_data['rate'] ) . "</div>
			   <div><b>" . _AM_MYTUBE_VOTE_USERAVG . ": </b>" . intval( round( $_vote_data['avg_rate'], 2 ) ) . "</div>
			   <div><b>" . _AM_MYTUBE_VOTE_MAXRATE . ": </b>" . intval( $_vote_data['min_rate'] ) . "</div>
			   <div><b>" . _AM_MYTUBE_VOTE_MINRATE . ": </b>" . intval( $_vote_data['max_rate'] ) . "</div>
               <div><b>&nbsp;</div>
			  </td>
			  <td>		 
			   <div><b>" . _AM_MYTUBE_VOTE_MOSTVOTEDTITLE . ": </b>" . intval( $_vote_data['max_title'] ) . "</div>
		       <div><b>" . _AM_MYTUBE_VOTE_LEASTVOTEDTITLE . ": </b>" . intval( $_vote_data['min_title'] ) . "</div>
			   <div><b>" . _AM_MYTUBE_VOTE_REGISTERED . ": </b>" . ( intval( $_vote_data['rate'] - $_vote_data['null_ratinguser'] ) ) . "</div>
			   <div><b>" . _AM_MYTUBE_VOTE_NONREGISTERED . ": </b>" . intval( $_vote_data['null_ratinguser'] ) . "</div>
			   <div><b>&nbsp;</div>
			  </td>
			 </tr>
			</table>";
        echo '
			<fieldset style="border: #E8E8E8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_MYTUBE_INFORMATION . '</legend>
			<div style="padding: 8px;">' . $text_info . '</div>	
		<!--	<div style="padding: 8px;"><li>' . $imagearray['deleteimg'] . ' ' . _AM_MYTUBE_VOTE_DELETEDSC . '</li></div>\n    -->
			</fieldset>
			<br />';
    } 
    unset( $_vote_data );

    $caption = ( $lid ) ? _AM_MYTUBE_VIDEO_MODIFYFILE : _AM_MYTUBE_VIDEO_CREATENEWFILE;

    $sform = new icms_form_Theme( $caption, 'storyform','' );
    $sform -> setExtra( 'enctype="multipart / form - data"' );

// Video title
    $sform -> addElement( new icms_form_elements_Text( _AM_MYTUBE_VIDEO_TITLE, 'title', 70, 100, $title ), true );
	
// Video nice url	
	$niceform = new icms_form_elements_Text( _AM_MYTUBE_NICEURL, 'nice_url', 70, 100, $nice_url );
	$niceform -> setDescription( '<small>' . _AM_MYTUBE_NICEURLDSC . '</small>' );
    $sform -> addElement( $niceform, false );

//MyTube menu
    $file_array = &mytubeLists :: getListTypeAsArray( ICMS_ROOT_PATH . '/' . icms::$module -> config['videodir'], $type='media' );
    $indexfile_select = new icms_form_elements_Select( '', 'vidid', $vidid );
    $indexfile_select -> addOptionArray( $file_array );
    $indexfile_tray = new icms_form_elements_Tray( _AM_MYTUBE_MYTUBEVIDEO, '&nbsp;' );
    $indexfile_tray -> addElement( $indexfile_select );
    $sform -> addElement( $indexfile_tray );

// Screenshot
    $graph_array = &mytubeLists :: getListTypeAsArray( ICMS_ROOT_PATH . '/' . icms::$module -> config['videoimgdir'], $type = 'images' );
    $indeximage_select = new icms_form_elements_Select( '', 'screenshot', $screenshot );
    $indeximage_select -> addOptionArray( $graph_array );
    $indeximage_select -> setExtra( "onchange = 'showImgSelected(\"image\", \"screenshot\", \"" . icms::$module -> config['videoimgdir'] . "\", \"\", \"" . ICMS_URL . "\")'" );
    $indeximage_tray = new icms_form_elements_Tray( _AM_MYTUBE_VIDEO_SHOTIMAGE, '&nbsp;' );
    $indeximage_tray -> setDescription( sprintf( "<small>" . _AM_MYTUBE_VIDEO_MUSTBEVALID . "</small>", "<b>" . $directory . "</b>" ));
    $indeximage_tray -> addElement( $indeximage_select );
    if ( !empty( $imgurl ) ) {
        $indeximage_tray -> addElement( new icms_form_elements_Label( '', " <br /><br />< img src='" . ICMS_URL . "/" . icms::$module -> config['videoimgdir'] . "/" . $screenshot . "' name = 'image' id = 'image' alt = '' / > " ) );
    } else {
        $indeximage_tray -> addElement( new icms_form_elements_Label( '', " <br /><br /><img src='" . ICMS_URL . "/uploads/blank.gif' name='image' id='image' alt='' / > " ) );
    } 
    $sform -> addElement( $indeximage_tray );

// Video publisher
    $publisher = icms::$user -> getVar( 'uname' );
    $sform -> addElement( new icms_form_elements_Hidden( 'publisher', $publisher ) );
    
// Time form
    $sform -> addElement( new icms_form_elements_Text( _AM_MYTUBE_TIME, 'time', 7, 7, $time ), false );

// Category menu
    ob_start();
		$mytree -> makeMySelBox( 'title', 'title', $cid, 0 );
		$sform -> addElement( new icms_form_elements_Label( _AM_MYTUBE_VIDEO_CATEGORY, ob_get_contents() ) );
    ob_end_clean();

// Description form
    $editor = mytube_getWysiwygForm( _AM_MYTUBE_VIDEO_DESCRIPTION, 'descriptionb', $descriptionb );
    $sform -> addElement( $editor, true );
    
// Meta keywords form
    $keywords = new icms_form_elements_TextArea( _AM_MYTUBE_KEYWORDS, 'keywords', $keywords, 5, 50, false );
    $keywords -> setDescription( '<span style="font-size: smaller;">' . _AM_MYTUBE_KEYWORDS_NOTE . '</span>' );
    $sform -> addElement( $keywords );

// Insert tags if Tag-module is installed
    if ( mytube_tag_module_included() ) {
		include_once ICMS_ROOT_PATH . '/modules/tag/include/formtag.php';
		$text_tags = new XoopsFormTag( 'item_tag', 70, 255, $video_array['item_tag'], 0 );
		$sform -> addElement( $text_tags );
    } else {
		$sform -> addElement( new icms_form_elements_Hidden( 'item_tag', $video_array['item_tag'] ) );
    }

// Video Publish Date
   $sform -> addElement( new icms_form_elements_Datetime( _AM_MYTUBE_VIDEO_SETPUBLISHDATE, 'published', $size=15, $published ) );

    if ( $lid ) {
        $sform -> addElement( new icms_form_elements_Hidden( 'was_published', $published ) );
        $sform -> addElement( new icms_form_elements_Hidden( 'was_expired', $expired ) );
    } 

// Video Expire Date
    $isexpired = ( $expired > time() ) ? 1 : 0 ;
    $expiredates = ( $expired > time() ) ? _AM_MYTUBE_VIDEO_EXPIREDATESET . mytube_time( formatTimestamp( $expired, icms::$module -> config['dateformat'] ) ) : _AM_MYTUBE_VIDEO_SETDATETIMEEXPIRE;
    $warning = ( $published > $expired && $expired > time() ) ? _AM_MYTUBE_VIDEO_EXPIREWARNING : '';
    $expiredate_checkbox = new icms_form_elements_Checkbox( '', 'expiredateactivate', $isexpired );
    $expiredate_checkbox -> addOption( 1, $expiredates );

    $expiredate_tray = new icms_form_elements_Tray( _AM_MYTUBE_VIDEO_EXPIREDATE . $warning, '' );
    $expiredate_tray -> addElement( $expiredate_checkbox );
    $expiredate_tray -> addElement( new icms_form_elements_Datetime( '<br /><br />' . _AM_MYTUBE_VIDEO_SETEXPIREDATE, 'expired', 15, $expired ) );
    $expiredate_tray -> addElement( new icms_form_elements_Radioyn( _AM_MYTUBE_VIDEO_CLEAREXPIREDATE, 'clearexpire', 0, ' ' . _YES . ' ', ' ' . _NO ) );
    $sform -> addElement( $expiredate_tray );

// Set video offline yes/no
    $videostatus_radio = new icms_form_elements_Radioyn( _AM_MYTUBE_VIDEO_FILESSTATUS, 'offline', $offline, ' ' . _YES . ' ', ' ' . _NO );
    $sform -> addElement( $videostatus_radio );

// Set video status as updated yes/no
    $up_dated = ( $updated == 0 ) ? 0 : 1;
    $video_updated_radio = new icms_form_elements_Radioyn( _AM_MYTUBE_VIDEO_SETASUPDATED, 'up_dated', $up_dated, ' ' . _YES . ' ', ' ' . _NO );
    $sform -> addElement( $video_updated_radio );

    $result = icms::$xoopsDB -> query( 'SELECT COUNT( * ) FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' WHERE lid=' . $lid );
    list ( $broken_count ) = icms::$xoopsDB -> fetchRow( $result );
    if ( $broken_count > 0 ) {
        $video_updated_radio = new icms_form_elements_Radioyn( _AM_MYTUBE_VIDEO_DELEDITMESS, 'delbroken', 1, ' ' . _YES . '', ' ' . _NO );
        $sform -> addElement( $editmess_radio );
    } 

    if ( $lid && $published == 0 ) {
        $approved = ( $published == 0 ) ? 0 : 1;
        $approve_checkbox = new icms_form_elements_Checkbox( _AM_MYTUBE_VIDEO_EDITAPPROVE, 'approved', 1 );
        $approve_checkbox -> addOption( 1, ' ' );
        $sform -> addElement( $approve_checkbox );
    } 

    if ( !$lid ) {
        $button_tray = new icms_form_elements_Tray( '', '' );
        $button_tray -> addElement( new icms_form_elements_Hidden( 'status', 1 ) );
        $button_tray -> addElement( new icms_form_elements_Hidden( 'notifypub', $notifypub ) );
        $button_tray -> addElement( new icms_form_elements_Hidden( 'op', 'save' ) );
        $button_tray -> addElement( new icms_form_elements_Button( '', '', _AM_MYTUBE_BSAVE, 'submit' ) );
        $sform -> addElement( $button_tray );
    } else {
        $button_tray = new icms_form_elements_Tray( '', '' );
        $button_tray -> addElement( new icms_form_elements_Hidden( 'lid', $lid ) );
        $button_tray -> addElement( new icms_form_elements_Hidden( 'status', 2 ) );
        $hidden = new icms_form_elements_Hidden( 'op', 'save' );
        $button_tray -> addElement( $hidden );

        $butt_dup = new icms_form_elements_Button( '', '', _AM_MYTUBE_BMODIFY, 'submit' );
        $butt_dup -> setExtra( 'onclick="this . form . elements . op . value = \'save\'"' );
        $button_tray -> addElement( $butt_dup );
        $butt_dupct = new icms_form_elements_Button( '', '', _AM_MYTUBE_BDELETE, 'submit' );
        $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'delete\'"' );
        $button_tray -> addElement( $butt_dupct );
        $butt_dupct2 = new icms_form_elements_Button( '', '', _AM_MYTUBE_BCANCEL, 'submit' );
        $butt_dupct2 -> setExtra( 'onclick="this.form.elements.op.value=\'videosConfigMenu\'"' );
        $button_tray -> addElement( $butt_dupct2 );
        $sform -> addElement( $button_tray );
    }
    $sform -> display();
    unset( $hidden );
    icms_cp_footer();
} 

switch ( strtolower( $op ) ) {
    case 'edit':
        edit( $lid );
        break;

    case 'save':
        $groups = isset( $_POST['groups'] ) ? $_POST['groups'] : array();
        $lid = ( !empty( $_POST['lid'] ) ) ? $_POST['lid'] : 0;
        $cid = ( !empty( $_POST['cid'] ) ) ? $_POST['cid'] : 0;
        $vidrating = ( !empty( $_POST['vidrating'] ) ) ? $_POST['vidrating'] : 6;
        $status = ( !empty( $_POST['status'] ) ) ? $_POST['status'] : 2;

// Get data from form
        $screenshot = ( $_POST['screenshot'] != 'blank.gif' ) ? icms_core_DataFilter::addSlashes( $_POST['screenshot'] ) : '';
        $vidid = icms_core_DataFilter::addSlashes( trim( $_POST['vidid'] ) );
        $title = icms_core_DataFilter::addSlashes( trim( $_POST['title'] ) );
        $descriptionb = icms_core_DataFilter::addSlashes( trim( $_POST['descriptionb'] ) );
        $time = icms_core_DataFilter::addSlashes( trim( $_POST['time'] ) );
        $keywords = icms_core_DataFilter::addSlashes( trim( $_POST['keywords'] ) );
        $item_tag = icms_core_DataFilter::addSlashes( trim( $_POST['item_tag'] ) );
        $submitter = icms::$user -> getVar( 'uid' );
        $publisher = icms_core_DataFilter::addSlashes( trim( $_POST['publisher'] ) );
        $updated = ( isset( $_POST['was_published'] ) && $_POST['was_published'] == 0 ) ? 0 : time();
        $published =  strtotime($_POST['published']['date'] ) + $_POST['published']['time'];
		$nice_url = icms_core_DataFilter::addSlashes( trim( $_POST['nice_url'] ) );

        if ( $_POST['up_dated'] == 0 ) {
            $updated = 0;
            $status = 1;
        } 

        $offline = ( $_POST['offline'] == 1 ) ? 1 : 0;
        $approved = ( isset( $_POST['approved'] ) && $_POST['approved'] == 1 ) ? 1 : 0;
        $notifypub = ( isset( $_POST['notifypub'] ) && $_POST['notifypub'] == 1 );
        
        if ( !$lid ) {
            $date = time();
            $publishdate = time();
        } else {
            $publishdate = $_POST['was_published'];
            $expiredate = $_POST['was_expired'];
        } 
        if ( $approved == 1 && empty( $publishdate ) ) {
            $publishdate = time();
        }
        if ( isset( $_POST['expiredateactivate'] ) ) {
            $expiredate = strtotime( $_POST['expired']['date'] ) + $_POST['expired']['time'];
        } 
        if ( $_POST['clearexpire'] ) {
            $expiredate = '0';
        } 

// Update or insert linkload data into database
        if ( !$lid ) {
            $date = time();
            $publishdate = time();
            $ipaddress = $_SERVER['REMOTE_ADDR'];
            $sql = 'INSERT INTO ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' (lid, cid, title, vidid, screenshot, submitter, publisher, status, date, hits, rating, votes, comments, vidsource, published, expired, updated, offline, description, ipaddress, notifypub, vidrating, time, keywords, item_tag, nice_url )';
            $sql .= " VALUES 	('', $cid, '$title', '$vidid', '$screenshot', '$submitter', '$publisher', '$status', '$date', 0, 0, 0, 0, '200', '$published', 0, '$updated', '$offline', '$descriptionb', '$ipaddress', '0', '$vidrating', '$time', '$keywords', '$item_tag', '$nice_url')";
			// increase user post counter
			user_posts( $submitter, 1 );
        } else {
            $sql = "UPDATE " . icms::$xoopsDB -> prefix( 'mytube_videos' ) . " SET cid = $cid, title='$title', vidid='$vidid', screenshot='$screenshot', publisher='$publisher', status='$status', vidsource='200', published='$published', expired='$expiredate', updated='$updated', offline='$offline', description='$descriptionb', vidrating='$vidrating', time='$time', keywords='$keywords', item_tag='$item_tag', nice_url='$nice_url' WHERE lid=" . $lid;
        }

        if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        }

        $newid = mysql_insert_id();
        
// Add item_tag to Tag-module
        if ( !$lid ) {
			$tagupdate = mytube_tagupdate( $newid, $item_tag );
        } else {
			$tagupdate = mytube_tagupdate( $lid, $item_tag );
        }

// Send notifications
        if ( !$lid ) {
            $tags = array();
            $tags['VIDEO_NAME'] = $title;
            $tags['VIDEO_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $cid . '&amp;lid=' . $newid;
            $sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . $cid;
            $result = icms::$xoopsDB -> query( $sql );
            $row = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = icms::handler('icms_data_notification');
            $notification_handler -> triggerEvent( 'global', 0, 'new_video', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_video', $tags );
        } 
        if ( $lid && $approved && $notifypub ) {
            $tags = array();
            $tags['VIDEO_NAME'] = $title;
            $tags['VIDEO_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $cid . '&amp;lid=' . $lid;
            $sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . $cid;
            $result = icms::$xoopsDB -> query( $sql );
            $row = icms::$xoopsDB -> fetchArray( $result );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = icms::handler('icms_data_notification');
            $notification_handler -> triggerEvent( 'global', 0, 'new_video', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_video', $tags );
            $notification_handler -> triggerEvent( 'video', $lid, 'approve', $tags );
        } 
        $message = ( !$lid ) ? _AM_MYTUBE_VIDEO_NEWFILEUPLOAD : _AM_MYTUBE_VIDEO_FILEMODIFIEDUPDATE ;
        $message = ( $lid && !$_POST['was_published'] && $approved ) ? _AM_MYTUBE_VIDEO_FILEAPPROVED : $message;

        if ( mytube_cleanRequestVars( $_REQUEST, 'delbroken', 0 ) ) {
            $sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' WHERE lid=' . $lid;
            if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
                icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
        } 

        redirect_header( 'index.php', 1, $message );
        break;
} 
?>