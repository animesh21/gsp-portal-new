<h1>Year To Year Comparison Dashboard</h1>
<?php 
 if(!empty($_GET['userid'])){
   $result=getYOYComparison($_GET['userid']);
   // echo "<pre>";
   // print_r($result);exit;
 }
?>
<style type="text/css">
  .col-md-2{
    width: 20% !important;
  }
	</style>
<div class="wrapper" style="padding:0px;">
  <div class="container">
    <div class="col-md-2 text-center">
      <div class="gauge">
        <div id="gauge01" style="margin: 0 auto;width:100%"></div>
      </div>
      <strong>
      <?php if($result['data_2015']!=='NA' && !empty($result['data_2015'])){echo "Participated In Audit";}else{ echo "Not Participated In Audit"; } ?>
      </strong> </div>
    <div class="col-md-2 text-center">
      <div class="gauge">
        <div id="gauge02" style="margin: 0 auto;width:100%"></div>
      </div>
      <strong>
      <?php if($result['data_2016']!=='NA' && !empty($result['data_2016'])){echo "Participated In Audit";}else{ echo "Not Participated In Audit"; } ?>
      </strong> </div>
    <div class="col-md-2 text-center">
      <div class="gauge">
        <div id="gauge03" style="margin: 0 auto;width:100%"></div>
      </div>
      <strong>
      <?php if($result['data_2017']!=='NA' && !empty($result['data_2017'])){echo "Participated In Audit";}else{ echo "Not Participated In Audit"; } ?>
      </strong> </div>
    <div class="col-md-2 text-center">
      <div class="gauge">
        <div id="gauge04" style="margin: 0 auto;width:100%"></div>
      </div>
      <strong>
      <?php if($result['data_2018']!=='NA' && !empty($result['data_2018'])){echo "Participated In Audit";}else{ echo "Not Participated In Audit"; } ?>
      </strong> </div>

      <div class="col-md-2 text-center">
      <div class="gauge">
        <div id="gauge05" style="margin: 0 auto;width:100%"></div>
      </div>
      <strong>
      <?php if($result['data_2019']!=='NA' && !empty($result['data_2019'])){echo "Participated In Audit";}else{ echo "Not Participated In Audit"; } ?>
      </strong> </div>

    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div class="col-md-12">
      <h3 style="font-size:26px; text-align:center; font-weight:900; color:#e84b2a;">YEAR TO YEAR COMPARISON EXCEL DUMP</h3>
    
     <?php $userid=$_GET['userid']; ?>


      <a href="<?php echo base_url("admin/Yoyrepresentation/excel_yoyrepresentation/?userid=".$userid) ?>"><button class="btn btn-default" style="float: right;">Export to Excel</button></a>


    </div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div style="width:102%; overflow-y:scroll">
     <table id="example" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width:100%;">
        <thead>
            
            <tr role="row">
              <td>Questions</td>
              <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->audit_year; ?></td>

      <?php } } ?>
            </tr>
            
        </thead>
        <tbody>
         
            <tr role="row">
            <td>School Id</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->school_id; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Name of the School/Institution</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->name_of_the_school_institution; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Address Line 1</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->address_line_1; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Address Line 2</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->address_line_2; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>State</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->state; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>District</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->district; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>City</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->city; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Pin Code</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pin_code; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>STD Code</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->std_code; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Landline No.</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->landline_no; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Principal's Name</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->principals_name; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Principal Mobile</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->principal_mobile; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>GSP Coordintor Name</td>
            <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->gsp_coordintor_name; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>GSP Coordintor Email</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->gsp_coordintor_email; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>GSP Coordintor Mobile</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->gsp_coordintor_mobile; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School Category</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->school_category; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Shifts</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_shifts; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Lowest Level</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->lowest_level; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Highest Level</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->highest_level; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School Type - Gender</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->school_type___gender; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Board of Education</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->board_of_education; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Population</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_population; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Students</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->students; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Teachers</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->teachers; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Non-Teaching Staff</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->non_teaching_staff; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Male</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->male; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Female</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->female; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Classrooms</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_classrooms; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Window-floor Ratio(%)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->window_floor_ratio; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Ownership of Vehicles</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->ownership_of_vehicles; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No.of Vehicles</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_vehicles; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Vehicles more than eight years old</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_vehicles_more_than_eight_years_old; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Vehicles with Air conditioner</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_vehicles_with_air_conditioner; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Vehicles with PUC certificate</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_vehicles_with_puc_certificate; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Vehicles with Authorised parking available</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_vehicles_with_authorised_parking_available; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Annual Road worthiness certificate</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->annual_road_worthiness_certificate; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Others Bio fuel</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_others_bio_fuel; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Subtotal Diesel</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->subtotal_diesel; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Subtotal Petrol</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->subtotal_petrol; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Subtotal LPG</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->subtotal_lpg; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Subtotal CNG</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->subtotal_cng; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Subtotal Hybrid</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->subtotal_hybrid; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Subtotal Electric</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->subtotal_electric; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Subtotal Bio Fuel</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->subtotal_bio_fuel; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Sustainble Motorised Vehicles: Numbers</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->sustainble_motorised_vehicles_numbers; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Sustainble Motorised Vehicles: Percentgae</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->sustainble_motorised_vehicles_percentgae; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Non Polluting Transport: Numbers</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->non_polluting_transport_numbers; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Non Polluting Transport: Percentage</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->non_polluting_transport_percentage; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Students suffer from respiratory problems</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_students_suffer_from_respiratory_problems; ?></td>

      <?php } } ?>
            </tr>
             <tr role="row">
            <td>Percentage of Students suffer from respiratory</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->percentage_of_students_suffer_from_respiratory; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Air Quality Monitoring in School</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php getYOYComparisonYesNo($yoyDatas->air_quality_monitoring_in_school); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Air Quality Monitoring in close to school</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->air_quality_monitoring_in_close_to_school; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School has its own vehicle</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php getYOYComparisonYesNo($yoyDatas->school_has_its_own_vehicle); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Electricity from the Board (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->electricity_from_the_board_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Electricity from Generator (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->electricity_from_generator_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Petrol (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->petrol_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Diesel (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->diesel_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>CNG (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->cng_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Kerosene (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->kerosene_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Coal (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->coal_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Wood (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->wood_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Animal Waste (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->animal_waste_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Solar (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->solar_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Wind (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->wind_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>LPG (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->lpg_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Piped Natural Gas (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->piped_natural_gas_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Biogas (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->biogas_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Others (MJ)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->others_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total MJ</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_mj; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Per capita Energy Consumption</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->per_capita_energy_consumption; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Air Conditioner</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_air_conditioner; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>BEE Star rating Air conditioner</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->bee_star_rating_air_conditioner; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Refrigerator</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_refrigerator; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Microwave</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_microwave; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Tubelight</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_tubelight; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of CFL bulb</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_cfl_bulb; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of LED bulb</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_led_bulb; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Fans</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_fans; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Alternate source of energy</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php getYOYComparisonYesNo($yoyDatas->alternate_source_of_energy); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Solar</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->solar; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Wind</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->wind; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Hydro</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->hydro; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Biogas Plant</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->biogas_plant; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Combination of solar and wind</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->combination_of_solar_and_wind; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Use of Solar water heater</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->use_of_solar_water_heater; ?></td>

      <?php } } ?>
            </tr>
<!-- ..............................New Field Added.................. -->

         <tr role="row">
            <td>State subsidy availed (Y/N)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->state_subsidy_availed_Y_N; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Installed capacity of solar photovoltaic (PV) panels (kW)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->installed_capacity_of_solar_photovoltaic_PV_panels_KW; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Connected load of school</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->connected_load_of_school; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Size of invertors (kVA)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->size_of_invertors_kva; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Operational model-solar rooftop-Off grid/On grid net metering/on grid gross metering</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->operational_model_solar_rooftop_off_grid_on_grid_net_metering; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Power generated by solar rooftop panel in a year (kWh)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->power_generated_by_solar_rooftop_panel_in_a_year_KWH; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Operation and maintenance (O&M) practices</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);

              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->operation_and_maintenance_om_practices; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Are there any alternate sources of energy employed/ installed in your school? 6(a) If yes, do you use and then the options</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);

              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->non_solar_biofuel_biogas_biomass; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Installed capacity of non-solar RE system</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->installed_capacity_of_non_solar_re_system; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Connected load of non-solar RE system</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->connected_load_of_nonsolar_re_system; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Size of invertors (kVA) of non-solar RE System</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->size_of_invertors_KVA_of_nonsolar_re_system; ?></td>

      <?php } } ?>
            </tr>
             <tr role="row">
            <td>Power generated by non-solar RE system in a year (kWh)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->power_generated_by_nonsolar_re_system_in_a_year_KWH; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Operation and maintenance (O&M) practices of non-solar RE system</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->operation_and_maintenance_OM_practices_of_nonsolar_re_system; ?></td>

      <?php } } ?>
            </tr>
             <tr role="row">
            <td>Biomass type used in biofuel</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->biomass_type_used_in_biofuel; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Waste used by biomass plant per day (kg)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->waste_used_by_biomass_plant_per_day_KG; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Purpose energy from biofuel: Electricity/cooking/heating</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->purpose_energy_from_biofuel_electricity_cooking_heating; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Capacity of the biogas unit (in terms of m3/day)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->capacity_of_the_biogas_unit_in_terms_of_mole_day; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Do you add water in biogas unit?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->do_you_add_water_in_biogas_unit; ?></td>

      <?php } } ?>
            </tr>
             <tr role="row">
            <td>If yes, quanity of water (L) added per kg of waste</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->if_yes_quanity_of_water_L_added_per_kg_of_waste; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Components of biogas unit</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->components_of_biogas_unit; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Hours of cooking done per day using biogas</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->hours_of_cooking_done_per_day_using_biogas; ?></td>

      <?php } } ?>
            </tr>
             <tr role="row">
            <td>Other sources for cooking</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->other_sources_for_cooking; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Hours of cooking done per day using other sources</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->hours_of_cooking_done_per_day_using_other_sources; ?></td>

      <?php } } ?>
            </tr>




