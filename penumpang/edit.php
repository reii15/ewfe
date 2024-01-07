<?php
include "koneksi.php";
$id_penumpang=$_GET['id_penumpang'];
$query=mysqli_query($koneksi,"select * from penumpang where id_penumpang='$id_penumpang'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data Penumpang</h1>
<form action="?page=penumpang/update" method="POST">
    <div class="mb-3">
        <label class="form-label">Id Penumpang</label>
        <input type="text" class="form-control" name="id_penumpang" value="<?php echo $data['id_penumpang'] ?>" readonly> 
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
        <label class="form-label">Nama penumpang</label>
        <input type="text" class="form-control" name="nama_penumpang" value="<?php echo $data['nama_penumpang'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat penumpang</label>
        <input type="text" class="form-control" name="alamat_penumpang" value="<?php echo $data['alamat_penumpang'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal lahir</label>
        <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'] ?>">
    </div>

    <label class="form-label">Jenis kelamin</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki_laki">laki_laki
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
  </div>

    <div class="mb-3">
        <label class="form-label">Tlp</label>
        <input type="text" class="form-control" name="tlp" value="<?php echo $data['tlp'] ?>">
    </div>

    
    <button type="submit" class="btn btn-primary" value="simpan">update</button>
</form>