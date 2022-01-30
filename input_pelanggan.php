<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into pelanggan(id_pelanggan, nama_pelanggan, no_telp, status )
	values(
	'".$_POST['id_pelanggan']."',
	'".$_POST['nama_pelanggan']."',
	'".$_POST['no_telp']."',
	'".$_POST['status']."')");

if($query_input) {
header('location:tampil_pelanggan.php');
}else{
	echo mysqli_error();
}
}
include('header.php');
?>
<form method="POST">
	<table class="table table-bordered" border="1">
		<tr>
			<td>ID Pelanggan</td>
			<td><input type="number" name="id_pelanggan"></td>
		</tr>
		<tr>
			<td>Nama Pelanggan</td>
			<td><input type="text" name="nama_pelanggan"></td>
		</tr>
		<tr>
			<td>No Telp</td>
			<td><input type="text" name="no_telp"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type="text" name="status"></td>
		</tr>
			<tr>
				<td><input type="submit" name="save"></td>
	        </tr>
	</table>
</form>
<?php 
include('footer.php'); ?>