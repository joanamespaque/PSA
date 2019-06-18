<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Professor_model extends CI_Model { 

    public function cadastrar($dados=NULL) {
        if ($dados!=NULL) {
            $this->db->set($dados);
            $this->db->insert('professor');
            // VER UMA FORMA DE PEGAR ERRO DO POSTGRES CASO A INSERÇÃO DE DADOS DÊ ERRO
            return True;
        } else {
            return False;
        }
    }

    public function listar() {
        $this->db->select('nome, sobrenome, login, email');
        $this->db->from('professor');
        $result = $this->db->get();
        return $result;
    }

    public function buscarUsuario($login) {
        $this->db->select('*');
        $this->db->from('professor');
        $this->db->where("username='".$login['username']."' and senha='".$login['senha']."'");
        $result = $this->get();

        return $result;
    }

    public function buscarUserExistente($email, $username) {
        $this->db->select('id');
        $this->db->from('professor');
        $this->db->where("username='".$username."' or email='".$email."'");
        $result = $this->db->get();

        return $result;
    }
    
}