<!-- ..............................New Field Ended.................. -->





            <tr role="row">
            <td>Provision of packaged food</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->provision_of_packaged_food; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Serve Mid-day Meal</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->serve_mid_day_meal; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Students bring own lunch</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->students_bring_own_lunch; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>How many students bring home-made lunch</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->how_many_students_bring_home_made_lunch; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>How many bring packaged food as home-made lunch</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->how_many_bring_packaged_food_as_home_made_lunch; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Teachers have responsibility to check</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->teachers_have_responsibility_to_check; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Savouary Snacks count of flavour</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->savouary_snacks_count_of_flavour; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Savouary Snacks no.of item sold</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->savouary_snacks_no_of_item_sold; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Month</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->month_1; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Instand Noodles count of flavour</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->instand_noodles_count_of_flavour; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Instand Noodles no.of item sold</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->instand_noodles_no_of_item_sold; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Month</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->month_2; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Potato Fries Count of flavour</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->potato_fries_count_of_flavour; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Potato Fries no.of item sold</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->potato_fries_no_of_item_sold; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Month</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->month_3; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Confectionary - count of flavour</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->confectionary_count_of_flavour; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Confectionary no.of item sold</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->confectionary_no_of_item_sold; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Month</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->month_4; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Ice Cream count of flavour</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->ice_cream_count_of_flavour; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Ice Cream no.of items sold</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->ice_cream_no_of_items_sold; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Month</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->month_5; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Carbonatd beverages count of flavour</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->carbonatd_beverages_count_of_flavour; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Carbonated beverages no.of items sold</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->carbonated_beverages_no_of_items_sold; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Month</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->month_6; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Sugar sweetened non-carbonated beverages count of flavour</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->sugar_sweetened_non_carbonated_beverages_count_of_flavour; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Sugar sweetened non-carbonated beverages no.of items sold</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->sugar_sweetened_non_carbonated_beverages_no_of_items_sold; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Month</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->month_7; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Packaged/bottled nimboo paani/lassi/flavoured milk  - count of flavour</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->packaged_bottled_nimboo_paani_lassi_flavoured_milk_count_of_flav; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Packaged/bottled nimboo paani/lassi/flavoured milk -no.of item sold</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->packaged_bottled_nimboo_paani_lassi_flavoured_milk_no_of_item_so; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Month</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->month_8; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Packaged/bottled energy drinks count of flavour</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->packaged_bottled_energy_drinks_count_of_flavour; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Packaged/bottled energy drinks no.of items sold</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->packaged_bottled_energy_drinks_no_of_items_sold; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Month</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->month_9; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School serve traditional Indian snacks</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->school_serve_traditional_indian_snacks; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Samosas</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->samosas; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Idli/vada</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->idli_vada; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Pav Bhaji</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pav_bhaji; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Momos</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->momos; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Others</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->others_1; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Descriptions</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->descriptions; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Schools serve traditional Indian beverages</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->schools_serve_traditional_indian_beverages; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Nimboo Pani</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->nimboo_pani; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Sweet Lassi</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->sweet_lassi; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Salted Butter Milk</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->salted_butter_milk; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Aam Panna</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->aam_panna; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Others</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->others_2; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Schools distributes packaged food items as rewards</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->schools_distributes_packaged_food_items_as_rewards; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Details</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->details; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School distribute chocolates/similar products as refreshments during schools events</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->school_distribute_chocolates_similar_products_as_refreshments; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Details</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->details_1; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School events sponsored by food companies/brands</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->school_events_sponsored_by_food_companies_brands; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Details</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->details_2; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Are their banners, brochures, hoardings put up during the events</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->are_their_banners_brochures_hoardings_put_up_during_the_events; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School measure height and weight of all the student</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->school_measure_height_and_weight_of_all_the_student; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>How regularly height & weight is measured</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->how_regularly_height__weight_is_measured; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Site area in square meter (m2)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->site_area_in_square_meter; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Ground coverage area</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->ground_coverage_area; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Green Landscaped area on ground</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->green_landscaped_area; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Play area that has grass on ground</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->play_area_that_has; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Green area on ground</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->green_area_on_ground; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Play area that is paved/concrete on ground</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->play_area_that_is_paved_concrete; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Surface parking area</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->surface_parking_area; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Service area on ground</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->service_area_on_ground; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Roof and terrace area</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->roof_and_terrace_area; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Green cover on exposed roof and terrace</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->green_cover_on_exposed_roof_and_terrace; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total built-up/constructed area</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_built_up_constructed_area; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Area</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_area; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Green Area</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_green_area; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Percentage of Green Area</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->percentage_of_green_area; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Plants</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_plants; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Native Plants</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->native_plants; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Exotic Plants</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->exotic_plants; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Animals</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_animals; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Native Animals</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->native_animals; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Exotic Animals</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->exotic_animals; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Use of Chemical Pesticides</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->use_of_chemical_pesticides; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Drinking</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->drinking; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Toilet flushing</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->toilet_flushing; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Personal cleaning</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->personal_cleaning; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Washing clothes</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->washing_clothes; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Cooking</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->cooking; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Cleaning Utensils</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->cleaning_utensils; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Washing Vegetables</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->washing_vegetables; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Mopping floors</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->mopping_floors; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Gardening</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->gardening; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Others</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->others_3; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total water consumption per day</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_water_consumption_per_day; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Per capita/day water consumption</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->per_capita_day_water_consumption; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Ground Water as source</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->ground_water_as_source; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Surface water as source</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->surface_water_as_source; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Rainwater as source</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->rainwater_as_source; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Recycled waste water as source</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->recycled_waste_water_as_source; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Municipality as supplier</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->municipality_as_supplier; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Panchayat as supplier</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->panchayat_as_supplier; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PHED as supplier</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->phed_as_supplier; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Private Supplier</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->private_supplier; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School's own supply</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->schools_own_supply; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School gets daily water supply</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->school_gets_daily_water_supply; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Do all tanks in the school have float valves installed to stop overflow</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->do_all_tanks_in_the_school_have_float_valves; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Do the drinking water points have spill proof taps to check overflow</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->do_the_drinking_water_points_have_spill; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does your school use appliances with a quick-wash setting</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_your_school_use_appliances_with; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Are dual flush systems installed in the toilets</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->are_dual_flush_systems_installed_in_the_toilets; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does your school encourage bottled water for drinking water</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_your_school_encourage_bottled_water; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does your school grow local plant species which require limited amount of water to grow</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_your_school_grow_local_plant_species_which; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Has your school initiated any water conservation steps in the school or outside, in the past one year</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->has_your_school_initiated_any_water_conservation; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does your school use a drip or irrigation system</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_your_school_use_a_drip_or_irrigation_system; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Do you have Rainwater harvesting (RWH) system in your school?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->do_you_have_rainwater_harvesting_rwh_system_in_your_school; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does your school harvest different catchments?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_your_school_harvest_different; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Which is the catchment area being harvested by your school?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->which_is_the_catchment_area_being_harvested_by_your_school; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>How does your school harvest rainwater?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->how_does_your_school_harvest_rainwater; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Stored rainwater use (Drinking)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_drinking)){echo $yoyDatas->stored_rainwater_use_drinking;}else{ echo "NA"; }; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Stored rainwater use (Gardening)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_gardening)){echo $yoyDatas->stored_rainwater_use_gardening;}else{ echo "NA"; }; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Stored rainwater use (Mopping)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_mopping)){echo $yoyDatas->stored_rainwater_use_mopping;}else{ echo "NA"; }; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Stored rainwater use (Toilets)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_toilets)){echo $yoyDatas->stored_rainwater_use_toilets;}else{ echo "NA"; }; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Stored rainwater use (Washing vehicles)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_washing_vehicles)){echo $yoyDatas->stored_rainwater_use_washing_vehicles;}else{ echo "NA"; }; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Stored rainwater use (Kitchen)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_kitchen)){echo $yoyDatas->stored_rainwater_use_kitchen;}else{ echo "NA"; }; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Stored rainwater use (Shower, Brushing teeth, Bathing, Hand washing)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_shower_brushing_teeth_bathing_hand_washing)){echo $yoyDatas->stored_rainwater_use_shower_brushing_teeth_bathing_hand_washing;}else{ echo "NA"; }; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Stored rainwater use (Swimming Pool)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_swimming_pool)){echo $yoyDatas->stored_rainwater_use_swimming_pool;}else{ echo "NA"; }; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>If your school only stores rainwater, please select the use of stored rainwater</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->if_your_school_only_stores_rainwater_please; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does your school have rainwater storage tank?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_your_school_have_rainwater_storage_tank; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total number of storage tanks</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_number_of_storage_tanks; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does your school have groundwater recharge structure?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_your_school_have_groundwater_recharge_structure; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total number of recharge structure</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_number_of_recharge_structure; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Type of groundwater recharge</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->type_of_groundwater_recharge; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>If your school practices rainwater harvesting, then what is the ratio between storage and recharge</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->if_your_school_practices_rainwater_harvesting_then; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>How much area in your school is harvested?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->how_much_area_in_your_school_is_harvested; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Q6(d) rainwater harvesting structures (Conduits)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
           <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_conduits)){echo $yoyDatas->rainwater_harvesting_structures_conduits;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Q6(d) rainwater harvesting structures (Gutters)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_gutters)){echo $yoyDatas->rainwater_harvesting_structures_gutters;}else{ echo "NA"; }  ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Q6(d) rainwater harvesting structures (Filter unit)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
             <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_filter_unit)){echo $yoyDatas->rainwater_harvesting_structures_filter_unit;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Q6(d) rainwater harvesting structures (First flush)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_first_flush)){echo $yoyDatas->rainwater_harvesting_structures_first_flush;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Q6(d) rainwater harvesting structures (Storage tank)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_storage_tank)){echo $yoyDatas->rainwater_harvesting_structures_storage_tank;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Q6(d) rainwater harvesting structures (Collection sump)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
           <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_collection_sump)){echo $yoyDatas->rainwater_harvesting_structures_collection_sump;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Q6(d) rainwater harvesting structures (Pump unit)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
           <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_collection_sump)){echo $yoyDatas->rainwater_harvesting_structures_pump_unit;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Q6(d) rainwater harvesting structures (Recharge structure)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->rainwater_harvesting_structures_recharge_structure; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>RWH structures present in your school:</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->rwh_structures_present_in_your_school; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Where is your filter unit</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->where_is_your_filter_unit; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Types of filter used in your school:</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->types_of_filter_used_in_your_school; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does your school clean your catchment and system</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_your_school_clean_your_catchment_and_system; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>When does your school clean the catchment and RWH system?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->when_does_your_school_clean_the_catchment_and_rwh_system; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does your school monitor the rainwater harvesting structure for its efficiency?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_your_school_monitor_the_rainwater_harvesting; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>When does your school monitor the groundwater level?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->when_does_your_school_monitor_the_groundwater_level; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>What is the trend of groundwater level in your school across the year</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->what_is_the_trend_of_groundwater_level; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>How much was the increase?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->how_much_was_the_increase; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does the school have separate toilets for males and females</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_the_school_have_separate_toilets_for_males_and_females; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Are the toilets accessible and safe to use for children</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->are_the_toilets_accessible_and_safe_to_use_for_children; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Are the toilets accessible and safe to use for differently abled children</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->are_the_toilets_accessible_and_safe_abled_children; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Are the toilets accessible and safe to use for differently abled staff (teaching and non-teaching)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->are_the_toilets_accessible_and_safe_abled_staff_teaching; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Are the toilets situated in the right location in terms of privacy and safety</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->are_the_toilets_situated_in_the_right_location_in; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Is there sufficient light during day time</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->is_there_sufficient_light_during_day_time; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of drinking water taps</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no__of_drinking_water_taps; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Load on DWT</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->load_on_dwt; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of hand pumps</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_hand_pumps; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of ablution taps</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no__of_ablution_taps; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Load on Ablution Tap</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->load_on_ablution_tap; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Toilet for Girls</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->toilet_for_girls; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Toilet for Boys</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->toilet_for_boys; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Common Toilets</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->common_toilets; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of Toilets (water closet)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no__of_toilets_water_closet; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Load on Water Closet</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->load_on_water_closet; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of urinals</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no__of_urinals; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Load on urinals</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->load_on_urinals; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>No. of water outlets</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no__of_water_outlets; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Water storage system in the toilets?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php getYOYComparisonYesNo($yoyDatas->water_storage_system_in_the_toilets); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Is the water supply sufficient?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
             <td><?php getYOYComparisonYesNo($yoyDatas->is_the_water_supply_sufficient); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Are the toilets cleaned?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php getYOYComparisonYesNo($yoyDatas->are_the_toilets_cleaned); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does school treat waste water</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php getYOYComparisonYesNo($yoyDatas->does_school_treat_waste_water); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does schools reuse treated wastewater</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->does_schools_reuse_treated_wastewater; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>How does your school reuse wastewater</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->how_does_your_school_reuse_wastewater; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School reuse wastewater in (Flushing)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->school_reuse_wastewater_in_flushing)){echo $yoyDatas->school_reuse_wastewater_in_flushing;}else{ echo "NA"; }  ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School reuse wastewater in (Recharge Ground Water)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
           <td><?php if(!empty($yoyDatas->school_reuse_wastewater_in_recharge_ground_water)){echo $yoyDatas->school_reuse_wastewater_in_recharge_ground_water;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Please specify the fate of wastewater</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->please_specify_the_fate_of_wastewater)){
                  echo $yoyDatas->please_specify_the_fate_of_wastewater; }else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School segregated solid waste</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->school_segregated_solid_waste; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Segregator at Source</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->segregator_at_source)){ echo $yoyDatas->segregator_at_source;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <!-- <tr role="row">
            <td>Segregates the waste by (Students and teachers)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->segregates_the_waste_by_students_and_teachers)){echo $yoyDatas->segregates_the_waste_by_students_and_teachers;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr> -->
            <!-- <tr role="row">
            <td>Segregates the waste by (Housekeeping)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
             <td><?php if(!empty($yoyDatas->segregates_the_waste_by_housekeeping)){ echo $yoyDatas->segregates_the_waste_by_housekeeping;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Segregates the waste by (Gardener)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->segregates_the_waste_by_gardener)){echo $yoyDatas->segregates_the_waste_by_gardener;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Segregates the waste by (Ragpickers)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->segregates_the_waste_by_ragpickers)){echo $yoyDatas->segregates_the_waste_by_ragpickers;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Segregates the waste by (other)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->segregates_the_waste_by_other)){echo $yoyDatas->segregates_the_waste_by_other;}else{ echo "NA"; } ?></td>

      <?php } } ?>
            </tr> -->
            <tr role="row">
            <td>No. of category</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->no_of_category; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Collection points with no bins</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->collection_points_with_no_bins; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Collection points with one bin (mixed)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->collection_points_with_one_bin_mixed; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Collection points with two bins</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->collection_points_with_two_bins; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Collection points with three bins</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->collection_points_with_three_bins; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Collection points</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_collection_points; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total biodegradable waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_biodegradable_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD of biodegradable</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_of_biodegradable; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Dry/recyclable waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_dry_recyclable_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD Dry/recyclable</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_dry_recyclable; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Domestic waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_domestic_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD Domestic waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_domestic_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>E-waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->e_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD E-waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_e_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Biomedical waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->biomedical_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD Biomedical waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_biomedical_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Sanitary Waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->sanitary_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD Sanitary Waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_sanitary_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>C&D waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->cd_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD C&D waste generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_cd_waste_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>School recycle any generated waste?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->school_recycle_any_generated_waste; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Waste Generated(kilogram)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_waste_generated_kilogram; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Waste Recycled(kilogram)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_waste_recycled_kilogram; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Percentage of Waste Recycled(%)</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->percentage_of_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total biodegradable waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_biodegradable_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD of biodegradable recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_of_biodegradable_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Dry/recyclable waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_dry_recyclable_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD Dry/recyclable</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_dry_recyclable_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Hazardous and toxic waste (Paints, lab waste, etc) recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->hazardous_and_toxic_waste_paints_lab_waste_etc_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Oil from DG sets recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->oil_from_dg_sets_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Total Domestic waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->total_domestic_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD Domestic waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_domestic_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>E-waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->e_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD E-waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_e_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Biomedical waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->biomedical_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD Biomedical waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_biomedical_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Sanitary Waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->sanitary_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD Sanitary Waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_sanitary_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>C&D waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->cd_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>PCPD C&D waste recycled</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->pcpd_cd_waste_recycled; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Composting facility</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php  getYOYComparisonYesNo($yoyDatas->composting_facility); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Quantity of compost generated</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->quantity_of_compost_generated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Reuse textbooks</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php getYOYComparisonYesNo($yoyDatas->reuse_textbooks); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>What is the final destination for waste from your school that is disposed of externally</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->what_is_the_final_destination_for_waste_from_your; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Does your school burn waste?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
             <td><?php getYOYComparisonYesNo($yoyDatas->does_your_school_burn_waste); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Where does your school burn waste?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->where_does_your_school_burn_waste; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>What kind of waste is burnt/ incinerated?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php echo $yoyDatas->what_kind_of_waste_is_burnt__incinerated; ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Who collects E-waste</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php if(!empty($yoyDatas->who_collects_e_waste)){ echo $yoyDatas->who_collects_e_waste;}else{ echo "NA";} ?></td>

      <?php } } ?>      
            </tr>
            <tr role="row">
            <td>Are there awareness drives with regard to Reduce, Recycle and Reuse</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
            <td><?php getYOYComparisonYesNo($yoyDatas->are_there_awareness_drives_with_regard); ?></td>

      <?php } } ?>
            </tr>
            <tr role="row">
            <td>Is the study of the environment integrated into the curriculum?</td>
             <?php if(!empty($_GET['userid'])){
              $sr_no=0;
            $school_id=$_GET['userid'];
            $yoyData=getYOYComparisonAllData($school_id);
            
              foreach($yoyData as $yoyDatas){
             ?>
           <td><?php getYOYComparisonYesNo($yoyDatas->is_the_study_of_the_environment_integrated); ?></td>

      <?php } } ?>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="http://code.highcharts.com/highcharts.js" defer></script>
