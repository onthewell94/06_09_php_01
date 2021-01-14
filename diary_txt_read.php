<?php
// 出力用の変数
$str = " ";
//ファイル開く(rは読み取り専用)
$file = fopen('data/diary.txt' , 'r');
// var_dump($str);
// exit();

// ファイルロック
flock($file, LOCK_EX);

if ($file){
    // fgetsで１行ずつ読み込んで$lineにいれる
    while ($line = fgets($file)) {
      // 出力用の変数の後に追加
      $str .= "<tr><td>{$line}</td></tr>";
    }
}

// ロック解除
flock($file, LOCK_UN);
// ファイル閉じる
fclose($file);
// ($strに全ての情報が入る！)
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>１日の振り返りシート作成</title>
</head>

<body>
  <fieldset>
    <legend>１日の振り返りシート作成（一覧画面）</legend>
    <a href="diary_txt_input.php">履歴</a>
    <table>
      <thead>
        <tr>
          <th><?= "$str" ?></th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
  </fieldset>
</body>

</html>
