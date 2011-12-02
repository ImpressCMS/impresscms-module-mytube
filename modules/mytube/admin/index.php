<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/index.php
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

$op = mytube_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = intval( mytube_cleanRequestVars( $_REQUEST, 'lid', 0 ) );
$rootpath = ( isset( $_GET['rootpath'] ) ) ? intval( $_GET['rootpath'] ) : 0;

function edit( $lid = 0 ) {
	global $mytubemyts, $mytree, $imagearray;
	$mydirname = basename( dirname(  dirname( __FILE__ ) ) );
	$dirarray  = array( 1 => icms::$module -> config['catimage'], 2 => icms::$module -> config['mainimagedir'], 3 => icms::$module -> config['videoimgdir'] );
	$namearray = array( 1 => _AM_MYTUBE_VIDEO_CATIMAGE , 2 => _AM_MYTUBE_VIDEO_MAINIMAGEDIR, 3 => _AM_MYTUBE_VIDEO_CATVIDEOIMG );
	$listarray = array( 1 => _AM_MYTUBE_VIDEO_FCATIMAGE , 2 => _AM_MYTUBE_VIDEO_FMAINIMAGEDIR, 3 => _AM_MYTUBE_VIDEO_FCATVIDEOIMG );
	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid;
	if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
		icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
		return false;
	}
	$video_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
	$directory = icms::$module -> config['videoimgdir'];
	$lid = $video_array['lid'] ? $video_array['lid'] : 0;
	$cid = $video_array['cid'] ? $video_array['cid'] : 0;
	$title = $video_array['title'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['title'] ) : '';
	$vidid = $video_array['vidid'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['vidid'] ) : '';
	$picurl = $video_array['picurl'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['picurl'] ) : 'http://';
	$publisher = $video_array['publisher'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['publisher'] ) : '';
	$screenshot = $video_array['screenshot'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['screenshot'] ) : '';
	$descriptionb = $video_array['description'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['description'] ) : '';
	$published = $video_array['published'] ? $video_array['published'] : time();
	$expired = $video_array['expired'] ? $video_array['expired'] : 0;
	$updated = $video_array['updated'] ? $video_array['updated'] : 0;
	$offline = $video_array['offline'] ? $video_array['offline'] : 0;
	$vidsource = $video_array['vidsource'] ? $video_array['vidsource'] : 0;
	$ipaddress = $video_array['ipaddress'] ? $video_array['ipaddress'] : 0;
	$notifypub = $video_array['notifypub'] ? $video_array['notifypub'] : 0;
	$time = $video_array['time'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['time'] ) : '0:00:00';
	$keywords = $video_array['keywords'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['keywords'] ) : '';
	$item_tag = $video_array['item_tag'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['item_tag'] ) : '';
	$nice_url = $video_array['nice_url'] ? $mytubemyts -> htmlSpecialCharsStrip( $video_array['nice_url'] ) : '';
	$hd = $video_array['hd'] ? $video_array['hd'] : 0;

	icms_cp_header();
	mytube_adminmenu( 2, _AM_MYTUBE_MVIDEOS );

	if ( $lid ) {
		$_vote_data = mytube_getVoteDetails( $lid );
		$text_info = '
			<table width="100%" style="font-size: 90%;">
				<tr>
				<td style="width: 25%; border-right: #E8E8E8 1px solid; vertical-align: top; padding-left: 10px;">
					<div><b>' . _AM_MYTUBE_VIDEO_ID . ' </b>' . $lid . '</div>
					<div><b>' . _AM_MYTUBE_MINDEX_SUBMITTED . ': </b>' . mytube_time( formatTimestamp( $video_array['date'], icms::$module -> config['dateformat'] ) ) . '</div>
					<div><b>' . _AM_MYTUBE_MOD_MODIFYSUBMITTER . ' </b>' . icms_member_user_Handler::getUserLink( $video_array['submitter'] ) . '</div>
					<div><b>' . _AM_MYTUBE_VIDEO_IP . ' </b>' . $ipaddress . '</div>
					<div><b>' . _AM_MYTUBE_VIDEO_VIEWS . ' </b>' . $video_array['hits'] . '</div>
				</td>
				<td style="width: 25%; border-right: #E8E8E8 1px solid; vertical-align: top; padding-left: 10px;">
					<div><b>' . _AM_MYTUBE_VOTE_TOTALRATE . ': </b>' . intval( $_vote_data['rate'] ) . '</div>
					<div><b>' . _AM_MYTUBE_VOTE_USERAVG . ': </b>' . intval( round( $_vote_data['avg_rate'], 2 ) ) . '</div>
					<div><b>' . _AM_MYTUBE_VOTE_MAXRATE . ': </b>' . intval( $_vote_data['min_rate'] ) . '</div>
					<div><b>' . _AM_MYTUBE_VOTE_MINRATE . ': </b>' . intval( $_vote_data['max_rate'] ) . '</div>
				</td>
				<td style="width: 25%; border-right: #E8E8E8 1px solid; vertical-align: top; padding-left: 10px;">
					<div><b>' . _AM_MYTUBE_VOTE_MOSTVOTEDTITLE . ': </b>' . intval( $_vote_data['max_title'] ) . '</div>
					<div><b>' . _AM_MYTUBE_VOTE_LEASTVOTEDTITLE . ': </b>' . intval( $_vote_data['min_title'] ) . '</div>
					<div><b>' . _AM_MYTUBE_VOTE_REGISTERED . ': </b>' . ( intval( $_vote_data['rate'] - $_vote_data['null_ratinguser'] ) ) . '</div>
					<div><b>' . _AM_MYTUBE_VOTE_NONREGISTERED . ': </b>' . intval( $_vote_data['null_ratinguser'] ) . '</div>
				</td>
				<td style="width: 25%; vertical-align: top; padding-left: 10px;">
					<div>' . mytube_videothumb( $video_array['vidid'], $video_array['title'], $video_array['vidsource'], $video_array['picurl'], $video_array['screenshot'] ) . '</div>
				</td>
			 </tr>
			</table>';
		echo '<fieldset style="border: #E8E8E8 1px solid;">
				<legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_MYTUBE_INFORMATION . '</legend>
				<div style="padding: 12px;">' . $text_info . '</div>
			</fieldset>
			<br />';
	}
	unset( $_vote_data );

	$caption = ( $lid ) ? _AM_MYTUBE_VIDEO_MODIFYFILE : _AM_MYTUBE_VIDEO_CREATENEWFILE;

	$sform = new icms_form_Theme( $caption, 'storyform', '' );
	$sform -> setExtra( 'enctype="multipart/form-data"' );

