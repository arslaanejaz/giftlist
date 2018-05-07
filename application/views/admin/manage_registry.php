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
                    <th>Registry Type</th> 
                    <th>Date</th> 
                    <th>Url</th> 
                    <th>Action</th>
                     
                    
                  </tr> 
                </thead> 
                <tbody> 
                <?php $count = 0; ?>
                <?php foreach ($result as $value): ?>
                
                  
                   
                  <?php $count++; ?>
                
                  <tr> 
                    <th scope="row"><?php echo $count ?></th> 
                    <td><?php echo $value->registry_type ?></td> 
                    <td><?php echo $value->registry_date ?></td> 
                    <td><?php echo $value->registry_url ?></td> 
                    
                    <td>
                        <a href="<?php echo base_url(); ?>index.php/admin/registry/edit_registry/<?php echo $value->registry_id ?>">Edit</a> |
                        <a href="<?php echo base_url(); ?>index.php/admin/registry/delete_registry/<?php echo $value->registry_id ?>">Delete</a>
                    </td>
                     
                  </tr> 
               
                   <?php endforeach ?>
                </tbody> 
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>