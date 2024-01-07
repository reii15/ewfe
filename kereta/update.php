<?php
include "koneksi.php";
$id_kereta=$_POST['id_kereta'];
$nama_kereta=$_POST['nama_kereta'];
$query=mysqli_query($koneksi,"update kereta set nama_kereta='$nama_kereta' where id_kereta='$id_kereta'");
header('location:?page=kereta/index');
?>