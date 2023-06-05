<?php


class ClientesC{


static public function VerClientesC(){

    //Creamos la variable de Bd
		$tablaBD = "clientes";
		//Solicitamos una respuesta a nuestro modelo y conocectamos una funcion con VerUsuariosM enviaremos los parametros $tablaBD
		$respuesta = ClientesM::VerClientesM($tablaBD);
		//abrimos un foreach con la variable respuesta traiga un echo con lo que tenemos como registros en la tabla
		return $respuesta;

}

}