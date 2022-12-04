<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contacto extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->model('Contacto_model');
	}

	public function index(){
		$data['base_url'] = $this->config->item('base_url');

		$data['nombre'] = "";
		$data['telefono'] = "";
		$data['correo'] = "";
		$data['mens'] = "";
		$data['mensaje'] = "";

		if (isset($_POST['guardar'])) {
			$data['nombre'] = str_replace(["<",">"], "", $_POST['nombre']); 
			$data['telefono'] = str_replace(["<",">"], "", $_POST['telefono']); 
			$data['correo'] = str_replace(["<",">"], "", $_POST['correo']);
			$data['mens'] = str_replace(["<",">"], "", $_POST['mens']);

			$this->Contacto_model->crearMensaje($data['nombre'], $data['telefono'], $data['correo'], $data['mens']);

			$data['mensaje'] = "<script>alertify.set('notifier','position', 'top-right');alertify.success('Se ha enviado su mensaje');</script>";
			redirect("Inicio");
		}
		$this->load->view('contacto', $data);
	}

	function mensajesRecibidos(){
		$data['base_url'] = $this->config->item('base_url');
		$data['arr'] = $this->Contacto_model->descargarMensajes();
		$this->load->view('mensajes/mensajes', $data);
	}

	function darBajaMensaje($id = 0){
		$data['base_url'] = $this->config->item('base_url');
		$data['arr'] = $this->Contacto_model->darBaja($id);
		redirect("Contacto/mensajesRecibidos");
	}
}
