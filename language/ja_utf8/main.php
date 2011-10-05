<?php
/**
 * $Id: main.php
 * Module: MyTube
 * Language: japanese
 * Format: UTF-8
 */

define( "_MD_MYTUBE_NOVIDEO", "このビデオは存在しません！" );
define( "_MD_MYTUBE_SUBCATLISTING", "カテゴリーリスト" );
define( "_MD_MYTUBE_ISADMINNOTICE", "管理者: このイメージには問題があります。" );
define( "_MD_MYTUBE_THANKSFORINFO", "投稿ありがとうございます。<br />管理者へ承認リクエストを通知します。" );
define( "_MD_MYTUBE_ISAPPROVED", "投稿ありがとうございます。<br />あなたのリクエストは承認されました。まもなくリストに載るでしょう。" );
define( "_MD_MYTUBE_THANKSFORHELP", "ディレクトリの整合性チェックありがとうございます。" );
define( "_MD_MYTUBE_FORSECURITY", "セキュリティ上の理由からあなたのユーザー名とＩＰアドレスが一時的に記録されます。" );
define( "_MD_MYTUBE_DESCRIPTION", "記述" );
define( "_MD_MYTUBE_SUBMITCATHEAD", "ビデオフォームの投稿" );
define( "_MD_MYTUBE_MAIN", "ホーム" );
define( "_MD_MYTUBE_POPULAR", "人気" );
define( "_MD_MYTUBE_NEWTHISWEEK", "今週の新規登録" );
define( "_MD_MYTUBE_UPTHISWEEK", "今週の更新" );
define( "_MD_MYTUBE_POPULARITYLTOM", "人気度 (表示回数昇順)" );
define( "_MD_MYTUBE_POPULARITYMTOL", "人気度 (表示回数降順)" );
define( "_MD_MYTUBE_TITLEATOZ", "タイトル (A to Z)" );
define( "_MD_MYTUBE_TITLEZTOA", "タイトル (Z to A)" );
define( "_MD_MYTUBE_DATEOLD", "日付 (古いビデオからリスト)" );
define( "_MD_MYTUBE_DATENEW", "日付 (新しいビデオからリスト)" );
define( "_MD_MYTUBE_RATINGLTOH", "レート (低いスコアから昇順)" );
define( "_MD_MYTUBE_RATINGHTOL", "レート (高いスコアから降順)" );
define( "_MD_MYTUBE_DESCRIPTIONC", "記述: " );
define( "_MD_MYTUBE_CATEGORYC", "カテゴリー: " );
define( "_MD_MYTUBE_VERSION", "バージョン" );
define( "_MD_MYTUBE_SUBMITDATE", "投稿" );
define( "_MD_MYTUBE_VIDEOHITS", "<b>表示回数:</b> %s 回" );
define( "_MD_MYTUBE_PUBLISHERC", "公開者: " );
define( "_MD_MYTUBE_RATINGC", "レート: " );
define( "_MD_MYTUBE_ONEVOTE", "投票数 1 回" );
define( "_MD_MYTUBE_NUMVOTES", "投票数 %s 回" );
define( "_MD_MYTUBE_RATETHISFILE", "このビデオのレート" );
define( "_MD_MYTUBE_MODIFY", "変更" );
define( "_MD_MYTUBE_REPORTBROKEN", "破損の報告" );
define( "_MD_MYTUBE_BROKENREPORT", "破損ビデオの報告" );
define( "_MD_MYTUBE_SUBMITBROKEN", "投稿" );
define( "_MD_MYTUBE_BEFORESUBMIT", "破損ビデオの報告を投稿するする前にサイト上にビデオ自体があるかどうかをチェックしてください。" );
define( "_MD_MYTUBE_TELLAFRIEND", "お勧め" );
define( "_MD_MYTUBE_EDIT", "編集" );
define( "_MD_MYTUBE_THEREARE", "<b>%s</b> <i>個のカテゴリー</i> と <b>%s</b> <i>個のビデオ</i> があります。" );
define( "_MD_MYTUBE_THEREIS", "<b>%s</b> <i>個のカテゴリー</i> と <b>%s</b> <i>個のビデオ</i> があります。" );
define( "_MD_MYTUBE_LATESTLIST", "最新のリスト" );
define( "_MD_MYTUBE_FILETITLE", "ビデオタイトル: " );
define( "_MD_MYTUBE_DLVIDID", "ビデオIDコード: " );
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
define( "_MD_MYTUBE_VIDEO_PICURL", "画像URL: " );
define( "_MD_MYTUBE_VIDEO_PICURLNOTE", "<small>ソースが Google Video, MySpace TV , DailyMotion のときの画像URL</small>" );
define( "_MD_MYTUBE_VIDSOURCE", "ビデオソース:" );
define( "_MD_MYTUBE_YOUTUBE", "YouTube" );
define( "_MD_MYTUBE_METACAFE", "MetaCafe" );
define( "_MD_MYTUBE_IFILM", "Spike" );
define( "_MD_MYTUBE_GOOGLEVIDEO", "Google Video" );
define( "_MD_MYTUBE_MYSPAVETV", "MySpace TV" );
define( "_MD_MYTUBE_PHOTOBUCKET", "Photobucket" );
define( "_MD_MYTUBE_DAILYMOTION", "DailyMotion" );
define( "_MD_MYTUBE_VIDEO_PUBLISHER", "ビデオ公開者名:" );
define( "_MD_MYTUBE_HOMEPAGEC", "ホームページ: " );
define( "_MD_MYTUBE_NOTSPECIFIED", "指定なし" );
define( "_MD_MYTUBE_PUBLISHER", "公開者" );
define( "_MD_MYTUBE_UPDATEDON", "更新中" );
define( "_MD_MYTUBE_PRICEFREE", "フリー" );
define( "_MD_MYTUBE_VIEWDETAILS", "ビデオクリップの表示" );
define( "_MD_MYTUBE_OPTIONS", 'オプション: ' );
define( "_MD_MYTUBE_NOTIFYAPPROVE", 'このビデオが承認されたとき通知する' );
define( "_MD_MYTUBE_VOTEAPPRE", "あなたの投票が評価されました。" );
define( "_MD_MYTUBE_THANKYOU", "当サイト %s での投票ありがとうございます。" ); // %s is your site name
define( "_MD_MYTUBE_VOTEONCE", "同じものに１回以上投票しないでください。" );
define( "_MD_MYTUBE_RATINGSCALE", "レートの段階は 1 - 10 です。1 は最も評価が低く 10 は最も高い評価になります。" );
define( "_MD_MYTUBE_BEOBJECTIVE", "客観的に評価してください。みんな 1 または 10 ではあまり役立ちません。" );
define( "_MD_MYTUBE_DONOTVOTE", "自分のものには投票しないでください。" );
define( "_MD_MYTUBE_RATEIT", "評価レート!" );
define( "_MD_MYTUBE_INTFILEFOUND", "%s におすすめビデオがあります。" ); // %s is your site name
define( "_MD_MYTUBE_RANK", "ランク" );
define( "_MD_MYTUBE_CATEGORY", "カテゴリー" );
define( "_MD_MYTUBE_HITS", "表示回数" );
define( "_MD_MYTUBE_RATING", "レート結果" );
define( "_MD_MYTUBE_VOTE", "投票" );
define( "_MD_MYTUBE_SORTBY", "表示順:" );
define( "_MD_MYTUBE_TITLE", "タイトル" );
define( "_MD_MYTUBE_DATE", "日付" );
define( "_MD_MYTUBE_POPULARITY", "人気度" );
define( "_MD_MYTUBE_TOPRATED", "レート" );
define( "_MD_MYTUBE_CURSORTBY", "現在のビデオの表示順: %s" );
define( "_MD_MYTUBE_CANCEL", "キャンセル" );
define( "_MD_MYTUBE_ALREADYREPORTED", "既に破損レポートを投稿しています。" );
define( "_MD_MYTUBE_MUSTREGFIRST", "あなたはこの操作を行う権限がありません。<br />最初に登録またはログインしてください!" );
define( "_MD_MYTUBE_NORATING", "評価がありません。" );
define( "_MD_MYTUBE_VOTEFORTITLE", "このビデオの評価: " );
define( "_MD_MYTUBE_CANTVOTEOWN", "投票することができません。<br />投票はすべて記録されレビューされます。" );
define( "_MD_MYTUBE_SUBMITVIDEO", "ビデオの投稿" );
define( "_MD_MYTUBE_SUB_SNEWMNAMEDESC", "<ul><li>すべての新規ビデオは妥当性検査の対象となります。したがってリストに表示されるまで最大２４時間かかります。</li><li>当サイト管理者は投稿されたすべてのビデオに対して表示を拒否する権利および許可なく内容を変更する権利を有します。</li></ul>" );
define( "_MD_MYTUBE_MAINLISTING", "メインカテゴリー" );
define( "_MD_MYTUBE_LASTWEEK", "先週" );
define( "_MD_MYTUBE_LAST30DAYS", "最近 30 日間" );
define( "_MD_MYTUBE_1WEEK", "1 週" );
define( "_MD_MYTUBE_2WEEKS", "2 週" );
define( "_MD_MYTUBE_30DAYS", "30 日" );
define( "_MD_MYTUBE_SHOW", "表示" );
define( "_MD_MYTUBE_DAYS", "日" );
define( "_MD_MYTUBE_NEWlinks", "新規ビデオ" );
define( "_MD_MYTUBE_TOTALNEWVIDEOS", "新規ビデオ総数" );
define( "_MD_MYTUBE_DTOTALFORLAST", "最近の新規ビデオ総数" );
define( "_MD_MYTUBE_AGREE", "同意します。" );
define( "_MD_MYTUBE_DOYOUAGREE", "上記文言に同意されますか?" );
define( "_MD_MYTUBE_DISCLAIMERAGREEMENT", "Disclaimer" );
define( "_MD_MYTUBE_DUPLOADSCRSHOT", "スクリーンショット画像のアップロード:" );
define( "_MD_MYTUBE_RESOURCEID", "リソース ID#: " );
define( "_MD_MYTUBE_REPORTER", "オリジナルの報告者: " );
define( "_MD_MYTUBE_DATEREPORTED", "報告日: " );
define( "_MD_MYTUBE_RESOURCEREPORTED", "破損レポートされたリソース" );
define( "_MD_MYTUBE_RESOURCEREPORTED2", "このビデオは既に破損報告があったので修復する予定です。" );
define( "_MD_MYTUBE_BROWSETOTOPIC", "<b>アルファベット順にビデオを表示する。</b>" );
define( "_MD_MYTUBE_WEBMASTERACKNOW", "破損レポートの認知: " );
define( "_MD_MYTUBE_WEBMASTERCONFIRM", "破損レポートの確認: " );
define( "_MD_MYTUBE_ERRORSENDEMAIL", "破損レポートが確認されました。しかし管理者へEメール通知がエラーとなりました。" );

