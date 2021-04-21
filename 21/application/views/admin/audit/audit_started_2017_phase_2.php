
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
  <h2>REGISTRATION 2018 <a href="<?php echo base_url('admin/audit_started/excel_phase2') ?>">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>
<table id="example1" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
  <thead>
    <tr role="row">
      <th>S.No</th>
      <th>Sch.Id</th>
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
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <button type="button" class="close" 
                   data-dismiss="modal"> <span aria-hidden="true">&times;</span> <span class="sr-only">Close</span> </button>
        <h4 class="modal-title" id="myModalLabel"> GSP Auth </h4>
      </div>
      <!-- Modal Body -->
      <div class="modal-body"> 
	    <?php echo form_open('admin/Login/Auth'); ?>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" placeholder="Please enter Passcode"/>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-10">
            <input type="hidden" class="form-control" name="userid" id="schoolid" value=""/>
          </div>
        </div>
        <div class="form-group">
          <div class=" col-sm-10"> <?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?> </div>
        </div>
        <?php echo form_close(); ?> 
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!----- Badge Model Code  ------>
<div class="modal fade" id="myModal1" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header" style="background:#e86549 !important; color:#FFFFFF;">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Badge Code</h4>
      </div>
      <div class="modal-body">
        <textarea class="badge_code form-control">
		
		</textarea>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
#myModal{ display:table!important; margin:auto 320px;}
#myModal1{ display:table!important; margin:auto 320px;}
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
			url:'<?php echo base_url("admin/audit_started/printBadge");?>',
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
                $('#example1').dataTable({
                 "bProcessing": true,
                 "sAjaxSource": "<?php echo base_url("/admin/audit_started/getSchoolData");?>",
                 "aoColumns": [
				        { mData: 'sr_no'},
				        { mData: 'id' },
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
						  var a='<div class="btn-group"><button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button><div class="dropdown-menu"><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started/response/"); ?>'+row.id+'" title="View Responses"> <img src="<?php echo base_url() ?>assets/front/images/1446146277_view6.png"><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started/pdf/"); ?>'+row.id+'" title="Download PDF"><img src="<?php echo base_url() ?>assets/front/images/1446327681_1-02.png" height="20" width="20"></a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started/edit/"); ?>'+row.id+'" title="Edit Record"><img src="<?php echo base_url() ?>assets/front/images/edit.png" height="20" width="20"></a><a class="dropdown-item" target="_self" onclick="Myfun('+row.id+')" title="Delete Record"><img src="<?php echo base_url() ?>assets/front/images/delete1.png" data-toggle="modal" data-target="#myModal" height="20" width="20"></a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started/downloadzip/'); ?>'+row.id+'" title="Download">Zip</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started/generatebadge/'); ?>'+row.id+'" title="Download">Badge</a><a class="dropdown-item" href="#"  onclick="javascript:getBadgeCode('+row.id+')" data-toggle="modal" data-target="#myModal1">Badge Code</a></div></div>';  */
						   var a='<div class="btn-group"><button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button><div class="dropdown-menu"><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started/response/"); ?>'+row.id+'" title="View Responses">View Record</a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started/pdf/"); ?>'+row.id+'" title="Download PDF">Pdf Download</a><a class="dropdown-item" target="_blank" href="<?php echo base_url("admin/audit_started/edit/"); ?>'+row.id+'" title="Edit Record">Edit Record</a><a class="dropdown-item" target="" href="#" onclick="javascript:Myfun('+row.userid+')" data-toggle="modal" data-target="#myModal"   title="Delete Record">Delete</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started/downloadzip/'); ?>'+row.id+'" title="Download">Zip</a><a class="dropdown-item" target="_blank" href="<?php echo base_url('admin/audit_started/generatebadge/'); ?>'+row.userid+'" title="Download">Badge</a><a class="dropdown-item" href="#"  onclick="javascript:getBadgeCode('+row.userid+')" data-toggle="modal" data-target="#myModal1">Badge Code</a></div></div>'; 
                            return a;
							}
						}
                ]
        });   
});
</script>
<link type="text/css" rel="stylesheet" type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
