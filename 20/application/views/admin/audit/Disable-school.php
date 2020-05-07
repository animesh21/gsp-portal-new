<style type="text/css">
    .panel{border-radius: 0px !important;}
    .danger{color:red !important; font-size: 12px !important; font-weight: bold !important;}
    .list-unstyled li{ list-style:none; padding:3px 3px 3px 3px;}
    .list-unstyled li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
    .list-unstyled li input[type="radio"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
    .list-inline li{ list-style:none; padding:3px 3px 3px 3px;}
    .list-inline li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
    .list-inline li input[type="radio"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
</style>
<div class="top-area">

  <h2>Disable Your School</h2>
</div>
<div class="row">
  <div class="col-md-12">
   <div class="panel panel-default">
      <div class="panel-heading">Disable Your School</div>
	  <?php 
	 
	  echo form_open('admin/Login/Auth_unable1'); ?>
      <div class="form-group" style="padding:12px 12px 12px 12px;">
	    <label>Enter Your Password:</label>
        <input type="password" class="form-control" name="password" placeholder="Please enter Passcode"/><br/>
        <input type="hidden" class="form-control" name="userid" id="userid" value="<?php echo $_GET['schoolid']; ?>"/>
        <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit',"class"=>"btn btn-danger")); ?> </div>
      <div class="form-group">
        <div class=" col-sm-10"> </div>
      </div>
      <?php echo form_close(); ?> </div>
  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


<script type="text/javascript">
/* $('#submit').click(function(){
   alert("School Has Deleted Successfully...");
   location.reload();
}); */
</script>
