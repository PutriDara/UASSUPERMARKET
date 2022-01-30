<?php
include("koneksi.php");
include('header.php');

	$query_view=mysqli_query($koneksi, "select * from satuan");
?>
<a href="input_satuan.php" class="btn btn-danger">Tambah Satuan</a>
<table class="table-bordered" border="1">
		<tr>
			<td>ID Satuan</td>
			<td>Nama</td>
		</tr>


<?php 
while ($tampil=mysqli_fetch_array($query_view)) {?>
 	

		<tr>
 			<td><?php echo $tampil['satuan_id']?></td>
 			<td><?php echo $tampil['nama']?></td>
 		</tr>
 
<?php }
include('footer.php'); ?>
 </table>
