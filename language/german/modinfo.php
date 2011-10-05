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
define("_MI_MYTUBE_DESC","Integriere Videos von YouTube in deiner Seite.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYTUBE_BNAME1","Neuste Videos (t)");
define("_MI_MYTUBE_BNAME2","Neuste Videos");
define("_MI_MYTUBE_BNAME3","Top Videos (t)");
define("_MI_MYTUBE_BNAME4","Top Videos");
define("_MI_MYTUBE_BNAME5","Neuste Videos (h)");
define("_MI_MYTUBE_BNAME6","Zufällige Videos");
define("_MI_MYTUBE_BNAME7","Zufällige Videos (h)");

// Sub menu titles
define("_MI_MYTUBE_SMNAME1","Absenden");
define("_MI_MYTUBE_SMNAME2","Populär");
define("_MI_MYTUBE_SMNAME3","Top Bewertet");
define("_MI_MYTUBE_SMNAME4","Letzte");

// Names of admin menu items
define("_MI_MYTUBE_BINDEX","Index");
define("_MI_MYTUBE_INDEXPAGE","Index Seitenverwaltung");
define("_MI_MYTUBE_MCATEGORY","Kategorieverwaltung");
define("_MI_MYTUBE_MVIDEOS","Videoverwaltung");
define("_MI_MYTUBE_MUPLOADS","Bilder hochladen");
define("_MI_MYTUBE_PERMISSIONS","Berechtigungseinstellungen");
define("_MI_MYTUBE_BLOCKADMIN","Blockeinstellungen");
define("_MI_MYTUBE_MVOTEDATA","Abstimmungen");

// Title of config items
define('_MI_MYTUBE_POPULAR', 'Video Popularitäts Zähler');
define('_MI_MYTUBE_POPULARDSC', 'Die Anzahl der Zugriffe bevor ein Video den Status populär erhält.');

define("_MI_MYTUBE_ICONDISPLAY","Videos populär and neu:");
define("_MI_MYTUBE_DISPLAYICONDSC", "Wie soll das Populär und Neu Icon angezeigt werden.");
define("_MI_MYTUBE_DISPLAYICON1", "Anzeige als Symbol");
define("_MI_MYTUBE_DISPLAYICON2", "Anzeige als Text");
define("_MI_MYTUBE_DISPLAYICON3", "Nicht anzeigen");

define("_MI_MYTUBE_DAYSNEW","Neues Video:");
define("_MI_MYTUBE_DAYSNEWDSC","Wie viele Tage soll ein Video den Status NEU haben.");

define("_MI_MYTUBE_DAYSUPDATED","Aktualisiertes Video:");
define("_MI_MYTUBE_DAYSUPDATEDDSC","Wie viele Tage soll ein Video den Status AKTUALISIERT haben.");

define('_MI_MYTUBE_PERPAGE', 'Anzahl Videos:');
define('_MI_MYTUBE_PERPAGEDSC', 'Wie viele Videos sollen pro Kategorie angezeigt werden.');

define("_MI_MYTUBE_ADMINPAGE", "Anzahl Videos Admin:");
define("_MI_MYTUBE_AMDMINPAGEDSC", "Wie viele Videos sollen in der Administration angezeigt werden.");

define("_MI_MYTUBE_ARTICLESSORT", "Standard Video Sortierung:");
define("_MI_MYTUBE_ARTICLESSORTDSC", "Wähle die Standard Sortierung der Videos.");

define("_MI_MYTUBE_SORTCATS", "Sortiert nach Kategorien:");
define("_MI_MYTUBE_SORTCATSDSC", "Wie sollen Kategorien und Unterkategorien sortiert werden.");

define('_MI_MYTUBE_SUBCATS', 'Unterkategorien:');
define('_MI_MYTUBE_SUBCATSDSC', 'Wähle JA um Unterkategorien anzuzeigen. Bei NEIN werden keine Unterkategorien angezeigt');

define('_MI_MYTUBE_EDITOR', "Editor (Admin):");
define('_MI_MYTUBE_EDITORCHOICE', "Wähle den Editor für den Administrator. Ohne installierte Editoren können nur die Standard Editoren gewählt werden (z.B. DHTML und Compact");
define('_MI_MYTUBE_EDITORUSER', "Editor (Mitglied):");
define('_MI_MYTUBE_EDITORCHOICEUSER', "Wähle den Editor für die Mitglieder. Ohne installierte Editoren können nur die Standard Editoren gewählt werden (z.B. DHTML und Compact");
define("_MI_MYTUBE_FORM_DHTML","DHTML");
define("_MI_MYTUBE_FORM_COMPACT","Compact");
define("_MI_MYTUBE_FORM_SPAW","Spaw Editor");
define("_MI_MYTUBE_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_MYTUBE_FORM_FCK","FCK Editor");
define("_MI_MYTUBE_FORM_KOIVI","Koivi Editor");
define("_MI_MYTUBE_FORM_TINYEDITOR","TinyEditor");

