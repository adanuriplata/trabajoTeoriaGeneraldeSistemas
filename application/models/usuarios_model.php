<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Usuarios_model extends CI_Model{
	// public $variable;

	public function __construct()
	{
		parent:: __construct();
	}

	public function guardarUsuarios($data)
	{

		$this->db->insert('cliente', $data);
	}
}


