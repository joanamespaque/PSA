<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inicio extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function inicio(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('pagina_inicial');
    }
    public function inicio2(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('pagina_inicial2');
    }

    public function verifica_acao() {
        $tipo = $_POST['tipo'];
        switch($tipo) {
            case 'cadastro_professor':
            redirect('cadastro/cadastro_professor');
                // $this->load->view('header');
                // $this->load->view('nav_inicial');
                // $this->load->view('cadastro_professor');
            break;
            case 'cadastro_aluno':
                redirect('cadastro/cadastro_aluno');
                // $this->load->view('header');
                // $this->load->view('nav_inicial');
                // $this->load->view('cadastro');
            break;
            case 'login_professor':
                redirect('login/login_professor');
                // $this->load->view('header');
                // $this->load->view('nav_inicial');
                // $this->load->view('login_professor');
            break;
            case 'login_aluno':
                redirect('login/login_aluno');
                // $this->load->view('header');
                // $this->load->view('nav_inicial');
                // $this->load->view('login_aluno');

            break;
        }
        
        
        
        
        // $this->load->view('header');
        // $this->load->view($tipo);
        // $this->load->view('login_aluno');

    }

    // public function sapatos($tipo, $id){
    //     echo $tipo;
    //     echo $id;
    // }
}
