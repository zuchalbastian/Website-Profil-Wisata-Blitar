<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
  
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-12">	
	<br>
		
<?php 
	include "../koneksi.php";
?>

<div>
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation"><a href="#user" aria-controls="user" role="tab" data-toggle="tab">User</a></li>
		<li role="presentation"><a href="#info" aria-controls="info" role="tab" data-toggle="tab">Info</a></li>
		<!--<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
		<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>--->
		
		<li class="nav navbar-nav navbar-right"><a class="btn btn_warning" href="../index.php">Logout</a></li>
		
	</ul>

	
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="user">
		<!--<p align="justify">You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 675 Mass Ave, Cambridge, MA 02139, USA.
		</p>-->			
			
		<br>
		
			<table class="table table-hover">
				<thead>
					<td>Username</td>
					<td>Password</td>
				</thead>
				
				<?php
						$query = "select * from t_user order by id ASC";
						$result = mysql_query($query);
						while ($row=mysql_fetch_array($result)){
				?>
				<tr>
					<td><?php echo ($row['username']);?></td>
					<td><?php echo ($row['password']);?></td>
				</tr>
				
				<?php } ?>

			</table>
		</div>
		<div role="tabpanel" class="tab-pane" id="info">
			
		<p></p>
		<br>
			
		<table>
			<thead>
				<td>No</td>
				<td>User</td>
				<td>Tanggal</td>
				<td>Judul</td>
				<td>Deskripsi</td>
				<td>Image</td>
				<td>Manage</td>
			</thead>
				
			<?php 
				$noinfo = 0;
				
				$query = "select * from t_info order by id DESC";
				$result = mysql_query($query);
				while($row=mysql_fetch_array($result)){
					$noinfo++;
				?>
				
				<tr>
					<td><?php echo($noinfo);?></td>
					<td><?php echo($row['user']);?></td>
					<td><?php echo($row['tgl']);?></td>
					<td><?php echo($row['judul']);?></td>
					<td><?php echo($row['des']);?></td>
					<td><img width='200px' height='200px' src='../<?php echo($row['img']);?>'></td>
					<td><a class="btn btn-warning btn-xs">Edit</a> | <a class="btn btn-warning btn-xs">Delete</a></td>
				</tr>
			<?php } ?>
		</table>
		
			<hr>
			
			<h3>Input Daftar Hotel</h3>
			<form  enctype="multipart/form-data" method="POST" action="p_info.php">
				<table width=80%>
					<tr>
						<td>User</td>
						<td>:</td>
						<td>
							<select class="form-control" name="username">
								<option value='-'>-</option>
								<?php 
									$quuser = "select * from t_user order by id ASC";
									$reuser = mysql_query($quuser);
									while($rouser = mysql_fetch_array($reuser)){
									?>
									<option value='<?php echo($rouser['username']);?>'><?php echo($rouser['username']);?></option>
								<?php } ?>
							</select>			
						</td>
					</tr>
					
					<!--
						<tr>
						<td>Tanggal</td>
						<td>:</td>
						<td><input type="date" name='tanggal' class="form-control"></td>
						</tr>
						
					-->
					<tr>
						<td>Judul</td>
						<td>:</td>
						<td><input type="text" name="judul" class="form-control"></td>
					</tr>
					<tr>
						<td>Deskripsi</td>
						<td>:</td>
						<td><textarea name="deskripsi" class="form-control"></textarea></td>
					</tr>
					<tr>
						<td>Gambar</td>
						<td>:</td>
						<td><input type="file" name="gambar" id="gambar"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<br>
						<button class="btn btn-warning">Kirim</button></td>
					</tr>
				</table>
			</form>
		
		</div>
		<div role="tabpanel" class="tab-pane" id="messages">...</div>
		<div role="tabpanel" class="tab-pane" id="settings">...</div>
	</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</div>
		
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