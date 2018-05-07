<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 subheader">
            <h1 class="text-center">My Gyftlist Profile</h1>
        </div>
      </div>
<div class="container">
    <div class="row">

        <div class="col-md-10 offset-1 mt-3">
            <div class="page-header">
                <h1>Profile <a href="<?= base_url('index.php/user/edit')?>" class="btn btn-xs btn-success pull-right" >Edit</a></h1>

            </div>
            <table class="table table-striped">

                <tr>
                    <td>Full Name: </td>
                    <td><?= $user->fullname ?></td>

                </tr>
                <tr>
                    <td>Email: </td>
                    <td><?= $user->email ?></td>

                </tr>
                <tr>
                    <td>Date Joined: </td>
                    <td><?= $user->date_joined ?></td>

                </tr>
                <tr>
                    <td>Address: </td>
                    <td><?= $user->address ?></td>

                </tr>
                <tr>
                    <td>City: </td>
                    <td><?= $user->city ?></td>

                </tr>
                <tr>
                    <td>State: </td>
                    <td><?= $user->state ?></td>

                </tr>
                <tr>
                    <td>Zip: </td>
                    <td><?= $user->zip ?></td>

                </tr>

            </table>

        </div>
    </div><!-- .row -->
</div><!-- .container -->

</div>