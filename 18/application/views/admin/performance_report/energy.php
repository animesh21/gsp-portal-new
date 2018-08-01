<div class="top-area">
        <h2>Energy</h2>
</div>
<div style="overflow: scroll"> 
 <table class="display dataTable no-footer" id="tablePerformance">
        <thead>
          <tr role="row">
				<th>Sr.No</th>
				<th>School Id</th>
				<th>School Name</th>
				<th>Category</th>
				<th>Population</th>
				<th>Electricity Bill</th>
				<th>School has its own vehicle</th>
				<th>Quantity consumed Electricity from Board (Kwh)</th>
				<th>Quantity consumed Electricity from Generator (Diesel)</th>
				<th>Quantity consumed Petrol (litres) </th>
				<th>Quantity consumed Diesel (lts)</th>
				<th>Quantity consumed CNG (Kg)</th>
				<th>Quantity consumed Kerosene (lts)</th>
				<th>Quantity consumed Coal (Kg)</th>
				<th>Quantity consumed Wood (kg)</th>
				<th>Quantity consumed Animal Waste (kg)</th>
				<th>Quantity consumed Solar (kwh)</th>
				<th>Quantity consumed Wind (kwh)</th>
				<th>Quantity consumed LPG (Kg)</th>
				<th>Quantity consumed PNG (Kg)</th>
				<th>Quantity consumed Biogas (Kg)</th>
				<th>Others</th>
				<th>Electricity from the board (MJ) </th>
				<th>Electricity from generator (MJ)</th>
				<th>Petrol (MJ)</th>
				<th>Diesel (MJ) </th>
				<th>CNG (MJ)</th>
				<th>Kerosene (MJ)</th>
				<th>Coal (MJ)</th>
				<th>Wood (MJ)</th>
				<th>Animal waste (MJ)</th>
				<th>Solar (MJ)</th>
				<th>Wind (MJ) </th>
				<th>LPG (MJ)</th>
				<th>Piped Natural Gas (MJ)</th>
				<th>Biogas (MJ)</th>
				<th>Others (MJ)</th>
				<th>Total MJ</th>
				<th>Per capita Energy Consumption</th>
				<th>No.of Air conditioner</th>
				<th>Size of Air conditioner</th>
				<th>BEE Star rating Air conditioner</th>
				<th>No.of Refrigerator</th>
				<th>Size of Refrigerator</th>
				<th>BEE Star rating Refrigerator</th>
				<th>No.of Microwave</th>
				<th>Size of Microwave</th>
				<th>BEE Star rating Microwave</th>
				<th>No.of Tubelight</th>
				<th>Size of Tubelight</th>
				<th>BEE Star rating Tubelight</th>
				<th>No.of CFL bulb</th>
				<th>Size of CFL bulb</th>
				<th>BEE Star rating CFL bulb</th>
				<th>No.of LED bulb</th>
				<th>Size of LED bulb</th>
				<th>BEE Star rating LED bulb</th>
				<th>No.of Fans</th>
				<th>Size of Fans</th>
				<th>BEE Star rating Fans</th>
				<th>Average no.of sunny days</th>
				<th>Alternate source of energy</th>
				<th>Solar</th>
				<th>Wind</th>
				<th>Hydro</th>
				<th>Biogas Plant </th>
				<th>Combination of solar and wind</th>
				<th>Use of Solar water heater</th>
				<th>Total points in Energy</th>
          </tr>
        </thead>
        <?php //echo '<pre>'; print_r($record); ?>
        <tbody>
          <?php $i=0; 
		ini_set('memory_limit', '-1');
		foreach($records as $r){ ?>
            <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
                <td><?php echo $i + 1; ?></td>
    		<td><?php echo $r->id; ?></td>
    		<td><?php echo $r->name; ?></td>
    		<td><?php 
			 $category=array("Day Scholar"=>"1","Day Boarding"=>"2","Residential"=>"3","Day Scholar + Day Boarding"=>"4","Day Boarding + Residential"=>"5","Day Scholar + Residential"=>"6","Day Scholar + Day Boarding + Residential"=>"7");
			$serach_category=(getFiled('Q1S1',$r->userid) != '') ? getFiled('Q1S1', $r->userid) : "";
			echo array_search($serach_category,$category); ?></td>
    		<td><?php echo(getFiled('Q4G4S3',$r->userid) != '') ? getFiled('Q4G4S3', $r->userid) : "";?></td>
    		<td><?php echo(getFiled('Q4A1',$r->userid) != '') ? getFiled('Q4A1',$r->userid) : "";?></td>
    		<td>
                <td><?php echo(getFiled('Q4E1',$r->userid) != '') ? getFiled('Q4E1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q5E1',$r->userid) != '') ? getFiled('Q5E1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E1S1',$r->userid) != '') ? getFiled('Q6E1S1', $r->userid) : "N/A";?></td>
                <td><?php echo(getFiled('Q6E2S1',$r->userid) != '') ? getFiled('Q6E2S1', $r->userid) : "N/A";?></td>
                <td><?php echo(getFiled('Q6E3S1',$r->userid) != '') ? getFiled('Q6E3S1', $r->userid) : "N/A";?></td>
                <td><?php echo(getFiled('Q6E4S1',$r->userid) != '') ? getFiled('Q6E4S1', $r->userid) : "N/A";?></td>
                <td><?php echo(getFiled('Q6E5S1',$r->userid) != '') ? getFiled('Q6E5S1', $r->userid) : "N/A";?></td>
                <td><?php echo(getFiled('Q6E6S1',$r->userid) != '') ? getFiled('Q6E6S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E7S1',$r->userid) != '') ? getFiled('Q6E7S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E16S1',$r->userid) != '') ? getFiled('Q6E16S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E8S1',$r->userid) != '') ? getFiled('Q6E8S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E8S1',$r->userid) != '') ? getFiled('Q6E8S1', $r->userid) : "N/A";?></td>
				<td> <?php echo(getFiled('Q6E10S1',$r->userid) != '') ? getFiled('Q6E10S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E11S1',$r->userid) != '') ? getFiled('Q6E11S1', $r->userid) : "N/A";?></td>
				<td> <?php echo(getFiled('Q6E12S1',$r->userid) != '') ? getFiled('Q6E12S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E13S1',$r->userid) != '') ? getFiled('Q6E13S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E14S1',$r->userid) != '') ? getFiled('Q6E14S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E1S2',$r->userid) != '') ? getFiled('Q6E1S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E2S2',$r->userid) != '') ? getFiled('Q6E2S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E3S2',$r->userid) != '') ? getFiled('Q6E3S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E4S2',$r->userid) != '') ? getFiled('Q6E4S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E5S2',$r->userid) != '') ? getFiled('Q6E5S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E6S2',$r->userid) != '') ? getFiled('Q6E6S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E7S2',$r->userid) != '') ? getFiled('Q6E7S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E16S2',$r->userid) != '') ? getFiled('Q6E16S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E8S2',$r->userid) != '') ? getFiled('Q6E8S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E9S2',$r->userid) != '') ? getFiled('Q6E9S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E10S2',$r->userid) != '') ? getFiled('Q6E10S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E11S2',$r->userid) != '') ? getFiled('Q6E11S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E12S2',$r->userid) != '') ? getFiled('Q6E12S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E13S2',$r->userid) != '') ? getFiled('Q6E13S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E14S2',$r->userid) != '') ? getFiled('Q6E14S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6E15S2',$r->userid) != '') ? getFiled('Q6E15S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('percatitaaa',$r->userid) != '') ? getFiled('percatitaaa', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E2S1',$r->userid) != '') ? getFiled('Q7E2S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E2S2',$r->userid) != '') ? getFiled('Q7E2S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E2S3',$r->userid) != '') ? getFiled('Q7E2S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E3S1',$r->userid) != '') ? getFiled('Q7E3S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E3S2',$r->userid) != '') ? getFiled('Q7E3S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E3S3',$r->userid) != '') ? getFiled('Q7E3S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E4S1',$r->userid) != '') ? getFiled('Q7E4S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E4S2',$r->userid) != '') ? getFiled('Q7E4S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E4S3',$r->userid) != '') ? getFiled('Q7E4S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E5S1',$r->userid) != '') ? getFiled('Q7E5S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E5S2',$r->userid) != '') ? getFiled('Q7E5S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E5S3',$r->userid) != '') ? getFiled('Q7E5S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E6S1',$r->userid) != '') ? getFiled('Q7E6S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E6S2',$r->userid) != '') ? getFiled('Q7E6S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E6S3',$r->userid) != '') ? getFiled('Q7E6S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E7S1',$r->userid) != '') ? getFiled('Q7E7S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E7S2',$r->userid) != '') ? getFiled('Q7E7S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E7S3',$r->userid) != '') ? getFiled('Q7E7S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E8S1',$r->userid) != '') ? getFiled('Q7E8S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E8S2',$r->userid) != '') ? getFiled('Q7E8S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7E8S3',$r->userid) != '') ? getFiled('Q7E8S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q8E1',$r->userid) != '') ? getFiled('Q8E1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q9E1',$r->userid) != '') ? getFiled('Q9E1', $r->userid) : "N/A";?></td>

				<td>
				<?php 
				$Q9E1S1=(getFiled('Q9E1S1',$r->userid) != '') ? getFiled('Q9E1S1', $r->userid) : "N/A";
				if($Q9E1S1==1) 
				{
					echo 'Solar';
				}else{
					echo $Q9E1S1;
				}	
				?></td>
				<td><?php 
				$Q9E1S2=(getFiled('Q9E1S2',$r->userid) != '') ? getFiled('Q9E1S2', $r->userid) : "N/A";
				if($Q9E1S2==1)
				{
					echo 'Wind';
				}else
				{
					echo $Q9E1S2;
				}	

					?></td>
				<td><?php 
				$Q9E1S3=(getFiled('Q9E1S3',$r->userid) != '') ? getFiled('Q9E1S3', $r->userid) : "N/A";
				if($Q9E1S3==1)
				{
					echo 'Hydro';
				}else
				{
					echo $Q9E1S3;
				}
					?></td>
				<td><?php 
				$Q9E1S5=(getFiled('Q9E1S5',$r->userid) != '') ? getFiled('Q9E1S5', $r->userid) : "N/A";
				if($Q9E1S5==1)
				{
					echo 'Biogas Plant';
				}
				else
				{
					echo $Q9E1S5;
				}

					?></td>
				<td>
				
				<?php 
				$Q9E1S4=(getFiled('Q9E1S4',$r->userid) != '') ? getFiled('Q9E1S4', $r->userid) : "N/A";
				if($Q9E1S4==1) 
				{
					echo 'Combination of solar and wind';
				}	
				else 
				{
					echo $Q9E1S4;
				}	
				
				?></td>
                <td><?php echo (getFiled('Q10E1',$r->userid) != '') ? getFiled('Q10E1', $r->userid) : "N/A"; ?></td>
               <td><?php //echo $r->Point; ?></td>
               
            </tr>
          <?php $i++; } ?>
        </tbody>
      </table>
	  </div>
	  
