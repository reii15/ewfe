<?php
include "koneksi.php";
$id_penumpang = $_POST['id_penumpang'];
$id_rute = $_POST['id_rute'];
$id_kereta = $_POST['id_kereta'];
$id_harga = $_POST['id_harga'];
$query = mysqli_query($koneksi, "insert into pemesanan(id_penumpang,id_rute,id_kereta,harga) values ('$id_penumpang','$id_rute','$id_kereta','$harga')");
header('location:?page=transaksi/index')