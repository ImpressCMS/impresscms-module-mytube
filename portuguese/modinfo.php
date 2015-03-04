<?php
/**
 * $Id: modinfo.php 2758 2008-06-11 16:40:26Z gibaphp $
 * Module: MyTube
 * Author: mcdonald
 * Language: Portuguese
 * Licence: GNU
 */
//� necess�rio revis�o de v�rios termos para o portugu�s de portugal, mas eu penso que dever� ajudar o que j� est� conclu�do.
// Module Info
// The name of this module
define("_MI_MYTUBE_NAME","MyTube");

// A brief description of this module
define("_MI_MYTUBE_DESC","Adicionar v�deos do YouTube no seu site.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYTUBE_BNAME1","V�deos Recentes (t)");
define("_MI_MYTUBE_BNAME2","V�deos Recentes");
define("_MI_MYTUBE_BNAME3","V�deos mais vistos (t)");
define("_MI_MYTUBE_BNAME4","V�deos mais vistos");
define("_MI_MYTUBE_BNAME5","V�deos Recentes (h)");
define("_MI_MYTUBE_BNAME6","V�deos Aleat�rios");
define("_MI_MYTUBE_BNAME7","V�deos Aleat�rios (h)");

// Sub menu titles
define("_MI_MYTUBE_SMNAME1","Enviar");
define("_MI_MYTUBE_SMNAME2","Popular");
define("_MI_MYTUBE_SMNAME3","Melhor Classificados");
define("_MI_MYTUBE_SMNAME4","Recentes");

// Names of admin menu items
define("_MI_MYTUBE_BINDEX","P�gina Inicial");
define("_MI_MYTUBE_INDEXPAGE","Gerenciamento da P�gina Inicial");
define("_MI_MYTUBE_MCATEGORY","Gerenciamento das Categorias");
define("_MI_MYTUBE_MVIDEOS","Gerenciamento dos V�deos");
define("_MI_MYTUBE_MUPLOADS","Upload de Imagem");
define("_MI_MYTUBE_PERMISSIONS","Ajuste das Permiss�es");
define("_MI_MYTUBE_BLOCKADMIN","Ajuste dos Blocos");
define("_MI_MYTUBE_MVOTEDATA","Votos");

// Title of config items
define("_MI_MYTUBE_POPULAR", "Contagem como v�deo popular");
define("_MI_MYTUBE_POPULARDSC", "O n�mero de exibi��es para que o v�deo seja considerado popular.");

define("_MI_MYTUBE_ICONDISPLAY","V�deos Popular e Novo:");
define("_MI_MYTUBE_DISPLAYICONDSC", "Selecione como exibir os �cones de popular e novo nas listagens de v�deos.");
define("_MI_MYTUBE_DISPLAYICON1", "Exibir como �cones");
define("_MI_MYTUBE_DISPLAYICON2", "Exibir como texto");
define("_MI_MYTUBE_DISPLAYICON3", "N�o exibir");

define("_MI_MYTUBE_DAYSNEW","Indica��o como v�deo novo:");
define("_MI_MYTUBE_DAYSNEWDSC","O n�mero de dias para o v�deo ser considerado novo.");

define("_MI_MYTUBE_DAYSUPDATED","Indica��o como v�deo atualizado:");
define("_MI_MYTUBE_DAYSUPDATEDDSC","O n�mero de dias para o v�deo ser considerado atualizado.");

define("_MI_MYTUBE_PERPAGE", "Quantidade de v�deos nas listagens:");
define("_MI_MYTUBE_PERPAGEDSC", "N�mero de v�deos a serem exibidos na listagem de cada categoria.");

define("_MI_MYTUBE_ADMINPAGE", "Quantidade de v�deos na �rea de Admininstra��o:");
define("_MI_MYTUBE_AMDMINPAGEDSC", "N�mero de v�deos n�vos para exibir na �rea de adminstra��o do m�dulo.");

define("_MI_MYTUBE_ARTICLESSORT", "Ordem de v�deos padr�o:");
define("_MI_MYTUBE_ARTICLESSORTDSC", "Selecione a ordem de classifica��o padr�o para as listas de v�deos.");

define("_MI_MYTUBE_SORTCATS", "Ordenar categorias por:");
define("_MI_MYTUBE_SORTCATSDSC", "Selecione como as categorias e sub-categorias ser�o classificadas.");

