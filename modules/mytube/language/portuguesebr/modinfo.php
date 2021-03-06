<?php
/**
 * $Id: modinfo.php 2758 2008-06-11 16:40:26Z gibaphp $
 * Module: MyTube
 * Author: mcdonald
 * Language: Portuguesebr
 * Translator: GibaPhp - http://br.impresscms.org
 * Licence: GNU
 */

// Module Info
// The name of this module
define("_MI_MYTUBE_NAME","MyTube");

// A brief description of this module
define("_MI_MYTUBE_DESC","Adicionar vídeos do YouTube no seu site.");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYTUBE_BNAME1","Vídeos Recentes (t)");
define("_MI_MYTUBE_BNAME2","Vídeos Recentes");
define("_MI_MYTUBE_BNAME3","Vídeos mais vistos (t)");
define("_MI_MYTUBE_BNAME4","Vídeos mais vistos");
define("_MI_MYTUBE_BNAME5","Vídeos Recentes (h)");
define("_MI_MYTUBE_BNAME6","Vídeos Aleatórios");
define("_MI_MYTUBE_BNAME7","Vídeos Aleatórios (h)");

// Sub menu titles
define("_MI_MYTUBE_SMNAME1","Enviar");
define("_MI_MYTUBE_SMNAME2","Popular");
define("_MI_MYTUBE_SMNAME3","Melhor Classificados");
define("_MI_MYTUBE_SMNAME4","Recentes");

// Names of admin menu items
define("_MI_MYTUBE_BINDEX","Página Inicial");
define("_MI_MYTUBE_INDEXPAGE","Gerência da Página Inicial");
define("_MI_MYTUBE_MCATEGORY","Categorias");
define("_MI_MYTUBE_MVIDEOS","Vídeos");
define("_MI_MYTUBE_MUPLOADS","Upload de Imagem");
define("_MI_MYTUBE_PERMISSIONS","Permissões");
define("_MI_MYTUBE_BLOCKADMIN","Ajuste dos Blocos");
define("_MI_MYTUBE_MVOTEDATA","Votos");

// Title of config items
define("_MI_MYTUBE_POPULAR", "Contagem de vídeo popular");
define("_MI_MYTUBE_POPULARDSC", "O número de exibições necessárias para que o vídeo seja considerado como popular.");

define("_MI_MYTUBE_ICONDISPLAY","Vídeos Popular e Novo:");
define("_MI_MYTUBE_DISPLAYICONDSC", "Selecione como exibir os ícones de popular e novo nas listagens de vídeos.");
define("_MI_MYTUBE_DISPLAYICON1", "Exibir como ícones");
define("_MI_MYTUBE_DISPLAYICON2", "Exibir como texto");
define("_MI_MYTUBE_DISPLAYICON3", "Não exibir");

define("_MI_MYTUBE_DAYSNEW","Indicação como vídeo novo:");
define("_MI_MYTUBE_DAYSNEWDSC","O número de dias para o vídeo ser considerado novo.");

define("_MI_MYTUBE_DAYSUPDATED","Indicação como vídeo atualizado:");
define("_MI_MYTUBE_DAYSUPDATEDDSC","O número de dias para o vídeo ser considerado atualizado.");

define("_MI_MYTUBE_PERPAGE", "Quantidade de vídeos nas listagens:");
define("_MI_MYTUBE_PERPAGEDSC", "Número de vídeos a serem exibidos na listagem de cada categoria.");

define("_MI_MYTUBE_ADMINPAGE", "Quantidade de vídeos na área de Admininstração:");
define("_MI_MYTUBE_AMDMINPAGEDSC", "Número de vídeos nóvos para exibir na área de adminstração do módulo.");

define("_MI_MYTUBE_ARTICLESSORT", "Ordem de vídeos padrão:");
define("_MI_MYTUBE_ARTICLESSORTDSC", "Selecione a ordem de classificação padrão para as listas de vídeos.");

define("_MI_MYTUBE_SORTCATS", "Ordenar categorias por:");
define("_MI_MYTUBE_SORTCATSDSC", "Selecione como as categorias e sub-categorias serão classificadas.");

define("_MI_MYTUBE_SUBCATS", "Sub-Categorias:");
define("_MI_MYTUBE_SUBCATSDSC", "selecione 'Sim' para exibir sub-categorias. Selecione 'Não' para ocultar as sub-categorias das listagens");

