<?php
/**
 * $Id: header.php
 * Module: MyTube
 */

include_once '../../mainfile.php';

if( !defined("XOOPSTUBE_DIRNAME") ){
	define("XOOPSTUBE_DIRNAME", 'mytube');
}

include XOOPS_ROOT_PATH . '/modules/' . XOOPSTUBE_DIRNAME . '/include/config.php';
include XOOPS_ROOT_PATH . '/modules/' . XOOPSTUBE_DIRNAME . '/include/functions.php';
include XOOPS_ROOT_PATH . '/modules/' . XOOPSTUBE_DIRNAME . '/include/video.php';
include XOOPS_ROOT_PATH . '/modules/' . XOOPSTUBE_DIRNAME . '/sbookmarks.php';
include_once XOOPS_ROOT_PATH . '/modules/' . XOOPSTUBE_DIRNAME . '/class/class_thumbnail.php';
include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';

if ( !file_exists( "language/" . $xoopsConfig['language'] . "/main.php" ) ) {
    include "language/" . $xoopsConfig['language'] . "/main.php";
} 

include_once XOOPS_ROOT_PATH . '/modules/' . XOOPSTUBE_DIRNAME . '/class/myts_extended.php';
$xtubemyts = new xtubeTextSanitizer(); // MyTextSanitizer object

global $xoopModuleConfig;

?>