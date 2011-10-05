<?php
/**
 * $Id: admin.php
 * Module: MyTube
 * Language: French
 */

define( "_AM_MYTUBE_WARNINSTALL1", "ATTENTION: Le répertoire %s existe sur votre serveur. <br />Merci de le supprimer pour des raisons de sécurité." );
define( "_AM_MYTUBE_WARNINSTALL2", "ATTENTION: Le ficher %s existe sur votre serveur. <br />Merci de le supprimer pour des raisons de sécurité." );
define( "_AM_MYTUBE_WARNINSTALL3", "ATTENTION: Le dossier %s n'existe pas sur votre serveur. <br />Sa présence est requise pour le bon fonctionnement du module." );

define( "_AM_MYTUBE_MODULE_NAME", "MyTube" );

define( "_AM_MYTUBE_BMODIFY", "Modifer" );
define( "_AM_MYTUBE_BDELETE", "Effacer" );
define( "_AM_MYTUBE_BCREATE", "Créer" );
define( "_AM_MYTUBE_BADD", "Ajouter" );
define( "_AM_MYTUBE_BAPPROVE", "Approuver" );
define( "_AM_MYTUBE_BIGNORE", "Ignorer" );
define( "_AM_MYTUBE_BCANCEL", "Annuler" );
define( "_AM_MYTUBE_BSAVE", "Sauvgarder" );
define( "_AM_MYTUBE_BRESET", "Recommencer" );
define( "_AM_MYTUBE_BMOVE", "Déplacer la Vidéo" );
define( "_AM_MYTUBE_BUPLOAD", "Uploader" );
define( "_AM_MYTUBE_BDELETEIMAGE", "Effacer l'image sélectionnée" );
define( "_AM_MYTUBE_BRETURN", "Retour d'où vous venez!" );
define( "_AM_MYTUBE_DBERROR", "Erreur d'accès à la base de données" );
// Autres Options
define( "_AM_MYTUBE_TEXTOPTIONS", "Options de texte:" );
define( "_AM_MYTUBE_DISABLEHTML", " Désactiver les tags HTML" );
define( "_AM_MYTUBE_DISABLESMILEY", " Désactiver les smilies" );
define( "_AM_MYTUBE_DISABLEXCODE", " Désactiver les codes Xoops" );
define( "_AM_MYTUBE_DISABLEIMAGES", " Désactiver les images" );
define( "_AM_MYTUBE_DISABLEBREAK", " Utiliser la conversion fin de ligne de XOOPS?" );
define( "_AM_MYTUBE_UPLOADFILE", "Vidéo ajoutée avec succès" );
define( "_AM_MYTUBE_NOMENUITEMS", "Aucun item de menu dans le menu" );
// Admin Bread crumb
define( "_AM_MYTUBE_PREFS", "Préferences" );
define( "_AM_MYTUBE_BUPDATE", "Mise à jour du module" );
define( "_AM_MYTUBE_BINDEX", "Index" );
define( "_AM_MYTUBE_BPERMISSIONS", "Permissions" );
// define( "_AM_MYTUBE_BLOCKADMIN", "Blocs" );
define( "_AM_MYTUBE_BLOCKADMIN", "Paramètres des blocs" );
define( "_AM_MYTUBE_GOMODULE", "Aller au Module" );
define( "_AM_MYTUBE_ABOUT", "A propos" );
// Sommaire
define( "_AM_MYTUBE_SCATEGORY", "Catégories: " );
define( "_AM_MYTUBE_SFILES", "Vidéos: " );
define( "_AM_MYTUBE_SNEWFILESVAL", "Proposées: " );
define( "_AM_MYTUBE_SMODREQUEST", "Modifiées: " );
define( "_AM_MYTUBE_SREVIEWS", "Revisées: " );

// Menu principal
define( "_AM_MYTUBE_MCATEGORY", "Gestion des catégories" );
define( "_AM_MYTUBE_MVIDEOS", "Gestion des vidéos" );
define( "_AM_MYTUBE_MLISTBROKEN", "Liste des vidéos brisées" );
define( "_AM_MYTUBE_MLISTPINGTIMES", "Temps de ping des vidéos" );
define( "_AM_MYTUBE_INDEXPAGE", "Gestion de la Page Index" );
define( "_AM_MYTUBE_MCOMMENTS", "Gestion de commentaires" );
define( "_AM_MYTUBE_MVOTEDATA", "Données de Votes" );
define( "_AM_MYTUBE_MUPLOADS", "Upload d'images" );

