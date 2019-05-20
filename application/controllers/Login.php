<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function login_professor(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('login_professor');
    }
    public function login_aluno(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('login_aluno');
    }
}