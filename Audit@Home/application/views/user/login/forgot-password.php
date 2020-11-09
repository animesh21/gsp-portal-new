<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="reg-area">
    <h2>Forgot Password</h2>
    <p>Please enter your registered email id. Your password will be emailed to you.</p>
    <?php if ($this->session->flashdata('backend_success')) : ?>
        <div class="alert alert-success" role="alert">
            <?php echo $this->session->flashdata('backend_success'); ?>
        </div>
    <?php endif; ?>
    <?php if (validation_errors()) : ?>

        <div class="alert alert-danger" role="alert">
            <?php echo validation_errors() ?>
        </div>

    <?php endif; ?>
    <?php if (isset($error)) : ?>

        <div class="alert alert-danger" role="alert">
            <?php echo $error ?>
        </div>

    <?php endif; ?>
    <form class="form-horizontal" method="POST" action="">
        <ul class="list-unstyled logIn">
            <li>
                <div class="form-group">
                    <div class="input-group">
                        <div class="input-group-addon"><img src="<?php echo base_url('assets/images/username-icon.png'); ?>" alt="" ></div>
                        <input type="text" class="form-control" placeholder="User Email" name="useremail" value="<?php echo set_value('useremail') ?>">
                    </div>
                </div>
            </li>
            
            <li><input type="submit" class="button" value="Recover Password"></li>
            <li>
                <p class="dontP">Don’t have an account? <a href="<?php echo base_url('user/register'); ?>">Sign Up</a></p>
<!--                <a href="#" class="forgot-password">Forgot Password?</a>-->

            </li>

            <li><p>Need help? Email <a href="mailto:support@greenschoolsprogramme.org">support@greenschoolsprogramme.org</a> or call 911140616000, ext: 321, 300</p></li>
        </ul>
    </form>
</section>