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
        <h1>Reset Password</h1>
      </div>
      <section>
      <div class="col-12 col-md-6 col-xs-12 mx-auto">
        <form class="form-signin text-center" id="password" method="post">
                <div id="view"></div>
                <div class="input-group mb-3">
                    <label for="Password" class="sr-only">password</label>
                    <input type="text" id="password" name="password" class="form-control col-12" placeholder="Password" required="" autofocus="">
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
