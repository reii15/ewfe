<?php
include "koneksi.php";
?>
<h1 class="mt-4">Tambah Data</h1>
<form action="?page=rute/simpan" method="POST">
<div class="mb-3">
    <label class="form-label">Id Rute</label>
    <input type="text" class ="form-control" name="id_rute">
</div>

<div class="mb-3">
    <label class="form-label">Tujuan</label>
    <input type="text" class ="form-control" name="tujuan">
</div>

<div class="mb-3">
    <label class="form-label">Rute Awal</label>
    <input type="text" class ="form-control" name="rute_awal"> 
</div>

<div class="mb-3">
    <label class="form-label">Rute Akhir</label>
    <input type="text" class ="form-control" name="rute_akhir">
</div>

<div class="mb-3">
    <label class="form-label">Harga</label>
    <input type="text" class ="form-control" name="harga">
</div>

<div class="mb-3">
    <label class="form-label">Jadwal Berangkat</label>
    <input type="datetime-local" class ="form-control" name="jadwal_berangkat">
</div>

<div class="mb-3">
    <label class="form-label">Id Kereta</label>
    <input type="text" class ="form-control" name="id_kereta">
</div>

    <button type="submit" class="btn btn-primary" value="simpan">Simpan</button>
</form>