<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
      	<div class="row">
        	<div class="col-lg-12 subheader">
            	<h1 class="text-center">Register</h1>
            </div>
        </div>
      </div>


      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-6 offset-3 mt-3">
    
        <?php if (isset($error)) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            </div>
        <?php endif; ?>

            <?= form_open() ?>
            <div class="form-group">
                <?php if (form_error('fullname') != null): ?>
                    <div class="alert alert-danger " role="alert">
                        <?= form_error('fullname'); ?>
                    </div>
                <?php endif; ?>
                <label for="fullname"></label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?= set_value('fullname') ?>" placeholder="Your full name" required>
            </div>
            <div class="form-group">
                <?php if (form_error('email') != null): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= form_error('email'); ?>
                    </div>
                <?php endif; ?>

                <label for="email"></label>
                <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" placeholder="Enter your email" required>
                <p class="help-block">A valid email address</p>
            </div>

            
            <div class="form-group">
                <label for="email"></label>
                <input type="text" class="form-control" id="address" name="address" value="<?= set_value('address') ?>" placeholder="Enter your Address" required>
            </div>

            
            <div class="form-group">
                <label for="email"></label>
                <input type="text" class="form-control" id="city" name="city" value="<?= set_value('city') ?>" placeholder="Enter your City" required>
            </div>

            <div class="form-group">
                <label for="email"></label>
                <input type="text" class="form-control" id="state" name="state" value="<?= set_value('state') ?>" placeholder="Enter your state" required>
            </div>

            <div class="form-group">
                <label for="email"></label>
                <input type="text" class="form-control" id="zip" name="zip" value="<?= set_value('zip') ?>" placeholder="Enter your Zip Code" required>
            </div>


            <div class="form-group">
                <?php if (form_error('password') != null): ?>
                <div class="alert alert-danger" role="alert">
                    <?= form_error('password'); ?>
                </div>
                <?php endif; ?>
                <label for="password"></label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter a password" required>
                <p class="help-block">At least 6 characters</p>
            </div>
            <div class="form-group">
                <?php if (form_error('password_confirm') != null): ?>
                <div class="alert alert-danger" role="alert">
                    <?= form_error('password_confirm'); ?>
                </div>
                <?php endif; ?>
                <label for="password_confirm"></label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password" required>
                <p class="help-block">Must match your password</p>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Register">
            </div>
            </form>
            </div>
            </div><!-- /.row -->