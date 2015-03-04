<?php
/**
 * $Id: modinfo.php
 * Module: MyTube
 * Language: english
 * Format: UTF-8
 */

// Module Info
// The name of this module
define("_MI_MYTUBE_NAME","MyTube");

// A brief description of this module
define("_MI_MYTUBE_DESC","With the module <em>MyTube</em> you can add and categorise movies from sites like YouTube, DailyMotion, LiveLeak, etc. to your website.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYTUBE_BNAME1","Recent videos (t)");
define("_MI_MYTUBE_BNAME2","Recent videos");
define("_MI_MYTUBE_BNAME3","Top videos (t)");
define("_MI_MYTUBE_BNAME4","Top videos");
define("_MI_MYTUBE_BNAME5","Recent videos (h)");
define("_MI_MYTUBE_BNAME6","Random videos");
define("_MI_MYTUBE_BNAME7","Random videos (h)");

// Sub menu titles
define("_MI_MYTUBE_SMNAME1","Submit");
define("_MI_MYTUBE_SMNAME2","Popular");
define("_MI_MYTUBE_SMNAME3","Top Rated");
define("_MI_MYTUBE_SMNAME4","Latest Listings");

// Names of admin menu items
define("_MI_MYTUBE_BINDEX","Main Index");
define("_MI_MYTUBE_INDEXPAGE","Index Page");
define("_MI_MYTUBE_MCATEGORY","Category Management");
define("_MI_MYTUBE_MVIDEOS","Video Management");
define("_MI_MYTUBE_MUPLOADS","Image Upload");
define("_MI_MYTUBE_PERMISSIONS","Permission Settings");
define("_MI_MYTUBE_BLOCKADMIN","Block Settings");
define("_MI_MYTUBE_MVOTEDATA","Votes");

// Title of config items
define('_MI_MYTUBE_POPULAR', 'video Popular Count');
define('_MI_MYTUBE_POPULARDSC', 'The number of hits before a video status will be considered as popular.');

define("_MI_MYTUBE_ICONDISPLAY","videos Popular and New:");
define("_MI_MYTUBE_DISPLAYICONDSC", "Select how to display the popular and new icons in video listing.");
define("_MI_MYTUBE_DISPLAYICON1", "Display As Icons");
define("_MI_MYTUBE_DISPLAYICON2", "Display As Text");
define("_MI_MYTUBE_DISPLAYICON3", "Do Not Display");

define("_MI_MYTUBE_DAYSNEW","videos Days New:");
define("_MI_MYTUBE_DAYSNEWDSC","The number of days a video status will be considered as new.");

define("_MI_MYTUBE_DAYSUPDATED","videos Days Updated:");
define("_MI_MYTUBE_DAYSUPDATEDDSC","The amount of days a video status will be considered as updated.");

define('_MI_MYTUBE_PERPAGE', 'video Listing Count:');
define('_MI_MYTUBE_PERPAGEDSC', 'Number of videos to display in each category listing.');

define("_MI_MYTUBE_ADMINPAGE", "Admin Index Videos Count:");
define("_MI_MYTUBE_AMDMINPAGEDSC", "Number of new Videos to display in module admin area.");

define("_MI_MYTUBE_ARTICLESSORT", "Default video Order:");
define("_MI_MYTUBE_ARTICLESSORTDSC", "Select the default order for the video listings.");

define("_MI_MYTUBE_SORTCATS", "Sort categories by:");
define("_MI_MYTUBE_SORTCATSDSC", "Select how categories and sub-categories are sorted.");

define('_MI_MYTUBE_SUBCATS', 'Sub-Categories:');
define('_MI_MYTUBE_SUBCATSDSC', 'Select Yes to display sub-categories. Selecting No will hide sub-categories from the listings');

define('_MI_MYTUBE_EDITOR', "Editor to use (admin):");
define('_MI_MYTUBE_EDITORCHOICE', "Select the editor to use for admin side.");
define('_MI_MYTUBE_EDITORUSER', "Editor to use (user):");
define('_MI_MYTUBE_EDITORCHOICEUSER', "Select the editor to use for user side.");
define("_MI_MYTUBE_FORM_DHTML","DHTML");
define("_MI_MYTUBE_FORM_COMPACT","Compact");
define("_MI_MYTUBE_FORM_SPAW","Spaw Editor");
define("_MI_MYTUBE_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_MYTUBE_FORM_FCK","FCK Editor");
define("_MI_MYTUBE_FORM_KOIVI","Koivi Editor");
define("_MI_MYTUBE_FORM_TINYEDITOR","TinyEditor");

define('_MI_MYTUBE_USESHOTS', 'Display Screenshot Images?');
define('_MI_MYTUBE_USESHOTSDSC', 'Select yes to display screenshot images for each video item');

