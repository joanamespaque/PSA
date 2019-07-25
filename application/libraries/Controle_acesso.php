<?php 

class Controle_acesso {

    public function controlar () {

        $CI =& get_instance();
        $logged = $CI->session->userdata('logged_in');
        if ($logged == FALSE) {
            redirect('login');
        } else return $logged;
    }
}