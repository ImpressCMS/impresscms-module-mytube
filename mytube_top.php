<?php
/**
* MyTube - a multicategory video management module for ImpressCMS
*
* Based upon WF-Links
*
* File: admin/xoopstube_top.php
*
* @copyright		http://www.xoops.org/ The XOOPS Project
* @copyright		XOOPS_copyrights.txt
* @copyright		http://www.impresscms.org/ The ImpressCMS Project
* @license		GNU General Public License (GPL)
*				a copy of the GNU license is enclosed.
* ----------------------------------------------------------------------------------------------------------
* @package		WF-Links 
* @since			1.03
* @author		John N
* ----------------------------------------------------------------------------------------------------------
* 				MyTube
* @since			1.00
* @author		McDonald
* @version		$Id$
*/

/**
 * checkMyTubeBlockgroups()
 *
 * @param int    $cid
 * @param string $permType
 * @param bool   $redirect
 *
 * @return bool
 */

function checkMyTubeBlockgroups( $cid = 0, $permType = 'MyTubeCatPerm', $redirect = false ) {
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    $groups = is_object( icms::$user ) ? icms::$user -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = icms::handler( 'icms_member_groupperm' );
    $module_handler = icms::handler( 'icms_module' );
    $module = &$module_handler -> getByDirname( $mydirname );
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $module -> getVar( 'mid' ) ) )     {
        if ( $redirect == false ) {
            return false;
        } else {
            redirect_header( 'index.php', 3, _NOPERM );
            exit();
        } 
    } 
    unset( $module );
    return true;
}

function mytube_b_checkgroups( $cid = 0, $permType = 'MyTubeCatPerm', $redirect = false ) {
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    $groups = is_object( icms::$user ) ? icms::$user -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $modhandler = icms::handler( 'icms_module' );
    $mytubeModule = $modhandler -> getByDirname( $mydirname );
    $gperm_handler = icms::handler( 'icms_member_groupperm' );
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $mytubeModule -> getVar( 'mid' ) ) ) {
        if ( $redirect == false ) {
            return false;
        } 
    }
    return true;
}

// Function: b_xoopstube_top_show
// Input   : $options[0] = date for the most recent videos
// 			              hits for the most popular videos
//           $block['content'] = The optional above content
//           $options[1] = How many videos are displayes
//           $options[2] = Length of title
//           $options[3] = Set date format
// Output  : Returns the most recent or most popular videos
function b_mytube_top_show( $options ) {
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    $block = array();
    $mytubeModule = icms_getModuleInfo( $mydirname );
    $config_handler = icms::$config;
    $mytubeModuleConfig = $config_handler -> getConfigsByCat( 0, $mytubeModule -> getVar( 'mid' ) );

    if ( $options[4] > 0 ) {
      $result = icms::$xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, hits, vidsource, picurl, nice_url FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published>0 AND published<=' . time() . ' AND (expired=0 OR expired>' . time() . ') AND offline=0 AND cid=' . $options[4] . ' ORDER BY ' . $options[0] . ' DESC', $options[1], 0 );
    } else {
      $result = icms::$xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, hits, vidsource, picurl, nice_url FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published>0 AND published<=' . time() . ' AND (expired=0 OR expired>' . time() . ') AND offline=0 ORDER BY ' . $options[0] . ' DESC', $options[1], 0 );
    }	
	include_once ICMS_ROOT_PATH . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/include/video.php';
	include_once ICMS_ROOT_PATH . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/include/functions.php';		
    while ( $myrow = icms::$xoopsDB -> fetchArray( $result ) ) {		
        if ( false == checkMyTubeBlockgroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) { continue; }		
        if ( mytube_b_checkgroups( $myrow['cid'] ) == false ) { exit; }
        $videoload = array();
        $title = icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $myrow['title'] ) );
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . '...';
            } 
        }
        $videoload['id'] = intval( $myrow['lid'] );
        $videoload['cid'] = intval( $myrow['cid'] );
        $videoload['title'] = $title;
        if ( $options[0] == 'published' ) {
            $videoload['date'] = mytube_time( formatTimestamp( $myrow['published'], $options[3] ) );
        } elseif ( $options[0] == 'hits' ) {
            $videoload['hits'] = $myrow['hits'] . ' ' . _MB_MYTUBE_VIEWS;
        }	
		$videoload['videothumb'] = mytube_videothumb( $myrow['vidid'], $myrow['title'], $myrow['vidsource'], $myrow['picurl'], $mytubeModuleConfig['videoimgdir'] . '/' . $myrow['screenshot'], $mytubeModuleConfig['shotwidth'], $mytubeModuleConfig['shotheight'] );
        $videoload['dirname'] = $mytubeModule -> getVar( 'dirname' );
		$videoload['width'] = $mytubeModuleConfig['shotwidth']+2;
		$niceurl = mytube_nicelink( $myrow['title'], $myrow['nice_url'] );
		if ( $mytubeModuleConfig['niceurl'] ) {
			$videoload['url'] = ICMS_URL . '/modules/' . $mydirname . '/singlevideo.php?lid=' . $myrow['lid'] . '&amp;page=' . $niceurl;
		} else {
			$videoload['url'] = ICMS_URL . '/modules/' . $mydirname . '/singlevideo.php?lid=' . $myrow['lid'];
		}
        $block['videos'][] = $videoload;
    }
    unset( $_block_check_array );
    return $block;
} 

