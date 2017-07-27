<?php $this->load->view('admin/survey/header');?>
<div class="container">
        <div class="row">
            <h2>SCHOOL PROFILE</h2>
            <p class="lead">
                In this section, all questions are compulsory. The school contact details should match with the details provided during the time of registration to the Green Schools Programme (GSP) Audit.<br />
                
            </p>
        
        
        <div class="content-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="http://phpoll.com/login/process" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                   		<label for="username" class="control-label">Name of the School / Institution:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['name'])) echo $data['name'] ?></label>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Address Line 1:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['address1'])) echo $data['address1'] ?></label>

                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Address Line 2:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['address2'])) echo $data['address2'] ?></label>

                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Country:</label>
                                        <label for="username" class="control-label">India</label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">State:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['state'])) echo $data['state'] ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">District:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['district'])) echo $data['district'] ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">City:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['city'])) echo $data['city'] ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Pin Code:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['pincode'])) echo $data['pincode'] ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter Telephone Number (Landline Number):</label>
                                        <label for="username" class="control-label"><?php if(isset($data['telephone'])) echo $data['telephone'] ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter Mobile number:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['mobile'])) echo $data['mobile'] ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> Principal's Name:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['principle_name'])) echo $data['principle_name'] ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter GSP Coordinator's Name: </label>
                                        <label for="username" class="control-label"><?php if(isset($data['coname'])) echo $data['coname'] ?></label>

                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label">Enter GSP Coordinator's Email:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['coemail'])) echo $data['coemail'] ?></label>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label"> Enter GSP Coordinator's Mobile Number:</label>
                                        <label for="username" class="control-label"><?php if(isset($data['comobile'])) echo $data['comobile'] ?></label>
                                    </div>

                                </form>
                                
                            </div>
                        </div>

    <!-- /.container -->
<?php $this->load->view('footer');?>
