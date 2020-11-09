<?php $this->load->view('header'); ?>

<?php $this->load->view('nav'); ?>

<div class="container"><div class=" text-center mt-5 ">
      
<br/>

<div class="progress" style="height: 35px;">
<div class="progress-bar bg-success" role="progressbar" style="width: 45%; font-size: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">45%</div>
</div>

<br/> <br/>

  </div>

<div class="row ">
<div class="col-lg-10 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">
            <div class="container">
                <?php echo form_open('Feedback/set', array('id'=>'feedback')); ?>
                    <div class="controls">
                        <div class="row">

                             <div class="col-md-12">
                                 <h2>Final Score</h2>
                                <div class="form-group"> <label>My final score is: *</label> <input type="number" id="fiscore" name="fiscore" class="form-control" placeholder="Final score" value="<?php if (isset($records['fiscore'])) echo $records['fiscore'];?>"> </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                  
                                    <p style="font-size:20px;">The future is here!</p>

                                    <div style="margin-right:19px;">
                                    <img src="assets/img/feedback.png" alt="AQI" style="margin-right:10px;">
                                    </div>

                                </div>


                            </div>

                            <div class="col-md-6"> <input type="button" id="btnAirPrevious" class="btn btn-success btn-send pt-2 btn-block " value="Previous"> </div>
                            <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Submit"> </div>
                            

                        
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
            var fd = $('#feedback').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/airprevious') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('waste'); ?>";
                }
            });
        });
    });
</script>