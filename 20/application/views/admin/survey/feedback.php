<?php $this->load->view('admin/survey/header'); ?>
<div class="container">
    <div class="content-form">
<h1>FEEDBACK</h1>
        <form action="http://localhost/gsp-portal-new/feedback/set" method="post" accept-charset="utf-8">
  <div class="form-group">
    <label><span class="cube">1</span> Has your school participated in the Green Schools Programme (GSP) Audit before? </label>
		<p> <?php echo (getFiled('Q1Fe1', $schoolUserID)!="")? (getFiled('Q1Fe1', $schoolUserID)=="Y")? "Yes" : "No" : "N/A"; ?></p>
  </div>
        <div class="form-group hide" id="Question1a">
          <label><span class="cube">1(a)</span> If your answer is yes, in which year did your school first participate in the audit? </label>
        <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group hide" id="Question1b">
           <label><span class="cube">1(b)</span> If your answer is yes, how many times have you done the audit?
           </label>
          <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group">
            <label><span class="cube">2</span> Did you find the online information relevant to your environmental education activities? </label>
			 <p> <?php echo (getFiled('Q1Fe2', $schoolUserID)!="")? (getFiled('Q1Fe2', $schoolUserID)=="Y")? "Yes" : "No" : "N/A"; ?></p>
       </div>
        <div class="form-group hide" id="Question2a">
            <label><span class="cube">2(a)</span> If your answer is no, please share your suggestions: </label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group">
           <label><span class="cube">3</span> Was the audit easy to understand and self-explanatory? </label>
		   <p> <?php echo (getFiled('Q1Fe3', $schoolUserID)!="")? (getFiled('Q1Fe3', $schoolUserID)=="Y")? "Yes" : "No" : "N/A"; ?></p>
       </div>
        <div class="form-group">
            <label><span class="cube">4</span> Do you think your school will be a Green School (resource efficient) by 2019? </label>
			<p> <?php echo (getFiled('Q1Fe4', $schoolUserID)!="")? (getFiled('Q1Fe4', $schoolUserID)=="Y")? "Yes" : "No" : "N/A"; ?></p>
       </div>
        <div class="form-group hide" id="Question4a">
            <label><span class="cube">4(a)</span> If your answer is no, why? </label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group">
            <label><span class="cube">5</span> What would be the help required  to make your school a Green School?
            </label>
            <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group">
            <label><span class="cube">6</span> How would you rate the overall design of the audit? </label>
           <table class="table table-bordered">
                <tbody><tr>
                    <th>Audit</th>
                    <th>Good</th>
                    <th>Average</th>
                    <th>Bad</th>
                </tr>
                <tr>
                    <th>Content</th>
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe1', $schoolUserID)==1):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?>
								 </label></th>
                   
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe1', $schoolUserID)==2):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?>
								 </label></th>
                
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe1', $schoolUserID)==3):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?>
								 </label></th>
                          
                </tr>
                <tr>
                    <th>Distribution of time among tasks</th>
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe2', $schoolUserID)==1):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?></label></th>
                          
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe2', $schoolUserID)==2):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?></label></th>
                            
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe2', $schoolUserID)==3):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?></label></th>
                            
                </tr>
                <tr>
                    <th>Sequencing of questions</th>
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe3', $schoolUserID)==1):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?></label></th>
                           
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe3', $schoolUserID)==2):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?></label></th>
                           
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe3', $schoolUserID)==3):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?></label></th>
                            
                </tr>
                <tr>
                    <th>Sequencing of questions</th>
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe4', $schoolUserID)==1):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?>
								 </label></th>
                           
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe4', $schoolUserID)==2):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?></label></th>
                          
                    <th><label class="radio-inline">
					<?php if(getFiled('Q8Fe4', $schoolUserID)==3):
								 echo "1";
								 else:
								 echo "0";
								 endif;
								 ?></label></th>
                            
                </tr>
            </tbody></table>
        </div>
       <div class="form-group">
         <label><span class="cube">7</span> Would your school like to recommend any topic/s that you strongly feel should be added or deleted in the audit? </label>
		 <p> <?php echo (getFiled('Q1Fe7', $schoolUserID)!="")? (getFiled('Q1Fe7', $schoolUserID)=="Y")? "Yes" : "No" : "N/A"; ?></p>
           
       </div>
        <div class="form-group hide" id="Question7a">
           <label><span class="cube">7(a)</span> If your answer is yes, please share your suggestions: </label>
           <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group">
            <label><span class="cube">8</span> Could you finish all the tasks in given period of time (August?October)?
            </label>
			<p> <?php echo (getFiled('Q1Fe7', $schoolUserID)!="")? (getFiled('Q1Fe7', $schoolUserID)=="Y")? "Yes" : "No" : "N/A"; ?></p>
           
        </div>
        <div class="form-group">
            <label><span class="cube">9</span> How many times did you contact the Green Schools Programme Team for guidance and counseling? </label><br/>
				<?php 
							  if(getFiled('Q1Fe9', $schoolUserID)==1):
								 echo "Never";
								 elseif(getFiled('Q1Fe9', $schoolUserID)==2):
								 echo "Once";
								 elseif(getFiled('Q1Fe9', $schoolUserID)==3):
								 echo " Twice";
								  elseif(getFiled('Q1Fe9', $schoolUserID)==4):
								 echo "More than twice";
							 endif;
