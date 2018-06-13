<div class="top-area">
  <h2>Master list Y-O-Y</h2>
</div>
<div style="overflow: scroll">
  <table class="display dataTable no-footer" id="tablePerformance">
    <thead>
      <tr>
        <th>S.No</th>
        <th>School Id</th>
        <th>Name of the Schools submitting GSP Audit in 2017</th>
        <th>State</th>
        <th>District</th>
        <th>City</th>
        <th>2017 Submission</th>
        <th>2016 Submission</th>
        <th>2015 submission</th>
      </tr>
    </thead>
    <tbody>
      <?php 
		ini_set('memory_limit','-1');
        foreach ($record as $r){ 
		?>
      <tr>
        <td><?php echo $r->id; ?></td>
        <td><?php echo $r->school_id; ?></td>
        <td><?php echo $r->school_name; ?></td>
        <td><?php echo $r->state; ?></td>
        <td><?php echo $r->district; ?></td>
        <td><?php echo $r->city; ?></td>
        <?php 
		     if($r->submission_2017>=70):
		   echo "<td style='background-color: green; color:#000;'>".$r->submission_2017."</td>";
		  elseif($r->submission_2017>=50 && $percentage<=69.9):
		  		   echo "<td style='background:yellow; color:000;'>".$r->submission_2017."</td>";
		  elseif($r->submission_2017>=35 && $percentage<=49.9):
		  		   echo "<td style='background:orange; color:000;'>".$r->submission_2017."</td>";
		  elseif($r->submission_2017<=34.9):
		  		   echo "<td style='background-color: red; color:#000;'>".$r->submission_2017."</td>";
		  else:
		    echo "<td>Not Rated</td>";
		  endif;
		  ?>
        <?php 
		  if($r->submission_2016_rank==1):
		   echo "<td style='background-color: green; color:#000;'>".$r->submission_2016."</td>";
		  elseif($r->submission_2016_rank==2):
		  		   echo "<td style='background:yellow; color:000;'>".$r->submission_2016."</td>";
		  elseif($r->submission_2016_rank==3):
		  		   echo "<td style='background:orange; color:000;'>".$r->submission_2016."</td>";
		  elseif($r->submission_2016_rank==4):
		  		   echo "<td style='background-color: red; color:#000;'>".$r->submission_2016."</td>";
		  else:
		    echo "<td>NA</td>";
		  endif;
		?>
        <?php 
		  if($r->submission_2015_rank==1):
		   echo "<td style='background-color: green; color:#000;'>".$r->submission_2015."</td>";
		  elseif($r->submission_2015_rank==2):
		  		   echo "<td style='background:yellow; color:000;'>".$r->submission_2015."</td>";
		  elseif($r->submission_2015_rank==3):
		  		   echo "<td style='background:orange; color:000;'>".$r->submission_2015."</td>";
		  elseif($r->submission_2015_rank==4):
		  		   echo "<td style='background-color: red; color:#000;'>".$r->submission_2015."</td>";
		  else:
		    echo "<td>NA</td>";
		  endif;
		
		?>
      </tr>
      <?php
}
?>
    </tbody>
  </table>
</div>
