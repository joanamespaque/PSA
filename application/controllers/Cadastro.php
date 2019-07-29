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
        // $this->load->view('header');
        // $this->load->view('nav_inicial');
        // $this->load->view('cadastro_aluno');

        $this->load->library('session');
		if($this->session->userdata('username')){
            redirect('turmas');
            // redirect('turmas/turmas_aluno');
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

            $username = $_POST['username'];
            $email = $_POST['email'];
            $this->load->model('Professor_model', 'professor_model');
            $professor = $this->professor_model->buscarUserExistente($email,$username)->result();

            $this->form_validation->set_rules('senha', 'Senha', 'required');
            $this->form_validation->set_rules('verificaSenha', 'Verifica Senha', 'matches[senha]|min_length[8]', array('matches' => 'O campo Senha não combina com o campo Verifica Senha', 'min_length' => 'Senha inválida, mínimo de dígitos: 8'));
            $this->load->helper('email');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[professor.email]', array('valid_email'=> 'O e-mail inserido é inválido', 'is_unique' => 'O e-mail inserido já existe'));

            if ($professor) {
                $this->form_validation->set_rules('username', 'Nome de usuário', 'is_unique[professor.username]', array('is_unique'=>'O nome de usuário inserido já existe'));
            }

            if ($this->form_validation->run() == FALSE ) {
                $this->session->set_flashdata('error', validation_errors());
                $this->load->view('header');
                $this->load->view('nav_inicial');
                $this->load->view('cadastro_professor');

            } else {
                // Validação do formulário correta!
                $dados['email'] = $_POST['email'];
                $dados['username'] = $_POST['username'];
                $dados['senha'] = $_POST['senha'];
                $dados['nome'] = $_POST['primeiroNome'];
                $dados['sobrenome'] = $_POST['sobrenome'];

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
                    // redirect('turmas/turmas_professor');
                    redirect('turmas');
// 
                } else {
                    $this->session->set_flashdata('error', 'Cadastro não pôde ser realizado por problema no servidor.');
                    redirect('cadastro/cadastro_professor');
                }
            }   


        //AQUI COMEÇA A VERIFICAÇÃO DE ALUNO
        } else if ($botao == 'aluno') {

            $username = $_POST['username'];
            $this->load->model('Aluno_model', 'aluno_model');
            $aluno = $this->aluno_model->buscarUserExistente($username)->result();

            $this->form_validation->set_rules('senha', 'Senha', 'required');
            $this->form_validation->set_rules('verificaSenha', 'Verifica Senha', 'matches[senha]|min_length[8]', array('matches' => 'O campo Senha não combina com o campo Verifica Senha', 'min_length' => 'Senha inválida, mínimo de dígitos: 8'));
            if ($aluno) {
                $this->form_validation->set_rules('username', 'Nome de usuário', 'is_unique[aluno.username]', array('is_unique'=>'O nome de usuário inserido já existe'));
            }
            
            if ($this->form_validation->run() == FALSE) {

                $this->session->set_flashdata('error', validation_errors());
                $this->load->view('header');
                $this->load->view('nav_inicial');
                $this->load->view('cadastro_aluno');

            } else {
                // Validação do formulário correta!
                $dados['nome'] = $_POST['primeiroNome'];
                $dados['sobrenome'] = $_POST['sobrenome'];
                $dados['senha'] = $_POST['senha'];
                $dados['username'] = $_POST['username'];

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
                    // redirect('turmas/turmas_aluno');
                    redirect('turmas');
//
                } else {
                    $this->session->set_flashdata('error', 'Cadastro não pôde ser realizado por problema no servidor.');
                    redirect('cadastro/cadastro_aluno');
                }
        }

        }

    }
}

?>
