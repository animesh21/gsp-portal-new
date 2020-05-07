<h1>PERFORMANCE BY STATE</h1>
<div class="container"> <?php echo form_open('admin/reports/setPerformanceByState',array('id'=>'performanceByState')); ?>
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
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: '<?php echo getStateById($state_id); ?> Schools Performance'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools ({point.percentage:.1f}%)</b>'
            },
                    exporting: { enabled: false },
            credits: {enabled: false},
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                         enabled: true,
						 format: '{point.name}<br/><b>{point.y} Schools ({point.percentage:.1f}%)</b>',
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: '70% and above',color:'#00ae4f',y: <?php echo $performance_1; ?>}, {name: 'Between 50% to 69.9%',color:'#fcfc00',y: <?php echo $performance_2; ?>}, {name: 'Between 35% to 49.9%',color:'#fc9700',y: <?php echo $performance_3; ?>}, {name: 'Between 0% to 34.9%',color:'#fc3300',y: <?php echo $performance_4; ?>}]
            }]
        });
		</script>
