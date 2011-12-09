<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: index.php
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

$start = mytube_cleanRequestVars( $_REQUEST, 'start', 0 );
$start = intval( $start );

$xoopsOption['template_main'] = 'mytube_index.html';
include ICMS_ROOT_PATH . '/header.php';

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );

// Begin Main page Heading etc
$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_indexpage' );
$head_arr = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

if ( $head_arr['indeximage'] != '' ) {
	$catarray['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . mytube_imageheader( $head_arr['indeximage'], '' ) . '</div>'; }

if ( $head_arr['indexheading'] != '' ) {
$catarray['indexheading'] = '<h4 style="text-align: center;">' . $head_arr['indexheading'] . '</h4>'; }

$catarray['indexheaderalign'] = $mytubemyts -> htmlSpecialCharsStrip( $head_arr['indexheaderalign'] );
$catarray['indexfooteralign'] = $mytubemyts -> htmlSpecialCharsStrip( $head_arr['indexfooteralign'] );
$catarray['indexheading'] = icms_core_DataFilter::checkVar( $head_arr['indexheading'], 'html' );

if ( $head_arr['indexheader'] != '' ) {
$catarray['indexheader'] = '<div style="padding-bottom: 12px; text-align: ' . $head_arr['indexheaderalign'] . ';">' . icms_core_DataFilter::checkVar( $head_arr['indexheader'], 'html' ) . '</div>'; }

$catarray['indexfooter']  = icms_core_DataFilter::checkVar( $head_arr['indexfooter'], 'html' );
$catarray['letters'] = mytube_letters();
$xoopsTpl -> assign( 'catarray', $catarray );
// End main page Headers

$count = 1;
$chcount = 0;
$countin = 0;

// Begin Main page linkload info
$listings = mytube_getTotalItems();
$total_cat = mytube_totalcategory(); // get total amount of categories

$catsort = icms::$module -> config['sortcats'];
$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE pid=0 ORDER BY ' . $catsort;
$result = icms::$xoopsDB -> query( $sql );
while ( $myrow = icms::$xoopsDB -> fetchArray( $result ) ) {
	$countin++;
	$subtotalvideoload = 0;
	$totalvideoload = mytube_getTotalItems( $myrow['cid'], 1 );
	$indicator = mytube_isnewimage( $totalvideoload['published'] );
	if ( mytube_checkgroups( $myrow['cid'] ) ) {
		$title = $mytubemyts -> htmlSpecialCharsStrip( $myrow['title'] );
		$arr = array();
		$arr = $mytree -> getFirstChild( $myrow['cid'], 'title' );
		$space = 1;
		$chcount = 1;
		$subcategories = '';
		foreach( $arr as $ele ) {
			$hassubitems = mytube_getTotalItems( $ele['cid'], 1 );
			if ( true == mytube_checkgroups( $ele['cid'] ) ) {
				if ( icms::$module -> config['subcats'] == 1 ) {
					$chtitle = $mytubemyts -> htmlSpecialCharsStrip( $ele['title'] );
					if ( $chcount > 5 ) {
						$subcategories .= '&nbsp;&nbsp;...';
						break;
					}
					if ( $space > 0 ) {
						$subcategories .= '- <a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $ele['cid'] . '">' . $chtitle . '</a> (' . $hassubitems['count'] . ')';
					}
					$space++;
					$chcount++;
				}
			}
		}

		// This code is copyright WF-Projects
		// Using this code without our permission or removing this code voids the license agreement
		$_image = ( $myrow['imgurl'] ) ? urldecode( $myrow['imgurl'] ) : '';
		if ( $_image != "" && icms::$module -> config['usethumbs'] ) {
			$_thumb_image = new mytubeThumbsNails( $_image, icms::$module -> config['catimage'], 'thumbs' );
			if ( $_thumb_image ) {
				$_thumb_image -> setUseThumbs( 1 );
				$_thumb_image -> setImageType( 'gd2' );
				$_image = $_thumb_image -> do_thumb( icms::$module -> config['shotwidth'],
				icms::$module -> config['shotheight'],
				icms::$module -> config['imagequality'],
				icms::$module -> config['updatethumbs'],
				icms::$module -> config['keepaspect'] );
			}
		}
	if ( empty( $_image ) || $_image == '' ) {
		$imgurl = $indicator['image'];
		$_width = 33;
		$_height = 24;
	} else {
		$imgurl = icms::$module -> config['catimage'] . "/$_image";
		$_width = icms::$module -> config['shotwidth'];
		$_height = icms::$module -> config['shotheight'];
	}
	// End

	$xoopsTpl -> append( 'categories', array(	'image' => ICMS_URL . "/$imgurl",
												'id' => $myrow['cid'],
												'title' => $title,
												'subcategories' => $subcategories,
												'totalvideos' => $totalvideoload['count'],
												'width' => $_width,
												'height' => $_height,
												'count' => $count,
												'alttext' => $myrow['description'] ) );
		$count++;
	} 
} 
switch ( $total_cat ) {
	case '1':
		$lang_thereare = _MD_MYTUBE_THEREIS;
		break;
	default:
		$lang_thereare = _MD_MYTUBE_THEREARE;
		break;
}

$time = time();

$sql = icms::$xoopsDB -> query( 'SELECT lastvideosyn, lastvideostotal FROM ' . icms::$xoopsDB -> prefix( 'mytube_indexpage' ) );
$lastvideos = icms::$xoopsDB -> fetchArray( $sql );

if ( $lastvideos['lastvideosyn'] == 1 && $lastvideos['lastvideostotal'] > 0 ) {
	$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published > 0 
								AND published <= ' . $time . ' 
								AND (expired = 0 OR expired > ' . $time . ') 
								AND offline = 0 
								ORDER BY published DESC', 0, 0 );
	list( $count ) = icms::$xoopsDB -> fetchRow( $result );

	$count = ( ( $count > $lastvideos['lastvideostotal'] ) && ( $lastvideos['lastvideostotal'] != 0 ) ) ? $lastvideos['lastvideostotal'] : $count;
	$limit = ( ( $start + icms::$module -> config['perpage'] ) > $count ) ? ( $count - $start ) : icms::$module -> config['perpage'];

	$result = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published > 0 
								AND published <= ' . $time . ' 
								AND (expired = 0 OR expired > ' . $time . ') 
								AND offline = 0 
								ORDER BY published DESC', $limit, $start );

	while ( $video_arr = icms::$xoopsDB -> fetchArray( $result ) ) {
		$res_type = 0;
		$moderate = 0;
		$cid = $video_arr['cid'];
		require ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/include/videoloadinfo.php';
		$xoopsTpl -> append( 'video', $video );
	}

	$pagenav = new icms_view_PageNav( $count, icms::$module -> config['perpage'] , $start, 'start' );
	$xoopsTpl -> assign( 'pagenav', $pagenav -> renderNav() );
	$xoopsTpl -> assign( 'showlatest', $lastvideos['lastvideosyn'] );
}

$xoopsTpl -> assign( 'cat_columns', icms::$module -> config['catcolumns'] );
$xoopsTpl -> assign( 'lang_thereare', sprintf( $lang_thereare, $total_cat, $listings['count'] ) );
$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );

// RSS feed
$rsssql = 'SELECT rssactive FROM ' . icms::$xoopsDB -> prefix( 'mytube_configs' );
list( $rssactive ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $rsssql ) );
if ( $rssactive == 1 ) {
	$xoopsTpl -> assign( 'mytube_feed', '<a href="' . ICMS_URL . '/modules/' . $mydirname . '/feed.php" target="_blank"><img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/feed.png" border="0" alt="' . _MD_MYTUBE_FEED . '" title="' . _MD_MYTUBE_FEED . '" /></a>' );
	$xoopsTpl -> assign( 'xoops_module_header', '<link rel="alternate" type="application/rss+xml" title="' . _MD_MYTUBE_FEED . '" href="feed.php">' );
}

include ICMS_ROOT_PATH . '/footer.php';
?>