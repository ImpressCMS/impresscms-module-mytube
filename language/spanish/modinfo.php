<?php
//Traducción de Evasan y Debianus para http://es.impresscms.org
/**
* $Id: blocks.php
 * Module: MyTube
 * Language: english
 */

// Module Info
// The name of this module
define("_MI_MYTUBE_NAME","MyTube");

// A brief description of this module
define("_MI_MYTUBE_DESC","Inserte en su web vídeos desde YouTube.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYTUBE_BNAME1","Vídeos recientes (t)");
define("_MI_MYTUBE_BNAME2","Vídeos recientes");
define("_MI_MYTUBE_BNAME3","Mejores vídeos (t)");
define("_MI_MYTUBE_BNAME4","Mejores vídeos");
define("_MI_MYTUBE_BNAME5","Vídeos recientes (h)");
define("_MI_MYTUBE_BNAME6","Vídeos aleatorios");
define("_MI_MYTUBE_BNAME7","Vídeos recientes (h)");

// Sub menu titles
define("_MI_MYTUBE_SMNAME1","Enviar");
define("_MI_MYTUBE_SMNAME2","Popular");
define("_MI_MYTUBE_SMNAME3","Mejores clasificados");
define("_MI_MYTUBE_SMNAME4","Últimos");
// Names of admin menu items
define("_MI_MYTUBE_BINDEX","Indice principal");
define("_MI_MYTUBE_INDEXPAGE","Gestión del índice de páginas");
define("_MI_MYTUBE_MCATEGORY","Gestión de categoría");
define("_MI_MYTUBE_MVIDEOS","Gestión de vídeos");
define("_MI_MYTUBE_MUPLOADS","Subir imagen");
define("_MI_MYTUBE_PERMISSIONS","Configurar permisos");
define("_MI_MYTUBE_BLOCKADMIN","Administración de bloques");
define("_MI_MYTUBE_MVOTEDATA","Votos");

// Title of config items
define('_MI_MYTUBE_POPULAR', 'Contador de vídeo');
define('_MI_MYTUBE_POPULARDSC', 'Número de visualizaciones para que un vídeo sea considerado popular.');

//Display Icons
define("_MI_MYTUBE_ICONDISPLAY","Iconos 'Popular' y 'Nuevo':");
define("_MI_MYTUBE_DISPLAYICONDSC", "Seleccionar cómo mostrar los iconos popular y nuevo en el listado de vídeos.");
define("_MI_MYTUBE_DISPLAYICON1", "Mostrar como iconos");
define("_MI_MYTUBE_DISPLAYICON2", "Mostrar como texto");
define("_MI_MYTUBE_DISPLAYICON3", "No mostrar");

define("_MI_MYTUBE_DAYSNEW","Nuevos vídeos del día:");
define("_MI_MYTUBE_DAYSNEWDSC","El número de días para que una categoría de vídeos sea considerada nueva.");
define("_MI_MYTUBE_DAYSUPDATED","Días para vídeos actualizados:");
define("_MI_MYTUBE_DAYSUPDATEDDSC","El margen de días para que una categoría se considere actualizada.");

define('_MI_MYTUBE_PERPAGE', 'Vídeos a mostrar:');
define('_MI_MYTUBE_PERPAGEDSC', 'Numero de vídeos a mostrar en cada listado de categoría.');
define("_MI_MYTUBE_ADMINPAGE", "Vídeos a mostrar (en administración):");
define("_MI_MYTUBE_AMDMINPAGEDSC", "Número de vídeos que serán mostrados en el área de administración del módulo.");

define("_MI_MYTUBE_ARTICLESSORT", "Orden predeterminado de los vídeos:");

define("_MI_MYTUBE_ARTICLESSORTDSC", "Seleccione el criterio por el que de forma predeterminada se mostrarán los listados de vídeos.");

define("_MI_MYTUBE_SORTCATS", "Ordenar categorías por:");
define("_MI_MYTUBE_SORTCATSDSC", "Seleccione como se mostrarán las categorías y las subcategorías.");

