<?php
/**
 * $Id: modinfo.php
 * Module: MyTube
 * Language: french
 */

// Module Info
// The name of this module
define("_MI_MYTUBE_NAME","MyTube");

// A brief description of this module
define("_MI_MYTUBE_DESC","Module de partage, syndication et publication de vidéos en ligne.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYTUBE_BNAME1","Vidéos récentes (t)");
define("_MI_MYTUBE_BNAME2","Vidéos récentes");
define("_MI_MYTUBE_BNAME3","Meilleurs Vidéos (t)");
define("_MI_MYTUBE_BNAME4","Meilleurs Vidéos");
define("_MI_MYTUBE_BNAME5","Vidéos récentes (h)");
define("_MI_MYTUBE_BNAME6","Vidéos aléatoires");
define("_MI_MYTUBE_BNAME7","Vidéos aléatoires (h)");

// Sub menu titles
define("_MI_MYTUBE_SMNAME1","Soummetre");
define("_MI_MYTUBE_SMNAME2","Populaire");
define("_MI_MYTUBE_SMNAME3","Mieux notées");
define("_MI_MYTUBE_SMNAME4","Vidéos récentes");

// Names of admin menu items
define("_MI_MYTUBE_BINDEX","Page principale");
define("_MI_MYTUBE_INDEXPAGE","Gestion de la Page Index");
define("_MI_MYTUBE_MCATEGORY","Gestion des catégories");
define("_MI_MYTUBE_MVIDEOS","Gestion des vidéos");
define("_MI_MYTUBE_MUPLOADS","Upload d'images");
define("_MI_MYTUBE_PERMISSIONS","Permissions");
define("_MI_MYTUBE_BLOCKADMIN","Paramètres des blocs");
define("_MI_MYTUBE_MVOTEDATA","Votes");

// Title of config items
define('_MI_MYTUBE_POPULAR', 'Hits pour être populaire');
define('_MI_MYTUBE_POPULARDSC', 'Nombre de hits pour que la vidéo soit considérée comme populaire.');

define("_MI_MYTUBE_ICONDISPLAY","Affichage populaire et nouveau:");
define("_MI_MYTUBE_DISPLAYICONDSC", "Sélectionner la façon dont vont être affichés les vidéos populaires et nouvelles");
define("_MI_MYTUBE_DISPLAYICON1", "Affichez sous forme d'icône");
define("_MI_MYTUBE_DISPLAYICON2", "Affichez sous forme de texte");
define("_MI_MYTUBE_DISPLAYICON3", "Aucun affichage");

define("_MI_MYTUBE_DAYSNEW","Délai en jour pour les nouvelles vidéos:");
define("_MI_MYTUBE_DAYSNEWDSC","Nombre de jours pour qu'une vidéo soit considérée comme nouveau après sa publication.");

define("_MI_MYTUBE_DAYSUPDATED","Délai en jour pour les vidéos mises à jour:");
define("_MI_MYTUBE_DAYSUPDATEDDSC","Nombre de jours pendant lesquels une vidéo est considérée comme mise à jour.");

define('_MI_MYTUBE_PERPAGE', 'Nombre de vidéos à afficher:');
define('_MI_MYTUBE_PERPAGEDSC', 'Nombre de vidéos à afficher dans chaque catégorie.');

define("_MI_MYTUBE_ADMINPAGE", "Nombre de vidéos à afficher dans l'admin:");
define("_MI_MYTUBE_AMDMINPAGEDSC", "Nombre de vidéos à afficher dans la page d'administration de Module:");

define("_MI_MYTUBE_ARTICLESSORT", "Ordre par défaut des vidéos:");
define("_MI_MYTUBE_ARTICLESSORTDSC", "Select the default order for the video listings.");

define("_MI_MYTUBE_SORTCATS", "Tri des catégories:");
define("_MI_MYTUBE_SORTCATSDSC", "Sélectionner la manière dans-laquelle les catégories et les sous-catégories seront triées.");

define('_MI_MYTUBE_SUBCATS', 'Sous-catégories:');
define('_MI_MYTUBE_SUBCATSDSC', 'Sélectionner Oui pour afficher les Sous-catégories et Non pour les cacher.');

