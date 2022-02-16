<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/common.css" rel="stylesheet" type ="text/css">
        <title>最終確認</title>
    </head>
    <body>
        <?php $check = 1; require_once("header.php"); ?>
        <main>
            <h2>こちらで確定してよろしいでしょうか</h2>
            <form action="complete_add.php" method="post">
                <input type="submit" value="購入を確定する">
            </form>
        </main>
        <?php require_once("footer.php"); ?>
    </body>
</html>