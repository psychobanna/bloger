<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
    // dashboard
    public function index()
	{
        

        $email_cookie = array(
            'name'=>'email',
            'value'=>$this->session->user->uemail,
            'expire'=>60,
            'secure'=>true
        );
        $password_cookie = array(
            'name'=>'password',
            'value'=>$this->session->password,
            'expire'=>60,
            'secure'=>true
        );
        
        $this->input->set_cookie($email_cookie);
        $this->input->set_cookie($password_cookie);
        $this->session->user = '';
        $this->session->password = '';
        $this->session->category = '' ;
        redirect(base_url()."login");
	}

}
