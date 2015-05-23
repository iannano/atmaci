<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Daftar_Atma
 *
 * @author Ian-Nano
 */
class Daftar_Atma extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function index(){
        $this->load->view('templates/front-end/header');
        $this->load->view('view/daftar_atma/view_daftar_atma');
        $this->load->view('templates/front-end/footer');
    }
    
    public function pilih_paket(){
        $this->load->view('view/daftar_atma/view_pilih_paket');
    }
    
    public function konfirmasi($email, $password, $jenisMember){
        $this->load->library('email');
        $this->email->from('noreply@atmaenglishcourse.com', 'Atma English Course');
        $this->email->to($email);
        $this->email->subject('Konfirmasi Pendaftaran Anda');
        $this->email->message('<h1>Atma Englsih Course</h1>'
                . '<p>Terimakasih telah melakukan pendaftaran pada kursus bahasa inggris kami.</p>'
                . '<pre>'
                . 'Username:'.$email.''
                . 'Password:'.$password.''
                . 'Jenis Member: '.$jenisMember.''
                . '</pre>'
                . '<p>Kunjungi link disamping untuk melakukan aktivasi akun anda dan memverifikasikan bahwa email yang anda masukan adalah valid</p>'
                . '<p>Segera lakukan pembayaran untuk mengakses seluruh fiture dari Atma Online Learning</p>'
                . '<p>Regards Atma English Course</p>');
        $this->email->send();
        $this->email->print_debugger();
        $data['email'] = $email;
        $data['password'] = $password;
        $data['jenisMember'] = $jenisMember;
        $this->load->view('view/daftar_atma/view_konfirmasi_pendaftaran', $data);
    }
    
    public function resendEmail($email, $password, $jenisMember){
        
    }
    
    public function verifikasi(){
        
    }
    
    public function daftar($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12){
        $this->load->helper('form');
        $this->load->model('data_master/model_member');
        $this->model_member->insert($data1, $data2, $data3, $data4, $data5, $data6, $data7, $data8, $data9, $data10, $data11, $data12);
    }
}
