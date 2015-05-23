<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Kota
 *
 * @author Ian-Nano
 */
class Model_Kota extends CI_Model{
    public function __construct() {
        $this->load->database();
        parent::__construct();
    }
    
    public function insert($data1, $data2){
        $data = array(
            'IDK' => "",
            'NAMAK' => $data1,
            'IDP' => $data2
        );
        $this->db->insert('kota', $data);
    }
    
    public function update($data, $condition){
        $this->db->update('kota', $data);
        $this->db->update('IDK', $condition);
    }
    
    public function delete($condition){
        $this->db->delete('IDK', $condition);
    }
    
    public function view_all(){
        $query = $this->db->get('kota');
        return $query->result_array();
    }
    
    public function view_by_id($condition){
        $this->db->get('kota');
        $this->db->where('IDK', $condition);
        return $this->db->result_array();
    }
    
    public function view_by_id_provinsi($condition){
        $query = $this->db->query("SELECT * FROM kota WHERE IDP='".$condition."'");
        return $query->result_array();
    }
    
    public function view_all_table(){
        $this->db->select("k.IDK");
        $this->db->select("p.NAMAP");
        $this->db->select("K.NAMAK");
        $this->db->from("kota k");
        $this->db->join("propinsi p","k.IDP = p.IDP");
        $query = $this->db->get();
        
        return $query->result_array();
    }
}