?>
           
        </div>
        <div class="form-group">
         <label><span class="cube">10</span> Water being the focus of this year, did you find the questionnaire in Water section helpful to make schools understand how to become water efficient? </label>
		 <p> <?php echo (getFiled('Q1Fe10', $schoolUserID)!="")? (getFiled('Q1Fe10', $schoolUserID)=="Y")? "Yes" : "No" : "N/A"; ?></p>
       </div>
        <div class="form-group hide" id="Question10a">
          <label><span class="cube">10(a)</span> If your answer is no, please share your suggestions </label>
          <input type="text" name="" id="" class="form-control">
        </div>
        <div class="form-group">
         <label><span class="cube">11</span> Did your students enjoy doing Water activities?</label>
		 <p> <?php echo (getFiled('Q1Fe11', $schoolUserID)!="")? (getFiled('Q1Fe11', $schoolUserID)=="Y")? "Yes" : "No" : "N/A"; ?></p>
       </div>
        <div class="form-group hide" id="Question11a">
            <label><span class="cube">11(a)</span> If your answer is yes, why did they enjoy doing outdoor activities?
            </label>
			<?php echo (getFiled('Q1Fe12', $schoolUserID) != "") ? getFiled('Q1Fe12', $schoolUserID) : "N/A"; ?>
            
        </div>
        <div class="form-group hide" id="Question11b">
           <label><span class="cube">11(a)</span>If your answer is no, please state why? </label>
		   <?php echo (getFiled('Q1Fe12', $schoolUserID) != "") ? getFiled('Q1Fe12', $schoolUserID) : "N/A"; ?>
           
        </div>
        <div class="form-group">
            <label>
                <h6>Checklist of uploaded documents</h6>
            </label>
            <p>Please confirm that you have uploaded the following documents related to their respective sections:</p>
			
			<?php 
							 if(getFiled('Q17Fe1', $schoolUserID)==1):
							 echo "PUC certificates of not more than five buses";
							 echo "<br/>";
							 endif;  
							 if(getFiled('Q17Fe2', $schoolUserID)==1):
							 echo "Picture of Air Quality Monitoring equipment of school";
							 echo "<br/>" ;
							 endif; 
							 if(getFiled('Q17Fe3', $schoolUserID)==1):
							 echo "Fuel Bills";
							 echo "<br/>" ;
							 endif; 
							 if(getFiled('Q17Fe4', $schoolUserID)==1):
							 echo " Picture of School owned vehicles";
							 echo "<br/>" ;
							 endif;
							 
							 if(getFiled('Q17Fe5', $schoolUserID)==1):
							 echo "Electricity Bill";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe6', $schoolUserID)==1):
							 echo " Picture of 5 star appliances used by school";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe7', $schoolUserID)==1):
							 echo " Picture of Renewable sources of Energy";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe8', $schoolUserID)==1):
							 echo " Picture of Mid-day meal being served";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe9', $schoolUserID)==1):
							 echo "Photographs of lunch boxes";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe10', $schoolUserID)==1):
							 echo "Picture of Canteen selling UPPF";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe11', $schoolUserID)==1):
							 echo "Traditional food items sold in canteen";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe12', $schoolUserID)==1):
							 echo "Pictures of Events sponsored by UPPF companies";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe13', $schoolUserID)==1):
							 echo "Pictures of Green Cover";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe14', $schoolUserID)==1):
							 echo "Pictures of landscaped area";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe15', $schoolUserID)==1):
							 echo "Building construction plan";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe16', $schoolUserID)==1):
							 echo "Pictures of bio-pesticides";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe17', $schoolUserID)==1):
							 echo "Pictures of dustbins in classroom showing segregation at source";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe18', $schoolUserID)==1):
							 echo "Pictures of playground with more than two dustbins";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe19', $schoolUserID)==1):
							 echo "Picture of audit team weighing solid waste";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe20', $schoolUserID)==1):
							 echo "Picture of types of solid waste generated";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe21', $schoolUserID)==1):
							 echo "Pictures of recycling units - composting pit, paper recycling machine, selling paper to
                        kabadiwala, recyclers,etc";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe22', $schoolUserID)==1):
							 echo "Pictures of housekeeping staff disposing different types of solid waste";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe23', $schoolUserID)==1):
							 echo "Pictures of burning waste";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe24', $schoolUserID)==1):
							 echo "Pictures of Electronic items used by school and storage of non-working electronic items";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe25', $schoolUserID)==1):
							 echo "Certificate of disposing e-waste from authorised dealer/dismantler";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe26', $schoolUserID)==1):
							 echo "Waste Policy";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe27', $schoolUserID)==1):
							 echo "Pictures of various school initiatives e.g. rally, debate, street play, art competition,
                        etc";
							 echo "<br/>" ;
							 endif;
							 if(getFiled('Q17Fe28', $schoolUserID)==1):
							 echo "Pictures of respective audit teams doing survey";
							 echo "<br/>" ;
							 endif;
							 
?>  
  
        </div>
        <div class="form-group">
           <label>The GSP Awards 2017</label>
            <p> The GSP Awards acknowledge and reward schools that have adopted the most innovative and effective
                practices to manage the natural resources within their own premises. The Awards are given away at the
                GSP Awards ceremony, an annual event, where top performers from across the country are rewarded for
                environmental activities that made an impact in their respective schools.</p>
        </div>
        <div class="form-group">
            <ul class="list-inline">
                <li>
                    <label class="checkbox-inline">
					<?php if(getFiled('Q18Fe', $schoolUserID)==1):
								 echo " Please enter my school for Green School Awards.";
								 else:
								 echo "N/A";
								 endif;
								 ?>
                        
                </li>
            </ul>
        </div>

        <div class="navbar navbar-default" role="navigation">
            <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/waste/' . $id) ?>">PREVIOUS</a>

        </div>
        </form> </div>
</div>
<?php $this->load->view('admin/survey/footer'); ?>