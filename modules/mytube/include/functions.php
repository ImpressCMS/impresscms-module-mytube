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

function mytube_checkgroups( $cid = 0, $permType = 'MyTubeCatPerm', $redirect = false ) {
    $groups = is_object( icms::$user ) ? icms::$user -> getGroups() : XOOPS_GROUP_ANONYMOUS;
    $gperm_handler = icms::handler('icms_member_groupperm');
    if ( !$gperm_handler -> checkRight( $permType, $cid, $groups, icms::$module -> getVar( 'mid' ) ) ) {
        if ( $redirect == false ) {
            return false;
        } else {
            redirect_header( 'index.php', 3, _NOPERM );
            exit();
        } 
    } 
    return true;
} 

function mytube_getVoteDetails( $lid = 0 ) {
    $sql = 'SELECT 
			COUNT(rating) AS rate, 
			MIN(rating) AS min_rate, 
			MAX(rating) AS max_rate, 
			AVG(rating) AS avg_rate, 
			COUNT(ratinguser) AS rating_user, 
			MAX(ratinguser) AS max_user, 
			MAX(title) AS max_title, 
			MIN(title) AS min_title, 
			sum(ratinguser = 0) AS null_ratinguser 
			FROM ' . icms::$xoopsDB -> prefix( 'mytube_votedata' );
    if ( $lid > 0 ) {
        $sql .= ' WHERE lid=' . $lid;
    } 
    if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
        return false;
    } 
    $ret = icms::$xoopsDB -> fetchArray( $result );
    return $ret;
} 

function mytube_calcVoteData( $sel_id = 0 ) {
    $ret = array();
    $ret['useravgrating'] = 0;
    $sql = 'SELECT rating FROM ' . icms::$xoopsDB -> prefix( 'mytube_votedata' );
    if ( $sel_id != 0 ) {
        ' WHERE lid=' . $sel_id;
    } 
    if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
        return false;
    } 
    $ret['uservotes'] = icms::$xoopsDB -> getRowsNum( $result );
    while ( list( $rating ) = icms::$xoopsDB -> fetchRow( $result ) ) {
        $ret['useravgrating'] += intval( $rating );
    } 
    if ( $ret['useravgrating'] > 0 ) {
        $ret['useravgrating'] = number_format( ( $ret['useravgrating'] / $ret['uservotes'] ), 2 );
    } 
    return $ret;
} 

function mytube_cleanRequestVars( &$array, $name = null, $def = null, $strict = false, $lengthcheck = 15 ) {
    // Sanitise $_request for further use.  This method gives more control and security.
    // Method is more for functionality rather than beauty at the moment, will correct later.
    unset( $array['usercookie'] );
    unset( $array['PHPSESSID'] );
    if ( is_array( $array ) && $name == null ) {
        $globals = array();
        foreach ( array_keys( $array ) as $k ) {
            $value = strip_tags( trim( $array[$k] ) );
            if ( strlen( $value >= $lengthcheck ) ) {
                return null;
            }
            if ( ctype_digit( $value ) ) {
                $value = intval( $value );
            } else {
                if ( $strict == true ) {
                    $value = preg_replace( '/\W/', '', trim( $value ) );
                } 
                $value = strtolower( strval( $value ) );
            } 
            $globals[$k] = $value;
        } 
        return $globals;
    }
    if ( !isset( $array[$name] ) || !array_key_exists( $name, $array ) ) {
        return $def;
    } else {
        $value = strip_tags( trim( $array[$name] ) );
    }
    if ( ctype_digit( $value ) ) {
        $value = intval( $value );
    } else {
        if ( $strict == true ) {
            $value = preg_replace( '/\W/', '', trim( $value ) );
        } 
        $value = strtolower( strval( $value ) );
    } 
    return $value;
} 

