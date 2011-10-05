<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: brokenvideo.php
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

$op  = mytube_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = intval( mytube_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

$buttonn = strtolower( _MD_MYTUBE_SUBMITBROKEN );

switch ( strtolower( $op ) ) {
    case $buttonn:
        $sender = ( is_object( icms::$user ) && !empty( icms::$user ) ) ? icms::$user -> getVar( 'uid' ) : 0;
        $ip = getenv( 'REMOTE_ADDR' );
        $title = mytube_cleanRequestVars( $_REQUEST, 'title', '' );
        $title = icms_core_DataFilter::addSlashes( $title );
        $time = time();
        
        // Check if REG user is trying to report twice
        $result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' WHERE lid=' . $lid );
        list ( $count ) = icms::$xoopsDB -> fetchRow( $result );
        if ( $count > 0 ) {
            $ratemessage = _MD_MYTUBE_ALREADYREPORTED;
			$redirect_link = 'singlevideo.php?lid=' . $lid . '&amp;page=' . mytube_nicelink( $title, '' );
            redirect_header( $ratemessage, 2, $ratemessage );
            exit();
        } else {
            $reportid = 0;
            $sql = sprintf( "INSERT INTO %s (reportid, lid, sender, ip, date, confirmed, acknowledged, title ) VALUES ( %u, %u, %u, %s, %u, %u, %u, %s)", icms::$xoopsDB -> prefix( 'mytube_broken' ), $reportid, intval( $lid ), $sender, icms::$xoopsDB -> quoteString( $ip ), $time, 0, 0, icms::$xoopsDB -> quoteString( $title ) );
            if ( ! $result = icms::$xoopsDB -> query( $sql ) ) {
                $error[] = _MD_MYTUBE_ERROR;
            } 
            $newid = icms::$xoopsDB -> getInsertId();

            // Send notifications
            $tags = array();
            $tags['BROKENREPORTS_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/admin/index.php?op=listBrokenvideos';
            $notification_handler = icms::handler('icms_data_notification');
            $notification_handler -> triggerEvent( 'global', 0, 'video_broken', $tags );

            // Send email to the owner of the linkload stating that it is broken
            $sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid . ' AND published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ')';
            $video_arr = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
            unset( $sql );

            $member_handler = icms::handler( 'icms_member' );
            $submit_user = &$member_handler -> getUser( $video_arr['submitter'] );
            if ( is_object( $submit_user ) && !empty( $submit_user ) ) {
                $subdate = mytube_time( formatTimestamp( $video_arr['date'], icms::$module -> config['dateformat'] ) );
                $cid = $video_arr['cid'];
                $title = $mytubemyts -> htmlSpecialCharsStrip( $video_arr['title'] );
                $subject = _MD_MYTUBE_BROKENREPORTED;
				$template_dir = ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/language/' . $icmsConfig['language'] . '/mail_template';
                $xoopsMailer = new icms_messaging_Handler();
                $xoopsMailer -> useMail();
                $xoopsMailer -> setTemplateDir( $template_dir );
                $xoopsMailer -> setTemplate( 'videobroken_notify.tpl' );
                $xoopsMailer -> setToEmails( $submit_user -> getVar( 'email' ) );
                $xoopsMailer -> setFromEmail( $icmsConfig['adminmail'] );
                $xoopsMailer -> setFromName( $icmsConfig['sitename'] );
                $xoopsMailer -> assign( 'X_UNAME', $submit_user -> getVar( 'uname' ) );
                $xoopsMailer -> assign( 'SITENAME', $icmsConfig['sitename'] );
                $xoopsMailer -> assign( 'X_ADMINMAIL', $icmsConfig['adminmail'] );
                $xoopsMailer -> assign( 'X_SITEVIDID', ICMS_URL . '/' );
                $xoopsMailer -> assign( 'X_TITLE', $title );
                $xoopsMailer -> assign( 'X_SUB_DATE', $subdate );
                $xoopsMailer -> assign( 'X_VIDEOLOAD', ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?lid=' . $lid );
                $xoopsMailer -> setSubject( $subject );
                $message = ( $xoopsMailer -> send() ) ? _MD_MYTUBE_BROKENREPORTED : _MD_MYTUBE_ERRORSENDEMAIL;
            } else {
                $message = _MD_MYTUBE_ERRORSENDEMAIL;
            } 
			$redirect_link = 'singlevideo.php?lid=' . $lid . '&amp;page=' . mytube_nicelink( $video_arr['title'], $video_arr['nice_url'] );
            redirect_header( $redirect_link, 2, $message );
        } 
        break;

    default:
        $xoopsOption['template_main'] = 'mytube_brokenvideo.html';
        include ICMS_ROOT_PATH . '/header.php';

		if ( mytube_imageheader() != '') {
			$catarray['imageheader'] = '<div align="center">' . mytube_imageheader() . '</div>';
			$xoopsTpl -> assign( 'catarray', $catarray );
		}

        $sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid;
        $video_arr = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );
        unset( $sql );

        $sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' WHERE lid=' . $lid;
        $broke_arr = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

        if ( is_array( $broke_arr ) ) {
            $broken['title'] 		= $mytubemyts -> htmlSpecialCharsStrip( $video_arr['title'] );
            $broken['id'] 			= $broke_arr['reportid'];
            $broken['reporter'] 	= icms_member_user_Handler::getUserLink( $broke_arr['sender']  );
            $broken['date'] 		= mytube_time( formatTimestamp( $broke_arr['date'], icms::$module -> config['dateformat'] ) );
            $broken['acknowledged'] = ( $broke_arr['acknowledged'] == 1 ) ? _YES : _NO ;
            $broken['confirmed'] 	= ( $broke_arr['confirmed'] == 1 ) ? _YES : _NO ;
            $xoopsTpl -> assign( 'broken', $broken );
            $xoopsTpl -> assign( 'brokenreport', true );
        } else {
            if ( !is_array( $video_arr ) || empty($video_arr) ) {
                $ratemessage = _MD_MYTUBE_THISFILEDOESNOTEXIST;
				$redirect_link = 'singlevideo.php?lid=' . intval( $lid ) . '&amp;page=' . mytube_nicelink( $video_arr['title'], $video_arr['nice_url'] );
                redirect_header( $redirect_link, 0 , $ratemessage );
                exit();
			} 
            // file info
			$is_updated 		= ( $video_arr['updated'] != 0 ) ? _MD_MYTUBE_UPDATEDON : _MD_MYTUBE_SUBMITDATE;
			$time 				= ( $video_arr['published'] > 0 ) ? $video_arr['published'] : $link_arr['updated'];
            $video['title']     = $mytubemyts -> htmlSpecialCharsStrip( $video_arr['title'] );
            $video['updated']   = mytube_time( formatTimestamp( $time, icms::$module -> config['dateformat'] ) );            
            $video['publisher'] = icms_member_user_Handler::getUserLink( $video_arr['submitter'] );
            $xoopsTpl -> assign( 'video_id', $lid );
            $xoopsTpl -> assign( 'lang_subdate' , $is_updated );
            $xoopsTpl -> assign( 'video', $video );
        } 
	
        mytube_noindexnofollow();
                	
        $xoopsTpl -> assign( 'module_dir', icms::$module -> getVar( 'dirname' ) );
        include ICMS_ROOT_PATH . '/footer.php';
        break;
}
?>