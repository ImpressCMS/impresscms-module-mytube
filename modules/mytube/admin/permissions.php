<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/permissions.php
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
include_once '../../../include/cp_header.php';

icms_cp_header();
mytube_adminmenu( '', _AM_MYTUBE_PERM_MANAGEMENT );

$permtoset = isset( $_POST['permtoset'] ) ? intval( $_POST['permtoset'] ) : 1;
$selected = array( '', '', '', '', '' );
$selected[$permtoset-1] = 'selected';
echo "<form method='post' name='fselperm' action='permissions.php'><table border=0><tr><td><select name='permtoset' onChange='javascript: document.fselperm.submit()'>
<option value='1'" . $selected[0] . ">" . _AM_MYTUBE_PERM_CPERMISSIONS . "</option>
<option value='2'" . $selected[1] . ">" . _AM_MYTUBE_PERM_SPERMISSIONS . "</option>
<option value='3'" . $selected[2] . ">" . _AM_MYTUBE_PERM_APERMISSIONS . "</option>
<option value='4'" . $selected[3] . ">" . _AM_MYTUBE_PERM_AUTOPERMISSIONS . "</option>
<option value='5'" . $selected[4] . ">" . _AM_MYTUBE_PERM_RATEPERMISSIONS . "</option>
</select>&nbsp;<input type='submit' name='go'/></td></tr></table></form>";
$module_id = icms::$module -> getVar('mid');

$icon = '<img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar('dirname') . '/images/icon/information.png" alt="" style="float: left; padding-right: 10px;" />';

switch( $permtoset ) {
	case 1:
		$title_of_form = '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760; font-size: 12px;">' . _AM_MYTUBE_PERM_CPERMISSIONS . '</legend><div style="padding: 8px; font-weight: normal;">' . $icon . _AM_MYTUBE_PERM_CSELECTPERMISSIONS . '<br /><br /><br /><small>' . _AM_MYTUBE_PERM_PERMSNOTE . '</small></div></fieldset>';
		$perm_name = 'MyTubeCatPerm';
		break;
	case 2:
		$title_of_form = '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760; font-size: 12px;">' . _AM_MYTUBE_PERM_SPERMISSIONS . '</legend><div style="padding: 8px; font-weight: normal;">' . $icon . _AM_MYTUBE_PERM_SPERMISSIONS_TEXT . '<br /><br /><br /><small>' . _AM_MYTUBE_PERM_PERMSNOTE . '</small></div></fieldset>';
		$perm_name = 'MyTubeSubPerm';
		break;
	case 3:
		$title_of_form = '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760; font-size: 12px;">' . _AM_MYTUBE_PERM_APERMISSIONS . '</legend><div style="padding: 8px; font-weight: normal;">' . $icon . _AM_MYTUBE_PERM_APERMISSIONS_TEXT . '<br /><br /><br /><small>' . _AM_MYTUBE_PERM_PERMSNOTE . '</small></div></fieldset>';
		$perm_name = 'MyTubeAppPerm';
		break;
	case 4:
		$title_of_form = '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760; font-size: 12px;">' . _AM_MYTUBE_PERM_AUTOPERMISSIONS . '</legend><div style="padding: 8px; font-weight: normal;">' . $icon . _AM_MYTUBE_PERM_AUTOPERMISSIONS_TEXT . '<br /><br /><br /><small>' . _AM_MYTUBE_PERM_PERMSNOTE . '</small></div></fieldset>';
		$perm_name = 'MyTubeAutoApp';
		break;
	case 5:
		$title_of_form = '<fieldset style="border: #e8e8e8 1px solid;"><legend style="display: inline; font-weight: bold; color: #0A3760; font-size: 12px;">' . _AM_MYTUBE_PERM_RATEPERMISSIONS . '</legend><div style="padding: 8px; font-weight: normal;">' . $icon . _AM_MYTUBE_PERM_RATEPERMISSIONS_TEXT . '<br /><br /><br /><small>' . _AM_MYTUBE_PERM_PERMSNOTE . '</small></div></fieldset>';
		$perm_name = 'MyTubeRatePerms';
		break;
}

$permform = new icms_form_Groupperm( $title_of_form, $module_id, $perm_name, '' );
$result = icms::$xoopsDB -> query( 'SELECT cid, pid, title FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' ORDER BY title ASC' );
if ( icms::$xoopsDB -> getRowsNum( $result ) ) {
    while ( $permrow = icms::$xoopsDB -> fetcharray( $result ) ) {
        $permform -> addItem( $permrow['cid'], '&nbsp;' . $permrow['title'], $permrow['pid']);
    }
    echo $permform -> render();
} else {
    echo '<div><b>' . _AM_MYTUBE_PERM_CNOCATEGORY . '</b></div>';
} 
unset( $permform );

icms_cp_footer();
?>