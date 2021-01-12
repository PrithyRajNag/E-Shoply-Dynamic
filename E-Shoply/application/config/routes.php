<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
// $route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'auth/login';

$route[''] = 'home/index';
$route['brand'] = 'home/brand';
$route['campaign'] = 'home/campaign';
$route['campaign2'] = 'home/campaign2';
$route['campaigns-shop'] = 'home/campaigns_shop';
$route['category'] = 'home/category';
$route['community'] = 'home/community';
$route['community2'] = 'home/community2';
$route['contact-us'] = 'home/contact_us';
$route['cookie-policy'] = 'home/cookie_policy';
$route['flash-sale'] = 'home/flash_sale';
$route['hot-sale'] = 'home/hot_sale';
$route['mega-offers'] = 'home/mega_offers';
$route['new-products'] = 'home/new_products';
$route['privacy-policy'] = 'home/privacy_policy';
$route['product-details'] = 'home/product_details';
$route['product-search-list'] = 'home/product_search_list';
$route['purchasing-policy'] = 'home/purchasing_policy';
$route['shop'] = 'home/shop';
$route['shop-store'] = 'home/shop_store';
$route['terms-condition'] = 'home/terms_condition';


$route['checkout'] = 'customer/checkout';
$route['my-profile'] = 'customer/my_profile';
$route['order-list-details'] = 'customer/order_list_details';
$route['transaction-history'] = 'customer/transaction_history';