define('_MI_MYTUBE_USESHOTS', 'Zeige Screenshots ?');
define('_MI_MYTUBE_USESHOTSDSC', 'Bei Ja werden für jedes Video Screenshots angezeigt');

define('_MI_MYTUBE_USETHUMBS', 'Benutze Vorschaubilder:');
define("_MI_MYTUBE_USETHUMBSDSC", "Erlaubete Dateitypen: JPG, GIF, PNG.<div style='padding-top: 8px;'>MyTube wird Vorschaubilder erstellen. Setzte diese Einstellung auf Nein falls der Server das erstellen von Vorschaubildern nicht gestattet.</div>");

define("_MI_MYTUBE_IMGUPDATE", "Aktualisiere Vorschaubilder?");
define("_MI_MYTUBE_IMGUPDATEDSC", "Bei Ja wir bei jedem Seitenaufruf das Bild neu erstellt, ansonsten wird immer das erste erstellte verwendet. <br /><br />");

define('_MI_MYTUBE_SHOTWIDTH', 'Screenshot Breite');
define('_MI_MYTUBE_SHOTWIDTHDSC', 'Die Breite des Screenshots');

define('_MI_MYTUBE_SHOTHEIGHT', 'Screenshot Höhe');
define('_MI_MYTUBE_SHOTHEIGHTDSC', 'Die Höhe des Screenshots');

define('_MI_MYTUBE_MAINIMGDIR','Bilder Ordner');

define('_MI_MYTUBE_CATEGORYIMG','Kategorie Bild Ordner');

define('_MI_MYTUBE_DATEFORMAT', 'Timestamp:');
define('_MI_MYTUBE_DATEFORMATDSC', 'Standard Zeitstempel für MyTube');

define("_MI_MYTUBE_TOTALCHARS", "Anzahl Zeichen für die Beschreibung?");
define("_MI_MYTUBE_TOTALCHARSDSC", "Anzahl Zeichen für die Beschreibung auf er Index Seite.");

define("_MI_MYTUBE_OTHERVIDEOS", "Zeige andere Videos des Einsenders?");
define("_MI_MYTUBE_OTHERVIDEOSDSC", "Bei Ja werden die Videos des Einsenders angezeigt.");

define("_MI_MYTUBE_SHOWSBOOKMARKS", "Zeige Social Bookmarks?");
define("_MI_MYTUBE_SHOWSBOOKMARKSDSC", "Bei Ja werden die Social Bookmark Icons unter dem Video angezeigt.");

define("_MI_MYTUBE_USEMETADESCR", "Generiere Meta Description:");
define("_MI_MYTUBE_USEMETADSC", "Mit dieser Option basieren die Meta Description auf der Video Beschreibung.");

define("_MI_MYTUBE_USERTAGDESCR", "Mitglied kann Tags eingeben:");
define("_MI_MYTUBE_USERTAGDSC", "Bei Ja dürfen zum Video Tags definiert werden.");

define('_MI_MYTUBE_SHOWDISCLAIMER', 'Zeige Ausschlussklausel vor der Einsendung?');
define('_MI_MYTUBE_SHOWDISCLAIMERDSC', '');

define('_MI_MYTUBE_DISCLAIMER', 'Einsendungs Ausschlussklausel Text:');

define('_MI_MYTUBE_SHOWVIDEODISCL', 'Zeige Ausschlussklausel vor öffnen eines Videos?');
define('_MI_MYTUBE_SHOWVIDEODISCLDSC', '');

define('_MI_MYTUBE_VIDEODISCLAIMER', 'Video Ausschlussklausel Text:');

define('_MI_MYTUBE_COPYRIGHT', 'Copyright Hinweis:');
define('_MI_MYTUBE_COPYRIGHTDSC', 'Bei Ja wird der Copyright Hinweis audf der Video Seite angezeigt.');

define('_MI_MYTUBE_CHECKHOST', 'Verbiete direktes Video Linking? (leeching)');
define('_MI_MYTUBE_REFERERS', 'Diese Seite These sites can directly video to your videos <br />Separate with #');
define("_MI_MYTUBE_ANONPOST","Anonyme Einsendung:");
define("_MI_MYTUBE_ANONPOSTDSC","Erlaube Videos anonym hochzuladen?");
define('_MI_MYTUBE_AUTOAPPROVE','Autom. Freigabe von eingesendeten Videos');
define('_MI_MYTUBE_AUTOAPPROVEDSC','Wenn die Videos ohne Moderation freigegeben werden sollen.');

