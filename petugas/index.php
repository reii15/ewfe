<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<?php
include "koneksi.php";
?>
<h1 align="center"  class="mt-4">Data Petugas</h1>
<button type="button" class="btn btn-primary"><a href="?page=petugas/tambah" style="color:white; text-decoration:none;">Tambah Data</a></button>
<div class="mb-3">
<table id="tabel-data" <table class=<table class="table table-striped">
    <thead>
    <tr>
        <td>Id Petugas</td>
        <td>Username</td>
        <td>Password</td>
        <td>Nama Petugas</td>
        <td>Id Level</td>
        <td>Aksi</td>
    </tr>
    </thead>
    </div>
    <?php
    $query=mysqli_query($koneksi,"select * from petugas ");
    while($data=mysqli_fetch_array($query)){
        ?>
        <div class="mb-3">
        <tr>
        <td><?php echo $data['id_petugas'] ?></td>
        <td><?php echo $data['username'] ?></td>
        <td><?php echo $data['password'] ?></td>
        <td><?php echo $data['nama_petugas'] ?></td>
        <td><?php echo $data['id_level'] ?></td>
        <td>
            <button class="btn btn-danger"><a style="color:white; text-decoration: none;" href="?page=petugas/hapus&id_petugas=<?php echo $data['id_petugas']?>">hapus</a></button>
            <button class="btn btn-info"><a style="color:white; text-decoration: none;" href="?page=petugas/edit&id_petugas=<?php echo $data['id_petugas']?>">edit</a></button>
            
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