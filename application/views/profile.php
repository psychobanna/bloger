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
        <h1>Profile</h1>
      </div>
      <section>
      <div class="col-12 col-md-6 col-xs-12 mx-auto">
        <form class="form-signin text-center" id="profile" method="post">
                <div id="view"></div>
                <div class="input-group mb-3">
                    <label for="inputEmail" class="sr-only">Name</label>
                    <input type="text" id="inputName" value="<?php echo $data_result->uname;?>" name="name" class="form-control col-12" placeholder="Name" required="" autofocus="">
                </div>
                <div class="input-group mb-3">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" value="<?php echo $data_result->uemail;?>" name="email" class="form-control col-12" placeholder="Email address" required="" autofocus="">
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Update</button>
        </form>
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
