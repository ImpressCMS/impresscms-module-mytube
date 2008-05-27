<?php
/**
 * $Id: update.php
 * Module: MyTube
 */

if (!defined("XOOPS_ROOT_PATH")) {
 	die("XOOPS root path not defined");
}

global $xoopsDB;

$i=0;
//Make changes to table xoopstube_videos
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " CHANGE forumid vidsource TINYINT(1) NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " CHANGE url vidid TEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " CHANGE urlrating vidrating TINYINT(1) NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " MODIFY description LONGTEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " ADD COLUMN item_tag TEXT NOT NULL default '' AFTER keywords");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " ADD COLUMN picurl TEXT NOT NULL default '' AFTER item_tag");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " MODIFY keywords TEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_videos') . " MODIFY vidsource TINYINT(1) UNSIGNED NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);


//Make changes to table xoopstube_cat
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_cat') . " ADD COLUMN client_id INT(5) NOT NULL default '0' AFTER weight");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_cat') . " ADD COLUMN banner_id INT(5) NOT NULL default '0' AFTER client_id");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);

//Make changes to table xoopstube_mod
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " ADD COLUMN time VARCHAR(5) NOT NULL default '00:00' AFTER vidrating");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " ADD COLUMN keywords TEXT NOT NULL default '' AFTER time");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " ADD COLUMN item_tag TEXT NOT NULL default '' AFTER keywords");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " ADD COLUMN picurl TEXT NOT NULL default '' AFTER item_tag");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " MODIFY description LONGTEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " CHANGE forumid vidsource TINYINT(1) NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " CHANGE url vidid TEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " CHANGE urlrating vidrating TINYINT(1) NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " MODIFY keywords TEXT NOT NULL default ''");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);
$i++;
$ret[$i] = true;
$query[$i] = sprintf("ALTER TABLE " . $xoopsDB -> prefix( 'xoopstube_mod') . " MODIFY vidsource TINYINT(1) UNSIGNED NOT NULL default '0'");
$ret[$i] = $ret[$i] && $xoopsDB->query($query[$i]);

?>