define("_MI_MYTUBE_SUBCATS", "Sub-Categorias:");
define("_MI_MYTUBE_SUBCATSDSC", "selecione 'Sim' para exibir sub-categorias. Selecione 'N�o' para ocultar as sub-categorias das listagens");

define("_MI_MYTUBE_EDITOR", "Editor para usar:");
define("_MI_MYTUBE_EDITORCHOICE", "Selecione o editor para usar. Se voc� tem uma instala��o 'simples' (i.e. se voc� usa somente o editor que vem com o n�cleo do pacote padr�o), ent�o voc� somente poder� selecionar DHTML e Compacto");
define('_MI_MYTUBE_EDITORUSER', "Editor para uso (usu�rio):");
define('_MI_MYTUBE_EDITORCHOICEUSER', "Selecione o editor a ser usado para o lado do usu�rio. Se voc� tem uma instala��o 'simples' (por exemplo, voc� usa apenas a classe do n�cleo de editores, isto � o padr�o de editores no pacote.), ent�o voc� pode selecionar apenas DHTML e compacto.");
define("_MI_MYTUBE_FORM_DHTML","DHTML");
define("_MI_MYTUBE_FORM_COMPACT","Compacto");
define("_MI_MYTUBE_FORM_SPAW","Spaw");
define("_MI_MYTUBE_FORM_HTMLAREA","HtmlArea");
define("_MI_MYTUBE_FORM_FCK","FCK");
define("_MI_MYTUBE_FORM_KOIVI","Koivi");
define("_MI_MYTUBE_FORM_TINYEDITOR","Tinyeditor");

define("_MI_MYTUBE_USESHOTS", "Exibir imagens Screenshot?");
define("_MI_MYTUBE_USESHOTSDSC", "Selecione 'Sim' para exibir as imagens screenshot (de demonstra��o) para cada item de v�deo.");

define("_MI_MYTUBE_USETHUMBS", "Usar Thumb Nails:");
define("_MI_MYTUBE_USETHUMBSDSC", "Imagens miniaturas para os links. Tipos suportados: JPG, GIF, PNG.<div style='padding-top: 8px;'>O m�dulo ir� usar thumb nails para as imagens. Escolha 'N�o' para usar a imagem original, se o servidor n�o suportar esta op��o.</div>");

define("_MI_MYTUBE_IMGUPDATE", "Atualizar Thumbnails?");
define("_MI_MYTUBE_IMGUPDATEDSC", "Se selecionado, as imagens Thumbnail ser�o atualizadas a cada visualiza��o de p�gina. De outra forma, a primeira imagem thumbnail ser� usada todas as vezes. <br /><br />");

define("_MI_MYTUBE_SHOTWIDTH", "Exibir Largura do Screenshot");
define("_MI_MYTUBE_SHOTWIDTHDSC", "Mostra largura da imagem screenshot");

define("_MI_MYTUBE_SHOTHEIGHT", "Exibir Altura do Screenshot");
define("_MI_MYTUBE_SHOTHEIGHTDSC", "Mostra altura da imagem screenshot");

define("_MI_MYTUBE_MAINIMGDIR","Pasta Principal das Imagens");

define("_MI_MYTUBE_CATEGORYIMG","Parta para Upload das Imagens das Categorias");

define("_MI_MYTUBE_DATEFORMAT", "Formato de Data/Hora:");
define("_MI_MYTUBE_DATEFORMATDSC", "Formato de Data/Hora padr�o para o m�dulo");

define("_MI_MYTUBE_TOTALCHARS", "Definir quantidade de caracteres para descri��o?");
define("_MI_MYTUBE_TOTALCHARSDSC", "Define a quantidade de caracteres para descri��o na p�gina principal.");

define("_MI_MYTUBE_OTHERVIDEOS", "Mostrar outros v�deos enviados pelo mesmo usu�rio?");
define("_MI_MYTUBE_OTHERVIDEOSDSC", "Selecione 'Sim' para exibir outros v�deo enviados pelo mesmo usu�rio.");

define("_MI_MYTUBE_SHOWSBOOKMARKS", "Exibir Social Bookmarks?");
define("_MI_MYTUBE_SHOWSBOOKMARKSDSC", "Selecione 'Sim' para exibir os �cones de Social Bookmark abaixo do v�deo.");

define("_MI_MYTUBE_USEMETADESCR", "Gerar meta descri��o:");
define("_MI_MYTUBE_USEMETADSC", "Com esta op��o, a meta descri��o ser� baseada na descri��o do v�deo.");

