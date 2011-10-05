<?php
//Traducción de Evasan y Debianus para http://es.impresscms.org
/**
* $Id: admin.php
 * Module: MyTube
 * Language: english
 */
define( "_AM_MYTUBE_WARNINSTALL1", "Advertencia: El directorio %s existe en su servidor. <br />Por favor, elimina el mismo por razones de seguridad." );
define( "_AM_MYTUBE_WARNINSTALL2", "Advertencia: El archivo %s existe en su servidor. <br />Por favor, elimina el mismo por razones de seguridad." );
define( "_AM_MYTUBE_WARNINSTALL3", "Advertencia: La carpeta %s no existe en su servidor. <br />Este carpeta es requerida por MyTube." );

define( "_AM_MYTUBE_MODULE_NAME", "MyTube" );

define( "_AM_MYTUBE_BMODIFY", "Modificar" );
define( "_AM_MYTUBE_BDELETE", "Eliminar" );
define( "_AM_MYTUBE_BCREATE", "Crear" );
define( "_AM_MYTUBE_BADD", "Añadir" );
define( "_AM_MYTUBE_BAPPROVE", "Aprobar" );
define( "_AM_MYTUBE_BIGNORE", "Ignorar" );
define( "_AM_MYTUBE_BCANCEL", "Cancelar" );
define( "_AM_MYTUBE_BSAVE", "Guardar" );
define( "_AM_MYTUBE_BRESET", "Restablecer" );
define( "_AM_MYTUBE_BMOVE", "Mover videos" );
define( "_AM_MYTUBE_BUPLOAD", "Subir" );
define( "_AM_MYTUBE_BDELETEIMAGE", "Eliminar la imágen seleccionada" );
define( "_AM_MYTUBE_BRETURN", "Retornar a donde estaba" );
define( "_AM_MYTUBE_DBERROR", "Error en el acceso a la base de datos" );
// Other Options
define( "_AM_MYTUBE_TEXTOPTIONS", "Opciones de texto:" );
define( "_AM_MYTUBE_DISABLEHTML", " Desactivar etiquetas HTML" );
define( "_AM_MYTUBE_DISABLESMILEY", " Desactivar caritas" );
define( "_AM_MYTUBE_DISABLEXCODE", " Desactivar códigos ImpressCMS" );
define( "_AM_MYTUBE_DISABLEIMAGES", " Desactivar imágenes" );
define( "_AM_MYTUBE_DISABLEBREAK", " ¿Usar ImpressCMS 'linebreak conversion'?" );
define( "_AM_MYTUBE_UPLOADFILE", "Video subido con éxito" );
define( "_AM_MYTUBE_NOMENUITEMS", "No hay items dentro del menú" );
// Admin Bread crumb
define( "_AM_MYTUBE_PREFS", "Preferencias" );
define( "_AM_MYTUBE_BUPDATE", "Actualizar el módulo" );
define( "_AM_MYTUBE_BINDEX", "Índice principal" );
define( "_AM_MYTUBE_BPERMISSIONS", "Permisos" );
define( "_AM_MYTUBE_BLOCKADMIN", "Bloques" );
define( "_AM_MYTUBE_GOMODULE", "Ir al módulo" );
define( "_AM_MYTUBE_ABOUT", "Acerca de" );
// Admin Summary
define( "_AM_MYTUBE_SCATEGORY", "Categorías: " );
define( "_AM_MYTUBE_SFILES", "Vídeos: " );
define( "_AM_MYTUBE_SNEWFILESVAL", "Subidos: " );
define( "_AM_MYTUBE_SMODREQUEST", "Modificados: " );
define( "_AM_MYTUBE_SREVIEWS", "Críticas: " );

// Admin Main Menu
define( "_AM_MYTUBE_MCATEGORY", "Gestión de la categorías" );
define( "_AM_MYTUBE_MVIDEOS", "Gestión de vídeo" );
define( "_AM_MYTUBE_MLISTBROKEN", "Listar vídeos rotos" );
define( "_AM_MYTUBE_MLISTPINGTIMES", "Listar Pingtime de enlaces" );
define( "_AM_MYTUBE_INDEXPAGE", "Gestión de la página índice" );
define( "_AM_MYTUBE_MCOMMENTS", "Comentarios" );
define( "_AM_MYTUBE_MVOTEDATA", "Fecha de los votos" );
define( "_AM_MYTUBE_MUPLOADS", "Subir imagen" );

