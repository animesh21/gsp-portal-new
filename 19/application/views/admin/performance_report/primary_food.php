<div class="top-area">
        <h2>Primary Food</h2>
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
          <?php 
		   ini_set('memory_limit','-1');
		  $i=0; foreach($records as $r){ ?>
            <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
				<td><?php echo $i + 1; ?></td>
				<td><?php echo $r->id; ?></td>
				<td><?php echo $r->name; ?></td>
                <td><?php echo $r->category; ?></td>
                <td><?php echo $r->population; ?></td>
				<td><?php echo $r->Q4F1; ?></td>
				<td><?php echo $r->Q5F1; ?></td>
				<td><?php echo $r->Q5F1S1; ?></td>
				<td><?php echo $r->Q5F1S2; ?></td>
                <td><?php echo $r->Q5F1S3; ?></td>
                <td><?php echo $r->Q5F1S4; ?></td>
				<td><?php echo $r->Q6F2S1; ?></td>
                <td><?php echo $r->Q6F2S2; ?></td>
				<td><?php echo $r->Q6F2S3; ?></td>
				<td><?php echo $r->Q6F3S1; ?></td>
				<td><?php echo $r->Q6F3S2; ?></td>
				<td><?php echo $r->Q6F3S3; ?></td>
				<td><?php echo $r->Q6F4S1; ?></td>
				<td><?php echo $r->Q6F4S2; ?></td>
				<td><?php echo $r->Q6F4S3; ?></td>
				<td><?php echo $r->Q6F5S1; ?></td>
				<td><?php echo $r->Q6F5S2; ?></td>
				<td><?php echo $r->Q6F5S3; ?></td>
				<td><?php echo $r->Q6F6S1; ?></td>
				<td><?php echo $r->Q6F6S2; ?></td>
				<td><?php echo $r->Q6F6S3; ?></td>
				<td><?php echo $r->Q6F7S1; ?></td>
				<td><?php echo $r->Q6F7S2; ?></td>
				<td><?php echo $r->Q6F7S3; ?></td>
				<td><?php echo $r->Q6F8S1; ?></td>
				<td><?php echo $r->Q6F8S2; ?></td>
				<td><?php echo $r->Q6F8S3; ?></td>
				<td><?php echo $r->Q6F9S1; ?></td>
				<td><?php echo $r->Q6F9S2; ?></td>
				<td><?php echo $r->Q6F9S3; ?></td>
				<td><?php echo $r->Q6F10S1; ?></td>
				<td><?php echo $r->Q6F10S2; ?></td>
				<td><?php echo $r->Q6F10S3 ; ?></td>
				<td><?php echo $r->Q7F1; ?></td>
				<td><?php echo $r->Q7F1S1; ?></td>
				<td><?php echo $r->Q7F1S2; ?></td>
				<td><?php echo $r->Q7F1S3; ?></td>
				<td><?php echo $r->Q7F1S4; ?></td>
				<td><?php echo $r->Q7F1S5; ?></td>
				<td><?php echo $r->Q7F3S1; ?></td>
				<td><?php echo $r->Q8F1; ?></td>
				<td><?php echo $r->Q8F1S1; ?></td>
				<td><?php echo $r->Q8F1S2; ?></td>
				<td><?php echo $r->Q8F1S3; ?></td>
				<td><?php echo $r->Q8F1S4; ?></td>
				<td><?php echo $r->Q8F1S5; ?></td>
				<td><?php echo $r->Q9F1; ?></td>
				<td><?php echo $r->Q9F2; ?></td>
				<td><?php echo $r->Q10F1; ?></td>
				<td><?php echo $r->Q10F2; ?></td>
				<td><?php echo $r->Q11F1; ?></td>
				<td><?php echo $r->Q11F2; ?></td>
				<td><?php echo $r->Q11F3; ?></td>
				<td><?php echo $r->Q12F1; ?></td>
				
				<td><?php if(( $r->Q12F2)==1) 
				{
					echo 'Monthly';
				}	
				
				if(( $r->Q12F2)==2) 
				{
					echo 'Quarterly';
				}	
				
				if(( $r->Q12F2)==3) 
				{
					echo 'Bi-annually';
				}	
				
				if(( $r->Q12F2)==4) 
				{
					echo 'Annually ';
				}	
				if(( $r->Q12F2)!=1&&2&&3&&4) 
				{
					echo 'N/A ';
				}	
				
				?></td>
				
				<td><?php echo $r->Q13F1; ?></td>
				<td><?php echo $r->Q13F2; ?></td>
				<td><?php echo $r->Point; ?></td>
				
            </tr>
          <?php $i++; } ?>
        </tbody>
      </table>
	  </div>
	 

