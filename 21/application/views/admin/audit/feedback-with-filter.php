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
    <h2>Send Message</h2>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Select Filters</div>
            <?php echo form_open('admin/audit_started/send_email/', array('id' => 'frmSendblukemail')); ?>
            <div class="panel-body">
                <!-- <div class="form-group col-md-4">
                    <label for="pwd">Select Phase:</label>
                    <select  class="form-control" name="phase">
                        <option value="0"> Both</option>
                        <option value="1"> First Phase</option>
                        <option value="2"> Second Phase</option>
                    </select>
                </div> -->
                <div class="form-group col-md-12">
                    <label>Subject:</label>
                    <input type="text" class="form-control" name="subject" id="subject" value="<?php echo $subject; ?>">
                </div>
                <div class="form-group col-md-12">
                    <label for="pwd">Message:</label>
                    <textarea name="message" id="editor1" rows="10" cols="80"><?php echo $message; ?></textarea>
                </div>
                <!-- <div class="form-group col-md-4">
                    <label for="pwd">Select User Email-Id:</label>
                    <select  class="form-control" name="email">
                        <option value="allemail" selected="selected"> All Email</option>
                        <option value="coemail"> Coordinator Email</option>
                        <option value="schoolemail"> School Email</option>
                    </select>
                </div> -->
                <!-- <div class="form-group col-md-8">
                    <label for="pwd">Select Progress Based User:</label>
                    <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
                        <li>
                            <label class="checkbox-inline">
                               <input type="checkbox" value="100" name="complete" id="complete"  />
				Audit Submitted</label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="100" name="progress[]" id="progress"  />
                                100 percent</label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="75" name="progress[]" id="progress" />
                                75 percent</label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="50" name="progress[]" id="progress" />
                                50 percent</label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value=" BETWEEN 10 AND 40" name="progress_range" id="progress_range" />
                                10-40 percent</label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="5" name="progress[]" id="progress"  />
                                5 percent</label>
                        </li>
                    </ul>
                </div> -->
                <!-- <div class="form-group col-md-12">
                    <label for="pwd">Select School Category :</label>
                    <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="1" name="school_category[]" id="school_category"/>
                                Day Scholar</label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="2" name="school_category[]" id="school_category"/>
                                Day Boarding </label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="3" name="school_category[]" id="school_category"/>
                                Residential</label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="4" name="school_category[]" id="school_category"/>
                                Day Scholar + Day Boarding </label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="5" name="school_category[]" id="school_category"/>
                                Day Boarding + Residential</label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="6" name="school_category[]" id="school_category"/>
                                Day Scholar + Residential </label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="7" name="school_category[]" id="school_category"/>
                                Day Scholar + Day Boarding + Residential </label>
                        </li>
                    </ul>
                </div> -->
                <!-- <div class="form-group col-md-4">
                    <label for="pwd">Select School Type :</label>
                    <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="1" name="school_type[]" id="school_type"/>
                                Only boys </label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="2" name="school_type[]" id="school_type"/>
                                Only Girls </label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="3" name="school_type[]" id="school_type"/>
                                Mixed/Co-education </label>
                        </li>
                    </ul>
                </div> -->
               <!--  <div class="form-group col-md-8">
                    <label for="pwd">Select Type of Aid:</label>
                    <ul class="list-unstyled list-inline" style="margin:0; padding:0;">
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="1" name="school_aid[]" id="school_type"/>
                                Government School</label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="2" name="school_aid[]" id="school_type"/>
                                Government - Aided School </label>
                        </li>
                        <li>
                            <label class="checkbox-inline">
                                <input type="checkbox" value="3" name="school_aid[]" id="school_type"/>
                                Private School </label>
                        </li>
                    </ul>
                </div> -->
               <!--  <div class="form-group col-md-4">
                    <label for="pwd">Select State :</label>
                    <?php //echo form_dropdown('state', $states, 0, array('class' => 'form-control', 'id' => 'country-select')); ?></div>
                <div class="form-group  col-lg-4">
                    <label for="pwd">School-Category :</label>
                    <?php //echo form_dropdown('school', array('0' => 'Primary', '1' => 'Secondary', '2' => 'All'), $this->input->post('school'), array('class' => 'form-control', 'id' => 'school-select')); ?> </div>
                <div class="form-group  col-lg-4">
                    <label for="pwd">Ratings :</label>
                    <select class="form-control" name="rating">
                        <option value="">Select Rating</option>
                        <option value="Green">Green</option>
                        <option value="Yellow">Yellow</option>
                        <option value="Orange">Orange</option>
                        <option value="Red">Red</option>
                    </select>
                </div> -->
                <!-- <div class="form-group  col-md-4">
		    <label for="pwd">Board of Education:</label>
		    <select class="form-control" name="board">
			<option value="">All</option>
			<option value="1">State board of education</option>
			<option value="2">Central Board of Secondary Education</option>
			<option value="3">Indian Certificate of Secondary Educations</option>
			<option value="4">IB/IGCSE</option>
                        <option value="5">Others</option>
		    </select>
		</div> -->
		<!-- <div class="form-group col-md-4">
		    <label for="pwd">Select Name :</label>
		    <select class="form-control" name="schoolname">
			<option value="">Select School</option>
			<option value="Satya Bharti">Satya Bharti</option>
			<option value="Mount Litera">Mount Litera</option>
			<option value="Kendriya Vidyalaya">KVS</option>
			<option value="Jawahar Navodya">JNV</option>
		    </select>
		</div>   -->  
		<!--  <div class="form-group col-md-4">
		    <label for="pwd">Select District :</label>
		    <?php //echo form_dropdown('district', $district, 0, array('class' => 'form-control', 'id' => 'district-select')); ?>
		 </div> -->
		<!--  <div class="form-group col-md-4">
		    <label for="pwd">BY School Alphabet :</label>
		    <input type="text" name = "alphabate" />
		</div>   -->  
                <div class="form-group col-md-12">
                    <table id="tablePerformance" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>User Id</th>
                                <th>UDISE Code</th>
                                <th>Name</th>
                                <th class="hide">Address 1</th>
                                <th class="hide">Address 2</th>
                                <th>Country</th>
                                <th>State</th>
                                <th>District</th>
                                <th>City</th>
                                <th class="hide">Pincode</th>
                               
                                <th class="hide">STD Code</th>
                                <th class="hide">Landline Number</th>
                                <th class="hide">School Email</th>
                                <th class="hide">Principal Name</th>
                                <th class="hide">Principal Mobile</th>
                                <th class="hide">Coordinator Name</th>
                                <th class="hide">Coordinator Mobile</th>
                                <th class="hide">Password</th>
                                <th class="hide">Date & Time</th>
                                <th>Completeness</th>
                                <th>School Category</th>
                                 <th>School Type</th>
                                 <th>Type of Aid</th> 
                                 <th>Board</th>
                                <th>Rating</th>
                                <th style="width:90px;"> <label class="checkbox-inline">
                                        <input type="checkbox" name="email_list_all" id="email_list_all" style="opacity: 0.8; margin-top:-1px;" />
                                        Check</label></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($record); $i++) { ?>
                                <?php
                                $arr = array(
				   
                                    '1' => 'Day Scholar',
                                    '2' => 'Day Boarding',
                                    '3' => 'Residential',
                                    '4' => 'Day Scholar + Day Boarding',
                                    '5' => 'Day Boarding + Residential',
                                    '6' => 'Day Scholar + Residential',
                                    '7' => 'Day Scholar + Day Boarding + Residential'
                                );
                                $arrGender = array('0' => 'Only Boys','1' => 'Only Boys', '2' => 'Only Girls', '3' => 'Mixed/Co-education');
                                $schoolType = array(
				   	
                                    '1' => 'Government School',
                                    '2' => 'Government &#45; Aided School',
                                    '3' => 'Private School'
                                );
                                
                                $board = array(
                                    '1'=> 'State board',
                                    '2'=>'Central board',
                                    '3'=>'Indian certificate',
                                    '4'=> 'IB/IGCSE',
                                    '5'=> 'Others'
                                );
                                ?>
                                <tr>
                                    <td><?php echo $i + 1; ?></td>
                                    <td><?php  $rr = $record[$i]['userid']; 
                                            ?>
                                           <?php  $t = getSchoolId($rr) ?>
                                          
                                          <?php echo $t; ?></td>
                                    <td><?php if ($record[$i]['udise'] != ''): echo $record[$i]['udise'];
                                endif ?></td>
                                    <td><?php if ($record[$i]['name'] != ''): echo $record[$i]['name'];
                                endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['address1'] != ''): echo $record[$i]['address1'];
                                endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['address2'] != ''): echo $record[$i]['address2'];
                                endif ?></td>
                                    <td><?php if ($record[$i]['country'] != ''): echo $record[$i]['country'];
                                endif ?></td>
                                    <td><?php if ($record[$i]['state_name'] != ''): echo $record[$i]['state_name'];
                                endif ?></td>
                                    <td><?php if ($record[$i]['district_name'] != ''): echo $record[$i]['district_name'];
                                endif ?></td>
                                    <td><?php if ($record[$i]['city'] != ''): echo $record[$i]['city'];
                                endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['pincode'] != ''): echo $record[$i]['pincode'];
                                endif ?></td>
                                    
                                    <td class="hide"><?php if ($record[$i]['std'] != ''): echo $record[$i]['std'];
                                endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['telephone'] != ''): echo $record[$i]['telephone'];
                                endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['schoolemail'] != ''): echo $record[$i]['schoolemail'];
                                endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['principle_name'] != ''): echo $record[$i]['principle_name'];
                                endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['mobile'] != ''): echo $record[$i]['mobile'];
                                endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['coname'] != ''): echo $record[$i]['coname'];
                                    endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['coemail'] != ''): echo $record[$i]['coemail'];
                                    endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['password'] != ''): echo $record[$i]['password'];
                                    endif ?></td>
                                    <td class="hide"><?php if ($record[$i]['date_added'] != ''): echo $record[$i]['date_added'];
                                    endif ?></td>
                                    <td><?php if ($record[$i]['progress'] != ''): echo $record[$i]['progress'];
                                    endif ?></td>
                                   <td><?php if(isset($record[$i]['Q1S1'])){ echo $arr[$record[$i]['Q1S1']]; }else{echo "N/A";}  ?></td>
                                     <td><?php if(isset($record[$i]['Q2G1'])){ echo $arrGender[$record[$i]['Q2G1']]; }else{echo "N/A";}   ?></td>
                                      <td><?php if(isset($record[$i]['Q9G1'])){ echo $schoolType[$record[$i]['Q9G1']]; }else{echo "N/A";}  ?></td> 
                                    <td><?php if(isset($record[$i]['Q3G1'])){ echo $board[$record[$i]['Q3G1']]; }else{echo "N/A";}  ?></td>  
                                      
                                    <!-- <td><?php //if($record[$i]['progress']!=''): echo $record[$i]['progress']; endif  ?></td>-->
                                     <td><?php if ($record[$i]['remark'] != ''): echo "<label class='label label-" . $record[$i]['remark'] . "'>" . $record[$i]['remark'] . "</label>";
    endif ?></td>
                                    <td><?php //echo $mail_status;  ?>
    <?php if ($mail_status == "coemail") { ?>
                                            <input type="checkbox" name="email_list[]" class="checkbox" value="<?php echo ($record[$i]['coemail'] != '') ? $record[$i]['coemail'] : ""; ?>" style="opacity: 0.8; margin-top:-1px;" />
    <?php } else if ($mail_status == "schoolemail") { ?>
                                            <input type="checkbox" name="email_list[]" class="checkbox" value="<?php echo ($record[$i]['schoolemail'] != "") ? $record[$i]['schoolemail'] : ""; ?>" style="opacity: 0.8; margin-top:-1px;" />
    <?php } else if ($mail_status == "both") { ?>
                                            <input type="checkbox" name="email_list[]" class="checkbox" value="<?php echo $record[$i]['coemail'] . "," . $record[$i]['schoolemail']; ?>" style="opacity: 0.8; margin-top:-1px;" />
    <?php } ?>
                                    </td>
                                </tr>
