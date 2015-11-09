<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	 function __construct(){
	 	parent::__construct();
	 }



	
	public function index()
	{

			if(isset($_POST['password']))
			{
				$this->load->model('login_model');

				if($this->login_model->logeo($_POST['username'],$_POST['password'])){
					redirect('dashboardC');	
				}else{
					redirect('welcome');
					}
		
			}

		$data['title'] = "SIRED Buap 3";
		$this->load->view('login/loginhead', $data);
		$this->load->view('login/loginbody');
		$this->load->view('login/loginfooter');
	}

}