<?php
mb_internal_encoding("utf8");

$pdo = new PDO("mysql:dbname=jesse;host=localhost;","root","mysql");

$pdo->exec("insert into 4each_keijiiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");

header("Location:http://localhost/4each_keijiban/index.php");

?>