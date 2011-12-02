<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: include/functions.php
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

function mytube_serverstats() {
	echo '<fieldset style="border: #E8E8E8 1px solid;">
			<legend style="display: inline; font-weight: bold; color: #0A3760; font-size: 12px;">' . _AM_MYTUBE_VIDEO_IMAGEINFO . '</legend>
			<div style="padding: 12px;">
			<img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/server.png" alt="" style="float: left; padding-right: 10px;" />
			<div>' . _AM_MYTUBE_VIDEO_SPHPINI . '</div>';

	$safemode = ( ini_get( 'safe_mode' ) ) ? _AM_MYTUBE_VIDEO_ON . _AM_MYTUBE_VIDEO_SAFEMODEPROBLEMS : _AM_MYTUBE_VIDEO_OFF;
	$registerglobals = ( ini_get( 'register_globals' ) == '' ) ? _AM_MYTUBE_VIDEO_OFF : _AM_MYTUBE_VIDEO_ON;
	$videos = ( ini_get( 'file_uploads' ) ) ? _AM_MYTUBE_VIDEO_ON : _AM_MYTUBE_VIDEO_OFF;
	$gdlib = ( function_exists( 'gd_info' ) ) ? _AM_MYTUBE_VIDEO_GDON : _AM_MYTUBE_VIDEO_GDOFF;
	echo '<div style="padding-left: 42px;">&bull;&nbsp;' . _AM_MYTUBE_VIDEO_GDLIBSTATUS . $gdlib;
	if ( function_exists( 'gd_info' ) ) {
		if ( true == $gdlib = gd_info() ) {
			echo '<br />&bull;&nbsp;' . _AM_MYTUBE_VIDEO_GDLIBVERSION . '<b>' . $gdlib['GD Version'] . '</b>';
		}
	}
	echo '<br /><br />';
	echo '&bull;&nbsp;' . _AM_MYTUBE_VIDEO_SAFEMODESTATUS . $safemode;
	echo '<br />&bull;&nbsp;' . _AM_MYTUBE_VIDEO_REGISTERGLOBALS . $registerglobals;
	echo '<br />&bull;&nbsp;' . _AM_MYTUBE_VIDEO_SERVERUPLOADSTATUS . $videos;
	echo '</div></div>';
	echo '</fieldset>';
}

function mytube_uploading( $_FILES, $uploaddir = 'uploads', $allowed_mimetypes = '', $redirecturl = 'index.php', $num = 0, $redirect = 0, $usertype = 1 ) {
	global $_FILES, $icmsConfig;
	$down = array();
	include_once ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/class/uploader.php';
	if ( empty( $allowed_mimetypes ) ) {
		$allowed_mimetypes = mytube_retmime( $_FILES['userfile']['name'], $usertype );
	}
	$upload_dir = ICMS_ROOT_PATH . '/' . $uploaddir . '/';

	$maxfilesize = icms::$module -> config['maxfilesize'];
	$maxfilewidth = icms::$module -> config['maximgwidth'];
	$maxfileheight = icms::$module -> config['maximgheight'];

	$uploader = new MyTubeMediaUploader( $upload_dir, $allowed_mimetypes, $maxfilesize, $maxfilewidth, $maxfileheight );
	$uploader -> noAdminSizeCheck( 1 );
	if ( $uploader -> fetchMedia( $_POST['xoops_upload_file'][0] ) ) {
		if ( !$uploader -> upload() ) {
			$errors = $uploader -> getErrors();
			redirect_header( $redirecturl, 2, $errors );
		} else {
			if ( $redirect ) {
				redirect_header( $redirecturl, 1 , _AM_PDD_UPLOADFILE );
			} else {
				if ( is_file( $uploader -> savedDestination ) ) {
					$down['url'] = ICMS_URL . '/' . $uploaddir . '/' . strtolower( $uploader -> savedFileName );
					$down['size'] = filesize( ICMS_ROOT_PATH . '/' . $uploaddir . '/' . strtolower( $uploader -> savedFileName ) );
				}
				return $down;
			}
		}
	} else {
		$errors = $uploader -> getErrors();
		redirect_header( $redirecturl, 1, $errors );
	}
}

