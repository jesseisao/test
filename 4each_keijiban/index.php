<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>掲示板</title>
	<link rel="stylesheet"type="text/css"href="style.css">
</head>
	
<body>
	<?php
  mb_internal_encoding("utf8");

  $pdo = new PDO("mysql:dbname=jesse;host=localhost;","root","mysql");
	$stmt=$pdo->query("select*from 4each_keijiiban");
	

	?>
	
	<img src="4eachblog_logo.jpg">
	<header>
		<ul>
			<li>トップ</li>
		　<li>プロフィール</li>
			<li>4eachについて</li>
			<li>登録フォーム</li>
			<li>お問い合わせ</li>
		　<li>その他</li>
		</ul>
	</header>
	
	<main>
		<div class="left">
		<h1>プログラミングに役立つ掲示板</h1>
		<div class="aaa">
			<div class="nnn"><h3>入力フォーム</h3></div>
			<form method="post"action="insert.php">
			<div>
		  <label>ハンドルネーム</label>
		  <br>
		  <input type="text"class="text"size="45"name="handlename">
		  </div>
			<div>
		  <label>タイトル</label>
		  <br>
		  <input type="text"class="text"size="45"name="title">
		  </div>
			<div>
		  <label>コメント</label>
		  <br>
		  <textarea cols="75"rows="8"name="comments"></textarea>
		  </div>
			<div>
		  <br>
			<input type="submit"class="submit"value="送信する">	  
			</div>
		 </form>
		</div>
	  <?php
			while($row=$stmt->fetch()){
			
			echo"<div class='bbb'>";
			echo"<h3>".$row['title']."</h3>";
			echo"<div class='contents'>";
			echo $row['comments'];
			echo"<div class='hhh'>
			posted by ".$row['handlename']."
			</div>";
		  echo"</div>";
			echo"</div>";
			}
		 ?>
			
		
	 </div>
	 <div class="right">
		<h2>人気の記事</h2>
		 <ul>
			 <li>PHPオススメ本</li>
			 <li>PHP MyAdminの使い方</li>
			 <li>今人気のエディタTop5</li>
			 <li>HTMLの基礎</li>
		 </ul>
		<h2>オススメリンク</h2>
		 <ul>
			 <li>インターノウス株式会社</li>
			 <li>XAMPPのダウンロード</li>
			 <li>Eclipseのダウンロード</li>
			 <li>Braketのダウンロード</li>
		 </ul>
		<h2>カテゴリ</h2>
		 <ul>
			 <li>HTML</li>
			 <li>PHP</li>
			 <li>MySQL</li>
			 <li>JavaScript</li>
		 </ul>
		</div>
	</main>
	
	<footer>copyright internous | 4each blog is the one which provides A to Z about programming.
	</footer>
	
</body>
</html>