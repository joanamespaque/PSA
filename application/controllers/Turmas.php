<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Turmas extends CI_Controller{
    public function __construct(){
        parent::__construct();
        // $this->load->library('controle_acesso');
        // $this->controle_acesso->controlar();
        if($this->session->userdata('logged_in') !== TRUE){
            redirect('inicio/inicio');
        }
    }

    // public function turmas_professor(){
    //     $this->load->view('header');
    //     $this->load->view('nav_usuario');
    //     $this->load->view('turmas_professor');
    // }

    // public function turmas_aluno(){
    //     $this->load->view('header');
    //     $this->load->view('nav_usuario');
    //     $this->load->view('turmas_aluno');
    // }
    
    public function index(){
        $this->load->view('header');
        $this->load->view('nav_usuario');
        $this->load->view('turmas');
    }

}