define('_MI_MYTUBE_USETHUMBS', 'Use Thumb Nails:');
define("_MI_MYTUBE_USETHUMBSDSC", "Supported link types: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links will use thumb nails for images. Set to 'No' to use orginal image if the server does not support this option.</div>");

define("_MI_MYTUBE_IMGUPDATE", "Update Thumbnails?");
define("_MI_MYTUBE_IMGUPDATEDSC", "If selected Thumbnail images will be updated at each page render, otherwise the first thumbnail image will be used regardless. <br /><br />");

define('_MI_MYTUBE_SHOTWIDTH', 'Screenshot Display Width');
define('_MI_MYTUBE_SHOTWIDTHDSC', 'Display width for screenshot image');

define('_MI_MYTUBE_SHOTHEIGHT', 'Screenshot Display Height');
define('_MI_MYTUBE_SHOTHEIGHTDSC', 'Display height for screenshot image');

define('_MI_MYTUBE_MAINIMGDIR','Main Image Directory');

define('_MI_MYTUBE_CATEGORYIMG','Category Image Upload Directory');

define('_MI_MYTUBE_DATEFORMAT', 'Timestamp:');
define('_MI_MYTUBE_DATEFORMATDSC', 'Default Timestamp for MyTube');

define("_MI_MYTUBE_TOTALCHARS", "Set total amount of characters for description?");
define("_MI_MYTUBE_TOTALCHARSDSC", "Set total amount of characters for description on Index Page.");

define("_MI_MYTUBE_OTHERVIDEOS", "Show other videos submitted by Submitter?");
define("_MI_MYTUBE_OTHERVIDEOSDSC", "Select Yes if other videos of the submitter should be displayed.");

define("_MI_MYTUBE_SHOWSBOOKMARKS", "Show Social Bookmarks?");
define("_MI_MYTUBE_SHOWSBOOKMARKSDSC", "Select Yes if you want Social Bookmark icons to be displayed under video.");

define("_MI_MYTUBE_USEMETADESCR", "Generate meta description:");
define("_MI_MYTUBE_USEMETADSC", "With this option the meta description will be based on the video description.");

define("_MI_MYTUBE_USERTAGDESCR", "User can submit Tags:");
define("_MI_MYTUBE_USERTAGDSC", "Select Yes if user is allowed to submit tags.");

define('_MI_MYTUBE_SHOWDISCLAIMER', 'Show Disclaimer before User Submission?');
define('_MI_MYTUBE_SHOWDISCLAIMERDSC', 'Before a User can submit a Video show the Entry regulations?');

define('_MI_MYTUBE_DISCLAIMER', 'Enter Submission Disclaimer Text:');

define('_MI_MYTUBE_SHOWVIDEODISCL', 'Show Disclaimer before User video?');
define('_MI_MYTUBE_SHOWVIDEODISCLDSC', 'Show video regulations before open a video?');

define('_MI_MYTUBE_VIDEODISCLAIMER', 'Enter video Disclaimer Text:');

define('_MI_MYTUBE_COPYRIGHT', 'Copyright Notice:');
define('_MI_MYTUBE_COPYRIGHTDSC', 'Select to display a copyright notice on video page.');

define('_MI_MYTUBE_CHECKHOST', 'Disallow direct video linking? (leeching)');
define('_MI_MYTUBE_REFERERS', 'These sites can directly video to your videos <br />Separate with #');
define("_MI_MYTUBE_ANONPOST","Anonymous User Submission:");
define("_MI_MYTUBE_ANONPOSTDSC","Allow Anonymous users to submit or upload to your website?");
define('_MI_MYTUBE_AUTOAPPROVE','Auto Approve Submitted videos');
define('_MI_MYTUBE_AUTOAPPROVEDSC','Select to approve submitted videos without moderation.');

define('_MI_MYTUBE_MAXFILESIZE','Upload Size (KB)');
define('_MI_MYTUBE_MAXFILESIZEDSC','Maximum video size permitted with video uploads.');
define('_MI_MYTUBE_IMGWIDTH','Upload Image width');
define('_MI_MYTUBE_IMGWIDTHDSC','Maximum image width permitted when uploading image videos');
define('_MI_MYTUBE_IMGHEIGHT','Upload Image height');
define('_MI_MYTUBE_IMGHEIGHTDSC','Maximum image height permitted when uploading image videos');

define('_MI_MYTUBE_UPLOADDIR','Upload Directory (No trailing slash)');
define('_MI_MYTUBE_ALLOWSUBMISS','User Submissions:');
define('_MI_MYTUBE_ALLOWSUBMISSDSC','Allow Users to Submit new videos');
define('_MI_MYTUBE_ALLOWUPLOADS','User Uploads:');
define('_MI_MYTUBE_ALLOWUPLOADSDSC','Allow Users to upload videos directly to your website');
define('_MI_MYTUBE_SCREENSHOTS','Screenshots Upload Directory');

