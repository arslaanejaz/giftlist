<hr class="featurette-divider">

<!-- /END THE FEATURETTES -->

</div><!-- /.container -->


<!-- FOOTER -->
<footer class="container">
  <p class="text-center"><img src="<?php echo base_url() ?>assets/images/social.png" class="img-fluid" /></p>
<p class="text-center">Wedding Ideas   |    Etiquette  |     Wedding Websites    |     Registry Marketplace    |    Community Real Wedding Photos     |    Wedding Dresses + Jewelry     |      Wedding Invitations     |     Wedding Cakes 
Groom + Groomsmen    |    Wedding on a Budget    |    Rehearsal Dinner     |     Giftlist News     |    Our Sponsors </p>
<p class="text-center">&copy; 2017-2018 Gyftlist.</p>
</footer>
</main>

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url('assets/assets/js/vendor/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="<?php echo base_url('assets/assets/js/vendor/holder.min.js') ?>"></script>
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/datecss/jquery.datepick.css"> 
<script type="text/javascript" src="<?php echo base_url() ?>assets/datejs/jquery.plugin.js"></script> 
<script type="text/javascript" src="<?php echo base_url() ?>assets/datejs/jquery.datepick.js"></script> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script>
  $(".modal-trigger").click(function(e){
  e.preventDefault();
  dataModal = $(this).attr("data-modal");
  $("#" + dataModal).css({"display":"block"});
});

$(".close-modal, .modal-sandbox").click(function(){
  $(".modal").css({"display":"none"});
});
</script>

<script>
$(document).ready(function(){ 
/* ... */ 
$( function() {
    $( "#datepicker" ).datepicker();
  } );
});
  


  </script>
</body>
</html>