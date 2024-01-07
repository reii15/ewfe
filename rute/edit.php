<?php
include "koneksi.php";
$id_rute=$_GET['id_rute'];
$query=mysqli_query($koneksi,"select * from rute where id_rute='$id_rute'");
$data=mysqli_fetch_array($query);
?>
<h1 class="mt-4">Edit Data Rute</h1>
<form action="?page=rute/update" method="POST">
    <div class="mb-3">
        <label class="form-label">Id Rute</label>
        <input type="text" class="form-control" name="id_rute" value="<?php echo $data['id_rute'] ?>" readonly> 
    </div>

    <div class="mb-3">
        <label class="form-label">Tujuan</label>
        <input type="text" class="form-control" name="tujuan" value="<?php echo $data['tujuan'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Rute Awal</label>
        <input type="text" class="form-control" name="rute_awal" value="<?php echo $data['rute_awal'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Rute Akhir</label>
        <input type="text" class="form-control" name="rute_akhir" value="<?php echo $data['rute_akhir'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Harga</label>
        <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Jadwal Berangkat</label>
        <input type="text" class="form-control" name="jadwal_berangkat" value="<?php echo $data['jadwal_berangkat'] ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Id Kereta</label>
        <input type="text" class="form-control" name="id_kereta" value="<?php echo $data['id_kereta'] ?>">
    </div>
    
    <button type="submit" class="btn btn-primary" value="simpan">update</button>
</form>