<div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h4 class="panel-title">Edit Products</h4>
            <ul class="panel-tool-options"> 
              <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
              <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
              <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
            </ul>
          </div>
          <div class="panel-body">
             <form class="form-horizontal" action="<?php echo base_url() ?>index.php/admin/product/update_product/<?php echo $products->product_id ?>" method="post" enctype="multipart/form-data">
              <div class="form-group"> 
                <label class="col-sm-2 control-label">Product Name</label> 
                <div class="col-sm-10"> 
                  <input type="text" placeholder="Product Name" name="product_name" class="form-control" value="<?php if(!empty($products)){
                    echo $products->product_name;
                    } ?>"> 
                </div> 
              </div>
         
              
               <div class="line-dashed"></div>
               <div class="form-group">
                <label class="col-sm-2 control-label">Price</label>
                                <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php if(!empty($products)){
                    echo $products->product_price;
                    } ?>" name="price" placeholder="Price" > 
                                </div>
                             </div>
               <div class="line-dashed"></div>
               <div class="form-group"> 
                <label class="col-sm-2 control-label">Product Detail</label> 
                <div class="col-sm-10"> 
                  <textarea placeholder="Textarea" name="product_detail"  class="form-control"><?php if(!empty($products)){
                    echo $products->product_name;
                    } ?></textarea> 
                </div> 
              </div>
               
               
              <div class="form-group"> 
                <label class="col-sm-2 control-label">Product Category</label> 
                <div class="col-sm-10"> 
                  <select class="form-control" name="product_category"> 
                  <?php foreach ($result as $key => $value): ?>
                    <option value="<?php echo $value->category_id ?>"><?php echo $value->category_name ?></option>
                  <?php endforeach ?>
                     
                  </select>
                </div> 
              </div>
              <div class="line-dashed"></div>
              <div class="form-group"> 
                <label class="col-sm-2 control-label">Choose Image</label> 
                <div class="col-sm-10"> 
                  <input type="file"  id="field-file"  name="product_image" class="form-control" value="<?php if(!empty($products)){
                    echo $products->product_image;
                    } ?>">
                </div> 
              </div>
              
              <div class="line-dashed"></div>
               <div class="form-group">
                <label class="col-sm-2 control-label">Retailer</label>
                                <div class="col-sm-10">
                  <input type="text" class="form-control" name="retailer" placeholder="Retailer" value="<?php if(!empty($products)){
                    echo $products->retailer;
                    } ?>" > 
                                </div>
                             </div>

                             <div class="line-dashed"></div>
               <div class="form-group">
                <label class="col-sm-2 control-label">URL</label>
                                <div class="col-sm-10">
                  <input type="text" class="form-control" name="url" placeholder="http://...." value="<?php if(!empty($products)){
                    echo $products->url;
                    } ?>" > 
                                </div>
                             </div>
             
              <div class="line-dashed"></div>
              <div class="form-group"> 
                <div class="col-sm-offset-2 col-sm-10"> 
                  <button class="btn btn-default" type="submit">Update Product</button> 
                </div> 
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>