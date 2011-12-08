<?php

if ( !defined( 'ICMS_ROOT_PATH' ) ) { die( 'ImpressCMS root path not defined' ); }

/**
* IcmsModuleAbout
*
* Simple class that lets you build an about page
*
* @copyright	The ImpressCMS Project http://www.impresscms.org/
* @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @package		core
* @since		1.0
* @author		marcan <marcan@impresscms.org>
* @version		$Id: icmsmoduleabout.php 6049 2008-10-27 10:48:55Z mcdonald3072 $
*/

class MyTubeModuleAbout {
	var $_lang_aboutTitle;
	var $_lang_author_info;
	var $_lang_developer_lead;
	var $_lang_developer_contributor;
	var $_lang_developer_website;
	var $_lang_developer_email;
	var $_lang_developer_credits;
	var $_lang_module_info;
	var $_lang_module_status;
	var $_lang_module_release_date;
	var $_lang_module_demo;
	var $_lang_module_support;
	var $_lang_module_bug;
	var $_lang_module_submit_bug;
	var $_lang_module_feature;
	var $_lang_module_submit_feature;
	var $_lang_module_disclaimer;
	var $_lang_author_word;
	var $_lang_version_history;
	var $_lang_by;
	var $_tpl;

	/**
	 * Constructor
	 *
	 * Initiate the object, based on icms::$module
	 * 
	 * @param string $aboutTitle text used in the extreme right caption of the menu
	 * @return IcmsModuleAbout
	 */
	
	function MyTubeModuleAbout( $aboutTitle = 'About' ) {
		global $icmsConfig;

		icms_loadLanguageFile( icms::$module -> getVar( 'dirname' ), 'modinfo' );
		icms_loadLanguageFile( icms::$module -> getVar( 'dirname' ), 'moduleabout' );

		$this -> _aboutTitle = $aboutTitle;
		$this -> _lang_developer_contributor = _MODABOUT_MYTUBE_DEVELOPER_CONTRIBUTOR;
		$this -> _lang_developer_website = _MODABOUT_MYTUBE_DEVELOPER_WEBSITE;
		$this -> _lang_developer_email = _MODABOUT_MYTUBE_DEVELOPER_EMAIL;
		$this -> _lang_developer_credits = _MODABOUT_MYTUBE_DEVELOPER_CREDITS;
		$this -> _lang_module_info = _MODABOUT_MYTUBE_MODULE_INFO;
		$this -> _lang_module_status = _MODABOUT_MYTUBE_MODULE_STATUS;
		$this -> _lang_module_release_date =_MODABOUT_MYTUBE_MODULE_RELEASE_DATE ;
		$this -> _lang_module_demo = _MODABOUT_MYTUBE_MODULE_DEMO;
		$this -> _lang_module_support = _CO_ICMS_MODULE_SUPPORT;
		$this -> _lang_module_bug = _MODABOUT_MYTUBE_MODULE_BUG;
		$this -> _lang_module_submit_bug = _MODABOUT_MYTUBE_MODULE_SUBMIT_BUG;
		$this -> _lang_module_feature = _MODABOUT_MYTUBE_MODULE_FEATURE;
		$this -> _lang_module_submit_feature = _CO_ICMS_MODULE_SUBMIT_FEATURE;
		$this -> _lang_module_disclaimer = _MODABOUT_MYTUBE_MODULE_DISCLAIMER;
		$this -> _lang_author_word = _MODABOUT_MYTUBE_AUTHOR_WORD;
		$this -> _lang_version_history = _MODABOUT_MYTUBE_VERSION_HISTORY;
	}

	/**
	 * Santizie a value 
	 *
	 * @param string $value to be sanitized
	 * @return string santizied value
	 */
	function sanitize( $value ) {
		return icms_core_DataFilter::checkVar( $value, 'html' );
	}

