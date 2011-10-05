<?php
/**
 * $Id: modinfo.php
 * Module: MyTube
 * Language: japanese
 * Format: UTF-8
 */

// Module Info
// The name of this module
define("_MI_MYTUBE_NAME","MyTube");

// A brief description of this module
define("_MI_MYTUBE_DESC","あなたのサイトにYouTubeから組込みムービーを追加する。");

// Names of blocks for this module (Not all module has blocks)
define("_MI_MYTUBE_BNAME1","最近のビデオ (t)");
define("_MI_MYTUBE_BNAME2","最近のビデオ");
define("_MI_MYTUBE_BNAME3","トップビデオ (t)");
define("_MI_MYTUBE_BNAME4","トップビデオ");
define("_MI_MYTUBE_BNAME5","最近のビデオ (h)");
define("_MI_MYTUBE_BNAME6","ランダムビデオ");
define("_MI_MYTUBE_BNAME7","ランダムビデオ (h)");

// Sub menu titles
define("_MI_MYTUBE_SMNAME1","実行");
define("_MI_MYTUBE_SMNAME2","人気");
define("_MI_MYTUBE_SMNAME3","トップレート");
define("_MI_MYTUBE_SMNAME4","最近のリスト");

// Names of admin menu items
define("_MI_MYTUBE_BINDEX","インデックス");
define("_MI_MYTUBE_INDEXPAGE","メインページ管理");
define("_MI_MYTUBE_MCATEGORY","カテゴリー管理");
define("_MI_MYTUBE_MVIDEOS","ビデオ管理");
define("_MI_MYTUBE_MUPLOADS","イメージのアップロード");
define("_MI_MYTUBE_PERMISSIONS","パーミッション設定");
define("_MI_MYTUBE_BLOCKADMIN","ブロック設定");
define("_MI_MYTUBE_MVOTEDATA","投票");

// Title of config items
define('_MI_MYTUBE_POPULAR', '人気ビデオになるカウント');
define('_MI_MYTUBE_POPULARDSC', '人気ビデオのステータスとして表示されるヒット数');

define("_MI_MYTUBE_ICONDISPLAY","新規/人気のビデオ:");
define("_MI_MYTUBE_DISPLAYICONDSC", "ビデオリストで新規/人気の表示方法を選択する");
define("_MI_MYTUBE_DISPLAYICON1", "アイコンを表示");
define("_MI_MYTUBE_DISPLAYICON2", "テキストを表示");
define("_MI_MYTUBE_DISPLAYICON3", "表示しない");

define("_MI_MYTUBE_DAYSNEW","新規ビデオとしての日数:");
define("_MI_MYTUBE_DAYSNEWDSC","新規ビデオのステータスとして表示される日数");

define("_MI_MYTUBE_DAYSUPDATED","更新ビデオとしての日数:");
define("_MI_MYTUBE_DAYSUPDATEDDSC","更新ビデオのステータスとして表示される日数");

define('_MI_MYTUBE_PERPAGE', 'リストするビデオ数:');
define('_MI_MYTUBE_PERPAGEDSC', '各カテゴリーリストに表示するビデオの数');

define("_MI_MYTUBE_ADMINPAGE", "管理ページのビデオ数:");
define("_MI_MYTUBE_AMDMINPAGEDSC", "管理エリアに表示する新規ビデオの数");

define("_MI_MYTUBE_ARTICLESSORT", "ビデオの並び順の省略値:");
define("_MI_MYTUBE_ARTICLESSORTDSC", "ビデオリストのデフォルトの並び順を選択する");

define("_MI_MYTUBE_SORTCATS", "カテゴリーによるソート:");
define("_MI_MYTUBE_SORTCATSDSC", "カテゴリーおよびサブカテゴリーのソート方法を選択する");

define('_MI_MYTUBE_SUBCATS', 'サブカテゴリー:');
define('_MI_MYTUBE_SUBCATSDSC', 'サブカテゴリーを表示するためには「はい」を選択する。リストからサブカテゴリーを隠す場合は「いいえ」を選択する。');

