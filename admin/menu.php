<?php
/**
 * $Id: menu.php
 * Module: MyTube
 */

$adminmenu[1]['title'] = _MI_XTUBE_BINDEX;
$adminmenu[1]['link']  = 'admin/index.php';
$adminmenu[1]['icon']  = 'images/xtube_iconbig.png';

$adminmenu[2]['title'] = _MI_XTUBE_MVIDEOS;
$adminmenu[2]['link'] = 'admin/index.php?op=edit';
$adminmenu[2]['icon'] = 'images/icon/clapboard.png';

$adminmenu[3]['title'] = _MI_XTUBE_MCATEGORY;
$adminmenu[3]['link']  = 'admin/category.php';
$adminmenu[3]['icon']  = 'images/icon/folder.png';

$adminmenu[4]['title'] = _MI_XTUBE_INDEXPAGE;
$adminmenu[4]['link']  = 'admin/indexpage.php';
$adminmenu[4]['icon']  = 'images/icon/indexpage.png';

$adminmenu[5]['title'] = _MI_XTUBE_BLOCKADMIN;
$adminmenu[5]['link']  = 'admin/myblocksadmin.php';
$adminmenu[5]['icon']  = 'images/icon/blocks.png';
?>