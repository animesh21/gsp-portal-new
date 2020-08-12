<div class="top-area">
    <h2>REGISTRATION BY REGION (2020)</h2>
</div>
<div class="row" style="margin: 20px 0; min-height: 300px">
    <?php echo form_open(base_url('admin/audit_started/regionsearch')); ?>
    
	
	 <div class="col-lg-5">
        <div class="input-group">
               <label>Region </label>
          <select name="region" class="form-control">
		  <option value="All">All</option>
		   <option value="North">North</option>
		    <option value="South">South</option>
			 <option value="East">East</option>
			  <option value="West">West</option>
			   <option value="North East">North East</option>
			    <option value="Central">Central</option>
		  
		  </select>  

        </div>


    </div>

    <div class="col-lg-5">
        <div class="input-group">
 <label> School - Level </label>
            <?php echo form_dropdown('school', array('2'=>'All','0' => 'Primary', '1' => 'Secondary'), $this->input->post('school'), array('class' => 'form-control', 'id' => 'school-select')); ?>

        </div>

    </div>
    <span class="input-group-btn col-lg-2">
        <input type="submit" class="btn btn-danger" value="Submit" name="Submit">     

    </span>
    <?php echo form_close(); ?>
</div>
