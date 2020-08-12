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

.nav-tabs>li>a{
  margin-right: 0px!important;
}

.tab_list>li>a {    
    padding: 10px 3px;
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
  <h2>Partner REGISTRATION 2020 <a href="<?php echo base_url('admin/audit_started/partnerexcel') ?>">
    <button class="exportBtn">Export to Excel</button>
    </a></h2>
</div>
<div class="hello">
  <div id="wrapper">
    <div id="container"> </div>
    <?php 
    $statewisegraph1=getPartnerGraphByState(1);
    $countArr1=count(array_chunk($statewisegraph1[0],7,true));
    for($i=0;$i<$countArr1; $i++){
    ?>
    <div id="containerStateWisePartner1_<?php echo $i; ?>"> </div>
    <br/>
    <?php } ?>
    <p><strong>Export Graph:</strong></p>
    <select id="ExportOption" style="border-radius:0px;">
      <option value="PNG">PNG Image</option>
      <option value="JPEG">JPEG Image</option>
      <option value="PDF">PDF Document</option>
      <option value="SVG">SVG Vector Image</option>
    </select>
    <button id="buttonExport" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Export chart</button>
    <button id="buttonPrint" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Print chart</button>
    <br/>
    <br/>
  </div>
  <div id="wrapper2" style="display:none;">
    <div id="container2"> </div>
    <?php 
    $statewisegraph2=getPartnerGraphByState(2);
    $countArr2=count(array_chunk($statewisegraph2[0],7,true));
    for($i=0;$i<$countArr2; $i++){
    ?>
    <div id="containerStateWisePartner2_<?php echo $i; ?>"> </div>
    <br/>
    <?php } ?>
    <p><strong>Export Graph:</strong></p>
    <select id="ExportOption" style="border-radius:0px;">
      <option value="PNG">PNG Image</option>
      <option value="JPEG">JPEG Image</option>
      <option value="PDF">PDF Document</option>
      <option value="SVG">SVG Vector Image</option>
    </select>
    <button id="buttonExport1" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Export chart</button>
    <button id="buttonPrint1" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Print chart</button>
    <br/>
    <br/>
  </div>
  <div id="wrapper3" style="display:none;">
    <div id="container3"> </div>
    <?php 
    $statewisegraph3=getPartnerGraphByState(3);
    $countArr3=count(array_chunk($statewisegraph3[0],7,true));
    for($i=0;$i<$countArr3; $i++){
    ?>
    <div id="containerStateWisePartner3_<?php echo $i; ?>"> </div>
    <br/>
    <?php } ?>
    <p><strong>Export Graph:</strong></p>
    <select id="ExportOption" style="border-radius:0px;">
      <option value="PNG">PNG Image</option>
      <option value="JPEG">JPEG Image</option>
      <option value="PDF">PDF Document</option>
      <option value="SVG">SVG Vector Image</option>
    </select>
    <button id="buttonExport2" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Export chart</button>
    <button id="buttonPrint2" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Print chart</button>
    <br/>
    <br/>
  </div>
  <div id="wrapper4" style="display:none;">
    <div id="container4"> </div>
    <?php 
    $statewisegraph4=getPartnerGraphByState(4);
    $countArr4=count(array_chunk($statewisegraph4[0],7,true));
    for($i=0;$i<$countArr4; $i++){
    ?>
    <div id="containerStateWisePartner4_<?php echo $i; ?>"> </div>
    <br/>
    <?php } ?>
    <p><strong>Export Graph:</strong></p>
    <select id="ExportOption" style="border-radius:0px;">
      <option value="PNG">PNG Image</option>
      <option value="JPEG">JPEG Image</option>
      <option value="PDF">PDF Document</option>
      <option value="SVG">SVG Vector Image</option>
    </select>
    <button id="buttonExport3" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Export chart</button>
    <button id="buttonPrint3" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Print chart</button>
    <br/>
    <br/>
  </div>
  <div id="wrapper5" style="display:none;">
    <div id="container5"> </div>
    <?php 
    $statewisegraph5=getPartnerGraphByState(5);
    $countArr5=count(array_chunk($statewisegraph5[0],7,true));
    for($i=0;$i<$countArr5; $i++){
    ?>
    <div id="containerStateWisePartner5_<?php echo $i; ?>"> </div>
    <br/>
    <?php } ?>
    <p><strong>Export Graph:</strong></p>
    <select id="ExportOption" style="border-radius:0px;">
      <option value="PNG">PNG Image</option>
      <option value="JPEG">JPEG Image</option>
      <option value="PDF">PDF Document</option>
      <option value="SVG">SVG Vector Image</option>
    </select>
    <button id="buttonExport4" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Export chart</button>
    <button id="buttonPrint4" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Print chart</button>
    <br/>
    <br/>
  </div>
  <div id="wrapper6" style="display:none;">
    <div id="container6"> </div>
    <?php 
    $statewisegraph6=getPartnerGraphByState(6);
    $countArr6=count(array_chunk($statewisegraph6[0],7,true));
    for($i=0;$i<$countArr6; $i++){
    ?>
    <div id="containerStateWisePartner6_<?php echo $i; ?>"> </div>
    <br/>
    <?php } ?>
    <p><strong>Export Graph:</strong></p>
    <select id="ExportOption" style="border-radius:0px;">
      <option value="PNG">PNG Image</option>
      <option value="JPEG">JPEG Image</option>
      <option value="PDF">PDF Document</option>
      <option value="SVG">SVG Vector Image</option>
    </select>
    <button id="buttonExport5" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Export chart</button>
    <button id="buttonPrint5" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Print chart</button>
    <br/>
    <br/>
  </div>
  
  <div id="wrapper7" style="display:none;">
    <div id="container7"> </div>
    <?php 
    $statewisegraph7=getPartnerGraphByStateSatya(7);
    $countArr7=count(array_chunk($statewisegraph7[0],7,true));
    for($i=0;$i<$countArr7; $i++){
    ?>
    <div id="containerStateWisePartner7_<?php echo $i; ?>"> </div>
    <br/>
    <?php } ?>
    <p><strong>Export Graph:</strong></p>
    <select id="ExportOption" style="border-radius:0px;">
      <option value="PNG">PNG Image</option>
      <option value="JPEG">JPEG Image</option>
      <option value="PDF">PDF Document</option>
      <option value="SVG">SVG Vector Image</option>
    </select>
    <button id="buttonExport7" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Export chart</button>
    <button id="buttonPrint5" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Print chart</button>
    <br/>
    <br/>
  </div>


 <div id="wrapper8" style="display:none;">
    <div id="container8"> </div>
    <?php 
    $statewisegraph8=getPartnerGraphByStateSatya_8(8);
    $countArr8=count(array_chunk($statewisegraph8[0],7,true));
    for($i=0;$i<$countArr8; $i++){
    ?>
    <div id="containerStateWisePartner8_<?php echo $i; ?>"> </div>
    <br/>
    <?php } ?>
    <p><strong>Export Graph:</strong></p>
    <select id="ExportOption" style="border-radius:0px;">
      <option value="PNG">PNG Image</option>
      <option value="JPEG">JPEG Image</option>
      <option value="PDF">PDF Document</option>
      <option value="SVG">SVG Vector Image</option>
    </select>
    <button id="buttonExport8" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Export chart</button>
    <button id="buttonPrint5" class="btn btn-danger" style="border:1px solid #2291a4; border-radius:0px;">Print chart</button>
    <br/>
    <br/>
  </div>

  
</div>
<div id="exTab2" class="container">
  <ul class="nav nav-tabs tab_list">
    <li class="active"> <a href="#1" id="first" data-toggle="tab" >Church of South India</a> </li>
    <li><a href="#2" id="second" data-toggle="tab">Jawahar Navodaya Vidyalaya</a> </li>
    <li><a href="#3" id="third" data-toggle="tab">Kendriya Vidyalaya Sangathan (KVS)</a> </li>
    <li><a href="#4" id="four" data-toggle="tab">Montfortian Education Foundation</a> </li>
    <li><a href="#5" id="five" data-toggle="tab">Mount Litera Zee Schools</a> </li>
    <li><a href="#6" id="six" data-toggle="tab">Satya Bharti Foundation</a> </li>
    <li><a href="#7" id="seven" data-toggle="tab">Satya Bharti School</a> </li>
   <li><a href="#8" id="eight" data-toggle="tab">BF Quality Support Programme</a> </li>
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
      <div style="overflow-x:auto;"> <a href="<?php echo base_url("admin/audit_started/foundationPartnerrexcel/2"); ?>" class="btn btn-default other">
        <button class="exportBtn">Export to Excel</button>
        </a>
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
    </div>
    <div class="tab-pane" id="3">
      <div style="overflow-x:auto;"> <a href="<?php echo base_url("admin/audit_started/foundationPartnerrexcel/3"); ?>" class="btn btn-default other">
        <button class="exportBtn">Export to Excel</button>
        </a>
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
    </div>
    <div class="tab-pane" id="4">
      <div style="overflow-x:auto;"> <a href="<?php echo base_url("admin/audit_started/foundationPartnerrexcel/4"); ?>" class="btn btn-default other">
        <button class="exportBtn">Export to Excel</button>
        </a>
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
    </div>
    <div class="tab-pane" id="5">
      <div style="overflow-x:auto;"> <a href="<?php echo base_url("admin/audit_started/satyaBhartiFoundationPartnerrexcel"); ?>" class="btn btn-default other">
        <button class="exportBtn">Export to Excel</button>
        </a>
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
    </div>
    <div class="tab-pane" id="6">
      <div style="overflow-x:auto;"> <a href="<?php echo base_url("admin/audit_started/foundationPartnerrexcel/5"); ?>" class="btn btn-default other">
        <button class="exportBtn">Export to Excel</button>
        </a>
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
    <div class="tab-pane" id="7">
      <div style="overflow-x:auto;"> <a href="<?php echo base_url("admin/audit_started/foundationPartnerrexcel/5"); ?>" class="btn btn-default other">
        <button class="exportBtn">Export to Excel</button>
        </a>
        <table id="example7" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
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
          <?php $i=1; foreach($list_school7 as $r){ ?>
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
      <div class="tab-pane" id="8">
      <div style="overflow-x:auto;"> <a href="<?php echo base_url("admin/audit_started/foundationPartnerrexcel/5"); ?>" class="btn btn-default other">
        <button class="exportBtn">Export to Excel</button>
        </a>
        <table id="example8" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width: 100%;">
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
          <?php $i=1; foreach($list_school8 as $r){ ?>
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
</div>
<link type="text/css" rel="stylesheet" type="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
    color: #fff;
    cursor: default;
    background-color:#24a5a0!important;
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
        $('#example2,#example3,#example4,#example5,#example6,#example7,#example8').DataTable({
            dom: 'lfrtip',
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
            "iDisplayLength": 25
        });
       });
</script>
<script src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
<script src="<?php echo base_url(); ?>assets/js/data.js"></script>
<script src="<?php echo base_url(); ?>assets/js/exporting.js"></script>
<?php 
 $statewisegraph1=getPartnerGraphByState(1);
 $countArr1=count(array_chunk($statewisegraph1[0],7,true));
 $countTotalArr1=count($statewisegraph1[0]);
 $arrData1=array_chunk($statewisegraph1[0],7,true);
 $arrData1_1=array_chunk($statewisegraph1[1],7,true);
 $arrData1_2=array_chunk($statewisegraph1[2],7,true);
 $arrData1_3=array_chunk($statewisegraph1[3],7,true);
 $arrData1_4=array_chunk($statewisegraph1[4],7,true);
 $arrData1_5=array_chunk($statewisegraph1[5],7,true);
 $dataCount1=array();
 $countInteration1=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr1; $i++){$dataCount1[]=$i;}
 for($i=0,$t=0;$i<$countArr1; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner1_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation By State Church of South India'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<7;++$r){
           if(!empty($arrData1[$i][$y]['statename'])){
          echo "'".$arrData1[$i][$y]['statename']."'"; } ?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#1826FB',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_4[$t]))); ?> //East

        } , {
            name: 'Audit Submitted',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData1_5[$t]))); ?> //East

        }     
    ],
}); 
</script>
<?php
  $t++;
} ?>
<?php 
 $statewisegraph2=getPartnerGraphByState(2);
 $countArr2=count(array_chunk($statewisegraph2[0],7,true));
 $countTotalArr2=count($statewisegraph2[0]);
 $arrData2=array_chunk($statewisegraph2[0],7,true);
 $arrData2_1=array_chunk($statewisegraph2[1],7,true);
 $arrData2_2=array_chunk($statewisegraph2[2],7,true);
 $arrData2_3=array_chunk($statewisegraph2[3],7,true);
 $arrData2_4=array_chunk($statewisegraph2[4],7,true);
 $arrData2_5=array_chunk($statewisegraph2[5],7,true);
 $dataCount2=array();
 $countInteration2=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr2; $i++){$dataCount2[]=$i;}
 for($i=0,$t=0;$i<$countArr2; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner2_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation By State Jawahar Navodaya Vidyalaya'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<7;++$r){
         if(!empty($arrData2[$i][$y]['statename'])){
          echo "'".$arrData2[$i][$y]['statename']."'"; } ?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData2_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData2_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData2_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#1826FB',
            data: <?php echo json_encode(array_map('intval',array_values($arrData2_4[$t]))); ?> //East

        } , {
            name: 'Audit Submitted',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData2_5[$t]))); ?> //East

        }   
    ],
}); 
</script>
<?php
  $t++;
} ?>
<?php 
 $statewisegraph3=getPartnerGraphByState(3);
 $countArr3=count(array_chunk($statewisegraph3[0],7,true));
 $countTotalArr3=count($statewisegraph3[0]);
 $arrData3=array_chunk($statewisegraph3[0],7,true);
 $arrData3_1=array_chunk($statewisegraph3[1],7,true);
 $arrData3_2=array_chunk($statewisegraph3[2],7,true);
 $arrData3_3=array_chunk($statewisegraph3[3],7,true);
 $arrData3_4=array_chunk($statewisegraph3[4],7,true);
 $arrData3_5=array_chunk($statewisegraph3[5],7,true);
 $dataCount3=array();
 $countInteration=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr3; $i++){$dataCount3[]=$i;}
 for($i=0,$t=0;$i<$countArr3; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner3_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation By State Kendriya Vidyalaya Sangathan (KVS)'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<7;++$r){
          if(!empty($arrData3[$i][$y]['statename'])){
          echo "'".$arrData3[$i][$y]['statename']."'"; } ?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData3_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData3_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData3_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#1826FB',
            data: <?php echo json_encode(array_map('intval',array_values($arrData3_4[$t]))); ?> //East

        } , {
            name: 'Audit Submitted',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData3_5[$t]))); ?> //East

        }   
    ],
}); 
</script>
<?php
  $t++;
} ?>
<?php 
 $statewisegraph4=getPartnerGraphByState(4);
 $countArr4=count(array_chunk($statewisegraph4[0],7,true));
 $countTotalArr4=count($statewisegraph4[0]);
 $arrData4=array_chunk($statewisegraph4[0],7,true);
 $arrData4_1=array_chunk($statewisegraph4[1],7,true);
 $arrData4_2=array_chunk($statewisegraph4[2],7,true);
 $arrData4_3=array_chunk($statewisegraph4[3],7,true);
 $arrData4_4=array_chunk($statewisegraph4[4],7,true);
 $arrData4_5=array_chunk($statewisegraph4[5],7,true);
 $dataCount4=array();
 $countInteration4=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr4; $i++){$dataCount4[]=$i;}
 for($i=0,$t=0;$i<$countArr4; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner4_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation By State Montfortian Education Foundation'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<7;++$r){
         if(!empty($arrData4[$i][$y]['statename'])){
          echo "'".$arrData4[$i][$y]['statename']."'"; } ?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData4_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData4_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData4_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#1826FB',
            data: <?php echo json_encode(array_map('intval',array_values($arrData4_4[$t]))); ?> //East

        } , {
            name: 'Audit Submitted',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData4_5[$t]))); ?> //East

        }   
    ],
}); 
</script>
<?php
  $t++;
} ?>
<?php 
 $statewisegraph5=getPartnerGraphByState(5);
 $countArr5=count(array_chunk($statewisegraph5[0],7,true));
 $countTotalArr5=count($statewisegraph5[0]);
 $arrData5=array_chunk($statewisegraph5[0],7,true);
 $arrData5_1=array_chunk($statewisegraph5[1],7,true);
 $arrData5_2=array_chunk($statewisegraph5[2],7,true);
 $arrData5_3=array_chunk($statewisegraph5[3],7,true);
 $arrData5_4=array_chunk($statewisegraph5[4],7,true);
 $arrData5_5=array_chunk($statewisegraph5[5],7,true);
 $dataCount5=array();
 $countInteration5=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr5; $i++){$dataCount5[]=$i;}
 for($i=0,$t=0;$i<$countArr5; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner5_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation By State Mount Litera Zee Schools'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<7;++$r){
           if(!empty($arrData5[$i][$y]['statename'])){
          echo "'".$arrData5[$i][$y]['statename']."'"; } ?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData5_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData5_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData5_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#1826FB',
            data: <?php echo json_encode(array_map('intval',array_values($arrData5_4[$t]))); ?> //East

        } , {
            name: 'Audit Submitted',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData5_5[$t]))); ?> //East

        }   
    ],
}); 
</script>
<?php
  $t++;
} ?>
<?php 
 $statewisegraph6=getPartnerGraphByState(6);
 $countArr6=count(array_chunk($statewisegraph5[0],7,true));
 $countTotalArr6=count($statewisegraph6[0]);
 $arrData6=array_chunk($statewisegraph6[0],7,true);
 $arrData6_1=array_chunk($statewisegraph6[1],7,true);
 $arrData6_2=array_chunk($statewisegraph6[2],7,true);
 $arrData6_3=array_chunk($statewisegraph6[3],7,true);
 $arrData6_4=array_chunk($statewisegraph6[4],7,true);
 $arrData6_5=array_chunk($statewisegraph6[5],7,true);
 $dataCount6=array();
 $countInteration6=0;
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr6; $i++){$dataCount6[]=$i;}
 for($i=0,$t=0;$i<$countArr6; $i++){
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner6_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation By State Satya Bharti Foundation'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<7;++$r){
          if(!empty($arrData6[$i][$y]['statename'])){
          echo "'".$arrData6[$i][$y]['statename']."'"; } ?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData6_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData6_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData6_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#1826FB',
            data: <?php echo json_encode(array_map('intval',array_values($arrData6_4[$t]))); ?> //East

        } , {
            name: 'Audit Submitted',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData6_5[$t]))); ?> //East

        }   
    ],
}); 
</script>
<?php
  $t++;
} ?>


