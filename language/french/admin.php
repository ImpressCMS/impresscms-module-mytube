<?php
/**
 * $Id: admin.php
 * Module: MyTube
 * Language: French
 */

define( "_AM_XTUBE_WARNINSTALL1", "ATTENTION: Le r�pertoire %s existe sur votre serveur. <br />Merci de le supprimer pour des raisons de s�curit�." );
define( "_AM_XTUBE_WARNINSTALL2", "ATTENTION: Le ficher %s existe sur votre serveur. <br />Merci de le supprimer pour des raisons de s�curit�." );
define( "_AM_XTUBE_WARNINSTALL3", "ATTENTION: Le dossier %s n'existe pas sur votre serveur. <br />Sa pr�sence est requise pour le bon fonctionnement du module." );

define( "_AM_XTUBE_MODULE_NAME", "MyTube" );

define( "_AM_XTUBE_BMODIFY", "Modifer" );
define( "_AM_XTUBE_BDELETE", "Effacer" );
define( "_AM_XTUBE_BCREATE", "Cr�er" );
define( "_AM_XTUBE_BADD", "Ajouter" );
define( "_AM_XTUBE_BAPPROVE", "Approuver" );
define( "_AM_XTUBE_BIGNORE", "Ignorer" );
define( "_AM_XTUBE_BCANCEL", "Annuler" );
define( "_AM_XTUBE_BSAVE", "Sauvgarder" );
define( "_AM_XTUBE_BRESET", "Recommencer" );
define( "_AM_XTUBE_BMOVE", "D�placer la Vid�o" );
define( "_AM_XTUBE_BUPLOAD", "Uploader" );
define( "_AM_XTUBE_BDELETEIMAGE", "Effacer l'image s�lectionn�e" );
define( "_AM_XTUBE_BRETURN", "Retour d'o� vous venez!" );
define( "_AM_XTUBE_DBERROR", "Erreur d'acc�s � la base de donn�es" );
// Autres Options
define( "_AM_XTUBE_TEXTOPTIONS", "Options de texte:" );
define( "_AM_XTUBE_DISABLEHTML", " D�sactiver les tags HTML" );
define( "_AM_XTUBE_DISABLESMILEY", " D�sactiver les smilies" );
define( "_AM_XTUBE_DISABLEXCODE", " D�sactiver les codes Xoops" );
define( "_AM_XTUBE_DISABLEIMAGES", " D�sactiver les images" );
define( "_AM_XTUBE_DISABLEBREAK", " Utiliser la conversion fin de ligne de XOOPS?" );
define( "_AM_XTUBE_UPLOADFILE", "Vid�o ajout�e avec succ�s" );
define( "_AM_XTUBE_NOMENUITEMS", "Aucun item de menu dans le menu" );
// Admin Bread crumb
define( "_AM_XTUBE_PREFS", "Pr�ferences" );
define( "_AM_XTUBE_BUPDATE", "Mise � jour du module" );
define( "_AM_XTUBE_BINDEX", "Index" );
define( "_AM_XTUBE_BPERMISSIONS", "Permissions" );
// define( "_AM_XTUBE_BLOCKADMIN", "Blocs" );
define( "_AM_XTUBE_BLOCKADMIN", "Param�tres des blocs" );
define( "_AM_XTUBE_GOMODULE", "Aller au Module" );
define( "_AM_XTUBE_ABOUT", "A propos" );
// Sommaire
define( "_AM_XTUBE_SCATEGORY", "Cat�gories: " );
define( "_AM_XTUBE_SFILES", "Vid�os: " );
define( "_AM_XTUBE_SNEWFILESVAL", "Propos�es: " );
define( "_AM_XTUBE_SMODREQUEST", "Modifi�es: " );
define( "_AM_XTUBE_SREVIEWS", "Revis�es: " );

// Menu principal
define( "_AM_XTUBE_MCATEGORY", "Gestion des cat�gories" );
define( "_AM_XTUBE_MVIDEOS", "Gestion des vid�os" );
define( "_AM_XTUBE_MLISTBROKEN", "Liste des vid�os bris�es" );
define( "_AM_XTUBE_MLISTPINGTIMES", "Temps de ping des vid�os" );
define( "_AM_XTUBE_INDEXPAGE", "Gestion de la Page Index" );
define( "_AM_XTUBE_MCOMMENTS", "Gestion de commentaires" );
define( "_AM_XTUBE_MVOTEDATA", "Donn�es de Votes" );
define( "_AM_XTUBE_MUPLOADS", "Upload d'images" );

