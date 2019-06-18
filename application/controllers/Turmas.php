<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Turmas extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->library('session');

        // turmas podem ser acessadas por professores e alunos, entretanto de formas diferentes!!!!!
        $this->load->library("controle_acesso");

    }
    public function turmas_professor(){
        $this->load->view('header');
        $this->load->view('nav_professor');
        $this->load->view('turmas_professor');
    }


    public function turmas_aluno(){
        $this->controle_acesso->controlar();
        $this->load->view('header');
        $this->load->view('nav_professor');
        print_r("<h5 style='color: green;'>OI MEU PARÇA ALUNO! AQUI FICA A PÁGINA DAS SUAS TURMAS</h5>");
        // $this->load->view('turmas_professor');
    }
}