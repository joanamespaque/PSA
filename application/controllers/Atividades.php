<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Atividades extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        // turmas podem ser acessadas por professores e alunos, entretanto de formas diferentes!!!!!
        $this->load->library("controle_acesso");

    }
    public function atividades_professor(){
        $this->load->view('header');
        $this->load->view('nav_usuario');
        $this->load->view('atividades');
    }


}