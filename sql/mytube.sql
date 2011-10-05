# MySQL file for MyTube
# Version: 1.0.1
# Author: McDonald

#
# Table structure for table 'mytube_altcat'
#

CREATE TABLE `mytube_altcat` (
  `lid` int(11) unsigned NOT NULL default '0',
  `cid` int(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`lid`,`cid`)
) ENGINE=MyISAM COMMENT='MyTube by McDonald';

#
# Table structure for table 'mytube_broken'
#

CREATE TABLE `mytube_broken` (
  `reportid` int(5) NOT NULL auto_increment,
  `lid` int(11) NOT NULL default '0',
  `sender` int(11) NOT NULL default '0',
  `ip` varchar(20) NOT NULL default '',
  `date` varchar(11) NOT NULL default '0',
  `confirmed` int(1) NOT NULL default '0',
  `acknowledged` int(1) NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`reportid`),
  KEY `lid` (`lid`),
  KEY `sender` (`sender`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM COMMENT='MyTube by McDonald' AUTO_INCREMENT=1;

#
# Table structure for table 'mytube_cat'
#

CREATE TABLE `mytube_cat` (
  `cid` int(5) unsigned NOT NULL auto_increment,
  `pid` int(5) unsigned NOT NULL default '0',
  `title` varchar(50) NOT NULL default '',
  `imgurl` varchar(150) NOT NULL default '',
  `description` varchar(255) NOT NULL default '',
  `total` int(11) NOT NULL default '0',
  `weight` int(11) NOT NULL default '0',
  `client_id` int(5) NOT NULL default '0',
  `banner_id` int(5) NOT NULL default '0',
  PRIMARY KEY  (cid),
  KEY pid (pid)
) ENGINE=MyISAM COMMENT='MyTube by McDonald' AUTO_INCREMENT=1;

#
# Table structure for table 'mytube_indexpage'
#

CREATE TABLE `mytube_indexpage` (
  `indeximage` varchar(255) NOT NULL default 'blank.gif',
  `indexheading` varchar(255) NOT NULL default 'MyTube',
  `indexheader` text NOT NULL,
  `indexfooter` text NOT NULL,
  `indexheaderalign` varchar(25) NOT NULL default 'left',
  `indexfooteralign` varchar(25) NOT NULL default 'center',
  `lastvideosyn` tinyint(1) NOT NULL default '0',
  `lastvideostotal` varchar(5) NOT NULL default '5',
  FULLTEXT KEY `indexheading` (`indexheading`),
  FULLTEXT KEY `indexheader` (`indexheader`),
  FULLTEXT KEY `indexfooter` (`indexfooter`)
) ENGINE=MyISAM COMMENT='MyTube by McDonald';



INSERT INTO `mytube_indexpage` (`indeximage`,`indexheading`,`indexheader`,`indexfooter`,`indexheaderalign`,`indexfooteralign`) VALUES ('logo-en.png','','Please report any unavailable video clips by using the [i]Report Broken[/i] option. Thanks!','<a href=\"http://www.adobe.com/go/getflashplayer\" target=\"_blank\"><img src=\"images/get_flash_player.png\" alt=\"Get Adobe Flash Player\" border=\"0\" /></a>','left','left');


#
# Table structure for table 'mytube_mod'
#

CREATE TABLE `mytube_mod` (
  `requestid` int(11) NOT NULL auto_increment,
  `lid` int(11) unsigned NOT NULL default '0',
  `cid` int(5) unsigned NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  `vidid` varchar(255) NOT NULL default '',
  `screenshot` varchar(255) NOT NULL default '',
  `submitter` int(11) NOT NULL default '0',
  `publisher` text NOT NULL,
  `status` tinyint(2) NOT NULL default '0',
  `date` int(10) NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0',
  `rating` double(6,4) NOT NULL default '0.0000',
  `votes` int(11) unsigned NOT NULL default '0',
  `comments` int(11) unsigned NOT NULL default '0',
  `vidsource` int(11) unsigned NOT NULL default '0',
  `published` int(10) NOT NULL default '0',
  `expired` int(10) NOT NULL default '0',
  `updated` int(11) NOT NULL default '0',
  `offline` tinyint(1) NOT NULL default '0',
  `description` text NOT NULL,
  `modifysubmitter` int(11) NOT NULL default '0',
  `requestdate` int(11) NOT NULL default '0',
  `vidrating` tinyint(1) NOT NULL default '0',
  `time` varchar(7) NOT NULL default '0:00:00',
  `keywords` varchar(255) NOT NULL default '',
  `item_tag` text NOT NULL default '',
  `picurl` text NOT NULL default '',
  PRIMARY KEY  (`requestid`)
) ENGINE=MyISAM COMMENT='MyTube by McDonald' AUTO_INCREMENT=1;


#
# Table structure for table 'mytube_videos'
#

CREATE TABLE `mytube_videos` (
  `lid` int(11) unsigned NOT NULL auto_increment,
  `cid` int(5) unsigned NOT NULL default '0',
  `title` varchar(100) NOT NULL default '',
  `vidid` text NOT NULL,
  `screenshot` varchar(255) NOT NULL default '',
  `submitter` int(11) NOT NULL default '0',
  `publisher` varchar(255) NOT NULL default '',
  `status` tinyint(2) NOT NULL default '0',
  `date` int(10) NOT NULL default '0',
  `hits` int(11) unsigned NOT NULL default '0',
  `rating` double(6,4) NOT NULL default '0.0000',
  `votes` int(11) unsigned NOT NULL default '0',
  `comments` int(11) unsigned NOT NULL default '0',
  `vidsource` int(11) unsigned NOT NULL default '0',
  `published` int(11) NOT NULL default '0',
  `expired` int(10) NOT NULL default '0',
  `updated` int(11) NOT NULL default '0',
  `offline` tinyint(1) NOT NULL default '0',
  `description` longtext NOT NULL,
  `ipaddress` varchar(120) NOT NULL default '0',
  `notifypub` int(1) NOT NULL default '0',
  `vidrating` tinyint(1) NOT NULL default '0',
  `time` varchar(7) NOT NULL default '0:00:00',
  `keywords` varchar(255) NOT NULL default '',
  `item_tag` text NOT NULL default '',
  `picurl` text NOT NULL default '',
  `nice_url` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`lid`),
  KEY `cid` (`cid`),
  KEY `status` (`status`),
  KEY `title` (`title`(40))
) ENGINE=MyISAM COMMENT='MyTube by McDonald' AUTO_INCREMENT=1 ;

