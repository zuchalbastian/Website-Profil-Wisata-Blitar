<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blitar Vacation</title>
	<link rel="shortcut icon" href="img/blitar.ico">
    <link href="css/bootstrap.css" rel="stylesheet">
  </head>
<body>
 <div class="col-md-1"></div>
 <div class="col-md-10">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  <!--<li data-target="#carousel-example-generic" data-slide-to="3"></li>--->
		  </ol>
		  
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox" align="center">
			  <div class="item active">
				  <img src="img-carousel/img1_copy.jpg" width=100%>
				  <div class="carousel-caption">
					 
				  </div>
			  </div>
			  
			  <div class="item">
				  <img src="img-carousel/img2_copy.jpg" width=100%>
				  <div class="carousel-caption">
					  
				  </div>
			  </div>
			  
			  <div class="item">
				  <img src="img-carousel/img3_copy.jpg" width=100%>
				  <div class="carousel-caption">
					  
				  </div>
			  </div>
			  
			  <!---<div class="item">
				  <img src="img/img4.jpg" width=100%>
				  <div class="carousel-caption">
					 .....
				  </div>
			  </div>--->
	  
		  </div>
		  
		  
		  <!-- Controls -->
		  <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
		  </a>--->
	  </div>
			<nav class="nav navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"></a>
					</div>
					
				
				 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				   <ul class="nav navbar-nav">
					<li><a href="index.php?p=home">Beranda</a></li>
					
					<li><a href="index.php?p=profil">Profil</a></li>
					
					<li><a href="index.php?p=info">Info</a></li>
					
					<li class="dropdown">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Wisata <span class="caret"></span></a>
					  <ul class="dropdown-menu">
						<li><a href="index.php?p=bung_karno">Makam Bung Karno</a></li>
						<li><a href="index.php?p=penataran">Candi Penataran</a></li>
						<li><a href="index.php?p=serang">Pantai Serang</a></li>
						<li><a href="index.php?p=tambakrejo">Pantai Tambakrejo</a></li>
					  </ul>
					</li>
				   </ul>
				   
				   <ul class="nav navbar-nav navbar-right">
					   <form class="navbar-form navbar-left" role="search">
						   <div class="form-group">
							   <input type="text" class="form-control" placeholder="Search">
						   </div>
						   <!---<button type="submit" class="btn btn-default">Cari</button>--->
					   </form>
					   
				   <li><a href="admin/">Masuk</a></li>
				   </ul>
				 </div>
				</div>
			</nav>
			
  
  <br>
  
  <div class="row">
	<div class="col-md-8">
		<?php 
				$page = $_GET['p'];
				if ($page==NULL){
					 require_once("home.php");
				}else{
					 require_once($page.".php");
				}
		?>
		
	</div>
	<div class="col-md-1"></div>
	
	<div class="col-md-3">
		<br>
		<div class="panel panel-info">
			<img src="iklan/1.jpg" width="270px" alt="middle">
			<br><br>
			<img src="iklan/2.jpg" width="270px" alt="middle">
			<br><br>
			<img src="iklan/4.jpg" width="270px" alt="middle">
		</div>
		
	
		
	</div>
	
	
  </div>
  
  <br>
  
	 

	 <div class="nav navbar-inverse navbar-bottom">
		 <div class="container">
			 <p class="navbar-text pull-left">&#169; Copyright by Zuchal Ari Bastian</p>
		 </div>
	 </div>
	 <div class="col-md-1"></div> 
  
  
  </div>
	
  

  
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>