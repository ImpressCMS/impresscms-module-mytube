<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: class/ConfigsHandler.php
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

defined( 'ICMS_ROOT_PATH' ) or die ( 'ICMS root path not defined' );

class mod_mytube_ConfigsHandler extends icms_ipf_Handler {
	public function __construct( &$db ) {
		parent::__construct( $db, 'configs', array('rssactive'), '', '', basename( dirname( dirname( __FILE__ ) ) ) );
	}
}