<?php

require_once "../../../controladores/solicitudC.php";
require_once "../../../modelos/solicitudM.php";

class imprimirFactura
{
    public $id;

    public function traerImpresionFactura()
    {

        /* -------------------------------------------------------------------------- */
        /*                       TRER INFORMACION DE LA FACTURA                       */
        /* -------------------------------------------------------------------------- */

        $itemFac = "id";
        $valorFac = $this->id;

        echo $valorFac;
        echo $itemFac;
        $respuestaFac = SolicitudC::VistaSolicitudFAC($itemFac, $valorFac);
        
        

        
        /* -------------------------------------------------------------------------- */
        /*                              FORMATO DE FECHA                              */
        /* -------------------------------------------------------------------------- */

        $fechaOriginal = $respuestaFac["fecha"];
        $fecha = date("d/m/Y", strtotime(substr($fechaOriginal, 2)));
       
        // echo $respuestasFactura;

        // Include the main TCPDF library (search for installation path).
        require_once('tcpdf_include.php');

        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);;
        $pdf->setHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->setFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        if (@file_exists(dirname(__FILE__) . '/lang/spa.php')) {
            require_once(dirname(__FILE__) . '/lang/spa.php');
            $pdf->setLanguageArray($l);
        }

        $pdf->setFont('helvetica', '', 14, '', true);
        $pdf->AddPage();
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
                    <p style="text-align:right; font-size:8px; line-height: -1;">DATE/FECHA $fecha</p>
                    <p style="text-align:right; font-size:8px; line-height:-1;">PO #  $respuestaFac[codigo]  </p>
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

        /* -------------------------------------------------------------------------- */
        /*                       FIN DE PRIMER BLOQUE DE FACTURA                       */
        /* -------------------------------------------------------------------------- */


        $bloque2 = <<<EOF
    <table style="border:1px solid black; margin-bottom:-100px;">
    <tr>
        <th class="right-section" style="background-color:#1B4F72; font-weight: bold;  color:white; text-align:left; font-size:9px; height:19px;">VENDOR / SUMINISTRADOR</th>
        <th class="right-section" style="background-color:#1B4F72; font-weight: bold; color:white; text-align:center; font-size:9px; height:19px;">SHIP TO / LUGAR DE ENTREGA</th>
    </tr>
    <tr>
        <td height="100" style="border:1px solid black;" class="right-section">
            
            <p style="text-align:left; font-size:8px; color:#1B4F72; line-height:-.2">NOMBRE: $respuestaFac[nombre_prov]</p>
            <p style="text-align:left; font-size:8px; color:#1B4F72; line-height:.9">NOMBRE: $respuestaFac[nombre_prov]</p>
            <p style="text-align:left; font-size:8px; color:#1B4F72; line-height:-.1">DIRECCIÓN:  $respuestaFac[direccion] </p>
            <p style="text-align:left; font-size:8px; color:#1B4F72; line-height:.9">TEL.:  $respuestaFac[telefono]</p>
            <p style="text-align:left; font-size:8px; color:#1B4F72;">ATN.:  $respuestaFac[atn]</p>
            <p style="text-align:left; font-size:8px; color:#1B4F72; line-height:-.2">Email:  $respuestaFac[email]</p>
            <p style="text-align:left; font-size:8px; color:#1B4F72; text-decoration:underline;">www.retosenergeticos.com</p>
        </td>
        <td height="100"  class="left-section">
            
            <p style="text-align:center; font-size:8px; color:#1B4F72; line-height:-.1;">-</p>
            <p style="text-align:center; font-size:8px; color:#1B4F72; line-height:-.2;">$respuestaFac[lugarentr_solicitud] </p>
            <p style="text-align:center; font-size:8px; color:#1B4F72; line-height:.5;">$respuestaFac[direccion_lentrega]</p>
            <p style="text-align:center; font-size:8px; color:#1B4F72; line-height:-.2;"> $respuestaFac[cp_lentrega]</p>
            <p style="text-align:center; font-size:8px; color:#1B4F72;"> Solicitante:  $respuestaFac[solicitante_lentrega]</p>
            <p style="text-align:center; font-size:8px; color:#1B4F72; line-height:-.2;"> Email:  $respuestaFac[email_solicitante]</p>
            
