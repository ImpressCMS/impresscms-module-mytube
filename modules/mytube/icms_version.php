<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: icms_version.php
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

if ( !defined( 'ICMS_ROOT_PATH' ) ) die( 'ICMS root path not defined' );

$modversion['name'] 			= _MI_MYTUBE_NAME;
$modversion['version'] 			= '1.07';
$modversion['date'] 			= 'xx xxxxx 2012';
$modversion['status'] 			= 'Trunk';
$modversion['status_version'] 	= 'Trunk';
$modversion['description'] 		= _MI_MYTUBE_DESC;
$modversion['license'] 			= _MI_MYTUBE_LICENSEDSC;
$modversion['image'] 			= 'images/mytube_ilogo.png';
$modversion['iconsmall'] 		= 'images/icon_small.png';
$modversion['iconbig'] 			= 'images/icon_big.png';
$modversion['dirname'] 			= basename( dirname( __FILE__ ) );
$modversion['modname'] 			= 'mytube';

$modversion['author'] 			= 'McDonald';
$modversion['credits'] 			= 'WF-Projects Team. Based on the module WF-Links, thanks to the dream-team for some code snippits.';
$modversion['author_credits'] 	= _MI_MYTUBE_AUTHOR_CREDITSTEXT;
$modversion['author_website_url'] 	= 'http://code.google.com/p/mcdonaldsstore/downloads/list';
$modversion['author_website_name'] 	= 'McDonalds Store';
$modversion['support_site_url'] = 'http://community.impresscms.org/modules/newbb/viewforum.php?forum=9';
$modversion['support_site_name']= 'ImpressCMS Community Forum - Modules Support';

// ** Contributors **
$modversion['people']['developers'] [] = '<a href="http://community.impresscms.org/userinfo.php?uid=179" target="_blank">McDonald</a>&nbsp;&nbsp;<span style="font-size: smaller;">( pietjebell31 [at] hotmail [dot] com )</span>';

// ** Translators **
$modversion['people']['translators'][] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=10" target="_blank">sato-san</a> (German)';
$modversion['people']['translators'][] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=14" target="_blank">GibaPhp</a>  (Portuguese-Brazil)';
$modversion['people']['translators'][] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=97" target="_blank">debianus</a> (Spanish)';
$modversion['people']['translators'][] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=179" target="_blank">McDonald</a>  (Dutch)';
$modversion['people']['translators'][] = '&middot; <a href="http://community.impresscms.org/userinfo.php?uid=392" target="_blank">stranger</a>  (Persian)';
$modversion['people']['translators'][] = '&middot; <a href="http://xoops.oceanblue-site.com/userinfo.php?uid=1" target="_blank">manta</a> (Japanese)';

// ** Other contributors **
$modversion['people']['other']      [] = '&middot; <a href="http://www.famfamfam.com" target="_blank">famfamfam.com</a> (icons)';
$modversion['people']['other']      [] = '&middot; <a href="http://flowplayer.org" target="_blank">Flowplayer</a>';

// ** If Release Candidate **
$modversion['warning'] = _MI_MYTUBE_WARNING_RC;

// ** If Final  **
// $modversion['warning'] = _MI_MYTUBE_WARNING_FINAL;

// Sql file (must contain sql generated by phpMyAdmin or phpPgAdmin)
// All tables should not have any prefix!
$modversion['sqlfile']['mysql'] = 'sql/mytube.sql';

// Tables created by sql file (without prefix!)
$modversion['tables'][0] = 'mytube_broken';
$modversion['tables'][1] = 'mytube_cat';
$modversion['tables'][2] = 'mytube_videos';
$modversion['tables'][3] = 'mytube_mod';
$modversion['tables'][4] = 'mytube_votedata';
$modversion['tables'][5] = 'mytube_indexpage';
$modversion['tables'][6] = 'mytube_altcat';
$modversion['tables'][7] = 'mytube_configs';

