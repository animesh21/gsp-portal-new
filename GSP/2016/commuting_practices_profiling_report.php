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
	 	
				// totalpopulation in a school
				totalpopulation = api.column( 6, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#totalpopulation').html(totalpopulation.toFixed(0));	

				
              // Total smv 
				totalsmv = api.column( 7, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalsmv').html(totalsmv.toFixed(0));	
			  
			  
			   // Total PV
				totalpv = api.column( 8, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalpv').html(totalpv.toFixed(0));	
			  
			   // Total NPT
				totalnpt = api.column( 9, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#totalnpt').html(totalnpt.toFixed(0));
             
			    
				
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
      	<h2>Commuting Practices Profiling Report</h2>
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
	
     <th>Sustainable Motorised Vehicles</th>
     
     <th>Private Vehicles</th>
     <th>Non Polluting Transport</th>
	
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
         //$sql_region_name = mysql_fetch_array(mysql_query("select `name` from `region` where `rid` = '".$sql_region_details['rid']."'"));
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
	 
	  <td><?php echo number_format($data['266617X4X176SQ004_SQ004'],$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	   <?php $smvtotal=$data['266617X4X176SQ001_SQ004']+$data['266617X4X176SQ002_SQ004']+$data['266617X4X176SQ003_SQ004']+$data['266617X4X176SQ0012_SQ004']+$data['266617X4X176SQ005_SQ004']+$data['266617X4X176SQ006_SQ004']; ?>
	  
     <td><?php echo number_format($smvtotal,$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	 
	   <?php $pvtotal=$data['266617X4X176SQ007_SQ004']+$data['266617X4X176SQ008_SQ004']; ?>
     <td><?php echo number_format($pvtotal,$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	  <?php $npttotal=$data['266617X4X176SQ009_SQ004']+$data['266617X4X176SQ010_SQ004']+$data['266617X4X176SQ011_SQ004']; ?>
     <td><?php echo number_format($npttotal,$decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
	  
     </tr>
     <?php } ?>
	 

	   <tfoot>
		<tr>
		<td colspan='6'> <span style="float:right;" >Total</span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalpopulation'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalsmv'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalpv'></span></td>
		<td colspan='0'> <span style="float:left;" id ='totalnpt'></span></td>
	
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

