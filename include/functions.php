<?php
/**
 * $Id: functions.php
 * Module: MyTube
 */

// wfs_gethandler()
//
// @param  $name
// @param boolean $optional
// @return
function &xtube_gethandler( $name, $optional = false ) {
    global $handlers, $xoopsModule;

    $name = strtolower( trim( $name ) );
    if ( !isset( $handlers[$name] ) ) {
        if ( file_exists( $hnd_file = XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/class/class_' . $name . '.php' ) ) {
            require_once $hnd_file;
        } 
        $class = 'xtube' . ucfirst( $name ) . 'Handler';
        if ( class_exists( $class ) ) {
            $handlers[$name] = new $class( $GLOBALS['xoopsDB'] );
        } 
    } 
    if ( !isset( $handlers[$name] ) && !$optional ) {
        trigger_error( '<div>Class <b>' . $class . '</b> does not exist.</div>
						<div>Handler Name: ' . $name, E_USER_ERROR ) . '</div>';
    } 
    return isset( $handlers[$name] ) ? $handlers[$name] : false;
} 

function xtube_checkgroups( $cid = 0, $permType = 'XTubeCatPerm', $redirect = false ) {
    global $xoopsUser, $xoopsModule;

    $groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = &xoops_gethandler( 'groupperm' );
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $xoopsModule -> getVar( 'mid' ) ) ) {
        if ( $redirect == false ) {
            return false;
        } else {
            redirect_header( 'index.php', 3, _NOPERM );
            exit();
        } 
    } 
    return true;
} 

function xtube_getVoteDetails( $lid = 0 ) {
    global $xoopsDB;

    $sql = "SELECT 
		COUNT(rating) AS rate, 
		MIN(rating) AS min_rate, 
		MAX(rating) AS max_rate, 
		AVG(rating) AS avg_rate, 
		COUNT(ratinguser) AS rating_user, 
		MAX(ratinguser) AS max_user, 
		MAX(title) AS max_title, 
		MIN(title) AS min_title, 
		sum(ratinguser = 0) AS null_ratinguser 
		FROM " . $xoopsDB -> prefix( 'xoopstube_votedata' );
    if ( $lid > 0 ) {
        $sql .= " WHERE lid = $lid";
    } 
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        return false;
    } 
    $ret = $xoopsDB -> fetchArray( $result );
    return $ret;
} 

function xtube_calcVoteData( $sel_id = 0 ) {
    $ret = array();
    $ret['useravgrating'] = 0;

    $sql = "SELECT rating FROM " . $xoopsDB -> prefix( 'xoopstube_votedata' );
    if ( $sel_id != 0 ) {
        " WHERE lid = " . $sel_id;
    } 
    if ( !$result = $xoopsDB -> query( $sql ) ) {
        return false;
    } 
    $ret['uservotes'] = $xoopsDB -> getRowsNum( $result );
    while ( list( $rating ) = $xoopsDB -> fetchRow( $result ) ) {
        $ret['useravgrating'] += intval( $rating );
    } 
    if ( $ret['useravgrating'] > 0 ) {
        $ret['useravgrating'] = number_format( ( $ret['useravgrating'] / $ret['uservotes'] ), 2 );
    } 
    return $ret;
} 

function xtube_cleanRequestVars( &$array, $name = null, $def = null, $strict = false, $lengthcheck = 15 ) {
    // Sanitise $_request for further use.  This method gives more control and security.
    // Method is more for functionality rather than beauty at the moment, will correct later.
    unset( $array['usercookie'] );
    unset( $array['PHPSESSID'] );

    if ( is_array( $array ) && $name == null ) {
        $globals = array();
        foreach ( array_keys( $array ) as $k ) {
            $value = strip_tags( trim( $array[$k] ) );
            if ( strlen( $value >= $lengthcheck ) ) {
                return null;
            }
            if ( ctype_digit( $value ) ) {
                $value = intval( $value );
            } else {
                if ( $strict == true ) {
                    $value = preg_replace( '/\W/', '', trim( $value ) );
                } 
                $value = strtolower( strval( $value ) );
            } 
            $globals[$k] = $value;
        } 
        return $globals;
    }
    if ( !isset( $array[$name] ) || !array_key_exists( $name, $array ) ) {
        return $def;
    } else {
        $value = strip_tags( trim( $array[$name] ) );
    }
    if ( ctype_digit( $value ) ) {
        $value = intval( $value );
    } else {
        if ( $strict == true ) {
            $value = preg_replace( '/\W/', '', trim( $value ) );
        } 
        $value = strtolower( strval( $value ) );
    } 
    return $value;
} 

function xtube_toolbar( $cid = 0 ) {
    $toolbar = "[ ";
    if ( true == xtube_checkgroups( $cid, 'XTubeSubPerm' ) ) {
        $toolbar .= "<a href='submit.php?cid=" . $cid . "'>" . _MD_XTUBE_SUBMITVIDEO . "</a> | ";
    } 
    $toolbar .= "<a href='newlist.php?newvideoshowdays=7'>" . _MD_XTUBE_LATESTLIST . "</a> | <a href='topten.php?list=hit'>" . _MD_XTUBE_POPULARITY . "</a> | <a href='topten.php?list=rate'>" . _MD_XTUBE_TOPRATED . "</a> ]";
    return $toolbar;
} 

function xtube_serverstats() {
    echo "  <div style='padding:5px; background-color: #EEEEEE; border: 1px solid #D9D9D9;'>
            <span style='font-weight: bold; color: #0A3760;'>" . _AM_XTUBE_VIDEO_IMAGEINFO . "<br /><br /></span>\n
	    <span style='padding: 12px;'>" . _AM_XTUBE_VIDEO_SPHPINI . "<br /><br /><span>\n";

    $safemode = ( ini_get( 'safe_mode' ) ) ? _AM_XTUBE_VIDEO_ON . _AM_XTUBE_VIDEO_SAFEMODEPROBLEMS : _AM_XTUBE_VIDEO_OFF;
    $registerglobals = ( ini_get( 'register_globals' ) == '' ) ? _AM_XTUBE_VIDEO_OFF : _AM_XTUBE_VIDEO_ON;
    $videos = ( ini_get( 'file_uploads' ) ) ? _AM_XTUBE_VIDEO_ON : _AM_XTUBE_VIDEO_OFF;
    $gdlib = ( function_exists( 'gd_info' ) ) ? _AM_XTUBE_VIDEO_GDON : _AM_XTUBE_VIDEO_GDOFF;
    echo "<li>" . _AM_XTUBE_VIDEO_GDLIBSTATUS . $gdlib;
    if ( function_exists( 'gd_info' ) ) {
        if ( true == $gdlib = gd_info() ) {
            echo "<li>" . _AM_XTUBE_VIDEO_GDLIBVERSION . "<b>" . $gdlib['GD Version'] . "</b>";
        } 
    } 
    echo "<br /><br />\n\n";
    echo "<li>" . _AM_XTUBE_VIDEO_SAFEMODESTATUS . $safemode;
    echo "<li>" . _AM_XTUBE_VIDEO_REGISTERGLOBALS . $registerglobals;
    echo "<li>" . _AM_XTUBE_VIDEO_SERVERUPLOADSTATUS . $videos;
    echo "</div>";
    echo "<br />";
} 

