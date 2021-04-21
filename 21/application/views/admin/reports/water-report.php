<?php



$Q5W1 = round($water['Q5W1'][0]->total);
$Q5W2 = round($water['Q5W2'][0]->total);
$Q5W3 = round($water['Q5W3'][0]->total);
$Q5W4 = round($water['Q5W4'][0]->total);

$use_drip_no =  round($water['Q8W1S10'][0]->total);
$use_drip_yes =  round($water['Q8W1S10'][1]->total);

$rainwater_harvesting_no =  round($water['Q8W2'][0]->total);
$rainwater_harvesting_yes =  round($water['Q8W2'][1]->total);

//harvest rainwater//
$harvest_rainwater_store = round($Q8W2S2['store'][0]->total);
$harvest_rainwater_recharge = round($Q8W2S2['recharge'][0]->total);
$harvest_rainwater_both = round($Q8W2S2['both'][0]->total);

//reuse wastewater//
$reuse_wastewater_gardening = round($Q20W2['gardening'][0]->total);
$reuse_wastewater_flushing = round($Q20W2['flushing'][0]->total);
$reuse_wastewater_recharge = round($Q20W2['recharge_ground_water'][0]->total);

//treated wastewater//
$treated_wastewater_no = round($water['reuse'][0]->total);
$treated_wastewater_yes = round($water['reuse'][1]->total);
//RWH structures  //
// @ one question is remaining//
$Conduits = round($RWH['Conduits'][0]->total);
$Gutters = round($RWH['Gutters'][0]->total);
$Filter = round($RWH['Filter'][0]->total);
$First = round($RWH['First'][0]->total);
$Storage = round($RWH['Storage'][0]->total);
$Collection  = round($RWH['Collection '][0]->total);
$Pump = round($RWH['Pump'][0]->total);
$Recharge = round($RWH['Recharge'][0]->total);

// Final Arrays


$final_array_poss6 = array($Q5W1,'','','','','','');
$final_four = json_encode($final_array_poss6);

$final_array_poss7 = array($Q5W2,'','','','','','');
$final_three = json_encode($final_array_poss7);

$final_array_poss = array($Q5W3,'','','','','','');
$final_school_bus = json_encode($final_array_poss);

$final_array_poss1 = array($Q5W4,'','','','','','');
$recycled  = json_encode($final_array_poss1);

$final_array_poss2 = array('',$use_drip_no,'','','','','');
$final_use_drip_no  = json_encode($final_array_poss2);
$final_array_poss3 = array('',$use_drip_yes,'','','','','');
$final_use_drip_yes  = json_encode($final_array_poss3);

$final_array_poss4 = array('','',$rainwater_harvesting_no,'','','','');
$final_rainwater_harvesting_no  = json_encode($final_array_poss4);
$final_array_poss5 = array('','',$rainwater_harvesting_yes,'','','','');
$final_rainwater_harvesting_yes  = json_encode($final_array_poss5);

$final_array_poss8 = array('','','',$harvest_rainwater_store,'','','');
$final_harvest_rainwater_store  = json_encode($final_array_poss8);
$final_array_poss9 = array('','','',$harvest_rainwater_recharge,'','','');
$final_harvest_rainwater_recharge  = json_encode($final_array_poss9);
$final_array_poss10 = array('','','',$harvest_rainwater_both,'','','');
$final_harvest_rainwater_both  = json_encode($final_array_poss10);

$final_array_poss11 = array('','','','',$reuse_wastewater_gardening,'','');
$final_reuse_wastewater_gardening  = json_encode($final_array_poss11);
$final_array_poss12 = array('','','','',$reuse_wastewater_flushing,'','');
$final_reuse_wastewater_flushing  = json_encode($final_array_poss12);
$final_array_poss13 = array('','','','',$reuse_wastewater_recharge,'','');
$final_reuse_wastewater_recharge  = json_encode($final_array_poss13);

$final_array_poss14 = array('','','','','',$treated_wastewater_no,'');
$final_treated_wastewater_no  = json_encode($final_array_poss14);
$final_array_poss15 = array('','','','','',$treated_wastewater_yes,'');
$final_treated_wastewater_yes  = json_encode($final_array_poss15);

