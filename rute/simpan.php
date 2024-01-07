<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$id_rute=$_POST['id_rute'];
$tujuan=$_POST['tujuan'];
$rute_awal=$_POST['rute_awal'];
$rute_akhir=$_POST['rute_akhir'];
$harga=$_POST['harga'];
$jadwal_berangkat=$_POST['jadwal_berangkat'];
$id_kereta=$_POST['id_kereta'];
$query=mysqli_query($koneksi,"insert into rute values('$id_rute','$tujuan','$rute_awal','$rute_akhir','$harga','$jadwal_berangkat','$id_kereta')");
?>
<script>
    swal({
        title: 'Sukses',
        text: 'Data Berhasil Disimpan...',
        icon: 'success',
        timer: 5000,
        buttons: false,
    })
    .then(() => {
        // dispatch(redirect('/'));
        window.location.href = '?page=rute/index';
    })
</script>