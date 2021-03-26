<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>profile">Profile</a>
          </li>
          <?php 
            if($this->session->user->urole == 'author'){
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>blogs">Blogs</a>
          </li>
          <?php
            }
          ?>
        </ul>
        <div class="float-md-right">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>password">Password</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url();?>logout">Logout</a>
          </li>
        </ul>
        </div>
      </div>
    </nav>