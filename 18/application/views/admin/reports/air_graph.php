<?php
//echo '<pre>'; print_r($Bus);die();
$petrol1 = $Bus['petrol'][0]->total;
$petrol2 = $Bus['petrol1'][0]->total;

  $petrol= $petrol1+$petrol2;

$diesel1 = $Bus['diesel'][0]->total;
$diesel2 = $Bus['diesel1'][0]->total;

   $diesel= $diesel1+$diesel2;


$cng1 = $Bus['cng'][0]->total;
$cng2 = $Bus['cng1'][0]->total;

   $cng= $cng1+$cng2;


$electric1 = $Bus['electric'][0]->total;
$electric2 = $Bus['electric1'][0]->total;

  $electric= $electric1+$electric2;

$final_array_poss = array($NotOwnVehicles_count,'');
$final_NotOwnVehicles_count = json_encode($final_array_poss);

$final_array_poss1 = array($Operatorowned_count,'');
$final_Operatorowned_count = json_encode($final_array_poss1);


$final_array_poss2 = array($OwnVehicles_count,'');
$final_OwnVehicles_count = json_encode($final_array_poss2);

$final_array_poss3 = array($CombinationSchoolandOperatorvehicles,'');
$final_CombinationSchoolandOperatorvehicles = json_encode($final_array_poss3);

$final_array_poss4 = array($Hiredvehicles,'');
$final_Hiredvehicles = json_encode($final_array_poss4);

$final_array_poss5 = array('',(int)$petrol);
$final_pet = json_encode($final_array_poss5);

$final_array_poss6 = array('',(int)$diesel);
$final_die = json_encode($final_array_poss6); 

$final_array_poss7 = array('',(int)$cng);
$final_cng = json_encode($final_array_poss7);

$final_array_poss8 = array('',(int)$electric);
$final_electric = json_encode($final_array_poss8);

//echo '<pre>'; 
//echo var_dump($Hiredvehicles);
//print_r($final_Hiredvehicles);print_r($final_electric);die();


/* $final_array_poss7 = array('','',$BusesonPetrol->answer);
$final_BusesonPetrol = json_encode($final_array_poss7);
 */

?>
<?php

$total_population1 = round($sustain['total_population'][0]->avg);
$total_population2 = round($sustain['total_population_phase2'][0]->avg);
$total_population = $total_population1 + $total_population2;


$total_school_bus1 = round($sustain['Q7A1S4'][0]->avg);
$total_school_bus2 = round($sustain['Q7A1S4_phase2'][0]->avg);
$total_school_bus = $total_school_bus1 + $total_school_bus2;
$school_bus = round($total_school_bus/$total_population*100);


$total_public_bus1 = (round($sustain['Q7A2S4'][0]->avg));
$total_public_bus2 = (round($sustain['Q7A2S4_phase2'][0]->avg));
$total_public_bus = $total_public_bus1 + $total_public_bus2;
$public_bus = round($total_public_bus/$total_population*100);


$total_school_transport1 = (round($sustain['Q7A3S4'][0]->avg));
$total_school_transport2 = (round($sustain['Q7A3S4_phase2'][0]->avg));
$total_school_transport = $total_school_transport1 +$total_school_transport2;
$school_transport = round($total_school_transport/$total_population*100);


$total_school_public_transport1 = (round($sustain['Q7A4S4'][0]->avg));
$total_school_public_transport2 = (round($sustain['Q7A4S4_phase2'][0]->avg));
$total_school_public_transport = $total_school_public_transport1 +$total_school_public_transport2;
$school_public_transport = round($total_school_public_transport/$total_population*100);


$total_four_wheeler1 = (round($sustain['Q7A5S4'][0]->avg));
$total_four_wheeler2 = (round($sustain['Q7A5S4_phase2'][0]->avg));
$total_four_wheeler = $total_four_wheeler1 + $total_four_wheeler2;
$four_wheeler = round($total_four_wheeler/$total_population*100);


