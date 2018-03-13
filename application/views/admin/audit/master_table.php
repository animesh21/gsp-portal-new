<div class="top-area">
    <h2>Master View</h2>
    
</div>
<div style="overflow: scroll"> 
    <table class="display dataTable no-footer" id="tablePerformance">
	<thead>
	    <tr>
		<th>S.No</th>
		<th>School Id</th>
		<th>Name of the School/Institution</th>
		<th>Principal&#39;s Name</th>
                <th>Principal Email</th>
		<th>GSP Coordintor Name</th>
		<th>GSP Coordintor Email</th>
                <th>Participate Year</th>
                <th>Audit submit 2015</th>
                <th>Audit submit 2016</th>
                <th>Audit submit 2017</th>
		
	    </tr> 
	</thead>
	<tbody>
	    <?php 
		ini_set('memory_limit','-1');
                foreach ($record as $r){ 
                    //print_r($r);                    die();
	$r->gsp_15 = (!empty($r->gsp_15)) ? 'Yes': 'NO';
        $r->year_2016 = (!empty($r->year_2016)) ? 'Yes': 'NO';
        $r->year_17 = (!empty($r->year_17)) ? 'Yes': 'NO';
		?>
    	    <tr>
    		<td><?php echo $r->id; ?></td>
    		<td><?php echo $r->schooid; ?></td>
    		<td><?php echo $r->school_name; ?></td>
    		<td><?php echo $r->principal_name; ?></td>
    		<td><?php echo $r->email; ?></td>
                <td><?php echo $r->co_email; ?></td>
                <td><?php echo $r->co_name; ?></td>
    		<td><?php echo $r->years; ?></td>
    		<td><?php echo $r->gsp_15; ?></td>
    		<td><?php echo $r->year_2016; ?></td>
                <td><?php echo $r->year_17; ?></td>
    		
    	    </tr>
    <?php
}
?>
	</tbody>
    </table>
</div> 