function mytube_adminmenu( $currentoption = 0, $header = '', $menu = '', $extra = '', $scount = 4 ) {
	icms::$module -> displayAdminMenu( $currentoption, icms::$module -> getVar( 'name' ) . ' | ' . $header );

	// ###### Output warn messages for security ######
	if ( is_dir( ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update/' ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL1, ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update/' ) );
		echo '<br />';
	}

	$_file = ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update.php';
	if ( file_exists( $_file ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL2, ICMS_ROOT_PATH . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/update.php' ) );
		echo '<br />';
	}

	$path1 = ICMS_ROOT_PATH . '/' . icms::$module -> config['mainimagedir'];
	if ( !is_dir( $path1 ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL3, $path1 ) );
		echo '<br />';
	}
	if ( !is_writable( $path1 ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL4, $path1 ) );
		echo '<br />';
	}

	$path1_t = ICMS_ROOT_PATH . '/' . icms::$module -> config['mainimagedir'] . '/thumbs';
	if ( !is_dir( $path1_t ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL3, $path1_t ) );
		echo '<br />';
	}
	if ( !is_writable( $path1_t ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL4, $path1_t ) );
		echo '<br />';
	}

	$path2 = ICMS_ROOT_PATH . '/' . icms::$module -> config['videoimgdir'];
	if ( !is_dir( $path2 ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL3, $path2 ) );
		echo '<br />';
	}
	if ( !is_writable( $path2 ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL4, $path2 ) );
		echo '<br />';
	}

	$path3 = ICMS_ROOT_PATH . '/' . icms::$module -> config['catimage'];
	if ( !is_dir( $path3 ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL3, $path3 ) );
		echo '<br />';
	}
	if ( !is_writable( $path3 ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL4, $path3 ) );
		echo '<br />';
	}

	$path3_t = ICMS_ROOT_PATH . '/' . icms::$module -> config['catimage'] . '/thumbs';
	if ( !is_dir( $path3_t ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL3, $path3_t ) );
		echo '<br />';
	}
	if ( !is_writable( $path3_t ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL4, $path3_t ) );
		echo '<br />';
	}

	$path4 = ICMS_ROOT_PATH . '/' . icms::$module -> config['videodir'];
	if ( !is_dir( $path4 ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL3, $path4 ) );
		echo '<br />';
	}
	if ( !is_writable( $path4 ) ) {
		icms_core_Message::error( sprintf( _AM_MYTUBE_WARNINSTALL4, $path4 ) );
	echo '<br />';
	}

	echo '<h4 style="color: #2F5376;">' . $header . '</h4>';
	if ( $extra ) {
		echo '<div>' . $extra . '</div>';
	}
}

