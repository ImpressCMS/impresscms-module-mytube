<?php
/**
 * $Id: admin.php
 * Module: MyTube
 * Language: nederlands (dutch)
 * Author: McDonald
 * Format: UTF-8
 */
 
define( "_AM_MYTUBE_WARNINSTALL1", "WAARSCHUWING: Map %s bestaat op uw server. <br />Verwijder deze map om veiligheidsrederen aub." );
define( "_AM_MYTUBE_WARNINSTALL2", "WAARSCHUWING: Bestand %s bestaat op uw server. <br />Verwijder deze map om veiligheidsrederen aub." );
define( "_AM_MYTUBE_WARNINSTALL3", "WAARSCHUWING: Map %s bestaat niet op uw server. <br />Deze map is nodig voor MyTube." );

define( "_AM_MYTUBE_MODULE_NAME", "MyTube" );

define( "_AM_MYTUBE_BMODIFY", "Aanpassen" );
define( "_AM_MYTUBE_BDELETE", "Verwijderen" );
define( "_AM_MYTUBE_BCREATE", "Aanmaken" );
define( "_AM_MYTUBE_BADD", "Toevoegen" );
define( "_AM_MYTUBE_BAPPROVE", "Goedkeuren" );
define( "_AM_MYTUBE_BIGNORE", "Negeren" );
define( "_AM_MYTUBE_BCANCEL", "Annuleren" );
define( "_AM_MYTUBE_BSAVE", "Opslaan" );
define( "_AM_MYTUBE_BRESET", "Reset" );
define( "_AM_MYTUBE_BMOVE", "Verplaats videos" );
define( "_AM_MYTUBE_BUPLOAD", "Uploaden" );
define( "_AM_MYTUBE_BDELETEIMAGE", "Verwijder geselekteerde afbeelding" );
define( "_AM_MYTUBE_BRETURN", "Ga terug naar waar u was!" );
define( "_AM_MYTUBE_DBERROR", "Database toegang fout: Rapporteer deze fout." );

// Other Options
define( "_AM_MYTUBE_TEXTOPTIONS", "Tekst opties:" );
define( "_AM_MYTUBE_DISABLEHTML", " Uitschakelen HTML tags" );
define( "_AM_MYTUBE_DISABLESMILEY", " Uitschakelen Smilies" );
define( "_AM_MYTUBE_DISABLEXCODE", " Uitschakelen XOOPS codes" );
define( "_AM_MYTUBE_DISABLEIMAGES", " Uitschakelen afbeeldingen" );
define( "_AM_MYTUBE_DISABLEBREAK", " Gebruik XOOPS linebreak omzetting?" );
define( "_AM_MYTUBE_UPLOADFILE", "Video succesvol geupload" );
define( "_AM_MYTUBE_NOMENUITEMS", "Geen menu items in het menu" );

// Admin Bread crumb
define( "_AM_MYTUBE_PREFS", "Instellingen" );
define( "_AM_MYTUBE_BUPDATE", "Module bijwerken" );
define( "_AM_MYTUBE_BINDEX", "Hoofd index" );
define( "_AM_MYTUBE_BPERMISSIONS", "Rechten" );
define( "_AM_MYTUBE_BLOCKADMIN", "Blokinstellingen" );
define( "_AM_MYTUBE_GOMODULE", "Ga naar module" );
define( "_AM_MYTUBE_ABOUT", "Over" );

// Admin Summary
define( "_AM_MYTUBE_SCATEGORY", "Categorie: " );
define( "_AM_MYTUBE_SFILES", "Videos: " );
define( "_AM_MYTUBE_SNEWFILESVAL", "Ingezonden: " );
define( "_AM_MYTUBE_SMODREQUEST", "Aangepast: " );
define( "_AM_MYTUBE_SREVIEWS", "Beoordelingen: " );

// Admin Main Menu
define( "_AM_MYTUBE_MCATEGORY", "Categorie management" );
define( "_AM_MYTUBE_MVIDEOS", "Video management" );
define( "_AM_MYTUBE_MLISTBROKEN", "Gebroken videos index" );
define( "_AM_MYTUBE_MLISTPINGTIMES", "Videos pingtijd index" );
define( "_AM_MYTUBE_INDEXPAGE", "Index pagina management" );
define( "_AM_MYTUBE_MCOMMENTS", "Commenta(a)r(en)" );
define( "_AM_MYTUBE_MVOTEDATA", "Stem data" );
define( "_AM_MYTUBE_MUPLOADS", "Afbeelding upload" );

