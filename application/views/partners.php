<div class="container-fluid">
      	<div class="row">
        	<div class="col-lg-12 subheader">
            	<h1 class="text-center">Our Partners</h1>
            </div>
        </div>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
		<!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-6 offset-3 mt-3">
          	 <form class="form-signin">
              <div class="text-center mb-4">
                <p>Our partners description text</p>
              </div>
        
              
            </form>
          </div>
        </div><!-- /.row -->
        <!-- Three columns of text below the carousel -->
        <div class="row">
        <div class="col-lg-12 mt-3">
        
        <div class="row">

        <?php foreach ($partners as $key => $value): ?>

          <div class="col-lg-2 product partner">
            <a href="<?php echo $value->url; ?>" target="_blank"><img class="center-block" src="<?php echo base_url().'assets/partners/'.$value->image; ?>" /></a>
            <h4><?php echo $value->title; ?></h4>
            <p class="description"><?php echo $value->description; ?></p>
            <a href="<?php echo $value->url; ?>" class="btn btn-blue" target="_blank">Shop Here</a>
          </div>

        <?php endforeach ?>
        
        </div>
        </div>
        </div>