<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: include/onupdate.inc.php
*
* @copyright	http://www.xoops.org/ The XOOPS Project
* @copyright	XOOPS_copyrights.txt
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* 				MyTube
* @since		1.00
* @author		McDonald
* @version		$Id$
*/
 
if ( !defined( 'ICMS_ROOT_PATH' ) ) { die( 'ICMS root path not defined' ); }

define( 'MYTUBE_DB_VERSION', 1 );

function icms_module_update_mytube( $module ) {
	$icmsDatabaseUpdater = XoopsDatabaseFactory::getDatabaseUpdater();
	$icmsDatabaseUpdater -> moduleUpgrade( $module );
	return true;
}

function icms_module_install_mytube( $module ) {	
	$sql = "INSERT INTO " . icms::$xoopsDB -> prefix( 'mytube_indexpage' ) . " (indeximage,indexheading,indexheader,indexfooter,indexheaderalign,indexfooteralign) VALUES ('logo-en.png','MyTube','Please report any unavailable video clips by using the [i]Report Broken[/i] option. Thanks!','<a href=\"http://www.adobe.com/go/getflashplayer\" target=\"_blank\"><img src=\"images/get_flash_player.png\" alt=\"Get Adobe Flash Player\" border=\"0\" /></a>','left','left')";
	if ( !$result = icms::$xoopsDB -> queryF( $sql ) ) {
		icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
		return false;
	}
	return TRUE;
}