<?php


require_once "ConexionBD.php";

class ClientesM extends ConexionBD{

    
	/* -------------------------------------------------------------------------- */
	/*                 Funcion statica por que llevara parametros 
								Ver los Usuarios					              */
	/* -------------------------------------------------------------------------- */
	static public function VerClientesM($tablaBD){
		/* -------------------------------------------------------------------------- */
		/*                          crearemos la variable pdo                         */
		/* -------------------------------------------------------------------------- */

		$pdo = ConexionBD::cBD()->prepare("SELECT id,pais_cli,actividad_cli
		,servicios_cli,distribucion_cli,capacitacion_cli,nombrecomercial_cli
		,rfc_cli,direccion_cli,contacto_compras,telefono_cli,
		correo_cli,contacto_pago,condiventa_cli,credito_cli FROM $tablaBD WHERE status = 1");
		/* -------------------------------------------------------------------------- */
		/*           variable pdo para que se nos ejecute la consulta SELECT          */
		/* -------------------------------------------------------------------------- */
		$pdo -> execute();
		/* -------------------------------------------------------------------------- */
		/*     retornamos el pdo con un fetchAll() para mostrar todos los usuarios    */
		/* -------------------------------------------------------------------------- */
		return $pdo -> fetchAll();
		/* -------------------------------------------------------------------------- */
		/*                        Cerramos la conexion de la BD                       */
		/* -------------------------------------------------------------------------- */
		$pdo -> close();

	}

    
}