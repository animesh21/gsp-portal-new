<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #292b2c;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
}
.dropdown-item {
    display: block;
    width: 100%;
    padding: 3px 1.5rem;
    clear: both;
    font-weight: 400;
    color: #292b2c;
    text-align: inherit;
    white-space: nowrap;
    background: 0 0;
    border: 0;
}
.nav li{ font-size:12px!important;}
</style>
<div class="top-area">
  <h2>Partner REGISTRATION 2018 <a href="<?php echo base_url('admin/audit_started/partnerexcel') ?>">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>
<div class="wrapper">
  <div id="container"> </div>
   <div id="container2" style="display:none;"> </div>
    <div id="container3" style="display:none;"> </div>
	 <div id="container4" style="display:none;"> </div>
	  <div id="container5" style="display:none;"> </div>
	   <div id="container6" style="display:none;"> </div>
</div>

<div id="exTab2" class="container">
 <ul class="nav nav-tabs">
    <li class="active"> <a href="#1" id="first" data-toggle="tab" >Church of South India</a> </li>
    <li><a href="#2" id="second" data-toggle="tab">Jawahar Navodaya Vidyalaya</a> </li>
    <li><a href="#3" id="third" data-toggle="tab">Kendriya Vidyalaya Sangathan (KVS)</a> </li>
    <li><a href="#4" id="four" data-toggle="tab">Montfortian Education Foundation</a> </li>
    <li><a href="#5" id="five" data-toggle="tab">Mount Litera Zee Schools</a> </li>
    <li><a href="#6" id="six" data-toggle="tab">Satya Bharti Foundation</a> </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="1">
      <table id="example1" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
            <th>Sch.Id</th>
            <th>UDISE Code</th>
            <th>School Name</th>
            <th>State</th>
            <th>District</th>
            <th>City</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
            <th>Completeness</th>
            <th>Reg. Date</th>
          </tr>
        </thead>
        <?php $i=1; foreach($list_school1 as $r){ ?>
        <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->udise; ?></td>
          <td><?php echo $r->name; ?></td>
          <td><?php echo $r->state_name; ?></td>
          <td><?php echo $r->city; ?></td>
          <td><?php echo $r->district_name; ?></td>
          <td><?php echo $r->coname; ?></td>
          <td><?php echo $r->coemail; ?></td>
          <td><?php echo $r->comobile; ?></td>
          <td><?php echo $r->progress; ?></td>
          <td><?php echo $r->date_added; ?></td>
        </tr>
        <?php $i++; } ?>
      </table>
    </div>
    <div class="tab-pane" id="2">
      <table id="example2" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
            <th>Sch.Id</th>
            <th>UDISE Code</th>
            <th>School Name</th>
            <th>State</th>
            <th>District</th>
            <th>City</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
            <th>Completeness</th>
            <th>Reg. Date</th>
          </tr>
        <tbody>
          </thead>
          
          <?php $i=1; foreach($list_school2 as $r){ ?>
          <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
            <td><?php echo $i; ?></td>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->udise; ?></td>
            <td><?php echo $r->name; ?></td>
            <td><?php echo $r->state_name; ?></td>
            <td><?php echo $r->city; ?></td>
            <td><?php echo $r->district_name; ?></td>
            <td><?php echo $r->coname; ?></td>
            <td><?php echo $r->coemail; ?></td>
            <td><?php echo $r->comobile; ?></td>
            <td><?php echo $r->progress; ?></td>
            <td><?php echo $r->date_added; ?></td>
          </tr>
          <?php $i++; } ?>
      </table>
    </div>
    <div class="tab-pane" id="3">
      <table id="example3" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
            <th>Sch.Id</th>
            <th>UDISE Code</th>
            <th>School Name</th>
            <th>State</th>
            <th>District</th>
            <th>City</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
            <th>Completeness</th>
            <th>Reg. Date</th>
          </tr>
        </thead>
        <?php $i=1; foreach($list_school3 as $r){ ?>
        <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->udise; ?></td>
          <td><?php echo $r->name; ?></td>
          <td><?php echo $r->state_name; ?></td>
          <td><?php echo $r->city; ?></td>
          <td><?php echo $r->district_name; ?></td>
          <td><?php echo $r->coname; ?></td>
          <td><?php echo $r->coemail; ?></td>
          <td><?php echo $r->comobile; ?></td>
          <td><?php echo $r->progress; ?></td>
          <td><?php echo $r->date_added; ?></td>
        </tr>
        <?php $i++; } ?>
      </table>
    </div>
    <div class="tab-pane" id="4">
      <table id="example4" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
            <th>Sch.Id</th>
            <th>UDISE Code</th>
            <th>School Name</th>
            <th>State</th>
            <th>District</th>
            <th>City</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
            <th>Completeness</th>
            <th>Reg. Date</th>
          </tr>
        </thead>
        <?php $i=1; foreach($list_school4 as $r){ ?>
        <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->udise; ?></td>
          <td><?php echo $r->name; ?></td>
          <td><?php echo $r->state_name; ?></td>
          <td><?php echo $r->city; ?></td>
          <td><?php echo $r->district_name; ?></td>
          <td><?php echo $r->coname; ?></td>
          <td><?php echo $r->coemail; ?></td>
          <td><?php echo $r->comobile; ?></td>
          <td><?php echo $r->progress; ?></td>
          <td><?php echo $r->date_added; ?></td>
        </tr>
        <?php $i++; } ?>
      </table>
    </div>
    <div class="tab-pane" id="5">
      <table id="example5" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
            <th>Sch.Id</th>
            <th>UDISE Code</th>
            <th>School Name</th>
            <th>State</th>
            <th>District</th>
            <th>City</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
            <th>Completeness</th>
            <th>Reg. Date</th>
          </tr>
        </thead>
        <?php $i=1; foreach($list_school5 as $r){ ?>
        <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->udise; ?></td>
          <td><?php echo $r->name; ?></td>
          <td><?php echo $r->state_name; ?></td>
          <td><?php echo $r->city; ?></td>
          <td><?php echo $r->district_name; ?></td>
          <td><?php echo $r->coname; ?></td>
          <td><?php echo $r->coemail; ?></td>
          <td><?php echo $r->comobile; ?></td>
          <td><?php echo $r->progress; ?></td>
          <td><?php echo $r->date_added; ?></td>
        </tr>
        <?php $i++; } ?>
      </table>
    </div>
    <div class="tab-pane" id="6">
      <table id="example6" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
            <th>Sch.Id</th>
            <th>UDISE Code</th>
            <th>School Name</th>
            <th>State</th>
            <th>District</th>
            <th>City</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
            <th>Completeness</th>
            <th>Reg. Date</th>
          </tr>
        </thead>
        <?php $i=1; foreach($list_school6 as $r){ ?>
        <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->udise; ?></td>
          <td><?php echo $r->name; ?></td>
          <td><?php echo $r->state_name; ?></td>
          <td><?php echo $r->city; ?></td>
          <td><?php echo $r->district_name; ?></td>
          <td><?php echo $r->coname; ?></td>
          <td><?php echo $r->coemail; ?></td>
          <td><?php echo $r->comobile; ?></td>
          <td><?php echo $r->progress; ?></td>
          <td><?php echo $r->date_added; ?></td>
        </tr>
        <?php $i++; } ?>
      </table>
    </div>
  </div>