// Catgeory defines
define( "_AM_MYTUBE_CCATEGORY_CREATENEW", "Nieuwe categorie" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY", "Categorie aanpassen" );
define( "_AM_MYTUBE_CCATEGORY_MOVE", "Verplaats videos categorie" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_TITLE", "categorie titel:" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_FAILED", "Videos verplaatsen mislukt: kan niet verplaatsen naar deze categorie" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_FAILEDT", "Videos verplaatsen mislukt: Kan deze categorie niet vinden" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_MOVED", "Videos verplaatst en categorie verwijderd" );
define( "_AM_MYTUBE_CCATEGORY_CREATED", "Nieuwe categorie aangemaakt en database succesvol geupdate" );
define( "_AM_MYTUBE_CCATEGORY_MODIFIED", "Geselekteerde categorie aangemaakt en database succesvol geupdate" );
define( "_AM_MYTUBE_CCATEGORY_DELETED", "Geselekteerde categorie verwijderd en database succesvol geupdate" );
define( "_AM_MYTUBE_CCATEGORY_AREUSURE", "Waarschuwing: Deze categorie en alle videos en inhoud verwijderen?" );
define( "_AM_MYTUBE_CCATEGORY_NOEXISTS", "Eerst een categorie aanmaken voordat een video kan worden toegevoegd" );
define( "_AM_MYTUBE_FCATEGORY_GROUPPROMPT", "Categorie toegangsrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgroepen die toegang hebben tot deze categorie.</span></div>" );
define( "_AM_MYTUBE_FCATEGORY_SUBGROUPPROMPT", "Categorie inzendrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgropen die rechten hebben om nieuwe videos voor deze categorie in te zenden.</span></div>" );
define( "_AM_MYTUBE_FCATEGORY_MODGROUPPROMPT", "Categorie aanpassingsrechten:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selekteer gebruikersgroepen die rechten hebben om deze categorie te beheren.</span></div>" );

define( "_AM_MYTUBE_FCATEGORY_TITLE", "Categorie titel:" );
define( "_AM_MYTUBE_FCATEGORY_WEIGHT", "Categorie gewicht:" );
define( "_AM_MYTUBE_FCATEGORY_SUBCATEGORY", "Instellen als sub-categorie van:" );
define( "_AM_MYTUBE_FCATEGORY_CIMAGE", "Selekteer categorie afbeelding:" );
define( "_AM_MYTUBE_FCATEGORY_DESCRIPTION", "Categorie omschrijving:" );
define( "_AM_MYTUBE_FCATEGORY_SUMMARY", "Categorie samenvatting:" );
/**
 * Index page Defines
 */
define( "_AM_MYTUBE_IPAGE_UPDATED", "Index pagina aangepast en database succelvol geupdate!" );
define( "_AM_MYTUBE_IPAGE_INFORMATION", "Index pagina informatie" );
define( "_AM_MYTUBE_IPAGE_MODIFY", "Index pagina aanpassen" );
define( "_AM_MYTUBE_IPAGE_CIMAGE", "Index afbeelding:" );
define( "_AM_MYTUBE_IPAGE_CTITLE", "Index titel:" );
define( "_AM_MYTUBE_IPAGE_CHEADING", "Index koptekst:" );
define( "_AM_MYTUBE_IPAGE_CHEADINGA", "Koptekst uitlijning:" );
define( "_AM_MYTUBE_IPAGE_CFOOTER", "Index voettekst:" );
define( "_AM_MYTUBE_IPAGE_CFOOTERA", "Voettekst uitlijning:" );
define( "_AM_MYTUBE_IPAGE_CLEFT", "Uitlijnen links" );
define( "_AM_MYTUBE_IPAGE_CCENTER", "Uitlijnen midden" );
define( "_AM_MYTUBE_IPAGE_CRIGHT", "Uitlijnen rechts" );
/**
 * Permissions defines
 */
define( "_AM_MYTUBE_PERM_MANAGEMENT", "Rechten instellingen" );
define( "_AM_MYTUBE_PERM_PERMSNOTE", "<div><b>Opmerking:</b> Stel hier de juiste rechten in, anders kunnen gebruikersgroepen mogelijk bepaalde artikelen en blokken niet of juist wel zien. Let tevens op de module toegangsrechten! Om deze in te stellen ga naar <b>System admin > Groepen</b>, kies de gewenste groep en selekteer de checkboxen om de toegang te wijzigen.</div>" );
define( "_AM_MYTUBE_PERM_CPERMISSIONS", "Categorie rechten" );
define( "_AM_MYTUBE_PERM_CSELECTPERMISSIONS", "Selekteer categorieën die alle groepen mogen zien" );
define( "_AM_MYTUBE_PERM_CNOCATEGORY", "Kan geen rechten instellen: Er zijn geen categorieën aangemaakt!" );
define( "_AM_MYTUBE_PERM_FPERMISSIONS", "Video rechten" );
define( "_AM_MYTUBE_PERM_FNOFILES", "Kan geen rechten instellen: er zijn geen videos aangemaakt!" );
define( "_AM_MYTUBE_PERM_FSELECTPERMISSIONS", "Selekteer videos die alle groepen mogen zien" );
/**
 * Upload defines
 */
define( "_AM_MYTUBE_VIDEO_IMAGEUPLOAD", "Afbeelding succesvol geupload" );
define( "_AM_MYTUBE_VIDEO_NOIMAGEEXIST", "FOUT: geen video geselekteerd om te uploaden. Probeer het nogmaals!" );
define( "_AM_MYTUBE_VIDEO_IMAGEEXIST", "Afbeelding bestaat al in het uploadgedeelte!" );
define( "_AM_MYTUBE_VIDEO_FILEDELETED", "Afbeelding is verwijderd." );
define( "_AM_MYTUBE_VIDEO_FILEERRORDELETE", "FOUT video verwijderen: Afbeelding is niet gevonden op server." );
define( "_AM_MYTUBE_VIDEO_NOFILEERROR", "FOUT video verwijderen: Geen afbeelding geselekteerd om te verwijderen." );
define( "_AM_MYTUBE_VIDEO_DELETEFILE", "WAARSCHUWING: deze afbeelding verwijderen?" );
define( "_AM_MYTUBE_VIDEO_IMAGEINFO", "Server status" );
define( "_AM_MYTUBE_VIDEO_SPHPINI", "<b>Informatie uit PHP.ini link:</b>" );
define( "_AM_MYTUBE_VIDEO_SAFEMODESTATUS", "Veilige mode status: " );
define( "_AM_MYTUBE_VIDEO_REGISTERGLOBALS", "Register globals: " );
define( "_AM_MYTUBE_VIDEO_SERVERUPLOADSTATUS", "Server uploads status: " );
define( "_AM_MYTUBE_VIDEO_MAXUPLOADSIZE", "Max upload grootte toegestaan: " );
define( "_AM_MYTUBE_VIDEO_MAXPOSTSIZE", "Max inzending grootte toegestaan: " );
define( "_AM_MYTUBE_VIDEO_SAFEMODEPROBLEMS", " (Dit kan problemen veroorzaken)" );
define( "_AM_MYTUBE_VIDEO_GDLIBSTATUS", "GD Library support: " );
define( "_AM_MYTUBE_VIDEO_GDLIBVERSION", "GD Library versie: " );
define( "_AM_MYTUBE_VIDEO_GDON", "<b>ingeschakeld</b> (thumbsnails beschikbaar)" );
define( "_AM_MYTUBE_VIDEO_GDOFF", "<b>uitgeschakeld</b> (thumbnails niet beschikbaar)" );
define( "_AM_MYTUBE_VIDEO_OFF", "<b>uit</b>" );
define( "_AM_MYTUBE_VIDEO_ON", "<b>aan</b>" );
define( "_AM_MYTUBE_VIDEO_CATIMAGE", "categorie afbeeldingen" );
define( "_AM_MYTUBE_VIDEO_SCREENSHOTS", "Screenshot afbeeldingen" );
define( "_AM_MYTUBE_VIDEO_MAINIMAGEDIR", "Hoofd afbeeldingen" );
define( "_AM_MYTUBE_VIDEO_FCATIMAGE", "categorie afbeeldingen pad" );
define( "_AM_MYTUBE_VIDEO_FSCREENSHOTS", "Screenshot fbeeldingen pad" );
define( "_AM_MYTUBE_VIDEO_FMAINIMAGEDIR", "Hoofd afbeeldingen pad" );
define( "_AM_MYTUBE_VIDEO_FUPLOADIMAGETO", "Upload afbeelding: " );
define( "_AM_MYTUBE_VIDEO_FUPLOADPATH", "Upload pad: " );
define( "_AM_MYTUBE_VIDEO_FUPLOADURL", "Upload URL: " );
define( "_AM_MYTUBE_VIDEO_FOLDERSELECTION", "Selekteer upload bestemming:" );
define( "_AM_MYTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Toon geselekteerde afbeelding:" );
define( "_AM_MYTUBE_VIDEO_FUPLOADIMAGE", "Upload nieuwe afbeelding naar geselekteerde bestemming:" );

// Main Index defines
define( "_AM_MYTUBE_MINDEX_VIDEOSUMMARY", "Module administatie samenvatting" );
define( "_AM_MYTUBE_MINDEX_PUBLISHEDVIDEO", "Gepubliceerde videos:" );
define( "_AM_MYTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Automatisch gepubliseerde videos:" );
define( "_AM_MYTUBE_MINDEX_AUTOEXPIRE", "Automatisch verlopen videos:" );
define( "_AM_MYTUBE_MINDEX_EXPIRED", "Verlopen videos:" );
define( "_AM_MYTUBE_MINDEX_OFFLINEVIDEO", "Offline videos:" );
define( "_AM_MYTUBE_MINDEX_ID", "ID" );
define( "_AM_MYTUBE_MINDEX_TITLE", "Video titel" );
define( "_AM_MYTUBE_MINDEX_POSTER", "Inzender" );
define( "_AM_MYTUBE_MINDEX_ONLINE", "Status" );
define( "_AM_MYTUBE_MINDEX_ONLINESTATUS", "Online status" );
define( "_AM_MYTUBE_MINDEX_PUBLISH", "Publiceren" );
define( "_AM_MYTUBE_MINDEX_PUBLISHED", "Gepubliceerd" );
define( "_AM_MYTUBE_MINDEX_EXPIRE", "Verlopen" );
define( "_AM_MYTUBE_MINDEX_NOTSET", "Geen datum ingesteld" );
define( "_AM_MYTUBE_MINDEX_SUBMITTED", "Inzenddatum" );

define( "_AM_MYTUBE_MINDEX_ACTION", "Aktie" );
define( "_AM_MYTUBE_MINDEX_NOLINKSFOUND", "OPMERKING: Er zijn geen videos overeenkomend met deze kriteria" );
define( "_AM_MYTUBE_MINDEX_PAGE", "<b>Pagina:<b> " );
define( '_AM_MYTUBE_MINDEX_PAGEINFOTXT', '<ul><li>MyTube Hoofdpagina details.</li><li>U kunt eenvoudig veranderingen aanbrengen aan het logo, de afbeelding, de kop en voetteksten om de pagina aan uw wensen te laten voldoen.</li></ul><br />Opmerking: Het gekozen logo wordt door de gehele MyTube module toegepast.' );
define( "_AM_MYTUBE_MINDEX_RESPONSE", "Reaktietijd" );

// Submitted Links
define( "_AM_MYTUBE_SUB_SUBMITTEDFILES", "Ingezonden videos" );
define( "_AM_MYTUBE_SUB_FILESWAITINGINFO", "Wachtende videos informatie" );
define( "_AM_MYTUBE_SUB_FILESWAITINGVALIDATION", "Videos wachtend op goedkeuring: " );
define( "_AM_MYTUBE_SUB_APPROVEWAITINGFILE", "Nieuwe videos informatie <b>accepteren zonder goedkeuring</b>." );
define( "_AM_MYTUBE_SUB_EDITWAITINGFILE", "<b>Wijzig</b> nieuwe video informatie en keur daarna goed." );
define( "_AM_MYTUBE_SUB_DELETEWAITINGFILE", "<b>Verwijder</b> nieuwe video informatie." );
define( "_AM_MYTUBE_SUB_NOFILESWAITING", "Er zijn geen videos overeenkomend met deze kriteria." );
define( "_AM_MYTUBE_SUB_NEWFILECREATED", "Nieuwe video data aangemaakt en database succesvol bijgewerkt." );

// Vote Information
define( "_AM_MYTUBE_VOTE_RATINGINFOMATION", "Stemmen informatie" );
define( "_AM_MYTUBE_VOTE_TOTALVOTES", "Totaal aantal stemmen: " );
define( "_AM_MYTUBE_VOTE_REGUSERVOTES", "Stemmen van geregistreerde gebruikers: %s" );
define( "_AM_MYTUBE_VOTE_ANONUSERVOTES", "Stemmen van anonieme gebruikers: %s" );
define( "_AM_MYTUBE_VOTE_USER", "Gebruiker" );
define( "_AM_MYTUBE_VOTE_IP", "IP Adres" );
define( "_AM_MYTUBE_VOTE_DATE", "Ingezonden op" );
define( "_AM_MYTUBE_VOTE_RATING", "Beoordeling" );
define( "_AM_MYTUBE_VOTE_NOREGVOTES", "Geen stemmen van geregistreerde gebruikers" );
define( "_AM_MYTUBE_VOTE_NOUNREGVOTES", "Geen stemmen van anonieme gebruikers" );
define( "_AM_MYTUBE_VOTE_VOTEDELETED", "Stem data verwijderd." );
define( "_AM_MYTUBE_VOTE_ID", "ID" );
define( "_AM_MYTUBE_VOTE_FILETITLE", "Video titel" );
define( "_AM_MYTUBE_VOTE_DISPLAYVOTES", "Stem data informatie" );
define( "_AM_MYTUBE_VOTE_NOVOTES", "Geen te tonen stemmen van geregistreerde gebruikers" );
define( "_AM_MYTUBE_VOTE_DELETE", "Geen te tonen stemmen van geregistreerde gebruikers" );
define( "_AM_MYTUBE_VOTE_DELETEDSC", "<b>Verwijderd</b> de gekozen stem informatie uit de database." );
define( "_AM_MYTUBE_VOTEDELETED", "Geselekteerde stem verwijderd, database is bijgewerkt." );

define( "_AM_MYTUBE_VOTE_USERAVG", "Gemiddelde gebruikers beoordeling" );
define( "_AM_MYTUBE_VOTE_TOTALRATE", "Totaal aantal stemmen" );
define( "_AM_MYTUBE_VOTE_MAXRATE", "Hoogste item stem" );
define( "_AM_MYTUBE_VOTE_MINRATE", "Laagste item stem" );
define( "_AM_MYTUBE_VOTE_MOSTVOTEDTITLE", "Meeste gestemd op" );
define( "_AM_MYTUBE_VOTE_LEASTVOTEDTITLE", "Minste gestemd op" );
define( "_AM_MYTUBE_VOTE_MOSTVOTERSUID", "Actiefste stemmer" );
define( "_AM_MYTUBE_VOTE_REGISTERED", "Geregistreerde stemmen" );
define( "_AM_MYTUBE_VOTE_NONREGISTERED", "Anonieme stemmen" );

// Modifications
define( "_AM_MYTUBE_MOD_TOTMODREQUESTS", "Totaal aantal wijzigingsaanvragen: " );
define( "_AM_MYTUBE_MOD_MODREQUESTS", "Gewijzigde videos" );
define( "_AM_MYTUBE_MOD_MODREQUESTSINFO", "Gewijzigde videos informatie" );
define( "_AM_MYTUBE_MOD_MODID", "ID" );
define( "_AM_MYTUBE_MOD_MODTITLE", "Titel" );
define( "_AM_MYTUBE_MOD_MODPOSTER", "Originele inzender: " );
define( "_AM_MYTUBE_MOD_DATE", "Ingezonden op" );
define( "_AM_MYTUBE_MOD_NOMODREQUEST", "Er zijn geen verzoeken die overeenkomen met deze kriteria" );
define( "_AM_MYTUBE_MOD_TITLE", "Video titel: " );
define( "_AM_MYTUBE_MOD_LID", "video ID: " );
define( "_AM_MYTUBE_MOD_CID", "categorie: " );
define( "_AM_MYTUBE_MOD_URL", "video code: " );
define( "_AM_MYTUBE_MOD_PUBLISHER", "Uitgever: " );
define( "_AM_MYTUBE_MOD_FORUMID", "Forum: " );
define( "_AM_MYTUBE_MOD_SCREENSHOT", "Screenshot afbeelding: " );
define( "_AM_MYTUBE_MOD_HOMEPAGE", "Website: " );
define( "_AM_MYTUBE_MOD_HOMEPAGETITLE", "Website naam: " );
define( "_AM_MYTUBE_MOD_SHOTIMAGE", "Screenshot afbeelding: " );
define( "_AM_MYTUBE_MOD_DESCRIPTION", "Omschrijving: " );
define( "_AM_MYTUBE_MOD_MODIFYSUBMITTER", "Inzender: " );
define( "_AM_MYTUBE_MOD_MODIFYSUBMIT", "Inzender" );
define( "_AM_MYTUBE_MOD_PROPOSED", "Voorgestelde video details" );
define( "_AM_MYTUBE_MOD_ORIGINAL", "Orginele video details" );
define( "_AM_MYTUBE_MOD_REQDELETED", "Verzoek om aanpassing verwijderd uit de database" );
define( "_AM_MYTUBE_MOD_REQUPDATED", "Geselekteerde video aangepast en database succesvol bijgewerkt" );
define( '_AM_MYTUBE_MOD_VIEW', 'Bekijken' );

// Video management
define( "_AM_MYTUBE_VIDEO_ID", "video ID: " );
define( "_AM_MYTUBE_VIDEO_IP", "Uploader IP: " );
define( "_AM_MYTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Toegestane beheerder video formaten</b>:</div>" );
define( "_AM_MYTUBE_VIDEO_MODIFYFILE", "Aangepaste video informatie" );
define( "_AM_MYTUBE_VIDEO_CREATENEWFILE", "Nieuwe video aanmaken" );
define( "_AM_MYTUBE_VIDEO_TITLE", "Video titel: " );
define( "_AM_MYTUBE_VIDEO_DLVIDID", "Video id-code: " );
define( "_AM_MYTUBE_VIDEO_DLVIDID_NOTE", "
<small><b>YouTube:</b> http://www.youtube.com/watch?v=<font color=#FF0000>IsOtq-qCqZ4</font><br />
<b>MetaCafe:</b> http://www.metacafe.com/watch/<font color=#FF0000>191543/sperm_whale_encounters_underwater_robot</font>/<br />
<b>SPIKE/ifilm:</b> http://www.ifilm.com/video/<font color=#FF0000>2718605</font><br />
<b>Photobucket:</b> http://i39.photobucket.com/albums/<font color=#FF0000>e168/vailtom/th_BigSquid</font>.jpg<br />
<!-- <b>Google Video:</b> http://video.google.com/videoplay?docid=<font color=#FF0000>4761076111111865377</font>&q=rov&total=913&start=...<br /> -->
<b>MySpace TV:</b> http://vids.myspace.com/index.cfm?fuseaction=vids.individual&videoid=<font color=#FF0000>13171141</font><br />
<b>DailyMotion:</b> http://www.dailymotion.com/video/<font color=#FF0000>x40bhg</font>_blondesecretary_fun<br />
<b>Blip.tv </b>embed code<b>:</b> http://blip.tv/play/<font color=#FF0000>Abe6EwA</font> ...<br />
<b>ClipFish:</b> http://www.clipfish.de/player.php?videoid=<font color=#FF0000>MTg1NTYyfDM1Ng</font>%3D%3D<br />
<b>LiveLeak:</b> http://www.liveleak.com/view?i=<font color=#FF0000>a59_1205566630</font><br />
<b>Maktoob:</b> file=http://<font color=#FF0000>m003.maktoob.com/files/23/42/95531c25b690e48a3d69966b6a33b8d2/video/131102</font>.flv (from embed-code)<br />
<b>Veoh:</b> http://www.veoh.com/videos/<font color=#FF0000>v15069875yApCz7r3</font>?jsonParams=...<br />
<b>Vimeo:</b> http://www.vimeo.com/<font color=#FF0000>2246499</font><br />
<b>Megavideo:</b> http://www.megavideo.com/?v=<font color=#FF0000>J6YSRE0T</font><br />
<b>Viddler:</b> http://www.viddler.com/player/<font color=#FF0000>d32d2b94</font>/ (see embed code)<br />
<b>National Geographic:</b> http://video.nationalgeographic.com/video/player/news/environment-news/<font color=#FF0000>us-ocean-floor-mapping-vin</font>.html<br />
<b>MyTube:</b> <font color=#FF0000>Take over from above selection menu</font></small>" );
define( "_AM_MYTUBE_VIDEO_PICURL", "Afbeeldings url" );
define( "_AM_MYTUBE_VIDEO_PICURLNOTE", "<small>Afbeeldings url als de bron Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Megavideo, Viddler of Maktoob, National Geographic is.</small>" );
define( "_AM_MYTUBE_VIDEO_DESCRIPTION", "Video omschrijving: " );
define( "_AM_MYTUBE_VIDEO_CATEGORY", "Video categorie: " );
define( "_AM_MYTUBE_VIDEO_FILESSTATUS", " Video offline plaatsen?<br /><br /><small><span style='font-weight: normal;'>Video zal niet zichbaar zijn.</span></small>" );
define( "_AM_MYTUBE_VIDEO_SETASUPDATED", " Video status weergeven als bijgewerkt?<br /><br /><small><span style='font-weight: normal;'>Video zal een 'bijgewerkt' icoon weergeven.</span></small>" );
define( "_AM_MYTUBE_VIDEO_SHOTIMAGE", "Video screenshot afbeelding: " );
define( "_AM_MYTUBE_VIDEO_DISCUSSINFORUM", "Discussieer in dit forum toevoegen?" );
define( "_AM_MYTUBE_VIDEO_PUBLISHDATE", "Video publikatiedatum:" );
define( "_AM_MYTUBE_VIDEO_EXPIREDATE", "Video verloopdatum:" );
define( "_AM_MYTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Verwijder publikatiedatum:" );
define( "_AM_MYTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Verwijder verloopdatum:" );
define( "_AM_MYTUBE_VIDEO_PUBLISHDATESET", " Instellen publikatiedatum: " );
define( "_AM_MYTUBE_VIDEO_SETDATETIMEPUBLISH", " Stel de datum/tijd van publikatie in" );
define( "_AM_MYTUBE_VIDEO_SETDATETIMEEXPIRE", " Stel de datum/tijd van verlopen in" );
define( "_AM_MYTUBE_VIDEO_SETPUBLISHDATE", "<b>Stel publikatiedatum in: </b>" );
define( "_AM_MYTUBE_VIDEO_SETNEWPUBLISHDATE", "<b>Stel nieuwe publikatiedatum in: </b><br />Gepubliceerd op:" );
define( "_AM_MYTUBE_VIDEO_SETPUBDATESETS", "<b>Stel publikatiedatum in: </b><br />Gepubliceerd op:" );
define( "_AM_MYTUBE_VIDEO_EXPIREDATESET", " Stel verloopdatum in: " );
define( "_AM_MYTUBE_VIDEO_SETEXPIREDATE", "<b>Stel verloopdatum in: </b>" );
define( "_AM_MYTUBE_VIDEO_DELEDITMESS", "Verwijder gebroken video rapport?<br /><br /><span style='font-weight: normal;'>Kies <b>Ja</b> en het gebroken video rapport wordt automatisch verwijderd tevens wordt bevestigd dat de video weer werkt.</span>" );
define( "_AM_MYTUBE_VIDEO_MUSTBEVALID", "Screenshot afbeelding moet een geldige afbeeldingslink zijn in het %s bestand (bijv. shot.gif). Laat het veld leeg als er geen screenshot link is." );
define( "_AM_MYTUBE_VIDEO_EDITAPPROVE", "Goedkeuren video:" );
define( "_AM_MYTUBE_VIDEO_NEWFILEUPLOAD", "Nieuwe video aangemaakt en database succesvol bijgewerkt" );
define( "_AM_MYTUBE_VIDEO_FILEMODIFIEDUPDATE", "Geselekteerde video aangepast en database succesvol bijgewerkt" );
define( "_AM_MYTUBE_VIDEO_REALLYDELETEDTHIS", "Geselekteerde video verwijderen?" );
define( "_AM_MYTUBE_VIDEO_FILEWASDELETED", "Video %s succesvol verwijderd uit de database!" );
define( "_AM_MYTUBE_VIDEO_FILEAPPROVED", "Video goedgekeurd en database succesvol bijgewerkt" );
define( "_AM_MYTUBE_VIDEO_CREATENEWSSTORY", "<b>Maak een nieuwsbericht van de video</b>" );
define( "_AM_MYTUBE_VIDEO_SUBMITNEWS", "Nieuwe video inzenden als nieuwsbericht?" );
define( "_AM_MYTUBE_VIDEO_NEWSCATEGORY", "Selekteer nieuwscategorie om nieuwsbericht in te zenden:" );
define( "_AM_MYTUBE_VIDEO_NEWSTITLE", "Nieuwstitel:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Leeg laten om de linknaam te gebruiken</span></div>" );
define( "_AM_MYTUBE_VIDEO_PUBLISHER", "Video publicist: " );
define( "_AM_MYTUBE_VIDSOURCE", "Video bron:" );
define( "_AM_MYTUBE_VIDSOURCE2", "Video bron" );

/**
 * Broken videos defines
 */
define( "_AM_MYTUBE_SBROKENSUBMIT", "Gebroken: " );
define( "_AM_MYTUBE_BROKEN_FILE", "Gebroken rapportage(s)" );
define( "_AM_MYTUBE_BROKEN_FILEIGNORED", "Gebroken video rapportage genegeerd en succesvol verwijderd uit de database!" );
define( "_AM_MYTUBE_BROKEN_NOWACK", "Toegekende status gewijzigd en database geupdate!" );
define( "_AM_MYTUBE_BROKEN_NOWCON", "Gewijzigde status is bevestigd en database geupdate!" );
define( "_AM_MYTUBE_BROKEN_REPORTINFO", "Gebroken rapportage informatie" );
define( "_AM_MYTUBE_BROKEN_REPORTSNO", "Wachtende gebroken video rapportage:" );
define( "_AM_MYTUBE_BROKEN_IGNOREDESC", "<b>Negeert</b> het rapport en verwijderd allen de gebroken video rapportage." );
define( "_AM_MYTUBE_BROKEN_DELETEDESC", "<b>Verwijdert</b> de gerapporteerde videodata en gebroken video rapportage van de video." );
define( "_AM_MYTUBE_BROKEN_EDITDESC", "de video <b>Aanpassen</b> om het probleem te verhelpen." );
define( "_AM_MYTUBE_BROKEN_ACKDESC", "<b>Toegekend</b> Stelt de toegekende status van de gebroken bestandsrapportage in." );
define( "_AM_MYTUBE_BROKEN_CONFIRMDESC", "<b>Bevestigd</b> Stelt de status van de gebroken videorapportage in als bevestigd." );
define( "_AM_MYTUBE_BROKEN_ACKNOWLEDGED", "Toegekend" );
define( "_AM_MYTUBE_BROKEN_DCONFIRMED", "Bevestigd" );
define( "_AM_MYTUBE_BROKEN_VIDSOURCE", "Video bron" );

define( "_AM_MYTUBE_BROKEN_ID", "ID" );
define( "_AM_MYTUBE_BROKEN_TITLE", "Titel" );
define( "_AM_MYTUBE_BROKEN_REPORTER", "Rapporteur" );
define( "_AM_MYTUBE_BROKEN_FILESUBMITTER", "Inzender" );
define( "_AM_MYTUBE_BROKEN_DATESUBMITTED", "Inzenddatum" );
define( "_AM_MYTUBE_BROKEN_ACTION", "Aktie" );
define( "_AM_MYTUBE_BROKEN_NOFILEMATCH", "Geen gebroken (video) rapportages die overeenkomen met deze kriteria" );
define( "_AM_MYTUBE_BROKENFILEDELETED", "Video verwijderd uit de database en gebroken rapportage verwijderd" );

/**
 * About defines
 */
define( "_AM_MYTUBE_BY", "door" );

// block defines
define( "_AM_MYTUBE_BADMIN", "Blok administratie" );
define( "_AM_MYTUBE_BLKDESC", "Omschrijving" );
define( "_AM_MYTUBE_TITLE", "Titel" );
define( "_AM_MYTUBE_SIDE", "Uitlijning" );
define( "_AM_MYTUBE_WEIGHT", "Gewicht" );
define( "_AM_MYTUBE_VISIBLE", "Zichtbaar" );
define( "_AM_MYTUBE_ACTION", "Aktie" );
define( "_AM_MYTUBE_SBLEFT", "Links" );
define( "_AM_MYTUBE_SBRIGHT", "Rechts" );
define( "_AM_MYTUBE_CBLEFT", "Midden links" );
define( "_AM_MYTUBE_CBRIGHT", "Midden rechts" );
define( "_AM_MYTUBE_CBCENTER", "Midden midden" );
define( "_AM_MYTUBE_ACTIVERIGHTS", "Aktieve rechten" );
define( "_AM_MYTUBE_ACCESSRIGHTS", "Toegangsrechten" );

// image admin icon
define( "_AM_MYTUBE_ICO_EDIT", "Dit item aanpassen" );
define( "_AM_MYTUBE_ICO_DELETE", "Dit item verwijderen" );
define( "_AM_MYTUBE_ICO_RESOURCE", "Deze bron aanpassen" );

define( "_AM_MYTUBE_ICO_ONLINE", "Online" );
define( "_AM_MYTUBE_ICO_OFFLINE", "Offline" );
define( "_AM_MYTUBE_ICO_APPROVED", "Goedgekeurd" );
define( "_AM_MYTUBE_ICO_NOTAPPROVED", "Afgekeurd" );

define( "_AM_MYTUBE_ICO_VIDEO", "Gerelateerde video" );
define( "_AM_MYTUBE_ICO_URL", "Gerelateerde URL toevoegen" );
define( "_AM_MYTUBE_ICO_ADD", "Toevoegen" );
define( "_AM_MYTUBE_ICO_APPROVE", "Goedkeuren" );
define( "_AM_MYTUBE_ICO_STATS", "Statistieken" );
define( "_AM_MYTUBE_ICO_VIEW", "Bekijk dit item" );

define( "_AM_MYTUBE_ICO_IGNORE", "Negeren" );
define( "_AM_MYTUBE_ICO_ACK", "Gebroken rapportage toegekend" );
define( "_AM_MYTUBE_ICO_REPORT", "Gebroken rapportage toekennen?" );
define( "_AM_MYTUBE_ICO_CONFIRM", "Gebroken rapportage bevestigd" );
define( "_AM_MYTUBE_ICO_CONBROKEN", "Gebroken rapportage bevestigen?" );
define( "_AM_MYTUBE_ICO_RES", "Bronnen/videos bij dit item aanpassen" );

// Alternate category
define( "_AM_MYTUBE_ALTCAT_CREATEF", "Alternatieve categorie toevoegen" );
define( "_AM_MYTUBE_MALTCAT", "Alternatieve categorie management" );
define( "_AM_MYTUBE_ALTCAT_MODIFYF", "Alternatieve categorie management" );
define( "_AM_MYTUBE_ALTCAT_INFOTEXT", "&bull;&nbsp;Alternatieve categorieën kunnen via dit formulier eenvoudig worden toegevoegd of verwijderd." );
define( '_AM_MYTUBE_ALTCAT_CREATED', 'Alternatieve categorie(ën) is(zijn) opgeslagen!' );

define( "_AM_MYTUBE_MRESOURCES", "Bronnen management" );
define( "_AM_MYTUBE_RES_CREATED", "Bronnen management" );
define( "_AM_MYTUBE_RES_ID", "ID" );
define( "_AM_MYTUBE_RES_DESC", "Omschrijving" );
define( "_AM_MYTUBE_RES_NAME", "Bron Naam" );
define( "_AM_MYTUBE_RES_TYPE", "Bron type" );
define( "_AM_MYTUBE_RES_USER", "Gebruiker" );
define( "_AM_MYTUBE_RES_CREATEF", "Bron toevoegen" );
define( "_AM_MYTUBE_RES_MODIFYF", "Bron aanpassen" );
define( "_AM_MYTUBE_RES_NAMEF", "Naam bron:" );
define( "_AM_MYTUBE_RES_DESCF", "Omschrijving bron:" );
define( "_AM_MYTUBE_RES_URLF", "Bron URL:" );
define( "_AM_MYTUBE_RES_ITEMIDF", "Bron item ID:" );
define( "_AM_MYTUBE_RES_INFOTEXT", "<ul><li>Nieuwe bronnen kunnen via dit formulier eenvoudig worden toegevoegd, aangepast of verwijderd.</li>
	<li>Indexeer alle gelinkte bronnen bij een video</li>
	<li>Bronnaam en omschrijving aanpassen</li></ul>
	" );
define( "_AM_MYTUBE_LISTBROKEN", "Toon videos die mogelijk zijn gebroken. NB: Deze gegevens zijn mogelijk niet korrect/kompleet en moeten worden gezien als grove handreiking.<br /><br />Kontroleer eerst of de video bestaat voordat aktie wordt ondernomen.<br /><br />" );

define( "_AM_MYTUBE_PERM_RATEPERMISSIONS", "Beoordelingsrechten" );
define( "_AM_MYTUBE_PERM_RATEPERMISSIONS_TEXT", "Selekteer de groepen die videos mogen beoordelen in de geselekteerde categorie(ën)." );

define( "_AM_MYTUBE_PERM_AUTOPERMISSIONS", "Videos automatisch goedkeuren" );
define( "_AM_MYTUBE_PERM_AUTOPERMISSIONS_TEXT", "Selekteer de groepen waarvan de ingezonden videos automatisch worden goedgekeurd." );

define( "_AM_MYTUBE_PERM_SPERMISSIONS", "Inzend rechten" );
define( "_AM_MYTUBE_PERM_SPERMISSIONS_TEXT", "Selekteer de groepen die nieuwe videos mogen inzenden in de geselekteerde categorie(ën)." );

define( "_AM_MYTUBE_PERM_APERMISSIONS", "Beheerder groepen" );
define( "_AM_MYTUBE_PERM_APERMISSIONS_TEXT", "Selekteer de groepen die beheerdersrechten hebben voor de geselekteerde categorie(ën)." );

define( "_AM_MYTUBE_TIME", "Tijd:" );
define( "_AM_MYTUBE_KEYWORDS", "Keywords:" );
define( "_AM_MYTUBE_KEYWORDS_NOTE", "<small>Keywords dienen gescheiden te worden door een komma (<i>keyword1, keyword2, keyword3</i>).</small>" );
define( "_AM_MYTUBE_YOUTUBE", "YouTube" );
define( "_AM_MYTUBE_METACAFE", "MetaCafe" );
define( "_AM_MYTUBE_IFILM", "Spike" );
define( "_AM_MYTUBE_PHOTOBUCKET", "Photobucket" );
define( "_AM_MYTUBE_GOOGLEVIDEO", "Google Video" );
define( "_AM_MYTUBE_MYSPAVETV", "MySpace TV" );
define( "_AM_MYTUBE_DAILYMOTION", "DailyMotion" );

// Version 1.04 RC-1
define( "_AM_MYTUBE_BLIPTV", "Blip.tv" );
define( "_AM_MYTUBE_MYTUBE", "MyTube" );
define( "_AM_MYTUBE_ICO_EXPIRE", "Verlopen" );
define( "_AM_MYTUBE_MMYTUBE", "MyTube Clip" );
define( "_AM_MYTUBE_VIDEO_CATVIDEOIMG", "Video afbeeldingen" );
define( "_AM_MYTUBE_VIDEO_FCATVIDEOIMG", "Video afbeelding pad" );
define( "_AM_MYTUBE_VUPLOAD_VIDEOEXIST", "Video bestaat al" );
define( "_AM_MYTUBE_VUPLOAD_VIDEOUPLOAD", "Video geupload" );
define( "_AM_MYTUBE_VUPLOAD_NOVIDEOEXIST", "Geen Video aanwezig" );
define( "_AM_MYTUBE_VUPLOAD_FILEDELETED", "Video verwijdert" );
define( "_AM_MYTUBE_VUPLOAD_FILEERRORDELETE", "Error" );
define( "_AM_MYTUBE_VUPLOAD_NOFILEERROR", "Geen bestand" );
define( "_AM_MYTUBE_VUPLOAD_DELETEFILE", "Verwijder video bestand" );
define( "_AM_MYTUBE_VUPLOAD_CATVIDEO", "Video bestanden" );
define( "_AM_MYTUBE_VUPLOAD_FCATVIDEO", "Video upload map" );
define( "_AM_MYTUBE_VUPLOADS", "Video Upload" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADPATH", "Video upload pad:" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADURL", "Video upload url:" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADVIDEOTO", "Upload video: " );
define( "_AM_MYTUBE_VUPLOAD_FOLDERSELECTION", "Selekteer upload doel" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADVIDEO", "Video om te uploaden" );
define( "_AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Selekteer een video bestand" );
define( "_AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "Video bestand dient de extensie FLV te hebben" );
define( "_AM_MYTUBE_BDELETEVIDEO", "Verwijder video" );
define( "_AM_MYTUBE_NOVIDEO", "Geen Video" );
define( "_AM_MYTUBE_NOIMAGE", "Geen Afbeelding" );
define( "_AM_MYTUBE_NOSELECT", "Geen Selektie" );
define( "_AM_MYTUBE_NOFILESELECT", "Geen Bestand Geselekteerd" );
define( "_AM_MYTUBE_MYTUBEVIDEO", "MyTube Video Bestand:" );
define( "_AM_MYTUBE_WARNINSTALL4", "<b>WAARSCHUWING:</b> <u>Map</u> %s is niet beschrijfbaar. <br />Deze map dient schrijfbaar (CHMOD 777) te zijn voor MyTube." );
// Uploader class
define( "_AM_MYTUBE_READWRITEERROR", "U hebt geen bestand om te uploaden gekozen of de server heeft niet de juist schrijf/lees bevoegdheden om dit bestand te uploaden!" );
define( "_AM_MYTUBE_INVALIDFILESIZE", "Onjuiste Bestands Grootte" );
define( "_AM_MYTUBE_FILENAMEEMPTY", "Bestandsnaam Is Leeg" );
define( "_AM_MYTUBE_NOFILEUPLOAD", "Geen bestand geupload, dit is een error" );
define( "_AM_MYTUBE_UPLOADERRORZERO", "Er was een probleem met uw upload. Error: 0" );
define( "_AM_MYTUBE_UPLOADERRORONE", "Het bestand dat u probeert te uploaden is te groot. Error: 1" );
define( "_AM_MYTUBE_UPLOADERRORTWO", "Het bestand dat u probeert te uploaden is te groot. Error: 2" );
define( "_AM_MYTUBE_UPLOADERRORTHREE", "Het bestand dat u probeert te uploaden is alleen deels geupload. Error: 3" );
define( "_AM_MYTUBE_UPLOADERRORFOUR", "Geen bestand voor uploaden geselekteerd. Error: 4" );
define( "_AM_MYTUBE_UPLOADERRORFIVE", "Geen bestand voor uploaden geselekteerd. Error: 5" );
define( "_AM_MYTUBE_NOUPLOADDIR", "Upload map niet gedefinieerd." );
define( "_AM_MYTUBE_FAILOPENDIR", "Open van map gefaald: " );
define( "_AM_MYTUBE_FAILOPENDIRWRITEPERM", "Open van map met schrijfrechten gefaald: " );
define( "_AM_MYTUBE_FILESIZEMAXSIZE", "Bestandsgrootte: %u. Maximum Grootte Toegestaan: %u" );
define( "_AM_MYTUBE_FILESIZEMAXWIDTH", "Bestandsbreedte: %u. Maximum Breedte Toegestaan: %u" );
define( "_AM_MYTUBE_FILESIZEMAXHEIGHT", "Bestandshoogte: %u. Maximum Hoogte Toegestaan: %u" );
define( "_AM_MYTUBE_MIMENOTALLOW", "MIME type not toegestaan: " );
define( "_AM_MYTUBE_FAILEDUPLOADING", "Uploaden bestand gefaald: " );
define( "_AM_MYTUBE_ALREADYEXISTTRYAGAIN", " bestaat al op de server. Hernoem dit bestand en probeer het opnieuw.<br />" );
define( "_AM_MYTUBE_ERRORSRETURNUPLOAD", "<h4>Errors Ontstaan Tijdens Uploaden</h4>" );
define( "_AM_MYTUBE_DOESNOTEXIST", " bestaat niet!" );

// Version 1.04 RC-2
define( "_AM_MYTUBE_CLIPFISH", "ClipFish" );
define( "_AM_MYTUBE_LIVELEAK", "LiveLeak" );
define( "_AM_MYTUBE_FILE", "File " );
define( '_AM_MYTUBE_MAKTOOB', 'Maktoob' );
define( '_AM_MYTUBE_VEOH', 'Veoh' );
define( "_AM_MYTUBE_INFORMATION", "Video Informatie" );
define( "_AM_MYTUBE_VIDEO_DLVIDIDDSC", "Neem rood aangegeven gedeelte uit onderste voorbeelden over" );
define( "_AM_MYTUBE_VIDEO_VIEWS", "Bekeken: " );
define( "_AM_MYTUBE_ERROR_CATISCAT", "Je kan een categorie NIET als sub-categorie van zichzelf maken!" );

// Version 1.04 RC-3
define( "_AM_MYTUBE_MOD_VIDID", "Video id-code: " );
define( "_AM_MYTUBE_MOD_VIDSOURCE", "Video bron: " );
define( "_AM_MYTUBE_MOD_TIME", "Tijd: " );
define( "_AM_MYTUBE_MOD_KEYWORDS", "Keywords: " );
define( "_AM_MYTUBE_MOD_ITEM_TAG", "Tags: " );
define( "_AM_MYTUBE_MOD_PICURL", "Afbeeldings url: " );
define( "_AM_MYTUBE_IPAGE_SHOWLATEST", "Laat Laatste Videos zien?" );
define( "_AM_MYTUBE_IPAGE_LATESTTOTAL", "Hoeveel videos laten zien?" );
define( "_AM_MYTUBE_IPAGE_LATESTTOTAL_DSC", "0 schakelt deze optie uit." );

// Version 1.05 RC-1
define( '_AM_MYTUBE_VIMEO', 'Vimeo' );
define( '_AM_MYTUBE_MEGAVIDEO', 'Megavideo' );
define( '_AM_MYTUBE_CATTITLE', 'Categorie' );

// Version 1.06 RC-1
define( '_AM_MYTUBE_FLV_LICENSE', 'Licentie' );
define( '_AM_MYTUBE_FLV_LICENSEDSC', 'Lees de <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">licentie</a> alsjeblieft, voordat je de JW FLV Media Player gebruikt. Door van de speler gebruik te maken ga je akkoord met de <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">niet-commerciële licentie</a>.' );
define( '_AM_MYTUBE_RSSFEED', 'RSS Feed' );
define( '_AM_MYTUBE_RSSFEEDCFG', 'RSS Feed Configuratie' );
define( '_AM_MYTUBE_RSSFEEDDSC', 'Hier kunt u de RSS feed voor MyTube configureren.<br />Voor meer informatie over RSS kunt u zich wenden tot de <a href="http://www.rssboard.org/" target="_blank">RSS Advisory Board</a> website.' );
define( '_AM_MYTUBE_RSSACTIVE', 'RSS feed geaktiveerd' );
define( '_AM_MYTUBE_RSSACTIVEDSC', 'Selekteer <em>Ja</em> om RSS feed voor MyTube te gebruiken, kies <em>Nee</em> om RSS feed te deaktiveren.' );
define( '_AM_MYTUBE_RSSTITLE', 'RSS feed titel' );
define( '_AM_MYTUBE_RSSTITLEDSC', 'De naam van het RSS kanaal. Dit is hoe mensen naar uw website refereren. Indien u een website heeft dat dezelfde informatie bevat als de RSS feed, dan dient de titel van het RSS kanaal hetzelfde te zijn als van uw website.' );
define( '_AM_MYTUBE_RSSLINKS', 'RSS feed link' );
define( '_AM_MYTUBE_RSSLINKSDSC', 'De URL van de website die overeenkomt met die van het RSS kanaal.' );
define( '_AM_MYTUBE_RSSDESCRIPTION', 'RSS feed omschrijving' );
define( '_AM_MYTUBE_RSSDESCRIPTIONDSC', 'Een korte omschrijving van het RSS kanaal.' );
define( '_AM_MYTUBE_RSSIMAGE', 'RSS feed afbeelding' );
define( '_AM_MYTUBE_RSSIMAGEDSC', 'Specificeert een GIF, JPEG of PNG afbeelding dat met het RSS kanaal kan worden afgebeeld.' );
define( '_AM_MYTUBE_RSSWIDTH', 'RSS feed afbeelding breedte' );
define( '_AM_MYTUBE_RSSWIDTHDSC', 'Geef de breedte van de afbeelding in pixels.<br />Maximale waarde voor de breedte is 144.' );
define( '_AM_MYTUBE_RSSHEIGHT', 'RSS feed afbeelding hoogte' );
define( '_AM_MYTUBE_RSSHEIGHTDSC', 'Geef de hoogte van de afbeelding in pixels.<br />Maximale waarde voor hoogte is 400.' );
define( '_AM_MYTUBE_RSSIMGTITLE', 'RSS feed afbeelding titel' );
define( '_AM_MYTUBE_RSSIMGTITLEDSC', 'Omschrijft de afbeelding, het wordt gebruikt in de ALT attribute van de HTML &#60;img&#62; tag wanneer het RSS kanaal in HTML afgebeeld wordt.' );
define( '_AM_MYTUBE_RSSIMGLINK', 'RSS feed afbeelding link' );
define( '_AM_MYTUBE_RSSIMGLINKDSC', 'Dit is de URL van de website, wanneer het kanaal afgebeeld wordt. De afbeelding funktioneert als link naar de website. (Opgelet, in de praktijk dienen de afbeelding &#60;title&#62; en &#60;link&#62; dezelfde waarde te hebben als &#60;title&#62; en &#60;link&#62; van het kanaal).' );
define( '_AM_MYTUBE_RSSTTL', 'RSS feed ttl' );
define( '_AM_MYTUBE_RSSTTLDSC', 'ttl staat voor <em>time to live</em>. Het is het aantal minuten dat aangeeft hoe lang een kanaal in het tijdelijk geheugen gehouden wordt, voordat dit vanuit de bron bijgewerkt wordt.' );
define( '_AM_MYTUBE_RSSWEBMASTER', 'RSS feed webmaster' );
define( '_AM_MYTUBE_RSSWEBMASTERDSC', 'Email adres van de persoon verantwoordelijk voor technische zaken aangaande het RSS kanaal.' );
define( '_AM_MYTUBE_RSSEDITOR', 'RSS feed kanaal editor' );
define( '_AM_MYTUBE_RSSEDITORDSC', 'Email adres van de persoon verantwoordelijk voor de redaktionele inhoud van het kanaal.' );
define( '_AM_MYTUBE_RSSCATEGORY', 'RSS feed categorie' );
define( '_AM_MYTUBE_RSSCATEGORYDSC', 'Specificeer een of meer categoriëen waar het kanaal toe behoort. Volgt dezelfde voorwaarden als de &#60;item&#62;-level categorie element.' );
define( '_AM_MYTUBE_RSSGENERATOR', 'RSS feed generator' );
define( '_AM_MYTUBE_RSSGENERATORDSC', 'Een regel die aangeeft welk programma gebruikt is om het RSS kanaal te genereren.' );
define( '_AM_MYTUBE_RSSCOPYRIGHT', 'RSS feed copyright' );
define( '_AM_MYTUBE_RSSCOPYRIGHTDSC', 'Copyright betreffende de inhoud van het kanaal.' );
define( '_AM_MYTUBE_RSSTOTAL', 'RSS feed totaal aantal linken' );
define( '_AM_MYTUBE_RSSTOTALDSC', 'Geef hier aan hoeveel linken er in het kanaal weergeven dienen te worden.' );
define( '_AM_MYTUBE_RSSDBUPDATED', 'Database is succesvol bijgewerkt' );
define( '_AM_MYTUBE_RSSOFFLINE', 'RSS feed offline bericht titel' );
define( '_AM_MYTUBE_RSSOFFLINEDSC', 'Geef hier een titel voor het bericht als de RSS feed gedeaktiveerd is.' );
define( '_AM_MYTUBE_RSSOFFMSG', 'RSS feed offline bericht' );
define( '_AM_MYTUBE_RSSOFFMSGDSC', 'Geef hier een verklaring waarom de RSS feed is gedeaktiveerd.' );
define( '_AM_MYTUBE_RSSOFFTITLE', 'RSS feed is gedeaktiveerd' );
define( '_AM_MYTUBE_RSSOFFMSGDEF', 'De RSS feed is tijdelijk gedeaktiveerd in verband met onderhoud aan de server.' );
define( '_AM_MYTUBE_RSSCLICKSUBMIT', 'Klik Submit om alle weergegeven informatie in de database op te slaan!' );
define( '_AM_MYTUBE_COPYRIGHT', 'Copyright' );
define( '_AM_MYTUBE_NICEURL', 'Alternatieve titel voor videoclip:' );
define( '_AM_MYTUBE_NICEURLDSC', 'Geef een alternatieve titel voor de videoclip om in de url te gebruiken. Als de optie <em>Gebruik nette urls</em> onder Instellingen is geselecteerd en dit veld wordt niet ingevuld, dan zal de titel van de videoclip gebruikt worden.' );
define( '_AM_MYTUBE_NATIOGEO', 'National Geographic' );
?>