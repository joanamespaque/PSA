<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cadastro extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function botoes_cadastro(){
        $this->load->view('header');
        $this->load->view('botoes_cadastro');
    }
    public function cadastro_professor(){
        $this->load->view('header');
        $this->load->view('cadastro_professor');
    }
    public function cadastro_aluno(){
        $this->load->view('header');
        $this->load->view('cadastro_aluno');
    }
}