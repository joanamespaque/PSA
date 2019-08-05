<?php 

class Controle_acesso {

 public function controlar(){
        $CI =& get_instance();

    if($CI->session->userdata('logged_in') !== TRUE){
        redirect('inicio/inicio');
    }   else {
            redirect('turmas/turmas_'.$_SESSION['tipo_user']);
        }
    }

}

