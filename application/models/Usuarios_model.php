<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function logarUsuarios($email, $senha){
        // if ($dados!=NULL):
        $this->db->get("SELECT email, senha FROM professor where email=.$email. senha=.$senha.");
            // $this->load->view('view de sucesso no inserir');
            // redirect('cadastro_imovel');
        // endif;
    }
}