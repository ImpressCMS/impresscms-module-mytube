<?php
/**
 * $Id: admin.php v 1.00 21 June 2005 John N Exp $
 * Module: MyTube
 * Version: v1.0.1
  */

define( "_AM_XTUBE_WARNINSTALL1", "WARNUNG: Verzeichnis %s existiert auf dem Server! <br />Aus Sicherheitsgr&uuml;nden sollte das Verzeichnis gel&ouml;scht werden." );
define( "_AM_XTUBE_WARNINSTALL2", "WARNUNG: Datei %s existiert auf dem Server! <br />/>Aus Sicherheitsgr&uuml;nden sollte das Verzeichnis gel&ouml;scht werden." );
define( "_AM_XTUBE_WARNINSTALL3", "WARNUNG: Ordner %s ist auf dem Server nicht vorhanden. <br />Dieser Ordner wird von MyTube ben&ouml;tigt." );

define( "_AM_XTUBE_MODULE_NAME", "MyTube" );

define( "_AM_XTUBE_BMODIFY", "&Auml;ndern" );
define( "_AM_XTUBE_BDELETE", "L&ouml;schen" );
define( "_AM_XTUBE_BCREATE", "Anlegen" );
define( "_AM_XTUBE_BADD", "Hinzuf&uuml;gen" );
define( "_AM_XTUBE_BAPPROVE", "Freigeben" );
define( "_AM_XTUBE_BIGNORE", "Ignorieren" );
define( "_AM_XTUBE_BCANCEL", "Abbrechen" );
define( "_AM_XTUBE_BSAVE", "Speichern" );
define( "_AM_XTUBE_BRESET", "Zur&uuml;cksetzen" );
define( "_AM_XTUBE_BMOVE", "Videos bewegen" );
define( "_AM_XTUBE_BUPLOAD", "Hochladen" );
define( "_AM_XTUBE_BDELETEIMAGE", "Ausgew&auml;hltes Bild l&ouml;schen" );
define( "_AM_XTUBE_BRETURN", "Zur&uuml;ck zur vorherigen Seite!" );
define( "_AM_XTUBE_DBERROR", "Datenbank Zugriffsfehler: Bitte diesen Fehler an die WF-Project Website weiterleiten" );
// Other Options
define( "_AM_XTUBE_TEXTOPTIONS", "Text Optionen:" );
define( "_AM_XTUBE_DISABLEHTML", " HTML Tags abschalten" );
define( "_AM_XTUBE_DISABLESMILEY", " Smilies abschalten" );
define( "_AM_XTUBE_DISABLEXCODE", " XOOPS Codes abschalten" );
define( "_AM_XTUBE_DISABLEIMAGES", " Bilder abschalten" );
define( "_AM_XTUBE_DISABLEBREAK", " XOOPS Zeilenumbruch verwenden?" );
define( "_AM_XTUBE_UPLOADFILE", "Video erfolgreich hochgeladen" );
define( "_AM_XTUBE_NOMENUITEMS", "Keine Menueintr&auml;ge innerhalb des Men&uuml;s" );
// Admin Bread crumb
define( "_AM_XTUBE_PREFS", "Voreinstellungen" );
define( "_AM_XTUBE_BUPDATE", "Modul Update" );
define( "_AM_XTUBE_BINDEX", "Hauptindex" );
define( "_AM_XTUBE_BPERMISSIONS", "Berechtigungen" );
// define( "_AM_XTUBE_BLOCKADMIN", "Blocks" );
define( "_AM_XTUBE_BLOCKADMIN", "Blockeinstellungen" );
define( "_AM_XTUBE_GOMODULE", "Zum Modul" );
define( "_AM_XTUBE_ABOUT", "&Uuml;ber MyTube" );
// Admin Summary
define( "_AM_XTUBE_SCATEGORY", "Kategorie: " );
define( "_AM_XTUBE_SFILES", "Videos: " );
define( "_AM_XTUBE_SNEWFILESVAL", "Eingesandt: " );
define( "_AM_XTUBE_SMODREQUEST", "Ge&auml;ndert: " );
define( "_AM_XTUBE_SREVIEWS", "Rezensionen: " );

// Admin Main Menu
define( "_AM_XTUBE_MCATEGORY", "Kategorieverwaltung" );
define( "_AM_XTUBE_MVIDEOS", "Videoverwaltung" );
define( "_AM_XTUBE_MLISTBROKEN", "Liste der defekten Videos" );
define( "_AM_XTUBE_MLISTPINGTIMES", "Anzeige der Videos Pingtime" );
define( "_AM_XTUBE_INDEXPAGE", "Index Seitenverwaltung" );
define( "_AM_XTUBE_MCOMMENTS", "Kommentare" );
define( "_AM_XTUBE_MVOTEDATA", "Bewertungsdaten" );
define( "_AM_XTUBE_MUPLOADS", "Bild hochladen" );

