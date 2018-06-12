<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<style type="text/css">
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #292b2c;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
}
.dropdown-item {
    display: block;
    width: 100%;
    padding: 3px 1.5rem;
    clear: both;
    font-weight: 400;
    color: #292b2c;
    text-align: inherit;
    white-space: nowrap;
    background: 0 0;
    border: 0;
}
</style>
<!----- Badge Model Code  ------>
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header" style="background:#e86549 !important; color:#FFFFFF;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Badge Code</h4>
      </div>
      <div class="modal-body">
        <textarea class="badge_code form-control"></textarea>
      </div>
    </div>
  </div>
</div>
<div class="top-area">
  <h2>Partner REGISTRATION 2017 <a href="">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>
<div id="exTab2" class="container">
  <ul class="nav nav-tabs">
    <li class="active"> <a  href="#1" data-toggle="tab">JAWAHAR NAVODYA VIDYALAYA</a> </li>
    <li><a href="#2" data-toggle="tab">Montfort</a> </li>
  </ul>
  <div class="tab-content ">
    <div class="tab-pane active" id="1">
      <table id="example1" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
            <th>Sch.Id</th>
			<th>UDISE Code</th>
            <th>School Name</th>
            <th>State</th>
            <th>District</th>
            <th>City</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
            <th>Completeness</th>
            <th>Reg. Date</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
    <div class="tab-pane" id="2">
      <table id="example2" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
            <th>Sch.Id</th>
			<th>UDISE Code</th>
            <th>School Name</th>
            <th>State</th>
            <th>District</th>
            <th>City</th>
            <th>Co-ord. Name</th>
            <th>Co-ord. Email</th>
            <th>Co-ord. Mobile</th>
            <th>Completeness</th>
            <th>Reg. Date</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content" style="  height:150px;">
      <div class="modal-header" style="background:#e86549 !important; color:#FFFFFF;">
        <button type="button" class="close" 
                   data-dismiss="modal"> <span aria-hidden="true">&times;</span> <span class="sr-only">Close</span> </button>
        <h4 class="modal-title" id="myModalLabel"> GSP Auth </h4>
      </div>
      <?php echo form_open('admin/Login/Auth'); ?>
      <div class="modal-body">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" class="form-control" name="password" placeholder="Please enter Passcode"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="hidden" class="form-control" name="userid" id="schoolid" value=""/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="button" class="btn btn-default  pull-right" data-dismiss="modal">Close</button>
            <?php echo form_submit(array('id' => 'submit','class'=>'btn , btn-default, pull-right', 'value' => 'Submit')); ?> </div>
        </div>
      </div>
      <?php echo form_close(); ?> </div>
  </div>
