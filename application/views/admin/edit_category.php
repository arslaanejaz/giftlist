<div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h4 class="panel-title">Edit Category</h4>
            <ul class="panel-tool-options"> 
              <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
              <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
              <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
            </ul>
          </div>
          <div class="panel-body">
             <form class="form-horizontal" action="<?php echo site_url(); ?>/admin/category/update_category" method="post">
              <div class="form-group"> 
                <label class="col-sm-2 control-label">Category Name</label> 
                <div class="col-sm-10"> 
                  <input type="text" placeholder="Category Name" value="<?php echo $result->category_name ?>" name="categoryname" class="form-control"> 
                </div> 
                <input type="hidden" value="<?php echo $result->category_id ?>" name="catid" />
              </div>
              <div class="line-dashed"></div>
            
             
            
            
              
             
              <div class="line-dashed"></div>
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                  <button class="btn btn-default" type="submit">Save</button> 
                </div> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>