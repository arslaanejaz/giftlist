<div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h4 class="panel-title">Edit Slides</h4>
            <ul class="panel-tool-options"> 
              <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
              <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
              <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
            </ul>
          </div>
          <div class="panel-body">
             <form class="form-horizontal" action="<?php echo base_url() ?>index.php/admin/slide/update_slide/<?php echo $slides->slide_id ?>" method="post" enctype="multipart/form-data">
              <div class="form-group"> 
                <label class="col-sm-2 control-label">Slide Heading</label> 
                <div class="col-sm-10"> 
                  <input type="text" placeholder="Slide Heading" name="slide_heading" class="form-control" value="<?php if(!empty($slides)){
                    echo $slides->slide_heading;
                    } ?>"> 
                </div> 
              </div>
         
              <div class="line-dashed"></div>
              <div class="form-group"> 
                <label class="col-sm-2 control-label">Choose Image</label> 
                <div class="col-sm-10"> 
                  <input type="file"  id="field-file"  name="slide_image" class="form-control">
                </div> 
              </div>
              <div class="line-dashed"></div>
              <div class="form-group"> 
                <label class="col-sm-2 control-label">Description</label> 
                <div class="col-sm-10"> 
                  <input type="text" placeholder="Link" value="<?php if(!empty($slides)){
                    echo $slides->link_one;
                    } ?>" name="link_one" class="form-control"> 
                </div> 
              </div>

              <div class="line-dashed"></div>
              <div class="form-group"> 
                <label class="col-sm-2 control-label">Button Link</label> 
                <div class="col-sm-10"> 
                  <input type="text" placeholder="Link" name="link_two" class="form-control" value="<?php if(!empty($slides)){
                    echo $slides->link_two;
                    } ?>"> 
                </div> 
              </div>
              
             
              <div class="line-dashed"></div>
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                  <button class="btn btn-default" type="submit">Update Slide</button> 
                </div> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>