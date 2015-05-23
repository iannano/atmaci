<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of kota
 *
 * @author Ian-Nano
 */
class kota extends CI_Controller{
   public function __construct() {
        parent::__construct();
    }
    
    public function insert(){
        $this->load->model('model_provinsi');
    }
    
    public function update(){
        
    }
    
    public function delete(){
        
    }
    
    public function view_all(){
        $this->load->model('data_master/model_kota');
        $data['query'] = $this->model_kota->view_all();
        $this->load->view('view/master/kota/view_all', $data);
    }
    
    public function view_by_id(){
        
    }
    
    public function view_by_id_provinsi($idProvinsi){
        $this->load->model('data_master/model_kota');
        $data['query'] = $this->model_kota->view_by_id_provinsi($idProvinsi);
        $this->load->view('view/master/kota/view_by_id_provinsi', $data);
    }
}
