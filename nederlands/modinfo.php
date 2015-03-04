<?php
/**
 * $Id: modinfo.php
 * Module: MyTube
 * Language: nederlands (dutch)
 * Author: McDonald
 * Format: UTF-8
 */

// Module Info
// The name of this module
define("_MI_MYTUBE_NAME","MyTube");

// A brief description of this module
define("_MI_MYTUBE_DESC","Met de module <em>MyTube</em> kunt u videos van sites als YouTube, DailyMotion, LiveLeak, etc. toevoegen aan uw eigen website en ze onderverdelen in categorieën.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYTUBE_BNAME1","Recente videos (t)");
define("_MI_MYTUBE_BNAME2","Recente videos");
define("_MI_MYTUBE_BNAME3","Top videos (t)");
define("_MI_MYTUBE_BNAME4","Top videos");
define("_MI_MYTUBE_BNAME5","Recente videos (h)");
define("_MI_MYTUBE_BNAME6","Willekeurige videos");
define("_MI_MYTUBE_BNAME7","Willekeurige videos (h)");

// Sub menu titles
define("_MI_MYTUBE_SMNAME1","Inzenden");
define("_MI_MYTUBE_SMNAME2","Populair");
define("_MI_MYTUBE_SMNAME3","Hoogste beoordeling");
define("_MI_MYTUBE_SMNAME4","Laatste");

// Names of admin menu items
define("_MI_MYTUBE_BINDEX","Hoofd index");
define("_MI_MYTUBE_INDEXPAGE","Index pagina management");
define("_MI_MYTUBE_MCATEGORY","Categorie management");
define("_MI_MYTUBE_MVIDEOS","Video management");
define("_MI_MYTUBE_MUPLOADS","Afbeeldingen uploaden");
define("_MI_MYTUBE_PERMISSIONS","Rechten instellingen");
define("_MI_MYTUBE_BLOCKADMIN","Blok instellingen");
define("_MI_MYTUBE_MVOTEDATA","Stemmen");

// Title of config items
define('_MI_MYTUBE_POPULAR', 'Videos populariteit teller');
define('_MI_MYTUBE_POPULARDSC', "Aantal keren bekeken waarna een video de status 'populair' krijgt.");

//Display Icons
define("_MI_MYTUBE_ICONDISPLAY","Videos populair en nieuw:");
define("_MI_MYTUBE_DISPLAYICONDSC", "Selekteer hoe de populair en nieuw iconen worden getoond.");
define("_MI_MYTUBE_DISPLAYICON1", "Toon als icoon");
define("_MI_MYTUBE_DISPLAYICON2", "Toon als tekst");
define("_MI_MYTUBE_DISPLAYICON3", "Niet tonen");

define("_MI_MYTUBE_DAYSNEW","Nieuwe videos:");
define("_MI_MYTUBE_DAYSNEWDSC","Aantal dagen dat een video de status 'nieuw' heeft.");
define("_MI_MYTUBE_DAYSUPDATED","Bijgewerkte videos:");
define("_MI_MYTUBE_DAYSUPDATEDDSC","Aantal dagen dat een video de status 'geupdate' heeft.");

define('_MI_MYTUBE_PERPAGE', 'Videos in index:');
define('_MI_MYTUBE_PERPAGEDSC', 'Aantal videos dat getoond wordt in iedere categorie index.');

define('_MI_MYTUBE_USESHOTS', 'Screenshots tonen?');
define('_MI_MYTUBE_USESHOTSDSC', 'Selekteer Ja om screenshots voor iedere video te tonen');
define('_MI_MYTUBE_SHOTWIDTH', 'Screenshot breedte');
define('_MI_MYTUBE_SHOTWIDTHDSC', 'Toon breedte voor screenshot afbeelding');
define('_MI_MYTUBE_SHOTHEIGHT', 'Screenshot hoogte');
define('_MI_MYTUBE_SHOTHEIGHTDSC', 'Toon hoogte voor screenshot afbeelding');
define('_MI_MYTUBE_CHECKHOST', 'Niet toestaan om een video direkt door te linken? (leeching)');
define('_MI_MYTUBE_REFERERS', 'Deze websites mogen direct door linken naar de videos van deze module<br />Scheiden door #');
define("_MI_MYTUBE_ANONPOST","Anonieme gebruikers inzendingen:");
define("_MI_MYTUBE_ANONPOSTDSC","Anonieme gebruikers toestaan om in te zenden en/of te uploaden?");
define('_MI_MYTUBE_AUTOAPPROVE','Ingezonden videos automatisch goedkeuren');
define('_MI_MYTUBE_AUTOAPPROVEDSC','Selekteren om ingezonden videos zonder moderatie goed te keuren.');

