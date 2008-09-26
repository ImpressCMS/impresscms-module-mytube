<?php
/**
 * $Id: xoopstube_top.php
 * Module: MyTube
 */

// checkXTubeBlockGroups()
//
// @param integer $cid
// @param string $permType
// @param boolean $redirect
// @return
function checkXTubeBlockgroups( $cid = 0, $permType = 'XTubeCatPerm', $redirect = false ) {
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    global $xoopsUser;

    $groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = &xoops_gethandler( 'groupperm' );
    $module_handler = &xoops_gethandler( 'module' );
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

function xtube_b_checkgroups( $cid = 0, $permType = 'XTubeCatPerm', $redirect = false ) {
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    global $xoopsUser;

    $groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $modhandler = xoops_gethandler( 'module' );
    $xtubeModule = $modhandler -> getByDirname( $mydirname );
    $gperm_handler = &xoops_gethandler( 'groupperm' );
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, $xtubeModule -> getVar( 'mid' ) ) ) {
        if ( $redirect == false ) {
            return false;
        } 
    }
    return true;
}

function b_xoopstube_top_thumbs( $bvidid, $balloon, $btitle, $bsource, $bscreenshot, $bpicurl ) {
  $mydirname = basename( dirname( dirname( __FILE__ ) ) );
  $thumbb='';
  $modhandler = xoops_gethandler( 'module' );
  $xtubeModule = $modhandler -> getByDirname( $mydirname );
  $config_handler = xoops_gethandler( 'config' );
  $xtubeModuleConfig = $config_handler -> getConfigsByCat( 0, $xtubeModule -> getVar( 'mid' ) );

// Determine if video source YouTube
  if ($bsource == 0) {
  $thumbb = '<img src="http://img.youtube.com/vi/' . $bvidid . '/default.jpg" title="' . $balloon . '" alt="' . $balloon . '" width="' . $xtubeModuleConfig['shotwidth'] . '" height="' . $xtubeModuleConfig['shotheight'] . '"  border="0" />';
  }
// Determine if video source MetaCafe
  if ($bsource == 1) {
  list($metaclip) = split('[/]', $bvidid);
  $videothumb['metathumb'] = $metaclip;
  $thumbb = '<img src="http://www.metacafe.com/thumb/' . $videothumb['metathumb'] . '.jpg" title="' . $balloon . '" alt="' . $balloon . '" width="' . $xtubeModuleConfig['shotwidth'] . '" height="' . $xtubeModuleConfig['shotheight'] . '"  border="0" />';
  }
// Determine if video source iFilm/Spike
  if ($bsource == 2) {
    if ($picurl) {
      $thumbb = $picurl;
    } else {
      $thumbb = '<img src="http://img2.ifilmpro.com/resize/image/stills/films/resize/istd/' . $bvidid . '.jpg?width=' . $xtubeModuleConfig['shotwidth'] . ' title="' . $balloon . '" alt="' . $balloon . '" border="0" />';
    }
  }
// Determine if video source Photobucket
  if ($bsource == 3) {
  $thumbb = '<img src="http://i153.photobucket.com/albums/' . $bvidid . '.jpg" title="' . $balloon . '" alt="' . $balloon . '" width="' . $xtubeModuleConfig['shotwidth'] . '" height="' . $xtubeModuleConfig['shotheight'] . '"  border="0" />';
  }
// Determine if video source Google Video / MySpace TV / DailyMotion / Blip.tv
  if ($bsource >= 100 & $bsource < 200) {
  $thumbb = '<img src="' . $bpicurl . '" title="' . $balloon . '" alt="' . $balloon . '" width="' . $xtubeModuleConfig['shotwidth'] . '" height="' . $xtubeModuleConfig['shotheight'] . '"  border="0" />';
  }
// Determine if video source is MyTube for thumbnail
  if ($bsource == 200) {
     $thumbb = '<img src="' . XOOPS_URL . '/' . $xtubeModuleConfig['videoimgdir'] . '/' . $bscreenshot . '" title="' . $balloon . '" alt="' . $balloon . '" width="' . $xtubeModuleConfig['shotwidth'] . '" height="' . $xtubeModuleConfig['shotheight'] . '"  border="0" />';
  }
  return $thumbb;
}

