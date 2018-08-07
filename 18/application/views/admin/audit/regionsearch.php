<div class="top-area">
<h2>REGISTRATION BY STATE  <a href="<?php echo base_url('admin/audit_started/excel_region/'.$region) ?>"><button class="exportBtn">Export to Excel</button></a></h2>
</div>


<div class="row" style="margin: 20px 0; min-height: 30px"> <?php echo form_open(base_url('admin/audit_started/regionsearch')); ?>
  <div class="col-lg-5">
  
  
  
    <div class="input-group">
      <label>Region </label>
	  <?php echo form_dropdown('region', array('All'=>'All','North' => 'North', 'South' => 'South','East' => 'East','West' => 'West','North East' => 'North East','Central' => 'Central'), $this->input->post('region'), array('class' => 'form-control', 'id' => 'school-select')); ?>
    </div>
  </div>
  <div class="col-lg-5">
    <div class="input-group">
      <label> School - Level </label>
      <?php echo form_dropdown('school', array('2'=>'All','0' => 'Primary', '1' => 'Secondary'), $this->input->post('school'), array('class' => 'form-control', 'id' => 'school-select')); ?> </div>
  </div>
  <span class="input-group-btn col-lg-2">
  <input type="submit" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Submit" name="Submit">
  </span> 
<?php echo form_close(); ?> </div>
<div class="wrapper">
<div id="container"> </div>
	<p><strong>Export Graph:</strong></p>
  <select id="ExportOption" style="border-radius:0px;">
    <option value="PNG">PNG Image</option>
    <option value="JPEG">JPEG Image</option>
    <option value="PDF">PDF Document</option>
    <option value="SVG">SVG Vector Image</option>
  </select>
  <button id="buttonExport" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Export chart</button>
  <button id="buttonPrint" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Print chart</button>
  <br/> <br/>
</div>
<table class="display dataTable no-footer tablepluging" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
  <thead>
    <tr role="row">
      <th>S.No</th>
      <th>Sch.Id</th>
      <th>School Name</th>
      <th>Pincode</th>
      <th>State</th>
      <th>City</th>
      <th>District</th>
      <th>Co-ord. Name</th>
      <th>Co-ord. Email</th>
      <th>Co-ord. Mobile</th>
      <th>Progress</th>
      <!--            <th>Completeness</th>-->
      <!--            <th>Reg. Date</th>-->
      <th>Action</th>
    </tr>
  </thead>
  <?php //echo '<pre>'; print_r($record); ?>
  <tbody>
    <?php $i = 1;
		ini_set('memory_limit', '-1');
        foreach ($record as $r) { ?>
    <tr role="row" class="<?php echo ($i % 2 == 0) ? "even" : "odd"; ?>">
      <td><?php echo $i; ?></td>
      <td><?php echo $r->id; ?></td>
      <td><?php echo $r->name; ?></td>
      <td><?php echo $r->pincode; ?></td>
      <td><?php echo $r->state_name; ?></td>
      <td><?php echo $r->city; ?></td>
      <td><?php echo $r->district_name; ?></td>
      <td><?php echo $r->coname; ?></td>
      <td><?php echo $r->coemail; ?></td>
      <td><?php echo $r->comobile; ?></td>
      <td><?php echo $r->progress; ?></td>
      <td class="action"><a target="_blank" href="<?php echo base_url('admin/audit_started_2017/response/'.$r->id);?>" title="View Responses"><img src="<?php echo base_url() ?>assets/front/images/1446146277_view6.png"></a></td>
    </tr>
    <?php $i++;
} ?>
  </tbody>
</table>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">

     var chart=    Highcharts.chart('container',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for <?php echo $region;?> '
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
                data: [{name: 'Registered for Audit', y: <?php echo count($registerd_audit_1); ?>}, {name: 'Audit Not Started', y: <?php echo count($total_notstarted_audit_1); ?>},{name: 'Audit Started', y: <?php echo count($total_started_audit_1); ?>}, {name: 'Audit Completed', y: <?php echo count($completed_1); ?>}]
            }]
        });
	// the button handler    
    $('#buttonExport').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 

    $('#buttonPrint').click(function() {
        chart.setTitle(null, { text: ' ' });
        chart.print();
        chart.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
		
		</script>
