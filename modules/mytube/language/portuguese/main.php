<?php
/**
 * $Id: main.php 2758 2008-06-11 16:40:26Z gibaphp $
 * Module: MyTube
 * Author: mcdonald
 * Language: Portuguesebr
 * Licence: GNU
 */
//� necess�rio revis�o de v�rios termos para o portugu�s de portugal, mas eu penso que dever� ajudar o que j� est� conclu�do.

define( "_MD_MYTUBE_NOVIDEO", "Este v�deo n�o existe!" );
define( "_MD_MYTUBE_SUBCATLISTING", "Lista de Categorias" );
define( "_MD_MYTUBE_ISADMINNOTICE", "Webmaster: h� um problema com esta imagem." );
define( "_MD_MYTUBE_THANKSFORINFO", "Obrigado pelo envio do v�deo.<br />Voc� ser� avisado quando o webmaster aprov�-lo." );
define( "_MD_MYTUBE_ISAPPROVED", "Obrigado pelo envio do v�deo.<br />Ele foi aprovado e agora aparecer� na listagem." );
define( "_MD_MYTUBE_THANKSFORHELP", "Obrigado por ajudar a manter a integridade deste diret�rio." );
define( "_MD_MYTUBE_FORSECURITY", "Por raz�es de seguran�a o seu nome de usu�rio e endere�o IP ser�o temporariamente gravados." );
define( "_MD_MYTUBE_DESCRIPTION", "Descri��o" );
define( "_MD_MYTUBE_SUBMITCATHEAD", "Formul�rio de envio de v�deo" );
define( "_MD_MYTUBE_MAIN", "In�cio" );
define( "_MD_MYTUBE_POPULAR", "Popular" );
define( "_MD_MYTUBE_NEWTHISWEEK", "Novidade desta semana" );
define( "_MD_MYTUBE_UPTHISWEEK", "Atualizados esta semana" );
define( "_MD_MYTUBE_POPULARITYLTOM", "Popularidade (dos menos para os mais vistos)" );
define( "_MD_MYTUBE_POPULARITYMTOL", "Popularidade (dos mais para os menos vistos)" );
define( "_MD_MYTUBE_TITLEATOZ", "T�tulo (A para Z)" );
define( "_MD_MYTUBE_TITLEZTOA", "T�tulo (Z para A)" );
define( "_MD_MYTUBE_DATEOLD", "Data (V�deo antigos listados primeiro)" );
define( "_MD_MYTUBE_DATENEW", "Data (V�deos novos listados primeiro)" );
define( "_MD_MYTUBE_RATINGLTOH", "Classifica��o (dos menos cotados para os mais cotados)" );
define( "_MD_MYTUBE_RATINGHTOL", "Classifica��o (dos mais cotados para os menos cotados)" );
define( "_MD_MYTUBE_DESCRIPTIONC", "Descri��o: " );
define( "_MD_MYTUBE_CATEGORYC", "Categoria: " );
define( "_MD_MYTUBE_VERSION", "Vers�o" );
define( "_MD_MYTUBE_SUBMITDATE", "Enviado em " );
define( "_MD_MYTUBE_VIDEOHITS", "<b>Visualizado:</b> %s vezes" );
define( "_MD_MYTUBE_PUBLISHERC", "Publicado por: " );
define( "_MD_MYTUBE_RATINGC", "Classifica��o: " );
define( "_MD_MYTUBE_ONEVOTE", "1 Voto" );
define( "_MD_MYTUBE_NUMVOTES", "%s Votos" );
define( "_MD_MYTUBE_RATETHISFILE", "Classifique este v�deo" );
define( "_MD_MYTUBE_MODIFY", "Modificado" );
define( "_MD_MYTUBE_REPORTBROKEN", "Reporte link quebrado" );
define( "_MD_MYTUBE_BROKENREPORT", "Reporte v�deo defeituoso" );
define( "_MD_MYTUBE_SUBMITBROKEN", "Enviar" );
define( "_MD_MYTUBE_BEFORESUBMIT", "Antes de informar um v�deo com problemas, por favor verifique se o problema � no link ou no site de origem do v�deo, e se este site n�o est� apenas temporariamente off-line." );
define( "_MD_MYTUBE_TELLAFRIEND", "Recomendar" );
define( "_MD_MYTUBE_EDIT", "Editar" );
define( "_MD_MYTUBE_THEREARE", "H� <b>%s</b> <i>Categorias</i> e <b>%s</b> <i>V�deos</i> listados" );
define( "_MD_MYTUBE_THEREIS", "H� <b>%s</b> <i>Categoria</i> e <b>%s</b> <i>V�deos</i> listados" );
define( "_MD_MYTUBE_LATESTLIST", "Listas mais recentes" );
define( "_MD_MYTUBE_FILETITLE", "T�tulo do V�deo: " );
define( "_MD_MYTUBE_DLVIDID", "C�digo do Video: " );
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
define( "_MD_MYTUBE_VIDEO_PICURL", "Picture url: " );
define( "_MD_MYTUBE_VIDEO_PICURLNOTE", "Url da Foto quando for um c�digo do Google Video, MySpace TV, DailyMotion, Blip.tv, ClipFish, LiveLeak, Veoh, Vimeo, Viddler ou Maktoob" );
define( "_MD_MYTUBE_VIDSOURCE", "C�digo do Video:" );
define( "_MD_MYTUBE_YOUTUBE", "YouTube" );
define( "_MD_MYTUBE_METACAFE", "MetaCafe" );
define( "_MD_MYTUBE_IFILM", "Spike" );
define( "_MD_MYTUBE_GOOGLEVIDEO", "Google Video" );
define( "_MD_MYTUBE_MYSPAVETV", "MySpace TV" );
define( "_MD_MYTUBE_PHOTOBUCKET", "Photobucket" );
define( "_MD_MYTUBE_DAILYMOTION", "DailyMotion" );
define( "_MD_MYTUBE_VIDEO_PUBLISHER", "Nome do editor do Video:" );
define( "_MD_MYTUBE_HOMEPAGEC", "WebSite: " );
define( "_MD_MYTUBE_NOTSPECIFIED", "N�o Especificado" );
define( "_MD_MYTUBE_PUBLISHER", "Publicador" );
define( "_MD_MYTUBE_UPDATEDON", "Atualizado em" );
define( "_MD_MYTUBE_PRICEFREE", "Gratu�to" );
define( "_MD_MYTUBE_VIEWDETAILS", "Ver V�deo-Clip" );
define( "_MD_MYTUBE_OPTIONS", "Op��es: " );
define( "_MD_MYTUBE_NOTIFYAPPROVE", "Notifique-me quando este v�deo for aprovado" );
define( "_MD_MYTUBE_VOTEAPPRE", "Seu voto � apreciado." );
define( "_MD_MYTUBE_THANKYOU", "Obrigado por votar aqui no %s" ); // %s � o nome do seu site
define( "_MD_MYTUBE_VOTEONCE", "Por favor, n�o vote no mesmo v�deo mais de uma vez." );
define( "_MD_MYTUBE_RATINGSCALE", "A escala � de 1 a 10, com 1 sendo fraco e 10 sendo excelente." );
define( "_MD_MYTUBE_BEOBJECTIVE", "Por favor seja objetivo. Se todos receberem 1 ou 10, a classifica��o n�o ser� muito �til." );
define( "_MD_MYTUBE_DONOTVOTE", "N�o vote em seu pr�prio v�deo." );
define( "_MD_MYTUBE_RATEIT", "Classificado!" );
define( "_MD_MYTUBE_INTFILEFOUND", "Veja este v�deo em %s" ); // %s � o nome do seu site
define( "_MD_MYTUBE_RANK", "Classifica��o" );
define( "_MD_MYTUBE_CATEGORY", "Categoria" );
define( "_MD_MYTUBE_HITS", "Visualizado" );
define( "_MD_MYTUBE_RATING", "Classifica��o" );
define( "_MD_MYTUBE_VOTE", "Voto" );
define( "_MD_MYTUBE_SORTBY", "Ordenar por:" );
define( "_MD_MYTUBE_TITLE", "T�tulo" );
define( "_MD_MYTUBE_DATE", "Data" );
define( "_MD_MYTUBE_POPULARITY", "Popularidade" );
define( "_MD_MYTUBE_TOPRATED", "Classifica��o" );
define( "_MD_MYTUBE_CURSORTBY", "V�deos atualmente classificados em: %s" );
define( "_MD_MYTUBE_CANCEL", "Cancelar" );
define( "_MD_MYTUBE_ALREADYREPORTED", "Voc� enviou um aviso de problemas com este v�deo." );
define( "_MD_MYTUBE_MUSTREGFIRST", "Sinto, voc� n�o tem permiss�o para executar esta a��o.<br />Por favor, primeiro se registre ou fa�a o login!" );
define( "_MD_MYTUBE_NORATING", "Nenhuma clasifica��o selecionada." );
define( "_MD_MYTUBE_VOTEFORTITLE", "Classifique este V�deo: " );
define( "_MD_MYTUBE_CANTVOTEOWN", "Voc� n�o pode votar no v�deo que voc� mesmo enviou.<br />Todos os votos s�o registrados e revistos." );
define( "_MD_MYTUBE_SUBMITVIDEO", "Enviar v�deo" );
define( "_MD_MYTUBE_SUB_SNEWMNAMEDESC", "<ul><li>Todos os videos novos est�o sujeitos � valida��o e pode levar at� 24 horas antes que apare�am na listagem. </li><li>Nos reservamos o direito de recusar qualquer v�deo ou altera��o posterior de conte�do que n�o tenha sido aprovada. </li></ul>" );
define( "_MD_MYTUBE_MAINLISTING", "Lista das Categorias Principais" );
define( "_MD_MYTUBE_LASTWEEK", "�ltima Semana" );
define( "_MD_MYTUBE_LAST30DAYS", "�ltimos 30 Dias" );
define( "_MD_MYTUBE_1WEEK", "1 Semana" );
define( "_MD_MYTUBE_2WEEKS", "2 Semanas" );
define( "_MD_MYTUBE_30DAYS", "30 Dias" );
define( "_MD_MYTUBE_SHOW", "Mostrar" );
define( "_MD_MYTUBE_DAYS", "dias" );
define( "_MD_MYTUBE_NEWlinks", "Novos v�deos" );
define( "_MD_MYTUBE_TOTALNEWVIDEOS", "Total de novos v�deos" );
define( "_MD_MYTUBE_DTOTALFORLAST", "Total dos �ltimos novos v�deos" );
define( "_MD_MYTUBE_AGREE", "Eu concordo" );
define( "_MD_MYTUBE_DOYOUAGREE", "Voc� concorda com os termos acima?" );
define( "_MD_MYTUBE_DISCLAIMERAGREEMENT", "Disclaimer" );
define( "_MD_MYTUBE_DUPLOADSCRSHOT", "Upload de ScreenShot de Imagem:" );
define( "_MD_MYTUBE_RESOURCEID", "V�deo id#: " );
define( "_MD_MYTUBE_REPORTER", "Informe Original: " );
define( "_MD_MYTUBE_DATEREPORTED", "Data do Informe: " );
define( "_MD_MYTUBE_RESOURCEREPORTED", "V�deo informado com problemas" );
define( "_MD_MYTUBE_RESOURCEREPORTED2", "Este v�deo foi informado estar com problemas. N�s estamos trabalhando para corrigir isso." );
define( "_MD_MYTUBE_BROWSETOTOPIC", "<b>Navegue pelos v�deos listados em ordem alfab�tica.</b>" );
define( "_MD_MYTUBE_WEBMASTERACKNOW", "Informa��o de problemas com v�deo recebida: " );
define( "_MD_MYTUBE_WEBMASTERCONFIRM", "Informa��o de problemas com v�deo confirmada: " );
define( "_MD_MYTUBE_ERRORSENDEMAIL", "Informa��o de problemas com v�deo confirmada, mas ocorreu um erro ao enviar a notifica��o por e-mail ao webmaster." );