// displayicons()
//
// @param  $time
// @param integer $status
// @param integer $counter
// @return
function xtube_displayicons( $time, $status = 0, $counter = 0 ) {
    global $xoopsModuleConfig, $xoopsModule;

    $new = '';
    $pop = '';
    $newdate = ( time() - ( 86400 * intval( $xoopsModuleConfig['daysnew'] ) ) );
    $popdate = ( time() - ( 86400 * intval( $xoopsModuleConfig['daysupdated'] ) ) ) ;

    if ( $xoopsModuleConfig['displayicons'] != 3 ) {
        if ( $newdate < $time ) {
            if ( intval( $status ) > 1 ) {
                if ( $xoopsModuleConfig['displayicons'] == 1 )
                    $new = "&nbsp;<img src=" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/update.png alt='' align ='absmiddle'/>";
                if ( $xoopsModuleConfig['displayicons'] == 2 )
                    $new = "<i>Updated!</i>";
            } else {
                if ( $xoopsModuleConfig['displayicons'] == 1 )
                    $new = "&nbsp;<img src=" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/new.png alt='' align ='absmiddle'/>";
                if ( $xoopsModuleConfig['displayicons'] == 2 )
                    $new = "<i>New!</i>";
            }
        } 
        if ( $popdate > $time ) {
            if ( $counter >= $xoopsModuleConfig['popular'] ) {
                if ( $xoopsModuleConfig['displayicons'] == 1 )
                    $pop = "&nbsp;<img src =" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon/popular.png alt='' align ='absmiddle'/>";
                if ( $xoopsModuleConfig['displayicons'] == 2 )
                    $pop = "<i>Popular!</i>";
            } 
        } 
    } 
    $icons = $new . " " . $pop;
    return $icons;
} 

if ( !function_exists( 'xtube_convertorderbyin' ) ) {
    // Reusable Link Sorting Functions
    // xtube_convertorderbyin()
    // @param  $orderby
    // @return
    function xtube_convertorderbyin( $orderby ) {
        switch ( trim( $orderby ) ) {
            case "titleA":
                $orderby = "title ASC";
                break;
            case "dateA":
                $orderby = "published ASC";
                break;
            case "hitsA":
                $orderby = "hits ASC";
                break;
            case "ratingA":
                $orderby = "rating ASC";
                break;
            case "countryA":
                $orderby = "country ASC";
                break;
            case "titleD":
                $orderby = "title DESC";
                break;
            case "hitsD":
                $orderby = "hits DESC";
                break;
            case "ratingD":
                $orderby = "rating DESC";
                break;
            case"dateD":
                $orderby = "published DESC";
                break;
            case "countryD":
                $orderby = "country DESC";
                break;
        } 
        return $orderby;
    } 
} 
if ( !function_exists( 'xtube_convertorderbytrans' ) ) {
    function xtube_convertorderbytrans( $orderby ) {
        if ( $orderby == "hits ASC" ) $orderbyTrans = _MD_XTUBE_POPULARITYLTOM;
        if ( $orderby == "hits DESC" ) $orderbyTrans = _MD_XTUBE_POPULARITYMTOL;
        if ( $orderby == "title ASC" ) $orderbyTrans = _MD_XTUBE_TITLEATOZ;
        if ( $orderby == "title DESC" ) $orderbyTrans = _MD_XTUBE_TITLEZTOA;
        if ( $orderby == "published ASC" ) $orderbyTrans = _MD_XTUBE_DATEOLD;
        if ( $orderby == "published DESC" ) $orderbyTrans = _MD_XTUBE_DATENEW;
        if ( $orderby == "rating ASC" ) $orderbyTrans = _MD_XTUBE_RATINGLTOH;
        if ( $orderby == "rating DESC" ) $orderbyTrans = _MD_XTUBE_RATINGHTOL;
        if ( $orderby == "country ASC" ) $orderbyTrans = _MD_XTUBE_COUNTRYLTOH;
        if ( $orderby == "country DESC" ) $orderbyTrans = _MD_XTUBE_COUNTRYHTOL;
        return $orderbyTrans;
    } 
} 
if ( !function_exists( 'xtube_convertorderbyout' ) ) {
    function xtube_convertorderbyout( $orderby ) {
        if ( $orderby == "title ASC" ) $orderby = "titleA";
        if ( $orderby == "published ASC" ) $orderby = "dateA";
        if ( $orderby == "hits ASC" ) $orderby = "hitsA";
        if ( $orderby == "rating ASC" ) $orderby = "ratingA";
        if ( $orderby == "country ASC" ) $orderby = "countryA";
        if ( $orderby == "title DESC" ) $orderby = "titleD";
        if ( $orderby == "published DESC" ) $orderby = "dateD";
        if ( $orderby == "hits DESC" ) $orderby = "hitsD";
        if ( $orderby == "rating DESC" ) $orderby = "ratingD";
        if ( $orderby == "country DESC" ) $orderby = "countryD";
        return $orderby;
    } 
} 

// updaterating()
// @param  $sel_id
// @return updates rating data in itemtable for a given item
function xtube_updaterating( $sel_id ) {
    global $xoopsDB;
    $query = "SELECT rating FROM " . $xoopsDB -> prefix( 'xoopstube_votedata' ) . " WHERE lid=" . $sel_id;
    $voteresult = $xoopsDB -> query( $query );
    $votesDB = $xoopsDB -> getRowsNum( $voteresult );
    $totalrating = 0;
    while ( list( $rating ) = $xoopsDB -> fetchRow( $voteresult ) ) {
        $totalrating += $rating;
    } 
    $finalrating = $totalrating / $votesDB;
    $finalrating = number_format( $finalrating, 4 );
    $sql = sprintf( "UPDATE %s SET rating = %u, votes = %u WHERE lid = %u", $xoopsDB -> prefix( 'xoopstube_videos' ), $finalrating, $votesDB, $sel_id );
    $xoopsDB -> query( $sql );
} 

