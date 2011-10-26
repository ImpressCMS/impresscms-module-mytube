<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: viewcat.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				MyTube
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

include 'header.php';

// Begin Main page Heading etc
$cid = intval( mytube_cleanRequestVars( $_REQUEST, 'cid', 0 ) );
$selectdate = mytube_cleanRequestVars( $_REQUEST, 'selectdate', '' );
$list = mytube_cleanRequestVars( $_REQUEST, 'list', '' );
$start = intval( mytube_cleanRequestVars( $_REQUEST, 'start', 0 ) );

$catsort = icms::$module -> config['sortcats'];
$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );
$arr = $mytree -> getFirstChild( $cid, $catsort );

if ( is_array( $arr ) > 0 && !$list && !$selectdate ) {
    if ( false == mytube_checkgroups( $cid ) ) {
        redirect_header( 'index.php', 1, _MD_MYTUBE_MUSTREGFIRST );
        exit();
    } 
}

$xoopsOption['template_main'] = 'mytube_viewcat.html';
include ICMS_ROOT_PATH . '/header.php';

// Breadcrumb
$pathstring = '<a href="index.php">' . icms::$module -> getVar( 'name' ) . '</a>&nbsp;:&nbsp;';
$pathstring .= $mytree -> getNicePathFromId( $cid, 'title', 'viewcat.php?op=' );
$xoopsTpl -> assign( 'category_path', $pathstring );
$xoopsTpl -> assign( 'category_id', $cid );

// Display Sub-categories for selected Category
if ( is_array( $arr ) > 0 && !$list && !$selectdate ) {
    $scount = 1;
    foreach( $arr as $ele ) {
        if ( mytube_checkgroups( $ele['cid'] ) == false ) {
            continue;
        } 
        $sub_arr = array();
        $sub_arr = $mytree -> getFirstChild( $ele['cid'], $catsort );
        $space = 1;
        $chcount = 1;
        $infercategories = '';
        foreach( $sub_arr as $sub_ele ) {
            // Subitem file count
            $hassubitems = mytube_getTotalItems( $sub_ele['cid'], 1 );
            // Filter group permissions
            if ( true == mytube_checkgroups( $sub_ele['cid'] ) ) {
                // If subcategory count > 5 then finish adding subcats to $infercategories and end
                if ( $chcount > 5 ) {
                    $infercategories .= '...';
                    break;
                } 
                if ( $space > 0 ) $infercategories .= '<div style="margin-left: 45px; font-size: smaller; padding-top: 0px;">- ';
				$infercategories .= '<a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $sub_ele['cid'] . '">' . $mytubemyts -> htmlSpecialCharsStrip( $sub_ele['title'] ) . '</a> (' . $hassubitems['count'] . ')</div>';
                $space++;
                $chcount++;
            } 
        } 
        $totalvideos = mytube_getTotalItems( $ele['cid'], 1 );
        $indicator = mytube_isnewimage( $totalvideos['published'] );
         
		// This code is copyright WF-Projects
		// Using this code without our permission or removing this code voids the license agreement 

        $_image = ( $ele['imgurl'] ) ? urldecode( $ele['imgurl'] ) : '';
	if ( $_image != '' && icms::$module -> config['usethumbs'] ) {
            $_thumb_image = new mytubeThumbsNails( $_image, icms::$module -> config['catimage'], 'thumbs' );
	    if ( $_thumb_image ) {
                $_thumb_image -> setUseThumbs( 1 );
                $_thumb_image -> setImageType( 'gd2' );
                $_image = $_thumb_image -> do_thumb( icms::$module -> config['shotwidth'],
                    icms::$module -> config['shotheight'],
                    icms::$module -> config['imagequality'],
                    icms::$module -> config['updatethumbs'],
                    icms::$module -> config['keepaspect'] 
                    );
            }
        } 
        
	if ( empty( $_image ) || $_image == '' ) {
            $imgurl = $indicator['image'];
            $_width = 33;
            $_height = 24;
        } else {
            $imgurl = icms::$module -> config['catimage'] . "/$_image";
            $_width = icms::$module -> config['shotwidth'];
            $_height = icms::$module -> config['shotheight'];
        }
        // End

        $xoopsTpl -> append( 'subcategories', array( 'title' => $mytubemyts -> htmlSpecialCharsStrip( $ele['title'] ),
                'id' => $ele['cid'],
                'image' => ICMS_URL . "/$imgurl",
                'width' => $_width,
                'height' => $_height,
                'infercategories' => $infercategories,
                'totalvideos' => $totalvideos['count'],
                'count' => $scount,
                'alttext' => $ele['description'] )
            );
        $scount++;
    }
}

// Show Description for Category listing
$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . $cid;
$head_arr = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
$description = icms_core_DataFilter::checkVar( $head_arr['description'], 'html' );
if ( $description != '' ) {
	$xoopsTpl -> assign( 'description', '<div>' . $description . '</div>' );
}
$module_handler = icms::handler( 'icms_module' );
$versioninfo = &$module_handler -> get( icms::$module -> getVar( 'mid' ) );
if ($head_arr['title'] > '') {
	$xoopsTpl -> assign( 'icms_pagetitle', $head_arr['title'] );
}

