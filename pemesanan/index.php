<?php
include "koneksi.php";
//session_start();
//if ($_SESSION['status'] <> "sukses") {
   // header('location:login.php');
//}
?>

<div class="container">
    <div class="mt-3">
        <h2 class="text-center">Data Kereta</h2>
    </div>

    <form action="" method="POST">
    <div class="form-group row mb-3">
<label class="col-sm-1 col-form-label">Dari</label>
<div class="col-sm-10">
<select name="rute_awal" id="" class="form-select">
  <?php
  $query=mysqli_query($koneksi,"select distinct(rute_awal)as rute_awal from rute");
  while($data=mysqli_fetch_array($query)){
    ?>
    <option value="<?php echo $data['rute_awal'] ?>"><?php echo $data['rute_awal']?></option>
    <?php
  }
  ?>
</select>
</div>
</div>
<div class="form-group row mb-3">
<label class="col-sm-1 col-form-label">Ke</label>
<div class="col-sm-10">
<select name="rute_akhir" id="" class="form-select">
  <?php
  $query=mysqli_query($koneksi,"select distinct(rute_akhir) as rute_akhir from rute");
  while($data=mysqli_fetch_array($query)){
    ?>
    <option value="<?php echo $data['rute_akhir'] ?>"><?php echo $data['rute_akhir']?></option>
    <?php
  }
  ?>
</select>
</div>
</div>
<button class="btn btn-secondary" name="cek">Cek</button>
</form>
    <div class="mt-3">
        <h1 class="text-center"> <strong>Kereta</strong> </h1>
    </div>
    <?php
    if(isset($_POST['cek'])){
      // echo "tombol cek";
      $rute_awal=$_POST['rute_awal'];
      $rute_ahir=$_POST['rute_akhir'];
      // echo "$rute_awal";
      // echo "$rute_akhir";
      ?>
<table id="tabel-data" class="table table-bordered">
<thead>
    <tr>
        <td><strong> Id Kereta </strong></td>
        <td><strong> Rute Awal </strong></td>
        <td><strong> Rute Akhir </strong></td>
        <td><strong> Harga </strong></td>
        <td><strong> Jadwal Berangkat </strong></td>
        <td><strong> Nama Kereta </strong></td>
        <td><strong> Aksi </strong></td>
    </tr>
    <?php
    $rute_awal =$_POST['rute_awal'];
    $rute_akhir =$_POST['rute_akhir'];
    $query=mysqli_query($koneksi,"SELECT rute.id_rute,kereta.id_kereta,rute.rute_awal,rute.rute_akhir,rute.harga,rute.jadwal_berangkat,kereta.nama_kereta FROM kereta JOIN rute ON rute.id_kereta=kereta.id_kereta where rute.rute_awal='$rute_awal' AND  rute.rute_akhir='$rute_akhir'");
    while($data=mysqli_fetch_array($query)){
        ?>
        <div class="mb-3">
        <tr>
            <td><?php echo $data['id_kereta'] ?></td>
            <td><?php echo $data['rute_awal'] ?></td>
            <td><?php echo $data['rute_akhir'] ?></td>
            <td><?php echo $data['harga'] ?></td>
            <td><?php echo $data['jadwal_berangkat'] ?></td>
            <td><?php echo $data['nama_kereta'] ?></td>
            <td>
            <button type="button" class="btn btn-primary">
                <a style="color:black; text-decoration:none" 
                href="?page=transaksi/index&id_rute=<?php echo $data ['id_rute'] ?>">Pesan</a></button>
            
        </tr>
        </div>  
  </div>
        <?php
    }
    ?>
</table>
      <?php
    } 
    ?>
