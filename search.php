<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/common.css" rel="stylesheet" type ="text/css">
        <title>検索画面</title>
    </head>
    <body>
        <?php /*$check = 1;*/ require_once("header.php"); ?>
        <main>
            <h2>商品検索画面</h2>
            <table>
                <thead>
                    <tr><th>商品名</th><th>メーカー数</th><th>値段</th></tr>
                </thead>
                <tbody>
                    <tr><td><a href="detail.php">ペン</a></td><td>なんS</td><td>\831-</td></tr>
                </tbody>
            </table>
        </main>
        <?php require_once("footer.php"); ?>
    </body>
</html>