<script src="http://code.highcharts.com/highcharts-more.js" defer></script>
<script>
        $(function () {
            // Issue #602 workaround
            Highcharts.seriesTypes.gauge.prototype.drawLegendSymbol = 
            Highcharts.seriesTypes.column.prototype.drawLegendSymbol;
            var chartColors = ['#828282','#424242'];
            var gaugePBColors = ['#ff0000','#ffa500','#ffff00','#008000'];
            
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'gauge01',
                    type: 'gauge',
                    backgroundColor: 'none'
                },
                
                colors: [
                    chartColors[0],
                    chartColors[1]
                ],
                
                credits: {
                    enabled: false
                },
            
                title: {
                    text: 'GSP Audit 2015',
                    style: {
                        fontFamily: 'arial,helvetica,sans-serif',
                        color: chartColors[1],
                        fontWeight: 'bold',
                        fontSize: '24px'
                    }
                },
                
                legend: {
                    align: 'left',
                    verticalAlign: 'bottom',
                    layout: 'vertical',
                    x: 0,
                    y: -112,
                    floating: true,
                    borderWidth:0
                },
                
                navigation: {
                    buttonOptions: {
                        floating: true,
                        align: 'right',
                        verticalAlign: 'bottom',
                        y: -134,
                        backgroundColor: 'white',
                        borderWidth: 0,
                        symbolSize: 20
                    },
                    menuStyle: {
                        borderWidth: 0,
                        backgroundColor: '#424242',
                        borderRadius: '7px',
                        padding: '5px 0',
                        overflow: 'hidden',
                        BoxShadow: '2px 2px 4px rgba(255,0,0,1) !important'
                    },
                    menuItemStyle: {
                        fontSize: '12px',
                        color: '#ffffff',
                        padding: '3px 12px 5px'
                    },
                    menuItemHoverStyle: {
                        backgroundColor: '#828282'
                    }
                },
                
                exporting: {
                    buttons: {
                        exportButton: {
                            symbolFill: '#424242',
                            symbolStroke: '#424242',
                            hoverSymbolFill: '#828282',
                            hoverSymbolStroke: '#828282'
                        },
                        printButton: {
                            enabled: false
                        }
                    }
                },
                
                pane: [{
                    startAngle: -90,
                    endAngle: 90,
                    background: null
                }],                        
            
                yAxis: [{
                    min: 1,
                    max: 100,
                    lineColor: 'transparent',
                    tickWidth: 2,
                    tickLength: 12,
                    tickColor: 'transparent', /*'#ffffff',*/
                    minorTickColor: 'transparent',
                    labels: {
                        rotation: null,
                        distance: 15,
                        zIndex: 1
                    },
                    plotBands: [{
                        from: 0,
                        to: 34.9,
                        color: gaugePBColors[0],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 35,
                        to: 49.9,
                        color: gaugePBColors[1],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 50,
                        to: 69.9,
                        color: gaugePBColors[2],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 70,
                        to: 100,
                        color: gaugePBColors[3],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    }],
                    pane: 0
                }],
                
                plotOptions: {
                    gauge: {
                        dial: {
                            radius: '100%',
                            baseWidth: 7,
                            baseLength: 14,
                            rearLength: 0
                        },
                        pivot: {
                            radius: 3,
                            backgroundColor: chartColors[1]
                        },
                        showInLegend: true
                    }
                },
                    
                series: [{
                    name: 'School Performace GSP Audit 2015',
                    data: [<?php if(!empty($result['data_2015'])){ if($result['data_2015']!=='NA'){echo $result['data_2015'];}else{ echo "0"; }}else{ echo "0";} ?>],
                    dial: {
                        backgroundColor: chartColors[0]
                    },
                    yAxis: 0,
                    dataLabels: {
                        enabled: true,
                        x: 44,
                        y: -157,
                        color: chartColors[0],
                        borderWidth: 0,
                        borderRadius: 7,
                        backgroundColor: '#ffffff',
                        padding: 1,
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold',
                            lineHeight: '40px'
                        }
                    }
                }]
              }
            );
        });
    