// b_xoopstube_top_edit()
// @param $options
// @return
function b_mytube_top_edit( $options ) {
	$form = '<table cellspacing="5">';
    $form .= '<tr><td width="200px"><b>' . _MB_MYTUBE_DISP . ':</b></td>';
    $form .= '<td><input type="hidden" name="options[]" value="';
    if ( $options[0] == 'published' ) {
        $form .= 'published"';
    }
    if ( $options[0] == 'random' ) {
        $form .= 'random"';
    }
    if ( $options[0] == 'randomh' ) {
        $form .= 'randomh"';
    } else {
        $form .= 'hits"';
    }
    $form .= ' />';
    $form .= '<input type="text" name="options[]" value="' . $options[1] . '" />&nbsp;' . _MB_MYTUBE_FILES . '</td></tr>';
    $form .= '<tr><td><b>' . _MB_MYTUBE_CHARS . ':</b></td><td><input type="text" name="options[]" value="' . $options[2] . '" />&nbsp;' . _MB_MYTUBE_LENGTH . '</td></tr>';
    $form .= '<tr><td><b>' . _MB_MYTUBE_DATEFORMAT . ':</b></td><td><input type="text" name="options[]" value="' . $options[3] . '" />&nbsp;' . _MB_MYTUBE_DATEFORMATMANUAL . '</td></tr>';
	
    $cat_arr = array();
    $xt = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );
    $cat_arr = $xt -> getChildTreeArray( 0, 'title');
    $form .= '<tr><td><b>' . _MB_MYTUBE_SELECTCAT . '</b></td><br /><td><select name="options[]" size="8">';
	$selected = '';
	if ( $options[4] == 0  ) {	
		$selected = ' selected';
	}
	$form .= '<option value="0"' . $selected . '>&nbsp;' . _MB_MYTUBE_ALLCAT . '&nbsp;</option>';
	foreach( $cat_arr as $catlist ) {
		$selected = '';
		if ( $options[4] == $catlist['cid']  ) {
			$selected = ' selected';
		}
		$form .= '<option value="' . $catlist['cid'] . '"' . $selected . '>&nbsp;' . $catlist['title'] . '&nbsp;</option>';
	}
    $form .= '</select>';
	$form .= '</td></tr></table>';
    return $form;
}

// -------------------------------------------------------------------------------------------------------------------------