define('_MI_MYTUBE_EDITOR', "使用するエディター (管理者):");
define('_MI_MYTUBE_EDITORCHOICE', "管理側で使用するエディターを選択する。標準インストールの場合は「DHTML または Compact」を選択する。");
define('_MI_MYTUBE_EDITORUSER', "使用するエディター (ユーザー):");
define('_MI_MYTUBE_EDITORCHOICEUSER', "ユーザー側で使用するエディターを選択する。標準インストールの場合は「DHTML または Compact」を選択する。");
define("_MI_MYTUBE_FORM_DHTML","DHTML");
define("_MI_MYTUBE_FORM_COMPACT","Compact");
define("_MI_MYTUBE_FORM_SPAW","Spaw Editor");
define("_MI_MYTUBE_FORM_HTMLAREA","HtmlArea Editor");
define("_MI_MYTUBE_FORM_FCK","FCK Editor");
define("_MI_MYTUBE_FORM_KOIVI","Koivi Editor");
define("_MI_MYTUBE_FORM_TINYEDITOR","TinyEditor");

define('_MI_MYTUBE_USESHOTS', 'スクリーンショットイメージを表示しますか?');
define('_MI_MYTUBE_USESHOTSDSC', '各ビデオアイテムについてスクリーンショットイメージを表示する場合は「はい」を選択する。');

define('_MI_MYTUBE_USETHUMBS', '複数のサムネイルの使用:');
define("_MI_MYTUBE_USETHUMBSDSC", "サポートするリンクタイプ: JPG, GIF, PNG<div style='padding-top: 8px;'>WF-Linksはサムネイルを使います。サーバーがこのオプションをサポートしない場合はオリジナルイメージを使うため「いいえ」を選択する。</div>");

define("_MI_MYTUBE_IMGUPDATE", "サムネイルを更新しますか?");
define("_MI_MYTUBE_IMGUPDATEDSC", "複数のサムネイルを選択した場合、各ページでサムネイルが更新されるでしょう。そうでないときは最初のサムネイル画像がそのまま使われます。<br /><br />");

define('_MI_MYTUBE_SHOTWIDTH', 'スクリーンショット表示の幅');
define('_MI_MYTUBE_SHOTWIDTHDSC', 'スクリーンショットイメージを表示する幅を指定する。');

define('_MI_MYTUBE_SHOTHEIGHT', 'スクリーンショット表示の高さ');
define('_MI_MYTUBE_SHOTHEIGHTDSC', 'スクリーンショットイメージを表示する高さを指定する。');

define('_MI_MYTUBE_MAINIMGDIR','メインイメージのディレクトリ');

define('_MI_MYTUBE_CATEGORYIMG','カテゴリーイメージをアップロードするディレクトリ');

define('_MI_MYTUBE_DATEFORMAT', 'タイムスタンプ:');
define('_MI_MYTUBE_DATEFORMATDSC', 'MyTubeのデフォルトタイムスタンプを指定する。');

define("_MI_MYTUBE_TOTALCHARS", "記述の総文字数をセットしますか?");
define("_MI_MYTUBE_TOTALCHARSDSC", "インデックスページの記述の総文字数をセットする。");

define("_MI_MYTUBE_OTHERVIDEOS", "投稿者の他のビデオを表示しますか?");
define("_MI_MYTUBE_OTHERVIDEOSDSC", "投稿者の他のビデオを表示する場合は「はい」を選択する。");

define("_MI_MYTUBE_SHOWSBOOKMARKS", "ソーシャルブックマークを表示しますか?");
define("_MI_MYTUBE_SHOWSBOOKMARKSDSC", "ビデオの下にソーシャルブックマークを表示したい場合は「はい」を選択する。");

define("_MI_MYTUBE_USEMETADESCR", "メタ記述の生成:");
define("_MI_MYTUBE_USEMETADSC", "このオプションによりメタ記述はビデオ記述に基づくことになるでしょう。");

define("_MI_MYTUBE_USERTAGDESCR", "タグ投稿の許可:");
define("_MI_MYTUBE_USERTAGDSC", "ユーザーがタグを投稿することを許可する場合は「はい」を選択する。");

define('_MI_MYTUBE_SHOWDISCLAIMER', 'ユーザーが投稿する前にディスクレーマーを表示しますか?');
define('_MI_MYTUBE_SHOWDISCLAIMERDSC', 'ユーザーがビデオを投稿する前に入力規制を表示しますか?');