#
# Table structure for table 'mytube_votedata'
#

CREATE TABLE `mytube_votedata` (
  `ratingid` int(11) unsigned NOT NULL auto_increment,
  `lid` int(11) unsigned NOT NULL default '0',
  `ratinguser` int(11) NOT NULL default '0',
  `rating` tinyint(3) unsigned NOT NULL default '0',
  `ratinghostname` varchar(60) NOT NULL default '',
  `ratingtimestamp` int(10) NOT NULL default '0',
  `title` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`ratingid`),
  KEY `ratinguser` (`ratinguser`),
  KEY `ratinghostname` (`ratinghostname`),
  KEY `lid` (`lid`)
) ENGINE=MyISAM COMMENT='MyTube by McDonald' AUTO_INCREMENT=1 ;

#
# Table structure for table 'imlinks_configs'
#

CREATE TABLE `mytube_configs` (
  `rssactive` INT(1) NOT NULL DEFAULT '1',
  `rsstitle` VARCHAR(128) NOT NULL DEFAULT '',
  `rsslink` VARCHAR(128) NOT NULL DEFAULT '',
  `rssdsc` VARCHAR(128) NOT NULL DEFAULT '',
  `rssimgurl` VARCHAR(255) NOT NULL DEFAULT '',
  `rsswidth` TINYINT(8) NOT NULL DEFAULT '0',
  `rssheight` TINYINT(8) NOT NULL DEFAULT '0',
  `rssimgtitle` VARCHAR(128) NOT NULL DEFAULT '',
  `rssimglink` VARCHAR(255) NOT NULL DEFAULT '',
  `rssttl` TINYINT(8) NOT NULL DEFAULT '0',
  `rsswebmaster` VARCHAR(255) NOT NULL DEFAULT '',
  `rsseditor` VARCHAR(255) NOT NULL DEFAULT '',
  `rsscategory` VARCHAR(128) NOT NULL DEFAULT '',
  `rssgenerator` VARCHAR(128) NOT NULL DEFAULT '',
  `rsscopyright` VARCHAR(128) NOT NULL DEFAULT '',
  `rsstotal` TINYINT(8) NOT NULL DEFAULT '0',
  `rssofftitle` VARCHAR(128) NOT NULL DEFAULT '',
  `rssoffdsc` VARCHAR(255) NOT NULL DEFAULT ''
) ENGINE=MYISAM COMMENT='MyTube by McDonald' ;

INSERT INTO mytube_configs (rssactive,rsstitle,rsslink,rssdsc,rssimgurl,rsswidth,rssheight,rssimgtitle,rssimglink,rssttl,rsswebmaster,rsseditor,rsscategory,rssgenerator,rsscopyright,rsstotal,rssofftitle,rssoffdsc) VALUES ('1', '', '', '', '', '', '', '', '', '60', '', '', '', '', '', '15', '', '');