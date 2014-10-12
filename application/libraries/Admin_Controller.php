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
		$this->load->helper ( 'form' );
		$this->load->library ( 'form_validation' );
		$this->load->library ( 'session' );
		$this->load->model ( 'user_model' );
		
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
