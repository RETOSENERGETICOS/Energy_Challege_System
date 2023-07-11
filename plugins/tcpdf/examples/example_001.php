<?php

require_once "../../../controladores/solicitudC.php";
require_once "../../../modelos/solicitudM.php";

class imprimirFactura{
    public $codigo;

    public function traerImpresionFactura(){

        /* -------------------------------------------------------------------------- */
        /*                       TRER INFORMACION DE LA FACTURA                       */
        /* -------------------------------------------------------------------------- */

        $itemFac= "id";
        $valorFac = $this->codigo;
        echo $valorFac;
        $respuestaFac = SolicitudC::VistaSolicitudFAC($itemFac, $valorFac);
        
        
 
// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

;
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

if (@file_exists(dirname(__FILE__).'/lang/spa.php')) {
	require_once(dirname(__FILE__).'/lang/spa.php');
	$pdf->setLanguageArray($l);
}

$pdf->setFont('helvetica', '', 14, '', true);

// Add a page
$pdf->AddPage();

// foreach($codigofactura as $key => $item){

    // $codfac = $item["codigo"];
    $html = <<<EOF
    <!DOCTYPE html>
    <html>
    <head>
        <style>
            table {
                border-collapse: collapse;
            }
            th, td {
                border: 1px solid black;
                padding: 4px;
                text-align: center;
            }
            .left-section {
                width: 50%;
            }
            .right-section {
                width: 50%;
            }
           
        </style>
    </head>
    <body>
    <table>
        <tr>
            <td style="width:150px; border:none; padding-bottom:160px;"><img src="images/Retos_2.png"></td>
        </tr>
        <tr>
            <td class="right-section" style="border:none; text-align:left;">
                <h2 style="text-align:left; font-size:11px; margin-bottom:-5px; color:#1B4F72;">RETOS ENERGETICOS SERVICIOS SA DE CV</h2>
                <p style="text-align:left; font-size:8px; padding-top:-5px; padding-bottom:-5px; line-height: -1; color:#1B4F72;">JUAN DE GRIJALVA N. 610, FRACCIONAMIENTO REFORMA</p>
                <p style="text-align:left; font-size:8px; padding-top:-5px; padding-bottom:-5px; line-height: -1; color:#1B4F72;">CP 91919, VERACRUZ VER; MEXICO</p>
                <p style="text-align:left; font-size:8px; padding-top:-5px; padding-bottom:-5px; line-height: -1; color:#1B4F72;">TEL. +52 1 229 937 1727</p>
                <p style="text-align:left; font-size:8px; padding-top:-5px; padding-bottom:-5px; line-height: -1; color:#1B4F72; text-decoration:underline;">www.retosenergeticos.com</p>
            </td>
            <td class="left-section" style="border:none;">
                <h2 style="text-align:right; font-size:11px; margin-bottom:-100%; color:#1B4F72;">PURCHASE ORDER / ORDEN DE COMPRAS</h2>
                <p style="text-align:right; font-size:8px; line-height: -1;">DATE/FECHA</p>
                <p style="text-align:right; font-size:8px; line-height:-1;">PO #  $codigofactura</p>
                <p style="text-align:right; font-size:6px; ">PLEASE INCLUDE THIS PO# IN ANY RELATED DOCUMENT. POR FAVOR INCLUIR ESTE NUMERO DE ORDEN EN CUALQUIER CORRESPONDENCIA ASOCIADA</p>
            </td>
        </tr>
    </table>
    </body>
    </html>
    EOF;

// }

// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

// ---------------------------------------------------------

// Close and output PDF document
// This method has several options, check the source code documentation for more information.
$pdf->Output('example_001.pdf', 'I');


}
}

//============================================================+
// END OF FILE
//============================================================+

$factura = new imprimirFactura();
$factura -> codigo = $_GET["id"];
$factura -> traerImpresionFactura();
