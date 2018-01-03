<style>
    .panel
    {
        border-radius: 0px !important;
    }
    .danger
    {
        color:red !important;
        font-size: 12px !important;
        font-weight: bold !important;
    }
	.list-unstyled li{ list-style:none; padding:3px 3px 3px 3px;}
	.list-unstyled li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
	.list-unstyled li input[type="radio"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
	
	.list-inline li{ list-style:none; padding:3px 3px 3px 3px;}
	.list-inline li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
	.list-inline li input[type="radio"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
</style>
<div class="top-area">
  <h2>Send FeedBack</h2>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">Select Filters</div>
      <form method="post" id="frmSendblukemail">
        <div class="panel-body">
        <div class="form-group col-md-12">
          <label>Subject:</label>
          <input type="text" class="form-control" name="subject" id="subject">
        </div>
        <div class="form-group col-md-12">
          <label for="pwd">Message:</label>
          <textarea class="form-control" id="message" name="message"></textarea>
        </div>
        <div class="form-group col-md-4">
          <label for="pwd">Select User Email-Id:</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="checkbox-inline">
              <input type="checkbox" value="coemail" name="coemail" id="coemail"/>
              Coordinator Email</label>
            </li>
            <li>
              <label class="checkbox-inline">
              <input type="checkbox" value="schoolemail" name="coemail" id="schoolemail" />
              School Email</label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-8">
          <label for="pwd">Select Progress Based User:</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="" name="progress" id="progress" onclick="get_all_submit_shcool();"  />
              Audit Submitted</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value=" =100" name="progress" id="progress" />
              100 percent </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value=" =75" name="progress" id="progress" />
              75 percent</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="=50" name="progress" id="progress" />
              50 percent</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value=" BETWEEN 10 AND 40" name="progress" id="progress"  />
              10-40 percent</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value=" =5" name="progress" id="progress"  />
              5 percent</label>
            </li>
          </ul>
        </div>
		<div class="form-group col-md-12">
          <label for="pwd">Select School Category :</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="" name="school_category" id="school_category"/>
              Day Scholar</label>
            </li>
            <li>
              <label class="radio-inline">
               <input type="radio" value="" name="school_category" id="school_category"/>
             Day Boarding </label>
            </li>
			<li>
              <label class="radio-inline">
              <input type="radio" value="" name="school_category" id="school_category"/>
              Residential</label>
            </li>
            <li>
              <label class="radio-inline">
               <input type="radio" value="" name="school_category" id="school_category"/>
              Day Scholar + Day Boarding </label>
            </li>
			<li>
              <label class="radio-inline">
              <input type="radio" value="" name="school_category" id="school_category"/>
              Day Boarding + Residential</label>
            </li>
            <li>
              <label class="radio-inline">
               <input type="radio" value="" name="school_category" id="school_category"/>
              Day Scholar + Residential </label>
            </li>
			 <li>
              <label class="radio-inline">
               <input type="radio" value="" name="school_category" id="school_category"/>
              Day Scholar + Day Boarding + Residential </label>
            </li>
          </ul>
        </div>
		<div class="form-group col-md-4">
          <label for="pwd">Select School Type :</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="" name="school_type" id="school_type"/>
             Only boys  </label>
            </li>
            <li>
              <label class="radio-inline">
               <input type="radio" value="" name="school_type" id="school_type"/>
             Only Girls   </label>
            </li>
			 <li>
              <label class="radio-inline">
               <input type="radio" value="" name="school_type" id="school_type"/>
              Mixed/Co-education </label>
            </li>
          </ul>
        </div>
		<div class="form-group col-md-8">
          <label for="pwd">Select Type of Aid:</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="" name="school_aid" id="school_type"/>
              Government School</label>
            </li>
            <li>
              <label class="radio-inline">
               <input type="radio" value="" name="school_aid" id="school_type"/>
              Government - Aided School </label>
            </li>
			 <li>
              <label class="radio-inline">
               <input type="radio" value="" name="school_aid" id="school_type"/>
              Private School </label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-12">
          <label for="pwd">Select All Email-Id:</label>
          <br/>
          <input type="checkbox" name="email_list_all" id="email_list_all" style="opacity: 0.8; margin-top:-1px;" />
          <br/>
          <br/>
          <table id="email_table" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>School Id</th>
                <th>List Of Email-Id</th>
                <th>Progress</th>
                <th>Check</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
          <button type="submit" class="btn btn-default btn-block btn-lg" style="background: #e86549 !important; color: #fff">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$("input[name='coemail'],input[name='progress']").change('click',function(){
  var email="";
  var progress=$("input[name='progress']:checked").val();
  $("input[name='coemail']:checked").each(function(){
    var temp = $(this).val();
    email = email+ temp +",";
  });
  $.ajax({
		url:'<?php echo base_url("admin/audit_started/filter_email");?>',
		type:'POST',
		data:{'coemail':email,'progress':'progress'+progress},
		success: function (data) {
			$("#email_table tbody").empty();
			$("#email_table tbody").append(data);
		}
	});
});


/*
$( document ).ready(function() {
                $('#example1').dataTable({
                 "bProcessing": true,
                 "sAjaxSource": "functions-hs/list-cpa-json.php",
                 "aoColumns": [
				        { mData: 'id' }
                        { mData: 'invoice_id' },
						{ mData: 'posted_date' },
						{ mData: 'amount_of_invoice' },
						
                ]
        });   
});*/
  
</script>
<script type="text/javascript">
$(document).ready(function(){
$('#state').on('change',function(){
     var email="";
     $("input[name='coemail']:checked").each(function(){ 
      var temp = $(this).val();
      email = email+ temp +",";
     });
		var state = $(this).val();
		$.ajax({
			url:'<?php echo base_url("admin/audit_started/filter_email");?>',
			data:{'coemail':email,'state':'state='+state},
			type:'post',
			success:function(data){
		     	$("#email_table tbody").empty();
				$('#email_table tbody').append(data);
			}
	    });
	});
});
</script>
<script type="text/javascript">
 jQuery('#frmSendblukemail').submit(function(e){
	e.preventDefault();
	var subject=$("#subject").val();
	var message=$("#message").val();
	$('input[name="email_list[]"]:checked').each(function(){
	  jQuery.ajax({
	  url:"https://api.elasticemail.com/v2/email/send",
	  type:"POST",
	  data:{"api_key":"a62876ee-8ef8-4c83-a35c-c6eaa0f29765","from":"support@greenschoolsprogramme.org","to":$(this).val(),"subject":subject,"body_text":message},
	  success:function(reponse){
	    alert("Email has been send successful...");
	  }
	}); 
  });
});
	/*
	var formData = new FormData(jQuery('#frmSendblukemail')[0]);
	formData.append('action','create_events');
	jQuery.ajax({
	  url:"<?php echo base_url("");?>/bulk-email.php",
	  type:"POST",
	  data:formData,
	  cache: false,
      contentType: false,
      processData: false,
	  success:function(reponse){
		location.reload();
	  }
	});*/
$("#email_list_all").click(function(){
  $(".checkbox").attr('checked', true);
});
</script>
