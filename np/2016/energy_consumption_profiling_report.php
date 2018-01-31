<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');

include('header.php');
?>
<script type = 'text/javascript'>
$(document).ready(function() {
    document.title = 'COMMUTING PRACTICES PROFILING REPORT';
    $('#example').DataTable( {
	
		"sPaginationType": "full_numbers",
		"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;	 
				// Remove the formatting to get integer data for summation
				var intVal = function ( i ) {
					return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ?	i : 0;
				};
	 	
				// totalenergycom in a school
				totalenergycom = api.column( 6, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#totalenergycom').html(totalenergycom.toFixed(2));	

				
              // Total electricityboard 
				totalelectricityboard = api.column( 7, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalelectricityboard').html(totalelectricityboard.toFixed(2));	
			  
			  
			   // Total Petrol
				totalpetrol = api.column( 8, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalpetrol').html(totalpetrol.toFixed(2));
			  
			  
			   // Total Diesel
				totaldiesel = api.column( 9, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totaldiesel').html(totaldiesel.toFixed(2));
             
			    
				
				// Total CNG
				totalcng = api.column( 10, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalcng').html(totalcng.toFixed(2));
				
				
					// Total kerosene
				totalkerosene = api.column( 11, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalkerosene').html(totalkerosene.toFixed(2));
			  
			  
			  		// Total Coal
				totalcoal = api.column( 12, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalcoal').html(totalcoal.toFixed(2));
				
				
						// Total Wood
				totalwood = api.column( 13, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalwood').html(totalwood.toFixed(2));
			  
			  
			  	// Total Animal
				totalanimalwaste = api.column( 14, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalanimalwaste').html(totalanimalwaste.toFixed(2));
			  
			  	// Total Solar
				totalsolar = api.column( 15, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalsolar').html(totalsolar.toFixed(2));
			  
			   	// Total Wind
				totalwind = api.column( 16, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalwind').html(totalwind.toFixed(2));
			  
			    	// Total LPG
				totallpg = api.column( 17, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totallpg').html(totallpg.toFixed(2));
				
				
				 	// Total Other
				totalother = api.column( 18, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalother').html(totalother.toFixed(2));
				
			},
			
        dom: 'lBfrtip',
        buttons: [
            'excel'
        ],
		 "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 25
    } );
} );
</script>

		


<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
            <form name="state_compare" id="state_compare" method="post" style="padding-left: 0">
        <div class="row">
       
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <select id="state" class="form-control" name="state" style="height: 34px !important; line-height: 34px !important; padding-top: 4px">
            <option value="">Select State</option> 
            <?php
            $sql_states = mysql_query("select * from `states_india` order by name");
            while($states_array = mysql_fetch_array($sql_states))
            {
            ?>
            <option value="<?php echo $states_array['state_id']; ?>" <?php if($_REQUEST['state'] == $states_array['state_id']) { ?>selected="selected"<?php } ?>><?php echo $states_array['name']; ?></option>    
            <?php
            }
            ?>
        </select>
           </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="show" onclick="return Validate()" />
            </div>
    </div>
    </form>
      	<h2>Energy Consumption Profiling Report</h2>
        </div>
            

     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
     <th>S.No</th>
	 <th>School Name</th>
     <th>Region</th>
     <th>State</th>
     <th>Category</th>
     <th>Location</th>
	 <th>Total</th>
     <th>Electricity Board</th>
     <th>Petrol</th>
     <th>Diesel</th>
	  <th>CNG</th>
     <th>Kerosene</th>
	  <th>Coal</th>
     <th>Wood</th>
	 <th>Animal Waste</th>
	 <th>Solar</th>
     <th>Wind</th>
	 <th>LPG</th>
     <th>Other</th>
	
     </tr>
     </thead>
     <tbody>
     <?php
     $state = $_REQUEST['state'];
     if($state!="")
     {
     $sql_data = mysql_query("SELECT * FROM `lime_tokens_266617` as `tt` JOIN `lime_survey_266617` as `st` WHERE st.token = tt.token AND `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` <= 0 AND st.submitdate IS NOT NULL");
     }
     else
     {
     $sql_data = mysql_query("SELECT * FROM `lime_tokens_266617` as `tt` JOIN `lime_survey_266617` as `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` <= 0 AND st.submitdate IS NOT NULL");    
     }
     $i = 0;
     while($data = mysql_fetch_array($sql_data))
     {   
                 $sql_region_details = mysql_fetch_array(mysql_query("SELECT region.`name` AS region_name, states_india.`name` AS state_name FROM region,states_india WHERE region.rid=states_india.rid AND states_india.state_id='".$data['attribute_5']."' "));
   $i++;
     ?>
     <tr>
     <td><?php echo $i; ?></td>
	 <td><?php echo $data['attribute_1']; ?></td>
     <td><?php echo $sql_region_details['region_name']; ?></td>
     <td><?php echo $sql_region_details['state_name']; ?></td>
     <td>
         <?php 
			 $school_type=array(1=>"Day Scholar",2=>"Day Boarding",3=>"Residential",4=>"Day Scholar + Day Boarding",5=>"Day Boarding + Residential",6=>"Day Scholar + Residential",7=>"Day Scholar + Day Boarding + Residential");								
			 $type=$data['266617X34X1608'];
			 echo $school_type[$type];
         ?>
     </td>
     <td><?php if($data['266617X32X56'] == "A1"){ echo "Urban Area"; }elseif($data['266617X32X56'] == "A2"){ echo "Rural Area"; } ?></td>
	 
	  <td><?php echo number_format($data['266617X8X2180SQ013_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	  <!-- Electricity Board -->
     <td><?php echo number_format($data['266617X8X2180SQ001_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	 <!-- Petrol -->
     <td><?php echo number_format($data['266617X8X2180SQ002_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
 <!-- Diesel -->
     <td><?php echo number_format($data['266617X8X2180SQ003_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	  <!-- CNG -->
	 <td><?php echo number_format($data['266617X8X2180SQ004_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	 <!--Kerosene -->
	 <td><?php echo number_format($data['266617X8X2180SQ005_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	 <!-- Coal -->
	 <td><?php echo number_format($data['266617X8X2180SQ006_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	 <!-- Wood -->
	 <td><?php echo number_format($data['266617X8X2180SQ007_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	 <!-- Animal Waste -->
	 <td><?php echo number_format($data['266617X8X2180SQ008_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	 <!-- Solar -->
	 <td><?php echo number_format($data['266617X8X2180SQ009_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	 <!-- Wind -->
	 <td><?php echo number_format($data['266617X8X2180SQ010_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	 <!-- LPG -->
	 <td><?php echo number_format($data['266617X8X2180SQ011_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	 <!-- Other -->
	 <td><?php echo number_format($data['266617X8X2180SQ012_SQ002'],$decimals = 2, $dec_point = ".", $thousands_sep = ""); ?></td>
	  
     </tr>
     <?php } ?>
	 

	   <tfoot>
		<tr>
		<td colspan='6'> <span style="float:right;" >Total</span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalenergycom'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalelectricityboard'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalpetrol'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totaldiesel'></span></td>
		
		<td colspan='0'> <span style="float:left;" id ='totalcng'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalkerosene'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalcoal'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totalwood'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totalanimalwaste'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalsolar'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalwind'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totallpg'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totalother'></span></td>
		
	
		</tr>
		
	</tfoot>

	 
     </tbody>
     </table>
    </div>
    
  </div>
</main>
<footer>
<div class="text-center">Copyright © <?php echo date('Y'); ?> Centre for Science and Environment</div>
</footer>

</body>

</html>

