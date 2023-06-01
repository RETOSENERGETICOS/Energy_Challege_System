<?php

require_once "ConexionBD.php";

class SolicitudM extends ConexionBD
{

    static public function VerSolicitudM($tablaBD)
    {
        /* -------------------------------------------------------------------------- */
        /*                          crearemos la variable pdo                         */
        /* -------------------------------------------------------------------------- */

        $pdo = ConexionBD::cBD()->prepare("SELECT * FROM vista_solicitud_compra");

        /* -------------------------------------------------------------------------- */
        /*          //variable pdo para que se nos ejecute la consulta SELECT         */
        /* -------------------------------------------------------------------------- */
        $pdo->execute();
        /* -------------------------------------------------------------------------- */
        /*    //retornamos el pdo con un fetchAll() para mostrar todos los usuarios   */
        /* -------------------------------------------------------------------------- */
        return $pdo->fetchAll();
        /* -------------------------------------------------------------------------- */
        /*                       //Cerramos la conexion de la BD                      */
        /* -------------------------------------------------------------------------- */
        $pdo->close();
    }

    static public function AgregarSolicitudM($tablaBD, $datosC)
    {
        date_default_timezone_set('America/Mexico_City');
        $fecha = date('Y-m-d H:i:s');
        $fechatext = date('d/m/Y H:i:s', strtotime($fecha));
        $solicitante = $_SESSION['nombre'];
        $email = $_SESSION["correo"];
        $iniciales= $_SESSION["iniciales_firma"];
        // $Creofechayhora = $creo . ' ' . $fechatext;
        printf($email);
        print_r($datosC);
        $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD 
        (id_provedor, lugarentr_solicitud,atn_lentrega,cp_lentrega,
        direccion_lentrega,telefono_lentrega,solicitante_lentrega,email_solicitante
        ,solicitante_soli,firma_superv,forma_env,incoterms,plazo_entr,status, estado) 
        VALUES 
        (:id_provedor, :lugarentr_solicitud,:atn_lentrega,:cp_lentrega,
        :direccion_lentrega,:telefono_lentrega,'$solicitante','$email','$iniciales',
        :firma_superv,:forma_env,:incoterms,:plazo_entr,1, 2)");

         $pdo->bindParam(":id_provedor", $datosC["id_provedor"], PDO::PARAM_INT);
         $pdo->bindParam(":lugarentr_solicitud", $datosC["lugarentr_solicitud"], PDO::PARAM_STR);
         $pdo->bindParam(":atn_lentrega", $datosC["atn_lentrega"], PDO::PARAM_STR);
         $pdo->bindParam(":cp_lentrega", $datosC["cp_lentrega"], PDO::PARAM_STR);
         $pdo->bindParam(":direccion_lentrega", $datosC["direccion_lentrega"], PDO::PARAM_STR);
         $pdo->bindParam(":telefono_lentrega", $datosC["telefono_lentrega"], PDO::PARAM_STR);
         $pdo->bindParam(":firma_superv", $datosC["firma_superv"], PDO::PARAM_STR);
         $pdo->bindParam(":forma_env", $datosC["forma_env"], PDO::PARAM_STR);
         $pdo->bindParam(":incoterms", $datosC["incoterms"], PDO::PARAM_STR);
         $pdo->bindParam(":plazo_entr", $datosC["plazo_entr"], PDO::PARAM_STR);
         
        //  $pdo->bindParam(":solicitante_lentrega", $datosC["solicitante_lentrega"], PDO::PARAM_STR);
        //  $pdo->bindParam(":email_solicitante", $datosC["email_solicitante"], PDO::PARAM_STR);
        print_r($pdo);
        if ($pdo->execute()) {
            return true;
        } else {
            return false;
        }

    }

    /* -------------------------------------------------------------------------- */
    /*                               Crear Solicitud                               */
    /* -------------------------------------------------------------------------- */
	// static public function  AgregarSolicitudM($tablaBD, $datosC){
		