</div>
<style type="text/css">
#myModal{ display:table!important; margin:auto 320px;}
#myModal1{ display:table!important; margin:auto 320px;}
.form-group .btn {
    background: #e86549;
    color: #fff;
    border: none;
    padding: 12px 21px !important;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 600;
    box-shadow: 1px 0 3px #999;
    outline: none !important;
}
</style>
<script>
/* function Myfun(argID){
   $('#schoolid').val(argID);
   $('#myModal').css('display','table!important');
}
$('#submit').click(function(){
   alert("School Has Deleted Successfully...");
   location.reload();
});
function getBadgeCode(userid)
{	
	$.ajax({
			url:'<?php echo base_url("admin/audit_started_2017/printBadge");?>',
			data:{'userid': userid},
			type:'post',
			success:function(data){
		     	$(".badge_code").empty();
				$('.badge_code').val(data);
			}
	    });
} */
</script>
<script type="text/javascript">
				/* $( document ).ready(function() {
                $('#example1').dataTable({
                 "bProcessing": true,
                 "sAjaxSource": "<?php echo base_url("/admin/audit_started_2017/getPartnerSchoolData");?>",
                 "aoColumns": [
				        { mData: 'sr_no'},
				        { mData: 'id' },
						{ mData: 'udise' },
                        { mData: 'name' },
						{ mData: 'state_name' },
						{ mData: 'district_name' },
						{ mData: 'city' },
						{ mData: 'coname' },
						{ mData: 'coemail' },
						{ mData: 'comobile' },
						{ mData: 'progress'},
						{ mData: 'date_added' },
						{ mData: 'id',
						 "orderable": false,
                        "searchable": false,
                        "render": function(data,type,row,meta) { 
						var a='<div class="btn-group"><button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button><div class="dropdown-menu"><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/response/"); ?>'+row.id+'" title="View Responses">View Record</a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/pdf/"); ?>'+row.id+'" title="Download PDF">Pdf Download</a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/edit/"); ?>'+row.id+'" title="Edit Record">Edit Record</a><a class="dropdown-item" target="" href="#" onclick="javascript:Myfun('+row.userid+')" data-toggle="modal" data-target="#myModal"   title="Delete Record">Delete</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started_2017/downloadzip/'); ?>'+row.userid+'" title="Download">Zip</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started_2017/generatebadge/'); ?>'+row.userid+'" title="Download">Badge</a><a class="dropdown-item" href="#"  onclick="javascript:getBadgeCode('+row.userid+')" data-toggle="modal" data-target="#myModal1">Badge Code</a></div></div>'; 
                            return a;
							}
						}
                ]
        }); 
		
		 $('#example2').dataTable({
                 "bProcessing": true,
                 "sAjaxSource": "<?php echo base_url("/admin/audit_started_2017/getPartnerSchoolData1");?>",
                 "aoColumns": [
				        { mData: 'sr_no'},
				        { mData: 'id' },
						{ mData: 'udise' },
                        { mData: 'name' },
						{ mData: 'state_name' },
						{ mData: 'district_name' },
						{ mData: 'city' },
						{ mData: 'coname' },
						{ mData: 'coemail' },
						{ mData: 'comobile' },
						{ mData: 'progress'},
						{ mData: 'date_added' },
						{ mData: 'id',
						 "orderable": false,
                        "searchable": false,
                        "render": function(data,type,row,meta) { 
						var a='<div class="btn-group"><button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button><div class="dropdown-menu"><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/response/"); ?>'+row.id+'" title="View Responses">View Record</a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/pdf/"); ?>'+row.id+'" title="Download PDF">Pdf Download</a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/edit/"); ?>'+row.id+'" title="Edit Record">Edit Record</a><a class="dropdown-item" target="" href="#" onclick="javascript:Myfun('+row.userid+')" data-toggle="modal" data-target="#myModal"   title="Delete Record">Delete</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started_2017/downloadzip/'); ?>'+row.userid+'" title="Download">Zip</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started_2017/generatebadge/'); ?>'+row.userid+'" title="Download">Badge</a><a class="dropdown-item" href="#"  onclick="javascript:getBadgeCode('+row.userid+')" data-toggle="modal" data-target="#myModal1">Badge Code</a></div></div>'; 
                            return a;
							}
						}
                ]
        });     
}); */
</script>
<link type="text/css" rel="stylesheet" type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    color: #fff;
    cursor: default;
    background-color:#e86549!important;
    border: 1px solid #ddd;
    border-bottom-color: transparent;
}
.tab-content{
    border: solid 1px #cad6e2;
	padding:22px 22px 22px 22px;
}
.content-form li {
     margin: 0 0 0px 0!important; 
    padding: 0;
}
.content-form ul {
     margin: 0 0 0 0em!important; 
    list-style-type: disc;
    padding: 0;
}
.content-form li {
    margin: 0 0 0px 0!important;
    padding: 0;
    cursor: default;
    background-color:#ccc!important;
    border-top: 1px solid #ddd;
	border-left: 1px solid #ddd;
	border-right:none;
    border-bottom-color: transparent;
}
.content-form li a{ 
	color: #000; }
</style> 
