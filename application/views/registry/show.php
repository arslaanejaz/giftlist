<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/registry.css">
<div class="container-fluid">
    <div class="row profile">
        <div class="container">
            <?php foreach ($result as $key => $value): ?>
            <div class="row">
                <div class="col-lg-3 thumb">
                    <img src="<?php echo base_url() ?>assets/registry/<?php echo $value->thumb ?>" class="img-responsive" />
                </div>
                <div class="col-lg-9">
                    <h1><?php echo $value->description ?></h1>
                    <p class="type"><?php echo $value->registry_type ?></p>
                    <p class="date"><?php echo $value->registry_date ?></p>
                </div>
            </div>
            <?php endforeach; ?>    
        </div>
    </div>
      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      
    
      <div class="row">
        <div class="container">  

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-6 offset-3 mt-5">
              <div class="text-center mb-4">
                <h2>List of products you can gift</h2>
              </div>
          </div>
        </div>
        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->
          <?php if (isset($error)) : ?>
              <div class="col-md-12">
                  <div class="alert alert-danger" role="alert">
                      <?= $error ?>
                  </div>
              </div>
          <?php endif; ?>
        
        <div class="row">
          <?php if(isset($products)):?>
                  <?php foreach ($products as $key => $value): ?>
                  <div class="col-lg-3 product <?php echo $value->sold?'active':'' ?>">
                        <a href="<?php echo $value->link ?>" target="_black"><img class="center-block" width="150" src="<?php echo $value->image ?>" /></a>    
                        <h4><?php echo $value->title ?></h4>
                        <p class="price"><?php echo $value->price ?></p>
                    </div>
                  <?php endforeach; ?>
          <?php endif?>
        </div>

</div>