define('_MI_MYTUBE_SUBCATS', 'Subcategorías:');
define('_MI_MYTUBE_SUBCATSDSC', 'Seleccione "Sí" para mostrar las subcategorías. Seleccione "No" para ocultar las mismas en el listado.');
define('_MI_MYTUBE_EDITOR', "Editor a usar:");
define('_MI_MYTUBE_EDITORCHOICE', "Seleccionar el editor a usar. Si tiene una instalación simple (p.e. si sólo usa el editor DHTML contenido en el paquete básico de ImpressCMS), entonces sólo puede seleccionar DHTML y Compact");
define("_MI_MYTUBE_FORM_DHTML","DHTML");
define("_MI_MYTUBE_FORM_COMPACT","Compact");
define("_MI_MYTUBE_FORM_SPAW","Spaw Editor");
define("_MI_MYTUBE_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_MYTUBE_FORM_FCK","FCK Editor");
define("_MI_MYTUBE_FORM_KOIVI","Koivi Editor");
define("_MI_MYTUBE_FORM_INBETWEEN","Inbetween");
define("_MI_MYTUBE_FORM_TINYEDITOR","Tinyeditor");
define('_MI_MYTUBE_EDITORUSER', "Editor a usar por los usuarios:");
define('_MI_MYTUBE_EDITORCHOICEUSER', "Seleccione el editor a usar por los usuarios. Si tiene una instalación simple (p.e. si sólo usa el editor DHTML contenido en el paquete básico de ImpressCMS), entonces sólo puede seleccionar DHTML y Compact.");

define('_MI_MYTUBE_USESHOTS', 'Mostrar capturas de pantalla?');
define('_MI_MYTUBE_USESHOTSDSC', 'Seleccione "Sí" para mostrar capturas de pantalla en cada vídeo');

//elimiando en la versión final; pendiente de revisar
//define('_MI_MYTUBE_CATEGORYIMG','Directorio de categorías de imágenes subidas');
//define('_MI_MYTUBE_MAINIMGDIR','Directorio principal de imágenes');
define('_MI_MYTUBE_USETHUMBS', 'Usar imagen reducida:');
define("_MI_MYTUBE_USETHUMBSDSC", "Extensiones que soporta: JPG, GIF, PNG.<div style='padding-top: 8px;'>WF-Links utilizará imágenes reducidas para las imágenes. Seleccione 'No' para usar la imágenes originales si el servidor no soporta esta opción.</div>");

// Description of each config items
//define('_MI_MYTUBE_SUBCATSDSC', 'Selecciones Sí/Yes para mostrar subcategorías. Seleccionando No se eliminarán las subcateogrías de los listados');


define("_MI_MYTUBE_IMGUPDATE", "¿Actualizar miniaturas?");
define("_MI_MYTUBE_IMGUPDATEDSC", "Si selecciona esta opción, las imágenes serán actualizadas cuando la página sea mostrada; en otro caso la primera minuatura será usada indiferentemente. <br /><br />");
define('_MI_MYTUBE_SHOTWIDTH', 'Anchura de la imagen mostrada');
define('_MI_MYTUBE_SHOTWIDTHDSC', 'Mostrar anchura de la captura de pantalla');
define('_MI_MYTUBE_SHOTHEIGHT', 'Altura de la imagen mostrada');
define('_MI_MYTUBE_SHOTHEIGHTDSC', 'Mostrar altura de la captura de pantalla');
define('_MI_MYTUBE_MAINIMGDIR','Directorio de la imagen principal');

define('_MI_MYTUBE_CATEGORYIMG','Directorio para almacenar las imágenes de las categorías');//Category Image Upload Directory

define('_MI_MYTUBE_DATEFORMAT', 'Formato de fecha:');
define('_MI_MYTUBE_DATEFORMATDSC', 'Formato de fecha predeterminado para MyTube');

define("_MI_MYTUBE_TOTALCHARS", "¿Establecer un máximo de caracteres para la descripción?");
define("_MI_MYTUBE_TOTALCHARSDSC", "Establezca un número máximo de caracteres para la descripción en la página índice.");

define("_MI_MYTUBE_OTHERVIDEOS", "¿Mostrar otros vídeos que haya enviado la misma persona?");
define("_MI_MYTUBE_OTHERVIDEOSDSC", "Seleccione 'Si' para mostrar otros vídeos que haya enviado la misma persona.");

define("_MI_MYTUBE_SHOWSBOOKMARKS", "¿Mostrar Marcadores Sociales?");
define("_MI_MYTUBE_SHOWSBOOKMARKSDSC", "Seleccione 'Si' si desea que los iconos de los Marcadores Sociales sean mostrados bajo el vídeo.");

define("_MI_MYTUBE_USEMETADESCR", "Generar Meta Description:");
define("_MI_MYTUBE_USEMETADSC", "Con esta opción la meta description estará basada en la descripción del vídeo.");

define("_MI_MYTUBE_USERTAGDESCR", "Usuarios que pueden enviar etiquetas:");
define("_MI_MYTUBE_USERTAGDSC", "Seleccione 'Si' si los usuarios pueden enviar etiquetas.");

