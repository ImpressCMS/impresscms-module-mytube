<?php
//Traducci�n de Evasan y Debianus para http://es.impresscms.org
/**
* $Id: blocks.php
 * Module: MyTube
 * Language: english
 */

// Module Info
// The name of this module
define("_MI_XTUBE_NAME","MyTube");

// A brief description of this module
define("_MI_XTUBE_DESC","Inserte en su web v�deos desde YouTube.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_XTUBE_BNAME1","V�deos recientes (t)");
define("_MI_XTUBE_BNAME2","V�deos recientes");
define("_MI_XTUBE_BNAME3","Mejores videos (t)");
define("_MI_XTUBE_BNAME4","Mejores videos");
define("_MI_XTUBE_BNAME5","V�deos recientes (h)");
define("_MI_XTUBE_BNAME6","V�deos aleatorios");
define("_MI_XTUBE_BNAME7","V�deos recientes (h)");

// Sub menu titles
define("_MI_XTUBE_SMNAME1","Enviar");
define("_MI_XTUBE_SMNAME2","Popular");
define("_MI_XTUBE_SMNAME3","Mejores clasificados");
define("_MI_XTUBE_SMNAME4","�ltimos");
// Names of admin menu items
define("_MI_XTUBE_BINDEX","Indice principal");
define("_MI_XTUBE_INDEXPAGE","Gesti�n del �ndice de p�ginas");
define("_MI_XTUBE_MCATEGORY","Gesti�n de categor�a");
define("_MI_XTUBE_MVIDEOS","Gesti�n de v�deos");
define("_MI_XTUBE_MUPLOADS","Subir imagen");
define("_MI_XTUBE_PERMISSIONS","Configurar permisos");
define("_MI_XTUBE_BLOCKADMIN","Administraci�n de bloques");
define("_MI_XTUBE_MVOTEDATA","Votos");

// Title of config items
define('_MI_XTUBE_POPULAR', 'Contador de v�deo');
define('_MI_XTUBE_POPULARDSC', 'N�mero de visualizaciones para que un video sea considerado popular.');

//Display Icons
define("_MI_XTUBE_ICONDISPLAY","Iconos 'Popular' y 'Nuevo':");
define("_MI_XTUBE_DISPLAYICONDSC", "Seleccionar c�mo mostrar los iconos popular y nuevo en el listado de videos.");
define("_MI_XTUBE_DISPLAYICON1", "Mostrar como iconos");
define("_MI_XTUBE_DISPLAYICON2", "Mostrar como texto");
define("_MI_XTUBE_DISPLAYICON3", "No mostrar");

define("_MI_XTUBE_DAYSNEW","Nuevos v�deos del d�a:");
define("_MI_XTUBE_DAYSNEWDSC","El n�mero de d�as para que una categor�a de v�deos sea considerada nueva.");
define("_MI_XTUBE_DAYSUPDATED","D�as para videos actualizados:");
define("_MI_XTUBE_DAYSUPDATEDDSC","El margen de d�as para que una categor�a se considere actualizada.");

define('_MI_XTUBE_PERPAGE', 'V�deos a mostrar:');
define('_MI_XTUBE_PERPAGEDSC', 'Numero de v�deos a mostrar en cada listado de categor�a.');
define("_MI_XTUBE_ADMINPAGE", "V�deos a mostrar (en administraci�n):");
define("_MI_XTUBE_AMDMINPAGEDSC", "N�mero de v�deos que ser�n mostrados en el �rea de administraci�n del m�dulo.");

define("_MI_XTUBE_ARTICLESSORT", "Orden predeterminado de los v�deos:");

define("_MI_XTUBE_ARTICLESSORTDSC", "Seleccione el criterio por el que de forma predeterminada se mostrar�n los listados de videos.");

define("_MI_XTUBE_SORTCATS", "Ordenar categor�as por:");
define("_MI_XTUBE_SORTCATSDSC", "Seleccione como se mostrar�n las categor�as y las subcategor�as.");