<?php 
 $statewisegraph7=getPartnerGraphByStateSatya(7);
 $countArr7=count(array_chunk($statewisegraph7[0],7,true));
 $countTotalArr7=count($statewisegraph7[0]);
 $arrData7=array_chunk($statewisegraph7[0],7,true); 
 $arrData7_1=array_chunk($statewisegraph7[1],7,true);
 $arrData7_2=array_chunk($statewisegraph7[2],7,true);
 $arrData7_3=array_chunk($statewisegraph7[3],7,true);
 $arrData7_4=array_chunk($statewisegraph7[4],7,true);
 $arrData7_5=array_chunk($statewisegraph7[5],7,true);
 $dataCount7=array();
 $countInteration7=0;
  
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr7; $i++){$dataCount7[]=$i;}
 for($i=0,$t=0;$i<$countArr7; $i++){
   
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner7_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation By Satya Bharti School'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<7;++$r){
          if(!empty($arrData7[$i][$y]['statename'])){
          echo "'".$arrData7[$i][$y]['statename']."'"; } ?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData7_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData7_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData7_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#1826FB',
            data: <?php echo json_encode(array_map('intval',array_values($arrData7_4[$t]))); ?> //East

        } , {
            name: 'Audit Submitted',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData7_5[$t]))); ?> //East

        }   
    ],
}); 
</script>
<?php
  $t++;
} ?>