define('_MI_MYTUBE_SHOWDISCLAIMER', '¿Mostrar la advertencia antes del envío del usuario?');
define('_MI_MYTUBE_SHOWDISCLAIMERDSC', '¿Antes de que el usuario pueda enviar el vídeo, desea mostrar las condiciones?');
define('_MI_MYTUBE_DISCLAIMER', 'Introduzca el texto de la advertencia:');

define('_MI_MYTUBE_SHOWVIDEODISCL', '¿Mostrar la advertencia antes de que el usuario pueda ver el vídeo?');
define('_MI_MYTUBE_SHOWVIDEODISCLDSC', '¿Mostrar las condiciones antes de reproducir el vídeo?');

define('_MI_MYTUBE_VIDEODISCLAIMER', 'Introducir el texto de la advertencia:');
//define('_MI_MYTUBE_SUBCATS', 'Sub-Categorías:');
//define('_MI_MYTUBE_COPYRIGHT', 'Aviso de Copyright:');
//define('_MI_MYTUBE_COPYRIGHTDSC', 'Selecciona para mostrar el aviso de copyright en la página del vídeo.');
define('_MI_MYTUBE_COPYRIGHT', 'Aviso de Copyright:');
define('_MI_MYTUBE_COPYRIGHTDSC', 'Selecciones para mostrar un aviso sobre el copyright en la página del vídeo.');
define('_MI_MYTUBE_CHECKHOST', '¿Rechazar el enlace directo al vídeo? (leeching/sanguijuela)');
define('_MI_MYTUBE_REFERERS', 'Estos sitios pueden enlazar directamente a tus vídeos <br />Separados con #');
define("_MI_MYTUBE_ANONPOST","Presentación de un usuario anónimo:");
define("_MI_MYTUBE_ANONPOSTDSC","Permitir a los usuarios anónimos hacer envíos a tu sitio web?");
define('_MI_MYTUBE_AUTOAPPROVE','Aprobar automaticamente los envíos');
define('_MI_MYTUBE_AUTOAPPROVEDSC','Seleccione para aprobar los envíos de vídeos sin moderar.');

define('_MI_MYTUBE_MAXFILESIZE','Tamaño del envío (KB)');
define('_MI_MYTUBE_MAXFILESIZEDSC','Tamaño máximo permitido en los envíos de vídeo.');
define('_MI_MYTUBE_IMGWIDTH','Anchura de la imagen');
define('_MI_MYTUBE_IMGWIDTHDSC','Anchura máximo permitido de la imagen del vídeo enviado');
define('_MI_MYTUBE_IMGHEIGHT','Altura de la imagen');
define('_MI_MYTUBE_IMGHEIGHTDSC','Altura máxima permitida de la imagen del vídeo enviado');

define('_MI_MYTUBE_UPLOADDIR','Enviar directorio (No puede hacer "trailing slash")');
define('_MI_MYTUBE_ALLOWSUBMISS','Presentaciones del usuario:');
define('_MI_MYTUBE_ALLOWSUBMISSDSC','Permitir a los usuarios enviar nuevos vídeos');
define('_MI_MYTUBE_ALLOWUPLOADS','Envíos del usuario:');
define('_MI_MYTUBE_ALLOWUPLOADSDSC','Permitir a los usuarios subir vídeos directamente a tu sitio web');
define('_MI_MYTUBE_SCREENSHOTS','Directorio de capturas de pantalla subidas');

define("_MI_MYTUBE_SUBMITART", "Presentación del vídeo:");
define("_MI_MYTUBE_SUBMITARTDSC", "Seleccionar los grupos que pueden enviar nuevos vídeos.");
define("_MI_MYTUBE_RATINGGROUPS", "Puntuación de vídeos:");
define("_MI_MYTUBE_RATINGGROUPSDSC", "Seleccionar los grupos que pueden puntuar vídeos.");
define("_MI_MYTUBE_QUALITY", "Calidad de las imágenes reducidas:");
define("_MI_MYTUBE_QUALITYDSC", "Calidad más baja: 0 Más alta: 100");
define("_MI_MYTUBE_KEEPASPECT", "Mantener proporciones de la imagen?");
define("_MI_MYTUBE_KEEPASPECTDSC", "");

define("_MI_MYTUBE_TITLE", "Titulo");
define("_MI_MYTUBE_RATING", "Ranking");
define("_MI_MYTUBE_WEIGHT", "Anchura");
define("_MI_MYTUBE_POPULARITY", "Popularidad");
define("_MI_MYTUBE_SUBMITTED2", "Fecha del envío");

