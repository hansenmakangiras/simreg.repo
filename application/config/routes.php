<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = "home/dashboard";
//$route['default_controller'] = "auth";
$route['404_override'] = '';

// Route Untuk Auth
$route['login'] = "admin/auth/login";
$route['logout'] = "admin/auth/logout";
$route['change_password'] = "admin/auth/change_password";
$route['forgot_password'] = "admin/auth/forgot_password";
$route['reset_password'] = "admin/auth/reset_password";
$route['deactivate_user'] = "admin/auth/deactivate_user";
$route['create_user'] = "admin/auth/create_user";
$route['edit_user'] = "admin/auth/edit_user";
$route['create_group'] = "admin/auth/create_group";
$route['edit_group'] = "admin/auth/edit_group";

//Route Untuk Halaman Home
$route['divisi'] = "home/dashboard/divisi";
$route['tentang-kami'] = "home/dashboard/tentang_kami";
$route['blog'] = "home/dashboard/blog";
$route['donasi'] = "home/dashboard/donasi";
$route['gallery'] = "home/dashboard/gallery";
$route['contact'] = "home/dashboard/contact";

//Route Untuk Halaman Admin
$route['admin'] = "admin/dashboard";
$route['user/login'] = "admin/user/login";

/*
$route['admin/([a-zA-Z_-]+)/(:any)'] = '$1/admin/$2';
$route['admin/login'] = 'admin/login';
$route['admin/logout'] = 'admin/logout';
$route['admin/([a-zA-Z_-]+)'] = '$1/admin/index';
$route['admin'] = 'admin';
*/


/* End of file routes.php */
/* Location: ./application/config/routes.php */
