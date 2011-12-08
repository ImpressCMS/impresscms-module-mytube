<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: header.php
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

include_once '../../mainfile.php';

$mydirname = basename( dirname( __FILE__ ) );
$mydirpath = dirname( __FILE__ );

include ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/functions.php';
include ICMS_ROOT_PATH . '/modules/' . $mydirname . '/include/video.php';
include ICMS_ROOT_PATH . '/modules/' . $mydirname . '/sbookmarks.php';
include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/class/class_thumbnail.php';

if ( !file_exists( 'language/' . $icmsConfig['language'] . '/main.php' ) ) {
	include 'language/' . $icmsConfig['language'] . '/main.php';
}

include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/class/myts_extended.php';
$mytubemyts = new mytubeTextSanitizer(); // MyTextSanitizer object

global $icmsConfig, $xoopsTpl, $xoTheme;
?>