// Catgeory defines
define( "_AM_XTUBE_CCATEGORY_CREATENEW", "Neue Kategorie erstellen" );
define( "_AM_XTUBE_CCATEGORY_MODIFY", "Kategorie &auml;ndern" );
define( "_AM_XTUBE_CCATEGORY_MOVE", "Videos aus Kategorie verschieben" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_TITLE", "Kategorietitel:" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_FAILED", "Verschieben fehlgeschlagen: In diese Kategorie kann nicht verschoben werden!" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_FAILEDT", "Verschieben fehlgeschlagen: Kategorie konnte nicht gefunden werden!" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_MOVED", "Video verschoben und Kategorie gel&ouml;scht" );
define( "_AM_XTUBE_CCATEGORY_CREATED", "Neue Kategorie erstellt und Datenbank erfolgreich aktualisiert" );
define( "_AM_XTUBE_CCATEGORY_MODIFIED", "Ausgew&auml;hlte Kategorie ge&auml;ndert und Datenbank erfolgreich aktualisiert" );
define( "_AM_XTUBE_CCATEGORY_DELETED", "Ausgew&auml;hlte Kategorie gel&ouml;scht und Datenbank erfolgreich aktualisiert" );
define( "_AM_XTUBE_CCATEGORY_AREUSURE", "WARNUNG: Soll die gew&auml;hlte Kategorie mit ALLEN Dateien und Kommentaren wirklich gel&ouml;scht werden?" );
define( "_AM_XTUBE_CCATEGORY_NOEXISTS", "Sie m&uuml;ssen zuerst eine Kategorie anlegen, bevor Sie ein Video hinzuf&uuml;gen k&ouml;nnen" );
define( "_AM_XTUBE_FCATEGORY_GROUPPROMPT", "Zugriffsrechte Kategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>W&auml;hlen Sie die Benutzergruppe, die Zugrifsrechte auf die Kategorie haben soll.</span></div>" );
define( "_AM_XTUBE_FCATEGORY_SUBGROUPPROMPT", "Zugriffsrechte Unterkategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>W&auml;hlen Sie die Benutzergruppe, die Zugrifsrechte auf die Unterkategorie haben soll.</span></div>" );
define( "_AM_XTUBE_FCATEGORY_MODGROUPPROMPT", "Moderationsrechte f&uuml;r Kategorie:<div style='padding-top: 8px;'><span style='font-weight: normal;'>W&auml;hlen Sie die Benutzergruppe, die Moderationsrechte auf die Kategorie haben soll.</span></div>" );

define( "_AM_XTUBE_FCATEGORY_TITLE", "Kategorietitel:" );
define( "_AM_XTUBE_FCATEGORY_WEIGHT", "Kategoriegewichtung:" );
define( "_AM_XTUBE_FCATEGORY_SUBCATEGORY", "Setze als Unterkategorie von:" );
define( "_AM_XTUBE_FCATEGORY_CIMAGE", "Kategoriebild ausw&auml;hlen:" );
define( "_AM_XTUBE_FCATEGORY_DESCRIPTION", "Kategoriebeschreibung:" );
define( "_AM_XTUBE_FCATEGORY_SUMMARY", "Kategoriezusammenfassung:" );
/**
 * Index page Defines
 */
define( "_AM_XTUBE_IPAGE_UPDATED", "Indexseite ge&auml;ndert und Datenbank erfolgreich aktualisiert!" );
define( "_AM_XTUBE_IPAGE_INFORMATION", "Indexseite Information" );
define( "_AM_XTUBE_IPAGE_MODIFY", "Indexseite &auml;ndern" );
define( "_AM_XTUBE_IPAGE_CIMAGE", "Indexbild w&auml;hlen:" );
define( "_AM_XTUBE_IPAGE_CTITLE", "Indextitel:" );
define( "_AM_XTUBE_IPAGE_CHEADING", "Headerbereich Indexseite:" );
define( "_AM_XTUBE_IPAGE_CHEADINGA", "Ausrichtung Headerbereich Indexseite :" );
define( "_AM_XTUBE_IPAGE_CFOOTER", "Fu&szlig;bereich Indexseite:" );
define( "_AM_XTUBE_IPAGE_CFOOTERA", "Ausrichtung Fu&szlig;bereich Indexseite :" );
define( "_AM_XTUBE_IPAGE_CLEFT", "Linksb&uuml;ndig" );
define( "_AM_XTUBE_IPAGE_CCENTER", "Mittig" );
define( "_AM_XTUBE_IPAGE_CRIGHT", "Rechtsb&uuml;ndig" );
/**
 * Permissions defines
 */
define( "_AM_XTUBE_PERM_MANAGEMENT", "Berechtigungsverwaltung" );
define( "_AM_XTUBE_PERM_PERMSNOTE", "<div><b>Beachte:</b>, Bitte beachten Sie, da&szlig; obwohl die Berechtigungen hier korrekt gesetzt sein m&ouml;gen, eine Gruppe dennoch keine Ansicht- und/oder Zugriffsrechte haben kann wenn entsprechende Modul-Rechte fehlen. Diese Rechte k&ouml;nnen unter <b>System > Gruppen</b> eingestellt werden. Dort die entsprechende Gruppe ausw&auml;hlen und die passenden Rechte setzen.</div>");
define( "_AM_XTUBE_PERM_CPERMISSIONS", "Kategorieberechtigungen" );
define( "_AM_XTUBE_PERM_CSELECTPERMISSIONS", "Kategorien ausw&auml;hlen, die jede Gruppe sehen kann" );
define( "_AM_XTUBE_PERM_CNOCATEGORY", "Berechtigungen k&ouml;nnen nicht gesetzt werden: Es sind noch keine Kategorien erstellt!" );
define( "_AM_XTUBE_PERM_FPERMISSIONS", "Video Berechtigungen" );
define( "_AM_XTUBE_PERM_FNOFILES", "Berechtigungen k&ouml;nnen nicht gesetzt werden: Es sind noch keine Videos erstellt!" );
define( "_AM_XTUBE_PERM_FSELECTPERMISSIONS", "Videos ausw&auml;hlen, die jede Gruppe sehen kann" );
/**
 * Upload defines
 */