function mytube_toolbar( $cid = 0 ) {
    $toolbar = '[ ';
    if ( true == mytube_checkgroups( $cid, 'MyTubeSubPerm' ) ) {
        $toolbar .= '<a href="submit.php">' . _MD_MYTUBE_SUBMITVIDEO . '</a> | ';
    } 
    $toolbar .= '<a href="newlist.php?newvideoshowdays=7">' . _MD_MYTUBE_LATESTLIST . '</a> | <a href="topten.php?list=hit">' . _MD_MYTUBE_POPULARITY . '</a> | <a href="topten.php?list=rate">' . _MD_MYTUBE_TOPRATED . '</a> ]';
    return $toolbar;
}

// mytube_displayicons()
//
// @param  $time
// @param integer $status
// @param integer $counter
// @return
function mytube_displayicons( $time, $status = 0, $counter = 0 ) {
    $new = '';
    $pop = '';
    $newdate = ( time() - ( 86400 * intval( icms::$module -> config['daysnew'] ) ) );
    $popdate = ( time() - ( 86400 * intval( icms::$module -> config['daysupdated'] ) ) ) ;
    if ( icms::$module -> config['displayicons'] != 3 ) {
        if ( $newdate < $time ) {
            if ( intval( $status ) > 1 ) {
                if ( icms::$module -> config['displayicons'] == 1 )
                    $new = '&nbsp;<span class="mytube_minibutton"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/error.png" alt="" style="vertical-align: middle;" />&nbsp;' . _MD_MYTUBE_UPDATED . "</span>";
                if ( icms::$module -> config['displayicons'] == 2 )
                    $new = '<i>' . _MD_MYTUBE_UPDATED . '</i>';
            } else {
                if ( icms::$module -> config['displayicons'] == 1 )
                    $new = '&nbsp;<span class="mytube_minibutton"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/flag_blue.png" alt="" style="vertical-align: middle;" />&nbsp;' . _MD_MYTUBE_NEW . "</span>";
                if ( icms::$module -> config['displayicons'] == 2 )
                    $new = '<i>' . _MD_MYTUBE_NEW . '</i>';
            }
        } 
        if ( $popdate > $time ) {
            if ( $counter >= icms::$module -> config['popular'] ) {
				if ( icms::$module -> config['displayicons'] == 1 )
                    $pop = '&nbsp;<span class="mytube_minibutton"><img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon/star.png" alt="" style="vertical-align: middle;" />&nbsp;' . _MD_MYTUBE_POPULAR . "</span>";
                if ( icms::$module -> config['displayicons'] == 2 )
                    $pop = '<i>' . _MD_MYTUBE_POPULAR . '</i>';
            } 
        } 
    } 
    $icons = $new . ' ' . $pop;
    return $icons;
} 

