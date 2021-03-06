<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/common.css" rel="stylesheet" type="text/css">
        <link href="css/detail.css" rel="stylesheet" type="text/css">
        <title>商品名の詳細</title>
    </head>

    <body>
        <?php /*$check = 1;*/ require_once("header.php"); ?>
        <main>
            
            <h1>商品名</h1>
            <div id="img">
                <img src="image/pencil_mitsubisi.jpg">
                <input type="button" onclick="history.back()" value="商品一覧に戻る">
            </div>

            <div id="checkbox">
                <form action="cart_add.php" method="post">
                <p>¥1,000</p>
                <p>在庫：残り10点</p>
	        	<input type="checkbox" class="cb">オプション
                <!--オプション選択 選んだら出てくるやつ-->
                <div id="cb">
                <input type="checkbox" class="text">文字<br>
                    <!--文字にチェックしたら-->

                    <div id="text">
                        入れる文字を入力してください<br>
                        <input type="text">
                    </div>
                    <br>

                    <input type="checkbox" class="color">色<br>
                    <!--色にチェックしたら-->

                    <div id="color">
                        <input type="radio" name="color">赤<br>
                        <input type="radio" name="color">青<br>
                        <input type="radio" name="color">黄
                    </div>
                    <br>

                    

                    <input type="checkbox" class="file">画像<br>
                    <!--画像にチェックしたら-->

                    <div id="file">
                        ファイルを選択してください<br>
                        <input type="file">
                    </div>
                </div>
                <br>
                <input type="submit" value="カートに入れる">
                </form>
            </div>

            <div id="detail">
                <p>
                    えんぴつです<br>
                    2Bです<br>
                    木製です<br>
                    １ダースです<br>
                    
                </p>
            </div>

        </main>
        <?php require_once("footer.php"); ?>
    </body>

</html>