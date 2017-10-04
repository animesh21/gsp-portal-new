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
                <?php echo form_open(base_url('admin/audit_started_2017/update/') . $school->id.'/'.$school->userid) ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name" class="text-red"><span class="cube">1</span>Name of the School / Institution:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" class="form-control text empty" name="name" id="name" placeholder="Name of the School / Institution:" value="<?php echo ($school->name != '') ? $school->name : ""; ?>" >
                        </div>
                        <div class="form-group">
                            <label for="address1" class="control-label"><span class="cube">2</span>Address Line 1:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="address1" id="address1" tabindex="1" class="form-control text empty"
                                   placeholder="Address 1" value="<?php echo ($school->address1 != '') ? $school->address1 : ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="address2" class="control-label"><span class="cube">3</span>Address Line 2:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="address2" id="username" tabindex="1" class="form-control text empty"
                                   placeholder="Address 2" value="<?php echo ($school->address2 != '') ? $school->address1 : ""; ?>">
                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label"><span class="cube">4</span>Country:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="username" id="username" tabindex="1" class="form-control text empty"
                                   placeholder="Country" value="India" disabled="disabled">
                        </div>
                        <div class="form-group">
                            <label for="state" class="control-label"><span class="cube">5</span>State:</label>
                            <div class="clearfix">&nbsp;</div>
                            <?php echo form_dropdown('state', $states, set_value('state', $school->state), array('class' => 'form-control', 'id' => 'country-select', 'onchange' => 'getCities();')); ?>

                        </div>
                        <div class="form-group">
                            <label for="district" class="control-label"><span class="cube">6</span>District:</label>
                            <div class="clearfix">&nbsp;</div>
                            <?php echo form_dropdown('district', $cities, set_value('district', $school->district), array('class' => 'form-control', 'id' => 'city-select')); ?>
                        </div>
                        <div class="form-group">
                            <label for="city" class="control-label"><span class="cube">7</span>City:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" class="form-control text empty" name="city" id="username" tabindex="1"
                                   placeholder="City" value="<?php echo ($school->city != '') ? $school->city : ""; ?>">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pincode" class="control-label"><span class="cube">8</span>Pin Code:</label>
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
                            <label for="coname" class="control-label"><span class="cube">12</span>Enter GSP School_Email:</label>
                            <div class="clearfix">&nbsp;</div>
                            <input type="text" name="coname" class="text empty" id="cordinatorname" tabindex="1"
                                   placeholder="GSP Coordinator's Name" value="<?php echo ($school->coname != '') ? $school->schoolemail : ""; ?>">
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
                            <input type="text" class="form-control input-lg" name="password" id="password" tabindex="1" placeholder="Pin Code"
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
    </div>
    <div class="clearfix">&nbsp;</div>
<!--    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">EDIT USER DETAILS</div>
            <div class="panel-body">
                <?php echo form_open(base_url('admin/audit_started_2017/update_user/')) ?>
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
</script>
