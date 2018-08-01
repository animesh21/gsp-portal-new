<div class="top-area">
  <h2>Water<!--<a href="<?php echo base_url('admin/Performance_report/excel') ?>">
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
		<td>Where does the water get treated?</td>
		<td>Who treats the wastewater outside your school?</td>
		<td>Does your school reuse the wastewater from RO plant or Air conditioner drain pipes?</td>
		<td>If yes, How does your school reuse wastewater from RO plant or AC?</td>
        <td>Total points in Water</td>
      </tr>
    </thead>
    <tbody>
      <?php
	    error_reporting(0);
ini_set('memory_limit', '-1');
            $i = 1;
            foreach ($record as $r) {
         ?>
      <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo  $r->userid; ?></td>
        <td><?php echo  $r->id; ?></td>
        <td><?php echo  $r->name; ?></td>
        <td><?php 
			 $category=array("Day Scholar"=>"1","Day Boarding"=>"2","Residential"=>"3","Day Scholar + Day Boarding"=>"4","Day Boarding + Residential"=>"5","Day Scholar + Residential"=>"6","Day Scholar + Day Boarding + Residential"=>"7");
			$serach_category=(getFiled('Q1S1',$r->userid) != '') ? getFiled('Q1S1', $r->userid) : "N/A";
			echo array_search($serach_category,$category); ?></td>
    		<td><?php echo(getFiled('Q4G4S3',$r->userid) != '') ? getFiled('Q4G4S3', $r->userid) : "N/A";?></td>
       <td><?php echo(getFiled('Q4W1',$r->userid) != '') ? getFiled('Q4W1', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q4W2',$r->userid) != '') ? getFiled('Q4W2', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q4W3',$r->userid) != '') ? getFiled('Q4W3', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q4W4',$r->userid) != '') ? getFiled('Q4W4', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q4W5',$r->userid) != '') ? getFiled('Q4W5', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q4W6',$r->userid) != '') ? getFiled('Q4W6', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q4W7',$r->userid) != '') ? getFiled('Q4W7', $r->userid) : "N/A";?></td>

