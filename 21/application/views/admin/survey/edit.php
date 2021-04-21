<style>
    .alert {
        height: 50px !important;
        padding: 15px !important;
        font-weight: bold;
        border-radius: 0px;
    }

    .alert-success {
        border: 2px solid green;
    }

    .alert-danger {
        border: 2px solid red;
    }
</style>
<div class="top-area">
    <h2>Edit Information</h2>
</div>
<div class="row">
    <div class="col-md-12">
        <?php
        if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger alert-dismissable">';
            echo $this->session->flashdata('error');
            echo '</div></div>';
        }
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success alert-dismissable">';
            echo $this->session->flashdata('success');
            echo '</div></div>';
        }
        ?>
    </div>
    <div class="clearfix">&nbsp;</div>
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">EDIT SCHOOL DETAILS</div>
            <div class="panel-body">
                <?php echo form_open(base_url('admin/audit_started/update/') . $school->id.'/'.$school->userid) ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="text-red"><span class="cube">1</span>Name of the School / Institution:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" class="form-control text empty" name="name" id="name" placeholder="Name of the School / Institution:" value="<?php echo ($school->name != '') ? $school->name : ""; ?>" >
                        </div>
			 <div class="form-group">
                            <label for="name" class="text-red"><span class="cube">2</span>Uid</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" class="form-control text empty" name="udise" id="udise" placeholder="udise of school" value="<?php echo ($school->udise != '') ? $school->udise : ""; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="address1" class="control-label"><span class="cube">3</span>Address Line 1:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="address1" id="address1" tabindex="1" class="form-control text empty"
                                   placeholder="Address 1" value="<?php echo ($school->address1 != '') ? $school->address1 : ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="address2" class="control-label"><span class="cube">4</span>Address Line 2:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="address2" id="username" tabindex="1" class="form-control text empty"
                                   placeholder="Address 2" value="<?php echo ($school->address2 != '') ? $school->address2 : ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label"><span class="cube">5</span>Country:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="username" id="username" tabindex="1" class="form-control text empty"
                                   placeholder="Country" value="India" disabled="disabled">
                        </div>
                        <div class="form-group">
                            <label for="state" class="control-label"><span class="cube">6</span>State:</label>
                            <div class="clearfix">&nbsp;</div>
                            <?php echo form_dropdown('state', $states, set_value('state', $school->state), array('class' => 'form-control', 'id' => 'country-select', 'onchange' => 'getCities();')); ?>

                        </div>
                        <div class="form-group">
                            <label for="district" class="control-label"><span class="cube">7</span>District:</label>
                            <div class="clearfix">&nbsp;</div>
                            <?php echo form_dropdown('district', $cities, set_value('district', $school->district), array('class' => 'form-control', 'id' => 'city-select')); ?>
                        </div>
                        <div class="form-group">
                            <label for="city" class="control-label"><span class="cube">8</span>City:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" class="form-control text empty" name="city" id="username" tabindex="1"
                                   placeholder="City" value="<?php echo ($school->city != '') ? $school->city : ""; ?>">
                        </div>
			<div class="form-group">
                            <label for="landline" class="control-label"><span class="cube">16</span>Landline number:</label>
                            <div class="clearfix">&nbsp;</div>
                            <div class="cName cCode">
                                <input type="text" name="country_code" id="tisd" class="form-control placeholder"value="<?php echo set_value('country_code', '+91'); ?>" placeholder="Country Code" readonly>
                            </div>
                            <div class="cEmail iniCname">
                                <input type="text" name="std" id="tstd" class="form-control placeholder" value="<?php echo ($school->std != '') ? $school->std : ""; ?>" placeholder="STD">
                           </div>
                           <div class="mNumber">
                               <input type="text" name="telephone" class="form-control placeholder" value="<?php echo ($school->telephone != '') ? $school->telephone : ""; ?>" placeholder="Landline Number*">
                          </div>    
                        </div>    
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pincode" class="control-label"><span class="cube">9</span>Pin Code:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="number" class="form-control" name="pincode" id="username" tabindex="1" placeholder="Pin Code"
                                   value="<?php echo ($school->pincode != '') ? $school->pincode : ""; ?>" title="digits are allowed">
                        </div>
                        <div class="form-group">
                            <label for="mobile" class="control-label"><span class="cube">10</span>Enter Mobile number:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="mobile" class="text empty" id="mobile" tabindex="1" placeholder="Mobile Number"
                                   value="<?php echo ($school->mobile != '') ? $school->mobile : ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="principle_name" class="control-label"><span class="cube">11</span>Principal's Name:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="principle_name" class="text empty" id="principal" tabindex="1"
                                   placeholder="Principal's Name:" value="<?php echo ($school->principle_name != '') ? $school->principle_name : ""; ?>">
                        </div>
						<div class="form-group">
                            <label for="schoolemail" class="control-label"><span class="cube">12</span>Enter GSP School_Email:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="schoolemail" class="text empty" id="schoolemail" tabindex="1"
                                   placeholder="GSP School's Email" value="<?php echo ($school->schoolemail != '') ? $school->schoolemail : ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="coname" class="control-label"><span class="cube">12</span>Enter GSP Coordinator's Name:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="coname" class="text empty" id="cordinatorname" tabindex="1"
                                   placeholder="GSP Coordinator's Name" value="<?php echo ($school->coname != '') ? $school->coname : ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="coemail" class="control-label"><span class="cube">13</span>Enter GSP Coordinator's
                                Email:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="email" name="coemail" class="form-control" id="username" tabindex="1"
                                   placeholder="GSP Coordinator's Email" value="<?php echo ($school->coemail != '') ? $school->coemail : ""; ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="comobile" class="control-label"><span class="cube">14</span>Enter GSP Coordinator's Mobile
                                Number:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="number" name="comobile" class="form-control" id="comobile" tabindex="1"
                                   placeholder="GSP Coordinator's Mobile Number" value="<?php echo ($school->comobile != '') ? $school->comobile : ""; ?>">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="password" class="control-label"><span class="cube">15</span>Password:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" class="form-control input-lg" name="password" id="password" tabindex="1" placeholder="Password"
                                   value="<?php echo (!empty($user->password)) ? $user->password : ""; ?>" title="digits are allowed">
                        </div>
			<div class="form-group">
                            <label for="password" class="control-label"><span class="cube">17</span>Make Your School GSP Partner:</label>
                            <div class="clearfix">&nbsp;</div>
                            <select class="schoolname name form-control  placeholder" name="partner_list" id="partner_list">
	  <option value="">Select Partner</option>
	  <option value="0" <?php if($school->partner_status==0){ echo "selected"; } ?>>If Your Are Not Partner Then Select This Option</option>
	  <option value="1" <?php if($school->partner_status==1){ echo "selected"; } ?>>Church of South India</option>
	  <option value="2" <?php if($school->partner_status==2){ echo "selected"; } ?>>Jawahar Navodaya Vidyalaya (JNV) </option>
	  <option value="3" <?php if($school->partner_status==3){ echo "selected"; } ?>>Kendriya Vidyalaya Sangathan (KVS)</option>
	  <option value="4" <?php if($school->partner_status==4){ echo "selected"; } ?>>Montfortian Education Foundation</option>
	  <option value="5" <?php if($school->partner_status==5){ echo "selected"; } ?>>Mount Litera Zee Schools</option>
	  <option value="6" <?php if($school->partner_status==6){ echo "selected"; } ?>>Satya Bharti Foundation</option>
      <option value="7" <?php if($school->partner_status==6 && $school->satya_foundation_status==7){ echo "selected"; } ?>>Satya Bharti School</option>
      <option value="8" <?php if($school->partner_status==6 && $school->satya_foundation_status==8){ echo "selected"; } ?>>BF Quality Support Programme</option>
	</select>
                        </div>  
			    
			    
		<div class="form-group  satya" <?php if($school->partner_status=='6'){ ?> style="display: block;" <?php } else { ?> style="display: none;" <?php } ?> >
        <label for="password" class="control-label"><span class="cube">18</span>Please Select</label>
                            <div class="clearfix">&nbsp;</div>
                            <select class="schoolname name form-control  placeholder" name="satya_list" id="satya_list">
      
      <option value="0" <?php if($school->satya_foundation_status=='0'){ echo "selected"; } ?>>Select Partner</option>
      <option value="7" <?php if($school->satya_foundation_status=='7'){ echo "selected"; } ?>>Satya Bharti School</option>
     
      <option value="8" <?php if($school->satya_foundation_status=='8'){ echo "selected"; } ?>>BF Quality Support Programme</option>
    </select>
    </div>	    
			    
			    
			    
			    
			    
                        <div class="form-group">
                            <button class="btn btn-block btn-primary">Update</button>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <div class="clearfix">&nbsp;</div>
