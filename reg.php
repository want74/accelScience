<?php 
session_start();
include "connect.php";
$query1 = mysqli_query($con, "INSERT INTO users  (login, email, pass, id) VALUES ('{$_POST['login']}', '{$_POST['email']}', '{$_POST['pass']}', NULL)");
echo "INSERT INTO users  (login, email, pass, id) VALUES ('{$_POST['login']}', '{$_POST['email']}', '{$_POST['pass']}', NULL)";
header('location: go.php');
 ?>