// Function: b_xoopstube_random
// Output  : Returns random video
function b_mytube_random( $options ) {
    $block = array();
    $mytubeModule = icms_getModuleInfo( basename( dirname( dirname( __FILE__ ) ) ) );
    $config_handler = icms::$config;
    $mytubeModuleConfig = $config_handler -> getConfigsByCat( 0, $mytubeModule -> getVar( 'mid' ) );

    if ($options[4]>0) {
      $result2 = icms::$xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl, nice_url FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published > 0 AND published<=' . time() . ' AND (expired=0 OR expired>' . time() . ') AND offline=0 AND cid=' . $options[4] . ' ORDER BY RAND() LIMIT ' . $options[1] );
    } else {
      $result2 = icms::$xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl, nice_url FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published > 0 AND published<=' . time() . ' AND (expired=0 OR expired>' . time() . ') AND offline=0 ORDER BY RAND() LIMIT ' . $options[1] );
    }
	include_once ICMS_ROOT_PATH . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/include/video.php';
	include_once ICMS_ROOT_PATH . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/include/functions.php';
    while ( $myrow = icms::$xoopsDB -> fetchArray( $result2 ) ) {
        if ( false == checkMyTubeBlockGroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) { continue; }
        $videorandom = array();
        $title = icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $myrow['title'] ) );
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . '...';
            } 
        }
        $videorandom['id'] = $myrow['lid'];
        $videorandom['cid'] = $myrow['cid'];
        $videorandom['title'] = $title;
        $videorandom['date'] = mytube_time( formatTimestamp( $myrow['published'], $options[3] ) );
		$videorandom['videothumb'] = mytube_videothumb( $myrow['vidid'], $myrow['title'], $myrow['vidsource'], $myrow['picurl'], $mytubeModuleConfig['videoimgdir'] . '/' . $myrow['screenshot'], $mytubeModuleConfig['shotwidth'], $mytubeModuleConfig['shotheight'] );
        $videorandom['dirname'] = $mytubeModule -> getVar( 'dirname' );
		$videorandom['width'] = $mytubeModuleConfig['shotwidth']+2;
		$nice_link = mytube_nicelink( $myrow['title'], $myrow['nice_url'] );
		if ( $mytubeModuleConfig['niceurl'] ) {
			$videorandom['url'] = ICMS_URL . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/singlevideo.php?lid=' . $myrow['lid'] . '&amp;page=' . $nice_link;
		} else {
			$videorandom['url'] = ICMS_URL . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $myrow['cid'] . '&amp;lid=' . $myrow['lid'];
		}
        $block['random'][] = $videorandom;
    }
    unset( $_block_check_array );
    return $block;
}

