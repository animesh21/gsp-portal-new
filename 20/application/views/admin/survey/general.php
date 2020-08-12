<?php $this->load->view('admin/survey/header'); ?>

<div class="container">
    <div class="content-form">

        <!--close log-nav-->
<!--        <h1>General Questions <span class="school-name">KENDRIYA VIDYALAYA</span> </h1>-->
        <!--close progress-->
        <h1>General Questions </h1>
        <form>


            <div class="form-group">
                <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">1</span> How many levels does your school have?
      </span>
                </label>
                <p class="formanswertext">
                    Lowest level of grade:<?php echo getFiled('Q1G1',
                        $schoolUserID);
                    ?>         </p>
                <p>
                    Highest level of grade:<?php echo getFiled('Q1G2',
                        $schoolUserID);
                    ?> </p>
            </div>



            <div class="form-group">
                <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">2</span> Is your school single gender or mixed gender?
      </span>
                </label>
                <p class="formanswertext">
                    <?php $arrGender=array('1'=>'Only Boys', '2'=>'Only Girls', '3'=>'Mixed/Co-education'); ?>
                    <?php echo (getFiled('Q2G1', $schoolUserID)!="") ?
                    $arrGender[getFiled('Q2G1', $schoolUserID)
                    ] : ""; ?>
                </p>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">
      <span class="question-text">
      <span class="cube">3</span> Which board of education does the school follow?
      </span>
                </label>
                <p class="formanswertext">
                   <?php
                        if (getFiled('Q3G1', $schoolUserID) == 1):
                            echo " State board of education (please specify your state)";
                        elseif (getFiled('Q3G1', $schoolUserID) == 2):
                            echo " Central Board of Secondary Education ";
                        elseif (getFiled('Q3G1', $schoolUserID) == 3):
                            echo "Indian Certificate of Secondary Education";
                        elseif (getFiled('Q3G1', $schoolUserID) == 4):
                            echo "International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE)
                    combination";
                        elseif (getFiled('Q3G1', $schoolUserID) == 5):
                            echo "  Others";

                        endif;
                        ?>
                   
                </p>
            </div>




            <div class="form-group">
                <label for="exampleInputEmail1"> <span class="cube">4</span> Total permanent population of the school </label>
                <table summary="An array of sub-question on each cell. The sub-question text are in the table header and concerns line header. Each answers are a number. " class="question subquestions-list questions-list  numeric-item text-list  numberonly">
                    <colgroup class="col-responses">

                        <col width="20%" class="answertext">
                        <col width="20%" class="odd">
                        <col width="20%" class="even">
                        <col width="20%" class="odd">
                    </colgroup>

                    <thead>
                    <tr class="dontread">
                        <td>&nbsp;</td>
                        <th>Male</th>
                        <th>Female</th>
                        <th>Total</th>
                    </tr>
                    </thead>

                    <tbody>

                    <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ001">
                        <th width="20%" class="answertext">
                            Students
                            <input type="hidden" value="" id="java266617X32X33SQ001" name="java266617X32X33SQ001" class="form-control">
                        </th>
                        
                        <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="<?php  echo getFiled('Q4G1S1',
                                $schoolUserID); ?>"
                                   id="java266617X32X33SQ001_SQ001" name="java266617X32X33SQ001_SQ001" class="form-control">
                            <label for="answer266617X32X33SQ001_SQ001" class="hide read">Male</label>
                            <input type="text" value="<?php  echo getFiled('Q4G1S1',
                                $schoolUserID); ?>"  title="Male" size="5" id="answer266617X32X33SQ001_SQ001" name="266617X32X33SQ001_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="<?php  echo getFiled('Q4G1S2',
                                $schoolUserID); ?>" id="java266617X32X33SQ001_SQ002" name="java266617X32X33SQ001_SQ002" class="form-control">
                            <label for="answer266617X32X33SQ001_SQ002" class="hide read">Female</label>
                            <input type="text" value="<?php  echo getFiled('Q4G1S2',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Female" size="5" id="answer266617X32X33SQ001_SQ002" name="266617X32X33SQ001_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="<?php  echo getFiled('Q4G1S3',
                                $schoolUserID); ?>" id="java266617X32X33SQ001_SQ003" name="java266617X32X33SQ001_SQ003" class="form-control">
                            <label for="answer266617X32X33SQ001_SQ003" class="hide read">Total</label>
                            <input type="text" value="<?php  echo getFiled('Q4G1S3',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" id="answer266617X32X33SQ001_SQ003" name="266617X32X33SQ001_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                    </tr>


                    <tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ002">
                        <th width="20%" class="answertext">
                            Teachers
                            <input type="hidden" value="" id="java266617X32X33SQ002" name="java266617X32X33SQ002" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="<?php  echo getFiled('Q4G2S1',
                                $schoolUserID); ?>" id="java266617X32X33SQ002_SQ001" name="java266617X32X33SQ002_SQ001" class="form-control">
                            <label for="answer266617X32X33SQ002_SQ001" class="hide read">Male</label>
                            <input type="text" value="<?php  echo getFiled('Q4G2S1',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Male" size="5" id="answer266617X32X33SQ002_SQ001" name="266617X32X33SQ002_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="<?php  echo getFiled('Q4G2S2',
                                $schoolUserID); ?>" id="java266617X32X33SQ002_SQ002" name="java266617X32X33SQ002_SQ002" class="form-control">
                            <label for="answer266617X32X33SQ002_SQ002" class="hide read">Female</label>
                            <input type="text" value="<?php  echo getFiled('Q4G2S2',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Female" size="5" id="answer266617X32X33SQ002_SQ002" name="266617X32X33SQ002_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="<?php  echo getFiled('Q4G2S3',
                                $schoolUserID); ?>" id="java266617X32X33SQ002_SQ003" name="java266617X32X33SQ002_SQ003" class="form-control">
                            <label for="answer266617X32X33SQ002_SQ003" class="hide read">Total</label>
                            <input type="text" value="<?php  echo getFiled('Q4G2S3',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" id="answer266617X32X33SQ002_SQ003" name="266617X32X33SQ002_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                    </tr>


                    <tr class="array2 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ003">
                        <th width="20%" class="answertext">
                            Non-Teaching Staff
                            <input type="hidden" value="" id="java266617X32X33SQ003" name="java266617X32X33SQ003" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="<?php  echo getFiled('Q4G3S1',
                                $schoolUserID); ?>" id="java266617X32X33SQ003_SQ001" name="java266617X32X33SQ003_SQ001" class="form-control">
                            <label for="answer266617X32X33SQ003_SQ001" class="hide read">Male</label>
                            <input type="text" value="<?php  echo getFiled('Q4G3S1',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Male" size="5" id="answer266617X32X33SQ003_SQ001" name="266617X32X33SQ003_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="<?php  echo getFiled('Q4G3S2',
                                $schoolUserID); ?>" id="java266617X32X33SQ003_SQ002" name="java266617X32X33SQ003_SQ002" class="form-control">
                            <label for="answer266617X32X33SQ003_SQ002" class="hide read">Female</label>
                            <input type="text" value="<?php  echo getFiled('Q4G3S2',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Female" size="5" id="answer266617X32X33SQ003_SQ002" name="266617X32X33SQ003_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="<?php  echo getFiled('Q4G3S3',
                                $schoolUserID); ?>" id="java266617X32X33SQ003_SQ003" name="java266617X32X33SQ003_SQ003" class="form-control">
                            <label for="answer266617X32X33SQ003_SQ003" class="hide read">Total</label>
                            <input type="text" value="<?php  echo getFiled('Q4G3S3',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" id="answer266617X32X33SQ003_SQ003" name="266617X32X33SQ003_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                    </tr>


                    <tr class="array1 subquestions-list questions-list  numeric-item text-list" id="javatbd266617X32X33SQ004">
                        <th width="20%" class="answertext">
                            Total
                            <input type="hidden" value="" id="java266617X32X33SQ004" name="java266617X32X33SQ004" class="form-control">
                        </th>
                        <td class="answer_cell_00SQ001 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="484" id="java266617X32X33SQ004_SQ001" name="java266617X32X33SQ004_SQ001" class="form-control">
                            <label for="answer266617X32X33SQ004_SQ001" class="hide read">Male</label>
                            <input type="text" value="<?php  echo getFiled('Q4G4S1',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Male" size="5" id="answer266617X32X33SQ004_SQ001" name="266617X32X33SQ004_SQ001" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                        <td class="answer_cell_00SQ002 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="343" id="java266617X32X33SQ004_SQ002" name="java266617X32X33SQ004_SQ002" class="form-control">
                            <label for="answer266617X32X33SQ004_SQ002" class="hide read">Female</label>
                            <input type="text" value="<?php  echo getFiled('Q4G4S2',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Female" size="5" id="answer266617X32X33SQ004_SQ002" name="266617X32X33SQ004_SQ002" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                        <td class="answer_cell_00SQ003 question-item answer-item  numeric-item text-item  numberonly">
                            <input type="hidden" value="827" id="java266617X32X33SQ004_SQ003" name="java266617X32X33SQ004_SQ003" class="form-control">
                            <label for="answer266617X32X33SQ004_SQ003" class="hide read">Total</label>
                            <input type="text" value="<?php  echo getFiled('Q4G4S3',
                                $schoolUserID); ?>" onkeyup="fixnum_checkconditions(this.value, this.name, this.type)" title="Total" size="5" id="answer266617X32X33SQ004_SQ003" name="266617X32X33SQ004_SQ003" class="multiflexitext text  em_sq_validation good form-control" readonly="">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>



            <div class="form-group">
                <label for="exampleInputEmail1"> <span class="cube">4(b)</span>How many visitors visit your school</label>
                <p class="formanswertext"><?php echo (getFiled('Q5G1', $schoolUserID)
                        !='') ? getFiled('Q5G1', $schoolUserID): "";
                    ?></p>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1"> <span class="cube">5</span>  What is the total number of working days of your school in a year?</label>
                <p class="formanswertext"><?php echo (getFiled('Q6G1', $schoolUserID)
                        !='') ? getFiled('Q6G1', $schoolUserID): "";
                    ?></p>
            </div>

           <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">6</span> Please select the month(s) in which the GSP audit was carried out? </label>
        <p class="formanswertext"> 
		    <?php 
              if(getFiled('Q7G1', $schoolUserID)==1){
              echo "Jan".",";
              }
              if(getFiled('Q7G2', $schoolUserID)==2)
              {
              echo  "Feb".",";
              }
              if(getFiled('Q7G3', $schoolUserID)==3)
              {
              echo  "Mar".",";
              }
              if(getFiled('Q7G4', $schoolUserID)==4)
              {
              echo "April".",";
              }
              if(getFiled('Q7G5', $schoolUserID)==5)
              {
              echo "May".",";
              }
			  if(getFiled('Q7G6', $schoolUserID)==6)
              {
              echo "June".",";
              }
			  if(getFiled('Q7G7', $schoolUserID)==7)
              {
              echo "July".",";
              }
			  if(getFiled('Q7G8', $schoolUserID)==8)
              {
              echo "Aug".",";
              }
			  if(getFiled('Q7G9', $schoolUserID)==9)
              {
              echo "Sept".",";
              }
			  if(getFiled('Q7G10', $schoolUserID)==10)
              {
              echo "Oct".",";
              }
			  if(getFiled('Q7G11', $schoolUserID)==11)
              {
              echo "Nov".",";
              }
			  if(getFiled('Q7G12', $schoolUserID)==12)
              {
              echo "Dec.",",";
              }
          ?> </p>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">7</span> Where is the school located?</label>
        <?php //echo $schoolUserID; ?>
        <p class="formanswertext">
          <?php
             if(getFiled('Q8G1', $schoolUserID)==1){
              echo "Urban Area";
              }
              if(getFiled('Q8G1', $schoolUserID)==2)
              {
              echo "Rural Area";
              }
              ?> </p>
      </div>
	  <div class="form-group">
        <label for="exampleInputEmail1"> <span class="cube">8</span> What type is your school?</label>
        <p class="formanswertext">
          <?php
             if(getFiled('Q9G1', $schoolUserID)==1){
              echo "Government School";
              }
              if(getFiled('Q9G1', $schoolUserID)==2)
              {
              echo "Government – Aided School";
              }
			  if(getFiled('Q9G1', $schoolUserID)==3)
              {
              echo "Private School";
              }
              ?> </p>
      </div>

            <center>
                <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/response/'.$id) ?>">PREVIOUS</a>
                <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/air/'.$id) ?>">NEXT</a>

            </center>

        </form>



    </div>
    <!--close content-form-->
</div>
