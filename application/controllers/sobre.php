<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sobre extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function sobre(){
        $this->load->view('header');
        $this->load->view('sobre');
    }
}