<style type="text/css">

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}
#copyright{ color:#FFFFFF; font-size:10px; padding:6px 0px 6px 0px;}
</style>
<a class="" onClick="topFunction()" id="myBtn" ><strong><img src="<?php echo base_url(); ?>assets/img/top.png"></strong></a>
<?php $this->load->view('modals/air_modal'); ?>
<!--Ends Here-->
<div id="ChangePass" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Change Password </h4>
      </div>
      <div class="modal-body">
        <div class="col-lg-12">
          <div class="col-lg-12">
            <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
          </div>
          <?php echo form_open('Login/ChangePass',array("method"=>"post")); ?>
          <div class="col-lg-6">
            <div class="form-group">
              <label>Old Password</label>
              <input type="Password" name="oldPassword" class="form-control" />
            </div>
            <div class="form-group">
              <label>New Password</label>
              <input type="Password" name="pass" pattern=".{8,15}" required title="8 to 15 characters" class="form-control" required/>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" type="submit">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" id="movenextbtn" style="margin:0px;">Return to survey</button>
      </div>
      <?php echo form_close(); ?> </div>
  </div>
</div>
<footer>
  <script type="text/javascript">
$("#schoolnext,#movenextbtn,#airnext,#energynext,#foodnext,#movenextbtn,#wastenext").click(function(){
   $(".hide_one").removeAttr("style");
   $(".hide_one").css('display',"block!important");
   $(".hide_one").append('<h1 class="text-center" style="color:#fff; margin:250px auto; position:relative; background:#transparent!important;">Green Schools Programme Audit 2018<p style="font-size:13px;">GSP Audit 2018 Processing Next Section</p><div class="loader" style="margin:0px auto; z-index: 1000000;background:#transparent!important; position:relative;"></div></h1>');
    setTimeout(function(){ $(".hide_one").css("display","none"); },10000);
});

$("#btnGeneralPrevious,#btnAirPrevious,#btnlandPrevious,#btnEnergyPrevious,#btnFoodPrevious,#btnWaterPrevious,#btnWastePrevious").click(function(){
  $(".hide_one").removeAttr("style");   
  $(".hide_one").css('display',"block!important");
   $(".hide_one").append('<h1 class="text-center" style="color:#fff; margin:250px auto; position:relative;  background:#transparent!important;">Green Schools Programme Audit 2018<p style="font-size:13px;">GSP Audit 2018 Processing Next Section</p><div class="loader" style="margin:0px auto; z-index: 1000000;background:#transparent!important; position:relative;"></div></h1>');
});

$("ol li").click(function(){
  $(".hide_one").removeAttr("style");
  $(".hide_one").css('display',"block!important");
   $(".hide_one").append('<h1 class="text-center" style="color:#fff; margin:250px auto; position:relative;  background:#transparent!important;">Green Schools Programme Audit 2018<p style="font-size:13px;">GSP Audit 2018 Processing Next Section</p><div class="loader" style="margin:0px auto; z-index: 1000000;background:#transparent!important; position:relative;"></div></h1>');
   setTimeout(function(){ $(".hide_one").css("display","none"); },10000);
});	
</script>
  <!--div class="container">
  <ul class="links list-inline">
   <li class="store"><a href="http://csestore.cse.org.in/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/store.jpg" class="img-responsive"></a></li>
   <li class="portal"><a href="http://www.indiaenvironmentportal.org.in/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/portal.jpg" class="img-responsive"></a></li>
   <li class="earth"><a href="http://www.downtoearth.org.in/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/earth.jpg" class="img-responsive"></a></li>
   <li class="rain"><a href="http://www.rainwaterharvesting.org/" target="_blank"><img src="<?php echo base_url(); ?>assets/img/rain.jpg" class="img-responsive"></a></li>
   <li class="times"><a href="https://www.downtoearth.org.in/category/young" target="_blank"><img src="<?php echo base_url(); ?>assets/img/times.jpg" class="img-responsive"></a></li>
  </ul>
 </div-->
  <div class="text-center" id="copyright">Copyright © 2020 Centre for Science and Environment</div>
</footer>
</body></html>
