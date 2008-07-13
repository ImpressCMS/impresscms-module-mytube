<?php
/**
 * $Id: admin.php 2758 2008-06-11 16:40:26Z gibaphp $
 * Module: MyTube
 * Author:  mcdonald
 * Language: Portuguesebr
 * Licence: GNU
 */
//� necess�rio revis�o de v�rios termos para o portugu�s de portugal, mas eu penso que dever� ajudar o que j� est� conclu�do.

define( "_AM_XTUBE_WARNINSTALL1", "AVISO: o diret�rio %s j� existe no seu servidor. <br />Por favor, por raz�e de seguran�a, remova antes este diret�rio." );
define( "_AM_XTUBE_WARNINSTALL2", "AVISO: o arquivo %s j� existe no seu servidor. <br />Por favor, por raz�e de seguran�a, remova antes este arquivo." );
define( "_AM_XTUBE_WARNINSTALL3", "AVISO: a pasta %s n�o existe em seu servidor. <br />Esta pasta � necess�ria para o funcionamento do MyTube." );

define( "_AM_XTUBE_MODULE_NAME", "MyTube" );

define( "_AM_XTUBE_BMODIFY", "Modificar" );
define( "_AM_XTUBE_BDELETE", "Excluir" );
define( "_AM_XTUBE_BCREATE", "Criar" );
define( "_AM_XTUBE_BADD", "Adicionar" );
define( "_AM_XTUBE_BAPPROVE", "Aprovar" );
define( "_AM_XTUBE_BIGNORE", "Ignorar" );
define( "_AM_XTUBE_BCANCEL", "Cancelar" );
define( "_AM_XTUBE_BSAVE", "Salvar" );
define( "_AM_XTUBE_BRESET", "Limpar" );
define( "_AM_XTUBE_BMOVE", "Mover V�deos" );
define( "_AM_XTUBE_BUPLOAD", "Upload" );
define( "_AM_XTUBE_BDELETEIMAGE", "Excluir imagem selecionada" );
define( "_AM_XTUBE_BRETURN", "Retornar para onde voc� estava!" );
define( "_AM_XTUBE_DBERROR", "Erros de acesso a Base de Dados" );
// Other Options
define( "_AM_XTUBE_TEXTOPTIONS", "Op��es de Texto:" );
define( "_AM_XTUBE_DISABLEHTML", " Desabilitar tags HTML" );
define( "_AM_XTUBE_DISABLESMILEY", " Desabilitar �cones Smilie" );
define( "_AM_XTUBE_DISABLEXCODE", " Desabilitar xCode" );
define( "_AM_XTUBE_DISABLEIMAGES", " Desabilitar Imagens" );
define( "_AM_XTUBE_DISABLEBREAK", " Usar convers�o de quebra de linha xCode?" );
define( "_AM_XTUBE_UPLOADFILE", "Upload de V�deo bem-sucedido" );
define( "_AM_XTUBE_NOMENUITEMS", "N�o h� �tens no menu" );
// Admin Bread crumb
define( "_AM_XTUBE_PREFS", "Prefer�ncias" );
define( "_AM_XTUBE_BUPDATE", "Atualiza��o do M�dulo" );
define( "_AM_XTUBE_BINDEX", "P�gina Principal" );
define( "_AM_XTUBE_BPERMISSIONS", "Permiss�es" );
// define( "_AM_XTUBE_BLOCKADMIN", "Blocks" );
define( "_AM_XTUBE_BLOCKADMIN", "Ajustes dos Blocos" );
define( "_AM_XTUBE_GOMODULE", "Ir para o m�dulo" );
define( "_AM_XTUBE_ABOUT", "Sobre o m�dulo" );
// Admin Summary
define( "_AM_XTUBE_SCATEGORY", "Categoria: " );
define( "_AM_XTUBE_SFILES", "V�deos: " );
define( "_AM_XTUBE_SNEWFILESVAL", "Enviado em: " );
define( "_AM_XTUBE_SMODREQUEST", "Modificado em: " );
define( "_AM_XTUBE_SREVIEWS", "Visualiza��es: " );

// Admin Main Menu
define( "_AM_XTUBE_MCATEGORY", "Gerenciamento de Categorias" );
define( "_AM_XTUBE_MVIDEOS", "Gerenciamento de V�deos" );
define( "_AM_XTUBE_MLISTBROKEN", "V�deo com Problemas" );
define( "_AM_XTUBE_MLISTPINGTIMES", "Lista de Links Pingtime" );
define( "_AM_XTUBE_INDEXPAGE", "Gerenciamento da P�ginal Principal" );
define( "_AM_XTUBE_MCOMMENTS", "Coment�rios" );
define( "_AM_XTUBE_MVOTEDATA", "Dados de Vota��o" );
define( "_AM_XTUBE_MUPLOADS", "Upload de Imagens" );

