<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index(){
		$data['base_url'] = $this->config->item('base_url');
		$this->load->view('galeria', $data);
	}
}