    //     date_default_timezone_set('America/Mexico_City');
    //     $fecha = date('Y-m-d H:i:s');
    //     $fechatext=date('d/m/Y H:i:s',strtotime($fecha));
    //     $creo = $_SESSION["nombre"];
    //     $Creofechayhora=$creo . ' ' . $fechatext;

       
    //     print_r($datosC);
	// 	$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (id_provedor,lugarentr_solicitud
    //     cp_lentrega,direccion_lentrega,telefono_lentrega
    //     ,status,estado)
    //     VALUES (:id_provedor,:lugarentr_solicitud,:atn_lentrega,:cp_lentrega,:direccion_lentrega
    //     ,:telefono_lentrega,:solicitante_lentrega,1,2)");
        
        
    //     //,solicitante_lentrega ,atn_lentrega, ,email_solicitante

	// 	/* -------------------------------------------------------------------------- */
	// 	/*                            enlazamos parametros                            */
	// 	/* -------------------------------------------------------------------------- */
		
    //     $pdo -> bindParam(":id_provedor", $datosC["id_provedor"], PDO::PARAM_INT);
    //      $pdo -> bindParam(":lugarentr_solicitud", $datosC["lugarentr_solicitud"], PDO::PARAM_STR);
    //     //  $pdo -> bindParam(":atn_lentrega", $datosC["atn_entrega"], PDO::PARAM_STR);
    //      $pdo -> bindParam(":cp_lentrega", $datosC["cp_lentrega"], PDO::PARAM_STR);
	// 	 $pdo -> bindParam(":direccion_lentrega", $datosC["direccion_lentrega"], PDO::PARAM_STR);
	// 	 $pdo -> bindParam(":telefono_lentrega", $datosC["telefono_lentrega"], PDO::PARAM_STR);
	// 	//  $pdo -> bindParam(":solicitante_lentrega", $datosC["solicitante_lentrega"], PDO::PARAM_STR);
    //     //  $pdo -> bindParam(":email_solicitante", $datosC["email_solicitante"], PDO::PARAM_STR);
	// 	// $pdo -> bindParam(":solicitante_soli", $datosC["solicitante_soli"], PDO::PARAM_STR);
	// 	// // $pdo -> bindParam(":iniciales_firma", $datosC["iniciales_firma"], PDO::PARAM_STR);
    //     // $pdo -> bindParam(":firma_superv", $datosC["firma_superv"], PDO::PARAM_STR);
    //     // $pdo -> bindParam(":forma_env", $datosC["forma_env"], PDO::PARAM_STR);
    //     // $pdo -> bindParam(":incoterms", $datosC["incoterms"], PDO::PARAM_STR);
    //     // $pdo -> bindParam(":plazo_entr", $datosC["plazo_entr"], PDO::PARAM_STR);
    //     // $pdo -> bindParam(":cliente_soli", $datosC["cliente_soli"], PDO::PARAM_STR);
    //     // $pdo -> bindParam(":proyecto_soli", $datosC["proyecto_soli"], PDO::PARAM_STR);
    //     // $pdo -> bindParam(":seguro_inclu", $datosC["seguro_inclu"], PDO::PARAM_STR);
    //     // $pdo -> bindParam(":oferta_suminis", $datosC["oferta_suminis"], PDO::PARAM_STR);
    //     // $pdo -> bindParam(":condicion_especial", $datosC["condicion_especial"], PDO::PARAM_STR);
       
        


	// 	/* -------------------------------------------------------------------------- */
	// 	/*  utilizaremosuna condicion si nuestra variable pdo se nos ejecula vamos 
    //     a retornar verdadero        
    //     */
	// 	/* -------------------------------------------------------------------------- */
        
	// 	if($pdo -> execute()) {
	// 		return true;
	// 	/* -------------------------------------------------------------------------- */
	// 	/*                 si no se cumple que nos retorne como falso                 */
	// 	/* -------------------------------------------------------------------------- */
	// 	}else{
	// 		return false;
	// 	}

	// 	/* -------------------------------------------------------------------------- */
	// 	/*                          Cerramos conexion de pdo                          */
	// 	/* -------------------------------------------------------------------------- */
	// 	$pdo -> close();

	// }
    // AgregarSolicitudM
}