$total_three_wheeler1 = (round($sustain['Q7A6S4'][0]->avg));
$total_three_wheeler2 = (round($sustain['Q7A6S4_phase2'][0]->avg));
$total_three_wheeler = $total_three_wheeler1 + $total_three_wheeler2;
$three_wheeler = round($total_three_wheeler/$total_population*100);


$total_personal_four1 = round($private['Q7A7S4'][0]->avg);
$total_personal_four2 = round($private['Q7A7S4_phase2'][0]->avg);
$total_personal_four = $total_personal_four1 + $total_personal_four2;
$personal_four = round($total_personal_four/$total_population*100);


$total_personal_three1 = (round($private['Q7A8S4'][0]->avg));
$total_personal_three2 = (round($private['Q7A8S4_phase2'][0]->avg));
$total_personal_three = $total_personal_three1 + $total_personal_three2;
$personal_three = round($total_personal_three/$total_population*100);


$total_bicycle1= (round($np['Q7A9S4'][0]->avg));
$total_bicycle2= (round($np['Q7A9S4_phase2'][0]->avg));
$total_bicycle= $total_bicycle1 + $total_bicycle2;
$bicycle= round($total_bicycle/$total_population*100);




$total_on_foot1 = (round($np['Q7A10S4'][0]->avg));
$total_on_foot2 = (round($np['Q7A10S4_phase2'][0]->avg));
$total_on_foot = $total_on_foot1 + $total_on_foot2;

$on_foot = round($total_on_foot/$total_population*100);

$total_others1 = (round($np['Q7A11S4'][0]->avg));
$total_others2 = (round($np['Q7A11S4_phase2'][0]->avg));
$total_others = $total_others1 + $total_others2;
$others = round($total_others/$total_population*100);


$air_remaining1 = $quality['Q9A1'][0]->total;
$air_remaining2 = $quality['Q9A1_phase2'][0]->total;
$air_remaining = $air_remaining1 + $air_remaining2;


$total_air_no1 = $quality['Q9A1'][1]->total;
$total_air_no2 = $quality['Q9A1_phase2'][1]->total;

$total_air_no = $total_air_no1 + $total_air_no2;


$total_school_phase1= 1689;
$total_school_phase2= 49;

$total_school_phase = $total_school_phase1 + $total_school_phase2;


$final_air_no = $total_air_no + $air_remaining;


$air_no = round($final_air_no/$total_school_phase*100);



$final_air_yes1 = $quality['Q9A1'][2]->total;
$final_air_yes2 = $quality['Q9A1_phase2'][2]->total;
$final_air_yes = $final_air_yes1 + $final_air_yes2;
$air_yes = round($final_air_yes/$total_school_phase*100);

//final array for school percentage

$final_array_poss6 = array(51,'','');
$final_four1 = json_encode($final_array_poss6);

$final_array_poss7 = array('',8,'');
$final_three1 = json_encode($final_array_poss7);

$final_array_poss = array('','',41);
$final_school_bus1 = json_encode($final_array_poss);


// Final Arrays
$final_array_poss6 = array('',$personal_four,'','');
$final_four = json_encode($final_array_poss6);

$final_array_poss7 = array('',$personal_three,'','');
$final_three = json_encode($final_array_poss7);

$final_array_poss = array($school_bus,'','','');
$final_school_bus = json_encode($final_array_poss);

$final_array_poss1 = array($public_bus,'','','');
$final_public_bus = json_encode($final_array_poss1);

$final_array_poss2 = array($school_transport,'','','');
$final_school_transport = json_encode($final_array_poss2);

$final_array_poss3 = array($school_public_transport,'','','');
$final_school_public_transport = json_encode($final_array_poss3);

$final_array_poss4 = array($four_wheeler,'','','');
$final_four_wheeler = json_encode($final_array_poss4);

$final_array_poss5 = array($three_wheeler,'','','');
$final_three_wheeler = json_encode($final_array_poss5);

$final_array_poss8 = array('','',$bicycle,'');
$final_bicycle = json_encode($final_array_poss8);

