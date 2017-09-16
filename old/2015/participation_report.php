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
/*
$(document).ready(function() {
    $('#example').DataTable();
} );
*/
$(document).ready(function() {
  $('#example').DataTable( {
	  
	  "sPaginationType": "full_numbers",
		"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;	 
				// Remove the formatting to get integer data for summation
				var intVal = function ( i ) {
					return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ?	i : 0;
				};
	 
				// Registration for audit over this page
				Registration_for_audit = api.column( 2, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#registration_for_audit').html(Registration_for_audit.toFixed(0));

               // audit start for audit over this page
				audit_start = api.column( 3, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#audit_start').html(audit_start.toFixed(0));
				
				  // audit completed
				audit_completed = api.column( 4, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#audit_completed').html(audit_completed.toFixed(0));
				
				//Audit Feedback
				audit_feedback = api.column( 5, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				$('#audit_feedback').html(audit_feedback.toFixed(0));
				
				
			},	
	
       dom: 'lBfrtip',
	   buttons: [
           'excel'
       ],
	   "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": -1
   } );
    
} );
</script>
<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>PARTICIPATION REPORT</h2>
        </div>
  
<?php
    include 'filter_panel.php';
?>

     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
     <th>S.No</th>
<!--     <th>Region/Zone</th>-->
     <th>State</th>
<!--     <th>School Parameter</th>-->
     <th>Reg. for Audit</th>
     <th>Audit Start</th>
     <th>Audit Completed</th>
     <th>Feedback</th>
     </tr>
     </thead>
     <tbody>
     <?php
     $i = 0;
     $table1 = "region_states";
     $where = "";
     $addon_where = "";
     $cat_vari = "";
	 
	 // set region & state filter
     if((isset($_REQUEST['region']) && $_REQUEST['region']== 0)  && $_REQUEST['region_state'] == 0)
		$where = "";    
     elseif($_REQUEST['region'] != 0 && $_REQUEST['region_state'] == 0) 
		$where = "where `rid` = '".$_REQUEST['region']."'";    
     elseif($_REQUEST['region'] != 0 && $_REQUEST['region_state'] != 0)
		$where = " where rid = '" . $_REQUEST['region']."' AND stid = '". $_REQUEST['region_state']."'";

	 // set filter for residential/day boarding category
	 if ($_REQUEST['category'] != 0)
	 {
		 if($_REQUEST['category'] == 1)
		 {
			 $whereClause[] = "ls.266617X34X1608SQ001 = 'Y'";
		 }
		 elseif($_REQUEST['category'] == 2)
		 {
			 $whereClause[] = "ls.266617X34X1608SQ002 = 'Y'";
		 }
		 elseif($_REQUEST['category'] == 3)
		 {
			 $whereClause[] = "ls.266617X34X1608SQ003 = 'Y'";
		 }
     }
	 
	 	 if ($_REQUEST['shifts'] != 0)
	 {
		 if($_REQUEST['shifts'] == 1)
		 {
			 $whereClause[] = "ls.266617X34X1609 = 'A1'";
		 }
		 elseif($_REQUEST['shifts'] == 2)
		 {
			 $whereClause[] = "ls.266617X34X1609 = 'A2'";
		 }
		 elseif($_REQUEST['shifts'] == 3)
		 {
			 $whereClause[] = "ls.266617X34X1609 = 'A3'";
		 }
     }
	 
	  
	  	 if ($_REQUEST['genders'] != 0)
	 {
		 if($_REQUEST['genders'] == 1)
		 {
			 $whereClause[] = "ls.266617X32X27 = 'A1'";
		 }
		 elseif($_REQUEST['genders'] == 2)
		 {
			 $whereClause[] = "ls.266617X32X27 = 'A3'";
		 }
		 elseif($_REQUEST['genders'] == 3)
		 {
			 $whereClause[] = "ls.266617X32X27 = 'A2'";
		 }
     }
	 
	 
	  if ($_REQUEST['location'] != 0)
	 {
		 if($_REQUEST['location'] == 1)
		 {
			 $whereClause[] = "ls.266617X32X56 = 'A1'";
		 }
		 elseif($_REQUEST['location'] == 2)
		 {
			 $whereClause[] = "ls.266617X32X56 = 'A2'";
		 }
		 
     }
	 
	 
	  if ($_REQUEST['board'] != 0)
	 {
		 if($_REQUEST['board'] == 1)
		 {
			 $whereClause[] = "ls.266617X32X28SQ001 = 'Y'";
		 }
		 elseif($_REQUEST['board'] == 2)
		 {
			 $whereClause[] = "ls.266617X32X28SQ002 = 'Y'";
		 }
		 
		 elseif($_REQUEST['board'] == 3)
		 {
			 $whereClause[] = "ls.266617X32X28SQ003 = 'Y'";
		 }
		 
		 elseif($_REQUEST['board'] == 4)
		 {
			 $whereClause[] = "ls.266617X32X28SQ004 = 'Y'";
		 }
		  elseif($_REQUEST['board'] == 5)
		 {
			 $whereClause[] = "ls.266617X32X28other != ''";
		 }
		 
     }
	 
	 
	 
     
	if(!empty($whereClause))
		$whereClause = ' and ' . implode(' and ', $whereClause);
	else
		$whereClause = '';
	 
	 // retrieve list of states selected by user
	 //echo "select `name` from $table1 $where";
	 
     $sql_states = mysql_query("select `name` from $table1 $where");
	 
	 // loop through states and output
     while($data = mysql_fetch_array($sql_states))
     {   
		// get total registrations for the state
		$query = "SELECT count(token) FROM lime_tokens_266617  where attribute_5='" . $data['name'] . "'";
        
		$total_reg_count_data = mysql_query($query);
		$total_reg_count = mysql_result($total_reg_count_data, 0, 0);
         
		 
		 // Count audit started for particular state
		  $query_audit="SELECT count(*) FROM `lime_tokens_266617` as lt JOIN `lime_survey_266617` as ls on lt.token = ls.token where attribute_5='" . $data['name'] . "' $whereClause";
         $total_start_count_data = mysql_query($query_audit);
		 
         $total_start_count = mysql_result($total_start_count_data, 0, 0); 
         
		 // Count audit completed for particular state
		 $query_audit_completed="SELECT count(*) FROM `lime_tokens_266617` as lt JOIN `lime_survey_266617` as ls on ls.token = lt.token where `completed` !='N' AND `usesleft` = 0 AND `attribute_5`='" . $data['name']."' $whereClause";
         $total_completed_count_data = mysql_query($query_audit_completed);
         
		 $total_completed_count = mysql_result($total_completed_count_data, 0, 0); 
         
         // Count feedback for given state
		 $total_feedback_count_data = mysql_query("SELECT count(*) FROM `lime_tokens_266617` as `tt` JOIN `gsp_feedback` as `ft` on tt.token = ft.token where `attribute_5` = '".$data['name']."'");
		 
         $total_feedback_count = mysql_result($total_feedback_count_data, 0, 0); 
         
         $i++;
     ?>
     <tr>
     <td><?php echo $i; ?></td>
<!--     <td><?php  ?></td>-->
     <td><?php echo $data['name']; ?></td>
<!--     <td><?php  ?></td>-->
     <td><?php echo $total_reg_count; ?></td>
     <td><?php echo $total_start_count; ?></td>
     <td><?php echo $total_completed_count; ?></td>
     <td><?php echo $total_feedback_count; ?></td>
     </tr>
     <?php
     }
     
     ?>
	   <tfoot>
		<tr>
		<td colspan='2'> <span style="float:right;" >Total</span> </td>
		<td colspan='0'> <span style="float:left;" id ='registration_for_audit'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='audit_start'></span></td>
		<td colspan='0'> <span style="float:left;" id ='audit_completed'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='audit_feedback'></span></td>
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