// Launch additional install script to check
$modversion['onInstall'] = 'include/install.php';
$modversion['onUpdate']  = 'include/update.php';

// Admin things
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

// Blocks
$modversion['blocks'][] = array(
	'file' 			=> 'mytube_top.php',
	'name' 			=> _MI_MYTUBE_BNAME1,
	'description'	=> 'Shows recently added video',
	'show_func'		=> 'b_mytube_top_show',
	'edit_func'		=> 'b_mytube_top_edit',
	'options'		=> 'published|10|19|d/m/Y|0',
	'template'		=> 'mytube_block_new_t.html',
	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'mytube_top.php',
	'name'			=> _MI_MYTUBE_BNAME2,
	'description'	=> 'Shows recently added video',
	'show_func'		=> 'b_mytube_top_show',
	'edit_func'		=> 'b_mytube_top_edit',
	'options'		=> 'published|10|19|d/m/Y|0',
	'template'		=> 'mytube_block_new.html',
	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'mytube_top.php',
	'name'			=> _MI_MYTUBE_BNAME3,
	'description'	=> 'Shows top clicked videos',
	'show_func'		=> 'b_mytube_top_show',
	'edit_func'		=> 'b_mytube_top_edit',
	'options'		=> 'hits|10|19|d/m/Y|0',
	'template'		=> 'mytube_block_top_t.html',
	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'mytube_top.php',
	'name'			=> _MI_MYTUBE_BNAME4,
	'description'	=> 'Shows top clicked videos',
	'show_func'		=> 'b_mytube_top_show',
	'edit_func'		=> 'b_mytube_top_edit',
	'options'		=> 'hits|10|19|d/m/Y|0',
	'template'		=> 'mytube_block_top.html',
	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'mytube_top.php',
	'name'			=> _MI_MYTUBE_BNAME5,
	'description'	=> 'Shows recently added video',
	'show_func'		=> 'b_mytube_top_show',
	'edit_func'		=> 'b_mytube_top_edit',
	'options'		=> 'published|5|19|d/m/Y|0',
	'template'		=> 'mytube_block_new_h.html',
	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'mytube_top.php',
	'name'			=> _MI_MYTUBE_BNAME6,
	'description'	=> 'Shows random video',
	'show_func'		=> 'b_mytube_random',
	'edit_func'		=> 'b_mytube_random_edit',
	'options'		=> 'random|5|19|d/m/Y|0',
	'template'		=> 'mytube_block_random.html',
	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'mytube_top.php',
	'name'			=> _MI_MYTUBE_BNAME7,
	'description'	=> 'Shows random video',
	'show_func'		=> 'b_mytube_randomh',
	'edit_func'		=> 'b_mytube_random_edit',
	'options'		=> 'randomh|5|19|d/m/Y|0',
	'template'		=> 'mytube_block_random_h.html',
	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'mytube_block_tag.php',
	'name'			=> _MI_MYTUBE_BNAME9,
	'description'	=> 'Show tag cloud',
	'show_func'		=> 'mytube_tag_block_cloud_show',
	'edit_func'		=> 'mytube_tag_block_cloud_edit',
	'options'		=> '100|0|150|80',
	'template'		=> 'mytube_tag_block_cloud.html',
	'can_clone'		=> true );

$modversion['blocks'][] = array(
	'file'			=> 'mytube_block_tag.php',
	'name'			=> _MI_MYTUBE_BNAME10,
	'description'	=> 'Show top tag',
	'show_func'		=> 'mytube_tag_block_top_show',
	'edit_func'		=> 'mytube_tag_block_top_edit',
	'options'		=> '50|30|c',
	'template'		=> 'mytube_tag_block_tag.html',
	'can_clone'		=> true );

// Menu
$modversion['hasMain'] = 1;