if ( !function_exists( 'mytube_convertorderbyin' ) ) {
    // Reusable Link Sorting Functions
    // mytube_convertorderbyin()
    // @param  $orderby
    // @return
    function mytube_convertorderbyin( $orderby ) {
        switch ( trim( $orderby ) ) {
            case 'titleA':
                $orderby = 'title ASC';
                break;
            case 'dateA':
                $orderby = 'published ASC';
                break;
            case 'hitsA':
                $orderby = 'hits ASC';
                break;
            case 'ratingA':
                $orderby = 'rating ASC';
                break;
            case 'titleD':
                $orderby = 'title DESC';
                break;
            case 'hitsD':
                $orderby = 'hits DESC';
                break;
            case 'ratingD':
                $orderby = 'rating DESC';
                break;
            case'dateD':
                $orderby = 'published DESC';
                break;
        } 
        return $orderby;
    } 
} 
if ( !function_exists( 'mytube_convertorderbytrans' ) ) {
    function mytube_convertorderbytrans( $orderby ) {
		switch ( $orderby ) {
			case 'hits ASC':
				$orderbyTrans = _MD_MYTUBE_POPULARITYLTOM;
				break;
			case 'hits DESC':
				$orderbyTrans = _MD_MYTUBE_POPULARITYMTOL;
				break;
			case 'title ASC':
				$orderbyTrans = _MD_MYTUBE_TITLEATOZ;
				break;
			case 'title DESC':
				$orderbyTrans = _MD_MYTUBE_TITLEZTOA;
				break;
			case 'published ASC':
				$orderbyTrans = _MD_MYTUBE_DATEOLD;
				break;
			case 'published DESC':
				$orderbyTrans = _MD_MYTUBE_DATENEW;
				break;
			case 'rating ASC':
				$orderbyTrans = _MD_MYTUBE_RATINGLTOH;
				break;
			case 'rating DESC':
				$orderbyTrans = _MD_MYTUBE_RATINGHTOL;
				break;
		}
        return $orderbyTrans;
    } 
} 
if ( !function_exists( 'mytube_convertorderbyout' ) ) {
    function mytube_convertorderbyout( $orderby ) {
		switch ( $orderby ) {
			case 'title ASC':
				$orderby = 'titleA';
				break;
			case 'published ASC':
				$orderby = 'dateA';
				break;
			case 'hits ASC':
				$orderby = 'hitsA';
				break;
			case 'rating ASC': 
				$orderby = 'ratingA';
				break;
			case 'title DESC':
				$orderby = 'titleD';
				break;
			case 'published DESC':
				$orderby = 'dateD';
				break;
			case 'hits DESC': 
				$orderby = 'hitsD';
				break;
			case 'rating DESC':
				$orderby = 'ratingD';
				break;
		}
        return $orderby;
    } 
} 

// updaterating()
// @param  $sel_id
// @return updates rating data in itemtable for a given item
function mytube_updaterating( $sel_id ) {
    $query = 'SELECT rating FROM ' . icms::$xoopsDB -> prefix( 'mytube_votedata' ) . ' WHERE lid=' . $sel_id;
    $voteresult = icms::$xoopsDB -> query( $query );
    $votesDB = icms::$xoopsDB -> getRowsNum( $voteresult );
    $totalrating = 0;
    while ( list( $rating ) = icms::$xoopsDB -> fetchRow( $voteresult ) ) {
        $totalrating += $rating;
    } 
    $finalrating = $totalrating / $votesDB;
    $finalrating = number_format( $finalrating, 4 );
    $sql = sprintf( 'UPDATE %s SET rating = %u, votes = %u WHERE lid = %u', icms::$xoopsDB -> prefix( 'mytube_videos' ), $finalrating, $votesDB, $sel_id );
    icms::$xoopsDB -> query( $sql );
} 

// totalcategory()
// @param integer $pid
// @return
function mytube_totalcategory( $pid = 0 ) {
    $sql = 'SELECT cid FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' );
    if ( $pid > 0 ) {
        $sql .= ' WHERE pid = 0';
    } 
    $result = icms::$xoopsDB -> query( $sql );
    $catlisting = 0;
    while ( list( $cid ) = icms::$xoopsDB -> fetchRow( $result ) ) {
        if ( mytube_checkgroups( $cid ) ) {
            $catlisting++;
        } 
    } 
    return $catlisting;
} 

