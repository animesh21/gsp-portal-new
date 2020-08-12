<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link type="text/css" rel="stylesheet" type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="top-area">
  <h2>Schools Completed & Submitted The Audit<a href="<?php echo base_url('admin/audit_started/excelByProgress4_phase1') ?>">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>
<table id="example1" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
  <thead>
    <tr role="row">
      <th>S.No</th>
      <th>Sch.Id</th>
      <th>UDISE Code</th>
      <th>School Name</th>
      <th>pincode</th>
      <th>City</th>
      <th>State</th>
      <th>District</th>
      <th>Co-ord. Name</th>
      <th>Co-ord. Email</th>
      <th>Co-ord. Mobile</th>
      <th>Progress</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  </tbody>
</table>

<script type="text/javascript">
				/* $( document ).ready(function() {
                $('#example1').dataTable({
                 "bProcessing": true,
                 "sAjaxSource": "<?php echo base_url("/admin/dashboard/school_that_submit_audit_emailsend_phase_email");?>",
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
						   var a='<div class="btn-group"><button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-chevron-down"></i></button><div class="dropdown-menu"><a href="#" class="dropdown-item" onclick="sendResponseReport('+row.id+','+"'"+row.coemail+"'"+','+"'"+row.name+"'"+');">Send mail</a></div></div>'; 
                            return a;
							}
						}
                ]
        });   
}); */
</script>
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
<script type="text/javascript">
/* function sendResponseReport(schoolid,coemail,name){
 var subject="Response Report 2017 " + name;
 var message="Response Report 2017 " + name;
 var bodytext="Dear GSP Audit team,<br/><br/>"+
"Greetings from the Green Schools Programme!<br/><br/>"+
"We are pleased to inform you that this year too we had a positive response for GSP Audit 2017 from across India."+ " We had 2860 registrations from the 29 states and five Union Territories of India. Of the total national"+ " footprint, 1185 schools submitted the GSP Audit on time. 559 schools had started filing the GSP Audit"+ " report but couldn't submit within the deadline. Both registrations and submissions have seen a year-on-year increase of 12 per cent and 40 per cent, respectively.<br/><br/>"+
"Please <a href='<?php echo "http://www.greenschoolsprogramme.org/audit2017/admin/responsreport/pdf/"?>"+schoolid+"'> Download here </a> your response report of the GSP Audit 2017 for your records. Please save the attached as we"+ " do not keep a copy with us and we recommend that the pdf be saved with a few other teachers of the GSP Audit team. <br/><br/>We will announce the GSP Audit 2017 results on February 7, 2018, also the day we have the award ceremony held. The results will be up on the GSP website on http://www.greenschoolsprogramme.org/.<br/><br/>"+
"Stay tuned!"+
"<br/><br/><br/>"+
"GSP Team"+
" 011-40616000 Extn-300, 320 <br/><br/><a href='<?php echo "http://www.greenschoolsprogramme.org/audit2017/admin/responsreport/pdf/"?>"+schoolid+"'>Download</a>";
jQuery.ajax({
	  url:"https://api.elasticemail.com/v2/email/send",
	  type:"POST",
	  content_type: "application/pdf",
	  data:{"api_key":"a62876ee-8ef8-4c83-a35c-c6eaa0f29765","from":"support@greenschoolsprogramme.org","to":coemail+","+"greenschoolprogramgsp@gmail.com","subject":subject,"bodyHtml":bodytext},
	  success:function(reponse){
	    alert("Response Report 2017 Email has been send successful");
	  }
	}); 
} */
</script>
