<h1>WASTE GENERATION REPORT</h1>
<div class="container"> <?php echo form_open('admin/reports/setWasteGenerationReport',array('id'=>'eWasteDisposalReport')); ?>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <label for="pwd">Select First State :</label>
      <?php echo form_dropdown('state', $states, $this->input->post('state'), array('class' => 'form-control', 'id' => 'country-select')); ?></div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><br/>
      <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="show" onclick="return Validate()">
    </div>
    <?php echo form_close(); ?></div>
<div class="wrapper">
  <div id="container"> </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/data.js"></script>
<script src="<?php echo base_url(); ?>assets/js/exporting.js"></script>
<script type="text/javascript">
    Highcharts.chart('container',{
        chart: {
            type: 'column'
        },
        title: {
            text: '<?php echo getStateById($state_id); ?> Waste Generation Report'
        },
        xAxis: {
            categories: [
                'Combined',
                'Day Scholar',
                'Day Boarding',
                'Residential'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Kilograms'
            }
        },
        exporting: { enabled: false },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Possible Generation',
            data: <?php echo "212"; ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Actual Generation',
            data: <?php echo "210"; ?> //South

        }, {
            name: 'Recycled',
            data: <?php echo "320"; ?> //East

        }, {
            name: 'Decomposed',
            data: <?php echo "420"; ?> //East

        }		
		],
});
</script>
