<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="4eachblog_logo.jpg">
        </div>
            <ul class="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
    </header>
    <main>
    <div class="main-container">
    <div class="left">
    <div class="box1">
    <h1>プログラミングに役立つ掲示板</h1>
    <form method="post" action="insert.php">
        <h3>入力フォーム</h3>
        <div>
            <label>名前</label>
            <br>
            <input type="text" class="text" size="50" name="handlename">
        </div>

        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="50" name="title">
        </div>


        <div>
            <label>コメント</label>
            <br>
            <textarea cols="50" rows="7" name="comments"></textarea>
        </div>

        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
    </form>
</div>
</div>
</div>
    
    <div class="right">
        <div class="box2">
        <div>
        <h2>人気の記事</h2>
        <ul class="content">
            <li>PHPオススメ本</li>
            <li>PHP MyAdminの使い方</li>
            <li>今人気のエディタ Top5</li>
            <li>HTMLの基礎</li>
        </ul>
        </div>
        <div>
        <h2 >オススメリンク</h2>
        <ul class="content">
            <li>インターノウス株式会社</li>
            <li>XAMPPのダウンロード</li>
            <li>Eclipseのダウンロード</li>
            <li>Braletsのダウンロード</li>
        </ul>
        </div>
        <div>
        <h2>カテゴリ</h2>
        <ul class="content">
            <li>HTML</li>
            <li>PHP</li>
            <li>MySQL</li>
            <li>JavaScript</li>
        </ul>
        </div>
        </div>
    </div>
    </div>
    </main>
    <footer>
        <p> copyright(c)internous | 4each blog the wich provides A to Z about programming.</p>
    </footer>
</body>
</html>