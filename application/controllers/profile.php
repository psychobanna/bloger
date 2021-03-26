<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
    // dashboard
    public function index()
	{
        $this->checklogin();
        $table = 'user';
        // [email] [password] [rem] [action]
        $where = array(
                'uid'=> $this->session->user->uid
            );
        $data_result = $this->query->get_single_row($table,$where);
		$this->load->view('profile',["data_result"=>$data_result[0]]);
	}

    public function checklogin(){
        if(empty($this->session->user->uid)){
            redirect(base_url()."login");
        }
    }
}