define("_MI_MYTUBE_EDITOR", "Usar Editor:");
define("_MI_MYTUBE_EDITORCHOICE", "Selecione o editor que deseja usar. Se você tem uma instalação 'simples' (i.e. se você usa somente o editor que vem com o núcleo do pacote padrão), então você somente poderá selecionar DHTML e Compacto");
define('_MI_MYTUBE_EDITORUSER', "Editor para uso (do usuário):");
define('_MI_MYTUBE_EDITORCHOICEUSER', "Selecione o editor a ser usado no lado do usuário. Se você tem uma instalação 'simples' (por exemplo, você usa apenas a classe do núcleo de editores, isto é o padrão de editores no pacote.), então você pode selecionar apenas DHTML e compacto.");
define("_MI_MYTUBE_FORM_DHTML","DHTML");
define("_MI_MYTUBE_FORM_COMPACT","Compacto");
define("_MI_MYTUBE_FORM_SPAW","Spaw");
define("_MI_MYTUBE_FORM_HTMLAREA","HtmlArea");
define("_MI_MYTUBE_FORM_FCK","FCK");
define("_MI_MYTUBE_FORM_KOIVI","Koivi");
define("_MI_MYTUBE_FORM_TINYEDITOR","Tinyeditor");

define("_MI_MYTUBE_USESHOTS", "Exibir imagens Screenshot?");
define("_MI_MYTUBE_USESHOTSDSC", "Selecione 'Sim' para exibir as imagens screenshot (de demonstração) para cada item de vídeo.");

define("_MI_MYTUBE_USETHUMBS", "Usar Thumb Nails:");
define("_MI_MYTUBE_USETHUMBSDSC", "Imagens miniaturas para os links. Tipos suportados: JPG, GIF, PNG.<div style='padding-top: 8px;'>O módulo irá usar thumb nails para as imagens. Escolha 'Não' para usar a imagem original, se o servidor não suportar esta opção.</div>");

define("_MI_MYTUBE_IMGUPDATE", "Atualizar Thumbnails?");
define("_MI_MYTUBE_IMGUPDATEDSC", "Se selecionado, as imagens Thumbnail serão atualizadas a cada visualização de página. De outra forma, a primeira imagem thumbnail será usada todas as vezes. <br /><br />");

define("_MI_MYTUBE_SHOTWIDTH", "Exibir Largura do Screenshot");
define("_MI_MYTUBE_SHOTWIDTHDSC", "Mostra largura da imagem screenshot");

define("_MI_MYTUBE_SHOTHEIGHT", "Exibir Altura do Screenshot");
define("_MI_MYTUBE_SHOTHEIGHTDSC", "Mostra altura da imagem screenshot");

define("_MI_MYTUBE_MAINIMGDIR","Pasta Principal das Imagens");

define("_MI_MYTUBE_CATEGORYIMG","Parta para Upload das Imagens das Categorias");

define("_MI_MYTUBE_DATEFORMAT", "Formato de Data/Hora:");
define("_MI_MYTUBE_DATEFORMATDSC", "Formato de Data/Hora padrão para o módulo");

define("_MI_MYTUBE_TOTALCHARS", "Definir quantidade de caracteres para descrição?");
define("_MI_MYTUBE_TOTALCHARSDSC", "Define a quantidade de caracteres para descrição na página principal.");

define("_MI_MYTUBE_OTHERVIDEOS", "Mostrar outros vídeos enviados pelo mesmo usuário?");
define("_MI_MYTUBE_OTHERVIDEOSDSC", "Selecione 'Sim' para exibir outros vídeo enviados pelo mesmo usuário.");

define("_MI_MYTUBE_SHOWSBOOKMARKS", "Exibir Social Bookmarks?");
define("_MI_MYTUBE_SHOWSBOOKMARKSDSC", "Selecione 'Sim' para exibir os ícones de Social Bookmark abaixo do vídeo.");

define("_MI_MYTUBE_USEMETADESCR", "Gerar meta descrição:");
define("_MI_MYTUBE_USEMETADSC", "Com esta opção, a meta descrição será baseada na descrição do vídeo.");

define("_MI_MYTUBE_USERTAGDESCR", "O usuário pode enviar Tags:");
define("_MI_MYTUBE_USERTAGDSC", "Selecione Sim se o usuário está autorizado a enviar tags."); //I think here is necessary change for work with imtagging...

define("_MI_MYTUBE_SHOWDISCLAIMER", "Exibir Disclaimer antes do envio do vídeo pelo usuário?");
define("_MI_MYTUBE_SHOWDISCLAIMERDSC", "Antes do usuário enviar um vídeo, mostrar as condições de participação?");