// Defines pour les cat�gories
define( "_AM_XTUBE_CCATEGORY_CREATENEW", "Cr�er une nouvelle cat�gorie" );
define( "_AM_XTUBE_CCATEGORY_MODIFY", "Modifier une cat�gorie" );
define( "_AM_XTUBE_CCATEGORY_MOVE", "D�placer une cat�gorie" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_TITLE", "Titre de la cat�gorie:" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_FAILED", "Impossible de d�placer la cat�gorie: La cat�gorie ne peut �tre d�plac�" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_FAILEDT", "Impossible de d�placer la Vid�o: Impossible de trouver la cat�gorie" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_MOVED", "Vid�o d�plac�e" );
define( "_AM_XTUBE_CCATEGORY_CREATED", "Nouvelle cat�gorie cr��e et Base de donn�es est mise � jour avec succ�s" );
define( "_AM_XTUBE_CCATEGORY_MODIFIED", "Cat�gorie s�lectionn�e modifi�e et Base de donn�e mise � jour" );
define( "_AM_XTUBE_CCATEGORY_DELETED", "Cat�gorie s�lectionn�e effac�e et Base de donn�e mise � jour" );
define( "_AM_XTUBE_CCATEGORY_AREUSURE", "ATTENTION: �tes vous sur(e) de vouloir effacer cette cat�gorie, y compris ses vid�os et ses commentaires ?" );
define( "_AM_XTUBE_CCATEGORY_NOEXISTS", "Vous devez cr�er une cat�gorie avant d'ajouter une vid�o" );
define( "_AM_XTUBE_FCATEGORY_GROUPPROMPT", "Permissions d'acc�s<div style='padding-top: 8px;'><span style='font-weight: normal;'>S�lectionner le(s) groupe(s) d'utilisateurs qui aur(ont)a acc�s � cette cat�gorie.</span></div>" );
define( "_AM_XTUBE_FCATEGORY_SUBGROUPPROMPT", "Permissions de soummetre:<div style='padding-top: 8px;'><span style='font-weight: normal;'>S�lectionner le(s) groupe(s) d'utilisateurs qui aur(ont)a la possibilit� de soummetre des vid�os.</span></div>" );
define( "_AM_XTUBE_FCATEGORY_MODGROUPPROMPT", "Permissions de mod�rer:<div style='padding-top: 8px;'><span style='font-weight: normal;'>S�lectionner le(s) groupe(s) d'utilisateurs qui aur(ont)a la possibilit� de mod�rer cette cat�gorie.</span></div>" );

define( "_AM_XTUBE_FCATEGORY_TITLE", "Titre de la cat�gorie:" );
define( "_AM_XTUBE_FCATEGORY_WEIGHT", "Ordre de la cat�gorie:" );
define( "_AM_XTUBE_FCATEGORY_SUBCATEGORY", "D�finir comme sous-cat�gorie:" );
define( "_AM_XTUBE_FCATEGORY_CIMAGE", "S�l�ctionner une image pour la cat�gorie:" );
define( "_AM_XTUBE_FCATEGORY_DESCRIPTION", "Description de la cat�gorie:" );
define( "_AM_XTUBE_FCATEGORY_SUMMARY", "Sommaire de la cat�gorie:" );
/**
 * Defines pour la page Index
 */
define( "_AM_XTUBE_IPAGE_UPDATED", "Page d'index modifi�e et Base de donn�es mise � jour avec succ�s!" );
define( "_AM_XTUBE_IPAGE_INFORMATION", "Informations de la page Index" );
define( "_AM_XTUBE_IPAGE_MODIFY", "Modifer la page Index" );
define( "_AM_XTUBE_IPAGE_CIMAGE", "S�lectionner un image pour la page:" );
define( "_AM_XTUBE_IPAGE_CTITLE", "Titre de la page:" );
define( "_AM_XTUBE_IPAGE_CHEADING", "En-t�te de page:" );
define( "_AM_XTUBE_IPAGE_CHEADINGA", "Alignement de l'en-t�te de page:" );
define( "_AM_XTUBE_IPAGE_CFOOTER", "Pied de page:" );
define( "_AM_XTUBE_IPAGE_CFOOTERA", "Alignement du pied de page:" );
define( "_AM_XTUBE_IPAGE_CLEFT", "Alignement � Gauche" );
define( "_AM_XTUBE_IPAGE_CCENTER", "Alignement au Centre" );
define( "_AM_XTUBE_IPAGE_CRIGHT", "Alignement � Droite" );
/**
 * Defines pour les permissions
 */
define( "_AM_XTUBE_PERM_MANAGEMENT", "Gestion des permissions" );
define( "_AM_XTUBE_PERM_PERMSNOTE", "<div><b>NOTE:</b> M�me si vous attribuez des permissions, les groupes n'acc�deront pas forcement aux cat�gories si vous ne leur avez pas donn� l'acc�s au module. Allez sur <b>Administration du Syst�me > Groupes</b>, choisir les droits d'acc�s au module et groupes correspondants.</div>" );
define( "_AM_XTUBE_PERM_CPERMISSIONS", "Permissions des cat�gories" );
define( "_AM_XTUBE_PERM_CSELECTPERMISSIONS", "S�lectionner les cat�gories auxquelles chaque groupe aura acc�s" );
define( "_AM_XTUBE_PERM_CNOCATEGORY", "Aucune permission appliqu�e : Il n'y a pas encore de cat�gories" );
define( "_AM_XTUBE_PERM_FPERMISSIONS", "Permissions des Vid�os" );
define( "_AM_XTUBE_PERM_FNOFILES", "Aucune permission appliqu�e : Il n'y a pas encore de Vid�os cr�es" );
define( "_AM_XTUBE_PERM_FSELECTPERMISSIONS", "S�lectionner les Vid�os dont les groupes sont autoris�s � visualiser" );
/**
 * Defines pour l'upload des images
 */
