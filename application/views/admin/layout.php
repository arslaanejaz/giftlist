<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Integral - A fully responsive, HTML5 based admin template">
<meta name="keywords" content="Responsive, Web Application, HTML5, Admin Template, business, professional, Integral, web design, CSS3">
<title>Gyftlist | Site Administration</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url(); ?>assets/admin/images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="<?php echo base_url(); ?>assets/admin/css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="<?php echo base_url(); ?>assets/admin/css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Integral core stylesheet -->
<link href="<?php echo base_url(); ?>assets/admin/css/integral-core.css" rel="stylesheet">
<!-- /integral core stylesheet -->

<!--Jvector Map-->
<link href="<?php echo base_url(); ?>assets/admin/plugins/jvectormap/css/jquery-jvectormap-2.0.3.css" rel="stylesheet">

<link href="<?php echo base_url(); ?>assets/admin/css/integral-forms.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

<!--[if lte IE 8]>
  <script src="plugins/flot/js/excanvas.min.js"></script>
<![endif]-->

</head>
<body>

<?php $this->load->view('admin/components/loader'); ?>
<div class="page-container">
  <div class="page-sidebar">
    <?php $this->load->view('admin/components/sidebar'); ?>
  </div>
  <div class="main-container">
    <div class="main-header row">
      
      <?php $this->load->view('admin/components/mainheader') ?>

    </div>
    
    <div class="main-content">
        
      <?php $this->load->view($main_view); ?>
        
    </div>

    </div>
    
  </div>

</div>
  




<!--Load JQuery-->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/metismenu/js/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/blockui-master/js/jquery-ui.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/blockui-master/js/jquery.blockUI.js"></script>

<!--Knob Charts-->
<script src="<?php echo base_url(); ?>assets/admin/plugins/knob/js/jquery.knob.min.js"></script>

<!--Jvector Map-->
<script src="<?php echo base_url(); ?>assets/admin/plugins/jvectormap/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>

<!--ChartJs-->
<script src="<?php echo base_url(); ?>assets/admin/plugins/chartjs/js/Chart.min.js"></script>

<!--Morris Charts-->
<script src="<?php echo base_url(); ?>assets/admin/plugins/morris/js/raphael-min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/morris/js/morris.min.js"></script>

<!--Float Charts-->
<script src="<?php echo base_url(); ?>assets/admin/plugins/flot/js/jquery.flot.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/flot/js/jquery.flot.tooltip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/flot/js/jquery.flot.resize.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/flot/js/jquery.flot.pie.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/plugins/flot/js/jquery.flot.time.min.js"></script>

<!--Functions Js-->
<script src="<?php echo base_url(); ?>assets/admin/js/functions.js"></script>

<!--Dashboard Js-->
<script src="<?php echo base_url(); ?>assets/admin/js/dashboard.js"></script>

<script src="<?php echo base_url(); ?>assets/admin/js/loader.js"></script>
</body>
</html>