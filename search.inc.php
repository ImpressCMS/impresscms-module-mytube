<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: include/search.inc.php
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

function mytubecheckSearchgroups( $cid = 0, $permType='MyTubeCatPerm', $redirect=false ) {
    $groups = is_object( icms::$user ) ? icms::$user -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = icms::handler('icms_member_groupperm');
    $module = icms_getModuleInfo( basename( dirname( dirname( __FILE__ ) ) ) );
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $module -> getVar( 'mid' ) ) ) {
        if ( $redirect == false ) {
            return false;
        } else {
            redirect_header( 'index.php', 3, _NOPERM );
            exit();
        } 
    } 
    unset( $module );
    return true;
} 

function mytube_search( $queryarray, $andor, $limit, $offset, $userid ) {
	include_once ICMS_ROOT_PATH . '/modules/' . basename( dirname( dirname( __FILE__ ) ) ) . '/include/functions.php';
    $mytubeModule = icms_getModuleInfo( basename( dirname( dirname( __FILE__ ) ) ) );
    $config_handler = icms::$config;
    $mytubeModuleConfig = $config_handler -> getConfigsByCat( 0, $mytubeModule -> getVar( 'mid' ) );
    $sql = 'SELECT cid, pid FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' );
    $result = icms::$xoopsDB -> query( $sql );
    while ( $_search_group_check = icms::$xoopsDB -> fetchArray( $result ) ) {
        $_search_check_array[$_search_group_check['cid']] = $_search_group_check;
    } 
    $sql = 'SELECT lid, cid, title, submitter, published, description, nice_url FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' );
    $sql .= ' WHERE published > 0 AND published <= ' . time() . ' AND ( expired = 0 OR expired > ' . time() . ') AND offline = 0 AND cid > 0';
    if ( $userid != 0 ) {
        $sql .= ' AND submitter=' . $userid . ' ';
    } 
    // because count() returns 1 even if a supplied variable
    // is not an array, we must check if $querryarray is really an array
    if ( is_array( $queryarray ) && $count = count( $queryarray ) ) {
        $sql .= " AND ((title LIKE LOWER('%$queryarray[0]%') OR LOWER(description) LIKE LOWER('%$queryarray[0]%'))";
        for( $i = 1;$i < $count;$i++ ) {
            $sql .= " $andor ";
            $sql .= "(title LIKE LOWER('%$queryarray[$i]%') OR LOWER(description) LIKE LOWER('%$queryarray[$i]%'))";
        } 
        $sql .= ") ";
    } 
    $sql .= 'ORDER BY published DESC';
    $result = icms::$xoopsDB -> query( $sql, $limit, $offset );
    $ret = array();
    $i = 0;
    while ( $myrow = icms::$xoopsDB -> fetchArray( $result ) ) {
		// Following is commented out because it can cause a conflict with View Account function (userinfo.php)      
		//        if ( false == mytubecheckSearchgroups( $myrow['cid'] ) ) {
		//            continue;
		//        }
		$nice_link = mytube_nicelink( $myrow['title'], $myrow['nice_url'] );
		if ( $mytubeModuleConfig['niceurl'] ) {
			$ret[$i]['link'] = 'singlevideo.php?lid=' . intval( $myrow['lid'] ) . '&amp;page=' . $nice_link;
		} else {
			$ret[$i]['link'] = 'singlevideo.php?lid=' . intval( $myrow['lid'] );
		}
        $ret[$i]['image'] = 'images/size2.png';
        $ret[$i]['title'] = $myrow['title'];
        $ret[$i]['time']  = $myrow['published'];
        $ret[$i]['uid']   = $myrow['submitter'];
        $i++;
    } 
    unset( $_search_check_array );
    return $ret;
} 
?>