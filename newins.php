<?php 
session_start();
include "connect.php";
$query3 = mysqli_query($con, "SELECT * FROM projects ORDER BY id DESC");
$stroka=$query3->fetch_assoc();
$newid = $stroka['id']+1;
echo $stroka['id'],$newid;
$query1 = mysqli_query($con, "INSERT INTO projects  (title, yt, word, money, user_id, id) VALUES ('{$_POST['title']}', '{$_POST['yt']}','{$_POST['word']}','{$_POST['money']}',  {$_SESSION['user_id']}, NULL)");
$query2 = mysqli_query($con, "INSERT INTO moneys  (now, project_id,id) VALUES (0, {$newid},NULL)");
echo "INSERT INTO projects  (title, yt, word, money, user_id, id) VALUES ({$_POST['title']}, {$_POST['yt']},{$_POST['word']},{$_POST['money']},  {$_SESSION['user_id']}, NULL)";
header('location: index.php');
 ?>