if ( mytube_imageheader() != '' ) {
	$catarray['imageheader'] = '<div style="padding-bottom: 12px; text-align: center;">' . mytube_imageheader() . '</div>';
}
$catarray['letters'] = mytube_letters();

$xoopsTpl -> assign( 'catarray', $catarray );
// Extract linkload information from database
$xoopsTpl -> assign( 'show_categort_title', true );

$orderby = ( isset( $_REQUEST['orderby'] ) && !empty( $_REQUEST['orderby'] ) ) ? mytube_convertorderbyin( htmlspecialchars( $_REQUEST['orderby'] ) ) : mytube_convertorderbyin( icms::$module -> config['linkxorder'] );

if ( $selectdate ) {

    $d = date( 'j', $selectdate );
    $m = date( 'm', $selectdate );
    $y = date( 'Y', $selectdate );

    $stat_begin = mktime ( 0, 0, 0, $m, $d, $y );
    $stat_end   = mktime ( 23, 59, 59, $m, $d, $y );

    $query = ' WHERE published>=' . $stat_begin . ' AND published<=' . $stat_end . ' AND (expired=0 OR expired>' . time() . ') AND offline=0 AND cid>0';

    $sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . $query . ' ORDER BY ' . $orderby;
    $result = icms::$xoopsDB -> query( $sql, icms::$module -> config['perpage'], $start );

    $sql = 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . $query;
    list( $count ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql ) );

    $list_by = 'selectdate=' . $selectdate;
	
} elseif ( $list ) {

    $query = ' WHERE title LIKE "' . $list . '%" AND (published>0 AND published<=' . time() . ') AND (expired=0 OR expired>' . time() . ') AND offline=0 AND cid>0';

    $sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . $query . ' ORDER BY ' . $orderby;
    $result = icms::$xoopsDB -> query( $sql, icms::$module -> config['perpage'], $start );

    $sql2 = 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . $query;
    list( $count ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql2 ) );
    $list_by = "list=$list";
	
} else {

	$query = 'WHERE a.published>0 AND a.published<=' . time() . ' AND (a.expired=0 OR a.expired>' . time() . ') AND a.offline=0' . ' AND (b.cid=a.cid OR (a.cid=' . $cid . ' OR b.cid=' . $cid . '))';

    $sql = 'SELECT DISTINCT a.* FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' a LEFT JOIN ' . icms::$xoopsDB -> prefix( 'mytube_altcat' ) . ' b ON b.lid=a.lid ' . $query . ' ORDER BY ' . $orderby;
    $result = icms::$xoopsDB -> query( $sql, icms::$module -> config['perpage'], $start );

    $sql2 = 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' a LEFT JOIN ' . icms::$xoopsDB -> prefix( 'mytube_altcat' ) . ' b ON b.lid=a.lid ' . $query;
    list( $count ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql2 ) );

    $order = mytube_convertorderbyout( $orderby );
    $list_by = 'cid=' . $cid . '&orderby=' . $order;
	$xoopsTpl -> assign( 'show_categort_title', false );
	
}

	$pagenav = new icms_view_PageNav( $count, icms::$module -> config['perpage'], $start, 'start', $list_by );
	$page_nav = $pagenav -> renderNav();
    $istrue = ( isset( $page_nav ) && !empty( $page_nav ) ) ? true : false;
    $xoopsTpl -> assign( 'page_nav', $istrue );
    $xoopsTpl -> assign( 'pagenav', $page_nav );
    $xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );

// Show links
if ( $count > 0 ) {
    $moderate = 0;
    while ( $video_arr = icms::$xoopsDB -> fetchArray( $result ) ) {
		require ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/include/videoloadinfo.php';
        $xoopsTpl -> append( 'video', $video );
    }
	unset( $video_arr );
	
    // Show order box
    $xoopsTpl -> assign( 'show_videos', false );
    if ( $count > 1 && $cid != 0 ) {
        $xoopsTpl -> assign( 'show_videos', true );
        $orderbyTrans = mytube_convertorderbytrans( $orderby );
        $xoopsTpl -> assign( 'lang_cursortedby', sprintf( _MD_MYTUBE_CURSORTBY, mytube_convertorderbytrans( $orderby ) ) );
        $orderby = mytube_convertorderbyout( $orderby );
    } 

    // Screenshots display
    $xoopsTpl -> assign( 'show_screenshot', false );
    if ( isset( icms::$module -> config['screenshot'] ) && icms::$module -> config['screenshot'] == 1 ) {
        $xoopsTpl -> assign( 'shotwidth', icms::$module -> config['shotwidth'] );
        $xoopsTpl -> assign( 'shotheight', icms::$module -> config['shotheight'] );
        $xoopsTpl -> assign( 'show_screenshot', true );
    } 
} 

$xoopsTpl -> assign( 'cat_columns', icms::$module -> config['catcolumns'] );

include ICMS_ROOT_PATH . '/footer.php';
?>