define('_MI_MYTUBE_MAXFILESIZE','Upload Größe (KB)');
define('_MI_MYTUBE_MAXFILESIZEDSC','Maximum Video Größe bei Video Uploads.');
define('_MI_MYTUBE_IMGWIDTH','Upload Bilder Breite');
define('_MI_MYTUBE_IMGWIDTHDSC','Maximale Bilderbreite bei Video Upload');
define('_MI_MYTUBE_IMGHEIGHT','Upload Bilder Höhe');
define('_MI_MYTUBE_IMGHEIGHTDSC','Maximale Bilderhöhe bei Video Upload');

define('_MI_MYTUBE_UPLOADDIR','Upload Ordner (Ohne abschlie&szuml;enden Slash)');
define('_MI_MYTUBE_ALLOWSUBMISS','Mitgliedereinsendung:');
define('_MI_MYTUBE_ALLOWSUBMISSDSC','Erlaube Mitgliedern neu Videos einzusenden');
define('_MI_MYTUBE_ALLOWUPLOADS','Mitglieder Uploads:');
define('_MI_MYTUBE_ALLOWUPLOADSDSC','Erlaube Mitgliedern Videos direkt auf deinen Webspace zu laden');
define('_MI_MYTUBE_SCREENSHOTS','Screenshots Upload Ordner');

define("_MI_MYTUBE_SUBMITART", "Video Einsendung:");
define("_MI_MYTUBE_SUBMITARTDSC", "Wähle Gruppe die Videos einsenden darf.");
define("_MI_MYTUBE_RATINGGROUPS", "Video Bewertung:");
define("_MI_MYTUBE_RATINGGROUPSDSC", "Wähle Guppe die Videos Bewerten darf.");

define("_MI_MYTUBE_QUALITY", "Vorschaubild Qualität:");
define("_MI_MYTUBE_QUALITYDSC", "Qualität Niedrig: 0 Hoch: 100");
define("_MI_MYTUBE_KEEPASPECT", "Behalte Bild Proportionen?");
define("_MI_MYTUBE_KEEPASPECTDSC", "");

define("_MI_MYTUBE_TITLE", "Titel");
define("_MI_MYTUBE_RATING", "Abstimmung");
define("_MI_MYTUBE_WEIGHT", "Gewichtung");
define("_MI_MYTUBE_POPULARITY", "Popularität");
define("_MI_MYTUBE_SUBMITTED2", "Einsende Datum");

// Text for notifications
define('_MI_MYTUBE_GLOBAL_NOTIFY', 'Allgemein');
define('_MI_MYTUBE_GLOBAL_NOTIFYDSC', 'Allgemeine Optionen für Benachrichtigungen.');
define('_MI_MYTUBE_CATEGORY_NOTIFY', 'Kategorie');
define('_MI_MYTUBE_CATEGORY_NOTIFYDSC', 'Benachrichtigungsoptionen geltend für die aktuelle Kategorie.');
define('_MI_MYTUBE_VIDEO_NOTIFY', 'Video');
define('_MI_MYTUBE_FILE_NOTIFYDSC', 'Benachrichtigungsoptionen geltend für das aktuelle Video.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'Neue Kategorie');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Benachrichtigen, wenn eine neue Kategorie angelegt wurde.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Benachrichtigung wenn eine neue Video-Kategorie angelegt wird.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neue Video-Kategorie');                              

define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Anfrage zur Videoänderung');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Benachrichtigen bei jeder Anfrage zur Videoänderung.');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Benachrichtigung bei jeder Anfrage für eine Linkänderung.');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Videoänderung angefragt');

define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Defektes Video gemeldet');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Benachrichtigung bei gemeldeten defekten Videos.');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Benachrichtigung wenn ein defektes Video gemeldet wurde.');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Defektes Video gemeldet');

define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Video eingereicht');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Benachrichtigung bei (wartenden) neuen gemeldeteten Videos.');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Benachrichtigung bei neuen gemeldeteten Videos, die auf Freigabe warten.');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neues Video eingereicht');

define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'Neues Video');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Benachrichtigung bei neuen Videos.');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Benachrichtigung, wenn ein neues Video eingetragen wurde.');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neues Video');

define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Neues Video');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Benachrichtigung bei (wartenden) neuen gemeldeteten Videos in der aktuellen Kategorie.');   
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Benachrichtigung, wenn Videos in der aktuellen Kategorie auf Freigabe warten.');      
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neues Video eingereicht in Kategorie'); 

define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'Neues Video');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Benachrichtigung bei neuen Videos in der aktuellen Kategorie.');   
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Benachrichtigung, wenn ein neues Video in der aktuellen Kategorie eingetragen wurde.');      
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Neues Video in Kategorie'); 

define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFY', 'Video freigegeben');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Benachrichtigung wenn das Video freigegeben ist.');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Benachrichtigung wenn das Video durch Moderatoren freigegeben ist');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} Auto-Benachrichtigung : Video freigegeben');