define('_MI_MYTUBE_EDITOR', "Editeur utilisé (admin):");
define('_MI_MYTUBE_EDITORCHOICE', "Select the editor to use for admin side. If you have a 'simple' install (e.g you use only XOOPS core editor class, provided in the standard xoops core package), then you can just select DHTML and Compact");
define('_MI_MYTUBE_EDITORUSER', "Editeur utilisé (user):");
define('_MI_MYTUBE_EDITORCHOICEUSER', "Select the editor to use for user side. If you have a 'simple' install (e.g you use only XOOPS core editor class, provided in the standard xoops core package), then you can just select DHTML and Compact");
define("_MI_MYTUBE_FORM_DHTML","DHTML");
define("_MI_MYTUBE_FORM_COMPACT","Compact");
define("_MI_MYTUBE_FORM_SPAW","Spaw Editor");
define("_MI_MYTUBE_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_MYTUBE_FORM_FCK","FCK Editor");
define("_MI_MYTUBE_FORM_KOIVI","Koivi Editor");
define("_MI_MYTUBE_FORM_TINYEDITOR","TinyEditor");

define('_MI_MYTUBE_USESHOTS', 'Affichez des copies d\'écran?');
define('_MI_MYTUBE_USESHOTSDSC', 'Choisissez oui pour afficher des copies d\'écran pour chaque vidéo');

define('_MI_MYTUBE_USETHUMBS', 'Utiliser des Miniatures:');
define("_MI_MYTUBE_USETHUMBSDSC", "Type d'images supportées: JPG, GIF, PNG.<div style='padding-top: 8px;'>MyTube utilise des miniatures pour les images. Choisissez 'Non' si votre serveur ne supporte pas cette option.</div>");

define("_MI_MYTUBE_IMGUPDATE", "Mise à jour des Miniatures?");
define("_MI_MYTUBE_IMGUPDATEDSC", "Si vous sélectionner la mise à jour des miniatures à chaque page render. Sinon, la première miniature de l'image sera utilisée indépendamment<br /><br />");

define('_MI_MYTUBE_SHOTWIDTH', 'Largeur de la capture d\'écran');
define('_MI_MYTUBE_SHOTWIDTHDSC', 'Permet de choisir une largeur pour les copies d\'écran');

define('_MI_MYTUBE_SHOTHEIGHT', 'Hauteur de la capture d\'écran');
define('_MI_MYTUBE_SHOTHEIGHTDSC', 'Permet de choisir une hauteur pour les copies d\'écran');

define('_MI_MYTUBE_MAINIMGDIR','Répertoire principal d\'images');

define('_MI_MYTUBE_CATEGORYIMG','Répertoire d\'upload des catégories d\'images');

define('_MI_MYTUBE_DATEFORMAT', 'Timestamp:');
define('_MI_MYTUBE_DATEFORMATDSC', 'Timestamp par défaut pour MyTube');

define("_MI_MYTUBE_TOTALCHARS", "Nombre total des caractères pour les descriptions?");
define("_MI_MYTUBE_TOTALCHARSDSC", "Paramétrez le nombre total des caractères pour les descriptions dans la Page Index.");

define("_MI_MYTUBE_OTHERVIDEOS", "Afficher d'autres vidéos proposées par le Submitter?");
define("_MI_MYTUBE_OTHERVIDEOSDSC", "Sélectionner 'Oui' si d'autres vidéos du submitter doivent êtres affichées.");

define("_MI_MYTUBE_SHOWSBOOKMARKS", "Afficher le Social Bookmarks?");
define("_MI_MYTUBE_SHOWSBOOKMARKSDSC", "Sélectionner 'Oui' si vous voulez afficher les icônes Social Bookmark sous les vidéos.");

define("_MI_MYTUBE_USEMETADESCR", "Generateur meta description:");
define("_MI_MYTUBE_USEMETADSC", "En activant cette option, les meta description seront basés sur les descriptions des vidéos.");

define("_MI_MYTUBE_USERTAGDESCR", "Les utilisateurs peuvent soummetre des Tags:");
define("_MI_MYTUBE_USERTAGDSC", "Sélectionner 'Oui' si vous voulez autoriser les utilisateurs à soummetre Tags.");

define('_MI_MYTUBE_SHOWDISCLAIMER', 'Afficher le disclaimer avant la proposition d\'un utilisateur?');
define('_MI_MYTUBE_SHOWDISCLAIMERDSC', 'Avant qu\'un utilisateur propose une vidéo');

