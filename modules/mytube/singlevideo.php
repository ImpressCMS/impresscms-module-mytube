<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: singlevideo.php
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
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

include 'header.php';

$lid  = intval( mytube_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

$sql3 = 'SELECT cid FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid;
list( $cid ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql3 ) );

if  ( false == mytube_checkgroups( $cid ) ) {
	redirect_header( 'index.php', 1, _MD_MYTUBE_NOPERMISSIONTOVIEW );
	exit();
}

$sql2 = 'SELECT count(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' a LEFT JOIN '
 . icms::$xoopsDB -> prefix( 'mytube_altcat' ) . ' b'
 . ' ON b.lid = a.lid'
 . ' WHERE a.published > 0 AND a.published <= ' . time()
 . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND a.offline = 0'
 . ' AND (b.cid=a.cid OR (a.cid=' . $cid . ' OR b.cid=' . $cid . '))';
list( $count ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql2 ) );

if ( false == mytube_checkgroups( $cid ) && $count == 0 ) {
	redirect_header( 'index.php', 1, _MD_MYTUBE_MUSTREGFIRST );
	exit();
} 

$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid . '
		AND (published > 0 AND published <= ' . time() . ')
		AND (expired = 0 OR expired > ' . time() . ')
		AND offline = 0 
		AND cid > 0';
$result = icms::$xoopsDB -> query( $sql );
$video_arr = icms::$xoopsDB -> fetchArray( $result );

if ( !is_array( $video_arr ) ) {
	redirect_header( 'index.php', 1, _MD_MYTUBE_NOVIDEOLOAD );
	exit();
} 

$xoopsOption['template_main'] = 'mytube_singlevideo.html';
include ICMS_ROOT_PATH . '/header.php';

// tags support
if ( mytube_tag_module_included() ) {
	include_once ICMS_ROOT_PATH . '/modules/tag/include/tagbar.php';
	$xoopsTpl -> assign( 'tagbar', tagBar( $video_arr['lid'], 0 ) );
}

if ( mytube_imageheader() != '' ) { 
	$video['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . mytube_imageheader() . '</div>';
}
$video['id'] = $video_arr['lid'];
$video['cid'] = $video_arr['cid'];
$video['vidid'] = $video_arr['vidid'];
$video['description2'] = icms_core_DataFilter::checkVar( $video_arr['description'], 'html' );

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );
$pathstring = '<a href="index.php">' . icms::$module -> getVar( 'name' ) . '</a>&nbsp;:&nbsp;';
$pathstring .= $mytree -> getNicePathFromId( $cid, 'title', 'viewcat.php?op=' );
$video['path'] = $pathstring;

// Get video from source
$video['showvideo'] = mytube_showvideo( $video_arr['vidid'], $video_arr['vidsource'], $video_arr['screenshot'], $video_arr['picurl'], $video_arr['hd'] );

// Get Social Bookmarks
$video['sbmarks'] = mytube_sbmarks( $video_arr['lid'], $video_arr['title'] );

// Start of meta tags
	$maxWords = 100;
	$words = array();
	$words = explode( ' ', mytube_html2text( $video_arr['description'] ) );
	$newWords = array();
	$i = 0;
	while ( $i < $maxWords-1 && $i < count( $words ) ) {
		if ( isset( $words[$i] ) ) {
			$newWords[] = trim( $words[$i] );
		}
		$i++;
	}
	$video_meta_description = implode( ' ', $newWords );

	if ( is_object( $xoTheme ) ) {
		if ( $video_arr['keywords'] ) {
			$xoTheme -> addMeta( 'meta', 'keywords', $video_arr['keywords'] );
		}
		$xoTheme -> addMeta( 'meta', 'title', $video_arr['title'] );
		if ( icms::$module -> config['usemetadescr'] == 1 ) {
			$xoTheme -> addMeta( 'meta', 'description', $video_meta_description );
		}
	} else {
		if ( $video_arr['keywords'] ) {
			$xoopsTpl -> assign( 'icms_meta_keywords', $video_arr['keywords'] );
		}
		if ( icms::$module -> config['usemetadescr'] == 1 ) {
			$xoopsTpl -> assign( 'icms_meta_description', $video_meta_description );
		}
	}
	$xoopsTpl -> assign( 'icms_pagetitle', $video_arr['title'] );
	$xoopsTpl -> assign( 'og_url', mytube_niceurl( $video_arr['lid'], $video_arr['title'], $video_arr['nice_url'] ) );
	$xoopsTpl -> assign( 'og_image', mytube_videothumb( $video_arr['vidid'], $video_arr['title'], $video_arr['vidsource'], $video_arr['picurl'], icms::$module -> config['videoimgdir'] . '/' . $video_arr['screenshot'] ) );
// End of meta tags

$moderate = 0;
include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getvar( 'dirname' ) . '/include/videoloadinfo.php';

$xoopsTpl -> assign( 'show_screenshot', false );
if ( isset( icms::$module -> config['screenshot'] ) && icms::$module -> config['screenshot'] == 1 ) {
	$xoopsTpl -> assign( 'shotwidth', icms::$module -> config['shotwidth'] );
	$xoopsTpl -> assign( 'shotheight', icms::$module -> config['shotheight'] );
	$xoopsTpl -> assign( 'show_screenshot', true );
} 

