<h1>PARTICIPATION BY STATE</h1>
<div class="wrapper" style="padding:0px;">
  <div class="container">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <label for="pwd">Select First State :</label>
      <select class="form-control" id="stateList">
        <option value="">Select State</option>
      </select>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><br/>
      <input type="button" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="compare" id="stateParticipation" >
    </div>
  </div>
</div>
<div class="wrapper">
  <div id="container"> </div>
</div>
<script type="text/javascript">
 $(document).ready(function(){
   $.getJSON("<?php echo base_url(); ?>assets/jason/state-data.json", function( data ) {
    $.each( data, function( key, val ) {
     $("#stateList").append("<option value="+val['id']+">"+val['statename']+"</option>")
     //console.log(val);
     });
    });
 });/*
$("#stateParticipation").click(function(){
        var q=$("#stateList").val();
        $.getJSON("<?php echo base_url(); ?>assets/jason/state-data.json", function(data){ 
            $.each(data, function(i, item) {
                if (item.id===q) {
					alert(item.statename + " " + item.totalregisteration + " " + item.auditcomplete);
                }
            });
        });
    });*/
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
$("#stateParticipation").click(function(){
        var q=$("#stateList").val();
        $.getJSON("<?php echo base_url(); ?>assets/state-data.json", function(data){ 
            $.each(data, function(i, val) {
                if (val.id===q) {
      Highcharts.chart('container',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for'+val['statename']
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
                data: [{name: 'Registered for Audit', y: parseInt(val['totalregisteration']) }, {name: 'Audit Not Started', y: parseInt(val['registerbutnotstart']) },{name: 'Audit Started', y: parseInt(val['auditstartbutnotcomplete']) }, {name: 'Audit Completed', y: parseInt(val['auditcomplete']) }]
            }]
        });
 }
            });
        });
    })
		</script>