define( "_AM_XTUBE_VIDEO_IMAGEUPLOAD", "Image upload�e sur le serveur avec succ�s" );
define( "_AM_XTUBE_VIDEO_NOIMAGEEXIST", "ERREUR: Aucune image s�lectionn�e pour l'upload. Essayez � nouveau!" );
define( "_AM_XTUBE_VIDEO_IMAGEEXIST", "L'image existe d�j�!" );
define( "_AM_XTUBE_VIDEO_FILEDELETED", "l'image a �t� effac�e." );
define( "_AM_XTUBE_VIDEO_FILEERRORDELETE", "Erreur d'effacement de la vid�o: Vid�o introuvable sur le serveur." );
define( "_AM_XTUBE_VIDEO_NOFILEERROR", "Erreur d'effacement de l'image: Aucune image s�lectionn�e pour l'effacement." );
define( "_AM_XTUBE_VIDEO_DELETEFILE", "ATTENTION: Etes-vous sur(e) de vouloir effacer cette image?" );
define( "_AM_XTUBE_VIDEO_IMAGEINFO", "Statut du serveur" );
define( "_AM_XTUBE_VIDEO_SPHPINI", "<b>Informations r�cup�r�es du fichier PHP.ini de votre serveur</b>" );
define( "_AM_XTUBE_VIDEO_SAFEMODESTATUS", "Statut Safe Mode: " );
define( "_AM_XTUBE_VIDEO_REGISTERGLOBALS", "Register Globals: " );
define( "_AM_XTUBE_VIDEO_SERVERUPLOADSTATUS", "Statut du Serveur d'upload: " );
define( "_AM_XTUBE_VIDEO_MAXUPLOADSIZE", "Taille maximum d'upload autoris�e: " );
define( "_AM_XTUBE_VIDEO_MAXPOSTSIZE", "Taille maximum d'envoi autoris�e: " );
define( "_AM_XTUBE_VIDEO_SAFEMODEPROBLEMS", " (Ceci peut poser des probl�mes)" );
define( "_AM_XTUBE_VIDEO_GDLIBSTATUS", "Support de la librairie GD: " );
define( "_AM_XTUBE_VIDEO_GDLIBVERSION", "Version de la librairie GD: " );
define( "_AM_XTUBE_VIDEO_GDON", "<b>Actif</b> (possibilit� de Miniatures)" );
define( "_AM_XTUBE_VIDEO_GDOFF", "<b>Inactif</b> (pas de possibilit� de Miniatures)" );
define( "_AM_XTUBE_VIDEO_OFF", "<b>OFF</b>" );
define( "_AM_XTUBE_VIDEO_ON", "<b>ON</b>" );
define( "_AM_XTUBE_VIDEO_CATIMAGE", "Images de la cat�gories" );
define( "_AM_XTUBE_VIDEO_SCREENSHOTS", "Copies d'�cran" );
define( "_AM_XTUBE_VIDEO_MAINIMAGEDIR", "Image principale" );
define( "_AM_XTUBE_VIDEO_FCATIMAGE", "Chemin des images des cat�gories" );
define( "_AM_XTUBE_VIDEO_FSCREENSHOTS", "Chemin des copies d'�cran" );
define( "_AM_XTUBE_VIDEO_FMAINIMAGEDIR", "Chemin principal des images" );
define( "_AM_XTUBE_VIDEO_FUPLOADIMAGETO", "Uploader une Image: " );
define( "_AM_XTUBE_VIDEO_FUPLOADPATH", "Chemin d'upload: " );
define( "_AM_XTUBE_VIDEO_FUPLOADURL", "URL d'upload: " );
define( "_AM_XTUBE_VIDEO_FOLDERSELECTION", "S�lectionner la destination de l'upload:" );
define( "_AM_XTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Afficher l'image s�lectionn�e:" );
define( "_AM_XTUBE_VIDEO_FUPLOADIMAGE", "Uploader une nouvelle image pour la destination s�lectionn�e:" );

