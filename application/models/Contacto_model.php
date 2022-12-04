<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto_model extends CI_Model {

//Constructor
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function crearMensaje($nombre, $telefono, $correo, $mens){
		$sql = "INSERT INTO mensajes(nombre, telefono, correo,  estado, mensaje)
				VALUES (?, ?, ?, ?, ?)";
		$estado = "A";
		$valores = array($nombre, $telefono, $correo, $estado, $mens);
		$dbres = $this->db->query($sql, $valores);
		return $dbres;
	}

	function descargarMensajes(){
		$sql = "SELECT 	id_mensaje, nombre, telefono, correo, mensaje, DATE_FORMAT(fecha, '%d/%m/%Y %h:%m:%s %p') as fecha
				FROM 	mensajes
				WHERE 	estado = 'A'
				ORDER BY id_mensaje DESC
				LIMIT 	50";
		$dbres = $this->db->query($sql);
		$rows = $dbres->result_array();
		return $rows;
	}
	function darBaja($id){
		return $this->db->delete("mensajes", array("id_mensaje" => $id));
		$dbres = $this->db->query($sql, $valores);
		return $dbres;
	}
}