<?php
require "vendor/autoload.php";
//============================================================+
// File name   : example_009.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 009 for TCPDF class
//               Test Image
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Test Image
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).


// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

//set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 009');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
// $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 009', PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// -------------------------------------------------------------------

// add a page
$pdf->AddPage();

// // set JPEG quality
// $pdf->setJPEGQuality(75);

// // Image method signature:
// // Image($file, $x='', $y='', $w=0, $h=0, $type='', $link='', $align='', $resize=false, $dpi=300, $palign='', $ismask=false, $imgmask=false, $border=0, $fitbox=false, $hidden=false, $fitonpage=false)

// // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// // Example of Image from data stream ('PHP rules')
// $imgdata = base64_decode('iVBORw0KGgoAAAANSUhEUgAAABwAAAASCAMAAAB/2U7WAAAABlBMVEUAAAD///+l2Z/dAAAASUlEQVR4XqWQUQoAIAxC2/0vXZDrEX4IJTRkb7lobNUStXsB0jIXIAMSsQnWlsV+wULF4Avk9fLq2r8a5HSE35Q3eO2XP1A1wQkZSgETvDtKdQAAAABJRU5ErkJggg==');

// // The '@' character is used to indicate that follows an image data stream and not an image file name
// //$pdf->Image('@'.$imgdata);

// // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// // Image example with resizing
// $pdf->Image('images/image_demo.jpg', 15, 140, 75, 113, 'JPG', 'http://www.tcpdf.org', '', true, 150, '', false, false, 1, false, false, false);

// // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// // test fitbox with all alignment combinations

// // $horizontal_alignments = array('L', 'C', 'R');
// // $vertical_alignments = array('T', 'M', 'B');

// // $x = 15;
// // $y = 35;
// // $w = 30;
// // $h = 30;
// // // test all combinations of alignments
// // for ($i = 0; $i < 3; ++$i) {
// //     $fitbox = $horizontal_alignments[$i].' ';
// //     $x = 15;
// //     for ($j = 0; $j < 3; ++$j) {
// //         $fitbox[1] = $vertical_alignments[$j];
// //         $pdf->Rect($x, $y, $w, $h, 'F', array(), array(128,255,128));
// //         $pdf->Image('images/image_demo.jpg', $x, $y, $w, $h, 'JPG', '', '', false, 300, '', false, false, 0, $fitbox, false, false);
// //         $x += 32; // new column
// //     }
// //     $y += 32; // new row
// // }

// // $x = 115;
// // $y = 35;
// // $w = 25;
// // $h = 50;
// // for ($i = 0; $i < 3; ++$i) {
// //     $fitbox = $horizontal_alignments[$i].' ';
// //     $x = 115;
// //     for ($j = 0; $j < 3; ++$j) {
// //         $fitbox[1] = $vertical_alignments[$j];
// //         $pdf->Rect($x, $y, $w, $h, 'F', array(), array(128,255,255));
// //         $pdf->Image('images/image_demo.jpg', $x, $y, $w, $h, 'JPG', '', '', false, 300, '', false, false, 0, $fitbox, false, false);
// //         $x += 27; // new column
// //     }
// //     $y += 52; // new row
// // }

// // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// // Stretching, position and alignment example

// $pdf->SetXY(110, 200);
// $pdf->Image('images/image_demo.jpg', '', '', 40, 40, '', '', 'T', false, 300, '', false, false, 1, false, false, false);
// $pdf->Image('images/image_demo.jpg', '', '', 40, 40, '', '', '', false, 300, '', false, false, 1, false, false, false);

$pdf->Image("auf logo.jpg", 0, 0, 210, 25, 'JPG', '', '', true, 150, '', false, false, 1, false, false, false);
$html = <<<EOD
<h3> Brief History of Angeles University Foundation  </h3>
<p> Angeles University Foundation, a non-stock, non-profit educational institution, was established on May 25, 1962 by Mr. Agustin P. Angeles, Dr. Barbara Y. Angeles, and family. In less than nine years, the Institution was granted University status on April 16, 1971 by the Department of Education, Culture and Sports.</p>
<p> On December 4, 1975, the University was converted to a non-stock, non-profit educational foundation -- the Angeles couple and their children executed a Deed of Donation relinquishing their ownership. AUF was incorporated under Republic Act No. 6055, otherwise known as the Foundation Law, and became a tax-exempt institution approved by the Philippine government. All donations and bequests given to the AUF are tax deductible.</p>
<p> On February 14, 1978, AUF was converted to a Catholic University. As the first Catholic university in Central Luzon, AUF ensures not only professional success but total development which is anchored on Christian education that is holistic, integrated and formative. On February 20, 1990, the five-storey, 125-bed AUF Medical Center was inaugurated which now serves as a private teaching, training and research hospital, the first ever in Central Luzon.</p>
EOD;
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


// -------------------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_009.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+