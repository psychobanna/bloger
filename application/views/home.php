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
        <h1>Welcome</h1>
      </div>
      <section>
        <?php //print_r($blog_data)?>

        <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
          <div class="col-md-2">
          <select class="custom-select" onchange="searchcategory(this.value)">
          <option value="">Select Category</option>
          <?php
              $table = 'blog_category';
              $blog_d = $this->query->get_data($table);
              foreach($blog_d as $key => $value) {
              ?>
                  <option value="<?php echo $value->ctitle;?>"><?php echo $value->ctitle;?></option>
                  <?php
                  }              
              ?>
          </select>
          </div>
            <?php
              foreach ($blog_data as $key => $value) {
                # code...
                // print_r($value);
            ?>
            <div class="col-md-12 mb-2">
              <div class="card mb-12 box-shadow">
                <img class="card-img-top" src="<?php echo base_url();?>assets/uploads/<?php echo $value->bimg;?>" data-holder-rendered="true">
                <div class="card-body">
                  <h2 class="card-text"><?php echo $value->btitle;?></h2>
                  <h4 class="card-text">Category: <?php echo $value->bcategory;?></h4>
                  <p class="card-text"><?php echo substr($value->bdesc,0,180);?>...</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        <a href="<?php echo base_url();?>singleblog/<?php echo $value->bid;?>" class="btn btn-sm btn-outline-secondary">View</a>
                      <?php if($this->session->user->urole == 'author' and $this->session->user->uid == $value->uid ){?>
                        <a href="<?php echo base_url();?>addblog/<?php echo $value->bid;?>" type="button" class="btn btn-sm btn-outline-secondary">Edit</a>
                      <?php } ?>
                    </div>
                    <small class="text-muted"><?php echo $value->bcreated;?></small>
                  </div>
                </div>
              </div>
            </div>
            <?php
              }
            ?>
            <div class="col-md-12 col-12 d-flex justify-content-between">
              <a class="btn btn-secondary <?php if($start/4==0){echo 'disabled';}?>" href="<?php if($start/4!=0){echo ceil($start/4);}else{echo "#";}?>">Preview</a>
              <a class="btn btn-secondary <?php if($last > count($blog_data)){echo 'disabled';}?>" href="<?php echo $start+4;?>">Next</a>
            </div>
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