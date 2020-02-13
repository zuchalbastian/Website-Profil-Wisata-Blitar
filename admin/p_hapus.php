<?php
     include "config.php";
	 
	 $kode = $_GET['kode'];
	 $query = "delete from tbl_komen where id=$kode";
	 mysql_query($query);
	 
	 header("Location: index.php?hal=komen");
?>