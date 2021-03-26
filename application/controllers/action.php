<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class action extends CI_Controller {
    

    // Login
    public function index(){

        $data = $this->input->post();
        
        switch ($data['action']) {
            case 'login':
                # code...
                // print_r($data);
                $table = 'user';
                // [email] [password] [rem] [action]
                $where = array(
                        'uemail'=>$data['email'],
                        'upassword'=>md5($data['password'])
                    );
                $count = $this->query->get_row_count($table,$where);
                if($count == 1){
                    $data_result = $this->query->get_single_row($table,$where);
                    
                    $this->session->user = $data_result[0];
                    if(!empty($data['rem'])){
                        $this->session->password = $data['password'];
                    }
                    
                    echo "Welcome";
                }else{
                    echo "Username & Password is wrong";
                }
                    
                break;
            
            case 'register':
                # code...
                // print_r($data);
                // [user] [name] [email] [password]
                $table = 'user';
                $where = array('uemail' =>$data['email']);
                
                $count = $this->query->get_row_count($table,$where);
                if($count == 0){
                    $data_insert = array(
                        "urole"=>$data['user'],
                        "uname"=>$data['name'],
                        "uemail"=>$data['email'],
                        "upassword"=>md5($data['password'])
                    );
                    if($this->query->insert_data($table,$data_insert)){
                        echo "Thanks for registeration";
                    }else{
                        echo "something is wrong";
                    }
                }else{
                    echo "Email already exist";
                }

                break;
            case 'profile':
                $table = 'user';
                $where = array('uid' =>$this->session->user->uid);
                $query = array('uemail' =>$data['email'],'uname'=>$data['name']);
                
                
                if($this->query->update_data($table,$query,$where)){
                    echo "Profile Updated";
                }else{
                    echo "Email already exist";
                }
                break;
            case 'password':
                $table = 'user';
                $where = array('uid' =>$this->session->user->uid);  
                $query = array('upassword'=>md5($data['password']));    
                
                if($this->query->update_data($table,$query,$where)){
                    echo "Password Updated";
                }else{
                    echo "Something is wrong";
                }
                break;
        // Blogs
            case 'addblog':
                // print_r($data);

                $config['upload_path']          = 'assets/uploads/';
                $config['allowed_types']        = 'gif|jpg|png';

                $this->load->library('upload', $config);

                $this->upload->initialize($config);

                $where = array('ctitle' => $data['bcate']);

                $table = 'blog_category';

                $catecount = $this->query->get_row_count($table,$where);

                if($catecount == 0){
                    $table = 'blog_category';
                    $this->query->insert_data($table,$where);
                }

                
                if ( !$this->upload->do_upload('blogimg'))
                {
                    // print_r($data);
                        if(!empty($data['btitle']) && !empty($data['bcate'])){
                            $insert_data = array(
                                'uid'=>$this->session->user->uid,
                                'bcategory'=>$data['bcate'],
                                'btitle'=>$data['btitle'],
                                'bdesc'=>$data['bdesc']
                            );
                            $table="blog";
                                if(empty($data['bid'])){
                                    if($this->query->insert_data($table,$insert_data)){
                                        echo "Blog Uploaded";
                                    }else{
                                        echo "Something is weong";
                                    }
                                }else{
                                    $where = array(
                                        'bid'=>$data['bid']
                                    );
                                    
                                    if($this->query->update_data($table,$insert_data,$where)){
                                        echo "Blog Updated";
                                    }else{
                                        echo "Something is weong";
                                    }
                                }
                        }else{
                            echo $this->upload->display_errors();
                        }
                }
                else
                {                
                    $upload_data = $this->upload->data();
                    // `bid`, `uid`, `bcategory`, `btitle`, `bdesc`, `bimg`, `bcreated`, `bstatus`
                    $insert_data = array(
                        'uid'=>$this->session->user->uid,
                        'bcategory'=>$data['bcate'],
                        'btitle'=>$data['btitle'],
                        'bdesc'=>$data['bdesc'],
                        'bimg'=>$upload_data['file_name']
                    );
                    $table="blog";
                    if(empty($data['bid'])){
                        if($this->query->insert_data($table,$insert_data)){
                            echo "Blog Uploaded";
                        }else{
                            echo "Something is weong";
                        }
                    }else{
                        $where = array(
                            'bid'=>$data['bid']
                        );
                        
                        if($this->query->update_data($table,$insert_data,$where)){
                            echo "Blog Updated";
                        }else{
                            echo "Something is weong";
                        }
                    }
                }
                break;
            case 'blogdelete':

                $table = 'blog';
                $where = array('bid' =>$data['bid']);              
                
                if($this->query->delete_data($table,$where)){
                    echo "A blog Deleted";
                }else{
                    echo "Email already exist";
                }
                break;
            case 'blogstatus':

                $table = 'blog';
                $where = array('bid' =>$data['bid']);  
                $query = array('bstatus'=>$data['status']);    
                if($this->query->update_data($table,$query,$where)){
                    echo "Blog status Updated";
                }else{
                    echo "Email already exist";
                }
                break;
            case 'searchcategory':
                $this->session->category = $data['bcate'];
                echo "searchcategory";
                break;
                
            default:
                # code...
                break;
        }
    }
}