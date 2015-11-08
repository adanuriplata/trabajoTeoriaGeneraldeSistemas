<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data['title'] = "SIRED Buap 3";
		$this->load->view('login/loginhead', $data);
		$this->load->view('login/loginbody');
		$this->load->view('login/loginfooter');
	}
}

