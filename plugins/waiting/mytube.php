<?php
/*************************************************************************/
# Waiting Contents Extensible                                             #
# Plugin for module MyTube                                                #
#                                                                         #
# Author: McDonald                                                        #
/*************************************************************************/
function b_waiting_mytube() {
	
	$ret = array() ;

	// mytube waiting
	$block = array();
	$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_videos' ) . ' WHERE status=0' );
	if ( $result ) {
		$block['adminlink'] = ICMS_URL . '/modules/mytube/admin/newvideos.php';
		list($block['pendingnum']) = icms::$xoopsDB -> fetchRow( $result );
		$block['lang_linkname'] = _PI_WAITING_WAITINGS ;
	}
	$ret[] = $block ;

	// mytube broken
	$block = array();
	$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_broken' ) );
	if ( $result ) {
		$block['adminlink'] = ICMS_URL . '/modules/mytube/admin/brokenvideo.php';
		list($block['pendingnum']) = icms::$xoopsDB -> fetchRow( $result );
		$block['lang_linkname'] = _PI_WAITING_BROKENS ;
	}
	$ret[] = $block ;

	// mytube modreq
	$block = array();
	$result = icms::$xoopsDB -> query( 'SELECT COUNT(*) FROM ' . icms::$xoopsDB -> prefix( 'mytube_mod' ) );
	if ( $result ) {
		$block['adminlink'] = ICMS_URL . '/modules/mytube/admin/modifications.php';
		list($block['pendingnum']) = icms::$xoopsDB -> fetchRow( $result );
		$block['lang_linkname'] = _PI_WAITING_MODREQS ;
	}
	$ret[] = $block ;
	return $ret;
}
?>