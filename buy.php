<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/common.css" rel="stylesheet" type ="text/css">
        <title>届け先指定</title>
    </head>
    <body>
        <?php $check = 1; require_once("header.php"); ?>
        <main>
        <form method="POST" action="buy_select.php">
        <div class="box">
            <h2>届け先住所の表示</h2>
            <div id="left">
                <dl>
                    <dt>登録住所に配達</dt>
                    <dd>
                        <label from="add01"><input type="radio" id="add01" name="address" checked>住所1</label><br>
                        <label from="add02"><input type="radio" id="add02" name="address">住所2</label>
                    </dd>
                </dl>
            </div>
            <div id="center">
                <input type="submit" formaction="cart.php" value="戻る">
                <input type="submit" value="次へ">
            </div>
        </form>
        </main>
        <?php require_once("footer.php"); ?>
    </body>
</html>