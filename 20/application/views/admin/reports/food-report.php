<?php


$packaged_food_no = round($food['Q4F1'][0]->total);
$packaged_food_yes = round($food['Q4F1'][1]->total);

$mid_day_meal_no = round($food['Q5F1'][0]->total);
$mid_day_meal_yes = round($food['Q5F1'][1]->total);

$snacks_no =  round($food['snacks'][0]->total);
$snacks_yes = round($food['snacks'][1]->total);

$beverages_no =  round($food['beverages'][0]->total);
$beverages_yes = round($food['beverages'][1]->total);

$rewards_no =  round($food['rewards'][0]->total);
$rewards_yes = round($food['rewards'][1]->total);

$event_no =  round($food['event'][0]->total);
$event_yes = round($food['event'][1]->total);

$quiz_no =  round($food['quiz'][0]->total);
$quiz_yes = round($food['quiz'][1]->total);

$height_no =  round($food['height'][0]->total);
$height_yes = round($food['height'][1]->total);

$height_monthly =  round($height['monthly'][0]->total);
$height_quarterly = round($height['quarterly'][0]->total);
$height_bi_annually =  round($height['bi_annually'][0]->total);
$height_annually = round($height['annually'][0]->total);

$Avg = round($food['Q5F1S2'][0]->avg);

// Final Arrays


$final_array_poss6 = array($packaged_food_no,'','','','','','','','','');
$final_packaged_food_no = json_encode($final_array_poss6);

$final_array_poss7 = array($packaged_food_yes,'','','','','','','','','');
$final_packaged_food_yes = json_encode($final_array_poss7);

$final_array_poss = array('',$mid_day_meal_no,'','','','','','','','');
$final_mid_day_meal_no = json_encode($final_array_poss);

$final_array_poss1 = array('',$mid_day_meal_yes,'','','','','','','','');
$final_mid_day_meal_yes = json_encode($final_array_poss1);

$final_array_poss2 = array('','',$snacks_no,'','','','','','','');
$final_snacks_no = json_encode($final_array_poss2);

$final_array_poss3 = array('','',$snacks_yes,'','','','','','','');
$final_snacks_yes = json_encode($final_array_poss3);

$final_array_poss4 = array('','','',$beverages_no,'','','','','','');
$final_beverages_no = json_encode($final_array_poss4);

$final_array_poss5 = array('','','',$beverages_yes,'','','','','','');
$final_beverages_yes = json_encode($final_array_poss5);

$final_array_poss8 = array('','','','',$rewards_no,'','','','','');
$final_rewards_no = json_encode($final_array_poss8);

$final_array_poss9 = array('','','','',$rewards_yes,'','','','','');
$final_rewards_yes = json_encode($final_array_poss9);

$final_array_poss10 = array('','','','','',$event_no,'','','','');
$final_event_no = json_encode($final_array_poss10);

$final_array_poss11 = array('','','','','',$event_yes,'','','','');
$final_event_yes = json_encode($final_array_poss11);

$final_array_poss12 = array('','','','','','',$height_no,'','','');
$final_height_no= json_encode($final_array_poss12);

$final_array_poss13 = array('','','','','','',$height_yes,'','','');
$final_height_yes = json_encode($final_array_poss13);

$final_array_poss14 = array('','','','','','','',$height_monthly,'','');
$final_height_monthly = json_encode($final_array_poss14);
$final_array_poss15 = array('','','','','','','',$height_quarterly,'','');
$final_height_quarterly = json_encode($final_array_poss15);
$final_array_poss16 = array('','','','','','','',$height_bi_annually,'','');
$final_height_bi_annually = json_encode($final_array_poss16);
$final_array_poss17 = array('','','','','','','',$height_annually,'','');
$final_height_annually = json_encode($final_array_poss17);

$final_array_poss18 = array('','','','','','','','',$quiz_no,'');
$final_quiz_no = json_encode($final_array_poss18);
$final_array_poss19 = array('','','','','','','','',$quiz_yes,'');
$final_quiz_yes = json_encode($final_array_poss19);

$final_array_poss20 = array('','','','','','','','','',$Avg);
$final_Avg = json_encode($final_array_poss20);


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
            text: 'Food Analytics Report'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
		'packaged food',
                'Mid-day Meal',
                'serve Indian snacks',
                'serve Indian beverages',
                'food items as rewards',
                'Refreshments during events',
                'measure height and weight',
                'How regularly height & weight',
                'sponsored by food Brands',
                'Bring Lunch'
            ],
            crosshair: true
        },
         
        yAxis: { 
            min: 0,
            title: {
                text: 'Number Of School'
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
            name: 'packaged food(No)',
            data: <?php echo $final_packaged_food_no; ?>

        },{
            name: 'packaged food(Yes)',
            data: <?php echo $final_packaged_food_yes; ?>

        },{
            name: 'Mid-day Meal(No)',
            data: <?php echo $final_mid_day_meal_no; ?>

        }, {
            name: 'Mid-day Meal(Yes)',
            data: <?php echo $final_mid_day_meal_yes; ?>

        },{
            name: 'serve Indian snacks(No)',
            data: <?php echo $final_snacks_no; ?>

        }, {
            name: 'serve Indian snacks(Yes)',
            data: <?php echo $final_snacks_yes; ?>

        }, {
            name: 'serve Indian beverages(No)',
            data: <?php echo $final_beverages_no; ?>

        }, {
            name: 'serve Indian beverages(Yes)',
            data: <?php echo $final_beverages_yes; ?>

        }, {
            name: 'food items as rewards(No)',
            data: <?php echo $final_rewards_no; ?>

        },{
            name: 'food items as rewards(Yes)',
            data: <?php echo $final_rewards_yes; ?>,
            
        }, {
            name: 'Refreshments during events(No)',
            data: <?php echo $final_event_no; ?>,
           
        }, {
            name: 'Refreshments during events(Yes)',
            data: <?php echo $final_event_yes; ?>,
           
        }, {
            name: 'School measure height(No)',
            data: <?php echo $final_height_no; ?>,
           
        }, {
            name: 'School measure height(Yes)',
            data: <?php echo $final_height_yes; ?>,
           
        }, {
            name: 'Monthly',
            data: <?php echo $final_height_monthly; ?>,
           
        },{
            name: 'Quarterly',
            data: <?php echo $final_height_quarterly; ?>,
           
        },{
            name: 'Bi-Annually',
            data: <?php echo $final_height_bi_annually; ?>,
           
        },{
            name: 'Annually',
            data: <?php echo $final_height_annually; ?>,
           
        },{
            name: 'sponsored by food companies(No)',
            data: <?php echo $final_quiz_no; ?>,
           
        },{
            name: 'sponsored by food companies(Yes)',
            data: <?php echo $final_quiz_yes; ?>,
           
        },{
            name: 'How many Students bring',
            data: <?php echo $final_Avg; ?>,
           
        }]
    
    });

</script>