define('_MI_XTUBE_SUBCATS', 'Subcategor�as:');
define('_MI_XTUBE_SUBCATSDSC', 'Seleccione "S�" para mostrar las subcategor�as. Seleccione "No" para ocultar las mismas en el listado.');
define('_MI_XTUBE_EDITOR', "Editor a usar:");
define('_MI_XTUBE_EDITORCHOICE', "Seleccionar el editor a usar. Si tiene una instalaci�n simple (p.e. si s�lo usa el editor DHTML contenido en el paquete b�sico de ImpressCMS), entonces s�lo puede seleccionar DHTML y Compact");
define("_MI_XTUBE_FORM_DHTML","DHTML");
define("_MI_XTUBE_FORM_COMPACT","Compact");
define("_MI_XTUBE_FORM_SPAW","Spaw Editor");
define("_MI_XTUBE_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_XTUBE_FORM_FCK","FCK Editor");
define("_MI_XTUBE_FORM_KOIVI","Koivi Editor");
define("_MI_XTUBE_FORM_INBETWEEN","Inbetween");
define("_MI_XTUBE_FORM_TINYEDITOR","Tinyeditor");
define('_MI_XTUBE_EDITORUSER', "Editor a usar por los usuarios:");
define('_MI_XTUBE_EDITORCHOICEUSER', "Seleccione el editor a usar por los usuarios. Si tiene una instalaci�n simple (p.e. si s�lo usa el editor DHTML contenido en el paquete b�sico de ImpressCMS), entonces s�lo puede seleccionar DHTML y Compact.");

define('_MI_XTUBE_USESHOTS', 'Mostrar capturas de pantalla?');
define('_MI_XTUBE_USESHOTSDSC', 'Seleccione "S�" para mostrar capturas de pantalla en cada video');

//elimiando en la versi�n final; pendiente de revisar
//define('_MI_XTUBE_CATEGORYIMG','Directorio de categor�as de im�genes subidas');
//define('_MI_XTUBE_MAINIMGDIR','Directorio principal de im�genes');
define('_MI_XTUBE_USETHUMBS', 'Usar imagen reducida:');
define("_MI_XTUBE_USETHUMBSDSC", "Extensiones que soporta: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links utilizar� im�genes reducidas para las im�genes. Seleccione 'No' para usar la im�genes originales si el servidor no soporta esta opci�n.</div>");

// Description of each config items
//define('_MI_XTUBE_SUBCATSDSC', 'Selecciones S�/Yes para mostrar subcategor�as. Seleccionando No se eliminar�n las subcateogr�as de los listados');


define("_MI_XTUBE_IMGUPDATE", "�Actualizar miniaturas?");
define("_MI_XTUBE_IMGUPDATEDSC", "Si selecciona esta opci�n, las im�genes ser�n actualizadas cuando la p�gina sea mostrada; en otro caso la primera minuatura ser� usada indiferentemente. <br /><br />");
define('_MI_XTUBE_SHOTWIDTH', 'Anchura de la imagen mostrada');
define('_MI_XTUBE_SHOTWIDTHDSC', 'Mostrar anchura de la captura de pantalla');
define('_MI_XTUBE_SHOTHEIGHT', 'Altura de la imagen mostrada');
define('_MI_XTUBE_SHOTHEIGHTDSC', 'Mostrar altura de la captura de pantalla');
define('_MI_XTUBE_MAINIMGDIR','Directorio de la imagen principal');

define('_MI_XTUBE_CATEGORYIMG','Directorio para almacenar las im�genes de las categor�as');//Category Image Upload Directory

define('_MI_XTUBE_DATEFORMAT', 'Formato de fecha:');
define('_MI_XTUBE_DATEFORMATDSC', 'Formato de fecha predeterminado para MyTube');

define("_MI_XTUBE_TOTALCHARS", "�Establecer un m�ximo de caracteres para la descripci�n?");
define("_MI_XTUBE_TOTALCHARSDSC", "Establezca un n�mero m�ximo de caracteres para la descripci�n en la p�gina �ndice.");

define("_MI_XTUBE_OTHERVIDEOS", "�Mostrar otros v�deos que haya enviado la misma persona?");
define("_MI_XTUBE_OTHERVIDEOSDSC", "Seleccione 'Si' para mostrar otros v�deos que haya enviado la misma persona.");

