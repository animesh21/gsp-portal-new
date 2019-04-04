<?php



$no = round($Q6L1[0]->total);
$yes = (round($Q6L1[1]->total));
$Q4L5 = (round($Q4L5[0]->avg));



// Final Arrays


$final_array_poss6 = array($Q4L5,'');
$final_four = json_encode($final_array_poss6);

$final_array_poss7 = array('',$no);
$final_three = json_encode($final_array_poss7);

$final_array_poss = array('',$yes);
$final_school_bus = json_encode($final_array_poss);



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
            text: 'Land Analytics Report'
            
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
		'Percentage of Green Area',
                'Use of Chemical Pesticides'
                
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
            name: 'Percentage of Green Area',
            data: <?php echo $final_four; ?>

        },{
            name: 'Use of Chemical Pesticides(No)',
            data: <?php echo $final_three; ?>

        },{
            name: 'Use of Chemical Pesticides(Yes) ',
            data: <?php echo $final_school_bus; ?>

        }]
    });

</script>