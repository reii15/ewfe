<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
include "koneksi.php";
$id_kereta = $_POST['id_kereta'];
$nama_kereta = $_POST['nama_kereta'];

$query = mysqli_query($koneksi, "INSERT INTO kereta VALUES ('$id_kereta','$nama_kereta')");

if ($query) {
    echo "<script>
            swal({
                title: 'Sukses',
                text: 'Data Berhasil Disimpan...',
                icon: 'success',
                timer: 5000,
                buttons: false,
            })
            .then(() => {
                window.location.href = '?page=kereta/index';
            });
          </script>";
} else {
    echo "<script>
            swal({
                title: 'Oops!',
                text: 'Terjadi kesalahan saat menyimpan data.',
                icon: 'error'
            })
            .then(() => {
                window.location.href = '?page=kereta/index';
            });
          </script>";
}
?>