<?php } ?>
                        </tbody>
                    </table>
                </div>
                <!-- <div class="col-md-6">
                    <button type="button" class="btn btn-default btn-block btn-lg" style="background: #e86549 !important; color: #fff">Filter Email</button>
                </div> -->
                <div class="col-md-6">
                    <button type="submit" name="send_mail" id="send_email" class="btn btn-default btn-block btn-lg">Send Email</button>
                </div>
            </div>
<?php echo form_close(); ?> </div>
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
     url:'<?php echo base_url("admin/audit_started/filter_email"); ?>',
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
     url:'<?php echo base_url("admin/audit_started/filter_email"); ?>',
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
    var emailType = "<?php echo $mail_status; ?>";
</script>
<script type="text/javascript">
    jQuery('#send_email').click(function () {
        var subject = $("#subject").val();
        var message = $("#message").val();
        var test = [];
        ///alert(emailType);
        if ((emailType == "schoolemail") || (emailType == "coemail"))
        {
            var arr = $('input[type=checkbox]:checked').map(function (index, element) {
                //console.log(element);
                if ($(element).val() != '')
                {
                    //return $(element).val();
                    test.push($(element).val());
                }
            }).get();
            ///console.log(test);
        } else if (emailType == "both")
        {
            var arr = $('input[type=checkbox]:checked').map(function (index, element) {
                //console.log(element);
                if ($(element).val() != '')
                {
                    ///console.log($(element).val());
                    var email = $(element).val();
                    value = email.split('/');
                    for (i = 0; i < value.length; i++)
                    {
                        if (value[i] != '')
                        {
                            test.push(value[i]);
                        }
                    }
                    //return $(element).val();
                    //test.push($(element).val());
                }
            }).get();
        }
        //console.log(test);
        $.each(test, function (index, value) {
            //console.log('Index'+index+'Value'+value);
            jQuery.ajax({
                url: "https://api.elasticemail.com/v2/email/send",
                type: "POST",
                data: {"api_key": "a62876ee-8ef8-4c83-a35c-c6eaa0f29765", "from": "support@greenschoolsprogramme.org", "to": value, "subject": subject, "body_text": message},
                success: function (reponse) {
                    //alert("Email has been send successful...");
                }
            });
        });
        $('input[name="email_list[]"]:checked').map(function () {
//	  jQuery.ajax({
//	  url:"https://api.elasticemail.com/v2/email/send",
//	  type:"POST",
//	  data:{"api_key":"a62876ee-8ef8-4c83-a35c-c6eaa0f29765","from":"support@greenschoolsprogramme.org","to":$(this).val(),"subject":subject,"body_text":message},
//	  success:function(reponse){
//	    alert("Email has been send successful...");
//	  }
//	}); 
        });
    });
   /* $("#email_list_all").click(function () {
        if ($("#email_list_all").prop('checked'))
        {
            $(".checkbox").attr('checked', true);
        } else
        {
            $(".checkbox").attr('checked', false);
        }
    });*/
	
