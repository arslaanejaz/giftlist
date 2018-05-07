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

      <div class="container marketing">

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
              <div class="col-md-4 text-center"><a href="#" class="modal-trigger btn btn-blue" data-modal="modal-name">Create a Registry!</a> </div>
              <div class="col-md-4 text-center"><a href="<?php echo base_url() ?>index.php/user/" class="btn btn-yellow">Profile</a></div>
              <div class="col-md-4 text-center"><a href="<?php echo base_url() ?>index.php/welcome/shop/" class="btn btn-blue" data-modal="modal-name">Shop Gift!</a></div> 
              </div>
              <!-- Trigger Modal. -->
          </div>
        </div>
        <hr class="featurette-divider">
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

      </div>


        
        


<!-- Modal -->
<div class="modal" id="modal-name">
  <div class="modal-sandbox"></div>
  <div class="modal-box">
    <div class="modal-header">
      <div class="close-modal">&#10006;</div> 
      <h1 style="margin-right: 6em">Create Your Registry</h1>
    </div>
    <div class="modal-body">
      <form action="<?php echo base_url('registry/create_registry') ?>" method="post"  enctype="multipart/form-data" >
      <div class="form-group">
        <h5>Registry Type:</h5>
      </div>

      <div class="form-group">
        <div class="cc-selector">
        <input checked="checked" id="wedding" type="radio" name="registry_type" value="wedding"  />
        <label class="drinkcard-cc wedding" for="wedding"></label>
        <input id="graduation" type="radio" name="registry_type" value="graduation" />
        <label class="drinkcard-cc graduation" for="graduation"></label>
        <input id="baby" type="radio" name="registry_type" value="baby" />
        <label class="drinkcard-cc baby" for="baby"></label>
        <input id="anniversary" type="radio" name="registry_type" value="anniversary" />
        <label class="drinkcard-cc anniversary" for="anniversary"></label>
        </div>
    </div>
      

      <div class="form-group">
      <h5>Event Date</h5>
    <input type="text" name="registry_date" id="datepicker" class="form-control" value=""> 
      <span>Leave empty if not decided yet</span>
      </div>

      <div class="form-group">
      <h5>Registry Image</h5>
    <input type="file" name="rimage" id="rimage" class="form-control"> 

      </div>

      <div class="form-group">
    <h5>Registry Message</h5>
      <textarea id="registry_msg" name="registry_msg" class="form-control"></textarea>
    </div>

    <div class="form-group">
    <h5>Your Custom Url</h5>
      <input type="text" id="registry_url" name="registry_url" class="form-control">
    </div>

    <div class="form-group">
        <label><input type="checkbox" id="registry_private" name="registry_private" class="form-control" value="1">Make it Private?</label>
    </div>

    
    <button type="submit" style="margin-left: 24em;margin-top: 2em;">Submit</button>
    </form>

    </div>
  </div>
</div>