define("_MI_XTUBE_SHOWSBOOKMARKS", "�Mostrar Marcadores Sociales?");
define("_MI_XTUBE_SHOWSBOOKMARKSDSC", "Seleccione 'Si' si desea que los iconos de los Marcadores Sociales sean mostrados bajo el v�deo.");

define("_MI_XTUBE_USEMETADESCR", "Generar Meta Description:");
define("_MI_XTUBE_USEMETADSC", "Con esta opci�n la meta description estar� basada en la descripci�n del v�deo.");

define("_MI_XTUBE_USERTAGDESCR", "Usuarios que pueden enviar etiquetas:");
define("_MI_XTUBE_USERTAGDSC", "Seleccione 'Si' si los usuarios pueden enviar etiquetas.");

define('_MI_XTUBE_SHOWDISCLAIMER', '�Mostrar la advertencia antes del env�o del usuario?');
define('_MI_XTUBE_SHOWDISCLAIMERDSC', '�Antes de que el usuario pueda enviar el video, desea mostrar las condiciones?');
define('_MI_XTUBE_DISCLAIMER', 'Introduzca el texto de la advertencia:');

define('_MI_XTUBE_SHOWVIDEODISCL', '�Mostrar la advertencia antes de que el usuario pueda ver el v�deo?');
define('_MI_XTUBE_SHOWVIDEODISCLDSC', '�Mostrar las condiciones antes de reproducir el video?');

define('_MI_XTUBE_VIDEODISCLAIMER', 'Introducir el texto de la advertencia:');
//define('_MI_XTUBE_SUBCATS', 'Sub-Categor�as:');
//define('_MI_XTUBE_COPYRIGHT', 'Aviso de Copyright:');
//define('_MI_XTUBE_COPYRIGHTDSC', 'Selecciona para mostrar el aviso de copyright en la p�gina del video.');
define('_MI_XTUBE_COPYRIGHT', 'Aviso de Copyright:');
define('_MI_XTUBE_COPYRIGHTDSC', 'Selecciones para mostrar un aviso sobre el copyright en la p�gina del v�deo.');
define('_MI_XTUBE_CHECKHOST', '�Rechazar el enlace directo al video? (leeching/sanguijuela)');
define('_MI_XTUBE_REFERERS', 'Estos sitios pueden enlazar directamente a tus v�deos <br />Separados con #');
define("_MI_XTUBE_ANONPOST","Presentaci�n de un usuario an�nimo:");
define("_MI_XTUBE_ANONPOSTDSC","Permitir a los usuarios an�nimos hacer env�os a tu sitio web?");
define('_MI_XTUBE_AUTOAPPROVE','Aprobar automaticamente los env�os');
define('_MI_XTUBE_AUTOAPPROVEDSC','Seleccione para aprobar los env�os de v�deos sin moderar.');

define('_MI_XTUBE_MAXFILESIZE','Tama�o del env�o (KB)');
define('_MI_XTUBE_MAXFILESIZEDSC','Tama�o m�ximo permitido en los env�os de video.');
define('_MI_XTUBE_IMGWIDTH','Anchura de la imagen');
define('_MI_XTUBE_IMGWIDTHDSC','Anchura m�ximo permitido de la imagen del v�deo enviado');
define('_MI_XTUBE_IMGHEIGHT','Altura de la imagen');
define('_MI_XTUBE_IMGHEIGHTDSC','Altura m�xima permitida de la imagen del v�deo enviado');

define('_MI_XTUBE_UPLOADDIR','Enviar directorio (No puede hacer "trailing slash")');
define('_MI_XTUBE_ALLOWSUBMISS','Presentaciones del usuario:');
define('_MI_XTUBE_ALLOWSUBMISSDSC','Permitir a los usuarios enviar nuevos videos');
define('_MI_XTUBE_ALLOWUPLOADS','Env�os del usuario:');
define('_MI_XTUBE_ALLOWUPLOADSDSC','Permitir a los usuarios subir videos directamente a tu sitio web');
define('_MI_XTUBE_SCREENSHOTS','Directorio de capturas de pantalla subidas');