<td><?php echo(getFiled('Q4W8',$r->userid) != '') ? getFiled('Q4W8', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q4W9',$r->userid) != '') ? getFiled('Q4W9', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q4W10',$r->userid) != '') ? getFiled('Q4W10', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q4W11',$r->userid) != '') ? getFiled('Q4W11', $r->userid) : "N/A";?></td>
<td><?php 
$population=(getFiled('Q4G4S3',$r->userid) != '') ? getFiled('Q4G4S3', $r->userid) : "0";
$Q4W11=(getFiled('Q4W11',$r->userid) != '') ? getFiled('Q4W11', $r->userid) : "N/A";
	 if($population==0){
	       echo "N/A";
	 }
         elseif($population==""){
	        echo "N/A";
	 }
	 else{
		echo  $Q4W11/$population;  
	         } ?></td>
<td><?php 
  $Q5W1=(getFiled('Q5W1',$r->userid) != '') ? getFiled('Q5W1', $r->userid) : "N/A";
  if($Q5W1==1){echo "Ground water";}else{echo $Q5W1;}
?></td>
<td><?php 
   $Q5W2=(getFiled('Q5W2',$r->userid) != '') ? getFiled('Q5W2', $r->userid) : "N/A";
   if($Q5W2==1){echo "Surface water";}else{echo $Q5W2;}
?></td>
<td><?php 
   $Q5W3=(getFiled('Q5W3',$r->userid) != '') ? getFiled('Q5W3', $r->userid) : "N/A";
   if($Q5W3==1){echo "Rainwater";}else{echo $Q5W3;}
?></td>
<td><?php $Q5W4=(getFiled('Q5W4',$r->userid) != '') ? getFiled('Q5W4', $r->userid) : "N/A";
if($Q5W4==1){echo " Recycled wastewater";}else{echo $Q5W4;}
?></td>
<td><?php $Q6W1=(getFiled('Q6W1',$r->userid) != '') ? getFiled('Q6W1', $r->userid) : "N/A";
if($Q6W1==1){echo "Municipality";}else{echo $Q6W1;}
?></td>
<td><?php $Q6W2=(getFiled('Q6W2',$r->userid) != '') ? getFiled('Q6W2', $r->userid) : "N/A";
if($Q6W2==1){echo "Panchayat";}else{echo $Q6W2;}
?></td>
<td><?php $Q6W3=(getFiled('Q6W3',$r->userid) != '') ? getFiled('Q6W3', $r->userid) : "N/A";
if($Q6W3==1){echo " Public Health Engineering Department (PHED)";}else{echo $Q6W3;}
?></td>
<td><?php $Q6W4=(getFiled('Q6W4',$r->userid) != '') ? getFiled('Q6W4', $r->userid) : "N/A";
if($Q6W4==1){echo "Private supplier";}else{echo $Q6W4;}
?></td>
<td><?php $Q6W5=(getFiled('Q6W5',$r->userid) != '') ? getFiled('Q6W5', $r->userid) : "N/A";
if($Q6W5==1){echo " School’s own supply (bore well, rainwater harvesting facility, etc)";}else{echo $Q6W5;}
?></td>
<td><?php echo(getFiled('Q7W1',$r->userid) != '') ? getFiled('Q7W1', $r->userid) : "N/A";?></td>
<td><?php $Q7W2=(getFiled('Q7W2',$r->userid) != '') ? getFiled('Q7W2', $r->userid) : "N/A";
      $array_list=array("≤1 hours"=>"1","2-6 hours"=>"2","7-12 hours"=>"3","13-18 hours"=>"4","19-24 hours"=>"5");
	  echo array_search($Q7W2,$array_list);
?></td>
<td><?php echo(getFiled('Q8W1S1',$r->userid) != '') ? getFiled('Q8W1S1', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W1S2',$r->userid) != '') ? getFiled('Q8W1S2', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W1S3',$r->userid) != '') ? getFiled('Q8W1S3', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W1S4',$r->userid) != '') ? getFiled('Q8W1S4', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W1S5',$r->userid) != '') ? getFiled('Q8W1S5', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W1S6',$r->userid) != '') ? getFiled('Q8W1S6', $r->userid) : "N/A";?></td>	
<td><?php echo(getFiled('Q8W1S7',$r->userid) != '') ? getFiled('Q8W1S7', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W1S8',$r->userid) != '') ? getFiled('Q8W1S8', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W1S9',$r->userid) != '') ? getFiled('Q8W1S9', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W1S10',$r->userid) != '') ? getFiled('Q8W1S10', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W1S11',$r->userid) != '') ? getFiled('Q8W1S11', $r->userid) : "N/A";?></td>			 				 
<td><?php echo(getFiled('Q8W2',$r->userid) != '') ? getFiled('Q8W2', $r->userid) : "N/A";?></td>	
<td><?php echo(getFiled('Q8W2S1',$r->userid) != '') ? getFiled('Q8W2S1', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S1S1',$r->userid) != '') ? getFiled('Q8W2S1S1', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S2',$r->userid) != '') ? getFiled('Q8W2S2', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S2S1',$r->userid) != '') ? getFiled('Q8W2S2S1', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S2S2',$r->userid) != '') ? getFiled('Q8W2S2S2', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S2S7',$r->userid) != '') ? getFiled('Q8W2S2S7', $r->userid) : "N/A";?></td>				 		
<td><?php echo(getFiled('Q8W2S2S10',$r->userid) != '') ? getFiled('Q8W2S2S10', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S4',$r->userid) != '') ? getFiled('Q8W2S4', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S31',$r->userid) != '') ? getFiled('Q8W2S31', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S4S1',$r->userid) != '') ? getFiled('Q8W2S4S1', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S4S22',$r->userid) != '') ? getFiled('Q8W2S4S22', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S5',$r->userid) != '') ? getFiled('Q8W2S5', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S61',$r->userid) != '') ? getFiled('Q8W2S61', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S7',$r->userid) != '') ? getFiled('Q8W2S7', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S8',$r->userid) != '') ? getFiled('Q8W2S8', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S9',$r->userid) != '') ? getFiled('Q8W2S9', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S10',$r->userid) != '') ? getFiled('Q8W2S10', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S12',$r->userid) != '') ? getFiled('Q8W2S12', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S13',$r->userid) != '') ? getFiled('Q8W2S13', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W2S6',$r->userid) != '') ? getFiled('Q8W2S6', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W3S1',$r->userid) != '') ? getFiled('Q8W3S1', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W3S2',$r->userid) != '') ? getFiled('Q8W3S2', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W3S3',$r->userid) != '') ? getFiled('Q8W3S3', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W3S4',$r->userid) != '') ? getFiled('Q8W3S4', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W3S5',$r->userid) != '') ? getFiled('Q8W3S5', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W3S6',$r->userid) != '') ? getFiled('Q8W3S6', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W3S7',$r->userid) != '') ? getFiled('Q8W3S7', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q8W3S8',$r->userid) != '') ? getFiled('Q8W3S8', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q9W1',$r->userid) != '') ? getFiled('Q9W1', $r->userid) : "N/A";?></td>
<td><?php  
$population=(getFiled('Q4G4S3',$r->userid) != '') ? getFiled('Q4G4S3', $r->userid) : "0";
$Q9W1=(getFiled('Q9W1',$r->userid) != '') ? getFiled('Q9W1', $r->userid) : "N/A";   
	 if($population==0){
	       echo "N/A";
	 }
         elseif($population==""){
	        echo "N/A";
	 }
	 else{
		echo  $population/$Q9W1;  
	 }    
		    ?></td>
