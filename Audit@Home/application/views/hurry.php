<?php $this->load->view('header'); ?>

<?php $this->load->view('nav'); ?>

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
                <?php echo form_open('Energy/set', array('id'=>'energy')); ?>
                    <div class="controls">
                        <div class="row">

                          

                            <div class="col-md-12">
                                <p>Hello there! What's all the hurry?</br>
It looks like you have some household practices that you may want to observe first and then answer the questions. The 'submit' button will become active on 17 November 2020. We hope that you will diligently observe your household practices till then and submit the accurate answers. All the best!</p>
                            </div>

                            <!-- <div class="col-md-12"> <a href="">Login</a> </div>
                            <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Next"> </div>
                             -->

                        
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

<!-- <script>

$(document).ready(function () {
        $('#btnAirPrevious').on('click', function (data) {
            var fd = $('#energy').serialize();
            //console.log(fd);
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url('previous/airprevious') ?>',
                data: fd,
                success: function (data) {
                    window.location.href = "<?php echo base_url('air'); ?>";
                }
            });
        });
    });
</script> -->