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
class Model_Provinsi extends CI_Model {
    public function __construct() {
        $this->load->database();
        parent::__construct();
    }
    
    public function insert($data1){
        $data = array (
            'IDP' => "",
            'NAMAP' => urldecode($data1)
        );
        $this->db->insert('propinsi', $data);
    }
    
    public function update($data, $condition){
        $data = array (
            'NAMAP' => urldecode($data)
        );
        $this->db->where('IDP', $condition);
        $this->db->update('propinsi', $data);
    }
    
    public function delete($condition){
        $this->db->where('IDP', $condition);
        $this->db->delete('propinsi');
    }
    
    public function view_all(){
        $query = $this->db->get('propinsi');
        return $query->result_array();
    }
    
    public function view_by_id($condition){
        $this->db->select('propinsi');
        $this->db->where('IDP', $condition);
        return $this->db->result_array();
    }
}
