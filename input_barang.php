<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into barang(id_barang, nama, kategori_id, satuan_id )
	values(
	'".$_POST['id_barang']."',
	'".$_POST['nama']."',
	'".$_POST['kategori_id']."',
	'".$_POST['satuan_id']."')");

if($query_input) {
header('location:tampil_barang.php');
}else{
	echo mysqli_error();
}
}
include('header.php');
?>
<form method="POST">
	<table class="table table-bordered" border="1">
		<tr>
			<td>ID Barang</td>
			<td><input type="number" name="id_barang"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>ID Kategori</td>
			<td><input type="number" name="kategori_id"></td>
		</tr>
		<tr>
			<td>ID Satuan</td>
			<td><input type="number" name="satuan_id"></td>
		</tr>
			<tr>
				<td><input type="submit" name="save"></td>
	        </tr>
	</table>
</form>
<?php 
include('footer.php'); ?>