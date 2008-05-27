<?php
/**
 * $Id: admin_header.php
 * Module: MyTube
 */
 
include '../../../mainfile.php';
include '../../../include/cp_header.php';

include XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar('dirname') . '/include/config.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar('dirname') . '/include/functions.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar('dirname') . '/include/video.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar('dirname') . '/class/xtube_lists.php';
include_once XOOPS_ROOT_PATH . '/modules/' . $xoopsModule->getVar('dirname') . '/class/myts_extended.php';

include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';
include_once XOOPS_ROOT_PATH . '/class/xoopslists.php';
include_once XOOPS_ROOT_PATH . '/class/xoopsformloader.php';

$xtubemyts = new xtubeTextSanitizer(); // MyTextSanitizer object

$imagearray = array(
	'editimg' => "<img src='../images/icon/film_edit.png' alt='" . _AM_XTUBE_ICO_EDIT . "' align='middle'>",
        'deleteimg' => "<img src='../images/icon/film_delete.png' alt='" . _AM_XTUBE_ICO_DELETE . "' align='middle'>",
	'altcat' => "<img src='../images/icon/folder_add.png' alt='" . _AM_XTUBE_ALTCAT_CREATEF . "' align='middle'>",
        'online' => "<img src='../images/icon/film_on.png' alt='" . _AM_XTUBE_ICO_ONLINE . "' align='middle'>",
        'offline' => "<img src='../images/icon/film_off.png' alt='" . _AM_XTUBE_ICO_OFFLINE . "' align='middle'>",
        'expired' => "<img src='../images/icon/clock_red.png' alt='" . _AM_XTUBE_ICO_EXPIRE . "' align='middle'>",
        'approved' => "<img src='../images/icon/film_on.png' alt=''" . _AM_XTUBE_ICO_APPROVED . "' align='middle'>",
        'notapproved' => "<img src='../images/icon/film_off.png' alt='" . _AM_XTUBE_ICO_NOTAPPROVED . "' align='middle'>",
        'relatedfaq' => "<img src='../images/icon/link.gif' alt='" . _AM_XTUBE_ICO_VIDEO . "' align='absmiddle'>",
        'approve' => "<img src='../images/icon/film_approve.png' alt='" . _AM_XTUBE_ICO_APPROVE . "' align='middle'>",
	'ignore' => "<img src='../images/icon/film_ignore.png' alt='" . _AM_XTUBE_ICO_IGNORE . "' align='middle'>",
        'ack_yes' => "<img src='../images/icon/film_on.png' alt='" . _AM_XTUBE_ICO_ACK . "' align='middle'>",
	'ack_no' => "<img src='../images/icon/film_off.png' alt='" . _AM_XTUBE_ICO_REPORT . "' align='middle'>",
        'con_yes' => "<img src='../images/icon/film_on.png' alt='" . _AM_XTUBE_ICO_CONFIRM . "' align='middle'>",
	'con_no' => "<img src='../images/icon/film_off.png' alt='" . _AM_XTUBE_ICO_CONBROKEN . "' align='middle'>",
	'view' => "<img src='../images/icon/view.gif' alt='" . _AM_XTUBE_ICO_VIEW . "' align='middle'>"
	);

?>