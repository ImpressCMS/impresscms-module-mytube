<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: admin/modifications.php
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

global $mytree;

$op = mytube_cleanRequestVars( $_REQUEST, 'op', '' );
$requestid = mytube_cleanRequestVars( $_REQUEST, 'requestid', 0 );

switch ( strtolower( $op ) ) {
	case 'listmodreqshow':

		icms_cp_header();
		mytube_adminmenu( '', '<br />' . _AM_MYTUBE_MOD_MODREQUESTS );

		$sql = 'SELECT modifysubmitter, requestid, lid, cid, title, vidid, submitter, publisher, vidsource, description, time, keywords, item_tag, picurl FROM ' . icms::$xoopsDB -> prefix( 'mytube_mod' ) . ' WHERE requestid=' . $requestid;
		$mod_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
		unset( $sql );

		$sql = 'SELECT submitter, lid, cid, title, vidid, submitter, publisher, vidsource, description, time, keywords, item_tag, picurl FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $mod_array['lid'] ;
		$orig_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
		unset( $sql );

		$orig_user = new icmsUser( $orig_array['submitter'] );
		$submittername = icms_member_user_Handler::getUserLink( $orig_array['submitter'] );
		$submitteremail = $orig_user -> getUnameFromId( 'email' );

		echo '<div><b>' . _AM_MYTUBE_MOD_MODPOSTER . '</b> ' . $submittername . '</div>';
		$not_allowed = array( 'lid', 'submitter', 'requestid', 'modifysubmitter' );
		$sform = new icms_form_Theme( _AM_MYTUBE_MOD_ORIGINAL, 'storyform', 'index.php' );
		foreach ( $orig_array as $key => $content ) {
			if ( in_array( $key , $not_allowed ) ) { continue; }
			$lang_def = constant( '_AM_MYTUBE_MOD_' . strtoupper( $key ) );
			if ( $key == 'cid' ) {
				$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . $content;
				$row = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
				$content = $row['title'];
			}
			if ( $key == 'vidsource' ) {
				include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar('dirname') . '/include/video.php';
				$content = mytube_returnsource( $content );
			}
			$sform -> addElement( new icms_form_elements_Label( $lang_def, $content ) );
		}
		$sform -> display();

		$orig_user = new icms::$user -> getVar( $mod_array['modifysubmitter'] );
		$submittername = icms_member_user_Handler::getUserLink( $mod_array['modifysubmitter'] );
		$submitteremail = $orig_user -> getUnameFromId('email' );

		echo '<div><b>' . _AM_MYTUBE_MOD_MODIFYSUBMITTER . '</b> ' . $submittername . '</div>';
		$sform = new icms_form_Theme( _AM_MYTUBE_MOD_PROPOSED, 'storyform', 'modifications.php' );
		foreach ( $mod_array as $key => $content ) {
			if ( in_array( $key, $not_allowed ) ) { continue; }
			$lang_def = constant( '_AM_MYTUBE_MOD_' . strtoupper( $key ) );
			if ( $key == 'cid' ) {
				$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . $content;
				$row = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
				$content = $row['title'];
			}
			if ( $key == 'vidsource') {
				include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar('dirname') . '/include/video.php';
				$content = mytube_returnsource( $content );
			}
			$sform -> addElement( new icms_form_elements_Label( $lang_def, $content ) );
		}
		$button_tray = new icms_form_elements_Tray( '', '' );
		$button_tray -> addElement( new icms_form_elements_Hidden( 'requestid', $requestid ) );
		$button_tray -> addElement( new icms_form_elements_Hidden( 'lid', $mod_array['requestid'] ) );
		$hidden = new icms_form_elements_Hidden( 'op', 'changemodreq' );
		$button_tray -> addElement( $hidden );
		if ( $mod_array ) {
			$butt_dup = new icms_form_elements_Button( '', '', _AM_MYTUBE_BAPPROVE, 'submit' );
			$butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'changemodreq\'"' );
			$button_tray -> addElement( $butt_dup );
		}
		$butt_dupct2 = new icms_form_elements_Button( '', '', _AM_MYTUBE_BIGNORE, 'submit' );
		$butt_dupct2 -> setExtra( 'onclick="this.form.elements.op.value=\'ignoremodreq\'"' );
		$button_tray -> addElement( $butt_dupct2 );
		$sform -> addElement( $button_tray );
		$sform -> display();
		icms_cp_footer();
		break;

	case 'changemodreq':
		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_mod' ) . ' WHERE requestid=' . $requestid;
		$video_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
		$lid = $video_array['lid'];
		$cid = $video_array['cid'];
		$title = $video_array['title'];
		$publisher = icms::$user -> getVar( 'uname' );
		$screenshot = $video_array['screenshot'];
		$vidsource = $video_array['vidsource'];
		$descriptionb = $video_array['description'];
		$submitter = $video_array['modifysubmitter'];
		$keywords = $video_array['keywords'];
		$vidid = $video_array['vidid'];
		$item_tag = $video_array['item_tag'];
		$picurl = $video_array['picurl'];
		$title = $video_array['title'];
		$time = $video_array['time'];
		$updated = time();

		icms::$xoopsDB -> query( "UPDATE " . icms::$xoopsDB -> prefix( 'mytube_videos' ) . " SET cid = $cid, title='$title', vidid='$vidid', screenshot='', publisher='$publisher', vidsource='$vidsource', description='$descriptionb', time='$time', keywords='$keywords', item_tag='$item_tag', picurl='$picurl', updated='$updated' WHERE lid = " . $lid );
		$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_mod' ) . ' WHERE requestid=' . $requestid;
		$result = icms::$xoopsDB -> query( $sql );
		redirect_header( 'index.php', 1, _AM_MYTUBE_MOD_REQUPDATED );
		break;

	case 'ignoremodreq':
		$sql = sprintf( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_mod' ) . ' WHERE requestid=' . $requestid );
		icms::$xoopsDB -> query( $sql );
		redirect_header( 'index.php', 1, _AM_MYTUBE_MOD_REQDELETED );
		break;

	case 'main':
	default:
		$start = isset( $_GET['start'] ) ? intval( $_GET['start'] ) : 0;
		$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_mod' ), 'requestid', 0 );
		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_mod' ) . ' ORDER BY requestdate DESC' ;
		$result = icms::$xoopsDB -> query( $sql, icms::$module -> config['admin_perpage'] , $start );
		$totalmodrequests = icms::$xoopsDB -> getRowsNum( icms::$xoopsDB -> query( $sql ) );

		icms_cp_header();
		mytube_adminmenu( '', _AM_MYTUBE_MOD_MODREQUESTS );

		echo '<fieldset style="border: #E8E8E8 1px solid;">
				<legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_MYTUBE_MOD_MODREQUESTSINFO . '</legend>';
		echo '<div style="padding: 12px;">' . _AM_MYTUBE_MOD_TOTMODREQUESTS . '<b>' . $totalmodrequests . '</b></div>';
		echo '</fieldset>';

		echo '<table width="100%" cellspacing="1" class="outer" style="font-size: smaller;>';
		echo '<tr style="text-align: center;">';
		echo '<th>' . _AM_MYTUBE_MOD_MODID . '</th>';
		echo '<th style="text-align: left;">' . _AM_MYTUBE_MOD_MODTITLE . '</th>';
		echo '<th>' . _AM_MYTUBE_MOD_MODIFYSUBMIT . '</th>';
		echo '<th>' . _AM_MYTUBE_MOD_DATE . '</th>';
		echo '<th>' . _AM_MYTUBE_MINDEX_ACTION . '</th>';
		echo '</tr>';
		if ( $totalmodrequests > 0 ) {
			while ( $video_arr = icms::$xoopsDB -> fetchArray( $result ) ) {
				$path = $mytree -> getNicePathFromId( $video_arr['requestid'], 'title', 'modifications.php?op=listmodreqshow&requestid' );
				$path = str_replace( '/', '', $path );
				$path = str_replace( ':', '', trim( $path ) );
				$title = trim( $path );
				$submitter = icms_member_user_Handler::getUserLink( $video_arr['modifysubmitter'] );
				$requestdate = mytube_time( formatTimestamp( $video_arr['requestdate'], icms::$module -> config['dateformatadmin'] ) );

				echo '<tr style="text-align: center;">';
				echo '<td class="head">' . $video_arr['requestid'] . '</td>';
				echo '<td class="even" style="text-align: left;">' . $title . '</td>';
				echo '<td class="even">' . $submitter . '</td>';
				echo '<td class="even">' . $requestdate . '</td>';
				echo '<td class="even"><a href="modifications.php?op=listmodreqshow&amp;requestid=' . $video_arr['requestid'] . '">' . $imagearray['view'] . '</a></td>';
				echo '</tr>';
			}
		} else {
			echo '<tr style="text-align: center;"><td class="head" colspan="5">' . _AM_MYTUBE_MOD_NOMODREQUEST . '</td></tr>';
		}
		echo '</table>';

		$pagenav = new icms_view_PageNav( $totalmodrequests, icms::$module -> config['admin_perpage'], $start, 'start' );
		echo '<span style="float: right; font-size: 90%;">' . $pagenav -> renderNav() . '</span>';
		icms_cp_footer();
}
?>