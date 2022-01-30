<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into kategori(kategori_id, nama)
	values(
	'".$_POST['kategori_id']."',
	'".$_POST['nama']."')");

if($query_input) {
header('location:tampil_kategori.php');
}else{
	echo mysqli_error();
}
}
include('header.php');
?>
<form method="POST">
	<table class="table table-bordered" border="1">
		<tr>
			<td>ID Kategori</td>
			<td><input type="number" name="kategori_id"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama"></td>
		</tr>
			<tr>
				<td><input type="submit" name="save"></td>
	        </tr>
	</table>
</form>
<?php 
include('footer.php'); ?>