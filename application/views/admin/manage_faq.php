<div class="row">
<div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h4 class="panel-title">Manage FAQ </h4>
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
                    <th>Question</th> 
                    <th>Answer</th> 
                    <th>Action</th>
                     
                    
                  </tr> 
                </thead> 
                <tbody> 
                <?php $count = 0; ?>
                <?php foreach ($result as $value): ?>
                
                  
                   
                  <?php $count++; ?>
                
                  <tr> 
                    <th scope="row"><?php echo $count ?></th> 
                    <td><?php echo $value->question ?></td>
                    <td><?php echo $value->answer ?></td>  
                    
                    <td>
                        <a href="<?php echo base_url(); ?>index.php/admin/faq/edit_faq/<?php echo $value->f_id ?>">Edit</a> |
                        <a href="<?php echo base_url(); ?>index.php/admin/faq/delete_faq/<?php echo $value->f_id ?>">Delete</a>
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