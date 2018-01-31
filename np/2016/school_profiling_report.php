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
			 $whereClause[] = "st.266617X34X1608 = '1'";
		 }
		 elseif($_REQUEST['category'] == 2)
		 {
			 $whereClause[] = "st.266617X34X1608 = '2'";
		 }
		 elseif($_REQUEST['category'] == 3)
		 {
			 $whereClause[] = "st.266617X34X1608 = '3'";
		 }
		 
		  elseif($_REQUEST['category'] == 4)
		 {
			 $whereClause[] = "st.266617X34X1608 = '4'";
		 }
		 
		  elseif($_REQUEST['category'] == 5)
		 {
			 $whereClause[] = "st.266617X34X1608 = '5'";
		 }
		  elseif($_REQUEST['category'] == 6)
		 {
			 $whereClause[] = "st.266617X34X1608 = '6'";
		 }
		 
		  elseif($_REQUEST['category'] == 7)
		 {
			 $whereClause[] = "st.266617X34X1608 = '7'";
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
			 $whereClause[] = "st.266617X32X28 = '1'";
		 }
		 elseif($_REQUEST['board'] == 2)
		 {
			 $whereClause[] = "st.266617X32X28 = '2'";
		 }
		 
		 elseif($_REQUEST['board'] == 3)
		 {
			 $whereClause[] = "st.266617X32X28 = '3'";
		 }
		 
		 elseif($_REQUEST['board'] == 4)
		 {
			 $whereClause[] = "st.266617X32X28 = '4'";
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
	 
	 
	 
	 
	 
  $sql_query = "SELECT tt.attribute_1,regi.name AS region_name,rs.name AS state_name,st.266617X34X1608,st.266617X34X1609,st.266617X32X27,st.266617X32X56,st.266617X32X33SQ004_SQ001,st.266617X32X33SQ004_SQ003,st.266617X32X33SQ004_SQ001,st.266617X32X33SQ004_SQ002,st.266617X32X28,st.266617X32X28other  FROM `lime_tokens_266617` AS `tt` JOIN `lime_survey_266617` AS `st`,states_india AS rs, region AS regi
 WHERE st.token = tt.token AND tt.`completed` !='N' AND tt.`usesleft` <= 0 AND st.submitdate IS NOT NULL AND regi.rid = rs.rid AND tt.attribute_5 = rs.state_id $whereClause";
 
 $query_result=mysql_query($sql_query);
 
     $i = 0;
     while($data = mysql_fetch_array($query_result))
     {   

         
         $i++;
     ?>  
     <tr>
     <td><?php echo $i; ?></td>
     <td><?php echo $data['attribute_1']; ?></td>
     <td><?php echo $data['region_name']; ?></td>
     <td><?php echo $data['state_name']; ?></td>
     <td>
         <?php 
           $school_type=array(1=>"Day Scholar",2=>"Day Boarding",3=>"Residential",4=>"Day Scholar + Day Boarding",5=>"Day Boarding + Residential",6=>"Day Scholar + Residential",7=>"Day Scholar + Day Boarding + Residential");			

$type=$data['266617X34X1608'];
echo $school_type[$type];
         ?>
     </td>
     <td><?php if($data['266617X34X1609'] == "A1") { echo "Morning"; } elseif($data['266617X34X1609'] == "A2"){ echo "Evening"; } elseif($data['266617X34X1609'] == "A3") { echo "Both"; } ?></td>
     <td><?php if($data['266617X32X27'] == "A1") { echo "Only Boys"; }elseif($data['266617X32X27'] == "A3"){ echo "Only Girls"; }elseif($data['266617X32X27'] == "A2"){ echo "Mixed/Co-education"; } ?></td>
     <td><?php if($data['266617X32X56'] == "A1"){ echo "Urban Area"; }elseif($data['266617X32X56'] == "A2"){ echo "Rural Area"; } ?></td>
     <td>
         <?php 
        
         if($data['266617X32X28'] ==1)
            {
            echo "State Board of Education";
            } 
		
            if($data['266617X32X28'] ==2)
            {
              echo "Central Board of Secondary Education";
            }
            if($data['266617X32X28'] ==3)
            {
               echo "Indian Certificate of Secondary Education";
            }
            if($data['266617X32X28'] ==4)
           {
              echo "International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination";
            }
			if($data['266617X32X28other'] != "")
           {
            echo "Other : ".$data['266617X32X28other'];
           }
            
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

