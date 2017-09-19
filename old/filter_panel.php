<div class="filter_panel" id="filerPanel">
<form name="filter" method="post" id="filter">
<ul class="filter_style">
    <div class="content-fom">
    
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">    
    <li><label>Select Region/Zone</label> 
      
        <select class="form-control" name="region" id="region" onchange="this.form.submit()">
            <option value="0">All India</option>
            <?php
            $sql_zones = mysql_query("select * from `region`");
            while($zones_array = mysql_fetch_array($sql_zones))
            {
            ?>
            <option value="<?php echo $zones_array['rid']; ?>" <?php if($_POST['region'] == $zones_array['rid']) { ?> selected="selected" <?php } ?> ><?php echo $zones_array['name']; ?></option>
            <?php } ?>
      </select>
   </li>
   </div>
        
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12" style="clear: both">         
   <li><label>Select State</label> 
       <select class="form-control" id="region_state" name="region_state">
           <option value="0">All India</option>
            <?php
            $sql_zones_states = mysql_query("select * from `region_states` where `rid` = '".$_POST['region']."'");
            while($zones_states_array = mysql_fetch_array($sql_zones_states))
            {
            ?>
            <option value="<?php echo $zones_states_array['stid']; ?>"<?php if($_POST['region_state'] == $zones_states_array['stid']) { ?> selected="selected" <?php } ?>><?php echo $zones_states_array['name']; ?></option>
            <?php } ?>
        </select>
   </li>
   </div>
        
   <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12" style="clear: both">      
   <li><label>Select School Parameter</label>
       <div style="overflow: hidden; clear: both;">
           <select class="form-control" name="category">
            <option value="0" <?php if($_POST['category'] ==0) { ?> selected="selected" <?php } ?>>All Categories</option>
            <option value="1" <?php if($_POST['category'] ==1) { ?> selected="selected" <?php } ?>>Day Scholar</option>
            <option value="2" <?php if($_POST['category'] ==2) { ?> selected="selected" <?php } ?>>Day Boarding</option>
            <option value="3" <?php if($_POST['category'] ==3) { ?> selected="selected" <?php } ?>>Residential</option>
         </select>
       <select class="form-control" name="shifts">
            <option value="0" <?php if($_POST['shifts'] ==0) { ?> selected="selected" <?php } ?>>All Shifts</option>
            <option value="1" <?php if($_POST['shifts'] ==1) { ?> selected="selected" <?php } ?>>Morning</option>
            <option value="2" <?php if($_POST['shifts'] ==2) { ?> selected="selected" <?php } ?>>Evening</option>
			<option value="3" <?php if($_POST['shifts'] ==3) { ?> selected="selected" <?php } ?>>Both</option>
        </select>
           <select class="form-control" name="genders">
            <option value="0" <?php if($_POST['genders'] ==0) { ?> selected="selected" <?php } ?>>All</option>
            <option value="1" <?php if($_POST['genders'] ==1) { ?> selected="selected" <?php } ?>>Male</option>
            <option value="2" <?php if($_POST['genders'] ==2) { ?> selected="selected" <?php } ?>>Female</option>
			<option value="3" <?php if($_POST['genders'] ==3) { ?> selected="selected" <?php } ?>>Mixed/Co-education</option>
       </select>
           <select class="form-control" name="location">
            <option value="0" <?php if($_POST['location'] ==0) { ?> selected="selected" <?php } ?>>All</option>
            <option value="1" <?php if($_POST['location'] ==1) { ?> selected="selected" <?php } ?>>Urban</option>
            <option value="2" <?php if($_POST['location'] ==2) { ?> selected="selected" <?php } ?>>Rural</option>
       </select>
        <select class="form-control" name="board">
            <option value="0" <?php if($_POST['board'] ==0) { ?> selected="selected" <?php } ?>>All Boards</option>
            <option value="1" <?php if($_POST['board'] ==1) { ?> selected="selected" <?php } ?>>State Board of Education</option>
            <option value="2" <?php if($_POST['board'] ==2) { ?> selected="selected" <?php } ?>>Central Board of Secondary Education</option>
            <option value="3" <?php if($_POST['board'] ==3) { ?> selected="selected" <?php } ?>>Indian Certificate of Secondary Education</option>
            <option value="4" <?php if($_POST['board'] ==4) { ?> selected="selected" <?php } ?>>(IB)/(IGCSE)</option>
			<option value="5" <?php if($_POST['board'] ==5) { ?> selected="selected" <?php } ?>>Other</option>

        </select>
       
       <label></label><input class="btn" type="submit" name="" value="filter" style="float:left; height: 42px; width: 100px; background-color: rgb(232, 101, 73); color: rgb(255, 255, 255);">
       </div>
   </li>
   </div>
        
    <div class="col-lg-4 col-md-12 col-sm-6 col-xs-12" style="clear: both">       
   
    </div>
    </div>    
</ul>
</form>
</div>