// totalcategory()
// @param integer $pid
// @return
function xtube_totalcategory( $pid = 0 ) {
    global $xoopsDB;

    $sql = "SELECT cid FROM " . $xoopsDB -> prefix( 'xoopstube_cat' );
    if ( $pid > 0 ) {
        $sql .= " WHERE pid = 0";
    } 
    $result = $xoopsDB -> query( $sql );
    $catlisting = 0;
    while ( list( $cid ) = $xoopsDB -> fetchRow( $result ) ) {
        if ( xtube_checkgroups( $cid ) ) {
            $catlisting++;
        } 
    } 
    return $catlisting;
} 

// xtube_getTotalItems()
// @param integer $sel_id
// @param integer $get_child
// @param integer $return_sql
// @return
function xtube_getTotalItems( $sel_id = 0, $get_child = 0, $return_sql = 0 ) {
    global $xoopsDB, $mytree, $_check_array;

    if ( $sel_id > 0 ) {
        $sql = "SELECT a.lid, a.cid, a.published FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " a LEFT JOIN "
         . $xoopsDB -> prefix( 'xoopstube_altcat' ) . " b "
         . "ON b.lid=a.lid "
         . "WHERE a.published > 0 AND a.published <= " . time()
         . " AND (a.expired = 0 OR a.expired > " . time() . ") AND offline = 0 "
         . " AND (b.cid=a.cid OR (a.cid=" . $sel_id . " OR b.cid=" . $sel_id . "))"
		 . " GROUP BY a.lid, a.cid, a.published";
    } else {
        $sql = "SELECT lid, cid, published from " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE offline = 0 AND published > 0 AND published <= " . time() . " AND (expired = 0 OR expired > " . time() . ")";
    } 
    if ( $return_sql == 1 ) {
        return $sql;
    } 

    $count = 0;
    $published_date = 0;
    $arr = array();
    $result = $xoopsDB -> query( $sql );
    while ( list( $lid, $cid, $published ) = $xoopsDB -> fetchRow( $result ) ) {
        if ( true == xtube_checkgroups() ) {
            $count++;
            $published_date = ( $published > $published_date ) ? $published : $published_date;
        } 
    } 

    $child_count = 0;
    if ( $get_child == 1 ) {
        $arr = $mytree -> getAllChildId( $sel_id );
        $size = count( $arr );
        for( $i = 0;$i < count( $arr );$i++ ) {
            $query2 = "SELECT a.lid, a.published, a.cid FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " a LEFT JOIN "
             . $xoopsDB -> prefix( 'xoopstube_altcat' ) . " b "
             . "ON b.lid=a.lid "
             . "WHERE a.published > 0 AND a.published <= " . time()
             . " AND (a.expired = 0 OR a.expired > " . time() . ") AND offline = 0 "
             . " AND (b.cid=a.cid OR (a.cid=" . $arr[$i] . " OR b.cid=" . $arr[$i] . ")) GROUP BY a.lid, a.published, a.cid";

            $result2 = $xoopsDB -> query( $query2 );
            while ( list( $lid, $published ) = $xoopsDB -> fetchRow( $result2 ) ) {
                if ( $published == 0 ) {
                    continue;
                } 
                $published_date = ( $published > $published_date ) ? $published : $published_date;
                $child_count++;
            } 
        } 
    } 
    $info['count'] = $count + $child_count;
    $info['published'] = $published_date;
    return $info;
} 

function xtube_imageheader( $indeximage = '', $indexheading = '' ) {
    global $xoopsDB, $xoopsModuleConfig;
    if ( $indeximage == '' ) {
        $result = $xoopsDB -> query( "SELECT indeximage, indexheading FROM " . $xoopsDB -> prefix( 'xoopstube_indexpage' ) );
        list( $indeximage, $indexheading ) = $xoopsDB -> fetchrow( $result );
    } 
    $image = '';
    if ( !empty( $indeximage ) ) {
        $image = xtube_displayimage( $indeximage, "'index.php'", $xoopsModuleConfig['mainimagedir'], $indexheading );
    } 
    return $image;
} 

function xtube_displayimage( $image = '', $path = '', $imgsource = '', $alttext = '' ) {
    global $xoopsConfig, $xoopsUser, $xoopsModule;

    $showimage = '';
    // Check to see if link is given
    if ( $path ) {
        $showimage = "<a href=" . $path . ">";
    } 
    // checks to see if the file is valid else displays default blank image
    if ( !is_dir( XOOPS_ROOT_PATH . "/{$imgsource}/{$image}" ) && file_exists( XOOPS_ROOT_PATH . "/{$imgsource}/{$image}" ) ) {
        $showimage .= "<img src='" . XOOPS_URL . "/{$imgsource}/{$image}' border='0' title='" . $alttext . "' alt='" . $alttext . "' /></a>";
    } else {
        if ( $xoopsUser && $xoopsUser -> isAdmin( $xoopsModule -> getVar( 'mid' ) ) ) {
            $showimage .= "<img src='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/brokenimg.png' alt='" . _MD_XTUBE_ISADMINNOTICE . "' /></a>";
        } else {
            $showimage .= "<img src='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/blank.png' alt='" . $alttext . "' /></a>";
        } 
    } 
    clearstatcache();
    return $showimage;
} 

function xtube_letters() {
    global $xoopsModule;

    $letterchoice = "<div>" . _MD_XTUBE_BROWSETOTOPIC . "</div>";
    $letterchoice .= "[  ";
    $alphabet = array ( "0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z" );
    $num = count( $alphabet ) - 1;
    $counter = 0;
    while ( list( , $ltr ) = each( $alphabet ) ) {
        $letterchoice .= "<a href='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/viewcat.php?list=$ltr'>$ltr</a>";
        if ( $counter == round( $num / 2 ) )
            $letterchoice .= " ]<br />[ ";
        elseif ( $counter != $num )
            $letterchoice .= "&nbsp;|&nbsp;";
        $counter++;
    } 
    $letterchoice .= " ]";
    return $letterchoice;
} 

function xtube_isnewimage( $published ) {
    global $xoopsModule, $xoopsDB;

    $oneday = ( time() - ( 86400 * 1 ) );
    $threedays = ( time() - ( 86400 * 3 ) );
    $week = ( time() - ( 86400 * 7 ) );

    $path = "modules/" . $xoopsModule -> getVar( 'dirname' ) . "/images/icon";

    if ( $published > 0 && $published < $week ) {
        $indicator['image'] = "$path/linkload4.png";
        $indicator['alttext'] = _MD_XTUBE_NEWLAST;
    } elseif ( $published >= $week && $published < $threedays ) {
        $indicator['image'] = "$path/linkload3.png";
        $indicator['alttext'] = _MD_XTUBE_NEWTHIS;
    } elseif ( $published >= $threedays && $published < $oneday ) {
        $indicator['image'] = "$path/linkload2.png";
        $indicator['alttext'] = _MD_XTUBE_THREE;
    } elseif ( $published >= $oneday ) {
        $indicator['image'] = "$path/linkload1.png";
        $indicator['alttext'] = _MD_XTUBE_TODAY;
    } else {
        $indicator['image'] = "$path/linkload.png";
        $indicator['alttext'] = _MD_XTUBE_NO_FILES;
    } 
    return $indicator;
} 

