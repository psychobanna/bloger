<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller {
    // dashboard
    public function index($last = '')
	{
        $this->checklogin();

        $table = 'blog';
        $where = array(
            'uid'=>$this->session->user->uid
        );
        $limit = 10;
        if($last == '' or $last == 1){
            $last = 0;
        }
        $data_blog = $this->query->get_data_start_last($table,$where,$last,$limit);

		$this->load->view('blogs',array("blog_data"=>$data_blog,'start'=>$last,'last'=>$limit));
	}

    public function checklogin(){
        if(empty($this->session->user->uid) && $this->session->user->urole == 'author'){
            redirect(base_url()."login");
        }
    }
}
