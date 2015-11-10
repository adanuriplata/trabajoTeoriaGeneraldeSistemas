<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClientesC extends CI_Controller {
	 function __construct(){
	 	parent::__construct();
	 }
	public function index()
	{
		$this->load->view('dashboard/dashboardhead');
		$this->load->view('dashboard/dashboardheader');
		$this->load->view('dashboard/dashboardnav');
		$this->load->view('clientes/clientesbody');
		$this->load->view('clientes/clientesfooter');
	}
	 function crear()
	{
		$this->load->model('usuarios_model');
		$data = array(
			'nombre' => $this->input->post('nombre', TRUE),
			'paterno' => $this->input->post('paterno', TRUE),
			'materno' => $this->input->post('materno', TRUE),
			'calle' => $this->input->post('calle', TRUE),
			'numero' => $this->input->post('numero', TRUE),
			'colonia' => $this->input->post('colonia', TRUE),
		);
		$this->usuarios_model->guardarUsuarios($data);
		$this->load->view('dashboard/dashboardhead');
		$this->load->view('dashboard/dashboardheader');
		$this->load->view('dashboard/dashboardnav');
		$this->load->view('clientes/registroaceptado');
		$this->load->view('clientes/clientesfooter');
	}
}
