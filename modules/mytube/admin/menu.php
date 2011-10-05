<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: admin/menu.php
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

$adminmenu[1]['title'] = _MI_MYTUBE_BINDEX;
$adminmenu[1]['link']  = 'admin/index.php';
$adminmenu[1]['icon']  = 'images/icon_big.png';

$adminmenu[2]['title'] = _MI_MYTUBE_MVIDEOS;
$adminmenu[2]['link']  = 'admin/index.php?op=edit';
$adminmenu[2]['icon']  = 'images/icon/clapboard.png';

$adminmenu[3]['title'] = _MI_MYTUBE_MMYTUBE;
$adminmenu[3]['link']  = 'admin/mytube.php?op=edit';
$adminmenu[3]['icon']  = 'images/icon/mytube_movie.png';

$adminmenu[4]['title'] = _MI_MYTUBE_MUPLOADS;
$adminmenu[4]['link']  = 'admin/upload.php';
$adminmenu[4]['icon']  = 'images/icon/image_add.png';

$adminmenu[5]['title'] = _MI_MYTUBE_VUPLOADS;
$adminmenu[5]['link']  = 'admin/vupload.php';
$adminmenu[5]['icon']  = 'images/icon/movie_add.png';

$adminmenu[6]['title'] = _MI_MYTUBE_MCATEGORY;
$adminmenu[6]['link']  = 'admin/category.php';
$adminmenu[6]['icon']  = 'images/icon/folder.png';

$adminmenu[7]['title'] = _MI_MYTUBE_INDEXPAGE;
$adminmenu[7]['link']  = 'admin/indexpage.php';
$adminmenu[7]['icon']  = 'images/icon/indexpage.png';

$adminmenu[8]['title'] = _MI_MYTUBE_MVOTEDATA;
$adminmenu[8]['link']  = 'admin/votedata.php';
$adminmenu[8]['icon']  = 'images/icon/certificate.png';

$adminmenu[9]['title'] = _MI_MYTUBE_RSSFEED;
$adminmenu[9]['link']	= 'admin/feed.php?op=edit';
$adminmenu[9]['icon']	= 'images/icon/feed32.png';

if ( isset( icms::$module ) ) {

	icms_loadLanguageFile( basename( dirname( dirname( __FILE__ ) ) ), 'admin' );
	
	$module = icms::handler( 'icms_module' ) -> getByDirname( basename( dirname( dirname( __FILE__ ) ) ), TRUE );
	
	$i = -1;
	
	$i++;
	$headermenu[$i]['title'] = _AM_MYTUBE_GOMODULE;
	$headermenu[$i]['link']  = ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/index.php';

	$i++;
	$headermenu[$i]['title'] = _PREFERENCES;
	$headermenu[$i]['link']  = '../../system/admin.php?fct=preferences&amp;op=showmod&amp;mod=' . $module -> getVar( 'mid' );

	$i++;
	$headermenu[$i]['title'] = _AM_MYTUBE_BUPDATE;
	$headermenu[$i]['link']  = ICMS_URL . '/modules/system/admin.php?fct=modulesadmin&op=update&module=' . basename( dirname( dirname( __FILE__ ) ) );
	
	$i++;
	$headermenu[$i]['title'] = _AM_MYTUBE_BPERMISSIONS;
	$headermenu[$i]['link']  = '../admin/permissions.php';
	
	$i++;
	$headermenu[$i]['title'] = _COMMENTS;
	$headermenu[$i]['link']	 = "../../system/admin.php?module=" . $module -> getVar( 'mid' ) . "&status=0&limit=100&fct=comments&selsubmit=Go";

	$i++;
	$headermenu[$i]['title'] = _MODABOUT_ABOUT;
	$headermenu[$i]['link']  = ICMS_URL . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/admin/about.php';
}	
?>