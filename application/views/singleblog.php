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
        <h1>Single Blog</h1>
      </div>
      <section>
      <div class="col-12 col-md-12 col-xs-12 mx-auto">
        <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
          <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
            <div class="my-3 p-3">
              <h2 class="display-5"><?php echo nl2br($data_result->btitle);?></h2>
              <p class="lead text-left"><b>Author</b> :
                <?php 
                          
                  $table = 'user';
                  // [email] [password] [rem] [action]
                  $where = array(
                          'uid'=> $data_result->uid
                      );
                  $data_uresult = $this->query->get_single_row($table,$where);
                  print_r($data_uresult[0]->uname);
                ?>
                <b>Publish Date :</b> <?php echo $data_result->bcreated;?>
              </p>

            </div>
            <div class="bg-light border border-secondary box-shadow mx-auto" style="border-radius: 21px 21px 0 0;">
              <img src="<?php echo base_url()."assets/uploads/".$data_result->bimg;?>" class="img-fluid">
            </div>
            <div class="my-3 p-3">
              <p class="lead text-left"><?php echo nl2br($data_result->bdesc);?></p>
            </div>
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
