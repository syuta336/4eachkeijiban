<?php

mb_internal_encoding("utf-8");

$pdo = new PDO("mysql:dbname=lesson01; host=localhost;", "root", "root");

$pdo->exec("insert into 4each_keijiban(handlename, title, comments)
    values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');
");

header("Location:http://localhost:8888/index.php");


?>