<!--    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">EDIT USER DETAILS</div>
            <div class="panel-body">
                <?php echo form_open(base_url('admin/audit_started/update_user/')) ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" class="text-red"><span class="cube">1</span>Email:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" class="form-control text empty" name="email" id="name" placeholder="Email" value="<?php echo ($user->email != '') ? $user->email : ""; ?>" >
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="userid" value="<?php echo $user->id  ?>" />
                            <input type="hidden" name="schoolid" value="<?php echo $school->id  ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="password" class="control-label"><span class="cube">2</span>Password:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" class="form-control" name="password" id="password" tabindex="1" placeholder="Pin Code"
                                   value="<?php echo ($user->password != '') ? $user->password : ""; ?>" title="digits are allowed">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-primary">Update</button>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>-->
</div>
<script type="text/javascript">
    var getCities = function () {
        var value = new Object();
        value.id = $('#country-select').val();
        var URL = "<?php echo base_url(); ?>";
        $.ajax({
            url: URL + 'ajax/citites',
            type: 'POST',
            data: value,
            success: function (html) {
                $('#city-select').html(html);
            }
        });
    };
/**********************************/
/**This Function Used For Change Password In Audit 2017**/
$("button").click(function(){
	 $.ajax({
            url:'<?php echo base_url(); ?>setpassword-2017.php',
            type: 'GET',
            data: {"userId":<?php echo "'".$school->userid."'"; ?>,"setPassword":$("input[name='password']").val(),"function_name":"setPasswordGSPAudit2017"},
            success: function (reponse) {
			alert("OK");
            }
        });
});
</script>



<script type="text/javascript">
    
$("#partner_list").change(function (){
   
  var parter_status=$(this).val();

  

   if(parter_status=='6'){
    
          
          $('.satya').css("display","block");

   }else{
    $('.satya').css("display","none");
   }
});

</script>


