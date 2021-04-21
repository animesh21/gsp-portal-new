<div class="top-area">
    <h2>AIR Phase 2 </h2>
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
	    
	    for ($i = 0; $i < count($record1); $i++) {
		?>
    	    <tr>
    		<td><?php echo $i + 1; ?></td>
    		<td><?php echo $record1[$i]->id; ?></td>
    		<td><?php echo $record1[$i]->name; ?></td>
    		<td><?php echo $record1[$i]->category; ?></td>
    		<td><?php echo $record1[$i]->population; ?></td>
    		<td><?php echo $record1[$i]->Q4A1; ?></td>
    		<td>
    <?php
    $var = 0;
    if ((isset($record1[$i]->Q5A110S3) && $record1[$i]->Q5A110S3 != 0) && (isset($record1[$i]->Q5A110S2) && $record1[$i]->Q5A110S2 != 0)) {
	$var = ($record1[$i]->Q5A110S3 / $record1[$i]->Q5A110S2) * 100;
    }

    echo number_format($var, 2);
    ?>
    		</td>
    		<td>
		    <?php 
//			$arr = array(
//                            '1' => 'School does not use or own vehicles',
//                            '2' => 'Operator-owned vehicles',
//                            '3' => 'School-owned vehicles',
//                            '4' => 'A combination of school-owned and operator-owned vehicles',
//                            '5' => 'Hired vehicles (JNV schools)',
//                        );
			if($record1[$i]->Q6A1==1)
			{
			    echo 'School does not use or own vehicles';
			}else if($record1[$i]->Q6A1==2)
			{
			    echo 'Operator-owned vehicles';
			}else if($record1[$i]->Q6A1==3)
			{
			    echo 'School-owned vehicles';
			}else if($record1[$i]->Q6A1==4)
			{
			    echo 'A combination of school-owned and operator-owned vehicles';
			}else if($record1[$i]->Q6A1==5)
			{
			    echo 'Hired vehicles (JNV schools)';
			}
			
		    ?>
		</td>
    		<td><?php echo $record1[$i]->Q6A2S1T1; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S1T2; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S1T3; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S1T4; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S1T5; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S1T6; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3D1+$record1[$i]->Q6A2S3P1+$record1[$i]->Q6A2S3L1+$record1[$i]->Q6A2S3C1+$record1[$i]->Q6A2S3E1+$record1[$i]->Q6A2S3H1+$record1[$i]->Q6A2S3B1; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3D1; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3P1; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3L1; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3C1; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3E1; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3H1; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3B1; ?></td>
    		<td><?php echo $record1[$i]->total_cars; ?></td>
		<td><?php echo $record1[$i]->Q6A2S3B1; ?></td>    
    		<td><?php echo $record1[$i]->Q6A2S3D2; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3P2; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3L2; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3C2; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3E2; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3H2; ?></td>
    		<td><?php echo $record1[$i]->total_vans; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3D3; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3P3; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3L3; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3C3; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3E3; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3H3; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3B3; ?></td>
    		<td><?php echo $record1[$i]->total_other; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3D4; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3P4; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3L4; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3C4; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3E4; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3H4; ?></td>
    		<td><?php echo $record1[$i]->Q6A2S3B4; ?></td>
    		<td><?php echo $record1[$i]->total_disel; ?></td>
    		<td><?php echo $record1[$i]->total_petrol; ?></td>
    		<td><?php echo $record1[$i]->total_lpg; ?></td>
    		<td><?php echo $record1[$i]->total_cng; ?></td>
    		<td><?php echo $record1[$i]->total_hybrid; ?></td>
    		<td><?php echo $record1[$i]->total_electric; ?></td>
    		<td><?php echo $record1[$i]->total_biofuel; ?></td>
    		<td>
		    <?php 
			if($record1[$i]->Q6A3=="Y")
			{
			    echo 'Yes';
			}else if($record1[$i]->Q6A3=="N")
			{
			    echo 'No';
			}
		    ?>
		</td>
    		<td>
		    <?php 
			if($record1[$i]->Q6A4S1=="Y")
			{
			    echo 'Yes';
			}else if($record1[$i]->Q6A4S1=="N")
			{
			     echo 'No';
			}
		?>
		</td>
    		<td><?php echo $record1[$i]->Q7A1S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A1S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A1S3; ?></td>
    		<td><?php echo $record1[$i]->Q7A1S4; ?></td>
    		<td><?php echo $record1[$i]->Q7A2S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A2S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A2S3; ?></td>
    		<td><?php echo $record1[$i]->Q7A2S4; ?></td>
    		<td><?php echo $record1[$i]->Q7A3S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A3S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A3S3; ?></td>
    		<td><?php echo $record1[$i]->Q7A3S4; ?></td>
    		<td><?php echo $record1[$i]->Q7A4S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A4S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A4S3; ?></td>
    		<td><?php echo $record1[$i]->Q7A4S4; ?></td>
    		<td><?php echo $record1[$i]->Q7A5S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A5S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A5S3; ?></td>
    		<td><?php echo $record1[$i]->Q7A5S4; ?></td>
    		<td><?php echo $record1[$i]->Q7A6S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A6S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A6S3; ?></td>
    		<td><?php echo $record1[$i]->Q7A6S4; ?></td>
    		<td><?php echo $record1[$i]->Q7A7S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A7S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A7S3; ?></td>
    		<td><?php echo $record1[$i]->Q7A7S4; ?></td>
    		<td><?php echo $record1[$i]->Q7A8S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A8S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A8S3; ?></td>
			<td><?php echo $record1[$i]->Q7A8S4; ?></td>
    		<td><?php echo $record1[$i]->Q7A9S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A9S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A9S3; ?></td>
    		<td><?php echo $record1[$i]->Q7A9S4; ?></td>
    		<td><?php echo $record1[$i]->Q7A10S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A10S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A10S3; ?></td>
    		<td><?php echo $record1[$i]->Q7A10S4; ?></td>
    		<td><?php echo $record1[$i]->Q7A11S1; ?></td>
    		<td><?php echo $record1[$i]->Q7A11S2; ?></td>
    		<td><?php echo $record1[$i]->Q7A11S3; ?></td>
    		<td><?php echo $record1[$i]->Q7A11S4; ?></td>
    		<td><?php echo $record1[$i]->Q8A1; ?></td>
    		<td>
		    <?php 
			if($record1[$i]->Q9A1=="Y")
			{
			    echo "Yes";
			}else if($record1[$i]->Q9A1=="N")
			{
			     echo "No";
			}
		    ?>
		</td>
    		<td>
		    <?php 
			if($record1[$i]->Q9A2=="Y")
			{
			    echo "Yes";
			}else if($record1[$i]->Q9A2=="N")
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
