<?php
include "koneksi.php";
$id_kereta=$_GET['id_kereta'];
$query=mysqli_query($koneksi,"select * from kereta where id_kereta='$id_kereta'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data Kereta</h1>
<form action="?page=kereta/update" method="POST">
    <div class="mb-3">
        <label class="form-label">Id Kereta</label>
        <input type="text" class="form-control" name="id_kereta" value="<?php echo $data['id_kereta'] ?>" readonly> 
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Kereta</label>
        <input type="text" class="form-control" name="nama_kereta" value="<?php echo $data['nama_kereta'] ?>">
    </div>

    <button type="submit" class="btn btn-primary" value="simpan">update</button>
</form>