<?php 
 $statewisegraph8=getPartnerGraphByStateSatya_8(8);
 $countArr8=count(array_chunk($statewisegraph8[0],7,true));
 $countTotalArr8=count($statewisegraph8[0]);
 $arrData8=array_chunk($statewisegraph8[0],7,true); 
 $arrData8_1=array_chunk($statewisegraph8[1],7,true);
 $arrData8_2=array_chunk($statewisegraph8[2],7,true);
 $arrData8_3=array_chunk($statewisegraph8[3],7,true);
 $arrData8_4=array_chunk($statewisegraph8[4],7,true);
 $arrData8_5=array_chunk($statewisegraph8[5],7,true);
 $dataCount8=array();
 $countInteration8=0;
  
 $y=0;
 $s=0;
 for($i=0,$t=0;$i<$countArr8; $i++){$dataCount8[]=$i;}
 for($i=0,$t=0;$i<$countArr8; $i++){
   
?>
<script type="text/javascript">
       Highcharts.chart('containerStateWisePartner8_<?php echo $i; ?>',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Participation BF Quality Support Programme'
        },
    yAxis: {
      title: {
            text: 'No. of Schools'
          }
    },
        xAxis: {
            categories: [
      <?php 
             for($r=0;$r<7;++$r){
          if(!empty($arrData8[$i][$y]['statename'])){
          echo "'".$arrData8[$i][$y]['statename']."'"; } ?>,
             <?php $y++; 
       }?>  
            ],
            crosshair: true
        },
    
    legend: {
        enabled: true
    },
        exporting: { enabled: true },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
     series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        },
    
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
      color:'rgb(124, 181, 236)',
            data: <?php echo json_encode(array_map('intval',array_values($arrData8_1[$t]))); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Not Started',
      color:'#fc3300',
            data: <?php echo json_encode(array_map('intval',array_values($arrData8_2[$t]))); ?> //South

        }, {
            name: 'Audit Started',
      color:'#fcfc00',
            data: <?php echo json_encode(array_map('intval',array_values($arrData8_3[$t]))); ?> //South

        }, {
            name: 'Audit Completed',
      color:'#1826FB',
            data: <?php echo json_encode(array_map('intval',array_values($arrData8_4[$t]))); ?> //East

        } , {
            name: 'Audit Submitted',
      color:'#00ae4f',
            data: <?php echo json_encode(array_map('intval',array_values($arrData8_5[$t]))); ?> //East

        }   
    ],
}); 
</script>
<?php
  $t++;
} ?>



