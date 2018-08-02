<div class="top-area">
        <h2>Land</h2>
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
				<th>Site area in square meter (m2)</th>
				<th>Ground coverage area </th>
				<th>Green Landscaped area on ground </th>
				<th>Play area that has grass on ground </th>
				<th>Green area on ground </th>
				<th>Play area that is paved/concrete on ground </th>
				<th>Surface parking area </th>
				<th>Service area on ground</th>
				<th>Roof and terrace area </th>
				<th>Green cover on exposed roof and terrace </th>
				<th>Total built-up/constructed area </th>
				<th>Total number of floors (excluding ground floor)</th>
				<th>Total Area</th>
				<th>Total Green Area</th>
				<th>Percentage of Green Area</th>
				<th>Total Plants</th>
				<th>Native Plants</th>
				<th>Exotic Plants</th>
				<th>Total Animals</th>
				<th>Native Animals</th>
				<th>Exotic Animals</th>
				<th>Use of Chemical Pesticides</th>
				<th>Total Points Land</th>
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
                <td><?php echo $r->Q4L1; ?></td>
                <td><?php echo $r->Q4L2; ?></td>
                <td><?php echo $r->Q4L3; ?></td>
				<td><?php echo $r->Q4L4; ?></td>
                <td><?php echo $r->Q4L5; ?></td>
                <td><?php echo $r->Q4L6; ?></td>
                <td><?php echo $r->Q4L7; ?></td>
                <td><?php echo $r->Q4L8; ?></td>
                <td><?php echo $r->Q4L9; ?></td>
				<td><?php echo $r->Q4L10; ?></td>
				<td><?php echo $r->Q4L11; ?></td>
				<td><?php echo $r->Q4L12; ?></td>
				<td><?php echo $r->Q4L1; ?></td>
				<td><?php echo $r->Q4L5; ?></td>
				<td><?php echo $r->PercentageArea; ?></td>
				<td><?php echo $r->Q5L1S3; ?></td> 	
				<td><?php echo $r->Q5L1S1; ?></td>
				<td><?php echo $r->Q5L1S2; ?></td>
				<td><?php echo $r->Q5L2S3; ?></td>
				<td><?php echo $r->Q5L2S1; ?></td>
				<td><?php echo $r->Q5L2S2; ?></td>
				<td><?php echo $r->Q6L1; ?></td>
				<td><?php echo $r->Point; ?></td>
              
            </tr>
          <?php $i++; } ?>
        </tbody>
      </table>
	  </div>
	  
