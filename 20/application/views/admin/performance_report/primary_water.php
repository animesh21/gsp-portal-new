<div class="top-area">
  <h2>Primary Water<!--<a href="<?php echo base_url('admin/Performance_report/excel') ?>">
    <button class="exportBtn">Export to Excel</button>-->
    </a></h2>
</div>
<div style="overflow: scroll">
  <table class="display dataTable no-footer" id="tablePerformance">
    <thead>
      <tr>
        <td>S.No</td>
        <td>User Id</td>
        <td>School Id</td>
        <td>Name</td>
        <td>Category</td>
        <td>Population</td>
        <td>Drinking </td>
        <td>Toilet flushing </td>
        <td>Personal cleaning </td>
        <td>Washing clothes </td>
        <td>Cooking </td>
        <td>Cleaning Utensils </td>
        <td>Washing Vegetables </td>
        <td>Mopping floors </td>
        <td>Gardening </td>
        <td>Others </td>
        <td>Total water consumption per day</td>
        <td>Per capita/day water consumption</td>
        <td>Ground Water as source</td>
        <td>Surface water as source</td>
        <td>Rainwater as source</td>
        <td>Recycled waste water as source</td>
        <td>Municipality as supplier</td>
        <td>Panchayat as supplier</td>
        <td>PHED as supplier</td>
        <td>Private Supplier</td>
        <td>School&#39;s own supply</td>
        <td>School gets daily water supply</td>
        <td>Duration of water supply</td>
        <td>Does your school have any water and sanitation policy</td>
        <td>If your school has an eco-club, do they have water component</td>
        <td>Do all tanks in the school have float valves installed to stop overflow</td>
        <td>Do the drinking water points have spill proof taps to check overflow</td>
        <td>Does your school use appliances with a quick-wash setting</td>
        <td>Are dual flush systems installed in the toilets</td>
        <td>Does your school encourage bottled water for drinking water</td>
        <td>Does your school grow local plant species which require limited amount of water to grow </td>
        <td>Has your school initiated any water conservation steps in the school or outside, in the past one year</td>
        <td>Does your school use a drip or irrigation system</td>
        <td>Any other step taken for water conservation</td>
        <td>Do you have Rainwater harvesting (RWH) system in your school?</td>
        <td>Does your school harvest different catchments?</td>
        <td>Which is the catchment area being harvested by your school?</td>
        <td>How does your school harvest rainwater?</td>
        <td>If your school only stores rainwater, please select the use of stored rainwater</td>
        <td>Does your school have rainwater storage tank?</td>
        <td>Does your school have groundwater recharge structure?</td>
        <td>If your school practices rainwater harvesting, then what is the ratio between storage and recharge</td>
        <td>How much area in your school is harvested? </td>
        <td>RWH structures present in your school:</td>
        <td> Where is your filter unit</td>
        <td>Types of filter used in your school:</td>
        <td>Rate your catchment on cleanliness</td>
        <td>Does your school clean your catchment and system</td>
        <td>when does your school clean the catchment and RWH system?</td>
        <td>Does your school monitor the rainwater harvesting structure for its efficiency?</td>
        <td>when does your school monitor the groundwater level?</td>
        <td>What is the trend of groundwater level in your school across the year</td>
        <td>how much was the increase?</td>
        <td>Is there any improvement</td>
        <td>RWH Potential of schools with No RWH</td>
        <td>Does the school have separate toilets for males and females</td>
        <td>Are there sufficient toilets for women in your school</td>
        <td>Are there sufficient toilets for men in your school</td>
        <td>Are the toilets accessible and safe to use for children</td>
        <td>Are the toilets accessible and safe to use for differently abled children</td>
        <td>Are the toilets accessible and safe to use for differently abled staff (teaching and non-teaching)</td>
        <td>Are the toilets situated in the right location in terms of privacy and safety</td>
        <td>Is there sufficient light during day time</td>
        <td>No. of drinking water taps</td>
        <td>Load on DWT</td>
        <td>No.of hand pumps</td>
        <td>No. of ablution taps</td>
        <td>Load on Ablution Tap</td>
        <td>Toilet for Girls</td>
        <td>Toilet for Boys </td>
        <td>Common Toilets</td>
        <td>No. of Toilets (water closet)</td>
        <td>Load on Water Closet</td>
        <td>No. of urinals</td>
        <td>Load on urinals</td>
        <td>No. of water outlets</td>
        <td>water storage system in the toilets?</td>
        <td>Is the water supply sufficient?</td>
        <td>Are the toilets cleaned?</td>
        <td>Does school treat waste water</td>
        <td>Does schools reuse treated wastewater</td>
        <td>how does your school reuse wastewater</td>
        <td>Total points in Water</td>
      </tr>
    </thead>
    <tbody>
      <?php
	  ini_set('memory_limit','-1');
            $i = 1;
            foreach ($records as $r) {
                ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo  $r->userid; ?></td>
        <td><?php echo  $r->id; ?></td>
        <td><?php echo  $r->name; ?></td>
        <td><?php echo $r->category; ?></td>
        <td><?php echo $r->population; ?></td>
       
<td><?php echo  $r->Q4W1; ?></td>
<td><?php echo  $r->Q4W2; ?></td>
<td><?php echo  $r->Q4W3; ?></td>
<td><?php echo  $r->Q4W4; ?></td>
<td><?php echo  $r->Q4W5; ?></td>
<td><?php echo  $r->Q4W6; ?></td>
<td><?php echo  $r->Q4W7; ?></td>
<td><?php echo  $r->Q4W8; ?></td>
<td><?php echo  $r->Q4W9; ?></td>
<td><?php echo  $r->Q4W10; ?></td>
<td><?php echo  $r->Q4W11; ?></td>
<td><?php if($r->population!=0): echo  $r->population/$r->Q4W11; else: echo "Wrong Population"; endif; ?></td>
<!--<td><?php //echo  $r->population/$r->Q4W11; ?></td> -->
<td><?php echo  $r->Q5W1; ?></td>
<td><?php echo  $r->Q5W2; ?></td>
<td><?php echo  $r->Q5W3; ?></td>
<td><?php echo  $r->Q5W4; ?></td>
<td><?php echo  $r->Q6W1; ?></td>
<td><?php echo  $r->Q6W2; ?></td>
<td><?php echo  $r->Q6W3; ?></td>
<td><?php echo  $r->Q6W4; ?></td>
<td><?php echo  $r->Q6W5; ?></td>
<td><?php echo  $r->Q7W1; ?></td>
<td><?php echo  $r->Q7W2; ?></td>
<td><?php echo  $r->Q8W1S1; ?></td>
<td><?php echo  $r->Q8W1S2; ?></td>
<td><?php echo  $r->Q8W1S3; ?></td>
<td><?php echo  $r->Q8W1S4; ?></td>
<td><?php echo  $r->Q8W1S5; ?></td>
<td><?php echo  $r->Q8W1S6; ?></td>
<td><?php echo  $r->Q8W1S7; ?></td>
<td><?php echo  $r->Q8W1S8; ?></td>
<td><?php echo  $r->Q8W1S9; ?></td>
<td><?php echo  $r->Q8W1S10; ?></td>
<td><?php echo  $r->Q8W1S11; ?></td>
<td><?php echo  $r->Q8W2; ?></td>
<td><?php echo  $r->Q8W2S1; ?></td>
<td><?php echo  $r->Q8W2S1S1; ?></td>
<td><?php echo  $r->Q8W2S2; ?></td>
<td><?php echo  $r->Q8W2S2S1; ?></td>
<td><?php echo  $r->Q8W2S2S2; ?></td>
<td><?php echo  $r->Q8W2S2S7; ?></td>
<td><?php echo  $r->Q8W2S2S10; ?></td>
<td><?php echo  $r->Q8W2S4; ?></td>
<td><?php echo  $r->Q8W2S31; ?></td>
<td><?php echo  $r->Q8W2S4S1; ?></td>
<td><?php echo  $r->Q8W2S4S22; ?></td>
<td><?php echo  $r->Q8W2S5; ?></td>
<td><?php echo  $r->Q8W2S61; ?></td>
<td><?php echo  $r->Q8W2S7; ?></td>
<td><?php echo  $r->Q8W2S9; ?></td>
<td><?php echo  $r->Q8W2S8; ?></td>
<td><?php echo  $r->Q8W2S10; ?></td>
<td><?php echo  $r->Q8W2S10; ?></td>
<td><?php echo  $r->Q8W2S12; ?></td>
<td><?php echo  $r->Q8W2S13; ?></td>
<td><?php echo  $r->Q8W3S1; ?></td>
<td><?php echo  $r->Q8W3S2; ?></td>
<td><?php echo  $r->Q8W3S3; ?></td>
<td><?php echo  $r->Q8W3S4; ?></td>
<td><?php echo  $r->Q8W3S5; ?></td>
<td><?php echo  $r->Q8W3S6; ?></td>
<td><?php echo  $r->Q8W3S7; ?></td>
<td><?php echo  $r->Q8W3S8; ?></td>
<td><?php echo  $r->Q9W1; ?></td>
<td><?php if($r->population/$r->Q9W1==0): echo "Wrong Population"; else: echo  $r->population/$r->Q9W1; endif; ?></td>
<!--<td><?php //echo  $r->population/$r->Q9W1; ?></td>-->
<td><?php echo  $r->Q10W1; ?></td>
<td><?php echo  $r->Q11W1; ?></td>
<td><?php if($r->population/$r->Q11W1==0): echo "Wrong Population"; else: echo $r->population/$r->Q11W1; endif; ?></td>
<!--<td><?php //echo  $r->population/$r->Q11W1; ?></td>-->
<td><?php echo  $r->Q13W1S1; ?></td>
<td><?php echo  $r->Q13W1S2; ?></td>
<td><?php echo  $r->Q13W1S3; ?></td>
<td><?php echo  $r->Q13W1S4; ?></td>
<td><?php if($r->population!=0): echo  $r->population/$r->Q13W1S4; else: echo "Wrong Population"; endif; ?></td>
<!--<td><?php //echo  $r->population/$r->Q13W1S4; ?></td>-->
<td><?php echo  $r->Q14W1; ?></td>
<td><?php echo  $r->Q15W1; ?></td>
<td><?php echo  $r->Q15W1; ?></td>
<td><?php echo  $r->Q16W1; ?></td>
<td><?php echo  $r->Q21W1; ?></td>
<td><?php echo  $r->Q18W1; ?></td>
<td><?php echo  $r->Q19W1; ?></td>
<td><?php echo  $r->Q20W1; ?></td>
<td><?php echo  $r->Q20W2; ?></td>
<td><?php echo  $r->points; ?></td>

      </tr>
      <?php
            $i++;
            }
            ?>
    </tbody>
  </table>
</div>
