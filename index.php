<?php

require_once('tcpdf.php');
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->Write(0, 'Yatttaaaaaa!');
$pdf->Output('example.pdf', 'I');
?>