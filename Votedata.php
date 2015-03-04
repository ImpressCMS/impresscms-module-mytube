<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: class/Votedata.php
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

class mod_mytube_Votedata extends icms_ipf_seo_Object {

	public function __construct( &$handler ) {
		icms_ipf_object::__construct( $handler );

		$this -> quickInitVar( 'ratingid', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'lid', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'ratinguser', XOBJ_DTYPE_INT, true );
		$this -> quickInitVar( 'rating', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'ratinghostname', XOBJ_DTYPE_TXTBOX, true );
		$this -> quickInitVar( 'ratingtimestamp', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'title', XOBJ_DTYPE_TXTBOX, false );
	}
}