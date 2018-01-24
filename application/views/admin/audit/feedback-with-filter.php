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
  <h2>Send FeedBack</h2>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">Select Filters</div>
       <?php echo form_open('admin/audit_started/filter_email/',array('id'=>'frmSendblukemail')); ?>
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
              <label class="radio-inline">
              <input type="radio" value="coemail" name="email" id="coemail"/>
              Coordinator Email</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="schoolemail" name="email" id="schoolemail" />
              School Email</label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-8">
          <label for="pwd">Select Progress Based User:</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="100" name="progress" id="progress"  />
              Audit Submitted</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="75" name="progress" id="progress" />
              75 percent</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="50" name="progress" id="progress" />
              50 percent</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value=" BETWEEN 10 AND 40" name="progress" id="progress"  />
              10-40 percent</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="5" name="progress" id="progress"  />
              5 percent</label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-12">
          <label for="pwd">Select School Category :</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="1" name="school_category" id="school_category"/>
              Day Scholar</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="2" name="school_category" id="school_category"/>
              Day Boarding </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="3" name="school_category" id="school_category"/>
              Residential</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="4" name="school_category" id="school_category"/>
              Day Scholar + Day Boarding </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="5" name="school_category" id="school_category"/>
              Day Boarding + Residential</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="6" name="school_category" id="school_category"/>
              Day Scholar + Residential </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="7" name="school_category" id="school_category"/>
              Day Scholar + Day Boarding + Residential </label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-4">
          <label for="pwd">Select School Type :</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="1" name="school_type" id="school_type"/>
              Only boys </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="2" name="school_type" id="school_type"/>
              Only Girls </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="3" name="school_type" id="school_type"/>
              Mixed/Co-education </label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-8">
          <label for="pwd">Select Type of Aid:</label>
          <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
            <li>
              <label class="radio-inline">
              <input type="radio" value="1" name="school_aid" id="school_type"/>
              Government School</label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="2" name="school_aid" id="school_type"/>
              Government - Aided School </label>
            </li>
            <li>
              <label class="radio-inline">
              <input type="radio" value="3" name="school_aid" id="school_type"/>
              Private School </label>
            </li>
          </ul>
        </div>
        <div class="form-group col-md-4">
          <label for="pwd">Select State :</label>
          <?php echo form_dropdown('state', $states, $this->input->post('state'), array('class' => 'form-control', 'id' => 'country-select')); ?></div>
        <div class="form-group  col-lg-4">
          <label for="pwd">School-Category :</label>
          <?php echo form_dropdown('school', array('0' => 'Primary', '1' => 'Secondary','2'=>'All'), $this->input->post('school'), array('class' => 'form-control', 'id' => 'school-select')); ?> </div>
		<div class="form-group  col-lg-4">
          <label for="pwd">Ratings :</label>
		 <select class="form-control" name="rating">
		    <option value="">Select Rating</option>
		    <option value="Green">Green</option>
			<option value="Yellow">Yellow</option>
			<option value="Orange">Orange</option>
			<option value="Red">Red</option>
		  </select>
           </div>
        <div class="form-group col-md-12">
          <table id="tablePerformance" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
            <thead>
              <tr>
                <th>Sr. No.</th>
                <th>School Id</th>
                <th>Name</th>
                <th>State</th>
				<th>City</th>
                <th>District</th>
				<th>School Category</th>
				<th>School Type</th>
				<th>Type of Aid</th>
				<th>Coemail</th>
                <th>Progress</th>
		      <th>Rating</th>
                <th style="width:90px;"> <label class="checkbox-inline"><input type="checkbox" name="email_list_all" id="email_list_all" style="opacity: 0.8; margin-top:-1px;" /> Check</label></th>
              </tr>
            </thead>
             <tbody>
			    <?php //echo '<pre>'; print_r($record); ?>
				<tr>
				   <?php for($i=0; $i<count($record); $i++){ ?>
				   		<?php $arr=array(
                                '1'=>'Day Scholar',
                                '2'=>'Day Boarding',
                                '3'=>'Residential',
                                '4'=>'Day Scholar + Day Boarding',
                                '5'=>'Day Boarding + Residential',
                                '6'=>'Day Scholar + Residential',
                                '7'=>'Day Scholar + Day Boarding + Residential'
                            );
							$arrGender=array('1'=>'Only Boys', '2'=>'Only Girls', '3'=>'Mixed/Co-education');
							$schoolType=array(
								'1'=>'Government School',
								'2'=>'Government &#45; Aided School',
								'3'=>'Private School'
							); 
						?>
				   		<tr>
							<td><?php echo $i+1; ?></td>
							<td><?php if($record[$i]['id']!=''): echo $record[$i]['id']; endif  ?></td>
							<td><?php if($record[$i]['name']!=''): echo $record[$i]['name']; endif ?></td>
							<td><?php if($record[$i]['state_name']!=''): echo $record[$i]['state_name']; endif ?></td>
							<td><?php if($record[$i]['city']!=''): echo $record[$i]['city']; endif ?></td>
							<td><?php if($record[$i]['district_name']!=''): echo $record[$i]['district_name']; endif  ?></td>
							<td><?php if($record[$i]['Q1S1']!=''): echo $arr[$record[$i]['Q1S1']]; endif ?></td>
							<td><?php if($record[$i]['Q2G1']!=''): echo $arrGender[$record[$i]['Q2G1']]; endif  ?></td>
							<td><?php if($record[$i]['Q9G1']!=''): echo $schoolType[$record[$i]['Q9G1']]; endif ?></td>
							<td>
								<?php if(isset($record[$i]['coemail'])): echo $record[$i]['coemail']; endif  ?>
								<?php if(isset($record[$i]['schoolemail'])): echo $record[$i]['schoolemail']; endif  ?>
							</td>
							<td><?php if($record[$i]['progress']!=''): echo $record[$i]['progress']; endif ?></td>
							
						<td><?php if($record[$i]['remark']!=''): echo "<label class='label label-".$record[$i]['remark']."'>".$record[$i]['remark']."</label>"; endif ?></td>
<td></td>
		     
		     </tr>
				   <?php }?>
				</tr>
			 </tbody>
          </table>
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn btn-default btn-block btn-lg" style="background: #e86549 !important; color: #fff">Filter Email</button>
        </div>
        <div class="col-md-6">
          <button type="submit" class="btn btn-default btn-block btn-lg" style="background: #e86549 !important; color: #fff">Send Email</button>
        </div>
      </div> 
       <?php echo form_close(); ?>
      </div> 
	</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