define('_MI_MYTUBE_MAXFILESIZE','Upload omvang (KB)');
define('_MI_MYTUBE_MAXFILESIZEDSC','Maximale toegestane linkomvang bij linkenuploaden.');
define('_MI_MYTUBE_IMGWIDTH','Breedte te uploaden afbeelding');
define('_MI_MYTUBE_IMGWIDTHDSC','Maximale toegestane afbeeldingsbreedte bij linkenuploaden.');
define('_MI_MYTUBE_IMGHEIGHT','Hoogte te uploaden afbeelding');
define('_MI_MYTUBE_IMGHEIGHTDSC','Maximale toegestane afbeeldingshoogte bij linkenuploaden.');

define('_MI_MYTUBE_UPLOADDIR','Upload bestand (geen trailing slash)');
define('_MI_MYTUBE_ALLOWSUBMISS','Gebruikersinzendingen:');
define('_MI_MYTUBE_ALLOWSUBMISSDSC','Gebruikers toestaan nieuwe videos in te zenden');
define('_MI_MYTUBE_ALLOWUPLOADS','Gebruikers uploads:');
define('_MI_MYTUBE_ALLOWUPLOADSDSC','Gebruikers toestaan nieuwe videos direct te uploaden in de website');
define('_MI_MYTUBE_SCREENSHOTS','Screenshots upload bestand');
define('_MI_MYTUBE_CATEGORYIMG','categorieën afbeelding uploadbestand');
define('_MI_MYTUBE_MAINIMGDIR','Hoofd afbeeldingen bestand');
define('_MI_MYTUBE_USETHUMBS', 'Gebruik thumbnails:');
define("_MI_MYTUBE_USETHUMBSDSC", "Ondersteunde afbeeldingstypen: JPG, GIF, PNG.<div style='padding-top: 8px;'>MyTube gebruikt thumbnails voor afbeeldingen. Selekteer 'Nee' Om het orgineel te gebruiken wanneer de server deze optie niet ondersteund.</div>");
define('_MI_MYTUBE_DATEFORMAT', 'Datum weergave:');
define('_MI_MYTUBE_DATEFORMATDSC', 'Standaard datumweergave voor MyTube:');
define('_MI_MYTUBE_SHOWDISCLAIMER', 'Toon disclaimer voordat gebruikers inzenden?');
define('_MI_MYTUBE_SHOWDISCLAIMERDSC', 'Toon de opgave richtlijnen voordat een gebruiker een video kan inzenden?');
define('_MI_MYTUBE_SHOWVIDEODISCL', 'Toon disclaimer voordat een gebruiker kan linken?');
define('_MI_MYTUBE_SHOWVIDEODISCLDSC', 'Toon richtlijnen voor videos voordat een video opend?');
define('_MI_MYTUBE_DISCLAIMER', 'Voer de inzend disclaimer tekst in:');
define('_MI_MYTUBE_VIDEODISCLAIMER', 'Voer de video disclaimer tekst in:');
define('_MI_MYTUBE_SUBCATS', 'Sub-categorieën:');
define("_MI_MYTUBE_SUBMITART", "video inzenden:");
define("_MI_MYTUBE_SUBMITARTDSC", "Selekteer de groep die nieuwe videos kan inzenden.");
define("_MI_MYTUBE_RATINGGROUPS", "video beoordeling:");
define("_MI_MYTUBE_RATINGGROUPSDSC", "Selekteer groepen die videos kunnen beoordelen.");
define("_MI_MYTUBE_IMGUPDATE", "Thumbnails bijwerken?");
define("_MI_MYTUBE_IMGUPDATEDSC", "Als de geselekteerde thumbnails per pagina worden geupdate, anders wordt de eerste thumbnail gebruikt.");
define("_MI_MYTUBE_QUALITY", "Thumbnail kwaliteit:");
define("_MI_MYTUBE_QUALITYDSC", "Laagste kwaliteit: 0 Hoogste: 100");
define("_MI_MYTUBE_KEEPASPECT", "Handhaaf de verhouding van een afbeelding?");
define("_MI_MYTUBE_KEEPASPECTDSC", "");
define("_MI_MYTUBE_ADMINPAGE", "Beheerdersindex videos aantal:");
define("_MI_MYTUBE_AMDMINPAGEDSC", "Aantal nieuwe videos dat wordt getoond in het beheerdersgedeelte.");
define("_MI_MYTUBE_ARTICLESSORT", "Standaard videos volgorde:");
define("_MI_MYTUBE_ARTICLESSORTDSC", "Selekteer de standaard volgorde voor de video indexen.");
define("_MI_MYTUBE_TITLE", "Titel");
define("_MI_MYTUBE_RATING", "Beoordeling");
define("_MI_MYTUBE_WEIGHT", "Gewicht");
define("_MI_MYTUBE_POPULARITY", "Populariteit");
define("_MI_MYTUBE_SUBMITTED2", "inzenddatum");
define('_MI_MYTUBE_COPYRIGHT', 'Copyright opmerking:');
define('_MI_MYTUBE_COPYRIGHTDSC', 'Selekteer om een copyright opmerking te tonen op de video pagina.');