define("_MI_MYTUBE_USERTAGDESCR", "O usu�rio pode enviar Tags:");
define("_MI_MYTUBE_USERTAGDSC", "Selecione Sim se o usu�rio est� autorizado a enviar tags.");

define("_MI_MYTUBE_SHOWDISCLAIMER", "Exibir Disclaimer antes do envio do v�deo pelo usu�rio?");
define("_MI_MYTUBE_SHOWDISCLAIMERDSC", "Antes do usu�rio enviar um v�deo, mostrar as condi��es de participa��o?");

define("_MI_MYTUBE_DISCLAIMER", "Entre com o texto do Disclaimer de envio:");

define("_MI_MYTUBE_SHOWVIDEODISCL", "Exibir Disclaimer antes do v�deo do usu�rio?");
define("_MI_MYTUBE_SHOWVIDEODISCLDSC", "Exibir as codi��es e regras de participa��o antes de mostrar um v�deo?");

define("_MI_MYTUBE_VIDEODISCLAIMER", "Entre com o texto do Disclaimer do v�deo:");

define("_MI_MYTUBE_COPYRIGHT", "Nota de Copyright:");
define("_MI_MYTUBE_COPYRIGHTDSC", "Selecione para exibir uma nota de copyright na p�gina do v�deo.");

define("_MI_MYTUBE_CHECKHOST", "Desabilitar 'linkagem' direta do v�deo? (leeching)");
define("_MI_MYTUBE_REFERERS", "Estes sites podem 'linkar' diretamente aos seus v�deos <br />Separe com #");
define("_MI_MYTUBE_ANONPOST","Envio por usu�rio an�nimos:");
define("_MI_MYTUBE_ANONPOSTDSC","Permitir aos usu�rios an�nimos enviar v�deos para seu website?");
define("_MI_MYTUBE_AUTOAPPROVE","Aprova��o autom�tica dos v�deos enviados");
define("_MI_MYTUBE_AUTOAPPROVEDSC","Selecione para aprovar os v�deos enviados automaticamente, sem necessidade de modera��o.");

define("_MI_MYTUBE_MAXFILESIZE","Tamanho m�ximo do V�deo (KB)");
define("_MI_MYTUBE_MAXFILESIZEDSC","M�ximo tamanho permitido para upload de v�deo.");
define("_MI_MYTUBE_IMGWIDTH","Largura m�xima da Imagem");
define("_MI_MYTUBE_IMGWIDTHDSC","M�xima largura permitida para upload de imagens de v�deo");
define("_MI_MYTUBE_IMGHEIGHT","Altura m�xima da imagem");
define("_MI_MYTUBE_IMGHEIGHTDSC","M�xima altura permitida para upload de imagens de v�deo");

define("_MI_MYTUBE_UPLOADDIR","Pasta para Upload (N�o incluir barra no final)");
define("_MI_MYTUBE_ALLOWSUBMISS","Envios pelo Usu�rio:");
define("_MI_MYTUBE_ALLOWSUBMISSDSC","Permitir aos usu�rios enviar novos v�deos");
define("_MI_MYTUBE_ALLOWUPLOADS","Uploads pelos Usu�rios:");
define("_MI_MYTUBE_ALLOWUPLOADSDSC","Permitir ao usu�rios fazer o upload de videos diretamente para o seu website");
define("_MI_MYTUBE_SCREENSHOTS","Diret�rio de Upload de ScreenShots");

define("_MI_MYTUBE_SUBMITART", "Envio de v�deos:");
define("_MI_MYTUBE_SUBMITARTDSC", "Selecione os grupos que podem enviar novos v�deos.");
define("_MI_MYTUBE_RATINGGROUPS", "Classifica��o de v�deos:");
define("_MI_MYTUBE_RATINGGROUPSDSC", "Selecione os grupos que podem classificar v�deos.");

define("_MI_MYTUBE_QUALITY", "Qualidade dos Thumb Nails:");
define("_MI_MYTUBE_QUALITYDSC", "qualidade Menor: 0 --- Maior: 100");
define("_MI_MYTUBE_KEEPASPECT", "Manter a rela��o original largura x altura da imagem?");
define("_MI_MYTUBE_KEEPASPECTDSC", "");

define("_MI_MYTUBE_TITLE", "T�tulo");
define("_MI_MYTUBE_RATING", "Classifica��o");
define("_MI_MYTUBE_WEIGHT", "Peso");
define("_MI_MYTUBE_POPULARITY", "Popularidade");
define("_MI_MYTUBE_SUBMITTED2", "Data do envio");

