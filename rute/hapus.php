<?php
include "koneksi.php";
$id_rute=$_GET['id_rute'];
$query=mysqli_query($koneksi,"delete from rute where id_rute='$id_rute'");
header('location:?page=rute/index');
?>