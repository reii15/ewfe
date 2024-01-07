<?php
include "koneksi.php";
$id_penumpang=$_GET['id_penumpang'];
$query=mysqli_query($koneksi,"delete from penumpang where id_penumpang='$id_penumpang'");
header('location:?page=penumpang/index');
?>