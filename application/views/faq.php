<div class="container-fluid">
      	<div class="row">
        	<div class="col-lg-12 subheader">
            	<h1 class="text-center">Frequently Asked Questions</h1>
            </div>
        </div>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-md-12" style="margin-top:50px;">
          <?php if(!empty($faq)): foreach($faq as $value): ?>
          <p>Q: <?php echo $value->question ?><br>A: <?php echo $value->answer ?></p>
<?php endforeach; endif; ?>
          </div>
        </div>
      </div>