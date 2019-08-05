<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sobre extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library("controle_acesso"); 
    }
    public function sobre(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('sobre');
    }
}
