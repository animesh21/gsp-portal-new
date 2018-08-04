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
  <h2>Partner REGISTRATION 2017 <a href="<?php echo base_url('admin/audit_started/partnerexcel') ?>">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>
<div class="hello">
<div id="wrapper">
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
  <div id="wrapper2" style="display:none;">
   <div id="container2"> </div>
   <p><strong>Export Graph:</strong></p>
  <select id="ExportOption" style="border-radius:0px;">
    <option value="PNG">PNG Image</option>
    <option value="JPEG">JPEG Image</option>
    <option value="PDF">PDF Document</option>
    <option value="SVG">SVG Vector Image</option>
  </select>
  <button id="buttonExport1" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Export chart</button>
  <button id="buttonPrint1" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Print chart</button>
  <br/> <br/>
   </div>
   <div id="wrapper3" style="display:none;">
    <div id="container3"> </div>
	<p><strong>Export Graph:</strong></p>
  <select id="ExportOption" style="border-radius:0px;">
    <option value="PNG">PNG Image</option>
    <option value="JPEG">JPEG Image</option>
    <option value="PDF">PDF Document</option>
    <option value="SVG">SVG Vector Image</option>
  </select>
  <button id="buttonExport2" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Export chart</button>
  <button id="buttonPrint2" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Print chart</button>
  <br/> <br/>
	</div>
	<div id="wrapper4" style="display:none;">
	 <div id="container4"> </div>
	 <p><strong>Export Graph:</strong></p>
  <select id="ExportOption" style="border-radius:0px;">
    <option value="PNG">PNG Image</option>
    <option value="JPEG">JPEG Image</option>
    <option value="PDF">PDF Document</option>
    <option value="SVG">SVG Vector Image</option>
  </select>
  <button id="buttonExport3" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Export chart</button>
  <button id="buttonPrint3" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Print chart</button>
  <br/> <br/>
	 </div>
	 <div id="wrapper5" style="display:none;">
	  <div id="container5"> </div>
	  <p><strong>Export Graph:</strong></p>
  <select id="ExportOption" style="border-radius:0px;">
    <option value="PNG">PNG Image</option>
    <option value="JPEG">JPEG Image</option>
    <option value="PDF">PDF Document</option>
    <option value="SVG">SVG Vector Image</option>
  </select>
  <button id="buttonExport4" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Export chart</button>
  <button id="buttonPrint4" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Print chart</button>
  <br/> <br/>
	  </div>
	  <div id="wrapper6" style="display:none;">
	   <div id="container6"> </div>
	   <p><strong>Export Graph:</strong></p>
  <select id="ExportOption" style="border-radius:0px;">
    <option value="PNG">PNG Image</option>
    <option value="JPEG">JPEG Image</option>
    <option value="PDF">PDF Document</option>
    <option value="SVG">SVG Vector Image</option>
  </select>
  <button id="buttonExport5" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Export chart</button>
  <button id="buttonPrint5" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Print chart</button>
  <br/> <br/>
	   </div>
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
	<div style="overflow-x:auto;">
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
    </div>
    <div class="tab-pane" id="3">
	<div style="overflow-x:auto;">
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
    </div>
    <div class="tab-pane" id="4">
	<div style="overflow-x:auto;">
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
    </div>
    <div class="tab-pane" id="5">
	<div style="overflow-x:auto;">
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
    </div>
    <div class="tab-pane" id="6">
	<div style="overflow-x:auto;">
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

       var chart =  Highcharts.chart('container',{
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
		
		<script type="text/javascript">

       var chart1 =  Highcharts.chart('container2',{
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
		
		// the button handler    
    $('#buttonExport1').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart1.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart1.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart1.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart1.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 

    $('#buttonPrint1').click(function() {
        chart1.setTitle(null, { text: ' ' });
        chart1.print();
        chart1.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
		
		</script>
		
		<script type="text/javascript">

       var chart2=  Highcharts.chart('container3',{
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
		// the button handler    
    $('#buttonExport2').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart2.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart2.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart2.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart2.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 

    $('#buttonPrint2').click(function() {
        chart2.setTitle(null, { text: ' ' });
        chart2.print();
        chart2.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
		</script>
		
		<script type="text/javascript">

      var chart3=    Highcharts.chart('container4',{
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
		// the button handler    
    $('#buttonExport3').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart3.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart3.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart3.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart3.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 

    $('#buttonPrint3').click(function() {
        chart3.setTitle(null, { text: ' ' });
        chart3.print();
        chart3.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
		</script>
		
		<script type="text/javascript">

       var chart4 =  Highcharts.chart('container5',{
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
		// the button handler    
    $('#buttonExport4').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart4.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart4.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart4.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart4.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 

    $('#buttonPrint4').click(function() {
        chart4.setTitle(null, { text: ' ' });
        chart4.print();
        chart4.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
		</script>
		
		<script type="text/javascript">

     var chart5 =    Highcharts.chart('container6',{
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
		// the button handler    
    $('#buttonExport5').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart5.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart5.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart5.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart5.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 

    $('#buttonPrint5').click(function() {
        chart5.setTitle(null, { text: ' ' });
        chart5.print();
        chart5.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
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
         $("#wrapper").hide();
         $("#wrapper3").hide();
         $("#wrapper4").hide();
         $("#wrapper5").hide();
         $("#wrapper6").hide();
		  $("#wrapper2").show();
       });
		
		</script>
		<script>
		$("#third").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").show();
         $("#wrapper4").hide();
         $("#wrapper5").hide();
         $("#wrapper6").hide();
		  $("#wrapper2").hide();
       });
		
		</script>
		
		<script>
		$("#four").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").hide();
         $("#wrapper4").show();
         $("#wrapper5").hide();
         $("#wrapper6").hide();
		  $("#wrapper2").hide();
       });
		
		</script>
		
		<script>
		$("#five").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").hide();
         $("#wrapper4").hide();
         $("#wrapper5").show();
         $("#wrapper6").hide();
		  $("#wrapper2").hide();
       });
		
		</script>

		<script>
		$("#six").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").hide();
         $("#wrapper4").hide();
         $("#wrapper5").hide();
         $("#wrapper6").show();
		  $("#wrapper2").hide();
       });
		
		</script>
		<script>
		$("#first").click(function(){
         $("#wrapper").show();
         $("#wrapper3").hide();
         $("#wrapper4").hide();
         $("#wrapper5").hide();
         $("#wrapper6").hide();
		  $("#wrapper2").hide();
       });
		
		</script>
		
