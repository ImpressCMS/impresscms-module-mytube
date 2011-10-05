<?php
/**
 * $Id: admin.php
 * Module: MyTube
 * Language: japanese
 * Format: UTF-8
 */

define( "_AM_MYTUBE_WARNINSTALL1", "<b>WARNING:</b> <u>Directory</u> %s exists on your server.<br />Please remove this directory for security reasons." );
define( "_AM_MYTUBE_WARNINSTALL2", "<b>WARNING:</b> <u>File</u> %s exists on your server.<br />Please remove this directory for security reasons." );
define( "_AM_MYTUBE_WARNINSTALL3", "<b>WARNING:</b> <u>Folder</u> %s does not exists on your server.<br />This folder is required by MyTube." );

define( "_AM_MYTUBE_MODULE_NAME", "MyTube" );

define( "_AM_MYTUBE_BMODIFY", "変更" );
define( "_AM_MYTUBE_BDELETE", "削除" );
define( "_AM_MYTUBE_BCREATE", "作成" );
define( "_AM_MYTUBE_BADD", "追加" );
define( "_AM_MYTUBE_BAPPROVE", "承認" );
define( "_AM_MYTUBE_BIGNORE", "無効" );
define( "_AM_MYTUBE_BCANCEL", "キャンセル" );
define( "_AM_MYTUBE_BSAVE", "保存" );
define( "_AM_MYTUBE_BRESET", "リセット" );
define( "_AM_MYTUBE_BMOVE", "ビデオの移動" );
define( "_AM_MYTUBE_BUPLOAD", "アップロード" );
define( "_AM_MYTUBE_BDELETEIMAGE", "選択したイメージの削除" );
define( "_AM_MYTUBE_BRETURN", "戻る" );
define( "_AM_MYTUBE_DBERROR", "データベースのアクセスエラー" );
// Other Options
define( "_AM_MYTUBE_TEXTOPTIONS", "テキストオプション:" );
define( "_AM_MYTUBE_DISABLEHTML", " HTMLタグ使用不可" );
define( "_AM_MYTUBE_DISABLESMILEY", " スマイリーアイコン使用不可" );
define( "_AM_MYTUBE_DISABLEXCODE", "  XOOPSコード使用不可" );
define( "_AM_MYTUBE_DISABLEIMAGES", " イメージ使用不可" );
define( "_AM_MYTUBE_DISABLEBREAK", " linebreakの使用" );
define( "_AM_MYTUBE_UPLOADFILE", "ビデオのアップロードが成功しました。" );
define( "_AM_MYTUBE_NOMENUITEMS", "メニュー内にメニューアイテムがありません。" );
// Admin Bread crumb
define( "_AM_MYTUBE_PREFS", "一般設定" );
define( "_AM_MYTUBE_BUPDATE", "モジュールアップデート" );
define( "_AM_MYTUBE_BINDEX", "インデックス" );
define( "_AM_MYTUBE_BPERMISSIONS", "パーミッション" );
// define( "_AM_MYTUBE_BLOCKADMIN", "ブロック" );
define( "_AM_MYTUBE_BLOCKADMIN", "ブロック設定" );
define( "_AM_MYTUBE_GOMODULE", "モジュールへ" );
define( "_AM_MYTUBE_ABOUT", "About" );
// Admin Summary
define( "_AM_MYTUBE_SCATEGORY", "カテゴリー: " );
define( "_AM_MYTUBE_SFILES", "ビデオ: " );
define( "_AM_MYTUBE_SNEWFILESVAL", "実行: " );
define( "_AM_MYTUBE_SMODREQUEST", "変更: " );
define( "_AM_MYTUBE_SREVIEWS", "レビュー: " );

// Admin Main Menu
define( "_AM_MYTUBE_MCATEGORY", "カテゴリー管理" );
define( "_AM_MYTUBE_MVIDEOS", "ビデオ管理" );
define( "_AM_MYTUBE_MLISTBROKEN", "破損ビデオリスト" );
define( "_AM_MYTUBE_MLISTPINGTIMES", "Pingタイムリスト" );
define( "_AM_MYTUBE_INDEXPAGE", "インデックスページ管理" );
define( "_AM_MYTUBE_MCOMMENTS", "コメント" );
define( "_AM_MYTUBE_MVOTEDATA", "投票データ" );
define( "_AM_MYTUBE_MUPLOADS", "イメージアップロード" );