if ( $video['isadmin'] == false ) {
	$count = mytube_updateCounter( $video_arr['lid'] );
}

// Show other author videos
$sql = 'SELECT lid, title, published, nice_url FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . '
		WHERE submitter=' . $video_arr['submitter'] . '
		AND lid <> ' . $video_arr['lid'] . '
		AND published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ')  
		AND offline = 0 ORDER by published DESC'; 
$result = icms::$xoopsDB -> query( $sql, 10, 0 );

while ( $arr = icms::$xoopsDB -> fetchArray( $result ) ) {
	$videouid['title'] = $mytubemyts -> htmlSpecialCharsStrip( $arr['title'] );
	$videouid['niceurl'] = mytube_niceurl( $arr['lid'], $arr['title'], $arr['nice_url'] );
	$videouid['published'] = mytube_time( formatTimestamp( $arr['published'], icms::$module -> config['dateformat'] ) );
	$xoopsTpl -> append( 'video_uid', $videouid );
}

// Copyright notice
if ( isset( icms::$module -> config['copyright'] ) && icms::$module -> config['copyright'] == 1 ) {
	$xoopsTpl -> assign( 'lang_copyright', '' . $video['publisher'] . ' &#0169; ' . _MD_MYTUBE_COPYRIGHT . ' ' . formatTimestamp( time(), 'Y' ) . ' - ' . ICMS_URL );
}

// Show other videos by submitter
if ( isset( icms::$module -> config['othervideos'] ) && icms::$module -> config['othervideos'] == 1 ) {
	$xoopsTpl -> assign( 'other_videos', '<b>' ._MD_MYTUBE_OTHERBYUID . '</b>'  . $video['submitter'] . '<br />' );
} else {
	$xoopsTpl -> assign( 'other_videos', '<b>' ._MD_MYTUBE_NOOTHERBYUID . '</b>'  . $video['submitter'] . '<br />' );
}

$video['useradminlink'] = 0;
if ( is_object( icms::$user ) && !empty( icms::$user ) ) {
	$_user_submitter = ( icms::$user -> getvar( 'uid' ) == $video_arr['submitter'] ) ? true : false;
	if ( true == mytube_checkgroups( $cid ) ) {
		$video['useradminlink'] = 1;
		if ( icms::$user -> getvar( 'uid' ) == $video_arr['submitter'] ) {
			$video['usermodify'] = '<a class="mytube_button" href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/submit.php?lid=' . $video_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/film_edit.png" alt="" style="vertical-align: middle;" /> ' . _MD_MYTUBE_MODIFY . '</a>';
		}
	}
}

$video['showsbookmarx'] = icms::$module -> config['showsbookmarks'];
$video['othervideox']   = icms::$module -> config['othervideos'];
$xoopsTpl -> assign( 'video', $video );

$xoopsTpl -> assign ( 'ratevideo', '<a class="mytube_button" href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/ratevideo.php?lid=' . $video_arr['lid'] . '&amp;page=' . mytube_nicelink( $video_arr['title'], $video_arr['nice_url'] ) . '"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/shield.png" alt="" style="vertical-align: middle;" /> ' . _MD_MYTUBE_RATETHISFILE . '</a>');

$xoopsTpl -> assign ( 'reportbroken', '<a class="mytube_button" href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/brokenvideo.php?lid=' . $video_arr['lid'] . '&amp;page=' . mytube_nicelink( $video_arr['title'], $video_arr['nice_url'] ) . '"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/film_error.png" alt="" style="vertical-align: middle;" /> ' . _MD_MYTUBE_REPORTBROKEN . '</a>');

$mail_subject = rawurlencode( sprintf( _MD_MYTUBE_INTFILEFOUND, $icmsConfig['sitename'] ) );
$mail_body = rawurlencode( sprintf( _MD_MYTUBE_INTFILEFOUND, $icmsConfig['sitename'] ) . ':  ' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?lid=' . $video_arr['lid'] );
$xoopsTpl -> assign ( 'mailto', '<a class="mytube_button" href="mailto:?subject=' . $mail_subject . '&body=' . $mail_body . '" target="_top"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/email.png" alt="" style="vertical-align: middle;" /> ' . _MD_MYTUBE_TELLAFRIEND . '</a>');

$xoopsTpl -> assign( 'commentz', '<a class="mytube_button" href="' . mytube_niceurl( $video_arr['lid'], $video_arr['title'], $video_arr['nice_url'] ) . '"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/comments.png" alt="" style="vertical-align: middle;" /> ' . _COMMENTS . '&nbsp;(' . $video_arr['comments'] . ')</a>' );

$xoopsTpl -> assign( 'back' , '<a class="mytube_button" href="javascript:history.go(-1)">&#9668; ' . _BACK . '</a>' );  // Displays Back button
$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );

include ICMS_ROOT_PATH . '/include/comment_view.php';
include ICMS_ROOT_PATH . '/footer.php';
?>