        </td>
    </tr>
    <thead>
        <tr style="border:1px solid black;" >
            <th style="background-color:#1B4F72; text-align:center; border:0.5px solid black; font-weight: bold; color:white; font-size:6px; height:14px;">REQUISITIONER / SOLICITANTE</th>
            <th style="background-color:#1B4F72; text-align:center; border:0.5px solid black; font-weight: bold; color:white; font-size:6px; height:14px;">REQUESTED BY / FIRMA DEL SUPERVISOR</th>
            <th style="background-color:#1B4F72; text-align:center; border:0.5px solid black; font-weight: bold; color:white; font-size:6px; height:14px;">SHIP VIA / FORMA DE ENVIO</th>
            <th style="background-color:#1B4F72; text-align:center; border:0.5px solid black; font-weight: bold; color:white; font-size:6px; height:14px;">INCOTERMS</th>
            <th style="background-color:#1B4F72; text-align:center; border:0.5px solid black; font-weight: bold; color:white; font-size:6px; height:14px;">LEAD TIME / PLAZO DE ENTREGA </th>
        </tr>
    </thead>
    <thead>
        <tr style="border:1px solid black;" >
            <th style="text-align:center; font-size:8px; height:15px; border:1px solid black;">$respuestaFac[solicitante_soli]</th>
            <th style="text-align:center; font-size:8px; height:15px; border:1px solid black;">$respuestaFac[nombre]</th>
            <th style="text-align:center; font-size:8px; border:1px solid black;">$respuestaFac[forma_env]</th>
            <th style="text-align:center; font-size:8px; border:1px solid black;">$respuestaFac[incoterms]</th>
            <th style="text-align:center; font-size:8px; border:1px solid black;">$respuestaFac[plazo_entr]</th>
        </tr>
    </thead>
    <thead>
        <tr>
        <th style="background-color:#1B4F72; text-align:center; border:0.5px solid black; color:white; font-size:6px; height:14px;">PROJECT / PROYECTO</th>
            <th style="background-color:#1B4F72; text-align:center; border:0.5px solid black; font-weight: bold; color:white; font-size:6px; height:14px;">PROJECT / PROYECTO</th>
            <th style="background-color:#1B4F72; text-align:center; border:0.5px solid black; font-weight: bold; color:white; font-size:6px; height:14px;">INSURANCE INCLUDED / SEGURO INCLUIDO</th>
            <th style="background-color:#1B4F72; text-align:center; border:0.5px solid black; font-weight: bold; color:white; font-size:6px; height:14px;">VENDOR OFFER / OFERTA SUMINISTRADOR</th>
            <th style="background-color:#1B4F72; text-align:center; border:0.5px solid black; font-weight: bold; color:white; font-size:6px; height:14px;" colspan="2">SPECIAL INSTRUCTIONS / CONDICIONES ESPECIALES </th>
        </tr>
    </thead>
    <thead>
        <tr>
        <th style="text-align:center; text-align:center; font-size:8px; border:0.5px solid black;">$respuestaFac[nombrecomercial_cli]</th>
            <th style="text-align:center; text-align:center; font-size:8px; border:0.5px solid black;">$respuestaFac[proyecto_soli]</th>
            <th style="text-align:center; text-align:center; font-size:8px; border:0.5px solid black;">$respuestaFac[seguro_inclu]</th>
            <th style="text-align:center; text-align:center; font-size:8px; border:0.5px solid black;">$respuestaFac[oferta_suminis]</th>
            <th style="text-align:center; text-align:center; font-size:8px; border:0.5px solid black;" colspan="2">$respuestaFac[condicion_especial]</th>
        </tr>
    </thead>
</table>

<br><br><br><br><br>
<table border="1">

<thead>
<tr>
<th style="background-color:#1B4F72; color:white; text-align:center; font-size:6px; height:19px; font-weight: bold;">#</th>
<th style="background-color:#1B4F72; color:white; text-align:center; font-size:6px; height:19px; font-weight: bold;">VENDOR REF/ REF SUMINISTRADOR</th>
<th style="background-color:#1B4F72; color:white; text-align:center; font-size:6px; height:19px; font-weight: bold;">DESCRIPTION/ DESCRIPCION</th>
<th style="background-color:#1B4F72; color:white; text-align:center; font-size:6px; height:19px; font-weight: bold;">QTY/CANTIDAD</th>
<th style="background-color:#1B4F72; color:white; text-align:center; font-size:6px; height:19px; font-weight: bold;">UD PRICE/ PRECIO UNITARIO</th>
<th style="background-color:#1B4F72; color:white; text-align:center; font-size:6px; height:19px; font-weight: bold;">TOTAL</th>
</tr>
    </thead>
    <thead>
        <tr style="border:1px solid black;">
        <th style="text-align:center; font-size:8px; height:15px; border:1px solid black;">1</th>
            <th style="text-align:center; font-size:8px; height:15px; border:1px solid black;">$respuestaFac[solicitante_soli]</th>
            <th style="text-align:center; font-size:8px; height:15px; border:1px solid black;">$respuestaFac[nombre]</th>
            <th style="text-align:center; font-size:8px; border:1px solid black;">$respuestaFac[forma_env]</th>
            <th style="text-align:center; font-size:8px; border:1px solid black;">$respuestaFac[incoterms]</th>
            <th style="text-align:center; font-size:8px; border:1px solid black;">$respuestaFac[plazo_entr]</th>
        </tr>
    </thead>

    
    
    
    
   
</table>

EOF;

        // }

        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(0, 0, '', '', $bloque2, 0, 1, 0, true, '', true);

        /* -------------------------------------------------------------------------- */
        /*                       FIN DE PRIMER BLOQUE DE FACTURA                       */
        /* -------------------------------------------------------------------------- */


        // ---------------------------------------------------------
         ob_end_clean();
        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.
        $pdf->Output('example_001.pdf', 'I');
    }
}

//============================================================+
// END OF FILE
//============================================================+

$factura = new imprimirFactura();
$factura->id = $_GET["id"];
$factura->traerImpresionFactura();
