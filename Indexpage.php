<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links 1.06
*
* File: class/Indexpage.php
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

class mod_mytube_Indexpage extends icms_ipf_seo_Object {

	public function __construct( &$handler ) {
		icms_ipf_object::__construct( $handler );

		$this -> quickInitVar( 'dummy_key', XOBJ_DTYPE_INT, false );
		$this -> quickInitVar( 'indeximage', XOBJ_DTYPE_TXTBOX, false, '', '', 'blank.gif' );
		$this -> quickInitVar( 'indexheading', XOBJ_DTYPE_TXTBOX, false, '', '', 'MyTube' );
		$this -> quickInitVar( 'indexheader', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'indexfooter', XOBJ_DTYPE_TXTBOX, false );
		$this -> quickInitVar( 'indexheaderalign', XOBJ_DTYPE_TXTBOX, false, '', '', 'left' );
		$this -> quickInitVar( 'indexfooteralign', XOBJ_DTYPE_TXTBOX, false, '', '', 'center' );
		$this -> quickInitVar( 'lastvideosyn', XOBJ_DTYPE_INT, false, '', '', '0' );
		$this -> quickInitVar( 'lastvideostotal', XOBJ_DTYPE_TXTBOX, false, '', '', '50' );
	}
}