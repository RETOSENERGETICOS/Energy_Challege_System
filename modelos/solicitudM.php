<?php

require_once "ConexionBD.php";

class SolicitudM extends ConexionBD
{

    static public function VerSolicitudM($tablaBD)
    {
        /* -------------------------------------------------------------------------- */
        /*                          crearemos la variable pdo                         */
        /* -------------------------------------------------------------------------- */

        $pdo = ConexionBD::cBD()->prepare("SELECT solicitud_compra.solicitante,
        solicitud_compra.firma_superv,solicitud_compra.forma_env,solicitud_compra.incoterms,
        solicitud_compra.plazo_entr,solicitud_compra.proyecto,solicitud_compra.seguro_inclu,
        solicitud_compra.oferta_suminis,solicitud_compra.condicion_especial,solicitud_compra.ref_suministrador,
        solicitud_compra.descripcion,solicitud_compra.cantidad,solicitud_compra.precio_unitario,
        solicitud_compra.subtotal_soli,solicitud_compra.taxes,solicitud_compra.pago_envio_soli,
        solicitud_compra.otros_soli,solicitud_compra.total_soli,solicitud_compra.moneda,provedores.nombre,
        provedores.rfc,provedores.direccion,provedores.telefono,provedores.atn,provedores.email,
        tipo_proceso.tipo_proceso
        FROM solicitud_compra JOIN provedores ON solicitud_compra.id_provedor = provedores.id
        JOIN tipo_proceso ON solicitud_compra.id_tipo_proceso = tipo_proceso.id WHERE status = 1");

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

    //Crear Usuarios
	static public function  AgregarSolicitudM($tablaBD, $datosC){
		
		$pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (usuario,nombre,cargo,correo,clave,foto,rol,estado,firma,iniciales_firma) VALUES (:usuario,:nombre,:cargo,:correo, :clave, :foto, :rol, 1,:firma,:iniciales_firma)");

		/* -------------------------------------------------------------------------- */
		/*                            enlazamos parametros                            */
		/* -------------------------------------------------------------------------- */
		$pdo -> bindParam(":usuario", $datosC["usuario"], PDO::PARAM_STR);
        $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
        $pdo -> bindParam(":cargo", $datosC["cargo"], PDO::PARAM_STR);
		$pdo -> bindParam(":correo", $datosC["correo"], PDO::PARAM_STR);
		$pdo -> bindParam(":clave", $datosC["clave"], PDO::PARAM_STR);
		$pdo -> bindParam(":foto", $datosC["foto"], PDO::PARAM_STR);
        $pdo -> bindParam(":rol", $datosC["rol"], PDO::PARAM_STR);
		$pdo -> bindParam(":firma", $datosC["firma"], PDO::PARAM_STR);
		$pdo -> bindParam(":iniciales_firma", $datosC["iniciales_firma"], PDO::PARAM_STR);
       



		/* -------------------------------------------------------------------------- */
		/*  utilizaremosuna condicion si nuestra variable pdo se nos ejecula vamos 
        a retornar verdadero        
        */
		/* -------------------------------------------------------------------------- */
        
		if($pdo -> execute()) {
			return true;
		/* -------------------------------------------------------------------------- */
		/*                 si no se cumple que nos retorne como falso                 */
		/* -------------------------------------------------------------------------- */
		}else{
			return false;
		}

		/* -------------------------------------------------------------------------- */
		/*                          Cerramos conexion de pdo                          */
		/* -------------------------------------------------------------------------- */
		$pdo -> close();

	}
    // AgregarSolicitudM
}
