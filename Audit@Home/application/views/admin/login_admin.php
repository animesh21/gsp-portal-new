<?php $this->load->view('header.php'); ?>

 
<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">  
      <div class="col-lg-6 mx-auto">
        <div class="card shadow-v2"> 
         <div class="card-header border-bottom">
          <h4 class="mt-4">
            Admin Login Here!
            <p style="font-size:12px">Please use your Admin username and password to enter.</p>
            <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-danger form-control"> <?php echo $this->session->flashdata('error'); ?> </div>
          <?php } ?>
          </h4>
         </div>      
         

          <div class="card-body">
            <?php echo form_open('Admin',array('id'=>'frmLoginAdmin', 'class'=>'px-lg-4')); ?>
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-email"></span>
                </div>
                <input type="text" name="email" class="form-control border-left-0 pl-0" placeholder="Email">         
              </div>
              <?php if(form_error('email')){ ?>
              <div class="alert alert-danger form_error"> <?php echo form_error('email'); ?></div> 
            <?php } ?>
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-lock"></span>
                </div>
                <input type="password" name="password" class="form-control border-left-0 pl-0" placeholder="Password">
              </div>
              <?php if(form_error('email')){ ?>
              <div class="alert alert-danger form_error"> <?php echo form_error('password'); ?></div> 
              <?php } ?>
              <div class="d-md-flex justify-content-between my-4">
                <label class="ec-checkbox check-sm my-2 clearfix">
                  <input type="checkbox" name="checkbox">
                  <span class="ec-checkbox__control"></span>
                  <span class="ec-checkbox__lebel">Remember Me</span>
                </label>
                <a href="https://www.greenschoolsprogramme.org/community/user/forgot-password" class="text-primary my-2 d-block">Forgot password?</a>
              </div>
              <button class="btn btn-block btn-primary">Log In</button>
              <p class="my-5 text-center">
                Don’t have an account? <a href="https://www.greenschoolsprogramme.org/community/user/register" class="text-primary">Register</a>
              </p>
           <?php echo form_close(); ?>
          </div>
        </div>
      </div> 
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
 

  <?php $this->load->view('footer'); ?>