<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function login()
	{
        $this->load->view('login');
    }

    public function autenticar(){

        $usuario = $this->input->post("usuario");
        $senha = $this->input->post("senha");

        if ( ($usuario == "alba" && $senha=="12345") ||
             ($usuario == "maria" && $senha == "54321" )
        ){
            $this->session->set_userdata('usuario', $usuario);
            redirect('/');
        }else{
            $this->session->set_flashdata('msg', "Dados inválidos!");
            redirect('usuario/login');
        }
    }

    public function logoff(){
        $this->session->unset_userdata('usuario');
        redirect('usuario/login');
    }
}