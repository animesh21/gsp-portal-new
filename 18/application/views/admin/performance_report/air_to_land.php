<div class="top-area">
    <h2>AIR</h2>
</div>
<div style="overflow: scroll"> 
    <table class="display dataTable no-footer" id="tablePerformance">
	<thead>
	    <tr>
		<th>Sr.No</th>
		<th>School ID</th>
		<th>School Name</th>
		<th>School Category</th>
		<th>School Population</th>
		<th>No.of Classrooms</th>
		<th>Window-floor Ratio(%)</th>
		<th>Ownership of Vehicles</th>
		<th>No.of Vehicles</th>
		<th>No.of Vehicles more than eight years old</th>
		<th>No.of Vehicles with Air conditioner</th>
		<th>No.of Vehicles with PUC certificate</th>
		<th>No.of Vehicles with Authorised parking available</th>
		<th>Annual Road worthiness certificate</th>
		<th>No.of Buses </th>
		<th>No.of Buses on Diesel</th>
		<th>No.of Buses Petrol</th>
		<th>No.of Buses LPG</th>
		<th>No.of Buses CNG</th>
		<th>No.of Buses Hybrid</th>
		<th>No.of Buses Electric</th>
		<th>No.of Buses Biofuel</th>
		<th>No.of Cars</th>
		<th>No.of Cars Diesel</th>
		<th>No.of Cars Petrol</th>
		<th>No.of Cars LPG</th>
		<th>No.of Cars CNG</th>
		<th>No.of Cars Hybrid</th>
		<th>No.of Cars Electric</th>
		<th>No.of Cars Biofuel</th>
		<th>No.of Vans</th>
		<th>No.of Vans Diesel</th>
		<th>No.of Vans Petrol</th>
		<th>No.of Vans LPG</th>
		<th>No.of Vans CNG</th>
		<th>No.of Vans Hybrid</th>
		<th>No.of Vans Electric</th>
		<th>No.of Vans Bio Fuel</th>
		<th>No.of Others</th>
		<th>No.of Others Diesel</th>
		<th>No.of Others Pterol</th>
		<th>No.of Others LPG</th>
		<th>No.of Others CNG </th>
		<th>No.of Others Hybrid</th>
		<th>No.of Others Electric</th>
		<th>No.of Others Bio fuel</th>
		<th>Subtotal Diesel</th>
		<th>Subtotal Petrol</th>
		<th>Subtotal LPG</th>
		<th>Subtotal CNG</th>
		<th>Subtotal Hybrid</th>
		<th>Subtotal Electric</th>
		<th>Subtotal Bio Fuel</th>
		<th>CNG in State</th>
		<th>CNG in Area</th>
		<th>School bus students</th>
		<th>School bus teachers</th>
		<th>School bus nonteaching</th>
		<th>School bus total</th>
		<th>Public bus students</th>
		<th>Public bus teachers</th>
		<th>Public bus non teaching</th>
		<th>Public bus total</th>
		<th>School Transport Students</th>
		<th>School Transport Teachers</th>
		<th>School Transport non teaching</th>
		<th>School Transport Total</th>
		<th>Public Transport students</th>
		<th>Public Transport Teachers</th>
		<th>Public Transport Non-teaching</th>
		<th>Public Transport Total</th>
		<th>Taxi 4 wheeler students</th>
		<th>Taxi 4 wheeler teachers</th>
		<th>Taxi 4 wheeler non-teaching</th>
		<th>Taxi 4 wheeler total</th>
		<th>Taxi 3 wheeler students</th>
		<th>Taxi 3 wheeler teachers</th>
		<th>Taxi 3 wheeler non teaching</th>
		<th>Taxi 3 wheeler total</th>
		<th>Personal 4 wheeler students</th>
		<th>Personal 4 wheeler teacher</th>
		<th>Personal 4 wheeler non teaching</th>
		<th>Personal 4 wheeler total</th>
		<th>Personal 2 wheeler students</th>
		<th>Personal 2 wheeler teachers</th>
		<th>Personal 2 wheeler non teaching </th>
		<th>Personal 2 wheeler total</th>
		<th>Bicycle Students</th>
		<th>Bicycle Teachers</th>
		<th>Bicycle Non teaching</th>
		<th>Bicycle Total</th>
		<th>On foot Students</th>
		<th>On foot Teachers</th>
		<th>On foot Non Teaching</th>
		<th>On foot Total</th>
		<th>Others Students</th>
		<th>Others Teachers</th>
		<th>Others non teaching</th>
		<th>Others Total</th>
		<th>No.of students suffer from respiratory problems</th>
		<th>Air Quality Monitoring in School</th>
		<th>Air Quality Monitoring in close to school</th>
