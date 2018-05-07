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
        
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Partner Name" required autofocus>
                <label for="inputEmail">  </label>
              </div>
            </form>
          </div>
        </div><!-- /.row -->
        <!-- Three columns of text below the carousel -->
        <div class="row">
        <div class="col-lg-12 mt-3">
        
        <div class="row">

        <?php foreach ($partners as $key => $value): ?>

          <div class="col-lg-4 product">
          	<img class="center-block" src="<?php echo base_url().'assets/partners/'.$value->image; ?>" />
            <h4><a href="<?php echo $value->url; ?>" target="_blank"><?php echo $value->title; ?></a></h4>
            <p class="price">$<?php echo $value->description; ?></p>
          </div>

        <?php endforeach ?>
        
        </div>
        </div>
        </div>