</script>
<script>
        $(function () {
            // Issue #602 workaround
            Highcharts.seriesTypes.gauge.prototype.drawLegendSymbol = 
            Highcharts.seriesTypes.column.prototype.drawLegendSymbol;
            var chartColors = ['#828282','#424242'];
            var gaugePBColors = ['#ff0000','#ffa500','#ffff00','#008000'];
            
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'gauge02',
                    type: 'gauge',
                    backgroundColor: 'none'
                },
                
                colors: [
                    chartColors[0],
                    chartColors[1]
                ],
                
                credits: {
                    enabled: false
                },
            
                title: {
                    text: 'GSP Audit 2016',
                    style: {
                        fontFamily: 'arial,helvetica,sans-serif',
                        color: chartColors[1],
                        fontWeight: 'bold',
                        fontSize: '24px'
                    }
                },
                
                legend: {
                    align: 'left',
                    verticalAlign: 'bottom',
                    layout: 'vertical',
                    x: 0,
                    y: -112,
                    floating: true,
                    borderWidth:0
                },
                
                navigation: {
                    buttonOptions: {
                        floating: true,
                        align: 'right',
                        verticalAlign: 'bottom',
                        y: -134,
                        backgroundColor: 'white',
                        borderWidth: 0,
                        symbolSize: 20
                    },
                    menuStyle: {
                        borderWidth: 0,
                        backgroundColor: '#424242',
                        borderRadius: '7px',
                        padding: '5px 0',
                        overflow: 'hidden',
                        BoxShadow: '2px 2px 4px rgba(255,0,0,1) !important'
                    },
                    menuItemStyle: {
                        fontSize: '12px',
                        color: '#ffffff',
                        padding: '3px 12px 5px'
                    },
                    menuItemHoverStyle: {
                        backgroundColor: '#828282'
                    }
                },
                
                exporting: {
                    buttons: {
                        exportButton: {
                            symbolFill: '#424242',
                            symbolStroke: '#424242',
                            hoverSymbolFill: '#828282',
                            hoverSymbolStroke: '#828282'
                        },
                        printButton: {
                            enabled: false
                        }
                    }
                },
                
                pane: [{
                    startAngle: -90,
                    endAngle: 90,
                    background: null
                }],                        
            
                yAxis: [{
                    min: 1,
                    max: 100,
                    lineColor: 'transparent',
                    tickWidth: 2,
                    tickLength: 12,
                    tickColor: 'transparent', /*'#ffffff',*/
                    minorTickColor: 'transparent',
                    labels: {
                        rotation: null,
                        distance: 15,
                        zIndex: 1
                    },
                    plotBands: [{
                        from: 0,
                        to: 34.9,
                        color: gaugePBColors[0],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 35,
                        to: 49.9,
                        color: gaugePBColors[1],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 50,
                        to: 69.9,
                        color: gaugePBColors[2],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 70,
                        to: 100,
                        color: gaugePBColors[3],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    }],
                    pane: 0
                }],
                
                plotOptions: {
                    gauge: {
                        dial: {
                            radius: '100%',
                            baseWidth: 7,
                            baseLength: 14,
                            rearLength: 0
                        },
                        pivot: {
                            radius: 3,
                            backgroundColor: chartColors[1]
                        },
                        showInLegend: true
                    }
                },
                    
            
                series: [{
                    name: 'School Performace GSP Audit 2016',
                    data: [<?php if(!empty($result['data_2016'])){ if($result['data_2016']!=='NA'){echo str_replace(array('$', '%'), '', $result['data_2016']);}else{ echo "0"; }}else{ echo "0";} ?>],
                    dial: {
                        backgroundColor: chartColors[0]
                    },
                    yAxis: 0,
                    dataLabels: {
                        enabled: true,
                        x: 44,
                        y: -157,
                        color: chartColors[0],
                        borderWidth: 0,
                        borderRadius: 7,
                        backgroundColor: '#ffffff',
                        padding: 1,
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold',
                            lineHeight: '40px'
                        }
                    }
                }]
              }
            );
        });
    
