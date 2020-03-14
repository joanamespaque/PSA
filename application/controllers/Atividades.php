<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Atividades extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        // turmas podem ser acessadas por professores e alunos, entretanto de formas diferentes!!!!!
        $this->load->library("controle_acesso");

    }
    public function atividades_professor(){
        $this->load->view('header');
        $this->load->view('atividades');
    }

    public function atividades_aluno(){
        $this->load->view('header');
        $this->load->view('atividades');

        if($this->session->userdata('tipo_user') == 'aluno') {
            $this->load->model('Turmas_model', 'turmas_model');
            $data['atividades'] = $this->atividade->listarAlunoTurma()->result();

            // $data['count'] = count($this->turmas_model->listarAlunoTurma()->result());

            // $data['counts'] = array("");

            $this->load->view('turmas', $data);
        } else {
            // model que pega ass turmas do turmas_professor
            // $this->load->view('turmas', dados);

        }
    }


}