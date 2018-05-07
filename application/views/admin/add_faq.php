<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <h4 class="panel-title">Add FAQ</h4>
        <ul class="panel-tool-options"> 
          <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
          <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
          <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
        </ul>
      </div>
      <div class="panel-body">
       <form class="form-horizontal" action="<?php echo base_url() ?>index.php/admin/faq/add_faq" method="post" enctype="multipart/form-data">
        <div class="form-group">
          
          <label class="col-sm-2 control-label">Question</label> 
          <div class="col-sm-10"> 
          <input type="text" name="question" id="question" class="form-control">
          </div>
        </div>



        <div class="form-group">
          
          <label class="col-sm-2 control-label">Answer</label> 
          <div class="col-sm-10"> 
          <textarea name="answer" id="answer" class="form-control" rows="20">HTML Content Here / Plain Text</textarea>
          </div>
        </div>


        <div class="line-dashed"></div>
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10"> 
            <button class="btn btn-default" type="submit">Add FAQ</button> 
          </div> 
        </div>
      </form>
    </div>
  </div>
</div>
</div>