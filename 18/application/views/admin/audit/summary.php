<style type="text/css">
    .panel{border-radius: 0px !important;}
    .danger{color:red !important; font-size: 12px !important; font-weight: bold !important;}
    .list-unstyled li{ list-style:none; padding:3px 3px 3px 3px;}
    .list-unstyled li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
    .list-unstyled li input[type="radio"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
    .list-inline li{ list-style:none; padding:3px 3px 3px 3px;}
    .list-inline li input[type="checkbox"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
    .list-inline li input[type="radio"]{ opacity:0.7;  padding:3px 3px 3px 3px;}
	.sorting_1{ background:#e86549!important; width:60px!important; color:#FFFFFF!important;}
</style>
<div class="top-area">
  <h2>Summary Of Audit</h2>
</div>
<div class="row">
  <div class="col-md-12">
     <h2>2019 Audit</h2> 
    <table class="display dataTable no-footer table4">
      <thead>
        <tr role="row">
          <th>Phase</th>
          <th>Total School Registrations</th>
          <th>Schools That Started The Audit</th>
          <th>School submitted the Audit in Phase 1</th>
          <th>Schools Started The Audit But Did Not Complete</th>
          <th>Schools Did Not Start The Audit</th>
          <th>Schools Completed The Audit But Not Submitted</th>
          <th>Total School Registrations 2019</th>
        </tr>
      </thead>
      <tbody>
        <tr role="row" class="odd">
          <td class="sorting_1">Phase-1</td>
          
        </tr>
 

         
       
      </tbody>
    </table><br/>



	  <h2>2018 Audit</h2> 
    <table class="display dataTable no-footer table5">
      <thead>
        <tr role="row">
          <th>Phase</th>
          <th>Total School Registrations</th>
          <th>Schools That Started The Audit</th>
          <th>School submitted the Audit in Phase 1</th>
          <th>Schools Started The Audit But Did Not Complete</th>
          <th>Schools Did Not Start The Audit</th>
          <th>Schools Completed The Audit But Not Submitted</th>
          <th>Total School Registrations 2018</th>
        </tr>
      </thead>
      <tbody>
        <tr role="row" class="odd">
          <td class="sorting_1">Phase-1</td>
          <td><?php echo $t1= 5514;?></td>         
          <td><?php echo $t2= 898;?></td>
          <td><?php echo $t3= 1689;?></td>
          <td><?php echo $t4= 848;?></td>
          <td><?php echo $t5= 2878;?></td>
          <td><?php echo $t6= 50;?></td>
          <td><?php echo $t8= 2541;?></td>  
        </tr>

        <tr role="row" class="odd">
          <td class="sorting_1">Phase-2</td>
          <td><?php echo $schoolcount_phase_2=3917;?></td>
          <td><?php echo $audit1_phase_2=898;?></td>
          <td><?php echo $submitcount_phase_2=50;?></td>
          <td><?php echo $uncompletecount_phase_2=848;?></td>
          <td><?php echo $notstartcount_phase_2=2956;?></td>
          <td><?php echo $t7 = 50;?></td>
          <td><?php echo $t9= 188;?></td>  
        </tr>

        <tr role="row" class="odd">
          <td class="sorting_1">Total</td>
          <td><?php echo $t1 + $schoolcount_phase_2;?></td>
          <td><?php echo $t2 + $audit1_phase_2;?></td>
          <td><?php echo $t3 + $submitcount_phase_2;?></td>
          <td><?php echo $t4 + $uncompletecount_phase_2;?></td>
          <td><?php echo $t5 + $notstartcount_phase_2;?></td>
          <td><?php echo $t6 + $t7;?></td>
          <td><?php echo $t8 + $t9;?></td>  
        </tr>
       
      </tbody>
    </table><br/>
	  
	  
    <h2>2017 Audit</h2> 
    <table class="display dataTable no-footer table1">
      <thead>
        <tr role="row">
          <th>Phase</th>
          <th>Total School Registrations</th>
          <th>Schools That Started The Audit</th>
          <th>School submitted the Audit in Phase 1</th>
          <th>Schools Started The Audit But Did Not Complete</th>
          <th>Schools Did Not Start The Audit</th>
          <th>2017 Registration</th>
        </tr>
      </thead>
      <tbody>
        <tr role="row" class="odd">
          <td class="sorting_1">Phase-1</td>
          <td>2863</td>
          <td>1794</td>
          <td>1194</td>
          <td>570</td>
          <td>1069</td>
          <td>1758</td>
        </tr>
        <tr role="row" class="even">
          <td class="sorting_1">Phase-2</td>
          <td>1784</td>
          <td>603</td>
          <td>71</td>
          <td>596</td>
          <td>1181</td>
          <td>187</td>
        </tr>
		<tr role="row" class="even">
          <td class="sorting_1">Total</td>
          <td id="totalSchoolRegistration"></td>
          <td id="totalStartedSchoolAudit"></td>
          <td id="totalSchoolsubmittedAudit"></td>
          <td id="totalSchoolsStartedAuditNotComplete"></td>
          <td id="totalSchoolsDidNotStartTheAudit"></td>
          <td id="totalSchool2017Registration"></td>
        </tr>
      </tbody>
    </table><br/>
	<h2>2016 Audit</h2> 
	<table class="display dataTable no-footer">
      <thead>
        <tr role="row">
		  <th>Details</th>
          <th>Total School Registrations</th>
          <th>Schools That Started The Audit</th>
          <th>School submitted the Audit in Phase 1</th>
          <th>Schools Started The Audit But Did Not Complete</th>
          <th>Schools Did Not Start The Audit</th>
          <th>2016 Registration</th>
        </tr>
      </thead>
      <tbody>
        <tr role="row" class="odd">
		 <td class="sorting_1">Audit 2016</td>
          <td>2518</td>
          <td>1306</td>
          <td>700</td>
          <td>606</td>
          <td>1212</td>
          <td>1079</td>
        </tr>
		<tr>
		  <td class="sorting_1">Total</td>
          <td>2518</td>
          <td>1306</td>
          <td>700</td>
          <td>606</td>
          <td>1212</td>
          <td>1079</td>
        </tr>
      </tbody>
    </table>
	<br/>
	<h2>2015 Audit</h2> 
	<table class="display dataTable no-footer">
      <thead>
        <tr role="row">
		<th>Details</th>
          <th>Total School Registrations</th>
          <th>Schools That Started The Audit</th>
          <th>School submitted the Audit in Phase 1</th>
          <th>Schools Started The Audit But Did Not Complete</th>
          <th>Schools Did Not Start The Audit</th>
          <th>2015 Registration</th>
        </tr>
      </thead>
      <tbody>
        <tr role="row" class="odd">
		 <td class="sorting_1">Audit 2016</td>
          <td>1439</td>
          <td>867</td>
          <td>534</td>
          <td>333</td>
          <td>572</td>
          <td>1439</td>
        </tr>
		<tr>
		<td class="sorting_1">Total</td>
           <td>1439</td>
          <td>867</td>
          <td>534</td>
          <td>333</td>
          <td>572</td>
          <td>1439</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<script type="text/javascript">
 $(document).ready(function(){
   $("#totalSchoolRegistration").append(parseInt($(".table1 tr:nth-child(1) td:nth-child(2)").text())+parseInt($(".table1 tr:nth-child(2) td:nth-child(2)").text()));
    $("#totalStartedSchoolAudit").append(parseInt($(".table1 tr:nth-child(1) td:nth-child(3)").text())+parseInt($(".table1 tr:nth-child(2) td:nth-child(3)").text()));
	$("#totalSchoolsubmittedAudit").append(parseInt($(".table1 tr:nth-child(1) td:nth-child(4)").text())+parseInt($(".table1 tr:nth-child(2) td:nth-child(4)").text()));
	$("#totalSchoolsStartedAuditNotComplete").append(parseInt($(".table1 tr:nth-child(1) td:nth-child(5)").text())+parseInt($(".table1 tr:nth-child(2) td:nth-child(5)").text()));
	$("#totalSchoolsDidNotStartTheAudit").append(parseInt($(".table1 tr:nth-child(1) td:nth-child(6)").text())+parseInt($(".table1 tr:nth-child(2) td:nth-child(6)").text()));
	$("#totalSchool2017Registration").append(parseInt($(".table1 tr:nth-child(1) td:nth-child(7)").text())+parseInt($(".table1 tr:nth-child(2) td:nth-child(7)").text()));
 });
 
</script>
