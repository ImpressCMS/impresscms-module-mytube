<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: include/notification.inc.php
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

function mytube_notify_iteminfo( $category, $item_id ) {

	if ( empty( icms::$module ) || icms::$module -> getVar('dirname') != 'mytube' ) {
		$module_handler = icms::handler( 'icms_module' );
		$module =& $module_handler -> getByDirname( basename( dirname(  dirname( __FILE__ ) ) ) );
		$config_handler = icms::$config;
		$config =& $config_handler -> getConfigsByCat( 0, $module -> getVar( 'mid' ) );
	} else {
		$module =& icms::$module;
		$config =& icms::$config;
	}

	if ( $category == 'global' ) {
		$item['name'] = '';
		$item['url']  = '';
		return $item;
	}

	if ( $category == 'category' ) {
		// Assume we have a valid category id
		$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . $item_id;
		if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
			return false;
		}
		$result_array = icms::$xoopsDB -> fetchArray( $result );
		$item['name'] = $result_array['title'];
		$item['url']  = ICMS_URL . '/modules/' . basename( dirname(  dirname( __FILE__ ) ) ) . '/viewcat.php?cid=' . $item_id;
		return $item;
	}

	if ( $category == 'video' ) {
		// Assume we have a valid file id
		$sql = 'SELECT cid,title FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $item_id;
		if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
			return false;
		}
		$result_array = icms::$xoopsDB -> fetchArray( $result );
		$item['name'] = $result_array['title'];
		$item['url'] = ICMS_URL . '/modules/' . basename( dirname(  dirname( __FILE__ ) ) ) . '/singlevideo.php?lid=' . $item_id;
		return $item;
	}
}
?>