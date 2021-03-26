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
        <h1>Welcome To My Bloger</h1>
    </div>
    <main role="main" class="container">

    <div class="col-12 col-md-6 col-xs-12 mx-auto">
        <form class="form-signin text-center" id="login" method="post">
                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                <div id="view"></div>
                <div class="input-group mb-3">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" name="email" value="<?php echo $this->input->cookie('email')?>" class="form-control col-12" placeholder="Email address" required="" autofocus="">
                </div>
                <div class="input-group mb-3">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="password" value="<?php echo $this->input->cookie('password')?>" class="form-control" placeholder="Password" required="">
                </div>
                <div class="checkbox mb-3">
                    <label>
                    <input type="checkbox" value="1" name="rem"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <a href="<?php echo base_url();?>register" class="btn btn-lg btn-primary btn-block" role="button">Create Account</a>
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
