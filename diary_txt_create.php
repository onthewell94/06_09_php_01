<?php
//　エラーを表示するコード
ini_set( 'display_errors', 1 );
ini_set( 'error_reporting', E_ALL );
// var_dump($_POST);
// exit();

// データの受け取り
$diary = $_POST["diary"];
$date = $_POST["date"];

$write_data = "{$diary} {$date}\n";     // スペース区切りで改行
$file = fopen('data/diary.txt' , 'a');      // ファイルを開く
flock($file, LOCK_EX);     // ファイルをロック
fwrite($file, $write_data);     // データに書き込み
flock($file, LOCK_UN);      // ロック解除
fclose($file);      // ファイルを閉じる
header("Location:diary_txt_input.php");     // 入力画面に移動