$final_array_poss16 = array('','','','','','',$Conduits);
$final_Conduits  = json_encode($final_array_poss16);
$final_array_poss17 = array('','','','','','',$Gutters);
$final_Gutters  = json_encode($final_array_poss17);
$final_array_poss18 = array('','','','','','',$Filter);
$final_Filter = json_encode($final_array_poss18);
$final_array_poss19 = array('','','','','','',$First);
$final_First  = json_encode($final_array_poss19);
$final_array_poss20 = array('','','','','','',$Storage);
$final_Storage  = json_encode($final_array_poss20);
$final_array_poss21 = array('','','','','','',$Collection);
$final_Collection  = json_encode($final_array_poss21);
$final_array_poss22 = array('','','','','','',$Pump);
$final_Pump  = json_encode($final_array_poss22);
$final_array_poss23 = array('','','','','','',$Recharge);
$final_Recharge  = json_encode($final_array_poss23);


?>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>




<script type="text/javascript">
 Highcharts.chart('container',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Water Analytics Report'
            
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
		'Water as source',
                'Drip or Irrigation',
                'RWH System',
                'How Harvest rainwater',
                'How Reuse wastewater',
                'Reuse Treated wastewater',
                'RWH Structure'
            ],
            crosshair: true
        },
       
        
        yAxis: { 
            min: 0,
            title: {
                text: 'Number of School'
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
            name: 'Ground Water as source',
            data: <?php echo $final_four; ?>

        },{
            name: 'Surface water as source',
            data: <?php echo $final_three; ?>

        },{
            name: 'Rainwater as source',
            data: <?php echo $final_school_bus; ?>

        },{
            name: 'Recycled waste water as source',
            data: <?php echo $recycled; ?>

        },{
            name: 'Drip or Irrigation(No)',
            data: <?php echo $final_use_drip_no; ?>

        },{
            name: 'Drip or Irrigation(Yes)',
            data: <?php echo $final_use_drip_yes; ?>

        },{
            name: 'RWH System(No)',
            data: <?php echo $final_rainwater_harvesting_no; ?>

        },{
            name: 'RWH System(Yes)',
            data: <?php echo $final_rainwater_harvesting_yes; ?>

        },{
            name: 'Harvest rainwater(Store)',
            data: <?php echo $final_harvest_rainwater_store; ?>

        },{
            name: 'Harvest rainwater(Recharge)',
            data: <?php echo $final_harvest_rainwater_recharge; ?>

        },{
            name: 'Harvest rainwater(Both)',
            data: <?php echo $final_harvest_rainwater_both; ?>

        },{
            name: 'Reuse wastewater(Garden)',
            data: <?php echo $final_reuse_wastewater_gardening; ?>

        },{
            name: 'Reuse wastewater(Flush)',
            data: <?php echo $final_reuse_wastewater_flushing; ?>

        },{
            name: 'Reuse wastewater(Recharge)',
            data: <?php echo $final_reuse_wastewater_recharge; ?>

        },{
            name: 'Reuse Treated wastewater(No)',
            data: <?php echo $final_treated_wastewater_no; ?>

        },{
            name: 'Reuse Treated wastewater(Yes)',
            data: <?php echo $final_treated_wastewater_yes; ?>

        },{
            name: 'RWH Structure(Conduits)',
            data: <?php echo $final_Conduits; ?>
        },{
            name: 'RWH Structure(Gutters)',
            data: <?php echo $final_Gutters; ?>
        },{
            name: 'RWH Structure(First)',
            data: <?php echo $final_First; ?>
        },{
            name: 'RWH Structure(Storage)',
            data: <?php echo $final_Storage; ?>
        },{
            name: 'RWH Structure(Collection)',
            data: <?php echo $final_Collection; ?>
        },{
            name: 'RWH Structure(Pump)',
            data: <?php echo $final_Pump; ?>
        },{
            name: 'RWH Structure(Recharge)',
            data: <?php echo $final_Recharge; ?>
        },{
            name: 'RWH Structure(Filter)',
            data: <?php echo $final_Filter; ?>
        }]
    });

</script>