define('_MI_MYTUBE_DISCLAIMER', 'Texte du disclaimer:');

define('_MI_MYTUBE_SHOWVIDEODISCL', 'Afficher le disclaimer avant de voir la vidéo ?');
define('_MI_MYTUBE_SHOWVIDEODISCLDSC', 'Voir les règlements avant de visualiser la vidéo');

define('_MI_MYTUBE_VIDEODISCLAIMER', 'Entrer le texte du disclaimer de la vidéo:');

define('_MI_MYTUBE_COPYRIGHT', 'Information Copyright:');
define('_MI_MYTUBE_COPYRIGHTDSC', 'Afficher le copyright dans les pages des vidéos.');

define('_MI_MYTUBE_CHECKHOST', 'Désactiver les liens directes des vidéos depuis d\'autres sites web? (leeching)');
define('_MI_MYTUBE_REFERERS', 'Liste des sites autorisés <br />Sépares par #');
define("_MI_MYTUBE_ANONPOST","Proposition des utilisateurs anonymes:");
define("_MI_MYTUBE_ANONPOSTDSC","Permettre aux utilisateurs anonymes de proposer et/ou uploader sur votre site Web ?");
define('_MI_MYTUBE_AUTOAPPROVE','Approbation automatique des vidéos');
define('_MI_MYTUBE_AUTOAPPROVEDSC','Choisissez la méthode d\'approbation des vidéos sans modération.');

define('_MI_MYTUBE_MAXFILESIZE','Taille d\'upload (KB)');
define('_MI_MYTUBE_MAXFILESIZEDSC','Taille maximale autorisé pour les vidéos uploadés.');
define('_MI_MYTUBE_IMGWIDTH','Largeur maximum des images uploadées');
define('_MI_MYTUBE_IMGWIDTHDSC','Largeur maximum des images uploadées pour les vidéos');
define('_MI_MYTUBE_IMGHEIGHT','Hauteur maximale des images uploadés');
define('_MI_MYTUBE_IMGHEIGHTDSC','Hauteur maximale des images uploadés pour les vidéos');

define('_MI_MYTUBE_UPLOADDIR','Répertoire d\'upload (Sans slash à la fin)');
define('_MI_MYTUBE_ALLOWSUBMISS','Soumission des utilisateurs:');
define('_MI_MYTUBE_ALLOWSUBMISSDSC','Autoriser les utilisateurs à soumettre des vidéos');
define('_MI_MYTUBE_ALLOWUPLOADS','Upload des utilisateurs:');
define('_MI_MYTUBE_ALLOWUPLOADSDSC','Autoriser les utilisateurs à uploade directement des vidéos sur le site');
define('_MI_MYTUBE_SCREENSHOTS','Répertoire des copies d\'écran');

define("_MI_MYTUBE_SUBMITART", "Soumission des vidéos:");
define("_MI_MYTUBE_SUBMITARTDSC", "Sélectionner les groupes autorisés à soummetre de nouvelles vidéos.");
define("_MI_MYTUBE_RATINGGROUPS", "Estimation des vidéos:");
define("_MI_MYTUBE_RATINGGROUPSDSC", "Sélectionner les groupes autorisés à estimer des vidéos.");

define("_MI_MYTUBE_QUALITY", "Qualité des miniatures:");
define("_MI_MYTUBE_QUALITYDSC", "Qualité inférieure: 0 Supérieure: 100");
define("_MI_MYTUBE_KEEPASPECT", "Conserver le ratio de l'image");
define("_MI_MYTUBE_KEEPASPECTDSC", "");

define("_MI_MYTUBE_TITLE", "Titre");
define("_MI_MYTUBE_RATING", "Estimation");
define("_MI_MYTUBE_WEIGHT", "Position");
define("_MI_MYTUBE_POPULARITY", "Popularité");
define("_MI_MYTUBE_SUBMITTED2", "Date de soumission");