define( "_AM_XTUBE_VIDEO_IMAGEUPLOAD", "Bild erfolgreich auf den Server hochgeladen" );
define( "_AM_XTUBE_VIDEO_NOIMAGEEXIST", "Fehler: Kein Video zum hochladen ausgew&auml;hlt. Bitte versuchen Sie es noch einmal!" );
define( "_AM_XTUBE_VIDEO_IMAGEEXIST", "Bild existiert bereits im Upload-Ordner!" );
define( "_AM_XTUBE_VIDEO_FILEDELETED", "Video wurde gel&ouml;scht." );
define( "_AM_XTUBE_VIDEO_FILEERRORDELETE", "Fehler beim l&ouml;schen des Videos: Video nicht auf dem Server vorhanden." );
define( "_AM_XTUBE_VIDEO_NOFILEERROR", "Fehler beim l&ouml;schen des Videos: Kein Video zum l&ouml;schen ausgew&auml;hlt." );
define( "_AM_XTUBE_VIDEO_DELETEFILE", "WARNUNG: Soll das Bild wirklich gel&ouml;scht werden?" );
define( "_AM_XTUBE_VIDEO_IMAGEINFO", "Server Status" );
define( "_AM_XTUBE_VIDEO_SPHPINI", "<b>Information aus der PHP ini :</b>" );
define( "_AM_XTUBE_VIDEO_SAFEMODESTATUS", "Safe Mode Status: " );
define( "_AM_XTUBE_VIDEO_REGISTERGLOBALS", "Register Globals: " );
define( "_AM_XTUBE_VIDEO_SERVERUPLOADSTATUS", "Server Uploads Status: " );
define( "_AM_XTUBE_VIDEO_MAXUPLOADSIZE", "Erlaubte max. Uploadgr&ouml;&szlig;e: " );
define( "_AM_XTUBE_VIDEO_MAXPOSTSIZE", "Erlaubte max. Post-Gr&ouml;&szlig;e: " );
define( "_AM_XTUBE_VIDEO_SAFEMODEPROBLEMS", " (Kann zu Problemen f&uuml;hren)" );
define( "_AM_XTUBE_VIDEO_GDLIBSTATUS", "GD Library Support: " );
define( "_AM_XTUBE_VIDEO_GDLIBVERSION", "GD Library Version: " );
define( "_AM_XTUBE_VIDEO_GDON", "<b>Eingeschaltet</b> (Vorschaubilder verf&uuml;gbar)" );
define( "_AM_XTUBE_VIDEO_GDOFF", "<b>Abgeschaltet</b> (Vorschaubilder nicht verf&uuml;gbar)" );
define( "_AM_XTUBE_VIDEO_OFF", "<b>Aus</b>" );
define( "_AM_XTUBE_VIDEO_ON", "<b>An</b>" );
define( "_AM_XTUBE_VIDEO_CATIMAGE", "Kategoriebilder" );
define( "_AM_XTUBE_VIDEO_SCREENSHOTS", "Bildschirmfotos" );
define( "_AM_XTUBE_VIDEO_MAINIMAGEDIR", "Hauptbilder" );
define( "_AM_XTUBE_VIDEO_FCATIMAGE", "Pfad zu den Kategoriebildern" );
define( "_AM_XTUBE_VIDEO_FSCREENSHOTS", "Pfad zu den Bildschirmfotos" );
define( "_AM_XTUBE_VIDEO_FMAINIMAGEDIR", "Pfad zu den Hauptbildern" );
define( "_AM_XTUBE_VIDEO_FUPLOADIMAGETO", "Bild hochladen: " );
define( "_AM_XTUBE_VIDEO_FUPLOADPATH", "Pfad zum hochladen: " );
define( "_AM_XTUBE_VIDEO_FUPLOADURL", "URL-Pfad zum hochladen: " );
define( "_AM_XTUBE_VIDEO_FOLDERSELECTION", "Zielordner zum Hochladen ausw&auml;hlen:" );
define( "_AM_XTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Ausgew&auml;hltes Bild anzeigen:" );
define( "_AM_XTUBE_VIDEO_FUPLOADIMAGE", "Neues Bild zum gew&auml;hlten Ordner hochladen:" );

// Main Index defines
define( "_AM_XTUBE_MINDEX_VIDEOSUMMARY", "Zusammenfassung Modul Administration" );
define( "_AM_XTUBE_MINDEX_PUBLISHEDVIDEO", "Publizierte Videos:" );
define( "_AM_XTUBE_MINDEX_AUTOPUBLISHEDLINK", "Auto - Publizierte Videos:" );
define( "_AM_XTUBE_MINDEX_AUTOEXPIRE", "Automatisch abgelaufene Videos:" );
define( "_AM_XTUBE_MINDEX_EXPIRED", "Abgelaufene Videos:" );
define( "_AM_XTUBE_MINDEX_OFFLINELINK", "Offline Videos:" );
define( "_AM_XTUBE_MINDEX_ID", "ID" );
define( "_AM_XTUBE_MINDEX_TITLE", "Video Titel" );
define( "_AM_XTUBE_MINDEX_POSTER", "Ver&ouml;ffentlicht von" );
define( "_AM_XTUBE_MINDEX_ONLINE", "Status" );
define( "_AM_XTUBE_MINDEX_ONLINESTATUS", "Online Status" );
define( "_AM_XTUBE_MINDEX_PUBLISH", "Erstellt" );
define( "_AM_XTUBE_MINDEX_PUBLISHED", "Ver&ouml;ffentlicht" );
define( "_AM_XTUBE_MINDEX_EXPIRE", "Abgelaufen" );
define( "_AM_XTUBE_MINDEX_NOTSET", "Datum nicht gesetzt" );
define( "_AM_XTUBE_MINDEX_SUBMITTED", "Einsendedatum" );