define("_MI_MYTUBE_DISCLAIMER", "Entre com o texto do Disclaimer de envio:");

define("_MI_MYTUBE_SHOWVIDEODISCL", "Exibir Disclaimer antes do vídeo do usuário?");
define("_MI_MYTUBE_SHOWVIDEODISCLDSC", "Exibir as codições e regras de participação antes de mostrar um vídeo?");

define("_MI_MYTUBE_VIDEODISCLAIMER", "Entre com o texto do Disclaimer do vídeo:");

define("_MI_MYTUBE_COPYRIGHT", "Nota de Copyright:");
define("_MI_MYTUBE_COPYRIGHTDSC", "Selecione para exibir uma nota de copyright na página do vídeo.");

define("_MI_MYTUBE_CHECKHOST", "Desabilitar 'linkagem' direta do vídeo? (leeching)");
define("_MI_MYTUBE_REFERERS", "Estes sites podem 'linkar' diretamente aos seus vídeos <br />Separe com #");
define("_MI_MYTUBE_ANONPOST","Envio por usuário anônimos:");
define("_MI_MYTUBE_ANONPOSTDSC","Permitir aos usuários anônimos enviar vídeos para seu website?");
define("_MI_MYTUBE_AUTOAPPROVE","Aprovação automática dos vídeos enviados");
define("_MI_MYTUBE_AUTOAPPROVEDSC","Selecione para aprovar os vídeos enviados automaticamente, sem necessidade de moderação.");

define("_MI_MYTUBE_MAXFILESIZE","Tamanho máximo do Vídeo (KB)");
define("_MI_MYTUBE_MAXFILESIZEDSC","Máximo tamanho permitido para upload de vídeo.");
define("_MI_MYTUBE_IMGWIDTH","Largura máxima da Imagem");
define("_MI_MYTUBE_IMGWIDTHDSC","Máxima largura permitida para upload de imagens de vídeo");
define("_MI_MYTUBE_IMGHEIGHT","Altura máxima da imagem");
define("_MI_MYTUBE_IMGHEIGHTDSC","Máxima altura permitida para upload de imagens de vídeo");

define("_MI_MYTUBE_UPLOADDIR","Pasta para Upload (Não incluir barra no final)");
define("_MI_MYTUBE_ALLOWSUBMISS","Envios pelo Usuário:");
define("_MI_MYTUBE_ALLOWSUBMISSDSC","Permitir aos usuários enviar novos vídeos");
define("_MI_MYTUBE_ALLOWUPLOADS","Uploads pelos Usuários:");
define("_MI_MYTUBE_ALLOWUPLOADSDSC","Permitir ao usuários fazer o upload de videos diretamente para o seu website");
define("_MI_MYTUBE_SCREENSHOTS","Diretório de Upload de ScreenShots");

define("_MI_MYTUBE_SUBMITART", "Envio de vídeos:");
define("_MI_MYTUBE_SUBMITARTDSC", "Selecione os grupos que podem enviar novos vídeos.");
define("_MI_MYTUBE_RATINGGROUPS", "Classificação de vídeos:");
define("_MI_MYTUBE_RATINGGROUPSDSC", "Selecione os grupos que podem classificar vídeos.");

define("_MI_MYTUBE_QUALITY", "Qualidade dos Thumb Nails:");
define("_MI_MYTUBE_QUALITYDSC", "qualidade Menor: 0 --- Maior: 100");
define("_MI_MYTUBE_KEEPASPECT", "Manter a relação original largura x altura da imagem?");
define("_MI_MYTUBE_KEEPASPECTDSC", "");

define("_MI_MYTUBE_TITLE", "Título");
define("_MI_MYTUBE_RATING", "Classificação");
define("_MI_MYTUBE_WEIGHT", "Peso");
define("_MI_MYTUBE_POPULARITY", "Popularidade");
define("_MI_MYTUBE_SUBMITTED2", "Data do envio");

// Text for notifications
define("_MI_MYTUBE_GLOBAL_NOTIFY", "Global");
define("_MI_MYTUBE_GLOBAL_NOTIFYDSC", "Opções globais de notificação de vídeos.");
define("_MI_MYTUBE_CATEGORY_NOTIFY", "Categoria");
define("_MI_MYTUBE_CATEGORY_NOTIFYDSC", "Opções de notificação que se aplicam a atual categoria de vídeos.");
define("_MI_MYTUBE_VIDEO_NOTIFY", "Vídeo");
define("_MI_MYTUBE_FILE_NOTIFYDSC", "Opções de notificação que se aplicam ao vídeo atual.");
define("_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFY", "Nova Categoria");
define("_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP", "Avise-me quando uma nova categoria de vídeos for criada.");
define("_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC", "Receber notificação quando uma nova categoria de vídeos for criada.");
define("_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} - notificação automática: nova categoria de vídeos");

