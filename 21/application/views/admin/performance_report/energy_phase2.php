<div class="top-area">
  <h2>Energy Phase 2</h2>
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
      <?php $i=0; foreach($records as $r){ ?>
      <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
        <td><?php echo $i + 1; ?></td>
        <td><?php echo $r->id; ?></td>
        <td><?php echo $r->name; ?></td>
        <td><?php echo $r->category; ?></td>
        <td><?php echo $r->population; ?></td>
        <td><?php echo $r->Q4E1; ?></td>
        <td><?php echo $r->Q5E1; ?></td>
        <td><?php echo $r->Q6E1S1; ?></td>
        <td><?php echo $r->Q6E2S1; ?></td>
        <td><?php echo $r->Q6E3S1; ?></td>
        <td><?php echo $r->Q6E4S1 ; ?></td>
        <td><?php echo $r->Q6E5S1; ?></td>
        <td><?php echo $r->Q6E6S1; ?></td>
        <td><?php echo $r->Q6E7S1; ?></td>
        <td><?php echo $r->Q6E16S1; ?></td>
        <td><?php echo $r->Q6E8S1; ?></td>
        <td><?php echo $r->Q6E9S1; ?></td>
        <td><?php echo $r->Q6E10S1; ?></td>
        <td><?php echo $r->Q6E11S1; ?></td>
        <td><?php echo $r->Q6E12S1; ?></td>
        <td><?php echo $r->Q6E13S1; ?></td>
        <td><?php echo $r->Q6E14S1; ?></td>
        <td><?php echo $r->Q6E1S2; ?></td>
        <td><?php echo $r->Q6E2S2; ?></td>
        <td><?php echo $r->Q6E3S2; ?></td>
        <td><?php echo $r->Q6E4S2; ?></td>
        <td><?php echo $r->Q6E5S2; ?></td>
        <td><?php echo $r->Q6E6S2; ?></td>
        <td><?php echo $r->Q6E7S2; ?></td>
        <td><?php echo $r->Q6E16S2; ?></td>
        <td><?php echo $r->Q6E8S2; ?></td>
        <td><?php echo $r->Q6E9S2; ?></td>
        <td><?php echo $r->Q6E10S2; ?></td>
        <td><?php echo $r->Q6E11S2; ?></td>
        <td><?php echo $r->Q6E12S2; ?></td>
        <td><?php echo $r->Q6E13S2; ?></td>
        <td><?php echo $r->Q6E14S2; ?></td>
        <td><?php echo $r->Q6E15S2 ; ?></td>
        <td><?php echo $r->percatitaaa ; ?></td>
        <td><?php echo $r->Q7E2S1; ?></td>
        <td><?php echo $r->Q7E2S2; ?></td>
        <td><?php echo $r->Q7E2S3; ?></td>
        <td><?php echo $r->Q7E3S1; ?></td>
        <td><?php echo $r->Q7E3S2; ?></td>
        <td><?php echo $r->Q7E3S3; ?></td>
        <td><?php echo $r->Q7E4S1; ?></td>
        <td><?php echo $r->Q7E4S2; ?></td>
        <td><?php echo $r->Q7E4S3; ?></td>
        <td><?php echo $r->Q7E5S1; ?></td>
        <td><?php echo $r->Q7E5S2; ?></td>
        <td><?php echo $r->Q7E5S3; ?></td>
        <td><?php echo $r->Q7E6S1; ?></td>
        <td><?php echo $r->Q7E6S2; ?></td>
        <td><?php echo $r->Q7E6S3; ?></td>
        <td><?php echo $r->Q7E7S1; ?></td>
        <td><?php echo $r->Q7E7S2; ?></td>
        <td><?php echo $r->Q7E7S3; ?></td>
        <td><?php echo $r->Q7E8S1; ?></td>
        <td><?php echo $r->Q7E8S2; ?></td>
        <td><?php echo $r->Q7E8S3; ?></td>
        <td><?php echo $r->Q8E1; ?></td>
        <td><?php echo $r->Q9E1; ?></td>
        <td><?php if(($r->Q9E1S1)==1) 
				{
					echo 'Solar';
				}
				
				if(($r->Q9E1S1)!='1') 
				{
					echo 'N/A';
				}	
				
				?></td>
        <td><?php if(($r->Q9E1S2)==1)
				{
					echo 'Wind';
				}

				
				if(($r->Q9E1S2)!='1')
				{
					echo 'N/A';
				}	

					?></td>
        <td><?php if(( $r->Q9E1S3)==1)
				{
					echo 'Hydro';
				}
				
				if(( $r->Q9E1S3)!='1')
				{
					echo 'N/A';
				}
					?></td>
        <td><?php if(( $r->Q9E1S5)==1)
				{
					echo 'Biogas Plant';
				}
				if(( $r->Q9E1S5)!='1')
				{
					echo 'N/A';
				}

					?></td>
        <td><?php if(( $r->Q9E1S4)==1) 
				{
					echo 'Combination of solar and wind';
				}	
				if(( $r->Q9E1S4)!='1') 
				{
					echo 'N/A';
				}	
				
				?></td>
        <td><?php echo $r->Q10E1; ?></td>
        <td><?php echo $r->Point; ?></td>
      </tr>
      <?php $i++; } ?>
    </tbody>
  </table>
</div>