define( "_AM_XTUBE_MINDEX_ACTION", "Aktion" );
define( "_AM_XTUBE_MINDEX_NOLINKSFOUND", "BEACHTE: Keine Videos vorhanden, die diese Bedingung erf&uuml;llen" );
define( "_AM_XTUBE_MINDEX_PAGE", "<b>Seite:<b> " );
define( '_AM_XTUBE_MINDEX_PAGEINFOTXT', '<ul><li>MyTube &Uuml;bersichtsseite Details.</li><li>Sie k&ouml;nnen hier das Logo, den Kopfbereich, die Haupt&uuml;berschrift und den Fu&szlig;text leicht Ihren W&uuml;nschen anpassen.</li></ul><br />Anmerkung: Das Logo wird bei jedem Seitenaufruf von Xooptube angezeigt.' );
define( "_AM_XTUBE_MINDEX_RESPONSE", "Antwortzeit" );
// Submitted Links
define( "_AM_XTUBE_SUB_SUBMITTEDFILES", "Eingesandte Videos" );
define( "_AM_XTUBE_SUB_FILESWAITINGINFO", "Information &uuml;ber wartende Videos" );
define( "_AM_XTUBE_SUB_FILESWAITINGVALIDATION", "Videos die auf &Uuml;berpr&uuml;fung warten: " );
define( "_AM_XTUBE_SUB_APPROVEWAITINGFILE", "<b>Freigabe</b> Information &uuml;ber neue Videos ohne &Uuml;berpr&uuml;fung." );
define( "_AM_XTUBE_SUB_EDITWAITINGFILE", "<b>&Auml;ndern</b> Information &uuml;ber neue Videos mit anschlie&szlig;ender Freigabe." );
define( "_AM_XTUBE_SUB_DELETEWAITINGFILE", "<b>L&ouml;schen</b> Information &uuml;ber neue Videos." );
define( "_AM_XTUBE_SUB_NOFILESWAITING", "Keine Videos vorhanden, die diese Bedingung erf&uuml;llen" );
define( "_AM_XTUBE_SUB_NEWFILECREATED", "Neues Video erstellt und Datenbank erfolgreich aktualisiert" );
// Vote Information
define( "_AM_XTUBE_VOTE_RATINGINFOMATION", "Bewertungsinformationen" );
define( "_AM_XTUBE_VOTE_TOTALVOTES", "Stimmen gesamt: " );
define( "_AM_XTUBE_VOTE_REGUSERVOTES", "Stimmen durch registrierte Benutzer: %s" );
define( "_AM_XTUBE_VOTE_ANONUSERVOTES", "Stimmen durch anonyme Benutzer: %s" );
define( "_AM_XTUBE_VOTE_USER", "Benutzer" );
define( "_AM_XTUBE_VOTE_IP", "IP - Addresse" );
define( "_AM_XTUBE_VOTE_DATE", "Eingesandt" );
define( "_AM_XTUBE_VOTE_RATING", "Bewertung" );
define( "_AM_XTUBE_VOTE_NOREGVOTES", "Keine Bewertungen durch registrierte Benutzer" );
define( "_AM_XTUBE_VOTE_NOUNREGVOTES", "Keine Bewertungen durch anonyme Benutzer" );
define( "_AM_XTUBE_VOTE_VOTEDELETED", "Bewertungen gel&ouml;scht." );
define( "_AM_XTUBE_VOTE_ID", "ID" );
define( "_AM_XTUBE_VOTE_FILETITLE", "Videotitel" );
define( "_AM_XTUBE_VOTE_DISPLAYVOTES", "Bewertungen / Abstimmungen" );
define( "_AM_XTUBE_VOTE_NOVOTES", "Keine Benutzerstimmen zum anzeigen vorhanden" );
define( "_AM_XTUBE_VOTE_DELETE", "Keine Benutzerstimmen zum anzeigen vorhanden" );
define( "_AM_XTUBE_VOTE_DELETEDSC", "<b>L&ouml;scht</b> die ausgew&auml;hlte Abstimmung aus der Datenbank." );
define( "_AM_XTUBE_VOTEDELETED", "Ausgew&auml;hlte Abstimmung gel&ouml;scht und Datenbank aktualisiert" );

