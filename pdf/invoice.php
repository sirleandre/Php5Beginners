<?php
require ('fpdf17/fpdf.php');

$dbh = new PDO("mysql:host=localhost;dbname=users", "root", "");
$sql="SELECT * FROM member";
$result=$dbh->prepare($sql);
$result->execute();
$row = $result-> fetchAll(PDO::FETCH_OBJ);
$pdf=new FPDF('p','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B','14');
$pdf->Cell(130,5,'ACCOUNT INFORMATION',1,0);
$pdf->Cell(59,5,'',1,1);
$pdf->SetFont('Arial','','14');
$pdf->Cell(130,5,'street address',0,0);
$pdf->Cell(59,5,'',0,1);
$pdf->Cell(25,5,'Date',0,0);
$pdf->Cell(34,5,'City,zip',0,0);
$pdf->Cell(130,5,'[dd/mm/yy]',0,1);
$pdf->Output();
?>