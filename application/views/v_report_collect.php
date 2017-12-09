<?php
//============================================================+
// File name   : example_048.php
// Begin       : 2009-03-20
// Last Update : 2013-05-14
//
// Description : Example 048 for TCPDF class
//               HTML tables and table headers
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
 * @abstract TCPDF - Example: HTML tables and table headers
 * @author Nicola Asuni
 * @since 2009-03-20
 */

// Include the main TCPDF library (search for installation path).
// require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Group 15');
$pdf->SetTitle('Sales Collection Report');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$date = date('Y/m/d H:i:s');
$outlet = $this->session->userData('loggerOutletName');


$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'WRF HOLDINGS (PVT) LTD.'," Outlet -  $outlet \n On $date ");

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

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', 'B', 16);

// add a page
$pdf->AddPage();

$pdf->Write(0, 'Cash Collection Summary', '', 0, 'C', true, 0, false, false, 0);

$pdf->SetFont('helvetica', '', 8);

// -----------------------------------------------------------------------------
$pdf->Ln(5);

$txt = 'DATE: ';
$txt0 = 'COLLECTION OFFICER: ';
$txt1 = 'AREA WORKED: ';
$txt2 = 'VEHICLE NO: ';

$onlyDate = date('Y/m/d');
foreach ($col as $ar) 
$area= $ar->CollectionArea;
$vehNo= $ar->CollectionVehicle;
$colOf= $ar->CollectionOfficerName;

