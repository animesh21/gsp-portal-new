<?php $this->load->view('admin/includes/header');?>
<body>
	<main class="bdr" style="border: none;">
  <div class="container">
    <div class="wrapper">
      <div class="top-area">
        <h2>REGISTRATIONS</h2>
        <a href="http://studiotesseract.co/dashboard/2016/export_excel.php"><button class="exportBtn">Export to Excel</button></a>
      </div>
      <div id="example_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="75">75</option><option value="-1">All</option></select> entries</label></div><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example"></label></div><table id="example" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
        <thead>
          <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No: activate to sort column descending">S.No</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Sch.Id: activate to sort column ascending" style="width: 38px;">Sch.Id</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="School Name: activate to sort column ascending" style="width: 202px;">School Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="State: activate to sort column ascending" style="width: 134px;">State</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="City: activate to sort column ascending" style="width: 160px;">City</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Co-ord. Name: activate to sort column ascending" style="width: 203px;">Co-ord. Name</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Co-ord. Email: activate to sort column ascending" style="width: 203px;">Co-ord. Email</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Co-ord. Mobile: activate to sort column ascending" style="width: 96px;">Co-ord. Mobile</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Completeness: activate to sort column ascending" style="width: 88px;">Completeness</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Reg. Date: activate to sort column ascending" style="width: 65px;">Reg. Date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 57px;">Action</th></tr>
        </thead>
        <tbody>
        <?php
        	foreach ($data as $d) : ?>
        		<tr role="row" class="odd">
		            <td class="sorting_1">1</td>
		            <td><?php echo $d['id']; ?></td>
		            <td><?php echo $d['name']; ?></td>
		            <!--     <td></td>-->
		            <td><?php echo $d['city']; ?></td>
		            <td><?php echo $d['state']; ?></td>
		            <td><?php echo $d['coname'];?></td>
		            <td><?php echo $d['coemail']; ?></td>
		            <td><?php echo $d['comobile']; ?></td>
		            <td><?php echo "Not set" ?></td>
		            
		            <!-- <td></td>-->
		            <td>
		              0              % </td>
		            <td>18-11-2016</td>
		            <td class="action"><a target="_blank"<?php $id = $d['userid'];?> href="<?php echo base_url("admin/Registrations/setUser/$id")?>" title="View Responses">
		            	<img src="<?php echo base_url(); ?>assets/img/1446146277_view6.png"></a>
		            	<a href="http://studiotesseract.co/dashboard/2016/create_response_pdf.php?id=fpszn" title="Download PDF">
		            		<img src="<?php echo base_url(); ?>assets/img/1446327681_1-02.png" height="20" width="20"></a>
		            	</td>
		            <!--     <td></td>--> 
          		</tr>
         <?php endforeach ?>
         </tbody>
         </table>
         </div>
         </div>
         </div>
         </main>

</body>
<?php $this->load->view('admin/includes/footer');?>
