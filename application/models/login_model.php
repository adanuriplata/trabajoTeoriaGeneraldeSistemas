<?php if ( ! defined('BASEPATH')) exit('No direct script acces allowed');

class Login_model extends CI_Model{
	// public $variable;

	public function __construct()
	{
		parent:: __construct();
	}

	public function logeo($username,$password)
	{

		$this->db->where('login',$username);
		$this->db->where('password',$password);
		$q = $this->db->get('usuarios');
		if ($q->num_rows()>0) 
		{
			return true;
		}else
		{
			return false;
		}
	}
}



