<?php
/**
 * $Id: brokenvideo.php
 * Module: MyTube
 */

include 'admin_header.php';

global $imagearray, $xoopsModule;

$op = xtube_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = xtube_cleanRequestVars( $_REQUEST, 'lid', 0 );

switch ( strtolower( $op ) ) {
    case "updatenotice":
        $ack = xtube_cleanRequestVars( $_REQUEST, 'ack', 0 );
        $con = xtube_cleanRequestVars( $_REQUEST, 'con', 1 );

        if ( $ack && !$con ) {
            $acknowledged = ( $ack == 0 ) ? 1 : 0;
            $sql = "UPDATE " . $xoopsDB -> prefix( 'xoopstube_broken' ) . " SET acknowledged=" . $acknowledged;
            if ( $acknowledged == 0 ) {
                $sql .= ", confirmed=0 ";
            } 
            $sql .= " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> queryF( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
            $update_mess = _AM_XTUBE_BROKEN_NOWACK;
        } 

        if ( $con ) {
            $confirmed = ( $con == 0 ) ? 1 : 0;
            $sql = "UPDATE " . $xoopsDB -> prefix( 'xoopstube_broken' ) . " SET confirmed=" . $confirmed;
            if ( $confirmed == 1 ) {
                $sql .= ", acknowledged=" . $confirmed;
            } 
            $sql .= " WHERE lid=" . $lid;
            if ( !$result = $xoopsDB -> queryF( $sql ) ) {
                XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                return false;
            } 
            $update_mess = _AM_XTUBE_BROKEN_NOWCON;
        } 
        redirect_header( "brokenvideo.php?op=default", 1, $update_mess );
        break;

    case "delbrokenvideos":
        $xoopsDB -> queryF( "DELETE FROM " . $xoopsDB -> prefix( 'xoopstube_broken' ) . " WHERE lid=" . $lid );
        $xoopsDB -> queryF( "DELETE FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE lid=" . $lid );
        redirect_header( "brokenvideo.php?op=default", 1, _AM_XTUBE_BROKENFILEDELETED );
        exit();
        break;

    case "ignorebrokenvideos":
        $xoopsDB -> queryF( "DELETE FROM " . $xoopsDB -> prefix( 'xoopstube_broken' ) . " WHERE lid=" . $lid );
        redirect_header( "brokenvideo.php?op=default", 1, _AM_XTUBE_BROKEN_FILEIGNORED );
        break;

    default:
        $result = $xoopsDB -> query( "SELECT * FROM " . $xoopsDB -> prefix( 'xoopstube_broken' ) . " ORDER BY reportid" );
        $totalbrokenvideos = $xoopsDB -> getRowsNum( $result );

        xoops_cp_header();
        xtube_adminmenu( "<h4>" . _AM_XTUBE_BROKEN_FILE . "</h4>" );

        echo "  <div style='padding:5px; background-color: #EEEEEE; border: 1px solid #D9D9D9;'>
                <span style='font-weight: bold; color: #0A3760;'>" . _AM_XTUBE_BROKEN_REPORTINFO . "<br /><br /></span>\n
                <span style='padding: 12px;'>" . _AM_XTUBE_BROKEN_REPORTSNO . "<b>$totalbrokenvideos</b><br /><br /><span>\n
                <div style='padding: 8px;'><li>&nbsp;&nbsp;" . $imagearray['ignore'] . " " . _AM_XTUBE_BROKEN_IGNOREDESC . "<br />
                <li>&nbsp;&nbsp;" . $imagearray['editimg'] . " " . _AM_XTUBE_BROKEN_EDITDESC . "<br />
                <li>&nbsp;&nbsp;" . $imagearray['deleteimg'] . " " . _AM_XTUBE_BROKEN_DELETEDESC . "</div>\n
                </div><br />\n
             ";

        echo "<table width='100%' border='0' cellspacing='1' cellpadding='2' class='outer'>\n";
        echo "<tr style='text-align: center;'>\n";
        echo "<th width='3%' style='text-align: center;'>" . _AM_XTUBE_BROKEN_ID . "</th>\n";
        echo "<th width='35%' style='text-align: left;'>" . _AM_XTUBE_BROKEN_TITLE . "</th>\n";
        echo "<th>" . _AM_XTUBE_BROKEN_REPORTER . "</th>\n";
        echo "<th>" . _AM_XTUBE_BROKEN_FILESUBMITTER . "</th>\n";
        echo "<th>" . _AM_XTUBE_BROKEN_DATESUBMITTED . "</th>\n";
        echo "<th>" . _AM_XTUBE_BROKEN_ACKNOWLEDGED . "</th>\n";
        echo "<th>" . _AM_XTUBE_BROKEN_DCONFIRMED . "</th>\n";
        echo "<th style='text-align: center;'>" . _AM_XTUBE_BROKEN_ACTION . "</th>\n";
        echo "</tr>\n";

        if ( $totalbrokenvideos == 0 ) {
            echo "<tr style='text-align: center;'><td style='text-align: center;' class='head' colspan='8'>" . _AM_XTUBE_BROKEN_NOFILEMATCH . "</td></tr>";
        } else {
            while ( list( $reportid, $lid, $sender, $ip, $date, $confirmed, $acknowledged ) = $xoopsDB -> fetchRow( $result ) ) {
                $result2 = $xoopsDB -> query( "SELECT cid, title, vidid, submitter FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE lid=$lid" );
                list( $cid, $videoshowname, $vidid, $submitter ) = $xoopsDB -> fetchRow( $result2 );
                if ( $sender != 0 ) {
                    $result3 = $xoopsDB -> query( "SELECT uname, email FROM " . $xoopsDB -> prefix( "users" ) . " WHERE uid=" . $sender . "" );
                    list( $sendername, $email ) = $xoopsDB -> fetchRow( $result3 );
                } 
                $result4 = $xoopsDB -> query( "SELECT uname, email FROM " . $xoopsDB -> prefix( "users" ) . " WHERE uid=" . $sender . "" );
                list( $ownername, $owneremail ) = $xoopsDB -> fetchRow( $result4 );

                $ack_image = ( $acknowledged ) ? $imagearray['ack_yes'] : $imagearray['ack_no'];
                $con_image = ( $confirmed ) ? $imagearray['con_yes'] : $imagearray['con_no'];

                echo "<tr style='text-align: center;'>\n";
                echo "<td class='head'>$reportid</td>\n";
                echo "<td class='even' style='text-align: left;'><a href='" . XOOPS_URL . "/modules/" . $xoopsModule -> getVar( 'dirname' ) . "/singlevideo.php?cid=" . $cid . "&amp;lid=" . $lid . "' target='_blank'>" . $videoshowname . "</a></td>\n";

                if ( $email == "" ) {
                    echo "<td class='even'>$sendername ($ip)";
                } else {
                    echo "<td class='even'><a href='mailto:$email'>$sendername</a> ($ip)";
                } 
                if ( $owneremail == '' ) {
                    echo "<td class='even'>$ownername";
                } else {
                    echo "<td class='even'><a href='mailto:$owneremail'>$ownername</a>";
                } 
                echo "</td>\n";
                echo "<td class='even' style='text-align: center;'>" . formatTimestamp( $date, $xoopsModuleConfig['dateformat'] ) . "</td>\n";
                echo "<td class='even'><a href='brokenvideo.php?op=updateNotice&amp;lid=$lid&amp;ack=$acknowledged'>" . $ack_image . " </a></td>\n";
                echo "<td class='even'><a href='brokenvideo.php?op=updateNotice&amp;lid=" . $lid . "&con=" . intval( $confirmed ) . "'>" . $con_image . "</a></td>\n";
                echo "<td class='even' style='text-align: center;' nowrap>\n";
                echo "<a href='brokenvideo.php?op=ignoreBrokenvideos&amp;lid=" . $lid . "'>" . $imagearray['ignore'] . "</a>\n";
                echo "<a href='index.php?op=edit&amp;lid=" . $lid . "'>" . $imagearray['editimg'] . "</a>\n";
                echo "<a href='brokenvideo.php?op=delBrokenvideos&amp;lid=" . $lid . "'>" . $imagearray['deleteimg'] . "</a>\n";
                echo "</td></tr>\n";
            } 
        } 
        echo"</table>";
} 
xoops_cp_footer();

?>
