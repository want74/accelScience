<?php 
session_start();
include "connect.php";
$query1 = mysqli_query($con, "SELECT * FROM moneys WHERE project_id = {$_POST['project_id']} ");
$stroka=$query1->fetch_assoc();
$plus = $stroka['now'] + $_POST['summ'];
echo $plus;
$query1 = mysqli_query($con, "UPDATE moneys SET now = '{$plus}' WHERE project_id = {$_POST['project_id']}");
header('location: index.php');
 ?>