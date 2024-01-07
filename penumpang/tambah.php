<?php
include "koneksi.php";
?>
<h1 class="mt-4">Tambah Data</h1>
<form action="?page=penumpang/simpan" method="POST">
<div class="mb-3">
    <label class="form-label">Id penumpang</label>
    <input type="text" class ="form-control" name="id_penumpang">
</div>
<div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text" class ="form-control" name="username">
</div>
<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class ="form-control" name="password"> 
</div>
<div class="mb-3">
    <label class="form-label">Nama penumpang</label>
    <input type="text" class ="form-control" name="nama_penumpang">
</div>
<div class="mb-3">
    <label class="form-label">Alamat penumpang</label>
    <input type="text" class ="form-control" name="alamat_penumpang">
</div>
<div class="mb-3">
    <label class="form-label">Tanggal lahir</label>
    <input type="date" class ="form-control" name="tanggal_lahir">
</div>
<div class="mb-3">
    <label class="form-label">Jenis kelamin</label>
    <div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki_laki">laki_laki
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
  </div>
</div>
<div class="mb-3">
    <label class="form-label">Tlp</label>
    <input type="text" class ="form-control" name="tlp">
</div>
    <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
</form>