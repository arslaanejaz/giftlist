<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Gyftlist</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
 
	  <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|PT+Sans" rel="stylesheet">   
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/carousel.css') ?>" rel="stylesheet">
  </head>
  <body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12&appId=2005502046380919&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>  
<header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <a class="navbar-brand" href="<?php echo site_url('welcome'); ?>">Gyftlist</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li><a class="p-2 text-dark" href="<?php echo site_url('welcome/find_registry'); ?>">FIND REGISTRY</a></li>
            <li><a class="p-2 text-dark" href="<?php echo site_url('welcome/shop'); ?>">SHOP GYFTLISTS</a></li>
            <li class="nav-item dropdown">
              <a class="p-2 text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                LEARN MORE
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo site_url('welcome/page'); ?>/about-gyftlist">About Gyftlist</a>
                <a class="dropdown-item" href="<?php echo site_url('welcome/page'); ?>/how-does-this-work">How does this work</a>
                <a class="dropdown-item" href="<?php echo site_url('welcome/page'); ?>/our-benefits">Our Benefits</a>
                <a class="dropdown-item" href="<?php echo site_url('welcome/partners'); ?>">Our Partners</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="p-2 text-dark dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                HELP CENTER
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo site_url('contact'); ?>">Contact Us</a>
                <a class="dropdown-item" href="<?php echo site_url('welcome/faq'); ?>">FAQ</a>
                <a class="dropdown-item" href="<?php echo site_url('welcome/page'); ?>/privacy-policy">Privacy Policy</a>
                <a class="dropdown-item" href="<?php echo site_url('welcome/page'); ?>/terms-conditions">Terms &amp; Condtions</a>
              </div>
            </li>
          </ul>
          <?php if($this->session->userdata('user_id')) { ?>
            <a class="btn btn-blue" href="<?php echo site_url('registry'); ?>">User Dashboard</a>
            <a href="<?php echo base_url() ?>index.php/user/" class="btn btn-blue">Profile</a>
            <a href="<?php echo base_url() ?>index.php/registry/myregistries" class="btn btn-blue">My Registries</a>
            <a class="btn btn-yellow" href="<?php echo site_url('user/logout'); ?>">Sign Out</a>
            <?php } else { ?>
            <a class="btn btn-blue" href="<?php echo site_url('user/register'); ?>">Sign up</a>
            <a class="btn btn-yellow" href="<?php echo site_url('user/login'); ?>">Sign in</a>
          <?php } ?>
        </div>
      </nav>
    </header>
<main role="main">


		
