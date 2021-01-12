<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['page_title'] = "Home";
		$data['main_content'] = "home/index";
		$this->load->view('layouts/master',$data);
	}
	public function brand()
	{
		$data['page_title'] = "Brand";
		$data['main_content'] = "home/brand";
		$this->load->view('layouts/master',$data);
	}
	public function campaign()
	{
		$data['page_title'] = "Campaign";
		$data['main_content'] = "home/campaign";
		$this->load->view('layouts/master',$data);
	}
	public function campaign2()
	{
		$data['page_title'] = "Campaign 2";
		$data['main_content'] = "home/campaign2";
		$this->load->view('layouts/master',$data);
	}
	public function campaigns_shop()
	{
	$data['page_title'] = "Campaigns Shop";
	$data['main_content'] = "home/campaigns-shop";
	$this->load->view('layouts/master',$data);
	}
	public function category()
	{
		$data['page_title'] = "Category";
		$data['main_content'] = "home/category";
		$this->load->view('layouts/master',$data);
	}
	public function community()
	{
		$data['page_title'] = "Community";
		$data['main_content'] = "home/community";
		$this->load->view('layouts/master',$data);
	}
	public function community2()
	{
		$data['page_title'] = "Community 2";
		$data['main_content'] = "home/community2";
		$this->load->view('layouts/master',$data);
	}
	public function contact_us()
	{
		$data['page_title'] = "Contact Us";
		$data['main_content'] = "home/contact-us";
		$this->load->view('layouts/master',$data);
	}
	public function cookie_policy()
	{
		$data['page_title'] = "Cookie Policy";
		$data['main_content'] = "home/cookie-policy";
		$this->load->view('layouts/master',$data);
	}
	public function flash_sale()
	{
		$data['page_title'] = "Flash Sale";
		$data['main_content'] = "home/flash-sale";
		$this->load->view('layouts/master',$data);
	}
	public function hot_sale()
	{
		$data['page_title'] = "Hot Sale";
		$data['main_content'] = "home/hot-sale";
		$this->load->view('layouts/master',$data);
	}
	public function mega_offers()
	{
		$data['page_title'] = "Mega Offers";
		$data['main_content'] = "home/mega-offers";
		$this->load->view('layouts/master',$data);
	}
	public function new_products()
	{
		$data['page_title'] = "New Products";
		$data['main_content'] = "home/new-products";
		$this->load->view('layouts/master',$data);
	}
	public function privacy_policy()
	{
		$data['page_title'] = "Privacy Policy";
		$data['main_content'] = "home/privacy-policy";
		$this->load->view('layouts/master',$data);
	}
	public function product_details()
	{
		$data['page_title'] = "Product Details";
		$data['main_content'] = "home/product-details";
		$this->load->view('layouts/master',$data);
	}
	public function product_search_list()
	{
		$data['page_title'] = "Product Search List";
		$data['main_content'] = "home/product-search-list";
		$this->load->view('layouts/master',$data);
	}
	public function purchasing_policy()
	{
		$data['page_title'] = "Purchasing Policy";
		$data['main_content'] = "home/purchasing-policy";
		$this->load->view('layouts/master',$data);
	}
	public function shop()
	{
		$data['page_title'] = "Shop";
		$data['main_content'] = "home/shop";
		$this->load->view('layouts/master',$data);
	}
	public function shop_store()
	{
		$data['page_title'] = "Shop Store";
		$data['main_content'] = "home/shop-store";
		$this->load->view('layouts/master',$data);
	}
	public function terms_condition()
	{
		$data['page_title'] = "Terms & Condition";
		$data['main_content'] = "home/terms-condition";
		$this->load->view('layouts/master',$data);
	}
}