$pdf->MultiCell(30, 10, $txt, 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(50, 10, $onlyDate, 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(45, 10, $txt0, 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(50, 10, $colOf, 0, 'L', 0, 1, '', '', true);
$pdf->MultiCell(30, 10, $txt1, 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(50, 10, $area, 0, 'L', 0, 0, '', '', true);
$pdf->MultiCell(45, 10, $txt2, 0, 'R', 0, 0, '', '', true);
$pdf->MultiCell(20, 10, $vehNo, 0, 'L', 0, 1, '', '', true);

$pdf->Ln(3);


$log= $this->session->userdata('loggerName');


 $pdf->WriteHTMLCell(0,0,'','',$log,0,1,0,true,'L',true);

// -----------------------------------------------------------------------------

$tbl = <<<EOD
<table cellspacing="0" cellpadding="1" border="1">
    <tr>
        <td colspan="7">TOTAL SALES</td>
        <td>10000000</td>
    </tr>
     <tr>
        <td colspan="7">OTHER SALES</td>
        <td>10000000</td>
    </tr>
     <tr>
        <td colspan="7">COLLECTED CREDIT BILLS (Note 1)</td>
        <td>10000000</td>
    </tr>
     <tr>
        <td colspan="7">RETURN CHEQUES COLLECTED</td>
        <td>10000000</td>
    </tr>
    <tr>
        <td colspan="3">CASH (SALES + CREDIT COLLECTED)</td>
        <td colspan="5">10000000</td>
    </tr>
    <tr>
        <td colspan="3">DIRECT BANKING</td>
        <td colspan="5">10000000</td>
    </tr>
    <tr>
        <td colspan="3">CHEQUES (SALES + CREDIT COLLECTED)</td>
        <td colspan="5">10000000</td>
    </tr>
    <tr>
        <td colspan="3">PENDING CREDIT BILLS (Note 4)</td>
        <td colspan="5">10000000</td>
    </tr>
    <tr>
        <td colspan="3">RTN NOTES</td>
        <td colspan="5">10000000</td>
    </tr>
    <tr>
        <td colspan="3">TEMPORARY CASH COLLECTION</td>
        <td colspan="5">10000000</td>
    </tr>
    <tr>
        <td colspan="3" ><h4><br/>TOTAL</h4></td>
        <td rowspan="2"><h4><br/>1000000</h4></td>
        <td rowspan="2"></td>
        <td rowspan="2"><h4><br/>(500)</h4></td>
        <td rowspan="2"></td>
        <td rowspan="2"><h4><br/>1000000</h4></td>
    </tr>

</table>
EOD;

$pdf->writeHTML($tbl, true, false, false, false, '');

// -----------------------------------------------------------------------------

$pdf->Ln(3);

$title1 = <<<EOT
<h3>COLLECTED CREDIT BILLS (Note 1)</h3>
EOT;
$pdf->WriteHTMLCell(0,0,'','',$title1,0,1,0,true,'L',true);

$table1 = '<table style="border:1px solid #000; padding:6px;">';
$table1 .='<tr>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">INV DATE</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">INV. NO</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">CUSTOMER</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">AMOUNT</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">CHQ. NO.</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">BANK</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">BRANCH</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">BANKING DATE</th>
            
             
              </tr>';
// foreach ($ch as $row) {
// $table1 .='<tr>
//             <td style="border:1px solid #000;">'.$row->cheque_invoice_id.'</td>
//             <td style="border:1px solid #000;">-</td>
//             <td style="border:1px solid #000;">-</td>
//             <td style="border:1px solid #000;">'.$row->ChequeNumber.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBankName.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBankBranch.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBKdate.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeAmount.'</td>


//           </tr>';
//       }      

$table1 .='</table>';

$pdf->WriteHTMLCell(0,0,'','',$table1,0,1,0,true,'C',true);

// -----------------------------------------------------------------------------

$pdf->Ln(3);

$title2 = <<<EOT
<h3>CHEQUES</h3>
EOT;
$pdf->WriteHTMLCell(0,0,'','',$title2,0,1,0,true,'L',true);

$table2 = '<table style="border:1px solid #000; padding:6px;">';
$table2 .='<tr>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">REF. NO</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">INV. NO</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">CUSTOMER</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">AMOUNT</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">CHQ. NO.</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">BANK</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">BRANCH</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">BANKING DATE</th>
            
             
              </tr>';
// foreach ($ch as $row) {
// $table1 .='<tr>
//             <td style="border:1px solid #000;">'.$row->cheque_invoice_id.'</td>
//             <td style="border:1px solid #000;">-</td>
//             <td style="border:1px solid #000;">-</td>
//             <td style="border:1px solid #000;">'.$row->ChequeNumber.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBankName.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBankBranch.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBKdate.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeAmount.'</td>


//           </tr>';
//       }      

$table2 .='</table>';

$pdf->WriteHTMLCell(0,0,'','',$table2,0,1,0,true,'C',true);


// -----------------------------------------------------------------------------

$pdf->Ln(3);

$title3 = <<<EOT
<h3>PENDING CREDIT BILLS (Note 4)</h3>
EOT;
$pdf->WriteHTMLCell(0,0,'','',$title3,0,1,0,true,'L',true);

$table3 = '<table style="border:1px solid #000; padding:6px;">';
$table3 .='<tr>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">REF. NO</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">INV. NO</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">CUSTOMER</th>             
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">AMOUNT</th>
             <th style="border:0px solid #FFF;"></th>
             <th style="border:0px solid #FFF;"></th>
             <th style="border:0px solid #FFF;"></th>
             <th style="border:0px solid #FFF;"></th>
           </tr>';

// foreach ($ch as $row) {
// $table1 .='<tr>
//             <td style="border:1px solid #000;">'.$row->cheque_invoice_id.'</td>
//             <td style="border:1px solid #000;">-</td>
//             <td style="border:1px solid #000;">-</td>
//             <td style="border:1px solid #000;">'.$row->ChequeNumber.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBankName.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBankBranch.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBKdate.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeAmount.'</td>


//           </tr>';
//       }      

$table3 .='</table>';

$pdf->WriteHTMLCell(0,0,'','',$table3,0,1,0,false,'C',true);


// -----------------------------------------------------------------------------


$pdf->Ln(3);

$title4 = <<<EOT
<h3>CASH DENOMINATION</h3>
EOT;
$pdf->WriteHTMLCell(0,0,'','',$title4,0,1,0,true,'L',true);

$table4 = '<table style="border:1px solid #000; padding:6px;">';
$table4 .='<tr>
             <th colspan="2" bgcolor="#B2BEB5" style="border:1px solid #000;">NOTES</th>
             <th bgcolor="#B2BEB5" style="border:1px solid #000;">X QTY</th>
             <th colspan="2" bgcolor="#B2BEB5" style="border:1px solid #000;">AMOUNT</th>
             <th style="border:0px solid #FFF;"></th>
             <th style="border:0px solid #FFF;"></th>
             <th style="border:0px solid #FFF;"></th>
             <th style="border:0px solid #FFF;"></th>
             <th style="border:0px solid #FFF;"></th>                          
            </tr>';
// foreach ($ch as $row) {
// $table1 .='<tr>
//             <td style="border:1px solid #000;">'.$row->cheque_invoice_id.'</td>
//             <td style="border:1px solid #000;">-</td>
//             <td style="border:1px solid #000;">-</td>
//             <td style="border:1px solid #000;">'.$row->ChequeNumber.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBankName.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBankBranch.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeBKdate.'</td>
//             <td style="border:1px solid #000;">'.$row->ChequeAmount.'</td>


//           </tr>';
//       }      

$table4 .='</table>';

$pdf->WriteHTMLCell(0,0,'','',$table4,0,1,0,false,'C',true);


$pdf->Ln(5);
$log= $this->session->userdata('loggerName');
$logrole= $this->session->userdata('loggerRole');
$gen = <<<EOT
<h4>This Report was Generated by $log ($logrole) </h4>
EOT;


$pdf->WriteHTMLCell(0,0,'','',$gen,0,1,0,true,'L',true);


// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------


ob_clean();

//Close and output PDF document
$pdf->Output('example_048.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
