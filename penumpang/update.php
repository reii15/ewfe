<?php
include "koneksi.php";
$id_penumpang=$_POST['id_penumpang'];
$username=$_POST['username'];
$password=$_POST['password'];
$nama_penumpang=$_POST['nama_penumpang'];
$alamat_penumpang=$_POST['alamat_penumpang'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tlp=$_POST['tlp'];
$query=mysqli_query($koneksi,"update penumpang set username='$username',password='$password',nama_penumpang='$nama_penumpang'
,alamat_penumpang='$alamat_penumpang',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',tlp='$tlp' where id_penumpang='$id_penumpang'");
header('location:?page=penumpang/index');
?>