function xtube_strrrchr( $haystack, $needle ) {
    return substr( $haystack, 0, strpos( $haystack, $needle ) + 1 );
} 

function xtube_adminmenu( $header = '', $menu = '', $extra = '', $scount = 4 ) {
    global $xoopsConfig, $xoopsModule, $xoopsModuleConfig;

    $_named_vidid = xoops_getenv( 'PHP_SELF' );
    if ( $_named_vidid )
        $thispage = basename( $_named_vidid );

    $op = ( isset( $_GET['op'] ) ) ? $op = "?op=" . $_GET['op'] : '';

    echo "<h4 style='color: #2F5376;'>" . _AM_XTUBE_MODULE_NAME . "</h4>";
	echo "
		<table width='100%' cellspacing='0' cellpadding='0' border='0' class='outer'>\n
		<tr>\n
		<td style='font-size: 10px; text-align: left; color: #2F5376; padding: 2px 6px; line-height: 18px;'>\n
		<a href='../../system/admin.php?fct=modulesadmin&op=update&module=" . $xoopsModule -> getVar( 'dirname' ) . "'>" . _AM_XTUBE_BUPDATE . "</a> | \n
		<a href='../../system/admin.php?fct=preferences&op=showmod&mod=" . $xoopsModule -> getVar( 'mid' ) . "'>" . _AM_XTUBE_PREFS . "</a> | \n
		<a href='../admin/index.php'>" . _AM_XTUBE_BINDEX . "</a> | \n
		<a href='../admin/permissions.php'>" . _AM_XTUBE_BPERMISSIONS . "</a> | \n
		<a href='../admin/myblocksadmin.php'>" . _AM_XTUBE_BLOCKADMIN . "</a> | \n
		<a href='../index.php'>" . _AM_XTUBE_GOMODULE . "</a> | \n
                <a href='../admin/about.php'>" . _AM_XTUBE_ABOUT . "</a> \n
		</td>\n
		</tr>\n
		</table><br />\n
		";

    if ( empty( $menu ) ) {
        // You can change this part to suit your own module. Defining this here will save you form having to do this each time.
        $menu = array(
            _AM_XTUBE_INDEXPAGE => "indexpage.php",
            _AM_XTUBE_MCATEGORY => "category.php",
            _AM_XTUBE_MVIDEOS => "index.php?op=edit",
            _AM_XTUBE_MMYTUBE => "mytube.php?op=edit",
            _AM_XTUBE_MUPLOADS => "upload.php",
            _AM_XTUBE_VUPLOADS => "vupload.php",
            _AM_XTUBE_MVOTEDATA => "votedata.php",
            _AM_XTUBE_MCOMMENTS => "../../system/admin.php?module=" . $xoopsModule -> getVar( 'mid' ) . "&status=0&limit=100&fct=comments&selsubmit=Go"
            );
    } 

    if ( !is_array( $menu ) ) {
        echo "<table width='100%' cellpadding= '2' cellspacing= '1' class='outer'>\n";
        echo "<tr><td class ='even' align ='center'><b>" . _AM_XTUBE_NOMENUITEMS . "</b></td></tr></table><br />\n";
        return false;
    } 

    $oddnum = array( 1 => "1", 3 => "3", 5 => "5", 7 => "7", 9 => "9", 11 => "11", 13 => "13" ); 
    // number of rows per menu
    $menurows = count( $menu ) / $scount; 
    // total amount of rows to complete menu
    $menurow = ceil( $menurows ) * $scount; 
    // actual number of menuitems per row
    $rowcount = $menurow / ceil( $menurows );
    $count = 0;
    for ( $i = count( $menu ); $i < $menurow; $i++ ) {
        $tempArray = array( 1 => null );
        $menu = array_merge( $menu, $tempArray );
        $count++;
    } 

    // Sets up the width of each menu cell
    $width = 100 / $scount;
    $width = ceil( $width );

    $menucount = 0;
    $count = 0;
    // Menu table output
    echo "<table width='100%' cellpadding= '2' cellspacing= '1' class='outer'><tr>";
    // Check to see if $menu is and array
    if ( is_array( $menu ) ) {
        $classcounts = 0;
        $classcol[0] = "even";

        for ( $i = 1; $i < $menurow; $i++ ) {
            $classcounts++;
            if ( $classcounts >= $scount ) {
                if ( $classcol[$i-1] == 'odd' ) {
                    $classcol[$i] = ( $classcol[$i-1] == 'odd' && in_array( $classcounts, $oddnum ) ) ? "even" : "odd";
                } else {
                    $classcol[$i] = ( $classcol[$i-1] == 'even' && in_array( $classcounts, $oddnum ) ) ? "odd" : "even";
                } 
                $classcounts = 0;
            } else {
                $classcol[$i] = ( $classcol[$i-1] == 'even' ) ? "odd" : "even";
            } 
        } 
        unset( $classcounts );

        foreach ( $menu as $menutitle => $menuvideo ) {
            if ( $thispage . $op == $menuvideo ) {
                $classcol[$count] = "outer";
            } 
            echo "<td class='" . $classcol[$count] . "' style='text-align: center;' valign='middle' width='$width%'>";
            if ( is_string( $menuvideo ) ) {
                echo "<a href='" . $menuvideo . "'><small>" . $menutitle . "</small></a></td>";
            } else {
                echo "&nbsp;</td>";
            } 
            $menucount++;
            $count++;
            // Break menu cells to start a new row if $count > $scount
            if ( $menucount >= $scount ) {
                echo "</tr>";
                $menucount = 0;
            } 
        } 
        echo "</table><br />";
        unset( $count );
        unset( $menucount );
    } 
    // ###### Output warn messages for security ######
    if ( is_dir( XOOPS_ROOT_PATH . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/update/" ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL1, XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/update/' ) );
        echo '<br />';
    } 

    $_file = XOOPS_ROOT_PATH . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/update.php";
    if ( file_exists( $_file ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL2, XOOPS_ROOT_PATH . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/update.php' ) );
        echo '<br />';
    } 

    $path1 = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['mainimagedir'];
    if ( !is_dir( $path1 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path1 ) );
        echo '<br />';
    }
    if ( !is_writable( $path1 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path1 ) );
        echo '<br />';
    }

    $path1_t = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['mainimagedir'] . '/thumbs';
    if ( !is_dir( $path1_t ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path1_t ) );
        echo '<br />';
    }
    if ( !is_writable( $path1_t ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path1_t ) );
        echo '<br />';
    }

    $path2 = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['videoimgdir'];
    if ( !is_dir( $path2 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path2 ) );
        echo '<br />';
    }
    if ( !is_writable( $path2 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path2 ) );
        echo '<br />';
    }