// Catgeory defines
define( "_AM_XTUBE_CCATEGORY_CREATENEW", "Criar Nova Categoria" );
define( "_AM_XTUBE_CCATEGORY_MODIFY", "Modificar Categoria" );
define( "_AM_XTUBE_CCATEGORY_MOVE", "Mover V�deos de Categoria" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_TITLE", "T�tulo da Categoria:" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_FAILED", "Falhou ao mover v�deos: n�o p�de mover para esta categoria" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_FAILEDT", "Falhou ao mover v�deos: n�o p�de encontrar esta categoria" );
define( "_AM_XTUBE_CCATEGORY_MODIFY_MOVED", "V�deos movidos e categoria exclu�da" );
define( "_AM_XTUBE_CCATEGORY_CREATED", "Nova categoria criada e Base de Dados atualizada com sucesso" );
define( "_AM_XTUBE_CCATEGORY_MODIFIED", "A categoria selecionada foi modificada e a Base de Dados atualizada com sucesso" );
define( "_AM_XTUBE_CCATEGORY_DELETED", "A categoria selecionada foi exclu�da e a Base de Dados atualizada com sucesso" );
define( "_AM_XTUBE_CCATEGORY_AREUSURE", "ADVERT�NCIA: voc� tem certeza de que quer excluir esta Categoria e TODAS as informa��es dos v�deos e os coment�rios?" );
define( "_AM_XTUBE_CCATEGORY_NOEXISTS", "Voc� deve criar pelo menos uma Categoria, antes de poder adicionar um novo v�deo" );
define( "_AM_XTUBE_FCATEGORY_GROUPPROMPT", "Premiss�es de Acesso �s Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos de usu�rios que ter�o acesso a esta categoria.</span></div>" );
define( "_AM_XTUBE_FCATEGORY_SUBGROUPPROMPT", "Premiss�es de Envio �s Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos de usu�rios que ter�o permiss�o para enviar novos v�deos para esta categoria.</span></div>" );
define( "_AM_XTUBE_FCATEGORY_MODGROUPPROMPT", "Premiss�es de Modera��o das Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos de usu�rios que ter�o permiss�o para moderar esta categoria.</span></div>" );

define( "_AM_XTUBE_FCATEGORY_TITLE", "T�tulo da Categoria:" );
define( "_AM_XTUBE_FCATEGORY_WEIGHT", "Peso da Categoria:" );
define( "_AM_XTUBE_FCATEGORY_SUBCATEGORY", "Defina como Sub-Categoria de:" );
define( "_AM_XTUBE_FCATEGORY_CIMAGE", "Selecione uma imagem para a Categoria:" );
define( "_AM_XTUBE_FCATEGORY_DESCRIPTION", "Defina a descri��o da Categoria:" );
define( "_AM_XTUBE_FCATEGORY_SUMMARY", "Defina o sum�rio da Categoria:" );
/**
 * Index page Defines
 */
define( "_AM_XTUBE_IPAGE_UPDATED", "P�gina Principal modificada e Base de Dados atualizada com sucesso!" );
define( "_AM_XTUBE_IPAGE_INFORMATION", "Informa��es da P�gina Principal" );
define( "_AM_XTUBE_IPAGE_MODIFY", "Modificar P�gina Principal" );
define( "_AM_XTUBE_IPAGE_CIMAGE", "Selecione uma imagem para a P�gina Principal:" );
define( "_AM_XTUBE_IPAGE_CTITLE", "T�tulo da P�gina Principal:" );
define( "_AM_XTUBE_IPAGE_CHEADING", "Cabe�alho da P�gina Principal:" );
define( "_AM_XTUBE_IPAGE_CHEADINGA", "Alinhamento do cabe�alho da P�gina Principal:" );
define( "_AM_XTUBE_IPAGE_CFOOTER", "Rodap� da P�gina Principal:" );
define( "_AM_XTUBE_IPAGE_CFOOTERA", "Alinhamento do rodap� da P�gina Principal:" );
define( "_AM_XTUBE_IPAGE_CLEFT", "Alinhar a Esquerda" );
define( "_AM_XTUBE_IPAGE_CCENTER", "Centralizar" );
define( "_AM_XTUBE_IPAGE_CRIGHT", "Alinhar a Direita" );
/**
 * Permissions defines
 */
define( "_AM_XTUBE_PERM_MANAGEMENT", "Gerenciamento de Permiss�es" );
define( "_AM_XTUBE_PERM_PERMSNOTE", "<div><b>NOTA:</b> Por favor, esteja ciente de que mesmo que voc� ajuste corretamente aqui as permiss�es de visualiza��o, um grupo pode n�o ver os v�deos ou blocos se voc� n�o der tamb�m ao grupo permiss�o para acessar o m�dulo. Para fazer isso, v� em <b>System > Grupos</b>, escolha o grupo apropriado e clique nos checkboxes que permitem esse acesso.</div>" );
define( "_AM_XTUBE_PERM_CPERMISSIONS", "Permiss�es das Categorias" );
define( "_AM_XTUBE_PERM_CSELECTPERMISSIONS", "Selecione as categorias que cada grupo tem permiss�o de ver" );
define( "_AM_XTUBE_PERM_CNOCATEGORY", "N�o p�de definir as permiss�es: ainda n�o foi criada nenhuma Categoria!" );
define( "_AM_XTUBE_PERM_FPERMISSIONS", "Permiss�es de V�deo" );
define( "_AM_XTUBE_PERM_FNOFILES", "N�o p�de definir as permiss�es: ainda n�o foi criado nenhum v�deo!" );
define( "_AM_XTUBE_PERM_FSELECTPERMISSIONS", "Selecione os v�deos que cada grupo tem permiss�o de ver" );
/**
 * Upload defines
 */
define( "_AM_XTUBE_VIDEO_IMAGEUPLOAD", "Imagem subida com suceso ao destino no servidor" );
define( "_AM_XTUBE_VIDEO_NOIMAGEEXIST", "Erro: nenhum v�deo foi selecionado para upload. Por favor, tente novamente!" );
define( "_AM_XTUBE_VIDEO_IMAGEEXIST", "A Imagem j� existe na �rea de upload!" );
define( "_AM_XTUBE_VIDEO_FILEDELETED", "O V�deo foi exclu�do." );
define( "_AM_XTUBE_VIDEO_FILEERRORDELETE", "Erro ao excluir V�deo: v�deo n�o foi encontrado no servidor." );
define( "_AM_XTUBE_VIDEO_NOFILEERROR", "Erro ao ao excluir V�deo: nenhum v�deo foi selecionado para exclus�o." );
define( "_AM_XTUBE_VIDEO_DELETEFILE", "ADVERT�NCIA: voc� tem certeza de que quer excluir este link de Imagem?" );
define( "_AM_XTUBE_VIDEO_IMAGEINFO", "Status do Servidor" );
define( "_AM_XTUBE_VIDEO_SPHPINI", "<b>Informa��o obtida do PHP ini Link:</b>" );
define( "_AM_XTUBE_VIDEO_SAFEMODESTATUS", "Status do Modo Seguro: " );
define( "_AM_XTUBE_VIDEO_REGISTERGLOBALS", "Registros Globais: " );
define( "_AM_XTUBE_VIDEO_SERVERUPLOADSTATUS", "Status de Upload do Servidor: " );
define( "_AM_XTUBE_VIDEO_MAXUPLOADSIZE", "M�ximo tamanho de arquivo para upload: " );
define( "_AM_XTUBE_VIDEO_MAXPOSTSIZE", "Tamanho m�ximo permitido para um post: " );
define( "_AM_XTUBE_VIDEO_SAFEMODEPROBLEMS", " (isto pode causar problemas)" );
define( "_AM_XTUBE_VIDEO_GDLIBSTATUS", "Suporte a GD Library: " );
define( "_AM_XTUBE_VIDEO_GDLIBVERSION", "Vers�o do GD Library: " );
define( "_AM_XTUBE_VIDEO_GDON", "<b>Habilitado</b> (Thumbs Nails dispon�vel)" );
define( "_AM_XTUBE_VIDEO_GDOFF", "<b>Desabilitado</b> (Thumb Nails indispon�vel)" );
define( "_AM_XTUBE_VIDEO_OFF", "<b>Desligado</b>" );
define( "_AM_XTUBE_VIDEO_ON", "<b>Ligado</b>" );
define( "_AM_XTUBE_VIDEO_CATIMAGE", "Categorias de Images" );
define( "_AM_XTUBE_VIDEO_SCREENSHOTS", "Imagens ScreenShot" );
define( "_AM_XTUBE_VIDEO_MAINIMAGEDIR", "Imagens principais" );
define( "_AM_XTUBE_VIDEO_FCATIMAGE", "Caminho para as categorias de imagens" );
define( "_AM_XTUBE_VIDEO_FSCREENSHOTS", "Caminho para as categorias de ScreenShot" );
define( "_AM_XTUBE_VIDEO_FMAINIMAGEDIR", "Caminho para as imagens principais" );
define( "_AM_XTUBE_VIDEO_FUPLOADIMAGETO", "Upload das Imagens: " );
define( "_AM_XTUBE_VIDEO_FUPLOADPATH", "Caminho para os Uploads: " );
define( "_AM_XTUBE_VIDEO_FUPLOADURL", "URL do Upload: " );
define( "_AM_XTUBE_VIDEO_FOLDERSELECTION", "Selecione o destino do Upload:" );
define( "_AM_XTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Exibir a imagem selecionada:" );
define( "_AM_XTUBE_VIDEO_FUPLOADIMAGE", "Subir nova imagem para o destino selecionado:" );

// Main Index defines
define( "_AM_XTUBE_MINDEX_VIDEOSUMMARY", "Sum�rio do M�dulo de Administra��o" );
define( "_AM_XTUBE_MINDEX_PUBLISHEDVIDEO", "V�deo Publicados:" );
define( "_AM_XTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "V�deo Auto-Publicados:" );
define( "_AM_XTUBE_MINDEX_AUTOEXPIRE", "V�deos Auto-Expirados:" );
define( "_AM_XTUBE_MINDEX_EXPIRED", "V�deos Expirados:" );
define( "_AM_XTUBE_MINDEX_OFFLINEVIDEO", "V�deos Offline:" );
define( "_AM_XTUBE_MINDEX_ID", "ID" );
define( "_AM_XTUBE_MINDEX_TITLE", "t�tulo do V�deo" );
define( "_AM_XTUBE_MINDEX_POSTER", "Postado por" );
define( "_AM_XTUBE_MINDEX_ONLINE", "Status" );
define( "_AM_XTUBE_MINDEX_ONLINESTATUS", "Status Online" );
define( "_AM_XTUBE_MINDEX_PUBLISH", "Publicado" );
define( "_AM_XTUBE_MINDEX_PUBLISHED", "Publicado" );
define( "_AM_XTUBE_MINDEX_EXPIRE", "Expirado" );
define( "_AM_XTUBE_MINDEX_NOTSET", "Data n�o definida" );
define( "_AM_XTUBE_MINDEX_SUBMITTED", "Data do Envio" );

define( "_AM_XTUBE_MINDEX_ACTION", "A��o" );
define( "_AM_XTUBE_MINDEX_NOVIDEOSFOUND", "NOTA: n�o h� v�deos que atendam este crit�rio" );
define( "_AM_XTUBE_MINDEX_PAGE", "<b>P�gina:<b> " );
define( '_AM_XTUBE_MINDEX_PAGEINFOTXT', '<ul><li>Detalhes da p�gina principal dos v�deos.</li><li>Voc� pode facilmente mudar a imagem de logotipo, cabe�alho, texto do cabe�alho e rodap� da p�gina principal para deixar do jeito que voc� quiser</li></ul><br />Nota: a imagem de logotipo escolhida ser� usada no m�dulo todo.' );
define( "_AM_XTUBE_MINDEX_RESPONSE", "Tempo de Resposta" );
// Submitted Links
define( "_AM_XTUBE_SUB_SUBMITTEDFILES", "V�deo Enviados" );
define( "_AM_XTUBE_SUB_FILESWAITINGINFO", "Informa��o de V�deos em Espera" );
define( "_AM_XTUBE_SUB_FILESWAITINGVALIDATION", "V�deos Aguardando Valida��o: " );
define( "_AM_XTUBE_SUB_APPROVEWAITINGFILE", "<b>Aprovar</b> a informa��o sobre novo v�deo sem valida��o." );
define( "_AM_XTUBE_SUB_EDITWAITINGFILE", "<b>Editar</b> a informa��o do novo v�deo e ent�o aprovar." );
define( "_AM_XTUBE_SUB_DELETEWAITINGFILE", "<b>Excluir</b> a informa��o do novo v�deo." );
define( "_AM_XTUBE_SUB_NOFILESWAITING", "N�o h� v�deos que atendam este crit�rio" );
define( "_AM_XTUBE_SUB_NEWFILECREATED", "Os dados do novo v�deo foram criados e a Base de Dados foi atualizada com sucesso" );
// Vote Information
define( "_AM_XTUBE_VOTE_RATINGINFOMATION", "Informa��es de Vota��o" );
define( "_AM_XTUBE_VOTE_TOTALVOTES", "Total de votos: " );
define( "_AM_XTUBE_VOTE_REGUSERVOTES", "Votos de Usu�rios Registrados: %s" );
define( "_AM_XTUBE_VOTE_ANONUSERVOTES", "Votos de Usu�rios An�nimos: %s" );
define( "_AM_XTUBE_VOTE_USER", "Usu�rio" );
define( "_AM_XTUBE_VOTE_IP", "Endere�o IP" );
define( "_AM_XTUBE_VOTE_DATE", "Enviado" );
define( "_AM_XTUBE_VOTE_RATING", "Classifica��o" );
define( "_AM_XTUBE_VOTE_NOREGVOTES", "N�o H� Votos de Usu�rios Registrados" );
define( "_AM_XTUBE_VOTE_NOUNREGVOTES", "N�o H� Votos de Usu�rios N�o Registrados" );
define( "_AM_XTUBE_VOTE_VOTEDELETED", "Dados de vota��o exclu�dos." );
define( "_AM_XTUBE_VOTE_ID", "ID" );
define( "_AM_XTUBE_VOTE_FILETITLE", "T�tulo do V�deo" );
define( "_AM_XTUBE_VOTE_DISPLAYVOTES", "Informa��o dos Dados da Vota��o" );
define( "_AM_XTUBE_VOTE_NOVOTES", "N�o h� votos de usu�rios para exibir" );
define( "_AM_XTUBE_VOTE_DELETE", "N�o h� votos de usu�rios para exibir" );
define( "_AM_XTUBE_VOTE_DELETEDSC", "A informa��o sobre a vota��o selecionada foi <b>exclu�da</b> da Base de Dados." );
define( "_AM_XTUBE_VOTEDELETED", "Voto selecionado foi removido e a Base de Dados foi atualizada" );

define( "_AM_XTUBE_VOTE_USERAVG", "Avalia��o m�dia do usu�rio" );
define( "_AM_XTUBE_VOTE_TOTALRATE", "Total de Votos" );
define( "_AM_XTUBE_VOTE_MAXRATE", "Voto m�ximo do �tem" );
define( "_AM_XTUBE_VOTE_MINRATE", "Voto m�nimo do �tem" );
define( "_AM_XTUBE_VOTE_MOSTVOTEDTITLE", "Mais Votado" );
define( "_AM_XTUBE_VOTE_LEASTVOTEDTITLE", "Menos Votado" );
define( "_AM_XTUBE_VOTE_MOSTVOTERSUID", "Votante mais ativo" );
define( "_AM_XTUBE_VOTE_REGISTERED", "Votos de Registrados" );
define( "_AM_XTUBE_VOTE_NONREGISTERED", "Votos de An�nimos" );
// Modifications
define( "_AM_XTUBE_MOD_TOTMODREQUESTS", "Total de Solicita��es de Altera��es: " );
define( "_AM_XTUBE_MOD_MODREQUESTS", "V�deos Modificados" );
define( "_AM_XTUBE_MOD_MODREQUESTSINFO", "Informa��o dos V�deos Modificados" );
define( "_AM_XTUBE_MOD_MODID", "ID" );
define( "_AM_XTUBE_MOD_MODTITLE", "T�tulo" );
define( "_AM_XTUBE_MOD_MODPOSTER", "Postador Original: " );
define( "_AM_XTUBE_MOD_DATE", "Enviado em" );
define( "_AM_XTUBE_MOD_NOMODREQUEST", "N�o h� solicita��es que atendam estes crit�rios" );
define( "_AM_XTUBE_MOD_TITLE", "T�tulo do V�deo: " );
define( "_AM_XTUBE_MOD_LID", "ID do V�deo: " );
define( "_AM_XTUBE_MOD_CID", "Categoria: " );
define( "_AM_XTUBE_MOD_URL", "Url do V�deo: " );
define( "_AM_XTUBE_MOD_PUBLISHER", "Publicador: " );
define( "_AM_XTUBE_MOD_FORUMID", "F�rum: " );
define( "_AM_XTUBE_MOD_SCREENSHOT", "Imagem ScreenShot: " );
define( "_AM_XTUBE_MOD_HOMEPAGE", "Home Page: " );
define( "_AM_XTUBE_MOD_HOMEPAGETITLE", "T�tulo da Home Page: " );
define( "_AM_XTUBE_MOD_SHOTIMAGE", "Imagem ScreenShot: " );
define( "_AM_XTUBE_MOD_DESCRIPTION", "Descri��o: " );
define( "_AM_XTUBE_MOD_MODIFYSUBMITTER", "Enviado por: " );
define( "_AM_XTUBE_MOD_MODIFYSUBMIT", "Enviado por" );
define( "_AM_XTUBE_MOD_PROPOSED", "Detalhes do V�deo Propostos" );
define( "_AM_XTUBE_MOD_ORIGINAL", "Detalhes Originais do V�deo" );
define( "_AM_XTUBE_MOD_REQDELETED", "solicita��o de Modifica��o removida da Base de Dados" );
define( "_AM_XTUBE_MOD_REQUPDATED", "O v�deo selecionado foi modificado e a Base de Dados foi atualizada com sucesso" );
define( '_AM_XTUBE_MOD_VIEW', 'View' );
// Link management
define( "_AM_XTUBE_VIDEO_ID", "ID do V�deo: " );
define( "_AM_XTUBE_VIDEO_IP", "Endere�o IP do Uploader: " );
define( "_AM_XTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Extens�es de V�deo permitidas pelo Admininstrador</b>:</div>" );
define( "_AM_XTUBE_VIDEO_MODIFYFILE", "Informa��es de Modifica��o de V�deos" );
define( "_AM_XTUBE_VIDEO_CREATENEWFILE", "Criar Novo V�deo" );
define( "_AM_XTUBE_VIDEO_TITLE", "T�tulo do V�deo: " );
define( "_AM_XTUBE_VIDEO_DLVIDID", "Video id-code: " );
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
<b>Maktoob:</b> file=http://<font color=#FF0000>m003.maktoob.com/files/23/42/95531c25b690e48a3d69966b6a33b8d2/video/131102</font>.flv (from embed-code)<br />
<b>MyTube: </b><font color=#FF0000>Take over from above selection menu</font></small>" );
define( "_AM_XTUBE_VIDEO_PICURL", "Picture url: " );
define( "_AM_XTUBE_VIDEO_PICURLNOTE", "<small>Url da Foto quando o c�digo for do Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, Maktoob ou LiveLeak</small>" );
define( "_AM_XTUBE_VIDEO_DESCRIPTION", "Descri��o do V�deo: " );
define( "_AM_XTUBE_VIDEO_CATEGORY", "Categoria Principal dos V�deos: " );
define( "_AM_XTUBE_VIDEO_FILESSTATUS", " Definir v�deo offline?<br /><br /><span style='font-weight: normal;'>o v�deo n�o ser� vis�vel a todos os usu�rios.</span>" );
define( "_AM_XTUBE_VIDEO_SETASUPDATED", " Definir Status do v�deo como Atualizado?<br /><br /><span style='font-weight: normal;'>o v�deo exibir� o �cone de Atualizado.</span>" );
define( "_AM_XTUBE_VIDEO_SHOTIMAGE", "Imagem ScreenShot do V�deo: " );
define( "_AM_XTUBE_VIDEO_DISCUSSINFORUM", "Adicionar discuss�o neste F�rum?" );
define( "_AM_XTUBE_VIDEO_PUBLISHDATE", "Data da Publica��o do V�deo:" );
define( "_AM_XTUBE_VIDEO_EXPIREDATE", "Data da Expira��o do V�deo:" );
define( "_AM_XTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Remover data da publica��o:" );
define( "_AM_XTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Remover data da Expira��o:" );
define( "_AM_XTUBE_VIDEO_PUBLISHDATESET", " Definir data da publica��o: " );
define( "_AM_XTUBE_VIDEO_SETDATETIMEPUBLISH", " Definir data/hora da publica��o" );
define( "_AM_XTUBE_VIDEO_SETDATETIMEEXPIRE", " Definir data/hora da expira��o" );
define( "_AM_XTUBE_VIDEO_SETPUBLISHDATE", "<b>Definir data da Publica��o: </b>" );
define( "_AM_XTUBE_VIDEO_SETNEWPUBLISHDATE", "<b>Definir nova data de publica��o: </b><br />Publicado em:" );
define( "_AM_XTUBE_VIDEO_SETPUBDATESETS", "<b>Escolher a data de Publica��o: </b><br />Publicar na data:" );
define( "_AM_XTUBE_VIDEO_EXPIREDATESET", " Definir data da expira��o: " );
define( "_AM_XTUBE_VIDEO_SETEXPIREDATE", "<b>Definir data da expira��o: </b>" );
define( "_AM_XTUBE_VIDEO_DELEDITMESS", "Excluir relat�rio de v�deo com problemast?<br /><br /><span style='font-weight: normal;'>Quando voc� escolhe <b>SIM</b> o Relat�rio de Problemas ser� automaticamente exclu�do e voc� confirma que o v�deo agora voltou a funcionar.</span>" );
define( "_AM_XTUBE_VIDEO_MUSTBEVALID", "A imagem de ScreenShot deve ser uma imagem de v�deo v�lida, no diret�rio %s (ex. shot.gif). Deixe em branco se n�o houver imagem dispon�vel." );
define( "_AM_XTUBE_VIDEO_EDITAPPROVE", "Aprovar v�deo:" );
define( "_AM_XTUBE_VIDEO_NEWFILEUPLOAD", "Novo V�deo criado e Base de Dados atualizada com sucesso" );
define( "_AM_XTUBE_VIDEO_FILEMODIFIEDUPDATE", "O v�deo selecionado foi modificado e a Base de Dados atualizada com sucesso" );
define( "_AM_XTUBE_VIDEO_REALLYDELETEDTHIS", "Realmente deseja excluir o v�deo selecionado?" );
define( "_AM_XTUBE_VIDEO_FILEWASDELETED", "O v�deo %s foi exclu�do da Base de Dados com sucesso!" );
define( "_AM_XTUBE_VIDEO_FILEAPPROVED", "O v�deo foi aprovado e a Base de Dados foi atualizada com sucesso" );
define( "_AM_XTUBE_VIDEO_CREATENEWSSTORY", "<b>Criar not�cia a partir do link</b>" );
define( "_AM_XTUBE_VIDEO_SUBMITNEWS", "Enviar Novo V�deo como um item de Not�cias?" );
define( "_AM_XTUBE_VIDEO_NEWSCATEGORY", "Selecione a Categoria de Not�cias para a qual ser� enviada a not�cia:" );
define( "_AM_XTUBE_VIDEO_NEWSTITLE", "T�tulo da Not�cia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Deixe em branco para usar o T�tulo do V�deo</span></div>" );
define( "_AM_XTUBE_VIDEO_PUBLISHER", "Nome do publicador do v�deo: " );

/**
 * Broken links defines
 */
define( "_AM_XTUBE_SBROKENSUBMIT", "V�deo com Problema: " );
define( "_AM_XTUBE_BROKEN_FILE", "Relato de V�deo com Problemas" );
define( "_AM_XTUBE_BROKEN_FILEIGNORED", "Relato de problema ignorado e exclu�do da Base de Dados com sucesso!" );
define( "_AM_XTUBE_BROKEN_NOWACK", "Status do reconhecimento alterado e Base de dados atualizada!" );
define( "_AM_XTUBE_BROKEN_NOWCON", "Status de confirma��o alterado e Base de dados atualizada!" );
define( "_AM_XTUBE_BROKEN_REPORTINFO", "Informa��o de Relato de V�deos com Problemas" );
define( "_AM_XTUBE_BROKEN_REPORTSNO", "Relatos de Problemas Aguardando:" );
define( "_AM_XTUBE_BROKEN_IGNOREDESC", "<b>Ignore</b> o relato e simplesmente exclua-o." );
define( "_AM_XTUBE_BROKEN_DELETEDESC", "<b>Exclua</b> o v�deo com problemas e os relatos." );
define( "_AM_XTUBE_BROKEN_EDITDESC", "<b>Edite</b> o v�deo para corrigir o problema." );
define( "_AM_XTUBE_BROKEN_ACKDESC", "<b>Reconhecimento: </b> defina o estado de reconhecimento do relato de v�deo com problemas." );
define( "_AM_XTUBE_BROKEN_CONFIRMDESC", "<b>Confirmado:</b> defina o estados de confirmado para o relato de v�deo com problemas." );
define( "_AM_XTUBE_BROKEN_ACKNOWLEDGED", "Reconhecido" );
define( "_AM_XTUBE_BROKEN_DCONFIRMED", "Confirmado" );

define( "_AM_XTUBE_BROKEN_ID", "ID" );
define( "_AM_XTUBE_BROKEN_TITLE", "T�tulo" );
define( "_AM_XTUBE_BROKEN_REPORTER", "Relator" );
define( "_AM_XTUBE_BROKEN_FILESUBMITTER", "Enviado por" );
define( "_AM_XTUBE_BROKEN_DATESUBMITTED", "Data do envio" );
define( "_AM_XTUBE_BROKEN_ACTION", "A��o" );
define( "_AM_XTUBE_BROKEN_NOFILEMATCH", "N�o h� relatos de v�deos com problemas que atendam  estes crit�rios" );
define( "_AM_XTUBE_BROKENFILEDELETED", "v�deo e relato removidos da Base de Dados" );
define( "_AM_XTUBE_BROKEN_VIDSOURCE", "C�digo do V�deo" );
/**
 * About defines
 */
define( "_AM_XTUBE_BY", "por" );
// block defines
define( "_AM_XTUBE_BADMIN", "Administra��o de blocos" );
define( "_AM_XTUBE_BLKDESC", "Descri��o" );
define( "_AM_XTUBE_TITLE", "T�tulo" );
define( "_AM_XTUBE_SIDE", "Alinhamento" );
define( "_AM_XTUBE_WEIGHT", "Peso" );
define( "_AM_XTUBE_VISIBLE", "Vis�vel" );
define( "_AM_XTUBE_ACTION", "A��o" );
define( "_AM_XTUBE_SBLEFT", "Esquerda" );
define( "_AM_XTUBE_SBRIGHT", "Direita" );
define( "_AM_XTUBE_CBLEFT", "Centro-Esquerda" );
define( "_AM_XTUBE_CBRIGHT", "Centro-Direita" );
define( "_AM_XTUBE_CBCENTER", "Centro-Meio" );
define( "_AM_XTUBE_ACTIVERIGHTS", "Direitos de Altera��o" );
define( "_AM_XTUBE_ACCESSRIGHTS", "Direitos de Acesso" );
// image admin icon
define( "_AM_XTUBE_ICO_EDIT", "Editar este Item" );
define( "_AM_XTUBE_ICO_DELETE", "Excluir este Item" );
define( "_AM_XTUBE_ICO_RESOURCE", "Editar este Recurso" );

define( "_AM_XTUBE_ICO_ONLINE", "On-line" );
define( "_AM_XTUBE_ICO_OFFLINE", "Off-line" );
define( "_AM_XTUBE_ICO_APPROVED", "Approvado" );
define( "_AM_XTUBE_ICO_NOTAPPROVED", "N�o Aprovado" );

define( "_AM_XTUBE_ICO_VIDEO", "V�deo relatado" );
define( "_AM_XTUBE_ICO_URL", "Adicionar URL Relatada" );
define( "_AM_XTUBE_ICO_ADD", "Adicionar" );
define( "_AM_XTUBE_ICO_APPROVE", "Aprovar" );
define( "_AM_XTUBE_ICO_STATS", "Estat�sticas" );
define( "_AM_XTUBE_ICO_VIEW", "Ver este Item" );

define( "_AM_XTUBE_ICO_IGNORE", "Ignorar" );
define( "_AM_XTUBE_ICO_ACK", "Reconhecimento de Relato de Problemas" );
define( "_AM_XTUBE_ICO_REPORT", "Reconher o Relato de Problemas?" );
define( "_AM_XTUBE_ICO_CONFIRM", "Relato de Problemas Confirmado" );
define( "_AM_XTUBE_ICO_CONBROKEN", "Confirma Relato de Problemas?" );
define( "_AM_XTUBE_ICO_RES", "Editar Recurso/V�deos para este Item" );
define( "_AM_XTUBE_MOD_URLRATING", "Avalia��o do Conteudo pela Internet:" );
// Alternate category
define( "_AM_XTUBE_ALTCAT_CREATEF", "Adicionar Categoria Alternativa" );
define( "_AM_XTUBE_MALTCAT", "Gerenciar Categoria Alternativa" );
define( "_AM_XTUBE_ALTCAT_MODIFYF", "Gerenciamento de Categoria Alternativa" );
define( "_AM_XTUBE_ALTCAT_INFOTEXT", "<ul><li>Categorias Alternativas podem ser adicionadas ou removidas facilmente, atrav�s deste formul�rio.</li></ul>" );
define( "_AM_XTUBE_ALTCAT_CREATED", "Categorias Alternativas oram salvas!" );

define( "_AM_XTUBE_MRESOURCES", "Gerenciamento de Recursos" );
define( "_AM_XTUBE_RES_CREATED", "Gerenciamento de Recurso" );
define( "_AM_XTUBE_RES_ID", "ID" );
define( "_AM_XTUBE_RES_DESC", "Descri��o" );
define( "_AM_XTUBE_RES_NAME", "Nome do Recurso" );
define( "_AM_XTUBE_RES_TYPE", "Tipo do Recurso" );
define( "_AM_XTUBE_RES_USER", "Usu�rio" );
define( "_AM_XTUBE_RES_CREATEF", "Adicionar Recurso" );
define( "_AM_XTUBE_RES_MODIFYF", "Modificar Recurso" );
define( "_AM_XTUBE_RES_NAMEF", "Nome do recurso:" );
define( "_AM_XTUBE_RES_DESCF", "Descri��o do recurso:" );
define( "_AM_XTUBE_RES_URLF", "URL do Recurso:" );
define( "_AM_XTUBE_RES_ITEMIDF", "ID do Item de Recurso:" );
define( "_AM_XTUBE_RES_INFOTEXT", "<ul><li>Novos recursos podem ser adicionados, editados ou removidos facilmente, atrav�s deste formul�rio.</li>
	<li>Lista todos os recursos ligados a um v�deo</li>
	<li>Modifica o nome e descri��o do recurso</li></ul>
	" );
define( "_AM_XTUBE_LISTBROKEN", "Exibe v�deos que possivelmente est�o com problemas. Obs.: Estes resultados n�o s�o precisos e devem ser considerados apenas como possibilidades.<br /><br />Por favor, primeiro cheque se o v�deo ainda existe, para depois executar qualquer a��o.<br /><br />" );
define( "_AM_XTUBE_PINGTIMES", "Exibe o primeiro tempo estimado de round ping para cada v�deo.<br /><br />Obs.: Estes resultados n�o s�o precisos e devem ser considerados apenas como uma estimativa grosseira.<br /><br />" );

define( "_AM_XTUBE_NO_FORUM", "Nenhu f�rum selecionado" );

define( "_AM_XTUBE_PERM_RATEPERMISSIONS", "Permiss�es de Avalia��es" );
define( "_AM_XTUBE_PERM_RATEPERMISSIONS_TEXT", "Selecione os grupos que podem classificar um v�deo nas categorias selecionadas." );

define( "_AM_XTUBE_PERM_AUTOPERMISSIONS", "Auto-aprovar V�deos" );
define( "_AM_XTUBE_PERM_AUTOPERMISSIONS_TEXT", "Selecione os grupos que ter�o novos v�deos auto-aprovados sem a interven��o do administrador." );

define( "_AM_XTUBE_PERM_SPERMISSIONS", "Permiss�es para Envio" );
define( "_AM_XTUBE_PERM_SPERMISSIONS_TEXT", "Selecione os grupos que podem enviar novos v�deos para as categorias selecionadas." );

define( "_AM_XTUBE_PERM_APERMISSIONS", "Grupos de Moderadores" );
define( "_AM_XTUBE_PERM_APERMISSIONS_TEXT", "Selecione os grupos que t�m privil�gios de moderador para as categorias selecionadas." );

define( "_AM_XTUBE_TIME", "Hora:" );
define( "_AM_XTUBE_KEYWORDS", "Palavras-chave:" );
define( "_AM_XTUBE_KEYWORDS_NOTE", "<i>Palavras-chave devem ser separadas com v�rgula (keyword1, keyword2).</i>" );
define("_AM_XTUBE_VIDEO_META_DESCRIPTION", "Meta-Descri��o");
define("_AM_XTUBE_VIDEO_META_DESCRIPTION_DSC", "De modo a ajudar o Mecanismos de Busca, voc� pode personalizar a meta-descri��o deste v�deo como voc� quiser. Se voc� deixar o campo vazio quando adicionar um v�deo, ele ir� ser automaticamente preenchido com o campo Sum�rio deste v�deo.");

define( "_AM_XTUBE_VIDSOURCE", "Video source:" );
define( "_AM_XTUBE_VIDSOURCE2", "Video source" );
define( "_AM_XTUBE_YOUTUBE", "YouTube" );
define( "_AM_XTUBE_METACAFE", "MetaCafe" );
define( "_AM_XTUBE_IFILM", "Spike" );
define( "_AM_XTUBE_GOOGLEVIDEO", "Google Video" );
define( "_AM_XTUBE_MYSPAVETV", "MySpace TV" );
define( "_AM_XTUBE_PHOTOBUCKET", "Photobucket" );
define( "_AM_XTUBE_DAILYMOTION", "DailyMotion" );

// Version 1.04 RC-1
define( "_AM_XTUBE_BLIPTV", "Blip.tv" );
define( "_AM_XTUBE_MYTUBE", "MyTube" );
define( "_AM_XTUBE_ICO_EXPIRE", "Expirado" );
define( "_AM_XTUBE_MMYTUBE", "Incluir Clip no MyTube" );
define( "_AM_XTUBE_VIDEO_CATVIDEOIMG", "Video imagens" );
define( "_AM_XTUBE_VIDEO_FCATVIDEOIMG", "Caminho das Imagens de Video" );
define( "_AM_XTUBE_VUPLOAD_VIDEOEXIST", "Video j� existe" );
define( "_AM_XTUBE_VUPLOAD_VIDEOUPLOAD", "Video uploaded" );
define( "_AM_XTUBE_VUPLOAD_NOVIDEOEXIST", "N�o existe Video" );
define( "_AM_XTUBE_VUPLOAD_FILEDELETED", "Video apagado" );
define( "_AM_XTUBE_VUPLOAD_FILEERRORDELETE", "Erro" );
define( "_AM_XTUBE_VUPLOAD_NOFILEERROR", "Nenhum Arquivo" );
define( "_AM_XTUBE_VUPLOAD_DELETEFILE", "Apagar o arquivo de V�deo" );
define( "_AM_XTUBE_VUPLOAD_CATVIDEO", "Arquivos de Video" );
define( "_AM_XTUBE_VUPLOAD_FCATVIDEO", "Diret�rio de Upload de Video" );
define( "_AM_XTUBE_VUPLOADS", "Video Upload" );
define( "_AM_XTUBE_VUPLOAD_FUPLOADPATH", "Caminho para o Upload de Video:" );
define( "_AM_XTUBE_VUPLOAD_FUPLOADURL", "Url de Upload do Video:" );
define( "_AM_XTUBE_VUPLOAD_FUPLOADVIDEOTO", "Upload video: " );
define( "_AM_XTUBE_VUPLOAD_FOLDERSELECTION", "Escolha o destino deste Upload" );
define( "_AM_XTUBE_VUPLOAD_FUPLOADVIDEO", "Video para upload" );
define( "_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Escolha um arquivo de V�deo" );
define( "_AM_XTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "Arquivo de v�deo deve ser do tipo FLV" );
define( "_AM_XTUBE_BDELETEVIDEO", "Apager v�deo" );
define( "_AM_XTUBE_NOVIDEO", "N�o Mostrar o Video" );
define( "_AM_XTUBE_NOIMAGE", "N�o Mostrar a Imagem" );
define( "_AM_XTUBE_NOSELECT", "Nada foi Selecionado" );
define( "_AM_XTUBE_NOFILESELECT", "Nenhum arquivo selecionado" );
define( "_AM_XTUBE_MYTUBEVIDEO", "Arquivo de V�deo MyTube:" );
define( "_AM_XTUBE_WARNINSTALL4", "<b>ADVERT�NCIA:</b> <u>Pasta</u> %s n�o tem permiss�es de escrita. <br />Esta pasta precisa de permiss�es de escrita (CHMOD 777) para o MyTube trabalhar corretamente." );
define( "_AM_XTUBE_CATSPONSOR", "Escolha uma categoria de Patrocinador:" );
define( "_AM_XTUBE_CATSPONSORDSC", "Se voc� selecionar um c�digo de cliente de banner a partir do formul�rio abaixo n�o ser�o salvos!" );
define( "_AM_XTUBE_BANNER", "Banner" );
define( "_AM_XTUBE_FBANNER", "Banner" );
define( "_AM_XTUBE_BANNERID", "Escolha um c�digo de Banner:" );
define( "_AM_XTUBE_BANNERIDDSC", "Se voc� tiver selecionado um cliente, sob a forma acima do c�digo do banner n�o ser�o salvos!" );
// Uploader class
define( "_AM_XTUBE_READWRITEERROR", "Voc� n�o escolheu um arquivo para fazer o upload ou o servidor n�o tem permiss�es suficientes para ler/escrever para carregar este arquivo!" );
define( "_AM_XTUBE_INVALIDFILESIZE", "Tamanho do Arquivo Inv�lido" );
define( "_AM_XTUBE_FILENAMEEMPTY", "Nome do arquivo est� vazio" );
define( "_AM_XTUBE_NOFILEUPLOAD", "Nenhum arquivo uploaded, isto � um erro" );
define( "_AM_XTUBE_UPLOADERRORZERO", "Houve um problema com seu upload. Erro: 0" );
define( "_AM_XTUBE_UPLOADERRORONE", "O arquivo que voc� est� tentando carregar � muito grande. Erro: 1" );
define( "_AM_XTUBE_UPLOADERRORTWO", "O arquivo que voc� est� tentando carregar � muito grande. Erro: 2" );
define( "_AM_XTUBE_UPLOADERRORTHREE", "O arquivo que voc� est� tentando carregar apenas foi parcialmente processado. Erro: 3" );
define( "_AM_XTUBE_UPLOADERRORFOUR", "Nenhum arquivo selecionado para upload. Erro: 4" );
define( "_AM_XTUBE_UPLOADERRORFIVE", "Nenhum arquivo selecionado para upload. Erro: 5" );
define( "_AM_XTUBE_NOUPLOADDIR", "Diret�rio de Upload n�o definido" );
define( "_AM_XTUBE_FAILOPENDIR", "Falha na abertura diret�rio: " );
define( "_AM_XTUBE_FAILOPENDIRWRITEPERM", "Falha na abertura diret�rio com permiss�o escrita: " );
define( "_AM_XTUBE_FILESIZEMAXSIZE", "Tamanho do arquivo: %u. O tamanho m�ximo permitido: %u" );
define( "_AM_XTUBE_FILESIZEMAXWIDTH", "Largura do Arquivo: %u. Largura m�xima permitida: %u" );
define( "_AM_XTUBE_FILESIZEMAXHEIGHT", "Altura do arquivo: %u. A altura m�xima permitida: %u" );
define( "_AM_XTUBE_MIMENOTALLOW", "MIME type N�o � permitido: " );
define( "_AM_XTUBE_FAILEDUPLOADING", "Falhou ao carregar o arquivo: " );
define( "_AM_XTUBE_ALREADYEXISTTRYAGAIN", " J� existe no servidor. Por favor, renomear esse arquivo e tentar novamente.<br />" );
define( "_AM_XTUBE_ERRORSRETURNUPLOAD", "<h4>Erros retornados ao fazer o upload</h4>" );
define( "_AM_XTUBE_DOESNOTEXIST", " n�o existe!" );

// Version 1.04 RC-2
define( "_AM_XTUBE_CLIPFISH", "ClipFish" );
define( "_AM_XTUBE_LIVELEAK", "LiveLeak" );
define( '_AM_XTUBE_MAKTOOB', 'Maktoob' );
define( "_AM_XTUBE_FILE", "Arquivo " );
define( "_AM_XTUBE_INFORMATION", "Video Information" );
define( "_AM_XTUBE_VIDEO_DLVIDIDDSC", "Take over red part as given in the examples below" );
define( "_AM_XTUBE_VIDEO_VIEWS", "Views: " );
define( "_AM_XTUBE_ERROR_CATISCAT", "You can NOT set a category as a sub-category of itself!" );
//define( "_AM_XTUBE_VIDEO_DLURL", "C�digo do V�deo Embedded: " ); //Verificando remo��o...
//define( "_AM_XTUBE_VIDEO_DLURL_NOTE", "<small>(video embedded code = http://www.youtube.com/watch?v=<font color=#FF0000>IsOtq-qCqZ4</font>)</small>" ); //Verificando remo��o...
//define( "_AM_XTUBE_VIDEO_DIRCA", " Avalia��o do Conte�do pela internet: " ); //Verificando remo��o...
?>