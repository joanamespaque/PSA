<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    // public function __construct(){
    //     parent::__construct();
    // }
    public function login_professor(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('login_professor');
        // $this->autenticar();
    }
    public function login_aluno(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('login_aluno');
    }

    public function index() {
        // $tipo = $_GET['tipo'];
        // $this->load->view('header');
        // // $this->load->view($tipo);
        // $this->load->view('login_aluno');

        // if(isset($professor)) {
        //     print_r($professor);
        // }
    }

    // public function autenticar() {
    //     $this->load->model("usuarios_model");
    //     $email = $this->input->post("email");
    //     $senha = $this->input->post("senha");
    //     $usuario = $this->usuarios_model->logarUsuarios($email, $senha);
    //     if($usuario) {
    //         $this->session->set_userdata('Usuario logado', $usuario);
    //         $this->session->set_flashdata('success', "Logado com sucesso");
    //         print_r($usuario);
    //     } else {
    //         $this->session->set_flashdata('danger', "Usuário ou senha inválidos");
    //     }

    // }
}