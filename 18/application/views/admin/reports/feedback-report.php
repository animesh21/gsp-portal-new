<?php

$participatedbefore_no =  round($feedback['Q1Fe1'][0]->total);
$participatedbefore_yes = round($feedback['Q1Fe1'][1]->total);



$easy_to_understand_no =  round($feedback['Q1Fe3'][0]->total);
$easy_to_understand_yes = round($feedback['Q1Fe3'][1]->total);


$Green_by_2019_no =  round($feedback['Q1Fe4'][0]->total);
$Green_by_2019_yes = round($feedback['Q1Fe4'][1]->total);



$times_GSP_contacted_never =  round($feedback['Q1Fe9'][0]->total);
$times_GSP_contacted_once = round($feedback['Q1Fe9'][1]->total);
$times_GSP_contacted_twice = round($feedback['Q1Fe9'][2]->total);
$times_GSP_contacted_morethantwice = round($feedback['Q1Fe9'][3]->total);



$Content_good = round($feedback['Q8Fe1'][0]->total);
$Content_average = round($feedback['Q8Fe1'][1]->total);
$Content_bad = round($feedback['Q8Fe1'][2]->total);


$Distribution_of_timing_among_tasks_good=round($feedback['Q8Fe2'][0]->total);
$Distribution_of_timing_among_tasks_average=round($feedback['Q8Fe2'][1]->total);
$Distribution_of_timing_among_tasks_bad=round($feedback['Q8Fe2'][2]->total);


$Sequencing_of_questions_good = round($feedback['Q8Fe3'][0]->total);
$Sequencing_of_questions_average = round($feedback['Q8Fe3'][1]->total);
$Sequencing_of_questions_bad = round($feedback['Q8Fe3'][2]->total);






// Final Arrays


$final_array_poss1 = array($participatedbefore_no,'','','');
$final_participatedbefore_no = json_encode($final_array_poss1);

$final_array_poss2 = array($participatedbefore_yes,'','','');
$final_participatedbefore_yes = json_encode($final_array_poss2);


$final_array_poss3 = array('',$easy_to_understand_no,'','');
$final_easy_to_understand_no = json_encode($final_array_poss3);

$final_array_poss4 = array('',$easy_to_understand_yes,'','');
$final_easy_to_understand_yes = json_encode($final_array_poss4);



$final_array_poss5 = array('','',$Green_by_2019_no,'');
$final_Green_by_2019_no = json_encode($final_array_poss5);

$final_array_poss6 = array('','',$Green_by_2019_yes,'');
$final_Green_by_2019_yes = json_encode($final_array_poss6);


$final_array_poss7 = array('','','',$times_GSP_contacted_never);
$final_times_GSP_contacted_never = json_encode($final_array_poss7);


$final_array_poss8 = array('','','',$times_GSP_contacted_once);
$final_times_GSP_contacted_once = json_encode($final_array_poss8);


$final_array_poss9 = array('','','',$times_GSP_contacted_twice);
$final_times_GSP_contacted_twice = json_encode($final_array_poss9);


$final_array_poss10 = array('','','',$times_GSP_contacted_morethantwice);
$final_times_GSP_contacted_morethantwice = json_encode($final_array_poss10);


$final_array_poss11 = array($Content_good,'','');
$final_Content_good = json_encode($final_array_poss11);

$final_array_poss12 = array($Content_average,'','');
$final_Content_average = json_encode($final_array_poss12);

$final_array_poss13 = array($Content_bad,'','');
$final_Content_bad = json_encode($final_array_poss13);


$final_array_poss14 = array('',$Distribution_of_timing_among_tasks_good,'');
$final_Distribution_of_timing_among_tasks_good = json_encode($final_array_poss14);

$final_array_poss15 = array('',$Distribution_of_timing_among_tasks_average,'');
$final_Distribution_of_timing_among_tasks_average= json_encode($final_array_poss15);


$final_array_poss16 = array('',$Distribution_of_timing_among_tasks_bad,'');
$final_Distribution_of_timing_among_tasks_bad= json_encode($final_array_poss16);


$final_array_poss17 = array('','',$Sequencing_of_questions_good);
$final_Sequencing_of_questions_good= json_encode($final_array_poss17);

$final_array_poss18 = array('','',$Sequencing_of_questions_average);
$final_Sequencing_of_questions_average= json_encode($final_array_poss18);


$final_array_poss19 = array('','',$Sequencing_of_questions_bad);
$final_Sequencing_of_questions_bad= json_encode($final_array_poss19);








?>


<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


<div id="container1" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


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
            text: 'Feedback Analytics Report'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'participated in GSP Audit before',
                'Audit easy to understand',
                'School Green by 2019',
                'No. of times GSP contacted',
                
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
            name: 'participated in GSP Audit before(No)',
            data: <?php echo $final_participatedbefore_no; ?>

        },{
            name: 'participated in GSP Audit before(Yes)',
            data: <?php echo $final_participatedbefore_yes; ?>

        },{
            name: 'Audit easy to understand(No)',
            data: <?php echo $final_easy_to_understand_no; ?>

        }, {
            name: 'Audit easy to understand(Yes)',
            data: <?php echo $final_easy_to_understand_yes; ?>

        },{
            name: 'School Green by 2019(No)',
            data: <?php echo $final_Green_by_2019_no; ?>

        }, {
            name: 'School Green by 2019(Yes)',
            data: <?php echo $final_Green_by_2019_yes; ?>

        }, {
            name: 'No. of times GSP contacted(Never)',
            data: <?php echo $final_times_GSP_contacted_never; ?>

        }, {
            name: 'No. of times GSP contacted(Once)',
            data: <?php echo $final_times_GSP_contacted_once; ?>

        }, {
            name: 'No. of times GSP contacted(Twice)',
            data: <?php echo $final_times_GSP_contacted_twice; ?>

        },{
            name: 'No. of times GSP contacted(More than twice)',
            data: <?php echo $final_times_GSP_contacted_morethantwice; ?>,
            
        }]
    
    });

</script>




<script type="text/javascript">
 Highcharts.chart('container1',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Overall design of the audit'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
                'Content',
                'Distribution of timing among tasks',
                'Sequencing of questions',
                
                
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
            name: 'Content(Good)',
            data: <?php echo $final_Content_good; ?>

        },{
            name: 'Content(Average)',
            data: <?php echo $final_Content_average; ?>

        },{
            name: 'Content(Bad)',
            data: <?php echo $final_Content_bad; ?>

        }, {
            name: 'Distribution of timing among tasks(Good)',
            data: <?php echo $final_Distribution_of_timing_among_tasks_good; ?>

        },{
            name: 'Distribution of timing among tasks(Average)',
            data: <?php echo $final_Distribution_of_timing_among_tasks_average; ?>

        }, {
            name: 'Distribution of timing among tasks(Bad)',
            data: <?php echo $final_Distribution_of_timing_among_tasks_bad; ?>

        }, {
            name: 'Sequencing of questions(Good)',
            data: <?php echo $final_Sequencing_of_questions_good; ?>

        }, {
            name: 'Sequencing of questions(Average)',
            data: <?php echo $final_Sequencing_of_questions_average; ?>

        }, {
            name: 'Sequencing of questions(Bad)',
            data: <?php echo $final_Sequencing_of_questions_bad; ?>

        }]
    
    });

</script>