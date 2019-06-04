<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

    public function logarUsuarios($email, $senha){
        // if ($dados!=NULL):
        // $this->db->get("SELECT email, senha FROM professor where email=.$email. senha=.$senha.");


        // $this->db->select('*');
        // $this->db->from('professor');
        // $this->db->where('email', $email);
        // $this->db->where('senha', $senha);
        // $query = $this->db->get();
        // return $query;
        // print_r($query->result());


        echo $email;
        echo $senha;
        // $this->load->view('view de sucesso no inserir');
        // redirect('cadastro_imovel');
        // endif;   
    }
}
