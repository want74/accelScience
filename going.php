<?php
session_start();
	include "connect.php";
	$query = mysqli_query($con, "SELECT * FROM users WHERE  login='{$_POST['login']}' AND pass ='{$_POST['pass']}'");
	$stroka=$query->fetch_assoc();
	if (mysqli_num_rows($query)>0) {
		$_SESSION['id']=$stroka['id'];
		header('location: index.php');
	}
	else{
		header('location: index.php?error=Неверный номер или пароль');
	}
?>