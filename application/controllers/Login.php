<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');

    }
    public function login_professor(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('login_professor');
        // $this->autenticar();
    }
    public function login_aluno(){

        $this->load->library('session');
		if($this->session->userdata('username')){
            // redirect('imoveis/index');
            redirect('turmas/turmas_aluno');
		}
		else{
            // $this->load->view('login');
            $this->load->view('header');
            $this->load->view('nav_inicial');
            $this->load->view('login_aluno');
		}
    }

    public function autenticarAluno() {
        $this->load->model('Aluno_model', 'aluno_model');
        $dados['username'] = $_POST['username'];
        $dados['senha'] = $_POST['senha'];
        $usuario = $this->aluno_model->buscarUsuario($dados)->result();

        if(!empty($usuario)) {
            $newdata = array(
                'nome'  => $usuario[0]->nome,
                'sobrenome' => $usuario[0]->sobrenome,
                'username' => $usuario[0]->username,
                'tipo_user' => 'aluno',
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('turmas/turmas_aluno');

            // $this->session->set_userdata('Usuario logado', $usuario);
            // $this->session->set_flashdata('success', "Logado com sucesso");
            // print_r($newdata);
        } 
        else {
            $this->session->set_flashdata('error', "Usuário ou senha inválidos");
        }

    }

    // public function autenticarProfessor() {
    //     $this->load->model("usuarios_model");
    //     $email = $_POST['email'];
    //     $senha = $_POST['senha'];


    //     $this->usuarios_model->logarUsuarios($email, $senha);



    //     // if($usuario) {
    //     //     $this->session->set_userdata('Usuario logado', $usuario);
    //     //     $this->session->set_flashdata('success', "Logado com sucesso");
    //     //     print_r($usuario);
    //     // } else {
    //     //     $this->session->set_flashdata('danger', "Usuário ou senha inválidos");
    //     // }

    // }
}