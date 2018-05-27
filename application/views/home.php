<div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <?php $i = 0; ?>
        <?php foreach ($result as $key => $value): ?>  
          <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="<?php if($i == 0) { echo 'active'; } ?>"></li>
        <?php $i ++; ?>
        <?php endforeach ?>
        </ol>
        <div class="carousel-inner">
          <?php $i = 0; ?>
        <?php foreach ($result as $key => $value): ?>
          <div class="carousel-item item <?php if($i == 0) { echo 'active'; } ?>">
            <img class="first-slide" src="<?php echo base_url() ?>assets/slides/<?php echo $value->slide_image ?>" alt="First slide">
            <div class="container">
              <div class="carousel-caption">
                <h1><?php echo $value->slide_heading ?></h1>
                <p><?php echo $value->link_one ?></p>
                <p><a class="btn btn-lg btn-yellow" href="<?php echo site_url('welcome/find_registry') ?>" role="button">Find a Registry</a><a class="btn btn-lg btn-yellow" href="<?php if($this->session->userdata('user_id')) { echo site_url('registry'); } else { echo site_url('user/register'); } ?>" role="button">Create Registry</a></p>
              </div>
            </div>
          </div>
          <?php $i ++; ?>
        <?php endforeach ?>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="section-head">
          	<h1>Give &amp; Receive the Perfect Gift</h1>
            <h3>Organize your gift giving &amp; receiving with these great features</h3>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url() ?>assets/images/gifts.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url() ?>assets/images/world.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url() ?>assets/images/dollar.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url() ?>assets/images/import.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url() ?>assets/images/cart.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="<?php echo base_url() ?>assets/images/mail.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Heading</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </div><!-- /.col-lg-4 -->
          <!--<div class="section-bottom">
          	<a href="#" class="btn btn-yellow">View More</a>
          </div>-->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->
	
        <hr class="featurette-divider">
		
        <div class="row">
          <div class="section-head">
          	<h1>How It Works</h1>
            <h2>Organize your gift giving &amp; receiving with these great features</h2>
          </div>
          <div class="col-lg-4">
            <img src="<?php echo base_url() ?>assets/images/plane.png" alt="Generic placeholder image" width="70" height="70">
            <h4>Create as many lists you like in one place</h4>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="<?php echo base_url() ?>assets/images/diamond.png" alt="Generic placeholder image" width="70" height="70">
            <h4>Add items frm any website to your Gyft Hero list</h4>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="<?php echo base_url() ?>assets/images/flash.png" alt="Generic placeholder image" width="70" height="70">
            <h4>Share Your Lists</h4>
          </div><!-- /.col-lg-4 -->
		</div>
        <hr class="featurette-divider">
        
        <div class="row">
          <div class="section-head">
          	<h1>Never be limited to one store</h1>
            <h3>Add gifts from any store including these great retailers</h3>
          </div>
          <div class="col-lg-12">
          	<img src="<?php echo base_url() ?>assets/images/brands.png" class="img-fluid" />
          </div>
        </div>