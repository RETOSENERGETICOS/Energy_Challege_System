<?php
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->startPageGroup();

$pdf->AddPage();

$bloque1 = <<<EOF

    <table>
        <tr>
            <td style="width:150px"><img src="images/Retos_2.png"></td>
        </tr>

    </table>
EOF;

$pdf->writeHTML($bloque1, true, false, true, false, '');

$pdf->Output('factura.pdf', 'D');
?>


