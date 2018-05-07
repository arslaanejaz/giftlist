<div class="container-fluid">
      	<div class="row">
        	<div class="col-lg-12 subheader">
            	<h1 class="text-center">Find a Registry</h1>
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
            <form class="form-signin" action="<?php echo base_url() ?>index.php/welcome/find_registry" method="post" enctype="multipart/form-data">
              <div class="text-center mb-4">
                <p>Your can search registries with first or last of bride or groom</p>
              </div>
              
              <div class="form-label-group">
                <input type="text" id="bgname" name="bgname" class="form-control" placeholder="Bride or groom name" required autofocus>
                <label for="bgname">  </label>
              </div>
            </form>
          </div>
        </div><!-- /.row -->


        
		

	  	<hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
        
        <div class="row">
        <?php foreach ($result as $key => $value): ?>
          
        
          <div class="col-lg-8 offset-2 registry">
          	<div class="row">
            	<div class="col-lg-2"><img src="<?php echo base_url() ?>assets/registry/<?php echo $value->thumb ?>" /></div>
                <div class="col-lg-7 info">
                	  <h3><?php echo $value->description ?></h3>
                    <p class="type"><?php echo $value->registry_type ?></p>
                    <p class="date"><?php echo $value->registry_date ?></p>
                </div>
                <div class="col-lg-3 action">
                	<a href="<?php echo site_url() ?>/registry/<?php echo $value->registry_url ?>" class="btn btn-blue">View</a>
                </div>
            </div>
          </div>


<?php endforeach ?>
      
</div>