</div>
<link type="text/css" rel="stylesheet" type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    color: #fff;
    cursor: default;
    background-color:#e86549!important;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}
.tab-content{
    border: solid 1px #cad6e2;
	padding:22px 22px 22px 22px;
}
.content-form li {
     margin: 0 0 0px 0!important; 
    padding: 0;
}
.content-form ul {
     margin: 0 0 0 0em!important; 
    list-style-type: disc;
    padding: 0;
}
.content-form li {
    margin: 0 0 0px 0!important;
    padding: 0;
    cursor: default;
    background-color:#ccc!important;
    border-top: 1px solid #ddd;
	border-left: 1px solid #ddd;
	border-right:none;
    border-bottom-color: transparent;
}
.content-form li a{ 
	color: #000; }
</style>
<script type="text/javascript">
$(document).ready(function () {
        $('#example2,#example3,#example4,#example5,#example6').DataTable({
            dom: 'lfrtip',
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
            "iDisplayLength": 25
        });
		   });
</script>
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
                text: 'Participation Chart for Church of South India '
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
                data: [{name: 'Registered for Audit', y: <?php echo $csi_registerd_audit; ?>}, {name: 'Audit Not Started', y: <?php echo $csi_total_notstarted_audit; ?>},{name: 'Audit Started', y: <?php echo $csi_total_started_audit; ?>}, {name: 'Audit Completed', y: <?php echo $csi_completed; ?>}]
            }]
        });
		</script>
		
		<script type="text/javascript">

         Highcharts.chart('container2',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Jawahar Navodaya Vidyalaya '
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
                data: [{name: 'Registered for Audit', y: <?php echo $csi_registerd_audit2; ?>}, {name: 'Audit Not Started', y: <?php echo $csi_total_notstarted_audit2; ?>},{name: 'Audit Started', y: <?php echo $csi_total_started_audit2; ?>}, {name: 'Audit Completed', y: <?php echo $csi_completed2; ?>}]
            }]
        });
		</script>
		
		<script type="text/javascript">

         Highcharts.chart('container3',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Kendriya Vidyalaya Sangathan (KVS) '
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
                data: [{name: 'Registered for Audit', y: <?php echo $csi_registerd_audit3; ?>}, {name: 'Audit Not Started', y: <?php echo $csi_total_notstarted_audit3; ?>},{name: 'Audit Started', y: <?php echo $csi_total_started_audit3; ?>}, {name: 'Audit Completed', y: <?php echo $csi_completed3; ?>}]
            }]
        });
		</script>
		
		<script type="text/javascript">

         Highcharts.chart('container4',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Montfortian Education Foundation'
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
                data: [{name: 'Registered for Audit', y: <?php echo $csi_registerd_audit4; ?>}, {name: 'Audit Not Started', y: <?php echo $csi_total_notstarted_audit4; ?>},{name: 'Audit Started', y: <?php echo $csi_total_started_audit4; ?>}, {name: 'Audit Completed', y: <?php echo $csi_completed4; ?>}]
            }]
        });
		</script>
		
		<script type="text/javascript">

         Highcharts.chart('container5',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Mount Litera Zee Schools '
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
                data: [{name: 'Registered for Audit', y: <?php echo $csi_registerd_audit5; ?>}, {name: 'Audit Not Started', y: <?php echo $csi_total_notstarted_audit5; ?>},{name: 'Audit Started', y: <?php echo $csi_total_started_audit5; ?>}, {name: 'Audit Completed', y: <?php echo $csi_completed5; ?>}]
            }]
        });
		</script>
		
		<script type="text/javascript">

         Highcharts.chart('container6',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Satya Bharti Foundation'
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
                data: [{name: 'Registered for Audit', y: <?php echo $csi_registerd_audit6; ?>}, {name: 'Audit Not Started', y: <?php echo $csi_total_notstarted_audit6; ?>},{name: 'Audit Started', y: <?php echo $csi_total_started_audit6; ?>}, {name: 'Audit Completed', y: <?php echo $csi_completed6; ?>}]
            }]
        });
		</script>
		<div id="container"> </div>
       <div id="container2" style="display:none;"> </div>
    <div id="container3" style="display:none;"> </div>
	 <div id="container4" style="display:none;"> </div>
	  <div id="container5" style="display:none;"> </div>
	   <div id="container6" style="display:none;"> </div>
		<script>
		$("#second").click(function(){
         $("#container").hide();
         $("#container3").hide();
         $("#container4").hide();
         $("#container5").hide();
         $("#container6").hide();
		  $("#container2").show();
       });
		
		</script>
		<script>
		$("#third").click(function(){
         $("#container").hide();
         $("#container3").show();
         $("#container4").hide();
         $("#container5").hide();
         $("#container6").hide();
		  $("#container2").hide();
       });
		
		</script>
		
		<script>
		$("#four").click(function(){
         $("#container").hide();
         $("#container3").hide();
         $("#container4").show();
         $("#container5").hide();
         $("#container6").hide();
		  $("#container2").hide();
       });
		
		</script>
		
		<script>
		$("#five").click(function(){
         $("#container").hide();
         $("#container3").hide();
         $("#container4").hide();
         $("#container5").show();
         $("#container6").hide();
		  $("#container2").hide();
       });
		
		</script>

		<script>
		$("#six").click(function(){
         $("#container").hide();
         $("#container3").hide();
         $("#container4").hide();
         $("#container5").hide();
         $("#container6").show();
		  $("#container2").hide();
       });
		
		</script>
		<script>
		$("#first").click(function(){
         $("#container").show();
         $("#container3").hide();
         $("#container4").hide();
         $("#container5").hide();
         $("#container6").hide();
		  $("#container2").hide();
       });
		
		</script>