<!--		<th>Uploaded document</th>-->
		<th>Total Points Air</th>
	    </tr> 
	</thead>
	<tbody>

	    <?php
	    ini_set('memory_limit', '-1');
	    for ($i = 0; $i < count($record1); $i++) {
		?>
    	    <tr>
    		<td><?php echo $i + 1; ?></td>
    		<td><?php echo $record1[$i]->id; ?></td>
    		<td><?php echo $record1[$i]->name; ?></td>
    		<td><?php 
			 $category=array("Day Scholar"=>"1","Day Boarding"=>"2","Residential"=>"3","Day Scholar + Day Boarding"=>"4","Day Boarding + Residential"=>"5","Day Scholar + Residential"=>"6","Day Scholar + Day Boarding + Residential"=>"7");
			$serach_category=(getFiled('Q1S1',$record1[$i]->userid) != '') ? getFiled('Q1S1', $record1[$i]->userid) : "";;
			echo array_search($serach_category,$category); ?></td>
    		<td><?php echo(getFiled('Q4G4S3',$record1[$i]->userid) != '') ? getFiled('Q4G4S3', $record1[$i]->userid) : "";?></td>
    		<td><?php echo(getFiled('Q4A1',$record1[$i]->userid) != '') ? getFiled('Q4A1', $record1[$i]->userid) : "";?></td>
    		<td>
    <?php
    $var = 0;
	$Q5A110S3=(getFiled('Q5A110S3',$record1[$i]->userid) != '') ? getFiled('Q5A110S3', $record1[$i]->userid) : "";
	$Q5A110S2=(getFiled('Q5A110S2',$record1[$i]->userid) != '') ? getFiled('Q5A110S2', $record1[$i]->userid) : "";
    if ($Q5A110S3!="" && $Q5A110S2!="") {
	$var = ($Q5A110S3 / $Q5A110S2) * 100;
    }
    echo number_format($var, 2);
    ?>
    		</td>
    		<td>
		    <?php 
			$Q6A1=(getFiled('Q6A1',$record1[$i]->userid) != '') ? getFiled('Q6A1', $record1[$i]->userid) : "";
			if($Q6A1==1)
			{
			    echo 'School does not use or own vehicles';
			}else if($Q6A1==2)
			{
			    echo 'Operator-owned vehicles';
			}else if($Q6A1==3)
			{
			    echo 'School-owned vehicles';
			}else if($Q6A1==4)
			{
			    echo 'A combination of school-owned and operator-owned vehicles';
			}else if($Q6A1==5)
			{
			    echo 'Hired vehicles (JNV schools)';
			}
			
		    ?>
		</td>
    		<td><?php echo(getFiled('Q6A2S1T1',$record1[$i]->userid) != '') ? getFiled('Q6A2S1T1', $record1[$i]->userid) : "";?></td>
    		<td><?php echo (getFiled('Q6A2S1T2',$record1[$i]->userid) != '') ? getFiled('Q6A2S1T2', $record1[$i]->userid) : "";?></td>
    		<td><?php echo (getFiled('Q6A2S1T3',$record1[$i]->userid) != '') ? getFiled('Q6A2S1T3', $record1[$i]->userid) : "";?></td>
    		<td><?php echo (getFiled('Q6A2S1T4',$record1[$i]->userid) != '') ? getFiled('Q6A2S1T4', $record1[$i]->userid) : "";?></td>
    		<td><?php echo (getFiled('Q6A2S1T5',$record1[$i]->userid) != '') ? getFiled('Q6A2S1T5', $record1[$i]->userid) : "";?></td>
    		<td><?php echo (getFiled('Q6A2S1T6',$record1[$i]->userid) != '') ? getFiled('Q6A2S1T6', $record1[$i]->userid) : "";?></td>
    		<td><?php 
			echo (getFiled('Q6A2S3D1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3D1', $record1[$i]->userid) : ""+(getFiled('Q6A2S3P1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3P1', $record1[$i]->userid) : ""+(getFiled('Q6A2S3L1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3L1', $record1[$i]->userid) : ""+(getFiled('Q6A2S3C1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3C1', $record1[$i]->userid) : ""+(getFiled('Q6A2S3E1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3E1', $record1[$i]->userid) : ""+(getFiled('Q6A2S3H1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3H1', $record1[$i]->userid) : ""+(getFiled('Q6A2S3B1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3B1', $record1[$i]->userid) : "";
			?></td>
    		<td><?php echo (getFiled('Q6A2S3D1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3D1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3P1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3P1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3L1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3L1', $record1[$i]->userid) : "";?></td>
    		<td><?php echo (getFiled('Q6A2S3C1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3C1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3E1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3E1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3H1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3H1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3B1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3B1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('total_cars',$record1[$i]->userid) != '') ? getFiled('total_cars', $record1[$i]->userid) : ""; ?></td>
		<td><?php echo (getFiled('Q6A2S3B1',$record1[$i]->userid) != '') ? getFiled('Q6A2S3B1', $record1[$i]->userid) : ""; ?></td>    
    		<td><?php echo (getFiled('Q6A2S3D2',$record1[$i]->userid) != '') ? getFiled('Q6A2S3D2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3P2',$record1[$i]->userid) != '') ? getFiled('Q6A2S3P2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3L2',$record1[$i]->userid) != '') ? getFiled('Q6A2S3L2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3C2',$record1[$i]->userid) != '') ? getFiled('Q6A2S3C2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3E2',$record1[$i]->userid) != '') ? getFiled('Q6A2S3E2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3H2',$record1[$i]->userid) != '') ? getFiled('Q6A2S3H2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('total_vans',$record1[$i]->userid) != '') ? getFiled('total_vans', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3D3',$record1[$i]->userid) != '') ? getFiled('Q6A2S3D3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3P3',$record1[$i]->userid) != '') ? getFiled('Q6A2S3P3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3L3',$record1[$i]->userid) != '') ? getFiled('Q6A2S3L3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3C3',$record1[$i]->userid) != '') ? getFiled('Q6A2S3C3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php  echo (getFiled('Q6A2S3E3',$record1[$i]->userid) != '') ? getFiled('Q6A2S3E3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3H3',$record1[$i]->userid) != '') ? getFiled('Q6A2S3H3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3B3',$record1[$i]->userid) != '') ? getFiled('Q6A2S3B3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('total_other',$record1[$i]->userid) != '') ? getFiled('total_other', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3D4',$record1[$i]->userid) != '') ? getFiled('Q6A2S3D4', $record1[$i]->userid) : "";  ?></td>
    		<td><?php echo (getFiled('Q6A2S3P4',$record1[$i]->userid) != '') ? getFiled('Q6A2S3P4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3L4',$record1[$i]->userid) != '') ? getFiled('Q6A2S3L4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3C4',$record1[$i]->userid) != '') ? getFiled('Q6A2S3C4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3E4',$record1[$i]->userid) != '') ? getFiled('Q6A2S3E4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php  echo (getFiled('Q6A2S3H4',$record1[$i]->userid) != '') ? getFiled('Q6A2S3H4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q6A2S3B4',$record1[$i]->userid) != '') ? getFiled('Q6A2S3B4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('total_disel',$record1[$i]->userid) != '') ? getFiled('total_disel', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('total_petrol',$record1[$i]->userid) != '') ? getFiled('total_petrol', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('total_lpg',$record1[$i]->userid) != '') ? getFiled('total_lpg', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('total_cng',$record1[$i]->userid) != '') ? getFiled('total_cng', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('total_hybrid',$record1[$i]->userid) != '') ? getFiled('total_hybrid', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('total_electric',$record1[$i]->userid) != '') ? getFiled('total_electric', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('total_biofuel',$record1[$i]->userid) != '') ? getFiled('total_biofuel', $record1[$i]->userid) : ""; ?></td>
    		<td>
		    <?php 
			$Q6A3=(getFiled('Q6A3',$record1[$i]->userid) != '') ? getFiled('Q6A3', $record1[$i]->userid) : "";
			if($Q6A3=="Y")
			{
			    echo 'Yes';
			}else if($Q6A3=="N")
			{
			    echo 'No';
			}
		    ?>
		</td>
    		<td>
		    <?php 
			$Q6A4S1=(getFiled('Q6A4S1',$record1[$i]->userid) != '') ? getFiled('Q6A4S1', $record1[$i]->userid) : "";
			if($Q6A4S1=="Y")
			{
			    echo 'Yes';
			}else if($Q6A4S1=="N")
			{
			     echo 'No';
			}
		?>
		</td>
    		<td><?php echo (getFiled('Q7A1S1',$record1[$i]->userid) != '') ? getFiled('Q7A1S1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A1S2',$record1[$i]->userid) != '') ? getFiled('Q7A1S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A1S3',$record1[$i]->userid) != '') ? getFiled('Q7A1S3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A1S4',$record1[$i]->userid) != '') ? getFiled('Q7A1S4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A2S1',$record1[$i]->userid) != '') ? getFiled('Q7A2S1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A2S2',$record1[$i]->userid) != '') ? getFiled('Q7A2S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A2S3',$record1[$i]->userid) != '') ? getFiled('Q7A2S3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A2S4',$record1[$i]->userid) != '') ? getFiled('Q7A2S4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A3S1',$record1[$i]->userid) != '') ? getFiled('Q7A3S1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A3S2',$record1[$i]->userid) != '') ? getFiled('Q7A3S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A3S3',$record1[$i]->userid) != '') ? getFiled('Q7A3S3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A3S4',$record1[$i]->userid) != '') ? getFiled('Q7A3S4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A4S1',$record1[$i]->userid) != '') ? getFiled('Q7A4S1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A4S2',$record1[$i]->userid) != '') ? getFiled('Q7A4S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A4S3',$record1[$i]->userid) != '') ? getFiled('Q7A4S3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A4S4',$record1[$i]->userid) != '') ? getFiled('Q7A4S4', $record1[$i]->userid) : "";?></td>
    		<td><?php echo (getFiled('Q7A5S1',$record1[$i]->userid) != '') ? getFiled('Q7A5S1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A5S2',$record1[$i]->userid) != '') ? getFiled('Q7A5S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A5S3',$record1[$i]->userid) != '') ? getFiled('Q7A5S3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A5S4',$record1[$i]->userid) != '') ? getFiled('Q7A5S4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php  echo (getFiled('Q7A6S1',$record1[$i]->userid) != '') ? getFiled('Q7A6S1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php  echo (getFiled('Q7A6S2',$record1[$i]->userid) != '') ? getFiled('Q7A6S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A6S3',$record1[$i]->userid) != '') ? getFiled('Q7A6S3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A6S4',$record1[$i]->userid) != '') ? getFiled('Q7A6S4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A7S1',$record1[$i]->userid) != '') ? getFiled('Q7A7S1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A7S2',$record1[$i]->userid) != '') ? getFiled('Q7A7S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A7S3',$record1[$i]->userid) != '') ? getFiled('Q7A7S3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A7S4',$record1[$i]->userid) != '') ? getFiled('Q7A7S4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A8S1',$record1[$i]->userid) != '') ? getFiled('Q7A8S1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A8S2',$record1[$i]->userid) != '') ? getFiled('Q7A8S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A8S3',$record1[$i]->userid) != '') ? getFiled('Q7A8S3', $record1[$i]->userid) : ""; ?></td>
			<td><?php echo (getFiled('Q7A8S4',$record1[$i]->userid) != '') ? getFiled('Q7A8S4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php  echo (getFiled('Q7A9S1',$record1[$i]->userid) != '') ? getFiled('Q7A9S1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A9S2',$record1[$i]->userid) != '') ? getFiled('Q7A9S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A9S3',$record1[$i]->userid) != '') ? getFiled('Q7A9S3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A9S4',$record1[$i]->userid) != '') ? getFiled('Q7A9S4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A10S1',$record1[$i]->userid) != '') ? getFiled('Q7A10S1', $record1[$i]->userid) : "";  ?></td>
    		<td><?php echo (getFiled('Q7A10S2',$record1[$i]->userid) != '') ? getFiled('Q7A10S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php  echo (getFiled('Q7A10S3',$record1[$i]->userid) != '') ? getFiled('Q7A10S3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A10S4',$record1[$i]->userid) != '') ? getFiled('Q7A10S4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A11S1',$record1[$i]->userid) != '') ? getFiled('Q7A11S1', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A11S2',$record1[$i]->userid) != '') ? getFiled('Q7A11S2', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A11S3',$record1[$i]->userid) != '') ? getFiled('Q7A11S3', $record1[$i]->userid) : ""; ?></td>
    		<td><?php echo (getFiled('Q7A11S4',$record1[$i]->userid) != '') ? getFiled('Q7A11S4', $record1[$i]->userid) : ""; ?></td>
    		<td><?php  echo (getFiled('Q8A1',$record1[$i]->userid) != '') ? getFiled('Q8A1', $record1[$i]->userid) : "";  ?></td>
    		<td>
		    <?php 
			$Q9A1=(getFiled('Q9A1',$record1[$i]->userid) != '') ? getFiled('Q9A1', $record1[$i]->userid) : "";
			if($Q9A1=="Y")
			{
			    echo "Yes";
			}else if($Q9A1=="N")
			{
			     echo "No";
			}
		    ?>
		</td>
    		<td>
		    <?php 
			$Q9A2=(getFiled('Q9A2',$record1[$i]->userid) != '') ? getFiled('Q9A2', $record1[$i]->userid) : "";
			if($Q9A2=="Y")
			{
			    echo "Yes";
			}else if($Q9A2=="N")
			{
			     echo "No";
			}
		    ?>
		</td>
    		<td><?php echo number_format($record1[$i]->points, 2); ?></td>
    	    </tr>
    <?php
}
?>
	</tbody>
    </table>
</div>    