/*$("input[name='progress']").change('click',function(){
  var email="";
  var progress=$("input[name='progress']:checked").val();
  $("input[name='coemail']:checked").each(function(){
    var temp = $(this).val();
    email = email+ temp +",";
  });
	 var school_category=$('#school_category').val();
  $.ajax({
		url:'<?php echo base_url("admin/audit_started/filter_email");?>',
		type:'POST',
		data:{'coemail':email,'progress':'progress'+progress,'questionid':'Q1S1='+school_category},
		success: function (data) {
		/*$("#tablePerformance1 tbody").empty();
		$('#tablePerformance1 tbody').append(data);*/
		/*alert(data);
			$('#table1').dataTable({
                 "bProcessing": true,
                 "sAjaxSource":JSON.parse(data),
                 "aoColumns": [
				        { mData: 'sr_no'},
				        { mData: 'id' },
                        { mData: 'name' },
						{ mData: 'progress' },
						{ mData: 'check',
						 "orderable": false,
                         "searchable": false,
                         "render": function(data,type,row,meta) { 
						     var a ='<input type="checkbox" name="" values="'+row.check+'" />';                             return a;
						}	
					}					
				],
				"dom": 'lBfrtip',
                "buttons": [
                'excel'
            ],
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
            "iDisplayLength": 25
         });
		}
	});
});*/
</script>
<script type="text/javascript">
/*$(document).ready(function(){
$('#state').on('change',function(){
     var email="";
     $("input[name='coemail']:checked").each(function(){ 
      var temp = $(this).val();
      email = email+ temp +",";
     });
		var state = $(this).val();
		$.ajax({
			url:'<?php echo base_url("admin/audit_started/filter_email");?>',
			data:{'coemail':email,'state':'a.state='+state,'questionid':'&& d.Q1S1='+school_category},
			type:'post',
			success:function(data){
			alert(data);
		     	$("#email_table tbody").empty();
				$('#email_table tbody').append(data);
			}
	    });
	});
});*/
</script>
<script type="text/javascript">
 /*jQuery('#frmSendblukemail').submit(function(e){
	e.preventDefault();
	var subject=$("#subject").val();
	var message=$("#message").val();
	$('input[name="email_list[]"]:checked').each(function(){
	  jQuery.ajax({
	  url:"https://api.elasticemail.com/v2/email/send",
	  type:"POST",
	  data:{"api_key":"3dc010df-18e2-4bb9-9ac7-ac4d8382c490","from":"siddhartha2488@gmail.com","to":$(this).val(),"subject":subject,"body_text":message},
	  success:function(reponse){
	    alert("Email has been send successful...");
	  }
	}); 
  });
});
$("#email_list_all").click(function(){
 if($("#email_list_all").prop('checked'))
 {
  $(".checkbox").attr('checked', true);
 }
 else
 {
  $(".checkbox").attr('checked', false);
 } 
});*/
</script>
<style type="text/css">
.label-orange{background:orange; color:black;}
.label-yellow{background:yellow; color:black}
.label-red {
    background-color: #d9534f; color:black;
}
.label-green {
    background-color: #5cb85c; color:black;
}
</style>
