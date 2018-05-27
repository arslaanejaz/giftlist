<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/registry.css">
<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 subheader">
            <h1 class="text-center">Import From Anywhere</h1>
        </div>
      </div>


        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-8 offset-2 mt-5">
              <div class="text-center mb-4">
                <h2>Drag the below button to your bookmarks bar and that's all!</h2>
                <p class="text-center"><a href="#" id="importnow" class="btn btn-install">Add to Gyftlists</a></p>
                <h2 class="mt-5">How it Works</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div>
          </div>
        </div>

</div>
<div class="imported-product">
    <div class="row">
    <div class="col-md-5 thumb">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height:200px;">
                <div class="carousel-item active" style="height:200px;">
                <img class="img-responsive" src="https://images-eu.ssl-images-amazon.com/images/G/31/amazonservices/INwebsite/Feb2016Update/SP/1.png" alt="First slide">
                </div>
                <div class="carousel-item" style="height:200px;">
                <img class="img-responsive" src="https://images-eu.ssl-images-amazon.com/images/G/31/amazonservices/INwebsite/Feb2016Update/SP/1.png" alt="Second slide">
                </div>
                <div class="carousel-item" style="height:200px;">
                <img class="img-responsive" src="https://images-eu.ssl-images-amazon.com/images/G/31/amazonservices/INwebsite/Feb2016Update/SP/1.png" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="col-md-7 product-details">
        <h2>Title of imported products</h2>
        <p class="description">Lorem ipsum dolor sit amit dima nibh is simply dummy text for web and publishing industry and its just a dummy text</p>
        <p class="price">$ 49.00</p>
        <p class="retailer">By Rockon</p>
        <a href="#" class="btn btn-yellow">Add to My Gyftlist</a>
    </div>
    </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#importnow').on('click', function() { $('.imported-product').toggle(100); });
    })
</script>