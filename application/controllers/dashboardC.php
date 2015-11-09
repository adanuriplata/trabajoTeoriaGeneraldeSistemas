<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DashboardC extends CI_Controller {
	 function __construct(){
	 	parent::__construct();
	 }
	public function index()
	{
		$this->load->view('dashboard/dashboardhead');
		$this->load->view('dashboard/dashboardheader');
		$this->load->view('dashboard/dashboardnav');
		$this->load->view('dashboard/dashboardbody');
		$this->load->view('dashboard/dashboardfooter');
	}
}
