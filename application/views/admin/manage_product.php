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
                    <th>Product Name</th> 
                    <th>Price</th> 
                    <th>Detail</th> 
                    <th>Category</th> 
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
                    <td><?php echo $value->product_name ?></td> 
                    <td><?php echo $value->product_price ?></td> 
                    <td><?php echo $value->product_detail ?></td> 
                    
                      <td><?php echo $value->product_category ?></td> 
                  
                    
                    <td ><img class="center-block" src="<?php echo base_url().'assets/product_images/'.$value->product_image; ?>" style="height:60px; width:60px;" /></li>
</td>
                    <td>
                      <a href="<?php echo base_url(); ?>index.php/admin/product/edit_product/<?php echo $value->product_id ?>">Edit</a>
                      <a href="<?php echo base_url(); ?>index.php/admin/product/delete_product/<?php echo $value->product_id ?>">Delete</a>
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