//    $path2_t = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['videoimgdir'] . '/thumbs';
//    if ( !is_dir( $path2_t ) || !is_writable( $path2_t ) ) {
//        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path2_t ) );
//        echo '<br />';
//    }

    $path3 = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['catimage'];
    if ( !is_dir( $path3 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path3 ) );
        echo '<br />';
    }
    if ( !is_writable( $path3 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path3 ) );
        echo '<br />';
    }

    $path3_t = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['catimage'] . '/thumbs';
    if ( !is_dir( $path3_t ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path3_t ) );
        echo '<br />';
    }
    if ( !is_writable( $path3_t ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path3_t ) );
        echo '<br />';
    }

    $path4 = XOOPS_ROOT_PATH . '/' . $xoopsModuleConfig['videodir'];
    if ( !is_dir( $path4 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL3, $path4 ) );
        echo '<br />';
    }
    if ( !is_writable( $path4 ) ) {
        xoops_error( sprintf( _AM_XTUBE_WARNINSTALL4, $path4 ) );
        echo '<br />';
    }


    echo "<h3 style='color: #2F5376;'>" . $header . "</h3>";
    if ( $extra ) {
        echo "<div>$extra</div>";
    } 
} 

function xtube_getDirSelectOption( $selected, $dirarray, $namearray ) {
    echo "<select size='1' name='workd' onchange='location.href=\"upload.php?rootpath=\"+this.options[this.selectedIndex].value'>";
    echo "<option value=''>--------------------------------------</option>";
    foreach( $namearray as $namearray => $workd ) {
        if ( $workd === $selected ) {
            $opt_selected = "selected";
        } else {
            $opt_selected = "";
        } 
        echo "<option value='" . htmlspecialchars( $namearray, ENT_QUOTES ) . "' $opt_selected>" . $workd . "</option>";
    } 
    echo "</select>";
}

function xtube_VgetDirSelectOption( $selected, $dirarray, $namearray ) {
    echo "<select size='1' name='workd' onchange='location.href=\"vupload.php?rootpath=\"+this.options[this.selectedIndex].value'>";
    echo "<option value=''>--------------------------------------</option>";
    foreach( $namearray as $namearray => $workd ) {
        if ( $workd === $selected ) {
            $opt_selected = "selected";
        } else {
            $opt_selected = "";
        } 
        echo "<option value='" . htmlspecialchars( $namearray, ENT_QUOTES ) . "' $opt_selected>" . $workd . "</option>";
    } 
    echo "</select>";
}

function xtube_uploading( $_FILES, $uploaddir = "uploads", $allowed_mimetypes = '', $redirecturl = "index.php", $num = 0, $redirect = 0, $usertype = 1 ) {
    global $_FILES, $xoopsConfig, $xoopsModuleConfig, $xoopsModule;

    $down = array();
    include_once XOOPS_ROOT_PATH . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/class/uploader.php";
    if ( empty( $allowed_mimetypes ) ) {
        $allowed_mimetypes = xtube_retmime( $_FILES['userfile']['name'], $usertype );
    } 
    $upload_dir = XOOPS_ROOT_PATH . "/" . $uploaddir . "/";

    $maxfilesize = $xoopsModuleConfig['maxfilesize'];
    $maxfilewidth = $xoopsModuleConfig['maximgwidth'];
    $maxfileheight = $xoopsModuleConfig['maximgheight'];

    $uploader = new XoopsMediaUploader( $upload_dir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight );
    $uploader -> noAdminSizeCheck( 1 );
    if ( $uploader -> fetchMedia( $_POST['xoops_upload_file'][0] ) ) {
        if ( !$uploader -> upload() ) {
            $errors = $uploader -> getErrors();
            redirect_header( $redirecturl, 2, $errors );
        } else {
            if ( $redirect ) {
                redirect_header( $redirecturl, 1 , _AM_PDD_UPLOADFILE );
            } else {
                if ( is_file( $uploader -> savedDestination ) ) {
                    $down['url'] = XOOPS_URL . "/" . $uploaddir . "/" . strtolower( $uploader -> savedFileName );
                    $down['size'] = filesize( XOOPS_ROOT_PATH . "/" . $uploaddir . "/" . strtolower( $uploader -> savedFileName ) );
                } 
                return $down;
            } 
        } 
    } else {
        $errors = $uploader -> getErrors();
        redirect_header( $redirecturl, 1, $errors );
    } 
} 

function xtube_videolistheader( $heading ) {
    echo "
		<h4 style='font-weight: bold; color: #0A3760;'>" . $heading . "</h4>\n
		<table width='100%' cellspacing='1' class='outer' summary>\n
		<tr>\n
		<th style='text-align: center;'><small>" . _AM_XTUBE_MINDEX_ID . "</small></th>\n
		<th><b><small>" . _AM_XTUBE_MINDEX_TITLE . "</small></th>\n
		<th style='text-align: center;'><small>" . _AM_XTUBE_VIDSOURCE2 . "</small></th>\n
		<th style='text-align: center;'><small>" . _AM_XTUBE_MINDEX_POSTER . "</small></th>\n
		<th style='text-align: center;'><small>" . _AM_XTUBE_MINDEX_PUBLISH . "</small></th>\n
		<th style='text-align: center;'><small>" . _AM_XTUBE_MINDEX_EXPIRE . "</small></th>\n
		<th style='text-align: center;'><small>" . _AM_XTUBE_MINDEX_ONLINE . "</small></th>\n
		<th style='text-align: center;'><small>" . _AM_XTUBE_MINDEX_ACTION . "</small></th>\n
		</tr>\n
		";
} 

