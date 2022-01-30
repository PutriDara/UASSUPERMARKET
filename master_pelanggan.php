<?php
include("koneksi.php");
include('header.php');
	$query_view=mysqli_query($koneksi, "select * from pelanggan");
?>
<a href="input_pelanggan.php" class="btn btn-danger">Tambah Pelanggan</a>
<table class="table-bordered" border="1">
		<tr>
			<td>ID Pelanggan</td>
			<td>Nama Pelanggan</td>
			<td>No Telp</td>
			<td>Status</td>
		</tr>


<?php 
while ($tampil=mysqli_fetch_array($query_view)) {?>
 	

		<tr>
 			<td><?php echo $tampil['id_pelanggan']?></td>
 			<td><?php echo $tampil['nama_pelanggan']?></td>
 			<td><?php echo $tampil['no_telp']?></td>
 			<td><?php echo $tampil['status']?></td> 		
 		</tr>
 
<?php } ?>
 </table>
<?php 
include('footer.php');  ?>