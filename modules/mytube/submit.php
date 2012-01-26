<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: submit.php
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

include 'header.php';

global $icmsConfigUser;

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );

$cid = intval( mytube_cleanRequestVars( $_REQUEST, 'cid', 0 ) );
$lid = intval( mytube_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

if ( false == mytube_checkgroups( $cid, 'MyTubeSubPerm' ) ) {
	redirect_header( 'index.php', 1, _MD_MYTUBE_NOPERMISSIONTOPOST );
	exit();
}

if ( true == mytube_checkgroups( $cid, 'MyTubeSubPerm' ) ) {
	if ( mytube_cleanRequestVars( $_REQUEST, 'submit', 0 ) ) {

		// Verify captcha code
		if ( icms::$module -> config['captcha'] == true && $icmsConfigUser['use_captcha'] == true ) {
			$icmsCaptcha = icms_form_elements_captcha_Object::instance(); 
			if ( !$icmsCaptcha -> verify( true ) ) { 
				redirect_header( 'submit.php', 2, $icmsCaptcha -> getMessage() ); 
			}
		} 

		if ( false == mytube_checkgroups( $cid, 'MyTubeSubPerm' ) ) {
			redirect_header( 'index.php', 1, _MD_MYTUBE_NOPERMISSIONTOPOST );
			exit();
		}

		$submitter = ( is_object( icms::$user ) && !empty( icms::$user ) ) ? icms::$user -> getVar( 'uid' ) : 0;
		$vidsource = mytube_cleanRequestVars( $_REQUEST, 'vidsource', 0 );
		$offline = mytube_cleanRequestVars( $_REQUEST, 'offline', 0 );
		$notifypub = mytube_cleanRequestVars( $_REQUEST, 'notifypub', 0 );
		$approve = mytube_cleanRequestVars( $_REQUEST, 'approve', 0 );
		$vidrating = mytube_cleanRequestVars( $_REQUEST, 'vidrating', 0 );
		$vidid = icms_core_DataFilter::addSlashes( ltrim($_POST['vidid'] ) );
		$title = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['title'] ) );
		$descriptionb = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['descriptionb'] ) );
		$publisher = icms_core_DataFilter::addSlashes( trim( $_REQUEST['publisher'] ) );
		$time = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['time'] ) );
		$keywords = icms_core_DataFilter::addSlashes( trim(  $_REQUEST['keywords'] ) );
		$item_tag = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['item_tag'] ) );
		$picurl = icms_core_DataFilter::addSlashes( ltrim( $_REQUEST['picurl'] ) );
		$date = time();
		$publishdate = 0;
		$ipaddress = $_SERVER['REMOTE_ADDR'];
		$hd = mytube_cleanRequestVars( $_REQUEST, 'hd', 0 );

		if ( $lid == 0 ) {
			$status = 0;
			$publishdate = 0;
			$message = _MD_MYTUBE_THANKSFORINFO;
			if ( true == mytube_checkgroups( $cid, 'MyTubeAutoApp' ) ) {
				$publishdate = time();
				$status = 1;
				$message = _MD_MYTUBE_ISAPPROVED;
			}
			$sql = 'INSERT INTO ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . '	(lid, cid, title, vidid, submitter, publisher, status, date, hits, rating, votes, comments, vidsource, published, expired, offline, description, ipaddress, notifypub, vidrating, time, keywords, item_tag, picurl, hd) ';
			$sql .= " VALUES 	('', $cid, '$title', '$vidid', '$submitter', '$publisher', '$status', '$date', 0, 0, 0, 0, '$vidsource', '$publishdate', 0, '$offline', '$descriptionb', '$ipaddress', '$notifypub', '$vidrating', '$time', '$keywords', '$item_tag', '$picurl', '$hd')";
			if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
				$_error = icms::$xoopsDB -> error() . ' : ' . icms::$xoopsDB -> errno();
				icms::$logger -> handleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
			}
			$newid = mysql_insert_id();

			// increase user post counter
			user_posts( $submitter, 1 );

			// Add item_tag to Tag-module
			if ( $lid == 0) {
				$tagupdate = mytube_tagupdate( $newid, $item_tag );
			} else {
				$tagupdate = mytube_tagupdate( $lid, $item_tag );
			}

			// Notify of new link (anywhere) and new link in category
			$notification_handler = icms::handler('icms_data_notification');

			$tags = array();
			$tags['VIDEO_NAME'] = $title;
			$tags['VIDEO_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $cid . '&amp;lid=' . $newid;

			$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . $cid;
			$result = icms::$xoopsDB -> query( $sql );
			$row = icms::$xoopsDB -> fetchArray( $result );

			$tags['CATEGORY_NAME'] = $row['title'];
			$tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
			if ( true == mytube_checkgroups( $cid, 'MyTubeAutoApp' ) ) {
				$notification_handler -> triggerEvent( 'global', 0, 'new_video', $tags );
				$notification_handler -> triggerEvent( 'category', $cid, 'new_video', $tags );
				redirect_header( 'index.php', 2, _MD_MYTUBE_ISAPPROVED );
			} else {
				$tags['WAITINGFILES_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/newvideos.php';
				$notification_handler -> triggerEvent( 'global', 0, 'video_submit', $tags );
				$notification_handler -> triggerEvent( 'category', $cid, 'video_submit', $tags );
				if ( $notifypub ) {
					include_once ICMS_ROOT_PATH . '/include/notification_constants.php';
					$notification_handler -> subscribe( 'video', $newid, 'approve', XOOPS_NOTIFICATION_MODE_SENDONCETHENDELETE );
				}
				redirect_header( 'index.php', 2, _MD_MYTUBE_THANKSFORINFO );
			}
		} else {
			if ( true == mytube_checkgroups( $cid, 'MyTubeAutoApp' ) || $approve == 1 ) {
				$updated = time();
				$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'mytube_videos' ) . " SET cid=$cid, title='$title', vidid='$vidid', publisher='$publisher', updated='$updated', offline='$offline', description='$descriptionb', ipaddress='$ipaddress', notifypub='$notifypub', vidrating='$vidrating', time='$time', keywords='$keywords', item_tag='$item_tag', picurl='$picurl', hd='$hd' WHERE lid =" . $lid;
				if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
					$_error = icms::$xoopsDB -> error() . " : " . icms::$xoopsDB -> errno();
					icms::$logger -> handleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
				}

				$notification_handler = icms::handler('icms_data_notification');
				$tags = array();
				$tags['VIDEO_NAME'] = $title;
				$tags['VIDEO_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $cid . '&amp;lid=' . $lid;
				$sql = "SELECT title FROM " . icms::$xoopsDB -> prefix( 'mytube_cat' ) . " WHERE cid=" . $cid;
				$result = icms::$xoopsDB -> query( $sql );
				$row = icms::$xoopsDB -> fetchArray( $result );
				$tags['CATEGORY_NAME'] = $row['title'];
				$tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;

				$notification_handler -> triggerEvent( 'global', 0, 'new_video', $tags );
				$notification_handler -> triggerEvent( 'category', $cid, 'new_video', $tags );
				$_message = _MD_MYTUBE_ISAPPROVED;
			} else {
				$submitter_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( 'SELECT submitter FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . intval( $lid ) ) );
				$modifysubmitter = icms::$user -> getVar( 'uid' );
				$requestid = $modifysubmitter;
				$requestdate = time();
				$updated = mytube_cleanRequestVars( $_REQUEST, 'up_dated', time() );
				if ( $modifysubmitter == $submitter_array['submitter'] ) {
					$sql = 'INSERT INTO ' . icms::$xoopsDB -> prefix( 'mytube_mod' ) . ' (requestid, lid, cid, title, vidid, publisher, vidsource, description, modifysubmitter, requestdate, time, keywords, item_tag, picurl, hd)';
					$sql .= " VALUES ('', $lid, $cid, '$title', '$vidid', '$publisher', '$vidsource', '$descriptionb', '$modifysubmitter', '$requestdate', '$time', '$keywords', '$item_tag', '$picurl', '$hd')";
				if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
					$_error = icms::$xoopsDB -> error() . " : " . icms::$xoopsDB -> errno();
					icms::$logger -> handleError( E_USER_WARNING, $_error, __FILE__, __LINE__ );
				}
			} else {
				redirect_header( 'index.php', 2, _MD_MYTUBE_MODIFYNOTALLOWED );
			}

			$tags = array();
			$tags['MODIFYREPORTS_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/index.php?op=listModReq';
			$notification_handler = icms::handler('icms_data_notification');
			$notification_handler -> triggerEvent( 'global', 0, 'video_modify', $tags );

			$tags['WAITINGFILES_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/index.php?op=listNewvideos';
			$notification_handler -> triggerEvent( 'global', 0, 'video_submit', $tags );
			$notification_handler -> triggerEvent( 'category', $cid, 'video_submit', $tags );
				if ( $notifypub ) {
					include_once ICMS_ROOT_PATH . '/include/notification_constants.php';
					$notification_handler -> subscribe( 'video', $newid, 'approve', XOOPS_NOTIFICATION_MODE_SENDONCETHENDELETE );
				}
				$_message = _MD_MYTUBE_THANKSFORINFO;
			}
			redirect_header( 'index.php', 2, $_message );
		}
	} else {

		$approve = mytube_cleanRequestVars( $_REQUEST, 'approve', 0 );

		// Show disclaimer
	if ( icms::$module -> config['showdisclaimer'] && !isset( $_GET['agree'] ) && $approve == 0 ) {

			$xoopsOption['template_main'] = 'mytube_disclaimer.html';
			include_once ICMS_ROOT_PATH . '/header.php';

			$xoopsTpl -> assign( 'image_header', mytube_imageheader() );
			$xoopsTpl -> assign( 'disclaimer', icms_core_DataFilter::checkVar( icms::$module -> config['disclaimer'], 'html' ) );
			$xoopsTpl -> assign( 'cancel_location', ICMS_URL . '/modules/' . $mydirname . '/index.php' );
			$xoopsTpl -> assign( 'link_disclaimer', false );
			$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname') );
			if ( !isset( $_REQUEST['lid'] ) ) {
				$xoopsTpl -> assign( 'agree_location', ICMS_URL . '/modules/' . $mydirname . '/submit.php?agree=1' );
			} elseif ( isset( $_REQUEST['lid'] ) ) {
				$lid = intval( $_REQUEST['lid'] );
				$xoopsTpl -> assign( 'agree_location', ICMS_URL . '/modules/' . $mydirname . '/submit.php?agree=1&amp;lid=' . intval( $lid ) );
			}
			include ICMS_ROOT_PATH . '/footer.php';
			exit();
		}
		
		include_once ICMS_ROOT_PATH . '/header.php';
		if ( mytube_imageheader() != '' ) {
			echo '<div style="clear: both; text-align: center;">' . mytube_imageheader() . '</div><br />';
		}
		echo '<div>' . _MD_MYTUBE_SUB_SNEWMNAMEDESC . '</div>';

		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . intval( $lid );
		$video_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

		$lid = $video_array['lid'] ? $video_array['lid'] : 0;
		$cid = $video_array['cid'] ? $video_array['cid'] : 0;
		$title = $video_array['title'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['title'] ) : '';
		$vidid = $video_array['vidid'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['vidid'] ) : '';
		$publisher = $video_array['publisher'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['publisher'] ) : '';
		$screenshot = $video_array['screenshot'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['screenshot'] ) : '';
		$descriptionb = $video_array['description'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['description'] ) : '';
		$published = $video_array['published'] ? $video_array['published'] : 0;
		$expired = $video_array['expired'] ? $video_array['expired'] : 0;
		$updated = $video_array['updated'] ? $video_array['updated'] : 0;
		$offline = $video_array['offline'] ? $video_array['offline'] : 0;
		$vidsource = $video_array['vidsource'] ? $video_array['vidsource'] : 0;
		$ipaddress = $video_array['ipaddress'] ? $video_array['ipaddress'] : 0;
		$notifypub = $video_array['notifypub'] ? $video_array['notifypub'] : 0;
		$vidrating = $video_array['vidrating'] ? $video_array['vidrating'] : 1;
		$time = $video_array['time'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['time'] ) : '0:00:00';
		$keywords = $video_array['keywords'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['keywords'] ) : '';
		$item_tag = $video_array['item_tag'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['item_tag'] ) : '';
		$picurl = $video_array['picurl'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['picurl'] ) : 'http://';
		$hd = $video_array['hd'] ? $video_array['hd'] : 0;

		$sform = new icms_form_Theme( _MD_MYTUBE_SUBMITCATHEAD, 'storyform', '' );
		$sform -> setExtra( 'enctype="multipart/form-data"' );

		mytube_noindexnofollow();

		// Video title form
		$sform -> addElement( new icms_form_elements_Text( _MD_MYTUBE_FILETITLE, 'title', 70, 255, $title ), true );

		// Video source form
		$vidsource_array = array(	0 => _MD_MYTUBE_YOUTUBE,
									1 => _MD_MYTUBE_METACAFE,
									2 => _MD_MYTUBE_IFILM,
									3 => _MD_MYTUBE_PHOTOBUCKET,
									4 => _MD_MYTUBE_VIDDLER,
									//100 => _MD_MYTUBE_GOOGLEVIDEO,
									101 => _MD_MYTUBE_MYSPAVETV,
									102 => _MD_MYTUBE_DAILYMOTION,
									103 => _MD_MYTUBE_BLIPTV,
									104 => _MD_MYTUBE_CLIPFISH,
									105 => _MD_MYTUBE_LIVELEAK,
									106 => _MD_MYTUBE_MAKTOOB,
									107 => _MD_MYTUBE_VEOH,
									108 => _MD_MYTUBE_VIMEO,
									109 => _MD_MYTUBE_MEGAVIDEO,
									110 => _MD_MYTUBE_NATIOGEO );
		$vidsource_select = new icms_form_elements_Select( _MD_MYTUBE_VIDSOURCE, 'vidsource', $vidsource );
		$vidsource_select -> addOptionArray( $vidsource_array );
		$sform -> addElement( $vidsource_select, false );

		// Video code form
		$videocode = new icms_form_elements_Text( _MD_MYTUBE_DLVIDID, 'vidid', 70, 512, $vidid );
		$videocode -> setDescription( '<small>' . _MD_MYTUBE_VIDEO_DLVIDIDDSC . '</small>');
		$sform -> addElement( $videocode, true );
		$sform -> addElement( new icms_form_elements_Label( '', _MD_MYTUBE_VIDEO_DLVIDID_NOTE ) );

		// HD
		$highdef = new icms_form_elements_Radioyn( _MD_MYTUBE_VIDEO_HD, 'hd', $hd, _YES, _NO );
		$highdef -> setDescription( '<small>' . _MD_MYTUBE_VIDEO_HDDSC . '</small>' );
		$sform -> addElement( $highdef );

		// Picture url form
		$picurl = new icms_form_elements_Text( _MD_MYTUBE_VIDEO_PICURL, 'picurl', 70, 255, $picurl );
		$picurl -> setDescription( '<span style="font-weight: normal;">' . _MD_MYTUBE_VIDEO_PICURLNOTE . '</span>' );
		$sform -> addElement( $picurl, false );

		// Video publisher form
		$sform -> addElement( new icms_form_elements_Text( _MD_MYTUBE_VIDEO_PUBLISHER, 'publisher', 70, 255, $publisher ), true );

		// Category tree
		$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );
		$submitcats = array();
		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' ORDER BY title';
		$result = icms::$xoopsDB -> query( $sql );
		while ( $myrow = icms::$xoopsDB -> fetchArray( $result ) ) {
			if ( true == mytube_checkgroups( $myrow['cid'], 'MyTubeSubPerm' ) ) {
				$submitcats[$myrow['cid']] = $myrow['title'];
			}
		}

		// Video time form
		$timeform = new icms_form_elements_Text( _MD_MYTUBE_TIME, 'time', 7, 7, $time );
		$timeform -> setDescription( '<small>(h:mm:ss)</small>' );
		$sform -> addElement( $timeform, false );

		// Video category form
		ob_start();
			$mytree -> makeMySelBox( 'title', 'title', $cid, 0 );
			$sform -> addElement( new icms_form_elements_Label( _MD_MYTUBE_CATEGORYC, ob_get_contents() ) );
		ob_end_clean();

		// Video description form
		$editor = mytube_getWysiwygForm( _MD_MYTUBE_DESCRIPTIONC, 'descriptionb', $descriptionb );
		$sform -> addElement( $editor, true );

		// Meta keywords form
		$keywords = new icms_form_elements_TextArea( _MD_MYTUBE_KEYWORDS, 'keywords', $keywords, 5, 50, false );
		$keywords -> setDescription( '<span style="font-size: smaller;">' . _MD_MYTUBE_KEYWORDS_NOTE . '</span>' );
		$sform -> addElement( $keywords );

		if ( icms::$module -> config['usercantag'] == 1 ) {
			// Insert tags if Tag-module is installed
			if ( mytube_tag_module_included() ) {
				include_once ICMS_ROOT_PATH . '/modules/tag/include/formtag.php';
				$text_tags = new XoopsFormTag( 'item_tag', 70, 255, $video_array['item_tag'], 0 );
				$sform -> addElement( $text_tags );
			}
		} else {
			$sform -> addElement( new icms_form_elements_Hidden( 'item_tag', $video_array['item_tag'] ) ) ;
		}

		$submitter2 = ( is_object( icms::$user ) && !empty( icms::$user ) ) ? icms::$user -> getVar( 'uid' ) : 0;
		if ( $submitter2 > 0 ) {
			$option_tray = new icms_form_elements_Tray( _MD_MYTUBE_OPTIONS, '<br />' );
			if ( !$approve ) {
				$notify_checkbox = new icms_form_elements_Checkbox( '', 'notifypub' );
				$notify_checkbox -> addOption( 1, _MD_MYTUBE_NOTIFYAPPROVE );
				$option_tray -> addElement( $notify_checkbox );
			} else {
			$sform -> addElement( new icms_form_elements_Hidden( 'notifypub', 0 ) );
			}
		}

		if ( true == mytube_checkgroups( $cid, 'MyTubeAppPerm' ) && $lid > 0 ) {
			$approve_checkbox = new icms_form_elements_Checkbox( '', 'approve', $approve );
			$approve_checkbox -> addOption( 1, _MD_MYTUBE_APPROVE );
			$option_tray -> addElement( $approve_checkbox );
		} else if ( true == mytube_checkgroups( $cid, 'MyTubeAutoApp' ) ) {
			$sform -> addElement( new icms_form_elements_Hidden( 'approve', 1 ) );
		} else {
			$sform -> addElement( new icms_form_elements_Hidden( 'approve', 0 ) );
		}
		$sform -> addElement( $option_tray );
		
		// Captcha
		if ( icms::$module -> config['captcha'] == true && $icmsConfigUser['use_captcha'] == true ) {
			$sform -> addElement( new icms_form_elements_Captcha( _SECURITYIMAGE_GETCODE, 'scode' ), true ); 
		}

		$button_tray = new icms_form_elements_Tray( '', '' );
		$button_tray -> addElement( new icms_form_elements_Button( '', 'submit', _SUBMIT, 'submit' ) );
		$button_tray -> addElement( new icms_form_elements_Hidden( 'lid', $lid ) );

		$sform -> addElement( $button_tray );
		$sform -> display();

		include ICMS_ROOT_PATH . '/footer.php';
	}
} else {
	redirect_header( 'index.php', 2, _MD_MYTUBE_NOPERMISSIONTOPOST );
	exit();
} 
?>