<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    // Login
    public function index(){
        $this->checklogin();
        $this->load->view("register");
    }

    public function checklogin(){
        if(!empty($this->session->user->uid)){
            redirect(base_url()."home");
        }
    }
}