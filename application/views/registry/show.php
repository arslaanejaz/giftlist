<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/registry.css">
<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 subheader">
            <h1 class="text-center">My Gyftlist Dashboard</h1>
        </div>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-6 offset-3 mt-3">
              <div class="text-center mb-4">
                <p>What will you like to do</p>
              </div>
          </div>
          <div class="col-lg-6 offset-3 mt-3">
              <!-- Modal -->
              <div class="row">
              <div class="col-md-4 text-center"><a href="<?php echo base_url('registry') ?>" class="btn btn-blue" data-modal="modal-name">Registry</a> </div>
              <div class="col-md-4 text-center"><a href="<?php echo base_url() ?>index.php/user/" class="btn btn-yellow">Profile</a></div>
              <div class="col-md-4 text-center"><a href="<?php echo base_url() ?>index.php/welcome/shop/" class="btn btn-blue" data-modal="modal-name">Shop Gift!</a></div> 
              </div>
              <!-- Trigger Modal. -->
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
        <?php foreach ($result as $key => $value): ?>
          
        <?php if($this->session->userdata('user_id') == $value->fk_user_id): ?>
          <div class="col-lg-9 offset-1">
          	<div class="row">
            	<div class="col-lg-3"><img width="150" src="<?php echo base_url() ?>assets/registry/<?php echo $value->thumb ?>" /></div>
                <div class="col-lg-6 info">
                	  <h3><?php echo $value->description ?></h3>
                    <p class="type"><?php echo $value->registry_type ?></p>
                    <p class="date"><?php echo $value->registry_date ?></p>
                    <p style="font-size:11px;">Share URL: <?php echo site_url().'/registry/'.$value->registry_url; ?></p>
                </div>
                <div class="col-lg-3">
                    <?= form_open("import/amazon/$value->registry_id") ?>
<!--                    <form action="--><?php //echo base_url("import/amazon/$value->registry_id") ?><!--" method="post"  enctype="multipart/form-data" >-->
                    <?php if (form_error('registry_id') != null): ?>
                        <div class="alert alert-danger " role="alert">
                            <?= form_error('registry_id'); ?>
                        </div>
                    <?php endif; ?>
                        <div class="form-group">
                            <h6>Registry ID</h6>
                            <input type="text" placeholder="i.e 51ULB996O61W" id="registry_id" name="registry_id" value="<?php echo $value->registry_url ?>" class="form-control">

                        </div>
                        <button class="btn btn-primary" type="submit" style="">Import</button>
                    </form>
                </div>

            </div>
          </div>


<?php endif; endforeach; ?>
      
</div>
          <kbd class="pull-righthioctane_giftlist">Total Produts: <?php echo sizeof($products)?></kbd>
          <br />
          <br />
          <div class="col-lg-9 offset-1">

              <div class="list-group">
                  <?php foreach ($products as $key => $value): ?>

                      <a href="<?php echo $value->link ?>" target="_blank" class="list-group-item list-group-item-action flex-column align-items-start <?php echo $value->sold?'active':'' ?>">
                          <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1"><?php echo $value->title ?></h5>
                              <small><?php echo $value->price ?></small>
                          </div>
                          <small><img width="150" src="<?php echo $value->image ?>" /></small>
                      </a>





                  <?php endforeach; ?>

              </div>


          </div>

</div>

      </div>
