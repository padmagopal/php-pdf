<?php

require('FPDF-master/fpdf.php');
$n = $_POST['name'];
$it = $_POST['items'];
$qt = $_POST['qty'];
$c =  $_POST['cost'];
$t = $c*$qt;
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);



$pdf->Cell(130 ,5,'PADMAGOPAL&CO',0,0);
$pdf->Cell(59 ,5,'INVOICE',0,1);


$pdf->SetFont('Arial','',12);

$pdf->Cell(130 ,5,'[amity]',0,0);
$pdf->Cell(59 ,5,'',0,1);

$pdf->Cell(130 ,5,'[amity, india, 303001]',0,0);
$pdf->Cell(25 ,5,'Date',0,0);
$pdf->Cell(34 ,5, date('Y-m-d H:i:s'),0,1);
$pdf->Cell(130 ,5,'Phone{xxxxxxxxxx]',0,0);
$pdf->Cell(25 ,5,'Invoice #',0,0);
$pdf->Cell(34 ,5,'[1234567]',0,1);

$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);

$pdf->Cell(189 ,10,'',0,1);

$pdf->Cell(100 ,5,'Bill to',0,1);


$pdf->Cell(10 ,5,'',0,0);
$pdf->Cell(90 ,5,$n,0,1);




$pdf->Cell(189 ,10,'',0,1);
//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130 ,5,'Description',1,0);
$pdf->Cell(25 ,5,'Taxable',1,0);
$pdf->Cell(34 ,5,'Amount',1,1);

$pdf->SetFont('Arial','',12);



$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'Total Due',0,0);
$pdf->Cell(4 ,5,'$',1,0);
$pdf->Cell(30 ,5,$t,1,1,'R');
$pdf->Output();
?> 