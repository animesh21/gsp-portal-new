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
  
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 30px;
  margin-bottom: 50px;
}
  
   

td, th {
  border: 1px solid #e86549;
  text-align: left;
  padding: 6px;
}

tr:nth-child(even) {
  background-color: #fff;
}
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
<?php 
 $schoolId=getSchoolId($this->session->userdata('USER_ID')); 
 $dataYoy=download_YOY($schoolId);
 $dataYoy1=get_state($schoolId);
 
  $state=  $dataYoy1[0]->state;

  $district= $dataYoy1[0]->district;

  $dataYoy2=get_stateById($state);
  
  $dataYoy3 = get_districtById($district);
$allyoydata = getYOYComparisonAllData($schoolId);
  $schoolName = getSchoolDaTaByScHooLId($schoolId);
  


 ?>



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
      <?php  if($dataYoy[0]['year']=='Year of 2019' && $dataYoy[0]['percentage']>=70) { ?>
      <li class=""><a href="<?php echo base_url('download/badgecodeview'); ?>">GSP Logo</a></li>
      <?php } ?>
            <li class=""> <a href="<?php echo base_url('Downloadlogout'); ?>" class="pull-right">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  


    <div class="container">
      <div class="col-md-12" >

      <!-- <a href="<?php echo base_url('WasteTransformers') ;?>" target="blank"><button class="btn btn-primary" style="float: right; background-color: #e86549; border-color: #e86549; margin-right: 6%; height: 50px; width: 25%; margin-top: 8px; color: black; font-size: 21px;
"><b>Waste Transformers</b></button></a>  -->
        <h3><strong><?php echo $schoolName[0]->name.', &nbsp';?> <?php echo ' &nbsp'. $dataYoy3[0]->name.',';  echo ' &nbsp &nbsp' .$dataYoy2[0]->name;?> </strong> </h3> 
        

      <hr/>

</div>

         <div class="col-md-12">
        <?php for($i=0; $i<sizeof($dataYoy); $i++) {?>
        <div class="col-md-3" style="width:19%"><div class="well text-center" style="background:<?php echo $dataYoy[$i]['color']; ?>; color: #000; font-weight: 900; width:210px; height: 60px; padding:8px; border: 1px solid #ccc;"><?php echo substr($dataYoy[$i]['year'].'-', 8); ?><?php echo $dataYoy[$i]['range']; ?>
           

        </div></div>
      <?php } ?>
      
      <div class="col-md-12">
        
  <table>
  <tr style="background-color: #e86549; color: #000">
    <th>Name of the School/Institution:</th>
    <th>Address Line 1</th>
    <th>Address Line 2</th>
    <th>STD Code</th>
    <th>City</th>
    <th>District</th>
    <th>Landline No.</th>
    <th>State</th>
    <th>Pin code</th>
    <th>Principal's Name</th>
    <th>Principal Mobile</th>        
  </tr>
  
  <tr>
    <td><?php echo $schoolName[0]->name;?></td>
    <td><?php echo $schoolName[0]->address1;?></td>
    <td><?php echo $schoolName[0]->address2;?></td>
    <td><?php echo $schoolName[0]->std;?></td>
    <td><?php echo $schoolName[0]->city;?></td>
    <td><?php echo $schoolName[0]->district;?></td>
    <td><?php echo $schoolName[0]->telephone;?></td>
    <td><?php echo $schoolName[0]->state;?></td>
    <td><?php echo $schoolName[0]->pincode;?></td>
    <td><?php echo $schoolName[0]->principle_name;?></td>
    <td><?php echo $schoolName[0]->	mobile;?></td>    
    
  </tr>
  
</table>
 
<table>
  
  <tr style="background-color: #e86549; color: #000">
    
    <th>GSP Coordinator Name</th>
    <th>GSP Coordinator Email</th>
    <th>GSP Coordinator Mobile</th>
    <th>School Category</th>
    <th>No. of Shifts</th>
    <th>Lowest Level</th>
    <th>Highest Level</th>
    <th>School type - Gender</th>
    <th>Board of Education</th>
    <th>Total Population</th>    
  </tr>
  <tr>
    <td><?php echo $schoolName[0]->coname;?></td>
    <td><?php echo $schoolName[0]->coemail;?></td>
    <td><?php echo $schoolName[0]->comobile;?></td>
    <td><?php echo $allyoydata[0]->school_category;?></td>
    <td><?php echo $allyoydata[0]->no_of_shifts;?></td>
    <td><?php echo $allyoydata[0]->lowest_level;?></td>
    <td><?php echo $allyoydata[0]->highest_level;?></td>
    <td><?php echo $allyoydata[0]->school_type___gender;?></td>
    <td><?php echo $allyoydata[0]->board_of_education;?></td>
    <td><?php echo $allyoydata[0]->total_population;?></td>
    
  </tr>
  
