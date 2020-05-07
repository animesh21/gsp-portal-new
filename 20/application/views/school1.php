<?php $this->load->view('header');?>

<div class="container">
        <div class="row">
            <h2>SCHOOL PROFILE</h2>
            <p class="lead">
                In this section, all questions are compulsory. The school contact details should match with the details provided during the time of registration to the Green Schools Programme (GSP) Audit.<br />
                
            </p>
        
        
        <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                   		<?php ?>
                                        <label for="username" class="control-label">Name of the School / Institution:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Name of the School / Institution:" value="<?php echo $data["name"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Address Line 1:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Address 1" value="<?php echo $data["address1"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Address Line 2:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Address 2" value="<?php echo $data["address2"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Country:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Country" value="<?php echo $data["country"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">State:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="State" value="<?php echo $data["state"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">District:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="District" value="<?php echo $data["district"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">City:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="City" value="<?php echo $data["city"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Pin Code:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Pin Code" value="<?php echo $data["pincode"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter Telephone Number (Landline Number):</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Telephone" value="<?php echo $data["telephone"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter Mobile number:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Mobile Number" value="<?php echo $data["mobile"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> Principal's Name:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Principal's Name:<" value="<?php echo $data["principle_name"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter GSP Coordinator's Name: </label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="GSP Coordinator's Name" value="<?php echo $data["coname"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter GSP Coordinator's Email:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="GSP Coordinator's Email" value="<?php echo $data["coemail"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> Enter GSP Coordinator's Mobile Number:</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="GSP Coordinator's Mobile Number" value="<?php echo $data["comobile"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Please select the appropriate category for your school</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="category for your school" value="<?php echo $data["address2"]; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">How many shifts does your school have</label>
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="shifts does your school have" value="<?php echo $data["address2"]; ?>" readonly>
                                    </div>
                                    
                                </form>
                                
                            </div>
                        </div>

    <!-- /.container -->
<?php $this->load->view('footer');?>
