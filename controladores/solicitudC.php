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


 /* -------------------------------------------------------------------------- */
 /*                               CREAR SOLICITUD                              */
 /* -------------------------------------------------------------------------- */
    static public function CrearSolicitudC()
    {
        if (isset($_POST["proveedorN"])) {

            if (isset($_POST["inputSummary"])) {

                // $detalleproducto = array();

                // for($i = 0; $i < $_POST["inputSummary"]; $i++){

                //     $detalleproducto[$i] = (object)["solicitanteN_"=>trim($_POST["solicitanteN_".$i]),
                //     "descripN_" => trim($_POST["descripN_".$i]),"cantN_" => trim($_POST["cantN_".$i])
                //     ,"precuniN_" => trim($_POST["precuniN_".$i]),"tasalN_" => trim($_POST["tasalN_".$i])
                //     ,"totalN_" => trim($_POST["totalN_".$i])];
                // }
 
                $solicitanteN_ = array();
                $descripN_ = array();
                $cantN_ = array();
                $precuniN_ = array();
                $tasaN_ = array();
                $totalN_ = array();
            
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    array_push($solicitanteN_,trim($_POST["solicitanteN_" . $i]));
                }
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    array_push($descripN_,trim($_POST["descripN_" . $i]));   
                }
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    array_push($cantN_,trim($_POST["cantN_" . $i]));  
                }
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    array_push($precuniN_,trim($_POST["precuniN_" . $i]));
                }
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    array_push($tasaN_,trim($_POST["tasaN_" . $i])); 
                }
                for ($i = 0; $i < $_POST["inputSummary"]; $i++) {
                    array_push($totalN_,trim($_POST["totalN_" . $i]));
                }
            
            }

            $rutacuadro= "";
            $rutaofertaprov= "";
            $rutaespeciftec = "";
            if($_FILES["cuadro_msoliN"]["type"] == "application/pdf"){
                $nombrecuadro = mt_rand(10,999);
                $rutacuadro ="vistas/img/cmando/Cuadro-mando_".$nombrecuadro.".pdf";
                move_uploaded_file($_FILES["cuadro_msoliN"]["tmp_name"], $rutacuadro);
            }

           
            if($_FILES["ofertaprovN"]["type"] == "application/pdf"){
                $nombreofertaprov = mt_rand(10,999);
                $rutaofertaprov ="vistas/img/ofertaprov/Oferta-prov_".$nombreofertaprov.".pdf";
                move_uploaded_file($_FILES["ofertaprovN"]["tmp_name"], $rutaofertaprov);
            }

          
            if($_FILES["especiftecN"]["type"] == "application/pdf"){
                $nombreespeciftec = mt_rand(10,999);
                $rutaespeciftec ="vistas/img/especiftec/Especif-tec_".$nombreespeciftec.".pdf";
                move_uploaded_file($_FILES["especiftecN"]["tmp_name"], $rutaespeciftec);
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
                "moneda" => $_POST["monedaN"],
                "cuadro_msoli"=> $rutacuadro,
                "ofertaprove_soli"=>$rutaofertaprov,
                "especificacion_tecsoli"=> $rutaespeciftec);

              

            $respuesta = SolicitudM::AgregarSolicitudM($tablaBD, $datosC);

            if ($respuesta) {
                echo '<script>
            window.location = "solicitud-compras";
            </script>';
            }
        }
    }
}
