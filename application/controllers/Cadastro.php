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
    public function cadastro_professor(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('cadastro_professor');
    }
    public function cadastro_aluno(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('cadastro_aluno');
    }

    public function enviar () {
        // $this->load->library('form_validation');
        $botao = $_POST['envia_cadastro'];
        if ($botao == 'professor') {

            $this->form_validation->set_rules('senha', 'Senha', 'required');
            $this->form_validation->set_rules('verificaSenha', 'Verifica Senha', 'matches[senha]|min_length[8]', array('matches' => 'O campo Senha não combina com o campo Verifica Senha', 'min_length' => 'Senha inválida, mínimo de dígitos: 8'));

            if ($this->form_validation->run() == FALSE) {
            // if ($this->form_validation->run('register_prof') == FALSE) {
                $erros = array('mensagens' => validation_errors());
                $this->load->view('cadastro_professor', $erros);
            } else {
                // Validação do formulário correta!
                $dados['email'] = $_POST['email'];
                $dados['username'] = $_POST['username'];
                $dados['senha'] = $_POST['senha'];
                $dados['nome'] = $_POST['primeiroNome'];
                $dados['sobrenome'] = $_POST['sobrenome'];
                $this->load->model('Professor_model', 'professor_model');
                
                $inserir = $this->professor_model->cadastrar($dados);
                // if ($inserir == True) {
                //     o carinha foi cadastrado
                //     retorna pagina de sucesso
                // } else {
                //     o carinha não foi cadastrado
                // }
          }

        } else if ($botao == 'aluno') {
                        
            $this->form_validation->set_rules('senha', 'Senha', 'required');
            $this->form_validation->set_rules('verificaSenha', 'Verifica Senha', 'matches[senha]|min_length[8]', array('matches' => 'O campo Senha não combina com o campo Verifica Senha', 'min_length' => 'Senha inválida, mínimo de dígitos: 8'));

            if ($this->form_validation->run() == FALSE) {
            // if ($this->form_validation->run('register_prof') == FALSE) {
                $erros = array('mensagens' => validation_errors());
                $this->load->view('cadastro_professor', $erros);
            } else {
                // Validação do formulário correta!
                $dados['nome'] = $_POST['primeiroNome'];
                $dados['sobrenome'] = $_POST['sobrenome'];
                $dados['senha'] = $_POST['senha'];
                $dados['username'] = $_POST['username'];
                $this->load->model('Aluno_model', 'aluno_model');
                $inserir = $this->aluno_model->cadastrar($dados);
          }

        }
     
    }
}

     