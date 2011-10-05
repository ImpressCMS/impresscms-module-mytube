<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: include/update.php
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

if( !defined( 'ICMS_ROOT_PATH' ) ) exit ;

	$db =& Database::getInstance();
	
	//Rename tables
	$sql = "RENAME TABLE " . icms::$xoopsDB -> prefix( 'xoopstube_broken' ) . " TO " . icms::$xoopsDB -> prefix( 'mytube_broken' );
	$db -> query( $sql );
	$sql = "RENAME TABLE " . icms::$xoopsDB -> prefix( 'xoopstube_cat' ) . " TO " . icms::$xoopsDB -> prefix( 'mytube_cat' );
	$db -> query( $sql );
	$sql = "RENAME TABLE " . icms::$xoopsDB -> prefix( 'xoopstube_videos' ) . " TO " . icms::$xoopsDB -> prefix( 'mytube_videos' );
	$db -> query( $sql );
	$sql = "RENAME TABLE " . icms::$xoopsDB -> prefix( 'xoopstube_mod' ) . " TO " . icms::$xoopsDB -> prefix( 'mytube_mod' );
	$db -> query( $sql );
	$sql = "RENAME TABLE " . icms::$xoopsDB -> prefix( 'xoopstube_votedata' ) . " TO " . icms::$xoopsDB -> prefix( 'mytube_votedata' );
	$db -> query( $sql );
	$sql = "RENAME TABLE " . icms::$xoopsDB -> prefix( 'xoopstube_indexpage' ) . " TO " . icms::$xoopsDB -> prefix( 'mytube_indexpage' );
	$db -> query( $sql );
	$sql = "RENAME TABLE " . icms::$xoopsDB -> prefix( 'xoopstube_altcat' ) . " TO " . icms::$xoopsDB -> prefix( 'mytube_altcat' );
	$db -> query( $sql );
	
	// Create config table
	$sql = "CREATE TABLE IF NOT EXISTS " . $db -> prefix( 'mytube_configs' ) . " (
			`rssactive` int(1) NOT NULL DEFAULT '1',
			`rsstitle` varchar(128) NOT NULL DEFAULT '',
			`rsslink` varchar(128) NOT NULL DEFAULT '',
			`rssdsc` varchar(128) NOT NULL DEFAULT '',
			`rssimgurl` varchar(255) NOT NULL DEFAULT '',
			`rsswidth` tinyint(8) NOT NULL DEFAULT '0',
			`rssheight` tinyint(8) NOT NULL DEFAULT '0',
			`rssimgtitle` varchar(128) NOT NULL DEFAULT '',
			`rssimglink` varchar(255) NOT NULL DEFAULT '',
			`rssttl` tinyint(8) NOT NULL DEFAULT '0',
			`rsswebmaster` varchar(255) NOT NULL DEFAULT '',
			`rsseditor` varchar(255) NOT NULL DEFAULT '',
			`rsscategory` varchar(128) NOT NULL DEFAULT '',
			`rssgenerator` varchar(128) NOT NULL DEFAULT '',
			`rsscopyright` varchar(128) NOT NULL DEFAULT '',
			`rsstotal` tinyint(8) NOT NULL DEFAULT '0',
			`rssofftitle` varchar(128) NOT NULL DEFAULT '',
			`rssoffdsc` varchar(255) NOT NULL DEFAULT ''
			) ENGINE=MyISAM COMMENT='MyTube by McDonald';";
	$db -> query( $sql );
	
	$sql = "INSERT INTO " . $db -> prefix( 'mytube_configs' ) . " (rssactive,rsstitle,rsslink,rssdsc,rssimgurl,rsswidth,rssheight,rssimgtitle,rssimglink,rssttl,rsswebmaster,rsseditor,rsscategory,rssgenerator,rsscopyright,rsstotal,rssofftitle,rssoffdsc) VALUES ('1', '', '', '', '', '', '', '', '', '60', '', '', '', '', '', '15', '', '');";
	$db -> query( $sql );
	

	$sql = "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_videos' ) . " ADD nice_url VARCHAR(100) NOT NULL default ''";
	$db -> query( $sql );
	
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_cat') . " DROP spotlighttop" );
	$db -> query( $sql );
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_cat') . " DROP spotlighthis" );
	$db -> query( $sql );
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_cat') . " DROP nohtml" );
	$db -> query( $sql );
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_cat') . " DROP nosmiley" );
	$db -> query( $sql );
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_cat') . " DROP noxcodes" );
	$db -> query( $sql );
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_cat') . " DROP noimages" );
	$db -> query( $sql );
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_cat') . " DROP nobreak" );
	$db -> query( $sql );
	
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_indexpage') . " DROP nohtml" );
	$db -> query( $sql );
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_indexpage') . " DROP nosmiley" );
	$db -> query( $sql );
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_indexpage') . " DROP noxcodes" );
	$db -> query( $sql );
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_indexpage') . " DROP noimages" );
	$db -> query( $sql );
	$sql = sprintf( "ALTER TABLE " . icms::$xoopsDB -> prefix( 'mytube_indexpage') . " DROP nobreak" );
	$db -> query( $sql );

?>