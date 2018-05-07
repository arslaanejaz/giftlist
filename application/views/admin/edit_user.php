<div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h4 class="panel-title">Edit User</h4>
            <ul class="panel-tool-options"> 
              <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
              <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
              <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
            </ul>
          </div>
          <div class="panel-body">
             <form class="form-horizontal" action="<?php echo base_url() ?>index.php/admin/user/update_user/<?php echo $users->id ?>" method="post" enctype="multipart/form-data">
              <div class="form-group"> 
                <label class="col-sm-2 control-label">Full Name</label> 
                <div class="col-sm-10"> 
                  <input type="text" placeholder="Full Name" value="<?php if(!empty($users)){
                    echo $users->fullname;
                    } ?>" name="ful_name" class="form-control"> 
                </div> 
              </div>
         
              <div class="line-dashed"></div>
               <div class="form-group">
                <label class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                  <input type="text" class="form-control" name="address" placeholder="Address" value="<?php if(!empty($users)){
                    echo $users->address;
                    } ?>"> 
                                </div>
                             </div>

                             <div class="line-dashed"></div>
               <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                  <input type="text" class="form-control" name="city" placeholder="City" value="<?php if(!empty($users)){
                    echo $users->city;
                    } ?>"> 
                                </div>
                             </div>
                            
                             <div class="line-dashed"></div>
               <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                  <input type="text" class="form-control" name="state" placeholder="State" value="<?php if(!empty($users)){
                    echo $users->state;
                    } ?>"> 
                                </div>
                             </div>

                             <div class="line-dashed"></div>
               <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                  <input type="text" class="form-control" name="zip" placeholder="Zip" value="<?php if(!empty($users)){
                    echo $users->zip;
                    } ?>"> 
                                </div>
                             </div>

               <div class="line-dashed"></div>
               <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                  <input type="email" class="form-control" name="email" value="<?php if(!empty($users)){
                    echo $users->email;
                    } ?>" placeholder="Email"> 
                                </div>
                             </div>
               <div class="line-dashed"></div>
               <div class="form-group"> 
                <label class="col-sm-2 control-label">Password</label> 
                <div class="col-sm-10"> 
                  <input type="password" class="form-control" name="password" placeholder="Password"> 
                </div> 
              </div>
               
              
              <div class="line-dashed"></div>
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                  <button class="btn btn-default" type="submit">Update</button> 
                </div> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>