$final_array_poss9 = array('','',$on_foot,'');
$final_on_foot = json_encode($final_array_poss9);

$final_array_poss10 = array('','',$others,'');
$final_other = json_encode($final_array_poss10);


$final_array_poss11 = array('','','',(int)$air_yes);
$final_yes = json_encode($final_array_poss11);

$final_array_poss12 = array('','','',(int)$air_no);
$final_no = json_encode($final_array_poss12);
?>


<h1>PARTICIPATION BY AIR </h1>
  <div class="wrapper">
    <div id="container"> </div>
	<div id="container1"> </div>
	   <div id="container2"> </div>
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
            text: 'Air Report'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
				'Ownership of Vehicles',
                'Bus'
                
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
           name: 'NotOwnVehicles_count',
           data: <?php echo $final_NotOwnVehicles_count; ?>

       }, {
           name: 'Operatorowned_count',
           data: <?php echo $final_Operatorowned_count; ?>

       }, {
           name: 'OwnVehicles_count',
           data: <?php echo $final_OwnVehicles_count; ?>

       }, {
           name: 'CombinationSchoolandOperatorvehicles',
           data: <?php echo $final_CombinationSchoolandOperatorvehicles; ?>

       }, {
           name: 'Hiredvehicles',
           data: <?php echo $final_Hiredvehicles; ?>

       }, {
           name: 'Bus:Petrol',
           data: <?php echo $final_pet; ?>

       }, {
           name: 'Bus:Diesel',
           data: <?php echo $final_die; ?>

       }, {
           name: 'Bus:CNG',
           data: <?php echo $final_cng; ?>

       }, {
           name: 'Cars:Electric',
           data: <?php echo $final_electric; ?>

       }]
   });
</script>


<script type="text/javascript">
 Highcharts.chart('container1',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Air Analytics Report'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Sustainable Motorised',
                'Private Vehicles',
                'Non-Polluting Mode',
                'Air Quality Monitor'
            ],
            crosshair: true
        },
        
        yAxis: { 
            min: 0,
            title: {
                text: 'People Percentage'
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
            name: 'Personal Four wheeler',
            data: <?php echo $final_four; ?>
        },{
            name: 'Personal Three wheeler',
            data: <?php echo $final_three; ?>
        },{
            name: 'School bus',
            data: <?php echo $final_school_bus; ?>
        }, {
            name: 'Public bus',
            data: <?php echo $final_public_bus; ?>
        }, {
            name: 'School transport (other than bus)',
            data: <?php echo $final_school_transport; ?>
        }, {
            name: 'Public transport (other than bus)',
            data: <?php echo $final_school_public_transport; ?>
        }, {
            name: 'Taxi four-wheeler',
            data: <?php echo $final_four_wheeler; ?>
        }, {
            name: 'Taxi three-wheeler',
            data: <?php echo $final_three_wheeler; ?>
        }, {
            name: 'Bicycle',
            data: <?php echo $final_bicycle; ?>
        }, {
            name: 'On foot',
            data: <?php echo $final_on_foot; ?>
        }, {
            name: 'Others',
            data: <?php echo $final_other; ?>
        },{
            name: 'Yes(no. of school)',
            data: <?php echo $final_yes; ?>,
            
        }, {
            name: 'No(no. of school)',
            data: <?php echo $final_no; ?>,
           
        }]
    });
</script>


<script type="text/javascript">
 Highcharts.chart('container2',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'School Percentage'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Sustainable Motorised',
                'Private Vehicles',
                'Non-Polluting Mode',
                
            ],
            crosshair: true
        },
        
        yAxis: { 
            min: 0,
            title: {
                text: 'People Percentage'
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
            name: 'Sustainable Motorised',
            data: <?php echo $final_four1; ?>
        },{
            name: 'Private Vehicles',
            data: <?php echo $final_three1; ?>
        },{
            name: 'Non-Polluting Mode',
            data: <?php echo $final_school_bus1; ?>
        }]
    });
</script>
