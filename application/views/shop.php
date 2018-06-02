<div class="container-fluid">
      	<div class="row">
        	<div class="col-lg-12 subheader">
            	<h1 class="text-center">Shop Gyftlist</h1>
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
                <p>Select Products to add in your registry Or Send Gift</p>
              </div>
            </form>
          </div>
        </div><!-- /.row -->
        <!-- Three columns of text below the carousel -->
        <div class="row">
        <div class="col-lg-3 mt-3">
        	
          <ul class="sidebar"> 
          <?php foreach ($cats as $key => $value): ?> 
          <li>
              <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="<?php echo $value->category_id; ?>">
              <label class="custom-control-label" for="<?php echo $value->category_id; ?>"><?php echo $value->category_name; ?></label>
              </div>
          </li>
          <?php endforeach ?>
          </ul>
            
        </div>
        <div class="col-lg-9 mt-3">
        
        <div class="row">

        <?php foreach ($result as $key => $value): ?>

          <a href="<?php echo $value->url; ?>" class="col-lg-3 product" target="_blank">
          	<?php if($value->single!=1){?>
              <img class="center-block" src="<?php echo base_url().'assets/product_images/'.$value->product_image; ?>" />
            <?php }else{?>
                <img class="center-block" src="<?php echo $value->product_image; ?>" />
            <?php }?>
              <h4><?php echo $value->product_name; ?></h4>
            <p class="retailer">By <?php echo $value->retailer; ?></p>
            <p class="description"><?php echo $value->product_detail; ?></p>
            <p class="price">Price: $<?php echo $value->product_price; ?></p>
          </a>

        <?php endforeach ?>
        
        </div>
        </div>
        </div>