	/**
	 * Render the whole About page of a module
	 *
	 */
	function render() {
		global $icmsConfig;

		icms_cp_header();

		$module_handler = icms::handler( 'icms_module' );
		$versioninfo = &$module_handler -> get( icms::$module -> getVar( 'mid' ) );

		icms::$module -> displayAdminMenu( -1, $this -> _aboutTitle . ' ' . $versioninfo -> getInfo( 'name' ) );

		$this -> _tpl = new icms_view_Tpl();
		$this -> _tpl -> assign( 'module_url', ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/' );
		$this -> _tpl -> assign( 'module_image', $versioninfo -> getInfo( 'image' ) );
		$this -> _tpl -> assign( 'module_name', $versioninfo -> getInfo( 'name' ) );
		$this -> _tpl -> assign( 'module_version', $versioninfo -> getInfo( 'version' ) );
		$this -> _tpl -> assign( 'module_status_version', $versioninfo -> getInfo( 'status_version' ) );
		// Left headings...
		if ( $versioninfo -> getInfo( 'author_realname' ) != '' ) {
			$author_name = $versioninfo -> getInfo( 'author' ) . ' (' . $versioninfo -> getInfo( 'author_realname' ) . ')';
		} else {
			$author_name = $versioninfo -> getInfo( 'author' );
		}
		$this -> _tpl -> assign( 'module_author_name', $author_name );
		$this -> _tpl -> assign( 'module_license', $versioninfo -> getInfo( 'license' ) );
		$this -> _tpl -> assign( 'module_credits', $versioninfo -> getInfo( 'credits' ) );
		// Developers Information
		$this -> _tpl -> assign( 'module_developer_lead', $versioninfo -> getInfo( 'developer_lead' ) );
		$this -> _tpl -> assign( 'module_developer_contributor', $versioninfo -> getInfo( 'developer_contributor' ) );
		$this -> _tpl -> assign( 'module_developer_website_url', $versioninfo -> getInfo( 'developer_website_url' ) );
		$this -> _tpl -> assign( 'module_developer_website_name', $versioninfo -> getInfo( 'developer_website_name' ) );
		$this -> _tpl -> assign( 'module_developer_email', $versioninfo -> getInfo( 'developer_email' ) );
		$people = $versioninfo -> getInfo( 'people' );
		if ( $people ) {
			$this -> _tpl -> assign( 'module_people_developers', isset( $people['developers'] ) ? array_map( array( $this, 'sanitize' ), $people['developers'] ) : false );
			$this -> _tpl -> assign( 'module_people_testers', isset( $people['testers'] ) ? array_map( array( $this, 'sanitize' ), $people['testers'] ) : false );
			$this -> _tpl -> assign( 'module_people_translators', isset( $people['translators'] ) ? array_map( array( $this, 'sanitize' ), $people['translators'] ) : false );
			$this -> _tpl -> assign( 'module_people_documenters', isset( $people['documenters'] ) ? array_map( array( $this, 'sanitize' ), $people['documenters'] ) : false );
			$this -> _tpl -> assign( 'module_people_other', isset( $people['other'] ) ? array_map( array( $this, 'sanitize' ), $people['other'] ) : false );
		}

		// Module Development information
		$this -> _tpl->assign( 'module_date', $versioninfo -> getInfo( 'date' ) );
		$this -> _tpl->assign( 'module_status', $versioninfo -> getInfo( 'status' ) );
		$this -> _tpl->assign( 'module_demo_site_url', $versioninfo -> getInfo( 'demo_site_url' ) );
		$this -> _tpl->assign( 'module_demo_site_name', $versioninfo -> getInfo( 'demo_site_name' ) );
		$this -> _tpl->assign( 'module_support_site_url', $versioninfo -> getInfo( 'support_site_url' ) );
		$this -> _tpl->assign( 'module_support_site_name', $versioninfo -> getInfo( 'support_site_name' ) );
		$this -> _tpl->assign( 'module_submit_bug', $versioninfo -> getInfo( 'submit_bug' ) );
		$this -> _tpl->assign( 'module_submit_feature', $versioninfo -> getInfo( 'submit_feature' ) );

		// Manual
		$manual =$versioninfo -> getInfo( 'manual' );
		if ( $manual ) {
			$this -> _tpl -> assign( 'module_manual', isset( $manual['wiki'] ) ? array_map( array( $this, 'sanitize' ), $manual['wiki']) : false );
		}

		// Warning
		$this -> _tpl -> assign( 'module_warning', $this -> sanitize( $versioninfo -> getInfo( 'warning' ) ) );

		// Author's note
		$this -> _tpl -> assign( 'module_author_word', $versioninfo -> getInfo( 'author_word' ) );

		// For changelog thanks to 3Dev
		$filename = ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/changelog.txt';
		if ( is_file( $filename ) ) {
			$filesize = filesize( $filename );
			$handle = fopen( $filename, 'r' );
			$this -> _tpl -> assign( 'module_version_history', icms_core_DataFilter::checkVar( fread( $handle, $filesize ), 'text', 'output' ) );
			fclose( $handle );
		}
		// For license thanks to 3Dev
		if ( file_exists( ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/language/'  . $icmsConfig['language'] . '/' . 'license.txt' ) ) {
			$filename = ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/language/' . $icmsConfig['language'] . '/' . 'license.txt';
		} elseif ( file_exists( ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/license.txt' ) ) {
			$filename = ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/license.txt';
		}
		if( is_file( $filename ) ) {
			$filesize = filesize( $filename );
			$handle = fopen( $filename, 'r' );
			$this -> _tpl -> assign( 'module_license_txt', icms_core_DataFilter::checkVar( fread( $handle, $filesize ), 'text', 'output' ) );
			fclose($handle);
		}
		$this -> _tpl -> display( ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/templates/mytube_moduleabout.html' );
		icms_cp_footer();
	}
}
?>