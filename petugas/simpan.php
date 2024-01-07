<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$id_petugas =$_POST['id_petugas'];
$username =$_POST['username'];
$password=$_POST['password'];
$nama_petugas =$_POST['nama_petugas'];
$id_level =$_POST['id_level'];

$squery =mysqli_query($koneksi,"insert into petugas(id_petugas,username,password,nama_petugas,id_level) 
values ('$id_petugas','$username','$password','$nama_petugas','$id_level')");
header ('location:?page=petugas/index');
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
        window.location.href = '?page=petugas/index';
    })
</script>