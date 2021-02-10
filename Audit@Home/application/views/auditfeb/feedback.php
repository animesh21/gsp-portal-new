<?php $this->load->view('header'); ?>

<?php $this->load->view('auditfeb/nav'); ?>

<div class="container"><div class=" text-center mt-5 ">
      
<br/>

<div class="progress" style="height: 35px;">
<div class="progress-bar bg-success" role="progressbar" style="width: 90%; font-size: 20px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">90%</div>
</div>

<br/> <br/>

  </div>

<div class="row ">
<div class="col-lg-10 mx-auto">
    <div class="card mt-2 mx-auto p-4 bg-light">
        <div class="card-body bg-light">
            <div class="container">
                <?php echo form_open('feb/Feedback/set', array('id'=>'feedback')); ?>
                    <div class="controls">
                        <div class="row">

                             <!-- <div class="col-md-12">
                                 <h2>Final Score</h2>
                                <div class="form-group"> <label>My final score is: *</label> 
                                <p style="font-size:12px;">Add your scores from all the sections and enter here. </p>
                                <input type="number" id="fiscore" name="fiscore" class="form-control" placeholder="Final score" value="<?php if (isset($records['fiscore'])) echo $records['fiscore'];?>"> </div>
                            </div> -->
                            <div class="col-md-12">
                            <div class="form-group">
                            <h1>FINAL SUBMISSION</h1>
                                <p>Now that we know how impactful our environmental practices at home can be, let us adopt a few greener ones. So which practices will you choose?</p>

                            </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                  
                                    <!-- <p style="font-size:20px;">Now that we know how impactful our environmental practices at home can be, let us
                                    adopt a few greener ones. So which practices will you choose?</p> -->

                                    <div style="background-image: url('<?php echo base_url(); ?>assets/img/Picture3.png'); height:580px; width:100%;  background-repeat: no-repeat;background-size: cover;">
                                        <div style="margin-left: 17%;">
                                            <div class="form-group" style="background-color: lightgray;width: 80%;">
                                            <label class="radio">
                                            <input type="checkbox" name="Q1FF1"
                                                                value="<?php echo set_value('Q1FF1', 1); ?>" <?php if (isset($data['Q1FF1'])) echo "checked" ?>>
                                                                Segregating different types of waste </label>
                                            </div>
                                            </br>
                                            <div class="form-group" style="background-color: lightgray;width: 80%;">
                                            <label class="radio">
                                            <input type="checkbox" name="Q1FF2"
                                                                value="<?php echo set_value('Q1FF2', 2); ?>" <?php if (isset($data['Q1FF2'])) echo "checked" ?>>
                                                                Composting wet waste at home </label>
                                            </div>
                                            </br>
                                            <div class="form-group" style="background-color: lightgray;width: 80%;">
                                            <label class="radio">
                                            <input type="checkbox" name="Q1FF3"
                                                                value="<?php echo set_value('Q1FF3', 3); ?>" <?php if (isset($data['Q1FF3'])) echo "checked" ?>>
                                                                Giving electronic waste to authorised collector  </label>
                                            </div>
                                            </br>
                                            <div class="form-group" style="background-color: lightgray;width: 80%;">
                                            <label class="radio">
                                            <input type="checkbox" name="Q1FF4"
                                                                value="<?php echo set_value('Q1FF4', 4); ?>" <?php if (isset($data['Q1FF4'])) echo "checked" ?>>
                                                                Not burning waste at any cost  </label>
                                            </div>
                                            </br>
                                            <div class="form-group" style="background-color: lightgray;width: 80%;">
                                            <label class="radio">
                                            <input type="checkbox" name="Q1FF5"
                                                                value="<?php echo set_value('Q1FF5', 5); ?>" <?php if (isset($data['Q1FF5'])) echo "checked" ?>>
                                                                Minimising food wastage  </label>
                                            </div>
                                            </br>
                                            <div class="form-group" style="background-color: lightgray;width: 80%;">
                                            <label class="radio">
                                            <input type="checkbox" name="Q1FF6"
                                                                value="<?php echo set_value('Q1FF6', 6); ?>" <?php if (isset($data['Q1FF6'])) echo "checked" ?>>
                                                                Upcycling and reusing things to reduce waste </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>


                            </div>

                            <div class="col-md-6"> <input type="button" id="btnAirPrevious" class="btn btn-success btn-send pt-2 btn-block " value="Previous"> </div>
                            <div class="col-md-6"> <input type="button" onclick="myFunction()"class="btn btn-success btn-send pt-2 btn-block " value="Submit"> </div>

                            <!-- <div class="col-md-6"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Next"> </div> -->
                            

                        
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
                    window.location.href = "<?php echo base_url('feb/Wastem'); ?>";
                }
            });
        });
    });
</script>

<script>
function myFunction() {
  alert("Hello there! What's the hurry?\nIt looks like you have some household practices that you may want to observe first and then answer the questions. The 'submit' button will become active on 18 February 2021. We hope that you will diligently observe your household practices till then and submit accurate answers. As your answers have been saved, you can log out and submit anytime after 18 February, 2021. \nAll the best!");
}
</script>