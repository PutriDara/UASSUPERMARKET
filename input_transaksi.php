<?php
include("koneksi.php");

if(isset($_POST['save'])){
	$query_input=mysqli_query($koneksi,"insert into transaksi(id_transaksi, nama_transaksi, tgl_transaksi, harga, qty, id_barang, diskon, total, id_pelanggan )
	values(
	'".$_POST['id_transaksi']."',
	'".$_POST['nama_transaksi']."',
	'".$_POST['tgl_transaksi']."',
	'".$_POST['harga']."',
	'".$_POST['qty']."',
	'".$_POST['id_barang']."',
	'".$_POST['diskon']."',
	'".$_POST['total']."',
	'".$_POST['id_pelanggan']."')");


if($query_input) {
header('location:tampil_transaksi.php');
}else{
	echo mysqli_error();
}
}?>
 <?php
var_dump($_POST);
$diskon = null;
$total = null;

if (isset($_POST['submit'])) {
	$diskon = $_POST['harga'] * $_POST['diskon'] / 100;
	$total = $_POST ['harga'] - $diskon;
} else {
	$diskon=null;
	$total=null;
}
include('header.php');
?>
<form method="POST">
	<table class="table table-bordered" border="1">
		<tr>
			<td>ID Transaksi</td>
			<td><input type="number" name="id_transaksi"></td>
		</tr>
		<tr>
			<td>Nama Transaksi</td>
			<td><input type="text" name="nama_transaksi"></td>
		</tr>
		<tr>
			<td>Tanggal Transaksi</td>
			<td><input type="date" name="tgl_transaksi"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input type="text" name="harga"></td>
		</tr><tr>
			<td>Jumlah</td>
			<td><input type="number" name="qty"></td>
		</tr>
		<tr>
			<td>ID Barang</td>
			<td><input type="number" name="id_barang"></td>
		</tr>
		<tr>
			<td>Diskon</td>
			<td><input type="text" name="diskon"></td>
		</tr>
		<tr>
			<td>Total</td>
			<td><input type="text" name="total"></td>
		</tr>
		<tr>
			<td>ID Pelanggan</td>
			<td><input type="number" name="id_pelanggan"></td>
		</tr>
			<tr>
				<td><input type="submit" name="save"></td>
	        </tr>

	</table>
</form>

<?php 
include('footer.php'); ?>