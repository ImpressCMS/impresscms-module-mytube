<?php
/**
 * $Id: brokenvideo.php
 * Module: MyTube
 */

include 'header.php';

$op = xtube_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = xtube_cleanRequestVars( $_REQUEST, 'lid', 0 );
$lid = intval($lid);

$buttonn = strtolower(_MD_XTUBE_SUBMITBROKEN);

switch ( strtolower($op) ) {
    case $buttonn:
        global $xoopsUser;

        $sender = ( is_object( $xoopsUser ) && !empty( $xoopsUser ) ) ? $xoopsUser -> getVar( 'uid' ) : 0;
        $ip = getenv( "REMOTE_ADDR" );
        $title = xtube_cleanRequestVars( $_REQUEST, 'title', '' );
        $title = $xtubemyts -> addslashes( $title );
        $time = time();
        /**
         * Check if REG user is trying to report twice.
         */
        $result = $xoopsDB -> query( 'SELECT COUNT(*) FROM ' . $xoopsDB -> prefix( 'xoopstube_broken' ) . ' WHERE lid=' . $lid );
        list ( $count ) = $xoopsDB -> fetchRow( $result );
        if ( $count > 0 ) {
            $ratemessage = _MD_XTUBE_ALREADYREPORTED;
            redirect_header( 'singlevideo.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid), 2, $ratemessage );
            exit();
        } else {
            $reportid = 0;
            $sql = sprintf( "INSERT INTO %s (reportid, lid, sender, ip, date, confirmed, acknowledged, title ) VALUES ( %u, %u, %u, %s, %u, %u, %u, %s)", $xoopsDB -> prefix( 'xoopstube_broken' ), $reportid, $lid, $sender, $xoopsDB -> quoteString( $ip ), $time, 0, 0, $xoopsDB -> quoteString( $title ) );
            if ( ! $result = $xoopsDB -> query( $sql ) ) {
                $error[] = _MD_XTUBE_ERROR;
            } 
            $newid = $xoopsDB -> getInsertId();

            // Send notifications
            $tags = array();
            $tags['BROKENREPORTS_vidid'] = XOOPS_vidid . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/admin/index.php?op=listBrokenvideos';
            $notification_handler = &xoops_gethandler( 'notification' );
            $notification_handler -> triggerEvent( 'global', 0, 'video_broken', $tags );

            // Send email to the owner of the linkload stating that it is broken
            $sql = "SELECT * FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE lid=" . $lid . " AND published > 0 AND published <= " . time() . " AND (expired = 0 OR expired > " . time() . ")";
            $video_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
            unset( $sql );

            $member_handler = &xoops_gethandler( 'member' );
            $submit_user = &$member_handler -> getUser( $video_arr['submitter'] );
            if ( is_object( $submit_user ) && !empty( $submit_user ) ) {
                $subdate = formatTimestamp( $video_arr['date'], $xoopsModuleConfig['dateformat'] );
                $cid = $video_arr['cid'];
                $title = $xtubemyts -> htmlSpecialCharsStrip( $video_arr['title'] );
                $subject = _MD_XTUBE_BROKENREPORTED;

                $xoopsMailer = &getMailer();
                $xoopsMailer -> useMail();
                $template_dir = XOOPS_ROOT_PATH . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/language/" . $xoopsConfig['language'] . "/mail_template";
                $xoopsMailer -> setTemplateDir( $template_dir );
                $xoopsMailer -> setTemplate( 'videobroken_notify.tpl' );
                $xoopsMailer -> setToEmails( $submit_user -> getVar( 'email' ) );
                $xoopsMailer -> setFromEmail( $xoopsConfig['adminmail'] );
                $xoopsMailer -> setFromName( $xoopsConfig['sitename'] );
                $xoopsMailer -> assign( "X_UNAME", $submit_user -> getVar( 'uname' ) );
                $xoopsMailer -> assign( "SITENAME", $xoopsConfig['sitename'] );
                $xoopsMailer -> assign( "X_ADMINMAIL", $xoopsConfig['adminmail'] );
                $xoopsMailer -> assign( 'X_SITEvidid', XOOPS_vidid . '/' );
                $xoopsMailer -> assign( "X_TITLE", $title );
                $xoopsMailer -> assign( "X_SUB_DATE", $subdate );
                $xoopsMailer -> assign( 'X_VIDEOLOAD', XOOPS_vidid . '/modules/' . $xoopsModule -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $cid . '&amp;lid=' . $lid );
                $xoopsMailer -> setSubject( $subject );
                $message = ( $xoopsMailer -> send() ) ? _MD_XTUBE_BROKENREPORTED : _MD_XTUBE_ERRORSENDEMAIL;
            } else {
                $message = _MD_XTUBE_ERRORSENDEMAIL;
            } 
            redirect_header( 'singlevideo.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid), 2, $message );
        } 
        break;

    default:

        $xoopsOption['template_main'] = 'xoopstube_brokenvideo.html';
        include XOOPS_ROOT_PATH . '/header.php';

        $catarray['imageheader'] = xtube_imageheader();
        $xoopsTpl -> assign( 'catarray', $catarray );

        $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_videos' ) . ' WHERE lid =' . $lid;
        $video_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );
        unset( $sql );

        $sql = 'SELECT * FROM ' . $xoopsDB -> prefix( 'xoopstube_broken' ) . ' WHERE lid =' . $lid;
        $broke_arr = $xoopsDB -> fetchArray( $xoopsDB -> query( $sql ) );

        if ( is_array( $broke_arr ) ) {
            $broken['title'] = $xtubemyts -> htmlSpecialCharsStrip( $video_arr['title'] );
            $broken['id'] = $broke_arr['reportid'];
            $broken['reporter'] = xoops_getLinkedUnameFromId( $broke_arr['sender']  );
            $broken['date'] = formatTimestamp( $broke_arr['date'], $xoopsModuleConfig['dateformat'] );
            $broken['acknowledged'] = ( $broke_arr['acknowledged'] == 1 ) ? _YES : _NO ;
            $broken['confirmed'] = ( $broke_arr['confirmed'] == 1 ) ? _YES : _NO ;
            $xoopsTpl -> assign( 'broken', $broken );
            $xoopsTpl -> assign( 'brokenreport', true );
        } else {
            if ( !is_array( $video_arr ) || empty($video_arr) ) {
                $ratemessage = _MD_XTUBE_THISFILEDOESNOTEXIST;
                redirect_header( 'singlevideo.php?cid=' . intval($cid) . '&amp;lid=' . intval($lid), 0 , $ratemessage );
                exit();
            } 

            // file info
            $video['title'] = $xtubemyts -> htmlSpecialCharsStrip( $video_arr['title'] );
            $time = ( $video_arr['published'] > 0 ) ? $video_arr['published'] : $link_arr['updated'];
            $video['updated'] = formatTimestamp( $time, $xoopsModuleConfig['dateformat'] );
            $is_updated = ( $video_arr['updated'] != 0 ) ? _MD_XTUBE_UPDATEDON : _MD_XTUBE_SUBMITDATE;
            $video['publisher'] = xoops_getLinkedUnameFromId($video_arr['submitter']  );

            $xoopsTpl -> assign( 'video_id', $lid );
            $xoopsTpl -> assign( 'lang_subdate' , $is_updated );
            $xoopsTpl -> assign( 'video', $video );
        } 
	
        if ( is_object($xoTheme) ) {
          $xoTheme -> addMeta( 'meta', 'robots', 'noindex,nofollow' );
        } else {
          $xoopsTpl -> assign( 'xoops_meta_robots', 'noindex,nofollow' );
        }
                	
        $xoopsTpl -> assign( 'module_dir', $xoopsModule -> getVar( 'dirname' ) );
        include XOOPS_ROOT_PATH . '/footer.php';
        break;
}
?>