// Video title
	$sform -> addElement( new icms_form_elements_Text( _AM_MYTUBE_VIDEO_TITLE, 'title', 70, 100, $title ), true );
	
// Video nice url	
	$niceform = new icms_form_elements_Text( _AM_MYTUBE_NICEURL, 'nice_url', 70, 100, $nice_url );
	$niceform -> setDescription( '<small>' . _AM_MYTUBE_NICEURLDSC . '</small>' );
	$sform -> addElement( $niceform, false );

// Video source
	$vidsource_array = array(	0 => _AM_MYTUBE_YOUTUBE,
								1 => _AM_MYTUBE_METACAFE,
								2 => _AM_MYTUBE_IFILM,
								3 => _AM_MYTUBE_PHOTOBUCKET,
								4 => _AM_MYTUBE_VIDDLER,
								// 100 => _AM_MYTUBE_GOOGLEVIDEO,
								101 => _AM_MYTUBE_MYSPAVETV,
								102 => _AM_MYTUBE_DAILYMOTION,
								103 => _AM_MYTUBE_BLIPTV,
								104 => _AM_MYTUBE_CLIPFISH,
								105 => _AM_MYTUBE_LIVELEAK,
								106 => _AM_MYTUBE_MAKTOOB,
								107 => _AM_MYTUBE_VEOH,
								108 => _AM_MYTUBE_VIMEO,
								109 => _AM_MYTUBE_MEGAVIDEO,
								110 => _AM_MYTUBE_NATIOGEO
							);		// #200 is reserved for MyTube's internal FLV player
	$vidsource_select = new icms_form_elements_Select( _AM_MYTUBE_VIDSOURCE, 'vidsource', $vidsource );
	$vidsource_select -> addOptionArray( $vidsource_array );
	$sform -> addElement( $vidsource_select );

