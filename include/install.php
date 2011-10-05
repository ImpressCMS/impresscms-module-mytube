<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: include/install.php
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

$mydirname = basename( dirname( dirname( __FILE__ ) ) );

//Create folders and set permissions
$category = ICMS_ROOT_PATH . '/uploads/mytube/category';
$images = ICMS_ROOT_PATH . '/uploads/mytube/screenshots';
$videos = ICMS_ROOT_PATH . '/uploads/mytube/videos';
if ( !is_dir( $category . '/thumbs' ) ) {
	mkdir( $category . '/thumbs', 0777, true );
	copy( ICMS_ROOT_PATH . '/uploads/index.html', ICMS_ROOT_PATH . '/uploads/mytube/index.html' );
	copy( ICMS_ROOT_PATH . '/uploads/index.html', $category . '/index.html' );
	copy( ICMS_ROOT_PATH . '/uploads/index.html', $category . '/thumbs/index.html' );
}
if ( !is_dir( $images . '/thumbs' ) ) {
	mkdir( $images . '/thumbs', 0777, true );
	copy( ICMS_ROOT_PATH . '/uploads/index.html', $images . '/index.html' );
	copy( ICMS_ROOT_PATH . '/uploads/index.html', $images . '/thumbs/index.html' );
	$contentx =@file_get_contents( ICMS_ROOT_PATH . '/modules/' . $mydirname . '/images/logo-en.png' );
		$openedfile = fopen( $images . '/logo-en.png', "w" ); 
		fwrite( $openedfile, $contentx ); 
		fclose( $openedfile );
}
if ( !is_dir( $videos . '/thumbs' ) ) {
	mkdir( $videos . '/thumbs', 0777, true );
	copy( ICMS_ROOT_PATH . '/uploads/index.html', $videos . '/index.html' );
	copy( ICMS_ROOT_PATH . '/uploads/index.html', $videos . '/thumbs/index.html' );
}
?>