// Description of each config items
define('_MI_MYTUBE_SUBCATSDSC', 'Selekteer Ja om sub-categorieën te tonen. Nee selekteren zal sub-categorieën verbergen in de indexen');

// Text for notifications
define('_MI_MYTUBE_GLOBAL_NOTIFY', 'Globaal');
define('_MI_MYTUBE_GLOBAL_NOTIFYDSC', 'Globale video informatie opties.');
define('_MI_MYTUBE_CATEGORY_NOTIFY', 'Categorie');
define('_MI_MYTUBE_CATEGORY_NOTIFYDSC', 'Informatie optie behorend bij de huidige video categorie.');
define('_MI_MYTUBE_VIDEO_NOTIFY', 'Video');
define('_MI_MYTUBE_FILE_NOTIFYDSC', 'Informatie optie behorend bij de huidige video.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'Nieuwe categorie');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Informeer mij wanneer een nieuwe videocategorie is aangemaakt.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe videocategorie is aangemaakt.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe videocategorie');

define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Verzoek video aanpassing');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Informeer mij over ieder verzoek om video aanpassing.');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Ontvang informatie wanneer een aanpassingsverzoek voor een video is ingezonden.');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Video wijziging aangevraagd');

define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Gebroken video rapport');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Informeer mij over ieder gebroken videorapport.');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Ontvang informatie wanneer een gebroken videorapportage is ingezonden.');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Gebroken video gerapporteerd');

define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Video ingezonden');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Informeer mij wanneer een nieuwe video is ingezonden (wachtend op goedkeuring).');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe video is ingezonden (wachtend op goedkeuring).');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe video ingezonden');

define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'Nieuwe video geplaatst');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Informeer mij wanneer een nieuwe video is geplaatst.');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe video is geplaatst.');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe video geplaatst');

define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Video ingezonden');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Informeer mij wanneer een nieuwe video is ingezonden (wachtend op goedkeuring) in de huidige categorie.');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe video is ingezonden (wachtend op goedkeuring) in de huidige categorie.');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe video ingezonden in categorie');

define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'Nieuwe video');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Informeer mij wanneer een nieuwe video is geplaatst in de huidige categorie.');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Ontvang informatie wanneer een nieuwe video is geplaatst in de huidige categorie.');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Nieuwe video geplaatst in categorie');

define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFY', 'Video goedgekeurd');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Informeer mij wanneer deze video is goedgekeurd.');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Ontvang informatie wanneer deze video is goedgekeurd.');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-informatie : Video goedgekeurd');

define('_MI_MYTUBE_AUTHOR_INFO', "Ontwikkelaarsinformatie");
define('_MI_MYTUBE_AUTHOR_NAME', "Ontwikkelaar");
define('_MI_MYTUBE_AUTHOR_DEVTEAM', "Ontwikkelingsteam");
define('_MI_MYTUBE_AUTHOR_WEBSITE', "Ontwikkelaarswebsite");
define('_MI_MYTUBE_AUTHOR_EMAIL', "Ontwikkelaarsemail");
define('_MI_MYTUBE_AUTHOR_CREDITS', "Credits");
define('_MI_MYTUBE_MODULE_INFO', "Module ontwikkelingsinformation");
define('_MI_MYTUBE_MODULE_STATUS', "Ontwikkelingsstatus");
define('_MI_MYTUBE_MODULE_DEMO', "Demo Site");
define('_MI_MYTUBE_MODULE_SUPPORT', "Officiele support site");
define('_MI_MYTUBE_MODULE_BUG', "Rapporteer een bug in deze module");
define('_MI_MYTUBE_MODULE_FEATURE', "Suggesties voor nieuwe opties in deze module");
define('_MI_MYTUBE_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_MYTUBE_RELEASE', "Vrijgave datum: ");

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

