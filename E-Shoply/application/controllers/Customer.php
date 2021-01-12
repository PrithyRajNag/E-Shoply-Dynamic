<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

	public function checkout()
	{
		$data['page_title'] = "Checkout";
		$data['main_content'] = "customer/checkout";
		$this->load->view('layouts/master',$data);
	}
	public function order_list_details()
	{
		$data['page_title'] = "Order List Details";
		$data['main_content'] = "customer/order-list-details";
		$this->load->view('layouts/master',$data);
	}
	public function my_profile()
	{
		$data['page_title'] = "My Profile";
		$data['main_content'] = "customer/my-profile";
		$this->load->view('layouts/master',$data);
	}
	public function transaction_history()
	{
		$data['page_title'] = "Transaction History";
		$data['main_content'] = "customer/transaction-history";
		$this->load->view('layouts/master',$data);
	}
}
