<?php
include("koneksi.php");
include('header.php');
	$query_view=mysqli_query($koneksi, "select * from kategori");
?>
<a href="input_kategori.php" class="btn btn-danger">Tambah Kategori</a>
<table class="table-bordered" border="1">
		<tr>
			<td>ID Kategori</td>
			<td>Nama</td>
					</tr>


<?php 
while ($tampil=mysqli_fetch_array($query_view)) {?>
 	

		<tr>
 			<td><?php echo $tampil['kategori_id']?></td>
 			<td><?php echo $tampil['nama']?></td>
 		</tr>
<?php } ?>
 </table>
<?php 
include('footer.php');  ?>