// Text for notifications
define("_MI_MYTUBE_GLOBAL_NOTIFY", "Global");
define("_MI_MYTUBE_GLOBAL_NOTIFYDSC", "Op��es globais de notifica��o de v�deos.");
define("_MI_MYTUBE_CATEGORY_NOTIFY", "Categoria");
define("_MI_MYTUBE_CATEGORY_NOTIFYDSC", "Op��es de notifica��o que se aplicam a atual categoria de v�deos.");
define("_MI_MYTUBE_VIDEO_NOTIFY", "V�deo");
define("_MI_MYTUBE_FILE_NOTIFYDSC", "Op��es de notifica��o que se aplicam ao v�deo atual.");
define("_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFY", "Nova Categoria");
define("_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP", "Avise-me quando uma nova categoria de v�deos for criada.");
define("_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC", "Receber notifica��o quando uma nova categoria de v�deos for criada.");
define("_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} - notifica��o autom�tica: nova categoria de v�deos");

define("_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFY", "Requisi��o de modifica��o de v�deo");
define("_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP", "Avise-me quando houver alguma requisi��o de modifica��o de v�deo.");
define("_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC", "Receber notifica��o quando alguma solicita��o de modifica��o de v�deo for requisitada.");
define("_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} - notifica��o autom�tica: modifica��o de v�deo requisitada");

define("_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFY", "Informe de v�deo com problemas");
define("_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP", "Avise-me quando for informado algum v�deo com problemas.");
define("_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC", "Receber notifica��o quando for encaminhado algum aviso de v�deo com problemas.");
define("_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} - notifica��o autom�tica: Informe de v�deo com problemas");

define("_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY", "Envio de V�deo");
define("_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP", "Notiique-me quando algum novo v�deo for enviado (aguardando aprova��o).");
define("_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC", "Receber notifica��o quando algum novo v�deo for enviado (aguardando aprova��o).");
define("_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} - notifica��o autom�tica: Novo v�deo enviado");

define("_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFY", "Novo V�deo");
define("_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP", "Avise-me quando algum novo v�deo for enviado.");
define("_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC", "Receber notifica��o quando algum novo v�deo for enviado.");
define("_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} - notifica��o autom�tica: Novo v�deo");

define("_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFY", "V�deo Enviado");
define("_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP", "Avise-me quando um novo v�deo for enviado (aguardando aprova��o) para a categoria atual.");
define("_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC", "Receber notifica��o quando um novo v�deo for enviado (aguardando aprova��o) para a categoria atual.");
define("_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} notifica��o autom�tica: Novo v�deo enviado para uma categoria");

define("_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFY", "Novo V�deo");
define("_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP", "Avise-me quando algum novo v�deo for enviado na categoria atual.");
define("_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC", "Receber notifica��o quando algum novo v�deo for enviado na categoria atual.");
define("_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} notifica��o autom�tica: Novo v�deo na categoria");

define("_MI_MYTUBE_VIDEO_APPROVE_NOTIFY", "V�deo Aprovado");
define("_MI_MYTUBE_VIDEO_APPROVE_NOTIFYCAP", "Avise-me quando este v�deo for aprovado.");
define("_MI_MYTUBE_VIDEO_APPROVE_NOTIFYDSC", "Receber notifica��o quando este v�deo for aprovado.");
define("_MI_MYTUBE_VIDEO_APPROVE_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} notifica��o autom�tica: V�deo aprovado");

define("_MI_MYTUBE_AUTHOR_INFO", "Informa��es do Desenvolvedor");
define("_MI_MYTUBE_AUTHOR_NAME", "Desenvolvedor");
define("_MI_MYTUBE_AUTHOR_DEVTEAM", "Time de desenvolvimento");
define("_MI_MYTUBE_AUTHOR_WEBSITE", "Website do desenvolvedor");
define("_MI_MYTUBE_AUTHOR_EMAIL", "E-mail do desenvolvedor");
define("_MI_MYTUBE_AUTHOR_CREDITS", "Cr�ditos");
define("_MI_MYTUBE_MODULE_INFO", "Informa��es do desenvolvimento do m�dulo");
define("_MI_MYTUBE_MODULE_STATUS", "Status do desenvolvimento");
define("_MI_MYTUBE_MODULE_DEMO", "Site de demonstra��o");
define("_MI_MYTUBE_MODULE_SUPPORT", "Site oficial de suporte");
define("_MI_MYTUBE_MODULE_BUG", "Relatar um erro (Bug) sobre este m�dulo");
define("_MI_MYTUBE_MODULE_FEATURE", "Sugira uma nova funcionalidade para este m�dulo");
define("_MI_MYTUBE_MODULE_DISCLAIMER", "Disclaimer");
define("_MI_MYTUBE_RELEASE", "Data do lan�amento: ");
define('_MI_MYTUBE_ICONS_CREDITS', "�cones");

