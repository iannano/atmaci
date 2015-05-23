<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Halaman_Utama
 *
 * @author Ian-Nano
 */
class Halaman_Utama extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('templates/front-end/header');
        $this->load->view('templates/front-end/menu');
        $this->load->view('view/halaman_utama/view_halaman_utama');
        $this->load->view('templates/front-end/footer');
    }
    
    public function about_us($page){
        $data['kodeKonten'] = $page;
        $this->load->view('templates/front-end/header');
        $this->load->view('templates/front-end/menu');
        $this->load->view('view/halaman_utama/view_about_us', $data);
        $this->load->view('templates/front-end/footer');
    }
    
    public function program($page){
        $data['kodeKonten'] = $page;
        $this->load->view('templates/front-end/header');
        $this->load->view('templates/front-end/menu');
        $this->load->view('view/halaman_utama/view_program', $data);
        $this->load->view('templates/front-end/footer');
    }
    
    public function teacher(){
        $this->load->view('templates/front-end/header');
        $this->load->view('templates/front-end/menu');
        $this->load->view('view/halaman_utama/view_our_teacher');
        $this->load->view('templates/front-end/footer');
    }
    
    public function location(){
        $this->load->view('templates/front-end/header');
        $this->load->view('templates/front-end/menu');
        $this->load->view('view/halaman_utama/view_location');
        $this->load->view('templates/front-end/footer');
    }
    
    public function activities(){
        $this->load->view('templates/front-end/header');
        $this->load->view('templates/front-end/menu');
        $this->load->view('view/halaman_utama/view_activities');
        $this->load->view('templates/front-end/footer');
    }
    
    public function kemitraan(){
       $this->load->view('templates/front-end/header');
        $this->load->view('templates/front-end/menu');
        $this->load->view('view/halaman_utama/view_activities');
        $this->load->view('templates/front-end/footer'); 
    }

    public function qna(){
        $this->laod->view('templates/front-end/header');
        $this->load->view('templates/front-end/menu');
        $this->load->view('view/halaman_utama/view_qna');
        $this->load->view('templates/front-end/footer');
    }
    
    public function login(){
        $this->load->view('templates/front-end/header');
        $this->load->view('templates/front-end/menu');
        $this->load->view('view/halaman_utama/view_login');
        $this->load->view('templates/front-end/footer');
    }
}
