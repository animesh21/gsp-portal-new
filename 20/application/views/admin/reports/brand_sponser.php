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
            <th>Response</th>
            <th>Brand Name</th>
            <th>Promotion</th>
          
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
                <td><?php echo 'NO'; ?></td>  <!---- For Now static (ma'am discussion remaining) --->
                <td><?php echo $r->Q11F2; ?></td>
                <td><?php if($r->Q11F3 == 'Y'){ echo 'Yes,we Do';}else{ echo "We Don't";} ?></td>
                    
           </tr>
          <?php $i++; } ?>
        </tbody>
      </table>