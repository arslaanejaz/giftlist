<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/registry.css">
<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 subheader">
            <h1 class="text-center">My Registries</h1>
        </div>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-6 offset-3 mt-5">
              <div class="text-center mb-4">
                <h1>Click to View</h1>
              </div>
          </div>
        </div>
        <!-- /END THE FEATURETTES -->
        <div class="row">
        <?php foreach ($result as $key => $value): ?>
          
        <?php if($this->session->userdata('user_id') == $value->fk_user_id): ?>
          <div class="col-lg-8 offset-2 registry">
          	<div class="row">
            	<div class="col-lg-2"><img src="<?php echo base_url() ?>assets/registry/<?php echo $value->thumb ?>" /></div>
                <div class="col-lg-7 info">
                	  <h3><?php echo $value->description ?></h3>
                    <p class="type"><?php echo $value->registry_type ?></p>
                    <p class="date"><?php echo $value->registry_date ?></p>
                    <p style="font-size:11px;">Share URL: <?php echo site_url().'/registry/'.$value->registry_url; ?></p>
                </div>
                <div class="col-lg-3 action">
                	<a href="<?php echo site_url("registry/show/$value->registry_id") ?>" class="btn btn-blue">View</a>
                </div>
            </div>
          </div>


<?php endif; endforeach; ?>
      
</div>

</div>
