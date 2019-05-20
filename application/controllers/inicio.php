<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inicio extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function inicio (){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('pagina_inicial');
    }
    public function inicio2(){
        $this->load->view('header');
        $this->load->view('nav_inicial');
        $this->load->view('pagina_inicial2');
    }
}