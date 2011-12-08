<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: newlist.php
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

$xoopsOption['template_main'] = 'mytube_newlistindex.html';
include ICMS_ROOT_PATH . '/header.php';

if ( mytube_imageheader() != '' ) { $xoopsTpl -> assign( 'imageheader', '<div style="padding-bottom: 12px; text-align: center;">' . mytube_imageheader() . '</div>' ); }

if ( isset( $_GET['newvideoshowdays'] ) ) {
	$newvideoshowdays = $_GET['newvideoshowdays'] ? $_GET['newvideoshowdays'] : 7;
	if ( $newvideoshowdays != 7 ) {
		if ( $newvideoshowdays != 14 ) {
			if ( $newvideoshowdays != 30 ) {
				redirect_header( 'newlist.php?newvideoshowdays=7', 5, _MD_MYTUBE_STOPIT . '<br /><img src="' . ICMS_URL . '/modules/' . icms::$module -> getvar( 'dirname' ) . '/images/icon/security.png" />' );
				exit();
			}
		}
	}
	$time_cur = time();
	$duration = ( $time_cur - ( 86400 * 30 ) );
	$duration_week = ( $time_cur - ( 86400 * 7 ) );
	$allmonthvideos = 0;
	$allweekvideos = 0;
	$result = icms::$xoopsDB -> query( 'SELECT lid, cid, published, updated FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE (published >= ' . $duration . ' AND published <= ' . $time_cur . ') OR updated >= ' . $duration . ' AND (expired = 0 OR expired > ' . $time_cur . ') AND offline = 0' );
	while ( $myrow = icms::$xoopsDB -> fetcharray( $result ) ) {
		$published = ( $myrow['updated'] > 0 ) ? $myrow['updated'] : $myrow['published'];
		$allmonthvideos++;
		if ( $published > $duration_week ) {
			$allweekvideos++;
		}
	} 
	$xoopsTpl -> assign( 'allweekvideos', $allweekvideos );
	$xoopsTpl -> assign( 'allmonthvideos', $allmonthvideos );

	// List Last VARIABLE Days of videos
	$newvideoshowdays = ( !isset( $_GET['newvideoshowdays'] ) ) ? 7 : $_GET['newvideoshowdays'];
	$xoopsTpl -> assign( 'newvideoshowdays', intval( $newvideoshowdays ) );

	$dailyvideos = array();
	for ( $i = 0; $i < intval( $newvideoshowdays ); $i++ ) {
		$key  = intval( $newvideoshowdays ) - $i - 1;
		$time = $time_cur - ( 86400 * $key );
		$dailyvideos[$key]['newvideodayRaw'] = $time;
		$dailyvideos[$key]['newvideoView']	= mytube_time( formatTimestamp( $time, icms::$module -> config['dateformat'] ) );
		$dailyvideos[$key]['totalvideos']	= 0;
	}
}

$duration = ( $time_cur - ( 86400 * ( intval( $newvideoshowdays ) - 1 ) ) );
$result = icms::$xoopsDB -> query( 'SELECT lid, cid, published, updated FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE (published > ' . $duration . ' AND published <= ' . $time_cur . ') OR (updated >= ' . $duration . ' AND updated <= ' . $time_cur . ') AND (expired = 0 OR expired > ' . $time_cur . ') AND offline = 0' );
while ( $myrow = icms::$xoopsDB -> fetcharray( $result ) ) {
	$published = ( $myrow['updated'] > 0 ) ? $myrow['updated'] : $myrow['published'];
	$d = date( 'j', $published );
	$m = date( 'm', $published );
	$y = date( 'Y', $published );
	$key = intval( ( $time_cur - mktime ( 0, 0, 0, $m, $d, $y ) ) / 86400 );
	$dailyvideos[$key]['totalvideos']++;
}
ksort( $dailyvideos );
reset( $dailyvideos );
$xoopsTpl -> assign( 'dailyvideos', $dailyvideos );
unset( $dailyvideos );

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );
$sql  = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' );
$sql .= 'WHERE (published > 0 AND published <= ' . $time_cur . ')
		 OR (updated > 0 AND updated <= ' . $time_cur . ')
		 AND (expired = 0 OR expired > ' . $time_cur . ')
		 AND offline = 0
		 ORDER BY ' . icms::$module -> config['linkxorder'];
$result = icms::$xoopsDB -> query( $sql, 10 , 0 );
while ( $video_arr = icms::$xoopsDB -> fetchArray( $result ) ) {
	include ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/include/videoloadinfo.php';
}

$xoopsTpl -> assign( 'back', '<a class="mytube_button" href="javascript:history.go(-1)">&#9668; ' . _BACK . '</a>' );
$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );

include ICMS_ROOT_PATH . '/footer.php';
?>