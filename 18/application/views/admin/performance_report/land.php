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
        <?php //echo '<pre>'; print_r($record);exit(); ?>
        <tbody>
          <?php 
		  ini_set('memory_limit', '-1');
		  $i=0; 
		  foreach($record as $record1){ ?>
                  <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
                   <td><?php echo $i + 1; ?></td>
                   <td><?php echo $record1->id; ?></td>
                   <td><?php echo $record1->name; ?></td>
                   <td><?php 
             $category=array("Day Scholar"=>"1","Day Boarding"=>"2","Residential"=>"3","Day Scholar + Day Boarding"=>"4","Day Boarding + Residential"=>"5","Day Scholar + Residential"=>"6","Day Scholar + Day Boarding + Residential"=>"7");
            $serach_category=(getFiled('Q1S1',$record1->userid) != '') ? getFiled('Q1S1', $record1->userid) : "";
            echo array_search($serach_category,$category); ?></td>
			<td><?php echo(getFiled('Q4G4S3',$record1->userid) != '') ? getFiled('Q4G4S3', $record1->userid) : "N/A";?></td>
                <td><?php echo (getFiled('Q4L1',$record1->userid) != '') ? getFiled('Q4L1', $record1->userid) : ""; ?> </td>
                <td><?php echo (getFiled('Q4L2',$record1->userid) != '') ? getFiled('Q4L2', $record1->userid) : ""; ?></td>
                <td><?php echo (getFiled('Q4L3',$record1->userid) != '') ? getFiled('Q4L3', $record1->userid) : "";?></td>
				<td><?php echo (getFiled('Q4L4',$record1->userid) != '') ? getFiled('Q4L4', $record1->userid) : ""; ?></td>
                <td><?php echo (getFiled('Q4L5',$record1->userid) != '') ? getFiled('Q4L5', $record1->userid) : ""; ?></td>
                <td><?php echo (getFiled('Q4L6',$record1->userid) != '') ? getFiled('Q4L6', $record1->userid) : ""; ?></td>
                <td><?php echo (getFiled('Q4L7',$record1->userid) != '') ? getFiled('Q4L7', $record1->userid) : ""; ?></td>
                <td><?php echo (getFiled('Q4L8',$record1->userid) != '') ? getFiled('Q4L8', $record1->userid) : ""; ?></td>
                <td><?php echo (getFiled('Q4L9',$record1->userid) != '') ? getFiled('Q4L9', $record1->userid) : ""; ?></td>
				<td><?php echo (getFiled('Q4L10',$record1->userid) != '') ? getFiled('Q4L10', $record1->userid) : "";?></td>
				<td><?php echo (getFiled('Q4L11',$record1->userid) != '') ? getFiled('Q4L11', $record1->userid) : "";?> </td>
				<td><?php echo (getFiled('Q4L12',$record1->userid) != '') ? getFiled('Q4L12', $record1->userid) : "";?></td>
				<td><?php echo (getFiled('Q4L1',$record1->userid) != '') ? getFiled('Q4L1', $record1->userid) : "";  ?></td>
				<td><?php echo (getFiled('Q4L5',$record1->userid) != '') ? getFiled('Q4L5', $record1->userid) : ""; ?></td>
				<td><?php echo 'N/A'; ?></td>
				<td><?php echo (getFiled('Q5L1S3',$record1->userid) != '') ? getFiled('Q5L1S3', $record1->userid) : ""; ?></td> 	
				<td><?php echo (getFiled('Q5L1S1',$record1->userid) != '') ? getFiled('Q5L1S1', $record1->userid) : "";  ?></td>
				<td><?php echo (getFiled('Q5L1S2',$record1->userid) != '') ? getFiled('Q5L1S2', $record1->userid) : "";  ?></td>
				<td><?php echo (getFiled('Q5L2S3',$record1->userid) != '') ? getFiled('Q5L2S3', $record1->userid) : "";  ?></td>
				<td><?php echo (getFiled('Q5L2S1',$record1->userid) != '') ? getFiled('Q5L2S1', $record1->userid) : "";  ?></td>
				<td><?php echo (getFiled('Q5L2S2',$record1->userid) != '') ? getFiled('Q5L2S2', $record1->userid) : "";  ?></td>
				<td><?php echo (getFiled('Q6L1',$record1->userid) != '') ? getFiled('Q6L1', $record1->userid) : "";  ?></td>
				<td><?php echo 'N/A'; ?></td>
              
            </tr>
          <?php $i++; } ?>
        </tbody>
      </table>
	  </div>
	  