//  defines pour la page principale
define( "_AM_XTUBE_MINDEX_VIDEOSUMMARY", "Sommaire du module" );
define( "_AM_XTUBE_MINDEX_PUBLISHEDVIDEO", "Vid�os publi�es:" );
define( "_AM_XTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Vid�os auto-publi�es:" );
define( "_AM_XTUBE_MINDEX_AUTOEXPIRE", "Vid�os avec auto-expiration" );
define( "_AM_XTUBE_MINDEX_EXPIRED", "Vid�os expir�es:" );
define( "_AM_XTUBE_MINDEX_OFFLINEVIDEO", "Vid�os Hors-ligne:" );
define( "_AM_XTUBE_MINDEX_ID", "ID" );
define( "_AM_XTUBE_MINDEX_TITLE", "Titre de la Vid�o" );
define( "_AM_XTUBE_MINDEX_POSTER", "Propos�e par" );
define( "_AM_XTUBE_MINDEX_ONLINE", "Etat" );
define( "_AM_XTUBE_MINDEX_ONLINESTATUS", "Staut En-ligne" );
define( "_AM_XTUBE_MINDEX_PUBLISH", "Date de publication" );
define( "_AM_XTUBE_MINDEX_PUBLISHED", "Publi�e" );
define( "_AM_XTUBE_MINDEX_EXPIRE", "Date d'expiration" );
define( "_AM_XTUBE_MINDEX_NOTSET", "Date non r�gl�e" );
define( "_AM_XTUBE_MINDEX_SUBMITTED", "Date de soumission" );

define( "_AM_XTUBE_MINDEX_ACTION", "Action" );
define( "_AM_XTUBE_MINDEX_NOVIDEOSFOUND", "INFORMATION: Aucune Vid�o avec ce crit�re � afficher" );
define( "_AM_XTUBE_MINDEX_PAGE", "<b>Page:<b> " );
define( '_AM_XTUBE_MINDEX_PAGEINFOTXT', "<ul><li>Accueil MyTube.</li><li>Vous pouvez facilement modifier le logo, les textes de l'ent�te et du pied de page, de l'index afin d'avoir un look plus apropri�</li></ul><br /><br />Note: Le logo choisie sera utilis� pour toutes les pages du module." );
define( "_AM_XTUBE_MINDEX_RESPONSE", "Temps de R�ponse" );
// Vid�os propos�es
define( "_AM_XTUBE_SUB_SUBMITTEDFILES", "Vid�os soumises" );
define( "_AM_XTUBE_SUB_FILESWAITINGINFO", "Information sur les Vid�os en attente" );
define( "_AM_XTUBE_SUB_FILESWAITINGVALIDATION", "Vid�os en attente de validation: " );
define( "_AM_XTUBE_SUB_APPROVEWAITINGFILE", "<b>Approuver</b> les nouvelle vid�os sans validation." );
define( "_AM_XTUBE_SUB_EDITWAITINGFILE", "<b>Modifer</b> les nouvelles vid�os puis les valider." );
define( "_AM_XTUBE_SUB_DELETEWAITINGFILE", "<b>Effacer</b> les nouvelles vid�os." );
define( "_AM_XTUBE_SUB_NOFILESWAITING", "Aucune Vid�o avec ce crit�re � afficher" );
define( "_AM_XTUBE_SUB_NEWFILECREATED", "Nouvelle Vid�o ajout�e et la base de donn�es mise � jour" );
// Information sur les Votes
define( "_AM_XTUBE_VOTE_RATINGINFOMATION", "Information de vote" );
define( "_AM_XTUBE_VOTE_TOTALVOTES", "Total des votes: " );
define( "_AM_XTUBE_VOTE_REGUSERVOTES", "Votes des utilisateurs enregistr�s: %s" );
define( "_AM_XTUBE_VOTE_ANONUSERVOTES", "Votes des utilisateurs anonymes: %s" );
define( "_AM_XTUBE_VOTE_USER", "Utilisateurs" );
define( "_AM_XTUBE_VOTE_IP", "Adresse IP" );
define( "_AM_XTUBE_VOTE_DATE", "Soumis" );
define( "_AM_XTUBE_VOTE_RATING", "Estimation" );
define( "_AM_XTUBE_VOTE_NOREGVOTES", "Pas de vote d'utilisateur enregistr�" );
define( "_AM_XTUBE_VOTE_NOUNREGVOTES", "Pas de vote d'utilsateur anonyme" );
define( "_AM_XTUBE_VOTE_VOTEDELETED", "Donn�es de votes effac�es." );
define( "_AM_XTUBE_VOTE_ID", "ID" );
define( "_AM_XTUBE_VOTE_FILETITLE", "Titre de la Vid�o" );
define( "_AM_XTUBE_VOTE_DISPLAYVOTES", "Donn�es de vote" );
define( "_AM_XTUBE_VOTE_NOVOTES", "Pas de votes d'utilisateur � afficher" );
define( "_AM_XTUBE_VOTE_DELETE", "Pas de votes d'utilisateur � afficher" );
define( "_AM_XTUBE_VOTE_DELETEDSC", "<b>Effacement</b> du vote de la base de donn�e" );
define( "_AM_XTUBE_VOTEDELETED", "Vote s�lectionn� effac� et base de donn�e mise � jour" );

