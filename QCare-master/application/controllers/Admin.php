<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
public function __construct()
{
	parent::__construct();
	//Do your magic here
}

	public function login()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->load->view('register');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */