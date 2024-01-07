<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
$query=mysqli_query($koneksi,"insert into penumpang values('$id_penumpang','$username','$password','$nama_penumpang','$alamat_penumpang','$tanggal_lahir','$jenis_kelamin','$tlp')");
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
        window.location.href = '?page=penumpang/index';
    })
</script>
