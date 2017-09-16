<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');

include('header.php');
?>
<script type = 'text/javascript'>
$(document).ready(function() {
    document.title = 'Yes/No Report(GSP-Audit-2015)';
    $('#example').DataTable({
       dom: 'lBfrtip',
        buttons: [
            'excel'
        ],
		 "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 25
    });
} );
</script>
<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
            <form name="state_compare" id="state_compare" method="post" style="padding-left: 0">
        <div class="row">
       
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <select id="state" class="form-control" name="state" style="height: 34px !important; line-height: 34px !important; padding-top: 4px">
            <option value="">Select State</option> 
			<option value="all" <?php if($_REQUEST['state'] =="all") { ?>selected="selected"<?php } ?>>All India</option> 
            <?php
            $sql_states = mysql_query("select * from `states` where `country_id` = 101");
            while($states_array = mysql_fetch_array($sql_states))
            {
            ?>
			
            <option value="<?php echo $states_array['name']; ?>" <?php if($_REQUEST['state'] == $states_array['name']) { ?>selected="selected"<?php } ?>><?php echo $states_array['name']; ?></option>    
            <?php
            }
            ?>
        </select>
           </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="show" onclick="return Validate()" />
            </div>
    </div>
    </form>
      	<h2>Yes/No Report</h2>
        </div>
    <?php 
    if($_REQUEST['state'] != "")
    {
    ?> 
            
     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
     <th>S.No</th>
     <th>Item</th>
     <th>State</th>
     <th>Yes%</th>
     </tr>
     </thead>
     <tbody>
     <?php
	
     $state = $_REQUEST['state'];
	 
	 if($state=="all")
	 {
		 $state_condition=" ";
		 $state="All India";
	 }else{
		 
		$state_condition=" AND `attribute_5`='".$state."'";
	 }
	 
	 
     //Schools with Laboratory Air quality monitoring equipment
     $sql_data1 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X4X187`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_1 = mysql_result($sql_data1,0,0);
     
	 
     $sql_data_total_schools_1 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_1 = mysql_num_rows($sql_data_total_schools_1);
     $per1 = number_format(($total_yes_answers_1/$total_schools_1)*100,2);
     
     
     //Schools having access to Electricity Bills
     $sql_data2 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token  AND `266617X8X237`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_2 = mysql_num_rows($sql_data2);
     
     $sql_data_total_schools_2 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0  $state_condition");
     $total_schools_2 = mysql_num_rows($sql_data_total_schools_2);
     $per2 = number_format(($total_yes_answers_2/$total_schools_2)*100,2);
     
     //Schools having their own vehicles
     $sql_data3 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X4X164`= 'A3' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_3 = mysql_num_rows($sql_data3);
     
     $sql_data_total_schools_3 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_3 = mysql_num_rows($sql_data_total_schools_3);
     $per3 = number_format(($total_yes_answers_3/$total_schools_3)*100,2);
     
     //Schools having alternate source of energy
     $sql_data4 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X8X261`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_4 = mysql_num_rows($sql_data4);
     
     $sql_data_total_schools_4 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_4 = mysql_num_rows($sql_data_total_schools_4);
     $per4 = number_format(($total_yes_answers_4/$total_schools_4)*100,2);
     
     //Schools having canteen
     $sql_data5 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X36X1858`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_5 = mysql_num_rows($sql_data5);
     
     $sql_data_total_schools_5 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_5 = mysql_num_rows($sql_data_total_schools_5);
     $per5 = number_format(($total_yes_answers_5/$total_schools_5)*100,2);
     
     //Schools having mid-day meals
     $sql_data6 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X36X1859`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_6 = mysql_num_rows($sql_data6);
     
     $sql_data_total_schools_6 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_6 = mysql_num_rows($sql_data_total_schools_6);
     $per6 = number_format(($total_yes_answers_6/$total_schools_6)*100,2);
     
     //Students bringing their own lunch from home
     $sql_data7 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X36X1860`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_7 = mysql_num_rows($sql_data7);
     
     $sql_data_total_schools_7 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_7 = mysql_num_rows($sql_data_total_schools_7);
     $per7 = number_format(($total_yes_answers_7/$total_schools_7)*100,2);
     
     //Teachers having responsibility to ensure students carrying lunch from home
     $sql_data8 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X36X1863`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_8 = mysql_num_rows($sql_data8);
     
     $sql_data_total_schools_8 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_8 = mysql_num_rows($sql_data_total_schools_8);
     $per8 = number_format(($total_yes_answers_8/$total_schools_8)*100,2);
     
     //Schools distributing packaged food items during events
     $sql_data9 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X36X1864`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_9 = mysql_num_rows($sql_data9);
     
     $sql_data_total_schools_9 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_9 = mysql_num_rows($sql_data_total_schools_9);
     $per9 = number_format(($total_yes_answers_9/$total_schools_9)*100,2);
     
     //Schools distributing chocolates/similar products during events
     $sql_data10 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X36X1866`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_10 = mysql_num_rows($sql_data10);
     
     $sql_data_total_schools_10 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_10 = mysql_num_rows($sql_data_total_schools_10);
     $per10 = number_format(($total_yes_answers_10/$total_schools_10)*100,2);
     
     //Schools having events sponsored by food companies/brands
     $sql_data11 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X36X1868`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_11 = mysql_num_rows($sql_data11);
     
     $sql_data_total_schools_11 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_11 = mysql_num_rows($sql_data_total_schools_11);
     $per11 = number_format(($total_yes_answers_11/$total_schools_11)*100,2);
     
	 
     //Schools having company/brand banners etc. put up during events
     $sql_data12 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X36X1870`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_12 = mysql_num_rows($sql_data12);
     
     $sql_data_total_schools_12 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_12 = mysql_num_rows($sql_data_total_schools_12);
     $per12 = number_format(($total_yes_answers_12/$total_schools_12)*100,2);
     
     //Schools using chemicals based pesticides for green cover
     $sql_data13 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X7X196`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_13 = mysql_num_rows($sql_data13);
     
     $sql_data_total_schools_13 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_13 = mysql_num_rows($sql_data_total_schools_13);
     $per13 = number_format(($total_yes_answers_13/$total_schools_13)*100,2);
     
     //Schools getting 24x7 water supply
     $sql_data14 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X37X1885`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_14 = mysql_num_rows($sql_data14);
     
     $sql_data_total_schools_14 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_14 = mysql_num_rows($sql_data_total_schools_14);
     $per14 = number_format(($total_yes_answers_14/$total_schools_14)*100,2);
     
     //Schools having water storage tanks
     $sql_data15 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X37X1887`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_15 = mysql_num_rows($sql_data15);
     
     $sql_data_total_schools_15 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_15 = mysql_num_rows($sql_data_total_schools_15);
     $per15 = number_format(($total_yes_answers_15/$total_schools_15)*100,2);
     
     //Schools having Rain Water Harvesting
     $sql_data16 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X37X1900`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_16 = mysql_num_rows($sql_data16);
     
     $sql_data_total_schools_16 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_16 = mysql_num_rows($sql_data_total_schools_16);
     $per16 = number_format(($total_yes_answers_16/$total_schools_16)*100,2);
     
     //Schools recycling waste water
     $sql_data17 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X37X1904`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_17 = mysql_num_rows($sql_data17);
     
     $sql_data_total_schools_17 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_17 = mysql_num_rows($sql_data_total_schools_17);
     $per17 = number_format(($total_yes_answers_17/$total_schools_17)*100,2);
     
     //Schools segregating solid waste
     $sql_data18 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X38X2032`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_18 = mysql_num_rows($sql_data18);
     
     $sql_data_total_schools_18 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_18 = mysql_num_rows($sql_data_total_schools_18);
     $per18 = number_format(($total_yes_answers_18/$total_schools_18)*100,2);
     
     //Schools recycling generated waste
     $sql_data19 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X38X2041`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_19 = mysql_num_rows($sql_data19);
     
     $sql_data_total_schools_19 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_19 = mysql_num_rows($sql_data_total_schools_19);
     $per19 = number_format(($total_yes_answers_19/$total_schools_19)*100,2);
     
     //Schools recycling generated waste
     $sql_data19 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X38X2041`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_19 = mysql_num_rows($sql_data19);
     
     $sql_data_total_schools_19 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_19 = mysql_num_rows($sql_data_total_schools_19);
     $per19 = number_format(($total_yes_answers_19/$total_schools_19)*100,2);
     
     //Schools having composting facility
     $sql_data20 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X38X2064`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_20 = mysql_num_rows($sql_data20);
     
     $sql_data_total_schools_20 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_20 = mysql_num_rows($sql_data_total_schools_20);
     $per20 = number_format(($total_yes_answers_20/$total_schools_20)*100,2);
     
     //Schools encouraging reuse of text books
     $sql_data21 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X38X2074`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_21 = mysql_num_rows($sql_data21);
     
     $sql_data_total_schools_21 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_21 = mysql_num_rows($sql_data_total_schools_21);
     $per21 = number_format(($total_yes_answers_21/$total_schools_21)*100,2);
     
     //Schools knowing e-waste collection methods
     $sql_data22 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X38X2114`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_22 = mysql_num_rows($sql_data22);
     
     $sql_data_total_schools_22 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_22 = mysql_num_rows($sql_data_total_schools_22);
     $per22 = number_format(($total_yes_answers_22/$total_schools_22)*100,2);
     
     //Schools burning waste
     $sql_data23 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X38X2081`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_23 = mysql_num_rows($sql_data23);
     
     $sql_data_total_schools_23 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_23 = mysql_num_rows($sql_data_total_schools_23);
     $per23 = number_format(($total_yes_answers_23/$total_schools_23)*100,2);
     
     //Schools having a policy on waste
     $sql_data24 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X38X2121`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_24 = mysql_num_rows($sql_data24);
     
     $sql_data_total_schools_24 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_24 = mysql_num_rows($sql_data_total_schools_24);
     $per24 = number_format(($total_yes_answers_24/$total_schools_24)*100,2);
     
     //Schools having awareness drives for reduce, recycle and reuse waste
     $sql_data25 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X38X2122`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_25 = mysql_num_rows($sql_data25);
     
     $sql_data_total_schools_25 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_25 = mysql_num_rows($sql_data_total_schools_25);
     $per25 = number_format(($total_yes_answers_25/$total_schools_25)*100,2);
     
     //Schools having study of environment integrated into curriculum
     $sql_data26 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `266617X38X2124`= 'Y' AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_yes_answers_26 = mysql_num_rows($sql_data26);
     
     $sql_data_total_schools_26 = mysql_query("SELECT * FROM `lime_tokens_266617` AS `tt`JOIN `lime_survey_266617` AS `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` = 0 $state_condition");
     $total_schools_26 = mysql_num_rows($sql_data_total_schools_26);
     $per26 = number_format(($total_yes_answers_26/$total_schools_26)*100,2);
     ?>
     <tr>
     <td>1</td>
     <td>Schools with Laboratory Air quality monitoring equipment</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per1; ?></td>
     </tr>
     <tr>
     <td>2</td>
     <td>Schools having access to Electricity Bills</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per2; ?></td>
     </tr>
     <tr>
     <td>3</td>
     <td>Schools having their own vehicles</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per3; ?></td>
     </tr>
     <tr>
     <td>4</td>
     <td>Schools having alternate source of energy</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per4; ?></td>
     </tr>
     <tr>
     <td>5</td>
     <td>Schools having canteen</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per5; ?></td>
     </tr>
     <tr>
     <td>6</td>
     <td>Schools having mid-day meals</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per6; ?></td>
     </tr>
     <tr>
     <td>7</td>
     <td>Students bringing their own lunch from home</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per7; ?></td>
     </tr>
     <tr>
     <td>8</td>
     <td>Teachers having responsibility to ensure students carrying lunch from home</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per8; ?></td>
     </tr>
     <tr>
     <td>9</td>
     <td>Schools distributing packaged food items during events</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per9; ?></td>
     </tr>
     <tr>
     <td>10</td>
     <td>Schools distributing chocolates/similar products during events</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per10; ?></td>
     </tr>
     <tr>
     <td>11</td>
     <td>Schools having events sponsored by food companies/brands</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per11; ?></td>
     </tr>
     <tr>
     <td>12</td>
     <td>Schools having company/brand banners etc. put up during events</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per12; ?></td>
     </tr>
     <tr>
     <td>13</td>
     <td>Schools using chemicals based pesticides for green cover</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per13; ?></td>
     </tr>
     <tr>
     <td>14</td>
     <td>Schools getting 24x7 water supply</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per14; ?></td>
     </tr>
     <tr>
     <td>15</td>
     <td>Schools having water storage tanks</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per15; ?></td>
     </tr>
     <tr>
     <td>16</td>
     <td>Schools having Rain Water Harvesting</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per16; ?></td>
     </tr>
     <tr>
     <td>17</td>
     <td>Schools recycling waste water</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per17; ?></td>
     </tr>
     <tr>
     <td>18</td>
     <td>Schools segregating solid waste</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per18; ?></td>
     </tr>
     <tr>
     <td>19</td>
     <td>Schools recycling generated waste</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per19; ?></td>
     </tr>
     <tr>
     <td>20</td>
     <td>Schools having composting facility</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per20; ?></td>
     </tr>
     <tr>
     <td>21</td>
     <td>Schools encouraging reuse of text books</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per21; ?></td>
     </tr>
     <tr>
     <td>22</td>
     <td>Schools knowing e-waste collection methods</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per22; ?></td>
     </tr>
     <tr>
     <td>23</td>
     <td>Schools burning waste</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per23; ?></td>
     </tr>
     <tr>
     <td>24</td>
     <td>Schools having a policy on waste</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per24; ?></td>
     </tr>
     <tr>
     <td>25</td>
     <td>Schools having awareness drives for reduce, recycle and reuse waste</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per25; ?></td>
     </tr>
     <tr>
     <td>26</td>
     <td>Schools having study of environment integrated into curriculum</td>
     <td><?php echo $state; ?></td>
     <td><?php echo $per26; ?></td>
     </tr>
     
     </tbody>
     </table>
    <?php }else{ ?>
            <div style="text-align: center; color: grey; font-size: 14px;">Please select a state first!</div> 
    <?php } ?>
        </div>
    
  </div>
</main>
<footer>
<div class="text-center">Copyright © <?php echo date('Y'); ?> Centre for Science and Environment</div>
</footer>

</body>

</html>