// Catgeory defines
define( "_AM_MYTUBE_CCATEGORY_CREATENEW", "新規カテゴリー作成" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY", "カテゴリー変更" );
define( "_AM_MYTUBE_CCATEGORY_MOVE", "カテゴリーのビデオの移動" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_TITLE", "カテゴリータイトル:" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_FAILED", "ビデオ移動失敗: このカテゴリーに移動できません。" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_FAILEDT", "ビデオ移動失敗: このカテゴリーを見つけることができません。" );
define( "_AM_MYTUBE_CCATEGORY_MODIFY_MOVED", "ビデオの移動とカテゴリーの削除" );
define( "_AM_MYTUBE_CCATEGORY_CREATED", "新規カテゴリーが作成されデータベースの更新が成功しました。" );
define( "_AM_MYTUBE_CCATEGORY_MODIFIED", "選択したカテゴリーが変更されデータベースの更新が成功しました。" );
define( "_AM_MYTUBE_CCATEGORY_DELETED", "選択したカテゴリーが削除されデータベースの更新が成功しました。" );
define( "_AM_MYTUBE_CCATEGORY_AREUSURE", "WARNING: このカテゴリーを削除しようとしていますがその中のビデオとコメントも一緒に削除されます。よろしいですか?" );
define( "_AM_MYTUBE_CCATEGORY_NOEXISTS", "新しいビデオを追加する前にカテゴリーを作成しなければなりません。" );
define( "_AM_MYTUBE_FCATEGORY_GROUPPROMPT", "カテゴリーアクセス権:<div style='padding-top: 8px;'><span style='font-weight: normal;'>このカテゴリーにアクセスするユーザーグループを選択する。</span></div>" );
define( "_AM_MYTUBE_FCATEGORY_SUBGROUPPROMPT", "カテゴリー実行権:<div style='padding-top: 8px;'><span style='font-weight: normal;'>このカテゴリーに新しいビデオを実行するユーザーグループを選択する。</span></div>" );
define( "_AM_MYTUBE_FCATEGORY_MODGROUPPROMPT", "カテゴリー承認権:<div style='padding-top: 8px;'><span style='font-weight: normal;'>このカテゴリーの承認権をもつユーザーグループを選択する。</span></div>" );

define( "_AM_MYTUBE_FCATEGORY_TITLE", "カテゴリータイトル:" );
define( "_AM_MYTUBE_FCATEGORY_WEIGHT", "カテゴリーウェイト:" );
define( "_AM_MYTUBE_FCATEGORY_SUBCATEGORY", "サブカテゴリーとして設定:" );
define( "_AM_MYTUBE_FCATEGORY_CIMAGE", "カテゴリーイメージの選択:" );
define( "_AM_MYTUBE_FCATEGORY_DESCRIPTION", "カテゴリー記述:" );
define( "_AM_MYTUBE_FCATEGORY_SUMMARY", "カテゴリー概要:" );
/**
 * Index page Defines
 */
define( "_AM_MYTUBE_IPAGE_UPDATED", "インデックスページの変更とデータベースの更新が成功しました!" );
define( "_AM_MYTUBE_IPAGE_INFORMATION", "インデックスページ情報" );
define( "_AM_MYTUBE_IPAGE_MODIFY", "インデックスページの変更" );
define( "_AM_MYTUBE_IPAGE_CIMAGE", "インデックスイメージの選択:" );
define( "_AM_MYTUBE_IPAGE_CTITLE", "インデックスタイトル:" );
define( "_AM_MYTUBE_IPAGE_CHEADING", "インデックスヘッダー:" );
define( "_AM_MYTUBE_IPAGE_CHEADINGA", "インデックスヘッダーアライメント:" );
define( "_AM_MYTUBE_IPAGE_CFOOTER", "インデックスフッター:" );
define( "_AM_MYTUBE_IPAGE_CFOOTERA", "インデックスフッターアライメント:" );
define( "_AM_MYTUBE_IPAGE_CLEFT", "Align Left" );
define( "_AM_MYTUBE_IPAGE_CCENTER", "Align Center" );
define( "_AM_MYTUBE_IPAGE_CRIGHT", "Align Right" );
/**
 * Permissions defines
 */
define( "_AM_MYTUBE_PERM_MANAGEMENT", "パーミッション管理" );
define( "_AM_MYTUBE_PERM_PERMSNOTE", "<div><b>注意:</b> グループに対しモジュールにアクセスする許可をしなければ、ここで正しいパーミッションをセットしても記事、ブロックを見ることができないことに注意してください。そのためには <b>ユーザーモジュール>ユーザーグループ管理</b> に行き、適切なグループを選んでアクセスのチェックボックスにチェックする必要があります。</div>" );
define( "_AM_MYTUBE_PERM_CPERMISSIONS", "カテゴリーのパーミッション" );
define( "_AM_MYTUBE_PERM_CSELECTPERMISSIONS", "グループごとに表示を許可するカテゴリーを選択" );
define( "_AM_MYTUBE_PERM_CNOCATEGORY", "パーミッションをセットできません: カテゴリーがまだ作成されていません!" );
define( "_AM_MYTUBE_PERM_FPERMISSIONS", "ビデオのパーミッション" );
define( "_AM_MYTUBE_PERM_FNOFILES", "パーミッションをセットできません: ビデオがまだ作成されていません!" );
define( "_AM_MYTUBE_PERM_FSELECTPERMISSIONS", "グループごとに表示を許可するビデオを選択" );
/**
 * Upload defines
 */
define( "_AM_MYTUBE_VIDEO_IMAGEUPLOAD", "目的のサーバーへイメージのアップロードが成功しました。" );
define( "_AM_MYTUBE_VIDEO_NOIMAGEEXIST", "エラー: アップロードするイメージが選択させませんでした。再度実行してください!" );
define( "_AM_MYTUBE_VIDEO_IMAGEEXIST", "アップロード先に既にイメージが存在します!" );
define( "_AM_MYTUBE_VIDEO_FILEDELETED", "イメージが削除されました。" );
define( "_AM_MYTUBE_VIDEO_FILEERRORDELETE", "ビデオ削除でエラー: サーバー上にビデオが存在しません。" );
define( "_AM_MYTUBE_VIDEO_NOFILEERROR", "ビデオ削除でエラー: 削除するイメージが選択されていません。" );
define( "_AM_MYTUBE_VIDEO_DELETEFILE", "警告: このイメージリンクを削除しても構いませんか?" );
define( "_AM_MYTUBE_VIDEO_IMAGEINFO", "サーバーステータス" );
define( "_AM_MYTUBE_VIDEO_SPHPINI", "<b>PHP ini 情報:</b>" );
define( "_AM_MYTUBE_VIDEO_SAFEMODESTATUS", "Safe Mode Status: " );
define( "_AM_MYTUBE_VIDEO_REGISTERGLOBALS", "Register Globals: " );
define( "_AM_MYTUBE_VIDEO_SERVERUPLOADSTATUS", "Server Uploads Status: " );
define( "_AM_MYTUBE_VIDEO_MAXUPLOADSIZE", "Max Upload Size Permitted: " );
define( "_AM_MYTUBE_VIDEO_MAXPOSTSIZE", "Max Post Size Permitted: " );
define( "_AM_MYTUBE_VIDEO_SAFEMODEPROBLEMS", " (これは問題を引き起こすかもしれません)" );
define( "_AM_MYTUBE_VIDEO_GDLIBSTATUS", "GD Library Support: " );
define( "_AM_MYTUBE_VIDEO_GDLIBVERSION", "GD Library Version: " );
define( "_AM_MYTUBE_VIDEO_GDON", "<b>Enabled</b> (サムネイル使用可能)" );
define( "_AM_MYTUBE_VIDEO_GDOFF", "<b>Disabled</b> (サムネイル使用不可)" );
define( "_AM_MYTUBE_VIDEO_OFF", "<b>OFF</b>" );
define( "_AM_MYTUBE_VIDEO_ON", "<b>ON</b>" );
define( "_AM_MYTUBE_VIDEO_CATIMAGE", "カテゴリーイメージ" );
define( "_AM_MYTUBE_VIDEO_SCREENSHOTS", "スクリーンショットイメージ" );
define( "_AM_MYTUBE_VIDEO_MAINIMAGEDIR", "メインイメージ" );
define( "_AM_MYTUBE_VIDEO_FCATIMAGE", "カテゴリーイメージパス" );
define( "_AM_MYTUBE_VIDEO_FSCREENSHOTS", "スクリーンショットイメージパス" );
define( "_AM_MYTUBE_VIDEO_FMAINIMAGEDIR", "メインイメージパス" );
define( "_AM_MYTUBE_VIDEO_FUPLOADIMAGETO", "アップロードイメージ: " );
define( "_AM_MYTUBE_VIDEO_FUPLOADPATH", "アップロードパス: " );
define( "_AM_MYTUBE_VIDEO_FUPLOADURL", "アップロードURL: " );
define( "_AM_MYTUBE_VIDEO_FOLDERSELECTION", "アップロード先の選択:" );
define( "_AM_MYTUBE_VIDEO_FSHOWSELECTEDIMAGE", "選択したイメージの表示:" );
define( "_AM_MYTUBE_VIDEO_FUPLOADIMAGE", "選択した場所へのイメージのアップロード:" );

// Main Index defines
define( "_AM_MYTUBE_MINDEX_VIDEOSUMMARY", "モジュール管理概要" );
define( "_AM_MYTUBE_MINDEX_PUBLISHEDVIDEO", "公開ビデオ:" );
define( "_AM_MYTUBE_MINDEX_AUTOPUBLISHEDVIDEO", "公開ビデオ(AUTO):" );
define( "_AM_MYTUBE_MINDEX_AUTOEXPIRE", "期限切れビデオ(AUTO):" );
define( "_AM_MYTUBE_MINDEX_EXPIRED", "期限切れビデオ:" );
define( "_AM_MYTUBE_MINDEX_OFFLINEVIDEO", "オフラインビデオ:" );
define( "_AM_MYTUBE_MINDEX_ID", "ID" );
define( "_AM_MYTUBE_MINDEX_TITLE", "ビデオタイトル" );
define( "_AM_MYTUBE_MINDEX_POSTER", "投稿者" );
define( "_AM_MYTUBE_MINDEX_ONLINE", "ステータス" );
define( "_AM_MYTUBE_MINDEX_ONLINESTATUS", "オフラインステータス" );
define( "_AM_MYTUBE_MINDEX_PUBLISH", "公開" );
define( "_AM_MYTUBE_MINDEX_PUBLISHED", "公開された" );
define( "_AM_MYTUBE_MINDEX_EXPIRE", "期限切れ" );
define( "_AM_MYTUBE_MINDEX_NOTSET", "日付未設定" );
define( "_AM_MYTUBE_MINDEX_SUBMITTED", "実行した日付" );

define( "_AM_MYTUBE_MINDEX_ACTION", "アクション" );
define( "_AM_MYTUBE_MINDEX_NOVIDEOSFOUND", "注意: このクライテリアにマッチするビデオがありません。" );
define( "_AM_MYTUBE_MINDEX_PAGE", "<b>ページ:<b> " );
define( '_AM_MYTUBE_MINDEX_PAGEINFOTXT', '<ul><li>MyTubes メインページの詳細</li><li>ロゴ、ヘッダー、フッターのテキストを簡単に変更することができます。</li></ul><br />注意: ロゴは MyTube を通して使われます。' );
define( "_AM_MYTUBE_MINDEX_RESPONSE", "レスポンスタイム" );
// Submitted Links
define( "_AM_MYTUBE_SUB_SUBMITTEDFILES", "実行したビデオ" );
define( "_AM_MYTUBE_SUB_FILESWAITINGINFO", "承認待ちビデオの情報" );
define( "_AM_MYTUBE_SUB_FILESWAITINGVALIDATION", "承認待ちビデオ: " );
define( "_AM_MYTUBE_SUB_APPROVEWAITINGFILE", "未承認の新規ビデオ情報について<b>承認する</b>" );
define( "_AM_MYTUBE_SUB_EDITWAITINGFILE", "承認に向け新規ビデオ情報を<b>編集する</b>" );
define( "_AM_MYTUBE_SUB_DELETEWAITINGFILE", "新規ビデオ情報を<b>削除する</b>" );
define( "_AM_MYTUBE_SUB_NOFILESWAITING", "このクライテリアにマッチするビデオがありません。" );
define( "_AM_MYTUBE_SUB_NEWFILECREATED", "新規ビデオデータが作成されデータベースの更新が成功しました。" );
// Vote Information
define( "_AM_MYTUBE_VOTE_RATINGINFOMATION", "投票情報" );
define( "_AM_MYTUBE_VOTE_TOTALVOTES", "Total 投票: " );
define( "_AM_MYTUBE_VOTE_REGUSERVOTES", "登録ユーザーの投票: %s" );
define( "_AM_MYTUBE_VOTE_ANONUSERVOTES", "ゲストユーザの投票: %s" );
define( "_AM_MYTUBE_VOTE_USER", "ユーザー" );
define( "_AM_MYTUBE_VOTE_IP", "IPアドレス" );
define( "_AM_MYTUBE_VOTE_DATE", "実行日" );
define( "_AM_MYTUBE_VOTE_RATING", "レート" );
define( "_AM_MYTUBE_VOTE_NOREGVOTES", "登録ユーザーの投票なし" );
define( "_AM_MYTUBE_VOTE_NOUNREGVOTES", "未登録ユーザーの投票なし" );
define( "_AM_MYTUBE_VOTE_VOTEDELETED", "投票データが削除されました。" );
define( "_AM_MYTUBE_VOTE_ID", "ID" );
define( "_AM_MYTUBE_VOTE_FILETITLE", "ビデオタイトル" );
define( "_AM_MYTUBE_VOTE_DISPLAYVOTES", "投票データ情報" );
define( "_AM_MYTUBE_VOTE_NOVOTES", "表示する投票なし" );
define( "_AM_MYTUBE_VOTE_DELETE", "表示する投票なし" );
define( "_AM_MYTUBE_VOTE_DELETEDSC", "選択した投票情報をデータベースから<b>削除する</b>" );
define( "_AM_MYTUBE_VOTEDELETED", "選択した投票を削除しデータベースを更新する" );

define( "_AM_MYTUBE_VOTE_USERAVG", "平均レート" );
define( "_AM_MYTUBE_VOTE_TOTALRATE", "投票総数" );
define( "_AM_MYTUBE_VOTE_MAXRATE", "最多投票アイテム" );
define( "_AM_MYTUBE_VOTE_MINRATE", "最少投票アイテム" );
define( "_AM_MYTUBE_VOTE_MOSTVOTEDTITLE", "最多投票タイトル:" );
define( "_AM_MYTUBE_VOTE_LEASTVOTEDTITLE", "最少投票タイトル:" );
define( "_AM_MYTUBE_VOTE_MOSTVOTERSUID", "最多投票者" );
define( "_AM_MYTUBE_VOTE_REGISTERED", "登録者の投票数" );
define( "_AM_MYTUBE_VOTE_NONREGISTERED", "ゲストの投票数" );
// Modifications
define( "_AM_MYTUBE_MOD_TOTMODREQUESTS", "変更リクエスト総数: " );
define( "_AM_MYTUBE_MOD_MODREQUESTS", "変更ビデオ" );
define( "_AM_MYTUBE_MOD_MODREQUESTSINFO", "変更ビデオ情報" );
define( "_AM_MYTUBE_MOD_MODID", "ID" );
define( "_AM_MYTUBE_MOD_MODTITLE", "タイトル" );
define( "_AM_MYTUBE_MOD_MODPOSTER", "オリジナル投稿者: " );
define( "_AM_MYTUBE_MOD_DATE", "実行日" );
define( "_AM_MYTUBE_MOD_NOMODREQUEST", "このクライテリアにマッチするリクエストはありません。" );
define( "_AM_MYTUBE_MOD_TITLE", "video Title: " );
define( "_AM_MYTUBE_MOD_LID", "ビデオID: " );
define( "_AM_MYTUBE_MOD_CID", "カテゴリー: " );
define( "_AM_MYTUBE_MOD_URL", "ビデオURL: " );
define( "_AM_MYTUBE_MOD_PUBLISHER", "公開者: " );
define( "_AM_MYTUBE_MOD_SCREENSHOT", "スクリーンショットイメージ: " );
define( "_AM_MYTUBE_MOD_DESCRIPTION", "記述: " );
define( "_AM_MYTUBE_MOD_MODIFYSUBMITTER", "実行者: " );
define( "_AM_MYTUBE_MOD_MODIFYSUBMIT", "実行者" );
define( "_AM_MYTUBE_MOD_PROPOSED", "推薦ビデオ詳細" );
define( "_AM_MYTUBE_MOD_ORIGINAL", "オリジナルビデオ詳細" );
define( "_AM_MYTUBE_MOD_REQDELETED", "変更リクエストがデータベースから削除されました。" );
define( "_AM_MYTUBE_MOD_REQUPDATED", "選択されたビデオが変更されデータベースの更新が成功しました。" );
define( '_AM_MYTUBE_MOD_VIEW', '表示' );
// Video management
define( "_AM_MYTUBE_VIDEO_ID", "ビデオID: " );
define( "_AM_MYTUBE_VIDEO_IP", "アップロード者のIPアドレス: " );
define( "_AM_MYTUBE_VIDEO_ALLOWEDAMIME", "<div style='padding-top: 4px; padding-bottom: 4px;'><b>ビデオの拡張に関して管理者へ許可</b>:</div>" );
define( "_AM_MYTUBE_VIDEO_MODIFYFILE", "変更ビデオの情報" );
define( "_AM_MYTUBE_VIDEO_CREATENEWFILE", "新規ビデオの作成" );
define( "_AM_MYTUBE_VIDEO_TITLE", "ビデオタイトル: " );
define( "_AM_MYTUBE_VIDEO_DLVIDID", "ビデオID-CODE: " );
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
<b>MyTube: </b><font color=#FF0000>Take over from above selection menu</font></small>" );
define( "_AM_MYTUBE_VIDEO_PICURL", "画像URL: " );
define( "_AM_MYTUBE_VIDEO_PICURLNOTE", "<small>ソースが Google Video, MySpace TV, DailyMotion であるときの画像URL</small>" );
define( "_AM_MYTUBE_VIDEO_DESCRIPTION", "ビデオ記述: " );
define( "_AM_MYTUBE_VIDEO_CATEGORY", "ビデオのメインカテゴリー: " );
define( "_AM_MYTUBE_VIDEO_FILESSTATUS", " ビデオをオフラインにセットしますか?<br /><br /><span style='font-weight: normal;'>ビデオはすべてのユーザーに表示不可となるでしょう。</span>" );
define( "_AM_MYTUBE_VIDEO_SETASUPDATED", " ビデオステータスを更新にセットしますか?<br /><br /><span style='font-weight: normal;'>更新アイコンが表示されるでしょう。</span>" );
define( "_AM_MYTUBE_VIDEO_SHOTIMAGE", "ビデオのスクリーンショットイメージ: " );
define( "_AM_MYTUBE_VIDEO_DISCUSSINFORUM", "このフォーラムにディスカッションを追加しますか?" );
define( "_AM_MYTUBE_VIDEO_PUBLISHDATE", "ビデオ公開日:" );
define( "_AM_MYTUBE_VIDEO_EXPIREDATE", "ビデオ期限切れ日:" );
define( "_AM_MYTUBE_VIDEO_CLEARPUBLISHDATE", "<br /><br />公開日の削除:" );
define( "_AM_MYTUBE_VIDEO_CLEAREXPIREDATE", "<br /><br />期限切れ日の削除:" );
define( "_AM_MYTUBE_VIDEO_PUBLISHDATESET", " 公開日のセット: " );
define( "_AM_MYTUBE_VIDEO_SETDATETIMEPUBLISH", " 公開日時をセットする" );
define( "_AM_MYTUBE_VIDEO_SETDATETIMEEXPIRE", " 期限切れの日時をセットする" );
define( "_AM_MYTUBE_VIDEO_SETPUBLISHDATE", "<b>セットした公開日: </b>" );
define( "_AM_MYTUBE_VIDEO_SETNEWPUBLISHDATE", "<b>新しい公開日のセット: </b><br />公開:" );
define( "_AM_MYTUBE_VIDEO_SETPUBDATESETS", "<b>公開日のセット: </b><br />日程どおりの公開:" );
define( "_AM_MYTUBE_VIDEO_EXPIREDATESET", " 期限切れ日のセット: " );
define( "_AM_MYTUBE_VIDEO_SETEXPIREDATE", "<b>セットした期限切れ日: </b>" );
define( "_AM_MYTUBE_VIDEO_DELEDITMESS", "破損したレポートを削除しますか?<br /><br /><span style='font-weight: normal;'>When you choose <b>はい</b> を選択すると破損レポートは自動的に削除されます。再度ビデオが動くよう確認してください。</span>" );
define( "_AM_MYTUBE_VIDEO_MUSTBEVALID", "スクリーンショットは %s ディレクトリ配下の正しいイメージである必要があります。(ex. shot.gif). イメージリンクがない場合はブランクのままにしてください。" );
define( "_AM_MYTUBE_VIDEO_EDITAPPROVE", "承認ビデオ:" );
define( "_AM_MYTUBE_VIDEO_NEWFILEUPLOAD", "新規ビデオが作成されデータベースの更新に成功しました。" );
define( "_AM_MYTUBE_VIDEO_FILEMODIFIEDUPDATE", "選択したビデオが変更されデータベースの更新が成功しました。" );
define( "_AM_MYTUBE_VIDEO_REALLYDELETEDTHIS", "選択したビデオを本当に削除していいですか?" );
define( "_AM_MYTUBE_VIDEO_FILEWASDELETED", "データベースから %s ビデオの削除に成功しました。" );
define( "_AM_MYTUBE_VIDEO_FILEAPPROVED", "ビデオが承認されデータベースの更新に成功しました。" );
define( "_AM_MYTUBE_VIDEO_CREATENEWSSTORY", "<b>リンクからニュースを作成する</b>" );
define( "_AM_MYTUBE_VIDEO_SUBMITNEWS", "新規ビデオをニュースアイテムとして実行しますか?" );
define( "_AM_MYTUBE_VIDEO_NEWSCATEGORY", "ニュースカテゴリーの選択:" );
define( "_AM_MYTUBE_VIDEO_NEWSTITLE", "ニュースタイトル:<div style='padding-top: 4px; padding-bottom: 4px;'><span style='font-weight: normal;'>ブランクのままならビデオタイトルが使われます。</span></div>" );
define( "_AM_MYTUBE_VIDEO_PUBLISHER", "ビデオ公開者名: " );

/**
 * Broken links defines
 */
define( "_AM_MYTUBE_SBROKENSUBMIT", "破損: " );
define( "_AM_MYTUBE_BROKEN_FILE", "破損レポート" );
define( "_AM_MYTUBE_BROKEN_FILEIGNORED", "破損レポートが無視されデータベースから削除に成功しました。" );
define( "_AM_MYTUBE_BROKEN_NOWACK", "認知済みステータスが変更されデータベースが更新されました。" );
define( "_AM_MYTUBE_BROKEN_NOWCON", "確認済みステータスが変更されデータベースが更新されました。" );
define( "_AM_MYTUBE_BROKEN_REPORTINFO", "破損レポート情報" );
define( "_AM_MYTUBE_BROKEN_REPORTSNO", "破損レポート待ち:" );
define( "_AM_MYTUBE_BROKEN_IGNOREDESC", "レポートが<b>無視されました。</b> 破損ビデオレポートは削除されます。" );
define( "_AM_MYTUBE_BROKEN_DELETEDESC", "レポートされたリンクデータと破損ビデオレポートを<b>削除します。</b>" );
define( "_AM_MYTUBE_BROKEN_EDITDESC", "問題を修正するためにビデオを<b>編集します。</b>" );
define( "_AM_MYTUBE_BROKEN_ACKDESC", "<b>認知済み</b> 破損ファイルレポートに認知ステータスをセットする。" );
define( "_AM_MYTUBE_BROKEN_CONFIRMDESC", "<b>確認済み</b> 破損ファイルレポートに確認ステータスをセットする。" );
define( "_AM_MYTUBE_BROKEN_ACKNOWLEDGED", "認知済み" );
define( "_AM_MYTUBE_BROKEN_DCONFIRMED", "確認済み" );

define( "_AM_MYTUBE_BROKEN_ID", "ID" );
define( "_AM_MYTUBE_BROKEN_TITLE", "タイトル" );
define( "_AM_MYTUBE_BROKEN_REPORTER", "報告者" );
define( "_AM_MYTUBE_BROKEN_FILESUBMITTER", "実行者" );
define( "_AM_MYTUBE_BROKEN_DATESUBMITTED", "実行日" );
define( "_AM_MYTUBE_BROKEN_ACTION", "アクション" );
define( "_AM_MYTUBE_BROKEN_NOFILEMATCH", "このクライテリアにマッチする破損レポートはありません。" );
define( "_AM_MYTUBE_BROKENFILEDELETED", "ビデオがデータベースから削除され破損レポートも削除されました。" );
define( "_AM_MYTUBE_BROKEN_VIDSOURCE", "ビデオソース" );
/**
 * About defines
 */
define( "_AM_MYTUBE_BY", "by" );
// block defines
define( "_AM_MYTUBE_BADMIN", "ブロック管理" );
define( "_AM_MYTUBE_BLKDESC", "説明" );
define( "_AM_MYTUBE_TITLE", "タイトル" );
define( "_AM_MYTUBE_SIDE", "アライメント" );
define( "_AM_MYTUBE_WEIGHT", "ウェイト" );
define( "_AM_MYTUBE_VISIBLE", "表示可能" );
define( "_AM_MYTUBE_ACTION", "アクション" );
define( "_AM_MYTUBE_SBLEFT", "左" );
define( "_AM_MYTUBE_SBRIGHT", "右" );
define( "_AM_MYTUBE_CBLEFT", "中央左" );
define( "_AM_MYTUBE_CBRIGHT", "中央右" );
define( "_AM_MYTUBE_CBCENTER", "中央中" );
define( "_AM_MYTUBE_ACTIVERIGHTS", "アクティブ権" );
define( "_AM_MYTUBE_ACCESSRIGHTS", "アクセス権" );
// image admin icon
define( "_AM_MYTUBE_ICO_EDIT", "このアイテムを編集" );
define( "_AM_MYTUBE_ICO_DELETE", "このアイテムを削除" );
define( "_AM_MYTUBE_ICO_RESOURCE", "このリソースを編集" );

define( "_AM_MYTUBE_ICO_ONLINE", "オンライン" );
define( "_AM_MYTUBE_ICO_OFFLINE", "オフライン" );
define( "_AM_MYTUBE_ICO_APPROVED", "承認" );
define( "_AM_MYTUBE_ICO_NOTAPPROVED", "承認不可" );

define( "_AM_MYTUBE_ICO_VIDEO", "関連ビデオ" );
define( "_AM_MYTUBE_ICO_URL", "関連URLの追加" );
define( "_AM_MYTUBE_ICO_ADD", "追加" );
define( "_AM_MYTUBE_ICO_APPROVE", "承認" );
define( "_AM_MYTUBE_ICO_STATS", "統計" );
define( "_AM_MYTUBE_ICO_VIEW", "このアイテムの表示" );

define( "_AM_MYTUBE_ICO_IGNORE", "無視する" );
define( "_AM_MYTUBE_ICO_ACK", "破損レポートの認知" );
define( "_AM_MYTUBE_ICO_REPORT", "破損レポートを認知しますか?" );
define( "_AM_MYTUBE_ICO_CONFIRM", "破損レポートの確認" );
define( "_AM_MYTUBE_ICO_CONBROKEN", "破損レポートを確認しますか?" );
define( "_AM_MYTUBE_ICO_RES", "このアイテムのリソース/ビデオの編集" );
define( "_AM_MYTUBE_MOD_URLRATING", "興味深い内容のレート:" );
// Alternate category
define( "_AM_MYTUBE_ALTCAT_CREATEF", "代替カテゴリーの追加" );
define( "_AM_MYTUBE_MALTCAT", "代替カテゴリー管理" );
define( "_AM_MYTUBE_ALTCAT_MODIFYF", "代替カテゴリー管理" );
define( "_AM_MYTUBE_ALTCAT_INFOTEXT", "<ul><li>このフォームを経由して代替カテゴリーの追加または削除が簡単にできます。</li></ul>" );
define( '_AM_MYTUBE_ALTCAT_CREATED', '代替カテゴリーが保存されました!' );

define( "_AM_MYTUBE_MRESOURCES", "リソース管理" );
define( "_AM_MYTUBE_RES_CREATED", "リソース管理" );
define( "_AM_MYTUBE_RES_ID", "ID" );
define( "_AM_MYTUBE_RES_DESC", "説明" );
define( "_AM_MYTUBE_RES_NAME", "リソース名" );
define( "_AM_MYTUBE_RES_TYPE", "リソースタイプ" );
define( "_AM_MYTUBE_RES_USER", "ユーザー" );
define( "_AM_MYTUBE_RES_CREATEF", "リソース追加" );
define( "_AM_MYTUBE_RES_MODIFYF", "リソース修正" );
define( "_AM_MYTUBE_RES_NAMEF", "リソースの名前:" );
define( "_AM_MYTUBE_RES_DESCF", "リソースの説明:" );
define( "_AM_MYTUBE_RES_URLF", "リソースURL:" );
define( "_AM_MYTUBE_RES_ITEMIDF", "リソースアイテムID:" );
define( "_AM_MYTUBE_RES_INFOTEXT", "<ul><li>このフォーム経由で新しいリソースを簡単に追加、編集、削除することができます。</li>
	<li>ビデオにリンクしたすべてのリソースをリストする。</li>
	<li>リソース名とリソース記述を修正する。</li></ul>
	" );
define( "_AM_MYTUBE_LISTBROKEN", "破損ビデオを表示する。注意: これらの結果は正確ではないかもしれないのでおおよそのガイドとしてください。<br /><br />アクションを起こす前に最初にビデオが存在するかチェックしてください。<br /><br />" );
define( "_AM_MYTUBE_PINGTIMES", "各ビデオの最初のPINGタイムを表示する。<br /><br />注意: これらの結果は正確ではないかもしれないのでおおよそのガイドとしてください。<br /><br />" );

define( "_AM_MYTUBE_NO_FORUM", "フォーラムが選択されていません。" );

define( "_AM_MYTUBE_PERM_RATEPERMISSIONS", "レートパーミッション" );
define( "_AM_MYTUBE_PERM_RATEPERMISSIONS_TEXT", "選択したカテゴリー内のビデオをレーティングすることができるグループを選択する。" );

define( "_AM_MYTUBE_PERM_AUTOPERMISSIONS", "自動承認ビデオ" );
define( "_AM_MYTUBE_PERM_AUTOPERMISSIONS_TEXT", "管理者の許可なく自動承認される新規ビデオを所有できるグループを選択する。" );

define( "_AM_MYTUBE_PERM_SPERMISSIONS", "投稿者パーミッション" );
define( "_AM_MYTUBE_PERM_SPERMISSIONS_TEXT", "選択したカテゴリーに新しいビデオを投稿することができるグループを選択する。" );

define( "_AM_MYTUBE_PERM_APERMISSIONS", "モデレータグループ" );
define( "_AM_MYTUBE_PERM_APERMISSIONS_TEXT", "選択したカテゴリーについてモデレータ権限をもつグループを選択する。" );

define( "_AM_MYTUBE_TIME", "時間:" );
define( "_AM_MYTUBE_KEYWORDS", "キーワード:" );
define( "_AM_MYTUBE_KEYWORDS_NOTE", "<small><i>キーワードはコンマで区切ることができます。(keyword1, keyword2).</i></small>" );
define("_AM_MYTUBE_VIDEO_META_DESCRIPTION", "メタ記述");
define("_AM_MYTUBE_VIDEO_META_DESCRIPTION_DSC", "サーチエンジンにヒットさせるためにこの記事で使いたいメタ記述をカストマイズすることができます。もしカテゴリーを作成したときこのフィールドがブランクならこの記事のサマリーフィールドを自動的に埋め込みます。");

define( "_AM_MYTUBE_VIDSOURCE", "ビデオソース:" );
define( "_AM_MYTUBE_VIDSOURCE2", "ビデオソース" );
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
define( "_AM_MYTUBE_ICO_EXPIRE", "期限切れ" );
define( "_AM_MYTUBE_MMYTUBE", "MyTubeクリップの追加" );
define( "_AM_MYTUBE_VIDEO_CATVIDEOIMG", "ビデオイメージ" );
define( "_AM_MYTUBE_VIDEO_FCATVIDEOIMG", "ビデオイメージのパス" );
define( "_AM_MYTUBE_VUPLOAD_VIDEOEXIST", "ビデオが既に存在しています。" );
define( "_AM_MYTUBE_VUPLOAD_VIDEOUPLOAD", "ビデオがアップロードされました。" );
define( "_AM_MYTUBE_VUPLOAD_NOVIDEOEXIST", "ビデオがありません。" );
define( "_AM_MYTUBE_VUPLOAD_FILEDELETED", "ビデオが削除されました。" );
define( "_AM_MYTUBE_VUPLOAD_FILEERRORDELETE", "エラー" );
define( "_AM_MYTUBE_VUPLOAD_NOFILEERROR", "ファイルがありません。" );
define( "_AM_MYTUBE_VUPLOAD_DELETEFILE", "ビデオファイルの削除" );
define( "_AM_MYTUBE_VUPLOAD_CATVIDEO", "ビデオファイル" );
define( "_AM_MYTUBE_VUPLOAD_FCATVIDEO", "アップロードディレクトリ" );
define( "_AM_MYTUBE_VUPLOADS", "アップロード" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADPATH", "アップロードパス:" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADURL", "アップロードURL:" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADVIDEOTO", "アップロードするビデオ: " );
define( "_AM_MYTUBE_VUPLOAD_FOLDERSELECTION", "アップロード場所の選択" );
define( "_AM_MYTUBE_VUPLOAD_FUPLOADVIDEO", "アップロードするビデオ" );
define( "_AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILE", "ビデオファイルの選択" );
define( "_AM_MYTUBE_VUPLOAD_FSHOWSELECTEDFILEDSC", "ビデオファイルはFLV形式である必要があります。" );
define( "_AM_MYTUBE_BDELETEVIDEO", "ビデオの削除" );
define( "_AM_MYTUBE_NOVIDEO", "表示するビデオがありません。" );
define( "_AM_MYTUBE_NOIMAGE", "表示するイメージがありません。" );
define( "_AM_MYTUBE_NOSELECT", "未選択" );
define( "_AM_MYTUBE_NOFILESELECT", "選択したファイルがありません。" );
define( "_AM_MYTUBE_MYTUBEVIDEO", "MyTubeビデオファイル:" );
define( "_AM_MYTUBE_WARNINSTALL4", "<b>WARNING:</b> <u>フォルダ</u> %s が書き込み可能でありません。<br />このフォルダは書き込み可能である必要があります。(CHMOD 777)" );
define( "_AM_MYTUBE_CATSPONSOR", "カテゴリースポンサーの選択:" );
define( "_AM_MYTUBE_CATSPONSORDSC", "クライアントを選択するなら下記のバナーIDは保存されないでしょう!" );
define( "_AM_MYTUBE_BANNER", "バナー" );
define( "_AM_MYTUBE_FBANNER", "バナー" );
define( "_AM_MYTUBE_BANNERID", "バナーIDの選択:" );
define( "_AM_MYTUBE_BANNERIDDSC", "クライアントを選択した場合上記バナーIDは保存されないでしょう!" );
// Uploader class
define( "_AM_MYTUBE_READWRITEERROR", "アップロードするファイルを選択していないかまたはアップロードするのに十分なREAD/WRITE権限がありません!" );
define( "_AM_MYTUBE_INVALIDFILESIZE", "ファイルサイズが正しくありません。" );
define( "_AM_MYTUBE_FILENAMEEMPTY", "ファイル名が空です。" );
define( "_AM_MYTUBE_NOFILEUPLOAD", "ファイルがアップロードされていません。エラーです。" );
define( "_AM_MYTUBE_UPLOADERRORZERO", "アップロードに問題があります。エラー: 0" );
define( "_AM_MYTUBE_UPLOADERRORONE", "アップロードしようとしたファイルが大きすぎます。エラー: 1" );
define( "_AM_MYTUBE_UPLOADERRORTWO", "アップロードしようとしたファイルが大きすぎます。エラー: 2" );
define( "_AM_MYTUBE_UPLOADERRORTHREE", "アップロードしようとしたファイルは一部のみアップロードされました。エラー: 3" );
define( "_AM_MYTUBE_UPLOADERRORFOUR", "アップロードのため選択したファイルがありません。エラー: 4" );
define( "_AM_MYTUBE_UPLOADERRORFIVE", "アップロードのため選択したファイルがありません。エラー: 5" );
define( "_AM_MYTUBE_NOUPLOADDIR", "アップロードディレクトリがセットされていません。" );
define( "_AM_MYTUBE_FAILOPENDIR", "ディレクトリのオープンに失敗しました。: " );
define( "_AM_MYTUBE_FAILOPENDIRWRITEPERM", "書き込み属性によりディレクトのオープンに失敗しました。: " );
define( "_AM_MYTUBE_FILESIZEMAXSIZE", "ファイルサイズ: %u. 許される最大サイズ: %u" );
define( "_AM_MYTUBE_FILESIZEMAXWIDTH", "ファイル幅: %u. 許される最大幅: %u" );
define( "_AM_MYTUBE_FILESIZEMAXHEIGHT", "ファイル高さ: %u. 許されるファイル高さ: %u" );
define( "_AM_MYTUBE_MIMENOTALLOW", "許されないMIMEタイプ: " );
define( "_AM_MYTUBE_FAILEDUPLOADING", "ファイルのアップロードに失敗しました。: " );
define( "_AM_MYTUBE_ALREADYEXISTTRYAGAIN", " サーバー上に既に存在しています。リネームして再度試してください。<br />" );
define( "_AM_MYTUBE_ERRORSRETURNUPLOAD", "<h4>アップロード中のエラーが返されました。</h4>" );
define( "_AM_MYTUBE_DOESNOTEXIST", " 存在しません!" );

// Version 1.04 RC-2
define( "_AM_MYTUBE_CLIPFISH", "ClipFish" );
define( "_AM_MYTUBE_LIVELEAK", "LiveLeak" );
define( '_AM_MYTUBE_MAKTOOB', 'Maktoob' );
define( '_AM_MYTUBE_VEOH', 'Veoh' );
define( "_AM_MYTUBE_FILE", "ファイル " );
define( "_AM_MYTUBE_INFORMATION", "ビデオ情報" );
define( "_AM_MYTUBE_VIDEO_DLVIDIDDSC", "以下のサンプルのように赤字部分を指定します。" );
define( "_AM_MYTUBE_VIDEO_VIEWS", "表示: " );
define( "_AM_MYTUBE_ERROR_CATISCAT", "サブカテゴリーとして設定できません!" );

// Version 1.04 RC-3
define( "_AM_MYTUBE_MOD_VIDID", "ビデオIDコード: " );
define( "_AM_MYTUBE_MOD_VIDSOURCE", "ビデオソース: " );
define( "_AM_MYTUBE_MOD_TIME", "時間: " );
define( "_AM_MYTUBE_MOD_KEYWORDS", "キーワード: " );
define( "_AM_MYTUBE_MOD_ITEM_TAG", "タグ: " );
define( "_AM_MYTUBE_MOD_PICURL", "画像URL: " );
define( "_AM_MYTUBE_IPAGE_SHOWLATEST", "最新のリストを表示しますか?" );
define( "_AM_MYTUBE_IPAGE_LATESTTOTAL", "表示するビデオの数は?" );
define( "_AM_MYTUBE_IPAGE_LATESTTOTAL_DSC", "「0」を指定するとこのオプションはオフとなります。" );

// Version 1.05 RC-1
define( '_AM_MYTUBE_VIMEO', 'Vimeo' );
define( '_AM_MYTUBE_MEGAVIDEO', 'Megavideo' );
define( '_AM_MYTUBE_VIDDLER', 'Viddler' );
define( '_AM_MYTUBE_CATTITLE', 'カテゴリー' );

// Version 1.06 RC-1
define( '_AM_MYTUBE_FLV_LICENSE', 'License' );
define( '_AM_MYTUBE_FLV_LICENSEDSC', 'Please read the <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">license</a> for using the JW FLV Media Player. By using this player you agree to the <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">noncommercial license</a>.' );
define( '_AM_MYTUBE_RSSFEED', 'RSSフィード' );
define( '_AM_MYTUBE_RSSFEEDCFG', 'RSSフィード設定' );
define( '_AM_MYTUBE_RSSFEEDDSC', 'ここで、MyTubeのRSSフィードの設定を行うことができます。<br />詳しいことは<a href="http://www.rssboard.org/" target="_blank">RSS Advisory Board</a> サイトをご覧下さい.' );
define( '_AM_MYTUBE_RSSACTIVE', 'RSSフィードを有効にする' );
define( '_AM_MYTUBE_RSSACTIVEDSC', '<em>はい</em>で有効 <em>いいえ</em>で無効.' );
define( '_AM_MYTUBE_RSSTITLE', 'RSSフィードのタイトル' );
define( '_AM_MYTUBE_RSSTITLEDSC', 'フィードの名前です。このサービスを参照します. もしRSSファイルと同じ情報があなたのサイトに含まれている場合は、チャンネル名はサイト名称と同じにすべきです.' );
define( '_AM_MYTUBE_RSSLINKS', 'RSSフィードリンク' );
define( '_AM_MYTUBE_RSSLINKSDSC', 'フィードへのリンクURL.' );
define( '_AM_MYTUBE_RSSDESCRIPTION', 'RSSフィードの説明' );
define( '_AM_MYTUBE_RSSDESCRIPTIONDSC', 'チャンネルを説明する単語または文章を入力.' );
define( '_AM_MYTUBE_RSSIMAGE', 'RSSフィード画像' );
define( '_AM_MYTUBE_RSSIMAGEDSC', 'チャンネルの画像(GIF,JPEGまたはPNG)があれば.' );
define( '_AM_MYTUBE_RSSWIDTH', 'RSSフィード画像幅' );
define( '_AM_MYTUBE_RSSWIDTHDSC', '画像の横幅を設定します.<br />最大値は144ピクセルです' );
define( '_AM_MYTUBE_RSSHEIGHT', 'RSSフィード画像高さ' );
define( '_AM_MYTUBE_RSSHEIGHTDSC', '画像の高さ設定します.<br />最大値は400ピクセルです.' );
define( '_AM_MYTUBE_RSSIMGTITLE', 'RSS画像のタイトル' );
define( '_AM_MYTUBE_RSSIMGTITLEDSC', '画像の説明です。altタグとして使用されます。' );
define( '_AM_MYTUBE_RSSIMGLINK', 'RSS画像クリック時のリンク' );
define( '_AM_MYTUBE_RSSIMGLINKDSC', 'これは通常サイトのURLを入力します。' );
define( '_AM_MYTUBE_RSSTTL', 'RSSフィード TTL' );
define( '_AM_MYTUBE_RSSTTLDSC', 'TTLは有効期限です。' );
define( '_AM_MYTUBE_RSSWEBMASTER', 'RSSフィード管理者Email' );
define( '_AM_MYTUBE_RSSWEBMASTERDSC', 'このチャンネルの管理者のEmailアドレス.' );
define( '_AM_MYTUBE_RSSEDITOR', 'RSSフィードチャンネル記者Email' );
define( '_AM_MYTUBE_RSSEDITORDSC', 'このチャンネルの記入者のEmailアドレス.' );
define( '_AM_MYTUBE_RSSCATEGORY', 'RSSフィードカテゴリ' );
define( '_AM_MYTUBE_RSSCATEGORYDSC', 'RSSフィードのカテゴリを最低１つは選んでください.' );
define( '_AM_MYTUBE_RSSGENERATOR', 'RSSフィードプログラム' );
define( '_AM_MYTUBE_RSSGENERATORDSC', 'このチャンネルを生成するプログラム.' );
define( '_AM_MYTUBE_RSSCOPYRIGHT', 'RSSフィード著作権' );
define( '_AM_MYTUBE_RSSCOPYRIGHTDSC', 'このチャンネル内の記事の著作権.' );
define( '_AM_MYTUBE_RSSTOTAL', 'RSSフィード合計リンク' );
define( '_AM_MYTUBE_RSSTOTALDSC', 'RSSフィードで取得表示する記事数.' );
define( '_AM_MYTUBE_RSSDBUPDATED', 'データベースは無事に更新されました。' );
define( '_AM_MYTUBE_RSSOFFLINE', 'RSSフィードオフラインメッセージのタイトル' );
define( '_AM_MYTUBE_RSSOFFLINEDSC', 'RSSフィードがオフラインの時に表示するメッセージ' );
define( '_AM_MYTUBE_RSSOFFMSG', 'RSSフィードがオフラインです' );
define( '_AM_MYTUBE_RSSOFFMSGDSC', 'RSSフィードが有効でない理由を記入してください' );
define( '_AM_MYTUBE_RSSOFFTITLE', 'RSSフィードは無効になりました.' );
define( '_AM_MYTUBE_RSSOFFMSGDEF', 'RSSフィードは管理のため一時的に無効になっています.' );
define( '_AM_MYTUBE_RSSCLICKSUBMIT', 'クリックしてデータベースに保存してください。' );
define( '_AM_MYTUBE_COPYRIGHT', 'Copyright' );
define( '_AM_MYTUBE_NICEURL', 'Alternative title for videoclip:' );
define( '_AM_MYTUBE_NICEURLDSC', 'Enter an alternative title for the videoclip to be used in the url. When the option <em>Use nice urls</em> from Preferences is selected and this field is left empty, than the title of the videoclip will be used.' );
define( '_AM_MYTUBE_NATIOGEO', 'National Geographic' );
?>