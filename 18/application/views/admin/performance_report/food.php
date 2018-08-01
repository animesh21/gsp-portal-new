<div class="top-area">
        <h2>Food</h2>
</div>

<div style="overflow: scroll"> 
 <table class="display dataTable no-footer" id="tablePerformance">
        <thead>
          <tr role="row">
						<th>Sr.No</th>
						<th>schoolId</th>
						<th>Name</th>
						<th>Category</th>
						<th>Population</th>
						<th>Provision of packaged food</th>
						<th>Serve Mid-day Meal</th>
						<th>Students bring own lunch</th>
						<th>How many students bring home-made lunch</th>
						<th>how many bring packaged food as home-made lunch</th>
						<th>Teachers have responsibility to check</th>
						<th>Savouary Snacks count of flavour</th>
						<th>Savouary Snacks no.of item sold</th>
						<th>Month </th>
						<th>Instand Noodles count of flavour</th>
						<th>Instand Noodles no.of item sold</th>
						<th>month</th>
						<th>Potato Fries Count of flavour</th>
						<th>Potato Fries no.of item sold</th>
						<th>month</th>
						<th>Confectionary - count of flavour</th>
						<th>Confectionary no.of item sold</th>
						<th>month</th>
						<th>Ice Cream count of flavour</th>
						<th>Ice Cream no.of items sold</th>
						<th>month</th>
						<th>Carbonatd beverages count of flavour</th>
						<th>carbonated beverages no.of items sold</th>
						<th>month</th>
						<th>Sugar sweetened non-carbonated beverages count of flavour</th>
						<th>Sugar sweetened non-carbonated beverages no.of items sold</th>
						<th>month</th>
						<th>Packaged/bottled nimboo paani/lassi/flavoured milk  - count of flavour</th>
						<th>Packaged/bottled nimboo paani/lassi/flavoured milk -no.of item sold</th>
						<th>Month</th>
						<th>Packaged/bottled energy drinks count of flavour</th>
						<th>Packaged/bottled energy drinks no.of items sold</th>
						<th>Month</th>
						<th>School serve traditional Indian snacks</th>
						<th>Samosas</th>
						<th>Idli/vada</th>
						<th>Pav Bhaji</th>
						<th>Momos</th>
						<th>Others</th>
						<th>descriptions</th>
						<th>Schools serve traditional Indian beverages</th>
						<th>Nimboo Pani </th>
						<th>Sweet Lassi </th>
						<th>Salted Butter Milk</th>
						<th>Aam Panna</th>
						<th>Others</th>
						<th>Schools distributes packaged food items as rewards</th>
						<th>Details</th>
						<th>school distribute chocolates/similar products as refreshments during schools events</th>
						<th>details</th>
						<th>school events sponsored by food companies/brands</th>
						<th>Details</th>
						<th>Are their banners, brochures, hoardings put up during the events</th>
						<th>school measure height and weight of all the student</th>
						<th>How regularly height &amp; weight is measured</th>
						<th>Is cooking part of any regular subjects or extracurricular activities</th>
						<th>Details</th>
						<th>Total points Food </th>
          </tr>
        </thead>
        <?php //echo '<pre>'; print_r($record); ?>
        <tbody>
          <?php $i=0; foreach($records as $r){ ?>
            <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
				    <td><?php echo $i + 1; ?></td>
    		<td><?php echo $r->id; ?></td>
    		<td><?php echo $r->name; ?></td>
    		<td><?php 
			 $category=array("Day Scholar"=>"1","Day Boarding"=>"2","Residential"=>"3","Day Scholar + Day Boarding"=>"4","Day Boarding + Residential"=>"5","Day Scholar + Residential"=>"6","Day Scholar + Day Boarding + Residential"=>"7");
			$serach_category=(getFiled('Q1S1',$r->userid) != '') ? getFiled('Q1S1', $r->userid) : "N/A";
			echo array_search($serach_category,$category); ?></td>
    		<td><?php echo(getFiled('Q4G4S3',$r->userid) != '') ? getFiled('Q4G4S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q4F1',$r->userid) != '') ? getFiled('Q4F1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q5F1',$r->userid) != '') ? getFiled('Q5F1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q5F1S1',$r->userid) != '') ? getFiled('Q5F1S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q5F1S2',$r->userid) != '') ? getFiled('Q5F1S2', $r->userid) : "N/A";?></td>
                <td><?php echo(getFiled('Q5F1S3',$r->userid) != '') ? getFiled('Q5F1S3', $r->userid) : "N/A";?></td>
                <td><?php echo(getFiled('Q5F1S4',$r->userid) != '') ? getFiled('Q5F1S4', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F2S1',$r->userid) != '') ? getFiled('Q6F2S1', $r->userid) : "N/A";?></td>
                <td><?php echo(getFiled('Q6F2S2',$r->userid) != '') ? getFiled('Q6F2S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F2S3',$r->userid) != '') ? getFiled('Q6F2S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F3S1',$r->userid) != '') ? getFiled('Q6F3S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F3S2',$r->userid) != '') ? getFiled('Q6F3S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F3S3',$r->userid) != '') ? getFiled('Q6F3S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F4S1',$r->userid) != '') ? getFiled('Q6F4S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F4S2',$r->userid) != '') ? getFiled('Q6F4S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F4S3',$r->userid) != '') ? getFiled('Q6F4S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F5S1',$r->userid) != '') ? getFiled('Q6F5S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F5S2',$r->userid) != '') ? getFiled('Q6F5S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F5S3',$r->userid) != '') ? getFiled('Q6F5S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F6S1',$r->userid) != '') ? getFiled('Q6F6S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F6S2',$r->userid) != '') ? getFiled('Q6F6S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F6S3',$r->userid) != '') ? getFiled('Q6F6S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F7S1',$r->userid) != '') ? getFiled('Q6F7S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F7S2',$r->userid) != '') ? getFiled('Q6F7S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F7S3',$r->userid) != '') ? getFiled('Q6F7S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F8S1',$r->userid) != '') ? getFiled('Q6F8S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F8S2',$r->userid) != '') ? getFiled('Q6F8S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F8S3',$r->userid) != '') ? getFiled('Q6F8S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F9S1',$r->userid) != '') ? getFiled('Q6F9S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F9S2',$r->userid) != '') ? getFiled('Q6F9S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F9S3',$r->userid) != '') ? getFiled('Q6F9S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F10S1',$r->userid) != '') ? getFiled('Q6F10S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F10S2',$r->userid) != '') ? getFiled('Q6F10S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q6F10S3',$r->userid) != '') ? getFiled('Q6F10S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7F1',$r->userid) != '') ? getFiled('Q7F1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7F1S1',$r->userid) != '') ? getFiled('Q7F1S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7F1S2',$r->userid) != '') ? getFiled('Q7F1S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7F1S3',$r->userid) != '') ? getFiled('Q7F1S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7F1S4',$r->userid) != '') ? getFiled('Q7F1S4', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7F1S5',$r->userid) != '') ? getFiled('Q7F1S5', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q7F3S1',$r->userid) != '') ? getFiled('Q7F3S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q8F1',$r->userid) != '') ? getFiled('Q8F1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q8F1S1',$r->userid) != '') ? getFiled('Q8F1S1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q8F1S2',$r->userid) != '') ? getFiled('Q8F1S2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q8F1S3',$r->userid) != '') ? getFiled('Q8F1S3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q8F1S4',$r->userid) != '') ? getFiled('Q8F1S4', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q8F1S5',$r->userid) != '') ? getFiled('Q8F1S5', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q9F1',$r->userid) != '') ? getFiled('Q9F1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q9F2',$r->userid) != '') ? getFiled('Q9F2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q10F1',$r->userid) != '') ? getFiled('Q10F1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q10F2',$r->userid) != '') ? getFiled('Q10F2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q11F1',$r->userid) != '') ? getFiled('Q11F1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q11F2',$r->userid) != '') ? getFiled('Q11F2', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q11F3',$r->userid) != '') ? getFiled('Q11F3', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q12F1',$r->userid) != '') ? getFiled('Q12F1', $r->userid) : "N/A";?></td>
				
				<td><?php 
				$Q12F2=(getFiled('Q12F1',$r->userid) != '') ? getFiled('Q12F1', $r->userid) : "N/A";
				
				if($Q12F2==1) 
				{
					echo 'Monthly';
				}	
				
				if($Q12F2==2) 
				{
					echo 'Quarterly';
				}	
				
				if($Q12F2==3) 
				{
					echo 'Bi-annually';
				}	
				
				if($Q12F2==4) 
				{
					echo 'Annually ';
				}	
				if($Q12F2!=1&&2&&3&&4) 
				{
					echo 'N/A ';
				}	
				
				?></td>
				
				<td><?php echo(getFiled('Q13F1',$r->userid) != '') ? getFiled('Q13F1', $r->userid) : "N/A";?></td>
				<td><?php echo(getFiled('Q13F2',$r->userid) != '') ? getFiled('Q13F2', $r->userid) : "N/A";?></td>
				<td><?php //echo $r->Point; ?></td>
				
            </tr>
          <?php $i++; } ?>
        </tbody>
      </table>
	  </div>
	 
