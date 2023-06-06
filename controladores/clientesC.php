<?php


class ClientesC
{


    static public function VerClientesC()
    {

        //Creamos la variable de Bd
        $tablaBD = "clientes";
        //Solicitamos una respuesta a nuestro modelo y conocectamos una funcion con VerUsuariosM enviaremos los parametros $tablaBD
        $respuesta = ClientesM::VerClientesM($tablaBD);
        //abrimos un foreach con la variable respuesta traiga un echo con lo que tenemos como registros en la tabla
        return $respuesta;
    }

    static public function CrearClientesC()
    {
        if (isset($_POST["pais_cliN"])) {
            if (
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["pais_cliN"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["actividad_cliN"])
               
            ) {
    
                $tablaBD = "clientes";
    
                $datosC = array(
                    "pais_cli" => $_POST["pais_cliN"], "actividad_cli" => $_POST["actividad_cliN"],
                    "servicios_cli" => $_POST["servicios_cliN"], "distribucion_cli" => $_POST["distribucion_cliN"], 
                    "nombrecomercial_cli" => $_POST["nombrecomercial_cliN"],"capacitacion_cli" => $_POST["capacitacion_cliN"],
                    "rfc_cli" => $_POST["rfc_cliN"], "direccion_cli" => $_POST["direccion_cliN"],
                    "contacto_compras" => $_POST["contacto_comprasN"], "telefono_cli" => $_POST["telefono_cliN"], 
                    "correo_cli" => $_POST["correo_cliN"],"contacto_pago" => $_POST["contacto_pagoN"], 
                    "condiventa_cli" => $_POST["condiventa_cliN"], "credito_cli" => $_POST["credito_cliN"]);
    
                $respuesta = ClientesM::AgregarClientesM($tablaBD, $datosC);
                
                print_r($respuesta);
                print_r($datosC);
                if ($respuesta == true) {
    
                    echo '<script>
                    swal("El usuario a sido guardado correctamente!", "", "success");
                            window.location = "clientes";	
                      
                    </script>';
                } else {
    
                    echo '<script>
                        Swal.fire({
                            title: "Ocurrió un error al agregar cliente!",
                            icon: "error",
                            confirmButtonText: "Cerrar"
                        }).then(function() {
                            window.location = "clientes";	
                        });
                    </script>';
                }
            } else {
                echo '<script>
                    Swal.fire({
                        title: "Ocurrió un error al agregar cliente!",
                        icon: "error",
                        confirmButtonText: "Cerrar"
                    }).then(function() {
                        window.location = "clientes";	
                    });
                </script>';
            }
        }
    }
   
    
    
}


