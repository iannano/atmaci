<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login_Model
 *
 * @author Ian-Nano
 */
class Model_Login extends CI_Model {
    public function __construct() {
        $this->load->database();
        parent::__construct();
    }
    
    public function sisfo($username, $password){
        $query = $this->db->select()->from('employee')->where('EMAILE', $username)->where('PASSP',$password);
        return $query->count_all_results();
    }
}
?>
