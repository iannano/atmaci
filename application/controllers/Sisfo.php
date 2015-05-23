<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Loginadmin
 *
 * @author Ian-Nano
 */
class Sisfo extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
    
    public function index(){
        $this->load->view('templates/back-end/header');
        $this->load->view('view/sisfo/login');
        $this->load->view('templates/back-end/footer');
    }
    
    public function home(){
        $this->load->view('templates/back-end/header');
        $this->load->view('templates/back-end/menu');
        $this->load->view('templates/back-end/footer');
    }
    
    public function master_provinsi(){
        $this->load->model('data_master/model_provinsi');
        $data['query'] = $this->model_provinsi->view_all();
        
        $this->load->view('templates/back-end/header');
        $this->load->view('templates/back-end/menu');
        $this->load->view('view/sisfo/data_master_provinsi', $data);
        $this->load->view('templates/back-end/footer');        
    }
    
    public function master_kota(){
        $this->load->model('data_master/model_kota');
        $data['query'] = $this->model_kota->view_all_table();
        
        $this->load->view('templates/back-end/header');
        $this->load->view('templates/back-end/menu');
        $this->load->view('view/sisfo/data_master_kota', $data);
        $this->load->view('templates/back-end/footer');  
        
    }
}
?>