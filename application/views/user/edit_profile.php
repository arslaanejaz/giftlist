<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 subheader">
            <h1 class="text-center">Edit Profile</h1>
        </div>
      </div>
<div class="container">
    <div class="row">
        <?php if (isset($error)) : ?>
            <div class="col-md-12">
                <div class="alert alert-danger" role="alert">
                    <?= $error ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="col-md-10 offset-1 mt-3">
            <div class="page-header">
                <h1>Edit Profile</h1>
            </div>
            <?= form_open() ?>
            <div class="form-group">
                <?php if (form_error('fullname') != null): ?>
                    <div class="alert alert-danger " role="alert">
                        <?= form_error('fullname'); ?>
                    </div>
                <?php endif; ?>
                <label for="fullname">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="fullname" value="<?= $user->fullname ?>" placeholder="Your full name" required>
            </div>
            <div class="form-group">
                <?php if (form_error('email') != null): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= form_error('email'); ?>
                    </div>
                <?php endif; ?>

                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user->email ?>" placeholder="Enter your email" required>
                <p class="help-block">A valid email address</p>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?= $user->address ?>" placeholder="Enter your address" required>
            </div>

            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" value="<?= $user->city ?>" placeholder="Enter your city" required>
            </div>

            <div class="form-group">
                <label for="state">State</label>
                <input type="text" class="form-control" id="state" name="state" value="<?= $user->state ?>" placeholder="Enter your state" required>
            </div>

            <div class="form-group">
                <label for="zip">Zip</label>
                <input type="text" class="form-control" id="zip" name="zip" value="<?= $user->zip ?>" placeholder="Enter your zip code" required>
            </div>

            <div class="form-group">
                <?php if (form_error('password') != null): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= form_error('password'); ?>
                    </div>
                <?php endif; ?>
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password"  required>
                <p class="help-block">Enter your password to save</p>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-default" value="Save">
            </div>
            </form>
        </div>
    </div><!-- .row -->
</div><!-- .container -->

</div>