define( "_AM_XTUBE_VOTE_USERAVG", "Estimation moyenne d'utilisateur" );
define( "_AM_XTUBE_VOTE_TOTALRATE", "Total de Votes" );
define( "_AM_XTUBE_VOTE_MAXRATE", "Vote Max d'Item" );
define( "_AM_XTUBE_VOTE_MINRATE", "Vote Min d'Item" );
define( "_AM_XTUBE_VOTE_MOSTVOTEDTITLE", "La plus vot�e" );
define( "_AM_XTUBE_VOTE_LEASTVOTEDTITLE", "La moins vot�e" );
define( "_AM_XTUBE_VOTE_MOSTVOTERSUID", "Votants les plus actifs" );
define( "_AM_XTUBE_VOTE_REGISTERED", "Votes des utilisateurs enregistr�s" );
define( "_AM_XTUBE_VOTE_NONREGISTERED", "Votes des utilisateurs anonymes" );
// Modifications
define( "_AM_XTUBE_MOD_TOTMODREQUESTS", "Total des demandes de modification: " );
define( "_AM_XTUBE_MOD_MODREQUESTS", "Vid�os modifi�es" );
define( "_AM_XTUBE_MOD_MODREQUESTSINFO", "Information des Vid�os modifi�es" );
define( "_AM_XTUBE_MOD_MODID", "ID" );
define( "_AM_XTUBE_MOD_MODTITLE", "Titre" );
define( "_AM_XTUBE_MOD_MODPOSTER", "Proposition originale par: " );
define( "_AM_XTUBE_MOD_DATE", "Soumis" );
define( "_AM_XTUBE_MOD_NOMODREQUEST", "Il n'y a aucune demande de modification avec ce crit�re" );
define( "_AM_XTUBE_MOD_TITLE", "Titre de la Vid�o: " );
define( "_AM_XTUBE_MOD_LID", "ID de la Vid�o: " );
define( "_AM_XTUBE_MOD_CID", "Cat�gorie: " );
define( "_AM_XTUBE_MOD_URL", "Url de la Vid�o: " );
define( "_AM_XTUBE_MOD_PUBLISHER", "Auteur: " );
define( "_AM_XTUBE_MOD_FORUMID", "Forum: " );
define( "_AM_XTUBE_MOD_SCREENSHOT", "Capture d'�cran: " );
define( "_AM_XTUBE_MOD_HOMEPAGE", "Site Web: " );
define( "_AM_XTUBE_MOD_HOMEPAGETITLE", "Titre du Site Web: " );
define( "_AM_XTUBE_MOD_SHOTIMAGE", "Capture d'�cran: " );
define( "_AM_XTUBE_MOD_DESCRIPTION", "Description: " );
define( "_AM_XTUBE_MOD_MODIFYSUBMITTER", "Propos�e par: " );
define( "_AM_XTUBE_MOD_MODIFYSUBMIT", "Propos�e par" );
define( "_AM_XTUBE_MOD_PROPOSED", "D�tails de la Vid�o propos�e" );
define( "_AM_XTUBE_MOD_ORIGINAL", "D�tails originaux de la Vid�o" );
define( "_AM_XTUBE_MOD_REQDELETED", "Modification demand�e effac�e de la base de donn�e" );
define( "_AM_XTUBE_MOD_REQUPDATED", "Vid�o s�lectionn�e modifi�e et Base de donn�e mise � jour." );
define( '_AM_XTUBE_MOD_VIEW', 'Voir' );
// Gestion des Vid�os
define( "_AM_XTUBE_VIDEO_ID", "ID de la Vid�o: " );
define( "_AM_XTUBE_VIDEO_IP", "Adresse IP de la proposition: " );
define( "_AM_XTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Extension de la Vid�o autoris�e par l'administrateur</b>:</div>" );
define( "_AM_XTUBE_VIDEO_MODIFYFILE", "Modifier les informations de la Vid�o" );
define( "_AM_XTUBE_VIDEO_CREATENEWFILE", "Cr�er une nouvelle Vid�o" );
define( "_AM_XTUBE_VIDEO_TITLE", "Titre de la Vid�o: " );
define( "_AM_XTUBE_VIDEO_DLVIDID", "Id-Code de la Vid�o: " );
define( "_AM_XTUBE_VIDEO_DLVIDID_NOTE", "
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
<b>MyTube: </b><font color=#FF0000>Take over from above selection menu</font></small>" );
define( "_AM_XTUBE_VIDEO_PICURL", "Url de l'image: " );
define( "_AM_XTUBE_VIDEO_PICURLNOTE", "<small>Url de l'image quand Google Video, MySpace TV, LiveLeak, Blip.tv, ClipFish ou DailyMotion est la Source.</small>" );
define( "_AM_XTUBE_VIDEO_DESCRIPTION", "Description: " );
define( "_AM_XTUBE_VIDEO_CATEGORY", "Cat�gorie: " );
define( "_AM_XTUBE_VIDEO_FILESSTATUS", " Mettre la Vid�o Hors-ligne?<br /><br /><span style='font-weight: normal;'>La vid�o ne sera plus visible par les utilisateurs.</span>" );
define( "_AM_XTUBE_VIDEO_SETASUPDATED", " Mettre la Vid�o en statut Mise � Jour?<br /><br /><span style='font-weight: normal;'>La vid�o affichera l'ic�ne MIS A JOUR</span>" );
define( "_AM_XTUBE_VIDEO_SHOTIMAGE", "Capture d'�cran: " );
define( "_AM_XTUBE_VIDEO_DISCUSSINFORUM", "Ajouter une discussion dans les forums?" );
define( "_AM_XTUBE_VIDEO_PUBLISHDATE", "Date de publication:" );
define( "_AM_XTUBE_VIDEO_EXPIREDATE", "Date d'expiration:" );
define( "_AM_XTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Retirer la date de publication:" );
define( "_AM_XTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Retirer la date d'expiration:" );
define( "_AM_XTUBE_VIDEO_PUBLISHDATESET", " Date de publication: " );
define( "_AM_XTUBE_VIDEO_SETDATETIMEPUBLISH", " Ajouter la date/heure de publication" );
define( "_AM_XTUBE_VIDEO_SETDATETIMEEXPIRE", " Ajouter la date/heure d'expiration" );
define( "_AM_XTUBE_VIDEO_SETPUBLISHDATE", "<b>Date de publication: </b>" );
define( "_AM_XTUBE_VIDEO_SETNEWPUBLISHDATE", "<b>Mettre une nouvelle date de publication: </b><br />Publi�e:" );
define( "_AM_XTUBE_VIDEO_SETPUBDATESETS", "<b>Mettre la date de publication:</b><br />Publishes On Date:" );
define( "_AM_XTUBE_VIDEO_EXPIREDATESET", " Date d'expiration: " );
define( "_AM_XTUBE_VIDEO_SETEXPIREDATE", "<b>Mettre la date d'expiration: </b>" );
define( "_AM_XTUBE_VIDEO_DELEDITMESS", "Effacer le rapport des Vid�os bris�es?<br /><br /><span style='font-weight: normal;'>Si vous choisissez <b>OUI</b> le rapport sera automatiquement effac� et vous confirmez que la vid�o fontionne � nouveau.</span>" );
define( "_AM_XTUBE_VIDEO_MUSTBEVALID", "La capture d'�cran doit �tre une image valide plac�e dans le r�pertoire (ex. shot.gif). Laissez le champ vide si il n'y a pas de capture d'�cran." );
define( "_AM_XTUBE_VIDEO_EDITAPPROVE", "Approuver la Vid�o:" );
define( "_AM_XTUBE_VIDEO_NEWFILEUPLOAD", "Nouvelle vid�o ajout�e et base donn�e mise � jour avec succ�s" );
define( "_AM_XTUBE_VIDEO_FILEMODIFIEDUPDATE", "Vid�o s�lectionn�e modifi�e et base donn�e mise � jour avec succ�s" );
define( "_AM_XTUBE_VIDEO_REALLYDELETEDTHIS", "Voulez-vous vraiment supprimer la vid�o s�lectionn�e?" );
define( "_AM_XTUBE_VIDEO_FILEWASDELETED", "La vid�o %s a �t� retir�e de la base de donn�es avec succ�s!" );
define( "_AM_XTUBE_VIDEO_FILEAPPROVED", "Vid�o approuv�e et base donn�es mise � jour avec succ�s" );
define( "_AM_XTUBE_VIDEO_CREATENEWSSTORY", "<b>Soumettre la vid�o comme news?</b>" );
define( "_AM_XTUBE_VIDEO_SUBMITNEWS", "Soummetre la vid�o comme un article dans les News?" );
define( "_AM_XTUBE_VIDEO_NEWSCATEGORY", "Selectonner la cat�gorie de News pour soumettre:" );
define( "_AM_XTUBE_VIDEO_NEWSTITLE", "Titre de la News:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Laisser le champs vide pour utiliser le nom de la Vid�o comme titre</span></div>" );
define( "_AM_XTUBE_VIDEO_PUBLISHER", "Auteur: " );

/**
 * Vid�os bris�es
 */
define( "_AM_XTUBE_SBROKENSUBMIT", "Vid�os bris�es: " );
define( "_AM_XTUBE_BROKEN_FILE", "Rapport des vid�os bris�es" );
define( "_AM_XTUBE_BROKEN_FILEIGNORED", "Rapport de vid�o bris�e ignor� et base de donn�e mise � juour avec succ�s!" );
define( "_AM_XTUBE_BROKEN_NOWACK", "Le statut � �t� constat�, modifi� et la base de donn�es mise � jour avec succ�s!" );
define( "_AM_XTUBE_BROKEN_NOWCON", "Statut modifi� et base de donn�es mise � jour" );
define( "_AM_XTUBE_BROKEN_REPORTINFO", "Informations sur le rapport des vid�os bris�es" );
define( "_AM_XTUBE_BROKEN_REPORTSNO", "Rapport des vid�os bris�es en attente:" );
define( "_AM_XTUBE_BROKEN_IGNOREDESC", "<b>Ignorer</b> le rapport et l'effacer seulement" );
define( "_AM_XTUBE_BROKEN_DELETEDESC", "<b>Effacer</b> le rapport et la vid�o bris�e." );
define( "_AM_XTUBE_BROKEN_EDITDESC", "<b>Editer</b> la vid�o pour corriger le probl�me." );
define( "_AM_XTUBE_BROKEN_ACKDESC", "<b>Connu</b> Placer le rapport comme connu." );
define( "_AM_XTUBE_BROKEN_CONFIRMDESC", "<b>Confirm�</b> Param�trer le rapport comme connu." );
define( "_AM_XTUBE_BROKEN_ACKNOWLEDGED", "Connu" );
define( "_AM_XTUBE_BROKEN_DCONFIRMED", "Confirm�" );

define( "_AM_XTUBE_BROKEN_ID", "ID" );
define( "_AM_XTUBE_BROKEN_TITLE", "Titre" );
define( "_AM_XTUBE_BROKEN_REPORTER", "Rapporteur" );
define( "_AM_XTUBE_BROKEN_FILESUBMITTER", "Propos�e par" );
define( "_AM_XTUBE_BROKEN_DATESUBMITTED", "Date de soumission" );
define( "_AM_XTUBE_BROKEN_ACTION", "Action" );
define( "_AM_XTUBE_BROKEN_NOFILEMATCH", "Aucun rapport d'une vid�o bris�e avec ce crit�re" );
define( "_AM_XTUBE_BROKENFILEDELETED", "Vid�o retir�e de la base de donn�e et le rapport a �t� effac�" );
define( "_AM_XTUBE_BROKEN_VIDSOURCE", "Source de la vid�o" );
/**
 * A propos des defines
 */
define( "_AM_XTUBE_BY", "par" );
// block defines
define( "_AM_XTUBE_BADMIN", "Administration des blocs" );
define( "_AM_XTUBE_BLKDESC", "Description" );
define( "_AM_XTUBE_TITLE", "Titre" );
define( "_AM_XTUBE_SIDE", "Alignement" );
define( "_AM_XTUBE_WEIGHT", "Position" );
define( "_AM_XTUBE_VISIBLE", "Visible" );
define( "_AM_XTUBE_ACTION", "Action" );
define( "_AM_XTUBE_SBLEFT", "Gauche" );
define( "_AM_XTUBE_SBRIGHT", "Droite" );
define( "_AM_XTUBE_CBLEFT", "Centre gauche" );
define( "_AM_XTUBE_CBRIGHT", "Centre droit" );
define( "_AM_XTUBE_CBCENTER", "Centre milieu" );
define( "_AM_XTUBE_ACTIVERIGHTS", "Droits Actifs" );
define( "_AM_XTUBE_ACCESSRIGHTS", "Droits d'acc�s" );
// image admin icon
define( "_AM_XTUBE_ICO_EDIT", "Modifier cette vid�o" );
define( "_AM_XTUBE_ICO_DELETE", "Effacer cette vid�o" );
define( "_AM_XTUBE_ICO_RESOURCE", "Modifier cette ressource" );

define( "_AM_XTUBE_ICO_ONLINE", "En-ligne" );
define( "_AM_XTUBE_ICO_OFFLINE", "Hors-ligne" );
define( "_AM_XTUBE_ICO_APPROVED", "Approuv�e" );
define( "_AM_XTUBE_ICO_NOTAPPROVED", "Non approuv�e" );

define( "_AM_XTUBE_ICO_VIDEO", "URL vid�o Relatif" );
define( "_AM_XTUBE_ICO_URL", "Ajouter une URL relatve" );
define( "_AM_XTUBE_ICO_ADD", "Ajouter" );
define( "_AM_XTUBE_ICO_APPROVE", "Approuver" );
define( "_AM_XTUBE_ICO_STATS", "Etats" );
define( "_AM_XTUBE_ICO_VIEW", "Voir cette vid�o" );

define( "_AM_XTUBE_ICO_IGNORE", "Ignorer" );
define( "_AM_XTUBE_ICO_ACK", "Rapport de vid�o bris�e connu" );
define( "_AM_XTUBE_ICO_REPORT", "Rapport de vid�o bris�e connu?" );
define( "_AM_XTUBE_ICO_CONFIRM", "Rapport de vid�o bris�e confirm�" );
define( "_AM_XTUBE_ICO_CONBROKEN", "Confirmer le rapport de vid�o bris�e connu?" );
define( "_AM_XTUBE_ICO_RES", "Modifier les Sources/Liens de cete Vid�o" );
define( "_AM_XTUBE_MOD_URLRATING", "Interent Content Rating:" );
// Cat�gories alternatives
define( "_AM_XTUBE_ALTCAT_CREATEF", "Ajouter une cat�gorie alternative" );
define( "_AM_XTUBE_MALTCAT", "Gestion des cat�gories alternatives" );
define( "_AM_XTUBE_ALTCAT_MODIFYF", "Gestion des cat�gories alternatives" );
define( "_AM_XTUBE_ALTCAT_INFOTEXT", "<ul><li>Les cat�gories alternatives peuvent-�tre ajout�es ou effac�es facilement via ce formulaire.</li></ul>" );
define( '_AM_XTUBE_ALTCAT_CREATED', 'La cat�gorie alternative a �t� bien cr��e' );

define( "_AM_XTUBE_MRESOURCES", "Gestion de ressources" );
define( "_AM_XTUBE_RES_CREATED", "Gestion de ressources" );
define( "_AM_XTUBE_RES_ID", "ID" );
define( "_AM_XTUBE_RES_DESC", "Description" );
define( "_AM_XTUBE_RES_NAME", "Nom de la ressource" );
define( "_AM_XTUBE_RES_TYPE", "Type de la ressource" );
define( "_AM_XTUBE_RES_USER", "Utilisateur" );
define( "_AM_XTUBE_RES_CREATEF", "Ajouter une ressource" );
define( "_AM_XTUBE_RES_MODIFYF", "Modifier une ressource" );
define( "_AM_XTUBE_RES_NAMEF", "Nom de la ressource:" );
define( "_AM_XTUBE_RES_DESCF", "Description de la ressource:" );
define( "_AM_XTUBE_RES_URLF", "URL de la ressource:" );
define( "_AM_XTUBE_RES_ITEMIDF", "Item ID de la ressource:" );
define( "_AM_XTUBE_RES_INFOTEXT", "<ul><li>De nouvelles ressources peuvent-�tre ajout�es, modif�es ou effac�es facilement via ce formulaire.</li>
	<li>Liste de toutes les ressources li�es � une vid�o</li>
	<li>Modifier le nom et la description de la ressource</li></ul>
	" );
define( "_AM_XTUBE_LISTBROKEN", "Displays Videos that are possibly broken. NB: These results may not be accurate and should be taken as a rough guide.<br /><br />Please check the video does exist first before any action taken.<br /><br />" );
define( "_AM_XTUBE_PINGTIMES", "Displays the first estimated round ping time to each video.<br /><br />NB: These results may not be accurate and should be taken as a rough guide.<br /><br />" );

define( "_AM_XTUBE_NO_FORUM", "Aucun forum s�lectionn�e" );

define( "_AM_XTUBE_PERM_RATEPERMISSIONS", "Permissions d'estimer" );
define( "_AM_XTUBE_PERM_RATEPERMISSIONS_TEXT", "S�lectionner les groupes qui peuvent estimer des vid�os pour les cat�gories affich�es." );

define( "_AM_XTUBE_PERM_AUTOPERMISSIONS", "Permissions d'approuver" );
define( "_AM_XTUBE_PERM_AUTOPERMISSIONS_TEXT", "S�lectionnez les groupes qui, leurs vid�os seront automatiquement approuv�es sans l'intervention de l'administrateur." );

define( "_AM_XTUBE_PERM_SPERMISSIONS", "Permissions de soummetre" );
define( "_AM_XTUBE_PERM_SPERMISSIONS_TEXT", "S�lectionnez les groupes qui peuvent proposer des vid�os pour les cat�gories affich�es." );

define( "_AM_XTUBE_PERM_APERMISSIONS", "Permissions de mod�rer" );
define( "_AM_XTUBE_PERM_APERMISSIONS_TEXT", "S�lectionnez les groupes qui auront les privili�ges de mod�rer pour les cat�gories affich�es." );

define( "_AM_XTUBE_TIME", "Dur�e:" );
define( "_AM_XTUBE_KEYWORDS", "Mots cl�s:" );
define( "_AM_XTUBE_KEYWORDS_NOTE", "<small><i>Les mots cl�s doivent �tre s�par�s par des virgules (mot cl�1, mot cl�2).</i></small>" );
define("_AM_XTUBE_VIDEO_META_DESCRIPTION", "Meta Description");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION_DSC", "Dans le cadre d'am�liorer votre r�ferencement, vous pouvez utiliser des meta descriptions signitifs pour cette vid�o. Si vous laissez ce champ vide en cr�ant une cat�gorie, Il deviendra automatiquement populaire avec le champs r�capitulatif de cette vid�o.");

define( "_AM_XTUBE_VIDSOURCE", "Source de la vid�o:" );
define( "_AM_XTUBE_VIDSOURCE2", "Source de la vid�o" );
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

// Version 1.04 RC-2
define( "_AM_XTUBE_CLIPFISH", "ClipFish" );
define( "_AM_XTUBE_LIVELEAK", "LiveLeak" );
define( "_AM_XTUBE_FILE", "File " );
?>