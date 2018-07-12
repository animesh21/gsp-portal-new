<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<!----- Badge Model Code  ------>
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header" style="background:#e86549 !important; color:#FFFFFF;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Badge Code</h4>
      </div>
      <div class="modal-body">
        <textarea class="badge_code form-control" style="height:300px;"></textarea>
      </div>
    </div>
  </div>
</div>
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
<div class="top-area">
  <h2>REGISTRATION 2018 <a href="<?php echo base_url('admin/audit_started_2017/excel_phase1') ?>">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>
<table id="example3" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
  <thead>
    <tr role="row">
      <th>S.No</th>
      <th>Sch.Id</th>
      <th>Udise</th>
      <th>School Name</th>
      <th style="width:150px">State</th>
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
<style type="text/css">
#myModal{ display:table!important; margin:auto 320px;}
#myModal1{ display:table!important; margin:auto 320px;}
.navbar-nav li{ z-index:100000; display:block;}	
.navbar-nav li a{ z-index:100000; display:block;}		
.dropdown-menu{ z-index:1000000;}		
</style>
<script>
function Myfun(argID){
   $('#schoolid').val(argID);
   $('#myModal').css('display','');
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
}
</script>
<script type="text/javascript">
				$( document ).ready(function() {
                $('#example3').dataTable({
                 "bProcessing": true,
                 "sAjaxSource": "<?php echo base_url("/admin/audit_started_2017/getSchoolData");?>",
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
                        "render": function(data,type,row,meta) { // render event defines the markup of the cell text 
                          /*  var a = '<a href="listing-house-details.php?listing_house='+row.list_id+'&invoice_id='+row.invoice_id+'&email="'+row.user_email+'">' + '<label class="label label-info">CPA</label>' +'</a>';*/ 
						  
						  // row object contains the row data
						/*  
						  var a='<div class="btn-group"><button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button><div class="dropdown-menu"><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/response/"); ?>'+row.id+'" title="View Responses"> <img src="<?php echo base_url() ?>assets/front/images/1446146277_view6.png"><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/pdf/"); ?>'+row.id+'" title="Download PDF"><img src="<?php echo base_url() ?>assets/front/images/1446327681_1-02.png" height="20" width="20"></a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/edit/"); ?>'+row.id+'" title="Edit Record"><img src="<?php echo base_url() ?>assets/front/images/edit.png" height="20" width="20"></a><a class="dropdown-item" target="_self" onclick="Myfun('+row.id+')" title="Delete Record"><img src="<?php echo base_url() ?>assets/front/images/delete1.png" data-toggle="modal" data-target="#myModal" height="20" width="20"></a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started_2017/downloadzip/'); ?>'+row.id+'" title="Download">Zip</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started_2017/generatebadge/'); ?>'+row.id+'" title="Download">Badge</a><a class="dropdown-item" href="#"  onclick="javascript:getBadgeCode('+row.id+')" data-toggle="modal" data-target="#myModal1">Badge Code</a><a class="dropdown-item" href="<?php echo base_url('admin/audit_started_2017/sendElasticEmail/'); ?>">Send mail</a></div></div>';  */
						   var a='<div class="btn-group"><button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button><div class="dropdown-menu"><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/response/"); ?>'+row.id+'" title="View Responses">View Record</a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/pdf/"); ?>'+row.id+'" title="Download PDF">Pdf Download</a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/performance_report/PdfById/"); ?>'+row.id+'" title="Performance Report">Performance Report</a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started_2017/edit/"); ?>'+row.id+'" title="Edit Record">Edit Record</a><a class="dropdown-item" target="blank_" onclick="javascript:Myfun('+row.userid+')" href="<?php echo base_url('admin/audit_started/getSchoolDelete/')."?schoolid="; ?>'+row.userid+'" title="Delete Record">Delete</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started_2017/downloadzip/'); ?>'+row.userid+'" title="Download">Zip</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started_2017/getdigitalCertificate/'); ?>'+row.userid+'" title="Certificates">Certifcates</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started_2017/generatebadge/'); ?>'+row.userid+'" title="Download">Badge</a><a class="dropdown-item" href="#"  onclick="javascript:getBadgeCode('+row.userid+')" data-toggle="modal" data-target="#myModal1">Badge Code</a><a href="#" class="dropdown-item" onclick="sendResponseReport('+row.id+','+"'"+row.coemail+"'"+','+"'"+row.name+"'"+');">Send mail</a></div></div>'; 
                            return a;
							}
						}
                ]
        });   
});
</script>
<link type="text/css" rel="stylesheet" type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
function sendResponseReport(schoolid,coemail,name){
 var subject="Response Report 2017";
 var message="Response Report 2017";
 var bodytext="Dear GSP Audit team,<br/><br/>"+
"Greetings from the Green Schools Programme!<br/><br/>"+
"We are pleased to inform you that this year too we had a positive response for GSP Audit 2017 from across India."+ " We had 2860 registrations from the 29 states and five Union Territories of India. Of the total national"+ " footprint, 1185 schools submitted the GSP Audit on time. 559 schools had started filing the GSP Audit"+ " report but couldn't submit within the deadline. Both registrations and submissions have seen a year-on-year increase of 12 per cent and 40 per cent, respectively.<br/><br/>"+
"Please <a href='<?php echo "http://www.greenschoolsprogramme.org/audit2017/responsreport/pdf/"?>"+schoolid+"'> Download here </a> your response report of the GSP Audit 2017 for your records. Please save the attached as we"+ " do not keep a copy with us and we recommend that the pdf be saved with a few other teachers of the GSP Audit team. <br/><br/>We will announce the GSP Audit 2017 results on February 7, 2018, also the day we have the award ceremony held. The results will be up on the GSP website on http://www.greenschoolsprogramme.org/.<br/><br/>"+
"Stay tuned!"+
"<br/><br/><br/>"+
"GSP Team"+
" 011-40616000 Extn-300, 320 <br/><br/><a href='<?php echo "http://www.greenschoolsprogramme.org/audit2017/responsreport/pdf/"?>"+schoolid+"'>Download</a>";
jQuery.ajax({
	  url:"https://api.elasticemail.com/v2/email/send",
	  type:"POST",
	  content_type: "application/pdf",
	  data:{"api_key":"a62876ee-8ef8-4c83-a35c-c6eaa0f29765","from":"support@greenschoolsprogramme.org","to":coemail,"subject":subject,"bodyHtml":bodytext},
	  success:function(reponse){
	    alert("Response Report 2017 Email has been send successful");
	  }
	}); 
}
</script>
