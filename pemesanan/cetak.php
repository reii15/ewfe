<?php
// memanggil library FPDF
ob_start();
require('library/fpdf.php');
include 'koneksi.php';
 
//memberikan pengaturan halaman PDF 
$pdf=new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
//mengatur jenis, ukuran
$pdf->SetFont('Times','B',13);
//memberi judul
$pdf->Cell(200,10,'DATA KERETA',0,0,'C');
//memberikan spasi kebawah
$pdf->Cell(10,15,'',0,1);
//memberikan judul kolom
$pdf->SetFont('Times','B',9);
$pdf->Cell(25,7,'ID KERETA',1,0,'C');
$pdf->Cell(25,7,'NAMA KERETA',1,0,'C');

//memanggil dan menampilkan data dari database
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$data = mysqli_query($koneksi,"SELECT  * FROM kereta");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(25,6, $d['id_kereta'],1,0,'C');
  $pdf->Cell(25,6, $d['nama_kereta'],1,1);
 
}
 
$pdf->Output();
 
?>