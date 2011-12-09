<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Link 1.06
*
* File: feed.php
*
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		MyTube
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

include 'header.php';

include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/class/mytubefeed.php';
include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/video.php';

$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_configs' );
$config_arr = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

if ( $config_arr['rssactive'] == 1 ) {
	$myFeed = new MyTubeFeed();
	$myFeed -> webMaster		= $config_arr['rsswebmaster'];
	$myFeed -> channelEditor	= $config_arr['rsseditor'];
	$myFeed -> image			= array( 'url' => $config_arr['rssimgurl'] );
	$myFeed -> width			= $config_arr['rsswidth'];
	$myFeed -> height			= $config_arr['rssheight'];
	$myFeed -> title			= $config_arr['rsstitle'];
	$myFeed -> generator		= $config_arr['rssgenerator'];
	$myFeed -> category			= $config_arr['rsscategory'];
	$myFeed -> ttl				= $config_arr['rssttl'];
	$myFeed -> copyright		= $config_arr['rsscopyright'];

	$sql2 = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0  ORDER BY published DESC ', $config_arr['rsstotal'], 0 );

	while ( $myrow = icms::$xoopsDB -> fetchArray( $sql2 ) ) {
		// First get the main category title of the link
		$sql3 = icms::$xoopsDB -> query( 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . $myrow['cid'] );
		$mycat = icms::$xoopsDB -> fetchArray( $sql3 );
		$category = htmlspecialchars( $mycat['title'] );
		$date  = formatTimestamp( $myrow['published'], 'r' );
		$title = htmlspecialchars( $myrow['title'] );
		$text  = icms_core_DataFilter::icms_substr( $myrow['description'], 0, icms::$module -> config['totalchars'], '...' );
		$text  = icms_core_DataFilter::checkVar( $text, 'html' );
		$link  = mytube_niceurl( $myrow['lid'], $myrow['title'], $myrow['nice_url'] );
		$author= $myrow['publisher'];
		$thumb = htmlspecialchars( '<img style="float: right;" src="' . mytube_videothumb( $myrow['vidid'], $myrow['title'], $myrow['vidsource'], $myrow['picurl'], $icmsModuleConfig['videoimgdir'] . '/' . $myrow['screenshot'] ) . '" title="' . $title . '" alt="' . $title . '" width="' . $icmsModuleConfig['shotwidth'] . 'px" height="' . $icmsModuleConfig['shotheight'] . 'px" />' . $text );
		$myFeed -> feeds[] = array(
			'title'			=> $title,
			'link'			=> $link,
			'description'	=> $thumb,
			'pubdate'		=> $date,
			'category'		=> $category,
			'author'		=> $author,
			'guid'			=> $link );
	}
	$myFeed -> render();
} else {
	$myFeed = new MyTubeFeed(); 
	$myFeed -> feeds[] = array( 'title'			=> $config_arr['rssofftitle'],
								'link'			=> ICMS_URL,
								'description'	=> $config_arr['rssoffdsc'] );
	$myFeed -> render();
}
?>