define("_MI_MYTUBE_SUBMITART", "video Submission:");
define("_MI_MYTUBE_SUBMITARTDSC", "Select groups that can submit new videos.");
define("_MI_MYTUBE_RATINGGROUPS", "video Ratings:");
define("_MI_MYTUBE_RATINGGROUPSDSC", "Select groups that can rate a video.");

define("_MI_MYTUBE_QUALITY", "Thumb Nail Quality:");
define("_MI_MYTUBE_QUALITYDSC", "Quality Lowest: 0 Highest: 100");
define("_MI_MYTUBE_KEEPASPECT", "Keep Image Aspect Ratio?");
define("_MI_MYTUBE_KEEPASPECTDSC", "");

define("_MI_MYTUBE_TITLE", "Title");
define("_MI_MYTUBE_RATING", "Rating");
define("_MI_MYTUBE_WEIGHT", "Weight");
define("_MI_MYTUBE_POPULARITY", "Popularity");
define("_MI_MYTUBE_SUBMITTED2", "Submission Date");

// Text for notifications
define('_MI_MYTUBE_GLOBAL_NOTIFY', 'Global');
define('_MI_MYTUBE_GLOBAL_NOTIFYDSC', 'Global videos notification options.');
define('_MI_MYTUBE_CATEGORY_NOTIFY', 'Category');
define('_MI_MYTUBE_CATEGORY_NOTIFYDSC', 'Notification options that apply to the current video category.');
define('_MI_MYTUBE_VIDEO_NOTIFY', 'Video');
define('_MI_MYTUBE_FILE_NOTIFYDSC', 'Notification options that apply to the current video.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'New Category');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notify me when a new video category is created.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Receive notification when a new video category is created.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New video category');

define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Modify Video Requested');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Notify me of any video modification request.');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Receive notification when any video modification request is submitted.');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Video Modification Requested');

define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Broken Video Submitted');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Notify me of any broken video report.');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Receive notification when any broken video report is submitted.');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Broken Video Reported');

define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Video Submitted');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Notify me when any new video is submitted (awaiting approval).');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Receive notification when any new video is submitted (awaiting approval).');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New video submitted');

define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'New Video');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Notify me when any new video is posted.');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Receive notification when any new video is posted.');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New video');

define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Video Submitted');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notify me when a new video is submitted (awaiting approval) to the current category.');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Receive notification when a new video is submitted (awaiting approval) to the current category.');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New video submitted in category');

define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'New Video');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Notify me when a new video is posted to the current category.');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Receive notification when a new video is posted to the current category.');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : New video in category');

define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFY', 'Video Approved');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Notify me when this Video is approved.');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Receive notification when this video is approved.');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Video Approved');

define('_MI_MYTUBE_AUTHOR_INFO', "Developer Information");
define('_MI_MYTUBE_AUTHOR_NAME', "Developer");
define('_MI_MYTUBE_AUTHOR_DEVTEAM', "Development Team");
define('_MI_MYTUBE_AUTHOR_WEBSITE', "Developer website");
define('_MI_MYTUBE_AUTHOR_EMAIL', "Developer email");
define('_MI_MYTUBE_AUTHOR_CREDITS', "Credits");
define('_MI_MYTUBE_MODULE_INFO', "Module Development Information");
define('_MI_MYTUBE_MODULE_STATUS', "Development Status");
define('_MI_MYTUBE_MODULE_DEMO', "Demo Site");
define('_MI_MYTUBE_MODULE_SUPPORT', "Official support site");
define('_MI_MYTUBE_MODULE_BUG', "Report a bug for this module");
define('_MI_MYTUBE_MODULE_FEATURE', "Suggest a new feature for this module");
define('_MI_MYTUBE_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_MYTUBE_RELEASE', "Release Date");

