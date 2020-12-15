<?php $this->load->view('WasteTrans/headerw'); ?>

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
        <table class="table table-bordered display" style="
    margin-top: 110px;
">
          <tr>
            <td>Audit Year</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->audit_year)?$wasteSection[$i]->audit_year:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>1. School segregates solid waste</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->school_segregated_solid_waste)?$wasteSection[$i]->school_segregated_solid_waste:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>2. Composting facility</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->composting_facility)?$wasteSection[$i]->composting_facility:"NA"; ?></td>
            <?php } ?>
          </tr>          
          <tr>
            <td>3. Total biodegradable waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_biodegradable_waste_generated)?$wasteSection[$i]->total_biodegradable_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>4. Total Dry/recyclable waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_dry_recyclable_waste_generated)?$wasteSection[$i]->total_dry_recyclable_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>5. Total Domestic waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_domestic_waste_generated)?$wasteSection[$i]->total_domestic_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>6. E-waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->e_waste_generated)?$wasteSection[$i]->e_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>7. Biomedical waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->biomedical_waste_generated)?$wasteSection[$i]->biomedical_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>8. Sanitary Waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->sanitary_waste_generated)?$wasteSection[$i]->sanitary_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>9. C&D waste generated (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->cd_waste_generated)?$wasteSection[$i]->cd_waste_generated:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>10. Total biodegradable waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_biodegradable_waste_recycled)?$wasteSection[$i]->total_biodegradable_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
          <tr>
            <td>11. Total Dry/recyclable waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_dry_recyclable_waste_recycled)?$wasteSection[$i]->total_dry_recyclable_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
		  <tr>
            <td>12. Total Domestic waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->total_domestic_waste_recycled)?$wasteSection[$i]->total_domestic_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
		  <tr>
            <td>13. E-waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->e_waste_recycled)?$wasteSection[$i]->e_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
		  <tr>
            <td>14. Biomedical waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->biomedical_waste_recycled)?$wasteSection[$i]->biomedical_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
		  <tr>
            <td>15. Sanitary Waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->sanitary_waste_recycled)?$wasteSection[$i]->sanitary_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
	   <tr>
            <td>16. C&D waste recycled (kg/month)</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->cd_waste_recycled)?$wasteSection[$i]->cd_waste_recycled:"NA"; ?></td>
            <?php } ?>
          </tr>
	  <tr>
            <td> 17. Does your school reuse textbooks?</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->reuse_textbooks)?$wasteSection[$i]->reuse_textbooks:"NA"; ?></td>
            <?php } ?>
          </tr>
	<tr>
            <td>18. Ewaste disposal?</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->what_is_the_final_destination_for_waste_from_your)?$wasteSection[$i]->what_is_the_final_destination_for_waste_from_your:"NA"; ?></td>
            <?php } ?>
          </tr>

    <tr>
            <td>19. Does your school burn waste?</td>
            <?php for($i=0;$i<sizeof($wasteSection);++$i){ ?>
            <td><?php echo !empty($wasteSection[$i]->does_your_school_burn_waste)?$wasteSection[$i]->does_your_school_burn_waste:"NA"; ?></td>
            <?php } ?>
          </tr>
        </table>

        <div  class= "col-md-12">
        
        <div class="clearfix">&nbsp;</div>
      <div class=" form-group">
        <label for="ex1"><span class="cube">1.</span>Per capita waste generation in school (sum of points 3 to 9 / total school population) kg/month<a class="tt"
                    
                                        class="badge">?</span></a></label>
        <input class="form-control" id="Q1B1" type="number" min="0" name="Q1B1"
                               placeholder="<?php if (isset($data['Q1B1'])) echo $data['Q1B1'] ?>" 
                               value="<?php echo set_value('Q1B1'); ?>"/>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <p>Copyright © 2018 Centre for Science and Environment. For help, email <a href="mailto:ranjita@cseindia.org">support@greenschoolsprogramme.org</a> or call 011-4061600, ext – 219, 300. </p>
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
