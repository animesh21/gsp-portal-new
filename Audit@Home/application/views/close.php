<?php $this->load->view('header.php'); ?>

 
<section class="padding-y-100 bg-light">
  <div class="container">
    <div class="row">  
      <div class="col-lg-6 mx-auto">
        <div class="card shadow-v2"> 
         <div class="card-header border-bottom">
          <h4 class="mt-4">
            
            <p style="font-size:12px">GSP Audit@Home is now closed.</p>>
For those who have submitted the survey successfully, a scorecard will be emailed to you by 11 Jan 2020. For any further queries, please visit <a href="https://cdn.cseindia.org/userfiles/gsp-FAQs.pdf">here.</a>
 </p>
            
            
          </h4>
         </div>      
         

          <div class="card-body">
            <?php echo form_open('login',array('id'=>'frmLogin', 'class'=>'px-lg-4')); ?>
              <div class="input-group input-group--focus mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text bg-white ti-email"></span>
                </div>
                <p></p>
                
           <?php echo form_close(); ?>
          </div>
        </div>
      </div> 
    </div> <!-- END row-->
  </div> <!-- END container-->
</section>
 

  <?php $this->load->view('footer'); ?>