define("_MI_XTUBE_SUBMITART", "Presentaci�n del video:");
define("_MI_XTUBE_SUBMITARTDSC", "Seleccionar los grupos que pueden enviar nuevos videos.");
define("_MI_XTUBE_RATINGGROUPS", "Puntuaci�n de videos:");
define("_MI_XTUBE_RATINGGROUPSDSC", "Seleccionar los grupos que pueden puntuar videos.");
define("_MI_XTUBE_QUALITY", "Calidad de las im�genes reducidas:");
define("_MI_XTUBE_QUALITYDSC", "Calidad m�s baja: 0 M�s alta: 100");
define("_MI_XTUBE_KEEPASPECT", "Mantener proporciones de la imagen?");
define("_MI_XTUBE_KEEPASPECTDSC", "");

define("_MI_XTUBE_TITLE", "Titulo");
define("_MI_XTUBE_RATING", "Ranking");
define("_MI_XTUBE_WEIGHT", "Anchura");
define("_MI_XTUBE_POPULARITY", "Popularidad");
define("_MI_XTUBE_SUBMITTED2", "Fecha del env�o");

// Text for notifications
define('_MI_XTUBE_GLOBAL_NOTIFY', 'Global');
define('_MI_XTUBE_GLOBAL_NOTIFYDSC', 'Global videos opciones de notificaci�n.');
define('_MI_XTUBE_CATEGORY_NOTIFY', 'Categor�a');
define('_MI_XTUBE_CATEGORY_NOTIFYDSC', 'Opciones de notificaci�n que aplica al actual categor�a de v�deo.');
define('_MI_XTUBE_VIDEO_NOTIFY', 'Video');
define('_MI_XTUBE_FILE_NOTIFYDSC', 'Opciones de notificaci�n que aplica al video actual.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'Nueva Categor�a');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificarme cuando se cree una nueva categor�a de video.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recibir notificacones cuando se cree una nueva categor�a de videos.');
define('_MI_XTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Nueva categor�a de v�deo');

define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Modificaci�n de video solicitada');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Notificarme la solicitud de modificaci�n de alg�n video.');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Recibir notificaci�n cuando alguna petici�n de modificaci�n de video sea enviada.');
define('_MI_XTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : Solicitud de modificaci�n de video');

define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Enviado informe de enlace de video roto');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Notificarme cualquier informe de enlace roto.');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Recibir notificaci�n cuando sea enviado alg�n informe de enlace de video roto.');
define('_MI_XTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Informado un enlace roto');

define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Video enviado');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Notifciarme cuando alg�n video sea enviado (esperando aprobaci�n).');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Recibir notificaci�n cuando alg�n video sea enviado (esperando aprobaci�n).');
define('_MI_XTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : nuevo video enviado');

define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'Nuevo Video');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Notificarme cuando un nuevo video es enviado.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Receibir notificaci�n cunado un nuevo video es enviado.');
define('_MI_XTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : Nuevo video');

define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Video enviado');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notificarme cuando un video nuevo es enviado (esperando aprobaci�n) a la categor�a actual.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Recibir notifiaci�n cuando un video nuevo es enviado (esperando aprobaci�n) a la categor�a actual.');
define('_MI_XTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : Un nuevo video ha sido enviado a esta categor�a');

define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'Nuevo Video');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Notificarme cuando un nuevo video es enviado a la categor�a actual.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Recibir notificacion cuando un nuevo video es enviado a la categor�a actual.');
define('_MI_XTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Video nuevo en la categor�a');

define('_MI_XTUBE_VIDEO_APPROVE_NOTIFY', 'Video Aprobado');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Notificarme cuando este video sea aprobado.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Recibir notificaci�n cuando este video sea aprobado.');
define('_MI_XTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificaci�n : Video Aprobado');

