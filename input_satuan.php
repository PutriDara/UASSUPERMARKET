<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into satuan(satuan_id, nama)
	values(
	'".$_POST['satuan_id']."',
	'".$_POST['nama']."')");

if($query_input) {
header('location:tampil_satuan.php');
}else{
	echo mysqli_error();
}
}
include('header.php');
?>
<form method="POST">
	<table class="table table-bordered" border="1">
		<tr>
			<td>ID Satuan</td>
			<td><input type="number" name="satuan_id"></td>
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