<?php 
	include "../koneksi.php";
	
	$user = $_POST['username'];
	$tgl = date('y-m-d');
	$judul = $_POST['judul'];
	$des = $_POST['deskripsi'];
	
	$img = $_FILES['gambar']['name'];
	$gbr = "../img_info/".$img;
	
	$gbr2 = "img_info/".$img;


	$query = "insert into t_info values(NULL,'$user','$tgl','$judul','$des','$gbr2')";
	mysql_query($query);
	
	move_uploaded_file($_FILES['gambar']['tmp_name'],$gbr);
	
	header("Location: admin.php");
	

?>


