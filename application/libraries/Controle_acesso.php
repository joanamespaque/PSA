<?php 

class Controle_acesso {
    public function controlar () {
        $CI =& get_instance();
        $logged = $CI->session->userdata('logged_in');
        if ($logged == FALSE) {
            redirect('inicio/inicio');
        } else if($logged == TRUE) {
            var_dump($_SESSION['tipo_user']);
            redirect('turmas/turmas_'.$_SESSION['tipo_user']);
        } 
    }
}