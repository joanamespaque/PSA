<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Turmas_model extends CI_Model { 
    
    // LISTAR TODAS AS TURMAS
    public function listar() {
        $this->db->select('nome');
        $this->db->from('turma');
        $result = $this->db->get();
    }
    // LISTAR OS ALUNOS DA TURMA
    public function listarAlunoTurma() {
        $this->db->select('turma.id, turma.nome, turma.idprofessor, count(alunoturma.idaluno)' );
        $this->db->from('turma');
        $this->db->join('alunoturma', 'turma.id = alunoturma.idturma');
        $this->db->join('aluno', 'alunoturma.idaluno = aluno.id');
        $this->db->group_by('turma.id');
        // $this->db->where('turma.id', $valor);        BUSCA COM ID 
        $result = $this->db->get();

        return $result;
    }
    // PROFESSOR CADASTRA UMA TURMA 
    public function cadastroTurma($dados=NULL) {
        if ($dados!=NULL) {
            $this->db->set($dados);
            $this->db->insert('turma');

            return True;
        } else {
            return False;
        }
    }
    // PROFESSOR ADICIONA ALUNOS À TURMA 
    public function cadastroAlunoTurma($dados=NULL) {
        if ($dados!=NULL) {
            $this->db->set($dados);
            $this->db->insert('alunoturma');
            
            return True;
        } else {
            return False;
        }
    }
    
}