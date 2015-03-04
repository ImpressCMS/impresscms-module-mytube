<?php
/**
 * Tag info
 *
 * @copyright	The XOOPS project http://www.xoops.org/
 * @license		http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author		Taiwen Jiang (phppp or D.J.) <php_pp@hotmail.com>
 * @since		1.00
 * @version		$Id$
 * @package		module::tag
 */

if ( !defined( 'ICMS_ROOT_PATH' ) ) { die( 'XOOPS root path not defined' ); }

/**
 * Get item fields:
 * title
 * content
 * time
 * link
 * uid
 * uname
 * tags
 *
 * @var		array	$items	associative array of items: [modid][catid][itemid]
 *
 * @return	boolean
 * 
 */
 
function mytube_tag_iteminfo( &$items ) {

	include_once ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/include/functions.php';
	
    if( empty( $items ) || !is_array( $items ) ) {
        return false; 
    } 

    $myts =& MyTextSanitizer::getInstance(); 
	$modhandler = icms::handler( 'icms_module' );
    $mytubeModule = $modhandler -> getByDirname( basename( dirname( dirname( __FILE__ ) ) ) );
    $config_handler = icms::$config;
    $mytubeModuleConfig = $config_handler -> getConfigsByCat( 0, $mytubeModule -> getVar( 'mid' ) );

    $items_id = array(); 

    foreach( array_keys( $items ) as $cat_id ) {
        // Some handling here to build the link upon catid 
            // If catid is not used, just skip it 
        foreach( array_keys(  $items[$cat_id] ) as $item_id ) {
            // In article, the item_id is "art_id" 
            $items_id[] = intval( $item_id ); 
        } 
    } 

    foreach( array_keys( $items ) as $cat_id ) {
        foreach( array_keys( $items[$cat_id] ) as $item_id ) {
            $sql = 'SELECT lid, title, published, submitter, description, item_tag, nice_url FROM ' . icms::$xoopsDB -> prefix('mytube_videos') . '  WHERE lid=' . $item_id . ' AND status>0 ORDER BY published DESC';
            $result = icms::$xoopsDB -> query( $sql );
            $row = icms::$xoopsDB -> fetchArray( $result );
			if ( $mytubeModuleConfig['niceurl'] ) {
				$url = 'singlevideo.php?lid=' . $row['lid'] . '&amp;page=' . mytube_nicelink( $row['title'], $row['nice_url'] );
			} else {
				$url = 'singlevideo.php?lid=' . $row['lid'];
			}
			$icon = '<img src="' . ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/images/icon_small.png" alt="" />';
            $items[$cat_id][$item_id] = array(
                'title'      => $icon . '&nbsp;' . $row['title'],
                'uid'        => $row['submitter'],
                'link'       => $url,
                'time'       => $row['published'],
                'tags'       => $row['item_tag'],
                'content'    => $row['description']
            ); 
        } 
    } 
}

/** Remove orphan tag-item links **/
function mytube_tag_synchronization( $mid ) {
  // Optional
}
?>
