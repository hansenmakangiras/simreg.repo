<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * @Author : Hansen Makangiras
 * Twitter : @hansenvostro
 * Email : hansenmakangiras@gmail.com
 */

class Frontend_Controller extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->config('app_config');
    }

}
