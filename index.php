<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>掲示板</title>
</head>

<body>

<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "root");
$stmt = $pdo->query("select * from 4each_keijiban");

?>
    <header>
        <h1 class="logo"><img src="./4eachblog_logo.jpg" alt="eachblog"></h1>
        <div class="nav-list-contain">
            <ul class="nav-list">
                <li class="nav-item">トップ</li>
                <li class="nav-item">プロフィール</li>
                <li class="nav-item">4eachについて</li>
                <li class="nav-item">登録フォーム</li>
                <li class="nav-item">問い合わせ</li>
                <li class="nav-item">その他</li>
            </ul>
        </div>
    </header>

    <main>
        <div class="main-container">
            <div class="left">
                <h2 class="left-ttl">プログラミングに役立つ書籍</h2>

                <form method="POST" action="insert.php">
                  <div>
                      <h3 class="h3-form">入力フォーム</h3>
                      <label>ハンドルネーム</label>
                      <br>
                      <input type="text" class="text" size="35" name="handlename">
                  </div>

                  <div>
                      <label>タイトル</label>
                      <br>
                      <input type="text" class="text" size="35" name="title">
                  </div>

                  <div>
                      <label>コメント</label>
                      <br>
                      <textarea cols="35" rows="7" name="comments"></textarea>
                  </div>

                  <div>
                      <input type="submit" class="submit" value="投稿する">
                  </div>
                </form>
                <?php

                foreach ($stmt as $row){

                    echo "<div class='kiji'>";
                    echo "<h3 class='h3-kiji'>".$row['title']."</h3>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "</div>";
                    echo "<div class='handlename'>posted by".$row['handlename']." </div>";
                    echo "</div>";
                }


                ?>

            </div>

            <div class="right">
                <div class="right-container">
                    <div class="right-items">
                        <h4 class="right-item-ttl">人気の記事</h4>

                        <ol>
                            <li><a href=#>PHPオススメ本</a></li>
                            <li><a href=#>PHP Myadminの使い方</a></li>
                            <li><a href=#>今人気のエディタ Top５</a></li>
                            <li><a href=#>HTMLの基礎</a></li>
                        </ol>
                    </div>
                    <div class="right-items">
                        <h4 class="right-item-ttl">オススメリンク</h4>
                        <ol>
                            <li><a href=#>インターノウス株式会社</a></li>
                            <li><a href=#>XAMPPのダウンロード</a></li>
                            <li><a href=#>Eclipseのダウンロード</a></li>
                            <li><a href=#>Bracketsのダウンロード</a></li>
                        </ol>
                    </div>
                    <div class="right-items">
                        <h4 class="right-item-ttl">カテゴリ</h4>
                        <ol>
                            <li><a href=#>HTML</a></li>
                            <li><a href=#>PHP</a></li>
                            <li><a href=#>MySQL</a></li>
                            <li><a href=#>Javascript</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <footer>
        copyright © internous | 4each blog the which provides A to Z about programming.
    </footer>

</body>

</html>