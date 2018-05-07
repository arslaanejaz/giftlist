<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <h4 class="panel-title">Add Page</h4>
        <ul class="panel-tool-options"> 
          <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
          <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
          <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
        </ul>
      </div>
      <div class="panel-body">
       <form class="form-horizontal" action="<?php echo base_url() ?>index.php/admin/page/add_page" method="post" enctype="multipart/form-data">
        <div class="form-group">
          
          <label class="col-sm-2 control-label">Title</label> 
          <div class="col-sm-10"> 
          <input type="text" name="title" id="title" class="form-control">
          </div>
        </div>



        <div class="form-group">
          
          <label class="col-sm-2 control-label">Page Slug</label> 
          <div class="col-sm-10"> 
          <input type="text" name="slug" id="slug" class="form-control">
          </div>
        </div>


        <div class="form-group">
          
          <label class="col-sm-2 control-label">Content</label> 
          <div class="col-sm-10"> 
          <textarea name="content" id="content" class="form-control" rows="20">HTML Content Here</textarea>
          </div>
        </div>


        <div class="line-dashed"></div>
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10"> 
            <button class="btn btn-default" type="submit">Add Page</button> 
          </div> 
        </div>
      </form>
    </div>
  </div>
</div>
</div>