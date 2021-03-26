<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    

    // Login
    public function index(){
        $this->checklogin();
        $this->load->view("login");
    }

    public function checklogin(){
        if(!empty($this->session->user->uid)){
            redirect(base_url()."home");
        }
    }
}