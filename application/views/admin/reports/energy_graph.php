<?php
//echo '<pre>'; print_r($energy);die();
$Airconditioner_count = $energy['Airconditioner_count'][0]->total;
$Tubelight_count = $energy['Tubelight_count'][0]->total;
$CFLbulb_count = $energy['CFLbulb_count'][0]->total;
$LEDbulb_count = $energy['LEDbulb_count'][0]->total;
$SchoolHavingAlternateSourceOfEnergy = $energy['SchoolHavingAlternateSourceOfEnergy'][0]->total;

$final_array_poss = array((int)$Airconditioner_count,'');
$final_Airconditioner_count = json_encode($final_array_poss);

$final_array_poss1 = array((int)$Tubelight_count,'');
$final_Tubelight_count = json_encode($final_array_poss1);


$final_array_poss2 = array((int)$CFLbulb_count,'');
$final_CFLbulb_count = json_encode($final_array_poss2);

$final_array_poss3 = array((int)$LEDbulb_count,'');
$final_LEDbulb_count = json_encode($final_array_poss3);

$final_array_poss4 = array((int)$SchoolHavingAlternateSourceOfEnergy,'');
$final_SchoolHavingAlternateSourceOfEnergy = json_encode($final_array_poss4);

?>
<?php

$board1 = round($energy1[0]->board);
$capita1 = (round($energy1[0]->capita));
$board2 = round($energy2[0]->board);
$capita2 = (round($energy2[0]->capita));
  $board = $board1+$board2;
 $capita=$capita1+$capita2;
$generator1 = (round($generator1[0]->generator));
$biogas1 = (round($biogas1[0]->biogas));
$solar1 = (round($solar1[0]->solar));
$generator2 = (round($generator2[0]->generator));
$biogas2 = (round($biogas2[0]->biogas));
$solar2 = (round($solar2[0]->solar));

$generator=$generator1+$generator2;
$biogas=$biogas1+$biogas2;
$solar=$solar2+$solar1;





// Final Arrays


$final_array_poss6 = array((int)$board,'');
$final_four = json_encode($final_array_poss6);

$final_array_poss7 = array((int)$capita,'');
$final_three = json_encode($final_array_poss7);

$final_array_poss = array('',(int)$solar);
$final_school_bus = json_encode($final_array_poss);

$final_array_poss1 = array('',(int)$biogas);
$final_public_bus = json_encode($final_array_poss1);

$final_array_poss2 = array('',(int)$generator);
$final_school_transport = json_encode($final_array_poss2);

?>


<h1>PARTICIPATION BY ENERGY </h1>
  <div class="wrapper">
    <div id="container"> </div>
	<div id="container1"> </div>
  </div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>





<script type="text/javascript">

   Highcharts.chart('container',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Energy Report'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
				'Energy'
                
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Numbers'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        exporting: { enabled: false },
        credits: {enabled: false},
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
           name: 'Airconditioner_count',
           data: <?php echo $final_Airconditioner_count; ?>

       }, {
           name: 'Tubelight_count',
           data: <?php echo $final_Tubelight_count; ?>

       }, {
           name: 'CFLbulb_count',
           data: <?php echo $final_CFLbulb_count; ?>

       }, {
           name: 'LEDbulb_count',
           data: <?php echo $final_LEDbulb_count; ?>

       }, {
           name: 'SchoolHavingAlternateSourceOfEnergy',
           data: <?php echo $final_SchoolHavingAlternateSourceOfEnergy; ?>

       }]
   });
</script>


<script type="text/javascript">
 Highcharts.chart('container1',{
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
		'Energy Consumption',
                'Number of school using electricity '
                
            ],
            crosshair: true
        },
       
        
        yAxis: { 
            min: 0,
            title: {
                text: 'Avg Numbers'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                         '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        exporting: { enabled: false },
        credits: {enabled: false},
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Electricity from the board (MJ)',
            data: <?php echo $final_four; ?>

        },{
            name: 'Per capita Energy Consumption',
            data: <?php echo $final_three; ?>

        },{
            name: 'school having Solar ',
            data: <?php echo $final_school_bus; ?>

        }, {
            name: 'school having Biogas',
            data: <?php echo $final_public_bus; ?>

        }, {
            name: 'electricity from generator ',
            data: <?php echo $final_school_transport; ?>

        }]
    });

</script>


