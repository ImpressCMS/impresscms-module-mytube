<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: admin/brokenvideo.php
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

$op = mytube_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = intval( mytube_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

switch ( strtolower( $op ) ) {
    case 'updatenotice':
        $ack = mytube_cleanRequestVars( $_REQUEST, 'ack', 0 );
        $con = mytube_cleanRequestVars( $_REQUEST, 'con', 1 );
		$update_mess = '';

        if ( $ack && !$con ) {
            $acknowledged = ( $ack == 0 ) ? 1 : 0;
            $sql = 'UPDATE ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' SET acknowledged=' . $acknowledged;
            if ( $acknowledged == 0 ) {
                $sql .= ', confirmed=0 ';
            } 
            $sql .= ' WHERE lid=' . $lid;
            if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
                icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
            $update_mess = _AM_MYTUBE_BROKEN_NOWACK;
        }

        if ( $con ) {
            $confirmed = ( $con == 0 ) ? 1 : 0;
            $sql = 'UPDATE ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' SET confirmed=' . $confirmed;
            if ( $confirmed == 1 ) {
                $sql .= ', acknowledged=' . $confirmed;
            } 
            $sql .= ' WHERE lid=' . $lid;
            if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
                icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
            $update_mess = _AM_MYTUBE_BROKEN_NOWCON;
        } elseif ( !$con ) {
			$confirmed = ( $con == 0 ) ? 1 : 0;
            $sql = 'UPDATE ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' SET confirmed=' . $confirmed;
            if ( $confirmed == 1 ) {
                $sql .= ', acknowledged=' . $confirmed;
            } 
            $sql .= ' WHERE lid=' . $lid;
            if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
                icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
            $update_mess = _AM_MYTUBE_BROKEN_NOWCON;
		} 
        redirect_header( 'brokenvideo.php?op=default', 1, $update_mess );
        break;

    case 'delbrokenvideos':

		// Remove item_tag from Tag-module
		$sql = 'SELECT item_tag FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid;
		list( $item_tag ) = icms::$xoopsDB -> fetchRow( icms::$xoopsDB -> query( $sql ) );
        $tagupdate = mytube_tagupdate( $lid, $item_tag );

		// delete comments
		xoops_comment_delete( icms::$module -> getVar( 'mid' ), $lid );

		icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_altcat' ) . ' WHERE lid=' . $lid );
        icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' WHERE lid=' . $lid );
		icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_votedata' ) . ' WHERE lid=' . $lid );
        icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid );

        redirect_header( 'brokenvideo.php?op=default', 1, _AM_MYTUBE_BROKENFILEDELETED );
        exit();
        break;

    case 'ignorebrokenvideos':
        icms::$xoopsDB -> queryF( 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' WHERE lid=' . $lid );
        redirect_header( 'brokenvideo.php?op=default', 1, _AM_MYTUBE_BROKEN_FILEIGNORED );
        break;

    default:
        $result = icms::$xoopsDB -> query( 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) . ' ORDER BY reportid' );
        $totalbrokenvideos = icms::$xoopsDB -> getRowsNum( $result );

        icms_cp_header();
        mytube_adminmenu( '', _AM_MYTUBE_BROKEN_FILE );

        echo '
		<fieldset style="border: #E8E8E8 1px solid;">
			<legend style="display: inline; font-weight: bold; color: #0A3760;">' . _AM_MYTUBE_BROKEN_REPORTINFO . '</legend>
			<div style="padding: 8px;">' . _AM_MYTUBE_BROKEN_REPORTSNO . '&nbsp;<b>' . $totalbrokenvideos . '</b><div>
			<div style="padding-left: 8px;"><br />
				' . $imagearray['ignore'] . '&nbsp;&nbsp;' . _AM_MYTUBE_BROKEN_IGNOREDESC . '<br />
				' . $imagearray['editimg'] . '&nbsp;&nbsp;' . _AM_MYTUBE_BROKEN_EDITDESC . '<br />
				' . $imagearray['deleteimg'] . '&nbsp;&nbsp;' . _AM_MYTUBE_BROKEN_DELETEDESC . '
			</div>
		</fieldset>';

        echo '<table width="100%" border="0" cellspacing="1" cellpadding="2" class="outer" style="font-size: smaller;">';
        echo '<tr style="text-align: center;">';
        echo '<th width="3%" style="text-align: center;">' . _AM_MYTUBE_BROKEN_ID . '</th>';
        echo '<th width="35%" style="text-align: left;">' . _AM_MYTUBE_BROKEN_TITLE . '</th>';
        echo '<th>' . _AM_MYTUBE_BROKEN_REPORTER . '</th>';
        echo '<th>' . _AM_MYTUBE_BROKEN_FILESUBMITTER . '</th>';
        echo '<th>' . _AM_MYTUBE_BROKEN_DATESUBMITTED . '</th>';
        echo '<th>' . _AM_MYTUBE_BROKEN_ACKNOWLEDGED . '</th>';
        echo '<th>' . _AM_MYTUBE_BROKEN_DCONFIRMED . '</th>';
        echo '<th style="text-align: center;">' . _AM_MYTUBE_BROKEN_ACTION . '</th>';
        echo '</tr>';

        if ( $totalbrokenvideos == 0 ) {
            echo '<tr style="text-align: center;"><td style="text-align: center;" class="head" colspan="8">' . _AM_MYTUBE_BROKEN_NOFILEMATCH . '</td></tr>';
        } else {
            while ( list( $reportid, $lid, $sender, $ip, $date, $confirmed, $acknowledged ) = icms::$xoopsDB -> fetchRow( $result ) ) {
                $result2 = icms::$xoopsDB -> query( 'SELECT cid, title, vidid, submitter FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE lid=' . $lid );
                list( $cid, $videoshowname, $vidid, $submitter ) = icms::$xoopsDB -> fetchRow( $result2 );
				$email = '';
				$sendername = '';
				
                if ( $sender != 0 ) {
                    $result3 = icms::$xoopsDB -> query( 'SELECT uname, email FROM ' . icms::$xoopsDB -> prefix( 'users' ) . ' WHERE uid=' . $sender );
                    list( $sendername, $email ) = icms::$xoopsDB -> fetchRow( $result3 );
                } 
                $result4 = icms::$xoopsDB -> query( 'SELECT uname, email FROM ' . icms::$xoopsDB -> prefix( 'users' ) . '  WHERE uid=' . $sender );
                list( $ownername, $owneremail ) = icms::$xoopsDB -> fetchRow( $result4 );
				
				if ( $ownername == '' ) {
					$ownername = '&nbsp;';
				}

                $ack_image = ( $acknowledged ) ? $imagearray['ack_yes'] : $imagearray['ack_no'];
                $con_image = ( $confirmed ) ? $imagearray['con_yes'] : $imagearray['con_no'];

                echo '<tr style="text-align: center;">';
                echo '<td class="head">' . $lid . '</td>';
                echo '<td class="even" style="text-align: left;"><a href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $cid . '&amp;lid=' . $lid . '" target="_blank">' . $videoshowname . '</a></td>';

                if ( $email == '' ) {
                    echo '<td class="even">' . icms_member_user_Handler::getUserLink( $sender ) . ' (' . $ip . ')</td>';
                } else {
                    echo '<td class="even"><a href="mailto:' . $email . '">' . icms_member_user_Handler::getUserLink( $sender ) . '</a> (' . $ip . ')</td>';
                } 
                if ( $owneremail == '' ) {
                    echo '<td class="even">' . $ownername . '</td>';
                } else {
                    echo '<td class="even"><a href="mailto:' . $owneremail . '">' . $ownername . '</a></td>';
                } 
                echo '<td class="even" style="text-align: center;">' . mytube_time( formatTimestamp( $date, icms::$module -> config["dateformatadmin"] ) ) . '</td>';
                echo '<td class="even"><a href="brokenvideo.php?op=updateNotice&amp;lid=' . $lid . '&ack=' . intval( $acknowledged ) . '">' . $ack_image . ' </a></td>';
                echo '<td class="even"><a href="brokenvideo.php?op=updateNotice&amp;lid=' . $lid . '&con=' . intval( $confirmed ) . '">' . $con_image . '</a></td>';
                echo '<td class="even" style="text-align: center;" nowrap>';
                echo '<a href="brokenvideo.php?op=ignoreBrokenvideos&amp;lid=' . $lid . '">' . $imagearray['ignore'] . '</a>&nbsp;';
                echo '<a href="index.php?op=edit&amp;lid=' . $lid . '">' . $imagearray['editimg'] . '</a>&nbsp;';
                echo '<a href="brokenvideo.php?op=delbrokenvideos&amp;lid=' . $lid . '">' . $imagearray['deleteimg'] . '</a>';
                echo '</td></tr>';
            } 
        } 
        echo '</table>';
} 
icms_cp_footer();
?>