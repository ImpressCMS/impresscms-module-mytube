<?php
/*
* About this RSSFit plug-in
*
* Author :
*   DuGris - http://www.dugris.info
* 
* Modified by :
*   McDonald
*
* Requirements:
*   Module : RSSFit  - http://www.brandycoke.com
*   verision : 1.20
*
*   Module : XoopsTube - http://members.lycos.nl/mcdonaldsstore
*   Version : 1.0.1
*/ 

if( !defined('RSSFIT_ROOT_PATH') ){ exit(); }
class RssfitXoopstube{
	var $dirname = 'xoopstube';
	var $modname;
        var $mid;
	var $grab;

	function RssfitXoopstube(){
	}

	function loadModule(){
		global $module_handler;
		$mod = $module_handler->getByDirname($this->dirname);
		if( !$mod || !$mod->getVar('isactive') ){
			return false;
		}
		$this->modname = $mod->getVar('name');
		$this->mid = $mod->getVar('mid');
		return $mod;
	}

	function grabEntries(&$obj){
		global $xoopsDB, $xoopsUser;

		$groups = is_object( $xoopsUser ) ? $xoopsUser -> getGroups() : XOOPS_GROUP_ANONYMOUS;
		$gperm_handler = &xoops_gethandler( 'groupperm' );

		$myts =& MyTextSanitizer::getInstance();
		$ret = array();
		$i = 0;
		$sql = "SELECT lid, cid, title, url, date, description FROM ".$xoopsDB->prefix('xoopstube_videos')." WHERE status>0 ORDER BY date DESC";
		$result = $xoopsDB->query($sql, $this->grab, 0);
		while( $row = $xoopsDB->fetchArray($result) ){
            if ( $gperm_handler -> checkRight( 'XTubeCatPerm', $row['cid'], $groups, $this->mid ) ) {
			//	required
				$ret[$i]['title'] = $row['title'];
				$ret[$i]['link'] = $ret[$i]['guid'] = XOOPS_URL . '/modules/xoopstube/singlevideo.php?cid=' . $row['cid'] . '&amp;lid=' . $row['lid'];
				$ret[$i]['timestamp'] = $row['date'];
				$ret[$i]['description'] = $row['description'];
			//	optional
				$ret[$i]['category'] = $this->modname;
				$ret[$i]['domain'] = XOOPS_URL.'/modules/'.$this->dirname.'/';
				$i++;
			}
		}
		return $ret;
	}
}
?>