define("_MI_MYTUBE_WARNINGTEXT", "O SOFTWARE EST� SENDO FORNECIDO PELO MCDONALD NO ESTADO EM QUE SE ENCONTRA, E COM TODOS OS DEFEITOS OU FALHAS.
MCDONALD N�O FAZ REPRESENTA��ES OU GARANTIAS DE QUALQUER TIPO RELATIVAS
A QUALIDADE, SEGURAN�A OU ADEQUA��O DO SOFTWARE, SEJA EXPRESSA OU 
IMPL�CITAS, INCLUINDO, SEM LIMITA��ES, QUAISQUER GARANTIAS IMPL�CITAS DE 
COMERCIALIZA��O, ADEQUA��O PARA UM FIM ESPEC�FICO, OU N�O-VIOLA��O.
AINDA MAIS, MCDONALD N�O FAZ REPRESENTA��ES OU GARANTIAS QUANTO � VERDADE,
EXATID�O OU INTEGRIDADE DE QUAISQUER DECLARA��ES, INFORMA��ES OU MATERIAIS 
RELATIVO AO SOFTWARE QUE EST� CONTIDO NO SITE DA LOJA McDonalds.
EM NENHUM CASO O MCDONALD PODE SER RESPONSABILIZADO POR QUALQUER COISA, DIRETO OU INDIRETOS, PUNITIVOS, ESPECIAIS,
INCIDENTAIS OU CONSEQUENTES, POR�M ELES PODEM SURGIR E, MESMO QUE 
MCDONALD TENHA SIDO PREVIAMENTE AVISADO DESTA POSSIBILIDADES SOBRE TAIS DANOS..");

define("_MI_MYTUBE_AUTHOR_CREDITSTEXT", "Time de desenvolvimento do WF-Projects. Baseado no m�dulo WF-Links. Obrigado ao dream-team por alguns trechos de c�digo.");
define("_MI_MYTUBE_AUTHOR_BUGFIXES", "Hist�rico de corre��o de bugs");

define("_MI_MYTUBE_COPYRIGHTIMAGE", "");

// version 1.02
define("_MI_MYTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_MYTUBE_FORM_DHTMLEXT", "DHTML Extendido");

// Version 1.03
define('_MI_MYTUBE_DATEFORMATADMIN', 'Timestamp administra��o:');
define('_MI_MYTUBE_DATEFORMATADMINDSC', 'Admininstra��o padr�o Timestamp para o MyTube');

// Version 1.04 RC-1
define('_MI_MYTUBE_VIDEODIR', 'Diret�rio para Upload de Videos:');
define('_MI_MYTUBE_VIDEODIRDSC', 'Defina o diret�rio para os arquivos de Video do MyTube');
define('_MI_MYTUBE_VIDEOIMGDIR', 'Diret�rio de Upload de ScreenShots de Videos:');
define('_MI_MYTUBE_VIDEOIMGDIRDSC', 'Defina o diret�rio para ScreenShots de v�deos do MyTube');
define('_MI_MYTUBE_FLVPLAYER_CREDITS', 'FLV Player');
define('_MI_MYTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player por LongTail Video (Jeroen Wijering)');
define('_MI_MYTUBE_VUPLOADS', 'Video upload');
define('_MI_MYTUBE_CATEGORYIMGDSC', '');
define('_MI_MYTUBE_MAINIMGDIRDSC', '');
define("_MI_MYTUBE_BNAME8","MyTube - Estat�sticas do Patrocinador ");
define('_MI_MYTUBE_ICONS_CREDITS', "�cones");

// Version 1.04 RC-2
define('_MI_MYTUBE_MODULE_MANUAL', 'Manual' );
define('_MI_MYTUBE_MODULE_MANUALWIKI', 'Manual no Wiki' );
define('_MI_MYTUBE_MODULE_REQUESTNEWFEATURE', 'Solicitar um novo Recurso' );
define('_MI_MYTUBE_MODULE_SUBMITBUG', 'Enviar um erro (Bug)' );
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