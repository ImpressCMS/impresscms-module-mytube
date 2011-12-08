<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Link 1.06
*
* File: admin/feed.php
*
* @copyright	http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		MyTube
* @since		1.00
* @author		McDonald
* @version		$Id$
*/

include 'admin_header.php';

$op = mytube_cleanRequestVars( $_REQUEST, 'op', '' );

function mytube_rss_edit() {
	global $icmsConfig, $mytubemyts;
	
	$mydirname = basename( dirname( dirname( __FILE__ ) ) );

	$sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_configs' );
	$feed_array = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query( $sql ) );

	$webmaster  = $icmsConfig['adminmail'] . ' (' . icms::$module -> getVar( 'name' ) . ') ';
	$modulename = icms::$module -> getVar( 'name' );
	$modulevers = number_format( icms::$module -> getVar( 'version' ) / 100 , 2, '.', '' );
	$generator  = ICMS_VERSION_NAME . ' ( module: ' . $modulename . ' ' . $modulevers . ' )';
	$copyright  = _AM_MYTUBE_COPYRIGHT . ' ' . formatTimestamp( time(), 'Y' ) . ' - ' . $icmsConfig['sitename'];

	$rssactive   = $feed_array['rssactive'];
	$rsstitle    = $feed_array['rsstitle'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rsstitle'] ) : $icmsConfig['sitename'];
	$rsslink     = $feed_array['rsslink'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rsslink'] ) : ICMS_URL;
	$rssdsc      = $feed_array['rssdsc'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rssdsc'] ) : $icmsConfig['slogan'];
	$rssimgurl   = $feed_array['rssimgurl'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rssimgurl'] ) : ICMS_URL .'/modules/' . $mydirname . '/images/icon_big.png';
	$rsswidth    = $feed_array['rsswidth'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rsswidth'] ) : '32';
	$rssheight   = $feed_array['rssheight'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rssheight'] ) : '32';
	$rssimgtitle = $feed_array['rssimgtitle'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rssimgtitle'] ) : $modulename;
	$rssimglink  = $feed_array['rssimglink'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rssimglink'] ) : ICMS_URL;
	$rssttl      = $feed_array['rssttl'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rssttl'] ) : '60';
	$rsswebmaster= $feed_array['rsswebmaster'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rsswebmaster'] ) : $webmaster;
	$rsseditor   = $feed_array['rsseditor'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rsseditor'] ) : $webmaster;
	$rsscategory = $feed_array['rsscategory'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rsscategory'] ) : $modulename;
	$rssgenerator= $feed_array['rssgenerator'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rssgenerator'] ) : $generator;
	$rsscopyright= $feed_array['rsscopyright'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rsscopyright'] ) : $copyright;
	$rsstotal    = $feed_array['rsstotal'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rsstotal'] ) : '15';
	$rssofftitle = $feed_array['rssofftitle'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rssofftitle'] ) : _AM_MYTUBE_RSSOFFTITLE;
	$rssoffdsc   = $feed_array['rssoffdsc'] ? $mytubemyts -> htmlSpecialCharsStrip( $feed_array['rssoffdsc'] ) : _AM_MYTUBE_RSSOFFMSGDEF;

	icms_cp_header();
	mytube_adminmenu( 9, _AM_MYTUBE_RSSFEED );

	echo '<fieldset style="border: #E8E8E8 1px solid;">
			<div style="padding: 8px;">
				<img src="' . ICMS_URL . '/modules/' . $mydirname . '/images/icon/feed32.png" alt="" style="float: left; padding-right: 10px;" />
			' . _AM_MYTUBE_RSSFEEDDSC . '';
	if ( $feed_array['rsstitle'] == '' ) {
		echo '<br /><br /><span style="text-decoration: blink; font-weight: bold; color: red;">' . _AM_MYTUBE_RSSCLICKSUBMIT . '</span>';
	}
	echo '	</div>
			</fieldset>';
	
	$sform = new icms_form_Theme( _AM_MYTUBE_RSSFEEDCFG, 'storyform', '' );
	$sform -> setExtra( 'enctype="multipart / form - data"' );

	$rssstatus_radio = new icms_form_elements_Radioyn( _AM_MYTUBE_RSSACTIVE, 'rssactive', $rssactive, ' ' . _YES . '', ' ' . _NO . '' );
	$rssstatus_radio -> SetDescription( _AM_MYTUBE_RSSACTIVEDSC );
	$sform -> addElement( $rssstatus_radio );

	$formtitle = new icms_form_elements_Text( _AM_MYTUBE_RSSTITLE, 'rsstitle', 90, 128, $rsstitle );
	$formtitle -> SetDescription( _AM_MYTUBE_RSSTITLEDSC );
	$sform -> addElement( $formtitle, false );

	$formlink = new icms_form_elements_Text( _AM_MYTUBE_RSSLINKS, 'rsslink', 90, 255, $rsslink );
	$formlink -> SetDescription( _AM_MYTUBE_RSSLINKSDSC );
	$sform -> addElement( $formlink, false );

	$formdsc = new icms_form_elements_TextArea( _AM_MYTUBE_RSSDESCRIPTION, 'rssdsc', $rssdsc, 4, 50 );
	$formdsc -> SetDescription( _AM_MYTUBE_RSSDESCRIPTIONDSC );
	$sform -> addElement( $formdsc, false );

	$formimage = new icms_form_elements_Text( _AM_MYTUBE_RSSIMAGE, 'rssimgurl', 90, 255, $rssimgurl );
	$formimage -> SetDescription( _AM_MYTUBE_RSSIMAGEDSC );
	$sform -> addElement( $formimage, false );

	$formwidth = new icms_form_elements_Text( _AM_MYTUBE_RSSWIDTH, 'rsswidth', 3, 8, $rsswidth );
	$formwidth -> SetDescription( _AM_MYTUBE_RSSWIDTHDSC );
	$sform -> addElement( $formwidth, false );

	$formheight = new icms_form_elements_Text( _AM_MYTUBE_RSSHEIGHT, 'rssheight', 3, 8, $rssheight );
	$formheight -> SetDescription( _AM_MYTUBE_RSSHEIGHTDSC );
	$sform -> addElement( $formheight, false );

	$formimgtitle = new icms_form_elements_Text( _AM_MYTUBE_RSSIMGTITLE, 'rssimgtitle', 90, 128, $rssimgtitle );
	$formimgtitle -> SetDescription( _AM_MYTUBE_RSSIMGTITLEDSC );
	$sform -> addElement( $formimgtitle, false );

	$formimglink = new icms_form_elements_Text( _AM_MYTUBE_RSSIMGLINK, 'rssimglink', 90, 255, $rssimglink );
	$formimglink -> SetDescription( _AM_MYTUBE_RSSIMGLINKDSC );
	$sform -> addElement( $formimglink, false );

	$formtotal = new icms_form_elements_Text( _AM_MYTUBE_RSSTOTAL, 'rsstotal', 3, 8, $rsstotal );
	$formtotal -> SetDescription( _AM_MYTUBE_RSSTOTALDSC );
	$sform -> addElement( $formtotal, false );

	$formwebmaster = new icms_form_elements_Text( _AM_MYTUBE_RSSWEBMASTER, 'rsswebmaster', 90, 255, $rsswebmaster );
	$formwebmaster -> SetDescription( _AM_MYTUBE_RSSWEBMASTERDSC );
	$sform -> addElement( $formwebmaster, false );

	$formeditor = new icms_form_elements_Text( _AM_MYTUBE_RSSEDITOR, 'rsseditor', 90, 255, $rsseditor );
	$formeditor -> SetDescription( _AM_MYTUBE_RSSEDITORDSC );
	$sform -> addElement( $formeditor, false );

	$formcategory = new icms_form_elements_Text( _AM_MYTUBE_RSSCATEGORY, 'rsscategory', 90, 128, $rsscategory );
	$formcategory -> SetDescription( _AM_MYTUBE_RSSCATEGORYDSC );
	$sform -> addElement( $formcategory, false );

	$formgenerator = new icms_form_elements_Text( _AM_MYTUBE_RSSGENERATOR, 'rssgenerator', 90, 128, $rssgenerator );
	$formgenerator -> SetDescription( _AM_MYTUBE_RSSGENERATORDSC );
	$sform -> addElement( $formgenerator, false );

	$formcopyright = new icms_form_elements_Text( _AM_MYTUBE_RSSCOPYRIGHT, 'rsscopyright', 90, 128, $rsscopyright );
	$formcopyright -> SetDescription( _AM_MYTUBE_RSSCOPYRIGHTDSC );
	$sform -> addElement( $formcopyright, false );

	$formttl = new icms_form_elements_Text( _AM_MYTUBE_RSSTTL, 'rssttl', 3, 128, $rssttl );
	$formttl -> SetDescription( _AM_MYTUBE_RSSTTLDSC );
	$sform -> addElement( $formttl, false );

	$formofftitle = new icms_form_elements_Text( _AM_MYTUBE_RSSOFFLINE, 'rssofftitle', 90, 128, $rssofftitle );
	$formofftitle -> SetDescription( _AM_MYTUBE_RSSOFFLINEDSC );
	$sform -> addElement( $formofftitle, false );

	$formoffmsg = new icms_form_elements_TextArea( _AM_MYTUBE_RSSOFFMSG, 'rssoffdsc', $rssoffdsc, 4, 50 );
	$formoffmsg -> SetDescription( _AM_MYTUBE_RSSOFFMSGDSC );
	$sform -> addElement( $formoffmsg, false );

	$button_tray = new icms_form_elements_Tray( '', '' );
	$hidden = new icms_form_elements_Hidden( 'op', 'save' );
	$button_tray -> addElement( $hidden );

	$butt_create = new icms_form_elements_Button( '', '', _SUBMIT, 'submit' );
	$butt_create -> setExtra( 'onclick="this.form.elements.op.value=\'saverss\'"' );
	$button_tray -> addElement( $butt_create );
	$sform -> addElement( $button_tray );
	$sform -> display();
	unset( $hidden ); 

	icms_cp_footer();
}

switch ( strtolower( $op ) ) {
	case 'edit':
		mytube_rss_edit();
		break;
		
	case 'saverss':
		$rssactive   = ( $_POST['rssactive'] == 1 ) ? 1 : 0;
		$rsstitle    = icms_core_DataFilter::addSlashes( trim( $_POST['rsstitle'] ) );
		$rsslink     = ( $_POST['rsslink'] != 'http://' ) ? icms_core_DataFilter::addSlashes( $_POST['rsslink'] ) : '';
		$rssdsc      = icms_core_DataFilter::addSlashes( trim( $_POST['rssdsc'] ) );
		$rssimgurl   = icms_core_DataFilter::addSlashes( trim( $_POST['rssimgurl'] ) );
		$rsswidth    = icms_core_DataFilter::addSlashes( trim( $_POST['rsswidth'] ) );
		$rssheight   = icms_core_DataFilter::addSlashes( trim( $_POST['rssheight'] ) );
		$rssimgtitle = icms_core_DataFilter::addSlashes( trim( $_POST['rssimgtitle'] ) );
		$rssimglink  = icms_core_DataFilter::addSlashes( trim( $_POST['rssimglink'] ) );
		$rssttl      = icms_core_DataFilter::addSlashes( trim( $_POST['rssttl'] ) );
		$rsswebmaster= icms_core_DataFilter::addSlashes( trim( $_POST['rsswebmaster'] ) );
		$rsseditor   = icms_core_DataFilter::addSlashes( trim( $_POST['rsseditor'] ) );
		$rsscategory = icms_core_DataFilter::addSlashes( trim( $_POST['rsscategory'] ) );
		$rssgenerator= icms_core_DataFilter::addSlashes( trim( $_POST['rssgenerator'] ) );
		$rsscopyright= icms_core_DataFilter::addSlashes( trim( $_POST['rsscopyright'] ) );
		$rsstotal	 = icms_core_DataFilter::addSlashes( trim( $_POST['rsstotal'] ) );
		$rssofftitle = icms_core_DataFilter::addSlashes( trim( $_POST['rssofftitle'] ) );
		$rssoffdsc   = icms_core_DataFilter::addSlashes( trim( $_POST['rssoffdsc'] ) );

		$sql = "UPDATE " . icms::$xoopsDB -> prefix( 'mytube_configs' ) . " SET rssactive='$rssactive', rsstitle='$rsstitle', rsslink='$rsslink', rssdsc='$rssdsc', rssimgurl='$rssimgurl', rsswidth='$rsswidth', rssheight='$rssheight', rssimgtitle='$rssimgtitle', rssimglink='$rssimglink', rssttl='$rssttl', rsswebmaster='$rsswebmaster', rsseditor='$rsseditor', rsscategory='$rsscategory', rssgenerator='$rssgenerator', rsscopyright='$rsscopyright', rsstotal='$rsstotal', rssofftitle='$rssofftitle', rssoffdsc='$rssoffdsc'";
		$result = icms::$xoopsDB -> queryF( $sql );
		$error = _AM_MYTUBE_DBERROR . ': <br /><br />' . $sql;
		if ( !$result ) {
			trigger_error( $error, E_USER_ERROR );
		}
		redirect_header( 'index.php', 1, _AM_MYTUBE_RSSDBUPDATED );
		break;
}
?>