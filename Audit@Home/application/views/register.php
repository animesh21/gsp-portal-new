 <?php $this->load->view('header'); ?>

<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <div class="card shadow-v2"> 
         <div class="card-header border-bottom">
          <h4 class="mt-4">
            Student Registration Form!
          </h4>
         </div>         
          <div class="card-body">
            
            <form action="#" method="POST" class="px-lg-4">
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-user"></span>
                </div>
                <input type="text" class="form-control border-left-0 pl-0" placeholder="Full Name">
              </div>
             
               <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-email"></span>
                </div>
                <input type="email" class="form-control border-left-0 pl-0" placeholder="Email">
              </div>

               <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-mobile"></span>
                </div>
                <input type="text" class="form-control border-left-0 pl-0" placeholder="mobile">
              </div>

              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-location"></span>
                </div>
                <input type="text" class="form-control border-left-0 pl-0" placeholder="address">
              </div>

              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-location"></span>
                </div>
                <input type="text" class="form-control border-left-0 pl-0" placeholder="subject">
              </div>

              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-location"></span>
                </div>
                <textarea class="form-control border-left-0 pl-0" placeholder="message"></textarea>
                  
              </div>
               

 
              <button class="btn btn-block btn-primary">Register Now</button>
               
            </form>
          </div>
        </div>
      </div> 
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
 

 <?php $this->load->view('footer'); ?>