define('_MI_MYTUBE_AUTHOR_CREDITSTEXT',"Het WF-Projects Team wil de volgende mensen bedanken voor hun hulp en ondersteuning gedurende de ontwikkelingsfase van deze module.<br /></br />EdStacey, maumed, banned, krobi, Pnooka, MarcoFr, cosmodrum, placebo333");
define('_MI_MYTUBE_AUTHOR_BUGFIXES', "Bug fix geschiedenis");

define('_MI_MYTUBE_COPYRIGHTIMAGE', "Tenzij anders aangegeven, vallen deze module (WF-Links) en zijn afbeeldingen onder het copyright van het WF-Projects team.<br /><br />U heeft de toestemming om WF-Links te copieren, aan te passen en/of te wijzigen om te voldoen aan uw persoonlijke eisen. U gaat er mee akkoord dat u geen wijzigingen aanbrengt, toevoegd aan, en/of de broncode van deze software herdistribueerd zonder de uitdrukkelijke toestemming van het WF-Projects team.");

// added by McDonald
define('_MI_MYTUBE_EDITOR', "Te gebruiken editor (admin):");
define('_MI_MYTUBE_EDITORCHOICE', "Selekteer de te gebruiken editor voor admins.");
define('_MI_MYTUBE_EDITORUSER', "Te gebruiken editor (gebruiker):");
define('_MI_MYTUBE_EDITORCHOICEUSER', "Selekteer de te gebruiken editor voor gebruikers.");
define("_MI_MYTUBE_FORM_DHTML","DHTML");
define("_MI_MYTUBE_FORM_COMPACT","Compact");
define("_MI_MYTUBE_FORM_SPAW","Spaw");
define("_MI_MYTUBE_FORM_HTMLAREA","HtmlArea");
define("_MI_MYTUBE_FORM_FCK","FCKeditor");
define("_MI_MYTUBE_FORM_KOIVI","Koivi");
define("_MI_MYTUBE_FORM_TINYEDITOR","TinyEditor");
define("_MI_MYTUBE_OTHERVIDEOS", "Toon andere videos die door de Inzender zijn ingezonden?");
define("_MI_MYTUBE_OTHERVIDEOSDSC", "Kies Ja als u andere videos van de Inzender wilt tonen.");
define("_MI_MYTUBE_SHOWSBOOKMARKS", "Toon Social Bookmarks?");
define("_MI_MYTUBE_SHOWSBOOKMARKSDSC", "Kies Ja om de Social Bookmark iconen te tonen.");
define("_MI_MYTUBE_TOTALCHARS", "Kies het totaal aantal karakters voor de omschrijving?");
define("_MI_MYTUBE_TOTALCHARSDSC", "Kies het totaal aantal karakters voor de omschrijving van de videos op de Index Pagina.");
define("_MI_MYTUBE_SORTCATS", "Sorteer categorieën op:");
define("_MI_MYTUBE_SORTCATSDSC", "Selekteer hoe categorieën en sub-categorieën gesorteerd moeten worden.");
define("_MI_MYTUBE_USEMETADESCR", "Genereer meta omschrijving:");
define("_MI_MYTUBE_USEMETADSC", "Met deze optie wordt de meta omschrijving gebaseerd op die van de video omschrijving.");
define("_MI_MYTUBE_USERTAGDESCR", "Gebruiker kan Tags invoeren:");
define("_MI_MYTUBE_USERTAGDSC", "Kies Ja als de gebruiker tags mag inzenden.");

// version 1.02
define("_MI_MYTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_MYTUBE_FORM_DHTMLEXT", "DHTML Extended");

// Version 1.03
define('_MI_MYTUBE_DATEFORMATADMIN', 'Datum weergave administratie:');
define('_MI_MYTUBE_DATEFORMATADMINDSC', 'Standaard datum weergave administratie van MyTube');

