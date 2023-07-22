
<?php

//main problem with generate pdf was extracting files, I had to extract file to the main folder 


//require_once 'vendor/dompdf/dompdf/include/autoload.inc.php';
//require_once '/vendor/autoload.php';

// require_once ('vendor/dompdf/dompdf/include/autoload.inc.php');
// require_once realpath(__DIR__ . '/vendor/autoload.php'); 

// function createPDF($html,$filename,$paper,$orientation)
// {
//     $dompdf = new Dompdf();
//     $dompdf->loadHtml($html);
//     $dompdf->setPaper($paper, $orientation);
//     $dompdf->render();
//     $dompdf->stream($filename);
//     return true;
// }


// require __DIR__ . "/vendor/autoload.php"; 


// //require_once '/vendor/include/autoload.php';

// use Dompdf\Adapter\CPDF;
// use Dompdf\Dompdf;
// use Dompdf\Exception;
// //require_once("APIs/dompdf-encoding/dompdf_config.inc.php");  
// //$cart_body='<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><title>New Order Placed</title></head><body><p>Test Printing...</p></body></html>';

//use Dompdf\Dompdf as Dompdf;

// $dompdf = new Dompdf(); 
// //$dompdf =\Dompdf();
// //$dompdf->load_html($cart_body)
// $dompdf->loadHTML("Hello World"); 
// //generates pdf document 
// $dompdf->render(); 
// $dompdf->stream(); 

//  require __DIR__ . "/vendor/autoload.php";
// //use  Dompdf\Dompdf;

// use Dompdf\Adapter\CPDF;
// use Dompdf\Dompdf;
// use Dompdf\Exception;
// $dompf =new \Dompdf(); 



// $dompdf->loadHtml("Hello World");

// $dompdf->redner();
// $dompdf->stream(); 


// require_once __DIR__ . '/vendor/autoload.php';
// $mpdf =new \mPDF();
// $mpdf->WriteHTML('<h1>Hello world!</h1>');
// $mpdf->Output();
//require_once __DIR__ . '/path/to/vendor/autoload.php';


// require('fpdf.php');

// //use Fpdf\Fpdf;

// $pdf = new FPDF();
// $pdf->AddPage();
//  $pdf->SetFont('Arial','B',16);
//  $pdf->Cell(40,10,'Hello World!');
//  $pdf->Output();


//calling TCPDF class from file 
require_once('tcpdf.php'); 
// Create a new TCPDF instance
$pdf = new TCPDF();
// Add a page to the PDF
$pdf->AddPage();
// Write content to the PDF
$pdf->Write(0, 'I did it!');
// Clear the output buffer to prevent any premature output
ob_end_clean();
// Output the PDF to the browser with the filename 'example.pdf' and display it inline ('I')
$pdf->Output('example.pdf', 'I');
