 <?php $this->load->view('header.php'); ?>

 
<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="card shadow-v2"> 
         <div class="card-header border-bottom">
          <h4 class="mt-4">
            Student Login Here!
          </h4>
         </div>         
          <div class="card-body">
            
            <form action="#" method="POST" class="px-lg-4">
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-email"></span>
                </div>
                <input type="text" class="form-control border-left-0 pl-0" placeholder="Email">
              </div>
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-lock"></span>
                </div>
                <input type="password" class="form-control border-left-0 pl-0" placeholder="Password">
              </div>
              <div class="d-md-flex justify-content-between my-4">
                <label class="ec-checkbox check-sm my-2 clearfix">
                  <input type="checkbox" name="checkbox">
                  <span class="ec-checkbox__control"></span>
                  <span class="ec-checkbox__lebel">Remember Me</span>
                </label>
                <a href="#" class="text-primary my-2 d-block">Forgot password?</a>
              </div>
              <button class="btn btn-block btn-primary">Log In</button>
              <p class="my-5 text-center">
                Don’t have an account? <a href="#" class="text-primary">Register</a>
              </p>
            </form>
          </div>
        </div>
      </div> 
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
 

  <?php $this->load->view('footer'); ?>