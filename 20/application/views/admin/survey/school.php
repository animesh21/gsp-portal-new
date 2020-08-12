<?php $this->load->view('admin/survey/header'); ?>
<div class="container">
    <div class="content-form">
        <h1>School Profile</h1>
        <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <span class="cube">1</span> Name of the School / Institution</label>
                       <p class="formanswertext"><?php echo $school->name; ?> &nbsp;&nbsp; ,  <b>Udise:-</b> (<?php echo $school->udise;?>)</p>
                    </div>
                    <div class="form-group">


                        <label for="exampleInputEmail1"> <span class="cube">2</span> Address</label>
                                                <p class="formanswertext"><?php echo $school->address1; ?>, <?php echo $school->address2; ?> </p>
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1"> <span class="cube">3</span> Telephone Number <small>(Landline Number with STD code)</small></label>
                        <p class="formanswertext">(ISD) &nbsp;91  &nbsp;&nbsp; (STD) &nbsp;<?php echo $school->std; ?>  &nbsp;&nbsp; (Number)<?php echo $school->telephone; ?> </p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <span class="cube">4</span> Mobile Number <small>(Mobile Number with ISD code)</small></label>

                        <p class="formanswertext">(ISD) 91  &nbsp;&nbsp; (Number) <?php echo $school->mobile; ?> </p>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <span class="cube">5</span> Principal's Name</label>
                        <p class="formanswertext"><?php echo $school->principle_name; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <span class="cube">6</span> GSP Coordinator's Name </label>
                        <p class="formanswertext"><?php echo $school->coname; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <span class="cube">7</span> GSP Coordinator's Email</label>
                        <p class="formanswertext"><?php echo $school->coemail; ?></p>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <span class="cube">8</span> GSP Coordinator's Mobile Number</label>

                        <p class="formanswertext">(ISD) 91  &nbsp;&nbsp; (Number) <?php echo $school->comobile; ?></p>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <span class="cube">9</span> Category Of The School </label>

                        <p class="formanswertext">
                            <?php $arr=array(
                                '1'=>'Day Scholar',
                                '2'=>'Day Boarding',
                                '3'=>'Residential',
                                '4'=>'Day Scholar + Day Boarding',
                                '5'=>'Day Boarding + Residential',
                                '6'=>'Day Scholar + Residential',
                                '7'=>'Day Scholar + Day Boarding + Residential'
                            ); ?>
                            <?php echo (getFiled('Q1S1', $schoolUserID) !='') ?  $arr[getFiled('Q1S1', $schoolUserID)] : ""; ?>
                        </p>  

                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1"> <span class="cube">10</span> School Shifts</label>

                        <p class="formanswertext">
                            <?php $arr1=array(
                                '1'=>'Morning',
                                '2'=>'Evening',
                                '3'=>'Both',
	                            '4'=>'Not Applicable'
                            ); ?>
                            <?php echo (getFiled('Q2S1', $schoolUserID)) ? $arr1[getFiled('Q2S1', $schoolUserID)] : ""; ?>
                        </p>  

                    </div>

                    <center>
                        <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/general/'.$id) ?>">NEXT</a>
                    </center>

                </form>
 </div>
</div>
<?php $this->load->view('admin/survey/footer'); ?>
