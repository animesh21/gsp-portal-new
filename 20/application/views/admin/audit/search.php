<div class="top-area">
  <h2>REGISTRATION BY STATE <a href="<?php echo base_url('admin/audit_started/excel/' . $val) ?>">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>
<div class="row" style="margin: 20px 0; min-height: 30px"> <?php echo form_open(base_url('admin/audit_started/search')); ?>
  <div class="col-lg-5">
    <div class="input-group">
      <h5>States</h5>
      
      <?php echo form_dropdown('state', $states, $this->input->post('state'), array('class' => 'form-control', 'id' => 'country-select')); ?> </div>
  </div>
  <div class="col-lg-5">
    <div class="input-group">
      <h5>School-Category</h5>
      <?php echo form_dropdown('school', array('0' => 'Primary', '1' => 'Secondary','2'=>'All'), $this->input->post('school'), array('class' => 'form-control', 'id' => 'school-select')); ?> </div>
  </div>
  <span class="input-group-btn col-lg-2">
  <input type="submit" class="btn btn-danger" value="Submit" name="Submit">
  </span> <?php echo form_close(); ?> </div>
<div class="wrapper">
  <div id="container"> </div>
  <button id="buttonExport" class="btn btn-danger">Export chart</button>
  <button id="buttonPrint" class="btn btn-danger">Print chart</button>
  <br/>
  <br/>

  <?php 
    $statewisegraph1=getDataGraphByDistrict($state_id1);
    $countArr1=count(array_chunk($statewisegraph1[0],7,true));
    for($i=0;$i<$countArr1; $i++){
    ?>
  <div id="containerStateWisePartner1_<?php echo $i; ?>"> </div><br/>
    <?php } ?>

</div>



</div>



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
      <th>Action</th>
    </tr>
  </thead>
  <?php //echo '<pre>'; print_r($record); ?>
  <tbody>
    <?php $i = 1;
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
      <td class="action"><a target="_blank" href="<?php echo base_url('admin/audit_started/response/'.$r->id);?>" title="View Responses"><img src="<?php echo base_url() ?>assets/front/images/1446146277_view6.png"></a></td>
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
         Highcharts.chart('container',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Registration Chart for <?php if($state_id1!=1){ echo getStateById($state_id1);}else{ echo "All"; } ?> Total Registrations <?php echo count($registerd_audit_1); ?> Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools ({point.percentage:.1f}%)</b>'
            },
        exporting: { enabled: true },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
            format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',             
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started' ,color:'#fc3300', y: <?php echo count($total_notstarted_audit_1); ?>},{name: 'Audit Started' ,color:'#fcfc00', y: <?php echo count($total_started_audit_1); ?>}, {name: 'Audit Submited' ,color:'#00ae4f', y:  <?php echo count($completed_1); ?>}, {name: 'Audit Completed' ,color:'#1826FB', y:  <?php echo count($unompleted_audit) ; ?>}]
            }]
        });
    </script>




