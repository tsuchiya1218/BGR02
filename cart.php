<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/common.css" rel="stylesheet" type ="text/css">
        <title>カート内容</title>
    </head>
    <body>
        <?php /*$check = 1;*/ require_once("header.php"); ?>
        <main>
    <div class="box">
        <p><h2>カート内容</h2></p>
        <table id="table">
            <tr><th>商品名</th><td>値段</td><td>個数</td><td>商品削除</td></tr>
            <tr><td>ペン</td><td>831円</td><td>1</td><td><button>削除</button></td>
        </table>
    </div>
    <div id="center">
    <button id="button" type="button" onclick="history.back()">戻る</button>
    <button id="button" type="button" onclick="location.href='buy.php'">次へ</button>
    </div>
    </main>
        <?php require_once("footer.php"); ?>
    </body>
</html>