// mytube_getTotalItems()
// @param integer $sel_id
// @param integer $get_child
// @param integer $return_sql
// @return
function mytube_getTotalItems( $sel_id = 0, $get_child = 0, $return_sql = 0 ) {
    global $mytree, $_check_array;
    if ( $sel_id > 0 ) {
        $sql = 'SELECT a.lid, a.cid, a.published FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' a LEFT JOIN '
         . icms::$xoopsDB -> prefix( 'mytube_altcat' ) . ' b'
         . ' ON b.lid=a.lid'
         . ' WHERE a.published > 0 AND a.published <= ' . time()
         . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND offline = 0 '
         . ' AND (b.cid=a.cid OR (a.cid=' . $sel_id . ' OR b.cid=' . $sel_id . '))'
		 . ' GROUP BY a.lid, a.cid, a.published';
    } else {
        $sql = 'SELECT lid, cid, published FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE offline = 0 AND published > 0 AND published <= ' . time() . ' AND (expired = 0 OR expired > ' . time() . ')';
    } 
    if ( $return_sql == 1 ) { return $sql; } 
    $count = 0;
    $published_date = 0;
    $arr = array();
    $result = icms::$xoopsDB -> query( $sql );
    while ( list( $lid, $cid, $published ) = icms::$xoopsDB -> fetchRow( $result ) ) {
        if ( true == mytube_checkgroups() ) {
            $count++;
            $published_date = ( $published > $published_date ) ? $published : $published_date;
        } 
    } 
    $child_count = 0;
    if ( $get_child == 1 ) {
        $arr = $mytree -> getAllChildId( $sel_id );
        $size = count( $arr );
        for( $i = 0;$i < count( $arr );$i++ ) {
            $query2 = 'SELECT a.lid, a.published, a.cid FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' a LEFT JOIN '
             . icms::$xoopsDB -> prefix( 'mytube_altcat' ) . ' b'
             . ' ON b.lid = a.lid'
             . ' WHERE a.published > 0 AND a.published <= ' . time()
             . ' AND (a.expired = 0 OR a.expired > ' . time() . ') AND offline = 0'
             . ' AND (b.cid=a.cid OR (a.cid=' . $arr[$i] . ' OR b.cid=' . $arr[$i] . ')) GROUP BY a.lid, a.published, a.cid';
            $result2 = icms::$xoopsDB -> query( $query2 );
            while ( list( $lid, $published ) = icms::$xoopsDB -> fetchRow( $result2 ) ) {
                if ( $published == 0 ) { continue; } 
                $published_date = ( $published > $published_date ) ? $published : $published_date;
                $child_count++;
            } 
        } 
    } 
    $info['count'] = $count + $child_count;
    $info['published'] = $published_date;
    return $info;
} 

function mytube_imageheader( $indeximage = '', $indexheading = '' ) {
    if ( $indeximage == '' ) {
        $result = icms::$xoopsDB -> query( 'SELECT indeximage, indexheading FROM ' . icms::$xoopsDB -> prefix( 'mytube_indexpage' ) );
        list( $indeximage, $indexheading ) = icms::$xoopsDB -> fetchrow( $result );
    } 
    $image = '';
    if ( !empty( $indeximage ) ) {
        $image = mytube_displayimage( $indeximage, 'index.php', icms::$module -> config['mainimagedir'], $indexheading );
    } 
    return $image;
} 

function mytube_displayimage( $image = '', $path = '', $imgsource = '', $alttext = '' ) {
    $showimage = '';
    // Check to see if link is given
    if ( $path ) { $showimage = '<a href="' . $path . '">'; } 
    // checks to see if the file is valid else displays default blank image
    if ( !is_dir( ICMS_ROOT_PATH . "/{$imgsource}/{$image}" ) && file_exists( ICMS_ROOT_PATH . "/{$imgsource}/{$image}" ) ) {
        $showimage .= "<img src='" . ICMS_URL . "/{$imgsource}/{$image}' border='0' title='" . $alttext . "' alt='" . $alttext . "' /></a>";
    } else {
        if ( icms::$user && icms::$user -> isAdmin( icms::$module -> getVar( 'mid' ) ) ) {
            $showimage .= '<img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/brokenimg.png" alt="' . _MD_MYTUBE_ISADMINNOTICE . '" /></a>';
        } else {
            $showimage .= '<img src="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/images/blank.png" alt="' . $alttext . '" /></a>';
        } 
    } 
    clearstatcache();
    return $showimage;
} 

