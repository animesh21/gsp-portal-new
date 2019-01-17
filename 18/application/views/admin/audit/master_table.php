<div class="top-area">
  <h2>Master View</h2>
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
	<th>2018 Submission</th>
        <th>2017 Submission</th>
        <th>2016 Submission</th>
        <th>2015 submission</th>
      </tr>
    </thead>
    <tbody>
      <?php 
	 $sr_no=0;
	 for($i=0;$i<sizeof($record);++$i){ ?>
      <tr>
        <td><?php echo ++$sr_no; ?></td>
        <td><?php echo $record[$i]->school_id; ?></td>
        <td><?php echo $record[$i]->school_name; ?></td>
        <td><?php echo $record[$i]->state; ?></td>
        <td><?php echo $record[$i]->district; ?></td>
	<td <?php 
		     if(floor($record[$i]->data_2018)>=70){?>style='background-color: Green; color:#000;' <?php }elseif(floor($record[$i]->data_2018)>=50 && floor($record[$i]->data_2018)<=69.9){ ?>style='background:yellow; color:000;' <?php }elseif(floor($record[$i]->data_2018>=35 && $record[$i]->data_2018)<=49.9){ ?> style='background:orange; color:000;'  <?php }elseif(floor($record[$i]->data_2018)<=34.9 && floor($record[$i]->data_2018)!="NA"){?> style='background:red; color:000;' <?php } ?> >
        <?php if(!empty($record[$i]->data_2018)){echo $record[$i]->data_2018;}else{echo "NA";} ?>
        </td>    
        <td <?php 
		     if($record[$i]->data_2017>=70){?>style='background-color: Green; color:#000;' <?php }elseif($record[$i]->data_2017>=50 && $record[$i]->data_2017<=69.9){ ?>style='background:yellow; color:000;' <?php }elseif($record[$i]->data_2017>=35 && $record[$i]->data_2017<=49.9){ ?> style='background:orange; color:000;'  <?php }elseif($record[$i]->data_2017<=34.9 && $record[$i]->data_2017!="NA"){?> style='background:red; color:000;' <?php } ?> >
        <?php echo $record[$i]->data_2017; ?>
        </td>
        <td <?php 
		     if($record[$i]->data_2016>=70){?>style='background-color: Green; color:#000;' <?php }elseif($record[$i]->data_2016>=50 && $record[$i]->data_2016<=69.9){ ?>style='background:yellow; color:000;' <?php }elseif($record[$i]->data_2016>=35 && $record[$i]->data_2016<=49.9){ ?> style='background:orange; color:000;'  <?php }elseif($record[$i]->data_2016<=34.9 && $record[$i]->data_2016!="NA"){?> style='background:red; color:000;' <?php } ?> >
        <?php echo $record[$i]->data_2016; ?>
        </td>
        <td <?php 
		     if($record[$i]->data_2015>=70){?>style='background-color: Green; color:#000;' <?php }elseif($record[$i]->data_2015>=50 && $record[$i]->data_2015<=69.9){ ?>style='background:yellow; color:000;' <?php }elseif($record[$i]->data_2015>=35 && $record[$i]->data_2015<=49.9){ ?> style='background:orange; color:000;'  <?php }elseif($record[$i]->data_2015<=34.9 && $record[$i]->data_2015!="NA"){?> style='background:red; color:000;' <?php } ?>>
        <?php echo $record[$i]->data_2015; ?>
        </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
