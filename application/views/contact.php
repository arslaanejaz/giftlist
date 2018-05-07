<div class="container-fluid">
      	<div class="row">
        	<div class="col-lg-12 subheader">
            	<h1 class="text-center">Contact Form</h1>
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
<?php echo validation_errors(); ?>
<?
	echo form_open(current_url()); 
?>

	
	<?php
		echo "<div class='form-group'>". form_label('Name: ', 'name') . "" . form_input('name', set_value('name'), "class='form-control'") . "</div>";
		echo "<div class='form-group'>" . form_label('Email: ', 'email'). "" . form_input('email', set_value('email'), "class='form-control'") . "</div>";
		echo "<div class='form-group'>".form_label('Message: ', 'message'). "<textarea name='message' class='form-control'>" . set_value("message") . "</textarea></div>";
		if ($show_spam_protection) {
		echo "<div class='form-group'>" . form_label('Spam protection - : ' . $spam_question, 'spam_protection'). "" . form_input('spam_protection', set_value('spam_protection'), "class='form-control'") . "</div>";
		}
		echo "<div class='form-group'>".form_submit('submit', 'Submit Message', "class='btn btn-danger'") . "</div>";
	?>
	

<?
	echo form_close();
?>

          </div>
        </div>
      </div>