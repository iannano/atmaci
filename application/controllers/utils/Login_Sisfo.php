<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_Admin
 *
 * @author Ian-Nano
 */
class Login_Sisfo extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function Auth($username, $password){
        $this->load->model('utils/model_login');
        $data['result'] = $this->model_login->sisfo($username, $password);
        $this->load->view('view/utils/login_result', $data);
    }
}
