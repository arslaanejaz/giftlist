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
          <div class="col-lg-6 offset-3 mt-5">
              <div class="text-center mb-4">
                <h1>What will you like to do</h1>
              </div>
          </div>
          <div class="col-lg-12 mt-3">
              <!--  -->
              <div class="row">
              <div class="col-md-3 text-center">
                <div class="user-dash-box">
                  <span><i class="fa fa-shopping-bag"></i></span>
                  <a href="<?php echo base_url() ?>index.php/welcome/shop/" data-modal="modal-name">Shop by Category</a>
                </div>
              </div>
              <div class="col-md-3 text-center">
                <div class="user-dash-box">
                  <span><i class="fa fa-rocket"></i></span>
                  <a href="#" class="modal-trigger" data-modal="modal-name">Create a Registry!</a> 
                </div>                
              </div>
              <div class="col-md-3 text-center">
                <div class="user-dash-box">
                  <span><i class="fa fa-download"></i></span>
                  <a href="#" class="modal-trigger" data-modal="modal-import">Import Registry!</a> 
                </div>                
              </div>
              <div class="col-md-3 text-center">
                <div class="user-dash-box">
                  <span><i class="fa fa-wrench"></i></span>
                  <a href="<?php echo base_url() ?>registry/install_importfromanywhere">Install Import Button</a> 
                </div>                
              </div> 
              </div>
              <!-- . -->
              <hr class="featurette-divider">
              <div class="row">
              <div class="col-md-12">
                <div class="import-registry-box">
                  <h3>Importing products from Amazon <span>Fetching 40 products</span></h3>
                  <div class="options">
                    <a href="<?php echo base_url() ?>"><i class="fa fa-repeat"></i></a>
                    <a href="<?php echo base_url() ?>"><i class="fa fa-pause"></i></a>
                    <a href="<?php echo base_url() ?>"><i class="fa fa-play"></i></a>
                  </div>
                </div>
              </div> 
              </div>
          </div>
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
        <!--<div class="cc-selector">
        <input checked="checked" id="wedding" type="radio" name="registry_type" value="wedding"  />
        <label class="drinkcard-cc wedding" for="wedding"></label>
        <input id="graduation" type="radio" name="registry_type" value="graduation" />
        <label class="drinkcard-cc graduation" for="graduation"></label>
        <input id="baby" type="radio" name="registry_type" value="baby" />
        <label class="drinkcard-cc baby" for="baby"></label>
        <input id="anniversary" type="radio" name="registry_type" value="anniversary" />
        <label class="drinkcard-cc anniversary" for="anniversary"></label>
        </div>-->
        
      <h5>Registry For</h5>
      <select name="registry_type" class="form-control">
        <option value="wedding">Wedding</option>
        <option value="graduation">Graduation</option>
        <option value="baby">Baby</option>
        <option value="anniversary">Anniversary</option>
      </select>
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
    <h5>Registry description</h5>
      <textarea id="registry_msg" name="registry_msg" class="form-control">Search phrase e.g: John and Kate Wedding etc</textarea>
    </div>

    <div class="form-group">
    <h5>Your Custom Url</h5>
      <input type="text" id="registry_url" name="registry_url" class="form-control">
    </div>

    <div class="form-group">
        <label><input type="checkbox" id="registry_private" name="registry_private" class="form-control" value="1">Make it Private?</label>
    </div>

    
    <button type="submit" class="btn btn-yellow">Submit</button>
    </form>

    </div>
  </div>
</div>


<div class="modal" id="modal-import">
  <div class="modal-sandbox"></div>
  <div class="modal-box">
    <div class="modal-header">
      <div class="close-modal">&#10006;</div> 
      <h1 style="margin-right: 6em">Import Registry</h1>
    </div>
    <div class="modal-body">
    <?= form_open("import") ?>
    <?php if (form_error('registry_id') != null): ?>
                        <div class="alert alert-danger " role="alert">
                            <?= form_error('registry_id'); ?>
                        </div>
                    <?php endif; ?>
      <div class="form-group">
      <h5>Select Registry</h5>
    <select  class="form-control" name="registry_id">
    <?php foreach ($result as $key => $value): ?>  
          <?php if($this->session->userdata('user_id') == $value->fk_user_id): ?>
          <option value="<?php echo $value->registry_id ?>"><?php echo $value->description ?></option>
          <?php endif; endforeach; ?>
        </select> 
      <span>You will need to first create registry to import products</span>
      </div>

      <div class="form-group">
      <h5>Source</h5>
    <select  class="form-control" name="source">
          <option value="amazon">Amazon</option>
        </select> 
      <span>Where your registry already exists</span>
      </div>

      <div class="form-group">
      <h5>Registry ID</h5>
    <input type="text" class="form-control" placeholder="i.e 51ULB996O61W" id="registry_id" name="registry_id" /> 
      <span>A valid id</span>
      </div>


    
      <button class="btn btn-blue" type="submit" style="">Import</button>
    </form>

    </div>
  </div>
</div>