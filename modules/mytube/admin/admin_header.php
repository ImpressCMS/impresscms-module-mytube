<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: admin/admin_header.php
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
 
include '../../../include/cp_header.php';

include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar('dirname') . '/admin/functions.php';
include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar('dirname') . '/include/functions.php';
include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar('dirname') . '/include/video.php';
include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar('dirname') . '/class/mytube_lists.php';
include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar('dirname') . '/class/myts_extended.php';

$mytubemyts = new mytubeTextSanitizer(); // MyTextSanitizer object

global $mytubemyts, $icmsConfig;

$imagearray = array(
	'editimg' => '<img src="../images/icon/film_edit.png" alt="' . _AM_MYTUBE_ICO_EDIT . '" title="' . _AM_MYTUBE_ICO_EDIT . '" style="vertical-align: middle;">',
	'deleteimg' => '<img src="../images/icon/film_delete.png" alt="' . _AM_MYTUBE_ICO_DELETE . '" title="' . _AM_MYTUBE_ICO_DELETE . '" style="vertical-align: middle;">',
	'altcat' => '<img src="../images/icon/folder_add.png" alt="' . _AM_MYTUBE_ALTCAT_CREATEF . '" title="' . _AM_MYTUBE_ALTCAT_CREATEF . '" style="vertical-align: middle;">',
	'online' => '<img src="../images/icon/film_on.png" alt="' . _AM_MYTUBE_ICO_ONLINE . '" title="' . _AM_MYTUBE_ICO_ONLINE . '" style="vertical-align: middle;">',
	'offline' => '<img src="../images/icon/film_off.png" alt="' . _AM_MYTUBE_ICO_OFFLINE . '" title="' . _AM_MYTUBE_ICO_OFFLINE . '" style="vertical-align: middle;">',
	'expired' => '<img src="../images/icon/clock_red.png" alt="' . _AM_MYTUBE_ICO_EXPIRE . '" title="' . _AM_MYTUBE_ICO_EXPIRE . '" style="vertical-align: middle;">',
	'approved' => '<img src="../images/icon/film_on.png" alt="' . _AM_MYTUBE_ICO_APPROVED . '" title="' . _AM_MYTUBE_ICO_APPROVED . '" style="vertical-align: middle;">',
	'notapproved' => '<img src="../images/icon/film_off.png" alt="' . _AM_MYTUBE_ICO_NOTAPPROVED . '" title="' . _AM_MYTUBE_ICO_NOTAPPROVED . '" style="vertical-align: middle;">',
	'relatedfaq' => '<img src="../images/icon/link.gif" alt="' . _AM_MYTUBE_ICO_VIDEO . '" title="' . _AM_MYTUBE_ICO_VIDEO . '" align="absmiddle">',
	'approve' => '<img src="../images/icon/film_approve.png" alt="' . _AM_MYTUBE_ICO_APPROVE . '" title="' . _AM_MYTUBE_ICO_APPROVE . '" style="vertical-align: middle;">',
	'ignore' => '<img src="../images/icon/film_ignore.png" alt="' . _AM_MYTUBE_ICO_IGNORE . '" title="' . _AM_MYTUBE_ICO_IGNORE . '" style="vertical-align: middle;">',
	'ack_yes' => '<img src="../images/icon/film_on.png" alt="' . _AM_MYTUBE_ICO_ACK . '" title="' . _AM_MYTUBE_ICO_ACK . '" style="vertical-align: middle;">',
	'ack_no' => '<img src="../images/icon/film_off.png" alt="' . _AM_MYTUBE_ICO_REPORT . '" title="' . _AM_MYTUBE_ICO_REPORT . '" style="vertical-align: middle;">',
	'con_yes' => '<img src="../images/icon/film_on.png" alt="' . _AM_MYTUBE_ICO_CONFIRM . '" title="' . _AM_MYTUBE_ICO_CONFIRM . '" style="vertical-align: middle;">',
	'con_no' => '<img src="../images/icon/film_off.png" alt="' . _AM_MYTUBE_ICO_CONBROKEN . '" title="' . _AM_MYTUBE_ICO_CONBROKEN . '" style="vertical-align: middle;">',
	'view' => '<img src="../images/icon/view.png" alt="' . _AM_MYTUBE_ICO_VIEW . '" title="' . _AM_MYTUBE_ICO_VIEW . '" style="vertical-align: middle;">',
	'hd' => '<img src="../images/icon/hd.gif" alt="' . _AM_MYTUBE_ICO_HD . '" title="' . _AM_MYTUBE_ICO_HD . '" style="vertical-align: middle;">'
	);
?>