</table>


      </div>
      
      </div>

      <div class="col-md-12">
        <div id="grapSchoolStatus"> </div>
      </div>
      <?php 
        $userId = $this->session->userdata('USER_ID');
         $rank   = getFiled('Q1G2',$userId); ?>
      <div class="col-md-12" <?php if($rank<=5){ echo "style='display:none;'"; }else{ echo "style='display:inline-block;'"; } ?>>
      <div class="col-md-6">
        <div class="schools-statics" style="width:100%;"> <a href="<?php echo base_url("/download/downloadAirSection/"); ?>" target="_blank">
          <div class="statics-circle"> <span style="position: relative; width: 87px; top: -20px; left: -19px;"><img src="<?php echo base_url(''); ?>assets/img/images/air.png"  alt="" class="top-bnr img-responsive"
                                 id="image"></span> </div>
          </a>
          <div class="title"><strong>Air</strong></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="schools-statics" style="width:100%;"> <a href="<?php echo base_url("/download/downloadEnergySection/"); ?>" target="_blank">
          <div class="statics-circle"> <span style="position: relative; width: 87px; top: -20px; left: -19px;"><img src="<?php echo base_url(''); ?>assets/img/images/energy.png"  alt="" class="top-bnr img-responsive"
                                 id="image"></span> </div>
          </a>
          <div class="title"><strong>Energy</strong></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="schools-statics" style="width:100%;"> <a href="<?php echo base_url("/download/downloadFoodSection/"); ?>" target="_blank">
          <div class="statics-circle"> <span style="position: relative; width: 87px; top: -20px; left: -19px;"><img src="<?php echo base_url(''); ?>assets/img/images/food.png"  alt="" class="top-bnr img-responsive"
                                 id="image"></span> </div>
          </a>
          <div class="title"><strong>Food</strong></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="schools-statics" style="width:100%;"> <a href="<?php echo base_url("/download/downloadLandSection/"); ?>" target="_blank">
          <div class="statics-circle"> <span style="position: relative; width: 87px; top: -20px; left: -19px;"><img src="<?php echo base_url(''); ?>assets/img/images/land.png"  alt="" class="top-bnr img-responsive"
                                 id="image"></span> </div>
          </a>
          <div class="title"><strong>Land</strong></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="schools-statics" style="width:100%;"> <a href="<?php echo base_url("/download/downloadWaterSection/"); ?>" target="_blank">
          <div class="statics-circle"> <span style="position: relative; width: 87px; top: -20px; left: -19px;"><img src="<?php echo base_url(''); ?>assets/img/images/water.png"  alt="" class="top-bnr img-responsive"
                                 id="image"></span> </div>
          </a>
          <div class="title"><strong>Water</strong></div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="schools-statics" style="width:100%;"> <a href="<?php echo base_url("/download/downloadWasteSection/"); ?>" target="_blank">
          <div class="statics-circle"> <span style="position: relative; width: 87px; top: -20px; left: -19px;"><img src="<?php echo base_url(''); ?>assets/img/images/waste.png"  alt="" class="top-bnr img-responsive"
                                 id="image"></span> </div>
          </a>
          <div class="title"><strong>Waste</strong></div>
        </div>
      </div>
      </div>
  </div>
</div>
<footer>
  <div class="container">
    <p>Copyright © 2020 Centre for Science and Environment. For help, email <a href="mailto:ranjita@cseindia.org">support@greenschoolsprogramme.org</a> or call 011-4061600, ext – 219, 300. </p>
    <p></p>
  </div>
</footer>
</body>
</html>
<style type="text/css">
.navbar-default {margin-bottom: 0;border-radius: 0;background: #505050!important; border: 0; padding: 0; z-index:0;}
.main > .container {background: #fff;padding: 0px 0px 45px!important;box-shadow: 0 0 6px #ccc;box-sizing: border-box;z-index:1;}
.table tr:nth-child(1) td{background:#e86549!important; color:#FFFFFF;}
.table tr:nth-child(1){background:#e86549!important; color:#FFFFFF;}
.table tr td:nth-child(1){background:#505050; color:#FFFFFF;}
.navbar-default li a { color:#FFFFFF!important;}
ul.nav li:hover > ul.dropdown-menu { display: block; z-index:10000;}
.hdr-hdr {border-bottom: solid 14px #e86549;z-index: 1;}
</style>
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
 