<script type="text/javascript">
       var chart =  Highcharts.chart('container',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Church of South India Total Registrations <?php echo $csi_registerd_audit; ?> Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
             format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',      
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started', color:'#fc3300', y: <?php echo $csi_total_notstarted_audit; ?>},{name: 'Audit Started', color:'#fcfc00', y: <?php echo $csi_total_started_audit; ?>}, {name: 'Audit Completed', color:'#1826FB', y: <?php echo $csi_completed; ?>},{name: 'Audit Submitted', color:'#00ae4f', y: <?php echo $csi_audit_submitted; ?>}]
            }]
        });
    
    // the button handler    
    $('#buttonExport').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 
    $('#buttonPrint').click(function() {
        chart.setTitle(null, { text: ' ' });
        chart.print();
        chart.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
    
    
    </script>
<script type="text/javascript">
       var chart1 =  Highcharts.chart('container2',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Jawahar Navodaya Vidyalaya Total Registrations <?php echo $csi_registerd_audit2; ?> Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
             format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',      
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started', color:'#fc3300', y: <?php echo $csi_total_notstarted_audit2; ?>},{name: 'Audit Started', color:'#fcfc00', y: <?php echo $csi_total_started_audit2; ?>}, {name: 'Audit Completed', color:'#1826FB', y: <?php echo $csi_completed2; ?>},{name: 'Audit Submitted', color:'#00ae4f', y: <?php echo $csi_audit_submitted2; ?>}]
            }]
        });
    
    // the button handler    
    $('#buttonExport1').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart1.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart1.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart1.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart1.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 
    $('#buttonPrint1').click(function() {
        chart1.setTitle(null, { text: ' ' });
        chart1.print();
        chart1.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
    
    </script>
<script type="text/javascript">
       var chart2=  Highcharts.chart('container3',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Kendriya Vidyalaya Sangathan (KVS) Total Registrations <?php echo $csi_registerd_audit3; ?> Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
            format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',     
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started', color:'#fc3300', y: <?php echo $csi_total_notstarted_audit3; ?>},{name: 'Audit Started', color:'#fcfc00', y: <?php echo $csi_total_started_audit3; ?>}, {name: 'Audit Completed',color:'#1826FB', y: <?php echo $csi_completed3; ?>},{name: 'Audit Submitted', color:'#00ae4f', y: <?php echo $csi_audit_submitted3; ?>}]
            }]
        });
    // the button handler    
    $('#buttonExport2').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart2.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart2.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart2.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart2.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 
    $('#buttonPrint2').click(function() {
        chart2.setTitle(null, { text: ' ' });
        chart2.print();
        chart2.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
    </script>
<script type="text/javascript">
      var chart3=    Highcharts.chart('container4',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Montfortian Education Foundation Total Registrations <?php echo $csi_registerd_audit4; ?> Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
            format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',     
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started',color:'#fc3300', y: <?php echo $csi_total_notstarted_audit4; ?>},{name: 'Audit Started',color:'#fcfc00', y: <?php echo $csi_total_started_audit4; ?>}, {name: 'Audit Completed',color:'#1826FB', y: <?php echo $csi_completed4; ?>},{name: 'Audit Submitted', color:'#00ae4f', y: <?php echo $csi_audit_submitted4; ?>}]
            }]
        });
    // the button handler    
    $('#buttonExport3').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart3.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart3.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart3.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart3.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 
    $('#buttonPrint3').click(function() {
        chart3.setTitle(null, { text: ' ' });
        chart3.print();
        chart3.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
    </script>
<script type="text/javascript">
       var chart4 =  Highcharts.chart('container5',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Mount Litera Zee Schools Total Registrations <?php echo $csi_registerd_audit5; ?> Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
            format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',     
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started',color:'#fc3300', y: <?php echo $csi_total_notstarted_audit5; ?>},{name: 'Audit Started',color:'#fcfc00', y: <?php echo $csi_total_started_audit5; ?>}, {name: 'Audit Completed',color:'#1826FB', y: <?php echo $csi_completed5; ?>},{name: 'Audit Submitted', color:'#00ae4f', y: <?php echo $csi_audit_submitted5; ?>}]
            }]
        });
    // the button handler    
    $('#buttonExport4').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart4.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart4.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart4.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart4.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 
    $('#buttonPrint4').click(function() {
        chart4.setTitle(null, { text: ' ' });
        chart4.print();
        chart4.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
    </script>
<script type="text/javascript">
     var chart5 =    Highcharts.chart('container6',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Satya Bharti Foundation Total Registrations <?php echo $csi_registerd_audit6; ?> Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
            format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',     
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started',color:'#fc3300', y: <?php echo $csi_total_notstarted_audit6; ?>},{name: 'Audit Started',color:'#fcfc00', y: <?php echo $csi_total_started_audit6; ?>}, {name: 'Audit Completed',color:'#1826FB', y: <?php echo $csi_completed6; ?>},{name: 'Audit Submitted', color:'#00ae4f', y: <?php echo $csi_audit_submitted6; ?>}]
            }]
        });
    // the button handler    
    $('#buttonExport5').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart5.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart5.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart5.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart5.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 
    $('#buttonPrint5').click(function() {
        chart5.setTitle(null, { text: ' ' });
        chart5.print();
        chart5.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
    </script>


<script type="text/javascript">
     var chart7 =    Highcharts.chart('container7',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for Satya Bharti School Total Registrations <?php echo $csi_registerd_audit7; ?> Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
            format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',     
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started',color:'#fc3300', y: <?php echo $csi_total_notstarted_audit7; ?>},{name: 'Audit Started',color:'#fcfc00', y: <?php echo $csi_total_started_audit7; ?>}, {name: 'Audit Completed',color:'#1826FB', y: <?php echo $csi_completed7; ?>},{name: 'Audit Submitted', color:'#00ae4f', y: <?php echo $csi_audit_submitted7; ?>}]
            }]
        });
    // the button handler    
    $('#buttonExport7').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart8.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart7.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart7.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart7.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 
    $('#buttonPrint5').click(function() {
        chart7.setTitle(null, { text: ' ' });
        chart7.print();
        chart7.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
    </script>



    <script type="text/javascript">
     var chart8 =    Highcharts.chart('container8',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Participation Chart for BF Quality Support Programme Total Registrations <?php echo $csi_registerd_audit8; ?> Schools'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
            format: '{point.percentage:.1f}% {point.name}<br/><b> ({point.y} Schools)</b>',     
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Audit Not Started',color:'#fc3300', y: <?php echo $csi_total_notstarted_audit8; ?>},{name: 'Audit Started',color:'#fcfc00', y: <?php echo $csi_total_started_audit8; ?>}, {name: 'Audit Completed',color:'#1826FB', y: <?php echo $csi_completed8; ?>},{name: 'Audit Submitted', color:'#00ae4f', y: <?php echo $csi_audit_submitted8; ?>}]
            }]
        });
    // the button handler    
    $('#buttonExport8').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart8.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart8.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart8.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart8.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 
    $('#buttonPrint5').click(function() {
        chart7.setTitle(null, { text: ' ' });
        chart7.print();
        chart7.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
    </script>




<div id="container"> </div>
<div id="container2" style="display:none;"> </div>
<div id="container3" style="display:none;"> </div>
<div id="container4" style="display:none;"> </div>
<div id="container5" style="display:none;"> </div>
<div id="container6" style="display:none;"> </div>
<div id="container7" style="display:none;"> </div>
<div id="container8" style="display:none;"> </div>
<script>
    $("#second").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").hide();
         $("#wrapper4").hide();
         $("#wrapper5").hide();
         $("#wrapper6").hide();
         $("#wrapper7").hide();
         $("#wrapper8").hide();
      $("#wrapper2").show();
       });
    
    </script>
