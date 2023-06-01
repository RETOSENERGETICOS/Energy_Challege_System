<?php

class SolicitudC
{

    static public function VerSolicitudC()
    {

        //Creamos la variable de Bd
        $tablaBD = "solicitud_compra";

        //Solicitamos una respuesta a nuestro modelo y conocectamos una funcion con VerUsuariosM enviaremos los parametros $tablaBD
        $respuesta = SolicitudM::VerSolicitudM($tablaBD);

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
              "plazo_entr" => $_POST["plazoentregaN"]
        );

        $respuesta = SolicitudM::AgregarSolicitudM($tablaBD, $datosC);

        if ($respuesta) {
            echo '<script>
            window.location = "solicitud-compras";
            </script>';
        }
    }
}
}

