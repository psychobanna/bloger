<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    // dashboard
    public function index($page = '')
	{
        $this->checklogin();

        $table = 'blog';

        

        $cate = $this->session->category ;
        if(!empty($cate)){
            $where = array(
                'bstatus'=>1,
                'bcategory'=>$cate
            );
                
            
        }else{
            $where = array(
                'bstatus'=>1
            );
        }
        if($page == '' or $page == 1){
            $last = 4;
            $start = 0;
        }else{
            $start = $page;
            $last = 4;
        }

        $blogs = $this->query->get_data_start_last($table,$where,$start,$last);

		$this->load->view('home',array('blog_data'=>$blogs,'start'=>$start,'last'=>$last));
	}

    public function checklogin(){
        if(empty($this->session->user->uid)){
            redirect(base_url()."login");
        }
    }
}