// Function: b_xoopstube_random_h
// Output  : Returns random video in horizontal block
function b_mytube_randomh( $options ) {
    $block = array();
    $mytubeModule = icms_getModuleInfo( basename( dirname( dirname( __FILE__ ) ) ) );
    $config_handler = icms::$config;
    $mytubeModuleConfig = $config_handler -> getConfigsByCat( 0, $mytubeModule -> getVar( 'mid' ) );

    if ( $options[4] > 0 ) {
      $result2 = icms::$xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl, nice_url FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published > 0 AND published<=' . time() . ' AND (expired=0 OR expired>' . time() . ') AND offline=0 AND cid=' . $options[4] . ' ORDER BY RAND() LIMIT ' . $options[1] );
    } else {
      $result2 = icms::$xoopsDB -> query( 'SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl, nice_url FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE published > 0 AND published<=' . time() . ' AND (expired=0 OR expired>' . time() . ') AND offline=0 ORDER BY RAND() LIMIT ' . $options[1] );
    }
	include_once ICMS_ROOT_PATH . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/include/video.php';
	include_once ICMS_ROOT_PATH . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/include/functions.php';	
    while ( $myrow = icms::$xoopsDB -> fetchArray( $result2 ) ) {
        if ( false == checkMyTubeBlockgroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) { continue; }
        $videorandomh = array();
        $title = icms_core_DataFilter::htmlSpecialChars( icms_core_DataFilter::stripSlashesGPC( $myrow['title'] ) );
        $videorandomh['balloon'] = $myrow['title'];
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . '...';
            } 
        }
        $videorandomh['id'] = $myrow['lid'];
        $videorandomh['cid'] = $myrow['cid'];
        $videorandomh['title'] = $title;
        $videorandomh['date'] = mytube_time( formatTimestamp( $myrow['published'], $options[3] ) );
        include_once ICMS_ROOT_PATH . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/include/video.php';
		$videorandomh['videothumb'] = mytube_videothumb( $myrow['vidid'], $myrow['title'], $myrow['vidsource'], $myrow['picurl'], $mytubeModuleConfig['videoimgdir'] . '/' . $myrow['screenshot'], $mytubeModuleConfig['shotwidth'], $mytubeModuleConfig['shotheight'] );
        $videorandomh['dirname'] = $mytubeModule -> getVar( 'dirname' );
		$videorandomh['width'] = $mytubeModuleConfig['shotwidth']+2;
		$nice_link = mytube_nicelink( $myrow['title'], $myrow['nice_url'] );
		if ( $mytubeModuleConfig['niceurl'] ) {
			$videorandomh['url'] = ICMS_URL . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/singlevideo.php?lid=' . $myrow['lid'] . '&amp;page=' . $nice_link;
		} else {
			$videorandomh['url'] = ICMS_URL . '/modules/' . $mytubeModule -> getVar( 'dirname' ) . '/singlevideo.php?cid=' . $myrow['cid'] . '&amp;lid=' . $myrow['lid'];
		}
        $block['random'][] = $videorandomh;
    }
    unset( $_block_check_array );
    return $block;
}

// b_xoopstube_top_edit()
// @param $options
// @return
function b_mytube_random_edit( $options ) {
	$form = '<table cellspacing="5">';
    $form .= '<tr><td width="200px"><b>' . _MB_MYTUBE_DISP . ':</b></td>';
    $form .= '<td><input type="hidden" name="options[]" value="';
    if ( $options[0] == 'published' ) {
        $form .= 'published"';
    }
    if ( $options[0] == 'random' ) {
        $form .= 'random"';
    }
    if ( $options[0] == 'randomh' ) {
        $form .= 'randomh"';
    } else {
        $form .= 'hits"';
    }
    $form .= ' />';
    $form .= '<input type="text" name="options[]" value="' . $options[1] . '" />&nbsp;' . _MB_MYTUBE_FILES . '</td></tr>';
    $form .= '<tr><td><b>' . _MB_MYTUBE_CHARS . ':</b></td><td><input type="text" name="options[]" value="' . $options[2] . '" />&nbsp;' . _MB_MYTUBE_LENGTH . '</td></tr>';
    $form .= '<tr><td><b>' . _MB_MYTUBE_DATEFORMAT . ':</b></td><td><input type="text" name="options[]" value="' . $options[3] . '" />&nbsp;' . _MB_MYTUBE_DATEFORMATMANUAL . '</td></tr>';
	
    $cat_arr = array();
    $xt = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );
    $cat_arr = $xt -> getChildTreeArray( 0, 'title');
    $form .= '<tr><td><b>' . _MB_MYTUBE_SELECTCAT . '</b></td><br /><td><select name="options[]" size="8">';
	$selected = '';
	if ( $options[4] == 0  ) {	
		$selected = ' selected';
	}
	$form .= '<option value="0"' . $selected . '>&nbsp;' . _MB_MYTUBE_ALLCAT . '&nbsp;</option>';
	foreach( $cat_arr as $catlist ) {
		$selected = '';
		if ( $options[4] == $catlist['cid']  ) {
			$selected = ' selected';
		}
		$form .= '<option value="' . $catlist['cid'] . '"' . $selected . '>&nbsp;' . $catlist['title'] . '&nbsp;</option>';
	}
    $form .= '</select>';
	$form .= '</td></tr></table>';
    return $form;
}
?>