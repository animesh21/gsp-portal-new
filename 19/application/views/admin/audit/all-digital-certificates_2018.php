<div class="top-area">
  <h2>Digital Certificate School Records </h2>
</div>
<table id="example3" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
  <thead>
    <tr role="row">
      <th>S.No</th>
      <th>School Id</th>
      <th>Certificate Person Name</th>
      <th>Certificate School Name</th>
      <th>Certificate Serial No.</th>
    </tr>
  </thead>
</table>
<script type="text/javascript">
				$(document).ready(function() {
                $('#example3').dataTable({
                 "bProcessing": true,
                 "sAjaxSource": "<?php echo base_url("/admin/audit_started/getDigitalCertificateRecordJson_2018");?>",
                 "aoColumns": [
				        { mData: 'sr_no'},
				        { mData: 'school_id' },
					    { mData: 'certificate_username' },
                        { mData: 'certificate_schoolname' },
						{ mData: 'certificate_srno' },
                ],
            dom: 'lBfrtip',
            buttons: [
                'excel'
            ],
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
            "iDisplayLength": 25
        });   
});
</script>
<link type="text/css" rel="stylesheet" type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
