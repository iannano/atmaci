<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of provinsi
 *
 * @author Ian-Nano
 */
class provinsi extends CI_Controller{
    public function __construct() {
        parent::__construct();
    }
    
    public function insert($data){
        $this->load->model('data_master/model_provinsi');
        $this->model_provinsi->insert($data);
    }
    
    public function update($data, $condition){
        $this->load->model('data_master/model_provinsi');
        $this->model_provinsi->update($data, $condition);
    }
    
    public function delete($condition){
        $this->load->model('data_master/model_provinsi');
        $this->model_provinsi->delete($condition);
    }
    
    public function view_all(){
        $this->load->model('data_master/model_provinsi');
        $data['query'] = $this->model_provinsi->view_all();
        $this->load->view('view/master/provinsi/view_all', $data);
    }
    
    public function view_all_table(){
        $this->load->model('data_master/model_provinsi');
        $data['query'] = $this->model_provinsi->view_all();
        $this->load->view('view/master/provinsi/view_all_table', $data);
    }
}
