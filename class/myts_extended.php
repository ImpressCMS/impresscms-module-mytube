<?php
/**
 * $Id: myts_extended.php
 * Module: MyTube
 */

class xtubeTextSanitizer extends MyTextSanitizer {
    function xtubeTextSanitizer() {
    } 
    function htmlSpecialCharsStrip( $text ) {
	return $this -> htmlSpecialChars( $this -> stripSlashesGPC( $text) );
    } 
}
?>