// This part inserts the selected topics as sub items in the Xoops main menu
$module_handler = &icms::handler( 'icms_module' );
$module = &$module_handler -> getByDirname( $modversion['dirname'] );
$cansubmit = 0;
if ( is_object( $module ) ) {
    $groups = ( is_object( icms::$user ) ) ? icms::$user -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = icms::handler('icms_member_groupperm');
    if ( $gperm_handler -> checkRight( 'MyTubeSubPerm', 0, $groups, $module -> getVar( 'mid' ) ) ) {
        $cansubmit = 1;
    } 
} 
if ( $cansubmit == 1 ) {
    $modversion['sub'][0]['name'] = _MI_MYTUBE_SMNAME1;
    $modversion['sub'][0]['url']  = 'submit.php';
} 
unset( $cansubmit );

$i = 1;
$modversion['sub'][$i]['name'] = _MI_MYTUBE_SMNAME2;
$modversion['sub'][$i]['url']  = 'topten.php?list=hit';

$i++;
$modversion['sub'][$i]['name'] = _MI_MYTUBE_SMNAME3;
$modversion['sub'][$i]['url']  = 'topten.php?list=rate';

$i++;
$modversion['sub'][$i]['name'] = _MI_MYTUBE_SMNAME4;
$modversion['sub'][$i]['url']  = 'newlist.php?newvideoshowdays=7';
unset( $i );

// Search
$modversion['hasSearch'] = 1;
$modversion['search']['file'] = 'include/search.inc.php';
$modversion['search']['func'] = 'mytube_search';

// Comments
$modversion['hasComments'] = 1;
$modversion['comments']['itemName'] = 'lid';
$modversion['comments']['pageName'] = 'singlevideo.php';
$modversion['comments']['extraParams'] = array( 'cid' );

// Comment callback functions
$modversion['comments']['callbackFile'] = 'include/comment_functions.php';
$modversion['comments']['callback']['approve'] = 'mytube_com_approve';
$modversion['comments']['callback']['update'] = 'mytube_com_update'; 

// Templates
$modversion['templates'][] = array(
	'file'			=> 'mytube_brokenvideo.html',
	'description'	=> '' );

$modversion['templates'][] = array(
	'file'			=> 'mytube_videoload.html',
	'description'	=> '' );

$modversion['templates'][] = array(
	'file'			=> 'mytube_index.html',
	'description'	=> '' );

$modversion['templates'][] = array(
	'file'			=> 'mytube_ratevideo.html',
	'description'	=> '' );

$modversion['templates'][] = array(
	'file'			=> 'mytube_singlevideo.html',
	'description'	=> '' );

$modversion['templates'][] = array(
	'file'			=> 'mytube_topten.html',
	'description'	=> '' );

$modversion['templates'][] = array(
	'file'			=> 'mytube_viewcat.html',
	'description'	=> '' );

$modversion['templates'][] = array(
	'file'			=> 'mytube_newlistindex.html',
	'description'	=> '' );

$modversion['templates'][] = array(
	'file'			=> 'mytube_rss.html',
	'description'	=> '' );
	
$modversion['templates'][] = array(
	'file'			=> 'mytube_disclaimer.html',
	'description'	=> '' );
	
$modversion['templates'][] = array(
	'file'			=> 'mytube_moduleabout.html',
	'description'	=> '' );

// Module config setting
$modversion['config'][] = array(
	'name' 			=> 'popular',
	'title' 		=> '_MI_MYTUBE_POPULAR',
	'description' 	=> '_MI_MYTUBE_POPULARDSC',
	'formtype' 		=> 'select',
	'valuetype' 	=> 'int',
	'default' 		=> 100,
	'options' 		=> array( '5' => 5, '10' => 10, '50' => 50, '100' => 100, '200' => 200, '500' => 500, '1000' => 1000 ) );

