<?php $this->load->view('header'); ?>
<div class="container">
    <div class="content-form">
        <div class="log-nav">
            <div class="welcome">Welcome, <span style="font-weight:bold"><?php echo $this->session->userdata('USERNAME'); ?></span></div>
            <ul>
                <li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onclick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>
                <li><a href="/audit2016/upload/templates/tfr_responsive/regist.php">Logout</a></li>
                <li>|</li>
<li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass" href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li>
                  </ul>
        </div>
        <div id="pprg" class="newprog progress" style="text-align:center">
            <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width:40%; height: 35px;">40%</div>
        </div>
     <div class="intro">
        <h1>LAND</h1>
         <div class="video"> <a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><img src="http://greenschoolsprogramme.org/audit2015/upload/templates/tfr_responsive/images/video-icon.png" style="width: 45px; height: 40px; margin-top:47px;"></a></div>  
</div>
        <p class="lead"> The GSP audit helps the school community draw up a roadmap for sustainable use of its land.<br>
            The unit of measurement to be used in the Land section is Square Meter (m2). </p>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-12"> <?php echo form_open('land/set'); ?>
                    <div class="form-group">
                        <label>Task 1: Choose your Land Audit Team</label>
                        <br>
                        Your school gardener is certainly the best person to be a part of your audit team. Just like all other teams, five to 10 of your committed and interested schoolmates would make a strong team. </div>
                    <div class="form-group">
            <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
            <div class="form-group row">
              <div class="col-xs-1"> </div>
              <div class="col-xs-3">
                <label >First Name</label>
              </div>
              <div class="col-xs-3">
                <label >Last Name</label>
              </div>
              
              <div class="col-xs-3">
                <label >Email ID</label>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-1"> 1 </div>
              <div class="col-xs-3">
                <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L1S1" type="text" name="Q1L1S1" placeholder="<?php if(isset($data['Q1L1S1'])) echo $data['Q1L1S1']; ?>" value="<?php echo set_value('Q1L1S1'); ?>"/>
              </div>
              <div class="col-xs-3">
                <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L1S1" type="text" name="Q1L1S3" placeholder="<?php if(isset($data['Q1L1S3'])) echo $data['Q1L1S3']; ?>" value="<?php echo set_value('Q1L1S3'); ?>"/>
              </div>
              
              <div class="col-xs-3">
                <?php echo form_error('email'); ?>
                <input class="form-control space-textbox" id="Q1L1S1" type="email"  name="Q1L1S2" placeholder="<?php if(isset($data['Q1L1S2'])) echo $data['Q1L1S2']; ?>" value="<?php echo set_value('Q1L1S2'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-1"> 2 </div>
              <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L1" type="text"  name="Q1L2S1" placeholder="<?php if(isset($data['Q1L2S1'])) echo $data['Q1L2S1'] ?>" value="<?php echo set_value('Q1L2S1'); ?>"/>
              </div>
              <div class="col-xs-3">
                <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L2S1" type="text" name="Q1L2S3" placeholder="<?php if(isset($data['Q1L2S3'])) echo $data['Q1L2S3']; ?>" value="<?php echo set_value('Q1L2S3'); ?>"/>
              </div>
              
              <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L1" type="email"  name="Q1L2S2" placeholder="<?php if(isset($data['Q1L2S2'])) echo $data['Q1L2S2'] ?>" value="<?php echo set_value('Q1L2S2'); ?>"/>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-xs-1"> 3 </div>
              <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L1" type="text"  name="Q1L3S1" placeholder="<?php if(isset($data['Q1L3S1'])) echo $data['Q1L3S1'] ?>" value="<?php echo set_value('Q1L3S1'); ?>"/>
              </div>
              <div class="col-xs-3">
                <?php echo form_error('name'); ?>
                <input class="form-control space-textbox" id="Q1L3S1" type="text" name="Q1L3S3" placeholder="<?php if(isset($data['Q1L3S3'])) echo $data['Q1L3S3']; ?>" value="<?php echo set_value('Q1L3S3'); ?>"/>
              </div>
              
              <div class="col-xs-3">
                <input class="form-control space-textbox" id="Q1L1" type="email"  name="Q1L3S2" placeholder="<?php if(isset($data['Q1L3S2'])) echo $data['Q1L3S2'] ?>" value="<?php echo set_value('Q1L3S2'); ?>"/>
              </div>
            </div>
            <div class="form-group">
              <label  class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
              <div class="form-group row">
                <div class="col-xs-1"> </div>
                <div class="col-xs-3">
                  <label >First Name</label>
                </div>
                <div class="col-xs-3">
                  <label >Last Name</label>
                </div>
                
                <div class="col-xs-3">
                  <label >Email ID</label>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-xs-1"> 1 </div>
                <div class="col-xs-3">
                 <?php echo form_error('name1'); ?>
                 <input class="form-control space-textbox" type="text"  name="Q2L1S1" placeholder="<?php if(isset($data['Q2L1S1'])) echo $data['Q2L1S1'] ?>" value="<?php echo set_value('Q2L1S1'); ?>"/>
               </div>
               <div class="col-xs-3">
                 <input class="form-control space-textbox" type="text"  name="Q2L1S3" placeholder="<?php if(isset($data['Q2L1S3'])) echo $data['Q2L1S3'] ?>" value="<?php echo set_value('Q2L1S3'); ?>"/>
               </div>
               
               <div class="col-xs-3">
                 <?php echo form_error('email1'); ?>
                 <input class="form-control space-textbox" type="email"  name="Q2L1S2" placeholder="<?php if(isset($data['Q2L1S2'])) echo $data['Q2L1S2'] ?>" value="<?php echo set_value('Q2L1S2'); ?>"/>
               </div>
             </div>
             <div class="form-group row">
              <div class="col-xs-1"> 2 </div>
              <div class="col-xs-3">
                <input class="form-control space-textbox" type="text"  name="Q2L2S1" placeholder="<?php if(isset($data['Q2L2S1'])) echo $data['Q2L2S1'] ?>" value="<?php echo set_value('Q2L2S1'); ?>"/>
              </div>
              <div class="col-xs-3">
               <input class="form-control space-textbox" type="text"  name="Q2L2S3" placeholder="<?php if(isset($data['Q2L2S3'])) echo $data['Q2L2S3'] ?>" value="<?php echo set_value('Q2L2S3'); ?>"/>
             </div>

             <div class="col-xs-3">
              <input class="form-control space-textbox" type="email"  name="Q2L2S2" placeholder="<?php if(isset($data['Q2L2S2'])) echo $data['Q2L2S2'] ?>" value="<?php echo set_value('Q2L2S2'); ?>"/>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-xs-1"> 3 </div>
            <div class="col-xs-3">
              <input class="form-control space-textbox" type="text"  name="Q2L3S1" placeholder="<?php if(isset($data['Q2L3S1'])) echo $data['Q2L3S1'] ?>" value="<?php echo set_value('Q2L3S1'); ?>"/>
            </div>
            <div class="col-xs-3">
             <input class="form-control space-textbox" type="text"  name="Q2L3S3" placeholder="<?php if(isset($data['Q2L3S3'])) echo $data['Q2L3S3'] ?>" value="<?php echo set_value('Q2L3S3'); ?>"/>
           </div>

           <div class="col-xs-3">
            <input class="form-control space-textbox" type="email"  name="Q2L3S2" placeholder="<?php if(isset($data['Q2L3S2'])) echo $data['Q2L3S2'] ?>" value="<?php echo set_value('Q2L3S2'); ?>"/>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-xs-1"> 4 </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" type="text"  name="Q2L4S1" placeholder="<?php if(isset($data['Q2L4S1'])) echo $data['Q2L4S1']; ?>" value="<?php echo set_value('Q2L4S1'); ?>"/>
          </div>
          <div class="col-xs-3">
           <input class="form-control space-textbox" type="text"  name="Q2L4S3" placeholder="<?php if(isset($data['Q2L4S3'])) echo $data['Q2L4S3'] ?>" value="<?php echo set_value('Q2L4S3'); ?>"/>
         </div>

         <div class="col-xs-3">
          <input class="form-control space-textbox" type="email"  name="Q2L4S2" placeholder="<?php if(isset($data['Q2L4S2'])) echo $data['Q2L4S2']; ?>" value="<?php echo set_value('Q2L4S2'); ?>"/>
        </div>;
      </div>
      <div class="form-group row">
        <div class="col-xs-1"> 5 </div>
        <div class="col-xs-3">
          <input class="form-control space-textbox" type="text"  name="Q2L5S1" placeholder="<?php if(isset($data['Q2L5S1'])) echo $data['Q2L5S1'] ?>" value="<?php echo set_value('Q2L5S1'); ?>"/>
        </div>
        <div class="col-xs-3">
         <input class="form-control space-textbox" type="text"  name="Q2L5S3" placeholder="<?php if(isset($data['Q2L5S3'])) echo $data['Q2L5S3'] ?>" value="<?php echo set_value('Q2L5S3'); ?>"/>
       </div>

       <div class="col-xs-3">
        <input class="form-control space-textbox" type="email"  name="Q2L5S2" placeholder="<?php if(isset($data['Q2L5S2'])) echo $data['Q2L5S2'] ?>" value="<?php echo set_value('Q2L5S2'); ?>"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <label  class="control-label">Students (maximum of ten students can be part of the team):</label>
    <div class="form-group row">
      <div class="col-xs-1"> </div>
      <div class="col-xs-3">
        <label >First Name</label>
      </div>
      <div class="col-xs-3">
        <label >Last Name</label>
      </div>
      <div class="col-xs-3">
        <label >Grade</label>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-xs-1"> 1 </div>
      <div class="col-xs-3">
       <?php echo form_error('name2'); ?>
       <input class="form-control space-textbox" id="ex1" type="text"  name="Q3L1S1" placeholder="<?php if(isset($data['Q3L1S1'])) echo $data['Q3L1S1'] ?>"  value="<?php echo set_value('Q3L1S1'); ?>"/>
     </div>
     <div class="col-xs-3">
       <?php echo form_error('email2'); ?>
       <input class="form-control space-textbox" id="ex2" type="text"  name="Q3L1S2" placeholder="<?php if(isset($data['Q3L1S2'])) echo $data['Q3L1S2'] ?>" value="<?php echo set_value('Q3L1S2'); ?>"/>
     </div>
     <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text"  name="Q3L1S3" placeholder="<?php if(isset($data['Q3L1S3'])) echo $data['Q3L1S3'] ?>" value="<?php echo set_value('Q3L1S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 2 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text"  name="Q3L2S1" placeholder="<?php if(isset($data['Q3L2S1'])) echo $data['Q3L2S1'] ?>" value="<?php echo set_value('Q3L2S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text"  name="Q3L2S2" placeholder="<?php if(isset($data['Q3L2S2'])) echo $data['Q3L2S2'] ?>" value="<?php echo set_value('Q3L2S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text"  name="Q3L2S3" placeholder="<?php if(isset($data['Q3L2S3'])) echo $data['Q3L2S3'] ?>" value="<?php echo set_value('Q3L2S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 3 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text"  name="Q3L3S1" placeholder="<?php if(isset($data['Q3L3S1'])) echo $data['Q3L3S1'] ?>" value="<?php echo set_value('Q3L3S3'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text"  name="Q3L3S2" placeholder="<?php if(isset($data['Q3L3S2'])) echo $data['Q3L3S2'] ?>" value="<?php echo set_value('Q3L3S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text"  name="Q3L3S3" placeholder="<?php if(isset($data['Q3L3S3'])) echo $data['Q3L3S3'] ?>" value="<?php echo set_value('Q3L3S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 4 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text"  name="Q3L4S1" placeholder="<?php if(isset($data['Q3L4S1'])) echo $data['Q3L4S1'] ?>" value="<?php echo set_value('Q3L4S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text"  name="Q3L4S2" placeholder="<?php if(isset($data['Q3L4S2'])) echo $data['Q3L4S2'] ?>" value="<?php echo set_value('Q3L4S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text"  name="Q3L4S3" placeholder="<?php if(isset($data['Q3L4S3'])) echo $data['Q3L4S3'] ?>" value="<?php echo set_value('Q3L4S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 5 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3L5S1" placeholder="<?php if(isset($data['Q3L5S1'])) echo $data['Q3L5S1'] ?>" value="<?php echo set_value('Q3L5S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3L5S2" placeholder="<?php if(isset($data['Q3L5S2'])) echo $data['Q2L5S2'] ?>" value="<?php echo set_value('Q3L5S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3L5S3" placeholder="<?php if(isset($data['Q3L5S3'])) echo $data['Q3L5S3'] ?>" value="<?php echo set_value('Q3L5S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 6 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3L6S1" placeholder="<?php if(isset($data['Q3L6S1'])) echo $data['Q3L6S1'] ?>" value="<?php echo set_value('Q3L6S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3L6S2" placeholder="<?php if(isset($data['Q3L6S2'])) echo $data['Q3L6S2'] ?>" value="<?php echo set_value('Q3L6S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3L6S3" placeholder="<?php if(isset($data['Q3L6S3'])) echo $data['Q3L6S3'] ?>" value="<?php echo set_value('Q3L6S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 7 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3L7S1" placeholder="<?php if(isset($data['Q3L7S1'])) echo $data['Q3L7S1'] ?>" value="<?php echo set_value('Q3L7S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3L7S2" placeholder="<?php if(isset($data['Q3L7S2'])) echo $data['Q3L7S2'] ?>" value="<?php echo set_value('Q3L7S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3L7S3" placeholder="<?php if(isset($data['Q3L7S3'])) echo $data['Q3L7S3'] ?>" value="<?php echo set_value('Q3L7S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 8 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3L8S1" placeholder="<?php if(isset($data['Q3L8S1'])) echo $data['Q3L8S1'] ?>" value="<?php echo set_value('Q3L8S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3L8S2" placeholder="<?php if(isset($data['Q3L8S2'])) echo $data['Q3L8S2'] ?>" value="<?php echo set_value('Q3L8S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3L8S3" placeholder="<?php if(isset($data['Q3L8S3'])) echo $data['Q3L8S3'] ?>" value="<?php echo set_value('Q3L8S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 9 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3L9S1" placeholder="<?php if(isset($data['Q3L9S1'])) echo $data['Q3L9S1'] ?>" value="<?php echo set_value('Q3L9S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3L9S2" placeholder="<?php if(isset($data['Q3L9S2'])) echo $data['Q3L9S2'] ?>" value="<?php echo set_value('Q3L9S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3L9S3" placeholder="<?php if(isset($data['Q3L9S3'])) echo $data['Q3L9S3'] ?>" value="<?php echo set_value('Q3L9S3'); ?>"/>
    </div>
  </div>
  <div class="form-group row">
    <div class="col-xs-1"> 10 </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex1" type="text" name="Q3L10S1" placeholder="<?php if(isset($data['Q3L10S1'])) echo $data['Q3L10S1'] ?>" value="<?php echo set_value('Q3L10S1'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex2" type="text" name="Q3L10S2" placeholder="<?php if(isset($data['Q3L10S2'])) echo $data['Q3L10S2'] ?>" value="<?php echo set_value('Q3L10S2'); ?>"/>
    </div>
    <div class="col-xs-3">
      <input class="form-control space-textbox" id="ex3" type="text" name="Q3L10S3" placeholder="<?php if(isset($data['Q3L10S3'])) echo $data['Q3L10S3'] ?>" value="<?php echo set_value('Q3L10S3'); ?>"/>
    </div>
  </div>
</div>
                    <div class="form-group">
                        <label>Task 2: Measure the four critical areas of your school campus</label>
                        <br>
                        <label>To find out the land/ site area of your school, you need to measure:</label>
                        <br>
                        Ground coverage area<br>
                        Open Area (on-ground) <br>
                        Service Area (on-ground) <br>
                        Service Parking <br>
                        <label>1. Site area in square meter: </label>
                        Site area refers to the area or exact plot of ground on which anything is, has been, or is to be located. ‘Plot’ means a piece of land enclosed by definite boundaries. <br>
                        <label>2. Ground Coverage Area </label>
                        will include all permanent structure buildings, such as administration block, auditorium, school building, etc. Does not include floors. <br>
                        <label> 3. Green cover or green, landscaped area on-ground: </label>
                        this includes areas covered by grass, trees, lawn or horticulture, flower beds, grasscrete paver tiles, etc. <br>
                        <label>4. Surface parking area: </label>
                        refers to any parking lots directly on land. <br>
                        <label>5. Play area that is paved/ concrete </label>
                        includes all outdoor playfields such as basketball court; skating rink; assembly ground; swimming pool, etc. <br>
                        <label>6. Play area covered by grass on ground </label>
                        includes tennis grass court, cricket/ football grounds etc. <br>
                        <label> 7. Service area on ground </label>
                        is any area on ground that is not a permanent structure, but dedicated to services such as cooling towers for air conditioning, generators, portable cabins for security guards, etc. <br>
                        <label>8. Roof and terrace area: </label>
                        A roof is the covering on the uppermost part of a building. A terrace is an outdoor, occupiable extension of a building above ground level. <br>
                        <label> 9. Green cover on terrace/ balconies</label>
                        includes terrace garden, but not potted plants. <br>
                        <label>10. Total built up/ constructed area</label>
                        refers to the total areas of all floors of the building, including ground floors of built-up spaces, which include classrooms, labs, staff rooms, office area, auditoria, corridors, as well as balconies and terraces, multiplied by the number of floors. <br>
                        <label> Others </label>
                        will include paved paths, and other open area that your school has, but not covered in the above list. <br>
                        <label>To collect data: </label>
                        The total constructed area can be sourced from the building construction plan of the school, which will be available in the school office. Or else, measure the constructed spaces and use the formula for calculating the areas of various shapes, such as a square or rectangle, to derive the data and add them all. <br>
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label"><span class="cube">1</span> Identify the types of areas in your school?

                            Types of areas</label>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex1">Types of Area</label>
                            </div>
                            <div class="col-xs-5">
                                <label for="ex2"> Numbers</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">No of Playgrounds</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L1" placeholder="<?php if (isset($data['Q4L1'])) echo $data['Q4L1'] ?>" value="<?php echo set_value('Q4L1'); ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">No of Kachcha (unpaved) playgrounds with grass</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L2" placeholder="<?php if (isset($data['Q4L2'])) echo $data['Q4L2'] ?>" value="<?php echo set_value('Q4L2'); ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">No of Kachcha (unpaved) playgrounds with grass</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L3" placeholder="<?php if (isset($data['Q4L3'])) echo $data['Q4L3'] ?>" value="<?php echo set_value('Q4L3'); ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">No of Pucca (paved) playgrounds</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L4" placeholder="<?php if (isset($data['Q4L4'])) echo $data['Q4L4'] ?>" value="<?php echo set_value('Q4L4'); ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">No of constructed buildings - Academic</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L5" placeholder="<?php if (isset($data['Q4L5'])) echo $data['Q4L5'] ?>" value="<?php echo set_value('Q4L5'); ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">No of constructed buildings – Official</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L6" placeholder="<?php if (isset($data['Q4L6'])) echo $data['Q4L6'] ?>" value="<?php echo set_value('Q4L6'); ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">No of floors</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L7" placeholder="<?php if (isset($data['Q4L7'])) echo $data['Q4L7'] ?>" value="<?php echo set_value('Q4L7'); ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">Rooftop/Terrace Gardens</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L8" placeholder="<?php if (isset($data['Q4L8'])) echo $data['Q4L8'] ?>" value="<?php echo set_value('Q4L8'); ?>"/>
                            </div>
                        </div>
                        <!--            <div class="form-group row">
                                      <div class="col-xs-3">
                                        <label for="ex3">Green cover on exposed roof & terrace</label>
                                      </div>
                                      <div class="col-xs-5">
                                        <input class="form-control space-textbox" id="ex2" type="number" name="Q4L9" placeholder="<?php if (isset($data['Q4L9'])) echo $data['Q4L9'] ?>" value="<?php echo set_value('Q4L9'); ?>"/>
                                      </div>
                                    </div>-->
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">Total built up/constructed area</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L10" placeholder="<?php if (isset($data['Q4L10'])) echo $data['Q4L10'] ?>" value="<?php echo set_value('Q4L10'); ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">Total no. of floors</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L11" placeholder="<?php if (isset($data['Q4L11'])) echo $data['Q4L11'] ?>" value="<?php echo set_value('Q4L11'); ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xs-3">
                                <label for="ex3">Others</label>
                            </div>
                            <div class="col-xs-5">
                                <input class="form-control space-textbox space-textbox" id="ex2" type="number" name="Q4L12" placeholder="<?php if (isset($data['Q4L12'])) echo $data['Q4L12'] ?>" value="<?php echo set_value('Q4L12'); ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Task 3: Lxplore the number of species of plants and animals in your school</label>
                        This task will help you to understand the number and variety of plants and animals that your school campus supports. Identify and count the various species of plants and animals in your school.<br>
                        <br>
                        <label>To collect data:</label>
                        <br>
                        <br>
                        Make two teams of students. One for plant species and the other for animal species. Get the school gardener and the teacher to accompany them. Count plant species and animal species that are visible to the naked eye.<br>
                        <br>
                        <!--            Native (definition): a species that occurs naturally within a region, either evolving there or arriving and becoming established without human assistance<br>-->
                        <br>
                        <!--            Exotic (definition): An exotic plant or animal, which is invasive, is a species that meets the following conditions:<br>-->
                        <br>
                        <!--            1. Originate outside the local area.<br>
                                    2. Have the potential to spread long distances on its own.<br>
                                    3. Once established, have the potential to out-compete native species in the wild.<br>-->
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label"><span class="cube">2</span>How many types of plants are there in your school?</label>
                        <div class="row">
                            <div class="form-group row">
                                <div class="col-xs-3">
                                    <label></label>
                                </div>
                                <div class="col-xs-3">
                                    <label>Flowering</label>
                                </div>
                                <div class="col-xs-3">
                                    <label>Fruting</label>
                                </div>
                                <div class="col-xs-3">
                                    <label>Total</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-xs-3">
                                    <label> Plants</label>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L1S1" type="number" name="Q5L1S1" placeholder="<?php if (isset($data['Q5L1S1'])) echo $data['Q5L1S1'] ?>" value="<?php echo set_value('Q5L1S1'); ?>"/>
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L1S2" type="number" name="Q5L1S2" placeholder="<?php if (isset($data['Q5L1S2'])) echo $data['Q5L1S2'] ?>" value="<?php echo set_value('Q5L1S2'); ?>" />
                                </div>
                                <div class="col-xs-3">
                                    <input class="form-control space-textbox"  id="Q5L1S3" type="number" name="Q5L1S3" placeholder="<?php if (isset($data['Q5L1S3'])) echo $data['Q5L1S3'] ?>" value="<?php echo set_value('Q5L1S3'); ?>" readonly/>
                                </div>
                            </div>
                            <!--              <div class="form-group row">
                                            <div class="col-xs-3">
                                              <label>Animals</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S1" type="number" name="Q5L2S1" placeholder="<?php if (isset($data['Q5L2S1'])) echo $data['Q5L2S1'] ?>" value="<?php echo set_value('Q5L2S1'); ?>"/>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S2" type="number" name="Q5L2S2" placeholder="<?php if (isset($data['Q5L2S2'])) echo $data['Q5L2S2'] ?>" value="<?php echo set_value('Q5L2S2'); ?>"/>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" id="Q5L2S3" type="number" name="Q5L2S3" placeholder="<?php if (isset($data['Q5L2S3'])) echo $data['Q5L2S3'] ?>" value="<?php echo set_value('Q5L2S3'); ?>" readonly/>
                                            </div>
                                          </div>-->
                        </div>
                        <label for="username" class="control-label"><span class="cube">3</span>How many types of animals and birds are there in your school?</label>
                        <div class="row">
                            <div class="form-group row">
                                <div class="col-xs-3">
                                    <label></label>
                                </div>
                                <div class="col-xs-3">
                                    <label>Birds</label>
                                </div>
                                <div class="col-xs-3">
                                    <label>Animal</label>
                                </div>
                                <div class="col-xs-3">
                                    <label>Total</label>
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="col-xs-3">
                              <label>Plants</label>
                            </div>
                            <div class="col-xs-3">
                              <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S1" type="number" name="Q5L2S1" placeholder="<?php if (isset($data['Q5L2S1'])) echo $data['Q5L2S1'] ?>" value="<?php echo set_value('Q5L2S1'); ?>"/>
                            </div>
                            <div class="col-xs-3">
                              <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S2" type="number" name="Q5L2S2" placeholder="<?php if (isset($data['Q5L2S2'])) echo $data['Q5L2S2'] ?>" value="<?php echo set_value('Q5L2S2'); ?>"/>
                            </div>
                            <div class="col-xs-3">
                              <input class="form-control space-textbox" id="Q5L2S3" type="number" name="Q5L2S3" placeholder="<?php if (isset($data['Q5L2S3'])) echo $data['Q5L2S3'] ?>" value="<?php echo set_value('Q5L2S3'); ?>" readonly/>
                            </div>
                          </div>
                            <!--              <div class="form-group row">
                                            <div class="col-xs-3">
                                              <label>Animals</label>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S1" type="number" name="Q5L2S1" placeholder="<?php if (isset($data['Q5L2S1'])) echo $data['Q5L2S1'] ?>" value="<?php echo set_value('Q5L2S1'); ?>"/>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" onkeyup="computeAnimal()" id="Q5L2S2" type="number" name="Q5L2S2" placeholder="<?php if (isset($data['Q5L2S2'])) echo $data['Q5L2S2'] ?>" value="<?php echo set_value('Q5L2S2'); ?>"/>
                                            </div>
                                            <div class="col-xs-3">
                                              <input class="form-control space-textbox" id="Q5L2S3" type="number" name="Q5L2S3" placeholder="<?php if (isset($data['Q5L2S3'])) echo $data['Q5L2S3'] ?>" value="<?php echo set_value('Q5L2S3'); ?>" readonly/>
                                            </div>
                                          </div>-->
                        </div>
                        <div class="form-group">
                            <label> Task 4: Find out if your school uses pesticides </label>
                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label"><span class="cube">4</span>Do you use chemical-based pesticides in your school green cover?</label>
                            <div class="">
                                <label class="radio-inline">
                                    <input type="radio" name="Q6L1" value="<?php echo set_value('Q6L1', 'Y') ?>" <?php if (isset($data['Q6L1'])) echo $data['Q6L1'] == 'Y' ? "checked" : "" ?>>
                                    Yes </label>
                                <label class="radio-inline">
                                    <input type="radio" name="Q6L1" value="<?php echo set_value('Q6L1', 'N') ?>" <?php if (isset($data['Q6L1'])) echo $data['Q6L1'] == 'N' ? "checked" : "" ?>>
                                    No </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Upload supporting documents</label>
                            <br>
                            Please upload the following supporting documents:<br>
                            <br>
                            * Pictures of green cover<br>
                            * Pictures of landscaped area<br>
                            * Building construction plan<br>
                            Uploaded files must be in one of the following formats: PDF Document (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File size per document should not exceed 500 KB. </div>
                        <button class="btn uploadbtn upload" data-id="Green Cover" data-toggle="modal" data-target="#airModal" type="button">UPLOAD FILES</button>  <br>
			<div class="text-center">
                            <button type="button" id="moveprevbtn" value="moveprev" name="moveprev" accesskey="p" class="submit button">Previous</button>
                            <button type="submit" id="movenextbtn" value="movenext" name="movenext" accesskey="n" class="submit button">Next</button>
                            <button type="button" value="Submit" class="org-btn" id=""landsave>Save and Resume Later</button>
                        </div>
                        <?php echo form_close(); ?> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<?php $this->load->view('footer'); ?>
<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background:transparent; border-radius:0px;">
      <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">View video tutorial</h4>
      </div>
<iframe width="100%" height="330px" id="video"  src="https://www.youtube.com/embed/todM6wToHHQ" frameborder="0" allowfullscreen></iframe>
	  
    </div>
  </div>
</div>
<script type="text/javascript">
 $('.close').click(function(){
    $('#video').attr("src","https://www.youtube.com/embed/9r3Lwrd9BUs");
 });

 $(document).ready(function () {
     $('#landprevious').on('click', function (data) {
         var fd = $('#land').serialize();
         //console.log(fd);
         $.ajax({
             type: 'POST',
             url: '<?php echo base_url('previous/landajax') ?>',
             data: fd,
             success: function (data)
             {
                 window.location.href = "<?php echo base_url('food'); ?>";
             }
         });
     });
     $('#landsave').on('click', function (data) {
         var fd = $('#land').serialize();
         //console.log(fd);
         $.ajax({
             type: 'POST',
             url: '<?php echo base_url('previous/landajax') ?>',
             data: fd,
             success: function (data)
             {
                 window.location.href = "<?php echo base_url('logout'); ?>";
             }
         });
     });
 });
</script>
