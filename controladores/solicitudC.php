<?php

class SolicitudC{

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


     public function CrearSolicitudC(){
        
        if(isset($_POST["solicitanteN"])){

             $tablaBD = "solicitud_compra";
             
             $datosC = array("id"=>$_POST["id_prove"], "rfc"=>$_POST["rfcN"], "direccion"=>$_POST["direccionN"],
             "telefono"=>$_POST["telefonoN"],"atn"=>$_POST["atnN"],"email"=>$_POST["emailN"]);

             $respuesta = SolicitudM::AgregarSolicitudM($tablaBD, $datosC);

             if($respuesta == true){

                echo '<script>             
                window.location = "proveedores";
                </script>';

             }

        }
    }
}