function mytube_letters() {
    $letterchoice = '<div>' . _MD_MYTUBE_BROWSETOTOPIC . '</div>';
    $alphabet =  mytube_alfabet();
    $num = count( $alphabet ) - 1;
    $counter = 0;
    while ( list( , $ltr ) = each( $alphabet ) ) {
        $letterchoice .= '<a class="mytube_letters" href="' . ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?list=' . $ltr .'">' . $ltr . '</a>';
        if ( $counter == round( $num / 2 ) )
            $letterchoice .= '<br />';
        elseif ( $counter != $num )
            $letterchoice .= '&nbsp;';
        $counter++;
    } 
    return $letterchoice;
} 

function mytube_isnewimage( $published ) {
    $oneday = ( time() - ( 86400 * 1 ) );
    $threedays = ( time() - ( 86400 * 3 ) );
    $week = ( time() - ( 86400 * 7 ) );
    $path = 'modules/' . icms::$module -> getVar( 'dirname' ) . '/images/icon';
    if ( $published > 0 && $published < $week ) {
        $indicator['image'] = "$path/linkload4.png";
        $indicator['alttext'] = _MD_MYTUBE_NEWLAST;
    } elseif ( $published >= $week && $published < $threedays ) {
        $indicator['image'] = "$path/linkload3.png";
        $indicator['alttext'] = _MD_MYTUBE_NEWTHIS;
    } elseif ( $published >= $threedays && $published < $oneday ) {
        $indicator['image'] = "$path/linkload2.png";
        $indicator['alttext'] = _MD_MYTUBE_THREE;
    } elseif ( $published >= $oneday ) {
        $indicator['image'] = "$path/linkload1.png";
        $indicator['alttext'] = _MD_MYTUBE_TODAY;
    } else {
        $indicator['image'] = "$path/linkload.png";
        $indicator['alttext'] = _MD_MYTUBE_NO_FILES;
    } 
    return $indicator;
} 

function mytube_strrrchr( $haystack, $needle ) {
    return substr( $haystack, 0, strpos( $haystack, $needle ) + 1 );
}

function mytube_getDirSelectOption( $selected, $dirarray, $namearray ) {
    echo "<select size='1' name='workd' onchange='location.href=\"upload.php?rootpath=\"+this.options[this.selectedIndex].value'>";
    echo "<option value=''>--------------------------------------</option>";
    foreach( $namearray as $namearray => $workd ) {
        if ( $workd === $selected ) {
            $opt_selected = 'selected';
        } else {
            $opt_selected = '';
        } 
        echo '<option value="' . htmlspecialchars( $namearray, ENT_QUOTES ) . '" $opt_selected>' . $workd . '</option>';
    } 
    echo '</select>';
}

function mytube_VgetDirSelectOption( $selected, $dirarray, $namearray ) {
    echo "<select size='1' name='workd' onchange='location.href=\"vupload.php?rootpath=\"+this.options[this.selectedIndex].value'>";
    echo "<option value=''>--------------------------------------</option>";
    foreach( $namearray as $namearray => $workd ) {
        if ( $workd === $selected ) {
            $opt_selected = 'selected';
        } else {
            $opt_selected = '';
        } 
        echo '<option value="' . htmlspecialchars( $namearray, ENT_QUOTES ) . '" $opt_selected>' . $workd . '</option>';
    } 
    echo '</select>';
}

 



// Code for retreiving an editor is based on code from Hervet
function &mytube_getWysiwygForm( $caption, $name, $value ) {
	$isadmin = ( ( is_object( icms::$user ) && !empty( icms::$user ) ) && icms::$user -> isAdmin( icms::$module -> getVar( 'mid' ) ) ) ? true : false;
	if ( $isadmin == true ) {
		$formuser = icms::$module -> config['form_options'];
	} else {
		$formuser = icms::$module -> config['form_optionsuser'];
	}

	switch( $formuser ) {
	case 'fck':
		$editor = mytube_fckeditor( $caption, $name, $value );
		break;

	case 'tinyeditor':
		$editor = mytube_tinyeditor( $caption, $name, $value );
		break;

	case 'tinymce' :
		$editor = mytube_tinymce( $caption, $name, $value );    
        break;
	}
	return $editor;
}