define( "_MD_MYTUBE_DELETE", "Excluir" );
define( "_MD_MYTUBE_DISPLAYING", "Exibir por: " );
define( "_MD_MYTUBE_LEGENDTEXTNEW", "Novo Hoje" );
define( "_MD_MYTUBE_LEGENDTEXTNEWTHREE", "Novo a 3 Dias" );
define( "_MD_MYTUBE_LEGENDTEXTTHISWEEK", "Novo Nesta Semana" );
define( "_MD_MYTUBE_LEGENDTEXTNEWLAST", "Com mais de 1 Semana" );
define( "_MD_MYTUBE_THISFILEDOESNOTEXIST", "Erro: este v�deo n�o existe!" );
define( "_MD_MYTUBE_BROKENREPORTED", "V�deo com Problemas Reportado" );

define( "_MD_MYTUBE_REV_SNEWMNAMEDESC", "Por favor, preencha completamente o formul�rio abaixo, e n�s adicionaremos seu comet�rio o mais r�pido poss�vel.<br /><br />
Obrigado por enviar sua opini�o. Queremos dar aos nossos visitantes a possibilide de encontrar v�deos de qualidade com rapidez.<br /><br />
Todos os coment�rios ser�o revisados por algum de nossos webmasters antes de serem colocados no website. 
" );
define( "_MD_MYTUBE_ISNOTAPPROVED", "Seu envio ter� primeiro que ser aprovado por um moderador." );
define( "_MD_MYTUBE_HOMEPAGETITLEC", "T�tulo da Home Page: " );
define( "_MD_MYTUBE_SCREENSHOT", "ScreenShot:" );
define( "_MD_MYTUBE_SCREENSHOTCLICK", "Exibir imagem plena" );
define( "_MD_MYTUBE_OTHERBYUID", "Outros v�deo por: " );
define( "_MD_MYTUBE_NOOTHERBYUID", "Nenhum outros v�deos por: " );
define( "_MD_MYTUBE_LINKTIMES", "Dura��o do V�deo: " );
define( "_MD_MYTUBE_MAINTOTAL", "Total de V�deos: " );
define( "_MD_MYTUBE_VIDEONOW", "Exibir v�deo" );
define( "_MD_MYTUBE_PAGES", "<b>P�ginas</b>" );
define( "_MD_MYTUBE_RATEDRESOURCE", "clasifica��o do V�deo" );
define( "_MD_MYTUBE_SUBMITTER", "Enviado por" );
define( "_MD_MYTUBE_ERROR", "Erro ao atualizar a base de dados: a informa��o n�o foi salva" );
define( "_MD_MYTUBE_COPYRIGHT", "copyright" );
define( "_MD_MYTUBE_INFORUM", "Discutir no F�rum" );
// added frankblack
define( "_MD_MYTUBE_NOTALLOWESTOSUBMIT", "Voc� n�o tem permiss�o para enviar v�deos" );
define( "_MD_MYTUBE_INFONOSAVEDB", "A informa��o n�o foi salva na base de dados: <br /><br />" );

define( "_MD_MYTUBE_NEWLAST", "Novos enviados antes da �ltima semana" );
define( "_MD_MYTUBE_NEWTHIS", "Novos enviados nesta semana" );
define( "_MD_MYTUBE_THREE", "Novos enviados nos �ltimos tr�s dias" );
define( "_MD_MYTUBE_TODAY", "Novos enviados hoje" );
define( "_MD_MYTUBE_NO_FILES", "Ainda n�o h� v�deos" );

define( "_MD_MYTUBE_NOPERMISSIONTOPOST", "Voc� n�o tem permiss�o para postar nesta categoria." );
define( "_MD_MYTUBE_RESOURCES", "V�deos" );

define( "_MD_MYTUBE_PUBLISHDATE", "Publicado em" );
define( "_MD_MYTUBE_APPROVE", "Aprovado" );
define( "_MD_MYTUBE_MODERATOR_OPTIONS", "Op��es do Moderador" );

// added by McDonald
define( "_MD_MYTUBE_TIME", "Hora:" );
define( "_MD_MYTUBE_TIMEB", "<b>Hora:</b>" );
define( "_MD_MYTUBE_KEYWORDS", "Palavras-chave:" );
define( "_MD_MYTUBE_KEYWORDS_NOTE", "Palavras-chave devem ser separadas com v�rgula (palavrachave1, palavrachave2, palavrachave3)" );
define( "_MD_MYTUBE_NOVIDEOLOAD", "Obrigado pelo seu envio!" );
define( "_MD_MYTUBE_LINKID", "V�deo id" );
define( "_MD_MYTUBE_ADDTO", "Adicionar em: " );
define( "_MD_MYTUBE_NEWVIDEOS", "V�deos Recentes" );
define( "_MD_MYTUBE_TAKINGUBACK", "Retornar." );
define( "_MD_MYTUBE_ADMINSECTION", "Se��o Administrativa" );

// Version 1.04 RC-1
define( "_MD_MYTUBE_BLIPTV", "Blip.tv" );

// Version 1.04 RC-2
define( "_MD_MYTUBE_CLIPFISH", "ClipFish" );
define( "_MD_MYTUBE_LIVELEAK", "LiveLeak" );
define( '_MD_MYTUBE_MAKTOOB', 'Maktoob' );
define( '_MD_MYTUBE_VEOH', 'Veoh' );
define( '_MD_MYTUBE_STOPIT', 'STOP IT YOU FOOL!!' );
define( "_MD_MYTUBE_VIDEO_DLVIDIDDSC", "Take over red part as given in the examples below" );

//Version 1.04 RC-3
define( "_MD_MYTUBE_MODIFYNOTALLOWED", "You're not allowed to modify others videos!!" );

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