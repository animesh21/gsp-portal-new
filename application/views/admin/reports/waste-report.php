<?php

//echo '<pre>';
//print_r($paper);
//print_r($plastic);
//print_r($ewaste);
//die();

$no_bins = round($waste['Q5Wa11S1'][0]->avg);
$one_bins = round($waste['Q5Wa11S2'][0]->avg);
$two_bins = round($waste['Q5Wa11S3'][0]->avg);
$three_bins = round($waste['Q5Wa11S4'][0]->avg);

$composting_facility_no = round($waste['Q9Wa1'][0]->total);
$composting_facility_yes = round($waste['Q9Wa1'][1]->total);

$natural_composting = round($waste['natural_composting'][0]->total);
$vermi_composting = round($waste['vermi_composting'][0]->total);
$mechanical_composting = round($waste['mechanical_composting'][0]->total);
$other = round($waste['other'][0]->total);

$reuse_book_no = round($waste['reuse_book'][0]->total);
$reuse_book_yes = round($waste['reuse_book'][1]->total);


$paper_kabadiwala = round($paper['kabadiwala'][0]->total);
$paper_authorized_dealer = round($paper['authorized_dealer'][0]->total);
$paper_dumped = round($paper['dumped'][0]->total);
$paper_internal_procedure = round($paper['internal_procedure'][0]->total);

$plastic_kabadiwala = round($plastic['kabadiwala'][0]->total);
$plastic_authorized_dealer = round($plastic['authorized_dealer'][0]->total);
$plastic_dumped = round($plastic['dumped'][0]->total);
$plastic_internal_procedure = round($plastic['internal_procedure'][0]->total);

$ewaste_kabadiwala = round($ewaste['kabadiwala'][0]->total);
$ewaste_authorized_dealer = round($ewaste['authorized_dealer'][0]->total);
$ewaste_dumped = round($ewaste['dumped'][0]->total);
$ewaste_internal_procedure = round($ewaste['internal_procedure'][0]->total);

$burn_no = round($burn['Q15Wa1'][0]->total);
$burn_yes = round($burn['Q15Wa1'][1]->total);

// Final Arrays


$final_array_poss6 = array($no_bins,'','','','');
$final_no = json_encode($final_array_poss6);

$final_array_poss7 = array($one_bins,'','','','');
$final_one= json_encode($final_array_poss7);

$final_array_poss = array($two_bins,'','','','');
$final_two = json_encode($final_array_poss);

$final_array_poss1 = array($three_bins,'','','','');
$final_three= json_encode($final_array_poss1);

$final_array_poss2 = array('',$composting_facility_no,'','','');
$final_composting_facility_no= json_encode($final_array_poss2);
$final_array_poss8 = array('',$composting_facility_yes,'','','');
$final_composting_facility_yes= json_encode($final_array_poss8);

$final_array_poss3 = array('','',$natural_composting,'','');
$final_natural_composting= json_encode($final_array_poss3);
$final_array_poss4 = array('','',$vermi_composting,'','');
$final_vermi_composting= json_encode($final_array_poss4);
$final_array_poss5 = array('','',$mechanical_composting,'','');
$final_mechanical_composting= json_encode($final_array_poss5);
$final_array_poss9 = array('','',$other,'','');
$final_other= json_encode($final_array_poss9);

$final_array_poss10 = array('','','',$reuse_book_no,'');
$final_reuse_book_no= json_encode($final_array_poss10);
$final_array_poss11 = array('','','',$reuse_book_yes,'');
$final_reuse_book_yes= json_encode($final_array_poss11);

$final_array_poss24 = array('','','','',$burn_no);
$final_burn_no= json_encode($final_array_poss24);
$final_array_poss25 = array('','','','',$burn_yes);
$final_burn_yes= json_encode($final_array_poss25);

$final_array_poss12 = array($paper_kabadiwala,'','');
$final_kabadiwala= json_encode($final_array_poss12);
$final_array_poss13 = array($paper_authorized_dealer,'','');
$final_paper_authorized_dealer= json_encode($final_array_poss13);
$final_array_poss14 = array($paper_dumped,'','');
$final_paper_dumped= json_encode($final_array_poss14);
$final_array_poss15 = array($paper_internal_procedure,'','');
$final_paper_internal= json_encode($final_array_poss15);