define('_MI_MYTUBE_DISCLAIMER', 'ディスクレーマー文の入力:');

define('_MI_MYTUBE_SHOWVIDEODISCL', 'ビデオを使用する前にディスクレーマーを表示しますか?');
define('_MI_MYTUBE_SHOWVIDEODISCLDSC', 'ビデオをオープンする前にビデオ規制を表示しますか?');

define('_MI_MYTUBE_VIDEODISCLAIMER', 'ビデオディスクレーマー文の入力:');

define('_MI_MYTUBE_COPYRIGHT', '著作権に関する注意:');
define('_MI_MYTUBE_COPYRIGHTDSC', 'ビデオページで著作権に関する注意を表示するかどうかを選択する。');

define('_MI_MYTUBE_CHECKHOST', 'ビデオの直リンク(leeching)を許可しない? ');
define('_MI_MYTUBE_REFERERS', 'これらのサイトはあなたのサイトのビデオに直接リンクすることができます。<br /> # で分割します。');
define("_MI_MYTUBE_ANONPOST","ゲストユーザーの投稿:");
define("_MI_MYTUBE_ANONPOSTDSC","あなたのサイトでゲストユーザーに投稿またはアップロードを許可しますか?");
define('_MI_MYTUBE_AUTOAPPROVE','投稿されたビデオの自動承認');
define('_MI_MYTUBE_AUTOAPPROVEDSC','適正かどうかの判断なく投稿されたビデをを承認することを選択する。');

define('_MI_MYTUBE_MAXFILESIZE','アップロードサイズ (KB)');
define('_MI_MYTUBE_MAXFILESIZEDSC','ビデオのアップロードで許す最大ビデオサイズ');
define('_MI_MYTUBE_IMGWIDTH','アップロードイメージの幅');
define('_MI_MYTUBE_IMGWIDTHDSC','ビデオイメージのアップロードで許す最大イメージ幅');
define('_MI_MYTUBE_IMGHEIGHT','アップロードするイメージの高さ');
define('_MI_MYTUBE_IMGHEIGHTDSC','ビデオイメージのアップロードで許す最大イメージ高');

define('_MI_MYTUBE_UPLOADDIR','ディレクトリのアップロード (最後のスラッシュは不要)');
define('_MI_MYTUBE_ALLOWSUBMISS','ユーザーの投稿:');
define('_MI_MYTUBE_ALLOWSUBMISSDSC','新しいビデオを投稿することをユーザーに許可する。');
define('_MI_MYTUBE_ALLOWUPLOADS','ユーザーのアップロード:');
define('_MI_MYTUBE_ALLOWUPLOADSDSC','あなたのサイトへ直接ビデオをアップロードすることをユーザーに許す。');
define('_MI_MYTUBE_SCREENSHOTS','スクリーンショットをアップロードするディレクトリ');

define("_MI_MYTUBE_SUBMITART", "ビデオ投稿:");
define("_MI_MYTUBE_SUBMITARTDSC", "新しいビデオを投稿することができるグループを選択する。");
define("_MI_MYTUBE_RATINGGROUPS", "ビデオレート:");
define("_MI_MYTUBE_RATINGGROUPSDSC", "ビデオを評価することができるグループを選択する。");

define("_MI_MYTUBE_QUALITY", "サムネイル品質:");
define("_MI_MYTUBE_QUALITYDSC", "品質 最低: 0 最高: 100");
define("_MI_MYTUBE_KEEPASPECT", "イメージ品質をキープしますか?");
define("_MI_MYTUBE_KEEPASPECTDSC", "");

define("_MI_MYTUBE_TITLE", "タイトル");
define("_MI_MYTUBE_RATING", "レート");
define("_MI_MYTUBE_WEIGHT", "ウェイト");
define("_MI_MYTUBE_POPULARITY", "人気度");
define("_MI_MYTUBE_SUBMITTED2", "投稿日付");