function mytube_fckeditor( $caption, $name, $value ) {
	if ( file_exists( ICMS_ROOT_PATH . '/editors/FCKeditor/formfckeditor.php' ) )	{
		include_once( ICMS_ROOT_PATH . '/editors/FCKeditor/formfckeditor.php' );
		$mytube_editor = new XoopsFormFckeditor( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '300px' ), true );
	} else {
		$mytube_editor = new icms_form_elements_Dhtmltextarea( $caption, $name, $value, 35, 60 );
	}
	return $mytube_editor;
}

function mytube_tinyeditor( $caption, $name, $value ) {
	if ( file_exists( ICMS_ROOT_PATH . '/class/xoopseditor/tinyeditor/formtinyeditortextarea.php' ) ) {
		include_once( ICMS_ROOT_PATH . '/class/xoopseditor/tinyeditor/formtinyeditortextarea.php' );
		$mytube_editor = new XoopsFormTinyeditorTextArea( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '300px' ) );
	} else {
		$mytube_editor = new icms_form_elements_Dhtmltextarea( $caption, $name, $value, 35, 60 );
	}
	return $mytube_editor;
}	

function mytube_tinymce( $caption, $name, $value ) {
	if ( file_exists( ICMS_ROOT_PATH . '/editors/tinymce/formtinymce.php' ) ) {
		include_once( ICMS_ROOT_PATH . '/editors/tinymce/formtinymce.php' );
		$mytube_editor = new XoopsFormTinymce( array( 'caption' => $caption, 'name' => $name, 'value' => $value, 'width' => '100%', 'height' => '300px', 0 ) );
	} else {
		$mytube_editor = new icms_form_elements_Dhtmltextarea( $caption, $name, $value, $editor_configs['rows'], $editor_configs['cols'] );
	}
	return $mytube_editor;
}

function mytube_html2text($document){
		// PHP Manual:: function preg_replace
		// $document should contain an HTML document.
		// This will remove HTML tags, javascript sections
		// and white space. It will also convert some
		// common HTML entities to their text equivalent.
		// Credits : newbb2
		$search = array (
		"'<script[^>]*?>.*?</script>'si",	// Strip out javascript
		"'<img.*?/>'si",       				// Strip out img tags
		"'<[\/\!]*?[^<>]*?>'si",          	// Strip out HTML tags
		"'([\r\n])[\s]+'",                	// Strip out white space
		"'&(quot|#34);'i",                	// Replace HTML entities
		"'&(amp|#38);'i",
		"'&(lt|#60);'i",
		"'&(gt|#62);'i",
		"'&(nbsp|#160);'i",
		"'&(iexcl|#161);'i",
		"'&(cent|#162);'i",
		"'&(pound|#163);'i",
		"'&(copy|#169);'i",
		);                    // evaluate as php
		$replace = array (
		"",
		"",
		"",
		"\\1",
		"\"",
		"&",
		"<",
		">",
		" ",
		chr(161),
		chr(162),
		chr(163),
		chr(169),
		);
		$text = preg_replace($search, $replace, $document);
		return $text;
}

// Check if Tag module is installed
function mytube_tag_module_included() {
	static 	$mytube_tag_module_included;
	if ( !isset( $mytube_tag_module_included ) ) {
		$modules_handler = icms::handler( 'icms_module' );
		$tag_mod = $modules_handler -> getByDirName( 'tag' );
		if ( !$tag_mod ) {
			$tag_mod = false;
		} else {
			$mytube_tag_module_included = $tag_mod -> getVar('isactive') == 1;
		}
	}
	return $mytube_tag_module_included;
}

