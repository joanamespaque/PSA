<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cadastro extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function botoes_cadastro(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('botoes_cadastro');
    }
    public function cadastro(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('cadastro');
    }
}