define('_MI_MYTUBE_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY MCDONALD \"AS IS\" AND \"WITH ALL FAULTS.\"
MCDONALD MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND CONCERNING
THE QUALITY, SAFETY OR SUITABILITY OF THE SOFTWARE, EITHER EXPRESS OR
IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED WARRANTIES OF
MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, OR NON-INFRINGEMENT.
FURTHER, MCDONALD MAKES NO REPRESENTATIONS OR WARRANTIES AS TO THE TRUTH,
ACCURACY OR COMPLETENESS OF ANY STATEMENTS, INFORMATION OR MATERIALS
CONCERNING THE SOFTWARE THAT IS CONTAINED IN McDonalds Store WEBSITE. IN NO
EVENT WILL MCDONALD BE LIABLE FOR ANY INDIRECT, PUNITIVE, SPECIAL,
INCIDENTAL OR CONSEQUENTIAL DAMAGES HOWEVER THEY MAY ARISE AND EVEN IF
MCDONALD HAS BEEN PREVIOUSLY ADVISED OF THE POSSIBILITY OF SUCH DAMAGES..");

define('_MI_MYTUBE_AUTHOR_CREDITSTEXT',"WF-Projects Team");
define('_MI_MYTUBE_AUTHOR_BUGFIXES', "Bug Fix History");

// version 1.02
define("_MI_MYTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_MYTUBE_FORM_DHTMLEXT", "DHTML Extended");

// Version 1.03
define('_MI_MYTUBE_DATEFORMATADMIN', 'Timestamp administration:');
define('_MI_MYTUBE_DATEFORMATADMINDSC', 'Default admininstration Timestamp for MyTube');

// Version 1.04 RC-1
define('_MI_MYTUBE_VIDEODIR', 'Video upload directory:');
define('_MI_MYTUBE_VIDEODIRDSC', 'Set the directory for MyTube videos files');
define('_MI_MYTUBE_VIDEOIMGDIR', 'Video screenshots upload directory:');
define('_MI_MYTUBE_VIDEOIMGDIRDSC', 'Set the directory for MyTube video screenshots');
define('_MI_MYTUBE_FLVPLAYER_CREDITS', 'FLV Player');
define('_MI_MYTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player by LongTail Video (Jeroen Wijering)');
define('_MI_MYTUBE_VUPLOADS', 'Video upload');
define('_MI_MYTUBE_CATEGORYIMGDSC', '');
define('_MI_MYTUBE_MAINIMGDIRDSC', '');
define('_MI_MYTUBE_BNAME8', 'MyTube Sponsor Statistics' );
define('_MI_MYTUBE_ICONS_CREDITS', "Icons");

// Version 1.04 RC-2
define('_MI_MYTUBE_MODULE_MANUAL', 'Manual' );
define('_MI_MYTUBE_MODULE_MANUALWIKI', 'Wiki Manual' );
define('_MI_MYTUBE_MODULE_REQUESTNEWFEATURE', 'Request a new feature' );
define('_MI_MYTUBE_MODULE_SUBMITBUG', 'Submit a Bug' );
define("_MI_MYTUBE_BNAME9","MyTube Tag Cloud");
define("_MI_MYTUBE_BNAME10","MyTube Top Tags");
define('_MI_MYTUBE_FLVPLAYER_MANUAL', 'FLV Player Manual');
define('_MI_MYTUBE_FLVPLAYER_WIKI', 'JW Player Wiki');

// Version 1.05 RC-1
define( "_MI_MYTUBE_CATCOLUMNS", "Select amount of category columns:" );
define( "_MI_MYTUBE_CATCOLUMNSDSC", "Select the amount of columns, default is 2" );
define( "_MI_MYTUBE_RATINGDISPLAY", "Display rating features?" );
define( "_MI_MYTUBE_RATINGDISPLAYDSC", "Select <em>Yes</em> to display the Rating features. Select <em>No</em> if you don't want to display the Rating features." );
define( "_MI_MYTUBE_AUTOPLAY", "Autoplay the video" );
define( "_MI_MYTUBE_AUTOPLAYDSC", "Select <em>Yes</em> to have the videoclips play automatically." );
define( '_MI_MYTUBE_VERSION', 'Version' );
define( '_MI_MYTUBE_LICENSE', 'License' );
define( '_MI_MYTUBE_LICENSEDSC', 'GNU General Public License (GPL) - a copy of the GNU license is enclosed (license.txt).' );

//Version 1.06 RC-1
define( '_MI_MYTUBE_FLVPLAYER_LICENSE', 'JW FLV Media Player license' );
define( '_MI_MYTUBE_FLVPLAYER_LICENSEDSC', 'Read the license here' );
define( '_MI_MYTUBE_WARNING_FINAL', 'This module comes as is, without any guarantees whatsoever. Although this module is not beta, it is still under active development. This release can be used in a live website or a production environment, but its use is under your own responsibility, which means the author is not responsible.' );
define( '_MI_MYTUBE_WARNING_RC', 'This module comes as is, without any guarantees whatsoever. This module is a Release Candidate and should not be used on a production web site. The module is still under active development and its use is under your own responsibility, which means the author is not responsible.' );
define( '_MI_MYTUBE_MMYTUBE', 'Add MyTube Clip' );
define( '_MI_MYTUBE_RSSFEED', 'RSS Feed' );
define( '_MI_MYTUBE_CAPTCHA', 'Use captcha in submit form?' );
define( '_MI_MYTUBE_CAPTCHADSC', 'Select <em>Yes</em> to use captcha in the submit form.<br />Default: <em>Yes</em>' );
define( '_MI_MYTUBE_NICEURL', 'Use nice urls?' );
define( '_MI_MYTUBE_NICEURLDSC', 'Use nice urls for videoclips.' );
?>