// Add item_tag to Tag-module
function mytube_tagupdate( $lid, $item_tag ) {
    if ( mytube_tag_module_included() ){
	  include_once ICMS_ROOT_PATH . '/modules/tag/include/formtag.php';
	  $tag_handler = icms_getModuleHandler('tag', 'tag');
	  $tag_handler -> updateByItem($item_tag, $lid, icms::$module -> getVar( 'dirname' ), 0);
	}
}

function mytube_updateCounter( $lid ) {
	$sql = 'UPDATE ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' SET hits=hits+1 WHERE lid=' . intval( $lid );
    $result = icms::$xoopsDB -> queryF( $sql );
}

function mytube_noindexnofollow() { 
    global $xoTheme, $xoopsTpl; 
    if ( is_object( $xoTheme ) ) { 
        $xoTheme -> addMeta( 'meta', 'robots', 'noindex,nofollow' ); 
    } else { 
        $xoopsTpl -> assign( 'icms_meta_robots', 'noindex,nofollow' ); 
    } 
}

function mytube_time( $time ) {
	global $icmsConfig;
	$mydirname = basename( dirname( dirname( __FILE__ ) ) );
	include_once ICMS_ROOT_PATH . '/modules/' . $mydirname . '/language/' . $icmsConfig['language'] . '/local.php';

	$trans = array(	'Monday'    => _MYTUBE_MONDAY,
					'Tuesday'   => _MYTUBE_TUESDAY,
					'Wednesday' => _MYTUBE_WEDNESDAY,
					'Thursday'  => _MYTUBE_THURSDAY,
					'Friday'    => _MYTUBE_FRIDAY,
					'Saturday'  => _MYTUBE_SATURDAY,
					'Sunday'    => _MYTUBE_SUNDAY,
					'Mon'    	=> _MYTUBE_MON,
					'Tue'   	=> _MYTUBE_TUE,
					'Wed' 		=> _MYTUBE_WED,
					'Thu'  		=> _MYTUBE_THU,
					'Fri'    	=> _MYTUBE_FRI,
					'Sat'  		=> _MYTUBE_SAT,
					'Sun'    	=> _MYTUBE_SUN,
					'Januari'	=> _MYTUBE_JANUARI,
					'Februari'	=> _MYTUBE_FEBRUARI,
					'March'		=> _MYTUBE_MARCH,
					'April'		=> _MYTUBE_APRIL,
					'May'		=> _MYTUBE_MAY,
					'June'		=> _MYTUBE_JUNE,
					'July'		=> _MYTUBE_JULY,
					'August'	=> _MYTUBE_AUGUST,
					'September' => _MYTUBE_SEPTEMBER,
					'October'	=> _MYTUBE_OCTOBER,
					'November'	=> _MYTUBE_NOVEMBER,
					'December'	=> _MYTUBE_DECEMBER,
					'Jan'		=> _MYTUBE_JAN,
					'Feb'		=> _MYTUBE_FEB,
					'Mar'		=> _MYTUBE_MAR,
					'Apr'		=> _MYTUBE_APR,
					'May'		=> _MYTUBE_MAY2,
					'Jun'		=> _MYTUBE_JUN,
					'Jul'		=> _MYTUBE_JUL,
					'Aug'		=> _MYTUBE_AUG,
					'Sep' 		=> _MYTUBE_SEP,
					'Oct'		=> _MYTUBE_OCT,
					'Nov'		=> _MYTUBE_NOV,
					'Dec'		=> _MYTUBE_DEC );
	$timestamp = strtr( $time, $trans );
	return $timestamp;
}

function mytube_nicelink( $title, $niceurl ) {
	$title = strtolower( filter_var( str_replace( ' ', '_', mytube_charrepl( $title ) ), FILTER_SANITIZE_SPECIAL_CHARS ) );
	$niceurl = strtolower( filter_var( str_replace( ' ', '_', mytube_charrepl( $niceurl ) ), FILTER_SANITIZE_SPECIAL_CHARS ) );
	if ( !$niceurl ) {
		$nicelink = filter_var( $title, FILTER_SANITIZE_URL );
	} else {
		$nicelink = filter_var( $niceurl, FILTER_SANITIZE_URL );
	}
	return $nicelink;
}

