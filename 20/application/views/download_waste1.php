<?php $this->load->view('WasteTrans/headerw'); ?>

<style>

span.frac {
  display: inline-block;
  text-align: center;
  vertical-align: middle;
}
span.frac > sup, span.frac > sub {
  display: block;
  font: inherit;
  padding: 0 0.3em;
}
span.frac > sup {border-bottom: 0.08em solid;}
span.frac > span {display: none;}

.error{
  color: #fb4f2a !important;
              font-size: 18px !important;
 text-shadow: 1px 1px 1px #000;
}

#Q10G1-error
{
  color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 133px;
    text-shadow: 1px 1px 1px #000;
}

#Q2S1-error
{
      color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 356px;
    text-shadow: 1px 1px 1px #000;
}

#Q1S1-error
{
      color: #fb4f2a !important;
    font-size: 18px !important;
    margin-top: -36px !important;
    position: absolute;
    margin-left: 457px;
    text-shadow: 1px 1px 1px #000;
}

</style>


<script type="text/javascript">
    window.onload = function () {
        Shadowbox.init();

    };
    var getCities = function () {
        var value = new Object();
        value.id = $('#country-select').val();
        var URL = "<?php echo base_url(); ?>";
        $.ajax({
            url: URL + 'ajax/citites',
            type: 'POST',
            data: value,
            success: function (html) {
                $('#city-select').html(html);
            }
        });
    };

function checkPincode(){
  var pincode=$("#pincode").val();
  if(pincode>6){
   alert("The pincode must contain 6 digits.");
  }else if(pincode<6){
   alert("The pincode must contain 6 digits.");  
 } 
} 


   
function checkUpdate(){
  alert("If you want to change the details, then please send a mail to support@greenschoolsprogramme.org, with your school name and new details: name, email id and mobile number.");
}
</script>

<div class="container">
  <div class="content-form">
    <div class="log-nav">
      <div class="welcome">Welcome <span
                        style="font-weight:bold">
                        <?php $user_id = $this->session->userdata('USER_ID'); 

                       $School_name = getSchoolNameBYUniqueId($user_id);
                       echo $School_name;
                        ?></span></div>
      <ul>
        <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onClick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
        <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
        <!-- <li>|</li> -->
        <!-- <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass"
                       href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li> -->
      </ul>
    </div>
    <!-- <div id="pprg" class="newprog progress" style="text-align:center">
      <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
    </div> -->
    <h1>Baseline</h1>
    <div class="intro">
        <p>The first step to efficient solid waste management (SWM) is to become aware of what we do - benchmarking how much waste we generate and how much is processed. It is only then that we can find more sustainable ways to manage waste.</p>
         <p>The Baseline section of GSP Waste Transformers motivates schools to find out the types of waste generated in previous years' audits and measure the actual volume. The Baseline will help schools chalk out their solid waste management plan better. The school's waste management programme has the potential to transform the school environment, and therefore, the objective is to create a plan for zero-waste zones in every school that can be implemented once schools reopen.  </p>
        <h4>For Baseline:</h4>
        <ul>
        <li>Choose your SWM Action Plan team. A teacher with interest in waste and five to 10 students from Grades 6 to 12 will be ideal for your team.</li>
        <li>With schools closed, the Administrative staff is important as they will provide the permissions required for the housekeeping and cleaning staff to help you with the plan. </li>
        <li>The details of the Action Plan team members will need to be provided in the last section 'The Team'.</li>        
        <li>As a team, study the latest baseline data in comparison to previous years, where applicable. </li>
        <li>Based on the study, design an Action Plan for SWM in school as per the questions asked in the next section. </li>
        <li>The section on Action Plan will open on 23 Dec 2020, and you will only be able to access it once you answer all the questions in the previous sections. </li>
        <li>As always, the Action Plan will be submitted online by the school.</li>
        </ul>
    </div>
      <div class="col-md-12">
        <?php 
          $schoolId=getSchoolId($this->session->userdata('USER_ID')); 
      $wasteSection=downloadWasteSectionQuestions($schoolId); 
     ?>
        <table class="table table-bordered display" style="margin-top: 40px;">
          <tr>
            <td>Audit Year</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->audit_year)?$wasteSection[$i]->audit_year:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>1. School segregates solid waste</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->school_segregated_solid_waste)?$wasteSection[$i]->school_segregated_solid_waste:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>2. Composting facility</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->composting_facility)?$wasteSection[$i]->composting_facility:"NA"; ?></td>
            <?php } ?>
          </tr>          
          <tr>
            <td>3. Total biodegradable waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_biodegradable_waste_generated)?$wasteSection[$i]->total_biodegradable_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>4. Total Dry/recyclable waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_dry_recyclable_waste_generated)?$wasteSection[$i]->total_dry_recyclable_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>5. Total Domestic waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_domestic_waste_generated)?$wasteSection[$i]->total_domestic_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>6. E-waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->e_waste_generated)?$wasteSection[$i]->e_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>7. Biomedical waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->biomedical_waste_generated)?$wasteSection[$i]->biomedical_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>8. Sanitary Waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->sanitary_waste_generated)?$wasteSection[$i]->sanitary_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>9. C&D waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->cd_waste_generated)?$wasteSection[$i]->cd_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>10. Total biodegradable waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_biodegradable_waste_recycled)?$wasteSection[$i]->total_biodegradable_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>11. Total Dry/recyclable waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_dry_recyclable_waste_recycled)?$wasteSection[$i]->total_dry_recyclable_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
      <tr>
            <td>12. Total Domestic waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_domestic_waste_recycled)?$wasteSection[$i]->total_domestic_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
      <tr>
            <td>13. E-waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->e_waste_recycled)?$wasteSection[$i]->e_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
      <tr>
            <td>14. Biomedical waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->biomedical_waste_recycled)?$wasteSection[$i]->biomedical_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
      <tr>
            <td>15. Sanitary Waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->sanitary_waste_recycled)?$wasteSection[$i]->sanitary_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
     <tr>
            <td>16. C&D waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->cd_waste_recycled)?$wasteSection[$i]->cd_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
    <tr>
            <td> 17. Does your school reuse textbooks?</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->reuse_textbooks)?$wasteSection[$i]->reuse_textbooks:"NA"; ?></td>
            <?php } ?>
          </tr>
  <tr>
            <td>18. Ewaste disposal?</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->what_is_the_final_destination_for_waste_from_your)?$wasteSection[$i]->what_is_the_final_destination_for_waste_from_your:"NA"; ?></td>
            <?php } ?>
          </tr>

    <tr>
            <td>19. Does your school burn waste?</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->does_your_school_burn_waste)?$wasteSection[$i]->does_your_school_burn_waste:"NA"; ?></td>
            <?php } ?>
          </tr>
        </table>
        <?php echo form_open('Baseline/set',array('id'=>'baseline-form')); ?>
        <div  class= "col-md-12">
        
        <div class="clearfix">&nbsp;</div>
      <div class=" form-group">
      <label>Per capita waste generation in school <a class="tt" data-tooltip="Calculate your per capita using data from the last submitted audit. The answer entered should only contain numerals. For the total population, please refer to Q4(a) under 'General' questions."><span class="badge">?</span></a> </label>
        <p>Please calculate your per capita waste generation:&nbsp;<span class="frac"><sup>Total amount of waste (add points 3 to 9)</sup><span>&frasl;</span><sub>Total Population</sub></span>.</p>
        <input class="form-control" id="Q1B1" type="text" name="Q1B1"
                               placeholder="<?php if (isset($data['Q1B1'])) echo $data['Q1B1'] ?>" 
                               value="<?php echo set_value('Q1B1'); ?>"/>
         </div>
         <div class="text-center">
        <button type="button" class="org-btn" id="btnBaselinePrevious">Previous</button>
        <button type="submit" id="movenextbtn" value="movenext" accesskey="n"
                                class="submit button">Next </button>
        <button type="button" class="submit button" id="baselinesave">Save and Resume Later</button>
      </div>
      <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>

  
    