$modversion['config'][] = array(
	'name'			=> 'displayicons',
	'title'			=> '_MI_MYTUBE_ICONDISPLAY',
	'description'	=> '_MI_MYTUBE_DISPLAYICONDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 1,
	'options'		=> array( '_MI_MYTUBE_DISPLAYICON1' => 1, '_MI_MYTUBE_DISPLAYICON2' => 2, '_MI_MYTUBE_DISPLAYICON3' => 3 ) );

$modversion['config'][] = array(
	'name' 			=> 'daysnew',
	'title' 		=> '_MI_MYTUBE_DAYSNEW',
	'description' 	=> '_MI_MYTUBE_DAYSNEWDSC',
	'formtype' 		=> 'textbox',
	'valuetype' 	=> 'int',
	'default' 		=> 10 );

$modversion['config'][] = array(
	'name'			=> 'daysupdated',
	'title'			=> '_MI_MYTUBE_DAYSUPDATED',
	'description'	=> '_MI_MYTUBE_DAYSUPDATEDDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 10 );

$modversion['config'][] = array(
	'name'			=> 'perpage',
	'title'			=> '_MI_MYTUBE_PERPAGE',
	'description'	=> '_MI_MYTUBE_PERPAGEDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 10,
	'options'		=> array( '5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50 ) );

$modversion['config'][] = array(
	'name'			=> 'admin_perpage',
	'title'			=> '_MI_MYTUBE_ADMINPAGE',
	'description'	=> '_MI_MYTUBE_AMDMINPAGEDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 10,
	'options'		=> array( '5' => 5, '10' => 10, '15' => 15, '20' => 20, '25' => 25, '30' => 30, '50' => 50, '75' => 75, '100' => 100 ) );

$qa = ' (A)';
$qd = ' (D)';
$modversion['config'][] = array(
	'name'			=> 'linkxorder',
	'title'			=> '_MI_MYTUBE_ARTICLESSORT',
	'description'	=> '_MI_MYTUBE_ARTICLESSORTDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 'title ASC',
	'options'		=> array(	_MI_MYTUBE_TITLE . $qa 		=> 'title ASC',
								_MI_MYTUBE_TITLE . $qd 		=> 'title DESC',
								_MI_MYTUBE_SUBMITTED2 . $qa => 'published ASC' ,
								_MI_MYTUBE_SUBMITTED2 . $qd => 'published DESC',
								_MI_MYTUBE_RATING . $qa		=> 'rating ASC',
								_MI_MYTUBE_RATING . $qd		=> 'rating DESC',
								_MI_MYTUBE_POPULARITY . $qa	=> 'hits ASC',
								_MI_MYTUBE_POPULARITY . $qd => 'hits DESC' ) );

$modversion['config'][] = array(
	'name'			=> 'sortcats',
	'title'			=> '_MI_MYTUBE_SORTCATS',
	'description'	=> '_MI_MYTUBE_SORTCATSDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 'title',
	'options'		=> array( 	'Weight' => 'weight',
								'Title'  => 'title' ) );

$modversion['config'][] = array(
	'name'			=> 'subcats',
	'title'			=> '_MI_MYTUBE_SUBCATS',
	'description'	=> '_MI_MYTUBE_SUBCATSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'catcolumns',
	'title'			=> '_MI_MYTUBE_CATCOLUMNS',
	'description'	=> '_MI_MYTUBE_CATCOLUMNSDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 2,
	'options'		=> array( '1' => 1, '2' => 2, '3' => 3, '4' => 4, '5' => 5 ) );

$modversion['config'][] = array(
	'name'			=> 'form_options',
	'title'			=> '_MI_MYTUBE_EDITOR',
	'description'	=> '_MI_MYTUBE_EDITORCHOICE',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 'tinymce',
	'options'		=>  array( 	_MI_MYTUBE_FORM_TINYMCE => 'tinymce',
								_MI_MYTUBE_FORM_FCK => 'fckeditor',
								_MI_MYTUBE_FORM_TINYEDITOR => 'tinyeditor' ) );

$modversion['config'][] = array(
	'name'			=> 'form_optionsuser',
	'title'			=> '_MI_MYTUBE_EDITORUSER',
	'description'	=> '_MI_MYTUBE_EDITORCHOICEUSER',
	'formtype'		=> 'select',
	'valuetype'		=> 'text',
	'default'		=> 'tinymce',
	'options'		=>  array( 	_MI_MYTUBE_FORM_TINYMCE => 'tinymce',
								_MI_MYTUBE_FORM_FCK => 'fckeditor',
								_MI_MYTUBE_FORM_TINYEDITOR => 'tinyeditor' ) );

$modversion['config'][] = array(
	'name'			=> 'captcha',
	'title'			=> '_MI_MYTUBE_CAPTCHA',
	'description'	=> '_MI_MYTUBE_CAPTCHADSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'screenshot',
	'title'			=> '_MI_MYTUBE_USESHOTS',
	'description'	=> '_MI_MYTUBE_USESHOTSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'usethumbs',
	'title'			=> '_MI_MYTUBE_USETHUMBS',
	'description'	=> '_MI_MYTUBE_USETHUMBSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'updatethumbs',
	'title'			=> '_MI_MYTUBE_IMGUPDATE',
	'description'	=> '_MI_MYTUBE_IMGUPDATEDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'shotwidth',
	'title'			=> '_MI_MYTUBE_SHOTWIDTH',
	'description'	=> '_MI_MYTUBE_SHOTWIDTHDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 120 );

$modversion['config'][] = array(
	'name'			=> 'shotheight',
	'title'			=> '_MI_MYTUBE_SHOTHEIGHT',
	'description'	=> '_MI_MYTUBE_SHOTHEIGHTDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 90 );

$modversion['config'][] = array(
	'name'			=> 'maxfilesize',
	'title'			=> '_MI_MYTUBE_MAXFILESIZE',
	'description'	=> '_MI_MYTUBE_MAXFILESIZEDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 200000 );

$modversion['config'][] = array(
	'name'			=> 'maximgwidth',
	'title'			=> '_MI_MYTUBE_IMGWIDTH',
	'description'	=> '_MI_MYTUBE_IMGWIDTHDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 600 );

$modversion['config'][] = array(
	'name'			=> 'maximgheight',
	'title'			=> '_MI_MYTUBE_IMGHEIGHT',
	'description'	=> '_MI_MYTUBE_IMGHEIGHTDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'int',
	'default'		=> 600 );

$modversion['config'][] = array(
	'name'			=> 'mainimagedir',
	'title'			=> '_MI_MYTUBE_MAINIMGDIR',
	'description'	=> '_MI_MYTUBE_MAINIMGDIRDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'modules/' . basename( dirname( __FILE__ ) ) . '/images' );

$modversion['config'][] = array(
	'name'			=> 'catimage',
	'title'			=> '_MI_MYTUBE_CATEGORYIMG',
	'description'	=> '_MI_MYTUBE_CATEGORYIMGDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'uploads/mytube/category' );

$modversion['config'][] = array(
	'name'			=> 'videodir',
	'title'			=> '_MI_MYTUBE_VIDEODIR',
	'description'	=> '_MI_MYTUBE_VIDEODIRDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'uploads/mytube/videos' );

$modversion['config'][] = array(
	'name'			=> 'videoimgdir',
	'title'			=> '_MI_MYTUBE_VIDEOIMGDIR',
	'description'	=> '_MI_MYTUBE_VIDEOIMGDIRDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'uploads/mytube/screenshots' );

$modversion['config'][] = array(
	'name'			=> 'dateformat',
	'title'			=> '_MI_MYTUBE_DATEFORMAT',
	'description'	=> '_MI_MYTUBE_DATEFORMATDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'D, d-M-Y' );
	
$modversion['config'][] = array(
	'name'			=> 'dateformatadmin',
	'title'			=> '_MI_MYTUBE_DATEFORMATADMIN',
	'description'	=> '_MI_MYTUBE_DATEFORMATADMINDSC',
	'formtype'		=> 'textbox',
	'valuetype'		=> 'text',
	'default'		=> 'D, d-M-Y - G:i' );
	
$modversion['config'][] = array(
	'name'			=> 'totalchars',
	'title'			=> '_MI_MYTUBE_TOTALCHARS',
	'description'	=> '_MI_MYTUBE_TOTALCHARSDSC',
	'formtype'		=> 'select',
	'valuetype'		=> 'int',
	'default'		=> 200,
	'options'		=> array( '100' => 100, '200' => 200, '300' => 300, '400' => 400, '500' => 500, '750' => 750 ) );

$modversion['config'][] = array(
	'name'			=> 'autoplay',
	'title'			=> '_MI_MYTUBE_AUTOPLAY',
	'description'	=> '_MI_MYTUBE_AUTOPLAYDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'othervideos',
	'title'			=> '_MI_MYTUBE_OTHERVIDEOS',
	'description'	=> '_MI_MYTUBE_OTHERVIDEOSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'showsbookmarks',
	'title'			=> '_MI_MYTUBE_SHOWSBOOKMARKS',
	'description'	=> '_MI_MYTUBE_SHOWSBOOKMARKSDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'usemetadescr',
	'title'			=> '_MI_MYTUBE_USEMETADESCR',
	'description'	=> '_MI_MYTUBE_USEMETADSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'usercantag',
	'title'			=> '_MI_MYTUBE_USERTAGDESCR',
	'description'	=> '_MI_MYTUBE_USERTAGDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'showrating',
	'title'			=> '_MI_MYTUBE_RATINGDISPLAY',
	'description'	=> '_MI_MYTUBE_RATINGDISPLAYDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'niceurl',
	'title'			=> '_MI_MYTUBE_NICEURL',
	'description'	=> '_MI_MYTUBE_NICEURLDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

$modversion['config'][] = array(
	'name'			=> 'showdisclaimer',
	'title'			=> '_MI_MYTUBE_SHOWDISCLAIMER',
	'description'	=> '_MI_MYTUBE_SHOWDISCLAIMERDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'disclaimer',
	'title'			=> '_MI_MYTUBE_DISCLAIMER',
	'description'	=> '_MI_MYTUBE_DISCLAIMERDSC',
	'formtype'		=> 'textsarea',
	'valuetype'		=> 'text',
	'default'		=> 'We have the right, but not the obligation to monitor and review submissions submitted by users, to this website. We shall not be responsible for any of the content of these messages. We further reserve the right, to delete, move or edit submissions that we, in its exclusive discretion, deems abusive, defamatory, obscene or in violation of any Copyright or Trademark laws or otherwise objectionable.' );

$modversion['config'][] = array(
	'name'			=> 'showvideodisclaimer',
	'title'			=> '_MI_MYTUBE_SHOWVIDEODISCL',
	'description'	=> '_MI_MYTUBE_SHOWVIDEODISCLDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 0 );

$modversion['config'][] = array(
	'name'			=> 'videodisclaimer',
	'title'			=> '_MI_MYTUBE_VIDEODISCLAIMER',
	'description'	=> '_MI_MYTUBE_VIDEODISCLAIMERDSC',
	'formtype'		=> 'textsarea',
	'valuetype'		=> 'text',
	'default'		=> 'The videos on this site are provided as is without warranty either expressed or implied. If you have a question concerning a particular piece video, feel free to contact the administrator of this website.<br /><br />Contact us if you have questions concerning this disclaimer.' );

$modversion['config'][] = array(
	'name'			=> 'copyright',
	'title'			=> '_MI_MYTUBE_COPYRIGHT',
	'description'	=> '_MI_MYTUBE_COPYRIGHTDSC',
	'formtype'		=> 'yesno',
	'valuetype'		=> 'int',
	'default'		=> 1 );

// Notification
$modversion['hasNotification'] = 1;
$modversion['notification']['lookup_file'] = 'include/notification.inc.php';
$modversion['notification']['lookup_func'] = 'mytube_notify_iteminfo';

$modversion['notification']['category'][] = array(
	'name'				=> 'global',
	'title'				=> _MI_MYTUBE_GLOBAL_NOTIFY,
	'description'		=> _MI_MYTUBE_GLOBAL_NOTIFYDSC,
	'subscribe_from'	=> array( 'index.php', 'viewcat.php', 'singlevideo.php' ) );

$modversion['notification']['category'][] = array(
	'name'				=> 'category',
	'title'				=> _MI_MYTUBE_CATEGORY_NOTIFY,
	'description'		=> _MI_MYTUBE_CATEGORY_NOTIFYDSC,
	'subscribe_from'	=> array( 'viewcat.php', 'singlevideo.php' ),
	'item_name'			=> 'cid',
	'allow_bookmark'	=> 1 );

$modversion['notification']['category'][] = array(
	'name'				=> 'video',
	'title'				=> _MI_MYTUBE_VIDEO_NOTIFY,
	'description'		=> _MI_MYTUBE_FILE_NOTIFYDSC,
	'subscribe_from'	=> 'singlevideo.php',
	'item_name'			=> 'lid',
	'allow_bookmark'	=> 1 );

$modversion['notification']['event'][] = array(
	'name'				=> 'new_category',
	'category'			=> 'global',
	'title'				=> _MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFY,
	'caption'			=> _MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP,
	'description'		=> _MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC,
	'mail_template'		=> 'global_newcategory_notify',
	'mail_subject'		=> _MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'video_modify',
	'category'			=> 'global',
	'admin_only'		=> 1,
	'title'				=> _MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFY,
	'caption'			=> _MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP,
	'description'		=> _MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC,
	'mail_template'		=> 'global_videomodify_notify',
	'mail_subject'		=> _MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'video_broken',
	'category'			=> 'global',
	'admin_only'		=> 1,
	'title'				=> _MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFY,
	'caption'			=> _MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP,
	'description'		=> _MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC,
	'mail_template'		=> 'global_videobroken_notify',
	'mail_subject'		=> _MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'video_submit',
	'category'			=> 'global',
	'admin_only'		=> 1,
	'title'				=> _MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY,
	'caption'			=> _MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP,
	'description'		=> _MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC,
	'mail_template'		=> 'global_videosubmit_notify',
	'mail_subject'		=> _MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'new_video',
	'category'			=> 'global',
	'title'				=> _MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFY,
	'caption'			=> _MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP,
	'description'		=> _MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC,
	'mail_template'		=> 'global_newfile_notify',
	'mail_subject'		=> _MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'video_submit',
	'category'			=> 'category',
	'admin_only'		=> 1,
	'title'				=> _MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFY,
	'caption'			=> _MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP,
	'description'		=> _MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC,
	'mail_template'		=> 'category_videosubmit_notify',
	'mail_subject'		=> _MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'new_video',
	'category'			=> 'category',
	'title'				=> _MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFY,
	'caption'			=> _MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP,
	'description'		=> _MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC,
	'mail_template'		=> 'category_newfile_notify',
	'mail_subject'		=> _MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ );

$modversion['notification']['event'][] = array(
	'name'				=> 'approve',
	'category'			=> 'video',
	'invisible'			=> 1,
	'title'				=> _MI_MYTUBE_VIDEO_APPROVE_NOTIFY,
	'caption'			=> _MI_MYTUBE_VIDEO_APPROVE_NOTIFYCAP,
	'description'		=> _MI_MYTUBE_VIDEO_APPROVE_NOTIFYDSC,
	'mail_template'		=> 'video_approve_notify',
	'mail_subject'		=> _MI_MYTUBE_VIDEO_APPROVE_NOTIFYSBJ );
?>