<h1>PARTICIPATION BY STATE</h1>
<div class="container"> <?php echo form_open('admin/reports/setParticipationByState',array('id'=>'participationByState')); ?>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
    <label for="pwd">Select First State :</label>
    <?php echo form_dropdown('state1', $states, $this->input->post('state1'), array('class' => 'form-control', 'id' => 'country-select')); ?></div>
  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><br/>
    <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="compare" onclick="return Validate()">
  </div>
  <?php echo form_close();?> </div>
<div class="wrapper">
  <div id="container"> </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
         Highcharts.chart('container',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for <?php echo getStateById($state_id1); ?>'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
						 format: '{point.name}<br/><b> {point.y} Schools</b>',						  
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Registered for Audit', y: <?php echo $registerd_audit_1; ?>}, {name: 'Audit Not Started', y: <?php echo $total_notstarted_audit_1; ?>},{name: 'Audit Started', y: <?php echo $total_started_audit_1; ?>}, {name: 'Audit Completed', y: <?php echo $completed_1; ?>}]
            }]
        });
		</script>