function mytube_niceurl( $lid, $title, $niceurl ) {
	if ( icms::$module -> config['niceurl'] ) {
		$niceurl = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?lid=' . $lid . '&amp;page=' . mytube_nicelink( $title, $niceurl );
	} else {
		$niceurl = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/singlevideo.php?lid=' . $lid;
	}
	return $niceurl;
}

function mytube_charrepl( $string ) {
    $find = array( 'À','Á','Â','Ã','Ä','Å','Ā','Ă','Ą','Æ','Ç','Ć','Ĉ','Ċ','Č','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ń','Ņ','Ň','Ò','Ó','Ô','Õ','Ö','Œ','Ø','Ŕ','Ŗ','Ř','Ś','Ŝ','Ş','Š','Ù','Ú','Û','Ü','Ũ','Ů','Ű','Ý','Ŷ','Ÿ','à','á','â','ã','ä','å','ā','ă','ą','æ','ç','ć','ĉ','ċ','č','è','é','ê','ë','ì','í','î','ï','ð','ñ','ń','ŉ','ņ','ň','ò','ó','ô','õ','ö','œ','ø','ŕ','ŗ','ř','ś','ŝ','ş','š','ũ','ú','û','ü','ů','ű','ß','ý','ŷ','ÿ' );
	$repl = array( 'A','A','A','A','A','A','A','A','A','AE','C','C','C','C','C','E','E','E','E','I','I','I','I','D','N','N','N','N','O','O','O','O','O','O','O','R','R','R','S','S','S','S','U','U','U','U','U','U','U','Y','Y','Y','a','a','a','a','a','a','a','a','a','ae','c','c','c','c','c','e','e','e','e','i','i','i','i','d','n','n','n','n','n','o','o','o','o','o','o','o','o','r','r','r','s','s','s','s','u','u','u','u','u','u','s','y','y','y' );
	$text1 = str_replace( $find, $repl, $string );
	// Now remove unwanted characters from the title
	$search = array (
         '/\'/',
		 '/\"/',
         '/\$/',
		 '/\£/',
		 '/\¥/',
		 '/\¢/',
		 '/\¤/',
		 '/\%/',
         '/\@/',
		 '/\&/',
		 '/\#/',
		 '/\*/',
		 '/\~/',
		 '/\^/',
		 '/\`/',
		 '/\´/',
		 '/\,/',
		 '/\./',
		 '/\(/',
		 '/\)/',
		 '/\[/',
		 '/\]/',
		 '/\{/',
		 '/\}/',
		 '/\|/',
		 '/\</',
		 '/\>/',
		 '/\?/',
		 '/\!/',
		 '/\//',
		 '/\;/',
		 '/\:/',
		 '/\©/',
		 '/\®/',
		 '/\¼/',
		 '/\½/',
		 '/\¾/',
		 '/\¹/',
		 '/\²/',
		 '/\³/',
		 '/\¿/',
		 '/\×/',
		 '/\¡/',
		 '/\°/',
		 '/\µ/',
		 '/\÷/',
		 '/\+/' );
	$text = preg_replace( $search, '', $text1 );
    return $text;
}

function user_posts( $submitter, $value ) {
	$sql = 'SELECT posts FROM ' . icms::$xoopsDB -> prefix( 'users' ) . ' WHERE uid=' . $submitter;
	if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        list( $posts ) = icms::$xoopsDB -> fetchRow( $result );
	if ( $posts == 0 && $value == -1 ) {	
		return false;
	} else {
		$sql = 'UPDATE ' . icms::$xoopsDB -> prefix( 'users' ) . ' SET posts=posts+' . $value . ' WHERE uid=' . $submitter;
		$result = icms::$xoopsDB -> query( $sql );
	}
}

?>