<?php
/**
* MyTube - a multicategory video management module
*
* Based upon WF-Links
*
* File: admin/category.php
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
 
include 'admin_header.php';

$op = '';

if ( isset( $_POST ) ) {
    foreach ( $_POST as $k => $v ) {
        ${$k} = $v;
    } 
} 

if ( isset( $_GET ) ) {
    foreach ( $_GET as $k => $v ) {
        ${$k} = $v;
    } 
}

function createcat( $cid = 0 ) {
    include_once '../class/mytube_lists.php';

    global $mytubemyts, $icmsConfig, $totalcats;

    $lid = 0;
    $title = '';
    $imgurl = '';
    $description = '';
    $pid = '';
    $weight = 0;
    $heading = _AM_MYTUBE_CCATEGORY_CREATENEW;
    $totalcats = mytube_totalcategory();

    if ( $cid ) {
        $sql = 'SELECT * FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) . ' WHERE cid=' . intval( $cid );
        $cat_arr = icms::$xoopsDB -> fetchArray( icms::$xoopsDB -> query($sql) );
        $title = $mytubemyts -> htmlSpecialCharsStrip( $cat_arr['title'] );
        $imgurl = $mytubemyts -> htmlSpecialCharsStrip( $cat_arr['imgurl'] );
        $description = $mytubemyts -> htmlSpecialCharsStrip( $cat_arr['description'] );
        $weight = $cat_arr['weight'];
        $heading = _AM_MYTUBE_CCATEGORY_MODIFY;
        $member_handler = icms::handler( 'icms_member' );
        $gperm_handler = icms::handler( 'icms_member_groupperm' );
        $groups = $gperm_handler -> getGroupIds( 'MyTubeCatPerm', $cid, icms::$module -> getVar( 'mid' ) );
        $groups = $groups;
		
    } else {
	$groups = true;
    }
	
    $sform = new icms_form_Theme( $heading, 'op', '' );
    $sform -> setExtra( 'enctype="multipart/form-data"' );

    $sform -> addElement( new icms_form_elements_Text( _AM_MYTUBE_FCATEGORY_TITLE, 'title', 50, 80, $title ), true );
    $sform -> addElement( new icms_form_elements_Text( _AM_MYTUBE_FCATEGORY_WEIGHT, 'weight', 10, 80, $weight ), false );
    
    if ( $totalcats > 0 && $cid ) {
       $mytreechose = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );
       ob_start();
          $mytreechose -> makeMySelBox( 'title', 'title', $cat_arr['pid'] , 1, 'pid' );
          $sform -> addElement( new icms_form_elements_Label( _AM_MYTUBE_FCATEGORY_SUBCATEGORY, ob_get_contents() ) );
       ob_end_clean();
    } else {
      $mytreechose = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );
       ob_start();
          $mytreechose -> makeMySelBox( 'title', 'title', $cid, 1, 'pid' );
          $sform -> addElement( new icms_form_elements_Label( _AM_MYTUBE_FCATEGORY_SUBCATEGORY, ob_get_contents() ) );
       ob_end_clean();
    }

    $graph_array = & mytubeLists :: getListTypeAsArray( ICMS_ROOT_PATH . '/' . icms::$module -> config['catimage'], $type='images' );
    $indeximage_select = new icms_form_elements_Select( '', 'imgurl', $imgurl );
    $indeximage_select -> addOptionArray( $graph_array );
    $indeximage_select -> setExtra( "onchange='showImgSelected(\"image\", \"imgurl\", \"" . icms::$module -> config['catimage'] . "\", \"\", \"" . ICMS_URL . "\")'" );
    $indeximage_tray = new icms_form_elements_Tray( _AM_MYTUBE_FCATEGORY_CIMAGE, '&nbsp;' );
    $indeximage_tray -> addElement( $indeximage_select );
    if ( !empty($imgurl) ) {
        $indeximage_tray -> addElement( new icms_form_elements_Label( '', '<br /><br /><img src="' . ICMS_URL . '/' . icms::$module -> config['catimage'] . '/' . $imgurl . '" name="image" id="image" alt="" />' ) );
    } else {
        $indeximage_tray -> addElement( new icms_form_elements_Label( '', '<br /><br /><img src="' . ICMS_URL . '/uploads/blank.gif" name="image" id="image" alt="" />' ) );
    } 
    $sform -> addElement( $indeximage_tray );

    $editor = mytube_getWysiwygForm( _AM_MYTUBE_FCATEGORY_DESCRIPTION, 'description', $description );
    $sform -> addElement( $editor, false );

    $sform -> addElement( new icms_form_elements_Hidden( 'cid', intval( $cid ) ) );

    $button_tray = new icms_form_elements_Tray( '', '' );
    $hidden = new icms_form_elements_Hidden( 'op', 'save' );
    $button_tray -> addElement( $hidden );

    if ( !$cid ) {
        $butt_create = new icms_form_elements_Button( '', '', _AM_MYTUBE_BSAVE, 'submit' );
        $butt_create -> setExtra( 'onclick="this.form.elements.op.value=\'addCat\'"' );
        $button_tray -> addElement( $butt_create );

        $butt_clear = new icms_form_elements_Button( '', '', _AM_MYTUBE_BRESET, 'reset' );
        $button_tray -> addElement( $butt_clear );

        $butt_cancel = new icms_form_elements_Button( '', '', _AM_MYTUBE_BCANCEL, 'button' );
        $butt_cancel -> setExtra( 'onclick="history.go(-1)"' );
        $button_tray -> addElement( $butt_cancel );
    } else {
        $butt_create = new icms_form_elements_Button( '', '', _AM_MYTUBE_BMODIFY, 'submit' );
        $butt_create -> setExtra( 'onclick="this.form.elements.op.value=\'addCat\'"' );
        $button_tray -> addElement( $butt_create );

        $butt_delete = new icms_form_elements_Button( '', '', _AM_MYTUBE_BDELETE, 'submit' );
        $butt_delete -> setExtra( 'onclick="this.form.elements.op.value=\'del\'"' );
        $button_tray -> addElement( $butt_delete );

        $butt_cancel = new icms_form_elements_Button( '', '', _AM_MYTUBE_BCANCEL, 'button' );
        $butt_cancel -> setExtra( 'onclick="history.go(-1)"' );
        $button_tray -> addElement( $butt_cancel );
    } 
    $sform -> addElement( $button_tray );
    $sform -> display();

    $result2 = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_cat' ) );
    list($numrows) = icms::$xoopsDB -> fetchRow( $result2 );
} 

if ( !isset( $_POST['op'] ) ) {
    $op = isset( $_GET['op'] ) ? $_GET['op'] : 'main';
   } else {
    $op = isset( $_POST['op'] ) ? $_POST['op'] : 'main';
   }

switch ( $op ) {
    case 'move':
        if ( !isset($_POST['ok']) ) {
            $cid = ( isset($_POST['cid']) ) ? $_POST['cid'] : $_GET['cid'];

            icms_cp_header();
            mytube_adminmenu( 3, _AM_MYTUBE_MCATEGORY );

            $mytubetree = new icms_view_Tree( icms::$xoopsDB -> prefix('mytube_cat'), 'cid', 'pid' );
            $sform = new icms_form_Theme( _AM_MYTUBE_CCATEGORY_MOVE, 'move', '' );
            ob_start();
              $mytubetree -> makeMySelBox( 'title', 'title', 0 , 0, 'target' );
              $sform -> addElement( new icms_form_elements_Label( _AM_MYTUBE_BMODIFY, ob_get_contents() ) );
            ob_end_clean();
            $create_tray = new icms_form_elements_Tray( '', '' );
            $create_tray -> addElement( new icms_form_elements_Hidden( 'source', $cid ) );
            $create_tray -> addElement( new icms_form_elements_Hidden( 'ok', 1 ) );
            $create_tray -> addElement( new icms_form_elements_Hidden( 'op', 'move' ) );
			
            $butt_save = new icms_form_elements_Button('', '', _AM_MYTUBE_BMOVE, 'submit');
            $butt_save -> setExtra( 'onclick="this.form.elements.op.value=\'move\'"' );
            $create_tray -> addElement( $butt_save );
			
            $butt_cancel = new icms_form_elements_Button( '', '', _AM_MYTUBE_BCANCEL, 'submit' );
            $butt_cancel -> setExtra('onclick="this.form.elements.op.value=\'cancel\'"');
            $create_tray -> addElement( $butt_cancel );
			
            $sform -> addElement( $create_tray );
            $sform -> display();
            icms_cp_footer();
        } else {

            $source = $_POST['source'];
            $target = $_POST['target'];
            if ( $target == $source ) {
                redirect_header( "category.php?op=move&ok=0&cid=$source", 5, _AM_MYTUBE_CCATEGORY_MODIFY_FAILED );
            }
            if ( !$target ) {
                redirect_header( "category.php?op=move&ok=0&cid=$source", 5, _AM_MYTUBE_CCATEGORY_MODIFY_FAILEDT );
            } 
            $sql = 'UPDATE ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' SET cid=' . $target . ' WHERE cid=' . $source;
            $result = icms::$xoopsDB -> queryF( $sql );
            $error = _AM_MYTUBE_DBERROR . ': <br /><br />' . $sql;
            if ( !$result ) {
                trigger_error( $error, E_USER_ERROR );
            } 
            redirect_header( 'category.php?op=default', 1, _AM_MYTUBE_CCATEGORY_MODIFY_MOVED );
            exit();
        } 
        break;

    case 'addCat':

        $groups = isset( $_REQUEST['groups'] ) ? $_REQUEST['groups'] : array();
        $cid = ( isset( $_REQUEST['cid'] ) ) ? $_REQUEST['cid'] : 0;
        $pid = ( isset( $_REQUEST['pid'] ) ) ? $_REQUEST['pid'] : 0;
        $weight = ( isset( $_REQUEST['weight'] ) && $_REQUEST['weight'] > 0 ) ? $_REQUEST['weight'] : 0;
        $title = icms_core_DataFilter::addSlashes( $_REQUEST['title'] );
        $descriptionb = icms_core_DataFilter::addSlashes( $_REQUEST['description'] );
        $imgurl = ( $_REQUEST['imgurl'] && $_REQUEST['imgurl'] != 'blank.gif' ) ? icms_core_DataFilter::addSlashes( $_REQUEST['imgurl'] ) : '';

        if ( !$cid ) {
            $cid = 0;
            $sql = "INSERT INTO " . icms::$xoopsDB -> prefix( 'mytube_cat' ) . " (cid, pid, title, imgurl, description, weight ) VALUES ('', $pid, '$title', '$imgurl', '$descriptionb', '$weight' )";
            if ( $cid == 0 ) {
                $newid = icms::$xoopsDB -> getInsertId();
            }

            // Notify of new category
            $tags = array();
            $tags['CATEGORY_NAME'] = $title;
            $tags['CATEGORY_URL'] = ICMS_URL . '/modules/' . icms::$module -> getVar( 'dirname' ) . '/viewcat.php?cid=' . $newid;
            $notification_handler = icms::handler('icms_data_notification');
            $notification_handler -> triggerEvent( 'global', 0, 'new_category', $tags );
            $database_mess = _AM_MYTUBE_CCATEGORY_CREATED;
        } else {
          if ( $cid == $pid ) {
            redirect_header( 'category.php', 1, _AM_MYTUBE_ERROR_CATISCAT );
            exit();
          }
            $sql = "UPDATE " . icms::$xoopsDB -> prefix( 'mytube_cat' ) . " SET title ='$title', imgurl='$imgurl', pid =$pid, description='$descriptionb', weight='$weight' WHERE cid=" . intval($cid) ;
            $database_mess = _AM_MYTUBE_CCATEGORY_MODIFIED;
        } 
        if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
            icms::$logger -> handleError( E_USER_WARNING, $sql, __FILE__, __LINE__ );
            return false;
        } 
        redirect_header( 'category.php', 1, $database_mess );
        break;

    case 'del':

        $cid = ( isset( $_POST['cid'] ) && is_numeric( $_POST['cid'] ) ) ? intval( $_POST['cid'] ) : intval( $_GET['cid'] );
        $ok = ( isset( $_POST['ok'] ) && $_POST['ok'] == 1 ) ? intval( $_POST['ok'] ) : 0;
        $mytubetree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );

        if ( $ok == 1 ) {
            // get all subcategories under the specified category
            $arr = $mytubetree -> getAllChildId( $cid );
            $lcount = count( $arr );

            for ( $i = 0; $i < $lcount; $i++ ) {
                // get all links in each subcategory
                $result = icms::$xoopsDB -> query( 'SELECT lid FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE cid=' . intval( $arr[$i] ) );
                // now for each linkload, delete the text data and vote ata associated with the linkload
                while ( list( $lid ) = icms::$xoopsDB -> fetchRow( $result ) ) {
                    $sql = sprintf( 'DELETE FROM %s WHERE lid=%u', icms::$xoopsDB -> prefix( 'mytube_votedata' ), intval( $lid ) );
                    icms::$xoopsDB -> query( $sql );
                    $sql = sprintf( 'DELETE FROM %s WHERE lid=%u', icms::$xoopsDB -> prefix( 'mytube_videos' ), intval( $lid ) );
                    icms::$xoopsDB -> query( $sql );
                    // delete comments
                    xoops_comment_delete( icms::$module -> getVar( 'mid' ), $lid );
                } 
                // all links for each subcategory is deleted, now delete the subcategory data
                $sql = sprintf( 'DELETE FROM %s WHERE cid=%u', icms::$xoopsDB -> prefix( 'mytube_cat' ), intval( $arr[$i] ) );
                icms::$xoopsDB -> query( $sql );
				// delete altcat entries
				$sql = sprintf( 'DELETE FROM %s WHERE cid=%u', icms::$xoopsDB -> prefix( 'mytube_altcat' ), $arr[$i] );
                icms::$xoopsDB -> query( $sql );
            } 
            // all subcategory and associated data are deleted, now delete category data and its associated data
            $result = icms::$xoopsDB -> query( 'SELECT lid FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE cid=' . intval( $cid ) );
            while ( list( $lid ) = icms::$xoopsDB -> fetchRow( $result ) ) {
                $sql = sprintf( 'DELETE FROM %s WHERE lid=%u', icms::$xoopsDB -> prefix( 'mytube_videos' ), intval( $lid ) );
                icms::$xoopsDB -> query( $sql );
                // delete comments
                xoops_comment_delete( icms::$module -> getVar( 'mid' ), intval( $lid ) );
                $sql = sprintf( 'DELETE FROM %s WHERE lid=%u', icms::$xoopsDB -> prefix( 'mytube_votedata' ), intval( $lid ) );
                icms::$xoopsDB -> query( $sql );
            }
			
			// delete altcat entries
			$sql = sprintf( 'DELETE FROM %s WHERE cid=%u', icms::$xoopsDB -> prefix( 'mytube_altcat' ), intval( $cid ) );
            icms::$xoopsDB -> query( $sql );
			
			// delete category			
            $sql = sprintf( 'DELETE FROM %s WHERE cid=%u', icms::$xoopsDB -> prefix( 'mytube_cat' ), intval( $cid ) );
            $error = _AM_MYTUBE_DBERROR . ': <br /><br />' . $sql;
            xoops_groupperm_deletebymoditem( icms::$module -> getVar( 'mid' ), 'MyTubeCatPerm', intval( $cid ) );
            if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
                trigger_error( $error, E_USER_ERROR );
            } 
			
			// delete group permissions
            xoops_groupperm_deletebymoditem( icms::$module -> getVar( 'mid' ), 'MyTubeCatPerm', $cid );
            if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
                trigger_error( $error, E_USER_ERROR );
            }
			xoops_groupperm_deletebymoditem( icms::$module -> getVar( 'mid' ), 'MyTubeSubPerm', $cid );
            if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
                trigger_error( $error, E_USER_ERROR );
            }
			xoops_groupperm_deletebymoditem( icms::$module -> getVar( 'mid' ), 'MyTubeAppPerm', $cid );
            if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
                trigger_error( $error, E_USER_ERROR );
            }
			xoops_groupperm_deletebymoditem( icms::$module -> getVar( 'mid' ), 'MyTubeAutoApp', $cid );
            if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
                trigger_error( $error, E_USER_ERROR );
            }
			xoops_groupperm_deletebymoditem( icms::$module -> getVar( 'mid' ), 'MyTubeRatePerms', $cid );
            if ( !$result = icms::$xoopsDB -> query( $sql ) ) {
                trigger_error( $error, E_USER_ERROR );
            }
			
            redirect_header( 'category.php', 1, _AM_MYTUBE_CCATEGORY_DELETED );
            exit();
        } else {
            icms_cp_header();
				icms_core_Message::confirm( array( 'op' => 'del', 'cid' => intval( $cid ) , 'ok' => 1 ), 'category.php', _AM_MYTUBE_CCATEGORY_AREUSURE );
            icms_cp_footer();
        } 
        break;

    case 'modCat':
        $cid = ( isset( $_POST['cid'] ) ) ? $_POST['cid'] : 0;
        icms_cp_header();
			mytube_adminmenu( 6, _AM_MYTUBE_MCATEGORY );
			createcat( $cid );
        icms_cp_footer();
        break;

    case 'main':
        default:
        icms_cp_header();
        mytube_adminmenu( 6, _AM_MYTUBE_MCATEGORY );

        $mytree = new icms_view_Tree( icms::$xoopsDB -> prefix( 'mytube_cat' ), 'cid', 'pid' );
        $sform  = new icms_form_Theme( _AM_MYTUBE_CCATEGORY_MODIFY, 'category', '' );
        $totalcats = mytube_totalcategory();

        if ( $totalcats > 0 ) {
            ob_start();
				$mytree -> makeMySelBox( 'title', 'title' );
				$sform  -> addElement( new icms_form_elements_Label( _AM_MYTUBE_CCATEGORY_MODIFY_TITLE, ob_get_contents() ) );
            ob_end_clean();
            $dup_tray = new icms_form_elements_Tray( '', '' );
            $dup_tray -> addElement( new icms_form_elements_Hidden( 'op', 'modCat' ) );
            $butt_dup = new icms_form_elements_Button( '', '', _AM_MYTUBE_BMODIFY, 'submit' );
            $butt_dup -> setExtra( 'onclick="this.form.elements.op.value=\'modCat\'"' );
            $dup_tray -> addElement( $butt_dup );
            $butt_move = new icms_form_elements_Button( '', '', _AM_MYTUBE_BMOVE, 'submit' );
            $butt_move -> setExtra( 'onclick="this.form.elements.op.value=\'move\'"' );
            $dup_tray -> addElement( $butt_move );
            $butt_dupct = new icms_form_elements_Button( '', '', _AM_MYTUBE_BDELETE, 'submit' );
            $butt_dupct -> setExtra( 'onclick="this.form.elements.op.value=\'del\'"' );
            $dup_tray -> addElement( $butt_dupct );
            $sform -> addElement( $dup_tray );
            $sform -> display();
			echo '<br />';
        } 
        createcat(0);
        icms_cp_footer();
        break;
}
?>