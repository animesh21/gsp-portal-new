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

    document.title = 'Food Ultra Processed Flavour';
    $('#example').DataTable( {
			
        dom: 'lBfrtip',
        buttons: [
            'excel'
        ],
		 "aLengthMenu": [[10,25, 50, 75, -1], [10,25, 50, 75, "All"]],
        "iDisplayLength": 25
    } );
} );
</script>
<main class="bdr" style='border: none;'>
    <div class="container" style="width: 100%">
  	<div class="wrapper">
    	<div class="top-area">
            <h2>Food Ultra Processed Flavour</h2>
        </div>
            <form name="state_compare" id="state_compare" method="post" style="padding-left: 0">
        <div class="row">
       
           <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <select id="state" class="form-control" name="state" style="height: 34px !important; line-height: 34px !important; padding-top: 4px">
            <option value="">Select State</option> 
            <?php
            $sql_states = mysql_query("select * from `states_india` order by name");
            while($states_array = mysql_fetch_array($sql_states))
            {
            ?>
            <option value="<?php echo $states_array['state_id']; ?>" <?php if($_REQUEST['state'] == $states_array['state_id']) { ?>selected="selected"<?php } ?>><?php echo $states_array['name']; ?></option>    
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
      	
            

     <table id="example" class="display" cellspacing="0" width="100%">
     <thead> 
     <tr>
     <th>S.No</th>
	 <th>School Name</th>
     <th>Region</th>
     <th>State</th>
     <th>Category</th>
     <th>Location</th>
	 <th>Response</th>
     <th>Savoury Snacks</th>
     <th>Instant Noodles</th>
     <th>Potato fries and burger</th>
     <th>Confectionery items</th>
	 <th>Ice cream</th>
     <th>Carbonated beverages</th>
     <th>Sugar sweetened non carbonated beverages</th>
	 <th>Packaged flavoured drinks</th>
	 <th>Packaged Energy drinks</th>
     
   
     </tr>
     </thead>
     <tbody>
     <?php
     $state = $_REQUEST['state'];
     if($state!="")
     {
     $sql_data = mysql_query("SELECT * FROM `lime_tokens_266617` as `tt` JOIN `lime_survey_266617` as `st` WHERE st.token = tt.token AND `attribute_5` = '".$state."' AND `completed` !='N' AND `usesleft` <= 0 AND st.submitdate IS NOT NULL");
     }
     else
     {
     $sql_data = mysql_query("SELECT * FROM `lime_tokens_266617` as `tt` JOIN `lime_survey_266617` as `st` WHERE st.token = tt.token AND `completed` !='N' AND `usesleft` <= 0 AND st.submitdate IS NOT NULL");    
     }
     $i = 0;
     while($data = mysql_fetch_array($sql_data))
     {   
         //$sql_region_details = mysql_fetch_array(mysql_query("select `rid` from `region_states` where `name` = '".$data['attribute_5']."'"));
         //$sql_region_name = mysql_fetch_array(mysql_query("select `name` from `region` where `rid` = '".$sql_region_details['rid']."'"));
 $sql_region_details = mysql_fetch_array(mysql_query("SELECT region.`name` AS region_name, states_india.`name` AS state_name FROM region,states_india WHERE region.rid=states_india.rid AND states_india.state_id='".$data['attribute_5']."' "));         
       
		$i++;
     ?>
     <tr>
     <td><?php echo $i; ?></td>
	 <td><?php echo $data['attribute_1']; ?></td>
     <td><?php echo $sql_region_details['region_name']; ?></td>
     <td><?php echo $sql_region_details['state_name']; ?></td>
     <td>
         <?php 
             $school_type=array(1=>"Day Scholar",2=>"Day Boarding",3=>"Residential",4=>"Day Scholar + Day Boarding",5=>"Day Boarding + Residential",6=>"Day Scholar + Residential",7=>"Day Scholar + Day Boarding + Residential");								
			 $type=$data['266617X34X1608'];
			 echo $school_type[$type];
         ?>
     </td>
     <td><?php if($data['266617X32X56'] == "A1"){ echo "Urban Area"; }elseif($data['266617X32X56'] == "A2"){ echo "Rural Area"; } ?></td>
	 <?php 
	 if($data['266617X36X1858']=="Y")
	 {
	 $responce="Yes";
	 }
	 if($data['266617X36X1858']=="N")
	 {
	 $responce="Not";
	 }
	 
	 ?>
	  <td><?php echo $responce; ?></td>
	  
     <td><?php echo $data['266617X36X1871SQ001_SQ002']; ?></td>
	
     <td><?php echo $data['266617X36X1871SQ002_SQ002']; ?></td>
	 
	 <!--Potato fries and Burgers -->
	 <td><?php echo $data['266617X36X1871SQ003_SQ002']; ?></td>
	 <!--Confectionery items  -->
	 
	 <td><?php echo $data['266617X36X1871SQ004_SQ002']; ?></td>
	 
	 <!-- Ice-cream-->
	 <td><?php echo $data['266617X36X1871SQ005_SQ002']; ?></td>
	 
	<!--Carbonated beverages --> 
	  <td><?php echo $data['266617X36X1871SQ006_SQ002']; ?></td>
	  
	  <!--Sugar sweetened non-carbonated beverages -->
	 <td><?php echo $data['266617X36X1871SQ007_SQ002']; ?></td>
	 
	 <!-- Packaged/Bottled Nimboo Paani/ Lassi/ Flavoured milk-->
	 <td><?php echo $data['266617X36X1871SQ008_SQ002']; ?></td>
	 <!--Packaged/Bottled Energy Drinks -->
	 <td><?php echo $data['266617X36X1871SQ009_SQ002']; ?></td>
	 </tr>
     <?php } ?>
	 
	
	 
     </tbody>
     </table>
    </div>
    
  </div>
</main>
<footer>
<div class="text-center">Copyright © <?php echo date('Y'); ?> Centre for Science and Environment</div>
</footer>

</body>

</html>