<script>
    $("#third").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").show();
         $("#wrapper4").hide();
         $("#wrapper5").hide();
         $("#wrapper6").hide();
         $("#wrapper7").hide();
         $("#wrapper8").hide();
      $("#wrapper2").hide();
       });
    
    </script>
<script>
    $("#four").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").hide();
         $("#wrapper4").show();
         $("#wrapper5").hide();
         $("#wrapper6").hide();
         $("#wrapper7").hide();
         $("#wrapper8").hide();
      $("#wrapper2").hide();
       });
    
    </script>
<script>
    $("#five").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").hide();
         $("#wrapper4").hide();
         $("#wrapper5").show();
         $("#wrapper6").hide();
         $("#wrapper7").hide();
         $("#wrapper8").hide();
      $("#wrapper2").hide();
       });
    
    </script>
<script>
    $("#six").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").hide();
         $("#wrapper4").hide();
         $("#wrapper5").hide();
         $("#wrapper6").show();
         $("#wrapper7").hide();
         $("#wrapper8").hide();
      $("#wrapper2").hide();
       });    
    </script>

<script>
    $("#seven").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").hide();
         $("#wrapper4").hide();
         $("#wrapper5").hide();
         $("#wrapper6").hide();
         $("#wrapper7").show();
         $("#wrapper8").hide();
      $("#wrapper2").hide();
       });    
    </script>

    <script>
    $("#eight").click(function(){
         $("#wrapper").hide();
         $("#wrapper3").hide();
         $("#wrapper4").hide();
         $("#wrapper5").hide();
         $("#wrapper6").hide();
         $("#wrapper7").hide();
         $("#wrapper8").show();
      $("#wrapper2").hide();
       });    
    </script>

<script>
    $("#first").click(function(){
         $("#wrapper").show();
         $("#wrapper3").hide();
         $("#wrapper4").hide();
         $("#wrapper5").hide();
         $("#wrapper6").hide();
         $("#wrapper7").hide();
         $("#wrapper8").hide();
      $("#wrapper2").hide();
       });
    
    </script>

       </script>

     <script type="text/javascript">
      
      $("#second").click(function(){
        $(".other").hide();
      })

    </script>



