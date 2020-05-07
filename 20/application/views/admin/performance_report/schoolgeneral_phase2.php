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
	    </tr> 
	</thead>
	<tbody>
	       <?php
	       for ($i = 0; $i < count($record1); $i++) {
		   ?>
    	    <tr>
    		<td><?php echo $i + 1; ?></td>
    		<td><?php echo $record1[$i]->school_id; ?></td>
    		<td><?php echo $record1[$i]->name; ?></td>
    		<td><?php echo $record1[$i]->address1; ?></td>
    		<td><?php echo $record1[$i]->address2; ?></td>
    		<td><?php echo $record1[$i]->country; ?></td>
    		<td><?php echo $record1[$i]->state_name; ?></td>
    		<td><?php echo $record1[$i]->district_name; ?></td>
    		<td><?php echo $record1[$i]->city; ?></td>
    		<td><?php echo $record1[$i]->pincode; ?></td>
    		<td><?php echo $record1[$i]->isd; ?></td>
    		<td><?php echo $record1[$i]->std; ?></td>
    		<td><?php echo $record1[$i]->landline; ?></td>
    		<td><?php echo $record1[$i]->mobile; ?></td>
    		<td><?php echo $record1[$i]->principal; ?></td>
    		<td><?php echo $record1[$i]->codinator; ?></td>
    		<td><?php echo $record1[$i]->codinator_mail; ?></td>
    		<td><?php echo $record1[$i]->password; ?></td>
    		<td><?php echo $record1[$i]->codinator_mobile; ?></td>
    		<td><?php echo $record1[$i]->category; ?></td>
    		<td><?php echo $record1[$i]->shifts; ?></td>
    		<td><?php echo $record1[$i]->lowest_level; ?></td>
    		<td><?php echo $record1[$i]->higest_level; ?></td>
    		<td><?php echo $record1[$i]->gender; ?></td>
    		<td><?php echo $record1[$i]->educatio_board; ?></td>
    		<td><?php echo $record1[$i]->population; ?></td>
    		<td><?php echo $record1[$i]->students; ?></td>
    		<td><?php echo $record1[$i]->teachers; ?></td>
    		<td><?php echo $record1[$i]->nonteachers; ?></td>
    		<td><?php echo $record1[$i]->male; ?></td>
    		<td><?php echo $record1[$i]->female; ?></td>
    		<td><?php echo $record1[$i]->visitor; ?></td>
    		<td><?php echo $record1[$i]->working_days; ?></td>
    		<td><?php echo $record1[$i]->audit_period; ?></td>
    		<td><?php echo $record1[$i]->location; ?></td>
    		<td><?php echo $record1[$i]->aid; ?></td>
    	    </tr>
    <?php
}
?>
	</tbody>
    </table>
</div>    
