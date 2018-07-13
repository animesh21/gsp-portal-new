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
.nav li{ font-size:12px!important;}
</style>
<div class="top-area">
  <h2>Partner REGISTRATION 2017 <a href="<?php echo base_url('admin/audit_started_2017/excel') ?>">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>
<div id="exTab2" class="container">
  <ul class="nav nav-tabs">
    <li class="active"> <a  href="#1" data-toggle="tab">Church of South India</a> </li>
    <li><a href="#2" data-toggle="tab">Jawahar Navodaya Vidyalaya</a> </li>
    <li><a href="#3" data-toggle="tab">Kendriya Vidyalaya Sangathan (KVS)</a> </li>
    <li><a href="#4" data-toggle="tab">Montfortian Education Foundation</a> </li>
    <li><a href="#5" data-toggle="tab">Mount Litera Zee Schools</a> </li>
    <li><a href="#6" data-toggle="tab">Satya Bharti Foundation</a> </li>
  </ul>
  <div class="tab-content">
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
          </tr>
        </thead>
        <?php $i=1; foreach($list_school1 as $r){ ?>
        <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->udise; ?></td>
          <td><?php echo $r->name; ?></td>
          <td><?php echo $r->state_name; ?></td>
          <td><?php echo $r->city; ?></td>
          <td><?php echo $r->district_name; ?></td>
          <td><?php echo $r->coname; ?></td>
          <td><?php echo $r->coemail; ?></td>
          <td><?php echo $r->comobile; ?></td>
          <td><?php echo $r->progress; ?></td>
          <td><?php echo $r->date_added; ?></td>
        </tr>
        <?php $i++; } ?>
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
          </tr>
        <tbody>
          </thead>
          
          <?php $i=1; foreach($list_school2 as $r){ ?>
          <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
            <td><?php echo $i; ?></td>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->udise; ?></td>
            <td><?php echo $r->name; ?></td>
            <td><?php echo $r->state_name; ?></td>
            <td><?php echo $r->city; ?></td>
            <td><?php echo $r->district_name; ?></td>
            <td><?php echo $r->coname; ?></td>
            <td><?php echo $r->coemail; ?></td>
            <td><?php echo $r->comobile; ?></td>
            <td><?php echo $r->progress; ?></td>
            <td><?php echo $r->date_added; ?></td>
          </tr>
          <?php $i++; } ?>
      </table>
    </div>
    <div class="tab-pane" id="3">
      <table id="example3" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
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
          </tr>
        </thead>
        <?php $i=1; foreach($list_school3 as $r){ ?>
        <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->udise; ?></td>
          <td><?php echo $r->name; ?></td>
          <td><?php echo $r->state_name; ?></td>
          <td><?php echo $r->city; ?></td>
          <td><?php echo $r->district_name; ?></td>
          <td><?php echo $r->coname; ?></td>
          <td><?php echo $r->coemail; ?></td>
          <td><?php echo $r->comobile; ?></td>
          <td><?php echo $r->progress; ?></td>
          <td><?php echo $r->date_added; ?></td>
        </tr>
        <?php $i++; } ?>
      </table>
    </div>
    <div class="tab-pane" id="4">
      <table id="example4" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
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
          </tr>
        </thead>
        <?php $i=1; foreach($list_school4 as $r){ ?>
        <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->udise; ?></td>
          <td><?php echo $r->name; ?></td>
          <td><?php echo $r->state_name; ?></td>
          <td><?php echo $r->city; ?></td>
          <td><?php echo $r->district_name; ?></td>
          <td><?php echo $r->coname; ?></td>
          <td><?php echo $r->coemail; ?></td>
          <td><?php echo $r->comobile; ?></td>
          <td><?php echo $r->progress; ?></td>
          <td><?php echo $r->date_added; ?></td>
        </tr>
        <?php $i++; } ?>
      </table>
    </div>
    <div class="tab-pane" id="5">
      <table id="example5" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
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
          </tr>
        </thead>
        <?php $i=1; foreach($list_school5 as $r){ ?>
        <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->udise; ?></td>
          <td><?php echo $r->name; ?></td>
          <td><?php echo $r->state_name; ?></td>
          <td><?php echo $r->city; ?></td>
          <td><?php echo $r->district_name; ?></td>
          <td><?php echo $r->coname; ?></td>
          <td><?php echo $r->coemail; ?></td>
          <td><?php echo $r->comobile; ?></td>
          <td><?php echo $r->progress; ?></td>
          <td><?php echo $r->date_added; ?></td>
        </tr>
        <?php $i++; } ?>
      </table>
    </div>
    <div class="tab-pane" id="6">
      <table id="example6" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
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
          </tr>
        </thead>
        <?php $i=1; foreach($list_school6 as $r){ ?>
        <tr role="row" class="<?php echo ($i%2==0) ? "even" : "odd"; ?>">
          <td><?php echo $i; ?></td>
          <td><?php echo $r->id; ?></td>
          <td><?php echo $r->udise; ?></td>
          <td><?php echo $r->name; ?></td>
          <td><?php echo $r->state_name; ?></td>
          <td><?php echo $r->city; ?></td>
          <td><?php echo $r->district_name; ?></td>
          <td><?php echo $r->coname; ?></td>
          <td><?php echo $r->coemail; ?></td>
          <td><?php echo $r->comobile; ?></td>
          <td><?php echo $r->progress; ?></td>
          <td><?php echo $r->date_added; ?></td>
        </tr>
        <?php $i++; } ?>
      </table>
    </div>
  </div>
</div>
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
<script type="text/javascript">
$(document).ready(function () {
        $('#example2,#example3,#example4,#example5,#example6').DataTable({
            dom: 'lfrtip',
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
            "iDisplayLength": 25
        });
		   });
</script>
