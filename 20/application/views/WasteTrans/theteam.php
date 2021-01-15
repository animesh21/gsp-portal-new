<?php $this->load->view('WasteTrans/headerw'); ?>

<style>

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
    <h1>The Team</h1>
    <div class="intro">
      <p>Please provide the details of the SWM Action Plan team. A teacher with interest in waste and five to 10 students from Grades 6 to 12 will be ideal for your team. With schools closed, the Administrative staff is important as they will provide the permissions required for the housekeeping and cleaning staff to help you with the plan.</p>
      <p>Please enter the details below carefully as the same will be printed on the digital certificates. </p>
    </div>
    <?php echo form_open('Theteam/set', array('id' => 'team-form')); ?>
    <div style= "margin-top:2%;"></div>
    <div class="form-group">
      <label class="control-label">GSP Coordinator:</label>
      <div class="form-group1 row">
        <div class="col-xs-1"></div>
        <div class="col-xs-3">
          <label>First Name</label>
        </div>
        <div class="col-xs-3">
          <label>Last Name</label>
        </div>
        <div class="col-xs-3">
          <label>Email ID</label>
        </div>
      </div>
      <div class="form-group1 row">
        <div class="col-xs-1"> 1</div>
        <div class="col-xs-3"> <?php echo form_error('name'); ?>
          <input class="form-control space-textbox" id="Q1A1S1" type="text" name="Q1A1S1"
                           placeholder="<?php if (isset($data['Q1A1S1'])) echo $data['Q1A1S1']; ?>"
                           value="<?php if (isset($data['Q1A1S1'])) echo $data['Q1A1S1']; ?>"/>
        </div>
        <div class="col-xs-3"> <?php echo form_error('name'); ?>
          <input class="form-control space-textbox" id="Q1A1S3" type="text" name="Q1A1S3"
                           placeholder="<?php if (isset($data['Q1A1S3'])) echo $data['Q1A1S3']; ?>"
                           value="<?php if (isset($data['Q1A1S3'])) echo $data['Q1A1S3']; ?>"/>
        </div>
        <div class="col-xs-3"> <?php echo form_error('email'); ?>
          <input class="form-control space-textbox" id="Q1A1S2" type="email" name="Q1A1S2"
                           placeholder="<?php if (isset($data['Q1A1S2'])) echo $data['Q1A1S2']; ?>"
                           value="<?php if (isset($data['Q1A1S2'])) echo $data['Q1A1S2']; ?>"/>
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label">Administrative staff (maximum of five staff can be part of the
        team):</label>
        <div class="form-group1 row">
          <div class="col-xs-1"></div>
          <div class="col-xs-3">
            <label>First Name</label>
          </div>
          <div class="col-xs-3">
            <label>Last Name</label>
          </div>
          <div class="col-xs-3">
            <label>Email ID</label>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 1</div>
          <div class="col-xs-3"> <?php echo form_error('name1'); ?>
            <input class="form-control space-textbox" id="Q2A1S1" type="text" name="Q2A1S1"
                               placeholder="<?php if (isset($data['Q2A1S1'])) echo $data['Q2A1S1'] ?>"
                               value="<?php if (isset($data['Q2A1S1'])) echo $data['Q2A1S1'] ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A1S3" type="text" name="Q2A1S3"
                               placeholder="<?php if (isset($data['Q2A1S3'])) echo $data['Q2A1S3'] ?>"
                               value="<?php if (isset($data['Q2A1S3'])) echo $data['Q2A1S3'] ?>"/>
          </div>
          <div class="col-xs-3"> <?php echo form_error('email1'); ?>
            <input class="form-control space-textbox" id="Q2A1S2" type="email" name="Q2A1S2"
                               placeholder="<?php if (isset($data['Q2A1S2'])) echo $data['Q2A1S2'] ?>"
                               value="<?php if (isset($data['Q2A1S2'])) echo $data['Q2A1S2'] ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 2</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A2S1" type="text" name="Q2A2S1"
                               placeholder="<?php if (isset($data['Q2A2S1'])) echo $data['Q2A2S1'] ?>"
                               value="<?php if (isset($data['Q2A2S1'])) echo $data['Q2A2S1'] ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A2S3" type="text" name="Q2A2S3"
                               placeholder="<?php if (isset($data['Q2A2S3'])) echo $data['Q2A2S3'] ?>"
                               value="<?php if (isset($data['Q2A2S3'])) echo $data['Q2A2S3'] ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A2S2" type="email" name="Q2A2S2"
                               placeholder="<?php if (isset($data['Q2A2S2'])) echo $data['Q2A2S2'] ?>"
                               value="<?php if (isset($data['Q2A2S2'])) echo $data['Q2A2S2'] ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 3</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A3S1" type="text" name="Q2A3S1"
                               placeholder="<?php if (isset($data['Q2A3S1'])) echo $data['Q2A3S1'] ?>"
                               value="<?php echo set_value('Q2A3S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A3S3" type="text" name="Q2A3S3"
                               placeholder="<?php if (isset($data['Q2A3S3'])) echo $data['Q2A3S3'] ?>"
                               value="<?php echo set_value('Q2A3S3'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A3S2" type="email" name="Q2A3S2"
                               placeholder="<?php if (isset($data['Q2A3S2'])) echo $data['Q2A3S2'] ?>"
                               value="<?php echo set_value('Q2A3S2'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 4</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A4S1" type="text" name="Q2A4S1"
                               placeholder="<?php if (isset($data['Q2A4S1'])) echo $data['Q2A4S1']; ?>"
                               value="<?php echo set_value('Q2A4S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A4S3" type="text" name="Q2A4S3"
                               placeholder="<?php if (isset($data['Q2A4S3'])) echo $data['Q2A4S3'] ?>"
                               value="<?php echo set_value('Q2A4S3'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A4S2" type="email" name="Q2A4S2"
                               placeholder="<?php if (isset($data['Q2A4S2'])) echo $data['Q2A4S2']; ?>"
                               value="<?php echo set_value('Q2A4S2'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 5</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A5S1" type="text" name="Q2A5S1"
                               placeholder="<?php if (isset($data['Q2A5S1'])) echo $data['Q2A5S1'] ?>"
                               value="<?php echo set_value('Q2A5S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A5S3" type="text" name="Q2A5S3"
                               placeholder="<?php if (isset($data['Q2A5S3'])) echo $data['Q2A5S3'] ?>"
                               value="<?php echo set_value('Q2A5S3'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q2A5S2" type="email" name="Q2A5S2"
                               placeholder="<?php if (isset($data['Q2A5S2'])) echo $data['Q2A5S2'] ?>"
                               value="<?php echo set_value('Q2A5S2'); ?>"/>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label">Students (maximum of ten students can be part of the team):</label>
        <div class="form-group1 row">
          <div class="col-xs-1"></div>
          <div class="col-xs-3">
            <label>First Name</label>
          </div>
          <div class="col-xs-3">
            <label>Last Name</label>
          </div>
          <div class="col-xs-3">
            <label>Grade</label>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 1</div>
          <div class="col-xs-3"> <?php echo form_error('name2'); ?>
            <input class="form-control space-textbox" id="Q3A1S1" type="text" name="Q3A1S1"
                               placeholder="<?php if (isset($data['Q3A1S1'])) echo $data['Q3A1S1'] ?>"
                               value="<?php if (isset($data['Q3A1S1'])) echo $data['Q3A1S1'] ?>"/>
          </div>
          <div class="col-xs-3"> <?php echo form_error('email2'); ?>
            <input class="form-control space-textbox" id="Q3A1S2" type="text" name="Q3A1S2"
                               placeholder="<?php if (isset($data['Q3A1S2'])) echo $data['Q3A1S2'] ?>"
                               value="<?php if (isset($data['Q3A1S2'])) echo $data['Q3A1S2'] ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A1S3" type="number" name="Q3A1S3"
                               placeholder="<?php if (isset($data['Q3A1S3'])) echo $data['Q3A1S3'] ?>"
                               value="<?php if (isset($data['Q3A1S3'])) echo $data['Q3A1S3'] ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 2</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A2S1" type="text" name="Q3A2S1"
                               placeholder="<?php if (isset($data['Q3A2S1'])) echo $data['Q3A2S1'] ?>"
                               value="<?php echo set_value('Q3A2S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A2S2" type="text" name="Q3A2S2"
                               placeholder="<?php if (isset($data['Q3A2S2'])) echo $data['Q3A2S2'] ?>"
                               value="<?php echo set_value('Q3A2S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A2S3" type="number" name="Q3A2S3"
                               placeholder="<?php if (isset($data['Q3A2S3'])) echo $data['Q3A2S3'] ?>"
                               value="<?php echo set_value('Q3A2S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 3</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A3S1" type="text" name="Q3A3S1"
                               placeholder="<?php if (isset($data['Q3A3S1'])) echo $data['Q3A3S1'] ?>"
                               value="<?php echo set_value('Q3A3S3'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A3S2" type="text" name="Q3A3S2"
                               placeholder="<?php if (isset($data['Q3A3S2'])) echo $data['Q3A3S2'] ?>"
                               value="<?php echo set_value('Q3A3S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A3S3" type="number" name="Q3A3S3"
                               placeholder="<?php if (isset($data['Q3A3S3'])) echo $data['Q3A3S3'] ?>"
                               value="<?php echo set_value('Q3A3S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 4</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A4S1" type="text" name="Q3A4S1"
                               placeholder="<?php if (isset($data['Q3A4S1'])) echo $data['Q3A4S1'] ?>"
                               value="<?php echo set_value('Q3A4S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A4S2" type="text" name="Q3A4S2"
                               placeholder="<?php if (isset($data['Q3A4S2'])) echo $data['Q3A4S2'] ?>"
                               value="<?php echo set_value('Q3A4S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A4S3" type="number" name="Q3A4S3"
                               placeholder="<?php if (isset($data['Q3A4S3'])) echo $data['Q3A4S3'] ?>"
                               value="<?php echo set_value('Q3A4S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 5</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A5S1" type="text" name="Q3A5S1"
                               placeholder="<?php if (isset($data['Q3A5S1'])) echo $data['Q3A5S1'] ?>"
                               value="<?php echo set_value('Q3A5S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A5S2" type="text" name="Q3A5S2"
                               placeholder="<?php if (isset($data['Q3A5S2'])) echo $data['Q3A5S2'] ?>"
                               value="<?php echo set_value('Q3A5S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A5S3" type="number" name="Q3A5S3"
                               placeholder="<?php if (isset($data['Q3A5S3'])) echo $data['Q3A5S3'] ?>"
                               value="<?php echo set_value('Q3A5S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 6</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A6S1" type="text" name="Q3A6S1"
                               placeholder="<?php if (isset($data['Q3A6S1'])) echo $data['Q3A6S1'] ?>"
                               value="<?php echo set_value('Q3A6S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A6S2" type="text" name="Q3A6S2"
                               placeholder="<?php if (isset($data['Q3A6S2'])) echo $data['Q3A6S2'] ?>"
                               value="<?php echo set_value('Q3A6S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A6S3" type="number" name="Q3A6S3"
                               placeholder="<?php if (isset($data['Q3A6S3'])) echo $data['Q3A6S3'] ?>"
                               value="<?php echo set_value('Q3A6S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 7</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A7S1" type="text" name="Q3A7S1"
                               placeholder="<?php if (isset($data['Q3A7S1'])) echo $data['Q3A7S1'] ?>"
                               value="<?php echo set_value('Q3A7S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A7S2" type="text" name="Q3A7S2"
                               placeholder="<?php if (isset($data['Q3A7S2'])) echo $data['Q3A7S2'] ?>"
                               value="<?php echo set_value('Q3A7S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A7S3" type="number" name="Q3A7S3"
                               placeholder="<?php if (isset($data['Q3A7S3'])) echo $data['Q3A7S3'] ?>"
                               value="<?php echo set_value('Q3A7S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 8</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A8S1" type="text" name="Q3A8S1"
                               placeholder="<?php if (isset($data['Q3A8S1'])) echo $data['Q3A8S1'] ?>"
                               value="<?php echo set_value('Q3A8S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A8S2" type="text" name="Q3A8S2"
                               placeholder="<?php if (isset($data['Q3A8S2'])) echo $data['Q3A8S2'] ?>"
                               value="<?php echo set_value('Q3A8S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A8S3" type="number" name="Q3A8S3"
                               placeholder="<?php if (isset($data['Q3A8S3'])) echo $data['Q3A8S3'] ?>"
                               value="<?php echo set_value('Q3A8S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 9</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A9S1" type="text" name="Q3A9S1"
                               placeholder="<?php if (isset($data['Q3A9S1'])) echo $data['Q3A9S1'] ?>"
                               value="<?php echo set_value('Q3A9S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A9S2" type="text" name="Q3A9S2"
                               placeholder="<?php if (isset($data['Q3A9S2'])) echo $data['Q3A9S2'] ?>"
                               value="<?php echo set_value('Q3A9S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A9S3" type="number" name="Q3A9S3"
                               placeholder="<?php if (isset($data['Q3A9S3'])) echo $data['Q3A9S3'] ?>"
                               value="<?php echo set_value('Q3A9S3'); ?>"/>
          </div>
        </div>
        <div class="form-group1 row">
          <div class="col-xs-1"> 10</div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A10S1" type="text" name="Q3A10S1"
                               placeholder="<?php if (isset($data['Q3A10S1'])) echo $data['Q3A10S1'] ?>"
                               value="<?php echo set_value('Q3A10S1'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A10S2" type="text" name="Q3A10S2"
                               placeholder="<?php if (isset($data['Q3A10S2'])) echo $data['Q3A10S2'] ?>"
                               value="<?php echo set_value('Q3A10S2'); ?>"/>
          </div>
          <div class="col-xs-3">
            <input class="form-control space-textbox" id="Q3A10S3" type="number" name="Q3A10S3"
                               placeholder="<?php if (isset($data['Q3A10S3'])) echo $data['Q3A10S3'] ?>"
                               value="<?php echo set_value('Q3A10S3'); ?>"/>
          </div>
        </div>
      </div>
   </div>
            
    <div class="text-center">
    <button type="button" class="org-btn" id="teamplanp">Previous</button>

      <button type="submit" class="org-btn" id="teamnext" value="movenext">Submit</button>
     <input type="button" class="org-btn submit button" value="Save and Resume Later" id="teamresume" style="border:none;" />
    </div> 
    <?php echo form_close(); ?> </div>
