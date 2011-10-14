<?php
/**
 * $Id: admin.php 2758 2008-06-11 16:40:26Z gibaphp $
 * Module: MyTube
 * Author:  mcdonald
 * Language: Portuguesebr
 * Translator: GibaPhp - http://br.impresscms.org
 * Licence: GNU
 */

define( "_AM_MYTUBE_WARNINSTALL1", "AVISO: o diretório %s já existe no seu servidor. <br />Por favor, por razõe de segurança, remova antes este diretório." );
define( "_AM_MYTUBE_WARNINSTALL2", "AVISO: o arquivo %s já existe no seu servidor. <br />Por favor, por razõe de segurança, remova antes este arquivo." );
define( "_AM_MYTUBE_WARNINSTALL3", "AVISO: a pasta %s não existe em seu servidor. <br />Esta pasta é necessária para o funcionamento do MyTube." );

define( "_AM_MYTUBE_MODULE_NAME", "MyTube" );

define( "_AM_MYTUBE_BMODIFY", "Alterar" );
define( "_AM_MYTUBE_BDELETE", "Excluir" );
define( "_AM_MYTUBE_BCREATE", "Criar" );
define( "_AM_MYTUBE_BADD", "Incluir" );
define( "_AM_MYTUBE_BAPPROVE", "Aprovar" );
define( "_AM_MYTUBE_BIGNORE", "Ignorar" );
define( "_AM_MYTUBE_BCANCEL", "Cancelar" );
define( "_AM_MYTUBE_BSAVE", "Salvar" );
define( "_AM_MYTUBE_BRESET", "Limpar" );
define( "_AM_MYTUBE_BMOVE", "Mover Vídeos" );
define( "_AM_MYTUBE_BUPLOAD", "Enviar" );
define( "_AM_MYTUBE_BDELETEIMAGE", "Excluir imagem selecionada" );
define( "_AM_MYTUBE_BRETURN", "Retornar onde você estava!" );
define( "_AM_MYTUBE_DBERROR", "Erro de acesso a Base de Dados" );
// Other Options
define( "_AM_MYTUBE_TEXTOPTIONS", "Opções de Texto:" );
define( "_AM_MYTUBE_DISABLEHTML", " Desabilitar tags HTML" );
define( "_AM_MYTUBE_DISABLESMILEY", " Desabilitar Ícones Smilie" );
define( "_AM_MYTUBE_DISABLEXCODE", " Desabilitar xCode" );
define( "_AM_MYTUBE_DISABLEIMAGES", " Desabilitar Imagens" );
define( "_AM_MYTUBE_DISABLEBREAK", " Usar conversão de quebra de linha xCode?" );
define( "_AM_MYTUBE_UPLOADFILE", "Vídeo enviado corretamente" );
define( "_AM_MYTUBE_NOMENUITEMS", "Não há ítens no menu" );
// Admin Bread crumb
define( "_AM_MYTUBE_PREFS", "Preferências" );
define( "_AM_MYTUBE_BUPDATE", "Atualização do Módulo" );
define( "_AM_MYTUBE_BINDEX", "Página Principal" );
define( "_AM_MYTUBE_BPERMISSIONS", "Permissões" );
// define( "_AM_MYTUBE_BLOCKADMIN", "Blocks" );
define( "_AM_MYTUBE_BLOCKADMIN", "Ajustes dos Blocos" );
define( "_AM_MYTUBE_GOMODULE", "Ir para o módulo" );
define( "_AM_MYTUBE_ABOUT", "Sobre o módulo" );
// Admin Summary
define( "_AM_MYTUBE_SCATEGORY", "Categoria: " );
define( "_AM_MYTUBE_SFILES", "Vídeos: " );
define( "_AM_MYTUBE_SNEWFILESVAL", "Enviado em: " );
define( "_AM_MYTUBE_SMODREQUEST", "Modificado em: " );
define( "_AM_MYTUBE_SREVIEWS", "Acessos: " );

// Admin Main Menu
define( "_AM_MYTUBE_MCATEGORY", "Gestor de Categorias" );
define( "_AM_MYTUBE_MVIDEOS", "Gestor de Vídeos" );
define( "_AM_MYTUBE_MLISTBROKEN", "Vídeo com Problemas" );
define( "_AM_MYTUBE_MLISTPINGTIMES", "Lista de Links Pingtime" );
define( "_AM_MYTUBE_INDEXPAGE", "Gerência da Páginal Principal" );
define( "_AM_MYTUBE_MCOMMENTS", "Comentários" );
define( "_AM_MYTUBE_MVOTEDATA", "Dados de Votação" );
define( "_AM_MYTUBE_MUPLOADS", "Upload de Imagens" );

