<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Turmas extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function turmas_professor(){
        $this->load->view('header');
        $this->load->view('nav_professor');
        $this->load->view('turmas_professor');
    }
}