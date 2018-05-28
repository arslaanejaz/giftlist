<!doctype html>
<html lang="en">
<head>
    <title>Gyftlist</title>

    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">

    <link href="https://fonts.googleapis.com/css?family=Lato|Montserrat|PT+Sans" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/carousel.css') ?>" rel="stylesheet">
</head>
<body>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/registry.css">

<div class="imported-product">
    <div class="row">
    <div class="col-md-5 thumb">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php $i = 0; foreach ($data['images'] as $img){ $i++?>
                    <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i?>" class="<?php echo $i==0?'active':''?>"></li>
                <?php $i++; }?>

                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="height:200px;">

                <?php $i = 0; foreach ($data['images'] as $img){ $i++;?>
                    <div class="carousel-item <?php echo $i==1?'active':''?>" style="height:200px;">
                        <img class="img-responsive" src="<?php echo $img?>" alt="First slide">
                    </div>
                <?php }?>
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
            <h2><?php echo $data['name']?></h2>
            <p class="description"><?php echo isset($data['description'])?$data['description']:'' ?></p>
            <p class="price">$ <?php echo isset($data['price'])?$data['price']:'' ?></p>
            <p class="retailer"><?php echo isset($data['name'])?$data['name']:'' ?></p>
            <a href="#" class="btn btn-yellow">Add to My Gyftlist</a>
        </div>
    </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E="
  crossorigin="anonymous"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>


</body>
</html>