<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of placement_test
 *
 * @author Ian-Nano
 */
class placement_test extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('templates/front-end/header');
        $this->load->view('view/placement_test/view_main');
        $this->load->view('templates/front-end/footer');
    }
}
