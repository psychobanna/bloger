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
    <div class="heading text-center">
        <h1>Add Blog</h1>
    </div>
    <main role="main" class="container">
    <div class="col-12 col-md-6 col-xs-12 mx-auto">
        <div id="view"></div>
        <!-- <form class="form-signin text-center" id="blog" method="post" enctype="multipart/form-data"> -->
        <form class="form-signin text-center" id="blog" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <input type="hidden" name="action" value="addblog"/>
                <input type="hidden" name="bid" value="<?php if(!empty($data)){echo $data->bid;}?>"/>
                <div class="input-group mb-3">
                    <label for="btitle" class="sr-only">Blog Title</label>
                    <input type="text" id="btitle" name="btitle" value="<?php if(!empty($data)){echo $data->btitle;}?>" class="form-control col-12" placeholder="Blog Title" required="" autofocus="">
                </div>
                <div class="input-group mb-3">
                    <label for="bdesc" class="sr-only">Blog Description</label>
                    <textarea id="bdesc" name="bdesc" class="form-control col-12" placeholder="Blog Description" rows="5" required="" autofocus=""><?php if(!empty($data)){echo $data->bdesc;}?></textarea>
                </div>
                <div class="input-group mb-3">
                    <label for="bimg" class="sr-only">Blog Image</label>
                    <input type="file" onchange="readURL(this);" id="bimg" name="blogimg" class="form-control col-12" placeholder="Blog Title" autofocus="" accept="image/gif, image/jpeg, image/png">
                </div>
                    <img src="<?php  if(!empty($data)){echo base_url()."assets/uploads/".$data->bimg;}?>" id="showimg" alt="" class="img-thumbnail input-group mb-3">
                <div class="input-group mb-3">
                    <label for="bcate" class="sr-only">Blog Category</label>
                    <input list="bcates" name="bcate" id="bcate" class="form-control col-12" placeholder="Blog Category" value="<?php if(!empty($data)){echo $data->bcategory;}?>">
                    <datalist id="bcates">
                        <?php
                            $table = 'blog_category';
                            $blog_data = $this->query->get_data($table);
                            foreach ($blog_data as $key => $value) {
                                # code...
                        ?>
                        <option value="<?php echo $value->ctitle;?>"></option>
                        <?php
                            }
                        ?>
                    </datalist>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Add Blog</button>
        </form>
    </div>

    </main><!-- /.container -->
    <?php $this->load->view("inc/footer");?>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   <?php $this->load->view("inc/script")?>
  </body>
</html>