function xtube_videolistbody( $published ) {
    global $xtubemyts, $imagearray, $xoopsModuleConfig;

    $lid = $published['lid'];
    $cid = $published['cid'];
    
    $title = "<a href='../singlevideo.php?cid=" . $published['cid'] . "&amp;lid=" . $published['lid'] . "'>" . $xtubemyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) . "</a>";;
    $maintitle = urlencode( $xtubemyts -> htmlSpecialChars( trim( $published['title'] ) ) );
    $submitter = xoops_getLinkedUnameFromId( $published['submitter'] );
    $returnsource = xtube_returnsource( $published['vidsource'] );
    $submitted = formatTimestamp( $published['date'], $xoopsModuleConfig['dateformatadmin'] );
    $publish = ( $published['published'] > 0 ) ? formatTimestamp( $published['published'], $xoopsModuleConfig['dateformatadmin'] ): 'Not Published';
    $expires = $published['expired'] ? formatTimestamp( $published['expired'], $xoopsModuleConfig['dateformatadmin'] ): _AM_XTUBE_MINDEX_NOTSET;

    if ( (( $published['expired'] && $published['expired'] > time() ) OR  $published['expired']==0)&& ( $published['published'] && $published['published'] < time() ) && $published['offline'] == 0 ) {
        $published_status = $imagearray['online'];
    } elseif (( $published['expired'] && $published['expired'] < time() )  && $published['offline'] == 0){
        $published_status = $imagearray['expired'];
    } else {
        $published_status = ( $published['published'] == 0 ) ? "<a href='newvideos.php'>" . $imagearray['offline'] . "</a>" : $imagearray['offline'];
    }

    if ($published['vidsource'] == 200) {
      $icon = "<a href='mytube.php?op=edit&amp;lid=" . $lid . "' title='" . _AM_XTUBE_ICO_EDIT . "'>" . $imagearray['editimg'] . "</a>&nbsp;";
    } else {
      $icon = "<a href='index.php?op=edit&amp;lid=" . $lid . "' title='" . _AM_XTUBE_ICO_EDIT . "'>" . $imagearray['editimg'] . "</a>&nbsp;";
    }
    $icon .= "<a href='index.php?op=delete&amp;lid=" . $lid . "' title='" . _AM_XTUBE_ICO_DELETE . "'>" . $imagearray['deleteimg'] . "</a>&nbsp;";
    $icon .= "<a href='altcat.php?op=main&amp;cid=" . $cid . "&amp;lid=" . $lid . "&amp;title=" . $published['title'] . "' title='" . _AM_XTUBE_ALTCAT_CREATEF . "'>" . $imagearray['altcat'] . "</a>";

    echo "
		<tr style='text-align: center;'>\n
		<td class='head'><small>" . $lid . "</small></td>\n
		<td class='even' style='text-align: left;'><small>" . $title . "</small></td>\n
		<td class='even'><small>" . $returnsource . "</small></td>\n
		<td class='even'><small>" . $submitter . "</small></td>\n
		<td class='even'><small>" . $publish . "</small></td>\n
		<td class='even'><small>" . $expires . "</small></td>\n
		<td class='even' style='width: 4%;'>$published_status</td>\n
		<td class='even' style='text-align: center; width: 6%; white-space: nowrap;'>$icon</td>\n
		</tr>\n
		";
    unset( $published );
} 

function xtube_videolistfooter() {
    echo "<tr style='text-align: center;'>\n<td class='head' colspan='7'>" . _AM_XTUBE_MINDEX_NOVIDEOSFOUND . "</td>\n</tr>\n";
} 

function xtube_videolistpagenav( $pubrowamount, $start, $art = "art", $_this = '' ) {
    global $xoopsModuleConfig;
    echo "</table>\n";
    if ( ( $pubrowamount < $xoopsModuleConfig['admin_perpage'] ) ) {
        return false;
    } 
    // Display Page Nav if published is > total display pages amount.
    include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
//    $page = ( $pubrowamount > $xoopsModuleConfig['admin_perpage'] ) ? _AM_XTUBE_MINDEX_PAGE : '';
    $pagenav = new XoopsPageNav( $pubrowamount, $xoopsModuleConfig['admin_perpage'], $start, 'st' . $art, $_this );
    echo '<div align="right" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
}

function xtube_linklistpagenavleft( $pubrowamount, $start, $art = "art", $_this = '' ) {
    global $xoopsModuleConfig;
//    echo "</table>\n";
    if ( ( $pubrowamount < $xoopsModuleConfig['admin_perpage'] ) ) {
        return false;
    } 
    // Display Page Nav if published is > total display pages amount.
    include_once XOOPS_ROOT_PATH . '/class/pagenav.php';
//    $page = ( $pubrowamount > $xoopsModuleConfig['admin_perpage'] ) ? _AM_XTUBE_MINDEX_PAGE : '';
    $pagenav = new XoopsPageNav( $pubrowamount, $xoopsModuleConfig['admin_perpage'], $start, 'st' . $art, $_this );
    echo '<div align="left" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
}

