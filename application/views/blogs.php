<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <?php $this->load->view("inc/link");?>
  </head>

  <body>

    <?php $this->load->view("inc/nav");?>

    <main role="main" class="container">

      <div class="heading text-center">
        <h1>View Blogs</h1>
      </div>
      <section>
          <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                  <a href="<?php echo base_url();?>addblog" class="btn btn-primary" role="button" >Add Blog</a>
              </div>
          </div>
          <div class="col-md-12">
            <div id="view"></div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Blog Title</th>
                        <th scope="col">Blog Category</th>
                        <th scope="col">Blog Description</th>
                        <th scope="col">Blog Image</th>
                        <th scope="col">Blog Status</th>
                        <th scope="col">Blog Edit</th>
                        <th scope="col">Blog Delete</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <?php
                    foreach($blog_data as $key => $value){
                    ?>
                    <tr>
                        <th><?php echo $key+1;?></th>
                        <td><?php echo $value->btitle;?></td>
                        <td><?php echo $value->bcategory;?></td>
                        <td><?php echo substr($value->bdesc,0,50);?>...</td>
                        <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal<?php echo $value->bid;?>">
                            Show
                        </button>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal<?php echo $value->bid;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"><?php echo $value->btitle;?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img src="<?php echo base_url()."assets/uploads/".$value->bimg;?>" class="img-thumbnail">
                                </div>
                                </div>
                            </div>
                        </div>
                        </td>
                        <td>
                        <?php if($value->bstatus == 1){?>
                            <button type="button" class="btn btn-success" onclick="blogstatus(<?php echo $value->bid.',0';?>)">
                                Active
                            </button>
                        <?php }else{?>
                            <button type="button" class="btn btn-danger" onclick="blogstatus(<?php echo $value->bid.',1';?>)">
                                Deactive
                            </button>
                        <?php } ?>
                        </td>
                        <td>
                            <a role="button" class="btn btn-success" href="<?php echo base_url()."addblog/".$value->bid;?>">
                                Edit
                            </a>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger" onclick="blogdelete(<?php echo $value->bid?>)">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            <div class="col-md-12 col-12 d-flex justify-content-between">
              <a class="btn btn-secondary <?php if($start/10==0){echo 'disabled';}?>" href="<?php if($start/10!=0){echo ceil($start/10);}else{echo "#";}?>">Preview</a>
              <a class="btn btn-secondary <?php if($last > count($blog_data)){echo 'disabled';}?>" href="<?php echo $start+10;?>">Next</a>
            </div>
          </div>
          </div>
      </section>
    </main><!-- /.container -->
    <?php $this->load->view("inc/footer");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php $this->load->view("inc/script")?>
  </body>
</html>
