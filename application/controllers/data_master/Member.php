<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Member
 *
 * @author Ian-Nano
 */
class Member extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function insert(){
        $this->load->model('data_master/model_member');
        $this->model_member->insert($data);
    }
}
