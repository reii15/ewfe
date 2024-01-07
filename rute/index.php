<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<?php
include "koneksi.php";
?>
<h1 align="center"  class="mt-4">Data Rute</h1>
<button type="button" class="btn btn-primary"><a href="?page=rute/tambah" style="color:white; text-decoration:none;">Tambah Data</a></button>
<button type="button" class="btn btn-warning"><a href="rute/cetak.php" style="color:white; text-decoration:none;">Cetak Data</a></button>
<div class="mb-3">
<table id="tabel-data" <table class=<table class="table table-striped">
    <thead>
    <tr>
        <td>Id Rute</td>
        <td>Tujuan</td>
        <td>Rute Awal</td>
        <td>Rute Akhir</td>
        <td>Harga</td>
        <td>Jadwal Berangkat</td>
        <td>Id Kereta</td>
        <td>Aksi</td>
    </tr>
    </thead>
    </div>
    <?php
    $query=mysqli_query($koneksi,"select * from rute ");
    while($data=mysqli_fetch_array($query)){
        ?>
        <div class="mb-3">
        <tr>
        <td><?php echo $data['id_rute'] ?></td>
        <td><?php echo $data['tujuan'] ?></td>
        <td><?php echo $data['rute_awal'] ?></td>
        <td><?php echo $data['rute_akhir'] ?></td>
        <td><?php echo $data['harga'] ?></td>
        <td><?php echo $data['jadwal_berangkat'] ?></td>
        <td><?php echo $data['id_kereta'] ?></td>
        <td>
            <button class="btn btn-danger"><a style="color:white; text-decoration: none;" href="?page=rute/hapus&id_rute=<?php echo $data['id_rute']?>">hapus</a></button>
            <button class="btn btn-info"><a style="color:white; text-decoration: none;" href="?page=rute/edit&id_rute=<?php echo $data['id_rute']?>">edit</a></button>   
        </td>
        </tr>
        </div>
        <?php
    }
    ?>
<script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script>
</table>