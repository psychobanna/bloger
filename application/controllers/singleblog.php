<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Singleblog extends CI_Controller {
    // dashboard
    public function index($bid = '')
	{
        $this->checklogin();
        $table = 'blog';
        // [email] [password] [rem] [action]
        if($bid == ''){
            redirect(base_url());
        }
        $where = array(
                'bid'=>$bid
            );
        $data_result = $this->query->get_single_row($table,$where);
		$this->load->view('singleblog',["data_result"=>$data_result[0]]);
	}

    public function checklogin(){
        if(empty($this->session->user->uid)){
            redirect(base_url()."login");
        }
    }
}