</script>
<script>
        $(function () {
            // Issue #602 workaround
            Highcharts.seriesTypes.gauge.prototype.drawLegendSymbol = 
            Highcharts.seriesTypes.column.prototype.drawLegendSymbol;
            var chartColors = ['#828282','#424242'];
            var gaugePBColors = ['#ff0000','#ffa500','#ffff00','#008000'];
            
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'gauge03',
                    type: 'gauge',
                    backgroundColor: 'none'
                },
                
                colors: [
                    chartColors[0],
                    chartColors[1]
                ],
                
                credits: {
                    enabled: false
                },
            
                title: {
                    text: 'GSP Audit 2017',
                    style: {
                        fontFamily: 'arial,helvetica,sans-serif',
                        color: chartColors[1],
                        fontWeight: 'bold',
                        fontSize: '24px'
                    }
                },
                
                legend: {
                    align: 'left',
                    verticalAlign: 'bottom',
                    layout: 'vertical',
                    x: 0,
                    y: -112,
                    floating: true,
                    borderWidth:0
                },
                
                navigation: {
                    buttonOptions: {
                        floating: true,
                        align: 'right',
                        verticalAlign: 'bottom',
                        y: -134,
                        backgroundColor: 'white',
                        borderWidth: 0,
                        symbolSize: 20
                    },
                    menuStyle: {
                        borderWidth: 0,
                        backgroundColor: '#424242',
                        borderRadius: '7px',
                        padding: '5px 0',
                        overflow: 'hidden',
                        BoxShadow: '2px 2px 4px rgba(255,0,0,1) !important'
                    },
                    menuItemStyle: {
                        fontSize: '12px',
                        color: '#ffffff',
                        padding: '3px 12px 5px'
                    },
                    menuItemHoverStyle: {
                        backgroundColor: '#828282'
                    }
                },
                
                exporting: {
                    buttons: {
                        exportButton: {
                            symbolFill: '#424242',
                            symbolStroke: '#424242',
                            hoverSymbolFill: '#828282',
                            hoverSymbolStroke: '#828282'
                        },
                        printButton: {
                            enabled: false
                        }
                    }
                },
                
                pane: [{
                    startAngle: -90,
                    endAngle: 90,
                    background: null
                }],                        
            
                yAxis: [{
                    min: 1,
                    max: 100,
                    lineColor: 'transparent',
                    tickWidth: 2,
                    tickLength: 12,
                    tickColor: 'transparent', /*'#ffffff',*/
                    minorTickColor: 'transparent',
                    labels: {
                        rotation: null,
                        distance: 15,
                        zIndex: 1
                    },
                    plotBands: [{
                        from: 0,
                        to: 34.9,
                        color: gaugePBColors[0],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 35,
                        to: 49.9,
                        color: gaugePBColors[1],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 50,
                        to: 69.9,
                        color: gaugePBColors[2],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 70,
                        to: 100,
                        color: gaugePBColors[3],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    }],
                    pane: 0
                }],
                
                plotOptions: {
                    gauge: {
                        dial: {
                            radius: '100%',
                            baseWidth: 7,
                            baseLength: 14,
                            rearLength: 0
                        },
                        pivot: {
                            radius: 3,
                            backgroundColor: chartColors[1]
                        },
                        showInLegend: true
                    }
                },
                    
            
                series: [{
                    name: 'School Performace GSP Audit 2017',
                    data: [<?php if(!empty($result['data_2017'])){ if($result['data_2017']!=='NA'){echo $result['data_2017'];}else{ echo "0"; }}else{ echo "0";} ?>],
                    dial: {
                        backgroundColor: chartColors[0]
                    },
                    yAxis: 0,
                    dataLabels: {
                        enabled: true,
                        x: 44,
                        y: -157,
                        color: chartColors[0],
                        borderWidth: 0,
                        borderRadius: 7,
                        backgroundColor: '#ffffff',
                        padding: 1,
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold',
                            lineHeight: '40px'
                        }
                    }
                }]
              }
            );
        });
    
