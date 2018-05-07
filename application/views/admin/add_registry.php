<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <h4 class="panel-title">Add Registry</h4>
        <ul class="panel-tool-options"> 
          <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
          <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
          <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
        </ul>
      </div>
      <div class="panel-body">
       <form class="form-horizontal" action="<?php echo base_url() ?>index.php/admin/registry/add_registry" method="post" enctype="multipart/form-data">
        <div class="form-group">
          
          <label class="col-sm-2 control-label">Registry</label> 

          <select class="select2 form-control" name="registry_type" style="width:70%;">
            <option>Baby</option>
            <option>Celebration</option>
            <option>Graduation</option>
            <option>Wedding</option>
          </select>
        </div>



        <div class="form-group"> 
          <label class="col-sm-2 control-label">Event Date</label> 
          <div class="col-sm-10"> 
            
    <input type="text" name="registry_date" id="datepicker" class="form-control">  
          </div> 
        </div>


        <div class="form-group"> 
          <label class="col-sm-2 control-label">Custom Url</label> 
          <div class="col-sm-10"> 
            <input type="text" placeholder="Customer Url" name="custom_url" class="form-control"> 
          </div> 
        </div>


        <div class="line-dashed"></div>
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10"> 
            <button class="btn btn-default" type="submit">Add Registry</button> 
          </div> 
        </div>
      </form>
    </div>
  </div>
</div>
</div>