<?php
/**
 * $Id: videoloadinfo.php
 * Module: MyTube
 */

$module_video = '';

$video['id'] = intval( $video_arr['lid'] );
$video['cid'] = intval( $video_arr['cid'] );
$video['published'] = intval( $video_arr['published'] ) ? true : false;

$path = $mytree -> getPathFromId( $video_arr['cid'], "title" );
$path = substr( $path, 1 );
$path = basename( $path );
$path = str_replace( "/", "", $path );
$video['category'] = $path;

$rating = round( number_format( $video_arr['rating'], 0 ) / 2 );
$video['rateimg'] = "rate$rating.png";
unset( $rating );

$video['votes'] = ( $video_arr['votes'] == 1 ) ? _MD_XTUBE_ONEVOTE : sprintf( _MD_XTUBE_NUMVOTES, $video_arr['votes'] );
$video['hits'] = sprintf( _MD_XTUBE_VIDEOHITS, intval( $video_arr['hits'] ) ) ;
$xoopsTpl -> assign( 'lang_dltimes', $video['hits'] );
$publisher = ( isset( $video_arr['publisher'] ) && !empty( $video_arr['publisher'] ) ) ? $xtubemyts -> htmlSpecialCharsStrip( $video_arr['publisher'] ) : _MD_XTUBE_NOTSPECIFIED;
$video['title'] = $xtubemyts -> htmlSpecialCharsStrip( $video_arr['title']);
$video['vidid'] = $video_arr['vidid'];
$video[ 'videothumb' ] = xtube_videothumb($video['vidid'],$video['title'],$video_arr['vidsource'],$video_arr['picurl'],$video_arr['screenshot']);
$video['publisher'] = xtube_videopublisher($video['vidid'],$video_arr['publisher'],$video_arr['vidsource']);

if ( $moderate == 0 ) {
    $time = ( $video_arr['updated'] != 0 ) ? $video_arr['updated'] : $video_arr['published'];
    $is_updated = ( $video_arr['updated'] != 0 ) ? _MD_XTUBE_UPDATEDON : _MD_XTUBE_PUBLISHDATE;
    $xoopsTpl -> assign( 'lang_subdate' , $is_updated );
} else {
    $time = $video_arr['date'];
    $is_updated = _MD_XTUBE_SUBMITDATE;
    $xoopsTpl -> assign( 'lang_subdate' , $is_updated );
}

$video['updated'] = formatTimestamp( $time, $xoopsModuleConfig['dateformat'] );
if (defined("ICMS_VERSION_NAME")) {
  $video['description'] = xtube_substr($video_arr['description'], 0, $xoopsModuleConfig['totalchars'],'...');
} else {
  $video['description'] = $xtubemyts -> displayTarea( $video_arr['description'], 1, 1, 1, 1, 1 );
}
$video['submitter'] = xoops_getLinkedUnameFromId( $video_arr['submitter'] );
$video['time'] = $video_arr['time'];

$video['mail_subject'] = rawurlencode( sprintf( _MD_XTUBE_INTFILEFOUND, $xoopsConfig['sitename'] ) );
$video['mail_body'] = rawurlencode( sprintf( _MD_XTUBE_INTFILEFOUND, $xoopsConfig['sitename'] ) . ':  ' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $video_arr['cid'] . '&amp;lid=' . $video_arr['lid'] );
$video['isadmin'] = ( ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) && $xoopsUser -> isAdmin( $xoopsModule -> mid() ) ) ? true : false;
$video['comments'] = $video_arr['comments'];

$video['adminvideo'] = '';
if ( $video['isadmin'] == true && $moderate == 0 ) {
    $video['adminvideo'] = '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/computer.png" alt="' . _MD_XTUBE_ADMINSECTION . '" title="' . _MD_XTUBE_ADMINSECTION . '" align="absmiddle"/></a>&nbsp;';
    if ($video_arr['vidsource']==200) {
      $video['adminvideo'] .=  '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/mytube.php?op=edit&amp;lid=' . $video_arr['lid'] . '"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/film_edit.png" alt="' . _MD_XTUBE_EDIT . '" title="' . _MD_XTUBE_EDIT . '" align="absmiddle"/></a>&nbsp;';
    } else {
      $video['adminvideo'] .=  '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php?op=edit&amp;lid=' . $video_arr['lid'] . '"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/film_edit.png" alt="' . _MD_XTUBE_EDIT . '" title="' . _MD_XTUBE_EDIT . '" align="absmiddle"/></a>&nbsp;';
    }
    $video['adminvideo'] .= '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php?op=delete&amp;lid=' . $video_arr['lid'] . '"><img src="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/images/icon/film_delete.png" alt="' . _MD_XTUBE_DELETE . '" title="' . _MD_XTUBE_DELETE . '" align="absmiddle"/></a>';
} else {
    $video['adminvideo'] = '[ <a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/submit.php?op=edit&amp;lid=' . $video_arr['lid'] . '&approve=1">' . _MD_XTUBE_APPROVE . '</a> | ';
    $video['adminvideo'] .= '<a href="' . XOOPS_URL . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/submit.php?op=delete&amp;lid=' . $video_arr['lid'] . '">' . _MD_XTUBE_DELETE . '</a> ]';
} 
$votestring = ( $video_arr['votes'] == 1 ) ? _MD_XTUBE_ONEVOTE : sprintf( _MD_XTUBE_NUMVOTES, $video_arr['votes'] );

if ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) {
    $video['useradminvideo'] = 0;
    $_user_submitter = ( $xoopsUser -> getvar( 'uid' ) == $video_arr['submitter'] ) ? true : false;
    if ( true == checkgroups( $cid ) ) {
        $video['useradminvideo'] = 1;
    } 
} 

$video['icons'] = xtube_displayicons( $video_arr['published'], $video_arr['status'], $video_arr['hits'] );
$video['allow_rating'] = ( checkgroups( $cid, 'XTubeRatePerms' ) ) ? true : false;
$video['screen_shot'] = $xoopsModuleConfig['screenshot'];
$video['total_chars'] = $xoopsModuleConfig['totalchars'];
$video['module_dir'] = $xoopsModule -> getVar( 'dirname' );
$video['comment_rules'] = $xoopsModuleConfig['com_rule'];

?>