</script>
<script>
        $(function () {
            // Issue #602 workaround
            Highcharts.seriesTypes.gauge.prototype.drawLegendSymbol = 
            Highcharts.seriesTypes.column.prototype.drawLegendSymbol;
            var chartColors = ['#828282','#424242'];
            var gaugePBColors = ['#ff0000','#ffa500','#ffff00','#008000'];
            
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'gauge04',
                    type: 'gauge',
                    backgroundColor: 'none'
                },
                
                colors: [
                    chartColors[0],
                    chartColors[1]
                ],
                
                credits: {
                    enabled: false
                },
            
                title: {
                    text: 'GSP Audit 2018',
                    style: {
                        fontFamily: 'arial,helvetica,sans-serif',
                        color: chartColors[1],
                        fontWeight: 'bold',
                        fontSize: '24px'
                    }
                },
                
                legend: {
                    align: 'left',
                    verticalAlign: 'bottom',
                    layout: 'vertical',
                    x: 0,
                    y: -112,
                    floating: true,
                    borderWidth:0
                },
                
                navigation: {
                    buttonOptions: {
                        floating: true,
                        align: 'right',
                        verticalAlign: 'bottom',
                        y: -134,
                        backgroundColor: 'white',
                        borderWidth: 0,
                        symbolSize: 20
                    },
                    menuStyle: {
                        borderWidth: 0,
                        backgroundColor: '#424242',
                        borderRadius: '7px',
                        padding: '5px 0',
                        overflow: 'hidden',
                        BoxShadow: '2px 2px 4px rgba(255,0,0,1) !important'
                    },
                    menuItemStyle: {
                        fontSize: '12px',
                        color: '#ffffff',
                        padding: '3px 12px 5px'
                    },
                    menuItemHoverStyle: {
                        backgroundColor: '#828282'
                    }
                },
                
                exporting: {
                    buttons: {
                        exportButton: {
                            symbolFill: '#424242',
                            symbolStroke: '#424242',
                            hoverSymbolFill: '#828282',
                            hoverSymbolStroke: '#828282'
                        },
                        printButton: {
                            enabled: false
                        }
                    }
                },
                
                pane: [{
                    startAngle: -90,
                    endAngle: 90,
                    background: null
                }],                        
            
                yAxis: [{
                    min: 1,
                    max: 100,
                    lineColor: 'transparent',
                    tickWidth: 2,
                    tickLength: 12,
                    tickColor: 'transparent', /*'#ffffff',*/
                    minorTickColor: 'transparent',
                    labels: {
                        rotation: null,
                        distance: 15,
                        zIndex: 1
                    },
                    plotBands: [{
                        from: 0,
                        to: 34.9,
                        color: gaugePBColors[0],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 35,
                        to: 49.9,
                        color: gaugePBColors[1],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 50,
                        to: 69.9,
                        color: gaugePBColors[2],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 70,
                        to: 100,
                        color: gaugePBColors[3],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    }],
                    pane: 0
                }],
                
                plotOptions: {
                    gauge: {
                        dial: {
                            radius: '100%',
                            baseWidth: 7,
                            baseLength: 14,
                            rearLength: 0
                        },
                        pivot: {
                            radius: 3,
                            backgroundColor: chartColors[1]
                        },
                        showInLegend: true
                    }
                },
                    
            
                series: [{
                    name: 'School Performace GSP Audit 2018',
                    data: [<?php if(!empty($result['data_2018'])){ if($result['data_2018']!=='NA'){echo $result['data_2018'];}else{ echo "0"; }}else{ echo "0";} ?>],
                    dial: {
                        backgroundColor: chartColors[0]
                    },
                    yAxis: 0,
                    dataLabels: {
                        enabled: true,
                        x: 44,
                        y: -157,
                        color: chartColors[0],
                        borderWidth: 0,
                        borderRadius: 7,
                        backgroundColor: '#ffffff',
                        padding: 1,
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold',
                            lineHeight: '40px'
                        }
                    }
                }]
              }
            );
        });
    