// Defines pour les catégories
define( "_AM_MYTUBE_CCATEGORY_CREATENEW", "Créer une nouvelle catégorie" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY", "Modifier une catégorie" );
define( "_AM_MYTUBE_CCATEGORY_MOVE", "Déplacer une catégorie" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_TITLE", "Titre de la catégorie:" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_FAILED", "Impossible de déplacer la catégorie: La catégorie ne peut être déplacé" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_FAILEDT", "Impossible de déplacer la Vidéo: Impossible de trouver la catégorie" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_MOVED", "Vidéo déplacée" );
define( "_AM_MYTUBE_CCATEGORY_CREATED", "Nouvelle catégorie créée et Base de données est mise à jour avec succès" );
define( "_AM_MYTUBE_CCATEGORY_MODIFIED", "Catégorie sélectionnée modifiée et Base de donnée mise à jour" );
define( "_AM_MYTUBE_CCATEGORY_DELETED", "Catégorie sélectionnée effacée et Base de donnée mise à jour" );
define( "_AM_MYTUBE_CCATEGORY_AREUSURE", "ATTENTION: Êtes vous sur(e) de vouloir effacer cette catégorie, y compris ses vidéos et ses commentaires ?" );
define( "_AM_MYTUBE_CCATEGORY_NOEXISTS", "Vous devez créer une catégorie avant d'ajouter une vidéo" );
define( "_AM_MYTUBE_FCATEGORY_GROUPPROMPT", "Permissions d'accès<div style='padding-top: 8px;'><span style='font-weight: normal;'>Sélectionner le(s) groupe(s) d'utilisateurs qui aur(ont)a accès à cette catégorie.</span></div>" );
define( "_AM_MYTUBE_FCATEGORY_SUBGROUPPROMPT", "Permissions de soummetre:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Sélectionner le(s) groupe(s) d'utilisateurs qui aur(ont)a la possibilité de soummetre des vidéos.</span></div>" );
define( "_AM_MYTUBE_FCATEGORY_MODGROUPPROMPT", "Permissions de modérer:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Sélectionner le(s) groupe(s) d'utilisateurs qui aur(ont)a la possibilité de modérer cette catégorie.</span></div>" );

define( "_AM_MYTUBE_FCATEGORY_TITLE", "Titre de la catégorie:" );
define( "_AM_MYTUBE_FCATEGORY_WEIGHT", "Ordre de la catégorie:" );
define( "_AM_MYTUBE_FCATEGORY_SUBCATEGORY", "Définir comme sous-catégorie:" );
define( "_AM_MYTUBE_FCATEGORY_CIMAGE", "Séléctionner une image pour la catégorie:" );
define( "_AM_MYTUBE_FCATEGORY_DESCRIPTION", "Description de la catégorie:" );
define( "_AM_MYTUBE_FCATEGORY_SUMMARY", "Sommaire de la catégorie:" );
/**
 * Defines pour la page Index
 */
define( "_AM_MYTUBE_IPAGE_UPDATED", "Page d'index modifiée et Base de données mise à jour avec succès!" );
define( "_AM_MYTUBE_IPAGE_INFORMATION", "Informations de la page Index" );
define( "_AM_MYTUBE_IPAGE_MODIFY", "Modifer la page Index" );
define( "_AM_MYTUBE_IPAGE_CIMAGE", "Sélectionner un image pour la page:" );
define( "_AM_MYTUBE_IPAGE_CTITLE", "Titre de la page:" );
define( "_AM_MYTUBE_IPAGE_CHEADING", "En-tête de page:" );
define( "_AM_MYTUBE_IPAGE_CHEADINGA", "Alignement de l'en-tête de page:" );
define( "_AM_MYTUBE_IPAGE_CFOOTER", "Pied de page:" );
define( "_AM_MYTUBE_IPAGE_CFOOTERA", "Alignement du pied de page:" );
define( "_AM_MYTUBE_IPAGE_CLEFT", "Alignement à Gauche" );
define( "_AM_MYTUBE_IPAGE_CCENTER", "Alignement au Centre" );
define( "_AM_MYTUBE_IPAGE_CRIGHT", "Alignement à Droite" );
/**
 * Defines pour les permissions
 */
define( "_AM_MYTUBE_PERM_MANAGEMENT", "Gestion des permissions" );
define( "_AM_MYTUBE_PERM_PERMSNOTE", "<div><b>NOTE:</b> Même si vous attribuez des permissions, les groupes n'accèderont pas forcement aux catégories si vous ne leur avez pas donné l'accès au module. Allez sur <b>Administration du Système > Groupes</b>, choisir les droits d'accès au module et groupes correspondants.</div>" );
define( "_AM_MYTUBE_PERM_CPERMISSIONS", "Permissions des catégories" );
define( "_AM_MYTUBE_PERM_CSELECTPERMISSIONS", "Sélectionner les catégories auxquelles chaque groupe aura accès" );
define( "_AM_MYTUBE_PERM_CNOCATEGORY", "Aucune permission appliquée : Il n'y a pas encore de catégories" );
define( "_AM_MYTUBE_PERM_FPERMISSIONS", "Permissions des Vidéos" );
define( "_AM_MYTUBE_PERM_FNOFILES", "Aucune permission appliquée : Il n'y a pas encore de Vidéos crées" );
define( "_AM_MYTUBE_PERM_FSELECTPERMISSIONS", "Sélectionner les Vidéos dont les groupes sont autorisés à visualiser" );
/**
 * Defines pour l'upload des images
 */
define( "_AM_MYTUBE_VIDEO_IMAGEUPLOAD", "Image uploadée sur le serveur avec succès" );
define( "_AM_MYTUBE_VIDEO_NOIMAGEEXIST", "ERREUR: Aucune image sélectionnée pour l'upload. Essayez à nouveau!" );
define( "_AM_MYTUBE_VIDEO_IMAGEEXIST", "L'image existe déjà!" );
define( "_AM_MYTUBE_VIDEO_FILEDELETED", "l'image a été effacée." );
define( "_AM_MYTUBE_VIDEO_FILEERRORDELETE", "Erreur d'effacement de la vidéo: Vidéo introuvable sur le serveur." );
define( "_AM_MYTUBE_VIDEO_NOFILEERROR", "Erreur d'effacement de l'image: Aucune image sélectionnée pour l'effacement." );
define( "_AM_MYTUBE_VIDEO_DELETEFILE", "ATTENTION: Etes-vous sur(e) de vouloir effacer cette image?" );
define( "_AM_MYTUBE_VIDEO_IMAGEINFO", "Statut du serveur" );
define( "_AM_MYTUBE_VIDEO_SPHPINI", "<b>Informations récupérées du fichier PHP.ini de votre serveur</b>" );
define( "_AM_MYTUBE_VIDEO_SAFEMODESTATUS", "Statut Safe Mode: " );
define( "_AM_MYTUBE_VIDEO_REGISTERGLOBALS", "Register Globals: " );
define( "_AM_MYTUBE_VIDEO_SERVERUPLOADSTATUS", "Statut du Serveur d'upload: " );
define( "_AM_MYTUBE_VIDEO_MAXUPLOADSIZE", "Taille maximum d'upload autorisée: " );
define( "_AM_MYTUBE_VIDEO_MAXPOSTSIZE", "Taille maximum d'envoi autorisée: " );
define( "_AM_MYTUBE_VIDEO_SAFEMODEPROBLEMS", " (Ceci peut poser des problèmes)" );
define( "_AM_MYTUBE_VIDEO_GDLIBSTATUS", "Support de la librairie GD: " );
define( "_AM_MYTUBE_VIDEO_GDLIBVERSION", "Version de la librairie GD: " );
define( "_AM_MYTUBE_VIDEO_GDON", "<b>Actif</b> (possibilité de Miniatures)" );
define( "_AM_MYTUBE_VIDEO_GDOFF", "<b>Inactif</b> (pas de possibilité de Miniatures)" );
define( "_AM_MYTUBE_VIDEO_OFF", "<b>OFF</b>" );
define( "_AM_MYTUBE_VIDEO_ON", "<b>ON</b>" );
define( "_AM_MYTUBE_VIDEO_CATIMAGE", "Images de la catégories" );
define( "_AM_MYTUBE_VIDEO_SCREENSHOTS", "Copies d'écran" );
define( "_AM_MYTUBE_VIDEO_MAINIMAGEDIR", "Image principale" );
define( "_AM_MYTUBE_VIDEO_FCATIMAGE", "Chemin des images des catégories" );
define( "_AM_MYTUBE_VIDEO_FSCREENSHOTS", "Chemin des copies d'écran" );
define( "_AM_MYTUBE_VIDEO_FMAINIMAGEDIR", "Chemin principal des images" );
define( "_AM_MYTUBE_VIDEO_FUPLOADIMAGETO", "Uploader une Image: " );
define( "_AM_MYTUBE_VIDEO_FUPLOADPATH", "Chemin d'upload: " );
define( "_AM_MYTUBE_VIDEO_FUPLOADURL", "URL d'upload: " );
define( "_AM_MYTUBE_VIDEO_FOLDERSELECTION", "Sélectionner la destination de l'upload:" );
define( "_AM_MYTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Afficher l'image sélectionnée:" );
define( "_AM_MYTUBE_VIDEO_FUPLOADIMAGE", "Uploader une nouvelle image pour la destination sélectionnée:" );

//  defines pour la page principale
define( "_AM_MYTUBE_MINDEX_VIDEOSUMMARY", "Sommaire du module" );
define( "_AM_MYTUBE_MINDEX_PUBLISHEDVIDEO", "Vidéos publiées:" );
define( "_AM_MYTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Vidéos auto-publiées:" );
define( "_AM_MYTUBE_MINDEX_AUTOEXPIRE", "Vidéos avec auto-expiration" );
define( "_AM_MYTUBE_MINDEX_EXPIRED", "Vidéos expirées:" );
define( "_AM_MYTUBE_MINDEX_OFFLINEVIDEO", "Vidéos Hors-ligne:" );
define( "_AM_MYTUBE_MINDEX_ID", "ID" );
define( "_AM_MYTUBE_MINDEX_TITLE", "Titre de la Vidéo" );
define( "_AM_MYTUBE_MINDEX_POSTER", "Proposée par" );
define( "_AM_MYTUBE_MINDEX_ONLINE", "Etat" );
define( "_AM_MYTUBE_MINDEX_ONLINESTATUS", "Staut En-ligne" );
define( "_AM_MYTUBE_MINDEX_PUBLISH", "Date de publication" );
define( "_AM_MYTUBE_MINDEX_PUBLISHED", "Publiée" );
define( "_AM_MYTUBE_MINDEX_EXPIRE", "Date d'expiration" );
define( "_AM_MYTUBE_MINDEX_NOTSET", "Date non réglée" );
define( "_AM_MYTUBE_MINDEX_SUBMITTED", "Date de soumission" );

define( "_AM_MYTUBE_MINDEX_ACTION", "Action" );
define( "_AM_MYTUBE_MINDEX_NOVIDEOSFOUND", "INFORMATION: Aucune Vidéo avec ce critère à afficher" );
define( "_AM_MYTUBE_MINDEX_PAGE", "<b>Page:<b> " );
define( '_AM_MYTUBE_MINDEX_PAGEINFOTXT', "<ul><li>Accueil MyTube.</li><li>Vous pouvez facilement modifier le logo, les textes de l'entête et du pied de page, de l'index afin d'avoir un look plus aproprié</li></ul><br /><br />Note: Le logo choisie sera utilisé pour toutes les pages du module." );
define( "_AM_MYTUBE_MINDEX_RESPONSE", "Temps de Réponse" );
// Vidéos proposées
define( "_AM_MYTUBE_SUB_SUBMITTEDFILES", "Vidéos soumises" );
define( "_AM_MYTUBE_SUB_FILESWAITINGINFO", "Information sur les Vidéos en attente" );
define( "_AM_MYTUBE_SUB_FILESWAITINGVALIDATION", "Vidéos en attente de validation: " );
define( "_AM_MYTUBE_SUB_APPROVEWAITINGFILE", "<b>Approuver</b> les nouvelle vidéos sans validation." );
define( "_AM_MYTUBE_SUB_EDITWAITINGFILE", "<b>Modifer</b> les nouvelles vidéos puis les valider." );
define( "_AM_MYTUBE_SUB_DELETEWAITINGFILE", "<b>Effacer</b> les nouvelles vidéos." );
define( "_AM_MYTUBE_SUB_NOFILESWAITING", "Aucune Vidéo avec ce critère à afficher" );
define( "_AM_MYTUBE_SUB_NEWFILECREATED", "Nouvelle Vidéo ajoutée et la base de données mise à jour" );
// Information sur les Votes
define( "_AM_MYTUBE_VOTE_RATINGINFOMATION", "Information de vote" );
define( "_AM_MYTUBE_VOTE_TOTALVOTES", "Total des votes: " );
define( "_AM_MYTUBE_VOTE_REGUSERVOTES", "Votes des utilisateurs enregistrés: %s" );
define( "_AM_MYTUBE_VOTE_ANONUSERVOTES", "Votes des utilisateurs anonymes: %s" );
define( "_AM_MYTUBE_VOTE_USER", "Utilisateurs" );
define( "_AM_MYTUBE_VOTE_IP", "Adresse IP" );
define( "_AM_MYTUBE_VOTE_DATE", "Soumis" );
define( "_AM_MYTUBE_VOTE_RATING", "Estimation" );
define( "_AM_MYTUBE_VOTE_NOREGVOTES", "Pas de vote d'utilisateur enregistré" );
define( "_AM_MYTUBE_VOTE_NOUNREGVOTES", "Pas de vote d'utilsateur anonyme" );
define( "_AM_MYTUBE_VOTE_VOTEDELETED", "Données de votes effacées." );
define( "_AM_MYTUBE_VOTE_ID", "ID" );
define( "_AM_MYTUBE_VOTE_FILETITLE", "Titre de la Vidéo" );
define( "_AM_MYTUBE_VOTE_DISPLAYVOTES", "Données de vote" );
define( "_AM_MYTUBE_VOTE_NOVOTES", "Pas de votes d'utilisateur à afficher" );
define( "_AM_MYTUBE_VOTE_DELETE", "Pas de votes d'utilisateur à afficher" );
define( "_AM_MYTUBE_VOTE_DELETEDSC", "<b>Effacement</b> du vote de la base de donnée" );
define( "_AM_MYTUBE_VOTEDELETED", "Vote sélectionné effacé et base de donnée mise à jour" );

define( "_AM_MYTUBE_VOTE_USERAVG", "Estimation moyenne d'utilisateur" );
define( "_AM_MYTUBE_VOTE_TOTALRATE", "Total de Votes" );
define( "_AM_MYTUBE_VOTE_MAXRATE", "Vote Max d'Item" );
define( "_AM_MYTUBE_VOTE_MINRATE", "Vote Min d'Item" );
define( "_AM_MYTUBE_VOTE_MOSTVOTEDTITLE", "La plus votée" );
define( "_AM_MYTUBE_VOTE_LEASTVOTEDTITLE", "La moins votée" );
define( "_AM_MYTUBE_VOTE_MOSTVOTERSUID", "Votants les plus actifs" );
define( "_AM_MYTUBE_VOTE_REGISTERED", "Votes des utilisateurs enregistrés" );
define( "_AM_MYTUBE_VOTE_NONREGISTERED", "Votes des utilisateurs anonymes" );
// Modifications
define( "_AM_MYTUBE_MOD_TOTMODREQUESTS", "Total des demandes de modification: " );
define( "_AM_MYTUBE_MOD_MODREQUESTS", "Vidéos modifiées" );
define( "_AM_MYTUBE_MOD_MODREQUESTSINFO", "Information des Vidéos modifiées" );
define( "_AM_MYTUBE_MOD_MODID", "ID" );
define( "_AM_MYTUBE_MOD_MODTITLE", "Titre" );
define( "_AM_MYTUBE_MOD_MODPOSTER", "Proposition originale par: " );
define( "_AM_MYTUBE_MOD_DATE", "Soumis" );
define( "_AM_MYTUBE_MOD_NOMODREQUEST", "Il n'y a aucune demande de modification avec ce critère" );
define( "_AM_MYTUBE_MOD_TITLE", "Titre de la Vidéo: " );
define( "_AM_MYTUBE_MOD_LID", "ID de la Vidéo: " );
define( "_AM_MYTUBE_MOD_CID", "Catégorie: " );
define( "_AM_MYTUBE_MOD_URL", "Url de la Vidéo: " );
define( "_AM_MYTUBE_MOD_PUBLISHER", "Auteur: " );
define( "_AM_MYTUBE_MOD_FORUMID", "Forum: " );
define( "_AM_MYTUBE_MOD_SCREENSHOT", "Capture d'écran: " );
define( "_AM_MYTUBE_MOD_HOMEPAGE", "Site Web: " );
define( "_AM_MYTUBE_MOD_HOMEPAGETITLE", "Titre du Site Web: " );
define( "_AM_MYTUBE_MOD_SHOTIMAGE", "Capture d'écran: " );
define( "_AM_MYTUBE_MOD_DESCRIPTION", "Description: " );
define( "_AM_MYTUBE_MOD_MODIFYSUBMITTER", "Proposée par: " );
define( "_AM_MYTUBE_MOD_MODIFYSUBMIT", "Proposée par" );
define( "_AM_MYTUBE_MOD_PROPOSED", "Détails de la Vidéo proposée" );
define( "_AM_MYTUBE_MOD_ORIGINAL", "Détails originaux de la Vidéo" );
define( "_AM_MYTUBE_MOD_REQDELETED", "Modification demandée effacée de la base de donnée" );
define( "_AM_MYTUBE_MOD_REQUPDATED", "Vidéo sélectionnée modifiée et Base de donnée mise à jour." );
define( '_AM_MYTUBE_MOD_VIEW', 'Voir' );
// Gestion des Vidéos
define( "_AM_MYTUBE_VIDEO_ID", "ID de la Vidéo: " );
define( "_AM_MYTUBE_VIDEO_IP", "Adresse IP de la proposition: " );
define( "_AM_MYTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Extension de la Vidéo autorisée par l'administrateur</b>:</div>" );
define( "_AM_MYTUBE_VIDEO_MODIFYFILE", "Modifier les informations de la Vidéo" );
define( "_AM_MYTUBE_VIDEO_CREATENEWFILE", "Créer une nouvelle Vidéo" );
define( "_AM_MYTUBE_VIDEO_TITLE", "Titre de la Vidéo: " );
define( "_AM_MYTUBE_VIDEO_DLVIDID", "Id-Code de la Vidéo: " );
define( "_AM_MYTUBE_VIDEO_DLVIDID_NOTE", "
<small><b>YouTube:</b> http://www.youtube.com/watch?v=<font color=#FF0000>IsOtq-qCqZ4</font><br />
<b>MetaCafe:</b> http://www.metacafe.com/watch/<font color=#FF0000>191543/sperm_whale_encounters_underwater_robot</font>/<br />
<b>SPIKE/ifilm:</b> http://www.ifilm.com/video/<font color=#FF0000>2718605</font><br />
<b>Photobucket:</b> http://i39.photobucket.com/albums/<font color=#FF0000>e168/vailtom/th_BigSquid</font>.jpg<br />
<b>Google Video:</b> http://video.google.com/videoplay?docid=<font color=#FF0000>4761076111111865377</font>&q=rov&total=913&start=...<br />
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
<b>MyTube: </b><font color=#FF0000>Take over from above selection menu</font></small>" );
define( "_AM_MYTUBE_VIDEO_PICURL", "Url de l'image: " );
define( "_AM_MYTUBE_VIDEO_PICURLNOTE", "<small>Url de l'image quand Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Megavideo, Viddler, Maktoob ou National Geographic est la Source.</small>" );
define( "_AM_MYTUBE_VIDEO_DESCRIPTION", "Description: " );
define( "_AM_MYTUBE_VIDEO_CATEGORY", "Catégorie: " );
define( "_AM_MYTUBE_VIDEO_FILESSTATUS", " Mettre la Vidéo Hors-ligne?<br /><br /><span style='font-weight: normal;'>La vidéo ne sera plus visible par les utilisateurs.</span>" );
define( "_AM_MYTUBE_VIDEO_SETASUPDATED", " Mettre la Vidéo en statut Mise à Jour?<br /><br /><span style='font-weight: normal;'>La vidéo affichera l'icône MIS A JOUR</span>" );
define( "_AM_MYTUBE_VIDEO_SHOTIMAGE", "Capture d'écran: " );
define( "_AM_MYTUBE_VIDEO_DISCUSSINFORUM", "Ajouter une discussion dans les forums?" );
define( "_AM_MYTUBE_VIDEO_PUBLISHDATE", "Date de publication:" );
define( "_AM_MYTUBE_VIDEO_EXPIREDATE", "Date d'expiration:" );
define( "_AM_MYTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Retirer la date de publication:" );
define( "_AM_MYTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Retirer la date d'expiration:" );
define( "_AM_MYTUBE_VIDEO_PUBLISHDATESET", " Date de publication: " );
define( "_AM_MYTUBE_VIDEO_SETDATETIMEPUBLISH", " Ajouter la date/heure de publication" );
define( "_AM_MYTUBE_VIDEO_SETDATETIMEEXPIRE", " Ajouter la date/heure d'expiration" );
define( "_AM_MYTUBE_VIDEO_SETPUBLISHDATE", "<b>Date de publication: </b>" );
define( "_AM_MYTUBE_VIDEO_SETNEWPUBLISHDATE", "<b>Mettre une nouvelle date de publication: </b><br />Publiée:" );
define( "_AM_MYTUBE_VIDEO_SETPUBDATESETS", "<b>Mettre la date de publication:</b><br />Publishes On Date:" );
define( "_AM_MYTUBE_VIDEO_EXPIREDATESET", " Date d'expiration: " );
define( "_AM_MYTUBE_VIDEO_SETEXPIREDATE", "<b>Mettre la date d'expiration: </b>" );
define( "_AM_MYTUBE_VIDEO_DELEDITMESS", "Effacer le rapport des Vidéos brisées?<br /><br /><span style='font-weight: normal;'>Si vous choisissez <b>OUI</b> le rapport sera automatiquement effacé et vous confirmez que la vidéo fontionne à nouveau.</span>" );
define( "_AM_MYTUBE_VIDEO_MUSTBEVALID", "La capture d'écran doit être une image valide placée dans le répertoire (ex. shot.gif). Laissez le champ vide si il n'y a pas de capture d'écran." );
define( "_AM_MYTUBE_VIDEO_EDITAPPROVE", "Approuver la Vidéo:" );
define( "_AM_MYTUBE_VIDEO_NEWFILEUPLOAD", "Nouvelle vidéo ajoutée et base donnée mise à jour avec succès" );
define( "_AM_MYTUBE_VIDEO_FILEMODIFIEDUPDATE", "Vidéo sélectionnée modifiée et base donnée mise à jour avec succès" );
define( "_AM_MYTUBE_VIDEO_REALLYDELETEDTHIS", "Voulez-vous vraiment supprimer la vidéo sélectionnée?" );
define( "_AM_MYTUBE_VIDEO_FILEWASDELETED", "La vidéo %s a été retirée de la base de données avec succès!" );
define( "_AM_MYTUBE_VIDEO_FILEAPPROVED", "Vidéo approuvée et base données mise à jour avec succès" );
define( "_AM_MYTUBE_VIDEO_CREATENEWSSTORY", "<b>Soumettre la vidéo comme news?</b>" );
define( "_AM_MYTUBE_VIDEO_SUBMITNEWS", "Soummetre la vidéo comme un article dans les News?" );
define( "_AM_MYTUBE_VIDEO_NEWSCATEGORY", "Selectonner la catégorie de News pour soumettre:" );
define( "_AM_MYTUBE_VIDEO_NEWSTITLE", "Titre de la News:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Laisser le champs vide pour utiliser le nom de la Vidéo comme titre</span></div>" );
define( "_AM_MYTUBE_VIDEO_PUBLISHER", "Auteur: " );

/**
 * Vidéos brisées
 */
define( "_AM_MYTUBE_SBROKENSUBMIT", "Vidéos brisées: " );
define( "_AM_MYTUBE_BROKEN_FILE", "Rapport des vidéos brisées" );
define( "_AM_MYTUBE_BROKEN_FILEIGNORED", "Rapport de vidéo brisée ignoré et base de donnée mise à juour avec succés!" );
define( "_AM_MYTUBE_BROKEN_NOWACK", "Le statut à été constaté, modifié et la base de données mise à jour avec succès!" );
define( "_AM_MYTUBE_BROKEN_NOWCON", "Statut modifié et base de données mise à jour" );
define( "_AM_MYTUBE_BROKEN_REPORTINFO", "Informations sur le rapport des vidéos brisées" );
define( "_AM_MYTUBE_BROKEN_REPORTSNO", "Rapport des vidéos brisées en attente:" );
define( "_AM_MYTUBE_BROKEN_IGNOREDESC", "<b>Ignorer</b> le rapport et l'effacer seulement" );
define( "_AM_MYTUBE_BROKEN_DELETEDESC", "<b>Effacer</b> le rapport et la vidéo brisée." );
define( "_AM_MYTUBE_BROKEN_EDITDESC", "<b>Editer</b> la vidéo pour corriger le problème." );
define( "_AM_MYTUBE_BROKEN_ACKDESC", "<b>Connu</b> Placer le rapport comme connu." );
define( "_AM_MYTUBE_BROKEN_CONFIRMDESC", "<b>Confirmé</b> Paramétrer le rapport comme connu." );
define( "_AM_MYTUBE_BROKEN_ACKNOWLEDGED", "Connu" );
define( "_AM_MYTUBE_BROKEN_DCONFIRMED", "Confirmé" );

define( "_AM_MYTUBE_BROKEN_ID", "ID" );
define( "_AM_MYTUBE_BROKEN_TITLE", "Titre" );
define( "_AM_MYTUBE_BROKEN_REPORTER", "Rapporteur" );
define( "_AM_MYTUBE_BROKEN_FILESUBMITTER", "Proposée par" );
define( "_AM_MYTUBE_BROKEN_DATESUBMITTED", "Date de soumission" );
define( "_AM_MYTUBE_BROKEN_ACTION", "Action" );
define( "_AM_MYTUBE_BROKEN_NOFILEMATCH", "Aucun rapport d'une vidéo brisée avec ce critère" );
define( "_AM_MYTUBE_BROKENFILEDELETED", "Vidéo retirée de la base de donnée et le rapport a été effacé" );
define( "_AM_MYTUBE_BROKEN_VIDSOURCE", "Source de la vidéo" );
/**
 * A propos des defines
 */
define( "_AM_MYTUBE_BY", "par" );
// block defines
define( "_AM_MYTUBE_BADMIN", "Administration des blocs" );
define( "_AM_MYTUBE_BLKDESC", "Description" );
define( "_AM_MYTUBE_TITLE", "Titre" );
define( "_AM_MYTUBE_SIDE", "Alignement" );
define( "_AM_MYTUBE_WEIGHT", "Position" );
define( "_AM_MYTUBE_VISIBLE", "Visible" );
define( "_AM_MYTUBE_ACTION", "Action" );
define( "_AM_MYTUBE_SBLEFT", "Gauche" );
define( "_AM_MYTUBE_SBRIGHT", "Droite" );
define( "_AM_MYTUBE_CBLEFT", "Centre gauche" );
define( "_AM_MYTUBE_CBRIGHT", "Centre droit" );
define( "_AM_MYTUBE_CBCENTER", "Centre milieu" );
define( "_AM_MYTUBE_ACTIVERIGHTS", "Droits Actifs" );
define( "_AM_MYTUBE_ACCESSRIGHTS", "Droits d'accès" );
// image admin icon
define( "_AM_MYTUBE_ICO_EDIT", "Modifier cette vidéo" );
define( "_AM_MYTUBE_ICO_DELETE", "Effacer cette vidéo" );
define( "_AM_MYTUBE_ICO_RESOURCE", "Modifier cette ressource" );

define( "_AM_MYTUBE_ICO_ONLINE", "En-ligne" );
define( "_AM_MYTUBE_ICO_OFFLINE", "Hors-ligne" );
define( "_AM_MYTUBE_ICO_APPROVED", "Approuvée" );
define( "_AM_MYTUBE_ICO_NOTAPPROVED", "Non approuvée" );

define( "_AM_MYTUBE_ICO_VIDEO", "URL vidéo Relatif" );
define( "_AM_MYTUBE_ICO_URL", "Ajouter une URL relatve" );
define( "_AM_MYTUBE_ICO_ADD", "Ajouter" );
define( "_AM_MYTUBE_ICO_APPROVE", "Approuver" );
define( "_AM_MYTUBE_ICO_STATS", "Etats" );
define( "_AM_MYTUBE_ICO_VIEW", "Voir cette vidéo" );

define( "_AM_MYTUBE_ICO_IGNORE", "Ignorer" );
define( "_AM_MYTUBE_ICO_ACK", "Rapport de vidéo brisée connu" );
define( "_AM_MYTUBE_ICO_REPORT", "Rapport de vidéo brisée connu?" );
define( "_AM_MYTUBE_ICO_CONFIRM", "Rapport de vidéo brisée confirmé" );
define( "_AM_MYTUBE_ICO_CONBROKEN", "Confirmer le rapport de vidéo brisée connu?" );
define( "_AM_MYTUBE_ICO_RES", "Modifier les Sources/Liens de cete Vidéo" );
define( "_AM_MYTUBE_MOD_URLRATING", "Interent Content Rating:" );
// Catégories alternatives
define( "_AM_MYTUBE_ALTCAT_CREATEF", "Ajouter une catégorie alternative" );
define( "_AM_MYTUBE_MALTCAT", "Gestion des catégories alternatives" );
define( "_AM_MYTUBE_ALTCAT_MODIFYF", "Gestion des catégories alternatives" );
define( "_AM_MYTUBE_ALTCAT_INFOTEXT", "<ul><li>Les catégories alternatives peuvent-être ajoutées ou effacées facilement via ce formulaire.</li></ul>" );
define( '_AM_MYTUBE_ALTCAT_CREATED', 'La catégorie alternative a été bien créée' );

define( "_AM_MYTUBE_MRESOURCES", "Gestion de ressources" );
define( "_AM_MYTUBE_RES_CREATED", "Gestion de ressources" );
define( "_AM_MYTUBE_RES_ID", "ID" );
define( "_AM_MYTUBE_RES_DESC", "Description" );
define( "_AM_MYTUBE_RES_NAME", "Nom de la ressource" );
define( "_AM_MYTUBE_RES_TYPE", "Type de la ressource" );
define( "_AM_MYTUBE_RES_USER", "Utilisateur" );
define( "_AM_MYTUBE_RES_CREATEF", "Ajouter une ressource" );
define( "_AM_MYTUBE_RES_MODIFYF", "Modifier une ressource" );
define( "_AM_MYTUBE_RES_NAMEF", "Nom de la ressource:" );
define( "_AM_MYTUBE_RES_DESCF", "Description de la ressource:" );
define( "_AM_MYTUBE_RES_URLF", "URL de la ressource:" );
define( "_AM_MYTUBE_RES_ITEMIDF", "Item ID de la ressource:" );
define( "_AM_MYTUBE_RES_INFOTEXT", "<ul><li>De nouvelles ressources peuvent-être ajoutées, modifées ou effacées facilement via ce formulaire.</li>
	<li>Liste de toutes les ressources liées à une vidéo</li>
	<li>Modifier le nom et la description de la ressource</li></ul>
	" );
define( "_AM_MYTUBE_LISTBROKEN", "Displays Videos that are possibly broken. NB: These results may not be accurate and should be taken as a rough guide.<br /><br />Please check the video does exist first before any action taken.<br /><br />" );
define( "_AM_MYTUBE_PINGTIMES", "Displays the first estimated round ping time to each video.<br /><br />NB: These results may not be accurate and should be taken as a rough guide.<br /><br />" );

define( "_AM_MYTUBE_NO_FORUM", "Aucun forum sélectionnée" );

define( "_AM_MYTUBE_PERM_RATEPERMISSIONS", "Permissions d'estimer" );
define( "_AM_MYTUBE_PERM_RATEPERMISSIONS_TEXT", "Sélectionner les groupes qui peuvent estimer des vidéos pour les catégories affichées." );

define( "_AM_MYTUBE_PERM_AUTOPERMISSIONS", "Permissions d'approuver" );
define( "_AM_MYTUBE_PERM_AUTOPERMISSIONS_TEXT", "Sélectionnez les groupes qui, leurs vidéos seront automatiquement approuvées sans l'intervention de l'administrateur." );

define( "_AM_MYTUBE_PERM_SPERMISSIONS", "Permissions de soummetre" );
define( "_AM_MYTUBE_PERM_SPERMISSIONS_TEXT", "Sélectionnez les groupes qui peuvent proposer des vidéos pour les catégories affichées." );

define( "_AM_MYTUBE_PERM_APERMISSIONS", "Permissions de modérer" );
define( "_AM_MYTUBE_PERM_APERMISSIONS_TEXT", "Sélectionnez les groupes qui auront les privilièges de modérer pour les catégories affichées." );

define( "_AM_MYTUBE_TIME", "Durée:" );
define( "_AM_MYTUBE_KEYWORDS", "Mots clés:" );
define( "_AM_MYTUBE_KEYWORDS_NOTE", "<small><i>Les mots clés doivent être séparés par des virgules (mot clé1, mot clé2).</i></small>" );
define("_AM_MYTUBE_VIDEO_META_DESCRIPTION", "Meta Description");
define("_AM_MYTUBE_VIDEO_META_DESCRIPTION_DSC", "Dans le cadre d'améliorer votre réferencement, vous pouvez utiliser des meta descriptions signitifs pour cette vidéo. Si vous laissez ce champ vide en créant une catégorie, Il deviendra automatiquement populaire avec le champs récapitulatif de cette vidéo.");

define( "_AM_MYTUBE_VIDSOURCE", "Source de la vidéo:" );
define( "_AM_MYTUBE_VIDSOURCE2", "Source de la vidéo" );
define( "_AM_MYTUBE_YOUTUBE", "YouTube" );
define( "_AM_MYTUBE_METACAFE", "MetaCafe" );
define( "_AM_MYTUBE_IFILM", "Spike" );
define( "_AM_MYTUBE_GOOGLEVIDEO", "Google Video" );
define( "_AM_MYTUBE_MYSPAVETV", "MySpace TV" );
define( "_AM_MYTUBE_PHOTOBUCKET", "Photobucket" );
define( "_AM_MYTUBE_DAILYMOTION", "DailyMotion" );

// Version 1.04
define( "_AM_MYTUBE_BLIPTV", "Blip.tv" );
define( "_AM_MYTUBE_MYTUBE", "MyTube" );
define( "_AM_MYTUBE_ICO_EXPIRE", "Expired" );
define( "_AM_MYTUBE_MMYTUBE", "Add MyTube Clip" );
define( "_AM_MYTUBE_VIDEO_CATVIDEOIMG", "Video images" );
define( "_AM_MYTUBE_VIDEO_FCATVIDEOIMG", "Video image path" );
define( "_AM_MYTUBE_VUPLOAD_VIDEOEXIST", "Video already exists" );
define( "_AM_MYTUBE_VUPLOAD_VIDEOUPLOAD", "Video uploaded" );
define( "_AM_MYTUBE_VUPLOAD_NOVIDEOEXIST", "No Video exists" );
define( "_AM_MYTUBE_VUPLOAD_FILEDELETED", "Video deleted" );
define( "_AM_MYTUBE_VUPLOAD_FILEERRORDELETE", "Error" );
define( "_AM_MYTUBE_VUPLOAD_NOFILEERROR", "No File" );
define( "_AM_MYTUBE_VUPLOAD_DELETEFILE", "Delete video file" );
define( "_AM_MYTUBE_VUPLOAD_CATVIDEO", "Video files" );
define( "_AM_MYTUBE_VUPLOAD_FCATVIDEO", "Video upload directory" );
define( "_AM_MYTUBE_VUPLOADS", "Video Upload" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADPATH", "Video upload path:" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADURL", "Video upload url:" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADVIDEOTO", "Upload video: " );
define( "_AM_MYTUBE_VUPLOAD_FOLDERSELECTION", "Select upload destination" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADVIDEO", "Video to upload" );
define( "_AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Select a video file" );
define( "_AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "Video file must be of type FLV" );
define( "_AM_MYTUBE_BDELETEVIDEO", "Delete video" );
define( "_AM_MYTUBE_NOVIDEO", "Show No Video" );
define( "_AM_MYTUBE_NOIMAGE", "Show No Image" );
define( "_AM_MYTUBE_NOSELECT", "No Selection" );
define( "_AM_MYTUBE_NOFILESELECT", "No Selected File" );
define( "_AM_MYTUBE_MYTUBEVIDEO", "MyTube Video File:" );
define( "_AM_MYTUBE_WARNINSTALL4", "<b>WARNING:</b> <u>Folder</u> %s is not writeable. <br />This folder needs to be writeable (CHMOD 777) for MyTube." );
// Uploader class
define( "_AM_MYTUBE_READWRITEERROR", "You either did not choose a file to upload or the server has insufficient read/writes to upload this file!" );
define( "_AM_MYTUBE_INVALIDFILESIZE", "Invalid File Size" );
define( "_AM_MYTUBE_FILENAMEEMPTY", "Filename Is Empty" );
define( "_AM_MYTUBE_NOFILEUPLOAD", "No file uploaded, this is a error" );
define( "_AM_MYTUBE_UPLOADERRORZERO", "There was a problem with your upload. Error: 0" );
define( "_AM_MYTUBE_UPLOADERRORONE", "The file you are trying to upload is too big. Error: 1" );
define( "_AM_MYTUBE_UPLOADERRORTWO", "The file you are trying to upload is too big. Error: 2" );
define( "_AM_MYTUBE_UPLOADERRORTHREE", "The file you are trying upload was only partially uploaded. Error: 3" );
define( "_AM_MYTUBE_UPLOADERRORFOUR", "No file selected for upload. Error: 4" );
define( "_AM_MYTUBE_UPLOADERRORFIVE", "No file selected for upload. Error: 5" );
define( "_AM_MYTUBE_NOUPLOADDIR", "Upload directory not set" );
define( "_AM_MYTUBE_FAILOPENDIR", "Failed opening directory: " );
define( "_AM_MYTUBE_FAILOPENDIRWRITEPERM", "Failed opening directory with write permission: " );
define( "_AM_MYTUBE_FILESIZEMAXSIZE", "File Size: %u. Maximum Size Allowed: %u" );
define( "_AM_MYTUBE_FILESIZEMAXWIDTH", "File width: %u. Maximum width allowed: %u" );
define( "_AM_MYTUBE_FILESIZEMAXHEIGHT", "File height: %u. Maximum height allowed: %u" );
define( "_AM_MYTUBE_MIMENOTALLOW", "MIME type not allowed: " );
define( "_AM_MYTUBE_FAILEDUPLOADING", "Failed uploading file: " );
define( "_AM_MYTUBE_ALREADYEXISTTRYAGAIN", " already exists on the server. Please rename this file and try again.<br />" );
define( "_AM_MYTUBE_ERRORSRETURNUPLOAD", "<h4>Errors Returned While Uploading</h4>" );
define( "_AM_MYTUBE_DOESNOTEXIST", " does not exist!" );

// Version 1.04 RC-2
define( "_AM_MYTUBE_CLIPFISH", "ClipFish" );
define( "_AM_MYTUBE_LIVELEAK", "LiveLeak" );
define( '_AM_MYTUBE_MAKTOOB', 'Maktoob' );
define( '_AM_MYTUBE_VEOH', 'Veoh' );
define( "_AM_MYTUBE_FILE", "File " );
define( "_AM_MYTUBE_INFORMATION", "Video Information" );
define( "_AM_MYTUBE_VIDEO_DLVIDIDDSC", "Take over red part as given in the examples below" );
define( "_AM_MYTUBE_VIDEO_VIEWS", "Views: " );
define( "_AM_MYTUBE_ERROR_CATISCAT", "You can NOT set a category as a sub-category of itself!" );

// Version 1.04 RC-3
define( "_AM_MYTUBE_MOD_VIDID", "Video id-code: " );
define( "_AM_MYTUBE_MOD_VIDSOURCE", "Video source: " );
define( "_AM_MYTUBE_MOD_TIME", "Time: " );
define( "_AM_MYTUBE_MOD_KEYWORDS", "Keywords: " );
define( "_AM_MYTUBE_MOD_ITEM_TAG", "Tags: " );
define( "_AM_MYTUBE_MOD_PICURL", "Picture url: " );
define( "_AM_MYTUBE_IPAGE_SHOWLATEST", "Show Latest Listings?" );
define( "_AM_MYTUBE_IPAGE_LATESTTOTAL", "How many videos to show?" );
define( "_AM_MYTUBE_IPAGE_LATESTTOTAL_DSC", "0 Turns this option off." );

// Version 1.05 RC-1
define( '_AM_MYTUBE_VIMEO', 'Vimeo' );
define( '_AM_MYTUBE_MEGAVIDEO', 'Megavideo' );
define( '_AM_MYTUBE_VIDDLER', 'Viddler' );
define( '_AM_MYTUBE_CATTITLE', 'Category' );

// Version 1.06 RC-1
define( '_AM_MYTUBE_FLV_LICENSE', 'License' );
define( '_AM_MYTUBE_FLV_LICENSEDSC', 'Please read the <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">license</a> for using the JW FLV Media Player. By using this player you agree to the <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">noncommercial license</a>.' );
define('_AM_MYTUBE_RSSFEED', 'Flux RSS');
define('_AM_MYTUBE_RSSFEEDCFG', 'Configuration des flux RSS');
define('_AM_MYTUBE_RSSFEEDDSC', 'configuration des flux d\'actualit&eacute; RSS de l\'annuaire.<br />Pour de plus amples renseignements, voir ce <a href="http://www.rssboard.org/" target="_blank">site</a>');
define('_AM_MYTUBE_RSSACTIVE', 'Activer les flux RSS');
define('_AM_MYTUBE_RSSACTIVEDSC', 'oui pour activer le flux d\'actualit&eacute; ou non pour d&eacute;sactv&eacute; cette fonction');
define('_AM_MYTUBE_RSSTITLE', 'Titre du flux d\'actualit&eacute; RSS');
define('_AM_MYTUBE_RSSTITLEDSC', 'Titre qui va appara&icirc;tre dans l\'onglet du navigateur de la personne qui s\'abonne a ce flux d\'actualit&eacute; RSS.');
define('_AM_MYTUBE_RSSLINKS', 'Lien du flux RSS');
define('_AM_MYTUBE_RSSLINKSDSC', 'Lien URL du flux d\'actualit&eacute; RSS g&eacute;n&eacute;rale.');
define('_AM_MYTUBE_RSSDESCRIPTION', 'Description du flux RSS');
define('_AM_MYTUBE_RSSDESCRIPTIONDSC', 'petite phrase ou slogan d&eacute;crivant le flux.');
define('_AM_MYTUBE_RSSIMAGE', 'Image du flux');
define('_AM_MYTUBE_RSSIMAGEDSC', 'URL de l\'image du flux qui appara&icirc;tra en format GIF, JPEG ou PNG.');
define('_AM_MYTUBE_RSSWIDTH', 'Largeur de l\'image');
define('_AM_MYTUBE_RSSWIDTHDSC', 'largeur de l\'image autoris&eacute; en pixel.<br />Attention la taille maximum est de 144px.');
define('_AM_MYTUBE_RSSHEIGHT', 'Hauteur de l\'image');
define('_AM_MYTUBE_RSSHEIGHTDSC', 'hauteur de l\'image autoris&eacute; en pixel.<br />Attention la taille maximum est de 400px.');
define('_AM_MYTUBE_RSSIMGTITLE', 'Titre de l\'image');
define('_AM_MYTUBE_RSSIMGTITLEDSC', 'texte de l\'image qui appara&icirc;tra dans le ALT.');
define('_AM_MYTUBE_RSSIMGLINK', 'Lien de l\'image');
define('_AM_MYTUBE_RSSIMGLINKDSC', 'URL du lien lorsque l\'ont clique sur l\'image.');
define('_AM_MYTUBE_RSSTTL', 'R&eacute;-actualisation');
define('_AM_MYTUBE_RSSTTLDSC', 'nombre de minutes avant de la r&eacute;-actualisation de la source RSS.');
define('_AM_MYTUBE_RSSWEBMASTER', 'Email du webmaster');
define('_AM_MYTUBE_RSSWEBMASTERDSC', 'adresse Email de la personne responsable pour les questions techniques relatives aux flux.');
define('_AM_MYTUBE_RSSEDITOR', 'Email du r&eacute;dacteur');
define('_AM_MYTUBE_RSSEDITORDSC', 'adresse Email de la personne responsable du contenu.');
define('_AM_MYTUBE_RSSCATEGORY', 'nom de la cat&eacute;gorie');
define('_AM_MYTUBE_RSSCATEGORYDSC', 'le nom de la cat&eacute;gorie ou plusieurs nom de cat&eacute;gories pour plusieurs flux.');
define('_AM_MYTUBE_RSSGENERATOR', 'G&eacute;n&eacute;rateur de flux RSS');
define('_AM_MYTUBE_RSSGENERATORDSC', 'nom indiquant le programme utilis&eacute; pour g&eacute;n&eacute;rer flux RSS.');
define('_AM_MYTUBE_RSSCOPYRIGHT', 'Copyright du flux RSS');
define('_AM_MYTUBE_RSSCOPYRIGHTDSC', 'copyright afficher dans le flux RSS.');
define('_AM_MYTUBE_RSSTOTAL', 'Nombre de liens RSS');
define('_AM_MYTUBE_RSSTOTALDSC', 'nombre total de liens autoris&eacute; &agrave; &ecirc;tre afficher dans les flux RSS.');
define('_AM_MYTUBE_RSSDBUPDATED', 'Base de donn&eacute;es mis &agrave; jour avec succ&egrave;s');
define('_AM_MYTUBE_RSSOFFLINE', 'Titre du Message hors ligne');
define('_AM_MYTUBE_RSSOFFLINEDSC', 'titre du message lorsque le flux RSS est d&eacute;sactiv&eacute;.');
define('_AM_MYTUBE_RSSOFFMSG', 'texte du message hors ligne');
define('_AM_MYTUBE_RSSOFFMSGDSC', 'explication de la raison pour laquelle le flux RSS a &eacute;t&eacute; d&eacute;sactiv&eacute;.');
define('_AM_MYTUBE_RSSOFFTITLE', "Flux RSS d&eacute;sactiv&eacute;.");
define('_AM_MYTUBE_RSSOFFMSGDEF', 'nous sommes d&eacute;sol&eacute; le flux d\'actualit&eacute; RSS de l\'annuaire a &eacute;t&eacute; d&eacute;sactiv&eacute; temporairement pour maintenance.');
define('_AM_MYTUBE_RSSCLICKSUBMIT', 'cliquez sur ce message pour activer ce formulaire dans la base de donn&eacute;es !');
define( '_AM_MYTUBE_COPYRIGHT', 'Copyright' );
define( '_AM_MYTUBE_NICEURL', 'Alternative title for videoclip:' );
define( '_AM_MYTUBE_NICEURLDSC', 'Enter an alternative title for the videoclip to be used in the url. When the option <em>Use nice urls</em> from Preferences is selected and this field is left empty, than the title of the videoclip will be used.' );
define( '_AM_MYTUBE_NATIOGEO', 'National Geographic' );
?>