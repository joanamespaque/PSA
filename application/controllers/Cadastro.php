<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cadastro extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');

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
        // $this->load->view('header');
        // $this->load->view('nav_inicial');
        // $this->load->view('cadastro_aluno');

        $this->load->library('session');
		if($this->session->userdata('username')){
            redirect('turmas/turmas_aluno');
		}
		else{
            $this->load->view('header');
            $this->load->view('nav_inicial');
            $this->load->view('cadastro_aluno');
		}
    }
    public function cadastro_turma(){
        $this->load->view('header');
        $this->load->view('nav_usuario');
        $this->load->view('cadastro_turma');
    }

    public function enviar() {
        $botao = $_POST['envia_cadastro'];
        if ($botao == 'professor') {
            $this->form_validation->set_rules('senha', 'Senha', 'required');
            $this->form_validation->set_rules('verificaSenha', 'Verifica Senha', 'matches[senha]|min_length[8]', array('matches' => 'O campo Senha não combina com o campo Verifica Senha', 'min_length' => 'Senha inválida, mínimo de dígitos: 8'));

            if ($this->form_validation->run() == FALSE) {
            // if ($this->form_validation->run('register_prof') == FALSE) {
                $this->session->set_flashdata('error', validation_errors());
                redirect('cadastro/cadastro_professor');

            } else {
                $this->load->model('Professor_model', 'professor_model');
                // Validação do formulário correta!
                $dados['email'] = $_POST['email'];
                $dados['username'] = $_POST['username'];
                $dados['senha'] = $_POST['senha'];
                $dados['nome'] = $_POST['primeiroNome'];
                $dados['sobrenome'] = $_POST['sobrenome'];
                $this->load->model('Professor_model', 'professor_model');
                if (empty($this->professor_model->buscarUserExistente($dados['email'], $dados['username'])->result())) {
                    $inserir = $this->professor_model->cadastrar($dados);
                    if ($inserir == True) {
//                
                        $usuario = $this->professor_model->buscarUsuario($dados)->result();

                        $newdata = array(
                            'nome'  => $usuario[0]->nome,
                            'sobrenome' => $usuario[0]->sobrenome,
                            'username' => $usuario[0]->username,
                            'email' => $usuario[0]->email,
                            'tipo_user' => 'professor',
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata($newdata);
                        redirect('turmas/turmas_professor');
// 
                    } else {
                        $this->session->set_flashdata('error', 'Cadastro não pôde ser realizado.');
                        redirect('cadastro/cadastro_professor');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Cadastro não pôde ser realizado: nome de usuário e/ou email já existe(m).');
                    redirect('cadastro/cadastro_professor');
                }
            }   
            //AQUI COMEÇA O ALUNO
        } else if ($botao == 'aluno') {
            $this->form_validation->set_rules('senha', 'Senha', 'required');
            $this->form_validation->set_rules('verificaSenha', 'Verifica Senha', 'matches[senha]|min_length[8]', array('matches' => 'O campo Senha não combina com o campo Verifica Senha', 'min_length' => 'Senha inválida, mínimo de dígitos: 8'));

            if ($this->form_validation->run() == FALSE) {
            // if ($this->form_validation->run('register_prof') == FALSE) {
                $this->session->set_flashdata('error', validation_errors());
                redirect('cadastro/cadastro_aluno');

            } else {
                // Validação do formulário correta!
                $dados['nome'] = $_POST['primeiroNome'];
                $dados['sobrenome'] = $_POST['sobrenome'];
                $dados['senha'] = $_POST['senha'];
                $dados['username'] = $_POST['username'];
                $this->load->model('Aluno_model', 'aluno_model');
                // $inserir = $this->aluno_model->cadastrar($dados);

                if(empty($this->aluno_model->buscarUserExistente($dados['username'])->result())){
                    $inserir = $this->aluno_model->cadastrar($dados);
                    if ($inserir == True) {
                        //                
                        $usuario = $this->aluno_model->buscarUsuario($dados)->result();

                        $newdata = array(
                            'nome'  => $usuario[0]->nome,
                            'sobrenome' => $usuario[0]->sobrenome,
                            'username' => $usuario[0]->username,
                            'tipo_user' => 'aluno',
                            'logged_in' => TRUE
                        );
                        $this->session->set_userdata($newdata);
                        redirect('turmas/turmas_aluno');
//
                    } else {
                        $this->session->set_flashdata('error', 'Cadastro não pôde ser realizado.');
                        redirect('cadastro/cadastro_aluno');
                    }
                } else {
                    $this->session->set_flashdata('error', 'Cadastro não pôde ser realizado: nome de usuário já existe.');
                    redirect('cadastro/cadastro_aluno');
                }
          }

        }
     
    }
}

?>