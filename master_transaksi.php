<?php 
include("koneksi.php");
$query_view=mysqli_query($koneksi,"select * from transaksi");
include("header.php");
?>
<br/>
<a href="input_transaksi.php" class="btn btn-danger">Tambah Transaksi</a>
<table class="table-bordered" border="1">
            <td>ID Transaksi</td>
            <td>Nama Transaksi</td>
            <td>Tanggal Transaksi</td>
            <td>Harga</td>
            <td>Jumlah</td>
            <td>ID Barang</td>
            <td>Diskon</td>
            <td>Total</td>
            <td>ID Pelanggan</td>
        </tr>

<?php 
while ($tampil=mysqli_fetch_array($query_view)) {?>
    

        <tr>
            <td><?php echo $tampil['id_transaksi']?></td>
            <td><?php echo $tampil['nama_transaksi']?></td>
            <td><?php echo $tampil['tgl_transaksi']?></td>
            <td><?php echo $tampil['harga']?></td>
            <td><?php echo $tampil['qty']?></td>    
            <td><?php echo $tampil['id_barang']?></td>
            <td><?php echo $tampil['diskon']?></td>
            <td><?php echo $tampil['total']?></td>
            <td><?php echo $tampil['id_pelanggan']?></td>
        </tr>

<?php }?>
</table>
<?php
include('footer.php');
?>