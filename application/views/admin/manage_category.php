<div class="row">
<div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h4 class="panel-title">Manage Categories </h4>
            <ul class="panel-tool-options"> 
              <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
              <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
              <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
            </ul>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead> 
                  <tr> 
                    <th>#</th> 
                    <th>Category Name</th>
                    <th>Actions</th> 
                  </tr> 
                </thead> 
                <tbody> 
                <?php foreach ($result as $value): ?>
                  
                
                  <tr> 
                    <td>1</td> 
                    <td><?php echo $value->category_name ?></td> 
                    <td><a href="<?php echo site_url(); ?>/admin/category/edit_category/<?php echo $value->category_id ?>">Edit</a> | <a href="<?php echo site_url(); ?>/admin/category/delete_category/<?php echo $value->category_id ?>">Delete</a></td>
                  </tr> 
               
                   <?php endforeach ?>
                </tbody> 
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>