define( "_AM_XTUBE_VOTE_USERAVG", "Bewertungsdurchschnitt" );
define( "_AM_XTUBE_VOTE_TOTALRATE", "Gesamtstimmen" );
define( "_AM_XTUBE_VOTE_MAXRATE", "Max. Stimmen je Eintrag" );
define( "_AM_XTUBE_VOTE_MINRATE", "Min. Stimmen je Eintrag" );
define( "_AM_XTUBE_VOTE_MOSTVOTEDTITLE", "Meiste Bewertungen" );
define( "_AM_XTUBE_VOTE_LEASTVOTEDTITLE", "Wenigste Bewertungen" );
define( "_AM_XTUBE_VOTE_MOSTVOTERSUID", "Aktivster Bewerter" );
define( "_AM_XTUBE_VOTE_REGISTERED", "Stimmen registrierter Benutzer" );
define( "_AM_XTUBE_VOTE_NONREGISTERED", "Stimmen anonymer Benutzer" );
// Modifications
define( "_AM_XTUBE_MOD_TOTMODREQUESTS", "Gesamte &Auml;nderungsanfragen: " );
define( "_AM_XTUBE_MOD_MODREQUESTS", "Ge&auml;nderte Videos" );
define( "_AM_XTUBE_MOD_MODREQUESTSINFO", "Ge&auml;nderte Videoinformation" );
define( "_AM_XTUBE_MOD_MODID", "ID" );
define( "_AM_XTUBE_MOD_MODTITLE", "Titel" );
define( "_AM_XTUBE_MOD_MODPOSTER", "Originaleinsender: " );
define( "_AM_XTUBE_MOD_DATE", "Eingesandt" );
define( "_AM_XTUBE_MOD_NOMODREQUEST", "Es sind keine Anfragen vorhanden, die dieses Kriterium erf&uuml;llen" );
define( "_AM_XTUBE_MOD_TITLE", "Videotitel: " );
define( "_AM_XTUBE_MOD_LID", "Video ID: " );
define( "_AM_XTUBE_MOD_CID", "Kategorie: " );
define( "_AM_XTUBE_MOD_URL", "Video Url: " );
define( "_AM_XTUBE_MOD_PUBLISHER", "Ver&ouml;ffentlicht von: " );
define( "_AM_XTUBE_MOD_FORUMID", "Forum: " );
define( "_AM_XTUBE_MOD_SCREENSHOT", "Bildschirmfoto: " );
define( "_AM_XTUBE_MOD_HOMEPAGE", "Homepage: " );
define( "_AM_XTUBE_MOD_HOMEPAGETITLE", "Name der Homepage: " );
define( "_AM_XTUBE_MOD_SHOTIMAGE", "Bildschrimfoto: " );
define( "_AM_XTUBE_MOD_DESCRIPTION", "Beschreibung: " );
define( "_AM_XTUBE_MOD_MODIFYSUBMITTER", "Einsender: " );
define( "_AM_XTUBE_MOD_MODIFYSUBMIT", "Einsender" );
define( "_AM_XTUBE_MOD_PROPOSED", "Vorgeschlagene Videodetails" );
define( "_AM_XTUBE_MOD_ORIGINAL", "Orginal Videodetails" );
define( "_AM_XTUBE_MOD_REQDELETED", "&Auml;nderungsanfrage aus Datenbank entfernt" );
define( "_AM_XTUBE_MOD_REQUPDATED", "Ausgew&auml;hltes Video ge&auml;ndert und Datenbank erfolgreich aktualisiert" );
define( '_AM_XTUBE_MOD_VIEW', 'Anzeigen' );
// Link management
define( "_AM_XTUBE_VIDEO_ID", "Video ID: " );
define( "_AM_XTUBE_VIDEO_IP", "IP - Addresse des Einsenders: " );
define( "_AM_XTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Erlaubte Dateiendungen f&uuml;r den Admin</b>:</div>" );
define( "_AM_XTUBE_VIDEO_MODIFYFILE", "&Auml;ndern der Video Information" );
define( "_AM_XTUBE_VIDEO_CREATENEWFILE", "Neues Video erstellen" );
define( "_AM_XTUBE_VIDEO_TITLE", "Video Titel: " );
define( "_AM_XTUBE_VIDEO_DLVIDID", "Video URL: " );
define( "_AM_XTUBE_VIDEO_DLVIDID_NOTE", "
<small><small><small><b>YouTube:</b> http://www.youtube.com/watch?v=<font color=#FF0000>IsOtq-qCqZ4</font><br />
<b>MetaCafe:</b> http://www.metacafe.com/watch/<font color=#FF0000>191543/sperm_whale_encounters_underwater_robot</font>/<br />
<b>SPIKE/ifilm:</b> http://www.ifilm.com/video/<font color=#FF0000>2718605</font><br />
<b>Photobucket:</b> http://i39.photobucket.com/albums/<font color=#FF0000>e168/vailtom/th_BigSquid</font>.jpg<br />
<b>Google Video:</b> http://video.google.com/videoplay?docid=<font color=#FF0000>4761076111111865377</font>&q=rov&total=913&start=...<br />
<b>MySpace TV:</b> http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid=<font color=#FF0000>13171141</font><br />
<b>DailyMotion:</b> http://www.dailymotion.com/video/<font color=#FF0000>x40bhg</font>_blondesecretary_fun</small>" );
define( "_AM_XTUBE_VIDEO_PICURL", "Picture url: " );
define( "_AM_XTUBE_VIDEO_PICURLNOTE", "<small>Bilder URL wenn das Video von Google Video, MySpace TV oder DailyMotion ist.</small>" );
define( "_AM_XTUBE_VIDEO_DESCRIPTION", "Videobeschreibung: " );
define( "_AM_XTUBE_VIDEO_CATEGORY", "Hauptkategorie des Videos: " );
define( "_AM_XTUBE_VIDEO_FILESSTATUS", " Video offline setzen?<br /><br /><span style='font-weight: normal;'>Video ist unsichtbar f&uuml;r alle Benutzer.</span>" );
define( "_AM_XTUBE_VIDEO_SETASUPDATED", " Video Status setzen als Updated?<br /><br /><span style='font-weight: normal;'>Das Update-Icon wird angezeigt.</span>" );
define( "_AM_XTUBE_VIDEO_SHOTIMAGE", "Bildschirmfoto des Videos: " );
define( "_AM_XTUBE_VIDEO_DISCUSSINFORUM", "Diskussion im Forum hinzuf&uuml;gen?" );
define( "_AM_XTUBE_VIDEO_PUBLISHDATE", "Ver&ouml;ffentlichungsdatum:" );
define( "_AM_XTUBE_VIDEO_EXPIREDATE", "Ablaufdatum:" );
define( "_AM_XTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Ver&ouml;ffentlichungsdatum entfernen:" );
define( "_AM_XTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Ablaufdatum entfernen:" );
define( "_AM_XTUBE_VIDEO_PUBLISHDATESET", " Ver&ouml;ffentlichungsdatum setzen: " );
define( "_AM_XTUBE_VIDEO_SETDATETIMEPUBLISH", " Ver&ouml;ffentlichungsdatum und Zeit setzen" );
define( "_AM_XTUBE_VIDEO_SETDATETIMEEXPIRE", " Ablaufdatum und Zeit setzen" );
define( "_AM_XTUBE_VIDEO_SETPUBLISHDATE", "<b>Ver&ouml;ffentlichungsdatum setzen: </b>" );
define( "_AM_XTUBE_VIDEO_SETNEWPUBLISHDATE", "<b>Neues Ver&ouml;ffentlichungsdatum setzenSet: </b><br />Ver&ouml;ffentlicht:" );
define( "_AM_XTUBE_VIDEO_SETPUBDATESETS", "<b>Ver&ouml;ffentlichungsdatum setzen: </b><br />Ver&ouml;ffentlicht am:" );
define( "_AM_XTUBE_VIDEO_EXPIREDATESET", " Ablaufdatum setzen: " );
define( "_AM_XTUBE_VIDEO_SETEXPIREDATE", "<b>Ablaufdatum setzen: </b>" );
define( "_AM_XTUBE_VIDEO_DELEDITMESS", "Bericht &uuml;ber defekte Videos l&ouml;schen?<br /><br /><span style='font-weight: normal;'>Wenn Sie <b>JA</b> w&auml;hlen wird der Bericht automatisch gel&ouml;scht. &Uuml;berpr&uuml;fen Sie, ob das Video wieder korrekt arbeitet.</span>" );
define( "_AM_XTUBE_VIDEO_MUSTBEVALID", "Das Bildschirmfoto muss im %s Ordner vorhanden sein (z.B. shot.gif). Leer lassen, wenn kein Bild vorhanden ist." );
define( "_AM_XTUBE_VIDEO_EDITAPPROVE", "Video freigeben:" );
define( "_AM_XTUBE_VIDEO_NEWFILEUPLOAD", "Neues Video erstellt und Datenbank erfolgreich aktualisiert" );
define( "_AM_XTUBE_VIDEO_FILEMODIFIEDUPDATE", "Gew&auml;hltes Video ge&auml;ndert und Datenbank erfolgreich aktualisiert" );
define( "_AM_XTUBE_VIDEO_REALLYDELETEDTHIS", "Wollen Sie das gew&auml;hlte Video wirklich l&ouml;schen?" );
define( "_AM_XTUBE_VIDEO_FILEWASDELETED", "Video %s erfolgreich aus der Datenbank entfernt!" );
define( "_AM_XTUBE_VIDEO_FILEAPPROVED", "Video freigegeben und Datenbank erfolgreich aktualisiert" );
define( "_AM_XTUBE_VIDEO_CREATENEWSSTORY", "<b>News Story aus Video erstellen</b>" );
define( "_AM_XTUBE_VIDEO_SUBMITNEWS", "Artikel aus neuem Video erstellen?" );
define( "_AM_XTUBE_VIDEO_NEWSCATEGORY", "Newskategorie f&uuml;r Artikel ausw&auml;hlen:" );
define( "_AM_XTUBE_VIDEO_NEWSTITLE", "News Titel:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leer lassen, um den Videotitel zu benutzen</span></div>" );
define( "_AM_XTUBE_VIDEO_PUBLISHER", "Video ver&ouml;ffentlicht von: " );

/**
 * Broken links defines
 */
define( "_AM_XTUBE_SBROKENSUBMIT", "Defekt: " );
define( "_AM_XTUBE_BROKEN_FILE", "Bericht &uuml;ber defekte Videos" );
define( "_AM_XTUBE_BROKEN_FILEIGNORED", "Bericht &uuml;ber defekte Videos ignoriert und erfolgreich aus der Datenbank entfernt!" );
define( "_AM_XTUBE_BROKEN_NOWACK", "Quittierungsstatus ge&auml;ndert und Datenbank aktualisiert!" );
define( "_AM_XTUBE_BROKEN_NOWCON", "Best&auml;tigungsstatus ge&auml;ndert und Datenbank aktualisiert!" );
define( "_AM_XTUBE_BROKEN_REPORTINFO", "Information &uuml;ber defekte Video-Berichte" );
define( "_AM_XTUBE_BROKEN_REPORTSNO", "Wartende Berichte &uuml;ber defekte Videos:" );
define( "_AM_XTUBE_BROKEN_IGNOREDESC", "<b>Ignoriere</b> den Bericht und l&ouml;sche nur den Bericht." );
define( "_AM_XTUBE_BROKEN_DELETEDESC", "<b>L&ouml;sche</b> die betroffenen Videodaten und den Report." );
define( "_AM_XTUBE_BROKEN_EDITDESC", "<b>&Auml;ndere</b> das Video, um das Problem zu beseitigen." );
define( "_AM_XTUBE_BROKEN_ACKDESC", "<b>Quittieren</b> Setzt den Quittierungsstatus f&uuml;r den Bericht &uuml;ber defekte Videos." );
define( "_AM_XTUBE_BROKEN_CONFIRMDESC", "<b>Besta&auml;tigt</b> Setzt den Best&auml;tigungsstatus f&uuml;r den Bericht &uuml;ber defekte Videos." );
define( "_AM_XTUBE_BROKEN_ACKNOWLEDGED", "Quittiert" );
define( "_AM_XTUBE_BROKEN_DCONFIRMED", "Best&auml;tigt" );

define( "_AM_XTUBE_BROKEN_ID", "ID" );
define( "_AM_XTUBE_BROKEN_TITLE", "Titel" );
define( "_AM_XTUBE_BROKEN_REPORTER", "Reporter" );
define( "_AM_XTUBE_BROKEN_FILESUBMITTER", "Einsender" );
define( "_AM_XTUBE_BROKEN_DATESUBMITTED", "Einsendedatum" );
define( "_AM_XTUBE_BROKEN_ACTION", "Aktion" );
define( "_AM_XTUBE_BROKEN_NOFILEMATCH", "Es gibt keinen Bericht &uuml;ber defekte Videos mit dieses kriterien" );
define( "_AM_XTUBE_BROKENFILEDELETED", "Video und Bericht &uuml;ber Defektes Video wurden gel&ouml;scht" );
/**
 * About defines
 */
define( "_AM_XTUBE_BY", "von" );
// block defines
define( "_AM_XTUBE_BADMIN", "Block Administration" );
define( "_AM_XTUBE_BLKDESC", "Beschreibung" );
define( "_AM_XTUBE_TITLE", "Titel" );
define( "_AM_XTUBE_SIDE", "Ausrichtung" );
define( "_AM_XTUBE_WEIGHT", "Gewichtung" );
define( "_AM_XTUBE_VISIBLE", "Sichtbar" );
define( "_AM_XTUBE_ACTION", "Aktion" );
define( "_AM_XTUBE_SBLEFT", "Videos" );
define( "_AM_XTUBE_SBRIGHT", "Rechts" );
define( "_AM_XTUBE_CBLEFT", "Mitte links" );
define( "_AM_XTUBE_CBRIGHT", "Mitte rechts" );
define( "_AM_XTUBE_CBCENTER", "Mitte mittig" );
define( "_AM_XTUBE_ACTIVERIGHTS", "Active Berechtigungen" );
define( "_AM_XTUBE_ACCESSRIGHTS", "Zugriffsberechtigungen" );
// image admin icon
define( "_AM_XTUBE_ICO_EDIT", "Eintrag &auml;ndern" );
define( "_AM_XTUBE_ICO_DELETE", "Eintrag l&ouml;schen" );
define( "_AM_XTUBE_ICO_RESOURCE", "Resource editieren" );

define( "_AM_XTUBE_ICO_ONLINE", "Online" );
define( "_AM_XTUBE_ICO_OFFLINE", "Offline" );
define( "_AM_XTUBE_ICO_APPROVED", "Best&auml;tigt" );
define( "_AM_XTUBE_ICO_NOTAPPROVED", "Nicht best&auml;tigt" );

define( "_AM_XTUBE_ICO_LINK", "Verwandtes Video" );
define( "_AM_XTUBE_ICO_URL", "Verwandte URL hinzuf&uuml;gen" );
define( "_AM_XTUBE_ICO_ADD", "Hinzuf&uuml;gen" );
define( "_AM_XTUBE_ICO_APPROVE", "Best&auml;tigen" );
define( "_AM_XTUBE_ICO_STATS", "Statistiken" );
define( "_AM_XTUBE_ICO_VIEW", "Eintrag anzeigen" );

define( "_AM_XTUBE_ICO_IGNORE", "Ignorieren" );
define( "_AM_XTUBE_ICO_ACK", "Bericht &uuml;ber defekte Videos quittieren" );
define( "_AM_XTUBE_ICO_REPORT", "Bericht &uuml;ber defekte Videos quittieren?" );
define( "_AM_XTUBE_ICO_CONFIRM", "Bericht &uuml;ber defekte Videos best&auml;tigen" );
define( "_AM_XTUBE_ICO_CONBROKEN", "Bericht &uuml;ber defekte Videos best&auml;tigen?" );
define( "_AM_XTUBE_ICO_RES", "Editieren Resourcen/Videos f&uuml;r diesen Eintrag" );
define( "_AM_XTUBE_MOD_URLRATING", "Interent Content Rating:" );
// Alternate category
define( "_AM_XTUBE_ALTCAT_CREATEF", "Alternative Kategorie hinzuf&uuml;gen" );
define( "_AM_XTUBE_MALTCAT", "Alternative Kategorieverwaltung" );
define( "_AM_XTUBE_ALTCAT_MODIFYF", "Alternative Kategorieverwaltung" );
define( "_AM_XTUBE_ALTCAT_INFOTEXT", "<ul><li>Alternative Kategorien k&ouml;nnen durch Benutzung dieses Formblatts hinzugef&uuml;gt oder entfernt werden.</li></ul>" );
define( '_AM_XTUBE_ALTCAT_CREATED', 'Alternative Kategorien gespeichert!' );

define( "_AM_XTUBE_MRESOURCES", "Resourcenverwaltung" );
define( "_AM_XTUBE_RES_CREATED", "Resourcenverwaltung" );
define( "_AM_XTUBE_RES_ID", "ID" );
define( "_AM_XTUBE_RES_DESC", "Beschreibung" );
define( "_AM_XTUBE_RES_NAME", "Resourcenname" );
define( "_AM_XTUBE_RES_TYPE", "Resourcen Typ" );
define( "_AM_XTUBE_RES_USER", "Benutzer" );
define( "_AM_XTUBE_RES_CREATEF", "Resource hinzuf&uuml;gen" );
define( "_AM_XTUBE_RES_MODIFYF", "Resource &auml;ndern" );
define( "_AM_XTUBE_RES_NAMEF", "Resourcenname:" );
define( "_AM_XTUBE_RES_DESCF", "Resourcebeschreibung:" );
define( "_AM_XTUBE_RES_URLF", "Resourcen - URL:" );
define( "_AM_XTUBE_RES_ITEMIDF", "Resourcen Eintrag ID:" );
define( "_AM_XTUBE_RES_INFOTEXT", "<ul><li>Neue Resourcen k&ouml;nnen durch Benutzung dieses Formblatts hinzugef&uuml;gt oder entfernt werden.</li>
	<li>Auflisten aller verlinkten Resourcen</li>
	<li>Resourcenname und Beschreibung &auml;ndern</li></ul>
	" );
define( "_AM_XTUBE_LISTBROKEN", "M&ouml;glicherweise defekte Videos anzeigen. PS: Die Resultate sind eventuell nicht genau und sollten nur als grober Anhalt dienen.<br /><br />&Uuml;berpr&uuml;fen Sie zuerst die existierenden Videos bevor Sie weiter Aktionen durchf&uuml;hren.<br /><br />" );
define( "_AM_XTUBE_PINGTIMES", "Zeigt die erste gesch&auml;tzte Pingzeit f&uuml;r jedes Video.<br /><br />PS: Die Resultate sind eventuell nicht genau und sollten nur als grober Anhalt dienen.<br /><br />" );

define( "_AM_XTUBE_NO_FORUM", "Kein Forum ausgew&auml;hlt" );

define( "_AM_XTUBE_PERM_RATEPERMISSIONS", "Bewertungsberechtigungen" );
define( "_AM_XTUBE_PERM_RATEPERMISSIONS_TEXT", "W&auml;hlt die Gruppe die Videos in den ausgew&auml;hlten Kategorien bewerten darf." );

define( "_AM_XTUBE_PERM_AUTOPERMISSIONS", "Automatisch freigegebene Videos" );
define( "_AM_XTUBE_PERM_AUTOPERMISSIONS_TEXT", "W&auml;hlt die Gruppe die Videos ohne vorherige freigabe durch den Admin einsenden darf." );

define( "_AM_XTUBE_PERM_SPERMISSIONS", "Berechtigungen f&uuml;r Einsender" );
define( "_AM_XTUBE_PERM_SPERMISSIONS_TEXT", "W&auml;hlt die Gruppe die Videos in die ausgew&auml;hlten Kategorien einsenden darf." );

define( "_AM_XTUBE_PERM_APERMISSIONS", "Moderatoren Gruppe" );
define( "_AM_XTUBE_PERM_APERMISSIONS_TEXT", "W&auml;hlt die Gruppe mit Moderatorenstatus f&uuml;r die ausgew&auml;hlten Kategorien." );

// added by McDonald
define( "_AM_XTUBE_TIME", "Zeit:" );
define( "_AM_XTUBE_KEYWORDS", "Schl&uuml;sselw&ouml;rter:" );
define( "_AM_XTUBE_KEYWORDS_NOTE", "Schl&uuml;sselw&ouml;rter durch Komma trennen (Wort1, Wort2, Wort3, ..)" );
define("_AM_XTUBE_VIDEO_META_DESCRIPTION", "Meta Description");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION_DSC", "In order to help Search Engines, you can customize the meta description you would like to use for this article. if you leave this field empty when creating a category, it will automatically be populated with the Summary field of this article.");

define( "_AM_XTUBE_VIDSOURCE", "Video Herkunft:" );
define( "_AM_XTUBE_VIDSOURCE2", "Video Herkunft" );
define( "_AM_XTUBE_YOUTUBE", "YouTube" );
define( "_AM_XTUBE_METACAFE", "MetaCafe" );
define( "_AM_XTUBE_IFILM", "Spike" );
define( "_AM_XTUBE_GOOGLEVIDEO", "Google Video" );
define( "_AM_XTUBE_MYSPAVETV", "MySpace TV" );
define( "_AM_XTUBE_PHOTOBUCKET", "Photobucket" );
define( "_AM_XTUBE_DAILYMOTION", "DailyMotion" );

// Version 1.04
define( "_AM_XTUBE_BLIPTV", "Blip.tv" );
define( "_AM_XTUBE_MYTUBE", "MyTube" );
define( "_AM_XTUBE_ICO_EXPIRE", "Expired" );
define( "_AM_XTUBE_MMYTUBE", "Add MyTube Clip" );
define( "_AM_XTUBE_VIDEO_CATVIDEOIMG", "Video images" );
define( "_AM_XTUBE_VIDEO_FCATVIDEOIMG", "Video image path" );
define( "_AM_XTUBE_VUPLOAD_VIDEOEXIST", "Video already exists" );
define( "_AM_XTUBE_VUPLOAD_VIDEOUPLOAD", "Video uploaded" );
define( "_AM_XTUBE_VUPLOAD_NOVIDEOEXIST", "No Video exists" );
define( "_AM_XTUBE_VUPLOAD_FILEDELETED", "Video deleted" );
define( "_AM_XTUBE_VUPLOAD_FILEERRORDELETE", "Error" );
define( "_AM_XTUBE_VUPLOAD_NOFILEERROR", "No File" );
define( "_AM_XTUBE_VUPLOAD_DELETEFILE", "Delete video file" );
define( "_AM_XTUBE_VUPLOAD_CATVIDEO", "Video files" );
define( "_AM_XTUBE_VUPLOAD_FCATVIDEO", "Video upload directory" );
define( "_AM_XTUBE_VUPLOADS", "Video Upload" );
define( "_AM_XTUBE_VUPLOAD_FUPLOADPATH", "Video upload path:" );
define( "_AM_XTUBE_VUPLOAD_FUPLOADURL", "Video upload url:" );
define( "_AM_XTUBE_VUPLOAD_FUPLOADVIDEOTO", "Upload video: " );
define( "_AM_XTUBE_VUPLOAD_FOLDERSELECTION", "Select upload destination" );
define( "_AM_XTUBE_VUPLOAD_FUPLOADVIDEO", "Video to upload" );
define( "_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Select a video file" );
define( "_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "Video file must be of type FLV" );
define( "_AM_XTUBE_BDELETEVIDEO", "Delete video" );
define( "_AM_XTUBE_NOVIDEO", "Show No Video" );
define( "_AM_XTUBE_NOIMAGE", "Show No Image" );
define( "_AM_XTUBE_NOSELECT", "No Selection" );
define( "_AM_XTUBE_NOFILESELECT", "No Selected File" );
define( "_AM_XTUBE_MYTUBEVIDEO", "MyTube Video File:" );
define( "_AM_WFL_WARNINSTALL4", "<b>WARNING:</b> <u>Folder</u> %s is not writeable. <br />This folder needs to be writeable (CHMOD 777) for MyTube." );
// Uploader class
define( "_AM_XTUBE_READWRITEERROR", "You either did not choose a file to upload or the server has insufficient read/writes to upload this file!" );
define( "_AM_XTUBE_INVALIDFILESIZE", "Invalid File Size" );
define( "_AM_XTUBE_FILENAMEEMPTY", "Filename Is Empty" );
define( "_AM_XTUBE_NOFILEUPLOAD", "No file uploaded, this is a error" );
define( "_AM_XTUBE_UPLOADERRORZERO", "There was a problem with your upload. Error: 0" );
define( "_AM_XTUBE_UPLOADERRORONE", "The file you are trying to upload is too big. Error: 1" );
define( "_AM_XTUBE_UPLOADERRORTWO", "The file you are trying to upload is too big. Error: 2" );
define( "_AM_XTUBE_UPLOADERRORTHREE", "The file you are trying upload was only partially uploaded. Error: 3" );
define( "_AM_XTUBE_UPLOADERRORFOUR", "No file selected for upload. Error: 4" );
define( "_AM_XTUBE_UPLOADERRORFIVE", "No file selected for upload. Error: 5" );
define( "_AM_XTUBE_NOUPLOADDIR", "Upload directory not set" );
define( "_AM_XTUBE_FAILOPENDIR", "Failed opening directory: " );
define( "_AM_XTUBE_FAILOPENDIRWRITEPERM", "Failed opening directory with write permission: " );
define( "_AM_XTUBE_FILESIZEMAXSIZE", "File Size: %u. Maximum Size Allowed: %u" );
define( "_AM_XTUBE_FILESIZEMAXWIDTH", "File width: %u. Maximum width allowed: %u" );
define( "_AM_XTUBE_FILESIZEMAXHEIGHT", "File height: %u. Maximum height allowed: %u" );
define( "_AM_XTUBE_MIMENOTALLOW", "MIME type not allowed: " );
define( "_AM_XTUBE_FAILEDUPLOADING", "Failed uploading file: " );
define( "_AM_XTUBE_ALREADYEXISTTRYAGAIN", " already exists on the server. Please rename this file and try again.<br />" );
define( "_AM_XTUBE_ERRORSRETURNUPLOAD", "<h4>Errors Returned While Uploading</h4>" );
define( "_AM_XTUBE_DOESNOTEXIST", " does not exist!" );

?>