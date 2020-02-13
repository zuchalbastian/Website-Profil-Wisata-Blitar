<h3>Tabel Hotel</h3>
<p>
Dapatkan informasi berbagai hotel untuk penginapan di Blitar,Jawa Timur. Segala update informasi bisa anda dapatkan di sini.
</p>

<table class="table table-hover">

	<thead>
	<tr>
		<td>No</td>
		<td>Judul</td>
		<td>Deskripsi</td>
		<td>Image</td>
		<td>Posted</td>
	</tr>
	</thead>
		
	<tbody>
			<?php
					include "koneksi.php";
					$urut = 0;
			
					$query = "select * from t_info order by id DESC";
					$result = mysql_query($query);
					
					while ($row=mysql_fetch_array($result)){
					$urut++;
			?>
			<tr>
				<td><?php echo($urut);?></td>
				<td><?php echo($row['judul']);?></td>
				<td><?php echo($row['des']);?></td>
				<td><img width='200px' height='200px' src='<?php echo($row['img']);?>'></td>
				<td><?php echo($row['tgl']);?></td>
			</tr>
			
			<?php } ?>
	
	</tbody>
	
	
</table>
