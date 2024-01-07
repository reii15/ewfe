<?php
include "koneksi.php";
$id_rute=$_GET['id_rute'];
$query= mysqli_query($koneksi, "SELECT rute.id_rute,kereta.id_kereta,rute.rute_awal,rute.rute_akhir,rute.harga,rute.jadwal_berangkat,kereta.nama_kereta FROM kereta JOIN rute ON rute.id_kereta=kereta.id_kereta where rute.id_rute='$id_rute'");
$data=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Kereta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
  <div class="container mb-2">
    <div class="row vh-100 d-flex justify-content-center align-items-center">
      <div class="col-m col-lg-10">
        <div class="card shadow-lg">
          <div class="card-body">
            <h2 class="mb-5 mt-3 text-center text-dark">Buat Pesanan</h2>
            <form action="?page=transaksi/" method="post">
    <div class="form-group">
        <label>Id</label>
        <input type="text" class="form-control" name="id_rute" value="<?= $id_rute?>">
    </div>
    <div class="form-group">
        <label>Nama Kereta</label>
        <input type="text" class="form-control" name="nama_kereta" value="<?= $data['nama_kereta'] ?>">
    </div>
    <div class="form-group">
                <label>Harga</label>
            <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>">                
            </div>
            <br>
    <div class="from-group">
        <label for="id_penumpang">Nama Penumpang</label>
            <select name="id_penumpang" id="id_penumpang" class="form-select">
                <?php
                $query=mysqli_query($koneksi, "select * from penumpang");
                while($data=mysqli_fetch_array($query)) {
                ?>
                <option value="<?= $data ['id_penumpang'] ?>"><?= $data ['nama_penumpang'] ?></option>
            <?php
            }
            ?>
            </select>
    </div>
			<input type="submit" class="btn btn-primary"><a href="pemesanan/simpan.php">
      <button type="button" class="btn btn-danger"><a href="transaksi/cetak.php"
      style="color:white; text-decoration:none;">Cetak</a></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>