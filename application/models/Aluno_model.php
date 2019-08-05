<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aluno_model extends CI_Model {

    public function cadastrar($dados=NULL){
        
        if ($dados != NULL) {
            $this->db->set($dados);
            $this->db->insert('aluno');
            // ver uma forma de pegar erro do postgres caso a inserção de dados dê erro
            return true;

        } else {
            return false;
        }
    
    }

    public function listar() {

        $this->db->select('nome, sobrenome, login');
        $this->db->from('aluno');
        $result = $this->db->get();
        
        return $result;
    
    }

    public function buscarUsuario($login) {

        $this->db->select('*');
        $this->db->from('aluno');
        $this->db->where("username = '".$login['username']."' and senha='".$login['senha']."'");
        $result = $this->db->get();

        return $result;
        
    }


    public function buscarUserExistente($username) {
        $this->db->select('id');
        $this->db->from('aluno');
        $this->db->where("username='".$username."'");
        $result = $this->db->get();

        return $result;
    }
}
