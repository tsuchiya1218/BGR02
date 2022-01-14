<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        <link href="css/detail.css" rel="stylesheet" type="text/css">
        <title></title>
    </head>

    <body>
        <?php /*$check = 1;*/ require_once("header.php"); ?>
        <main>
            <h1>商品詳細</h1>
            <h2>商品名</h2>
            <img src="image/noPhoto.png">
            <p>ここに商品説明を書きます</p>

            <div id="main">
                <p>¥1,000</p>
                <p>在庫：残り〇点</p>
                <input type="button" value="カートに入れる">
                <br>
                <!--オプション選択 選んだら出てくるやつ-->
                <div id="cb">
                    文字<input type="checkbox" class="text"><br>
                    <!--文字にチェックしたら-->

                    <div id="text">
                        入れる文字を入力してください<br>
                        <input type="text">
                    </div>
                    <br>

                    色<input type="checkbox" class="color"><br>
                    <!--色にチェックしたら-->

                    <div id="color">
                        赤<input type="checkbox">
                        青<input type="checkbox">
                        黄<input type="checkbox">
                    </div>
                    <br>

                    柄<input type="checkbox" class="pattern"><br>
                    <!--色にチェックしたら-->

                    <div id="pattern">
                        丸<input type="checkbox">
                        三角<input type="checkbox">
                        四角<input type="checkbox">
                    </div>
                    <br>

                    画像<input type="checkbox" class="file"><br>
                    <!--画像にチェックしたら-->

                    <div id="file">
                        ファイルを選択してください<br>
                        <input type="file">
                    </div>
                </div>
            </div>

            <input type="button" value="商品一覧に戻る">
        </main>
        <?php require_once("footer.php"); ?>
    </body>

</html>