define('_MI_MYTUBE_AUTHOR_INFO', "Entwickler Information");
define('_MI_MYTUBE_AUTHOR_NAME', "Entwickler");
define('_MI_MYTUBE_AUTHOR_DEVTEAM', "Entwickler Team");
define('_MI_MYTUBE_AUTHOR_WEBSITE', "Entwickler Webseite");
define('_MI_MYTUBE_AUTHOR_EMAIL', "Entwickler E-Mail");
define('_MI_MYTUBE_AUTHOR_CREDITS', "Danksagung");
define('_MI_MYTUBE_MODULE_INFO', "Modul Entwickler Information");
define('_MI_MYTUBE_MODULE_STATUS', "Entwickler Status");
define('_MI_MYTUBE_MODULE_DEMO', "Demo Seite");
define('_MI_MYTUBE_MODULE_SUPPORT', "Official Support Seite");
define('_MI_MYTUBE_MODULE_BUG', "Melde einen Fehler im Modul");
define('_MI_MYTUBE_MODULE_FEATURE', "Melde ein neues Feature für das Modul");
define('_MI_MYTUBE_MODULE_DISCLAIMER', "Ausschlussklausel");
define('_MI_MYTUBE_RELEASE', "Release Datum: ");

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

define('_MI_MYTUBE_AUTHOR_CREDITSTEXT',"WF-Projekt Team");
define('_MI_MYTUBE_AUTHOR_BUGFIXES', "Fehler History");

define('_MI_MYTUBE_COPYRIGHTIMAGE', "");

// version 1.02
define("_MI_MYTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_MYTUBE_FORM_DHTMLEXT", "erweiterter DHTML");

// Version 1.03
define('_MI_MYTUBE_DATEFORMATADMIN', 'Datumformat Administration:');
define('_MI_MYTUBE_DATEFORMATADMINDSC', 'Standard Datumanzeige für MyTube');

// Version 1.04 RC-1
define('_MI_MYTUBE_VIDEODIR', 'Videoupload Ordner:');
define('_MI_MYTUBE_VIDEODIRDSC', 'Setze den Ordner für die MyTube Videodateien');
define('_MI_MYTUBE_VIDEOIMGDIR', 'Vorschaubilder Ordner:');
define('_MI_MYTUBE_VIDEOIMGDIRDSC', 'Setzte den Ordner für die MyTube Videovorschaubilder');
define('_MI_MYTUBE_FLVPLAYER_CREDITS', 'FLV Player');
define('_MI_MYTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player by LongTail Video (Jeroen Wijering)');
define('_MI_MYTUBE_VUPLOADS', 'Videoupload');
define('_MI_MYTUBE_CATEGORYIMGDSC', '');
define('_MI_MYTUBE_MAINIMGDIRDSC', '');
define("_MI_MYTUBE_BNAME8","Banner");

// Version 1.04 RC-2
define('_MI_MYTUBE_MODULE_MANUAL', 'Anleitung' );
define('_MI_MYTUBE_MODULE_MANUALWIKI', 'Wiki Anleitung' );
define('_MI_MYTUBE_MODULE_REQUESTNEWFEATURE', 'Neu Funktion anfragen' );
define('_MI_MYTUBE_MODULE_SUBMITBUG', 'Fehlerbericht senden' );
define("_MI_MYTUBE_BNAME9","MyTube Wortwolke");
define("_MI_MYTUBE_BNAME10","MyTube Top Wörter");
define('_MI_MYTUBE_FLVPLAYER_MANUAL', 'FLV Player Manual');
define('_MI_MYTUBE_FLVPLAYER_WIKI', 'JW Player Wiki');

// Version 1.05 RC-1
define( "_MI_MYTUBE_CATCOLUMNS", "Wählen Sie die Anzahl der Kategoriespalten:" );
define( "_MI_MYTUBE_CATCOLUMNSDSC", "Voreinstellung sind 2 Spalten" );
define( "_MI_MYTUBE_RATINGDISPLAY", "Anzeigen der Bewertungsfunktion?" );
define( "_MI_MYTUBE_RATINGDISPLAYDSC", "Wählen Sie <em>Ja</em> um die Bewertung anzuzeigen. Wählen Sie <em>Nein</em> wenn Sie die Funktion nicht anzeigen lassen möchten." );
define( "_MI_MYTUBE_AUTOPLAY", "Video automatisch starten" );
define( "_MI_MYTUBE_AUTOPLAYDSC", "Wählen Sie <em>Ja</em>, wenn der Videoclips automatisch abgespielt werden soll." );
define( '_MI_MYTUBE_VERSION', 'Version' );
define( '_MI_MYTUBE_LICENSE', 'Lizenz' );
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