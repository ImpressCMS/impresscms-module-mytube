<?php
/**
* myTube_ipf - a small IPF-based video management module for ImpressCMS
*
*
* File: admin/about.php
*
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		myTube_ipf
* @since		1.00
* @author		McDonald, fiammybe
* @version		$Id$
*/

include_once 'admin_header.php';
$aboutObj = new icms_ipf_About();
$aboutObj -> render();