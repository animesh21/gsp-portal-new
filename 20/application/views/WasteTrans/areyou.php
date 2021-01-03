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
      <div class="welcome"> <span
                        style="font-weight:bold">
                        <?php $user_id = $this->session->userdata('USER_ID'); 

                       $School_name = getSchoolNameBYUniqueId($user_id);
                       echo $School_name;
                        ?></span></div>
      <ul>
        <!--<li><a href="http://www.greenschoolsprogramme.org/GSP-Audit2016-Questions.pdf" target="_blank" onClick="_gaq.push([\" _trackevent\",\"download\",\"pdf\",this.href])"=""><img src="http://www.greenschoolsprogramme.org/audit2016/images/pdf-icon16.png"> Audit Questionnaire</a> |</li>-->
        <!-- <li>|</li> -->
        <!-- <li><a class="lptext" title="Change Password Form" data-toggle="modal" data-target="#ChangePass"
                       href="#ChangePass" rel="shadowbox;width=580;height=500;">Change Password</a></li> -->
      </ul>
    </div>
    <!-- <div id="pprg" class="newprog progress" style="text-align:center">
      <div id="samplt" class="fin-prog progress-bar" role="progressbar" style="width: <?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?>; height: 35px;"><?php echo progressBarValue($this->session->userdata('USER_ID')).'%'; ?></div>
    </div> -->
    <h1 style="text-align:center;">Submit</h1>
    <div class="intro">

    </div>
    <?php echo form_open('Areyou/set', array('id' => 'are-form')); ?>
    <div style= "margin-top:2%;"></div>
    <div class="form-group">
                            <div class="col-md-12">
                                <p style="font-size:20px;text-align:center; ">Thank you for submitting the action plan for GSP Waste Transformers. Please write to support@greenschoolsprogramme.org for any further queries.
                                </p>
                            </div>
      
        </div>
      
            
    <div class="text-center">
    <!-- <button type="button" class="org-btn" id="areplanp">Previous</button>

      <button type="submit" class="org-btn" id="teamnext" value="movenext">Submit</button> -->
     <!-- <input type="button" class="org-btn submit button" value="Save and Resume Later" id="teamresume" style="border:none;" /> -->
    </div> 
    <?php echo form_close(); ?> </div>
</div>
<?php $this->load->view('footer'); ?>

<script>

                $(document).ready(function () {
                $('#areplanp').on('click', function (data) {
                    var fd = $('#are-form').serialize();
                    //console.log(fd);
                    $.ajax({
                        type: 'POST',
                        url: '<?php echo base_url('previous/generalajax') ?>',
                        data: fd,
                        success: function (data)
                        {
              
                             window.location.href = "<?php echo base_url('Theteam'); ?>";
                            
                            
                        }
                    });
                });
                });
    jQuery(document).ready(function(){
    
    
    
    
    jQuery('#are-form').submit(function(e){
        
        
        $r=jQuery('#are-form').valid();
        if($r == false)
        {
               e.preventDefault();
               jQuery('#are-form').valid();
        }
        
        
    });
    });



    /**This Function Used For Save & Logout**/
        $('#teamresume').on('click', function (data) {
            var fd = $('#are-form').serialize();
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('actionp/set') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('logout'); ?>";
                }
            });
        });
         //delete air files
        
</script>