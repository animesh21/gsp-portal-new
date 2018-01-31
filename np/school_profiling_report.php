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
    document.title = 'School Profiling Report(GSP-Audit-2015)';
  $('#example').DataTable( {
       dom: 'Bfrtip',
	   buttons: [
           'excel'
       ]
   } );
    
} );
*/

$(document).ready(function() {
    $('#example').dataTable({	
		"sPaginationType": "full_numbers",
		"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;	 
				// Remove the formatting to get integer data for summation
				var intVal = function ( i ) {
					return typeof i === 'string' ? i.replace(/[\$,]/g, '')*1 : typeof i === 'number' ?	i : 0;
				};
	 
	             /*
				// totalpopulation over all pages
				totalpopulation = api.column( 9 ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				},0 );
				*/
				
				// total_page_salary over this page
				population = api.column( 9, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
				
				//total_page_salary = parseFloat(total_page_salary);
				//totalpopulation = parseInt(totalpopulation);
				// Update footer
				$('#totalpopulation').html(population.toFixed(0));	

              // Total Population for Male over this page
				male_population = api.column( 10, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#male_population').html(male_population.toFixed(0));	
			  
			   // Total Population for FeMale over this page
				female_population = api.column( 11, { page: 'current'} ).data().reduce( function (a, b) {
					return intVal(a) + intVal(b);
				}, 0 );
			  $('#female_population').html(female_population.toFixed(0));	

				
			},
			
         dom: 'lBfrtip',
	   buttons: [
           'excel'
       ],
	   "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 25
		
	});
        
   
        
        
});


</script>

<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
      	<h2>School Profiling Report</h2>
        </div>
           

<?php
    include 'filter_panel.php';
?>
		   

     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
     <th>S.No</th>
     <th>School name</th>
     <th>Region/Zone</th>
     <th>State</th>
     <th>Category</th>
     <th>Shifts</th>
     <th>Gender</th>
     <th>Location</th>
     <th>Board</th>
     <th>Total Population</th>
     <th>Male</th>
     <th>Female</th>
     </tr>
     </thead>
     <tbody>
     <?php
	 
	  if ($_REQUEST['region'] !=0)
	 {
		
			 $whereClause[] = "regi.rid =".$_REQUEST['region'];
	
     }
	 
	   if ($_REQUEST['region_state'] !=0)
	 {
		
			 $whereClause[] = "rs.stid =".$_REQUEST['region_state'];
	
     }
	 
	 
	 // set filter for residential/day boarding category
	 
	 if ($_REQUEST['category'] != 0)
	 {
		 if($_REQUEST['category'] == 1)
		 {
			 $whereClause[] = "st.266617X34X1608SQ001 = 'Y'";
		 }
		 elseif($_REQUEST['category'] == 2)
		 {
			 $whereClause[] = "st.266617X34X1608SQ002 = 'Y'";
		 }
		 elseif($_REQUEST['category'] == 3)
		 {
			 $whereClause[] = "st.266617X34X1608SQ003 = 'Y'";
		 }
     }
	 
	 	 if ($_REQUEST['shifts'] != 0)
	 {
		 if($_REQUEST['shifts'] == 1)
		 {
			 $whereClause[] = "st.266617X34X1609 = 'A1'";
		 }
		 elseif($_REQUEST['shifts'] == 2)
		 {
			 $whereClause[] = "st.266617X34X1609 = 'A2'";
		 }
		 elseif($_REQUEST['shifts'] == 3)
		 {
			 $whereClause[] = "st.266617X34X1609 = 'A3'";
		 }
     }
	 
	  
	  	 if ($_REQUEST['genders'] != 0)
	 {
		 if($_REQUEST['genders'] == 1)
		 {
			 $whereClause[] = "st.266617X32X27 = 'A1'";
		 }
		 elseif($_REQUEST['genders'] == 2)
		 {
			 $whereClause[] = "st.266617X32X27 = 'A3'";
		 }
		 elseif($_REQUEST['genders'] == 3)
		 {
			 $whereClause[] = "st.266617X32X27 = 'A2'";
		 }
     }
	 
	 
	  if ($_REQUEST['location'] != 0)
	 {
		 if($_REQUEST['location'] == 1)
		 {
			 $whereClause[] = "st.266617X32X56 = 'A1'";
		 }
		 elseif($_REQUEST['location'] == 2)
		 {
			 $whereClause[] = "st.266617X32X56 = 'A2'";
		 }
		 
     }
	 
	 
	  if ($_REQUEST['board'] != 0)
	 {
		 if($_REQUEST['board'] == 1)
		 {
			 $whereClause[] = "st.266617X32X28SQ001 = 'Y'";
		 }
		 elseif($_REQUEST['board'] == 2)
		 {
			 $whereClause[] = "st.266617X32X28SQ002 = 'Y'";
		 }
		 
		 elseif($_REQUEST['board'] == 3)
		 {
			 $whereClause[] = "st.266617X32X28SQ003 = 'Y'";
		 }
		 
		 elseif($_REQUEST['board'] == 4)
		 {
			 $whereClause[] = "st.266617X32X28SQ004 = 'Y'";
		 }
		  elseif($_REQUEST['board'] == 5)
		 {
			 $whereClause[] = "st.266617X32X28other != ''";
		 }
		 
     }
	 
	 
	 
     
	if(!empty($whereClause))
		$whereClause = ' and ' . implode(' and ', $whereClause);
	else
		$whereClause = '';
	 
	 
	 
	 
	 
  $sql_query = "SELECT * FROM `lime_tokens_266617` AS `tt` JOIN `lime_survey_266617` AS `st`,region_states AS rs, region AS regi
 WHERE st.token = tt.token AND tt.`completed` !='N' AND tt.`usesleft` = 0 AND regi.rid = rs.rid AND tt.attribute_5 = rs.name $whereClause";
 
 $query_result=mysql_query($sql_query);
 
     $i = 0;
     while($data = mysql_fetch_array($query_result))
     {   
         $sql_region_details = mysql_fetch_array(mysql_query("select `rid` from `region_states` where `name` = '".$data['attribute_5']."'"));
         $sql_region_name = mysql_fetch_array(mysql_query("select `name` from `region` where `rid` = '".$sql_region_details['rid']."'"));
         
       //  $sql_score = mysql_fetch_array(mysql_query("select SUM(score) as score2 from `calculation` where `token` = '".$data['token']."' GROUP BY `token`"));
         
         //$sql_survey_details = mysql_fetch_array(mysql_query("select * from `lime_survey_266617`"));
         
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
     <td><?php if($data['266617X34X1609'] == "A1") { echo "Morning"; } elseif($data['266617X34X1609'] == "A2"){ echo "Evening"; } elseif($data['266617X34X1609'] == "A3") { echo "Both"; } ?></td>
     <td><?php if($data['266617X32X27'] == "A1") { echo "Only Boys"; }elseif($data['266617X32X27'] == "A3"){ echo "Only Girls"; }elseif($data['266617X32X27'] == "A2"){ echo "Mixed/Co-education"; } ?></td>
     <td><?php if($data['266617X32X56'] == "A1"){ echo "Urban Area"; }elseif($data['266617X32X56'] == "A2"){ echo "Rural Area"; } ?></td>
     <td>
         <?php 
         $b = array();
         if($data['266617X32X28SQ001'] != "")
            {
                $b[] = "State Board of Education";
            } 
            if($data['266617X32X28SQ002'] != "")
            {
                $b[] = "Central Board of Secondary Education";
            }
            if($data['266617X32X28SQ003'] != "")
            {
                $b[] = "Indian Certificate of Secondary Education";
            }
            if($data['266617X32X28SQ004'] != "")
            {
                $b[] = "International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination";
            }
            if($data['266617X32X28othercbox'] != "")
            {
                $b[] = "Other";
            }
            echo implode($b, ',');
         ?>
     </td>
     <td><?php echo $data['266617X32X33SQ004_SQ003']; ?></td>
     <td><?php echo $data['266617X32X33SQ004_SQ001']; ?></td>
     <td><?php echo $data['266617X32X33SQ004_SQ002']; ?></td>
     </tr>
     <?php
     }
	 
	 
     ?>
     <tfoot>
		<tr>
		<td colspan='9'> <span style="float:right;" >Total</span> </td>
		<td colspan='0'> <span style="float:left;" id ='totalpopulation'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='male_population'></span> </td>
		<td colspan='0'> <span style="float:left;" id ='female_population'></span></td>
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