// Function: b_xoopstube_top_show
// Input   : $options[0] = date for the most recent videos
// 			   hits for the most popular videos
//           $block['content'] = The optional above content
//           $options[1] = How many videos are displayes
//           $options[2] = Length of title
//           $options[3] = Set date format
// Output  : Returns the most recent or most popular videos
function b_xoopstube_top_show( $options ) {
    global $xoopsDB, $xoopsModule, $xoopsModuleConfig;
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    $block = array();
    $modhandler = xoops_gethandler( 'module' );
    $xtubeModule = $modhandler -> getByDirname( $mydirname );
    $config_handler = xoops_gethandler( 'config' );
    $xtubeModuleConfig = $config_handler -> getConfigsByCat( 0, $xtubeModule -> getVar( 'mid' ) );
    $xtubemyts = &MyTextSanitizer :: getInstance();

    if ($options[4]>0) {
      $result = $xoopsDB -> query( "SELECT lid, cid, title, vidid, screenshot, published, hits, vidsource, picurl FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE published>0
      AND published<=" . time() . "
      AND (expired=0 OR expired>" . time() . ")
      AND offline=0
      AND cid=" . $options[4] . "
      ORDER BY " . $options[0] . "
      DESC", $options[1], 0 );
    } else {
      $result = $xoopsDB -> query( "SELECT lid, cid, title, vidid, screenshot, published, hits, vidsource, picurl FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE published>0
      AND published<=" . time() . "
      AND (expired=0 OR expired>" . time() . ")
      AND offline=0
      ORDER BY " . $options[0] . "
      DESC", $options[1], 0 );
    }
    while ( $myrow = $xoopsDB -> fetchArray( $result ) ) {
        if ( false == checkXTubeBlockGroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) {
            continue;
        }
        if ( xtube_b_checkgroups( $myrow['cid'] ) == false ) {
            exit;
        }
        $videoload = array();
        $title = $xtubemyts -> htmlSpecialChars( $xtubemyts -> stripSlashesGPC($myrow['title']) );
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . "...";
            } 
        }
        $videoload['id'] = intval($myrow['lid']);
        $videoload['cid'] = intval($myrow['cid']);
        $videoload['title'] = $title;
        if ( $options[0] == "published" ) {
            $videoload['date'] = formatTimestamp( $myrow['published'], $options[3] );
        } elseif ( $options[0] == "hits" ) {
            $videoload['hits'] = $myrow['hits'];
        }
        $videoload['videothumb'] = b_xoopstube_top_thumbs( $myrow['vidid'], $myrow['title'], $title, $myrow['vidsource'], $myrow['screenshot'], $myrow['picurl'] );
        $videoload['dirname'] = $xtubeModule -> getVar( 'dirname' );
        $block['videos'][] = $videoload;
    }
    unset( $_block_check_array );
    return $block;
} 

// Function: b_xoopstube_random
// Output  : Returns random video
function b_xoopstube_random( $options ) {
    global $xoopsDB, $xoopsModuleConfig, $xtubemyts;
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    $block = array();
    $modhandler = xoops_gethandler( 'module' );
    $xtubeModule = $modhandler -> getByDirname( $mydirname );
    $config_handler = xoops_gethandler( 'config' );
    $xtubeModuleConfig = $config_handler -> getConfigsByCat( 0, $xtubeModule -> getVar( 'mid' ) );
    $xtubemyts = &MyTextSanitizer :: getInstance();

    if ($options[4]>0) {
      $result2 = $xoopsDB -> query( "SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE published > 0
      AND published<=" . time() . "
      AND (expired=0 OR expired>" . time() . ")
      AND offline=0
      AND cid=" . $options[4] . "
      ORDER BY RAND() LIMIT " . $options[1] );
    } else {
      $result2 = $xoopsDB -> query( "SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE published > 0
      AND published<=" . time() . "
      AND (expired=0 OR expired>" . time() . ")
      AND offline=0
      ORDER BY RAND() LIMIT " . $options[1] );
    }
	
    while ( $myrow = $xoopsDB -> fetchArray( $result2 ) ) {
        if ( false == checkXTubeBlockGroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) {
            continue;
        }
        $videorandom = array();
        $title = $xtubemyts -> htmlSpecialChars( $xtubemyts -> stripSlashesGPC( $myrow["title"] ) );
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . "...";
            } 
        }
        $videorandom['id'] = intval($myrow['lid']);
        $videorandom['cid'] = intval($myrow['cid']);
        $videorandom['title'] = $title;
        $videorandom['date'] = formatTimestamp( $myrow['published'], $options[3] );
        $videorandom['videothumb'] = b_xoopstube_top_thumbs( $myrow['vidid'], $myrow['title'], $title, $myrow['vidsource'], $myrow['screenshot'], $myrow['picurl'] );
        $videorandom['dirname'] = $xtubeModule -> getVar( 'dirname' );
        $block['random'][] = $videorandom;
    }
    unset( $_block_check_array );
    return $block;
}

