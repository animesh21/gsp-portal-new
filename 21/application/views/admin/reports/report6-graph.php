<h1>E-WASTE DISPOSAL REPORT</h1>
<div class="container"> <?php echo form_open('admin/reports/seteWasteDisposalReport',array('id'=>'eWasteDisposalReport')); ?>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <label for="pwd">Select State :</label>
      <?php echo form_dropdown('state', $states, $this->input->post('state'), array('class' => 'form-control', 'id' => 'country-select')); ?></div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="show" onclick="return Validate()">
    </div>
    <?php echo form_close(); ?></div>
<div class="wrapper">
  <div id="container"> </div>
  <div id="container2"> </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/data.js"></script>
<script src="<?php echo base_url(); ?>assets/js/exporting.js"></script>



<script type="text/javascript">
    Highcharts.chart('container',{
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: '<?php echo getStateById($state_id); ?> - All Schools e-Waste Disposal Report'
        },
        tooltip: {
            pointFormat: '<b>{point.percentage:.1f}%</b>'
        },
                exporting: { enabled: false },
            credits: {enabled: false},
            colors: ['#4E7FBB','#BE4F4C','#99B958','#7E63A0','#4AAAC4'],
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}<br/>{point.percentage:.1f}%</b>'
                },
				showInLegend: true
            }
        },
        series: [{
            type: 'pie',
            name: '',
            data: [
                ['Scrap Dealer', <?php echo $scrapdealer_count; ?>],
                ['Back to vendor', <?php echo $btvendor_count; ?>],
                ['Authorized Dealer', <?php echo $authorized_dealer_count; ?>],
                ['Authorized Dismantler', <?php echo $authorized_dismentler_count; ?>],
                ['Others', <?php echo $others_count; ?>]
            ]
        }]
    });
		</script>
