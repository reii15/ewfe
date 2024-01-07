<?php
include "koneksi.php";
$id_rute=$_POST['id_rute'];
$tujuan=$_POST['tujuan'];
$rute_awal=$_POST['rute_awal'];
$rute_akhir=$_POST['rute_akhir'];
$harga=$_POST['harga'];
$jadwal_berangkat=$_POST['jadwal_berangkat'];
$id_kereta=$_POST['id_kereta'];
$query=mysqli_query($koneksi,"update rute set tujuan='$tujuan',rute_awal='$rute_awal',rute_akhir='$rute_akhir'
,harga='$harga',jadwal_berangkat='$jadwal_berangkat',id_kereta='$id_kereta' where id_rute='$id_rute'");
header('location:?page=rute/index');
?>