// Function: b_xoopstube_random_h
// Output  : Returns random video in horizontal block
function b_xoopstube_randomh( $options ) {
    global $xoopsDB, $xoopsModuleConfig, $xtubemyts;
    $mydirname = basename( dirname( dirname( __FILE__ ) ) );
    $block = array();
    $modhandler = xoops_gethandler( 'module' );
    $xtubeModule = $modhandler -> getByDirname( $mydirname );
    $config_handler = xoops_gethandler( 'config' );
    $xtubeModuleConfig = $config_handler -> getConfigsByCat( 0, $xtubeModule -> getVar( 'mid' ) );
    $xtubemyts = &MyTextSanitizer :: getInstance();

    if ($options[4]>0) {
      $result2 = $xoopsDB -> query( "SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE published > 0
      AND published<=" . time() . "
      AND (expired=0 OR expired>" . time() . ")
      AND offline=0
      AND cid=" . $options[4] . "
      ORDER BY RAND() LIMIT " . $options[1] );
    } else {
      $result2 = $xoopsDB -> query( "SELECT lid, cid, title, vidid, screenshot, published, vidsource, picurl FROM " . $xoopsDB -> prefix( 'xoopstube_videos' ) . " WHERE published > 0
      AND published<=" . time() . "
      AND (expired=0 OR expired>" . time() . ")
      AND offline=0
      ORDER BY RAND() LIMIT " . $options[1] );
    }

    while ( $myrow = $xoopsDB -> fetchArray( $result2 ) ) {
        if ( false == checkXTubeBlockGroups( $myrow['cid'] ) || $myrow['cid'] == 0 ) {
            continue;
        }
        $videorandomh = array();
        $title = $xtubemyts -> htmlSpecialChars( $xtubemyts ->stripSlashesGPC($myrow["title"]) );
        $videorandomh['balloon'] = $myrow['title'];
        if ( !XOOPS_USE_MULTIBYTES ) {
            if ( strlen( $myrow['title'] ) >= $options[2] ) {
                $title = substr( $myrow['title'], 0, ( $options[2] -1 ) ) . "...";
            } 
        }
        $videorandomh['id'] = intval($myrow['lid']);
        $videorandomh['cid'] = intval($myrow['cid']);
        $videorandomh['title'] = $title;
        $videorandomh['date'] = formatTimestamp( $myrow['published'], $options[3] );
        $videorandomh['videothumb'] = b_xoopstube_top_thumbs( $myrow['vidid'], $myrow['title'], $title, $myrow['vidsource'], $myrow['screenshot'], $myrow['picurl'] );
        $videorandomh['dirname'] = $xtubeModule -> getVar( 'dirname' );
        $block['random'][] = $videorandomh;
    }
    unset( $_block_check_array );
    return $block;
}

// b_xoopstube_top_edit()
// @param $options
// @return
function b_xoopstube_top_edit( $options ) {
    $form = "" . _MB_XTUBE_DISP . "&nbsp;";
    $form .= "<input type='hidden' name='options[]' value='";
    if ( $options[0] == "published" ) {
        $form .= "published'";
    }
    if ( $options[0] == "random" ) {
        $form .= "random'";
    }
    if ( $options[0] == "randomh" ) {
        $form .= "randomh'";
    } else {
        $form .= "hits'";
    }
    $form .= " />";
    $form .= "<input type='text' name='options[]' value='" . $options[1] . "' />&nbsp;" . _MB_XTUBE_FILES . "";
    $form .= "&nbsp;<br />" . _MB_XTUBE_CHARS . "&nbsp;<input type='text' name='options[]' value='" . $options[2] . "' />&nbsp;" . _MB_XTUBE_LENGTH . "";
    $form .= "&nbsp;<br />" . _MB_XTUBE_DATEFORMAT . "&nbsp;<input type='text' name='options[]' value='" . $options[3] . "' />&nbsp;" . _MB_XTUBE_DATEFORMATMANUAL;

    global $xoopsDB;
    $cat_arr = array();
    include_once XOOPS_ROOT_PATH . '/class/xoopstree.php';
    $xt = new XoopsTree( $xoopsDB -> prefix( 'xoopstube_cat' ), 'cid', 'pid');
    $cat_arr = $xt -> getChildTreeArray( 0, 'title');

    $form .= "<br />" . _MB_XTUBE_SELECTCAT . "<br /><select name=\"options[]\" multiple=\"multiple\" size=\"5\">";
	if (array_search(0, $options) === false) {
		$form .= "<option value=\"0\">" . _MB_XTUBE_ALLCAT . "</option>";
	} else {
		$form .= "<option value=\"0\" selected=\"selected\">" . _MB_XTUBE_ALLCAT . "</option>";
	}

	foreach($cat_arr as $catlist) {
		if(array_search($catlist, $options) === false) {
			$form .= "<option value=\"" . $catlist['cid'] . "\">" . $catlist['title'] . "</option>";
		} else {
			$form .= "<option value=\"" . $catlist['cid'] . "\" selected=\"selected\">" . $catlist['title'] . "</option>";
		}
	}
    $form .= "</select>";

    return $form;
}

?>