// Catgeory defines
define( "_AM_MYTUBE_CCATEGORY_CREATENEW", "Crear nueva categoría" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY", "Modificar categoría" );
define( "_AM_MYTUBE_CCATEGORY_MOVE", "Mover la categoría" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_TITLE", "Título de la categoría:" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_FAILED", "Error moviendo los vídeos: no se han podido mover a esta categoría" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_FAILEDT", "Error moviendo los vídeos: no se puede encontrar esta categoría" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_MOVED", "Videos movidos y categoría eliminada" );
define( "_AM_MYTUBE_CCATEGORY_CREATED", "Nueva categoría creada y base de datos actualizada con éxito" );
define( "_AM_MYTUBE_CCATEGORY_MODIFIED", "La categoría seleccionada fue modificada y la base de datos fue actualizada con éxito" );
define( "_AM_MYTUBE_CCATEGORY_DELETED", "Categoría seleccionada eliminada y base de datos actualizada con éxito" );
define( "_AM_MYTUBE_CCATEGORY_AREUSURE", "Advertencia: ¿Está seguro de querer eliminar esta categoría y TODOS los vídeos y comentarios de la misma?" );
define( "_AM_MYTUBE_CCATEGORY_NOEXISTS", "Debe crear una categoría antes de poder añadir un nuevo vídeo" );
define( "_AM_MYTUBE_FCATEGORY_GROUPPROMPT", "Permisos de acceso a la categoría:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Seleccione el grupo de usuarios que tendrán acceso a esta categoría.</span></div>" );
define( "_AM_MYTUBE_FCATEGORY_SUBGROUPPROMPT", "Permisos para subir vídeos a esta categoría :<div style='padding-top: 8px;'><span style='font-weight: normal;'>Seleccione el grupo de usuarios que podrán subir nuevos vídeos a esta categoría.</span></div>" );
define( "_AM_MYTUBE_FCATEGORY_MODGROUPPROMPT", "Permisos de moderación en la categoría:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Seleccione el grupo de usuarios que que tendrán permisos para poder moderar esta categoría.</span></div>" );

define( "_AM_MYTUBE_FCATEGORY_TITLE", "Título de la categoría :" );
define( "_AM_MYTUBE_FCATEGORY_WEIGHT", "Immportancia de la categoría:" );
define( "_AM_MYTUBE_FCATEGORY_SUBCATEGORY", "Fijar como subcategoría:" );
define( "_AM_MYTUBE_FCATEGORY_CIMAGE", "Selecciona la imágen de la categoría:" );
define( "_AM_MYTUBE_FCATEGORY_DESCRIPTION", "Establecer descripción de la categoría:" );
define( "_AM_MYTUBE_FCATEGORY_SUMMARY", "Establecer sumario de la categoría:" );
/**
 * Index page Defines
 */
define( "_AM_MYTUBE_IPAGE_UPDATED", "Página índice modificada y base de datos actualizada con éxito" );
define( "_AM_MYTUBE_IPAGE_INFORMATION", "Información de la página índice" );
define( "_AM_MYTUBE_IPAGE_MODIFY", "Modificar página índice" );
define( "_AM_MYTUBE_IPAGE_CIMAGE", "Seleccionar imágen del índice:" );
define( "_AM_MYTUBE_IPAGE_CTITLE", "Título del índice:" );
define( "_AM_MYTUBE_IPAGE_CHEADING", "Cabecera del índice:" );
define( "_AM_MYTUBE_IPAGE_CHEADINGA", "Alineación de la cabecera del índice:" );
define( "_AM_MYTUBE_IPAGE_CFOOTER", "Pie de página del índice:" );
define( "_AM_MYTUBE_IPAGE_CFOOTERA", "Alineación del pie de página del índice:" );
define( "_AM_MYTUBE_IPAGE_CLEFT", "Alineación izquierda" );
define( "_AM_MYTUBE_IPAGE_CCENTER", "Alineación central" );
define( "_AM_MYTUBE_IPAGE_CRIGHT", "Alineación derecha" );
/**
 * Permissions defines
 */
define( "_AM_MYTUBE_PERM_MANAGEMENT", "Gestión de permisos" );
define( "_AM_MYTUBE_PERM_PERMSNOTE", "<div><b>NOTE:</b> Por favor, tenga cuidado porque si ha fijado correctamente los permisos para ver aquí, un grupo podría no ver los artículos o los bloques si uted no has conferido permisos de acceso al módulo a ese grupo. Para hacer esto vaya a las Preferencias del sistema, Grupos, elija el grupo apropiado y haga clic en las cuadros necesarios para garantizar el acceso a los miembros de ese grupo." );
define( "_AM_MYTUBE_PERM_CPERMISSIONS", "Permisos de la categoría" );
define( "_AM_MYTUBE_PERM_CSELECTPERMISSIONS", "Seleccione las categorías que cada grupo de usuarios podrá visualizar" );
define( "_AM_MYTUBE_PERM_CNOCATEGORY", "No se pueden establecer los permisos: las categorías no han sido creadas todavía" );
define( "_AM_MYTUBE_PERM_FPERMISSIONS", "Permisos del vídeo" );
define( "_AM_MYTUBE_PERM_FNOFILES", "No se pueden fijar los permisos: los vídeos no han sido creados todavía" );
define( "_AM_MYTUBE_PERM_FSELECTPERMISSIONS", "Seleccione los vídeos que cada grupo puede ver" );
/**
 * Upload defines
 */
define( "_AM_MYTUBE_VIDEO_IMAGEUPLOAD", "Imágen subida con éxito al servidor de destino" );
define( "_AM_MYTUBE_VIDEO_NOIMAGEEXIST", "Error: ninguna imagen fue seleccionada para ser subida. Por favor, inténtelo de nuevo" );
define( "_AM_MYTUBE_VIDEO_IMAGEEXIST", "La imágen ya existe en el área de subidas" );
define( "_AM_MYTUBE_VIDEO_FILEDELETED", "La imagen ha sido eliminada." );
define( "_AM_MYTUBE_VIDEO_FILEERRORDELETE", "Error eliminando el vídeo: no fue encontrado en el servidor." );
define( "_AM_MYTUBE_VIDEO_NOFILEERROR", "Error eliminando la imagen: ninguna fue seleccionada." );
define( "_AM_MYTUBE_VIDEO_DELETEFILE", "Advertencia: ¿estás seguro que desea eliminar este enlace a la imágen?" );
define( "_AM_MYTUBE_VIDEO_IMAGEINFO", "Estado del servidor" );
define( "_AM_MYTUBE_VIDEO_SPHPINI", "<b>Información tomada del enlace de PHP ini:</b>" );
define( "_AM_MYTUBE_VIDEO_SAFEMODESTATUS", "Estado de 'Safe Mode': " );
define( "_AM_MYTUBE_VIDEO_REGISTERGLOBALS", "Register Globals: " );
define( "_AM_MYTUBE_VIDEO_SERVERUPLOADSTATUS", "Estado de 'Server Uploads': " );
define( "_AM_MYTUBE_VIDEO_MAXUPLOADSIZE", "Tamaño máximo de subida permitido: " );
define( "_AM_MYTUBE_VIDEO_MAXPOSTSIZE", "Tamaño máximo de envíos permitido: " );
define( "_AM_MYTUBE_VIDEO_SAFEMODEPROBLEMS", " (Esto puede causar problemas)" );
define( "_AM_MYTUBE_VIDEO_GDLIBSTATUS", "Estado de la librería GD: " );
define( "_AM_MYTUBE_VIDEO_GDLIBVERSION", "Versión de la librería GD: " );
define( "_AM_MYTUBE_VIDEO_GDON", "<b>Activado</b> (Miniaturas disponibles)" );
define( "_AM_MYTUBE_VIDEO_GDOFF", "<b>Desactivado</b> (Miniaturas no disponibles)" );
define( "_AM_MYTUBE_VIDEO_OFF", "<b>OFF</b>" );
define( "_AM_MYTUBE_VIDEO_ON", "<b>ON</b>" );
define( "_AM_MYTUBE_VIDEO_CATIMAGE", "Imágenes de las categorías" );
define( "_AM_MYTUBE_VIDEO_SCREENSHOTS", "Capturas de pantalla" );
define( "_AM_MYTUBE_VIDEO_MAINIMAGEDIR", "Imágenes principales" );
define( "_AM_MYTUBE_VIDEO_FCATIMAGE", "Ruta a la imágen de la categoría" );
define( "_AM_MYTUBE_VIDEO_FSCREENSHOTS", "Ruta a la imagen de captura de pantalla" );
define( "_AM_MYTUBE_VIDEO_FMAINIMAGEDIR", "Ruta a la imágen principal" );
define( "_AM_MYTUBE_VIDEO_FUPLOADIMAGETO", "Subir imágen: " );
define( "_AM_MYTUBE_VIDEO_FUPLOADPATH", "Ruta de subida: " );
define( "_AM_MYTUBE_VIDEO_FUPLOADURL", "URL de subida: " );
define( "_AM_MYTUBE_VIDEO_FOLDERSELECTION", "Seleccionar el destino del archivo subido:" );
define( "_AM_MYTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Mostrar la imágen seleccionada:" );
define( "_AM_MYTUBE_VIDEO_FUPLOADIMAGE", "Subir nueva imágen al destino seleccionado:" );

// Main Index defines
define( "_AM_MYTUBE_MINDEX_VIDEOSUMMARY", "Sumario de la administración del módulo" );
define( "_AM_MYTUBE_MINDEX_PUBLISHEDVIDEO", "Videos publicados:" );
define( "_AM_MYTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Videos autopublicados:" );
define( "_AM_MYTUBE_MINDEX_AUTOEXPIRE", "Vídeos autoexpirados:" );
define( "_AM_MYTUBE_MINDEX_EXPIRED", "Videos expirados:" );
define( "_AM_MYTUBE_MINDEX_OFFLINEVIDEO", "Vídeos 'offline':" );
define( "_AM_MYTUBE_MINDEX_ID", "ID" );
define( "_AM_MYTUBE_MINDEX_TITLE", "Título del vídeo" );
define( "_AM_MYTUBE_MINDEX_POSTER", "Envió" );
define( "_AM_MYTUBE_MINDEX_ONLINE", "Estado" );
define( "_AM_MYTUBE_MINDEX_ONLINESTATUS", "En línea" );
define( "_AM_MYTUBE_MINDEX_PUBLISH", "Publicado" );
define( "_AM_MYTUBE_MINDEX_PUBLISHED", "Publicado" );
define( "_AM_MYTUBE_MINDEX_EXPIRE", "Expirado" );
define( "_AM_MYTUBE_MINDEX_NOTSET", "Fecha no fijada" );
define( "_AM_MYTUBE_MINDEX_SUBMITTED", "Fecha subida" );

define( "_AM_MYTUBE_MINDEX_ACTION", "Acción" );
define( "_AM_MYTUBE_MINDEX_NOVIDEOSFOUND", "Advertencia: No hay vídeos que reúnan este criterio" );
define( "_AM_MYTUBE_MINDEX_PAGE", "<b>Página:<b> " );
define( '_AM_MYTUBE_MINDEX_PAGEINFOTXT', '<ul><li>Detalles de la página principal de MyTube.</li><li>Puede fácilmente cambiar la imágen logo, la cabecera del índice principal y el texto del pie de página para ajustarlos a sus necesidades</li></ul><br />Nota: La imágen del logo que elija será usada en MyTube.' );
define( "_AM_MYTUBE_MINDEX_RESPONSE", "Tiempo de respuesta" );
// Submitted Links
define( "_AM_MYTUBE_SUB_SUBMITTEDFILES", "Videos subidos" );
define( "_AM_MYTUBE_SUB_FILESWAITINGINFO", "Esperando información de los vídeos" );
define( "_AM_MYTUBE_SUB_FILESWAITINGVALIDATION", "Videos esperando validación: " );
define( "_AM_MYTUBE_SUB_APPROVEWAITINGFILE", "<b>Aprobar</b> información del nuevo vídeo sin validación." );
define( "_AM_MYTUBE_SUB_EDITWAITINGFILE", "<b>Editar</b> la información del nuevo vídeo y entonces aprobarlo." );
define( "_AM_MYTUBE_SUB_DELETEWAITINGFILE", "<b>Eliminar</b> la información del nuevo vídeo." );
define( "_AM_MYTUBE_SUB_NOFILESWAITING", "No hay vídeos que reúnan este criterio" );
define( "_AM_MYTUBE_SUB_NEWFILECREATED", "Creados los datos del nuevo vídeo y base de datos actualizada con éxito" );
// Vote Information
define( "_AM_MYTUBE_VOTE_RATINGINFOMATION", "Información de la votación" );
define( "_AM_MYTUBE_VOTE_TOTALVOTES", "Total de votos: " );
define( "_AM_MYTUBE_VOTE_REGUSERVOTES", "Votos de los usuarios registrados: %s" );
define( "_AM_MYTUBE_VOTE_ANONUSERVOTES", "Votos de usuarios anónimos: %s" );
define( "_AM_MYTUBE_VOTE_USER", "Usuario" );
define( "_AM_MYTUBE_VOTE_IP", "Dirección IP" );
define( "_AM_MYTUBE_VOTE_DATE", "Subido" );
define( "_AM_MYTUBE_VOTE_RATING", "Valoración" );
define( "_AM_MYTUBE_VOTE_NOREGVOTES", "Votos de usuarios no registrados" );
define( "_AM_MYTUBE_VOTE_NOUNREGVOTES", "Votos de usuarios no registrados" );//No Unregistered User Votes: duda con la anterior
define( "_AM_MYTUBE_VOTE_VOTEDELETED", "Datos de votos eliminados." );
define( "_AM_MYTUBE_VOTE_ID", "ID" );
define( "_AM_MYTUBE_VOTE_FILETITLE", "Título del vídeo" );
define( "_AM_MYTUBE_VOTE_DISPLAYVOTES", "Información de la votación" );
define( "_AM_MYTUBE_VOTE_NOVOTES", "No hay votos de los usuarios a mostrar" );
define( "_AM_MYTUBE_VOTE_DELETE", "No mostrar los votos de los usuarios" );
define( "_AM_MYTUBE_VOTE_DELETEDSC", "<b>Eliminar</b> la información de los votos seleccionados de la base de datos." );
define( "_AM_MYTUBE_VOTEDELETED", "Los votos seleccionados han sido eliminados de la base de datos" );

define( "_AM_MYTUBE_VOTE_USERAVG", "Valoración media de los usuarios" );
define( "_AM_MYTUBE_VOTE_TOTALRATE", "Total de votos" );
define( "_AM_MYTUBE_VOTE_MAXRATE", "Máximo voto del item" );
define( "_AM_MYTUBE_VOTE_MINRATE", "Mínimo voto del item" );
define( "_AM_MYTUBE_VOTE_MOSTVOTEDTITLE", "El más votado por" );
define( "_AM_MYTUBE_VOTE_LEASTVOTEDTITLE", "Menos votado por" );
define( "_AM_MYTUBE_VOTE_MOSTVOTERSUID", "El votante más activo" );
define( "_AM_MYTUBE_VOTE_REGISTERED", "Votos de usuarios registrados" );
define( "_AM_MYTUBE_VOTE_NONREGISTERED", "Votos de usuarios anónimos" );
// Modifications
define( "_AM_MYTUBE_MOD_TOTMODREQUESTS", "Total de las modificaciones solicitadas: " );
define( "_AM_MYTUBE_MOD_MODREQUESTS", "Vídeos modificados" );
define( "_AM_MYTUBE_MOD_MODREQUESTSINFO", "Información de los vídeos modificados" );
define( "_AM_MYTUBE_MOD_MODID", "ID" );
define( "_AM_MYTUBE_MOD_MODTITLE", "Título" );
define( "_AM_MYTUBE_MOD_MODPOSTER", "Enviado originalmente por: " );
define( "_AM_MYTUBE_MOD_DATE", "Subido" );
define( "_AM_MYTUBE_MOD_NOMODREQUEST", "No hay peticiones que cumplan este criterio" );
define( "_AM_MYTUBE_MOD_TITLE", "Título del vídeo: " );
define( "_AM_MYTUBE_MOD_LID", "Vídeo ID: " );
define( "_AM_MYTUBE_MOD_CID", "Categoría: " );
define( "_AM_MYTUBE_MOD_URL", "URL del vídeo: " );
define( "_AM_MYTUBE_MOD_PUBLISHER", "Publicador: " );
define( "_AM_MYTUBE_MOD_FORUMID", "Foro: " );
define( "_AM_MYTUBE_MOD_SCREENSHOT", "Captura de pantalla: " );
define( "_AM_MYTUBE_MOD_HOMEPAGE", "Página web: " );
define( "_AM_MYTUBE_MOD_HOMEPAGETITLE", "Título de la web: " );
define( "_AM_MYTUBE_MOD_SHOTIMAGE", "Captura de pantalla: " );
define( "_AM_MYTUBE_MOD_DESCRIPTION", "Descripción: " );
define( "_AM_MYTUBE_MOD_MODIFYSUBMITTER", "Enviado por: " );
define( "_AM_MYTUBE_MOD_MODIFYSUBMIT", "Lo envió" );
define( "_AM_MYTUBE_MOD_PROPOSED", "Detalles del vídeo propuesto" );
define( "_AM_MYTUBE_MOD_ORIGINAL", "Detalles del vídeo original" );
define( "_AM_MYTUBE_MOD_REQDELETED", "La modificación solicitada fue eliminada de la base de datos" );
define( "_AM_MYTUBE_MOD_REQUPDATED", "El vídeo seleccionado fue modificado y la base de datos actualizada con éxito" );
define( '_AM_MYTUBE_MOD_VIEW', 'Ver' );
// Link management
define( "_AM_MYTUBE_VIDEO_ID", "Video ID: " );
define( "_AM_MYTUBE_VIDEO_IP", "Dirección IP de quien lo subió: " );
define( "_AM_MYTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Extensiones de vídeo permitidas</b>:</div>" );
define( "_AM_MYTUBE_VIDEO_MODIFYFILE", "Modificar información del vídeo" );
define( "_AM_MYTUBE_VIDEO_CREATENEWFILE", "Crear nuevo vídeo" );
define( "_AM_MYTUBE_VIDEO_TITLE", "Título del vídeo: " );
define( "_AM_MYTUBE_VIDEO_DLVIDID", "Video id-code: " );
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
<b>MyTube:</b> <font color=#FF0000>Take over from above selection menu</font></small>" );
define( "_AM_MYTUBE_VIDEO_PICURL", "URL de la imagen: " );
define( "_AM_MYTUBE_VIDEO_PICURLNOTE", "<small>URL de la imagen cuando procede de Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Megavideo, Viddler, Maktoob o National Geographic.</small>" );
define( "_AM_MYTUBE_VIDEO_DESCRIPTION", "Descripción: " );
define( "_AM_MYTUBE_VIDEO_CATEGORY", "Categoría principal: " );
define( "_AM_MYTUBE_VIDEO_FILESSTATUS", "¿Permitir el acceso sin conexión?<br /><br /><span style='font-weight: normal;'>el vídeo no será visible para todos los usuarios.</span>" );
define( "_AM_MYTUBE_VIDEO_SETASUPDATED", " ¿Fijar el estado del vídeo como actualizado?<br /><br /><span style='font-weight: normal;'>el mismo mostrará el icono de 'actualizado'.</span>" );
define( "_AM_MYTUBE_VIDEO_SHOTIMAGE", "Captura de pantalla: " );
define( "_AM_MYTUBE_VIDEO_DISCUSSINFORUM", "¿Añadir discusión en este foro?" );
define( "_AM_MYTUBE_VIDEO_PUBLISHDATE", "Fecha de publicación:" );
define( "_AM_MYTUBE_VIDEO_EXPIREDATE", "Fecha de expiración:" );
define( "_AM_MYTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Eliminar la fecha de publicación:" );
define( "_AM_MYTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Eliminar la fecha de expiración:" );
define( "_AM_MYTUBE_VIDEO_PUBLISHDATESET", " Fijar la fecha de publicación: " );
define( "_AM_MYTUBE_VIDEO_SETDATETIMEPUBLISH", " Fijar la fecha/hora de publicación" );
define( "_AM_MYTUBE_VIDEO_SETDATETIMEEXPIRE", " Fijar la fecha/hora de la expiración" );
define( "_AM_MYTUBE_VIDEO_SETPUBLISHDATE", "<b>Establecer la fecha de la publicación: </b>" );
define( "_AM_MYTUBE_VIDEO_SETNEWPUBLISHDATE", "<b>Establecer nueva fecha de publicación: </b><br />Publicado:" );
define( "_AM_MYTUBE_VIDEO_SETPUBDATESETS", "<b>Establecer la fecha de publicación: </b><br />Publicado el:" );
define( "_AM_MYTUBE_VIDEO_EXPIREDATESET", " Fijar la fecha de expiración: " );
define( "_AM_MYTUBE_VIDEO_SETEXPIREDATE", "<b>Fijar la fecha de expiración: </b>" );
define( "_AM_MYTUBE_VIDEO_DELEDITMESS", "¿Eliminar el reporte de enlace roto?<br /><br /><span style='font-weight: normal;'>Si elige <b>Si</b> el reporte será elimiando y confirmará que el vídeo está disponible.</span>" );
define( "_AM_MYTUBE_VIDEO_MUSTBEVALID", "La captura debe ser una imagen válida de vídeo en el directorio %s (ej. shot.gif). Déje este campo en blanco si no hay enlace a ninguna imagen." );
define( "_AM_MYTUBE_VIDEO_EDITAPPROVE", "Aprobar vídeo:" );
define( "_AM_MYTUBE_VIDEO_NEWFILEUPLOAD", "Nuevo vídeo creado y base de datos actualizada con éxito." );
define( "_AM_MYTUBE_VIDEO_FILEMODIFIEDUPDATE", "El vídeo seleccionado fue modificado y la base de datos actualizada con éxito." );
define( "_AM_MYTUBE_VIDEO_REALLYDELETEDTHIS", "¿Realmente desea eliminar el vídeo seleccionado?" );
define( "_AM_MYTUBE_VIDEO_FILEWASDELETED", "El vídeo %s fue eliminado con éxito de la base de datos." );
define( "_AM_MYTUBE_VIDEO_FILEAPPROVED", "Vídeo aprobado y base de datos actualizada con éxito." );
define( "_AM_MYTUBE_VIDEO_CREATENEWSSTORY", "<b>-Crear noticia desde el enlace</b>" );
define( "_AM_MYTUBE_VIDEO_SUBMITNEWS", "¿Remitir el nuevo vídeo como noticia?" );
define( "_AM_MYTUBE_VIDEO_NEWSCATEGORY", "Seleccione la categoría de noticias para la remisión:" );
define( "_AM_MYTUBE_VIDEO_NEWSTITLE", "Título de la noticia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Déjelo en blanco para usar como tal el título del vídeo</span></div>" );
define( "_AM_MYTUBE_VIDEO_PUBLISHER", "Nombre de quien publica el vídeo: " );

/**
 * Broken links defines
 */
define( "_AM_MYTUBE_SBROKENSUBMIT", "Roto: " );
define( "_AM_MYTUBE_BROKEN_FILE", "Reportes de vídeos con enlaces rotos" );
define( "_AM_MYTUBE_BROKEN_FILEIGNORED", "El reporte es ignorado y se ha eliminado de la base de datos con éxito." );
define( "_AM_MYTUBE_BROKEN_NOWACK", "Estado acerca de la confirmación cambiado y base de datos actualizada." );
define( "_AM_MYTUBE_BROKEN_NOWCON", "Se cambió el estado de la confirmación y la base de datos se actualizó." );
define( "_AM_MYTUBE_BROKEN_REPORTINFO", "Información sobre reportes de vídeos con enlaces rotos" );
define( "_AM_MYTUBE_BROKEN_REPORTSNO", "Reportes de vídeos con enlaces rotos en espera:" );
define( "_AM_MYTUBE_BROKEN_IGNOREDESC", "<b>Ignorar</b> el reporte y solo eliminar el mismo." );
define( "_AM_MYTUBE_BROKEN_DELETEDESC", "<b>Eliminar</b> los datos del enlace reportado y el reporte mismo de la base de datos." );
define( "_AM_MYTUBE_BROKEN_EDITDESC", "<b>Modificar</b> el vídeo para solucionar el problema." );
define( "_AM_MYTUBE_BROKEN_ACKDESC", "<b>Confirmado</b> Establecer como tal el reporte del vídeo con enlace roto." );
define( "_AM_MYTUBE_BROKEN_CONFIRMDESC", "<b>Confirmado</b> Establecer como tal el reporte del vídeo con enlace roto." );
define( "_AM_MYTUBE_BROKEN_ACKNOWLEDGED", "Confirmado" );
define( "_AM_MYTUBE_BROKEN_DCONFIRMED", "Confirmado" );

define( "_AM_MYTUBE_BROKEN_ID", "ID" );
define( "_AM_MYTUBE_BROKEN_TITLE", "Título" );
define( "_AM_MYTUBE_BROKEN_REPORTER", "Revisor" );
define( "_AM_MYTUBE_BROKEN_FILESUBMITTER", "Remitente" );
define( "_AM_MYTUBE_BROKEN_DATESUBMITTED", "Fecha de la remisión" );
define( "_AM_MYTUBE_BROKEN_ACTION", "Acción" );
define( "_AM_MYTUBE_BROKEN_NOFILEMATCH", "No hay reportes de enlaces de vídeos rotos que reúnan estos criterios." );
define( "_AM_MYTUBE_BROKENFILEDELETED", "El vídeo fue eliminado de la base de datos y el reporte de estar roto el enlace también." );
define( "_AM_MYTUBE_BROKEN_VIDSOURCE", "Fuente del vídeo" );
/**
 * About defines
 */
define( "_AM_MYTUBE_BY", "por" );
// block defines
define( "_AM_MYTUBE_BADMIN", "Administración de bloques" );
define( "_AM_MYTUBE_BLKDESC", "Descripción" );
define( "_AM_MYTUBE_TITLE", "Título" );
define( "_AM_MYTUBE_SIDE", "Alineación" );
define( "_AM_MYTUBE_WEIGHT", "Orden" );
define( "_AM_MYTUBE_VISIBLE", "Visible" );
define( "_AM_MYTUBE_ACTION", "Acción" );
define( "_AM_MYTUBE_SBLEFT", "Izquierda" );
define( "_AM_MYTUBE_SBRIGHT", "Derecha" );
define( "_AM_MYTUBE_CBLEFT", "Centro-izquierda" );
define( "_AM_MYTUBE_CBRIGHT", "Centro-derecha" );
define( "_AM_MYTUBE_CBCENTER", "Centro-centro" );
define( "_AM_MYTUBE_ACTIVERIGHTS", "Permisos para activar" );
define( "_AM_MYTUBE_ACCESSRIGHTS", "Permisos para acceder" );
// image admin icon
define( "_AM_MYTUBE_ICO_EDIT", "Editar este ítem" );
define( "_AM_MYTUBE_ICO_DELETE", "Eliminar este ítem" );
define( "_AM_MYTUBE_ICO_RESOURCE", "Modificar este ítem" );

define( "_AM_MYTUBE_ICO_ONLINE", "Online" );
define( "_AM_MYTUBE_ICO_OFFLINE", "Offline" );
define( "_AM_MYTUBE_ICO_APPROVED", "Aprobado" );
define( "_AM_MYTUBE_ICO_NOTAPPROVED", "No aprobado" );

define( "_AM_MYTUBE_ICO_VIDEO", "Vídeo relacionado" );
define( "_AM_MYTUBE_ICO_URL", "Añadir URL relacionado" );
define( "_AM_MYTUBE_ICO_ADD", "Añadir" );
define( "_AM_MYTUBE_ICO_APPROVE", "Aprobar" );
define( "_AM_MYTUBE_ICO_STATS", "Estadísticas" );
define( "_AM_MYTUBE_ICO_VIEW", "Ver este ítem" );

define( "_AM_MYTUBE_ICO_IGNORE", "Ignorar" );
define( "_AM_MYTUBE_ICO_ACK", "Reconocer el reporte del problema" );
define( "_AM_MYTUBE_ICO_REPORT", "¿Reconocer el reporte del problema?" );
define( "_AM_MYTUBE_ICO_CONFIRM", "Reporte de rotura confirmado" );
define( "_AM_MYTUBE_ICO_CONBROKEN", "¿Confirmar el reporte de rotura?" );
define( "_AM_MYTUBE_ICO_RES", "Editar recursos/vídeos para este item" );
define( "_AM_MYTUBE_MOD_URLRATING", "Valoración del contenido:" );//Interent Content Rating-traducción problemática
// Alternate category
define( "_AM_MYTUBE_ALTCAT_CREATEF", "Añadir categoría alternativa" );
define( "_AM_MYTUBE_MALTCAT", "Gestión de categorías alternativas" );
define( "_AM_MYTUBE_ALTCAT_MODIFYF", "Gestión de categorías alternativas" );
define( "_AM_MYTUBE_ALTCAT_INFOTEXT", "<ul><li>Las categorías alternativas pueden ser añadidas o eliminadas fácilmente mediante este formulario.</li></ul>" );
define( '_AM_MYTUBE_ALTCAT_CREATED', 'La categoría alternativa fue guardada' );

define( "_AM_MYTUBE_MRESOURCES", "Gestión de recursos" );
define( "_AM_MYTUBE_RES_CREATED", "Gestión de recursos" );
define( "_AM_MYTUBE_RES_ID", "ID" );
define( "_AM_MYTUBE_RES_DESC", "Descripción" );
define( "_AM_MYTUBE_RES_NAME", "Nombre del recurso" );
define( "_AM_MYTUBE_RES_TYPE", "Tipo del recurso" );
define( "_AM_MYTUBE_RES_USER", "Usuario" );
define( "_AM_MYTUBE_RES_CREATEF", "Añadir recurso" );
define( "_AM_MYTUBE_RES_MODIFYF", "Modificar recurso" );
define( "_AM_MYTUBE_RES_NAMEF", "Nombre del recurso:" );
define( "_AM_MYTUBE_RES_DESCF", "Descripción del recurso:" );
define( "_AM_MYTUBE_RES_URLF", "URL del recurso:" );
define( "_AM_MYTUBE_RES_ITEMIDF", "Item ID:" );
define( "_AM_MYTUBE_RES_INFOTEXT", "<ul><li>Nuevos recursos pueden ser fácilmente añadidos, modificados o eliminados a través de este formulario.</li>
	<li>Listar todos los recursos enlazados a un vídeo</li>
	<li>Modificar el nombre del recurso y la descripción</li></ul>
	" );
define( "_AM_MYTUBE_LISTBROKEN", "Mostrar los vídeos que posiblemente estén rotos. Nota: los resultados que se muestren no están confirmados y deberían ser tomados sólamente como indicios de posibles problemas.<br /><br />" );
define( "_AM_MYTUBE_PINGTIMES", "Mostrar los estimados tiempos de 'round ping' de cada vídeo.<br /><br />Nota: los resultados que se muestren no están confirmados y deberían ser tomados sólamente como indicios de posibles problemas.<br /><br />" );

define( "_AM_MYTUBE_NO_FORUM", "No seleccionó ningún foro" );

define( "_AM_MYTUBE_PERM_RATEPERMISSIONS", "Permisos para valorar" );
define( "_AM_MYTUBE_PERM_RATEPERMISSIONS_TEXT", "Seleccionar los grupos que pueden valorar un vídeo en las categorías seleccionadas." );

define( "_AM_MYTUBE_PERM_AUTOPERMISSIONS", "Autoaprobar vídeos" );
define( "_AM_MYTUBE_PERM_AUTOPERMISSIONS_TEXT", "Selecione los grupos que pueden aprobar nuevos vídeos sin la intervención del administrador." );

define( "_AM_MYTUBE_PERM_SPERMISSIONS", "Permisos para subir" );
define( "_AM_MYTUBE_PERM_SPERMISSIONS_TEXT", "Selecciona los grupos que pueden subir nuevos vídeos a las categorías seleccionadas." );

define( "_AM_MYTUBE_PERM_APERMISSIONS", "Grupos que pueden moderar" );
define( "_AM_MYTUBE_PERM_APERMISSIONS_TEXT", "Selecciona los grupos que tienen privilegios para moderar las categorías seleccionadas." );

define( "_AM_MYTUBE_TIME", "Tiempo:" );
define( "_AM_MYTUBE_KEYWORDS", "Palabras clave:" );
define( "_AM_MYTUBE_KEYWORDS_NOTE", "<small><i>Las palabras clave deberían ser separadas con una coma (palabraclave1, palabraclave2).</i>" );
define("_AM_MYTUBE_VIDEO_META_DESCRIPTION", "Metadescripción");
define("_AM_MYTUBE_VIDEO_META_DESCRIPTION_DSC", "Para tener más éxito con relación a los motores de búsqueda, puede personalizar la meta descripción que le gustaría usar para este artículo. Si deja este campo vació cuando cree la categoría, automáticamente será difundida con el campo de resumen de este artículo.");

define( "_AM_MYTUBE_VIDSOURCE", "Fuente del vídeo:" );
define( "_AM_MYTUBE_VIDSOURCE2", "Fuente del vídeo:" );
define( "_AM_MYTUBE_YOUTUBE", "YouTube" );
define( "_AM_MYTUBE_METACAFE", "MetaCafe" );
define( "_AM_MYTUBE_IFILM", "Spike" );
define( "_AM_MYTUBE_GOOGLEVIDEO", "Google Video" );
define( "_AM_MYTUBE_MYSPAVETV", "MySpace TV" );
define( "_AM_MYTUBE_PHOTOBUCKET", "Photobucket" );
define( "_AM_MYTUBE_DAILYMOTION", "DailyMotion" );

// Version 1.04 RC-1
define( "_AM_MYTUBE_BLIPTV", "Blip.tv" );
define( "_AM_MYTUBE_MYTUBE", "MyTube" );
define( "_AM_MYTUBE_ICO_EXPIRE", "Expirado" );
define( "_AM_MYTUBE_MMYTUBE", "Añadir MyTube Clip" );
define( "_AM_MYTUBE_VIDEO_CATVIDEOIMG", "Imágenes del vídeo" );
define( "_AM_MYTUBE_VIDEO_FCATVIDEOIMG", "Ruta a las imágenes del vídeo" );
define( "_AM_MYTUBE_VUPLOAD_VIDEOEXIST", "El vídeo ya existe" );
define( "_AM_MYTUBE_VUPLOAD_VIDEOUPLOAD", "Video subido" );
define( "_AM_MYTUBE_VUPLOAD_NOVIDEOEXIST", "No existe el vídeo" );
define( "_AM_MYTUBE_VUPLOAD_FILEDELETED", "Video eliminado" );
define( "_AM_MYTUBE_VUPLOAD_FILEERRORDELETE", "Error" );
define( "_AM_MYTUBE_VUPLOAD_NOFILEERROR", "No hay archivo" );
define( "_AM_MYTUBE_VUPLOAD_DELETEFILE", "Eliminar el archivo del vídeo" );
define( "_AM_MYTUBE_VUPLOAD_CATVIDEO", "Archivos de vídeo" );
define( "_AM_MYTUBE_VUPLOAD_FCATVIDEO", "Directorio de subida de vídeos" );
define( "_AM_MYTUBE_VUPLOADS", "Subir vídeo " );//Video Upload
define( "_AM_MYTUBE_VUPLOAD_FUPLOADPATH", "Ruta para subir el vídeo:" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADURL", "URL para subir el vídeo:" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADVIDEOTO", "Subir vídeo: " );
define( "_AM_MYTUBE_VUPLOAD_FOLDERSELECTION", "Seleccione el destino de la subida" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADVIDEO", "Video a subir" );
define( "_AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Seleccionar un archivo de vídeo" );
define( "_AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "El archivo de vídeo debe ser del tipo FLV" );
define( "_AM_MYTUBE_BDELETEVIDEO", "Eliminar vídeo" );
define( "_AM_MYTUBE_NOVIDEO", "No mostrar vídeo" );
define( "_AM_MYTUBE_NOIMAGE", "No mostrar imagen" );
define( "_AM_MYTUBE_NOSELECT", "No hay selección" );
define( "_AM_MYTUBE_NOFILESELECT", "No se seleccionó archivo" );
define( "_AM_MYTUBE_MYTUBEVIDEO", "Archivo de vídeo de MyTube:" );
define( "_AM_MYTUBE_WARNINSTALL4", "<b>Advertencia:</b> <u>La carpeta</u> %s no tiene permisos de escritura. <br />La misma necesita que el servidor pueda escribir en ella (CHMOD 777) para el uso de MyTube." );
// Uploader class
define( "_AM_MYTUBE_READWRITEERROR", "No ha seleccionado ningún archivo a subir o el servidor no tiene permisos de lectura/esritura para subir este archivo." );
define( "_AM_MYTUBE_INVALIDFILESIZE", "Tamaño de archivo no válido" );
define( "_AM_MYTUBE_FILENAMEEMPTY", "El archivo está vacío" );
define( "_AM_MYTUBE_NOFILEUPLOAD", "Hubo un error y el archivo no fue subido" );
define( "_AM_MYTUBE_UPLOADERRORZERO", "Hubo un problema en la subida. Error: 0" );
define( "_AM_MYTUBE_UPLOADERRORONE", "El archivo que está intentando subir es demasiado grande. Error: 1" );
define( "_AM_MYTUBE_UPLOADERRORTWO", "El archivo que está intentando subir es demasiado grande. Error: 2" );
define( "_AM_MYTUBE_UPLOADERRORTHREE", "El archivo fue subido sólo parcialmente. Error: 3" );
define( "_AM_MYTUBE_UPLOADERRORFOUR", "No se seleccionó archivo a subir. Error: 4" );
define( "_AM_MYTUBE_UPLOADERRORFIVE", "No se seleccionó archivo a subir. Error: 5" );
define( "_AM_MYTUBE_NOUPLOADDIR", "El directorio de subida no fue seleccionado" );
define( "_AM_MYTUBE_FAILOPENDIR", "Fallo al abrir el directorio: " );
define( "_AM_MYTUBE_FAILOPENDIRWRITEPERM", "Fallo al abrir el directorio con permisos de escritura: " );
define( "_AM_MYTUBE_FILESIZEMAXSIZE", "Tamaño del archivo: %u. Máximo tamaño permitido: %u" );
define( "_AM_MYTUBE_FILESIZEMAXWIDTH", "Ancho de la imagen: %u. Máximo permitido: %u" );
define( "_AM_MYTUBE_FILESIZEMAXHEIGHT", "Altura de la imagen: %u. Máximo permitido: %u" );
define( "_AM_MYTUBE_MIMENOTALLOW", "Tipo MIME no permitido: " );
define( "_AM_MYTUBE_FAILEDUPLOADING", "Fallo al subir el archivo: " );
define( "_AM_MYTUBE_ALREADYEXISTTRYAGAIN", " ya existe en el servidor. Por favor, renombre el archivo e inténtelo de nuevo.<br />" );
define( "_AM_MYTUBE_ERRORSRETURNUPLOAD", "<h4>Hubo errores en la subida</h4>" );
define( "_AM_MYTUBE_DOESNOTEXIST", " no existe" );

// Version 1.04 RC-2
define( "_AM_MYTUBE_CLIPFISH", "ClipFish" );
define( "_AM_MYTUBE_LIVELEAK", "LiveLeak" );
define( '_AM_MYTUBE_MAKTOOB', 'Maktoob' );
define( '_AM_MYTUBE_VEOH', 'Veoh' );
define( "_AM_MYTUBE_FILE", "Archivo " );
define( "_AM_MYTUBE_INFORMATION", "Información del vídeo" );
define( "_AM_MYTUBE_VIDEO_DLVIDIDDSC", "Tenga en cuenta que la parte roja debe estar como en los ejemplos que se muestran más abajo." );
define( "_AM_MYTUBE_VIDEO_VIEWS", "Vistas: " );
define( "_AM_MYTUBE_ERROR_CATISCAT", "No puede establecer una categoría como una subcategoría de ella misma" );

// Version 1.04 RC-3
define( "_AM_MYTUBE_MOD_VIDID", "id-code: " );
define( "_AM_MYTUBE_MOD_VIDSOURCE", "Fuente del vídeo: " );
define( "_AM_MYTUBE_MOD_TIME", "Tiempo: " );
define( "_AM_MYTUBE_MOD_KEYWORDS", "Palabras clave: " );
define( "_AM_MYTUBE_MOD_ITEM_TAG", "Etiquetas: " );
define( "_AM_MYTUBE_MOD_PICURL", "URL de la imagen: " );
define( "_AM_MYTUBE_IPAGE_SHOWLATEST", "¿Mostrar las últimas listas?" );
define( "_AM_MYTUBE_IPAGE_LATESTTOTAL", "¿Cuantos vídeos a mostrar?" );
define( "_AM_MYTUBE_IPAGE_LATESTTOTAL_DSC", "0 desactiva esta opción." );

// Version 1.05 RC-1

define( '_AM_MYTUBE_VIMEO', 'Vimeo' );
define( '_AM_MYTUBE_MEGAVIDEO', 'Megavideo' );
define( '_AM_MYTUBE_VIDDLER', 'Viddler' );
define( '_AM_MYTUBE_CATTITLE', 'Categoría' );

// Version 1.06 RC-1
define( '_AM_XTUBE_FLV_LICENSE', 'Licencia' );
define( '_AM_XTUBE_FLV_LICENSEDSC', 'Por favor, lea la <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">licencia</a> relativa al uso de JW FLV Media Player. Al usarlo, significa que está de acuerdo con la <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">licencia no comercial</a>.' );
define( '_AM_MYTUBE_RSSFEED', 'Origen de RSS' );
define( '_AM_MYTUBE_RSSFEEDCFG', 'Configuración del origen de RSS' );
define( '_AM_MYTUBE_RSSFEEDDSC', 'Aquí puede configurar el origen de RSS para MyTube.<br />Para más información, visite el sitio web <a href="http://www.rssboard.org/" target="_blank">RSS Advisory Board</a>.' );
define( '_AM_MYTUBE_RSSACTIVE', 'Origen de RSS activado' );
define( '_AM_MYTUBE_RSSACTIVEDSC', 'Seleccione <em>Sí</em> para activar el origen de RSS para MyTube; seleccione <em>No</em> para desactivarlo.' );
define( '_AM_MYTUBE_RSSTITLE', 'Título del origen de RSS' );
define( '_AM_MYTUBE_RSSTITLEDSC', 'El nombre del canal; por él los internautas se referirán a este servicio. Si tiene un sitio web que contiene la misma información que el archivo RSS, el título de su canal debería ser el mismo que el del sitio web.' );
define( '_AM_MYTUBE_RSSLINKS', 'Enlace al origen de RSS' );
define( '_AM_MYTUBE_RSSLINKSDSC', 'El URL del sitio web correspondiente al canal.' );
define( '_AM_MYTUBE_RSSDESCRIPTION', 'Descripción del origen de RSS' );
define( '_AM_MYTUBE_RSSDESCRIPTIONDSC', 'Frase o sentencia que describe el canal.' );
define( '_AM_MYTUBE_RSSIMAGE', 'Imagen del origen de RSS' );
define( '_AM_MYTUBE_RSSIMAGEDSC', 'Especifique una imagen GIF, JPEG o PNG que será mostrada en el canal.' );
define( '_AM_MYTUBE_RSSWIDTH', 'Ancho de la imagen del origen de RSS' );
define( '_AM_MYTUBE_RSSWIDTHDSC', 'Indica el ancho de la misma en pixels.<br />El valor máximo es 144.' );
define( '_AM_MYTUBE_RSSHEIGHT', 'Altura de la imagen del origen de RSS' );
define( '_AM_MYTUBE_RSSHEIGHTDSC', 'Indica la altura de la misma en pixels.<br />El valor máximo es 400.' );
define( '_AM_MYTUBE_RSSIMGTITLE', 'Título de la imagen del origen de RSS' );
define( '_AM_MYTUBE_RSSIMGTITLEDSC', 'Describa la imagen como lo será por el atributo ALT de HTML &#60;img&#62; la etiqueta del canal será formateada en HTML.' );
define( '_AM_MYTUBE_RSSIMGLINK', 'Enlace de la imagen del origen de RSS' );
define( '_AM_MYTUBE_RSSIMGLINKDSC', 'Este es el URL del sitio; cuando el canal es mostrado la imagen es un enlace al sitio. (Nota: en la práctica, la imagen &#60;title&#62; y &#60;link&#62; deberían tener el mismo valor que el canal &#60;title&#62; and &#60;link&#62;).' );
define( '_AM_MYTUBE_RSSTTL', 'ttl del origen de RSS' );
define( '_AM_MYTUBE_RSSTTLDSC', 'Número de minutos en los que el canal permanecerá en caché antes de ser actualizado desde la fuente.' );
define( '_AM_MYTUBE_RSSWEBMASTER', 'Administrador del origen de RSS' );
define( '_AM_MYTUBE_RSSWEBMASTERDSC', 'Dirección de correo electrónico de la persona responsable de las cuestiones técnicas relativas al canal.' );
define( '_AM_MYTUBE_RSSEDITOR', 'Editor del canal del origen de RSS' );
define( '_AM_MYTUBE_RSSEDITORDSC', 'Dirección de correo electrónico de la persona responsable por el contenido editorial.' );
define( '_AM_MYTUBE_RSSCATEGORY', 'Categoría del origen de RSS' );
define( '_AM_MYTUBE_RSSCATEGORYDSC', 'Especifique una o más categorías para el canal. Siga las mismas reglas que  &#60;item&#62; elemento de la categoría.' );
define( '_AM_MYTUBE_RSSGENERATOR', 'Generador del origen de RSS' );
define( '_AM_MYTUBE_RSSGENERATORDSC', 'Llave indicando el programa usado para generar el canal.' );
define( '_AM_MYTUBE_RSSCOPYRIGHT', 'Copyright del origen de RSS' );
define( '_AM_MYTUBE_RSSCOPYRIGHTDSC', 'Contenido del Copyright del canal.' );
define( '_AM_MYTUBE_RSSTOTAL', 'Total de enlaces del origen de RSS' );
define( '_AM_MYTUBE_RSSTOTALDSC', 'Número total de enlaces que se mostrarán en el mismo.' );
define( '_AM_MYTUBE_RSSDBUPDATED', 'La base de datos fue actualizada con éxito' );
define( '_AM_MYTUBE_RSSOFFLINE', 'Título del mensaje cuando el origen de RSS está desactivado' );
define( '_AM_MYTUBE_RSSOFFLINEDSC', '' );
define( '_AM_MYTUBE_RSSOFFMSG', 'Mensaje cuando el origen de RSS esté desactivado' );
define( '_AM_MYTUBE_RSSOFFMSGDSC', 'El mismo será usado como explicación del porqué de dicha circunstancia.' );
define( '_AM_MYTUBE_RSSOFFTITLE', 'Este origen de RSS ha sido desactivado.' );
define( '_AM_MYTUBE_RSSOFFMSGDEF', 'Este origen de RSS ha sido temporalmente desactivado por motivos de mantenimiento.' );
define( '_AM_MYTUBE_RSSCLICKSUBMIT', 'Por favor, haga clic en <em>Enviar</em> para almacenar todos los valores del formulario en la base de datos' );
define( '_AM_MYTUBE_COPYRIGHT', 'Copyright' );
define( '_AM_MYTUBE_NICEURL', 'Alternative title for videoclip:' );
define( '_AM_MYTUBE_NICEURLDSC', 'Enter an alternative title for the videoclip to be used in the url. When the option <em>Use nice urls</em> from Preferences is selected and this field is left empty, than the title of the videoclip will be used.' );
define( '_AM_MYTUBE_NATIOGEO', 'National Geographic' );
?>