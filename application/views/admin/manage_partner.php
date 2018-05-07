<div class="row">
<div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h4 class="panel-title">Manage Partners </h4>
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
                    <th>Title</th> 
                    <th>Description</th> 
                    <th>Url</th> 
                    <th>Image</th> 
                    <th>Action</th>
                     
                    
                  </tr> 
                </thead> 
                <tbody> 
                <?php $count = 0; ?>
                <?php foreach ($result as $value): ?>
                
                  
                   
                  <?php $count++; ?>
                
                  <tr> 
                    <th scope="row"><?php echo $count ?></th> 
                    <td><?php echo $value->title ?></td> 
                    <td><?php echo $value->description ?></td> 
                    <td><?php echo $value->url ?></td> 
                     
                    <td ><img class="center-block" src="<?php echo base_url().'assets/partners/'.$value->image; ?>" style="height:60px; width:60px;" /></li>
</td>
                    <td>
                        <a href="<?php echo base_url(); ?>index.php/admin/partner/edit_partner/<?php echo $value->partner_id ?>">Edit</a> |
                        <a href="<?php echo base_url(); ?>index.php/admin/partner/delete_partner/<?php echo $value->partner_id ?>">Delete</a>
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