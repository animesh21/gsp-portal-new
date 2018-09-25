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
    document.title = 'Vehicle Profiling Report(GSP-Audit-2015)';
    $('#example').DataTable( {
		"sPaginationType": "full_numbers",
		"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;	 
				// Remove the formatting to get integer data for summation
				var intVal = function ( i ) {
					return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ?	i : 0;
				};
	 	
				// totalvehicles over this page
				totalvehicles = api.column( 6, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#totalvehicles').html(totalvehicles.toFixed(0));	

				
              // Total total vehicles morethan 5year
				totalvehiclesmorethan5year = api.column( 7, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalvehiclesmorethan5year').html(totalvehiclesmorethan5year.toFixed(0));	
			  
			  
			   // Total PUC
				totalpuc = api.column( 8, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalpuc').html(totalpuc.toFixed(0));	
			  
			   // Total AC
				totalac = api.column( 9, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalac').html(totalac.toFixed(0));
              // Total Diesel		 	  
             totaldiesel = api.column( 10, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totaldiesel').html(totaldiesel.toFixed(0));
			  
			      // Total Petrol		 	  
             totalpetrol = api.column( 11, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalpetrol').html(totalpetrol.toFixed(0));
			  
			     // Total LPG		 	  
             totallpg = api.column( 12, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totallpg').html(totallpg.toFixed(0));
			  
			     // Total CNG		 	  
             totalcng = api.column( 13, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalcng').html(totalcng.toFixed(0));
			  
				
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
            $sql_states = mysql_query("select * from `states` where `country_id` = 101");
            while($states_array = mysql_fetch_array($sql_states))
            {
            ?>
            <option value="<?php echo $states_array['name']; ?>" <?php if($_REQUEST['state'] == $states_array['name']) { ?>selected="selected"<?php } ?>><?php echo $states_array['name']; ?></option>    
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
      	<h2>Vehicle Profiling Report</h2>
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
     <th>Vehicles More than 5 years</th>
     
     <th>PUC Done</th>
     <th>AC(YES)</th>
	 <th>Diesel</th>
	 <th>Petrol</th>
	 <th>LPG</th>
	 <th>CNG</th>
     </tr>
     </thead>
     <tbody>
     <?php
     $state = $_REQUEST['state'];
     if($state!="")
     {
     $sql_data = mysql_query("SELECT * FROM `lime_tokens_266617` as `tt` JOIN `lime_survey_266617` as `st` WHERE st.token = tt.token AND `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` = 0");
     }
     else
     {
     $sql_data = mysql_query("SELECT * FROM `lime_tokens_266617` as `tt` JOIN `lime_survey_266617` as `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0");    
     }
     $i = 0;
     while($data = mysql_fetch_array($sql_data))
     {   
         $sql_region_details = mysql_fetch_array(mysql_query("select `rid` from `region_states` where `name` = '".$data['attribute_5']."'"));
         $sql_region_name = mysql_fetch_array(mysql_query("select `name` from `region` where `rid` = '".$sql_region_details['rid']."'"));
         $i++;
     ?>
     <tr>
     <td><?php echo $i; ?></td>
	 <td><?php echo $data['attribute_1']; ?></td>
     <td><?php echo $sql_region_name['name']; ?></td>
     <td><?php echo $data['attribute_5']; ?></td>
     <td>
         <?php 
            $a = array();
         if($data['266617X34X1608SQ001'] != "")
            {
                $a[] = "Day Scholar (6 hours)";
            } 
            if($data['266617X34X1608SQ002'] != "")
            {
                $a[] = "Day Boarding (8 hours)";
            }
            if($data['266617X34X1608SQ003'] != "")
            {
                $a[] = "Residential (24 hours)";
            }
            echo implode($a, ',');
         ?>
     </td>
     <td><?php if($data['266617X32X56'] == "A1"){ echo "Urban Area"; }elseif($data['266617X32X56'] == "A2"){ echo "Rural Area"; } ?></td>
	  <td><?php echo number_format($data['266617X4X165SQ001_SQ003'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
     <td><?php echo number_format($data['266617X4X165SQ002_SQ003'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
     <td><?php echo number_format($data['266617X4X165SQ005_SQ003'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
     <td><?php echo number_format($data['266617X4X165SQ004_SQ003'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	  <td><?php echo number_format($data['266617X4X2217SQ004_SQ001'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	  
	  
	   <td><?php echo number_format($data['266617X4X2217SQ004_SQ002'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	    <td><?php echo number_format($data['266617X4X2217SQ004_SQ003'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
		 <td><?php echo number_format($data['266617X4X2217SQ004_SQ004'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
     </tr>
     <?php } ?>
	 
	   <tfoot>
		<tr>
		<td colspan='6'> <span style="float:right;" >Total</span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalvehicles'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalvehiclesmorethan5year'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalpuc'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totalac'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totaldiesel'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totalpetrol'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totallpg'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totalcng'></span></td>
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

