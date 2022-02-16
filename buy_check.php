<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/common.css" rel="stylesheet" type ="text/css">
        <title></title>
    </head>
    <body>
        <?php $check = 1; require_once("header.php"); ?>
        <main>
            <p>以下の内容で注文を確定します<br>よろしいでしょうか</p>
            <dl>
                <dt>名前</dt><dd>鉛筆</dd>
                <dt>数</dt><dd>1個</dd>
                <dt>小計</dt><dd>値段*数</dd>
            </dl>
            <dl>
            <dt>名前</dt><dd>鉛筆</dd>
                <dt>数</dt><dd>1個</dd>
                <dt>小計</dt><dd>値段*数</dd>
            </dl>
            <dl>
                <dt>住所</dt><dd>届け先住所を表示</dd>
                <dt>支払い方法</dt><dd>支払い方法を表示</dd>
            </dl>
            <button onclick="location.href='buy_complete.php'">確定する</button>
        </main>
        <?php require_once("footer.php"); ?>
    </body>
</html>