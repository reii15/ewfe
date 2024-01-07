<?php
include "koneksi.php";
$id_kereta = $_GET['id_kereta'];
$query = mysqli_query($koneksi,"delete from kereta where id_kereta='$id_kereta'");
header('location:?page=kereta/index');
?>