<td><?php echo(getFiled('Q10W1',$r->userid) != '') ? getFiled('Q10W1', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q11W1',$r->userid) != '') ? getFiled('Q11W1', $r->userid) : "N/A";?></td>
<td><?php 
$population=(getFiled('Q4G4S3',$r->userid) != '') ? getFiled('Q4G4S3', $r->userid) : "0";
$Q11W1=(getFiled('Q11W1',$r->userid) != '') ? getFiled('Q11W1', $r->userid) : "N/A";  
	if($population==0){
	       echo "N/A";
	 }
         elseif($population==""){
	        echo "N/A";
	 }
	 else{
		echo  $population/$Q11W1;  
	 }     ?></td>
<td><?php echo(getFiled('Q13W1S1',$r->userid) != '') ? getFiled('Q13W1S1', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q13W1S2',$r->userid) != '') ? getFiled('Q13W1S2', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q13W1S3',$r->userid) != '') ? getFiled('Q13W1S3', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q13W1S4',$r->userid) != '') ? getFiled('Q13W1S4', $r->userid) : "N/A";?></td>
<td><?php 
$population=(getFiled('Q4G4S3',$r->userid) != '') ? getFiled('Q4G4S3', $r->userid) : "0";
$Q13W1S4=(getFiled('Q13W1S4',$r->userid) != '') ? getFiled('Q13W1S4', $r->userid) : "N/A";  
	 if($population==0){
	       echo "N/A";
	 }
         elseif($population==""){
	        echo "N/A";
	 }
	 else{
		echo  $population/$Q13W1S4;  
	 } 
          ?></td>
<td><?php echo(getFiled('Q14W1',$r->userid) != '') ? getFiled('Q14W1', $r->userid) : "N/A";?></td>
<td><?php echo(getFiled('Q15W1',$r->userid) != '') ? getFiled('Q15W1', $r->userid) : "N/A";?></td>
      <td><?php echo(getFiled('Q16W1',$r->userid) != '') ? getFiled('Q16W1', $r->userid) : "N/A";?></td>
      <td><?php echo(getFiled('Q21W1',$r->userid) != '') ? getFiled('Q21W1', $r->userid) : "N/A";?></td>
      <td><?php echo(getFiled('Q18W1',$r->userid) != '') ? getFiled('Q18W1', $r->userid) : "N/A";?></td>
      <td><?php echo(getFiled('Q19W1',$r->userid) != '') ? getFiled('Q19W1', $r->userid) : "N/A";?></td>
      <td><?php echo(getFiled('Q20W1',$r->userid) != '') ? getFiled('Q20W1', $r->userid) : "N/A";?></td>
      <td><?php echo(getFiled('Q20W2',$r->userid) != '') ? getFiled('Q20W2', $r->userid) : "N/A";?></td>
	  <td><?php $Q19W11=(getFiled('Q19W11',$r->userid) != '') ? getFiled('Q19W11', $r->userid) : "N/A";
	  $array_list1=array("Inside your school"=>"1","Outside your school"=>"2");
	  echo array_search($Q19W11,$array_list1);
	  ?></td>
	  <td><?php $Q19W12=(getFiled('Q19W12',$r->userid) != '') ? getFiled('Q19W12', $r->userid) : "N/A";
	  $array_list1=array("Municipality"=>"1","Physical Health Engineering Department (PHED) "=>"2","Panchayat"=>"3","Community driven initiative"=>"4");
	  echo array_search($Q19W11,$array_list1);?></td>
	  <td><?php echo(getFiled('Q19W15',$r->userid) != '') ? getFiled('Q19W15', $r->userid) : "N/A";?></td>
	  <td><?php 
	  $Q19W16=(getFiled('Q19W16',$r->userid) != '') ? getFiled('Q19W16', $r->userid) : "N/A";
	  $Q19W161=(getFiled('Q19W161',$r->userid) != '') ? getFiled('Q19W161', $r->userid) : "N/A";
	  $Q19W162=(getFiled('Q19W162',$r->userid) != '') ? getFiled('Q19W162', $r->userid) : "N/A";    
	  $listresult='';
	  if($Q19W16==1){ $listresult.="Used for cleaning purposes (mopping, washing vehicles, etc)".",";}
	  if($Q19W161==2){$listresult.="Used for gardening and horticulture".",";}
	  if($Q19W162==3){$listresult.="Flushing".",";}
	  if($Q19W16==1 || $Q19W161==2 || $Q19W162==3){
	  echo $listresult;}else{echo "N/A";}
	  ?></td>
      <td><?php //echo  $r->points; ?> &nbsp;</td>

      </tr>
      <?php
            $i++;
            }
            ?>
    </tbody>
  </table>
</div>