// Text for notifications
define('_MI_MYTUBE_GLOBAL_NOTIFY', 'Global');
define('_MI_MYTUBE_GLOBAL_NOTIFYDSC', 'Global vídeos opciones de notificación.');
define('_MI_MYTUBE_CATEGORY_NOTIFY', 'Categoría');
define('_MI_MYTUBE_CATEGORY_NOTIFYDSC', 'Opciones de notificación que aplica al actual categoría de vídeo.');
define('_MI_MYTUBE_VIDEO_NOTIFY', 'Video');
define('_MI_MYTUBE_FILE_NOTIFYDSC', 'Opciones de notificación que aplica al vídeo actual.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFY', 'Nueva Categoría');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Notificarme cuando se cree una nueva categoría de vídeo.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Recibir notificacones cuando se cree una nueva categoría de vídeos.');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Nueva categoría de vídeo');

define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'Modificación de vídeo solicitada');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'Notificarme la solicitud de modificación de algún vídeo.');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'Recibir notificación cuando alguna petición de modificación de vídeo sea enviada.');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : Solicitud de modificación de vídeo');

define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'Enviado informe de enlace de vídeo roto');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', 'Notificarme cualquier informe de enlace roto.');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', 'Recibir notificación cuando sea enviado algún informe de enlace de vídeo roto.');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notify : Informado un enlace roto');

define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'Video enviado');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', 'Notifciarme cuando algún vídeo sea enviado (esperando aprobación).');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', 'Recibir notificación cuando algún vídeo sea enviado (esperando aprobación).');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : nuevo vídeo enviado');

define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFY', 'Nuevo Video');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', 'Notificarme cuando un nuevo vídeo es enviado.');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', 'Receibir notificación cunado un nuevo vídeo es enviado.');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : Nuevo vídeo');

define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'Video enviado');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Notificarme cuando un vídeo nuevo es enviado (esperando aprobación) a la categoría actual.');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Recibir notifiación cuando un vídeo nuevo es enviado (esperando aprobación) a la categoría actual.');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificar : Un nuevo vídeo ha sido enviado a esta categoría');

define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFY', 'Nuevo Video');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', 'Notificarme cuando un nuevo vídeo es enviado a la categoría actual.');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', 'Recibir notificacion cuando un nuevo vídeo es enviado a la categoría actual.');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Video nuevo en la categoría');

define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFY', 'Video Aprobado');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYCAP', 'Notificarme cuando este vídeo sea aprobado.');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYDSC', 'Recibir notificación cuando este vídeo sea aprobado.');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-notificación : Video Aprobado');

define('_MI_MYTUBE_AUTHOR_INFO', "Informacion del desarrollador");
define('_MI_MYTUBE_AUTHOR_NAME', "Desarrollador");
define('_MI_MYTUBE_AUTHOR_DEVTEAM', "Equipo de desarrollo");
define('_MI_MYTUBE_AUTHOR_WEBSITE', "Sitio web del desarrollador");
define('_MI_MYTUBE_AUTHOR_EMAIL', "Email del desarrollador");
define('_MI_MYTUBE_AUTHOR_CREDITS', "Créditos");
define('_MI_MYTUBE_MODULE_INFO', "Información del módulo");
define('_MI_MYTUBE_MODULE_STATUS', "Estado del desarrollo");
define('_MI_MYTUBE_MODULE_DEMO', "Sitio Demo");
define('_MI_MYTUBE_MODULE_SUPPORT', "Sitio de apoyo oficial");
define('_MI_MYTUBE_MODULE_BUG', "Envía una propuesta/consejo para este módulo");
define('_MI_MYTUBE_MODULE_FEATURE', "Sugiere una nueva función para este módulo");
define('_MI_MYTUBE_MODULE_DISCLAIMER', "Renuncia");
define('_MI_MYTUBE_RELEASE', "Fecha de liberación: ");
define('_MI_MYTUBE_ICONS_CREDITS', "Iconos de");
define('_MI_MYTUBE_SUBMITABUG', "Enviar un reporte de error");

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

define('_MI_MYTUBE_AUTHOR_CREDITSTEXT',"WF-Projects Team. Basado en el módulo WF-Links; thanks to the dream-team for some code snippits.");
define('_MI_MYTUBE_AUTHOR_BUGFIXES', "Bug Fix History");

define('_MI_MYTUBE_COPYRIGHTIMAGE', "");

// version 1.02
define("_MI_MYTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_MYTUBE_FORM_DHTMLEXT", "DHTML Extendido");

// Version 1.03
define('_MI_MYTUBE_DATEFORMATADMIN', 'Administración de fechas:');
define('_MI_MYTUBE_DATEFORMATADMINDSC', 'Administración de MyTube relativa a la fijación de fechas de publicación y expiración en la lista principal');