// Version 1.04 RC-1
define('_MI_MYTUBE_VIDEODIR', 'Video upload map:');
define('_MI_MYTUBE_VIDEODIRDSC', 'Stel de map voor MyTube video bestanden in');
define('_MI_MYTUBE_VIDEOIMGDIR', 'Video screenshots upload map:');
define('_MI_MYTUBE_VIDEOIMGDIRDSC', 'Stel de map in voor MyTube video screenshots');
define('_MI_MYTUBE_FLVPLAYER_CREDITS', 'FLV Speler');
define('_MI_MYTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player door LongTail Video (Jeroen Wijering)');
define('_MI_MYTUBE_VUPLOADS', 'Video upload');
define('_MI_MYTUBE_CATEGORYIMGDSC', '');
define('_MI_MYTUBE_MAINIMGDIRDSC', '');
define('_MI_MYTUBE_BNAME8', 'MyTube Sponsor Statistieken' );
define('_MI_MYTUBE_ICONS_CREDITS', "Icons");

// Version 1.04 RC-2
define('_MI_MYTUBE_MODULE_MANUAL', 'Handleiding' );
define('_MI_MYTUBE_MODULE_MANUALWIKI', 'Wiki Handleiding' );
define('_MI_MYTUBE_MODULE_REQUESTNEWFEATURE', 'Vraag een nieuwe eigenschap aan' );
define('_MI_MYTUBE_MODULE_SUBMITBUG', 'Rapporteer een bug in deze module' );
define("_MI_MYTUBE_BNAME9","MyTube Tag Cloud");
define("_MI_MYTUBE_BNAME10","MyTube Top Tags");
define('_MI_MYTUBE_FLVPLAYER_MANUAL', 'FLV Speler Handleiding');
define('_MI_MYTUBE_FLVPLAYER_WIKI', 'JW Player Wiki');

// Version 1.05 RC-1
define( "_MI_MYTUBE_CATCOLUMNS", "Kies het aantal categorie kolommen:" );
define( "_MI_MYTUBE_CATCOLUMNSDSC", "Kies het aantal kolommen, standaard is 2" );
define( "_MI_MYTUBE_RATINGDISPLAY", "Stem opties laten zien?" );
define( "_MI_MYTUBE_RATINGDISPLAYDSC", "Kies <em>Ja</em> om de Stem opties te laten zien. Kies <em>Nee</em> om de Stem oties niet te laten zien. <em>Nee</em> blokeert ook de toegang tot de Stem Pagina." );
define( "_MI_MYTUBE_AUTOPLAY", "Automatisch afspelen video" );
define( "_MI_MYTUBE_AUTOPLAYDSC", "Kies <em>Ja</em> om de videoclips automatisch af te spelen." );
define( '_MI_MYTUBE_VERSION', 'Versie' );
define( '_MI_MYTUBE_LICENSE', 'Licentie' );
define( '_MI_MYTUBE_LICENSEDSC', 'GNU General Public License (GPL) - een kopie van de GNU licentie is bijgesloten (license.txt).' );

//Version 1.06 RC-1
define( '_MI_MYTUBE_FLVPLAYER_LICENSE', 'JW FLV Media Player licentie' );
define( '_MI_MYTUBE_FLVPLAYER_LICENSEDSC', 'Lees de licentie hier' );
define( '_MI_MYTUBE_WARNING_FINAL', 'Deze module komt zoals hij is, zonder welke garantie dan ook. Ondanks dat de status van deze module geen beta is, is de module nog steeds in actieve ontwikkeling. Deze uitgave kan worden gebruikt in een actieve/online website of in een productieve omgeving, maar het gebruik valt volledig onder uw eigen verantwoordelijkheid, dit betekent dat de auteur niet verantwoordelijk is.' );
define( '_MI_MYTUBE_WARNING_RC', 'Deze module komt zoals hij is, zonder welke garantie dan ook. Deze module is een uitgave kandidaat en dient niet te worden gebruikt in een actieve/online website of in een productieve omgeving. De module is nog steeds in actieve ontwikkeling en het gebruik ervan valt onder uw eigen verantwoordelijkheid, dit betekent dat de auteur niet verantwoordelijk is.' );
define( '_MI_MYTUBE_MMYTUBE', 'MyTube Clip' );
define( '_MI_MYTUBE_RSSFEED', 'RSS Feed' );
define( '_MI_MYTUBE_CAPTCHA', 'Gebruik captcha in inzendformulier?' );
define( '_MI_MYTUBE_CAPTCHADSC', 'Kies <em>Ja</em> om captcha in het inzendformulier te gebruiken.<br />Standaard: <em>Ja</em>' );
define( '_MI_MYTUBE_NICEURL', 'Gebruik nette urls?' );
define( '_MI_MYTUBE_NICEURLDSC', 'Gebruik nette urls voor videoclips.' );
?>