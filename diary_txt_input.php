<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>１日の振り返りシート作成</title>
</head>

<body>
    <form action="diary_txt_create.php" method="POST">
        <fieldset>
            <legend>１日の振り返りシート作成（入力画面）</legend>
            <a href="diary_txt_read.php">一覧画面</a>
            <div>
                diary: <input type="text" name="diary">
            </div>
            <div>
                date: <input type="date" name="date">
            </div>
            <div>
                <button>提出</button>
            </div>
        </fieldset>
    </form>

</body>

</html>
