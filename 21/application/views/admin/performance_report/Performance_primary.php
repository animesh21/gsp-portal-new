<html>
<head>
<meta charset="utf-8">
<title>Performance Report</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url(); ?>assets/css/performance.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/performance.css" rel="stylesheet" media="print">
<style type="text/css" media="all">

/*  newcss */
  /* GSP Performance Report CSS */

* {box-sizing: border-box;}
body {font-family: arial, sans-serif; font-weight: normal; font-size: 12px; line-height: 1.4; color: #5b5d64; margin: 0; padding: 0;}
h1, h2, h3, h4, h5, h6 {font-weight: normal; line-height: 1.2; margin: 0; padding: 0;}
h2 {font-size: 19px; margin-bottom: 20px; color: #e86549; border-bottom: 0px dashed #fff;}
h3 {font-size: 18px; color: #c63141; margin-bottom: 10px;}
h4 {font-size: 15px; color: #c63141; margin-bottom: 10px;}
p {margin: 0 0 15px 0;}
a {color: #5b5d64;}
a:focus,a:hover {text-decoration: none;}
ol, ul, li {margin: 0; padding: 0; list-style: none;}
th {font-size: 13px;}
td {font-size: 12px;}
figure {margin: 0; padding: 0}
table {margin:0; padding: 0; border-spacing: 0; border-collapse: collapse;}
@page {margin: 15mm 0 0 0;}

/* ============ Report Container =============== */
.report-container {width: 700px; margin: 0 auto;

/* ============ Report Cover =============== */
.cover {width: 700px; position: relative}
.cover figure img {width: 700px;}
.report-title {position: absolute; left: 50px; top: 450px; color: #4a5358}
.report-title h4 {font-size: 23px; margin-bottom: 2px;}
.report-title h3 {font-size: 31px; margin-bottom: 17px;}
.report-title p {margin: 0; font-size: 20px;}

/* ============== All Sections Common =============== */
.introduction, .air, .energy, .food, .land, .water, .waste {margin: 25px;}

/* header */
h2 {page-break-before: always;}
h2 figure {display: inline-block; margin-right: 5px; width: 35px; vertical-align: middle}
h2 label {display: inline-block; width: 68%; line-height:45px;}
h2 span {display: inline-block; width: 20%; font-size: 11px; color: #898585; background: #efefef; padding: 5px; margin-top: 10px; float: right}


/* footer */
.footer {background: #efefef; color: #898585; height: 34px; line-height: 34px; margin: 15px 0;}
.footer p {display: inline-block; vertical-align: middle; width: 94%; font-size: 11px; text-indent: 15px;}
.footer .p-number {display: inline-block; font-size: 25px; }

/* performance */
.performance-category {margin: 30px 0 20px 0}
.performance-category ul {overflow: hidden}
.performance-category li {margin-bottom: 24px; overflow: hidden}
.performance-category figure {display: inline-block; width: 21%; margin-right: 20px;}
.performance-category .description {display: inline-block; vertical-align: top; width: 75%; margin-bottom: 10px;}

/* ============ Introduction Page =============== */
.introduction h2 label {width: 67.7%;}
.introduction h2 span {margin-top: 0;}
.introduction p {font-size: 13px; margin: 0 0 15px 0; text-align: justify}
.intro-heading {padding-bottom: 10px;}

.introduction-graph {margin: 25px 0 25px 0; overflow: hidden}
.introduction-graph figcaption {margin: 15px 0 0 0;}

.intro-table {border: 1px solid #c0bfbf; border-collapse: collapse; margin-bottom: 10px; margin-top: 10px;}
.intro-table th {background: #e86549; color: #fff; font-weight: 400; padding:3px 5px; border-left: 1px solid #fff;}
.intro-table th:first-child {border: none; border-bottom: 1px solid #fff}
.intro-table td {text-align: center; padding:2px 4px; border: 1px solid #c0bfbf;}

/* ========== Section Introduction ========== */
p.intro-text {font-size: 14px;}
.remember {background: #f2b3ba; padding: 15px 12px 20px 12px; margin: 20px 0;}
.remember ul {padding-left: 14px;}
.remember li {background: url("../images/remember-list.png") 0 2px no-repeat; padding-left:15px;}

/* ============== Air ============== */
.air h2 label {color: #c63141;}
.air p, .energy p {font-size: 12px;}

/* ============== Energy ============== */
.energy h2 label, .energy h3, .energy h4 {color: #c05090}
.energy .remember {background: #fac2e2}
.energy .remember li {background: url("../images/energy-list.png") 0 2px no-repeat; padding-left:15px;}

/* ============== Food ============== */
.food h2 label, .food h3, .food h4 {color: #f4b818}
.food .remember {background: #f3e3b9}
.food .remember li {background: url("../images/food-list.png") 0 2px no-repeat; padding-left:15px;}

/* ============== Land ============== */
.land h2 label, .land h3, .land h4 {color: #009bb5}
.land .remember {background: #98e2ef}
.land .remember li {background: url("../images/land-list.png") 0 2px no-repeat; padding-left:15px;}

/* ============== Water ============== */
.water h2 label, .water h3, .water h4 {color: #8295cc}
.water .remember {background: #b9c7ef}
.water .remember li {background: url("../images/water-list.png") 0 2px no-repeat; padding-left:15px;}

/* ============== Waste ============== */
.waste h2 label, .waste h3, .waste h4 {color: #00aa7e}
.waste .remember {background: #b0f0df}
.waste .remember li {background: url("../images/waste-list.png") 0 2px no-repeat; padding-left:15px;}
.page-break-before-new{page-break-before: always;}
.performance-blue-bg{background: #8295cc !important}
.performance-orange-bg{background: #c05090 !important}
@media print{
    * {box-sizing: border-box;}
body {font-family: arial, sans-serif; font-weight: normal; font-size: 12px; line-height: 1.4; color: #5b5d64; margin: 0; padding: 0;}
h1, h2, h3, h4, h5, h6 {font-weight: normal; line-height: 1.2; margin: 0; padding: 0;}
h2 {font-size: 19px; margin-bottom: 20px; color: #e86549; border-bottom: 2px dashed #e1e1e1;}
h3 {font-size: 18px; color: #c63141; margin-bottom: 10px;}
h4 {font-size: 15px; color: #c63141; margin-bottom: 10px;}
p {margin: 0 0 15px 0;}
a {color: #5b5d64;}
a:focus,a:hover {text-decoration: none;}
ol, ul, li {margin: 0; padding: 0; list-style: none;}
th {font-size: 13px;}
td {font-size: 12px;}
figure {margin: 0; padding: 0}
table {margin:0; padding: 0; border-spacing: 0; border-collapse: collapse;}
@page {margin: 15mm 0 0 0;}

/* ============ Report Container =============== */
.report-container {width: 700px; margin: 0 auto; background:  #f4f4f4;}

/* ============ Report Cover =============== */
.cover {width: 700px; position: relative}
.cover figure img {width: 700px;}
.report-title {position: absolute; left: 50px; top: 450px; color: #4a5358}
.report-title h4 {font-size: 23px; margin-bottom: 2px;}
.report-title h3 {font-size: 31px; margin-bottom: 17px;}
.report-title p {margin: 0; font-size: 20px;}

/* ============== All Sections Common =============== */
.introduction, .air, .energy, .food, .land, .water, .waste {margin: 25px;}

/* header */
h2 {page-break-before: always;}
h2 figure {display: inline-block; margin-right: 5px; width: 55px; vertical-align: middle}
h2 label {display: inline-block; width: 68%; line-height:45px;}
h2 span {display: inline-block; width: 20%; font-size: 11px; color: #898585; background: #efefef; padding: 5px; margin-top: 10px; float: right}


/* footer */
.footer {background: #efefef; color: #898585; height: 34px; line-height: 34px; margin: 15px 0;}
.footer p {display: inline-block; vertical-align: middle; width: 94%; font-size: 11px; text-indent: 15px;}
.footer .p-number {display: inline-block; font-size: 25px; }

/* performance */
.performance-category {margin: 30px 0 20px 0}
.performance-category ul {overflow: hidden}
.performance-category li {margin-bottom: 24px; overflow: hidden}
.performance-category figure {display: inline-block; width: 21%; margin-right: 20px;}
.performance-category .description {display: inline-block; vertical-align: top; width: 75%; margin-bottom: 10px;}

/* ============ Introduction Page =============== */
.introduction h2 label {width: 67.7%;}
.introduction h2 span {margin-top: 0;}
.introduction p {font-size: 13px; margin: 0 0 15px 0; text-align: justify}
.intro-heading {padding-bottom: 10px;}

.introduction-graph {margin: 25px 0 25px 0; overflow: hidden}
.introduction-graph figcaption {margin: 15px 0 0 0;}

.intro-table {border: 1px solid #c0bfbf; border-collapse: collapse; margin-bottom: 10px; margin-top: 10px;}
.intro-table th {background: #e86549; color: #fff; font-weight: 400; padding:3px 5px; border-left: 1px solid #fff;}
.intro-table th:first-child {border: none; border-bottom: 1px solid #fff}
.intro-table td {text-align: center; padding:2px 4px; border: 1px solid #c0bfbf;}

/* ========== Section Introduction ========== */
p.intro-text {font-size: 14px;}
.remember {background: #f6f0d0; padding: 15px 12px 20px 12px; margin: 20px 0;}
.remember ul {padding-left: 14px;}
.remember li {background: url("../images/remember-list.png") 0 2px no-repeat; padding-left:15px;}

/* ============== Air ============== */
.air h2 label {color: #c63141;}
.air p, .energy p {font-size: 12px;}

/* ============== Energy ============== */
.energy h2 label, .energy h3, .energy h4 {color: #c05090}
.energy .remember {background: #f9eacc}
.energy .remember li {background: url("../images/energy-list.png") 0 2px no-repeat; padding-left:15px;}

/* ============== Food ============== */
.food h2 label, .food h3, .food h4 {color: #f4b818}
.food .remember {background: #fbd4e8}
.food .remember li {background: url("../images/food-list.png") 0 2px no-repeat; padding-left:15px;}

/* ============== Land ============== */
.land h2 label, .land h3, .land h4 {color: #009bb5}
.land .remember {background: #ebefd5}
.land .remember li {background: url("../images/land-list.png") 0 2px no-repeat; padding-left:15px;}

/* ============== Water ============== */
.water h2 label, .water h3, .water h4 {color: #8295cc}
.water .remember {background: #c7e0f0}
.water .remember li {background: url("../images/water-list.png") 0 2px no-repeat; padding-left:15px;}

/* ============== Waste ============== */
.waste h2 label, .waste h3, .waste h4 {color: #00aa7e}
.waste .remember {background: #d3cafa}
.waste .remember li {background: url("../images/waste-list.png") 0 2px no-repeat; padding-left:15px;}
.page-break-before-new{page-break-before: always;}
.performance-blue-bg{background: #8295cc !important}
.performance-orange-bg{background: #c05090 !important}
}

  
  
/*  newcss */


.page_break{ page-break-before: always;  }
.label {
    display: inline;
    padding: .2em .6em .3em;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: .25em;
}
section ul li figure img{ width:137px!important; height:125px!important;}
ul li{ margin-top:0px; padding-top:0px; display:block; margin-bottom:0px;}
ul li figure{margin-left:-12px;}
section ul li figure{ height:auto;}
.performance-category li {
     margin-bottom:15px!important; 
    overflow: hidden;
}
.performance-category {
     margin: 0px 0 0px 0!important; 
}
p{
  letter-spacing: 0px!important;
    word-wrap: normal!important;
    word-spacing: -1px!important;
}
h3{ font-size:13px!important;}
.performance-category .description {
    margin-bottom: -13px!important;
}
.cover figure img {
    width: 700px;
}
h2 span {
    display: inline-block;
    font-size:10px;
} 
</style>
</head>
<body>
<div class="report-container">
  <div class="cover">
    <figure class="banner"><img src="assets/img/performance/title.jpg"></figure>
    <div class="report-title">
       <div class="schoolName" style="margin-top:110px; text-align: center;">
         <p style="color: black; font-size: 16px;"><?php echo $performance[0]->name ?></p>
         <p style="color: black; font-size: 13px;"><?php echo $performance[0]->city; ?>, <?php echo $performance[0]->state_name; ?></p>

       </div>
       
      <div class="schoolCatagory" style="margin-top: 15px;">
         <table class="table" style="padding-left: 30%; color: black;font-size: 12px;">  
      <tbody>
        <tr>
          <th style="border-right: 2px solid #00a8b1; padding-right:5px; text-align: right;">Audit Coordinator</th>
          <td style="padding-left:5px; text-align: left;"><?php echo $performance[0]->coname; ?></td>           
        </tr>
        <tr>
          <th style="border-right: 2px solid #00a8b1; padding-right:5px; text-align: right;">Category</th>
          <td style="padding-left:5px; text-align: left;"><?php $schoolUserID = $performance[0]->userid;
    if(getFiled('Q1S1', $schoolUserID)==1){
      echo "Day Scholar";
    }else if(getFiled('Q1S1', $schoolUserID)==2){
      echo "Day Boarding";
    }else if(getFiled('Q1S1', $schoolUserID)==3){
      echo "Residential";   
    }else if(getFiled('Q1S1', $schoolUserID)==4){
      echo "Day Scholar + Day Boarding";
    }else if(getFiled('Q1S1', $schoolUserID)==5){
      echo "Day Boarding + Residential";
    }else if(getFiled('Q1S1', $schoolUserID)==6){
      echo "Day Scholar + Residential";
    }else if(getFiled('Q1S1', $schoolUserID)==7){
      echo " Day Scholar + Day Boarding + Residential";
    }
     ?> School</td>           
        </tr>
        <tr>
          <th style="border-right: 2px solid #00a8b1; padding-right:5px; text-align: right;">School Rating</th>
          <td style="padding-left:5px; text-align: left;">  <?php $percentage=getSchoolRatingPrimary($schoolUserID); 
        
            $percentage= number_format($percentage,2) ;
        
      if($percentage>=70){
       echo "<label>Green</label>";
      }elseif($percentage>=50 && $percentage<=69.9){
       echo "<label>Yellow</label>";
      }   
      elseif($percentage>=35 && $percentage<=49.9){
       echo "<label>Orange</label>";
      }   
      elseif($percentage<=34.9){
       echo "<label>Red</label>";
      }   
      else{
        echo "Not Rated";
      }
     
    ?></td>           
        </tr>
      </tbody>
    </table>
       </div>
    </div>
  </div>



<div class="introduction page-break-before" style="line-height: 13px;">
    <h2 class="intro-heading">
      <label>Introduction</label>
      <span>Green Schools Programme Audit 2019-2020</span></h2>
    <p>Dear Principal,</p>
    <p>We thank you for taking part in the GSP Audit 2019-20. We hope the exercise helped to make your school resource efficient and inculcate green practices in your students.
    </p> 
    <p>As you are aware, the Green Schools Programme (GSP) takes the students outside the classroom and helps them learn with joy. GSP has been built on the twin objectives of &#39;learning by doing&#39; and helping schools audit the consumption of natural resources within their premises and assess themselves as environment managers.
</p>
    <p>This year, more than 1700 schools from across the country submitted the audit. The GSP national environmental report for schools looks promising&#8211;1389 schools segregate waste at source, 962 schools practice composting and 631 schools give their e-waste to authorized dealers. 818 schools harvest rainwater, half of these recharge the groundwater and 220 schools store for use.<strong> BUT</strong> 79 per cent schools are dependent on ground water. The number of schools burning waste has reduced from last year but 18 per cent schools still burn waste. More than 300 schools sell packaged food and more than 550 schools distribute packaged food as refreshments during school events. There is a long way to go! 
 </p>
    <p>For the last few years, water and waste have been the focus areas, i.e. have detailed questions. This year, in addition to water and waste, energy section was detailed with emphasis on renewable sources of energy. 218 schools reported the use of solar energy, 21 schools reported using biogas and eight reported using wind energy.</b> 
</p>

<p>We hope the performance report, based on the data submitted by the school, will be useful to further strengthen existing practices and introduce new sustainable practices. For GSP Audit 2020, we request the school leadership as well as the teachers heading the audit sections to take advantage of the audit in raising awareness on one of the most challenging crises of our time&#8211;climate change.  Since the audit already tracks all the critical elements (mobility, energy consumption, food consumption, water and sanitation and solid waste management) that directly or indirectly contribute to global heating, GSP Audit 2020 will reinforce the climate change linkages while retaining its original format. <strong> Stay tuned for further details! </strong>
</p>
<p>
  As we wind down GSP Audit 2019, please note the following: 
</p>

 <ol style="list-style-type: japanese-formal !important;"> 
           
    <li style="font-weight: 400; font-size: 13px;">The performance report will help in assessing the initiatives undertaken by your school and move towards filling the gaps before the next GSP Audit.</li> 
    <li style="font-weight: 400; font-size: 13px; margin-top:6px;">Hope you have downloaded the response report and digital certificates of all those whose names were provided online.</li>    
    <li style="font-weight: 400; font-size: 13px; margin-top:6px;">Make sure that the data entered is correct for GSP Audit 2020. We hope that as the school continues to audit their consumption every year, they will refine the data collection process and complete the report with full honesty.</li>
    <li style="font-weight: 400; font-size: 13px; margin-top:6px;">Our focus will be on <strong> measuring the change over the previous years&#39; performances. </strong> And the degree of change will be appreciated as well as recognized.</li>
    <li style="font-weight: 400; font-size: 13px; margin-top:6px;">School hard copy certificates were dispatched in end&#8211;February and hope you have received the certificates </li>
    <li style="font-weight: 400; font-size: 13px; margin-top:6px;">To know more about the sections, please refer to the knowledge bank on the GSP website: <a href="https://www.greenschoolsprogramme.org/" style="color:blue;">www.greenschoolsprogramme.org</a>. There is some interesting material on Energy available on the <a href="https://www.greenschoolsprogramme.org/knowledge-bank/energy/gsp-solar-in-schools-initiative-2019-20/" style="color:blue;">GSP website</a></li>
  </ol>
  <br/>
  <p>
      With time running out in a climate-risked world, schools are urged to bring to the attention of youth the urgency, causes and consequences of climate change in a manner that they can relate to and act upon. Only when students make informed choices to make transformative changes in their lifestyle outside of school hours, too, to reduce their emissions related to mobility, energy, excessive consumption, etc., will collective efforts to raise committed environmental actors succeed. We hope that in the coming years, your school continues to participate and push the envelope for change.</p>
      <br/>
      <p>The GSP Audit 2020 will open by July 2020, and we look forward to receiving your audit report by the deadline.
</p>
    <p>Warmly,</p>
    <p>The GSP team</p>  
  <p><a href="http://www.greenschoolsprogramme.org/" style="color: blue;">support@greenschoolsprogramme.org</strong></a></p>
  <p>Ph: 011 40616000, 29955124 Ext 300, 321</p>
    <div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>
 
   
  

<div class="introduction page_break" style="line-height: 15px; font-weight: 400;">
<div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>
 
        <?php $percentage=getSchoolRatingPrimary($schoolUserID); 
        $school_category = getFiled('Q1S1', $schoolUserID);
        
            $percentage= ceil($percentage) ;
        
      if($percentage>=70){?>
       
      <p style="font-weight: 400; padding:10px; color: black; background-color: #92d050;">Congratulations! Based on the analysis of the sustainable practices adopted by your school, your school has been rated Green. Do continue your efforts and sustain the momentum - being continuously Green is not easy and we have noticed that when a school (or the students and teachers) drops its guard or fail to provide accurate data, they slide to a yellow or orange or red category. Do ensure your school continues to adhere (but not limited to) to the following, and push the envelope for change: </p>
         <p style="font-weight: 400;"> Do ensure your school continues to adhere (but not limited to) to the following, and push the envelope for change: </p>
         <ol style="list-style-type: japanese-formal !important;">

         <li style="font-weight: 400;"> Window Floor Ratio (WFR) more than 15 per cent </li>
          <li style="font-weight: 400;"> Majority of the population use sustainable mode of transport (public transport, e-rickshaws, etc) or non-pollution mode of transport (cycling, walking, etc) </li>
          <li style="font-weight: 400;"> Maximum use of energy efficient lighting to conserve energy and use of alternative sources of energy. GSP Audit encourages schools to minimize use of conventional lights without compromising sufficient lighting for students </li>
          <li style="font-weight: 400;"> Maintain a high green cover inside and around school campus along with greater biodiversity by planting native species of plants </li>
           <li style="font-weight: 400;"> Serve only cooked meals (or avoid packaged foods that are high in Fats, Sugar and Salt) to ensure healthy food consumption </li>
          <li style="font-weight: 400;"> Harvest rainwater through Rainwater Harvesting (RWH) systems and reuse treated waste water. Waste water can be treated at school level (decentralized waste water treatment system) or at centralized Sewage Treatment Plants (STPs)</li>
          <li style="font-weight: 400;"> Segregate waste at source efficiently and dispose responsibly. Recycling at least 90 per cent of the waste is recommended</li>
          <li style="font-weight: 400;"> Wet waste to be composted </li>
          <li style="font-weight: 400;"> Waste not to be burned </li>
        </ol>
  
  <br/><br/>
 <p style="font-weight: 400;">Look forward to your participation and improved performance, this year! </p>

 
     <?php  }elseif($percentage>=50 && $percentage<=69.9){?>
      

        <p style="font-weight: 400; padding:10px; color: black; background-color: yellow">Congratulations! Your school has been rated Yellow and our analysis of your school data and practices, reveals that your school is managing the resources within the school premises judiciously, BUT there is scope for improvement. We have also noticed that a few schools that were rated Green in the previous year may have been rated Yellow due to submission of inaccurate data, change in green practices, etc. Some of the practices recommended for a Green rating (but not limited to) are:</p>

        <ol style="list-style-type: japanese-formal !important;">
         
         <li style="font-weight: 400;"> Window Floor Ratio (WFR) more than 15 per cent </li>      
          <li style="font-weight: 400;"> Majority of the population to use sustainable mode of transport (public transport, e-rickshaws, etc) or non-pollution mode of transport (cycling, walking, etc)</li>
          <li style="font-weight: 400;"> Maximum use of energy efficient lighting to conserve energy and use of alternative sources of energy. GSP Audit encourages schools to minimize use of conventional lights without compromising sufficient lighting for students</li>
          <li style="font-weight: 400;"> Maintain a high green cover inside and around school campus along with greater biodiversity by planting native species of plants  </li>
          <li style="font-weight: 400;"> Serve only cooked meals (or avoid packaged foods that are high in Fats, Sugar and Salt) to ensure healthy food consumption </li>
          <li style="font-weight: 400;"> Harvest rainwater through Rainwater Harvesting (RWH) systems and reuse treated waste water. Waste water can be treated at school level (decentralized waste water treatment system) or at centralized Sewage Treatment Plants (STPs)</li>
          <li style="font-weight: 400;"> Pre and Post monsoon cleaning of RWH systems is important</li>
          <li style="font-weight: 400;"> Segregate waste at source efficiently and dispose responsibly. Recycling at least 90 per cent of the waste is recommended</li>
          <li style="font-weight: 400;"> Wet waste to be composted </li>

          <li style="font-weight: 400;"> Waste not to be burned </li>
      
      
 </ol>

<br/><br/>
 <p style="font-weight: 400;">Look forward to your participation and improved performance, this year! </p>


     <?php  }   
      elseif($percentage>=35 && $percentage<=49.9){ ?>       

        <p style="font-weight: 400; padding:10px; color: black; background-color: #ffa500;"> It is good that your school measured the consumption of resources. Our analysis of  your school data and practices reveals that you are missing some critical action points. It could be that your school does undertake these practices, but has not provided the data when submitting the audit. Some of the practices recommended for a Green rating (but not limited to) are:</p>
         
         <p style="font-weight: 400;">Some of the practices recommended for a Green rating (but not limited to) are: </p>

         <ol style="list-style-type: japanese-formal !important;">

         <li style="font-weight: 400;"> Window Floor Ratio (WFR) more than 15 per cent </li>
          <li style="font-weight: 400;"> Majority of the population to use sustainable mode of transport (public transport, e-rickshaws, etc) or non-pollution mode of transport (cycling, walking, etc) </li>
         <li style="font-weight: 400;"> Maximum use of energy efficient lighting to conserve energy and use of alternative sources of energy. GSP Audit encourages schools to minimize use of conventional lights without compromising sufficient lighting for students </li>
          <li style="font-weight: 400;"> Maintain a high green cover inside and around school campus along with greater biodiversity by planting native species of plants </li>
          <li style="font-weight: 400;"> Serve only cooked meals (or avoid packaged foods that are high in Fats, Sugar and Salt) to ensure healthy food consumption </li>
         <li style="font-weight: 400;"> Harvest rainwater through Rainwater Harvesting (RWH) systems and reuse treated waste water. Waste water can be treated at school level (decentralized waste water treatment system) or at centralized Sewage Treatment Plants (STPs) </li>
         <li style="font-weight: 400;"> Pre and Post monsoon cleaning of RWH systems </li>
         <li style="font-weight: 400;"> Segregates waste at source efficiently and dispose responsibly. Recycling at least 90 per cent of the waste is recommended </li>
         <li style="font-weight: 400;"> Wet waste to be composted </li>
         <li style="font-weight: 400;"> Waste not to be burned </li>
        </ol>
<br/><br/>
 <p style="font-weight: 400;">Look forward to your participation and improved performance, this year! </p>


     <?php }   
      elseif($percentage<=34.9){ ?>
     
       <p style="font-weight: 400; padding:10px; color: black; background-color:red;">It is good that your school measured the consumption of resources. Our analysis of  your school data and practices reveals that you are missing some critical action points. It could be that your school does undertake these practices, but has not provided the data when submitting the audit. Some of the practices recommended for a Green rating (but not limited to) are:</p>
         
         <p style="font-weight: 400;"> Some of the practices recommended for a Green rating (but not limited to) are:  </p>

         <ol style="list-style-type: japanese-formal !important;">

          <li style="font-weight: 400;"> Window Floor Ratio (WFR) more than 15 per cent </li>
          <li style="font-weight: 400;"> Majority of the population to use sustainable mode of transport (public transport, e-rickshaws, etc) or non-pollution mode of transport (cycling, walking, etc) </li>
          <li style="font-weight: 400;"> Maximum use of energy efficient lighting to conserve energy and use of alternative sources of energy. GSP Audit encourages schools to minimize use of conventional lights without compromising sufficient lighting for students </li>
          <li style="font-weight: 400;"> Maintain a high green cover inside and around school campus along with greater biodiversity by planting native species of plants </li>
          <li style="font-weight: 400;"> Serve only cooked meals (or avoid packaged foods that are high in Fats, Sugar and Salt) to ensure healthy food consumption </li>
          <li style="font-weight: 400;"> Harvest rainwater through Rain Water Harvesting (RWH) systems and treatment of waste water using Sewage Treatment Plants (STP) </li>
          <li style="font-weight: 400;"> Pre and Post monsoon cleaning of RWH systems </li>
          <li style="font-weight: 400;"> Pre and Post monsoon cleaning of RWH systems </li>
          <li style="font-weight: 400;"> Segregate waste at source efficiently and dispose responsibly. Recycling at least 90 per cent of the waste is recommended</li>
          <li style="font-weight: 400;"> Wet waste to be composted </li>
          <li style="font-weight: 400;"> Waste not to be burned </li>
         </ol>
       <br/><br/>
       <p style="font-weight: 400;">Look forward to your participation and improved performance, this year! </p>

    <?php  }   
            else{
        
      }
     
    ?>
       

</div>

  
    <h2 class="intro-heading">
      <label>Introduction</label>
      <span>Green Schools Programme Audit 2019-2020</span></h2>
    <p>A snapshot GSP Audit 2019-2020 is as follows:</p>
    <table width="100%" class="intro-table" cellspacing="0">
      <tr>
        <th width="22%">Rating</th>
        <th width="44%">Score (Percentage)</th>
        <th width="34%">Number of Schools</th>
      </tr>
      <tr>
        <td>GREEN</td>
        <td>70% & above</td>
        <td>172</td>
      </tr>
      <tr>
        <td>YELLOW</td>
        <td>Between 50-69.9%</td>
        <td>683</td>
      </tr>
      <tr>
        <td>ORANGE</td>
        <td>Between 35-49.9% </td>
        <td>756</td>
      </tr>
      <tr>
        <td>RED</td>
        <td>Below 34.9%</td>
        <td>93</td>
      </tr>
    </table>
    <figure> <img  src="assets/img/performance/categories.png" width="650"> </figure>
    <div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>
  </div>
  <div class="air" style="line-height: 14px;">
    <h2>
      <figure><img src="assets/img/performance/air.png" width="120"></figure>
      <label> </label>

      <span>Green Schools Programme Audit 2019-2020</span></h2>
    <p>Air pollution is responsible for close to 13 per cent of deaths in India and its burden is highest in northern states of Delhi, Punjab, Uttar Pradesh and Haryana. In fact, an average Indian will live 1.7 years longer if the country is able to clean its air.</p>
    <p>Air pollution has adverse effects on children, specifically. It has been found that children in polluted environment grow up with smaller lungs. Sources of air pollution are many and diverse. But none are as lethal as vehicles because they are responsible for very high exposure. Vehicular emissions take place in the breathing zone of people. Experts say that those who live or work in close proximity to heavily travelled roadways are subject to high levels of exposure. No wonder that during the past few years, we have been desperately looking out for tools to assess the problem and find ways to combat the menace.
   </p>
   <p>To know more about GSP&#39;s initiative on air pollution and explore the resource material, please go to the <a href="https://www.greenschoolsprogramme.org/knowledge-bank/gsp-air-pollution-seminar-2019-20/" style="color:blue;">GSP website.</a>
   </p>
    <section class="remember">
      <h3>Remember:</h3>
<ol style="list-style-type: japanese-formal !important;">
<li>Your school can make an impact and ensure cleaner air in the surroundings by opting for carpooling and shifting to CNG run vehicles, if CNG is available in your area (CNG is a cleaner fuel).</li>
<li>Encourage most of the permanent population to use non-polluting modes of transport such as walking or cycling, or use sustainable motorized vehicles such as buses and other public transport. Students in several schools have come up with new and innovative ways to discourage the school population to use private vehicles and incentivize them to use public transport or car pool.</li>
<li>Practices to achieve cleaner air will bear little result without attempts to ensure that there is circulation of fresh air. Fresh air keeps mind and body healthy, which helps students concentrate better and stay alert. The total window-floor ratio of a classroom should therefore be more than at least five per cent.</li>        
      </ol>
    </section>
    <div class="description">
      <h3>Your School's Performance</h3>
      <?php
                  $total_air_points = number_format(getPrimaryAirPoints($performance[0]->userid), 2);
                if ($total_air_points >= 10)
                    $point_performance_msg_a = "Your school fulfils all the norms of Air Quality check. Overall, the school has done very well in the Air section. ";
                elseif ($total_air_points >= 6)
                    $point_performance_msg_a = "Your school fulfils almost all the norms of Air Quality check. You can improve further by considering the recommendations provided in the assessment below.  Overall, the school has done well in the Air section.";
                elseif ($total_air_points >= 3)
                    $point_performance_msg_a = "Your school fulfils only a few norms of Air Quality check. You can improve by considering the recommendations provided in the assessment below.  Overall, the school has performed satisfactorily in the Air section.";
                elseif ($total_air_points < 3)
                    $point_performance_msg_a = "Your school fulfils less than average norms of Air Quality check. You can improve by considering the recommendations provided in the assessment below.  Overall, your school needs to increase efforts to improve its Air Quality.";
                ?>
      <p><?php echo $point_performance_msg_a ?></p>
    </div>
    <section class="performance-category">
      <ul>

<?php if(getFiled('Q4A1', $schoolUserID)!='') { ?>
<li>
          <figure> <img src="assets/img/performance/window.jpg"> </figure>
          <div class="description">
            <h3>Well Ventilated Classroom</h3>
            <?php
          $schoolUserID = $performance[0]->userid;
           $totalroom = getFiled('Q4A1', $schoolUserID);
           $wellroom = getFiled('Q5A2', $schoolUserID);
         
            
                                if ($totalroom == $wellroom) {
                                    $wellroom_msg = "All the school classrooms are well-ventilated. It implies that your school fulfils the oxygen requirement for the school community by providing more openings for better air circulation. Please note that this result is generated on the basis of the sample provided in the audit.";
                                }
                                elseif ($totalroom > $wellroom) {
                                    $wellroom_msg = "Some of the classrooms in your school are well-ventilated. If feasible, consider increasing ventilation by providing more openings in classrooms for better air circulation. Please note that this result is generated on the basis of the sample provided in the audit.";
                                  }
                                
                                ?>
            <p><?php if(isset($wellroom_msg)) { echo $wellroom_msg; } ?></p>
          </div>
        </li>
      <?php } ?>

          <?php 
          $schoolUserID = $performance[0]->userid;
          $window_floor = getFiled('Q5A110S2', $schoolUserID);
          $area_opening = getFiled('Q5A110S3', $schoolUserID);
        if(isset($area_opening) && $area_opening!=0) { ?>
        <li>
          <figure> <img src="assets/img/performance/window.jpg"> </figure>
          <div class="description">
            <h3>Classrooms Window Floor Ratio (WFR)</h3>
            <?php
           
          $avg = ($area_opening / $window_floor ) * 100;
          
               $view_avg = number_format($avg, 2);
      ?>
            <h4><?php echo $view_avg; ?> % Average WFR</h4>
            <?php
                                if ($view_avg > 50) {
                                    $window_floor_msg = "The window-floor ratio of the school is more than 50 per cent, which is quite high. It suggests that either the data has been incorrectly noted or there has been some mistake in feeding the data in the Audit. Nonetheless, we understand that your school fulfils the oxygen requirement for the school community by providing more openings for better air circulation. Please note that this result is generated on the basis of the sample provided in the audit.";
                                }
                                elseif ($view_avg > 10) {
                                    $window_floor_msg = "Your school's window-floor ratio is more than ten per cent. It suggests that your school fulfils the oxygen requirement for the school community by providing more openings for better air circulation. Please note that this result is generated on the basis of the sample provided in the audit.";
                                }
                                else if ($view_avg >= 5) {
                                    $window_floor_msg = "The window-floor ratio of the school is between five and ten per cent. It suggests that your school fulfils the oxygen requirement for the school community. Please note that this result is generated on the basis of the sample provided in the audit.";
                                } 
                                elseif ($view_avg < 5) {
                                    $window_floor_msg = "The window-floor ratio of the school is less than five per cent. It suggests that your school does not fulfil the oxygen requirement for the school community. If feasible, consider increasing the window-floor ratio by providing more openings in classrooms for better air circulation. Please note that this result is generated on the basis of the sample provided in the audit.";
                                } 
                                
                                ?>
            <p><?php echo $window_floor_msg; ?></p>
          </div>
        </li>
      <?php } ?>
        
        <li>
          <figure><img src="assets/img/performance/key.jpg"></figure>
          <div class="description">
            <h3>Ownership of Vehicles</h3>
            <?php
                                
                                    $data = getFiled('Q6A1', $schoolUserID);
                                    switch ($data) {
                                        case 1:
                                            $ownership = "School does not use or own vehicles";
                                            $ownership_msg = "This is a very good practice. Some schools do not have their own buses, but hire from a transport contractor. Your school's data indicates that students, teaching staff and others are using sustainable modes of transport to commute between the school and their houses.";
                                            break;
                                        case 2:
                                            $ownership = "Operator-owned vehicles";
                                            $ownership_msg = "This is a good practice. Your school does not own buses but has an operator-based network. This indicates that students, teaching staff and others are using sustainable modes of transport to commute between the school and their houses.";
                                            break;
                                        case 3:
                                            $ownership = "School-owned vehicles";
                                            $ownership_msg = "This is not an ideal situation as it is better for schools to hire buses from a transport contractor rather than to own them. Sharing buses with an operator is recommended.";
                                            break;
                                        case 4:
                                            $ownership = "A combination of school-owned and operator-owned vehicles";
                                            $ownership_msg = "It is good that your school uses operator-owned vehicles in addition to the ones owned by the school. It will be ideal if you can reduce the number of school-owned vehicles and transition to operator-owned completely. It is recommended that you ensure that the school has enough space to park the school-owned vehicles within the premises.";
                                            break;
                                        case 5:
                                            $ownership = "Hired vehicles (JNV schools)";
                                            $ownership_msg = "This arrangement is not ideally recommended. It will be ideal for the school to move to operator-owned vehicles. Please ensure that the school has enough space to park the hired vehicles within the school premises.";
                                            break;
                                        default :
                                            $ownership = "No Answer";
                                            $ownership_msg = "No Answer.Please give valid answer";
                                    }
                                
                                ?>
            <h4><?php echo $ownership; ?></h4>
            <p><?php echo $ownership_msg; ?></p>
          </div>
        </li>
      </ul>
    </section>
  </div>
  <?php 
if ($data == 3 || $data == 4) { ?>
  <div class="air">
    <h2>
      <label></label>
      <span>Green Schools Programme Audit 2019-2020</span></h2>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="assets/img/performance/age.jpg"></figure>
          <div class="description">
            <h3>Age of Vehicles</h3>
            <?php
    $totalvehicle = getFiled('Q6A2S1T1', $schoolUserID);
    $oldvehicles = getFiled('Q6A2S1T2', $schoolUserID);
    if($totalvehicle==0){
        $oldvehicles == 0 ;
        
    } else {
         $almostvicleper = (($oldvehicles / $totalvehicle) * 100);
    }
   
    if ($oldvehicles > 0 && $oldvehicles < $totalvehicle) {
        $vehicletype = "Combination of old and new vehicles";
        $vehicle_msg = "As you may know, vehicles that are older than eight years emit very high levels of pollutants. Therefore, it is suggested that you keep a record of the age of your vehicles.";
    } elseif ($oldvehicles == 0 || $oldvehicles == " ") {
        $vehicletype = "All new vehicles or around eight years";
        $vehicle_msg = "It is commendable that your school keeps a record of the age of the vehicles. It is crucial that the vehicle norms are followed to ensure better air quality around us since old vehicles emit very high levels of pollutants.";
    } elseif ($oldvehicles == $totalvehicle) {
        $vehicletype = "All vehicles are old";
        $vehicle_msg = "As you may know, vehicles that are older than eight years emit very high levels of pollutants. Therefore, it is strongly suggested that you keep a record of the age of your vehicles and phase out the unfit ones.";
    }
    ?>
            <h4><?php echo $vehicletype; ?></h4>
            <p><?php echo $vehicle_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="assets/img/performance/ac.jpg"></figure>
          <div class="description">
            <h3>Air Conditioning in Vehicles</h3>
            <?php
                                
                                $acvehicles = getFiled('Q6A2S1T3', $schoolUserID);
                                if($totalvehicle==0){
                                    $acvehicles == 0 ;
                                } else {
                                     $almostacvicleper = (($acvehicles / $totalvehicle) * 100);
                                }
                                
                                if ($acvehicles < $totalvehicle && $acvehicles > 0) {
                                    $vehicleactype = "Combination of vehicles with ACs and without ACs";
                                    $acvehicle_msg = "Air conditioners in vehicles use a lot of fuel. We suggest that you keep a check on your vehicles' fuel consumption and ensure that it does not increase because of the air conditioners. Additionally, air conditioners release harmful toxins that further pollute the air.";
                                } elseif ($acvehicles == 0 || $acvehicles == " ") {
                                    $vehicleactype = "No air conditioners in the  vehicles";
                                    $acvehicle_msg = "It is commendable that none of your vehicles are air conditioned. Air conditioners in vehicles use a lot of fuel and release harmful toxins that further pollute the air. You save a lot of fuel and keep the air around the city clean!";
                                } elseif ($acvehicles == $totalvehicle) {
                                    $vehicleactype = "All vehicles have Air Conditioners";
                                    $acvehicle_msg = "All vehicles in your school are air conditioned. Such vehicles use a lot of fuel and release harmful toxins that further pollute the air. Therefore, it is strongly suggested that while replacing your vehicles or shifting to the operator-owned ones, please choose the ones that are not air conditioned.";
                                }
                                ?>
            <h4><?php echo $vehicleactype; ?></h4>
            <p><?php echo $acvehicle_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="assets/img/performance/puc.jpg"></figure>
          <div class="description">
            <h3>PUC Certificates</h3>
            <?php
                                
                                $puc_done = getFiled('Q6A2S1T4', $schoolUserID);
                                
                                if($totalvehicle==0){
                                    $puc_done == 0 ;
                                } else {
                                     $almost_puc_vicleper = (($puc_done / $totalvehicle) * 100);
                                }
                                if ( $puc_done > 0 && $puc_done < $totalvehicle  ) {
                                    $vehicleapuctype = "Combination of vehicles with PUC done and not done";
                                    $puc_done_msg = "Pollution Under Control (PUC) certification should be up-to-date for all the school vehicles. It is good that some of your vehicles have the certification. Please ensure that the PUCs for all the school vehicles are updated at the earliest.";
                                } elseif ($puc_done == $totalvehicle ) {
                                    $vehicleapuctype = "All vehicles with PUCs";
                                    $puc_done_msg = "Pollution Under Control (PUC) certification should be up-to-date for all the school vehicles. It is great that all your vehicles have the certification!";
                                } elseif ($puc_done == 0) {
                                    $vehicleapuctype = "All vehicles without PUCs";
                                    $puc_done_msg = "Pollution Under Control (PUC) certification should be up-to-date for all the school vehicles. None of your vehicles have PUCs. Please ensure that the PUCs for all the school vehicles are updated at the earliest.";
                                }
                                ?>
            <h4><?php echo $vehicleapuctype; ?></h4>
            <p><?php echo $puc_done_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="assets/img/performance/parking.jpg"></figure>
          <div class="description">
            <h3>Parking Area for Vehicles</h3>
            <?php
                               
                                $Parking_Area = getFiled('Q6A2S1T5', $schoolUserID);
                                 if($totalvehicle==0){
                                    $Parking_Area == 0 ;
                                } else {
                                    $almost_parking_area = (($Parking_Area / $totalvehicle) * 100);
                                }
                                
                                if ($Parking_Area > 0 && $Parking_Area < $totalvehicle) {
                                    $vehicle_parking = "Parking space for few vehicles";
                                    $vehicle_parking_msg = "There should be adequate authorised parking space available for all the school-owned vehicles. The more the vehicles, the more the space required. Thus, encouraging students to use public transport or pool vehicles will ensure more school space.";
                                } elseif ($Parking_Area >= $totalvehicle) {
                                    $vehicle_parking = "Parking space for all vehicles or more than total number of vehicles";
                                    $vehicle_parking_msg = "It is good that the school has adequate parking space for school-owned vehicles. However, more vehicles require more space. Therefore, encouraging students to use public transport or pool vehicles will ensure more school space. Further, the school can move to operator-owned vehicles whenever replacing vehicles.";
                                } elseif ($Parking_Area == 0) {
                                    $vehicle_parking = "No Parking space for vehicles";
                                    $vehicle_parking_msg = "Your school lacks aqequate parking space for the vehicles. Ideally, there should be an authorised parking area for school-owned vehicles. Therefore, we recommend encouraging students to use public transport or pool vehicles to ensure more school space.";
                                }
                                ?>
            <h4><?php echo $vehicle_parking ?></h4>
            <p><?php echo $vehicle_parking_msg; ?></p>
          </div>
        </li>
  <li>
          <figure><img src="assets/img/performance/parking.jpg"></figure>
          <div class="description">
            <h3>Road Worthiness Certificate</h3>
            <?php
                   // $arrImages = getUploadData(str_replace(' ', '_', $performance[0]->name) . '_PUC_Certificate', $schoolUserID);
           $road_count= array();
    $data1 = getFiled('Q6A2S1B6', $schoolUserID);
     if(strtolower($data1)=='yes'){
        $road_count[0] = 1; 
       }else{
         $road_count[0] = 0;  
     }     
     $data2 = getFiled('Q6A2S1C6', $schoolUserID);
    if(strtolower($data2)=='yes'){
        $road_count[1] = 1; 
       }else{
         $road_count[1] = 0;  
     }
          $data3 = getFiled('Q6A2S1V6', $schoolUserID);
    if(strtolower($data3)=='yes'){
        $road_count[2] = 1; 
       }else{
         $road_count[2] = 0;  
     }
    $data4 = getFiled('Q6A2S1O6', $schoolUserID);
    if(strtolower($data4)=='yes'){
        $road_count[3] = 1; 
       }else{
         $road_count[3] = 0;  
     }
    if(array_sum($road_count) > 0){
     ?>
            <h4> <?php echo "NO" ; ?> </h4>
            <p> <?php echo "The school's vehicles do not have Road Worthiness Certification. We recommend getting the certificate at the earliest. The certification implies that the vehicles are in a good operating condition and meet the acceptable standards of safe driving."; ?></p>
            <?php  } else { ?>
            <h4><?php echo "Yes"; ?></h4>
            <p><?php echo "It is good that your school has Road Worthiness Certification for your vehicles. The certification implies that the vehicles are in a good operating condition and meet the acceptable standards of safe driving."; ?></p>
            <?php   } ?>
          </div>
        </li>      
        
        <li>
          <figure><img src="assets/img/performance/fuel.jpg"></figure>
          <div class="description">
            <h3>Type of Fuel</h3>
            <?php
                                $Diesel = getFiled('Q6A2S3D5', $schoolUserID); // Total Diesel vehicle
                                
                                $Petrol = getFiled('Q6A2S3P5', $schoolUserID); // Total Petrol vehicle
                                $LPG = getFiled('Q6A2S3L5', $schoolUserID);   // Total LPG vehicle
                                $CNG = getFiled('Q6A2S3C5', $schoolUserID);  // Total CNG vehicle
                                
                                //$total_vehicles = $sql_data_array['266617X4X165SQ001_SQ003'];  // Total No. vehicle
                                
                                $totaldisel = $Diesel + $Petrol;  
                                if($totalvehicle==0){
                                    $desiel_petrol_percentage=0;
                                    $cng_percentage=0;
                                    $lpg_percentage=0;
                                    
                                }else{
                                $desiel_petrol_percentage = round((($totaldisel * 100)/$totalvehicle),2);
                                $totalcng = $CNG;
                                $cng_percentage = round((($totalcng * 100)/$totalvehicle),2);
                                
                                $totallpg = $LPG;
                                $lpg_percentage = round((($totallpg * 100)/$totalvehicle),2);
                                }
                                //$totallpgcng = $LPG + $CNG;  
                                
                                
                                if ($desiel_petrol_percentage >= 71) {
                                    $typeofFuel[] = "Consumption of Diesel and Petrol";
                                    $typeoffuel_msg[] = "The diesel/petrol consumption of the school is very high. We suggest considering the transition to cleaner sources of energy like CNG, if available in your area.";
                                } 
                                elseif ($desiel_petrol_percentage >= 36 && $desiel_petrol_percentage <= 70.9 ) {
                                    $typeofFuel[] = "Consumption of Diesel and Petrol";
                                    $typeoffuel_msg[] = "The diesel/petrol consumption of the school is moderate. We suggest considering complete transition to cleaner sources of energy for all the vehicles.";
                                }
                                elseif ($desiel_petrol_percentage > 0 &&  $desiel_petrol_percentage <= 35.9 ) {
                                    $typeofFuel[] = "Consumption of Diesel and Petrol";
                                    $typeoffuel_msg[] = "The diesel/petrol consumption of the school is low. To improve the energy-efficiency of the school even further, we suggest exploring cleaner sources of energy for all your vehicles.";
                                }
                                elseif ($desiel_petrol_percentage == 0) {
                                    $typeofFuel[] = "Consumption of Diesel and Petrol";
                                    $typeoffuel_msg[] = "It is commendable that your school does not use diesel or petrol as a fuel.";
                                }
                                if ($cng_percentage >= 71) {
                                    $typeofFuel[] = "Consuming CNG for Vehicles";
                                    $typeoffuel_msg[] = "It is commendable that most vehicles in the school run on CNG!";
        }
                                elseif ($cng_percentage >= 36 && $cng_percentage <= 70.9 ) {
                                    $typeofFuel[] = "Consuming CNG for Vehicles";
                                    $typeoffuel_msg[] = "It is good that some of your school's vehicles run on CNG. Try switching to CNG as a fuel for all your vehicles.";
                                }
                                elseif ($cng_percentage > 0 && $cng_percentage <= 35.9 ) {
                                    $typeofFuel[] = "Consuming CNG for Vehicles";
                                    $typeoffuel_msg[] = "Your CNG consumption is low. We suggest considering complete transition to CNG for all the vehicles.";
                                }
                                elseif ($cng_percentage == 0) {
                                    $typeofFuel[] = "Consuming CNG for Vehicles";
                                    $typeoffuel_msg[] = "Your school doesn't use CNG as a fuel. We recommend transitioning to CNG in the future to become energy efficient.";
                                }
                                if ($lpg_percentage >= 71 ) {
                                    $typeofFuel[] = "Consuming LPG for Vehicles";
                                    $typeoffuel_msg[] = "The LPG consumption of the school is very high, which can prove dangerous to the health of the students. Consider exploring cleaner sources of energy like biomass.";
                                }
                                elseif ($lpg_percentage >= 36 && $lpg_percentage <= 70.9 ) {
                                    $typeofFuel[] = "Consuming LPG for Vehicles";
                                    $typeoffuel_msg[] = "The LPG consumption of the school is moderate but can prove dangerous to the health of the students. Consider exploring cleaner sources of energy like biomass.";
                                }
                                elseif ($lpg_percentage > 0 && $lpg_percentage <= 35.9 ) {
                                    $typeofFuel[] = "Consuming LPG for Vehicles";
                                    $typeoffuel_msg[] = "The LPG consumption of the school is low. To improve even further, we recommend exploring cleaner sources of energy like biogas.";
                                }
                                
                                elseif ($lpg_percentage == 0) {
                                    $typeofFuel[] = "Consuming LPG for Vehicles";
                                    $typeoffuel_msg[] = "It is good that your school does not use LPG as a fuel.";
                                }
                                
                                ?>
            <!--            <h4><?php echo implode(",",$typeofFuel); ?></h4>-->
            <?php 
            foreach ($typeoffuel_msg as $value)
            {
                ?>
            <p><?php echo $value; ?></p>
            <?php
             }
            ?>
          </div>
        </li>
      </ul>
    </section>
  </div>
  <?php } ?>
  <div class="air">
    <section class="performance-category">
      <ul style="margin-top:-24px;">
        <li>
          <figure><img src="assets/img/performance/mode.jpg"></figure>
          <div class="description">
            <h3>Mode of Commuting to School</h3>
            <?php
                                $total_population = (getFiled('Q4G4S3', $schoolUserID) != '') ? getFiled('Q4G4S3', $schoolUserID) : 0;
                                 // Sustainable Motorized Vehicle (SMV) 
                                if($total_population==0){
                                  $total_population_smv_percentage=$total_population_npm_percentage=$total_population_npm_percentage=0;  
                                }else{
         if(getFiled('Q7A1S4', $schoolUserID)!=0){
          $smv[0]= 'school bus';
         }
        if(getFiled('Q7A2S4', $schoolUserID)!=0){
          $smv[1]= 'public bus';
         }
        if(getFiled('Q7A3S4', $schoolUserID)!=0){
          $smv[2]= 'School transport(other than bus)';
         }
         if(getFiled('Q7A4S4', $schoolUserID)!=0){
          $smv[3]= 'public transport(other than bus)';
         }
        if(getFiled('Q7A5S4', $schoolUserID)!=0){
          $smv[4]= 'Taxi four wheeler';
         }
        if(getFiled('Q7A6S4', $schoolUserID)!=0){
          $smv[5]= 'Taxi three wheeler';
         }
        if(isset($smv)){  
        $smv_wheel= implode(',',$smv);
        } 
                                $total_population_smv = getFiled('Q7A1S4', $schoolUserID)+getFiled('Q7A2S4', $schoolUserID)+getFiled('Q7A3S4', $schoolUserID)+getFiled('Q7A4S4', $schoolUserID)+getFiled('Q7A5S4', $schoolUserID)+getFiled('Q7A6S4', $schoolUserID);
                                 //Non polluting mode(NPM)
                                $total_population_smv_percentage = round((($total_population_smv * 100)/$total_population),2);
                                
                                $total_population_npm = getFiled('Q7A9S4', $schoolUserID)+getFiled('Q7A10S4', $schoolUserID)+getFiled('Q7A11S4', $schoolUserID);
                                if(getFiled('Q7A9S4', $schoolUserID)!=0){
          $npm[0]= 'Bicycle';
         }
         if(getFiled('Q7A10S4', $schoolUserID)!=0){
          $npm[1]= 'On foot';
         }
         if(getFiled('Q7A11S4', $schoolUserID)!=0){
          $npm[2]= 'Other non-motersied';
         }
        if(isset($npm)){  
        $npm_wheel= implode(',',$npm);
        } 
                                $total_population_npm_percentage = round((($total_population_npm * 100)/$total_population),2);
                                 //Private vehicles population
                                $private_veh_population = getFiled('Q7A7S4', $schoolUserID) + getFiled('Q7A8S4', $schoolUserID);
                                if(getFiled('Q7A7S4', $schoolUserID)!=0){
          $private[0]= 'Personal four wheeler';
         }
         if(getFiled('Q7A8S4', $schoolUserID)!=0){
          $private[1]= 'Personal two wheeler';
         }
      if(isset($private)){  
        $private_wheel= implode(',',$private);
      }
        $total_smv_npm = $total_population_smv + $total_population_npm;
                                
                                $private_veh_population_percentage = round((($private_veh_population * 100)/$total_population),2);
                                } 
                                if ($total_population_smv_percentage > 50 && $total_population_npm_percentage < 50 ) {
                                    $members_use_transport_type = " Percentage of Sustainable motorised transport is: $total_population_smv_percentage  % ";
                                    $members_use_transport_msg = "It is remarkable that most students and staff use sustainable motorized vehicles (SMVs) like school bus, public bus, public transport (other than bus), taxi (four-wheeler and three-wheeler)."; ?>
            <h4><?php echo $members_use_transport_type; ?></h4>
            <p><?php echo $members_use_transport_msg; ?></p>
            <?php
                                } elseif ($total_population_smv_percentage < 50 && $total_population_npm_percentage > 50) {
                                    $members_use_transport_type = "Percentage of  non-polluting mode transport is: $total_population_npm_percentage  % ";
                                    $members_use_transport_msg = "It is good that most students and staff use non-polluting modes of transport (NPT) like cycling and walking."; ?>
            <h4><?php echo $members_use_transport_type; ?></h4>
            <p><?php echo $members_use_transport_msg; ?></p>
            <?php   
                                } elseif ($private_veh_population_percentage > 50) {
                                    $members_use_transport_type = " Percentage of private vehicles for transportation is: $private_veh_population_percentage  % ";
                                    $members_use_transport_msg = "Your school mostly uses private vehicles for transportation. We recommend that you encourage the staff and students to use public transport and opt for car pooling. <br/> (". $private_wheel.')'; ?>
            <h4><?php echo $members_use_transport_type; ?></h4>
            <p><?php echo $members_use_transport_msg; ?></p>
            <?php }
          ?>
          </div>
        </li>
      </ul>
    </section>
    <div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>
     
  </div>
  <div class="energy">
    <h2>
      <figure><img src="assets/img/performance/energy.png" width="120"></figure>
      <label> </label>
      <span>Green Schools Programme Audit 2019-2020</span></h2>
    <p>The impact of global warming has already reached scorching levels, and is rising rapidly. Saving energy is the first step to energy conservation. Switching off electrical gadgets when they are not in use and transitioning from bulbs to CFLs/LEDs are great ways to start. Opting for rooftop or building-integrated small-scale solar systems is an  easy way to conserve electricity sustainably and cut down on your school's future electricity costs! They help minimise transmission and distribution losses, as the generated power is consumed locally. You can check out the latest schemes for solar roof top installations in institutions on <a href="https://seci.co.in/" style="color: blue;">https://seci.co.in/.</a> </p>
<p>To know more about GSP&#39;s initiative on renewable energy (RE) and explore the resource material, please go to the <a href="https://www.greenschoolsprogramme.org/knowledge-bank/energy/gsp-solar-in-schools-initiative-2019-20/" style="color: blue;">GSP Website.</a>
</p>
    <section class="remember">
      <h3>Remember</h3>
       <ol style="list-style-type: japanese-formal !important;">
        <li>Per capita per day electricity consumption should be well within the norms (46.5 MJ) and we all know that our non-renewable resources are depleting faster than they can re-generate. Switching over to renewable resources and expanding their usage is the only available option.
        </li>
      </ol>
    </section>
    <h3>Your School's Performance</h3>
    <?php               
     $total_energy_points = number_format(getPrimaryEnergyPoints($performance[0]->userid), 2);
                    if($total_energy_points >= 5){
                      $point_performance_msg_e = "Your school has performed very well in the Energy section.The energy consumption of the school falls well within the norms.  We hope the green practices currently followed in the school are sustained and improved even further.";
                    }
                        
                    elseif($total_energy_points >= 2 )
                    {
                        $point_performance_msg_e = "Your school has performed well in the Energy section.The energy consumption of your school partially falls within the norms. It is recommended that your school explores renewable energy sources to become more energy-efficient.";
                    }
                    elseif($total_energy_points < 2 )
                    {
                        $point_performance_msg_e = "The energy consumption of your school does not fall within the norms. The school needs to manage energy consumption prudently. It is recommended that your school explores renewable energy sources to become more energy-efficient.";                             
                    }
                ?>
    <p style="margin-bottom: 5px; margin-top: 5px;"><?php echo $point_performance_msg_e ?></p>
    <section class="performance-category">
      <ul>
        <li>
          <table width="100%" class="intro-table" cellspacing="0" style="margin-bottom: 0; margin-top: 5px;">
            <tr>
              <th width="50%" class="performance-orange-bg">Category</th>
              <th width="50%" class="performance-orange-bg">Per capita/day energy consumption</th>
            </tr>
            <tr>
              <td>Day Scholar</td>
              <td>46.2 MJ</td>
            </tr>
            <tr>
              <td>Day Boarding</td>
              <td>49.8 MJ</td>
            </tr>
            <tr>
              <td>Residential</td>
              <td>24.6 MJ</td>
            </tr>
            <tr>
              <td>Scholar + Boarding</td>
              <td>48.0 MJ</td>
            </tr>
            <tr>
              <td>Scholar + Residential</td>
              <td>49.8 MJ</td>
            </tr>
            <tr>
              <td>Boarding + Residential</td>
              <td>46.2 MJ</td>
            </tr>
          </table>
        </li>
          
  <li>
          <figure><img src="assets/img/performance/source.jpg"></figure>
          <div class="description">
            <h3>Sources of Energy</h3>


                                   <?php
                              
                                    if (getFiled('Q9E1S1', $schoolUserID) > 0 ) {
                                        $solar_energy = "Solar";
                                    }
                                    else
                                    {
                                        $solar_energy = "";
                                    }
                                    if (getFiled('Q9E1S2', $schoolUserID) > 0) {
                                        $wind_energy = "Wind";
                                    }
                                    else
                                    {
                                        $wind_energy = "";
                                    }
                                    if (getFiled('Q9E1S3', $schoolUserID) > 0) {
                                        $animal_energy = "Hydro";
                                    }
                                    else
                                    {
                                        $animal_energy = "";
                                    }
                                    if (getFiled('Q9E1S4', $schoolUserID) > 0) {
                                        $cng_energy = "Combination of solar and wind";
                                    }
                                    else
                                    {
                                        $cng_energy = "";
                                    } 
                                    if (getFiled('Q9E1S5', $schoolUserID) > 0) {
                                        $lpg_energy = "Biogas Plant";
                                    }
                                    else
                                    {
                                        $lpg_energy = "";
                                    } 
                         
                                   
                                    if($solar_energy == "Solar" ||  $wind_energy =="Wind")
                                    {
                                        $energyuse ="All Renewable sources of Energy ";
                                        $sourceofenergy_msg = "It is commendable that your school is using renewable sources of energy! It is the need of the hour." ;
                                    }
                                    elseif(($solar_energy == "" ||  $wind_energy =="" || $lpg_energy != ""  || $cng_energy != "" || $animal_energy != "" ) )
                                    {
                                        $energyuse ="Combination of renewable and non- renewable sources";
                                        $sourceofenergy_msg ="Your school uses non-renewable sources of energy that could be exhausted in the near future. We recommend that you expand/ increase the renewable energy potential of the school and transition to cleaner, more efficient sources." ;
                                    }                                                                         
                                
                                ?>
             <h4><?php if(isset($energyuse)) { echo $energyuse; } ?></h4>
            <p style="margin-bottom: 5px; margin-top: 5px;"><?php echo $sourceofenergy_msg; ?></p>
          </div>
        </li>
                                         
         <li style="height: 125px">
          <figure><img src="assets/img/performance/sale2.jpg"></figure>
          <div class="description">
            <h3>Is your school using any renewable sources of energy?</h3>
            <?php
            $energy = array();
                                if (getFiled('Q9E1S1', $schoolUserID) == '1') {
                                        $energy[0] = "Solar";
                                    }
                                    
                                    if (getFiled('Q9E1S2', $schoolUserID) == '1') {
                                        $energy[1] = "Wind";
                                    }
                                    
                                    if (getFiled('Q9E1S3', $schoolUserID) == '1') {
                                         $energy[2] = "Hydro";
                                    }
                                    
                                    if (getFiled('Q9E1S4', $schoolUserID) == '1') {
                                         $energy[3] = "Combination of solar and wind";
                                    } 

                                    if (getFiled('Q9E1S5', $schoolUserID) == '1') {
                                         $energy[3] = "Biogas Plant";
                                    } 

                                  $energyuse = implode($energy, ',');
                                    //echo $energyuse;

                                    ?> 
                                
               
                                   
                                   
        <?php 
        if (getFiled('Q9E1', $schoolUserID) == "Y") { 
         $renew1 =implode(",",$energy);
         if($renew1!=''){
             $renew =implode(", ",$energy); 
         }else {
           
           $renew ='solar'; 

         }  

        
         $renewuse ="Yes";
                                 $renewenergy_msg = "It is great that your school uses '".$renew." ' as a renewable source of energy. We hope that you sustain the green initiative and expand the potential to the fullest." ;
                                  
        }else {
         $renewuse ="No";
                                 $renewenergy_msg =  "Your school does not use any renewable sources of energy. We hope that the school transitions to renewable energy sources completely in the near future." ;
                               }
                         ?>
             <h4><?php  echo $renewuse; ?></h4>
            <p><?php echo $renewenergy_msg; ?></p>
          </div>
        </li>
        
      </ul>
    </section>
    
    <div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>

  </div>
  <div class="food">
    <h2>
      <figure><img src="assets/img/performance/food.png" width="120"></figure>
      <label> </label>
      <span>Green Schools Programme Audit 2019-2020</span></h2>
    <p>A recent report published states that the food diversity on plate worldwide has reduced by 75 percent since the 1990s. This has cost everyone in terms of deteriorating human health and environment. In India, over 100 kinds of foods wild, cultivated and uncultivated form a part of the regular diet. Nutritional analyses of these diets show that these foods can counter malnutrition including micro-nutrient malnutrition such as Vitamin A Deficiency (VAD).</p>
<p>Food has been at the centre of policy debate in India for many years, as more than 35 percent of the country's children under five suffer from pacts of malnutrition including stunted growth and under-weight. Meanwhile, World Obesity Federation warns that by 2030, there will be 27 million obese children in India. Given India's dubious distinction of carrying the twin burden of under nutrition and overfeeding, we need to be extra cautious.
We all are aware about the ill-effects of Ultra Processed Packaged Food (UPPF) that has high fat, sugar and salt (HFSS) content. This UPPF category is one of the most popular categories in today's food market.
</p>
<p>Read more about food <a href="https://www.greenschoolsprogramme.org/knowledge-bank/food/" style="color:blue;">here.</a>
</p>
    
    <section class="remember">
      <h3>Remember:</h3>
      <ol style="list-style-type: japanese-formal !important;">
        <li>Avoid UPPF in school canteens, and encourage children to eat healthy and traditional foods/ local foods and beverages. Sponsorship of school events by UPPF brands should be avoided. On special occasions, provide <i> laddoos </i> or other freshly-prepared foods as rewards instead of chocolates or other packaged food. </li>
        <li>Promote the use of paper wrappings instead of plastic to pack food, wherever possible</li>        
      </ol>
    </section>
    <h3>Your School's Performance</h3>
    <?php               
                $total_food_points = number_format(getPrimaryFoodPoints($performance[0]->userid),2);
               
        if($total_food_points >= 4){
            $point_performance_msg_f = "Your school has performed very well in the Food section owing to the prohibition of ultra processed packaged food and packaged/bottled drinks in the school. It is good that your school ensures quality and nutritious food.";
        }elseif($total_food_points >=2){
            $point_performance_msg_f = "Your school has performed well in the Food section but needs to further promote nutritious food. We recommend taking up learning activities to raise awareness about Ultra Processed Packaged Food (UPPF) and their ill effects.";
        }elseif($total_food_points >= 0 ){
         $point_performance_msg_f = "Your school provides ultra processed packaged food (UPPF) items to students&#8211;a practice that needs to be discouraged as UPPF items are high in fats, salt and sugar and cause health problems. We recommend encouraging students to opt for traditional and nutritious food.";
        }
        
    //     elseif($total_food_points < 1){
    // $point_performance_msg_f = "Your school sells ultra processed packaged food (UPPF) items daily in the campus - a practice that needs to be discouraged as UPPF items are high in fats, salt and sugar and harm children. We suggest that with the beginning of the new academic session, unhealthy food items be substituted with local and seasonal delicacies. The your school promotes processed, packaged or fast food, which is not good for the students. We recommend that you motivate students to opt for Good Food. ";
    //  }      
                ?>
    
    <p><?php echo $point_performance_msg_f; ?></p>
    <section class="performance-category">
      <ul>

        <li>
          <figure><img src="assets/img/performance/sale1.jpg" ></figure>
          <div class="description">
            <h3 >Does the school distribute packaged food items as rewards during schools events?</h3>
            <?php
                                if (getFiled('Q9F1', $schoolUserID) == "Y" && getFiled('Q9F2', $schoolUserID) != " ") {
                                    $distributepackaged_food = "Yes";
                                    $distributepackaged_food_msg = "Ultra processed packaged food (UPPF) not only affect the health of the students adversely but also have negative environmental impacts. We recommend replacing these with local/ traditional snacks that can be distributed as rewards.";
                                }elseif(getFiled('Q9F1', $schoolUserID) == "N") {
                                    $distributepackaged_food = "No";
                                    $distributepackaged_food_msg = "Ultra processed packaged food (UPPF) not only affect the health of the students adversely but also have negative environmental impacts. It is remarkable that your school does not distribute packaged food items as rewards. We hope that you sustain this practice and discourage students from eating UPPF.";
                                }
                                ?>
            <h4><?php echo $distributepackaged_food; ?></h4>
            <p><?php echo $distributepackaged_food_msg; ?></p>
          </div>
        </li>
      </ul>
    </section>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="assets/img/performance/sale6.jpg" ></figure>
          <div class="description">
            <h3>Does the school distribute chocolates/similar products as refreshments during schools events? </h3>
            <?php
                                if (getFiled('Q10F1', $schoolUserID) == "Y" && getFiled('Q10F2', $schoolUserID) != " ") { //Food Q.7
                                    $chocolatespackaged_food = "Yes";
                                    $chocolatespackaged_food_msg = "Ultra processed packaged food (UPPF) not only affect the health of the students adversely but also have negative environmental impacts. Therefore, consumption of such food items should be discouraged. We recommend not providing UPPF items as refreshments during events and serving local/ traditional instead.";
                                } elseif(getFiled('Q10F1', $schoolUserID) == "N") {
                                    $chocolatespackaged_food = "No";
                                    $chocolatespackaged_food_msg = "Ultra processed packaged food (UPPF) not only affect the health of the students adversely but also have negative environmental impacts. Therefore, consumption of such food items should be discouraged. We appreciate your school's efforts in promoting local/ traditional snacks as refreshments.";
                                }
                                ?>
            <h4><?php echo $chocolatespackaged_food; ?></h4>
            <p><?php echo $chocolatespackaged_food_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="assets/img/performance/sale.jpg"></figure>
          <div class="description">
            <h3>Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?</h3>
            <?php
                                if (getFiled('Q11F1', $schoolUserID) == "Y" && getFiled('Q11F2', $schoolUserID) != " ") { //Food Q.7
                                    $sponsored_event = "Yes";
                                    $sponsored_event_msg = "Students are easily influenced by the fancy brand advertisements and promotions. Therefore, we recommend banning of events that promote consumption of UPPF items.";
                                } elseif(getFiled('Q11F1', $schoolUserID) == "N") {
                                    $sponsored_event = "No";
                                    $sponsored_event_msg = "Students are easily influenced by the fancy brand advertisements and promotions. It is good that your school doesn&#39;t encourage events that promote consumption of UPPF items.";
                                }
                                ?>
            <h4><?php echo $sponsored_event; ?></h4>
            <p><?php echo $sponsored_event_msg; ?></p>
          </div>
        </li>       
      </ul>
    </section>

    <div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>
    
  </div>
  <div class="land">
    <h2>
      <figure><img src="assets/img/performance/land.png" width="120"></figure>
      <label> </label>
      <span>Green Schools Programme Audit 2019-2020</span></h2>
    <p>As per Model Building Bye-Laws, 2016, maximum ground coverage in a school building should not exceed 35 per cent. Your school grounds can provide excellent educational opportunities for creating awareness about land resources, natural world around you and the land-use pattern. The biological diversity supported by an area is a good indicator of its ecological well-being. A proper management of land resources can transform the grounds into biologically diverse outdoor classrooms and healthy open spaces.</p>
    <p>As per the Right of Children to Free and Compulsory Education Act (RTE), 2009, a school should have an all-weathered school building with a playground, a kitchen (for cooking mid-meal), separate toilets for boys and girls, library, barrier-free access, etc.</p>
    <p>Learn more about land use pattern and biodiversity from the knowledge bank on <a href="https://www.greenschoolsprogramme.org/knowledge-bank/land/" style="color: blue;">GSP website</a> </p>
    <section class="remember">
      <h3>Remember:</h3>
      <ol style="list-style-type: japanese-formal !important;">
        <li>Congestion on land (more buildings and inadequate green cover) leads to pressure on resources and hence on our environment.</li>
        <li>We all know that adequate supply of oxygen to the brain ensures greater power to grasp things. And for more oxygen we need more trees&#8211;our only oxygen factory!</li>
        <li>To keep these oxygen factories healthy, we should not use chemical pesticides to raise them. Chemical pesticides are poisonous to health and environment.</li>  
      </ol>
    </section>
    <h3>Your School's Performance</h3>
    <?php               
                    // Land Points
            $total_land_points = number_format(getPrimaryLandPoints($schoolUserID),2);
                    //echo $total_land_points;
            if($total_land_points >= 6)
            $point_performance_msg_l = "Your school has performed well in this section. It is good that your school has plenty of green cover without the use of any chemical-based pesticides. The biodiversity in the school is rich as well. To improve even further, the school can introduce and expand vertical gardening. As per the norms, at least 35 per cent of the total school area should classify as green cover. Your school has the required green cover, but we still suggest that you target to increase your school's green cover by additional 10 to 15 per cent in the next two years!";
             elseif($total_land_points >=4)
             $point_performance_msg_l= "Your school has done average in this section. The school can take concrete steps to increase the green cover of the school, like vertical gardening and plantation drives. The biodiversity&#8211;plants and animals&#8211;in the school can be made richer. As per the norms, at least 35 per cent of the total school area should classify as green cover. Your school does not have the required green cover. Therefore, we suggest increasing it by at least 20  per cent in the next two years.";                    
             elseif($total_land_points < 4)
             $point_performance_msg_l= "Your school does not meet the green cover requirements. The school can take rigorous steps to increase the green cover of the school, like vertical gardening and plantation drives. The biodiversity&#8211;plants and animals&#8211;in the school can be made richer. As per the norms, at least 35 per cent of the total school area should classify as green cover. Your school does not have the required green cover. Therefore, we suggest increasing it by at least 20  per cent in the next two years.";
              ?>
    <p><?php echo $point_performance_msg_l ?></p>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="assets/img/performance/green.jpg"></figure>
          <div class="description">
            <h3>Total Green Cover</h3>
            <?php
                $total_site_area = ((getFiled('Q4L2', $schoolUserID) != '') ? getFiled('Q4L2', $schoolUserID) : 0) + ((getFiled('Q4L5', $schoolUserID) != '') ? getFiled('Q4L5', $schoolUserID) : 0) + ((getFiled('Q4L6', $schoolUserID) != '') ? getFiled('Q4L6', $schoolUserID) : 0) + ((getFiled('Q4L7', $schoolUserID) != '') ? getFiled('Q4L7', $schoolUserID) : 0) + ((getFiled('Q4L8', $schoolUserID) != '') ? getFiled('Q4L8', $schoolUserID) : 0);
  

              $total_green_cover_area = getFiled('Q4L5', $schoolUserID) ;
        
      if($total_site_area==0){
          $green_cover_perc=0;
        }else{
                $green_cover_perc = number_format((($total_green_cover_area / $total_site_area) * 100), 2);
        }
                     if ($green_cover_perc >= 35) {
                         $greencover_msg = "Green Cover Area in your school is "." ".$green_cover_perc. "%.  As per the norms, at least 35 per cent of the total school area should classify as green cover. Your school has the required green cover, but we still suggest that you target to increase your school's green cover by additional 10 to 15 per cent in the next two years!";
                    } else if ($green_cover_perc >= 15) {
                        $greencover_msg = "Green Cover Area in your school is "." ".$green_cover_perc. "%. As per the norms, at least 35 per cent of the total school area should classify as green cover. Your school does not have the required green cover. Therefore, we suggest increasing it by at least 20  per cent in the next two years.";
                    } else if ($green_cover_perc <= 14.9) {
                        $greencover_msg = "Green Cover Area in your school is "." ".$green_cover_perc. "%. As per the norms, at least 35 per cent of the total school area should classify as green cover. Your school does not have the required green cover. Therefore, we suggest increasing it by at least 20  per cent in the next two years.";
                    }
                ?>

            <p><?php echo $greencover_msg; ?></p>
          </div>
        </li>
       <li>
          <figure><img src="assets/img/performance/plant_animal_final.png"></figure>
          <div class="description">
            <h3>How many species of plants and animals exist in your school?</h3>
            <?php
         $plant = getFiled('Q5L1S3', $schoolUserID); 
         $animal = getFiled('Q5L2S3', $schoolUserID);  
                if ($plant >= 100 ) {
                    // $plant_c = "If plant species are 100 or more";
                    $plant_msg = "We appreciate your efforts in conserving biodiversity within your school campus. The school has maintained its plant biodiversity very well.";
                } elseif($plant< 100) {
                    $plant_c = "If plant species are less than 100";
                    $plant_msg = "Biodiversity is crucial in conserving nature. We recommend you to increase your floral biodiversity by ensuring at least 100 plant species within the campus.";
                }
       if ($animal >= 50 ) {
                    $animal_c = "If animal species are 50 or more";
                    $animal_msg = "We appreciate your efforts in conserving biodiversity within your school campus. The school has maintained its faunal (animal) biodiversity very well.";
                } elseif($animal< 50) {
                    $animal_c = "If animal species are less than 50";
                    $animal_msg = "Biodiversity is crucial in conserving nature. It is recommended to have at least 50 species of animals, including insects, birds, etc., within the campus. Please note that the animal biodiversity depends greatly on plant diversity.";
                }  
            ?>
            <p><?php echo $plant_msg; ?></p>
            <p><?php echo $animal_msg; ?></p>   
          </div>
        </li>      
        <li>
          <figure><img src="assets/img/performance/pest.jpg"></figure>
          <div class="description">
            <h3>Use of Pesticide</h3>
            <?php
                if (getFiled('Q6L1', $schoolUserID) != "Y") {
                    $pesticides = "No";
                    $pesticides_msg = "It is commendable that your school does not use any chemical fertilizers. We hope that you sustain the practice and compost the biodegradable waste in the school to make organic fertilizer.";
                } else {
                    $pesticides = "Yes";
                    $pesticides_msg = "Your school uses chemical fertilizers. We recommend composting the biodegradable waste to make organic fertilizer and phasing out chemical fertilizers.";
                }
            ?>
            <h4><?php echo $pesticides; ?></h4>
            <p><?php echo $pesticides_msg; ?></p>
          </div>
        </li>
      </ul>
    </section>

    <div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>
    
  </div>
  <div class="water">
    <h2>
      <figure><img src="assets/img/performance/water.png" width="120"></figure>
      <label> </label>
      <span>Green Schools Programme Audit 2019-2020</span></h2>
    <p>The right to water is really the right to life and livelihood. Just as we cannot live without water, a country cannot survive if it is water-stressed. This resource determines our future and acts as a driving force for our economic growth. Even today, the government admits to not being able to provide safe drinking water to more than half the country's population. Poor sanitation and unsafe drinking water account for a substantial part of the disease burden in India, contributing to diarrhoea, cholera, typhoid and jaundice. </p>
    <p>Explore water-related activities and information on <a href="https://www.greenschoolsprogramme.org/knowledge-bank/water/" style="color: blue;">GSP website</a> 
</p>
    <section class="remember">
      <h3>Remember:</h3>
      <ol style="list-style-type: japanese-formal !important;"> 
        <li>Children should get adequate amount of water required per day from drinking to flushing to mopping floors to everything.</li>
        <li>Catch rain where it falls. Today, rainwater harvesting has evolved as an appropriate measure to overcome the water scarcity as well as water logging due to excessive rains.</li>
        <li>Recharge groundwater. As per Central GroundWater Board (CGWB), around 39% of the analysed wells showed decline in groundwater level in various parts of the country. We must try to reduce the dependence on groundwater to stop further depletion of water table. Other measures can be harvesting more rainwater; treating and reusing waste water; and recharging groundwater.</li>
        
      </ol>
    </section>
    <h3>Your School's Performance</h3>
    <?php               
                    // Water Points
                    $total_water_points = number_format(getPrimaryWaterPoints($schoolUserID),2);
                    if($total_water_points >= 40)
                        $point_performance_msg_water = "Well done! Your school has performed very well in this section. It is great that your school has managed to provide water as per the prescribed levels. Also, the load on the sanitation facilities is well within the prescribed norms.";
                    elseif($total_water_points >=30)
                        $point_performance_msg_water= "Your school has perfromed well in this section. It is good that your school tries to provide water as per the prescribed. Also, the load on the sanitation facilities is well within the prescribed norms. We hope that you take suggestions from the assessment given below and become a water-efficient school soon.";                    
                     elseif($total_water_points >=20)
                        $point_performance_msg_water= "Your school has done average in this section. It does not provide water as per the prescribed levels. Also, the load on some of the sanitation facilities is not within the prescribed norms. We hope that you take suggestions and become a water efficient school at the earliest.";
                     elseif($total_water_points <19)
                        $point_performance_msg_water= "Your school does not provide water as per the prescribed level as well as all the sanitation facilities does not have load under the prescribed norms. Your school’s score in water section is poor. Hope you take suggestions from the assessment given below and become a water-efficient school soon.";
                                     
                ?>
    <p><?php echo $point_performance_msg_water ?></p>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="assets/img/performance/water-consume.jpg"></figure>
          <div class="description">
            <h3>Per Capita Water Consumption</h3>
            <?php
                 $answer1883 = getFiled('Q4W11', $schoolUserID);
               
                // total water consumption
                //$total_population = $sql_data_array['266617X32X33SQ004_SQ003']; //total population of school.
                                //(liters per capita per day)
                $lpcd = number_format(($answer1883 / $total_population),2,".",""); //discuss                            
                $school_category_type = $school_category; // School Category
                if ($school_category_type == 1) 
                {
                    $llimit =13;
                    $ulimit =17;
                }  
                elseif ($school_category_type == 2) 
                {
                    $llimit =15;
                    $ulimit =25;
                }
                elseif ($school_category_type == 3) 
                {
                                    $llimit =125;
                                    $ulimit =135;
                                }
                                elseif ($school_category_type == 4) 
                                {
                                    $llimit =14;
                                    $ulimit =21;
                                }
                                elseif ($school_category_type == 5) 
                                {
                                    $llimit =70;
                                    $ulimit =80;
                                }
                                elseif ($school_category_type == 6) 
                                {
                                    $llimit =50;
                                    $ulimit =76;
                                }
                                elseif ($school_category_type == 7) 
                                {
                                    $llimit =51;
                                    $ulimit =59;
                                }
                                  
                                if($lpcd >=$llimit && $lpcd <=$ulimit)
                                {
                                    $pcw_condition ="Per capita consumption within the range according to their category ";
                                    $pcw_message ="Your school's per person per day consumption is well within the norms. It is good that you manage water efficiently.";
                                }                                                                     
                                elseif($lpcd < $llimit)
                                {
                                    $pcw_condition ="Per capita consumption is less ";
                                    $pcw_message ="Your school's per person per day consumption is less than the recommended quantity. Please refer to the table to see the recommended consumption.";
                                }
                                 elseif($lpcd >$ulimit)
                                {
                                    $pcw_condition ="Per capita consumption is more";
                                    $pcw_message ="Your school's per person per day consumption is more than it should be. Please refer to the table to see the recommended consumption and review where wastage of water can be minimized.";
                                }
                                                               
                                
                                ?>
            <h4><?php echo $lpcd; ?> litres per person/day (<?php echo $pcw_condition?>)</h4>
            <p><?php echo $pcw_message?></p>
          </div>
          <table width="100%" class="intro-table" cellspacing="0">
            <tr>
              <th width="100%" colspan="2" class="performance-blue-bg">School Average - CSE recommended consumption of water, per capita per day</th>
            </tr>
            <tr>
              <th width="50%" class="performance-blue-bg">Type of School</th>
              <th width="50%" class="performance-blue-bg">Average consumption(in Litres)</th>
            </tr>
            <tr>
              <td>Day Scholar</td>
              <td>13-17</td>
            </tr>
            <tr>
              <td>Day Boarding</td>
              <td>15-25</td>
            </tr>
            <tr>
              <td>Residential</td>
              <td>125-135</td>
            </tr>
            <tr>
              <td>Scholar + Boarding</td>
              <td>14-21</td>
            </tr>
            <tr>
              <td>Boarding + Residential</td>
              <td>70-80</td>
            </tr>
            <tr>
              <td>Scholar + Residential</td>
              <td>50-76</td>
            </tr>
            <tr>
              <td>Scholar + Boarding +Residential</td>
              <td>51-59</td>
            </tr>
          </table>
        </li>
      </ul>
    </section>
    <section class="performance-category">
      <ul>
        <li style="height:125px;" <?php if(getFiled('Q5W1', $schoolUserID) == "" && getFiled('Q5W2', $schoolUserID) == "" && getFiled('Q5W3', $schoolUserID) == "" && getFiled('Q5W4', $schoolUserID) == ""){ echo "style='display:none;'"; } ?>>
          <figure><img src="assets/img/performance/water-source.jpg"></figure>
          <div class="description">
            <h3>Source of Water</h3>
            <?php
         $wcombination=array();
                $groundwater= (getFiled('Q5W1', $schoolUserID) != "") ? (getFiled('Q5W1', $schoolUserID) == '1' || getFiled('Q5W1', $schoolUserID) == 'true' ) ? "Y" : "N" : "N/A";              
                $Surfacewater = (getFiled('Q5W2', $schoolUserID) != "") ? (getFiled('Q5W2', $schoolUserID) == '1' || getFiled('Q5W2', $schoolUserID) == 'true') ? "Y" : "N" : "N/A";
                $Rainwater = (getFiled('Q5W3', $schoolUserID) != "") ? (getFiled('Q5W3', $schoolUserID) == '1' || getFiled('Q5W3', $schoolUserID) == 'true') ? "Y" : "N" : "N/A";
                $Recycledwastewater = (getFiled('Q5W4', $schoolUserID) != "") ? (getFiled('Q5W4', $schoolUserID) == '1' || getFiled('Q5W4', $schoolUserID) == 'true') ? "Y" : "N" : "N/A";
               if (($Surfacewater == "Y" && $Rainwater == "Y" && $Recycledwastewater == "Y" && $groundwater == "Y") || ($Surfacewater == "Y" && $Rainwater == "Y" && $Recycledwastewater == "Y")) {
                    $SourceofWater = "All 4 or Surface+ rainwater+ recycle water  Options to be linked";
                    $SourceofWater_msg = "The sources of water for your school are surface water, recycled water and rainwater, which are viable for usage. It is good that you know where your water comes from!";
                        } else if (($Surfacewater == "Y" && $Rainwater == "Y") || ($Surfacewater == "Y" && $Recycledwastewater == "Y") || ($Rainwater == "Y" && $Recycledwastewater == "Y")) {
                                    $SourceofWater = "";
                                    $SourceofWater_msg = "You use a combination of either 'surface and rainwater' or 'surface and recycled water' or 'rainwater and recycled water'.  All of these combinations demonstrate that your school is not extracting ground water but is making an effort to either catch rainwater or treat waste water for further use.";
                       }else if ($groundwater == "Y" && $Rainwater == "Y") {
                                    if($Surfacewater == "Y")
                                        $wcombination[] = "Surface water";
                                     if($Rainwater == "Y")
                                        $wcombination[] = "Rain water";
                                     if($Recycledwastewater == "Y")
                                        $wcombination[] = "Recycled waste water";
                                     if($groundwater == "Y")
                                        $wcombination []= "Groundwater";
             
                  
                                    $wcombination_msg =implode(",",$wcombination);                                     
                                    

                                    $SourceofWater =$wcombination_msg;
                                    $SourceofWater_msg = "The source of water for your school is a combination of '".$wcombination_msg."'. which is not sufficient to fulfil the water requirements of your school. It is recommended that you expand your sources of water to alternatives like surface water, rainwater and recycled wastewater.";
                                }else if ($Surfacewater == "Y" || $Rainwater == "Y" || $Recycledwastewater == "Y" || $groundwater == "Y") {
                                    
                                    if($Surfacewater == "Y")
                                        $wcombination[] = "Surface water";
                                     elseif($Rainwater == "Y")
                                        $wcombination[] = "Rain water";
                                     elseif($Recycledwastewater == "Y")
                                        $wcombination[] = "Recycled waste water";
                                     elseif($groundwater == "Y")
                                        $wcombination[] = "Groundwater";
                 
                
                 $wcombination_msg =implode(",",$wcombination); 
                   

                                    $SourceofWater = $wcombination_msg;
                                    $SourceofWater_msg = "The source of water for your school is '".$wcombination_msg."'. It is recommended that you expand your source of water to more options and combinations of surface water, rainwater and recycled wastewater.";
                                } else {
                                    
                                     if($Surfacewater == "Y")
                                        $wcombination[] = "Surface water";
                                     if($Rainwater == "Y")
                                        $wcombination[] = "Rain water";
                                     if($Recycledwastewater == "Y")
                                        $wcombination[] = "Recycled waste water";
                                     if($groundwater == "Y")
                                        $wcombination []= "Groundwater";
                               
            
             $wcombination_msg =implode(",",$wcombination);                                     
                                    
                                    $SourceofWater =$wcombination_msg;
                                    $SourceofWater_msg = "Your source of water is combination of '".$wcombination_msg."'. Which is not sufficient to fulfill the water requirements of your school. You should expand your source of water to more options such as surface water, rainwater and recycled wastewater.";
                                }
                                ?>
            <h4><?php echo $SourceofWater; ?></h4>
            <p><?php echo $SourceofWater_msg; ?></p>
          </div>
        </li>
        <li <?php if(getFiled('Q7W1', $schoolUserID) == ""){ echo "style='display:none; height:130px!important;'";} ?>>
          <figure><img src="assets/img/performance/water-source.jpg" ></figure>
          <div class="description">
            <h3>Does your school get daily water supply?</h3>
            <?php
//Question.4 water
                if (getFiled('Q7W1', $schoolUserID) == "Y") {
                    $daily_water = "Yes";
                    $daily_water_msg = "Please ensure that the water supply in your school is adequate so that you can meet required per capita consumption.";
                } else {
                    $daily_water = "No";
                    $daily_water_msg = "Please ensure that the water supply in your school is adequate. We suggest exploring how you can manage your supply of water better.";
                }
                ?>
            <h4><?php echo $daily_water; ?></h4>
            <p><?php echo $daily_water_msg; ?></p>
          </div>
        </li>
         
        <li <?php if(getFiled('Q8W2', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure><img src="assets/img/performance/harvesting.jpg"></figure>
          <div class="description">
            <h3>Rainwater Harvesting</h3>
            <?php
                                if (getFiled('Q8W2', $schoolUserID) == "Y") {
                                    $RainwaterHarvesting = "Yes";
                                    $RainwaterHarvesting_msg = "It is noteworthy that your school has rainwater harvesting system! We are glad that your school recognises the importance of harvesting rainwater.";
                                } else {
                                    $RainwaterHarvesting = "No";
                                    $RainwaterHarvesting_msg = "We urge you to consider rainwater harvesting for your school. It is a useful and feasible practice. Harvesting rainwater from any or all of the catchment areas (roof, paved and unpaved areas) is cost-effective and will enable you to recharge groundwater.";
                                }
                                ?>
            <h4><?php echo $RainwaterHarvesting; ?></h4>
            <p><?php echo $RainwaterHarvesting_msg; ?></p>
          </div>
        </li>
          
        <li>
          <figure><img src="assets/img/performance/monitor.jpg"></figure>
          <div class="description">
            <h3>Sanitation and Hygiene Practices</h3>
        <?php
//Q.7: Please share details about sanitation and hygiene practices in your school. //6 points
                                $separate_toilets = getFiled('Q8W3S1', $schoolUserID); //Does the school have separate toilets for males and females?
                                $toilets_accessible = getFiled('Q8W3S4', $schoolUserID);
                                $differently_abled_children = getFiled('Q8W3S5', $schoolUserID);
                                $teaching_toilets = getFiled('Q8W3S6', $schoolUserID);
                                $non_teaching_toilets = getFiled('Q8W3S6', $schoolUserID);
                                
                                if ($separate_toilets == "Y" && $toilets_accessible == "Y" && $differently_abled_children == "Y" && $teaching_toilets == "Y" && $non_teaching_toilets == "Y") {
                                    $Hygiene_Practices = "Yes";
                                    $Hygiene_Practices_Msg = "It is great that your school practices all the sanitation and hygiene related practices. Keep up the good work!";
                                } else {
                                    $Hygiene_Practices = "No";
                                    $Hygiene_Practices_Msg = "To make your school even more hygiene-friendly,  please consider some of the following practices: separate toilets for males and females; making toilets accessible and safe to use for children; making toilets accessible and safe to use for differently-abled children as well as staff; allocating a suitable location for toilets in terms of privacy and safety;  ensuring sufficient light during daytime.";
                                }
                                ?>
                    <h4><?php echo $Hygiene_Practices; ?></h4>
            <p><?php echo $Hygiene_Practices_Msg; ?></p>
          </div>
        </li>
      </ul>
    </section>
    <section class="performance-category">
      <ul>     
     <li>
          <table width="100%" class="intro-table" cellspacing="0" style="margin-bottom:0;">
            <tr>
              <th class="performance-blue-bg">Category</th>
              <th class="performance-blue-bg">Load per drinking water tap</th>
              <th class="performance-blue-bg">Load per ablution tap</th>
              <th class="performance-blue-bg">Load per urinal</th>
              <th class="performance-blue-bg">Load per water closet </th>
            </tr>
            <tr>
              <td>Day Scholar</td>
              <td>50 people</td>
              <td>50 people</td>
              <td>50 people</td>
              <td>45 people</td>
            </tr>
            <tr>
              <td>Day Boarding</td>
              <td>50 people</td>
              <td>50 people</td>
              <td>40 people</td>
              <td>35 people</td>
            </tr>
            <tr>
              <td>Residential</td>
              <td>50 people</td>
              <td>50 people</td>
              <td>30 people</td>
              <td>25 people</td>
            </tr>
            <tr>
              <td>Day scholar + Residential</td>
              <td>50 people</td>
              <td>50 people</td>
              <td>50 people</td>
              <td>35 people</td>
            </tr>
            <tr>
              <td>Day boarding + Residential</td>
              <td>50 people</td>
              <td>50 people</td>
              <td>35 people</td>
              <td>30 people</td>
            </tr>
            <tr>
              <td>Day Scholar + Boarding </td>
              <td>50 people</td>
              <td>50 people</td>
              <td>50 people</td>
              <td>40 people</td>
            </tr>
          </table>
        </li>
        <li <?php if(getFiled('Q9W1', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure style="margin-left:-12px;"><img src="assets/img/performance/drink.jpg"></figure>
          <div class="description">
            <h3>Load on Drinking Water Taps</h3>
            <?php        //Q.8 discuss regarding msg. for $DrinkingWaterTabs variable. 
                                $drinking_water_taps_8 = getFiled('Q9W1', $schoolUserID);
																if($drinking_water_taps_8==0){
                                  $drinking_water_taps_8=1;
                                }
                                $Load_for_drinking_water_tap = $total_population / $drinking_water_taps_8;
                                if ($Load_for_drinking_water_tap <= 50 && $drinking_water_taps_8 != "" && $drinking_water_taps_8 != 0) {
                                    $DrinkingWaterTabs = "If equal to or less than the load";
                                    $DrinkingWaterTabs_Msg = "It is great that you have the required number of drinking water taps in your school.";
                                } else {
                                    $DrinkingWaterTabs = "If more than the load";
                                    $DrinkingWaterTabs_Msg = "You do not have the required number of drinking water taps in your school. Please refer to the table for the prescribed number.";
                                }
                                ?>
            <!--            <h4><?php echo $DrinkingWaterTabs; ?></h4>-->
            <p><?php echo $DrinkingWaterTabs_Msg; ?></p>
          </div>
        </li>
        <li style="height:130px!important;" <?php if(getFiled('Q10W1', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure><img src="assets/img/performance/pump.jpg" ></figure>
          <div class="description" >
            <h3>Hand Pumps</h3>
            <?php
                                //Q.9 How many hand pumps do you have?
                $hand_pumps = getFiled('Q10W1', $schoolUserID);

                $hand_pumps; 
                                //$Load_for_hand_pumps=$total_population/$hand_pumps;
                
                 $Q1G2 = (getFiled('Q1G2', $schoolUserID) != '') ? getFiled('Q1G2',  $schoolUserID) : "";

                 


                if ($hand_pumps <= 1) { //Ref not provided in table
                    $handpumps = "Equal to 1 or 0";

                 if($Q1G2 < 6)
                  {
                      $handpumps_msg = "You do not have hand pumps in your school. It is good that your school is not extracting a lot of groundwater, which is a valuable and diminishing resource. Using rainwater harvesting system, wastewater treatment processes and surface water are some alternative sources of water that your school can explore.";
                  }else {

                      $handpumps_msg = "You do not have hand pumps in your school. It is good that your school is not extracting a lot of groundwater, which is a valuable and diminishing resource. Using rainwater harvesting system, wastewater treatment processes and surface water are some alternative sources of water that your school can explore.";
                  }
                    
                } else {
                        $handpumps = "More than 1";


                   if($Q1G2 < 6)
                  {
                      $handpumps_msg ="You have many hand pumps in your school. Please ensure that you are not extracting too much groundwater, which is a valuable and diminishing resource. Using rainwater harvesting system, wastewater treatment processes and surface water are some alternative sources of water that your school can explore.";
                  }else {

                      $handpumps_msg = "You have many hand pumps in your school. Please ensure that you are not extracting too much of groundwater which is a valuable but diminishing resource. Using rainwater harvesting system/ waste water treatment processes/ surface water are a few of the other sources of water your school can always look into.";
                  }


                        
                        }
                                ?>
            <!--            <h4><?php echo $handpumps; ?></h4>-->
            <p><?php echo $handpumps_msg; ?></p>
          </div>
        </li>
        <li <?php if(getFiled('Q11W1', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure><img src="assets/img/performance/ablution.jpg"></figure>
          <div class="description">
            <h3>Load on Ablution Taps</h3>
            <?php
                                //Q.10 How many ablution taps (taps used for washing hands only) do you have?
                              $ablution_taps_q10 = getFiled('Q11W1', $schoolUserID);
          if(isset($ablution_taps_q10) && !empty($ablution_taps_q10)){
                                $ablution_taps_q10 = $ablution_taps_q10;
        }else{
            $ablution_taps_q10 = 1;
        }
          $Load_for_ablution_taps = $total_population / $ablution_taps_q10;
                                if ($Load_for_ablution_taps <= 50 && $ablution_taps_q10 != "" && $ablution_taps_q10 != 0) {
                                    $abulation_tabs = "equal to or less than the load";
                                    $abulation_tabs_msg = "You have the required number of ablution taps in your school.";
                                } else {
                                  $abulation_tabs = "more than the load";
                                    $abulation_tabs_msg = "You do not have the required number of ablution taps in your school. Please refer to the table for the prescribed number.";
                                }
                                ?>
            <!--            <h4><?php echo $abulation_tabs; ?></h4>-->
            <p><?php echo $abulation_tabs_msg; ?></p>
          </div>
        </li>
        <li <?php if(getFiled('Q13W1S4', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure><img src="assets/img/performance/wc.jpg"></figure>
          <div class="description">
            <h3>Load on Water Closets</h3>
            <?php          
            
//Q.11 How many water closets (used for defecation and urination) do you have?
   $water_closets_q11 = getFiled('Q13W1S4', $schoolUserID);
    $Load_for_water_closets = $total_population / $water_closets_q11;
    $school_type = $school_category;
    if ($school_type == 1 && $Load_for_water_closets <= 45 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //school type Day Scholar
        $waterclosets = "Equal to or less than the load ";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination) in your school.";
    } else if ($school_type == 2 && $Load_for_water_closets <= 35 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Boarding 
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination) in your school.";
    } else if ($school_type == 3 && $Load_for_water_closets <= 25 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Residential 
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination) in your school.";
  } else if ($school_type == 4 && $Load_for_water_closets <= 40 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Scholar + Day Boarding
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination) in your school.";
    } else if ($school_type == 5 && $Load_for_water_closets <= 30 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Boarding + Residential
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination) in your school.";
    } else if ($school_type == 6 && $Load_for_water_closets <= 35 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Scholar + Residential
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination) in your school.";
    } else if ($school_type == 7 && $Load_for_water_closets <= 25 && $water_closets_q11 != "" && $water_closets_q11 != 0) { //Day Scholar + Day Boarding + Residential (ref value not provided)
        $waterclosets = "Equal to or less than the load";
        $waterclosets_msg = "You have the required number of water closets (used for defecation and urination) in your school.";
    } else {
        $waterclosets = "More than the load";
        $waterclosets_msg = "You do not have the required number of water closets (used for defecation and urination) in your school. Please refer to the table for the prescribed number.";
    }
    ?>
            <!--    <h4><?php echo $waterclosets; ?></h4>-->
            <p><?php echo $waterclosets_msg; ?></p>
          </div>
        </li>
        <li <?php if(getFiled('Q14W1', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure><img src="assets/img/performance/uninal.jpg"></figure>
          <div class="description">
            <h3>Load on Urinals</h3>
            <?php
                                //Q.12 How many urinals (strictly used for urination only) do you have?
             $water_urinals_q12 = getFiled('Q14W1', $schoolUserID);
      if(isset($water_urinals_q12) && $water_urinals_q12==0){
        $Load_for_urinals = 0;
      }else{    
            $Load_for_urinals = number_format(($total_population / $water_urinals_q12),2,".","");
      }    
            //$school_type = $sql_data_array['266617X34X1608']; //q15. get appropriate category for your school like Day Scholar,Day Boarding etc.
            if ($school_type == 1 && $Load_for_urinals <= 50 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //school type Day Scholar
                //$Load_for_urinals = $Load_for_urinals;
                $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
            } else if ($school_type == 2 && $Load_for_urinals <= 40 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Boarding 
                //$Load_for_urinals = $Load_for_urinals;
                $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
            } else if ($school_type == 3 && $Load_for_urinals <= 30 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Residential 
                  //  $Load_for_urinals = $Load_for_urinals;
                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
            } else if ($school_type == 4 && $Load_for_urinals <= 50 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Scholar + Day Boarding
                    //    $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
              } else if ($school_type == 5 && $Load_for_urinals <= 35 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Boarding + Residential
                        //            $Load_for_urinals = $Load_for_urinals;
                                   $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
             } else if ($school_type == 6 && $Load_for_urinals <= 50 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Scholar + Residential
                          //          $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
              } else if ($school_type == 7 && $Load_for_urinals <= 30 && $water_urinals_q12 != "" && $water_urinals_q12 != 0) { //Day Scholar + Day Boarding + Residential (ref value not provided)
                            //        $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You have the required number of urinals (strictly used for urination only) in your school.";
               } else {
                            //        $Load_for_urinals = $Load_for_urinals;
                                    $Load_for_urinals_msg = "You do not have the required number of urinals (strictly used for urination only) in your school. Please refer to the table for prescribed norm.";
                }
                                ?>
            <!--            <h4><?php echo $Load_for_urinals; ?> people per Urinal</h4>-->
            <p><?php echo $Load_for_urinals_msg; ?></p>
          </div>
        </li>
      </ul>
    </section>
    <section class="performance-category">
      <ul>
        <li <?php if(getFiled('Q15W1', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure><img src="assets/img/performance/outlet.jpg"></figure>
          <div class="description">
            <h3>Water Outlets</h3>
            <?php
                                //Q.13 How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have? ( 1 Points )
                $other_water_outlets_q13 = getFiled('Q15W1', $schoolUserID);
        if(isset($other_water_outlets_q13)&& $other_water_outlets_q13!=0){
                $Load_for_other_water_outlets = $total_population / $other_water_outlets_q13;
        }else{
           $Load_for_other_water_outlets=0;
        }
                    if ($other_water_outlets_q13 > 1) { //not provided by cse
                                    $water_outlets = $Load_for_other_water_outlets;
                                    $water_outlets_msg = "You have many water outlets in your school. Please ensure that you are not extracting too much groundwater.";
                                } elseif($other_water_outlets_q13 ==0 || $other_water_outlets_q13 ==1 ) {
                                    $water_outlets = $Load_for_other_water_outlets;
                                    $water_outlets_msg = "You have very few water outlets in your school. It is good that your school is not extracting a lot of groundwater.";
                                }
                                ?>
            <!--            <h4><?php echo $water_outlets; ?> people per outlet</h4>-->
            <p><?php echo $water_outlets_msg; ?></p>
          </div>
        </li>
        <li <?php if(getFiled('Q16W1', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure><img src="assets/img/performance/water_storage.jpg" style="width: 125px !important"></figure>
          <div class="description" style="margin-left: -12px !important">
            <h3>Is there a water storage system in place to supply water in the toilets?</h3>
            <?php
                                //Q.14 Is there a water storage system in place to supply water in the toilets?
                                $storage_system_q14 = getFiled('Q16W1', $schoolUserID);
                                //$Load_for_other_water_outlets=$total_population/$other_water_outlets_q13;
                                if ($storage_system_q14  == 'Y') { //not provided by cse
                                    $storage_heading_q14 = "Yes";
                                    $water_supply = "Your school has a water storage system in place to supply water to the toilets.";
                                } else {
                                    $storage_heading_q14 = "No";
                                    $water_supply = "Your school does not have a water storage system in place to supply water to the toilets.";
                                }
                                ?>
            <h4><?php echo $storage_heading_q14; ?></h4>
            <p><?php echo $water_supply; ?></p>
          </div>
        </li>
        <li <?php if(getFiled('Q21W1', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure><img src="assets/img/performance/water_supply.jpg"></figure>
          <div class="description">
            <h3>Is the water supply sufficient?</h3>
            <?php
                                //Q.15  Is the water supply sufficient? 
                $storage_system_q15 = getFiled('Q21W1', $schoolUserID);
                if ($storage_system_q15  == 'Y') { //not provided by cse
                    $storage_heading_q15 = "Yes";
                     $water_supply15 = "Your school has enough water supply.";
                    } else {
                        $storage_heading_q15 = "No";
                        $water_supply15 = "Your school does not have sufficient water supply.";
                        }
                                ?>
            <h4><?php echo $storage_heading_q15; ?></h4>
            <p><?php echo $water_supply15; ?></p>
          </div>
        </li>
        <li <?php if(getFiled('Q18W1', $schoolUserID) == ""){ echo "style='display:none; height:130px;'";}else{echo "style='height:130px;'";} ?>>
          <figure><img src="assets/img/performance/cleaned_toilets.jpg"></figure>
          <div class="description">
            <h3>Are the toilets cleaned?</h3>
            <?php
                                //Q.16 Are the toilets cleaned?
                                $storage_system_q16= getFiled('Q18W1', $schoolUserID);
                               if ($storage_system_q16  == 'Y') {         
                                   $storage_heading_q16 = "Yes";
                                    $water_supply16 = "It is good that the toilets in the school are cleaned every day. Cleaning toilets more than once a day is necessary to maintain good hygiene.";
                                } else 
                                    {
                                    $storage_heading_q16 = "No";
                                 $water_supply16 = "The toilets in the school are not cleaned every day. Cleaning toilets more than once a day is necessary to maintain good hygiene.";
                                }
                                ?>
            <h4><?php echo $storage_heading_q16; ?></h4>
            <p><?php echo $water_supply16; ?></p>
          </div>
        </li>
        <li <?php if(getFiled('Q19W1', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure><img src="assets/img/performance/wastewater_treatment.jpg"></figure>
          <div class="description">
            <h3>Does your school have a wastewater treatment facility?</h3>
            <?php
                                //Q.17 Does your school have a wastewater treatment facility
                                $storage_system_q17= getFiled('Q19W1', $schoolUserID);
                               if ($storage_system_q17  == 'Y') {           
                                   $storage_heading_q17 = "Yes";
                                    $water_supply17 = "It is noteworthy that your school has a wastewater treatment facility. It is essential that we treat our own wastewater.";
                                } else 
                                    {
                                    $storage_heading_q17 = "No";
                                 $water_supply17= "Your school does not have a wastewater treatment facility. We recommend considering treatment of wastewater within the school premises and reusing the treated water.";
                                }
                                ?>
            <h4><?php echo $storage_heading_q17; ?></h4>
            <p><?php echo $water_supply17; ?></p>
          </div>
        </li>
      </ul>
    </section>
    <section class="performance-category">
      <ul>
        <li <?php if(getFiled('Q20W1', $schoolUserID) == ""){ echo "style='display:none;'";} ?>>
          <figure><img src="assets/img/performance/reuse_wastewater.jpg"></figure>
          <div class="description">
            <h3>Does your school reuse the treated wastewater?</h3>
            <?php
                                //Q.18 Does your school reuse the treated wastewater?
                                $storage_system_q18= getFiled('Q20W1', $schoolUserID);
                               if ($storage_system_q18  == 'Y') {
                                   $storage_heading_q18 = "Yes";
                                    $water_supply18 = "It is commendable that treated wastewater is used within your school.";
                                } else 
                                    {
                                    $storage_heading_q18 = "No";
                                 $water_supply18 = "We recommend exploring ways to use treated wastewater.";
                                }
                                ?>
            <!--            <h4><?php echo $storage_heading_q18; ?></h4>-->
            <p><?php echo $water_supply18; ?></p>
          </div>
        </li>
      </ul>
    </section>

    <div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>
     
  </div>
  <div class="waste" style="line-height: 16px;">
    <h2>
      <figure><img src="assets/img/performance/waste.png" width="120"></figure>
      <label> </label>
      <span>Green Schools Programme Audit 2019-2020</span></h2>
    <p>Do you know how much solid waste (paper, plastics, food waste etc) Delhi produces? 10,000 tonnes a day. We dump it all into landfills, which are overflowing and which pollute the environment. Moreover, there is no land available to create more landfills. We face day-to-day problems regarding waste management. Where to dispose of waste? How to dispose of waste? What to do with the waste?</p>
    <p>Schools, by following efficient waste management practices, can play a leading role in setting examples, creating a public opinion, and ridding India of this menace.
</p>
<p>Explore the waste related activities and information on <a href="https://www.greenschoolsprogramme.org/knowledge-bank/waste/" style="color:blue;">GSP website</a></p>
    <section class="remember">
      <h3>Remember:</h3>
       <ol style="list-style-type: japanese-formal !important;">
        <li>Segregation at source is the first and most important part of efficient waste management.</li>
        <li>Every class should have minimum of two dustbins to collect wet and dry waste separately.</li>
        <li>Set up a composting facility to manage the wet waste within school premises.</li>
        <li>Dispose of e-waste by sending it to authorised dealers.</li>
        <li>DO NOT burn waste in school premises.</li>
        <li>Send waste to designated dumping or landfill sites only.</li>
        <li>Have an efficient waste policy for your school.</li>
    </ol>
    </section>
    <h3>Your School's Performance</h3>
    <?php
                 $total_waste_points = number_format(getPrimaryWastePoints($schoolUserID),2);
                    if($total_waste_points >=30)
               $point_performance_msg_w = "Your school has done very well in this section. It manages all of its waste very efficiently. We are glad that your school has created a waste-wise campus.";
                    elseif($total_waste_points >= 25 )
                        $point_performance_msg_w = "Your school has done well in this section. It manages most of the waste generated on campus. With the help of the assessment given below, your school can take steps to become even more efficient in waste management.";
                    elseif($total_waste_points >= 16)
                        $point_performance_msg_w = "Your school has done average in this section. It manages most of the waste generated on campus. With the help of the assessment given below, your school can take steps to become more efficient in waste management.";
                    elseif($total_waste_points <= 15)
                        $point_performance_msg_w = "Your school has done poorly  in this section. It needs to take serious steps to manage its waste properly. With the help of the assessment given below, your school can take steps to become more efficient in waste management.";                   
                ?>
    <p><?php echo $point_performance_msg_w; ?></p>
    <section class="performance-category">
      <ul>
        <li>
          <figure><img src="assets/img/performance/segregate.jpg"></figure>
          <div class="description">
            <h3>Segregation of Solid Waste</h3>
            <?php
                                // Qn 1 : Does your school segregate solid waste?
                                $segregate_solid_waste =getFiled('Q4Wa1', $schoolUserID);
                                if ($segregate_solid_waste == 'Y') {
                                    $st_msg = "Yes";
                                    $watse1_msg = "It is remarkable that your school segregates waste at source! Inculcating this habit of waste segregation at source among students can help reform  waste-related issues significantly.";
                                } else {
                                    $st_msg = "No";
                                    $watse1_msg = "Your school does not segregate waste at source. We strongly recommend segregating waste at source and making students aware of the practice in the school.";
                                }
                                ?>
            <h4><?php echo $st_msg; ?></h4>
            <p><?php echo $watse1_msg; ?></p>
          </div>
        </li>
        <li>
          <figure><img src="assets/img/performance/collection.jpg"></figure>
          <?php
                            //Qn 2 : Waste collection points in your school.
                            // Total Sum of (0,1,2 and 3 bins);
                            $total_collection_bins = getFiled('Q5Wa11S5', $schoolUserID);
                            // Total Sum of (0,1 bins);     
                            $total_collection_0_1_bins = getFiled('Q5Wa11S1', $schoolUserID) + getFiled('Q5Wa11S2', $schoolUserID);
                            // Total Sum of (2,3 bins);
                            $total_collection_2_3_bins = getFiled('Q5Wa11S3', $schoolUserID) + getFiled('Q5Wa11S4', $schoolUserID);
                            
                            // Percentage of 2 and 3 bins
                            $two_three_bin_percentage = number_format(($total_collection_2_3_bins/$total_collection_bins)*100,2,".","");
                            // Column 5 (2bins) and Column 6 (3or more bins) is equal to Sum of Total no. of collection points
                            if ($two_three_bin_percentage >= 76 && $two_three_bin_percentage <=100) {
                                $msg_waste2 = "Most of the collection points in the school have two or more dustbins for different categories of waste. This is a good practice! We recommend regular learning exercises to enable students to segregate waste at source even more effectively.";?>
          <div class="description">
            <h3>Waste Collection Points</h3>
            <!--                                <h4>2.3 average</h4>-->
            <p><?php echo $msg_waste2;?></p>
          </div>
          <?php    }
                            //   Column 5 (2bins) and Column 6 (3or more bins) is very less than Sum of Total no. of collection 
                            elseif ($two_three_bin_percentage >= 50 && $two_three_bin_percentage <=75) {
                                $msg_waste2 = "Most of the collection points in the school have two or more dustbins for different categories of waste. This is a good practice! We recommend regular learning exercises to enable students to segregate waste at source even more effectively.";?>
          <div class="description">
            <h3>Waste Collection Points</h3>
            <!--                                <h4>2.3 average</h4>-->
            <p><?php echo $msg_waste2;?></p>
          </div>
          <?php    }
                              //Column 5 (2bins) and Column 6 (3 or more bins) is less than Sum of Total no. of collection 
                            elseif ($two_three_bin_percentage >= 25 && $two_three_bin_percentage <=49) {
                                $msg_waste2 = "Waste segregation at source is not efficient in your school. We strongly recommend installing more collection points with two or more dustbins. It is also suggested that the school holds regular learning exercises to enable students to segregate waste effectively at source.";
                ?>
          <div class="description">
            <h3>Waste Collection Points</h3>
            <!--                                <h4>2.3 average</h4>-->
            <p><?php echo $msg_waste2;?></p>
          </div>
          <?php }
                            
                             elseif ($two_three_bin_percentage < 25) {
                                $msg_waste2 = "Waste segregation at source is not efficient in your school. We strongly recommend installing more collection points with two or more dustbins. It is also suggested that the school holds regular learning exercises to enable students to segregate waste effectively at source.";
                ?>
          <div class="description">
            <h3>Waste Collection Points</h3>
            <!--                                <h4>2.3 average</h4>-->
            <p><?php echo $msg_waste2;?></p>
          </div>
          <?php
                            }
                            //'Column 3 (No bin) and Column 4 (1 bin) is equal to Sum of Total no. of collection points the school 
                            elseif ($total_collection_0_1_bins == $total_collection_bins) {
                                $msg_waste2 = "Waste segregation at source is not being practised in your school. We strongly recommend installing collection points with two or more dustbins in the school. It is also suggested that the school holds regular learning exercises to enable students to segregate waste effectively at source.";
                ?>
          <div class="description">
            <h3>Waste Collection Points</h3>
            <!--                                <h4>2.3 average</h4>-->
            <p><?php echo $msg_waste2;?></p>
          </div>
          <?php
                            }
                            ?>
        </li>
      </ul>
    </section>
    <section class="performance-category">
      <ul>
         <li style="height:130px;">
          <figure><img src="assets/img/performance/compose.jpg"></figure>
          <div class="description">
            <?php
//Qn 5 : Does your school have a composting facility?
        $waste_composting = getFiled('Q9Wa1', $schoolUserID);
                if ($waste_composting == "Y") {
                    $st_waste5 = "Yes";
                    $msg_waste5 = "It is good that your school has a composting facility. Please ensure that the structure is maintained properly and used to its full potential.";
                } elseif ($waste_composting == "N") {
                    $st_waste5 = "No";
                    $msg_waste5 = "Your school does not practice composting. It is recommended that you start composting in your school for efficient waste management.";
                }
        ?>
            <h3>Waste Composting</h3>
            <h4><?php echo $st_waste5; ?></h4>
            <p><?php echo $msg_waste5; ?></p>
          </div>
        </li>
        <li style="height: 125px">
          <figure><img src="assets/img/performance/book.jpg"  ></figure>
          <div class="description">
            <?php
//Qn 6 : Does your school encourage students & teachers to reuse textbooks?
$reuse_textbook = getFiled('Q10Wa1', $schoolUserID);
if ($reuse_textbook == "Y") {
    $st_waste6 = "Yes";
    $msg_waste6 = "It is great that your school encourages its community to reuse textbooks.";
} elseif ($reuse_textbook == "N") {
    $st_waste6 = "No";
    $msg_waste6 = "Reuse of textbooks is not encouraged in the school. We recommend promoting this activity to ensure optimum use of resources.";
}
?>
            <h3>Textbook Reuse</h3>
            <h4><?php echo $st_waste6; ?></h4>
            <p><?php echo $msg_waste6; ?></p>
          </div>
        </li>
        
        <li>
          <figure><img src="assets/img/performance/destination.jpg"></figure>
          <?php
//Qn 8 Final destination for waste from your school
        $waste_destination = getFiled('Q14Wa1', $schoolUserID);
        if ($waste_destination == 1) {
            $st_waste8 = "Open dumping";
            $msg_waste8 = "Your school does not know where its waste goes for waste disposal. We recommend getting the students to map the disposal of waste outside the school premises as an outdoor science exercise. Further, please try to recycle more waste within the school.";
        } elseif ($waste_destination == 2) {
            $st_waste8 = "Designated dumping site (Dhalao)";
            $msg_waste8 = "Your school makes sure that the waste reaches the designated site for disposal. To improve your school's waste management further, please try to recycle more waste within the school.";
        } elseif ($waste_destination == 3) {
            $st_waste8 = "Landfill Site";
            $msg_waste8 = "Your school makes sure that the waste reaches the designated site for disposal. To improve your school's waste management further, please try to recycle more waste within the school.";
        } elseif ($waste_destination == 4) {
            $st_waste8 = "Don't know";
            $msg_waste8 = "Your school does not know where its waste goes for waste disposal. We recommend getting the students to map the disposal of waste outside the school premises as an outdoor science exercise. Further, please try to recycle more waste within the school.";
        }
        ?>
          <div class="description">
            <h3>Waste Destination</h3>
            <h4><?php echo $st_waste8; ?></h4>
            <p><?php echo $msg_waste8; ?></p>
          </div>
        </li>
      </ul>
    </section>
    <section class="performance-category">
      <ul>
        <!-- Burning of Waste Start -->
        <li>
          <figure><img src="assets/img/performance/trash.jpg"></figure>
          <div class="description">
            <?php
//Qn 9 : Does your school burn waste?
$burn_waste = getFiled('Q15Wa1', $schoolUserID);
if ($burn_waste == "Y") {
    $st_waste9 = "Yes";
    $msg_waste9 = "Burning of waste is one of the biggest environmental hazards. It releases toxic gases that are not only harmful for humans and animals but also have adverse effects on the environment. We request you to not burn the waste.";
} elseif ($burn_waste == "N") {
    $st_waste9 = "No";
    $msg_waste9 = "It is great that the school does not burn waste. This practice should also be instilled in students so that they discourage burning of waste even outside the school.";
}
?>
            <h3>Burning of Waste</h3>
            <h4><?php echo $st_waste9; ?></h4>
            <p><?php echo $msg_waste9; ?></p>
          </div>
        </li>
        <!-- Burning of Waste End --->
        <?php
//Qn 11 Do you know that your E-waste can be collected by an authorised dealer or dismantler?
$authorised_dealer = getFiled('Q13Wa1', $schoolUserID);
if ($authorised_dealer == "Y") {
    ?>
        <li>
          <figure><img src="assets/img/performance/e-waste.jpg"></figure>
          <div class="description">
            <?php
                            ////Qn 11(a)  Who collects your e-waste, when not in working condition?
                            $e_waste_disposal = getFiled('Q13Wa2', $schoolUserID);
                            if ($e_waste_disposal == 1) {
                                $st_waste11 = "Kabadiwalla/ Scrapdealer";
                                $msg_waste11 = "The e-waste generated in the school is sold to a kabadiwala/ scrapdealer, which is an inefficient disposal method. It is recommended that you sell it to an authorised seller for its effective reuse and recylcing.";
                            } elseif ($e_waste_disposal == 2) {
                                $st_waste11 = "Taken back by manufacturer/vendor";
                                $msg_waste11 = "The e-waste generated in the school is sold to an authorised seller that helps in its effective reuse and recycling.";
                            } elseif ($e_waste_disposal == 3) {
                                $st_waste11 = "Authorised dealer";
                                $msg_waste11 = "The e-waste generated in the school is sold to an authorised seller that helps in its effective reuse and recycling.";
                            } elseif ($e_waste_disposal == 4) {
                                $st_waste11 = "Authorised dismantler";
                                $msg_waste11 = "The e-waste generated in the school is sold to an authorised seller that helps in its effective reuse and recycling.";
                            } else {
                                $st_waste11 = getFiled('Q13Wa2O', $schoolUserID);
                                $msg_waste11 = "Your school does not know where its waste goes for waste disposal. Try to  recycle more of your waste within the school! And try to get your students to map the disposal of waste outside the school premises - as an exercise! ";
                            }
                            ?>
            <h3>E-waste Disposal</h3>
            <h4><?php echo $st_waste11; ?></h4>
            <p><?php echo $msg_waste11; ?></p>
          </div>
        </li>
        <?php } ?>
      </ul>
    </section>
    <div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>
     
  </div>

  <div class="introduction page_break">
    <div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>

    <p style="text-align: center; font-size: 18px; color: blue;">Thank You</p>
     <p>Hope that each year your school will participate in the GSP Audit and contribute towards a better tomorrow by educating children to become environmentally sensitive and responsible citizens. We hope that your school will continue to strive to be a changemaker Green school.</p>

  </div>

   <div class="introduction page_break">
    <div class="footer" style="position: absolute; top: 95%;">
      <p>Performance Report | <?php echo $performance[0]->name; ?></p>
    </div>


      <p style="text-align: center; font-size: 18px; color: blue;">What&#39;s New</p>
      <p>
        The year 2019-20 was marked by increased focus on energy. GSP&#39;s Solar on Schools initiative that was piloted in Himachal Pradesh saw a range of activities such as workshops, science fairs, etc. We started the year off with the publication Rethink Energy which helps in gauging energy consumption patterns and improving energy use in schools. Other resource materials include a board game, colouring book, fact sheets and videos. All this material can be found on the GSP Website: <a href="https://www.greenschoolsprogramme.org/knowledge-bank/energy/gsp-solar-in-schools-initiative-2019-20/" style="color:blue;">https://www.greenschoolsprogramme.org/knowledge-bank/energy/gsp-solar-in-schools-initiative-2019-20/</a>
      </p>

      <p>We look forward to continue working together in the coming year with renewed enthusiasm. We hope that you find the performance report and resource material useful. Thank you for your participation in the GSP Audit and being active environmental change makers!</p>

       <p>Please find below a snapshot of the books released by CSE</p>

       
       <center><img src="assets/img/what.jpg" width="500px"></center>


</div>

</div>
</body>
</html>