</script>

<script>
        $(function () {
            // Issue #602 workaround
            Highcharts.seriesTypes.gauge.prototype.drawLegendSymbol = 
            Highcharts.seriesTypes.column.prototype.drawLegendSymbol;
            var chartColors = ['#828282','#424242'];
            var gaugePBColors = ['#ff0000','#ffa500','#ffff00','#008000'];
            
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'gauge05',
                    type: 'gauge',
                    backgroundColor: 'none'
                },
                
                colors: [
                    chartColors[0],
                    chartColors[1]
                ],
                
                credits: {
                    enabled: false
                },
            
                title: {
                    text: 'GSP Audit 2019',
                    style: {
                        fontFamily: 'arial,helvetica,sans-serif',
                        color: chartColors[1],
                        fontWeight: 'bold',
                        fontSize: '24px'
                    }
                },
                
                legend: {
                    align: 'left',
                    verticalAlign: 'bottom',
                    layout: 'vertical',
                    x: 0,
                    y: -112,
                    floating: true,
                    borderWidth:0
                },
                
                navigation: {
                    buttonOptions: {
                        floating: true,
                        align: 'right',
                        verticalAlign: 'bottom',
                        y: -134,
                        backgroundColor: 'white',
                        borderWidth: 0,
                        symbolSize: 20
                    },
                    menuStyle: {
                        borderWidth: 0,
                        backgroundColor: '#424242',
                        borderRadius: '7px',
                        padding: '5px 0',
                        overflow: 'hidden',
                        BoxShadow: '2px 2px 4px rgba(255,0,0,1) !important'
                    },
                    menuItemStyle: {
                        fontSize: '12px',
                        color: '#ffffff',
                        padding: '3px 12px 5px'
                    },
                    menuItemHoverStyle: {
                        backgroundColor: '#828282'
                    }
                },
                
                exporting: {
                    buttons: {
                        exportButton: {
                            symbolFill: '#424242',
                            symbolStroke: '#424242',
                            hoverSymbolFill: '#828282',
                            hoverSymbolStroke: '#828282'
                        },
                        printButton: {
                            enabled: false
                        }
                    }
                },
                
                pane: [{
                    startAngle: -90,
                    endAngle: 90,
                    background: null
                }],                        
            
                yAxis: [{
                    min: 1,
                    max: 100,
                    lineColor: 'transparent',
                    tickWidth: 2,
                    tickLength: 12,
                    tickColor: 'transparent', /*'#ffffff',*/
                    minorTickColor: 'transparent',
                    labels: {
                        rotation: null,
                        distance: 15,
                        zIndex: 1
                    },
                    plotBands: [{
                        from: 0,
                        to: 34.9,
                        color: gaugePBColors[0],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 35,
                        to: 49.9,
                        color: gaugePBColors[1],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 50,
                        to: 69.9,
                        color: gaugePBColors[2],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 70,
                        to: 100,
                        color: gaugePBColors[3],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    }],
                    pane: 0
                }],
                
                plotOptions: {
                    gauge: {
                        dial: {
                            radius: '100%',
                            baseWidth: 7,
                            baseLength: 14,
                            rearLength: 0
                        },
                        pivot: {
                            radius: 3,
                            backgroundColor: chartColors[1]
                        },
                        showInLegend: true
                    }
                },
                    
            
                series: [{
                    name: 'School Performace GSP Audit 2019',
                    data: [<?php if(!empty($result['data_2019'])){ if($result['data_2019']!=='NA'){echo $result['data_2019'];}else{ echo "0"; }}else{ echo "0";} ?>],
                    dial: {
                        backgroundColor: chartColors[0]
                    },
                    yAxis: 0,
                    dataLabels: {
                        enabled: true,
                        x: 44,
                        y: -157,
                        color: chartColors[0],
                        borderWidth: 0,
                        borderRadius: 7,
                        backgroundColor: '#ffffff',
                        padding: 1,
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold',
                            lineHeight: '40px'
                        }
                    }
                }]
              }
            );
        });
    
</script>

<style type="text/css">
.gauge {
    max-width: 370px;
    padding-top: 10px;
    height: 300px;
    overflow: hidden;
    border-radius: 7px;
    background-color: #ffffff;
}
</style>
<script type="text/javascript">
$(document).ready(function () {
        $('#example2,#example3,#example4,#example5,#example6').DataTable({
            dom: 'lfrtip',
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
            "iDisplayLength": 25
        });
               });
</script>