// Retreive an editor according to the module's option "form_options"
function &xtube_getWysiwygForm($caption, $name, $value = "", $width = '100%', $height = '400px', $supplemental='') {
    global $xoopsModuleConfig, $xoopsUser, $xoopsModule;

	$editor = false;
	$x22 = false;
	$xv = str_replace('XOOPS ','',XOOPS_VERSION);
	if (substr($xv,2,1) == '2') {
		$x22=true;
	}
	$editor_configs=array();
	$editor_configs["name"] =$name;
	$editor_configs["value"] = $value;
	$editor_configs["caption"] = $caption;
	$editor_configs["rows"] = 35;
	$editor_configs["cols"] = 60;
	$editor_configs["width"] = "100%";
	$editor_configs["height"] = "400px";
	$isadmin = ( ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) && $xoopsUser -> isAdmin( $xoopsModule -> mid() ) ) ? true : false;
        if ( $isadmin == true ) {
          $formuser = $xoopsModuleConfig['form_options'];
        } else {
          $formuser = $xoopsModuleConfig['form_optionsuser'];
        }

	switch($formuser) {
	case 'spaw':
		if(!$x22) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/spaw/formspaw.php") ) {
				include_once(XOOPS_ROOT_PATH . "/class/spaw/formspaw.php");
				$editor = new XoopsFormSpaw($caption, $name, $value);
			}
		} else {
			$editor = new XoopsFormEditor($caption, "spaw", $editor_configs);
		}
		break;
	case 'fckeditor':
		if (!$x22) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/fckeditor/formfckeditor.php") ) {
				include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/fckeditor/formfckeditor.php");
				$editor = new XoopsFormFckeditor($editor_configs,true);
			} else {
				if ($dhtml) {
					$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, 20, 60);
				} else {
					$editor = new XoopsFormTextArea($caption, $name, $value, 7, 60);
				}
			}
		} else {
			$editor = new XoopsFormEditor($caption, 'fckeditor', $editor_configs);
		}
		break;
	case 'htmlarea':
		if(!$x22) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/htmlarea/formhtmlarea.php") ) {
				include_once(XOOPS_ROOT_PATH . "/class/htmlarea/formhtmlarea.php");
				$editor = new XoopsFormHtmlarea($caption, $name, $value);
			}
		} else {
			$editor = new XoopsFormEditor($caption, "htmlarea", $editor_configs);
		}
		break;
	case 'dhtml':
		if(!$x22) {
			$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, 10, 50, $supplemental);
		} else {
			$editor = new XoopsFormEditor($caption, "dhtmltextarea", $editor_configs);
		}
		break;
	case 'textarea':
		$editor = new XoopsFormTextArea($caption, $name, $value);
		break;
	case 'koivi':
		if(!$x22) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/koivi/formwysiwygtextarea.php") ) {
				include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/koivi/formwysiwygtextarea.php");
				$editor = new XoopsFormWysiwygTextArea($caption, $name, $value, '100%', '400px');
			} else {
				if ($dhtml) {
					$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, 20, 60);
				} else {
					$editor = new XoopsFormTextArea($caption, $name, $value, 7, 60);
				}
			}
		} else {
			$editor = new XoopsFormEditor($caption, 'koivi', $editor_configs);
		}
		break; 
	case 'tinyeditor':
               if(!$x22) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/tinyeditor/formtinyeditortextarea.php") ) {
				include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/tinyeditor/formtinyeditortextarea.php");
				$editor = new XoopsFormTinyeditorTextArea(array('caption'=>$caption, 'name'=>$name, 'value'=>$value, 'width'=>'100%', 'height'=>'400px'));
			} else {
				if ($dhtml) {
					$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, 20, 60);
				} else {
					$editor = new XoopsFormTextArea($caption, $name, $value, 7, 60);
				}
			}
		} else {
			$editor = new XoopsFormEditor($caption, "tinyeditor", $editor_configs);
		}
		break;
	case "dhtmlext":
               if(!$x22) {
			if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/dhtmlext/dhtmlext.php") ) {
				include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/dhtmlext/dhtmlext.php");
				$editor = new XoopsFormDhtmlTextAreaExtended($caption, $name, $value, 10, 50, $supplemental);
			} else {
				if ($dhtml) {
					$editor = new XoopsFormDhtmlTextArea($caption, $name, $value, 50, 60);
				} else {
					$editor = new XoopsFormTextArea($caption, $name, $value, 7, 60);
				}
			}
		} else {
			$editor = new XoopsFormEditor($caption, "dhtmlext", $editor_configs);
		}
		break;
	case 'tinymce' :
             if (!$x22) {
                       if ( is_readable(XOOPS_ROOT_PATH . "/class/xoopseditor/tinymce/formtinymce.php") ) {
                          include_once(XOOPS_ROOT_PATH . "/class/xoopseditor/tinymce/formtinymce.php");
                          $editor = new XoopsFormTinymce(array('caption'=>$caption, 'name'=>$name, 'value'=>$value, 'width'=>'100%', 'height'=>'400px'));
                       } 
                       elseif ( is_readable(XOOPS_ROOT_PATH . "/editors/tinymce/formtinymce.php") ) {
                          include_once(XOOPS_ROOT_PATH . "/editors/tinymce/formtinymce.php");
                          $editor = new XoopsFormTinymce(array('caption'=>$caption, 'name'=>$name, 'value'=>$value, 'width'=>'100%', 'height'=>'400px'));
                       } else {
                          if ($dhtml) {
                              $editor = new XoopsFormDhtmlTextArea($caption, $name, $value, 20, 60);
                          } else {
                              $editor = new XoopsFormTextArea($caption, $name, $value, 7, 60);
                          }
                       }
                       } else {
                           $editor = new XoopsFormEditor($caption, "tinymce", $editor_configs);
                       }
                       break;
	}
	return $editor;
}

function xtube_html2text($document){
		// PHP Manual:: function preg_replace
		// $document should contain an HTML document.
		// This will remove HTML tags, javascript sections
		// and white space. It will also convert some
		// common HTML entities to their text equivalent.
		// Credits : newbb2
		$search = array (
		"'<script[^>]*?>.*?</script>'si",	// Strip out javascript
		"'<img.*?/>'si",       				// Strip out img tags
		"'<[\/\!]*?[^<>]*?>'si",          	// Strip out HTML tags
		"'([\r\n])[\s]+'",                	// Strip out white space
		"'&(quot|#34);'i",                	// Replace HTML entities
		"'&(amp|#38);'i",
		"'&(lt|#60);'i",
		"'&(gt|#62);'i",
		"'&(nbsp|#160);'i",
		"'&(iexcl|#161);'i",
		"'&(cent|#162);'i",
		"'&(pound|#163);'i",
		"'&(copy|#169);'i",
		);                    // evaluate as php

		$replace = array (
		"",
		"",
		"",
		"\\1",
		"\"",
		"&",
		"<",
		">",
		" ",
		chr(161),
		chr(162),
		chr(163),
		chr(169),
		);

		$text = preg_replace($search, $replace, $document);

		return $text;
}

// Check if Tag module is installed
function xtube_tag_module_included() {
	static 	$xtube_tag_module_included;
	if (!isset($xtube_tag_module_included)) {
		$modules_handler = xoops_gethandler('module');
		$tag_mod = $modules_handler -> getByDirName('tag');
		if (!$tag_mod) {
			$tag_mod = false;
		} else {
			$xtube_tag_module_included = $tag_mod -> getVar('isactive') == 1;
		}
	}
	return $xtube_tag_module_included;
}

// Add item_tag to Tag-module
function xtube_tagupdate($lid, $item_tag) {
	global $xoopsModule;
    if (xtube_tag_module_included()){
	  include_once XOOPS_ROOT_PATH . "/modules/tag/include/formtag.php";
	  $tag_handler = xoops_getmodulehandler('tag', 'tag');
	  $tag_handler -> updateByItem($item_tag, $lid, $xoopsModule -> getVar( 'dirname' ), 0);
	}
}

function xtube_updateCounter($lid) {
	global $xoopsDB;
	$sql = "UPDATE " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " SET hits=hits+1 WHERE lid=" . intval($lid);
    $result = $xoopsDB -> queryF( $sql );
}