<?php if($school==2 && $state==1) { ?>



 <?php 
 $districtwisegraph1=getDataGraphByDistrict_all($state_id1,$school);
 $graphCount=count($districtwisegraph1[0]);
 $loopCount;
 if($districtwisegraph1%7==0){ $loopCount=7;}else{ $loopCount=8;}
 $countArr1=count(array_chunk($districtwisegraph1[0],8,true));
 $countTotalArr1=count($districtwisegraph1[0]);
 $arrData1=array_chunk($districtwisegraph1[0],$loopCount,true);
 $arrData1_1=array_chunk($districtwisegraph1[1],$loopCount,true);
 $arrData1_2=array_chunk($districtwisegraph1[2],$loopCount,true);
 $arrData1_3=array_chunk($districtwisegraph1[3],$loopCount,true);
 $arrData1_4=array_chunk($districtwisegraph1[4],$loopCount,true);
 $dataCount1=array();
 $countInteration1=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr1; $i++){$dataCount1[]=$i;}
 for($i=0,$t=0;$i<$countArr1; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner1_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation Chart Of All  District'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<$loopCount;++$r){
         if(!empty($arrData1[$i][$y]['districtame'])){
          echo "'".$arrData1[$i][$y]['districtame']."'"; }?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
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
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_4[$t]))); ?> //East

        }   
    ],
}); 
</script><?php
  $t++;
} ?>

 
 <?php } else if($school==1 && $state==1) { ?>
  

 <?php 
 $districtwisegraph1=getDataGraphByDistrict_all($state,$school);
 $graphCount=count($districtwisegraph1[0]);
 $loopCount;
 if($districtwisegraph1%7==0){ $loopCount=7;}else{ $loopCount=8;}
 $countArr1=count(array_chunk($districtwisegraph1[0],8,true));
 $countTotalArr1=count($districtwisegraph1[0]);
 $arrData1=array_chunk($districtwisegraph1[0],$loopCount,true);
 $arrData1_1=array_chunk($districtwisegraph1[1],$loopCount,true);
 $arrData1_2=array_chunk($districtwisegraph1[2],$loopCount,true);
 $arrData1_3=array_chunk($districtwisegraph1[3],$loopCount,true);
 $arrData1_4=array_chunk($districtwisegraph1[4],$loopCount,true);
 $dataCount1=array();
 $countInteration1=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr1; $i++){$dataCount1[]=$i;}
 for($i=0,$t=0;$i<$countArr1; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner1_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation Chart Of All Secondary District'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<$loopCount;++$r){
         if(!empty($arrData1[$i][$y]['districtame'])){
          echo "'".$arrData1[$i][$y]['districtame']."'"; }?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
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
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_4[$t]))); ?> //East

        }   
    ],
}); 
</script><?php
  $t++;
} ?>

 <?php } else if($school==0 && $state==1){ ?>


 <?php 
 $districtwisegraph1=getDataGraphByDistrict_all($state,$school);
 $graphCount=count($districtwisegraph1[0]);
 $loopCount;
 if($districtwisegraph1%7==0){ $loopCount=7;}else{ $loopCount=8;}
 $countArr1=count(array_chunk($districtwisegraph1[0],8,true));
 $countTotalArr1=count($districtwisegraph1[0]);
 $arrData1=array_chunk($districtwisegraph1[0],$loopCount,true);
 $arrData1_1=array_chunk($districtwisegraph1[1],$loopCount,true);
 $arrData1_2=array_chunk($districtwisegraph1[2],$loopCount,true);
 $arrData1_3=array_chunk($districtwisegraph1[3],$loopCount,true);
 $arrData1_4=array_chunk($districtwisegraph1[4],$loopCount,true);
 $dataCount1=array();
 $countInteration1=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr1; $i++){$dataCount1[]=$i;}
 for($i=0,$t=0;$i<$countArr1; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner1_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation Chart Of All Primary District'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<$loopCount;++$r){
         if(!empty($arrData1[$i][$y]['districtame'])){
          echo "'".$arrData1[$i][$y]['districtame']."'"; }?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
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
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_4[$t]))); ?> //East

        }   
    ],
}); 
</script><?php
  $t++;
} ?>
  








 <?php } else { ?>

<?php if($school==2) { ?>
    <?php 
 $districtwisegraph1=getDataGraphByDistrict($state_id1);
 $graphCount=count($districtwisegraph1[0]);
 $loopCount;
 if($districtwisegraph1%7==0){ $loopCount=7;}else{ $loopCount=8;}
 $countArr1=count(array_chunk($districtwisegraph1[0],8,true));
 $countTotalArr1=count($districtwisegraph1[0]);
 $arrData1=array_chunk($districtwisegraph1[0],$loopCount,true);
 $arrData1_1=array_chunk($districtwisegraph1[1],$loopCount,true);
 $arrData1_2=array_chunk($districtwisegraph1[2],$loopCount,true);
 $arrData1_3=array_chunk($districtwisegraph1[3],$loopCount,true);
 $arrData1_4=array_chunk($districtwisegraph1[4],$loopCount,true);
 $dataCount1=array();
 $countInteration1=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr1; $i++){$dataCount1[]=$i;}
 for($i=0,$t=0;$i<$countArr1; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner1_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation Chart Of <?php if($state_id1!=0){ echo getStateById($state_id1);}else{ echo "All"; } ?> By District'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<$loopCount;++$r){
         if(!empty($arrData1[$i][$y]['districtame'])){
          echo "'".$arrData1[$i][$y]['districtame']."'"; }?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
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
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_4[$t]))); ?> //East

        }   
    ],
}); 
</script><?php
  $t++;
} ?>