define('_MI_XTUBE_AUTHOR_INFO', "Informacion del desarrollador");
define('_MI_XTUBE_AUTHOR_NAME', "Desarrollador");
define('_MI_XTUBE_AUTHOR_DEVTEAM', "Equipo de desarrollo");
define('_MI_XTUBE_AUTHOR_WEBSITE', "Sitio web del desarrollador");
define('_MI_XTUBE_AUTHOR_EMAIL', "Email del desarrollador");
define('_MI_XTUBE_AUTHOR_CREDITS', "Cr�ditos");
define('_MI_XTUBE_MODULE_INFO', "Informaci�n del m�dulo");
define('_MI_XTUBE_MODULE_STATUS', "Estado del desarrollo");
define('_MI_XTUBE_MODULE_DEMO', "Sitio Demo");
define('_MI_XTUBE_MODULE_SUPPORT', "Sitio de apoyo oficial");
define('_MI_XTUBE_MODULE_BUG', "Env�a una propuesta/consejo para este m�dulo");
define('_MI_XTUBE_MODULE_FEATURE', "Sugiere una nueva funci�n para este m�dulo");
define('_MI_XTUBE_MODULE_DISCLAIMER', "Renuncia");
define('_MI_XTUBE_RELEASE', "Fecha de liberaci�n: ");
define('_MI_XTUBE_ICONS_CREDITS', "Iconos de");
define('_MI_XTUBE_SUBMITABUG', "Enviar un reporte de error");

define('_MI_XTUBE_MODULE_MAILLIST', "WF-Project Mailing List");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTS', "Announcements Mailing List");
define('_MI_XTUBE_MODULE_MAILBUGS', "Bug Mailing List");
define('_MI_XTUBE_MODULE_MAILFEATURES', "Features Mailing List");
define('_MI_XTUBE_MODULE_MAILANNOUNCEMENTSDSC', "Get the latest announcements from WF-Project.");
define('_MI_XTUBE_MODULE_MAILBUGSDSC', "Bug Tracking and submission mailing list");
define('_MI_XTUBE_MODULE_MAILFEATURESDSC', "Request New Features mailing list.");

define('_MI_XTUBE_WARNINGTEXT', "THE SOFTWARE IS PROVIDED BY MCDONALD \"AS IS\" AND \"WITH ALL FAULTS.\"
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

define('_MI_XTUBE_AUTHOR_CREDITSTEXT',"WF-Projects Team. Basado en el m�dulo WF-Links; thanks to the dream-team for some code snippits.");
define('_MI_XTUBE_AUTHOR_BUGFIXES', "Bug Fix History");

define('_MI_XTUBE_COPYRIGHTIMAGE', "");

// version 1.02
define("_MI_XTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_XTUBE_FORM_DHTMLEXT", "DHTML Extended");

// Version 1.03
define('_MI_XTUBE_DATEFORMATADMIN', 'Administraci�n de fechas:');
define('_MI_XTUBE_DATEFORMATADMINDSC', 'Administraci�n de MyTube relativa a la fijaci�n de fechas de publicaci�n y expiraci�n en la lista principal');

// Version 1.04 RC-1
define('_MI_XTUBE_VIDEODIR', 'Video upload directory:');
define('_MI_XTUBE_VIDEODIRDSC', 'Set the directory for MyTube videos files');
define('_MI_XTUBE_VIDEOIMGDIR', 'Video screenshots upload directory:');
define('_MI_XTUBE_VIDEOIMGDIRDSC', 'Set the directory for MyTube video screenshots');
define('_MI_XTUBE_FLVPLAYER_CREDITS', 'FLV Player');
define('_MI_XTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player by Jeroen Wijering');
define('_MI_XTUBE_VUPLOADS', 'Video upload');
define('_MI_XTUBE_CATEGORYIMGDSC', '');
define('_MI_XTUBE_MAINIMGDIRDSC', '');
define('_MI_XTUBE_BNAME8', 'MyTube Sponsor Statistics' );

// Version 1.04 RC-2
define('_MI_XTUBE_MODULE_MANUAL', 'Manual' );
define('_MI_XTUBE_MODULE_MANUALWIKI', 'Wiki Manual' );
define('_MI_XTUBE_MODULE_REQUESTNEWFEATURE', 'Request a new feature' );
define('_MI_XTUBE_MODULE_SUBMITBUG', 'Submit a Bug' );
?>