// Version 1.04 RC-1
define('_MI_MYTUBE_VIDEODIR', 'Directorio de subida de vídeo:');
define('_MI_MYTUBE_VIDEODIRDSC', 'Establezca el directorio para los archivos de vídeo de MyTube');
define('_MI_MYTUBE_VIDEOIMGDIR', 'Directorio para la subida de las capturas de pantalla:');
define('_MI_MYTUBE_VIDEOIMGDIRDSC', 'Establezca el directorio para las capturas de pantalla de los vídeos de MyTubeSet');
define('_MI_MYTUBE_FLVPLAYER_CREDITS', 'FLV Player');
define('_MI_MYTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player por LongTail Video (Jeroen Wijering)');
define('_MI_MYTUBE_VUPLOADS', 'Subida de vídeo');
define('_MI_MYTUBE_CATEGORYIMGDSC', '');
define('_MI_MYTUBE_MAINIMGDIRDSC', '');
define('_MI_MYTUBE_BNAME8', 'Estadísticas de los patrocinadores' );

// Version 1.04 RC-2
define('_MI_MYTUBE_MODULE_MANUAL', 'Manual' );
define('_MI_MYTUBE_MODULE_MANUALWIKI', 'Manual en el wiki' );
define('_MI_MYTUBE_MODULE_REQUESTNEWFEATURE', 'Solicitar una nueva característica' );
define('_MI_MYTUBE_MODULE_SUBMITBUG', 'Reportar un fallo' );
define("_MI_MYTUBE_BNAME9","'Nube de etiquetas de MyTube'");
define("_MI_MYTUBE_BNAME10","Etiquetas más importantes de MyTube");
define('_MI_MYTUBE_FLVPLAYER_MANUAL', 'Manual de FLV Player');
define('_MI_MYTUBE_FLVPLAYER_WIKI', 'Wiki de JW Player');

// Version 1.05 RC-1
define( "_MI_XTUBE_CATCOLUMNS", "Seleccione la cantidad de columnas para las categorías:" );
define( "_MI_XTUBE_CATCOLUMNSDSC", "Seleccione el número que prefiera; de forma predeterminada son dos" );
define( "_MI_XTUBE_RATINGDISPLAY", "¿Mostrar la característica de valoración?" );
define( "_MI_XTUBE_RATINGDISPLAYDSC", "Seleccione <em>Sí</em> para mostrarla.Seleccione <em>No</em> si no desea mostrar dicha característica." );
define( "_MI_XTUBE_AUTOPLAY", "Autoreproducir el video" );
define( "_MI_XTUBE_AUTOPLAYDSC", "Seleccione <em>Sí</em> para reproducir los clips de video automáticamente." );
define( '_MI_XTUBE_VERSION', 'Versión' );
define( '_MI_XTUBE_LICENSE', 'Licencia' );
define( '_MI_XTUBE_LICENSEDSC', 'GNU General Public License (GPL) - una copia de la misma está contenida en el archivo (license.txt).' );

//Version 1.06 RC-1
define( '_MI_MYTUBE_FLVPLAYER_LICENSE', 'Licencia de JW FLV Media Player' );
define( '_MI_MYTUBE_FLVPLAYER_LICENSEDSC', 'Leer la licencia' );
define( '_MI_MYTUBE_WARNING_FINAL', 'Este módulo se proporciona como es y sin ninguna garantía. Aunque no es una versión beta, todavía está bajo desarrollo. Esta versión puede ser usada en un sitio web o entorno de producción pero bajo su propia responsabilidad; el autor no es responsable.' );
define( '_MI_MYTUBE_WARNING_RC', 'Este módulo se proporciona como es y sin ninguna garantía. Este módulo es una <em>Versión Candidata</em> y no debería ser usada en un sitio web abierto al público porque está todavía bajo desarrollo y si lo usa es bajo su propia responsabilidad: su autor no es responsable de los perjuicios que pueda sufrir.' );

define( '_MI_MYTUBE_MMYTUBE', 'Añadir clip de MyTube' );

define( '_MI_MYTUBE_RSSFEED', 'Origen de RSS' );
define( "_MI_MYTUBE_CAPTCHA", "¿Usar captcha en el formulario de envío?" );
define( "_MI_MYTUBE_CAPTCHADSC", "Seleccione <em>Sí</em> para elegir dicha opción.<br />De forma predeterminada: <em>Sí</em>" );
define( '_MI_MYTUBE_NICEURL', 'Use nice urls?' );
define( '_MI_MYTUBE_NICEURLDSC', 'Use nice urls for videoclips.' );
?>