function xtube_substr($str, $start, $length, $trimmarker = '...') {
	$config_handler =& xoops_gethandler('config');
	$im_multilanguageConfig =& $config_handler -> getConfigsByCat(IM_CONF_MULILANGUAGE);
    
	if ($im_multilanguageConfig['ml_enable']) {
		$tags = explode(',',$im_multilanguageConfig['ml_tags']);
		$strs = array();
		$hasML = false;
		foreach ($tags as $tag){
			if (preg_match("/\[".$tag."](.*)\[\/".$tag."\]/sU",$str,$matches)){
				if (count($matches) > 0) {
					$hasML = true;
					$strs[] = $matches[1];
				}
			}
		}
	} else {
		$hasML = false;
	}
	
	if (!$hasML) {
        $strs = array($str);
	}
	
	for ($i = 0; $i <= count($strs)-1; $i++) {
		if ( !XOOPS_USE_MULTIBYTES ) {
			$strs[$i] = ( strlen($strs[$i]) - $start <= $length ) ? substr( $strs[$i], $start, $length ) : substr( $strs[$i], $start, $length - strlen($trimmarker) ) . $trimmarker;
		}

		if (function_exists('mb_internal_encoding') && @mb_internal_encoding(_CHARSET)) {
			$str2 = mb_strcut( $strs[$i] , $start , $length - strlen( $trimmarker ) );
			$strs[$i] = $str2 . ( mb_strlen($strs[$i])!=mb_strlen($str2) ? $trimmarker : '' );
		}

		// phppp patch
		$DEP_CHAR = 127;
		$pos_st = 0;
		$action = false;
		for ( $pos_i = 0; $pos_i < strlen($strs[$i]); $pos_i++ ) {
			if ( ord( substr( $strs[$i], $pos_i, 1) ) > 127 ) {
				$pos_i++;
			}
			if ($pos_i <= $start) {
				$pos_st = $pos_i;
			}
			if ($pos_i >= $pos_st + $length) {
				$action = true;
				break;
			}
		}
		$strs[$i] = ($action) ? substr( $strs[$i], $pos_st, $pos_i - $pos_st - strlen($trimmarker) ) . $trimmarker : $strs[$i];

		$strs[$i] = ($hasML)?'['.$tags[$i].']'.$strs[$i].'[/'.$tags[$i].']':$strs[$i];
	}
	$str = implode('',$strs);

	return $str;
}

function xtube_getbanner_from_id_banner($banner_id) {
###### Hack by www.stefanosilvestrini.com ######
global $xoopsConfig;
$db =& Database::getInstance();
$bresult = $db -> query("SELECT COUNT(*) FROM " . $db -> prefix('banner') . " WHERE bid=" . $banner_id);
list ($numrows) = $db -> fetchRow($bresult);
if ( $numrows > 1 ) {
    $numrows = $numrows - 1;
    mt_srand((double)microtime() * 1000000);
    $bannum = mt_rand(0, $numrows);
  } else {
    $bannum = 0;
}
if ( $numrows > 0 ) {
  $bresult = $db -> query("SELECT * FROM " . $db -> prefix('banner'). " WHERE bid=" . $banner_id, 1, $bannum);
  list ($bid, $cid, $imptotal, $impmade, $clicks, $imageurl, $clickurl, $date, $htmlbanner, $htmlcode) = $db -> fetchRow($bresult);
  if ($xoopsConfig['my_ip'] == xoops_getenv('REMOTE_ADDR')) {
    // EMPTY
    } else {
      $db -> queryF(sprintf("UPDATE %s SET impmade = impmade+1 WHERE bid = %u", $db -> prefix('banner'), $bid));
  }
  /* Check if this impression is the last one and print the banner */
  if ( $imptotal == $impmade ) {
    $newid = $db -> genId($db -> prefix("bannerfinish") . "_bid_seq");
    $sql = sprintf("INSERT INTO %s (bid, cid, impressions, clicks, datestart, dateend) VALUES (%u, %u, %u, %u, %u, %u)", $db -> prefix('bannerfinish'), $newid, $cid, $impmade, $clicks, $date, time());
    $db -> queryF($sql);
    $db -> queryF(sprintf("DELETE FROM %s WHERE bid = %u", $db -> prefix('banner'), $bid));
  }
  if ($htmlbanner) {
    $bannerobject = $htmlcode;
    } else {
      $bannerobject = '<div align="center"><a href="' . XOOPS_URL . '/banners.php?op=click&bid=' . $bid . '" target="_blank">';
      if (stristr($imageurl, '.swf')) {
        $bannerobject = $bannerobject
        .'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="468" height="60">'
        .'<param name="movie" value="' . $imageurl . '"></param>'
        .'<param name="quality" value="high"></param>'
        .'<embed src="' . $imageurl . '" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="468" height="60">'
        .'</embed>'
        .'</object>';
        } else {
          $bannerobject = $bannerobject . '<img src="' . $imageurl . '" alt="" />';
        }
        $bannerobject = $bannerobject . '</a></div>';
      }
    return $bannerobject;
  }
}

function xtube_getbanner_from_id_client($client_id) {
###### Hack by www.stefanosilvestrini.com ######
global $xoopsConfig;
$db =& Database::getInstance();
$bresult = $db -> query("SELECT COUNT(*) FROM " . $db -> prefix('banner') . " WHERE cid=" . $client_id);
list ($numrows) = $db -> fetchRow($bresult);
if ( $numrows > 1 ) {
  $numrows = $numrows - 1;
  mt_srand((double)microtime() * 1000000);
  $bannum = mt_rand(0, $numrows);
} else {
  $bannum = 0;
}
if ( $numrows > 0 ) {
$bresult = $db -> query("SELECT * FROM " . $db -> prefix('banner') . " WHERE cid=" . $client_id . " ORDER BY rand()", 1, $bannum);
list ($bid, $cid, $imptotal, $impmade, $clicks, $imageurl, $clickurl, $date, $htmlbanner, $htmlcode) = $db -> fetchRow($bresult);
if ($xoopsConfig['my_ip'] == xoops_getenv('REMOTE_ADDR')) {
  // EMPTY
  } else {
    $db -> queryF(sprintf("UPDATE %s SET impmade = impmade+1 WHERE bid = %u", $db -> prefix('banner'), $bid));
}
/* Check if this impression is the last one and print the banner */
if ( $imptotal == $impmade ) {
  $newid = $db -> genId($db -> prefix('bannerfinish') . "_bid_seq");
  $sql = sprintf("INSERT INTO %s (bid, cid, impressions, clicks, datestart, dateend) VALUES (%u, %u, %u, %u, %u, %u)", $db -> prefix('bannerfinish'), $newid, $cid, $impmade, $clicks, $date, time());
  $db -> queryF($sql);
  $db -> queryF(sprintf("DELETE FROM %s WHERE bid = %u", $db -> prefix('banner'), $bid));
}
if ($htmlbanner) {
  $bannerobject = $htmlcode;
  } else {
    $bannerobject = '<div align="center"><a href="' . XOOPS_URL . '/banners.php?op=click&bid=' . $bid . '" target="_blank">';
    if (stristr($imageurl, '.swf')) {
      $bannerobject = $bannerobject
      .'<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,40,0" width="468" height="60">'
      .'<param name="movie" value="' . $imageurl . '"></param>'
      .'<param name="quality" value="high"></param>'
      .'<embed src="' . $imageurl . '" quality="high" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="468" height="60">'
      .'</embed>'
      .'</object>';
      } else {
        $bannerobject = $bannerobject . '<img src="' . $imageurl . '" alt="" />';
    }
    $bannerobject = $bannerobject . '</a></div>';
   }
  return $bannerobject;
  }
}
?>