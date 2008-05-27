<?php
/**
 * $Id: altcat.php
 * Module: MyTube
 */

include 'admin_header.php';

Global $xoopsModuleConfig;

$op = xtube_cleanRequestVars( $_REQUEST, 'op', '' );
$lid = xtube_cleanRequestVars( $_REQUEST, 'lid', 0 );

function makeTreeCheckTable( $xt, $itemid, $title, $checks, $order = "" ) {
    global $xtubemyts;

    echo "<div style='text-align: left;'>\n";
    echo "<form name='altcat' method='post' action='" . xoops_getenv( 'PHP_SELF' ) . "'>\n";
    echo "<table width='100%' callspacing='1' class='outer'>\n";
    $sql = 'SELECT ' . $xt -> id . ', ' . $title . ' FROM ' . $xt -> table . ' WHERE ' . $xt -> pid . '=0' . ' ORDER BY ' . $title;
    if ( $order != '' ) {
        $sql .= ' ORDER BY ' . $order;
    } 
    $result = $xt -> db -> query( $sql );

    while ( list( $cid, $name ) = $xt -> db -> fetchRow( $result ) ) {
        $checked = array_key_exists( $cid, $checks ) ? "checked='checked'" : "";
        $disabled = ( $cid == intval( $_GET['cid'] ) ) ? "disabled='yes'" : "";
        $level = 1;
        echo "
		<tr style='text-align: left;'>
		 <td width='30%' class='head'>$name</td>
		 <td class='head'>
		 	<input type='checkbox' name='cid-" . $cid . "' value='0' " . $checked . " " . $disabled . "/>
		 </td>
		</tr>\n";
        $arr = $xt -> getChildTreeArray( $cid, $order );
        foreach ( $arr as $cat ) {
            $cat['prefix'] = str_replace( ".", "-", $cat['prefix'] );
            $catpath = "&nbsp;" . $cat['prefix'] . "&nbsp;" . $xtubemyts -> htmlSpecialCharsStrip( $cat[$title] );
            $checked = array_key_exists( $cat['cid'], $checks ) ? "checked='checked'" : "";
            $disabled = ( $cat['cid'] == intval( $_GET['cid'] ) ) ? "disabled='yes'" : "";
            $level = substr_count( $cat['prefix'], '-' ) + 1;
//          echo "<tr><td>" . $catpath . "<input type='checkbox' name='cid-" . $cat['cid'] . "' value='0' " . $checked . " " . $disabled . "/></td></tr>\n";
        echo "
		<tr style='text-align: left;'>
		 <td width='30%' class='even'>$catpath</td>
		 <td class='even'>
		 	<input type='checkbox' name='cid-" . $cat['cid'] . "' value='0' " . $checked . " " . $disabled . "/>
		 </td>
		</tr>\n";
        }

    }
    echo "<tr>
	       <td width='30%' ></td>
		   <td style='text-align: left;'>
		    <input type='submit' class='mainbutton' value='save'/>
		    <input type='hidden' name='op' value='save'/>
		    <input type='hidden' name='lid' value='" . $itemid . "'/>
		    </td>
		  </tr>";
    echo "</table></form></div>\n";
} 

switch ( strtolower( $op ) ) {
    case 'save': 
        // first delete all alternate categories for this topic
        $sql = "DELETE FROM " . $xoopsDB -> prefix( 'xoopstube_altcat' ) . " WHERE lid=" . $lid;
        if ( !$result = $xoopsDB -> query( $sql ) ) {
            XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 

        $k = array_keys( $_REQUEST );
        foreach( $k as $sid ) {
            if ( preg_match( "/cid-([0-9]*)/", $sid, $cid ) ) {
                $sql = "INSERT INTO " . $xoopsDB -> prefix( 'xoopstube_altcat' ) . "(cid, lid) VALUES('" . $cid[1] . "','" . $lid . "')";
                if ( !$result = $xoopsDB -> query( $sql ) ) {
                    XoopsErrorHandler_HandleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
                    return false;
                } 
            } 
        } 
        redirect_header( "index.php", 1, _AM_XTUBE_ALTCAT_CREATED );
        break;

    case 'main':
    default:
        xoops_cp_header();
        xtube_adminmenu( _AM_XTUBE_MALTCAT );
        echo "<fieldset><legend style='font-weight: bold; color: #0A3760;'>" . _AM_XTUBE_ALTCAT_MODIFYF . "</legend>\n
	      <div style='padding: 8px;'>" . _AM_XTUBE_ALTCAT_INFOTEXT . "</div>\n
	      </fieldset>\n
	     ";

        echo "<div style='text-align: left;'><h3>=====> " . $_REQUEST['title'] . " <=====</h3></div>"; 
        // Get an array of all alternate categories for this topic
        $sql = $xoopsDB -> query( "SELECT cid FROM " . $xoopsDB -> prefix( 'xoopstube_altcat' ) . " WHERE lid='" . $lid . "' ORDER BY lid" );
        $altcats = array();
        while ( $altcat = $xoopsDB -> fetchArray( $sql ) ) {
            $altcats[$altcat['cid']] = true;
        } 
        $mytree = new XoopsTree( $xoopsDB -> prefix( 'xoopstube_cat' ), 'cid', 'pid' );
        makeTreeCheckTable( $mytree, $lid, "title", $altcats );
        xoops_cp_footer();
} 

?>