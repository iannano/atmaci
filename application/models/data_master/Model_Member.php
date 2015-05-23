<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model_Member
 *
 * @author Ian-Nano
 */
class Model_Member extends CI_Model{
    public function __construct() {
        $this->load->database();
        parent::__construct();
    }
         
    public function insert($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12){
        $data = array(
            'IDM' => "",
            'IDK' => $data1,
            'KOT_IDK' => $data2,
            'IDJM' => $data3,
            'NAMAM' => urldecode($data4),
            'JKM' => $data5,
            'TGLLM' => $data6,
            'ALAMATM' => urldecode($data7),
            'EMAILM' => urldecode($data8),
            'TLPM' => $data9,
            'PEKERJAANM' => $data10,
            'PASSM' => urldecode($data11),
            'STATM' => $data12
        );
        $this->db->insert('member', $data);
    }
    
    public function update($data, $condition){

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
}
