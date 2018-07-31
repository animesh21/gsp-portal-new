<div class="top-area">
    <h2>SCHOOL PROFILE & GENERAL</h2>
</div>
<div style="overflow: scroll"> 
    <table class="display dataTable no-footer" id="tablePerformance">
	<thead>
	    <tr>
		<th>S.No</th>
		<th>School Id</th>
		<th>Name of the School/Institution</th>
		<th>Address Line 1</th>
		<th>Address Line 2</th>
		<th>Country</th>
		<th>State</th>
		<th>District</th>
		<th>City</th>
		<th>Pin code</th>
		<th>ISD Code</th>
		<th>STD Code</th>
		<th>Landline No.</th>
		<th>Mobile No.</th>
		<th>Principal&#39;s Name</th>
		<th>GSP Coordintor Name</th>
		<th>GSP Coordintor Email</th>
		<th>Password</th>
		<th>GSP Coordintor Mobile</th>
		<th>School Category</th>
		<th>No.of Shifts</th>
		<th>Lowest Level</th>
		<th>Highest Level</th>
		<th>School type - Gender</th>
		<th>Board of Education</th>
		<th>Total Population</th>
		<th>Students</th>
		<th>Teachers</th>
		<th>Non-Teaching Staff</th>
		<th>Male</th>
		<th>Female</th>
		<th>Visitors</th>
		<th>No.of working days</th>
		<th>Audit Period</th>
		<th>Location</th>
		<th>Type of Aid</th>
		<th>School Level</th>
	    </tr> 
	</thead>
	<tbody>
	    <?php
		ini_set('memory_limit', '-1');
	    for ($i = 0; $i < count($record1); $i++) {
		?>
		<!--Old Code-->
    	    <!--<tr>
    		<td><?php //echo $i + 1; ?></td>
    		<td><?php //echo $record1[$i]->school_id; ?></td>
    		<td><?php //echo $record1[$i]->name; ?></td>
    		<td><?php //echo $record1[$i]->address1; ?></td>
    		<td><?php //echo $record1[$i]->address2; ?></td>
    		<td><?php //echo $record1[$i]->country; ?></td>
    		<td><?php //echo $record1[$i]->state_name; ?></td>
    		<td><?php/// echo $record1[$i]->district_name; ?></td>
    		<td><?php// echo $record1[$i]->city; ?></td>
    		<td><?php// echo $record1[$i]->pincode; ?></td>
    		<td><?php //echo $record1[$i]->isd; ?></td>
    		<td><?php// echo $record1[$i]->std; ?></td>
    		<td><?php //echo $record1[$i]->landline; ?></td>
    		<td><?php //echo $record1[$i]->mobile; ?></td>
    		<td><?php //echo $record1[$i]->principal; ?></td>
    		<td><?php //echo $record1[$i]->codinator; ?></td>
    		<td><?php //echo $record1[$i]->codinator_mail; ?></td>
    		<td><?php //echo $record1[$i]->password; ?></td>
    		<td><?php //echo $record1[$i]->codinator_mobile; ?></td>
    		<td><?php //echo $record1[$i]->category; ?></td>
    		<td><?php //echo $record1[$i]->shifts; ?></td>
    		<td><?php //echo $record1[$i]->lowest_level; ?></td>
    		<td><?php //echo $record1[$i]->higest_level; ?></td>
    		<td><?php //echo $record1[$i]->gender; ?></td>
    		<td><?php //echo $record1[$i]->educatio_board; ?></td>
    		<td><?php //echo $record1[$i]->population; ?></td>
    		<td><?php //echo $record1[$i]->students; ?></td>
    		<td><?php //echo $record1[$i]->teachers; ?></td>
    		<td><?php //echo $record1[$i]->nonteachers; ?></td>
    		<td><?php //echo $record1[$i]->male; ?></td>
    		<td><?php //echo $record1[$i]->female; ?></td>
    		<td><?php //echo $record1[$i]->visitor; ?></td>
    		<td><?php //echo $record1[$i]->working_days; ?></td>
    		<td><?php //echo $record1[$i]->audit_period; ?></td>
    		<td><?php //echo $record1[$i]->location; ?></td>
    		<td><?php //echo $record1[$i]->aid; ?></td>
    	    </tr>-->
			
			<tr>
			<td><?php echo $i + 1; ?></td>
    		<td><?php echo $record1[$i]->id; ?></td>
    		<td><?php echo $record1[$i]->name; ?></td>
    		<td><?php echo $record1[$i]->address1; ?></td>
    		<td><?php echo $record1[$i]->address2; ?></td>
    		<td><?php echo $record1[$i]->country; ?></td>
    		<td><?php echo $record1[$i]->state_name; ?></td>
    		<td><?php echo $record1[$i]->district_name; ?></td>
    		<td><?php echo $record1[$i]->city; ?></td>
    		<td><?php echo $record1[$i]->pincode; ?></td>
    		<td><?php echo $record1[$i]->country_code; ?></td>
    		<td><?php echo $record1[$i]->std; ?></td>
    		<td><?php echo $record1[$i]->telephone; ?></td>
    		<td><?php echo $record1[$i]->mobile; ?></td>
    		<td><?php echo $record1[$i]->principle_name; ?></td>
    		<td><?php echo $record1[$i]->coname; ?></td>
    		<td><?php echo $record1[$i]->coemail; ?></td>
    		<td><?php echo $record1[$i]->comobile; ?></td>
    		<td><?php 
			 $category=array("Day Scholar"=>"1","Day Boarding"=>"2","Residential"=>"3","Day Scholar + Day Boarding"=>"4","Day Boarding + Residential"=>"5","Day Scholar + Residential"=>"6","Day Scholar + Day Boarding + Residential"=>"7");
			$serach_category=(getFiled('Q1S1',$record1[$i]->userid) != '') ? getFiled('Q1S1', $record1[$i]->userid) : "";;
			echo array_search($serach_category,$category); ?></td>
			
			<td><?php 
			$shifts =array("Morning"=>"1","Evening"=>"2","Both"=>"3");
			$serach_shifts=(getFiled('Q2S1',$record1[$i]->userid) != '') ? getFiled('Q2S1', $record1[$i]->userid) : ""; 
			echo array_search($serach_shifts,$shifts);
			?></td>
			
			
			<td><?php 
			$school_level=array("Is your school a primary school (upto Class 5)?"=>"1",
			"Is your school an elementary school (upto Class 8)?"=>"2",
			"Is your school a secondary school (upto Class 10)?"=>"3",
			"Is your school a higher secondary school (upto Class 12)?"=>"4");
			$serach_school_level=(getFiled('Q10G1',$record1[$i]->userid) != '') ? getFiled('Q10G1', $record1[$i]->userid) : ""; 
			echo array_search($serach_school_level,$school_level);
			?></td>
			
			
			
			<td><?php echo (getFiled('Q1G1',$record1[$i]->userid) != '') ? getFiled('Q1G1', $record1[$i]->userid) : ""; ?></td>
			<td><?php echo (getFiled('Q1G2',$record1[$i]->userid) != '') ? getFiled('Q1G2', $record1[$i]->userid) : ""; ?></td>
			<td><?php 
			$gender_type=array("Only boys"=>"1",
			"Only Girls"=>"2",
			"Mixed/Co-education"=>"3");
			$gender_serach=(getFiled('Q2G1',$record1[$i]->userid) != '') ? getFiled('Q2G1', $record1[$i]->userid) : ""; 
			echo array_search($gender_serach,$gender_type);
			?></td>
			
			
			<td><?php 
			$education_board =array("State board of education (please specify your state)"=>"1",
			"Central Board of Secondary Education"=>"2",
			"Indian Certificate of Secondary Education"=>"3",
			"International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination"=>"4","Others"=>"5");
			$education_board_serach=(getFiled('Q3G1',$record1[$i]->userid) != '') ? getFiled('Q3G1', $record1[$i]->userid) : ""; 
			echo array_search($education_board_serach,$education_board);
			?></td>
			<td><?php echo (getFiled('Q4G4S3',$record1[$i]->userid) != '') ? getFiled('Q4G4S3', $record1[$i]->userid) : ""; ?></td>
			<td><?php echo (getFiled('Q4G1S3',$record1[$i]->userid) != '') ? getFiled('Q4G1S3', $record1[$i]->userid) : ""; ?></td>
			<td><?php echo (getFiled('Q4G2S3',$record1[$i]->userid) != '') ? getFiled('Q4G2S3', $record1[$i]->userid) : ""; ?></td>
			<td><?php echo (getFiled('Q4G3S3',$record1[$i]->userid) != '') ? getFiled('Q4G3S3', $record1[$i]->userid) : ""; ?></td>
			<td><?php echo (getFiled('Q4G4S1',$record1[$i]->userid) != '') ? getFiled('Q4G4S1', $record1[$i]->userid) : ""; ?></td>
			<td><?php echo (getFiled('Q4G4S2',$record1[$i]->userid) != '') ? getFiled('Q4G4S2', $record1[$i]->userid) : ""; ?></td>
			<td><?php echo (getFiled('Q5G1',$record1[$i]->userid) != '') ? getFiled('Q5G1', $record1[$i]->userid) : ""; ?></td>
			<td><?php echo (getFiled('Q6G1',$record1[$i]->userid) != '') ? getFiled('Q6G1', $record1[$i]->userid) : ""; ?></td>
			<td><?php 
			/*$months_result='';
			$monthlist=array("Jan"=>"1","Feb"=>"2","Mar"=>"3","April"=>"4","May"=>"5","June"=>"6","July"=>"7","Aug"=>"8","Sept"=>"9","Oct"=>"10","Nov"=>"11","Dec"=>"12");
			for($i=1;$i<=12;++$i){
			$months=(getFiled('Q7G'.$i.'',$record1[$i]->userid) != '') ? getFiled('Q7G'.$i.'', $record1[$i]->userid) : "";
			if($months!=""){
			 $months_result.=array_search($months,$monthlist).",";
			 }
			}
             echo $months_result;*/
			?></td>
			
			<td><?php 
			$located_type=array(" Urban Area"=>"1",
			"Rural Area"=>"2");
			$located_type_serach=(getFiled('Q8G1',$record1[$i]->userid) != '') ? getFiled('Q8G1', $record1[$i]->userid) : ""; 
			echo array_search($located_type_serach,$located_type);
			?></td>
			<td><?php 
			$school_type=array("Government School"=>"1",
			"Government – Aided School"=>"2","Private School"=>"3");
			$school_type_search=(getFiled('Q9G1',$record1[$i]->userid) != '') ? getFiled('Q9G1',$record1[$i]->userid) : ""; 
			echo array_search($school_type_search,$school_type);
			?></td>
			<td><?php 
			$school_level=array("Is your school a primary school (upto Class 5)?"=>"1",
			"Is your school an elementary school (upto Class 8)?"=>"2",
			"Is your school a secondary school (upto Class 10)?"=>"3",
			"Is your school a higher secondary school (upto Class 12)?"=>"4");
			$serach_school_level=(getFiled('Q10G1',$record1[$i]->userid) != '') ? getFiled('Q10G1', $record1[$i]->userid) : ""; 
			echo array_search($serach_school_level,$school_level);
			?></td>
			</tr>
    <?php
}
?>
	</tbody>
    </table>
</div>    
