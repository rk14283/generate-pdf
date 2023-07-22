<?php
//Including the TCPDF library 
 require_once('tcpdf.php');
 //Retrieving data from the POST request 
$name = $_POST["name"]; 
$course = $_POST["course"]; 
$date = $_POST["date"]; 
//Creating a new TCPDF instance 
$pdf = new TCPDF('L', 'mm', 'A4', true, 'UTF-8', true);
//Setting the PDF title
$pdf->setTitle('Cerificate of completion'); 
//Adding a new page to the PDF document
$pdf->AddPage(); 

// Setting the font to 'helvetica' with a size of 24
$pdf->SetFont('helvetica','',24);
// Writing HTML content to the PDF
$pdf->writeHTML(
    "
    <style>
    *{
        text-align:center; 
    }
    </style>
    <h1> Certificate of completion </h1>
    <h2> $name </h2>
    <p>has successfully completed the</p>
    <h2> $course </h2>
    <p> on $date </p>
    ");
    // Outputting the PDF as a download with a custom file name
    $pdf->Output($name.'-'.$course.'-'.'certificate.pdf','D'); 
?>