$final_array_poss16 = array('',$plastic_kabadiwala,'');
$final_plastic_kabadiwala= json_encode($final_array_poss16);
$final_array_poss17 = array('',$plastic_authorized_dealer,'');
$final_plastic_authorized= json_encode($final_array_poss17);
$final_array_poss18 = array('',$plastic_dumped,'');
$final_plastic_dumped= json_encode($final_array_poss18);
$final_array_poss19 = array('',$plastic_internal_procedure,'');
$final_plastic_internal= json_encode($final_array_poss19);

$final_array_poss20 = array('','',$ewaste_kabadiwala);
$final_ewaste_kabadiwala= json_encode($final_array_poss20);
$final_array_poss21 = array('','',$ewaste_authorized_dealer);
$final_ewaste_authorized= json_encode($final_array_poss21);
$final_array_poss22 = array('','',$ewaste_dumped);
$final_ewaste_dumped= json_encode($final_array_poss22);
$final_array_poss23 = array('','',$ewaste_internal_procedure);
$final_ewaste_internal= json_encode($final_array_poss23);

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
            text: 'Waste Analytics Report'
            
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [
		'Collection Points with Bins',
                'Composting facility(No. of school)',
                'Methodology of composting(No. of school)',
                'Reuse textbooks(No. of school)',
		'Burn Waste(No. of school)'    
                
            ],
            crosshair: true
        },
       
        
        yAxis: { 
            min: 0,
            title: {
                text: 'Avg Points'
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
            name: 'Collection points with no bins',
            data: <?php echo $final_no; ?>

        },{
            name: 'Collection points with one bin (mixed)',
            data: <?php echo $final_one; ?>

        },{
            name: 'Collection points with two bins',
            data: <?php echo $final_two; ?>

        },{
            name: 'Collection points with three bins',
            data: <?php echo $final_three; ?>

        },{
            name: 'Composting facility(No)',
            data: <?php echo $final_composting_facility_no; ?>

        },{
            name: 'Composting facility(Yes)',
            data: <?php echo $final_composting_facility_yes; ?>

        },{
            name: 'Natural Composting',
            data: <?php echo $final_natural_composting; ?>

        },{
            name: 'Vermi Composting',
            data: <?php echo $final_vermi_composting; ?>

        },{
            name: 'Mechanical Composting',
            data: <?php echo $final_mechanical_composting; ?>

        },{
            name: 'Other',
            data: <?php echo $final_other; ?>

        },{
            name: 'Reuse textbooks(No)',
            data: <?php echo $final_reuse_book_no; ?>

        },{
            name: 'Reuse textbooks(Yes)',
            data: <?php echo $final_reuse_book_yes; ?>

        },{
            name: 'Burn Waste(No)',
            data: <?php echo $final_burn_no; ?>

        },{
            name: 'Burn Waste(Yes)',
            data: <?php echo $final_burn_yes; ?>

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
		'Paper recycling procedures',
                'Plastic recycling procedures',
                'E-waste recycling procedures'
                
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
            name: 'kabadiwala',
            data: <?php echo $final_kabadiwala; ?>

        },{
            name: 'Authorized dealer',
            data: <?php echo $final_paper_authorized_dealer; ?>

        },{
            name: 'Dumped at a designated community site',
            data: <?php echo $final_paper_dumped; ?>

        },{
            name: 'Internal procedure',
            data: <?php echo $final_paper_internal; ?>

        },{
            name: 'kabadiwala',
            data: <?php echo $final_plastic_kabadiwala; ?>

        },{
            name: 'Authorized dealer',
            data: <?php echo $final_plastic_authorized; ?>

        },{
            name: 'Dumped at a designated community site',
            data: <?php echo $final_plastic_dumped; ?>

        },{
            name: 'Internal procedure',
            data: <?php echo $final_plastic_internal; ?>

        },{
            name: 'kabadiwala',
            data: <?php echo $final_ewaste_kabadiwala; ?>

        },{
            name: 'Authorized dealer',
            data: <?php echo $final_ewaste_authorized; ?>

        },{
            name: 'Dumped at a designated community site',
            data: <?php echo $final_ewaste_dumped; ?>

        },{
            name: 'Internal procedure',
            data: <?php echo $final_ewaste_internal; ?>

        }]
    });

</script>