// Catgeory defines
define( "_AM_MYTUBE_CCATEGORY_CREATENEW", "Criar Nova Categoria" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY", "Modificar Categoria" );
define( "_AM_MYTUBE_CCATEGORY_MOVE", "Mover Vídeos de Categoria" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_TITLE", "Título da Categoria:" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_FAILED", "Falhou ao mover vídeos: não pôde mover para esta categoria" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_FAILEDT", "Falhou ao mover vídeos: não pôde encontrar esta categoria" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_MOVED", "Vídeos movidos e categoria excluída" );
define( "_AM_MYTUBE_CCATEGORY_CREATED", "Nova categoria criada e Base de Dados atualizada com sucesso" );
define( "_AM_MYTUBE_CCATEGORY_MODIFIED", "A categoria selecionada foi modificada e a Base de Dados atualizada com sucesso" );
define( "_AM_MYTUBE_CCATEGORY_DELETED", "A categoria selecionada foi excluída e a Base de Dados atualizada com sucesso" );
define( "_AM_MYTUBE_CCATEGORY_AREUSURE", "ADVERTÊNCIA: você tem certeza de que quer excluir esta Categoria e TODAS as informações dos vídeos e os comentários?" );
define( "_AM_MYTUBE_CCATEGORY_NOEXISTS", "Você deve criar pelo menos uma Categoria, antes de poder Incluir um novo vídeo" );
define( "_AM_MYTUBE_FCATEGORY_GROUPPROMPT", "Premissões de Acesso às Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos de usuários que terão acesso a esta categoria.</span></div>" );
define( "_AM_MYTUBE_FCATEGORY_SUBGROUPPROMPT", "Premissões de Envio às Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos de usuários que terão permissão para enviar novos vídeos para esta categoria.</span></div>" );
define( "_AM_MYTUBE_FCATEGORY_MODGROUPPROMPT", "Premissões de Moderação das Categorias:<div style='padding-top: 8px;'><span style='font-weight: normal;'>Selecione os grupos de usuários que terão permissão para moderar esta categoria.</span></div>" );

define( "_AM_MYTUBE_FCATEGORY_TITLE", "Título da Categoria:" );
define( "_AM_MYTUBE_FCATEGORY_WEIGHT", "Peso da Categoria:" );
define( "_AM_MYTUBE_FCATEGORY_SUBCATEGORY", "Defina como Sub-Categoria de:" );
define( "_AM_MYTUBE_FCATEGORY_CIMAGE", "Selecione uma imagem para a Categoria:" );
define( "_AM_MYTUBE_FCATEGORY_DESCRIPTION", "Defina a descrição da Categoria:" );
define( "_AM_MYTUBE_FCATEGORY_SUMMARY", "Defina o sumário da Categoria:" );
/**
 * Index page Defines
 */
define( "_AM_MYTUBE_IPAGE_UPDATED", "Página Principal modificada e a Base de Dados foi atualizada com sucesso!" );
define( "_AM_MYTUBE_IPAGE_INFORMATION", "Informações da Página Principal" );
define( "_AM_MYTUBE_IPAGE_MODIFY", "Modificar Página Principal" );
define( "_AM_MYTUBE_IPAGE_CIMAGE", "Selecione uma imagem para a Página Principal:" );
define( "_AM_MYTUBE_IPAGE_CTITLE", "Título da Página Principal:" );
define( "_AM_MYTUBE_IPAGE_CHEADING", "Cabeçalho da Página Principal:" );
define( "_AM_MYTUBE_IPAGE_CHEADINGA", "Alinhamento do cabeçalho da Página Principal:" );
define( "_AM_MYTUBE_IPAGE_CFOOTER", "Rodapé da Página Principal:" );
define( "_AM_MYTUBE_IPAGE_CFOOTERA", "Alinhamento do rodapé da Página Principal:" );
define( "_AM_MYTUBE_IPAGE_CLEFT", "Alinhar a Esquerda" );
define( "_AM_MYTUBE_IPAGE_CCENTER", "Centralizar" );
define( "_AM_MYTUBE_IPAGE_CRIGHT", "Alinhar a Direita" );
/**
 * Permissions defines
 */
define( "_AM_MYTUBE_PERM_MANAGEMENT", "Gerência de Permissões" );
define( "_AM_MYTUBE_PERM_PERMSNOTE", "<div><b>NOTA:</b> Por favor, esteja ciente de que mesmo que você ajuste corretamente aqui as permissões de visualização, um grupo pode não ver os vídeos ou blocos se você não der também ao grupo permissão para acessar o módulo. Para fazer isso, vá em <b>System > Grupos</b>, escolha o grupo apropriado e clique nos checkboxes que permitem esse acesso.</div>" );
define( "_AM_MYTUBE_PERM_CPERMISSIONS", "Permissões das Categorias" );
define( "_AM_MYTUBE_PERM_CSELECTPERMISSIONS", "Selecione as categorias que cada grupo tem permissão de ver" );
define( "_AM_MYTUBE_PERM_CNOCATEGORY", "Não pôde definir as permissões: ainda não foi criada nenhuma Categoria!" );
define( "_AM_MYTUBE_PERM_FPERMISSIONS", "Permissões de Vídeo" );
define( "_AM_MYTUBE_PERM_FNOFILES", "Não pôde definir as permissões: ainda não foi criado nenhum vídeo!" );
define( "_AM_MYTUBE_PERM_FSELECTPERMISSIONS", "Selecione os vídeos que cada grupo tem permissão de ver" );
/**
 * Upload defines
 */
define( "_AM_MYTUBE_VIDEO_IMAGEUPLOAD", "Imagem enviada com suceso ao seu destino no servidor" );
define( "_AM_MYTUBE_VIDEO_NOIMAGEEXIST", "Erro: nenhum vídeo foi selecionado para upload. Por favor, tente novamente!" );
define( "_AM_MYTUBE_VIDEO_IMAGEEXIST", "A Imagem já existe na área de upload!" );
define( "_AM_MYTUBE_VIDEO_FILEDELETED", "O Vídeo foi excluído." );
define( "_AM_MYTUBE_VIDEO_FILEERRORDELETE", "Erro ao excluir Vídeo: vídeo não foi encontrado no servidor." );
define( "_AM_MYTUBE_VIDEO_NOFILEERROR", "Erro ao ao excluir Vídeo: nenhum vídeo foi selecionado para exclusão." );
define( "_AM_MYTUBE_VIDEO_DELETEFILE", "ADVERTÊNCIA: você tem certeza de que quer excluir este link de Imagem?" );
define( "_AM_MYTUBE_VIDEO_IMAGEINFO", "Status do Servidor" );
define( "_AM_MYTUBE_VIDEO_SPHPINI", "<b>Informação obtida do PHP ini Link:</b>" );
define( "_AM_MYTUBE_VIDEO_SAFEMODESTATUS", "Status do Modo Seguro: " );
define( "_AM_MYTUBE_VIDEO_REGISTERGLOBALS", "Registros Globais: " );
define( "_AM_MYTUBE_VIDEO_SERVERUPLOADSTATUS", "Status de Upload do Servidor: " );
define( "_AM_MYTUBE_VIDEO_MAXUPLOADSIZE", "Tamanho Máximo de arquivos para upload: " );
define( "_AM_MYTUBE_VIDEO_MAXPOSTSIZE", "Tamanho máximo permitido para uma mensagem/envio: " );
define( "_AM_MYTUBE_VIDEO_SAFEMODEPROBLEMS", " (isto pode causar problemas)" );
define( "_AM_MYTUBE_VIDEO_GDLIBSTATUS", "Suporte a biblioteca GD: " );
define( "_AM_MYTUBE_VIDEO_GDLIBVERSION", "Versão do biblioteca GD: " );
define( "_AM_MYTUBE_VIDEO_GDON", "<b>Habilitado</b> (Thumbs Nails disponível)" );
define( "_AM_MYTUBE_VIDEO_GDOFF", "<b>Desabilitado</b> (Thumb Nails indisponível)" );
define( "_AM_MYTUBE_VIDEO_OFF", "<b>Desligado</b>" );
define( "_AM_MYTUBE_VIDEO_ON", "<b>Ligado</b>" );
define( "_AM_MYTUBE_VIDEO_CATIMAGE", "Categorias de Images" );
define( "_AM_MYTUBE_VIDEO_SCREENSHOTS", "Imagens ScreenShot" );
define( "_AM_MYTUBE_VIDEO_MAINIMAGEDIR", "Imagens principais" );
define( "_AM_MYTUBE_VIDEO_FCATIMAGE", "Caminho para as categorias de imagens" );
define( "_AM_MYTUBE_VIDEO_FSCREENSHOTS", "Caminho para as categorias de ScreenShot" );
define( "_AM_MYTUBE_VIDEO_FMAINIMAGEDIR", "Caminho para as imagens principais" );
define( "_AM_MYTUBE_VIDEO_FUPLOADIMAGETO", "Upload das Imagens: " );
define( "_AM_MYTUBE_VIDEO_FUPLOADPATH", "Caminho para os Uploads: " );
define( "_AM_MYTUBE_VIDEO_FUPLOADURL", "URL do Upload: " );
define( "_AM_MYTUBE_VIDEO_FOLDERSELECTION", "Selecione o destino do Upload:" );
define( "_AM_MYTUBE_VIDEO_FSHOWSELECTEDIMAGE", "Exibir a imagem selecionada:" );
define( "_AM_MYTUBE_VIDEO_FUPLOADIMAGE", "Subir nova imagem para o destino selecionado:" );

// Main Index defines
define( "_AM_MYTUBE_MINDEX_VIDEOSUMMARY", "Sumário do Módulo de Administração" );
define( "_AM_MYTUBE_MINDEX_PUBLISHEDVIDEO", "Vídeo Publicados:" );
define( "_AM_MYTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "Vídeo Auto-Publicados:" );
define( "_AM_MYTUBE_MINDEX_AUTOEXPIRE", "Vídeos Auto-Expirados:" );
define( "_AM_MYTUBE_MINDEX_EXPIRED", "Vídeos Expirados:" );
define( "_AM_MYTUBE_MINDEX_OFFLINEVIDEO", "Vídeos Offline:" );
define( "_AM_MYTUBE_MINDEX_ID", "ID" );
define( "_AM_MYTUBE_MINDEX_TITLE", "título do Vídeo" );
define( "_AM_MYTUBE_MINDEX_POSTER", "Enviado por" );
define( "_AM_MYTUBE_MINDEX_ONLINE", "Status" );
define( "_AM_MYTUBE_MINDEX_ONLINESTATUS", "Status Online" );
define( "_AM_MYTUBE_MINDEX_PUBLISH", "Publicado" );
define( "_AM_MYTUBE_MINDEX_PUBLISHED", "Publicado" );
define( "_AM_MYTUBE_MINDEX_EXPIRE", "Expirado" );
define( "_AM_MYTUBE_MINDEX_NOTSET", "Data não definida" );
define( "_AM_MYTUBE_MINDEX_SUBMITTED", "Data do Envio" );

define( "_AM_MYTUBE_MINDEX_ACTION", "Ação" );
define( "_AM_MYTUBE_MINDEX_NOVIDEOSFOUND", "NOTA: não há vídeos que atendam este critério" );
define( "_AM_MYTUBE_MINDEX_PAGE", "<b>Página:<b> " );
define( '_AM_MYTUBE_MINDEX_PAGEINFOTXT', '<ul><li>Detalhes da página principal dos vídeos.</li><li>Você pode facilmente mudar a imagem de logotipo, cabeçalho, texto do cabeçalho e rodapé da página principal para deixar do jeito que você quiser</li></ul><br />Nota: a imagem de logotipo escolhida será usada no módulo todo.' );
define( "_AM_MYTUBE_MINDEX_RESPONSE", "Tempo de Resposta" );
// Submitted Links
define( "_AM_MYTUBE_SUB_SUBMITTEDFILES", "Vídeo Enviados" );
define( "_AM_MYTUBE_SUB_FILESWAITINGINFO", "Informação de Vídeos em Espera" );
define( "_AM_MYTUBE_SUB_FILESWAITINGVALIDATION", "Vídeos Aguardando Validação: " );
define( "_AM_MYTUBE_SUB_APPROVEWAITINGFILE", "<b>Aprovar</b> a informação sobre novo vídeo sem validação." );
define( "_AM_MYTUBE_SUB_EDITWAITINGFILE", "<b>Editar</b> a informação do novo vídeo e então aprovar." );
define( "_AM_MYTUBE_SUB_DELETEWAITINGFILE", "<b>Excluir</b> a informação do novo vídeo." );
define( "_AM_MYTUBE_SUB_NOFILESWAITING", "Não há vídeos que atendam este critério" );
define( "_AM_MYTUBE_SUB_NEWFILECREATED", "Os dados do novo vídeo foram criados e a Base de Dados foi atualizada com sucesso" );
// Vote Information
define( "_AM_MYTUBE_VOTE_RATINGINFOMATION", "Informações de Votação" );
define( "_AM_MYTUBE_VOTE_TOTALVOTES", "Total de votos: " );
define( "_AM_MYTUBE_VOTE_REGUSERVOTES", "Votos de Usuários Registrados: %s" );
define( "_AM_MYTUBE_VOTE_ANONUSERVOTES", "Votos de Usuários Anônimos: %s" );
define( "_AM_MYTUBE_VOTE_USER", "Usuário" );
define( "_AM_MYTUBE_VOTE_IP", "Endereço IP" );
define( "_AM_MYTUBE_VOTE_DATE", "Enviado" );
define( "_AM_MYTUBE_VOTE_RATING", "Classificação" );
define( "_AM_MYTUBE_VOTE_NOREGVOTES", "Não Há Votos de Usuários Registrados" );
define( "_AM_MYTUBE_VOTE_NOUNREGVOTES", "Não Há Votos de Usuários Não Registrados" );
define( "_AM_MYTUBE_VOTE_VOTEDELETED", "Dados de votação excluídos." );
define( "_AM_MYTUBE_VOTE_ID", "ID" );
define( "_AM_MYTUBE_VOTE_FILETITLE", "Título do Vídeo" );
define( "_AM_MYTUBE_VOTE_DISPLAYVOTES", "Informação dos Dados da Votação" );
define( "_AM_MYTUBE_VOTE_NOVOTES", "Não há votos de usuários para exibir" );
define( "_AM_MYTUBE_VOTE_DELETE", "Não há votos de usuários para exibir" );
define( "_AM_MYTUBE_VOTE_DELETEDSC", "A informação sobre a votação selecionada foi <b>excluída</b> da Base de Dados." );
define( "_AM_MYTUBE_VOTEDELETED", "Voto selecionado foi removido e a Base de Dados foi atualizada" );

define( "_AM_MYTUBE_VOTE_USERAVG", "Avaliação média do usuário" );
define( "_AM_MYTUBE_VOTE_TOTALRATE", "Total de Votos" );
define( "_AM_MYTUBE_VOTE_MAXRATE", "Voto máximo do ítem" );
define( "_AM_MYTUBE_VOTE_MINRATE", "Voto mínimo do ítem" );
define( "_AM_MYTUBE_VOTE_MOSTVOTEDTITLE", "Mais Votado" );
define( "_AM_MYTUBE_VOTE_LEASTVOTEDTITLE", "Menos Votado" );
define( "_AM_MYTUBE_VOTE_MOSTVOTERSUID", "Votante mais ativo" );
define( "_AM_MYTUBE_VOTE_REGISTERED", "Votos de Registrados" );
define( "_AM_MYTUBE_VOTE_NONREGISTERED", "Votos de Anônimos" );
// Modifications
define( "_AM_MYTUBE_MOD_TOTMODREQUESTS", "Total de Solicitações de Alterações: " );
define( "_AM_MYTUBE_MOD_MODREQUESTS", "Vídeos Modificados" );
define( "_AM_MYTUBE_MOD_MODREQUESTSINFO", "Informação dos Vídeos Modificados" );
define( "_AM_MYTUBE_MOD_MODID", "ID" );
define( "_AM_MYTUBE_MOD_MODTITLE", "Título" );
define( "_AM_MYTUBE_MOD_MODPOSTER", "Publicador Original: " );
define( "_AM_MYTUBE_MOD_DATE", "Enviado em" );
define( "_AM_MYTUBE_MOD_NOMODREQUEST", "Não há solicitações que atendam estes critérios" );
define( "_AM_MYTUBE_MOD_TITLE", "Título do Vídeo: " );
define( "_AM_MYTUBE_MOD_LID", "ID do Vídeo: " );
define( "_AM_MYTUBE_MOD_CID", "Categoria: " );
define( "_AM_MYTUBE_MOD_URL", "Url do Vídeo: " );
define( "_AM_MYTUBE_MOD_PUBLISHER", "Publicador: " );
define( "_AM_MYTUBE_MOD_SCREENSHOT", "Imagem ScreenShot: " );
define( "_AM_MYTUBE_MOD_DESCRIPTION", "Descrição: " );
define( "_AM_MYTUBE_MOD_MODIFYSUBMITTER", "Enviado por: " );
define( "_AM_MYTUBE_MOD_MODIFYSUBMIT", "Enviado por" );
define( "_AM_MYTUBE_MOD_PROPOSED", "Detalhes do Vídeo Propostos" );
define( "_AM_MYTUBE_MOD_ORIGINAL", "Detalhes Originais do Vídeo" );
define( "_AM_MYTUBE_MOD_REQDELETED", "solicitação de Modificação removida da Base de Dados" );
define( "_AM_MYTUBE_MOD_REQUPDATED", "O vídeo selecionado foi modificado e a Base de Dados foi atualizada com sucesso" );
define( '_AM_MYTUBE_MOD_VIEW', 'Ver' );
// Link management
define( "_AM_MYTUBE_VIDEO_ID", "ID do Vídeo: " );
define( "_AM_MYTUBE_VIDEO_IP", "Endereço IP do Uploader: " );
define( "_AM_MYTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>Extensões de Vídeo permitidas pelo Admininstrador</b>:</div>" );
define( "_AM_MYTUBE_VIDEO_MODIFYFILE", "Informações de Modificação de Vídeos" );
define( "_AM_MYTUBE_VIDEO_CREATENEWFILE", "Criar Novo Vídeo" );
define( "_AM_MYTUBE_VIDEO_TITLE", "Título do Vídeo: " );
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
define( "_AM_MYTUBE_VIDEO_PICURL", "Url da Imagem: " );
define( "_AM_MYTUBE_VIDEO_PICURLNOTE", "<small>Url da Foto quando o código for do Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Megavideo, Viddler, Maktoob ou National Geographic.</small>" );
define( "_AM_MYTUBE_VIDEO_DESCRIPTION", "Descrição do Vídeo: " );
define( "_AM_MYTUBE_VIDEO_CATEGORY", "Categoria Principal dos Vídeos: " );
define( "_AM_MYTUBE_VIDEO_FILESSTATUS", " Definir vídeo offline?<br /><br /><span style='font-weight: normal;'>o vídeo não será visível a todos os usuários.</span>" );
define( "_AM_MYTUBE_VIDEO_SETASUPDATED", " Definir Status do vídeo como Atualizado?<br /><br /><span style='font-weight: normal;'>o vídeo exibirá o ícone de Atualizado.</span>" );
define( "_AM_MYTUBE_VIDEO_SHOTIMAGE", "Imagem ScreenShot do Vídeo: " );
define( "_AM_MYTUBE_VIDEO_DISCUSSINFORUM", "Incluir discussão neste Fórum?" );
define( "_AM_MYTUBE_VIDEO_PUBLISHDATE", "Data da Publicação do Vídeo:" );
define( "_AM_MYTUBE_VIDEO_EXPIREDATE", "Data da Expiração do Vídeo:" );
define( "_AM_MYTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />Remover data da publicação:" );
define( "_AM_MYTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />Remover data da Expiração:" );
define( "_AM_MYTUBE_VIDEO_PUBLISHDATESET", " Definir data da publicação: " );
define( "_AM_MYTUBE_VIDEO_SETDATETIMEPUBLISH", " Definir data/hora da publicação" );
define( "_AM_MYTUBE_VIDEO_SETDATETIMEEXPIRE", " Definir data/hora da expiração" );
define( "_AM_MYTUBE_VIDEO_SETPUBLISHDATE", "<b>Definir data da Publicação: </b>" );
define( "_AM_MYTUBE_VIDEO_SETNEWPUBLISHDATE", "<b>Definir nova data de publicação: </b><br />Publicado em:" );
define( "_AM_MYTUBE_VIDEO_SETPUBDATESETS", "<b>Escolher a data de Publicação: </b><br />Publicar na data:" );
define( "_AM_MYTUBE_VIDEO_EXPIREDATESET", " Definir data da expiração: " );
define( "_AM_MYTUBE_VIDEO_SETEXPIREDATE", "<b>Definir data da expiração: </b>" );
define( "_AM_MYTUBE_VIDEO_DELEDITMESS", "Excluir relatório de vídeo com problemast?<br /><br /><span style='font-weight: normal;'>Quando você escolhe <b>SIM</b> o Relatório de Problemas será automaticamente excluído e você confirma que o vídeo agora voltou a funcionar.</span>" );
define( "_AM_MYTUBE_VIDEO_MUSTBEVALID", "A imagem de ScreenShot deve ser uma imagem de vídeo válida, no diretório %s (ex. shot.gif). Deixe em branco se não houver imagem disponível." );
define( "_AM_MYTUBE_VIDEO_EDITAPPROVE", "Aprovar vídeo:" );
define( "_AM_MYTUBE_VIDEO_NEWFILEUPLOAD", "Novo Vídeo criado e Base de Dados atualizada com sucesso" );
define( "_AM_MYTUBE_VIDEO_FILEMODIFIEDUPDATE", "O vídeo selecionado foi modificado e a Base de Dados atualizada com sucesso" );
define( "_AM_MYTUBE_VIDEO_REALLYDELETEDTHIS", "Realmente deseja excluir o vídeo selecionado?" );
define( "_AM_MYTUBE_VIDEO_FILEWASDELETED", "O vídeo %s foi excluído da Base de Dados com sucesso!" );
define( "_AM_MYTUBE_VIDEO_FILEAPPROVED", "O vídeo foi aprovado e a Base de Dados foi atualizada com sucesso" );
define( "_AM_MYTUBE_VIDEO_CREATENEWSSTORY", "<b>Criar notícia a partir do link</b>" );
define( "_AM_MYTUBE_VIDEO_SUBMITNEWS", "Enviar Novo Vídeo como um item de Notícias?" );
define( "_AM_MYTUBE_VIDEO_NEWSCATEGORY", "Selecione a Categoria de Notícias para a qual será enviada a notícia:" );
define( "_AM_MYTUBE_VIDEO_NEWSTITLE", "Título da Notícia:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>Deixe em branco para usar o Título do Vídeo</span></div>" );
define( "_AM_MYTUBE_VIDEO_PUBLISHER", "Nome do publicador do vídeo: " );

/**
 * Broken links defines
 */
define( "_AM_MYTUBE_SBROKENSUBMIT", "Vídeo com Problema: " );
define( "_AM_MYTUBE_BROKEN_FILE", "Relatório de Vídeo com Problemas" );
define( "_AM_MYTUBE_BROKEN_FILEIGNORED", "Relatório de Video com problema ignorado e excluído da Base de Dados com sucesso!" );
define( "_AM_MYTUBE_BROKEN_NOWACK", "Status do reconhecimento alterado e Base de dados atualizada!" );
define( "_AM_MYTUBE_BROKEN_NOWCON", "Status de confirmação alterado e Base de dados atualizada!" );
define( "_AM_MYTUBE_BROKEN_REPORTINFO", "Informação de Relato de Vídeos com Problemas" );
define( "_AM_MYTUBE_BROKEN_REPORTSNO", "Relatos de Problemas Aguardando:" );
define( "_AM_MYTUBE_BROKEN_IGNOREDESC", "<b>Ignorar</b> o relato e simplesmente exclua-o." );
define( "_AM_MYTUBE_BROKEN_DELETEDESC", "<b>Excluir</b> o vídeo com problemas e os relatos." );
define( "_AM_MYTUBE_BROKEN_EDITDESC", "<b>Editar</b> o vídeo para corrigir o problema." );
define( "_AM_MYTUBE_BROKEN_ACKDESC", "<b>Reconhecimento: </b> defina o estado de reconhecimento do relato de vídeo com problemas." );
define( "_AM_MYTUBE_BROKEN_CONFIRMDESC", "<b>Confirmado:</b> defina o estados de confirmado para o relato de vídeo com problemas." );
define( "_AM_MYTUBE_BROKEN_ACKNOWLEDGED", "Reconhecido" );
define( "_AM_MYTUBE_BROKEN_DCONFIRMED", "Confirmado" );

define( "_AM_MYTUBE_BROKEN_ID", "ID" );
define( "_AM_MYTUBE_BROKEN_TITLE", "Título" );
define( "_AM_MYTUBE_BROKEN_REPORTER", "Relator" );
define( "_AM_MYTUBE_BROKEN_FILESUBMITTER", "Enviado por" );
define( "_AM_MYTUBE_BROKEN_DATESUBMITTED", "Data do envio" );
define( "_AM_MYTUBE_BROKEN_ACTION", "Ação" );
define( "_AM_MYTUBE_BROKEN_NOFILEMATCH", "Não há relatórios de vídeos com problemas que atendam estes critérios" );
define( "_AM_MYTUBE_BROKENFILEDELETED", "vídeo e relatório removidos da Base de Dados" );
define( "_AM_MYTUBE_BROKEN_VIDSOURCE", "Código do Vídeo" );
/**
 * About defines
 */
define( "_AM_MYTUBE_BY", "por" );
// block defines
define( "_AM_MYTUBE_BADMIN", "Administração de blocos" );
define( "_AM_MYTUBE_BLKDESC", "Descrição" );
define( "_AM_MYTUBE_TITLE", "Título" );
define( "_AM_MYTUBE_SIDE", "Alinhamento" );
define( "_AM_MYTUBE_WEIGHT", "Peso" );
define( "_AM_MYTUBE_VISIBLE", "Visível" );
define( "_AM_MYTUBE_ACTION", "Ação" );
define( "_AM_MYTUBE_SBLEFT", "Esquerda" );
define( "_AM_MYTUBE_SBRIGHT", "Direita" );
define( "_AM_MYTUBE_CBLEFT", "Centro-Esquerda" );
define( "_AM_MYTUBE_CBRIGHT", "Centro-Direita" );
define( "_AM_MYTUBE_CBCENTER", "Centro-Meio" );
define( "_AM_MYTUBE_ACTIVERIGHTS", "Direitos de Alteração" );
define( "_AM_MYTUBE_ACCESSRIGHTS", "Direitos de Acesso" );
// image admin icon
define( "_AM_MYTUBE_ICO_EDIT", "Editar este Item" );
define( "_AM_MYTUBE_ICO_DELETE", "Excluir este Item" );
define( "_AM_MYTUBE_ICO_RESOURCE", "Editar este Recurso" );

define( "_AM_MYTUBE_ICO_ONLINE", "On-line" );
define( "_AM_MYTUBE_ICO_OFFLINE", "Off-line" );
define( "_AM_MYTUBE_ICO_APPROVED", "Approvado" );
define( "_AM_MYTUBE_ICO_NOTAPPROVED", "Não Aprovado" );

define( "_AM_MYTUBE_ICO_VIDEO", "Vídeo relatado" );
define( "_AM_MYTUBE_ICO_URL", "Adicionar URL Relatada" );
define( "_AM_MYTUBE_ICO_ADD", "Incluir" );
define( "_AM_MYTUBE_ICO_APPROVE", "Aprovar" );
define( "_AM_MYTUBE_ICO_STATS", "Estatísticas" );
define( "_AM_MYTUBE_ICO_VIEW", "Ver este Item" );

define( "_AM_MYTUBE_ICO_IGNORE", "Ignorar" );
define( "_AM_MYTUBE_ICO_ACK", "Reconhecimento do Relatório de Problemas" );
define( "_AM_MYTUBE_ICO_REPORT", "Reconher o Relatório de Problemas?" );
define( "_AM_MYTUBE_ICO_CONFIRM", "Relatório de Problemas Confirmado" );
define( "_AM_MYTUBE_ICO_CONBROKEN", "Confirma Relatório de Problemas?" );
define( "_AM_MYTUBE_ICO_RES", "Editar Recursos/Vídeos para este Item" );
define( "_AM_MYTUBE_MOD_URLRATING", "Avaliação do Conteudo pela Internet:" );
// Alternate category
define( "_AM_MYTUBE_ALTCAT_CREATEF", "Incluir Categoria Alternativa" );
define( "_AM_MYTUBE_MALTCAT", "Gerenciar Categoria Alternativa" );
define( "_AM_MYTUBE_ALTCAT_MODIFYF", "Gerência de Categoria Alternativa" );
define( "_AM_MYTUBE_ALTCAT_INFOTEXT", "<ul><li>Categorias Alternativas podem ser adicionadas ou removidas facilmente, através deste formulário.</li></ul>" );
define( "_AM_MYTUBE_ALTCAT_CREATED", "Categorias Alternativas foram salvas!" );

define( "_AM_MYTUBE_MRESOURCES", "Gerenciar Recursos" );
define( "_AM_MYTUBE_RES_CREATED", "Gerenciamento de Recurso" );
define( "_AM_MYTUBE_RES_ID", "ID" );
define( "_AM_MYTUBE_RES_DESC", "Descrição" );
define( "_AM_MYTUBE_RES_NAME", "Nome do Recurso" );
define( "_AM_MYTUBE_RES_TYPE", "Tipo do Recurso" );
define( "_AM_MYTUBE_RES_USER", "Usuário" );
define( "_AM_MYTUBE_RES_CREATEF", "Incluir Recurso" );
define( "_AM_MYTUBE_RES_MODIFYF", "Modificar Recurso" );
define( "_AM_MYTUBE_RES_NAMEF", "Nome do recurso:" );
define( "_AM_MYTUBE_RES_DESCF", "Descrição do recurso:" );
define( "_AM_MYTUBE_RES_URLF", "URL do Recurso:" );
define( "_AM_MYTUBE_RES_ITEMIDF", "ID do Item de Recurso:" );
define( "_AM_MYTUBE_RES_INFOTEXT", "<ul><li>Novos recursos podem ser adicionados, editados ou removidos facilmente, através deste formulário.</li>
	<li>Lista todos os recursos ligados a um vídeo</li>
	<li>Modifica o nome e descrição do recurso</li></ul>
	" );
define( "_AM_MYTUBE_LISTBROKEN", "Exibe vídeos que possivelmente estão com problemas. Obs.: Estes resultados não são precisos e devem ser considerados apenas como possibilidades.<br /><br />Por favor, primeiro cheque se o vídeo ainda existe, para depois executar qualquer ação.<br /><br />" );
define( "_AM_MYTUBE_PINGTIMES", "Exibe o primeiro tempo estimado de round ping para cada vídeo.<br /><br />Obs.: Estes resultados não são precisos e devem ser considerados apenas como uma estimativa grosseira.<br /><br />" );

define( "_AM_MYTUBE_NO_FORUM", "Nenhu fórum selecionado" );

define( "_AM_MYTUBE_PERM_RATEPERMISSIONS", "Permissões de Avaliações" );
define( "_AM_MYTUBE_PERM_RATEPERMISSIONS_TEXT", "Selecione os grupos que podem classificar um vídeo nas categorias selecionadas." );

define( "_AM_MYTUBE_PERM_AUTOPERMISSIONS", "Auto-aprovar Vídeos" );
define( "_AM_MYTUBE_PERM_AUTOPERMISSIONS_TEXT", "Selecione os grupos que terão novos vídeos auto-aprovados sem a intervenção do administrador." );

define( "_AM_MYTUBE_PERM_SPERMISSIONS", "Permissões para Envio" );
define( "_AM_MYTUBE_PERM_SPERMISSIONS_TEXT", "Selecione os grupos que podem enviar novos vídeos para as categorias selecionadas." );

define( "_AM_MYTUBE_PERM_APERMISSIONS", "Grupos de Moderadores" );
define( "_AM_MYTUBE_PERM_APERMISSIONS_TEXT", "Selecione os grupos que têm privilégios de moderador para as categorias selecionadas." );

define( "_AM_MYTUBE_TIME", "Hora:" );
define( "_AM_MYTUBE_KEYWORDS", "Palavras-chave:" );
define( "_AM_MYTUBE_KEYWORDS_NOTE", "<i>Palavras-chave devem ser separadas com vírgula (keyword1, keyword2).</i>" );
define("_AM_MYTUBE_VIDEO_META_DESCRIPTION", "Meta-Descrição");
define("_AM_MYTUBE_VIDEO_META_DESCRIPTION_DSC", "De modo a ajudar o Mecanismos de Busca, você pode personalizar a meta-descrição deste vídeo como você quiser. Se você deixar o campo vazio quando adicionar um vídeo, ele irá ser automaticamente preenchido com o campo Sumário deste vídeo.");

define( "_AM_MYTUBE_VIDSOURCE", "Código do Video:" );
define( "_AM_MYTUBE_VIDSOURCE2", "Código do Video" );
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
define( "_AM_MYTUBE_MMYTUBE", "Incluir Clip no MyTube" );
define( "_AM_MYTUBE_VIDEO_CATVIDEOIMG", "Video imagens" );
define( "_AM_MYTUBE_VIDEO_FCATVIDEOIMG", "Caminho das Imagens de Video" );
define( "_AM_MYTUBE_VUPLOAD_VIDEOEXIST", "Video já existe" );
define( "_AM_MYTUBE_VUPLOAD_VIDEOUPLOAD", "Video carregado" );
define( "_AM_MYTUBE_VUPLOAD_NOVIDEOEXIST", "Não existe Video" );
define( "_AM_MYTUBE_VUPLOAD_FILEDELETED", "Video apagado" );
define( "_AM_MYTUBE_VUPLOAD_FILEERRORDELETE", "Erro" );
define( "_AM_MYTUBE_VUPLOAD_NOFILEERROR", "Nenhum Arquivo" );
define( "_AM_MYTUBE_VUPLOAD_DELETEFILE", "Apagar o arquivo de Vídeo" );
define( "_AM_MYTUBE_VUPLOAD_CATVIDEO", "Arquivos de Video" );
define( "_AM_MYTUBE_VUPLOAD_FCATVIDEO", "Diretório de Upload de Video" );
define( "_AM_MYTUBE_VUPLOADS", "Enviar Video" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADPATH", "Caminho para o Upload de Video:" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADURL", "Url de Upload do Video:" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADVIDEOTO", "Enviar video: " );
define( "_AM_MYTUBE_VUPLOAD_FOLDERSELECTION", "Escolha o destino deste Upload" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADVIDEO", "Video para upload" );
define( "_AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILE", "Escolha um arquivo de Vídeo" );
define( "_AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "Arquivo de vídeo deve ser do tipo FLV" );
define( "_AM_MYTUBE_BDELETEVIDEO", "Apager vídeo" );
define( "_AM_MYTUBE_NOVIDEO", "Não Mostrar o Video" );
define( "_AM_MYTUBE_NOIMAGE", "Não Mostrar a Imagem" );
define( "_AM_MYTUBE_NOSELECT", "Nada foi Selecionado" );
define( "_AM_MYTUBE_NOFILESELECT", "Nenhum arquivo selecionado" );
define( "_AM_MYTUBE_MYTUBEVIDEO", "Arquivo de Vídeo MyTube:" );
define( "_AM_MYTUBE_WARNINSTALL4", "<b>ADVERTÊNCIA:</b> <u>Pasta</u> %s não tem permissões de escrita. <br />Esta pasta precisa de permissões de escrita (CHMOD 777) para o MyTube trabalhar corretamente." );
define( "_AM_MYTUBE_CATSPONSOR", "Escolha uma categoria de Patrocinador:" );
define( "_AM_MYTUBE_CATSPONSORDSC", "Se você selecionar um código de cliente de banner a partir do formulário abaixo não serão salvos!" );
define( "_AM_MYTUBE_BANNER", "Banner" );
define( "_AM_MYTUBE_FBANNER", "Banner" );
define( "_AM_MYTUBE_BANNERID", "Escolha um código de Banner:" );
define( "_AM_MYTUBE_BANNERIDDSC", "Se você tiver selecionado um cliente, sob a forma acima do código do banner não serão salvos!" );
// Uploader class
define( "_AM_MYTUBE_READWRITEERROR", "Você não escolheu um arquivo para fazer o upload ou o servidor não tem permissões suficientes para ler/escrever, assim, não poderá carregar este arquivo!" );
define( "_AM_MYTUBE_INVALIDFILESIZE", "Tamanho do Arquivo Inválido" );
define( "_AM_MYTUBE_FILENAMEEMPTY", "Nome do arquivo está vazio" );
define( "_AM_MYTUBE_NOFILEUPLOAD", "Nenhum arquivo uploaded, isto é um erro" );
define( "_AM_MYTUBE_UPLOADERRORZERO", "Houve um problema com seu upload. Erro: 0" );
define( "_AM_MYTUBE_UPLOADERRORONE", "O arquivo que você está tentando carregar é muito grande. Erro: 1" );
define( "_AM_MYTUBE_UPLOADERRORTWO", "O arquivo que você está tentando carregar é muito grande. Erro: 2" );
define( "_AM_MYTUBE_UPLOADERRORTHREE", "O arquivo que você está tentando carregar apenas foi parcialmente processado. Erro: 3" );
define( "_AM_MYTUBE_UPLOADERRORFOUR", "Nenhum arquivo selecionado para upload. Erro: 4" );
define( "_AM_MYTUBE_UPLOADERRORFIVE", "Nenhum arquivo selecionado para upload. Erro: 5" );
define( "_AM_MYTUBE_NOUPLOADDIR", "Diretório de Upload não definido" );
define( "_AM_MYTUBE_FAILOPENDIR", "Falha na abertura diretório: " );
define( "_AM_MYTUBE_FAILOPENDIRWRITEPERM", "Falha na abertura diretório com permissão escrita: " );
define( "_AM_MYTUBE_FILESIZEMAXSIZE", "Tamanho do arquivo: %u. O tamanho máximo permitido é: %u" );
define( "_AM_MYTUBE_FILESIZEMAXWIDTH", "Largura do Arquivo: %u. Largura máxima permitida é: %u" );
define( "_AM_MYTUBE_FILESIZEMAXHEIGHT", "Altura do arquivo: %u. A altura máxima permitida é: %u" );
define( "_AM_MYTUBE_MIMENOTALLOW", "MIME type Não é permitido: " );
define( "_AM_MYTUBE_FAILEDUPLOADING", "Falhou ao carregar o arquivo: " );
define( "_AM_MYTUBE_ALREADYEXISTTRYAGAIN", " Já existe no servidor. Por favor, renomear esse arquivo e tentar novamente mais tarde.<br />" );
define( "_AM_MYTUBE_ERRORSRETURNUPLOAD", "<h4>Erros retornados ao fazer o upload</h4>" );
define( "_AM_MYTUBE_DOESNOTEXIST", " não existe!" );

// Version 1.04 RC-2
define( "_AM_MYTUBE_CLIPFISH", "ClipFish" );
define( "_AM_MYTUBE_LIVELEAK", "LiveLeak" );
define( '_AM_MYTUBE_MAKTOOB', 'Maktoob' );
define( '_AM_MYTUBE_VEOH', 'Veoh' );
define( "_AM_MYTUBE_FILE", "Arquivo " );
define( "_AM_MYTUBE_INFORMATION", "Informações do Video" ); //1.06RC-1
define( "_AM_MYTUBE_VIDEO_DLVIDIDDSC", "Assumir a parte vermelha como um dado adquirido nos exemplos a seguir" );
define( "_AM_MYTUBE_VIDEO_VIEWS", "Exibições: " );
define( "_AM_MYTUBE_ERROR_CATISCAT", "Não foi possível definir a categoria como sendo uma sub-categoria de si mesmo!" );

// Version 1.04 RC-3
define( "_AM_MYTUBE_MOD_VIDID", "Código do Video: " );
define( "_AM_MYTUBE_MOD_VIDSOURCE", "Fonte do Video: " );
define( "_AM_MYTUBE_MOD_TIME", "Tempo: " );
define( "_AM_MYTUBE_MOD_KEYWORDS", "Palavras-chave: " );
define( "_AM_MYTUBE_MOD_ITEM_TAG", "Tags: " );
define( "_AM_MYTUBE_MOD_PICURL", "Url da Figura: " );
define( "_AM_MYTUBE_IPAGE_SHOWLATEST", "Mostrar últimas listagens?" );
define( "_AM_MYTUBE_IPAGE_LATESTTOTAL", "Quantos videos deve mostrar?" );
define( "_AM_MYTUBE_IPAGE_LATESTTOTAL_DSC", "0 total de videos nesta opção." );

// Version 1.05 RC-1
define( '_AM_MYTUBE_VIMEO', 'Vimeo' );
define( '_AM_MYTUBE_MEGAVIDEO', 'Megavideo' );
define( '_AM_MYTUBE_VIDDLER', 'Viddler' );
define( '_AM_MYTUBE_CATTITLE', 'Category' );

// Version 1.06 RC-1
define( '_AM_MYTUBE_FLV_LICENSE', 'License' );
define( '_AM_MYTUBE_FLV_LICENSEDSC', 'Please read the <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">license</a> for using the JW FLV Media Player. By using this player you agree to the <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">noncommercial license</a>.' );
define( '_AM_MYTUBE_RSSFEED', 'RSS Feed' );
define( '_AM_MYTUBE_RSSFEEDCFG', 'Configuração do RSS Feed' );
define( '_AM_MYTUBE_RSSFEEDDSC', 'Aqui você poderá configurar o seu RSS feed para o módulo de MyTube.<br />Para maiores informações, não deixe de visitar a <a href="http://www.rssficado2.com.br/wiki/Especifica%C3%A7%C3%A3o_do_RSS_2.0/" target="_blank">Especificação do RSS 2.0</a> e o wiki sobre <a href="http://pt.wikipedia.org/wiki/Feed/" target="_blank">feeds</a>. Para conteúdo em inglês, voce pode ver todos os detalhes no <a href="http://www.rssboard.org/" target="_blank">Conselho Consultivo do RSS</a> website.' );
define( '_AM_MYTUBE_RSSACTIVE', 'RSS feed ativado' );
define( '_AM_MYTUBE_RSSACTIVEDSC', 'Escolha <em><b>Sim</b></em> para ativar o RSS feed para o módulo de MyTube. Escolhendo <em><b>Não</b></em> você não irá gerar RSS feed para este módulo.' );
define( '_AM_MYTUBE_RSSTITLE', 'Título do RSS feed' );
define( '_AM_MYTUBE_RSSTITLEDSC', 'O nome do seu canal. Este é como as pessoas costumam fazer uma referência a este serviço. Se você tem um site que contém as mesmas informações que o seu arquivo de RSS, o título do seu canal deverá ser o mesmo que o título do seu site.' );
define( '_AM_MYTUBE_RSSLINKS', 'Link do RSS feed' );
define( '_AM_MYTUBE_RSSLINKSDSC', 'A URL do site que correspondente ao canal.' );
define( '_AM_MYTUBE_RSSDESCRIPTION', 'Descrição do RSS feed' );
define( '_AM_MYTUBE_RSSDESCRIPTIONDSC', 'Expressão ou frase que descreva o seu canal.' );
define( '_AM_MYTUBE_RSSIMAGE', 'Imagem do RSS feed' );
define( '_AM_MYTUBE_RSSIMAGEDSC', 'Informe uma imagem do tipo GIF, JPEG ou PNG que poderá ser exibida com o seu canal.' );
define( '_AM_MYTUBE_RSSWIDTH', 'Largura da imagem do RSS feed' );
define( '_AM_MYTUBE_RSSWIDTHDSC', 'Indica a largura da imagem em pixels.<br />Valor máximo para a largura é de 144pixels.' );
define( '_AM_MYTUBE_RSSHEIGHT', 'Altura da imagem do RSS feed' );
define( '_AM_MYTUBE_RSSHEIGHTDSC', 'Indica a altura da imagem em pixels.<br />O valor máximo de altura será de 400pixels.' );
define( '_AM_MYTUBE_RSSIMGTITLE', 'Título da imagem do RSS feed' );
define( '_AM_MYTUBE_RSSIMGTITLEDSC', 'Descreve um nome na imagem que será utilizado no atributo <span style="color:#ff0000"><b>ALT</b></span> da tag HTML <span style="color:#ff0000"><b>&#60;img&#62;</b></span> quando o canal é fornecido em HTML.' );
define( '_AM_MYTUBE_RSSIMGLINK', 'Link da Imagem do RSS feed' );
define( '_AM_MYTUBE_RSSIMGLINKDSC', 'Este é o URL do site, quando o canal for fornecido, a imagem é um link para o site. (Nota, na prática a imagem <span style="color:#ff0000"><b>&#60;title&#62;</b></span> e <span style="color:#ff0000"><b>&#60;link&#62;</b></span> devem ter o mesmo valor que o do canal <span style="color:#ff0000"><b>&#60;title&#62;</b></span> e <span style="color:#ff0000"><b>&#60;link&#62;</b></span>).' );
define( '_AM_MYTUBE_RSSTTL', 'RSS feed ttl' );
define( '_AM_MYTUBE_RSSTTLDSC', 'O ttl ou tempo de descanso para nova atualização. Este é o número de minutos que irá indicar de quanto em quanto tempo um canal pode ser armazenado antes de ser  atualizado a partir do código atual. Para mais informações, veja no wiki sobre <a href="http://pt.wikipedia.org/wiki/Time_to_Live/" target="_blank">ttl neste link.</a>' );
define( '_AM_MYTUBE_RSSWEBMASTER', 'Administrador do RSS feed' );
define( '_AM_MYTUBE_RSSWEBMASTERDSC', 'Endereço de e-mail da pessoa responsável por questões técnicas relacionadas a este canal.' );
define( '_AM_MYTUBE_RSSEDITOR', 'Editor do canal de RSS feed' );
define( '_AM_MYTUBE_RSSEDITORDSC', 'Endereço de e-mail da pessoa responsável pelo conteúdo ou editorial.' );
define( '_AM_MYTUBE_RSSCATEGORY', 'Categoria do RSS feed' );
define( '_AM_MYTUBE_RSSCATEGORYDSC', 'Especificar uma ou mais categorias para este canal. Segue as mesmas regras que os <span style="color:#ff0000"><b>&#60;item&#62;</b></span>-nível de elementos das categorias.' );
define( '_AM_MYTUBE_RSSGENERATOR', 'Gerador de RSS feed' );
define( '_AM_MYTUBE_RSSGENERATORDSC', 'Texto que indica o programa usado para gerar o canal.' );
define( '_AM_MYTUBE_RSSCOPYRIGHT', 'Direitos autorais do RSS feed' );
define( '_AM_MYTUBE_RSSCOPYRIGHTDSC', 'Direitos Autorais para o conteúdo no canal ou <b>Copyright</b>.' );
define( '_AM_MYTUBE_RSSTOTAL', 'Total de Links no RSS feed' );
define( '_AM_MYTUBE_RSSTOTALDSC', 'Coloque o número total de links para exibição no RSS feed.' );
define( '_AM_MYTUBE_RSSDBUPDATED', 'Banco de dados foi atualizado com sucesso' );
define( '_AM_MYTUBE_RSSOFFLINE', 'Título da mensagem quando RSS feed estiver offline' );
define( '_AM_MYTUBE_RSSOFFLINEDSC', 'Digite o título da mensagem quando o RSS feed estiver desativado.' );
define( '_AM_MYTUBE_RSSOFFMSG', 'Mensagem do RSS feed offline' );
define( '_AM_MYTUBE_RSSOFFMSGDSC', 'Digite aqui uma explicação do porque o seu RSS feed foi desativado.' );
define( '_AM_MYTUBE_RSSOFFTITLE', 'RSS feed foi desactivado.' );
define( '_AM_MYTUBE_RSSOFFMSGDEF', 'O RSS feed foi temporariamente desativado para manutenção.' );
define( '_AM_MYTUBE_RSSCLICKSUBMIT', 'Please click Submit to store all form values in the database!' );
define( '_AM_MYTUBE_COPYRIGHT', 'Copyright' );
define( '_AM_MYTUBE_NICEURL', 'Alternative title for videoclip:' );
define( '_AM_MYTUBE_NICEURLDSC', 'Enter an alternative title for the videoclip to be used in the url. When the option <em>Use nice urls</em> from Preferences is selected and this field is left empty, than the title of the videoclip will be used.' );
define( '_AM_MYTUBE_NATIOGEO', 'National Geographic' );
define( '_AM_MYTUBE_MSG_OFFLINE', 'Video was set Offline successfully.' );
define( '_AM_MYTUBE_MSG_ONLINE', 'Video was set Online successfully.' );
?>