define( "_MD_MYTUBE_DELETE", "削除" );
define( "_MD_MYTUBE_DISPLAYING", "表示: " );
define( "_MD_MYTUBE_LEGENDTEXTNEW", "本日の新規ビデオ" );
define( "_MD_MYTUBE_LEGENDTEXTNEWTHREE", "3 日間の新規ビデオ" );
define( "_MD_MYTUBE_LEGENDTEXTTHISWEEK", "今週の新規ビデオ" );
define( "_MD_MYTUBE_LEGENDTEXTNEWLAST", "1 週以上" );
define( "_MD_MYTUBE_THISFILEDOESNOTEXIST", "エラー: このビデオは存在しません!" );
define( "_MD_MYTUBE_BROKENREPORTED", "破損ビデオがレポートされました。" );

define( "_MD_MYTUBE_REV_SNEWMNAMEDESC", " 
以下のフォームを完全に埋めてください。可能なかぎりあなたのレビューを受けます。<br /><br />
ご意見ありがとうございます。できる限りはやくユーザーにソフトウェア品質をお伝えします。<br /><br />すべてのユーザーレビューはサイト上に公開される前に管理者によってレビューされます。 
" );
define( "_MD_MYTUBE_ISNOTAPPROVED", "あなたの投稿は最初にモデレータによる承認が必要です。" );
define( "_MD_MYTUBE_HOMEPAGETITLEC", "ホームページのタイトル: " );
define( "_MD_MYTUBE_SCREENSHOT", "スクリーンショット:" );
define( "_MD_MYTUBE_SCREENSHOTCLICK", "フルイメージの表示" );
define( "_MD_MYTUBE_OTHERBYUID", "その他のビデオ: " );
define( "_MD_MYTUBE_NOOTHERBYUID", "それ以外のビデオ: " );
define( "_MD_MYTUBE_LINKTIMES", "ビデオの時間: " );
define( "_MD_MYTUBE_MAINTOTAL", "ビデオ総数: " );
define( "_MD_MYTUBE_VIDEONOW", "ビデオの表示" );
define( "_MD_MYTUBE_PAGES", "<b>ページ</b>" );
define( "_MD_MYTUBE_RATEDRESOURCE", "評価されたリソース" );
define( "_MD_MYTUBE_SUBMITTER", "投稿者" );
define( "_MD_MYTUBE_ERROR", "データベース更新中のエラー: 情報が保存されません。" );
define( "_MD_MYTUBE_COPYRIGHT", "copyright" );
define( "_MD_MYTUBE_INFORUM", "フォーラムでの議論" );
// added frankblack
define( "_MD_MYTUBE_NOTALLOWESTOSUBMIT", "ビデオの投稿を許可されていません。" );
define( "_MD_MYTUBE_INFONOSAVEDB", "情報がデータベースに保存されません。: <br /><br />" );

define( "_MD_MYTUBE_NEWLAST", "先週以前の新規投稿" );
define( "_MD_MYTUBE_NEWTHIS", "今週の新規投稿" );
define( "_MD_MYTUBE_THREE", "３日間の新規投稿" );
define( "_MD_MYTUBE_TODAY", "本日の新規投稿" );
define( "_MD_MYTUBE_NO_FILES", "まだビデオがありません。" );

define( "_MD_MYTUBE_NOPERMISSIONTOPOST", "このカテゴリーへの投稿が許可されていません。" );
define( "_MD_MYTUBE_RESOURCES", "リソース" );

define( "_MD_MYTUBE_PUBLISHDATE", "公開" );
define( "_MD_MYTUBE_APPROVE", "承認" );
define( "_MD_MYTUBE_MODERATOR_OPTIONS", "モデレータオプション" );

// added by McDonald
define( "_MD_MYTUBE_TIME", "時間:" );
define( "_MD_MYTUBE_TIMEB", "<b>時間:</b>" );
define( "_MD_MYTUBE_KEYWORDS", "キーワード:" );
define( "_MD_MYTUBE_KEYWORDS_NOTE", "<small>キーワードはコンマで分割することができます。(<i>キーワード1, キーワード2, キーワード3</i>).</small>" );
define( "_MD_MYTUBE_NOVIDEOLOAD", "投稿ありがとうございます!" );
define( "_MD_MYTUBE_LINKID", "ビデオID" );
define( "_MD_MYTUBE_ADDTO", "追加: " );
define( "_MD_MYTUBE_NEWVIDEOS", "最新のビデオ" );
define( "_MD_MYTUBE_TAKINGUBACK", "あなたに戻します。" );
define( "_MD_MYTUBE_ADMINSECTION", "管理セクション" );

// Version 1.04 RC-1
define( "_MD_MYTUBE_BLIPTV", "Blip.tv" );

// Version 1.04 RC-2
define( "_MD_MYTUBE_CLIPFISH", "ClipFish" );
define( "_MD_MYTUBE_LIVELEAK", "LiveLeak" );
define( "_MD_MYTUBE_MAKTOOB", "Maktoob" );
define( "_MD_MYTUBE_VEOH", "Veoh" );
define( "_MD_MYTUBE_STOPIT", "STOP IT YOU FOOL!!" );
define( "_MD_MYTUBE_VIDEO_DLVIDIDDSC", "以下のサンプルのように赤字部分を指定します。" );

//Version 1.04 RC-3
define( "_MD_MYTUBE_MODIFYNOTALLOWED", "他のビデオを変更することは許可されていません!!" );

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
define( '_AM_XTUBE_FLV_LICENSE', 'License' );
define( '_AM_XTUBE_FLV_LICENSEDSC', 'Please read the <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">license</a> for using the JW FLV Media Player. By using this player you agree to the <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">noncommercial license</a>.' );

// Version 1.06 RC-1
define( '_MD_MYTUBE_FEED', 'RSS feed' );
define( '_MD_MYTUBE_NATIOGEO', 'National Geographic' );
define( '_MD_MYTUBE_NOPERMISSIONTOVIEW', 'Sorry, you do not have permission to view this category.' );
?>