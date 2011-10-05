<?php
/**
 * $Id: main.php 2758 2008-06-11 16:40:26Z gibaphp $
 * Module: MyTube
 * Author: mcdonald
 * Language: Portuguesebr
 * Translator: GibaPhp - http://br.impresscms.org
 * Licence: GNU
 */

define( "_MD_MYTUBE_NOVIDEO", "Este vídeo não existe!" );
define( "_MD_MYTUBE_SUBCATLISTING", "Lista de Categorias" );
define( "_MD_MYTUBE_ISADMINNOTICE", "Webmaster: há um problema com esta imagem." );
define( "_MD_MYTUBE_THANKSFORINFO", "Obrigado pelo envio do vídeo.<br />Você será avisado quando o webmaster aprová-lo." );
define( "_MD_MYTUBE_ISAPPROVED", "Obrigado pelo envio do vídeo.<br />Ele foi aprovado e agora aparecerá na listagem." );
define( "_MD_MYTUBE_THANKSFORHELP", "Obrigado por ajudar a manter a integridade deste diretório." );
define( "_MD_MYTUBE_FORSECURITY", "Por razões de segurança o seu nome de usuário e endereço IP serão temporariamente gravados." );
define( "_MD_MYTUBE_DESCRIPTION", "Descrição" );
define( "_MD_MYTUBE_SUBMITCATHEAD", "Formulário de envio de vídeo" );
define( "_MD_MYTUBE_MAIN", "Início" );
define( "_MD_MYTUBE_POPULAR", "Popular" );
define( "_MD_MYTUBE_NEWTHISWEEK", "Novidade desta semana" );
define( "_MD_MYTUBE_UPTHISWEEK", "Atualizados esta semana" );
define( "_MD_MYTUBE_POPULARITYLTOM", "Popularidade (dos menos para os mais vistos)" );
define( "_MD_MYTUBE_POPULARITYMTOL", "Popularidade (dos mais para os menos vistos)" );
define( "_MD_MYTUBE_TITLEATOZ", "Título (A para Z)" );
define( "_MD_MYTUBE_TITLEZTOA", "Título (Z para A)" );
define( "_MD_MYTUBE_DATEOLD", "Data (Vídeo antigos listados primeiro)" );
define( "_MD_MYTUBE_DATENEW", "Data (Vídeos novos listados primeiro)" );
define( "_MD_MYTUBE_RATINGLTOH", "Classificação (dos menos cotados para os mais cotados)" );
define( "_MD_MYTUBE_RATINGHTOL", "Classificação (dos mais cotados para os menos cotados)" );
define( "_MD_MYTUBE_DESCRIPTIONC", "Descrição: " );
define( "_MD_MYTUBE_CATEGORYC", "Categoria: " );
define( "_MD_MYTUBE_VERSION", "Versão" );
define( "_MD_MYTUBE_SUBMITDATE", "Enviado em " );
define( "_MD_MYTUBE_VIDEOHITS", "<b>Exibido:</b> %s vezes" );
define( "_MD_MYTUBE_PUBLISHERC", "Publicado por: " );
define( "_MD_MYTUBE_RATINGC", "Classificação: " );
define( "_MD_MYTUBE_ONEVOTE", "1 Voto" );
define( "_MD_MYTUBE_NUMVOTES", "%s Votos" );
define( "_MD_MYTUBE_RATETHISFILE", "Classifique este vídeo" );
define( "_MD_MYTUBE_MODIFY", "Modificado" );
define( "_MD_MYTUBE_REPORTBROKEN", "Relatar link quebrado" );
define( "_MD_MYTUBE_BROKENREPORT", "Relatar vídeo defeituoso" );
define( "_MD_MYTUBE_SUBMITBROKEN", "Enviar" );
define( "_MD_MYTUBE_BEFORESUBMIT", "Antes de informar um vídeo com problemas, por favor verifique se o problema é no link ou no site de origem do vídeo, e se este site não está apenas temporariamente off-line." );
define( "_MD_MYTUBE_TELLAFRIEND", "Recomendar" );
define( "_MD_MYTUBE_EDIT", "Editar" );
define( "_MD_MYTUBE_THEREARE", "Há <b>%s</b> <i>Categorias</i> e <b>%s</b> <i>Vídeos</i> listados" );
define( "_MD_MYTUBE_THEREIS", "Há <b>%s</b> <i>Categoria</i> e <b>%s</b> <i>Vídeos</i> listados" );
define( "_MD_MYTUBE_LATESTLIST", "Listas mais recentes" );
define( "_MD_MYTUBE_FILETITLE", "Título do Vídeo: " );
define( "_MD_MYTUBE_DLVIDID", "Código do Video: " );
define( "_MD_MYTUBE_VIDEO_DLVIDID_NOTE", "
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
<b>National Geographic:</b> http://video.nationalgeographic.com/video/player/news/environment-news/<font color=#FF0000>us-ocean-floor-mapping-vin</font>.html</small>" );
define( "_MD_MYTUBE_VIDEO_PICURL", "Url da Imagem: " );
define( "_MD_MYTUBE_VIDEO_PICURLNOTE", "Url da Foto quando for um código do Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Viddler ou Maktoob" );
define( "_MD_MYTUBE_VIDSOURCE", "Código do Video:" );
define( "_MD_MYTUBE_YOUTUBE", "YouTube" );
define( "_MD_MYTUBE_METACAFE", "MetaCafe" );
define( "_MD_MYTUBE_IFILM", "Spike" );
define( "_MD_MYTUBE_GOOGLEVIDEO", "Google Video" );
define( "_MD_MYTUBE_MYSPAVETV", "MySpace TV" );
define( "_MD_MYTUBE_PHOTOBUCKET", "Photobucket" );
define( "_MD_MYTUBE_DAILYMOTION", "DailyMotion" );
define( "_MD_MYTUBE_VIDEO_PUBLISHER", "Nome do editor do Video:" );
define( "_MD_MYTUBE_HOMEPAGEC", "WebSite: " );
define( "_MD_MYTUBE_NOTSPECIFIED", "Não Especificado" );
define( "_MD_MYTUBE_PUBLISHER", "Publicador" );
define( "_MD_MYTUBE_UPDATEDON", "Atualizado em" );
define( "_MD_MYTUBE_PRICEFREE", "Gratuíto" );
define( "_MD_MYTUBE_VIEWDETAILS", "Ver Vídeo-Clip" );
define( "_MD_MYTUBE_OPTIONS", "Opções: " );
define( "_MD_MYTUBE_NOTIFYAPPROVE", "Avise-me quando este vídeo for aprovado" );
define( "_MD_MYTUBE_VOTEAPPRE", "Seu voto é bem-vindo." );
define( "_MD_MYTUBE_THANKYOU", "Obrigado por votar aqui no %s" ); // %s é o nome do seu site
define( "_MD_MYTUBE_VOTEONCE", "Por favor, não vote no mesmo vídeo mais de uma vez." );
define( "_MD_MYTUBE_RATINGSCALE", "A escala é de 1 a 10, com 1 sendo fraco e 10 sendo excelente." );
define( "_MD_MYTUBE_BEOBJECTIVE", "Por favor seja objetivo. Se todos receberem 1 ou 10, a classificação não será muito útil." );
define( "_MD_MYTUBE_DONOTVOTE", "Não vote em seu próprio vídeo." );
define( "_MD_MYTUBE_RATEIT", "Classificado!" );
define( "_MD_MYTUBE_INTFILEFOUND", "Veja este vídeo em %s" ); // %s é o nome do seu site
define( "_MD_MYTUBE_RANK", "Classificação" );
define( "_MD_MYTUBE_CATEGORY", "Categoria" );
define( "_MD_MYTUBE_HITS", "Visualizado" );
define( "_MD_MYTUBE_RATING", "Classificação" );
define( "_MD_MYTUBE_VOTE", "Voto" );
define( "_MD_MYTUBE_SORTBY", "Ordenar por:" );
define( "_MD_MYTUBE_TITLE", "Título" );
define( "_MD_MYTUBE_DATE", "Data" );
define( "_MD_MYTUBE_POPULARITY", "Popularidade" );
define( "_MD_MYTUBE_TOPRATED", "Classificação" );
define( "_MD_MYTUBE_CURSORTBY", "Vídeos atualmente classificados em: %s" );
define( "_MD_MYTUBE_CANCEL", "Cancelar" );
define( "_MD_MYTUBE_ALREADYREPORTED", "Você enviou um aviso de problemas com este vídeo." );
define( "_MD_MYTUBE_MUSTREGFIRST", "Sinto, você não tem permissão para executar esta ação.<br />Por favor, primeiro se registre ou faça o login!" );
define( "_MD_MYTUBE_NORATING", "Nenhuma clasificação selecionada." );
define( "_MD_MYTUBE_VOTEFORTITLE", "Classifique este Vídeo: " );
define( "_MD_MYTUBE_CANTVOTEOWN", "Você não pode votar no vídeo que você mesmo enviou.<br />Todos os votos são registrados e revistos." );
define( "_MD_MYTUBE_SUBMITVIDEO", "Enviar vídeo" );
define( "_MD_MYTUBE_SUB_SNEWMNAMEDESC", "<ul><li>Todos os videos novos estão sujeitos à validação e pode levar até 24 horas antes que apareçam na listagem. </li><li>Nos reservamos o direito de recusar qualquer vídeo ou alteração posterior de conteúdo que não tenha sido aprovada. </li></ul>" );
define( "_MD_MYTUBE_MAINLISTING", "Lista das Categorias Principais" );
define( "_MD_MYTUBE_LASTWEEK", "Última Semana" );
define( "_MD_MYTUBE_LAST30DAYS", "Últimos 30 Dias" );
define( "_MD_MYTUBE_1WEEK", "1 Semana" );
define( "_MD_MYTUBE_2WEEKS", "2 Semanas" );
define( "_MD_MYTUBE_30DAYS", "30 Dias" );
define( "_MD_MYTUBE_SHOW", "Mostrar" );
define( "_MD_MYTUBE_DAYS", "dias" );
define( "_MD_MYTUBE_NEWlinks", "Novos vídeos" );
define( "_MD_MYTUBE_TOTALNEWVIDEOS", "Total de novos vídeos" );
define( "_MD_MYTUBE_DTOTALFORLAST", "Total dos últimos novos vídeos" );
define( "_MD_MYTUBE_AGREE", "Eu concordo" );
define( "_MD_MYTUBE_DOYOUAGREE", "Você concorda com os termos acima?" );
define( "_MD_MYTUBE_DISCLAIMERAGREEMENT", "Retratação" );
define( "_MD_MYTUBE_DUPLOADSCRSHOT", "Upload de ScreenShot de Imagem:" );
define( "_MD_MYTUBE_RESOURCEID", "Vídeo id#: " );
define( "_MD_MYTUBE_REPORTER", "Relato Original: " );
define( "_MD_MYTUBE_DATEREPORTED", "Data do Relato: " );
define( "_MD_MYTUBE_RESOURCEREPORTED", "Vídeo informado com problemas" );
define( "_MD_MYTUBE_RESOURCEREPORTED2", "Este vídeo foi informado estar com problemas. Nós estamos trabalhando para corrigir isso." );
define( "_MD_MYTUBE_BROWSETOTOPIC", "<b>Navegue pelos vídeos listados em ordem alfabética.</b>" );
define( "_MD_MYTUBE_WEBMASTERACKNOW", "Informação de problemas com vídeo recebida: " );
define( "_MD_MYTUBE_WEBMASTERCONFIRM", "Informação de problemas com vídeo confirmada: " );
define( "_MD_MYTUBE_ERRORSENDEMAIL", "Informação de problemas com vídeo confirmada, mas ocorreu um erro ao enviar a notificação por e-mail ao webmaster." );

define( "_MD_MYTUBE_DELETE", "Excluir" );
define( "_MD_MYTUBE_DISPLAYING", "Exibir por: " );
define( "_MD_MYTUBE_LEGENDTEXTNEW", "Novo Hoje" );
define( "_MD_MYTUBE_LEGENDTEXTNEWTHREE", "Novo a 3 Dias" );
define( "_MD_MYTUBE_LEGENDTEXTTHISWEEK", "Novo Nesta Semana" );
define( "_MD_MYTUBE_LEGENDTEXTNEWLAST", "Com mais de 1 Semana" );
define( "_MD_MYTUBE_THISFILEDOESNOTEXIST", "Erro: este vídeo não existe!" );
define( "_MD_MYTUBE_BROKENREPORTED", "Vídeo com Problemas Reportado" );

define( "_MD_MYTUBE_REV_SNEWMNAMEDESC", "Por favor, preencha completamente o formulário abaixo, e nós adicionaremos seu cometário o mais rápido possível.<br /><br />
Obrigado por enviar sua opinião. Queremos dar aos nossos visitantes a possibilide de encontrar vídeos de qualidade com rapidez.<br /><br />
Todos os comentários serão revisados por algum de nossos webmasters antes de serem colocados no website. 
" );
define( "_MD_MYTUBE_ISNOTAPPROVED", "Seu envio terá primeiro que ser aprovado por um moderador." );
define( "_MD_MYTUBE_HOMEPAGETITLEC", "Título da Home Page: " );
define( "_MD_MYTUBE_SCREENSHOT", "ScreenShot:" );
define( "_MD_MYTUBE_SCREENSHOTCLICK", "Exibir imagem plena" );
define( "_MD_MYTUBE_OTHERBYUID", "Outros vídeo por: " );
define( "_MD_MYTUBE_NOOTHERBYUID", "Nenhum outros vídeos por: " );
define( "_MD_MYTUBE_LINKTIMES", "Duração do Vídeo: " );
define( "_MD_MYTUBE_MAINTOTAL", "Total de Vídeos: " );
define( "_MD_MYTUBE_VIDEONOW", "Exibir vídeo" );
define( "_MD_MYTUBE_PAGES", "<b>Páginas</b>" );
define( "_MD_MYTUBE_RATEDRESOURCE", "clasificação do Vídeo" );
define( "_MD_MYTUBE_SUBMITTER", "Enviado por" );
define( "_MD_MYTUBE_ERROR", "Erro ao atualizar a base de dados: a informação não foi salva" );
define( "_MD_MYTUBE_COPYRIGHT", "copyright" );
define( "_MD_MYTUBE_INFORUM", "Discutir no Fórum" );
// added frankblack
define( "_MD_MYTUBE_NOTALLOWESTOSUBMIT", "Você não tem permissão para enviar vídeos" );
define( "_MD_MYTUBE_INFONOSAVEDB", "A informação não foi salva na base de dados: <br /><br />" );

define( "_MD_MYTUBE_NEWLAST", "Novos enviados antes da última semana" );
define( "_MD_MYTUBE_NEWTHIS", "Novos enviados nesta semana" );
define( "_MD_MYTUBE_THREE", "Novos enviados nos últimos três dias" );
define( "_MD_MYTUBE_TODAY", "Novos enviados hoje" );
define( "_MD_MYTUBE_NO_FILES", "Ainda não há vídeos" );

define( "_MD_MYTUBE_NOPERMISSIONTOPOST", "Você não tem permissão para postar nesta categoria." );
define( "_MD_MYTUBE_RESOURCES", "Vídeos" );

define( "_MD_MYTUBE_PUBLISHDATE", "Publicado em" );
define( "_MD_MYTUBE_APPROVE", "Aprovado" );
define( "_MD_MYTUBE_MODERATOR_OPTIONS", "Opções do Moderador" );

// added by McDonald
define( "_MD_MYTUBE_TIME", "Hora:" );
define( "_MD_MYTUBE_TIMEB", "<b>Hora:</b>" );
define( "_MD_MYTUBE_KEYWORDS", "Palavras-chave:" );
define( "_MD_MYTUBE_KEYWORDS_NOTE", "Palavras-chave devem ser separadas com vírgula (palavrachave1, palavrachave2, palavrachave3)" );
define( "_MD_MYTUBE_NOVIDEOLOAD", "Obrigado pelo seu envio!" );
define( "_MD_MYTUBE_LINKID", "Vídeo id" );
define( "_MD_MYTUBE_ADDTO", "Adicionar em: " );
define( "_MD_MYTUBE_NEWVIDEOS", "Vídeos Recentes" );
define( "_MD_MYTUBE_TAKINGUBACK", "Retornar." );
define( "_MD_MYTUBE_ADMINSECTION", "Seção Administrativa" );

// Version 1.04 RC-1
define( "_MD_MYTUBE_BLIPTV", "Blip.tv" );

// Version 1.04 RC-2
define( "_MD_MYTUBE_CLIPFISH", "ClipFish" );
define( "_MD_MYTUBE_LIVELEAK", "LiveLeak" );
define( '_MD_MYTUBE_MAKTOOB', 'Maktoob' );
define( '_MD_MYTUBE_VEOH', 'Veoh' );
define( '_MD_MYTUBE_STOPIT', 'PARE DE ENGANAR!!' ); //não tenho certeza para traduzir - GibaPhp
define( "_MD_MYTUBE_VIDEO_DLVIDIDDSC", "Assumir a parte vermelha como um dado adquirido nos exemplos a seguir" );

//Version 1.04 RC-3
define( "_MD_MYTUBE_MODIFYNOTALLOWED", "Você não está autorizado a modificar outros vídeos!!" );

// Version 1.05 RC-1
define( '_MD_MYTUBE_VIMEO', 'Vimeo' );
define( '_MD_MYTUBE_MEGAVIDEO', 'Megavideo' );
define( '_MD_MYTUBE_VIDDLER', 'Viddler' );
define( '_MD_MYTUBE_UPDATED', 'Updated!' );
define( '_MD_MYTUBE_NEW', 'New!' );

function mytube_alfabet() {
	$mytube_alfabet = array ( '0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z' );
	return $mytube_alfabet;
}

// Version 1.06 RC-1
define( '_MD_MYTUBE_FEED', 'RSS feed' );
define( '_MD_MYTUBE_NATIOGEO', 'National Geographic' );
define( '_MD_MYTUBE_NOPERMISSIONTOVIEW', 'Sorry, you do not have permission to view this category.' );
?>