<?php } ?>



<?php if($school==0) { ?>
    <?php 
 $districtwisegraph1=getDataGraphByDistrictprimary($state_id1);
 $graphCount=count($districtwisegraph1[0]);
 $loopCount;
 if($districtwisegraph1%7==0){ $loopCount=7;}else{ $loopCount=8;}
 $countArr1=count(array_chunk($districtwisegraph1[0],8,true));
 $countTotalArr1=count($districtwisegraph1[0]);
 $arrData1=array_chunk($districtwisegraph1[0],$loopCount,true);
 $arrData1_1=array_chunk($districtwisegraph1[1],$loopCount,true);
 $arrData1_2=array_chunk($districtwisegraph1[2],$loopCount,true);
 $arrData1_3=array_chunk($districtwisegraph1[3],$loopCount,true);
 $arrData1_4=array_chunk($districtwisegraph1[4],$loopCount,true);
 $dataCount1=array();
 $countInteration1=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr1; $i++){$dataCount1[]=$i;}
 for($i=0,$t=0;$i<$countArr1; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner1_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation Chart Of <?php if($state_id1!=0){ echo getStateById($state_id1);}else{ echo "All"; } ?> By District'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<$loopCount;++$r){
         if(!empty($arrData1[$i][$y]['districtame'])){
          echo "'".$arrData1[$i][$y]['districtame']."'"; }?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
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
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_4[$t]))); ?> //East

        }   
    ],
}); 
</script><?php
  $t++;
} ?>

<?php } ?>







<?php if($school==1) { ?>
    <?php 
 $districtwisegraph1=getDataGraphByDistrictsecondary($state_id1);
 $graphCount=count($districtwisegraph1[0]);
 $loopCount;
 if($districtwisegraph1%7==0){ $loopCount=7;}else{ $loopCount=8;}
 $countArr1=count(array_chunk($districtwisegraph1[0],8,true));
 $countTotalArr1=count($districtwisegraph1[0]);
 $arrData1=array_chunk($districtwisegraph1[0],$loopCount,true);
 $arrData1_1=array_chunk($districtwisegraph1[1],$loopCount,true);
 $arrData1_2=array_chunk($districtwisegraph1[2],$loopCount,true);
 $arrData1_3=array_chunk($districtwisegraph1[3],$loopCount,true);
 $arrData1_4=array_chunk($districtwisegraph1[4],$loopCount,true);
 $dataCount1=array();
 $countInteration1=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr1; $i++){$dataCount1[]=$i;}
 for($i=0,$t=0;$i<$countArr1; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner1_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation Chart Of <?php if($state_id1!=0){ echo getStateById($state_id1);}else{ echo "All"; } ?> By District'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<$loopCount;++$r){
         if(!empty($arrData1[$i][$y]['districtame'])){
          echo "'".$arrData1[$i][$y]['districtame']."'"; }?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
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
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_4[$t]))); ?> //East

        }   
    ],
}); 
</script><?php
  $t++;
} ?>

<?php } ?>




<?php } ?>





