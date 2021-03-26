<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Addblog extends CI_Controller {
    // dashboard
    public function index($bid = '')
	{
        $this->checklogin();

        if(!empty($bid)){
            $table = 'blog';
            $where = array(
                'bid'=>$bid
            );

            $data_blog = $this->query->get_single_row($table,$where);
            // print_r($data_blog);
            
            $this->load->view('addblog',['data'=> $data_blog[0]]);
        }else{
            $this->load->view('addblog');
        }
	}

    public function checklogin(){
        if(empty($this->session->user->uid) && $this->session->user->urole == 'author'){
            redirect(base_url()."login");
        }
    }
}