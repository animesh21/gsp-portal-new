<?php
session_start();
if($_SESSION['username'] == "")
{
    header('location:index.php');
}
include('config.php');
$token = $_REQUEST['stid'];
$sql_data = mysql_fetch_array(mysql_query("select * from `gsp_feedback` where `token` = '".$token."'"));
$sql_details = mysql_fetch_array(mysql_query("select `attribute_1` from `lime_tokens_266617` where `token` = '".$token."'"));
include('header.php');
?>
<main class="bdr" style='border: none;'>
  <div class="container">
    <div class="wrapper">
      <div class="top-area">
        <h2>Feedback Form of <?php echo $sql_details['attribute_1']; ?></h2>
      </div>
      <?php
      if($succes !="")
      {
          echo "<p class='bg-success' style='padding:10px;'>$succes</p>";
      }
      elseif($error !="")
      {
          echo "<p class='bg-danger' style='padding:10px;'>$error</p>"; 
      }
      ?>  
      <div class="content-form">
          <form name="subFe" method="post" id="subFe">
          <div class="form-group accept">
              <label for="exampleInputEmail1" id="questoin1"> <span class="cube">1</span>Has your school participated in the Green Schools Programme Environment Audit before?</label>
              <p class="formanswertext"><?php if($sql_data['question_1'] == 1) { echo "Yes"; } else { echo "No"; }  ?></p>
           <?php if($sql_data['question_1'] == 1){ ?>
            <div class="optionContainer">
            	<label for="exampleInputEmail1"> <span class="cube">1(a)</span>If yes, then in which year did your school first participate in the audit? </label>
                <p class="formanswertext"><?php echo $sql_data['question_1a']; ?></p>
            </div>
            <div class="optionContainer">
            	<label for="exampleInputEmail1"> <span class="cube">1(b)</span>If yes, how many times have you done the audit? </label>
                <p class="formanswertext"><?php echo $sql_data['question_1b']; ?></p>
            </div>
           <?php } ?>
          </div>
              
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">2</span>Have teachers from your school participated in teacher interactive workshop organized by the GSP team?</label>
            <p class="formanswertext"><?php if($sql_data['question_2'] == 1) { echo "Yes"; } else { echo "No"; }  ?></p>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">3</span>Did you find the online information relevant to your environmental education activities?</label>
            <p class="formanswertext"><?php if($sql_data['question_3'] == 1) { echo "Yes"; } else { echo "No"; }  ?></p>
           <?php if($sql_data['question_3'] == 0) { ?> 
            <div class="optionContainer">
            	<label for="exampleInputEmail1"> <span class="cube">3(a)</span>If no, then please share your suggestions </label>
                <p class="formanswertext"><?php echo $sql_data['question_3a']; ?></p>
            </div>
           <?php } ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">4</span>Was the Audit easy-to-understand and self-explanatory?</label>
            <p class="formanswertext"><?php if($sql_data['question_4'] == 1) { echo "Yes"; } else { echo "No"; }  ?></p>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">5</span>Did you understand the present format of the GSP?</label>
            <p class="formanswertext"><?php if($sql_data['question_5'] == 1) { echo "Yes"; } else { echo "No"; }  ?></p>
            <p class="note"><img src="../feedback/images/help.gif">(five years of programme with changing focus each year)</p>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">6</span>Do you think your school will be a Green School (resource efficient) by 2019?</label>
            <p class="formanswertext"><?php if($sql_data['question_6'] == 1) { echo "Yes"; } else { echo "No"; }  ?></p>
          <?php if($sql_data['question_6'] == 0){ ?>  
            <div class="optionContainer">
            	<label for="exampleInputEmail1"> <span class="cube">6(a)</span>If no, why?</label>
                <p class="formanswertext"><?php echo $sql_data['question_6a']; ?></p>
            </div>
          <?php }
          ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">7</span>What would be the help required to make your school a Green school?</label>
            <p class="formanswertext"><?php if($sql_data['question_7'] !="") { echo $sql_data['question_7']; } else { echo "No Answer"; } ?></p>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">8</span>How would you rate the overall design of the audit?</label>
            <table class="table table-responsive">
            	<thead>
                    <th width="40%">Audit</th>
                    <th width="20%">Good</th>
                    <th width="20%">Average</th>
                    <th width="20%">Bad</th>
                </thead>
                <tbody>
                	<tr>
                    	<td>Content</td>
                        <td>
                        	<?php if($sql_data['question_8a'] == 1) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                
                        </td>
                        <td>
                        	<?php if($sql_data['question_8a'] == 2) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                
                        </td>
                        <td>
                        	<?php if($sql_data['question_8a'] == 3) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                                       </td>
                    </tr>
                    <tr>
                    	<td>Distribution of time among tasks</td>
                        <td>
                        	<?php if($sql_data['question_8b'] == 1) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                
                        </td>
                        <td>
                        	<?php if($sql_data['question_8b'] == 2) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                
                        </td>
                        <td>
                        	<?php if($sql_data['question_8b'] == 3) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                                       </td>
                    </tr>
                    <tr>
                    	<td>Sequencing</td>
                        <td>
                        	<?php if($sql_data['question_8c'] == 1) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                
                        </td>
                        <td>
                        	<?php if($sql_data['question_8c'] == 2) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                
                        </td>
                        <td>
                        	<?php if($sql_data['question_8c'] == 3) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                                       </td>
                    </tr>
                    <tr>
                    	<td>Orientation for conducting tasks</td>
                        <td>
                        	<?php if($sql_data['question_8d'] == 1) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                
                        </td>
                        <td>
                        	<?php if($sql_data['question_8d'] == 2) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                
                        </td>
                        <td>
                        	<?php if($sql_data['question_8d'] == 3) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                                       </td>
                    </tr>
                    <tr>
                    	<td>Section of the manual</td>
                        <td>
                        	<?php if($sql_data['question_8e'] == 1) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                
                        </td>
                        <td>
                        	<?php if($sql_data['question_8e'] == 2) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                
                        </td>
                        <td>
                        	<?php if($sql_data['question_8e'] == 3) { ?>
                                <img src="images/1445961706_tick.png">
                                <?php }else{ ?>
                                <img src="images/1445961880_cross.png">
                                <?php } ?>
                                                       </td>
                    </tr>
                </tbody>
            </table>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">9</span>Would your school like to recommend any topic/s which you strongly feel should be added or deleted in the audit? </label>
            <p class="formanswertext"><?php if($sql_data['question_9'] == 1) { echo "Yes"; } else { echo "No"; }  ?></p>
           <?php if($sql_data['question_9'] == 1) { ?> 
            <div class="optionContainer">
            	<label for="exampleInputEmail1"> <span class="cube">9(a)</span>If yes, please share your suggestions</label>
                <p class="formanswertext"><?php echo $sql_data['question_9a'] ?><p>
            </div>
           <?php } ?>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">10</span>Could you finish all the tasks in given period of time (July-Oct)?</label>
            <p class="formanswertext"><?php if($sql_data['question_10'] == 1) { echo "Yes"; } else { echo "No"; }  ?></p>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">11</span>How many times did you contact the Green Schools Programme Team for guidance and counselling?</label>
            <p class="formanswertext"><?php if($sql_data['question_11'] == 1) { echo "Never"; } if($sql_data['question_11'] == 2) { echo "Once"; } if($sql_data['question_11'] == 3) { echo "Twise"; } if($sql_data['question_11'] == 4) { echo "More than twise"; } ?><p>
          </div>
              
          
         <div class="form-group">
              <label for="exampleInputEmail1" id="questoin12"><span class="cube">12</span> Do you have authorized parking area for all your school-owned vehicles in/around your school campus?</label>
            <p class="formanswertext"><?php if($sql_data['question_12'] == 1) { echo "Yes"; } else { echo "No"; }  ?></p>
            <?php if($sql_data['question_12'] == 0) {  ?>
            <div class="optionContainer form-group">
            	<label id="questoin12a" for="exampleInputEmail1"><span class="cube">12(a)</span> How many vehicles don't have parking area?</label>
                <p class="formanswertext"><?php echo $sql_data['question_12a'] ?><p>
            </div>
            <?php } ?>
          </div>    
              
           <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">13</span>Names and emails of all teachers who participated in the survey:</label>
            <p class="formanswertext"><?php echo $sql_data['teachers_data'] ?><p>
            
          </div>
              
              
          <div class="form-group">
            <label for="exampleInputEmail1"> <span class="cube">14</span>Names and emails of all students who participated in the survey:</label>
            <p class="formanswertext"><?php echo $sql_data['students_data'] ?><p>
            
          </div>    
             
              
              
<!--          <div class="form-group text-center">
              <button type="submit" class="btn submitBtn" name="feedback" onClick="return ValidateForm(this.form)" id="feedback">Submit</button>
          </div>-->
        </form>
      </div>
      
    </div>
  </div>
</main>
<footer>
  <div class="text-center">Copyright © 2015 Centre for Science and Environment</div>
</footer>
</body>
</html>
