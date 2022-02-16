<?php
session_start();
try {
	$dsn = 'sqlsrv:server=10.42.129.3;database=20grb2';
	$user = '20grb2';
	$password = '20grb2';
 //PDOオブジェクトの作成
	$dbh = new PDO ( $dsn, $user, $password );
	$dbh ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch ( PDOException $e ) {
	print "接続エラー!: " . $e->getMessage () . "<br/>";
	die ();
}
$sql = "select MakerID,MakerName,MakerURL from Maker";

/*ログイン画面や購入画面等､メニューを表示したくない時には
    <?php
        $check = 1;
        require_once("header.php");
    ?>
に変える*/?>

<header id="title">
    <!--<h1>なんでも文房具店</h1>-->
    <a href="index.php"><img src="image/gabalogo.png"></a>
    <a href="login.php"><button>ログイン</button></a>
    <?php
    
    if(empty($check)){
        
        echo'<nav>';
        echo'<ul class="main_menu">';
        echo'<li><a href="index.php">トップページ</a></li>';
        echo'<li><a href="about.php">店舗案内</a></li>';
        echo'<li><a href="search.php">商品検索</a></li>';
        echo'<li><a href="cart.php">カートを見る</a></li>';

        echo '</ul>';
        echo'</nav>';
    }
    ?>
</header>
