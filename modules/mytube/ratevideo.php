<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: ratevideo.php
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

global $xoTheme;

// Check if videoload POSTER is voting (UNLESS Anonymous users allowed to post)
$lid = intval( mytube_cleanRequestVars( $_REQUEST, 'lid', '' ) );

$ip = getenv( 'REMOTE_ADDR' );
$ratinguser = ( !is_object( icms::$user ) ) ? 0 : icms::$user -> getVar( 'uid' );

if ( icms::$module -> config['showrating'] == 0 || $lid == '' ) {
	$ratemessage = _MD_MYTUBE_CANTVOTEOWN;
	redirect_header( 'index.php', 4, $ratemessage );
	exit();
}

if ( $ratinguser != 0 ) {
    $result = icms::$xoopsDB -> query( 'SELECT cid, submitter, title, nice_url FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid );
    while ( list( $cid, $ratinguserDB, $title, $nice_url ) = icms::$xoopsDB -> fetchRow( $result ) ) {
        if ( $ratinguserDB == $ratinguser ) {
            $ratemessage = _MD_MYTUBE_CANTVOTEOWN;
			$redirect_link = 'singlevideo.php?lid=' . $lid . '&amp;page=' . mytube_nicelink( $title, $nice_url );
            redirect_header( $redirect_link, 4, $ratemessage );
            exit();
        } 
    } 
    // Check if REG user is trying to vote twice.
    $result = icms::$xoopsDB -> query( 'SELECT cid, ratinguser FROM ' . icms::$xoopsDB -> prefix( 'mytube_votedata' ) . ' WHERE lid=' . $lid );
    while ( list( $cid, $ratinguserDB ) = icms::$xoopsDB -> fetchRow( $result ) ) {
        if ( $ratinguserDB == $ratinguser ) {
            $ratemessage = _MD_MYTUBE_VOTEONCE;
			$redirect_link = 'singlevideo.php?lid=' . $lid . '&amp;page=' . mytube_nicelink( $title, $nice_url );
            redirect_header( $redirect_link, 4, $ratemessage );
            exit();
        } 
    } 
} else {
    // Check if ANONYMOUS user is trying to vote more than once per day.
	$anonwaitdays = 1;
    $yesterday = ( time() - ( 86400 * $anonwaitdays ) );
    $result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_votedata' ) . ' WHERE lid=' . $lid . ' AND ratinguser=0 AND ratinghostname=' . $ip . ' AND ratingtimestamp > ' . $yesterday );
    list( $anonvotecount ) = icms::$xoopsDB -> fetchRow( $result );
    if ( $anonvotecount >= 1 ) {
        $ratemessage = _MD_MYTUBE_VOTEONCE;
        redirect_header( 'singlevideo.php?lid=' . $lid, 4, $ratemessage );
        exit();
    } 
} 

if ( !empty( $_POST['submit'] ) ) {
    $ratinguser = ( !is_object( icms::$user ) ) ? 0 : icms::$user -> getVar( 'uid' ); 
    // Make sure only 1 anonymous from an IP in a single day.
    $ip = getenv( 'REMOTE_ADDR' );
    $lid = intval( mytube_cleanRequestVars( $_REQUEST, 'lid', 0 ) );
    $cid = intval( mytube_cleanRequestVars( $_REQUEST, 'cid', 0 ) );
    $rating = intval( mytube_cleanRequestVars( $_REQUEST, 'rating', 0 ) );
    $title = icms_core_DataFilter::addSlashes( trim( $_POST['title'] ) );
    // Check if Rating is Null
    if ( $rating == '--' ) {
        $ratemessage = _MD_MYTUBE_NORATING;
        redirect_header( 'ratevideo.php?lid=' . $lid, 4, $ratemessage );
        exit();
    } 
    // All is well.  Add to Line Item Rate to DB.
    $newid = icms::$xoopsDB -> genId( icms::$xoopsDB -> prefix( 'mytube_votedata' ) . '_ratingid_seq' );
    $datetime = time();
    $sql = "INSERT INTO " . icms::$xoopsDB -> prefix( 'mytube_votedata' ) . " (ratingid, lid, ratinguser, rating, ratinghostname, ratingtimestamp, title) VALUES ('$newid', '$lid', '$ratinguser', '$rating', '$ip', '$datetime', '$title' )";
    if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
        $ratemessage = _MD_MYTUBE_ERROR;
    } else {
        // All is well.  Calculate Score & Add to Summary (for quick retrieval & sorting) to DB.
        mytube_updaterating( intval( $lid ) );
        $ratemessage = _MD_MYTUBE_VOTEAPPRE . '<br />' . sprintf( _MD_MYTUBE_THANKYOU, $icmsConfig['sitename'] );
    } 
    redirect_header( 'singlevideo.php?lid=' . $lid, 4, $ratemessage );
    exit();
} else {
    $xoopsOption['template_main'] = 'mytube_ratevideo.html';
    include ICMS_ROOT_PATH . '/header.php';

    $catarray['imageheader'] = mytube_imageheader();
    $cid = intval( mytube_cleanRequestVars( $_REQUEST, 'cid', 0 ) );

    $catarray['imageheader'] = mytube_imageheader();
    $xoopsTpl -> assign( 'catarray', $catarray );

    $result = icms::$xoopsDB -> query( 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid );
    list( $title ) = icms::$xoopsDB -> fetchRow( $result );
    $xoopsTpl -> assign( 'video', array( 'id' => $lid, 'cid' => $cid, 'title' => $mytubemyts -> htmlSpecialCharsStrip( $title ) ) );
    
    mytube_noindexnofollow();
	
    $xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );
    include ICMS_ROOT_PATH . '/footer.php';
}

mytube_noindexnofollow();
	
$xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );
include ICMS_ROOT_PATH . '/footer.php';
?>