<?php $this->load->view('footer'); ?>




<script type="text/javascript">
    $("#school-form").submit(function (event) {
        var value = $('#principal').val();
        if (value == '') {
            alert('Please enter Principal Name!');
            event.preventDefault();
        } else if ($('#cordinatorname').val() == '') {
            alert('Please enter Cordinator Name!');
            event.preventDefault();
        }

    });


  /**This Function Used For Save & Logout**/
$('#schoolresume').on('click', function (data) {
            var fd = $('#baseline-form').serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('school/schoolAnswer') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('logout'); ?>";
                }
            });
        });
</script>
<style type="text/css">
       header .top-bnr {
    position: absolute;
    top: 11px;
    right: 0;
    transition: all 0.3s ease-out;
   }
   .table tr:nth-child(1)  td{background:#24a5a0!important; color:#FFFFFF;}
   .table tr:nth-child(1){background:#24a5a0!important; color:#FFFFFF; width:550px;}
   .table tr td:nth-child(1){background:#505050; color:#FFFFFF; width:550px;}
  </style>
<script>
            $(document).ready(function () {
                $('#btnBaselinePrevious').on('click', function (data) {
                    var fd = $('#baseline-form').serialize();
                    //console.log(fd);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('previous/generalajax') ?>',
                        data: fd,
                        success: function (data)
                        {
              
                             window.location.href = "<?php echo base_url('Wt'); ?>";
                            
                            
                        }
                    });
                });
        
        /**This Code Used For Submit from previous button **/
        
        
                $('#baselinesave').on('click', function (data) {
                    var fd = $('#baseline-form').serialize();
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('previous/generalajax') ?>',
                        data: fd,
                        success: function (data)
                        {
                            window.location.href = "<?php echo base_url('logout'); ?>";
                        }
                    });
                });

                
    

            
            
            jQuery(document).ready(function(){
                
                jQuery('#baseline-form').validate({
                    rules:{
                      Q1B1:{
                            required:true,
                            number:true,
                        }

                        
                    }
                
                });
              });
                jQuery('#baseline-form').submit(function(e){
                    
                    
                    $r=jQuery('#baseline-form').valid();
                    if($r == false)
                    {
                        e.preventDefault();
                        jQuery('#baseline-form').valid();
                    }
                    
                    
                });
              });    
        </script>
