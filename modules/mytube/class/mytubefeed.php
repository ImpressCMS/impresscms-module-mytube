<?php
/**
*
* Module RSS Feed Class 
*
* @copyright	http://www.impresscms.org/ The ImpressCMS Project 
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @package		core
* @since		1.1
* @author		Ignacio Segura, "Nachenko"
* @version		$Id: icmsfeed.php 6991 2008-11-16 20:37:32Z mcdonald3072 $
*/

if ( !defined( 'ICMS_ROOT_PATH' ) ) { exit(); }

class MyTubeFeed {

		var $title;
		var $url;
		var $description;
		var $language;
		var $charset;
		var $category;
		var $pubDate;
		var $webMaster;
		var $generator;
		var $copyright;
		var $lastbuild;
		var $channelEditor;
		var $width;
		var $height;
		var $ttl;
		var $image = array ();

	function MyTubeFeed() {
		global $icmsConfig;
		$this -> title = $icmsConfig['sitename'];
		$this -> url = ICMS_URL;
		$this -> description = $icmsConfig['slogan'];
		$this -> language = _LANGCODE;
		$this -> charset = _CHARSET;
		$this -> pubDate = date( _DATESTRING, time() );
		$this -> lastbuild = formatTimestamp( time(), 'r' );
		$this -> webMaster = $icmsConfig['adminmail'];
		$this -> channelEditor = $icmsConfig['adminmail'];
		$this -> generator = ICMS_VERSION_NAME;
		$this -> copyright = 'Copyright ' . formatTimestamp( time(), 'Y' ) . ' ' . $icmsConfig['sitename'];
		$this -> width  = 88;
		$this -> height = 31;
		$this -> ttl    = 60;
		$this -> image = array ( 'title' => $this -> title,
								 'url' => ICMS_URL . '/images/logo.gif',
								);
		$this -> feeds = array ();
	}

	function render() {
		icms::$logger->disableLogger();

		$xoopsOption['template_main'] = "db:mytube_rss.html";

		$tpl = new icms_view_Tpl();	
		$tpl -> assign( 'channel_title', $this -> title );
		$tpl -> assign( 'channel_link', $this -> url );
		$tpl -> assign( 'channel_desc', $this -> description );
		$tpl -> assign( 'channel_webmaster', $this -> webMaster );
		$tpl -> assign( 'channel_editor', $this -> channelEditor );
		$tpl -> assign( 'channel_category', $this -> category );
		$tpl -> assign( 'channel_generator', $this -> generator );
		$tpl -> assign( 'channel_language', $this -> language );
		$tpl -> assign( 'channel_lastbuild', $this -> lastbuild );
		$tpl -> assign( 'channel_copyright', $this -> copyright );
		$tpl -> assign( 'channel_width', $this -> width ); 
		$tpl -> assign( 'channel_height', $this -> height );
		$tpl -> assign( 'channel_ttl', $this -> ttl );
		$tpl -> assign( 'image_url', $this -> image['url'] );
		foreach ( $this -> feeds as $feed ) {
			$tpl -> append( 'items', $feed );
		}
		$tpl -> display( 'db:mytube_rss.html' );
	}
}
?>