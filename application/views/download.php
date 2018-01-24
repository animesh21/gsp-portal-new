<!DOCTYPE html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths">
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
<!--[if lte IE 8]>
        <link rel="stylesheet" href="/audit2016/upload/templates/tfr_responsive/css/template_ie8.css"/>
        <![endif]-->
<link rel="shortcut icon" href="http://studiotesseract.co/audit2016/upload/templates/tfr_responsive/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
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
                                 id="image"></div>
      </header>
    </div>
    <div class="container">
      <div class="col-md-12">
        <table id="example1" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
          <thead>
            <tr role="row">
              <th>S.No</th>
              <th>Sch.Id</th>
              <th>School Name</th>
              <th>State</th>
              <th>District</th>
              <th>City</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <p>Copyright © 2017 Centre for Science and Environment. For help, email <a href="mailto:ranjita@cseindia.org">support@greenschoolsprogramme.org</a> or call 011-4061600, ext – 219, 300. </p>
    <p></p>
  </div>
  <style type="text/css">
    .main > .container {
    background: #fff;
    padding: 75px 20px 45px;
    box-shadow: 0 0 6px #ccc;
    box-sizing: border-box;
   }
   .list-inline {
    padding-left: 0;
    margin-left: -5px;
    list-style: none;
    width: 154px;
   }
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
<script type="text/javascript">
				$( document ).ready(function() {
                $('#example1').dataTable({
                 "bProcessing": true,
                 "sAjaxSource": "<?php echo base_url("/download/getSchoolDataAfterlogin/".$this->session->userdata('USER_ID'));?>",
                 "aoColumns": [
				        { mData: 'sr_no'},
				        { mData: 'id' },
                        { mData: 'name' },
						{ mData: 'state_name' },
						{ mData: 'district_name' },
						{ mData: 'city' },
						{ mData: 'id',
						 "orderable": false,
                        "searchable": false,
                        "render": function(data,type,row,meta) { 
						   var a='<ul class="list-inline"><li><a class="btn btn-danger" target="_blank" href="" title="View Responses"><i class="fa fa-file-text"></i></a></li><li><a class="btn btn-danger" target="_blank" href="<?php echo base_url("/audit2017/admin/responsreport/pdf/").$this->session->userdata('USER_ID'); ?>" title="View Responses"><i class="fa fa-file-text"></i></a></li><li><a class="btn btn-danger" target="_blank" href="<?php echo base_url('admin/audit_started_2017/getdigitalCertificate/').$this->session->userdata('USER_ID') ?>" title="View Responses"><i class="fa fa-file-text"></i></a></li></ul>'; 
                            return a;
							}
						}
                ]
        });   
});
</script>
