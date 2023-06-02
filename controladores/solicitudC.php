<?php

class SolicitudC
{

    static public function VerSolicitudC($item, $valor)
    {

        //Creamos la variable de Bd
        $tablaBD = "solicitud_compra";

        //Solicitamos una respuesta a nuestro modelo y conocectamos una funcion con VerUsuariosM enviaremos los parametros $tablaBD
        $respuesta = SolicitudM::VerSolicitudM($tablaBD, $item, $valor);

        return $respuesta;
    }

    //Traer datos Managers
    static public function VersC($item, $valor)
    {
        $tablaBD = "provedores";

        $respuesta = ProveedoresM::EProveedoresM($tablaBD, $item, $valor);

        return $respuesta;
    }


    // static public function CrearSolicitudC()
    // {

    //     if (isset($_POST["proveedorN"])) {

    //         $tablaBD = "solicitud_compra";

    //         $datosC = array(
    //             "id_provedor" => $_POST["proveedorN"], 
    //             "lugarentr_solicitud" => $_POST["entregaN"],
    //             // "atn_lentrega" => $_POST["atnN"],
    //             "cp_lentrega" => $_POST["cpN"],
    //             "direccion_lentrega" => $_POST["direccionN"], 
    //             "telefono_lentrega" => $_POST["telefonoN"],
    //             // "solicitante_lentrega" => $_POST["solicitanteLN"],
    //             // "email_solicitante" => $_POST["emailN"]
    //         );

    //         $respuesta = SolicitudM::AgregarSolicitudM($tablaBD, $datosC);

    //         if ($respuesta == true) {

    //             echo '<script>             
    //             window.location = "solicitud-compras";
    //             </script>';


    //         }

    //     }
    // }
    static public function CrearSolicitudC()
    {
        if (isset($_POST["proveedorN"])) {

            if (isset($_POST["inputSummary"])) {

                $solicitanteN_ = array();
                $descripN_ = array();
                $cantN_ = array();
                $precuniN_ = array();
                $tasaN_ = array();
                $totalN_ = array();

                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    $solicitante = trim($_POST["solicitanteN_" . $i]);
                    array_push($solicitanteN_, $solicitante);
                }
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    $descripN = trim($_POST["descripN_" . $i]);
                    array_push($descripN_, $descripN);
                }
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    $cantN = trim($_POST["cantN_" . $i]);
                    array_push($cantN_, $cantN);
                }
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    $precuniN = trim($_POST["precuniN_" . $i]);
                    array_push($precuniN_, $precuniN);
                }
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    $tasaN = trim($_POST["tasaN_" . $i]);
                    array_push($tasaN_, $tasaN);
                }
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    $totalN = trim($_POST["totalN_" . $i]);
                    array_push($totalN_, $totalN);
                }
            }



            $tablaBD = "solicitud_compra";

            $datosC = array(
                "id_provedor" => $_POST["proveedorN"],
                "lugarentr_solicitud" => $_POST["entregaLN"],
                "atn_lentrega" => $_POST["atnLN"],
                "cp_lentrega" => $_POST["cpLN"],
                "direccion_lentrega" => $_POST["direccionLN"],
                "telefono_lentrega" => $_POST["telefonoLN"],
                "firma_superv" => $_POST["firmasupN"],
                "forma_env" => $_POST["formaenvN"],
                "incoterms" => $_POST["incotermsN"],
                "plazo_entr" => $_POST["plazoentregaN"],
                "cliente_soli" => $_POST["clienteN"],
                "proyecto_soli" => $_POST["proyectoN"],
                "seguro_inclu" => $_POST["seguroincluN"],
                "oferta_suminis" => $_POST["ofertasumN"],
                "condicion_especial" => $_POST["condicionesespN"],
                "ref_suministrador" => json_encode($solicitanteN_),
                "descripcion" => json_encode($descripN_),
                "cantidad" => json_encode($cantN_),
                "precio_unitario" => json_encode($precuniN_),
                "tasa" => json_encode($tasaN_),
                "total" => json_encode($totalN_),
                "subtotal_soli" => $_POST["subtotalN"],
                "taxes" => $_POST["taxesN"],
                "pago_envio_soli" => $_POST["shippinglN"],
                "otros_soli" => $_POST["otrosN"],
                "total_soli" => $_POST["totalN"],
                "moneda" => $_POST["monedaN"]
                
                
            );

            $respuesta = SolicitudM::AgregarSolicitudM($tablaBD, $datosC, $solicitanteN_);

            if ($respuesta) {
                echo '<script>
            window.location = "solicitud-compras";
            </script>';
            }
        }
    }
}