define("_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFY", "Requisição de modificação de vídeo");
define("_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP", "Avise-me quando houver alguma requisição de modificação de vídeo.");
define("_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC", "Receber notificação quando alguma solicitação de modificação de vídeo for requisitada.");
define("_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} - notificação automática: modificação de vídeo requisitada");

define("_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFY", "Informe de vídeo com problemas");
define("_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP", "Avise-me quando for informado algum vídeo com problemas.");
define("_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC", "Receber notificação quando for encaminhado algum aviso de vídeo com problemas.");
define("_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} - notificação automática: Informe de vídeo com problemas");

define("_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY", "Envio de Vídeo");
define("_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP", "Notiique-me quando algum novo vídeo for enviado (aguardando aprovação).");
define("_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC", "Receber notificação quando algum novo vídeo for enviado (aguardando aprovação).");
define("_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} - notificação automática: Novo vídeo enviado");

define("_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFY", "Novo Vídeo");
define("_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP", "Avise-me quando algum novo vídeo for enviado.");
define("_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC", "Receber notificação quando algum novo vídeo for enviado.");
define("_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} - notificação automática: Novo vídeo");

define("_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFY", "Vídeo Enviado");
define("_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP", "Avise-me quando um novo vídeo for enviado (aguardando aprovação) para a categoria atual.");
define("_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC", "Receber notificação quando um novo vídeo for enviado (aguardando aprovação) para a categoria atual.");
define("_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} notificação automática: Novo vídeo enviado para uma categoria");

define("_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFY", "Novo Vídeo");
define("_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP", "Avise-me quando algum novo vídeo for enviado na categoria atual.");
define("_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC", "Receber notificação quando algum novo vídeo for enviado na categoria atual.");
define("_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} notificação automática: Novo vídeo na categoria");

define("_MI_MYTUBE_VIDEO_APPROVE_NOTIFY", "Vídeo Aprovado");
define("_MI_MYTUBE_VIDEO_APPROVE_NOTIFYCAP", "Avise-me quando este vídeo for aprovado.");
define("_MI_MYTUBE_VIDEO_APPROVE_NOTIFYDSC", "Receber notificação quando este vídeo for aprovado.");
define("_MI_MYTUBE_VIDEO_APPROVE_NOTIFYSBJ", "[{X_SITENAME}] {X_MODULE} notificação automática: Vídeo aprovado");

define("_MI_MYTUBE_AUTHOR_INFO", "Informações do Desenvolvedor");
define("_MI_MYTUBE_AUTHOR_NAME", "Desenvolvedor");
define("_MI_MYTUBE_AUTHOR_DEVTEAM", "Time de desenvolvimento");
define("_MI_MYTUBE_AUTHOR_WEBSITE", "Website do desenvolvedor");
define("_MI_MYTUBE_AUTHOR_EMAIL", "E-mail do desenvolvedor");
define("_MI_MYTUBE_AUTHOR_CREDITS", "Créditos");
define("_MI_MYTUBE_MODULE_INFO", "Informações do desenvolvimento do módulo");
define("_MI_MYTUBE_MODULE_STATUS", "Status do desenvolvimento");
define("_MI_MYTUBE_MODULE_DEMO", "Site de demonstração");
define("_MI_MYTUBE_MODULE_SUPPORT", "Site oficial de suporte");
define("_MI_MYTUBE_MODULE_BUG", "Relatar um erro (Bug) sobre este módulo");
define("_MI_MYTUBE_MODULE_FEATURE", "Sugira uma nova funcionalidade para este módulo");
define("_MI_MYTUBE_MODULE_DISCLAIMER", "Disclaimer");
define("_MI_MYTUBE_RELEASE", "Data do lançamento: ");

