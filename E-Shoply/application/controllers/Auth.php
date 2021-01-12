<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login()
	{
		$data['page_title'] = "Login";
		// echo "Auth controller";
		$this->load->view('auth/login',$data);
	}
}
