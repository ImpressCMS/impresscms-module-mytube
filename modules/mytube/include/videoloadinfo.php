<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: include/videoloadinfo.php
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

// $module_video = '';

$video['id'] = intval( $video_arr['lid'] );
$video['cid'] = intval( $video_arr['cid'] );
$video['published'] = intval( $video_arr['published'] ) ? true : false;

$path = $mytree -> getPathFromId( $video_arr['cid'], 'title' );
$path = substr( $path, 1 );
$path = basename( $path );
$path = str_replace( '/', '', $path );
$video['category'] = $path;

$rating = round( number_format( $video_arr['rating'], 0 ) / 2 );
$video['rateimg'] = "rate$rating.png";
unset( $rating );

$video['votes'] = ( $video_arr['votes'] == 1 ) ? _MD_MYTUBE_ONEVOTE : sprintf( _MD_MYTUBE_NUMVOTES, $video_arr['votes'] );
$video['hits'] = sprintf( _MD_MYTUBE_VIDEOHITS, intval( $video_arr['hits'] ) ) ;
$xoopsTpl -> assign( 'lang_dltimes', $video['hits'] );
$publisher = ( isset( $video_arr['publisher'] ) && !empty( $video_arr['publisher'] ) ) ? $mytubemyts -> htmlSpecialCharsStrip( $video_arr['publisher'] ) : _MD_MYTUBE_NOTSPECIFIED;
$video['title'] = $mytubemyts -> htmlSpecialCharsStrip( $video_arr['title']);
$video['vidid'] = $video_arr['vidid'];
$video[ 'videothumb' ] = mytube_videothumb( $video_arr['vidid'], $video_arr['title'], $video_arr['vidsource'], $video_arr['picurl'], icms::$module -> config['videoimgdir'] . '/' . $video_arr['screenshot'] );
$video['publisher'] = mytube_videopublisher( $video_arr['vidid'], $video_arr['publisher'], $video_arr['vidsource'] );

if ( $moderate == 0 ) {
	$time = ( $video_arr['updated'] != 0 ) ? $video_arr['updated'] : $video_arr['published'];
	$is_updated = ( $video_arr['updated'] != 0 ) ? _MD_MYTUBE_UPDATEDON : _MD_MYTUBE_PUBLISHDATE;
	$xoopsTpl -> assign( 'lang_subdate' , $is_updated );
} else {
	$time = $video_arr['date'];
	$is_updated = _MD_MYTUBE_SUBMITDATE;
	$xoopsTpl -> assign( 'lang_subdate' , $is_updated );
}

$video['adminvideo'] = '';
$video['isadmin'] 	 = ( ( is_object( icms::$user ) && !empty( icms::$user ) ) && icms::$user -> isAdmin( icms::$module -> getVar( 'mid' ) ) ) ? true : false;
if ( $video['isadmin'] == true && $moderate == 0 ) {
    $video['adminvideo'] = '<a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/index.php"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/computer.png" alt="' . _MD_MYTUBE_ADMINSECTION . '" title="' . _MD_MYTUBE_ADMINSECTION . '" style="vertical-align: middle;" /></a>&nbsp;';
	
    if ( $video_arr['vidsource'] == 200 ) {
      $video['adminvideo'] .=  '<a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/mytube.php?op=edit&amp;lid=' . $video_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/film_edit.png" alt="' . _MD_MYTUBE_EDIT . '" title="' . _MD_MYTUBE_EDIT . '" style="vertical-align: middle;" /></a>&nbsp;';
    } else {
      $video['adminvideo'] .=  '<a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/index.php?op=edit&amp;lid=' . $video_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/film_edit.png" alt="' . _MD_MYTUBE_EDIT . '" title="' . _MD_MYTUBE_EDIT . '" style="vertical-align: middle;" /></a>&nbsp;';
    }
    $video['adminvideo'] .= '<a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/index.php?op=delete&amp;lid=' . $video_arr['lid'] . '"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/film_delete.png" alt="' . _MD_MYTUBE_DELETE . '" title="' . _MD_MYTUBE_DELETE . '" style="vertical-align: middle;" /></a>';
} else {
    $video['adminvideo'] = '[ <a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/submit.php?op=edit&amp;lid=' . $video_arr['lid'] . '&approve=1">' . _MD_MYTUBE_APPROVE . '</a> | ';
    $video['adminvideo'] .= '<a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/submit.php?op=delete&amp;lid=' . $video_arr['lid'] . '">' . _MD_MYTUBE_DELETE . '</a> ]';
} 
$votestring = ( $video_arr['votes'] == 1 ) ? _MD_MYTUBE_ONEVOTE : sprintf( _MD_MYTUBE_NUMVOTES, $video_arr['votes'] );

$video['useradminvideo'] = 0;
if ( is_object( icms::$user ) && !empty( icms::$user ) ) {
	$_user_submitter = ( icms::$user -> getVar( 'uid' ) == $video_arr['submitter'] ) ? true : false;
	if ( true == mytube_checkgroups( $cid ) ) {
		$video['useradminvideo'] = 1;
		if ( icms::$user -> getVar( 'uid' ) == $video_arr['submitter'] ) {
			$video['usermodify'] = '<a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/submit.php?lid=' . $video_arr['lid'] . '"> ' . _MD_MYTUBE_MODIFY . '</a> |';
		}
	}
}

$video['url'] = mytube_niceurl( $video_arr['lid'], $video_arr['title'], $video_arr['nice_url'] );

$description = icms_core_DataFilter::checkVar( $video_arr['description'], 'html' );
$video['description']   = icms_core_DataFilter::icms_substr( $description, 0, icms::$module -> config['totalchars'], '...' );
$video['updated'] 		= mytube_time( formatTimestamp( $time, icms::$module -> config['dateformat'] ) );
$video['submitter'] 	= icms_member_user_Handler::getUserLink( $video_arr['submitter'] );
$video['time'] 			= $video_arr['time'];
$video['mail_subject'] 	= rawurlencode( sprintf( _MD_MYTUBE_INTFILEFOUND, $icmsConfig['sitename'] ) );
$video['mail_body'] 	= rawurlencode( sprintf( _MD_MYTUBE_INTFILEFOUND, $icmsConfig['sitename'] ) . ':  ' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $video_arr['cid'] . '&amp;lid=' . $video_arr['lid'] );
$video['comments'] 		= $video_arr['comments'];
$video['icons']         = mytube_displayicons( $video_arr['published'], $video_arr['status'], $video_arr['hits'] );
$video['allow_rating']  = ( mytube_checkgroups( $cid, 'MyTubeRatePerms' ) ) ? true : false;
$video['screen_shot']   = icms::$module -> config['screenshot'];
$video['total_chars']   = icms::$module -> config['totalchars'];
$video['module_dir']    = icms::$module -> getVar( 'dirname' );
$video['comment_rules'] = icms::$module -> config['com_rule'];
$video['showrating']    = icms::$module -> config['showrating'];
$video['width']			= icms::$module -> config['shotwidth'];
$video['height']		= icms::$module -> config['shotheight'];
?>