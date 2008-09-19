<?php
/**
 * $Id: about.php
 * Module: MyTube
 */

include 'admin_header.php';

global $xoopsModule;

xoops_cp_header();

$module_handler = &xoops_gethandler( 'module' );
$versioninfo = &$module_handler -> get( $xoopsModule -> getVar( 'mid' ) );

xtube_adminmenu( _AM_XTUBE_MVIDEOS );
// Left headings...
echo "<img src='" . XOOPS_URL . "/modules/".$xoopsModule->getVar('dirname')."/" . $versioninfo -> getInfo( 'image' ) . "' alt='' hspace='10' vspace='0' /></a>\n
<div style='margin-top: 10px; color: #33538e; margin-bottom: 4px; font-size: 18px; line-height: 18px; font-weight: bold; display: block;'>" . $versioninfo -> getInfo( 'name' ) . " version " . $versioninfo -> getInfo( 'version' ) . "</div>\n

<div>\n";
if ( $versioninfo -> getInfo( 'author_realname' ) != '' ) {
    $author_name = $versioninfo -> getInfo( 'author' ) . " (" . $versioninfo -> getInfo( 'author_realname' ) . ")";
} else {
    $author_name = $versioninfo -> getInfo( 'author' );
} 
echo "
		</div>\n
		<div>" . _MI_XTUBE_RELEASE . " " . $versioninfo -> getInfo( 'releasedate' ) . "</div>\n
		<div>" . _AM_XTUBE_BY . " " . $author_name . "</div>\n
		<div>" . $versioninfo -> getInfo( 'license' ) . "</div><br />\n";

// Author Information
$sform = new XoopsThemeForm( _MI_XTUBE_AUTHOR_INFO, "", "" );
$sform -> addElement( new XoopsFormLabel( _MI_XTUBE_AUTHOR_NAME, $author_name ) );
$sform -> display();

// Author Information
$sform = new XoopsThemeForm( _MI_XTUBE_MODULE_INFO, "", "" );
$sform -> addElement( new XoopsFormLabel( _MI_XTUBE_MODULE_STATUS, $versioninfo -> getInfo( 'status' ) ) );
$sform -> addElement( new XoopsFormLabel( _MI_XTUBE_MODULE_SUPPORT, "<a href='" . $versioninfo -> getInfo( 'support_site_url' ) . "' target='_blank'>" . $versioninfo -> getInfo( 'support_site_name' ) . "</a>" ) );
$sform -> addElement( new XoopsFormLabel( _MI_XTUBE_MODULE_BUG, "<a href='" . $versioninfo -> getInfo( 'submit_bug' ) . "' target='_blank'>" . _MI_XTUBE_MODULE_SUBMITBUG . "</a>" ) );
$sform -> addElement( new XoopsFormLabel( _MI_XTUBE_MODULE_FEATURE, "<a href='" . $versioninfo -> getInfo( 'submit_feature' ) . "' target='_blank'>" . _MI_XTUBE_MODULE_REQUESTNEWFEATURE . "</a>" ) );
$sform -> addElement( new XoopsFormLabel( _MI_XTUBE_MODULE_MANUAL, "<a href='" . $versioninfo -> getInfo( 'manual_wiki' ) . "' target='_blank'>" . _MI_XTUBE_MODULE_MANUALWIKI . "</a>" ) );
$sform -> addElement( new XoopsFormLabel( _MI_XTUBE_FLVPLAYER_MANUAL, "<a href='http://code.longtailvideo.com/trac/' target='_blank'>" . _MI_XTUBE_FLVPLAYER_WIKI . "</a>" ) );
$sform -> display();

$sform = new XoopsThemeForm( _MI_XTUBE_AUTHOR_CREDITS, "", "" );
ob_start();
echo "<div class='even'>" . $versioninfo -> getInfo( 'author_credits' ) . "</div>";
$sform -> addElement( new XoopsFormLabel( _MI_XTUBE_AUTHOR_CREDITS, ob_get_contents(), 0 ) );
ob_end_clean();
$sform -> addElement( new XoopsFormLabel( _MI_XTUBE_ICONS_CREDITS, "<a href='http://www.famfamfam.com' target='_blank'>famfamfam.com</a>" ) );
$sform -> addElement( new XoopsFormLabel( _MI_XTUBE_FLVPLAYER_CREDITS, "<a href='http://www.jeroenwijering.com/?item=JW_FLV_Media_Player' target='_blank'>" . _MI_XTUBE_FLVPLAYER_CREDITDSC . "</a>" ) );
$sform -> display();

global $xtubemyts;

$file='../bugfixlist.txt';
if ( @file_exists( $file ) ) {
    $fp = @fopen( $file, "r" );
    $bugtext = @fread( $fp, filesize( $file ) );
    @fclose( $file );
} 

$sform = new XoopsThemeForm( _MI_XTUBE_AUTHOR_BUGFIXES, "", "" );
ob_start();
  echo "<div class='even'>" . $xtubemyts -> displayTarea( $bugtext ) . "</div>";
  $sform -> addElement( new XoopsFormLabel( _MI_XTUBE_AUTHOR_BUGFIXES, ob_get_contents(), 0 ) );
ob_end_clean();
$sform -> display();
unset( $file );
echo "<div style='text-align: center;'>" . _MI_XTUBE_COPYRIGHTIMAGE . "</div>\n";
xoops_cp_footer();

?>