<?php
/**
 * $Id: menu.php
 * Module: MyTube
 */

$adminmenu[1]['title'] = _MI_XTUBE_BINDEX;
$adminmenu[1]['link']="admin/index.php";

$adminmenu[2]['title'] = _MI_XTUBE_INDEXPAGE;
$adminmenu[2]['link']="admin/indexpage.php";

$adminmenu[3]['title'] = _MI_XTUBE_MCATEGORY;
$adminmenu[3]['link']="admin/category.php";

$adminmenu[4]['title'] = _MI_XTUBE_MVIDEOS;
//$adminmenu[4]['link']="admin/index.php?op=linkload";
$adminmenu[4]['link']="admin/index.php?op=edit";

//$adminmenu[5]['title'] = _MI_XTUBE_MUPLOADS;
//$adminmenu[5]['link']="admin/upload.php";

//$adminmenu[6]['title'] = _MI_XTUBE_VUPLOADS;
//$adminmenu[6]['link']="admin/vupload.php";

//$adminmenu[7]['title'] = _MI_XTUBE_MVOTEDATA;
//$adminmenu[7]['link']="admin/votedata.php";

$adminmenu[8]['title'] = _MI_XTUBE_BLOCKADMIN;
$adminmenu[8]['link']="admin/myblocksadmin.php";

?>