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

    <div class="heading text-center">
        <h1>Register</h1>
    </div>

    <main role="main" class="container">


    <div class="col-12 col-md-6 col-xs-12 mx-auto">
        <form class="form-signin text-center" id="register" method="post">
                <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
                <div id="view"></div>
                <div class="input-group mb-3 d-flex align-items-center radio-group">
                    <input type="radio" id="guest" name="user" class="" value="guest">
                    <label class="" for="guest">Register As guest</label>
                </div>
                <div class="input-group mb-3 d-flex align-items-center radio-group">
                    <input type="radio" id="author" name="user" class="" value="author">
                    <label class="" for="author">Register As Author</label>
                </div>
                <div class="input-group mb-3">
                    <label for="inputEmail" class="sr-only">Name</label>
                    <input type="text" id="inputName" name="name" class="form-control col-12" placeholder="Name" required="" autofocus="">
                </div>
                <div class="input-group mb-3">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control col-12" placeholder="Email address" required="" autofocus="">
                </div>
                <div class="input-group mb-3">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
                <a href="<?php echo base_url();?>login" class="btn btn-lg btn-primary btn-block" role="button">Have you an account?</a>
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
