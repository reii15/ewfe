<?php
include "koneksi.php";
$id_petugas=$_GET['id_petugas'];
$query=mysqli_query($koneksi,"select * from petugas where id_petugas='$id_petugas'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data Petugas</h1>
<form action="?page=petugas/update" method="POST">
    <div class="mb-3">
        <label class="form-label">Id Petugas</label>
        <input type="text" class="form-control" name="id_petugas" value="<?php echo $data['id_petugas'] ?>" readonly> 
    </div>

    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="username" value="<?php echo $data['username'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" class="form-control" name="password" value="<?php echo $data['password'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Petugas</label>
        <input type="text" class="form-control" name="nama_petugas" value="<?php echo $data['nama_petugas'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Id Level</label>
        <input type="text" class="form-control" name="id_level" value="<?php echo $data['id_level'] ?>">
    </div>
    
    <button type="submit" class="btn btn-primary" value="simpan">update</button>
</form>