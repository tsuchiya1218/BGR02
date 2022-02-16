<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/common.css" rel="stylesheet" type ="text/css">
        <title>支払い方法</title>
    </head>
    <body>
        <?php $check = 1; require_once("header.php"); ?>
        <main>
            <div id="center">
                <h2>支払い方法選択</h2>
                <form method="POST" action="buy_check.php">
                    <label for="conv"><input type="radio" id="conv" name="select" value="conveni"checked>
                    コンビニ支払い</label><br>
                    <label for="cre"><input type="radio" id="cre" name="select" value="credit">
                    クレジット支払い</label><br>
                    <button id="button" type="button" onclick="history.back()">戻る</button>
                    <input type="submit" id="button"value="次へ">
                </form>
            </div>
        </main>
        <?php require_once("footer.php"); ?>
    </body>
</html>