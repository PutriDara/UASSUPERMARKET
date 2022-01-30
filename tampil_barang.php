<?php
include("koneksi.php");
include('header.php');
	$query_view=mysqli_query($koneksi, "select * from barang");
?>
<a href="input_barang.php" class="btn btn-danger">Tambah Barang</a>
<table class="table-bordered" border="1">
		<tr>
			<td>ID Barang</td>
			<td>Nama</td>
			<td>ID Kategori</td>
			<td>ID Satuan</td>
		</tr>


<?php 
while ($tampil=mysqli_fetch_array($query_view)) {?>
 	

		<tr>
 			<td><?php echo $tampil['id_barang']?></td>
 			<td><?php echo $tampil['nama']?></td>
 			<td><?php echo $tampil['kategori_id']?></td>
 			<td><?php echo $tampil['satuan_id']?></td> 		
 		</tr>
 
<?php }
include('footer.php'); ?>
 </table>
