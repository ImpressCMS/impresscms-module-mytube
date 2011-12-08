<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: admin/votedata.php
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
$rid = intval( mytube_cleanRequestVars( $_REQUEST, 'rid', 0 ) );
$lid = intval( mytube_cleanRequestVars( $_REQUEST, 'lid', 0 ) );

switch ( strtolower( $op ) ) {
	case 'delvote':
		$sql = 'DELETE FROM ' . icms::$xoopsDB -> prefix( 'mytube_votedata' ) . ' WHERE ratingid=' . $rid;
		$result = icms::$xoopsDB -> queryF( $sql );
		mytube_updaterating( $lid );
		redirect_header( 'votedata.php', 1, _AM_MYTUBE_VOTEDELETED );
		break;

	case 'main':
	default:
		$start = mytube_cleanRequestVars( $_REQUEST, 'start', 0 );
		icms_cp_header();
		mytube_adminmenu( 8, _AM_MYTUBE_VOTE_RATINGINFOMATION );
		$_vote_data = mytube_getVoteDetails( $lid );

		$text_info = '
		<table width="100%">
		 <tr>
			<td width="50%" valign="top">
				<b>' . _AM_MYTUBE_VOTE_TOTALRATE . ': </b>' . intval( $_vote_data['rate'] ) . '<br />
				<b>' . _AM_MYTUBE_VOTE_USERAVG . ': </b>' . intval( round( $_vote_data['avg_rate'], 2 ) ) . '<br />
				<b>' . _AM_MYTUBE_VOTE_MAXRATE . ': </b>' . intval( $_vote_data['min_rate'] ) . '<br />
				<b>' . _AM_MYTUBE_VOTE_MINRATE . ': </b>' . intval( $_vote_data['max_rate'] ) . '<br />
			</td>
			<td>
				<b>' . _AM_MYTUBE_VOTE_MOSTVOTEDTITLE . ': </b>' . intval( $_vote_data['max_title'] ) . '<br />
				<b>' . _AM_MYTUBE_VOTE_LEASTVOTEDTITLE . ': </b>' . intval( $_vote_data['min_title'] ) . '<br />
				<b>' . _AM_MYTUBE_VOTE_REGISTERED . ': </b>' . ( intval( $_vote_data['rate'] - $_vote_data['null_ratinguser'] ) ) . '<br />
				<b>' . _AM_MYTUBE_VOTE_NONREGISTERED . ': </b>' . intval( $_vote_data['null_ratinguser'] ) . '<br />
			</td>
		 </tr>
		</table>';

		echo '
		 <fieldset style="border: #e8e8e8 1px solid;">
		 <legend style="display: inline; font-weight: bold; color: #0A3760; font-size: 12px;">' . _AM_MYTUBE_VOTE_DISPLAYVOTES . '</legend>
		 <div style="padding: 12px;">' . $text_info . '<br />
		 &nbsp;' . $imagearray['deleteimg'] . ' ' . _AM_MYTUBE_VOTE_DELETEDSC . '</li>
		 </div>
		 </fieldset>

		<table width="100%" cellspacing="1" cellpadding="2" class="outer" style="font-size: smaller;">
		<tr>
		<th style="text-align: center;">' . _AM_MYTUBE_VOTE_ID . '</th>
		<th style="text-align: center;">' . _AM_MYTUBE_VOTE_USER . '</th>
		<th style="text-align: center;">' . _AM_MYTUBE_VOTE_IP . '</th>
		<th style="text-align: left;">&nbsp;' . _AM_MYTUBE_VOTE_FILETITLE . '</th>
		<th style="text-align: center;">' . _AM_MYTUBE_VOTE_RATING . '</th>
		<th style="text-align: center;">' . _AM_MYTUBE_VOTE_DATE . '</th>
		<th style="text-align: center;">' . _AM_MYTUBE_MINDEX_ACTION . '</th></tr>';

		$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_votedata' );
		if ( $lid > 0 ) {
			$sql .= ' WHERE lid=' . $lid;
		}
		$sql .= ' ORDER BY ratingtimestamp DESC';

		$results = icms::$xoopsDB -> query( $sql, icms::$module -> config['admin_perpage'], $start );
		$votes = icms::$xoopsDB -> getRowsNum( icms::$xoopsDB -> query( $sql ) );

		if ( $votes == 0 ) {
			echo '<tr><td style="text-align: center;" colspan="7" class="head">' . _AM_MYTUBE_VOTE_NOVOTES . '</td></tr>';
		} else {
		while ( list( $ratingid, $lid, $ratinguser, $rating, $ratinghostname, $ratingtimestamp, $title ) = icms::$xoopsDB -> fetchRow( $results ) ) {
			$formatted_date = mytube_time( formatTimestamp( $ratingtimestamp, icms::$module -> config['dateformat'] ) );
			$ratinguname = icms::$user -> getUnameFromId( $ratinguser );
			$nice_link = mytube_nicelink( $title, '' );
			if ( icms::$module -> config['niceurl'] ) {
				$title = '<a href="../singlevideo.php?lid=' . $lid . '&amp;page=' . $nice_link . '">' . $mytubemyts -> htmlSpecialCharsStrip( trim( $title ) ) . '</a>';
			} else {
				$title = '<a href="../singlevideo.php?lid=' . $lid . '">' . $mytubemyts -> htmlSpecialCharsStrip( trim( $title ) ) . '</a>';
			}
			if ( stristr( $ratinghostname, '.') === false ) { $ipaddress = long2ip( $ratinghostname ); } else { $ipaddress = $ratinghostname; }
			echo '
				<tr>
					<td class="head" style="text-align: center;">' . $ratingid . '</td>
					<td class="even" style="text-align: center;">' . $ratinguname . '</td>
					<td class="even" style="text-align: center;">' . $ipaddress . '</td>
					<td class="even" style="text-align: left;">&nbsp;' . $title . '</td>
					<td class="even" style="text-align: center;">' . $rating . '</td>
					<td class="even" style="text-align: center;">' . $formatted_date . '</td>
					<td class="even" style="text-align: center;"><a href="votedata.php?op=delvote&amp;lid=' . $lid . '&amp;rid=' . $ratingid . '">' . $imagearray['deleteimg'] . '</a></td>
				</tr>';
			}
		}
		echo '</table>';
		// Include page navigation
		$page = ( $votes > icms::$module -> config['admin_perpage'] ) ? _AM_MYTUBE_MINDEX_PAGE : '';
		$pagenav = new icms_view_PageNav( $_vote_data['rate'], icms::$module -> config['admin_perpage'], $start, 'start' );
		echo '<span style="float: right; font-size: 90%;">' . $pagenav -> renderNav() . '</span>';
		break;
}
icms_cp_footer();
?>