function mytube_videolistbody( $published ) {
	global $mytubemyts, $imagearray;

	$lid = $published['lid'];
	$cid = $published['cid'];
	if ( $published['hd'] ) { $hd_icon = $imagearray['hd']; } else { $hd_icon = ''; }
	$nice_link = mytube_nicelink( $published['title'], $published['nice_url'] );
	if ( icms::$module -> config['niceurl'] ) {
		$title = '<a href="../singlevideo.php?lid=' . $published['lid'] . '&amp;page=' . $nice_link . '">' . $mytubemyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) . '</a>&nbsp' . $hd_icon;
	} else {
		$title = '<a href="../singlevideo.php?lid=' . $published['lid'] . '">' . $mytubemyts -> htmlSpecialCharsStrip( trim( $published['title'] ) ) . '</a>&nbsp;' . $hd_icon;
	}

	$maintitle = urlencode( icms_core_DataFilter::htmlSpecialchars( trim( $published['title'] ) ) );
	$cattitle = '<a href="../viewcat.php?cid=' . $published['cid'] . '">' . mytube_cattitle( $published['cid'] ) . '</a>';
	$submitter = icms_member_user_Handler::getUserLink( $published['submitter'] );
	$returnsource = mytube_returnsource( $published['vidsource'] );
	$submitted = mytube_time( formatTimestamp( $published['date'], icms::$module -> config['dateformatadmin'] ) );
	$publish = ( $published['published'] > 0 ) ? mytube_time( formatTimestamp( $published['published'], icms::$module -> config['dateformatadmin'] ) ): 'Not Published';
	$expires = $published['expired'] ? mytube_time( formatTimestamp( $published['expired'], icms::$module -> config['dateformatadmin'] ) ): _AM_MYTUBE_MINDEX_NOTSET;

	if ( ( ( $published['expired'] && $published['expired'] > time() ) OR  $published['expired'] == 0 ) && ( $published['published'] && $published['published'] < time() ) && $published['offline'] == 0 ) {
		$published_status = '<a href="index.php?op=status_off&amp;lid=' . $lid . '">' . $imagearray['online'] . '</a>';
	} elseif ( ( $published['expired'] && $published['expired'] < time() )  && $published['offline'] == 0 ) {
		$published_status = $imagearray['expired'];
	} else {
		$published_status = ( $published['published'] == 0 ) ? $imagearray['offline'] : '<a href="index.php?op=status_on&amp;lid=' . $lid . '">' . $imagearray['offline'] . '</a>';
	}

	if ( $published['vidsource'] == 200 ) {
		$icon = '<a href="mytube.php?op=edit&amp;lid=' . $lid . '" title="' . _AM_MYTUBE_ICO_EDIT . '">' . $imagearray['editimg'] . '</a>&nbsp;';
	} else {
		$icon = '<a href="index.php?op=edit&amp;lid=' . $lid . '" title="' . _AM_MYTUBE_ICO_EDIT . '">' . $imagearray['editimg'] . '</a>&nbsp;';
	}
	$icon .= '<a href="index.php?op=delete&amp;lid=' . $lid . '" title="' . _AM_MYTUBE_ICO_DELETE . '">' . $imagearray['deleteimg'] . '</a>&nbsp;';
	$icon .= '<a href="altcat.php?op=main&amp;lid=' . $lid . '" title="' . _AM_MYTUBE_ALTCAT_CREATEF . '">' . $imagearray['altcat'] . '</a>';

	echo '
		<tr style="text-align: center; font-size: smaller;">
		<td class="head">' . $lid . '</small></td>
		<td class="even" style="text-align: left;">' . $title . '</td>
		<td class="even">' . $returnsource . '</td>
		<td class="even">' . $cattitle . '</td>
		<td class="even">' . $submitter . '</td>
		<td class="even">' . $publish . '</td>
		<td class="even">' . $expires . '</td>
		<td class="even" style="width: 4%;">' . $published_status . '</td>
		<td class="even" style="text-align: center; white-space: nowrap;">' . $icon . '</td>
		</tr>';
	unset( $published );
}

function mytube_videolistpagenav( $pubrowamount, $start, $art = 'art', $_this = '', $align ) {
	if ( ( $pubrowamount < icms::$module -> config['admin_perpage'] ) ) { return false; } 
	$pagenav = new icms_view_PageNav( $pubrowamount, icms::$module -> config['admin_perpage'], $start, 'st' . $art, $_this );
	echo '<span style="float: ' . $align . '; font-size: 90%;">' . $pagenav -> renderNav() . '</span>';
}

function mytube_cattitle( $catt ) {
	$sql = 'SELECT title FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . $catt;
	$result = icms::$xoopsDB -> query( $sql );
	$result = icms::$xoopsDB -> fetchArray( $result );
	return $result['title'];
}
?>