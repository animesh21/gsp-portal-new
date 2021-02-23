<?php $this->load->view('header'); ?>

<?php $this->load->view('auditfeb/nav'); ?>

<div class="container"><div class=" text-center mt-5 ">
      
<br/>

<div class="progress" style="height: 35px;">
<div class="progress-bar bg-success" role="progressbar" style="width: 100%; font-size: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">100%</div>
</div>

<br/> <br/>

  </div>

<div class="row ">
<div class="col-lg-10 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">
            <div class="container">
                <?php echo form_open('End_audit/sub', array('id'=>'end-message')); ?>
                    <div class="controls">
                        <div class="row">

                          

                            <div class="col-md-12">
                                <p>Are you sure you want to submit the survey? You will not be able to change your answers after that.
                                </p>
                            </div>

                            <!-- <div class="col-md-12"> <a href="">Login</a> </div>
                            <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Next"> </div>
                             -->
                             <div class="col-md-6"> <input type="button" id="btnAirPrevious" class="btn btn-success btn-send pt-2 btn-block " value="No, I want to go back."> </div>
                            <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Yes, I am sure."> </div>
                            

                        
                       </div>
                    </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div> 
</div> 
</div>


<style type="text/css">
.col-md-12{
margin-bottom: 20px;
}

</style>

<script>

$(document).ready(function () {
        $('#btnAirPrevious').on('click', function (data) {
            var fd = $('#energy').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/airprevious') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('feb/Feedback'); ?>";
                }
            });
        });
    });
</script>