<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Green Schools Programme</title>
<meta name="generator" content="Green Schools Programme">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link href="<?php echo base_url(); ?>assets/front/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/buttons.dataTables.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/shadowbox.css" type="text/css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/front/css/responsive.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/jquery-ui-custom.css">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/custom.css">
<link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/responsive.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="http://studiotesseract.co/audit2016/upload/templates/tfr_responsive/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.alert {
	height: 50px !important;
	padding: 15px !important;
	font-weight: bold;
	border-radius: 0px;
}
.alert-success {
	border: 2px solid green;
}
.alert-danger {
	border: 2px solid red;
}
.schools-statics {padding: 35px 15px 15px; border-radius: 6px; font-size: 16px; width: 48%; min-height: 200px; margin: 10px 10px; display: inline-block; vertical-align: top; border: 1px solid #ccc; background: rgba(232, 101, 73, 0.1); position: relative;}
.schools-statics:nth-child(even) {margin-right: 0;}
.schools-statics .title {display: block; margin: 20px; text-align: center;}
.schools-statics .statics-circle {width: 80px; height: 80px; background: rgb(232, 101, 73); color: #fff; text-align: center; border-radius: 50%; padding: 12px; transition: all 0.5s ease-in-out; border: 5px solid #fff; margin: 0 auto;}
.schools-statics .statics-circle:hover {border: 5px solid rgb(232, 101, 73);}
.schools-statics .statics-circle span {font-weight: bold; font-size: 18px; display: block; margin: 0;}
.schools-statics label {color: #000; font-size: 12px; font-weight: normal; cursor: pointer;}
.schools-statics a {text-decoration: none;}
.navbar-default .navbar-nav>li>a {
    color: #fff !important;
    font-size: 15px!important;
    text-transform: uppercase!important;
    padding: 11px 20px!important;
    font-weight: 400!important;
}
.dropdown-menu li a  {
    color: #fff !important;
    font-size: 15px;
    text-transform: uppercase;
    padding: 11px 20px;
    font-weight: 400;
}
        </style>
</head>
<body class="lang-en groupbygroup showqnumcode-X">
<div id="loader"><img src="<?php echo base_url(''); ?>assets/img/loader.gif" width="64" height="64"></div>
<div class="main-wrapper">
<div class="main" role="main">
  <div id="jhead">
    <header class="hdr-hdr">
      <div class="container">
        <figure class="logo"><img src="<?php echo base_url(''); ?>assets/img/logo.png"
                                                      class="img-responsive" id="logo" alt="CSE GSP"></figure>
        <img src="<?php echo base_url(''); ?>assets/img/top-bnr2.png" alt="" class="top-bnr img-responsive"
                                 id="image"> </div>
    </header>
  </div>
  <div class="container">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class=""><a href="<?php echo base_url('download/downloadFiles'); ?>">Home</a></li>
            <!-- <li class=""><a href="#">Year Of Year <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li class=""><a href="#">2015</a></li>
                <li><a href="">2016</a></li>
                <li><a href="">2017</a></li>
                <li><a href="">2018</a></li>
              </ul>
            </li>-->
	  <!-- <li class=""><a href="">YEAR OF YEAR</a></li> -->
            <li class=""><a href="<?php echo base_url('download/downloadReportsSection'); ?>">Downloads</a></li>
            <li class=""> <a href="<?php echo base_url('Downloadlogout'); ?>" class="pull-right">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="col-md-12">
        <h2 style="margin-top: 20px"><strong>Waste Section,<?php echo' '. $this->session->userdata('USERNAME');?> </strong></h2>
        <hr/>
      </div>
      <div class="col-md-12">
        <div id="grapSchoolStatus"> </div>
      </div>
      <div class="col-md-12">
        <?php 
          $schoolId=getSchoolId($this->session->userdata('USER_ID')); 
		  $wasteSection=downloadWasteSectionQuestions($schoolId); 
		 ?>
        <table class="table table-bordered display">
          <tr>
            <td>Audit Year</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->audit_year)?$wasteSection[$i]->audit_year:""; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>School segregates solid waste</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td>
              <?php $r1=getYOYComparisonYesNo($wasteSection[$i]->school_segregated_solid_waste);?>

              <?php echo !empty($wasteSection[$i]->school_segregated_solid_waste)?$r1:""; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>Composting facility</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td>
              <?php $r2=getYOYComparisonYesNo($wasteSection[$i]->composting_facility);?>

              <?php echo !empty($wasteSection[$i]->composting_facility)?$r2:""; ?></td>
            <?php } ?>
          </tr>          
          <tr>
            <td>Total biodegradable waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_biodegradable_waste_generated)?$wasteSection[$i]->total_biodegradable_waste_generated:""; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>Total Dry/recyclable waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_dry_recyclable_waste_generated)?$wasteSection[$i]->total_dry_recyclable_waste_generated:""; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>Total Domestic waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_domestic_waste_generated)?$wasteSection[$i]->total_domestic_waste_generated:""; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>E-waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->e_waste_generated)?$wasteSection[$i]->e_waste_generated:""; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>Biomedical waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->biomedical_waste_generated)?$wasteSection[$i]->biomedical_waste_generated:""; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>Sanitary Waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->sanitary_waste_generated)?$wasteSection[$i]->sanitary_waste_generated:""; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>C&D waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->cd_waste_generated)?$wasteSection[$i]->cd_waste_generated:""; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>Total biodegradable waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_biodegradable_waste_recycled)?$wasteSection[$i]->total_biodegradable_waste_recycled:""; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>Total Dry/recyclable waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_dry_recyclable_waste_recycled)?$wasteSection[$i]->total_dry_recyclable_waste_recycled:""; ?></td>
            <?php } ?>
          </tr>
		  <tr>
            <td>Total Domestic waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_domestic_waste_recycled)?$wasteSection[$i]->total_domestic_waste_recycled:""; ?></td>
            <?php } ?>
          </tr>
		  <tr>
            <td>E-waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->e_waste_recycled)?$wasteSection[$i]->e_waste_recycled:""; ?></td>
            <?php } ?>
          </tr>
		  <tr>
            <td>Biomedical waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->biomedical_waste_recycled)?$wasteSection[$i]->biomedical_waste_recycled:""; ?></td>
            <?php } ?>
          </tr>
		  <tr>
            <td>Sanitary Waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->sanitary_waste_recycled)?$wasteSection[$i]->sanitary_waste_recycled:""; ?></td>
            <?php } ?>
          </tr>
	   <tr>
            <td>C&D waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->cd_waste_recycled)?$wasteSection[$i]->cd_waste_recycled:""; ?></td>
            <?php } ?>
          </tr>
	  <tr>
            <td>Does your school reuse textbooks?</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td>

              <?php $r3=getYOYComparisonYesNo($wasteSection[$i]->reuse_textbooks);?>

              <?php echo !empty($wasteSection[$i]->reuse_textbooks)?$r3:""; ?></td>
            <?php } ?>
          </tr>
	<tr>
            <td>Ewaste disposal?</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->what_is_the_final_destination_for_waste_from_your)?$wasteSection[$i]->what_is_the_final_destination_for_waste_from_your:""; ?></td>
            <?php } ?>
          </tr>

    <tr>
            <td>Does your school burn waste?</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td>
              <?php $r4=getYOYComparisonYesNo($wasteSection[$i]->does_your_school_burn_waste);?>

              <?php echo !empty($wasteSection[$i]->does_your_school_burn_waste)?$r4:""; ?></td>
            <?php } ?>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <p>Copyright © 2018 Centre for Science and Environment. For help, email <a href="mailto:ranjita@cseindia.org">support@greenschoolsprogramme.org</a> or call 011-4061600, ext – 321, 300. </p>
    <p></p>
  </div>
  <style type="text/css">
    .main > .container {
    background: #fff;
    padding: 0px 20px 45px!important;
    box-shadow: 0 0 6px #ccc;
    box-sizing: border-box;
   }
   .list-inline {
    padding-left: 0;
    margin-left: -5px;
    list-style: none;
    width: 154px;
   }
   .nav_main {
    background: #505050!important;
    text-align: center;
   }
  .navbar-default {
    margin-bottom: 0;
    border-radius: 0;
    background: #505050!important;
    border: 0;
    padding: 0;
   }
   .navbar-default li a { color:#FFFFFF!important;}
   ul.nav li:hover > ul.dropdown-menu {
    display: block;
   }
   .nav_main li li a {
    color: #333 !important;
}
.dropdown-menu>li>a {
    display: block;
    padding: 11px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333!important;
    white-space: nowrap;
    font-size: 15px!important;
}
   .nav_main li a:hover {
    background: #e45132;
    color: #fff;
   }
   .main > .container {
    background: #fff;
    padding:0px 0px 45px!important;
    box-shadow: 0 0 6px #ccc;
    box-sizing: border-box;
   }
   header .top-bnr {
    position: absolute;
    top: 11px;
    right: 0;
    transition: all 0.3s ease-out;
   }
   .table tr:nth-child(1)  td{background:#e86549!important; color:#FFFFFF;}
   .table tr:nth-child(1){background:#e86549!important; color:#FFFFFF; width:550px;}
   .table tr td:nth-child(1){background:#505050; color:#FFFFFF; width:550px;}
  </style>
</footer>
</body>
</html>
<!--close footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/front/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/chosen.jquery.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
//    var chart2 =  Highcharts.chart('grapSchoolStatus',{
//         chart: {
//             type: 'column'
//         },
//         title: {
//             text: 'Schools Participation Report In All GSP Audit'
//         },
//         xAxis: {
//             categories: [
//                 '2015',
// 				'2016',
// 				'2017',
// 				'2018',
				
//             ],
//             crosshair: true
//         },
		
// 		legend: {
//         enabled: true
//     },
    
		
//         exporting: { enabled: false },
//         credits: {enabled: false},
//         tooltip: {
//             headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
//             pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
//                 '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
//             footerFormat: '</table>',
//             shared: true,
//             useHTML: true
//         },
//         plotOptions: {
// 		     series: {
//             borderWidth: 0,
//             dataLabels: {
//                 enabled: true,
//                 format: '{point.y}'
//             }
//         },
		
//             column: {
//                 pointPadding: 0.2,
//                 borderWidth: 0
//             }
//         },
//         series: [{
//             name: 'School Performace Each Year',
// 			color:'rgb(124, 181, 236)',
//             data: [54.43,67.34,78.55,89.90] //NORTH
//             //Registration, Audit Started, Audit Completed, Feedback Recieved
//         }		
// 		],
// });
// // the button handler    
//     $('#buttonExport1').click(function() {
//         var e = document.getElementById("ExportOption1");
// 		var ExportAs = e.options[e.selectedIndex].value;   
       
//         if(ExportAs == 'PNG')
//         {
//             chart2.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
//         }
//         if(ExportAs == 'JPEG')
//         {
//             chart2.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
//         }
//         if(ExportAs == 'PDF')
//         {
//             chart2.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
//         }
//         if(ExportAs == 'SVG')
//         {
//             chart2.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
//         }
//     }); 

//     $('#buttonPrint').click(function() {
//         chart.setTitle(null, { text: ' ' });
//         chart.print();
//         chart.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
//     });


</script>