// Text for notifications
define('_MI_MYTUBE_GLOBAL_NOTIFY', '全般');
define('_MI_MYTUBE_GLOBAL_NOTIFYDSC', 'ビデオ全般に関する通知オプション');
define('_MI_MYTUBE_CATEGORY_NOTIFY', 'カテゴリー');
define('_MI_MYTUBE_CATEGORY_NOTIFYDSC', '現在のビデオカテゴリーに適用する通知オプション');
define('_MI_MYTUBE_VIDEO_NOTIFY', 'ビデオ');
define('_MI_MYTUBE_FILE_NOTIFYDSC', '現在のビデオに適用する通知オプション');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFY', '新規カテゴリー');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYCAP', '新しいビデオカテゴリーが作成されたときに通知する');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYDSC', '新しいビデオカテゴリーが作成されたときに通知を受け取る');
define('_MI_MYTUBE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動通知 : 新規ビデオカテゴリー');

define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFY', 'ビデオ変更要求');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYCAP', 'ビデオ変更要求を通知する');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYDSC', 'ビデオ変更要求が実行されたとき通知を受け取る');
define('_MI_MYTUBE_GLOBAL_VIDEOMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動通知 : ビデオ変更要求');

define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFY', 'ビデオ破損通知');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYCAP', '破損ビデオのレポートを通知する');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYDSC', '破損ビデオレポートが実行されたとき通知を受け取る');
define('_MI_MYTUBE_GLOBAL_VIDEOBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動通知 : 破損ビデオレポート');

define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFY', 'ビデオ実行');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYCAP', '新しいビデオが実行されたとき通知する (承認待ち)');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYDSC', '新しいビデオが実行されたとき通知を受け取る (承認待ち)');
define('_MI_MYTUBE_GLOBAL_VIDEOSUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動通知 : 新規ビデオの実行');

define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFY', '新規ビデオ');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYCAP', '新しいビデオがポストされたとき通知する');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYDSC', '新しいビデオがポストされたとき通知を受け取る');
define('_MI_MYTUBE_GLOBAL_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動通知 : 新規ビデオ');

define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFY', 'ビデオ実行');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYCAP', '現在のカテゴリーで新しいビデオが実行されたとき通知する (承認待ち)');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYDSC', '現在のカテゴリーで新しいビデオが実行されたとき通知を受け取る (承認待ち)');
define('_MI_MYTUBE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動通知 : カテゴリーで新規ビデオ実行');

define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFY', '新規ビデオ');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYCAP', '現在のカテゴリーで新しいビデオがポストされたとき通知する');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYDSC', '現在のカテゴリーで新しいビデオがポストされたとき通知を受け取る');
define('_MI_MYTUBE_CATEGORY_NEWVIDEO_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動通知 : カテゴリーで新規ビデオ');

define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFY', 'ビデオ承認');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYCAP', 'このビデオが承認されたとき通知する');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYDSC', 'このビデオが承認されたとき通知を受け取る');
define('_MI_MYTUBE_VIDEO_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} 自動通知 : ビデオ承認');

define('_MI_MYTUBE_AUTHOR_INFO', "開発者情報");
define('_MI_MYTUBE_AUTHOR_NAME', "開発者");
define('_MI_MYTUBE_AUTHOR_DEVTEAM', "開発チーム");
define('_MI_MYTUBE_AUTHOR_WEBSITE', "開発者サイト");
define('_MI_MYTUBE_AUTHOR_EMAIL', "開発者メール");
define('_MI_MYTUBE_AUTHOR_CREDITS', "Credits");
define('_MI_MYTUBE_MODULE_INFO', "モジュール開発情報");
define('_MI_MYTUBE_MODULE_STATUS', "開発ステータス");
define('_MI_MYTUBE_MODULE_DEMO', "デモサイト");
define('_MI_MYTUBE_MODULE_SUPPORT', "公式サポートサイト");
define('_MI_MYTUBE_MODULE_BUG', "このモジュールに関するバグレポート");
define('_MI_MYTUBE_MODULE_FEATURE', "このモジュールに関する新機能要望");
define('_MI_MYTUBE_MODULE_DISCLAIMER', "Disclaimer");
define('_MI_MYTUBE_RELEASE', "公開日付: ");

