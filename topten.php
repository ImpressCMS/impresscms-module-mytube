<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: topten.php
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

include 'header.php';

$xoopsOption['template_main'] = 'mytube_topten.html';
include ICMS_ROOT_PATH . '/header.php';

$mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );

$action_array 	= array( 'hit' => 0, 'rate' => 1 );
$list_array 	= array( 'hits', 'rating' );
$lang_array 	= array( _MD_MYTUBE_HITS, _MD_MYTUBE_RATING );
$rankings 	    = array();

$sort 		= ( isset( $_GET['list'] ) && in_array( $_GET['list'], $action_array ) ) ? $_GET['list'] : 'rate';
$sort_arr 	= $action_array[$sort];
$sortDB 	= $list_array[$sort_arr];

if ( mytube_imageheader() != '' ) { $xoopsTpl -> assign( 'imageheader', '<div style="padding-bottom: 12px; text-align: center;">' . mytube_imageheader() . '</div>' ); }

$arr = array();
$result = icms::$xoopsDB -> query( 'SELECT cid, title, pid FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE pid=0 ORDER BY ' . icms::$module -> config['sortcats'] );

$e = 0;
while ( list( $cid, $ctitle ) = icms::$xoopsDB -> fetchRow( $result ) ) {
    if ( true == mytube_checkgroups( $cid ) ) {
        $query = 'SELECT lid, cid, title, hits, rating, votes, nice_url FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ') AND offline = 0 AND (cid=' . $cid;
        $arr = $mytree -> getAllChildId( $cid );
        for( $i = 0;$i < count( $arr );$i++ ) {
            $query .= ' or cid=' . $arr[$i] . '';
        } 
        $query .= ') ORDER BY ' . $sortDB . ' DESC';
        $result2 = icms::$xoopsDB -> query( $query, 10, 0 );
        $filecount = icms::$xoopsDB -> getRowsNum( $result2 );

        if ( $filecount > 0 ) {
            $rankings[$e]['title'] = $mytubemyts -> htmlSpecialCharsStrip( $ctitle );
            $rank = 1;
            while ( list( $did, $dcid, $dtitle, $hits, $rating, $votes, $nice_url ) = icms::$xoopsDB -> fetchRow( $result2 ) ) {
                $catpath = basename( $mytree -> getPathFromId( $dcid, 'title' ) );
				$nice_link = mytube_nicelink( $dtitle, $nice_url );
				$dtitle = $mytubemyts -> htmlSpecialCharsStrip( $dtitle );
                $rankings[$e]['file'][] = array( 'id' => $did, 'cid' => $dcid, 'rank' => $rank, 'title' => $dtitle, 'category' => $catpath, 'hits' => $hits, 'rating' => number_format( $rating, 2 ), 'votes' => $votes, 'nice_link' => $nice_link );
                $rank++;
            } 
            $e++;
        } 
    } 
}
$xoopsTpl -> assign( 'back' , '<a class="mytube_button" href="javascript:history.go(-1)">&#9668; ' . _BACK . '</a>' );
$xoopsTpl -> assign( 'lang_sortby' , $lang_array[$sort_arr] );
$xoopsTpl -> assign( 'rankings', $rankings );
$xoopsTpl -> assign( 'nice_url', icms::$module -> config['niceurl'] );
$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );

include ICMS_ROOT_PATH . '/footer.php';
?>