define("_MI_MYTUBE_WARNINGTEXT", "O SOFTWARE ESTÁ SENDO FORNECIDO PELO MCDONALD NO ESTADO EM QUE SE ENCONTRA, E COM TODOS OS DEFEITOS OU FALHAS.
MCDONALD NÃO FAZ REPRESENTAÇÕES OU GARANTIAS DE QUALQUER TIPO RELATIVAS
A QUALIDADE, SEGURANÇA OU ADEQUAÇÃO DO SOFTWARE, SEJA EXPRESSA OU 
IMPLÍCITAS, INCLUINDO, SEM LIMITAÇÕES, QUAISQUER GARANTIAS IMPLÍCITAS DE 
COMERCIALIZAÇÃO, ADEQUAÇÃO PARA UM FIM ESPECÍFICO, OU NÃO-VIOLAÇÃO.
AINDA MAIS, MCDONALD NÃO FAZ REPRESENTAÇÕES OU GARANTIAS QUANTO À VERDADE,
EXATIDÃO OU INTEGRIDADE DE QUAISQUER DECLARAÇÕES, INFORMAÇÕES OU MATERIAIS 
RELATIVO AO SOFTWARE QUE ESTÁ CONTIDO NO SITE DA LOJA McDonalds.
EM NENHUM CASO O MCDONALD PODE SER RESPONSABILIZADO POR QUALQUER COISA, DIRETO OU INDIRETOS, PUNITIVOS, ESPECIAIS,
INCIDENTAIS OU CONSEQUENTES, PORÉM ELES PODEM SURGIR E, MESMO QUE 
MCDONALD TENHA SIDO PREVIAMENTE AVISADO DESTA POSSIBILIDADES SOBRE TAIS DANOS..");

define("_MI_MYTUBE_AUTHOR_CREDITSTEXT", "Time de desenvolvimento do WF-Projects. Baseado no módulo WF-Links. Obrigado ao dream-team por alguns trechos de código.");
define("_MI_MYTUBE_AUTHOR_BUGFIXES", "Histórico de correção de bugs");

define("_MI_MYTUBE_COPYRIGHTIMAGE", "");

// version 1.02
define("_MI_MYTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_MYTUBE_FORM_DHTMLEXT", "DHTML Extendido");

// Version 1.03
define('_MI_MYTUBE_DATEFORMATADMIN', 'Timestamp administração:');
define('_MI_MYTUBE_DATEFORMATADMINDSC', 'Admininstração padrão Timestamp para o MyTube');

// Version 1.04 RC-1
define('_MI_MYTUBE_VIDEODIR', 'Diretório para Upload de Videos:');
define('_MI_MYTUBE_VIDEODIRDSC', 'Defina o diretório para os arquivos de Video do MyTube');
define('_MI_MYTUBE_VIDEOIMGDIR', 'Diretório de Upload de ScreenShots de Videos:');
define('_MI_MYTUBE_VIDEOIMGDIRDSC', 'Defina o diretório para ScreenShots de vídeos do MyTube');
define('_MI_MYTUBE_FLVPLAYER_CREDITS', 'FLV Player');
define('_MI_MYTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player por LongTail Video (Jeroen Wijering)');
define('_MI_MYTUBE_VUPLOADS', 'Enviar Video');
define('_MI_MYTUBE_CATEGORYIMGDSC', '');
define('_MI_MYTUBE_MAINIMGDIRDSC', '');
define("_MI_MYTUBE_BNAME8","MyTube - Estatísticas do Patrocinador ");
define('_MI_MYTUBE_ICONS_CREDITS', "Ícones");

// Version 1.04 RC-2
define('_MI_MYTUBE_MODULE_MANUAL', 'Manual' );
define('_MI_MYTUBE_MODULE_MANUALWIKI', 'Manual no Wiki' );
define('_MI_MYTUBE_MODULE_REQUESTNEWFEATURE', 'Solicitar um novo Recurso' );
define('_MI_MYTUBE_MODULE_SUBMITBUG', 'Enviar um erro (Bug)' );
define("_MI_MYTUBE_BNAME9","Tag MyTube");
define("_MI_MYTUBE_BNAME10","MyTube Melhores Tags");
define('_MI_MYTUBE_FLVPLAYER_MANUAL', 'FLV tocador Manual');
define('_MI_MYTUBE_FLVPLAYER_WIKI', 'JW tocador Wiki');

// Version 1.05 RC-1
define( "_MI_MYTUBE_CATCOLUMNS", "Escolha a quantidade de colunas para categoria :" );
define( "_MI_MYTUBE_CATCOLUMNSDSC", "Selecione a quantidade de colunas, o padrão é 2" );
define( "_MI_MYTUBE_RATINGDISPLAY", "Mostrar o recurso de votação?" );
define( "_MI_MYTUBE_RATINGDISPLAYDSC", "Escolha <em>Sim</em> para apresentar a funcionalidades de votação ou Nota. Escolha <em>Não</em> se você não quiser exibir a funcionalidades de votos ou notas neste módulo." );
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