// Video code
	$videocode = new icms_form_elements_Text( _AM_MYTUBE_VIDEO_DLVIDID, 'vidid', 70, 512, $vidid );
	$videocode -> setDescription( '<small>' . _AM_MYTUBE_VIDEO_DLVIDIDDSC . '</small>' );
	$sform -> addElement( $videocode, true );
	$note = _AM_MYTUBE_VIDEO_DLVIDID_NOTE;
	$sform -> addElement( new icms_form_elements_Label( '', $note ) );
	
// HD
	$highdef = new icms_form_elements_Radioyn( _AM_MYTUBE_VIDEO_HD, 'hd', $hd, ' ' . _YES . '', ' ' . _NO . '' );
	$highdef -> setDescription( '<small>' . _AM_MYTUBE_VIDEO_HDDSC . '</small>' );
	$sform -> addElement( $highdef );

// Picture url
	$picurl = new icms_form_elements_Text( _AM_MYTUBE_VIDEO_PICURL, 'picurl', 70, 255, $picurl );
	$picurl -> setDescription( '<span style="font-weight: normal;font-size: smaller;">' . _AM_MYTUBE_VIDEO_PICURLNOTE . '</span>' );
	$sform -> addElement( $picurl, false );

// Video publisher
	$sform -> addElement( new icms_form_elements_Text( _AM_MYTUBE_VIDEO_PUBLISHER, 'publisher', 70, 255, $publisher ), true );

// Time form
	$timeform = new icms_form_elements_Text( _AM_MYTUBE_TIME, 'time', 7, 7, $time );
	$timeform -> setDescription( '<small>(h:mm:ss)</small>' );
	$sform -> addElement( $timeform, false );

// Category menu
	ob_start();
		$mytree -> makeMySelBox( 'title', 'title', $cid, 0 );
		$sform -> addElement( new icms_form_elements_Label( _AM_MYTUBE_VIDEO_CATEGORY, ob_get_contents() ) );
	ob_end_clean();

// Description form
	$editor = mytube_getWysiwygForm( _AM_MYTUBE_VIDEO_DESCRIPTION, 'descriptionb', $descriptionb );
	$sform -> addElement( $editor, false );

// Meta keywords form
	$keywords = new icms_form_elements_TextArea( _AM_MYTUBE_KEYWORDS, 'keywords', $keywords, 5, 50, false );
	$keywords -> setDescription( '<span style="font-size: smaller;">' . _AM_MYTUBE_KEYWORDS_NOTE . '</span>' );
	$sform -> addElement($keywords);

// Insert tags if Tag-module is installed
	if ( mytube_tag_module_included() ) {
		include_once ICMS_ROOT_PATH . '/modules/tag/include/formtag.php';
		$text_tags = new XoopsFormTag( 'item_tag', 70, 255, $video_array['item_tag'], 0 );
		$sform -> addElement( $text_tags );
	} else {
		$sform -> addElement( new icms_form_elements_Hidden( 'item_tag', $video_array['item_tag'] ) ) ;
	}

// Video Publish Date
	$sform -> addElement( new icms_form_elements_Datetime( _AM_MYTUBE_VIDEO_SETPUBLISHDATE, 'published', $size = 15, $published ));

	if ( $lid ) {
		$sform -> addElement( new icms_form_elements_Hidden( 'was_published', $published ) );
		$sform -> addElement( new icms_form_elements_Hidden( 'was_expired', $expired ) );
	}

