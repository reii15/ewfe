<?php
// memanggil library FPDF
ob_start(); 
require('library/fpdf.php');
include 'koneksi.php';
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(200,10,'DATA ANGGOTA',0,0,'C');

// judul kolom
$pdf->Cell(10,15,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(25,7,'ID',1,0,'C');
$pdf->Cell(55,7,'NAMA' ,1,0,'C');
$pdf->Cell(30,7,'JENIS KELAMIN' ,1,0,'C');
$pdf->Cell(30,7,'NO TELPON',1,0,'C');
$pdf->Cell(40,7,'ALAMAT',1,0,'C');


$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"SELECT  * FROM transaksi");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(25,6, $d['id_pemesan'],1,0, 'C');
  $pdf->Cell(55,6, $d['id_penumpang'],1,0);
  $pdf->Cell(30,6, $d['id_rute'],1,0);
  $pdf->Cell(30,6, $d['nama_kereta'],1,0);
  $pdf->Cell(40,6, $d['harga'],1,1);  

}
 
$pdf->Output();
 
?>