</div>
<?php $this->load->view('footer'); ?>

<script>

                $(document).ready(function () {
                $('#teamplanp').on('click', function (data) {
                    var fd = $('#team-form').serialize();
                    //console.log(fd);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('previous/generalajax') ?>',
                        data: fd,
                        success: function (data)
                        {
              
                             window.location.href = "<?php echo base_url('Actionp'); ?>";
                            
                            
                        }
                    });
                });
                });
    jQuery(document).ready(function(){
    
    jQuery('#team-form').validate({
        rules:{
            Q1A1S1:{
                  required:true,
              },
              Q1A1S3:{
                  required:true,
              },
              Q1A1S2:{
                  required:true,
              },
              Q2A1S1:{
                  required:true,
              },
              Q2A1S3:{
                  required:true,
              },
              Q2A1S2:{
                  required:true,
              },
              Q3A1S1:{
                  required:true,
              },
              Q3A1S2:{
                  required:true,
              },
              Q3A1S3:{
                  required:true,
              }

             
        }
       
    });
    
    
    jQuery('#team-form').submit(function(e){
        
        
        $r=jQuery('#team-form').valid();
        if($r == false)
        {
               e.preventDefault();
               jQuery('#team-form').valid();
        }
        
        
    });
    });



    /**This Function Used For Save & Logout**/
        $('#teamresume').on('click', function (data) {
            var fd = $('#team-form').serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('Theteam/set') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('logout'); ?>";
                }
            });
        });
         //delete air files
        
</script>