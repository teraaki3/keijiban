<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="UTF-8">
        <title>4eachblog</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <?php
         mb_internal_encoding("utf8");
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
        $stmt = $pdo->query("select*from 4each_keijiban");
        ?>
        
    <header>
        <div class="logo"><img src="4eachblog_logo.jpg"></div>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
        
        <main>
            
            <div class="left">
              <h1>プログラミングに役立つ掲示板</h1>
                
            <div class="form">
              <h3>入力フォーム</h3>
              <form method="post" action="insert.php">
            <div>
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
            </div>
            <?php
            
            while($row = $stmt->fetch()){
         
            echo"<div class='kiji'>";
            echo"<h4>".$row['title']."</h4>";
            echo"<div class='contents'>";
            echo $row['comments'];
            echo"<div class='handlename'>posted by".$row['handlename']."</div>";
            echo"</div>";
            echo"</div>";
            }
            ?>
            </div>
            <div class="right">
                <h2>人気の記事</h2>
              <div class="ninki">
                  <p>PHPオススメ本</p>
                  <p>PHP MyAdminの使い方</p>
                  <p>今人気のエディダ Top5</p>
                  <p>HTMLの基礎</p>
              </div>
              
              <h2>オススメリンク</h2>
              <div class="rink">
                  <p>インターノウス株式会社</p>
                  <p>XAMPPのダウンロード</p>
                  <p>Eclipseのダウンロード</p>
                  <p>Braketsのダウンロード</p>
              </div>
              
              <h2>カテゴリ</h2>
              <div class="kate">
                  <p>HTML</p>
                  <p>PHP</p>
                  <p>MySQL</p>
                  <p>JavaScript</p>
              </div>
            </div>
          </div>
        </main>
        
        <footer>
         copyright(c) all right reserved internous 2015-2018
        </footer>
    
    </body>
        
</html>