// Text for notifications
define('_MI_MYTUBE_GLOBAL_NOTIFY', 'Global');
define('_MI_MYTUBE_GLOBAL_NOTIFYDSC', 'Options de notification globales des vidéos.');
define('_MI_MYTUBE_CATEGORY_NOTIFY', 'Categorie');
define('_MI_MYTUBE_CATEGORY_NOTIFYDSC', 'Options de notification qui s\'appliquent aux vidéos de la catégorie courante.');
define('_MI_MYTUBE_VIDEO_NOTIFY', 'Vidéo');
define('_MI_MYTUBE_FILE_NOTIFYDSC', 'Options de notification qui s\'appliquent à la vidéo courante.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'Nouvelle catégorie');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notifiez-moi quand une catégorie de fichiers est créée.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recevoir une notification quand une catégorie de fichiers est créée');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle catégorie de vidéos');

define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Demande de modifications');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Notifiez-moi de toute demande de modification de vidéos');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Recevoir une notification quand une modification de vidéos est demandée.');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Demande de modification de vidéos');

define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Vidéos brisées');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Notifiez-moi de tout rapport de vidéo brisée');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Recevoir une notication quand un rapport de vidéo brisée est rapporté.');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Vidéo brisée signalé');

define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Vidéos soumises');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Notifiez-moi des nouvelles soumissions de vidéo (en attente d\'approbation).');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Recevoir une notification des nouvelles vidéos soumises (en attente d\'approbation).');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo soumise');

define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'Nouvelles vidéos');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Notifiez-moi dès qu\'une nouvelle vidéo est publiée.');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Recevoir une notifaction quand une nouvelle vidéo est publiée.');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo');

define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Vidéos soumises');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notifiez-moi dès qu\'une nouvelle vidéo est publiée (en attente d\'approbation) dans cette catégorie.');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Recevoir une notifaction quand une nouvelle vidéo est publiée (en attente d\'approbation) dans cette catégorie.');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo publié dans cette catégorie');

define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'Nouvelles vidéos');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Notifiez-moi dès qu\'une nouvelle vidéo est publiée dans cette catégorie.');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Recevoir une notifaction quand une nouvelle vidéo est publiée dans cette catégorie.');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Nouvelle vidéo dans cette catégorie');

define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFY', 'Vidéo approuvée');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Notifiez-moi dès que cette vidéo est approuvée.');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Recevoir une notication dès que cette vidéo est approuvée.');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notification : Vidéo approuvée');

define('_MI_MYTUBE_AUTHOR_INFO', "Informations sur le développeur");
define('_MI_MYTUBE_AUTHOR_NAME', "Développeur");
define('_MI_MYTUBE_AUTHOR_DEVTEAM', "Equipe de développement");
define('_MI_MYTUBE_AUTHOR_WEBSITE', "Site web du développeur");
define('_MI_MYTUBE_AUTHOR_EMAIL', "E-mail du développeur");
define('_MI_MYTUBE_AUTHOR_CREDITS', "Crédits");
define('_MI_MYTUBE_MODULE_INFO', "Informations sur le développement du module");
define('_MI_MYTUBE_MODULE_STATUS', "Statut du développement");
define('_MI_MYTUBE_MODULE_DEMO', "Site de démonstration");
define('_MI_MYTUBE_MODULE_SUPPORT', "Site officiel de support");
define('_MI_MYTUBE_MODULE_BUG', "Rapporter un bug pour ce module");
define('_MI_MYTUBE_MODULE_FEATURE', "Suggérez une nouvelle fonction pour ce module");
define('_MI_MYTUBE_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_MYTUBE_RELEASE', "Date de mise à jour: ");
define('_MI_MYTUBE_ICONS_CREDITS', "Icônes par");
define('_MI_MYTUBE_AUTHOR_CREDITS', "Crédits");


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

define('_MI_MYTUBE_AUTHOR_CREDITSTEXT',"L'équipe WF-Projects.");
define('_MI_MYTUBE_AUTHOR_BUGFIXES', "Historique des bugs corrigés");

define('_MI_MYTUBE_COPYRIGHTIMAGE', "");

// version 1.02
define("_MI_MYTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_MYTUBE_FORM_DHTMLEXT", "DHTML Extended");

// Version 1.03
define('_MI_MYTUBE_DATEFORMATADMIN', 'Timestamp administration:');
define('_MI_MYTUBE_DATEFORMATADMINDSC', 'Administration par défaut du Timestamp pour MyTube');

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

// Version 1.04 RC-2
define('_MI_MYTUBE_MODULE_MANUAL', 'Manual:' );
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