<?php 
include "../koneksi.php";

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "select * from t_user where username= '$user' AND password= '$pass'";
$result = mysql_query($query);

$row=mysql_num_rows($result);

if($row == 1){
	header('location:admin.php');
	}else{
	header('location:index.php');
}



?>