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
  <div id="containerDistrictWisePartner1"> </div>
  <?php 
    $statewisegraph1=getDataGraphByDistrict($state_id1);
    $countArr1=count(array_chunk($statewisegraph1[0],7,true));
    for($i=0;$i<$countArr1; $i++){
    ?>
	<div id="containerStateWisePartner1_<?php echo $i; ?>"> </div><br/>
    <?php } ?>
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
                text: 'Participation Chart for <?php if($state_id1!=0){ echo getStateById($state_id1);}else{ echo "All"; } ?> Total Registrations <?php echo $registerd_audit_1; ?> Schools'
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
                data: [{name: 'Audit Not Started' ,color:'#fc3300', y: <?php echo $total_notstarted_audit_1; ?>},{name: 'Audit Started' ,color:'#fcfc00', y: <?php echo $total_started_audit_1; ?>}, {name: 'Audit Completed' ,color:'#00ae4f', y: <?php echo $completed_1; ?>}]
            }]
        });
		</script>
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

<script type="text/javascript">
        /*Highcharts.chart('containerDistrictWisePartner1',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation Chart Of <?php //echo getStateById($state_id1); ?> By District'
        },
		yAxis: {
		  title: {
            text: 'No. of Schools'
          }
		},
        xAxis: {
            categories: [
             <?php //foreach($districtwisegraph1[0] as $districtWG){ ?>
				<?php //echo "'".$districtWG['districtame']."'"; ?>,
			<?php //} ?>
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
                format: '{point.y:.1f}'
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
            data: <?php //echo json_encode(array_map('intval',$districtwisegraph1[1])); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
			color:'#fc3300',
            data: <?php //echo json_encode(array_map('intval',$districtwisegraph1[2])); ?> //South

        }, {
            name: 'Audit Started',
			color:'#fcfc00',
            data: <?php //echo json_encode(array_map('intval',$districtwisegraph1[3])); ?> //South

        }, {
            name: 'Audit Completed',
			color:'#00ae4f',
            data: <?php //echo json_encode(array_map('intval',$districtwisegraph1[4])); ?> //East

        }		
		],
}); */
</script>
