<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: class/Mod.php
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

defined( 'ICMS_ROOT_PATH' ) or die( 'ICMS root path not defined' );

class mod_mytube_Mod extends icms_ipf_seo_Object {

	public function __construct( &$handler ) {
		icms_ipf_object::__construct( $handler );

		$this -> quickInitVar( 'requestid', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'lid', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'cid', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'title', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'vidid', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'screenshot', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'submitter', XOBJ_DTYPE_INT, false, '', '', 0 );
		$this -> quickInitVar( 'publisher', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'status', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'date', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'hits', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'rating', XOBJ_DTYPE_FLOAT, false );
		$this -> quickInitVar( 'votes', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'comments', XOBJ_DTYPE_INT, false, 0 );
		$this -> quickInitVar( 'vidsource', XOBJ_DTYPE_INT, false, 0 );
		$this -> quickInitVar( 'published', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'expired', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'updated', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'offline', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'description', XOBJ_DTYPE_TXTAREA, false );
		$this -> quickInitVar( 'ipaddress', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'notifypub', XOBJ_DTYPE_INT, false, 0 );
		$this -> quickInitVar( 'vidrating', XOBJ_DTYPE_INT, false, 0 );
		$this -> quickInitVar( 'time', XOBJ_DTYPE_TXTBOX, false, '', '', '0:00:00' );
		$this -> quickInitVar( 'keywords', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'item_tag', XOBJ_DTYPE_TXTAREA, false );
		$this -> quickInitVar( 'picurl', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'nice_url', XOBJ_DTYPE_TXTBOX, false );
	}
}