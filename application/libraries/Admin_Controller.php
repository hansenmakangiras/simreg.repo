<?php defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

/* 
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Admin_Controller extends MY_Controller {
	function __construct() {
		parent::__construct ();
		
		$this->data ['meta_title'] = "PMK LP3I Makassar";
		$this->load->helper(array('form'));
		$this->load->library(array('form_validation','session'));
		$this->load->model(array('user_model'));
		
//		// Cek Login
//		$exceptions_uris = array (
//				'admin/user/login',
//				'admin/user/logout' 
//		);
//		if (in_array ( uri_string (), $exceptions_uris ) == FALSE) {
//			if ($this->user_model->loggedin () == FALSE) {
//				redirect ( 'admin/user/login' );
//			}
//		}
	}
}