// Video Expire Date
	$isexpired = ( $expired > time() ) ? 1: 0 ;
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

	$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' WHERE lid=' . $lid );
	list ( $broken_count ) = icms::$xoopsDB -> fetchRow( $result );
	if ( $broken_count > 0 ) {
		$video_updated_radio = new icms_form_elements_Radioyn( _AM_MYTUBE_VIDEO_DELEDITMESS, 'delbroken', 1, ' ' . _YES . '', ' ' . _NO . '' );
		$sform -> addElement( $editmess_radio );
	}

	if ( $lid && $published == 0 ) {
		$approved = ( $published == 0 ) ? 0 : 1;
		$approve_checkbox = new icms_form_elements_Checkbox( _AM_MYTUBE_VIDEO_EDITAPPROVE, "approved", 1 );
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

	case 'status_off':
		$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'mytube_videos' ) . " SET offline='1' WHERE lid=" . $lid;
		if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
		redirect_header( 'index.php', 1, _AM_MYTUBE_MSG_OFFLINE );
		break;

	case 'status_on':
		$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'mytube_videos' ) . " SET offline='0' WHERE lid=" . $lid;
		if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
		redirect_header( 'index.php', 1, _AM_MYTUBE_MSG_ONLINE );
		break;

	case 'save':
		$groups = isset( $_POST['groups'] ) ? $_POST['groups'] : array();
		$lid = ( !empty( $_POST['lid'] ) ) ? $_POST['lid'] : 0;
		$cid = ( !empty( $_POST['cid'] ) ) ? $_POST['cid'] : 0;
		$vidrating = ( !empty( $_POST['vidrating'] ) ) ? $_POST['vidrating'] : 6;
		$status = ( !empty( $_POST['status'] ) ) ? $_POST['status'] : 2;

		// Get data from form
		$vidid = icms_core_DataFilter::addSlashes( trim( $_POST['vidid'] ) );
		$picurl = ( $_POST['picurl'] != 'http://' ) ? icms_core_DataFilter::addSlashes( $_POST['picurl'] ) : '';
		$title = icms_core_DataFilter::addSlashes( trim( $_POST['title'] ) );
		$descriptionb = icms_core_DataFilter::addSlashes( trim( $_POST['descriptionb'] ) );
		$time = icms_core_DataFilter::addSlashes( trim( $_POST['time'] ) );
		$keywords = icms_core_DataFilter::addSlashes( trim( $_POST['keywords'] ) );
		$item_tag = icms_core_DataFilter::addSlashes( trim( $_POST['item_tag'] ) );
		$submitter = icms::$user -> getVar( 'uid' );
		$publisher = icms_core_DataFilter::addSlashes( trim( $_POST['publisher'] ) );
		$vidsource = ( !empty( $_POST['vidsource'] ) ) ? $_POST['vidsource'] : 0;
		$updated = ( isset( $_POST['was_published'] ) && $_POST['was_published'] == 0 ) ? 0 : time();
		$published =  strtotime($_POST['published']['date'] ) + $_POST['published']['time'];
		$nice_url = icms_core_DataFilter::addSlashes( trim( $_POST['nice_url'] ) );
		$hd = ( $_POST['hd'] == 1 ) ? 1 : 0;

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
			$expiredate = '0';
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

			$sql = "INSERT INTO " . icms::$xoopsDB -> prefix( 'mytube_videos' ) . " (lid, cid, title, vidid, screenshot, submitter, publisher, status, date, hits, rating, votes, comments, vidsource, published, expired, updated, offline, description, ipaddress, notifypub, vidrating, time, keywords, item_tag, picurl, nice_url, hd )";
			$sql .= " VALUES 	('', $cid, '$title', '$vidid', '', '$submitter', '$publisher', '$status', '$date', 0, 0, 0, 0, '$vidsource', '$published', '$expiredate', '$updated', '$offline', '$descriptionb', '$ipaddress', '0', '$vidrating', '$time', '$keywords', '$item_tag', '$picurl', '$nice_url', '$hd')";

			// increase user post counter
			user_posts( $submitter, 1 );

		} else {

			$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'mytube_videos' ) . " SET cid = $cid, title='$title', vidid='$vidid', screenshot='', publisher='$publisher', status='$status', vidsource='$vidsource', published='$published', expired='$expiredate', updated='$updated', offline='$offline', description='$descriptionb', vidrating='$vidrating', time='$time', keywords='$keywords', item_tag='$item_tag', picurl='$picurl', nice_url='$nice_url', hd='$hd' WHERE lid=" . $lid;
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
			$tags['VIDEO_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?lid=' . $newid;
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
			$tags['VIDEO_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?lid=' . $lid;
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

	case 'delete':
		if ( mytube_cleanRequestVars( $_REQUEST, 'confirm', 0 ) ) {
			$title = mytube_cleanRequestVars( $_REQUEST, 'title', 0 );
			
			$result = 'SELECT submitter FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid;
			list( $submitter ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $result ) );
			
			// delete video
			$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}
			
			// delete altcat
			$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_altcat' ) . ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}

			// delete vote data
			$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_votedata' ) . ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}

			// delete broken data
			if ( mytube_cleanRequestVars( $_REQUEST, 'delbroken', 1 ) ) {
				$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' WHERE lid=' . $lid;
				if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
					icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
					return false;
				}
			}

			// decrease user post counter
			user_posts( $submitter, -1 );

			// delete comments
			xoops_comment_delete( icms::$module -> getVar( 'mid' ), $lid );
			redirect_header( 'index.php', 1, sprintf( _AM_MYTUBE_VIDEO_FILEWASDELETED, $title ) );
			exit();
		} else {
			$sql = 'SELECT lid, title, item_tag, vidid FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid;
			if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
				icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
				return false;
			}
			list( $lid, $title ) = icms::$xoopsDB -> fetchrow( $result );
			$item_tag = $result['item_tag'];

			icms_cp_header();
			mytube_adminmenu( 1, _AM_MYTUBE_BINDEX );

			icms_core_Message::confirm( array( 'op' => 'delete', 'lid' => $lid, 'confirm' => 1, 'title' => $title ), 'index.php', _AM_MYTUBE_VIDEO_REALLYDELETEDTHIS . '<br /><br>' . $title, _DELETE );

			// Remove item_tag from Tag-module
			$tagupdate = mytube_tagupdate( $lid, $item_tag );

			icms_cp_footer();
		}
		break;

	case 'delvote':
		$rid = mytube_cleanRequestVars( $_REQUEST, 'rid', 0 );
		$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_votedata' ) . ' WHERE ratingid=' . $rid;
		if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
			icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
			return false;
		}
		mytube_updaterating( $rid );
		redirect_header( 'index.php', 1, _AM_MYTUBE_VOTE_VOTEDELETED );
		break;

		case 'main':
		default:

		$start  = mytube_cleanRequestVars( $_REQUEST, 'start', 0 );
		$start1 = mytube_cleanRequestVars( $_REQUEST, 'start1', 0 );
		$start2 = mytube_cleanRequestVars( $_REQUEST, 'start2', 0 );
		$start3 = mytube_cleanRequestVars( $_REQUEST, 'start3', 0 );
		$start4 = mytube_cleanRequestVars( $_REQUEST, 'start4', 0 );
		$start5 = mytube_cleanRequestVars( $_REQUEST, 'start5', 0 );
		$totalcats = mytube_totalcategory();

		$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) );
		list( $totalbrokenvideos ) = icms::$xoopsDB -> fetchRow( $result );
		$result2 = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_mod' ) );
		list( $totalmodrequests ) = icms::$xoopsDB -> fetchRow( $result2 );
		$result3 = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published = 0' );
		list( $totalnewvideos ) = icms::$xoopsDB -> fetchRow( $result3 );
		$result4 = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published > 0' );
		list( $totalvideos ) = icms::$xoopsDB -> fetchRow( $result4 );

		icms_cp_header();
		mytube_adminmenu( 1, _AM_MYTUBE_BINDEX );
		$style = 'border: #CCCCCC 1px solid; padding: 4px; background-color: #E8E8E8; font-weight: bold; font-size: smaller;';
		echo '
			<fieldset style="border: #E8E8E8 1px solid;">
			<legend style="display: inline; font-weight: bold; color: #0A3760; font-size: 12px;">' ._AM_MYTUBE_MINDEX_VIDEOSUMMARY . '</legend>
			<div style="padding: 12px;">
				<span style="' . $style . '"><a href="category.php">' . _AM_MYTUBE_SCATEGORY . '</a>' . $totalcats . '</span>
				<span style="' . $style . '"><a href="index.php">' . _AM_MYTUBE_SFILES . '</a>' . $totalvideos . '</span>
				<span style="' . $style . '"><a href="newvideos.php">' . _AM_MYTUBE_SNEWFILESVAL . '</a>' . $totalnewvideos . '</span>
				<span style="' . $style . '"><a href="modifications.php">' . _AM_MYTUBE_SMODREQUEST . '</a>' . $totalmodrequests . '</span>
				<span style="' . $style . '"><a href="brokenvideo.php">' . _AM_MYTUBE_SBROKENSUBMIT . '</a>' . $totalbrokenvideos . '</span>
			</div>
			</fieldset>';

		if ( $totalcats > 0 ) {
			$sform = new icms_form_Theme( _AM_MYTUBE_CCATEGORY_MODIFY, 'category', 'category.php' );
			ob_start();
				$mytree -> makeMySelBox( 'title', 'title' );
				$sform -> addElement( new icms_form_elements_Label( _AM_MYTUBE_CCATEGORY_MODIFY_TITLE, ob_get_contents() ) );
			ob_end_clean();
			$dup_tray = new icms_form_elements_Tray( '', '' );
			$dup_tray -> addElement( new icms_form_elements_Hidden( 'op', 'modCat' ) );
			$butt_dup = new icms_form_elements_Button( '', '', _AM_MYTUBE_BMODIFY, 'submit' );
			$butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'modCat\'"' );
			$dup_tray -> addElement( $butt_dup );
			$butt_dupct = new icms_form_elements_Button( '', '', _AM_MYTUBE_BDELETE, 'submit' );
			$butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'del\'"' );
			$dup_tray -> addElement( $butt_dupct );
			$sform -> addElement( $dup_tray );
			$sform -> display();
		}

		if ( $totalvideos > 0 ) {
			$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' ORDER BY lid DESC';
			$published_array = icms::$xoopsDB -> query( $sql, icms::$module -> config['admin_perpage'], $start );
			$published_array_count = icms::$xoopsDB -> getRowsNum( icms::$xoopsDB -> query( $sql ) );
			echo '<br /><div><span style="float: left; font-weight: bold; color: #0A3760;">' . _AM_MYTUBE_MINDEX_PUBLISHEDVIDEO . '</span>' . mytube_videolistpagenav( $published_array_count, $start, 'art', '', 'right' ) . '</div>';
			echo '<table width="100%" cellspacing="1" class="outer" summary>
					<tr style="text-align: center; font-size: smaller;">
						<th>' . _AM_MYTUBE_MINDEX_ID . '</th>
						<th style="text-align: left;">&nbsp;<b>' . _AM_MYTUBE_MINDEX_TITLE . '</th>
						<th>' . _AM_MYTUBE_VIDSOURCE2 . '</th>
						<th>' . _AM_MYTUBE_CATTITLE . '</th>
						<th>' . _AM_MYTUBE_MINDEX_POSTER . '</th>
						<th>' . _AM_MYTUBE_MINDEX_PUBLISH . '</th>
						<th>' . _AM_MYTUBE_MINDEX_EXPIRE . '</th>
						<th>' . _AM_MYTUBE_MINDEX_ONLINE . '</th>
						<th>' . _AM_MYTUBE_MINDEX_ACTION . '</th>
					</tr>';
			if ( $published_array_count > 0 ) {
				while ( $published = icms::$xoopsDB -> fetchArray( $published_array ) ) {
					mytube_videolistbody( $published );
				}
				echo '</table>';
				mytube_videolistpagenav( $published_array_count, $start, 'art', '', 'right' );
			} else {
				echo '<tr style="text-align: center;">
						<td class="head" colspan="9">' . _AM_MYTUBE_MINDEX_NOVIDEOSFOUND . '</td>
					  </tr>';
			}
		}
		icms_cp_footer();
		break;
}
?>