$(document).ready(function () { 
    var oTable = $('#tablePerformance').dataTable({
        stateSave: true
    });
    $("#email_list_all").on('change',function(){
	     if ($(this).is(':checked')){
          oTable.$("input[type='checkbox']").prop('checked', $(this.checked));
		 }else{
		  oTable.$("input[type='checkbox']").prop('checked', false);
		  window.reload();
		 }  
    });
});
	
// 	$(document).ready(function() {  


//     $('thead input[name="email_list_all"]').on('click', function(e){
//         //alert('ddd');
//       if(this.checked){
//          $('#tablePerformance tbody input[type="checkbox"]:not(:checked)').trigger('click');
//       } else {
//          $('#tablePerformance tbody input[type="checkbox"]:checked').trigger('click');
//       }

//       // Prevent click event from propagating to parent
//       e.stopPropagation();
//    });

        
//         } );
 
	
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

    .btn-lg{
        background: #24a5a0;
        color: white;
    }

 .btn-lg:hover {
  background-color: #2291a4;
  border:2px solid gray;
  color: white;
}
</style>

<script type="text/javascript" src="https://cdn.ckeditor.com/4.5.1/standard/ckeditor.js"></script>

<script type="text/javascript">
    
CKEDITOR.editorConfig = function (config) {
    config.language = 'es';
    config.uiColor = '#F7B42C';
    config.height = 300;
    config.toolbarCanCollapse = true;

};
CKEDITOR.replace('editor1');

</script>
