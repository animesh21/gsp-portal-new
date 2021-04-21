<?php
//echo '<pre>'; print_r($Bus);die();
$petrol = $Bus['petrol'][0]->total;
$diesel = $Bus['diesel'][0]->total;
$cng = $Bus['cng'][0]->total;
$electric = $Bus['electric'][0]->total;

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
$school_bus = round($sustain['Q7A1S4'][0]->avg);
$public_bus = (round($sustain['Q7A2S4'][0]->avg));
$school_transport = (round($sustain['Q7A3S4'][0]->avg));
$school_public_transport = (round($sustain['Q7A4S4'][0]->avg));
$four_wheeler = (round($sustain['Q7A5S4'][0]->avg));
$three_wheeler = (round($sustain['Q7A6S4'][0]->avg));
$personal_four = round($private['Q7A7S4'][0]->avg);
$personal_three = (round($private['Q7A8S4'][0]->avg));
$bicycle= (round($np['Q7A9S4'][0]->avg));
$on_foot = (round($np['Q7A10S4'][0]->avg));
$others = (round($np['Q7A11S4'][0]->avg));
$air_no = $quality['Q9A1'][0]->total;
$air_yes = $quality['Q9A1'][1]->total;
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


$final_array_poss11 = array('','','',(int)$air_no);
$final_yes = json_encode($final_array_poss11);

$final_array_poss12 = array('','','',(int)$air_yes);
$final_no = json_encode($final_array_poss12);
?>


<h1>PARTICIPATION BY AIR </h1>
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
                text: 'Avg Vehicles'
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



