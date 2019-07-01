<?php 

class Controle_acesso {

    public function controlar () {

        $CI =& get_instance();
        $user = $CI->session->userdata('username');
        if ($user == "") {
            redirect('login');
        } 

    }
}