<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Pages';
	
	$route['login'] = 'Login/login';
	$route['logout'] = 'Login/logout';
	
	$route['verifikasi'] = 'verifikasi/index';
	$route['verifikasi/aktif'] = 'verifikasi/aktif';

	$route['register'] = 'Register/index';
	$route['register/(:any)'] = 'Register/index/$1';


// Pages
$route['data'] = 'Pages/data';	
$route['data/(:any)'] = 'Pages/data/$1';	
$route['data/(:any)/(:any)'] = 'Pages/data/$1/$2';	

$route['proyek'] = 'Pages/proyek';	
$route['proyek/(:any)'] = 'Pages/proyek/$1';
$route['proyek/(:any)/(:any)'] = 'Pages/proyek/$1/$2';		

$route['info'] = 'Pages/info';	

$route['account'] = 'Pages/account';	


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