define('_MI_MYTUBE_MODULE_MAILLIST', "WF-Projectメーリングリスト");
define('_MI_MYTUBE_MODULE_MAILANNOUNCEMENTS', "アナウンスメントメーリングリスト");
define('_MI_MYTUBE_MODULE_MAILBUGS', "バグメーリングリスト");
define('_MI_MYTUBE_MODULE_MAILFEATURES', "新機能メーリングリスト");
define('_MI_MYTUBE_MODULE_MAILANNOUNCEMENTSDSC', "WF-Project から最新のアナウンス情報を得る");
define('_MI_MYTUBE_MODULE_MAILBUGSDSC', "バグのトラッキングと報告を行うメーリングリスト");
define('_MI_MYTUBE_MODULE_MAILFEATURESDSC', "新機能をリクエストするメーリングリスト");

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

define('_MI_MYTUBE_AUTHOR_CREDITSTEXT',"WF-Projects チーム");
define('_MI_MYTUBE_AUTHOR_BUGFIXES', "バグ修正履歴");

// version 1.02
define("_MI_MYTUBE_FORM_TINYMCE", "TinyMCE");
define("_MI_MYTUBE_FORM_DHTMLEXT", "拡張DHTML");

// Version 1.03
define('_MI_MYTUBE_DATEFORMATADMIN', 'タイムスタンプ管理:');
define('_MI_MYTUBE_DATEFORMATADMINDSC', 'MyTube のデフォルトのタイムスタンプを管理する');

// Version 1.04 RC-1
define('_MI_MYTUBE_VIDEODIR', 'アップロードディレクトリ:');
define('_MI_MYTUBE_VIDEODIRDSC', 'MyTubeビデオファイルを置くディレクトリをセットする');
define('_MI_MYTUBE_VIDEOIMGDIR', 'スクリーンショットをアップロードするディレクトリ:');
define('_MI_MYTUBE_VIDEOIMGDIRDSC', 'MyTubeビデオのスクリーンショットを置くディレクトリをセットする');
define('_MI_MYTUBE_FLVPLAYER_CREDITS', 'FLVプレーヤー');
define('_MI_MYTUBE_FLVPLAYER_CREDITDSC', 'JW FLV Media Player by Jeroen Wijering');
define('_MI_MYTUBE_VUPLOADS', 'ビデオのアップロード');
define('_MI_MYTUBE_CATEGORYIMGDSC', '');
define('_MI_MYTUBE_MAINIMGDIRDSC', '');
define('_MI_MYTUBE_BNAME8', 'MyTubeスポンサー統計' );
define('_MI_MYTUBE_ICONS_CREDITS', "アイコン");

// Version 1.04 RC-2
define('_MI_MYTUBE_MODULE_MANUAL', 'マニュアル' );
define('_MI_MYTUBE_MODULE_MANUALWIKI', 'Wikiマニュアル' );
define('_MI_MYTUBE_MODULE_REQUESTNEWFEATURE', '新機能のリクエスト' );
define('_MI_MYTUBE_MODULE_SUBMITBUG', 'バグ報告' );
define("_MI_MYTUBE_BNAME9","MyTubeタグクラウド");
define("_MI_MYTUBE_BNAME10","MyTubeトップタグ");
define('_MI_MYTUBE_FLVPLAYER_MANUAL', 'FLV Player マニュアル');
define('_MI_MYTUBE_FLVPLAYER_WIKI', 'JW Player Wiki');

// Version 1.05 RC-1
define( "_MI_MYTUBE_CATCOLUMNS", "カテゴリーのカラム数を選択する:" );
define( "_MI_MYTUBE_CATCOLUMNSDSC", "カラム数を選択します。デフォルトは 2 です。" );
define( "_MI_MYTUBE_RATINGDISPLAY", "レーティング機能を表示しますか?" );
define( "_MI_MYTUBE_RATINGDISPLAYDSC", "レーティング機能を表示は<em>「はい」</em>を選択する。レーティング機能を表示したくないときは<em>「いいえ」</em>を選択する。" );
define( "_MI_MYTUBE_AUTOPLAY", "ビデオ自動プレイ" );
define( "_MI_MYTUBE_AUTOPLAYDSC", "ビデオの自動プレイは<em>「はい」</em>を選択する" );
define( '_MI_MYTUBE_VERSION', 'バージョン' );
define( '_MI_MYTUBE_LICENSE', 'ライセンス' );
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