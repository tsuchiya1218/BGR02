<!--ログイン画面や購入画面等､メニューを表示したくない時には
    < ?php
        $check = 1;
        require_once("header.php");
    ?>
に変える-->

<header id="title">
    <h1>なんでも文房具店</h1>
    <a href="top.php"><button>ログイン</button></a>
    <?php
    
    if(empty($check)){
        
        echo'<nav>';
        echo'<ul class="main_menu">';
        echo'<li><a href="top.php">トップページ</a></li>';
        echo'<li><a href="about.php">店舗案内</a></li>';
        echo'<li><a href="search.php">商品検索</a></li>';
        echo'<li><a href="cart.php">カートを見る</a></li>';

        echo '</ul>';
        echo'</nav>';
    }
    ?>
</header>
