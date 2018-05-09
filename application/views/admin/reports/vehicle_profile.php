<div class="top-area">
        
        </div>
      <table class="display dataTable no-footer tablepluging" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
            <th>School Name</th>
            <th>Region</th>
            <th>State</th>
            <th>Category</th>
            <th>Location</th>
            <th>Total</th>
            <th>Vehicles More than 8 years</th>
            <th>PUC Done</th>
            <th>AC(YES)</th>
            <th>Diesel</th>
            <th>Petrol</th>
            <th>LPG</th>
            <th>CNG</th>
          
          </tr>
        </thead>
        <?php //echo '<pre>'; print_r($record);
          $east_india = array("36", "26", "16", "1", "5");
          $north_india = array("28", "15", "13", "29", "14", "34", "35", "10", "6");
          $north_east_india = array("2", "4", "22", "23", "24", "25", "30", "33");
          $south_india = array("2", "17", "18", "31", "32", "19", "27");
          $west_india = array("12", "21", "11", "9", "8");
          $central_india = array("7", "20");
        ?>
        <tbody>
          <?php $i=1; foreach($zone as $r){ ?>
            <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
                <td><?php echo $i; ?></td>
                <td><?php echo $r->name; ?></td>
        <td><?php
                if(in_array($r->state, $east_india)){
                    echo 'East';
                }elseif(in_array($r->state, $north_india)){
                     echo 'North';
                }elseif(in_array($r->state, $north_east_india)){
                     echo 'North-East';
                }elseif(in_array($r->state, $south_india)){
                     echo 'South';
                }elseif(in_array($r->state, $west_india)){
                     echo 'West';
                }elseif(in_array($r->state, $central_india)){
                     echo 'Central';
                }  
               
               
            ?></td>
                <td><?php echo $r->state_name; ?></td>
                <td><?php echo $r->category; ?></td>
                <td><?php echo $r->location; ?></td>
                <td><?php echo $r->Q6A2S1T1; ?></td>
                <td><?php echo $r->Q6A2S1T2; ?></td>
                <td><?php echo $r->Q6A2S1T3; ?></td>
                <td><?php echo $r->Q6A2S1T4; ?></td>
                <td><?php echo $r->total_disel; ?></td>
                <td><?php echo $r->total_petrol; ?></td>
                <td><?php echo $r->total_lpg; ?></td>
                <td><?php echo $r->total_cng; ?></td>  
                    
           </tr>
          <?php $i++; } ?>
        </tbody>
      </table>
