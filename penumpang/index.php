<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<?php
include "koneksi.php";
?>
<h1 align="center"  class="mt-4">Data Penumpang</h1>
<button type="button" class="btn btn-primary"><a href="?page=penumpang/tambah" style="color:white; text-decoration:none;">Tambah Data</a></button>
<button type="button" class="btn btn-warning"><a href="penumpang/cetak.php" style="color:white; text-decoration:none;">Cetak Data</a></button>
<div class="mb-3">
<table id="tabel-data" <table class=<table class="table table-striped">
    <thead>
    <tr>
        <td>Id penumpang</td>
        <td>Username</td>
        <td>Password</td>
        <td>Nama penumpang</td>
        <td>Alamat penumpang</td>
    <td>Tanggal lahir</td>
        <td>Jenis kelamin</td>
        <td>Tlp</td>
        <td>Aksi</td>
    </tr>
    </thead>
    </div>
    <?php
    $query=mysqli_query($koneksi,"select * from penumpang ");
    while($data=mysqli_fetch_array($query)){
        ?>
        <div class="mb-3">
        <tr>
        <td><?php echo $data['id_penumpang'] ?></td>
        <td><?php echo $data['username'] ?></td>
        <td><?php echo $data['password'] ?></td>
        <td><?php echo $data['nama_penumpang'] ?></td>
        <td><?php echo $data['alamat_penumpang'] ?></td>
        <td><?php echo $data['tanggal_lahir'] ?></td>
        <td><?php echo $data['jenis_kelamin'] ?></td>
        <td><?php echo $data['tlp'] ?></td>
        <td>
            <button class="btn btn-danger"><a style="color:white; text-decoration: none;" href="?page=penumpang/hapus&id_penumpang=<?php echo $data['id_penumpang']?>">hapus</a></button>
            <button class="btn btn-info"><a style="color:white; text-decoration: none;" href="?page=penumpang/edit&id_penumpang=<?php echo $data['id_penumpang']?>">edit</a></button>
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