<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>


    <div class="container-fluid">
      	<div class="row">
        	<div class="col-lg-12 subheader">
            	<h1 class="text-center">Sign in</h1>
            </div>
        </div>
      </div>

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-6 offset-3 mt-3">
        <?php if (validation_errors()) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors() ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if (isset($message)) : ?>
            <div class="col-md-12">
                <div class="alert <?= isset($messagetype) ? $messagetype : "alert-danger" ?>" role="alert">
                    <?= $message ?>
                </div>
            </div>
        <?php endif; ?>
            <?= form_open() ?>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="<?= set_value('email') ?>" required>
                </div>
                <div class="form-group ">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required>
                </div>



                <div class="form-group">

                    <input type="submit" class="btn btn-default" value="Login">
                </div>
                <div class="form-group col-xs-6 text-right">
                    <a href="<?= base_url('index.php/forgot_password') ?>">Forgot Password?</a>

                </div>
            </form>
            <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
        </div>
    </div><!-- .row -->
