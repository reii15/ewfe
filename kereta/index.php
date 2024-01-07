<link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<?php
include "koneksi.php";
?>
<h1 align="center"  class="mt-4">Data Kereta</h1>
<button type="button" class="btn btn-primary"><a href="?page=kereta/tambah" style="color:white; text-decoration:none;">Tambah Data</a></button>
<div class="mb-3">
<table id="tabel-data" <table class=<table class="table table-striped">
    <thead>
    <tr>
        <td>Id Kereta</td>
        <td>Nama Kereta</td>
        <td>Aksi</td>
    </tr>
    </thead>
    </div>
    <?php
    $query=mysqli_query($koneksi,"select * from kereta ");
    while($data=mysqli_fetch_array($query)){
        ?>
        <div class="mb-3">
        <tr>
        <td><?php echo $data['id_kereta'] ?></td>
        <td><?php echo $data['nama_kereta'] ?></td>
        <td>
            <button class="btn btn-danger"><a style="color:white; text-decoration: none;" href="?page=kereta/hapus&id_kereta=<?php echo $data['id_kereta']?>">hapus</a></button>
            <button class="btn btn-info"><a style="color:white; text-decoration: none;" href="?page=kereta/edit&id_kereta=<?php echo $data['id_kereta']?>">edit</a></button>
            
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