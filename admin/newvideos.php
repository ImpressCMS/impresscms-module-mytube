<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: admin/newvideos.php
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

include 'admin_header.php';

$op  = mytube_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = intval( mytube_cleanRequestVars( $_REQUEST, 'lid', '' ) );

switch ( strtolower( $op ) ) {
    case 'approve':

        $sql = 'SELECT cid, title, notifypub, submitter FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid;
        if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        list( $cid, $title, $notifypub, $submitter ) = icms::$xoopsDB -> fetchRow( $result );

        // Update the database
        $time = time();
		$publisher = icms::$user -> getVar( 'uname' );
        $sql2 = "UPDATE " . icms::$xoopsDB -> prefix( 'mytube_videos' ) . " SET published=" . $time . ", status=1, publisher='$publisher' WHERE lid=" . $lid;
		if ( !$result = icms::$xoopsDB -> queryF( $sql2 ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        }
		
		// increase user post counter
		user_posts( $submitter, 1 );

        $tags = array();
        $tags['VIDEO_NAME'] = $title;
        $tags['VIDEO_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $cid . '&amp;lid=' . $lid;

        $sql3 = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . $cid;
        if ( !$result = icms::$xoopsDB -> query( $sql3 ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
        } else {
            $row = icms::$xoopsDB -> fetchArray( $result );
            $tags['CATEGORY_NAME'] = $row['title'];
            $tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $cid;
            $notification_handler = icms::handler('icms_data_notification');
            $notification_handler -> triggerEvent( 'global', 0, 'new_video', $tags );
            $notification_handler -> triggerEvent( 'category', $cid, 'new_video', $tags );
            if ( intval($notifypub) == 1 ) {
                $notification_handler -> triggerEvent( 'video', $lid, 'approve', $tags );
            } 
        } 
        redirect_header( 'newvideos.php', 1, _AM_MYTUBE_SUB_NEWFILECREATED );
        break;

    case 'main':
    default:

        $start = mytube_cleanRequestVars( $_REQUEST, 'start', 0 );
        $sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published=0 ORDER BY lid DESC';
        if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        $new_array = icms::$xoopsDB -> query( $sql, icms::$module -> config['admin_perpage'], $start );
        $new_array_count = icms::$xoopsDB -> getRowsNum( icms::$xoopsDB -> query( $sql ) );

        icms_cp_header();
        mytube_adminmenu( '', _AM_MYTUBE_SUB_SUBMITTEDFILES );

        echo '  <fieldset style="border: #E8E8E8 1px solid;">
				<legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_MYTUBE_SUB_FILESWAITINGINFO . '</legend>
                <div style="padding: 12px;">' . _AM_MYTUBE_SUB_FILESWAITINGVALIDATION . '<b>' . $new_array_count . '</b><br /><br />
                ' . $imagearray['approve'] . ' ' . _AM_MYTUBE_SUB_APPROVEWAITINGFILE . '<br />
                ' . $imagearray['editimg'] . ' ' . _AM_MYTUBE_SUB_EDITWAITINGFILE . '<br />
                ' . $imagearray['deleteimg'] . ' ' . _AM_MYTUBE_SUB_DELETEWAITINGFILE . '</div>
                </fieldset>
             ';

        echo '<table width="100%" cellspacing="1" class="outer">';
        echo '<tr style="text-align: center;">';
        echo '<th><small>' . _AM_MYTUBE_MINDEX_ID . '</small></th>';
        echo '<th style="text-align: left;"><small>' . _AM_MYTUBE_MINDEX_TITLE . '</small></th>';
        echo '<th style="text-align: center;"><small>' . _AM_MYTUBE_VIDSOURCE2 . '</small></th>';
        echo '<th><small>' . _AM_MYTUBE_MINDEX_POSTER . '</small></th>';
        echo '<th><small>' . _AM_MYTUBE_MINDEX_SUBMITTED . '</small></th>';
        echo '<th><small>' . _AM_MYTUBE_MINDEX_ACTION . '</small></th>';
        echo '</tr>';
        if ( $new_array_count > 0 ) {
            while ( $new = icms::$xoopsDB -> fetchArray( $new_array ) ) {
                $lid = intval( $new['lid'] );
                $rating = number_format( $new['rating'], 2 );
                $title = $mytubemyts -> htmlSpecialCharsStrip( $new['title'] );
                $vidid = urldecode( $mytubemyts -> htmlSpecialCharsStrip( $new['vidid'] ) );
                $logourl = $mytubemyts -> htmlSpecialCharsStrip( $new['screenshot'] );
                $submitter = icms_member_user_Handler::getUserLink( $new['submitter'] );
                $returnsource = mytube_returnsource( $new['vidsource'] );
                $datetime = mytube_time( formatTimestamp( $new['date'], icms::$module -> config['dateformatadmin'] ) );

                $icon = ( $new['published'] ) ? $approved : '<a href="newvideos.php?op=approve&amp;lid=' . $lid . '">' . $imagearray['approve'] . ' </a>';
                $icon .= '<a href="index.php?op=edit&amp;lid=' . $lid . '">' . $imagearray['editimg'] . ' </a>';
                $icon .= '<a href="index.php?op=delete&amp;lid=' . $lid . '">' . $imagearray['deleteimg'] . '</a>';

                echo '<tr>';
                echo '<td class="head" style="text-align: center;"><small>' . $lid . '</small></td>';
                echo '<td class="even" nowrap><a href="newvideos.php?op=edit&amp;lid=' . $lid . '"><small>' . $title . '</small></a></td>';
                echo '<td class="even" style="text-align: center;" nowrap><small>' . $returnsource . '</small></td>';
                echo '<td class="even" style="text-align: center;" nowrap><small>' . $submitter . '</small></td>';
                echo '<td class="even" style="text-align: center;"><small>' . $datetime . '</small></td>';
                echo '<td class="even" style="text-align: center;" nowrap>' . $icon . '</td>';
                echo '</tr>';
            } 
        } else {
            echo '<tr><td style="text-align: center;" class="head" colspan="6">' . _AM_MYTUBE_SUB_NOFILESWAITING . '</td></tr>';
        } 
        echo '</table>';

        $pagenav = new icms_view_PageNav( $new_array_count, icms::$module -> config['admin_perpage'], $start, 'start' );
        echo '<div align="right" style="padding: 8px;">' . $pagenav -> renderNav() . '</div>';
        icms_cp_footer();
        break;
} 
?>