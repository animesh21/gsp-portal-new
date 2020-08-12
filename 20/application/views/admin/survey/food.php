<?php $this->load->view('admin/survey/header'); ?>

<div class="container">
  <div class="content-form">
    <div class="intro">
      <h1>FOOD <span class="h5">(<?php echo $school->name;
?>)</span></h1>
      <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><!--<img src="http://greenschoolsprogramme.org/audit2015/upload/templates/tfr_responsive/images/video-icon.png" style="width: 45px; height: 40px; margin-top:47px;">--></a></div>
    </div>
    <form action="http://localhost/gsp-portal-new/food/set" id="food" method="post" accept-charset="utf-8">
      <div class="form-group">
        <label>
        <h6> Task 1: Choose your Food Audit Team </h6>
        </label>
        <br>
        You would require at least 5 to 10 of your schoolmates in the Food audit team. The teacher co-ordinator may
        be a science or home science teacher or midday meal in-charge with an interest in food and nutrition. Do
        include the canteen in-charge in your audit team. <br>
        <br>
        <div class="form-group">
          <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
          <table class="table table-bordered table-striped">
            <tr>
              <th></th>
              <th> First Name </th>
              <th> Last Name </th>
              <th> Email ID </th>
            </tr>
            <tr>
              <td> 1</td>
              <td><?php echo (getFiled('Q1F1S1', $schoolUserID) != "") ? getFiled('Q1F1S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q1F1S3', $schoolUserID) != "") ? getFiled('Q1F1S3', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q1F1S2', $schoolUserID) != "") ? getFiled('Q1F1S2', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 2</td>
              <td><?php echo (getFiled('Q1F2S1', $schoolUserID) != "") ? getFiled('Q1F2S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q1F2S3', $schoolUserID) != "") ? getFiled('Q1F2S3', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q1F2S2', $schoolUserID) != "") ? getFiled('Q1F2S2', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 3</td>
              <td><?php echo (getFiled('Q1F3S1', $schoolUserID) != "") ? getFiled('Q1F3S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q1F3S3', $schoolUserID) != "") ? getFiled('Q1F3S3', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q1F3S2', $schoolUserID) != "") ? getFiled('Q1F3S2', $schoolUserID) : "N/A"; ?> </td>
            </tr>
          </table>
        </div>
        <div class="form-group">
          <label class="control-label">Administrative staff (maximum of five staff can be part of the
          team):</label>
          <table class="table table-bordered table-striped">
            <tr>
              <th></th>
              <th> First Name </th>
              <th> Last Name </th>
              <th> Email ID </th>
            </tr>
            <tr>
              <td> 1</td>
              <td><?php echo (getFiled('Q2F1S1', $schoolUserID) != "") ? getFiled('Q2F1S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q2F1S3', $schoolUserID) != "") ? getFiled('Q2F1S3', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q2F1S2', $schoolUserID) != "") ? getFiled('Q2F1S2', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 2</td>
              <td><?php echo (getFiled('Q2F2S1', $schoolUserID) != "") ? getFiled('Q2F2S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q2F2S3', $schoolUserID) != "") ? getFiled('Q2F2S3', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q2F2S2', $schoolUserID) != "") ? getFiled('Q2F2S2', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 3</td>
              <td><?php echo (getFiled('Q2F3S1', $schoolUserID) != "") ? getFiled('Q2F3S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q2F3S3', $schoolUserID) != "") ? getFiled('Q2F3S3', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q2F3S2', $schoolUserID) != "") ? getFiled('Q2F3S2', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 4</td>
              <td><?php echo (getFiled('Q2F4S1', $schoolUserID) != "") ? getFiled('Q2F4S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q2F4S3', $schoolUserID) != "") ? getFiled('Q2F4S3', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q2F4S2', $schoolUserID) != "") ? getFiled('Q2F4S2', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 5</td>
              <td><?php echo (getFiled('Q2F5S1', $schoolUserID) != "") ? getFiled('Q2F5S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q2F5S3', $schoolUserID) != "") ? getFiled('Q2F5S3', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q2F5S2', $schoolUserID) != "") ? getFiled('Q2F5S2', $schoolUserID) : "N/A"; ?> </td>
            </tr>
          </table>
        </div>
        <div class="form-group">
          <label class="control-label">Students (maximum of ten students can be part of the team):</label>
          <table class="table table-bordered table-striped">
            <tr>
              <th></th>
              <th> First Name </th>
              <th> Last Name </th>
              <th> Grade </th>
            </tr>
            <tr>
              <td> 1</td>
              <td><?php echo (getFiled('Q3F1S1', $schoolUserID) != "") ? getFiled('Q3F1S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F1S2', $schoolUserID) != "") ? getFiled('Q3F1S2', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F1S3', $schoolUserID) != "") ? getFiled('Q3F1S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 2</td>
              <td><?php echo (getFiled('Q3F2S1', $schoolUserID) != "") ? getFiled('Q3F2S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F2S2', $schoolUserID) != "") ? getFiled('Q3F2S2', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F2S3', $schoolUserID) != "") ? getFiled('Q3F2S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 3</td>
              <td><?php echo (getFiled('Q3F3S1', $schoolUserID) != "") ? getFiled('Q3F3S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F3S2', $schoolUserID) != "") ? getFiled('Q3F3S2', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F3S3', $schoolUserID) != "") ? getFiled('Q3F3S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 4</td>
              <td><?php echo (getFiled('Q3F4S1', $schoolUserID) != "") ? getFiled('Q3F4S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F4S2', $schoolUserID) != "") ? getFiled('Q3F4S2', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F4S3', $schoolUserID) != "") ? getFiled('Q3F4S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 5</td>
              <td><?php echo (getFiled('Q3F5S1', $schoolUserID) != "") ? getFiled('Q3F5S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F5S2', $schoolUserID) != "") ? getFiled('Q3F5S2', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F5S3', $schoolUserID) != "") ? getFiled('Q3F5S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 6</td>
              <td><?php echo (getFiled('Q3F6S1', $schoolUserID) != "") ? getFiled('Q3F6S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F6S2', $schoolUserID) != "") ? getFiled('Q3F6S2', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F6S3', $schoolUserID) != "") ? getFiled('Q3F6S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 7</td>
              <td><?php echo (getFiled('Q3F7S1', $schoolUserID) != "") ? getFiled('Q3F7S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F7S2', $schoolUserID) != "") ? getFiled('Q3F7S2', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F7S3', $schoolUserID) != "") ? getFiled('Q3F7S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 8</td>
              <td><?php echo (getFiled('Q3F8S1', $schoolUserID) != "") ? getFiled('Q3F8S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F8S2', $schoolUserID) != "") ? getFiled('Q3F8S2', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F8S3', $schoolUserID) != "") ? getFiled('Q3F8S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 9</td>
              <td><?php echo (getFiled('Q3E9S1', $schoolUserID) != "") ? getFiled('Q3E9S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F9S2', $schoolUserID) != "") ? getFiled('Q3F9S2', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F9S3', $schoolUserID) != "") ? getFiled('Q3F9S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> 10</td>
              <td><?php echo (getFiled('Q3F10S1', $schoolUserID) != "") ? getFiled('Q3F10S1', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F10S2', $schoolUserID) != "") ? getFiled('Q3F10S2', $schoolUserID) : "N/A"; ?> </td>
              <td><?php echo (getFiled('Q3F10S3', $schoolUserID) != "") ? getFiled('Q3F10S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
          </table>
        </div>
        <input type="hidden" id="Q9G1" value="3">
        <input type="hidden" id="Q4G1S3" value="200">
        <div class="form-group">
          <label>
          <h6>Task 2: Find out about the food service in your school.</h6>
          </label>
          <div class="form-group">
            <input type="hidden" id="Q1S1" value="6">
            <label class="control-label"><span class="cube">1</span> Does your school have a provision/space to sell packaged food items within the campus</label>
            <ul class="list-inline">
              <p> <?php echo (getFiled('Q4F1', $schoolUserID) != "") ? (getFiled('Q4F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
            </ul>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label"><span class="cube">2</span>Does your school serve midday meals?</label>
          <ul class="list-inline">
            <p> <?php echo (getFiled('Q5F1', $schoolUserID) != "") ? (getFiled('Q5F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </ul>
        </div>
        <?php if(getFiled('Q5F1', $schoolUserID) == "Y"){ ?>
        <div class="form-group" id="meals1">
          <label class="control-label">Please upload picture of Mid-day meal being 
          served</label>
          <br>
          <?php
                    if (!empty($midDayMeal)) {
                        ?>
          <table width="100%" class="table">
            <thead>
              <tr>
                <th>image</th>
                <th>File name</th>
                <th>Download</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($midDayMeal as $a) { ?>
              <tr>
                <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
                <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Mid_Day_Meal_"), " ", $a->file_name); ?></td>
                <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <?php } else { ?>
          <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
          <?php } ?>
        </div>
        <input type="hidden" value="400" id="Q4G4S3">
        <div class="form-group" id="meals11" style="display: block;">
          <label class="control-label"><span class="cube">2(a)</span>If yes, then midday meal is served under:</label>
          <ul class="list-inline">
            <?php 
				if(getFiled('Q5F1S1', $schoolUserID) == 1){ 
			    		echo "Government Scheme" ;
		    		} 
			     	if(getFiled('Q5F1S1', $schoolUserID) == 2){
					echo "School Personal initiative" ;
				  }
				if(getFiled('Q5F1S1', $schoolUserID) == 3){
				echo "others" ;
				  }
			    	?>
          </ul>
        </div>
        <?php } if(getFiled('Q5F1', $schoolUserID) != "Y"){ ?>
        <div class="form-group" id="meals2" style="display: block;">
          <label class="control-label"><span class="cube">2(a)</span>Do students bring their own lunch from home?</label>
          <ul class="list-inline">
            <p> <?php echo (getFiled('Q5F1S1', $schoolUserID) != "") ? (getFiled('Q5F1S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </ul>
        </div>
        <?php if(getFiled('Q5F1S1', $schoolUserID) == "Y") { ?>
        <div class="form-group" id="Q5F1SF" style="display: block;">
          <label class="control-label">Please upload photographs of lunch boxes</label>
          <br>
          <br>
        </div>
        <div class="form-group" id="Q5F1S2">
          <label class="control-label"><span class="cube">2(a)(1)</span> How many students out of total student population bring home-made lunch? </label>
          <br>
          <?php echo (getFiled('Q5F1S2', $schoolUserID) != "") ? getFiled('Q5F1S2', $schoolUserID) : "N/A"; ?>
          <!--<input type="number" min="0" name="Q5F1S2" id="Q5F1S2A" class="form-control space-textbox" placeholder="" value="">-->
        </div>
        <div class="form-group" id="Q5F1S3">
          <label class="control-label"><span class="cube">2(a)(2)</span>Of the students who  bring lunch from home, how many bring packaged food?</label>
          <br>
          <?php echo (getFiled('Q5F1S3', $schoolUserID) != "") ? getFiled('Q5F1S3', $schoolUserID) : "N/A"; ?>
          <!--<input type="text" id="Q5F1S3A" name="Q5F1S3" class="form-control space-textbox" placeholder="" value="">-->
        </div>
        <div class="form-group" id="Q5F1S4">
          <label class="control-label"><span class="cube">2(a)(3)</span>Do teachers have the responsibility to ensure that students are carrying lunch from home?</label>
          <ul class="list-inline">
            <p> <?php echo (getFiled('Q5F1S4', $schoolUserID) != "") ? (getFiled('Q5F1S4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
            <!--<li> <label class="radio-inline text-gray">
                           <input type="radio" name="Q5F1S4" value="Y"> Yes </label>
                         </li>
                         <li> <label class="radio-inline text-gray">
                             <input type="radio" name="Q5F1S4" value="N">  No </label>
                          </li>-->
          </ul>
        </div>
        <?php } } ?>
        <?php if(getFiled('Q5F1', $schoolUserID) == "Y"){ ?>
        <div class="form-group" id="Q5F2">
          <label class="control-label"><span class="cube">2(b)</span>Whatkind of food items are served in midday
          meal?</label>
          <table class="table table-bordered table-striped">
            <tr>
              <td>1</td>
              <td> Rice</td>
              <td><p> <?php echo (getFiled('Q5F2S1', $schoolUserID) != "") ? (getFiled('Q5F2S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>2</td>
              <td> Wheat</td>
              <td><p> <?php echo (getFiled('Q5F2S2', $schoolUserID) != "") ? (getFiled('Q5F2S2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>3</td>
              <td> Pulses/dal</td>
              <td><p> <?php echo (getFiled('Q5F2S3', $schoolUserID) != "") ? (getFiled('Q5F2S3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>4</td>
              <td> Vegetables</td>
              <td><p> <?php echo (getFiled('Q5F2S4', $schoolUserID) != "") ? (getFiled('Q5F2S4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>5</td>
              <td> Egg</td>
              <td><p> <?php echo (getFiled('Q5F2S5', $schoolUserID) != "") ? (getFiled('Q5F2S5', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>6</td>
              <td> Porridge</td>
              <td><p> <?php echo (getFiled('Q5F2S6', $schoolUserID) != "") ? (getFiled('Q5F2S6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>7</td>
              <td> Upma</td>
              <td><p> <?php echo (getFiled('Q5F2S7', $schoolUserID) != "") ? (getFiled('Q5F2S7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>8</td>
              <td> Khichdi</td>
              <td><p> <?php echo (getFiled('Q5F2S8', $schoolUserID) != "") ? (getFiled('Q5F2S8', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>9</td>
              <td> Curd/butter milk</td>
              <td><p> <?php echo (getFiled('Q5F2S9', $schoolUserID) != "") ? (getFiled('Q5F2S9', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>10</td>
              <td> Biscuits</td>
              <td><p> <?php echo (getFiled('Q5F2S10', $schoolUserID) != "") ? (getFiled('Q5F2S10', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>11</td>
              <td> Packaged chips</td>
              <td><p> <?php echo (getFiled('Q5F2S11', $schoolUserID) != "") ? (getFiled('Q5F2S11', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>12</td>
              <td> Bread butter</td>
              <td><p> <?php echo (getFiled('Q5F2S12', $schoolUserID) != "") ? (getFiled('Q5F2S12', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>13</td>
              <td> Sandwich</td>
              <td><p> <?php echo (getFiled('Q5F2S12', $schoolUserID) != "") ? (getFiled('Q5F2S12', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>14</td>
              <td> Packaged juice</td>
              <td><p> <?php echo (getFiled('Q5F2S14', $schoolUserID) != "") ? (getFiled('Q5F2S14', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
          </table>
        </div>
        <div class="form-group" id="Q5F3" style="display: block;">
          <label class="control-label"><span class="cube">2(b)(1)</span>How many students out of total student population avail of the midday meal services provided?</label>
          <div class="form-group"> <?php echo (getFiled('Q5F3S1', $schoolUserID) != "") ? getFiled('Q5F3S1', $schoolUserID) : "N/A"; ?>
            <!--<input type="number" class="form-control space-textbox" id="Q5F3S1" name="Q5F3S1" value="" placeholder="10">-->
          </div>
        </div>
        <div class="form-group">
          <label class="control-label"><span class="cube">2.1</span>Does your school serve whole day’s meals? </label>
          <ul class="list-inline">
            <p> <?php echo (getFiled('Q5F2', $schoolUserID) != "") ? (getFiled('Q5F2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </ul>
        </div>
        <?php } ?>
        <div class="form-group">
          <label class="control-label">
          <h6> Task 3: What kind of food is served/sold in your school </h6>
          </label>
        </div>
        <?php if(getFiled('Q4F1', $schoolUserID) == "Y"){ ?>
        <div class="form-group" id="Q6F1">
          <label class="control-label"><span class="cube">3</span>What  kind of food is being served / sold in your school?</label>
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th width="442px">Packaged food items served / sold inside school campus</th>
                <th width="192px">Please count all flavours/variants available in the school separately</th>
                <th width="192px">Total no. of items sold, on an average, in a month</th>
                <th width="192px">Month the food items were sold in</th>
              </tr>
              <tr>
                <td> Savoury snacks and
                  similar packaged
                  food like chips,
                  Kurkure, Cheetos,
                  potato crisps, corn
                  snacks, nuts and
                  seeds, etc </td>
                <td><?php echo (getFiled('Q6F2S1', $schoolUserID) != "") ? getFiled('Q6F2S1', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F2S2', $schoolUserID) != "") ? getFiled('Q6F2S2', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F4S3', $schoolUserID) != "") ? getFiled('Q6F4S3', $schoolUserID) : "N/A"; ?> </td>
              </tr>
              <tr>
                <td> Instant Noodles like
                  Knorr,
                  Cup-a-noodles, Top
                  Ramen, Wai-wai,
                  Yippee, Foodles,
                  Maggi, etc </td>
                <td><?php echo (getFiled('Q6F3S1', $schoolUserID) != "") ? getFiled('Q6F3S1', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F3S2', $schoolUserID) != "") ? getFiled('Q6F3S2', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F3S3', $schoolUserID) != "") ? getFiled('Q6F3S3', $schoolUserID) : "N/A"; ?> </td>
              </tr>
              <tr>
                <td> Potato fries and
                  burgers </td>
                <td><?php echo (getFiled('Q6F4S1', $schoolUserID) != "") ? getFiled('Q6F4S1', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F4S2', $schoolUserID) != "") ? getFiled('Q6F4S2', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F4S3', $schoolUserID) != "") ? getFiled('Q6F4S3', $schoolUserID) : "N/A"; ?> </td>
              </tr>
              <tr>
                <td> Confectionery items
                  (chocolate, candies,
                  gums) </td>
                <td><?php echo (getFiled('Q6F5S1', $schoolUserID) != "") ? getFiled('Q6F5S1', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F5S2', $schoolUserID) != "") ? getFiled('Q6F5S2', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F5S3', $schoolUserID) != "") ? getFiled('Q6F5S3', $schoolUserID) : "N/A"; ?> </td>
              </tr>
              <tr>
                <td> Ice cream </td>
                <td><?php echo (getFiled('Q6F6S1', $schoolUserID) != "") ? getFiled('Q6F6S1', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F6S2', $schoolUserID) != "") ? getFiled('Q6F6S2', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F6S3', $schoolUserID) != "") ? getFiled('Q6F6S3', $schoolUserID) : "N/A"; ?> </td>
              </tr>
              <tr>
                <td> Carbonated beverages </td>
                <td><?php echo (getFiled('Q6F7S1', $schoolUserID) != "") ? getFiled('Q6F7S1', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F7S2', $schoolUserID) != "") ? getFiled('Q6F7S2', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F7S3', $schoolUserID) != "") ? getFiled('Q6F7S3', $schoolUserID) : "N/A"; ?> </td>
              </tr>
              <tr>
                <td> Sugar sweetened
                  non-carbonated
                  beverages </td>
                <td><?php echo (getFiled('Q6F8S1', $schoolUserID) != "") ? getFiled('Q6F8S1', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F8S2', $schoolUserID) != "") ? getFiled('Q6F8S2', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F8S3', $schoolUserID) != "") ? getFiled('Q6F8S3', $schoolUserID) : "N/A"; ?> </td>
              </tr>
              <tr>
                <td> Packaged/bottled
                  nimboo
                  paani/lassi/flavoured
                  milk </td>
                <td><?php echo (getFiled('Q6F9S1', $schoolUserID) != "") ? getFiled('Q6F9S1', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F9S2', $schoolUserID) != "") ? getFiled('Q6F9S2', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F9S3', $schoolUserID) != "") ? getFiled('Q6F9S3', $schoolUserID) : "N/A"; ?> </td>
              </tr>
              <tr>
                <td> Packaged/bottled
                  energy drinks </td>
                <td><?php echo (getFiled('Q6F10S1', $schoolUserID) != "") ? getFiled('Q6F10S1', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F10S2', $schoolUserID) != "") ? getFiled('Q6F10S2', $schoolUserID) : "N/A"; ?> </td>
                <td><?php echo (getFiled('Q6F10S3', $schoolUserID) != "") ? getFiled('Q6F10S3', $schoolUserID) : "N/A"; ?> </td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="form-group" id="Q7F1" style="display: block;">
          <label class="control-label"><span class="cube">4</span>Does your school serve traditional Indian snacks?</label>
          <ul class="list-inline">
            <p> <?php echo (getFiled('Q7F1', $schoolUserID) != "") ? (getFiled('Q7F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </ul>
        </div>
        <?php if(getFiled('Q7F1', $schoolUserID) == "Y"){ ?>
        <div class="form-group" id="traditional" style="display: block;">
          <label class="control-label"><span class="cube">4(a)</span>Please provide the details: </label>
          <table class="table table-bordered table-striped">
            <tr>
              <th>Traditional Indian snacks </th>
              <th> Number of servings sold when on the menu </th>
            </tr>
            <tr>
              <td> Samosas</td>
              <td><?php echo (getFiled('Q7F1S1', $schoolUserID) != "") ? getFiled('Q7F1S1', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> Idli/vada and sambhar</td>
              <td><?php echo (getFiled('Q7F1S2', $schoolUserID) != "") ? getFiled('Q7F1S2', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> Pav bhaji</td>
              <td><?php echo (getFiled('Q7F1S3', $schoolUserID) != "") ? getFiled('Q7F1S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> Momos</td>
              <td><?php echo (getFiled('Q7F1S4', $schoolUserID) != "") ? getFiled('Q7F1S4', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> Others</td>
              <td><?php echo (getFiled('Q7F1S5', $schoolUserID) != "") ? getFiled('Q7F1S5', $schoolUserID) : "N/A"; ?></td>
            </tr>
          </table>
        </div>
        <div class="form-group" id="Q7F2S1" style="display: block;">
          <label class="control-label">Please upload picture of traditional food items sol in canteen</label>
          <br>
          <table width="100%" class="question uploadedfiles">
            <thead>
              <tr>
                <th>image</th>
                <th>File name</th>
                <th>Download</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($midDayMeal as $f) { ?>
              <tr id="index<?php echo $f->id; ?>">
                <?php $name = str_replace(" ", "_", $f->name . "_Mid_Day_Meal_"); ?>
                <td><img src="<?php echo base_url('uploads/files/' . $f->file_name); ?>" style="height:100px;width:100px"></img></td>
                <td class="upload edit"><?php echo str_replace($name, "", $f->file_name); ?></td>
                <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $f->file_name; ?>" download="<?php echo $f->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
          <br>
          <br>
        </div>
        <div class="form-group" id="Q7F3S1" style="display: block;">
          <label class="control-label"><span class="cube">4(b)</span>Give descriptions for rare local snacks served in your school:</label>
          <br/>
          <?php echo (getFiled('Q7F3S1', $schoolUserID) != "") ? getFiled('Q7F3S1', $schoolUserID) : "N/A"; ?> <br>
        </div>
        <?php } ?>
        <div class="form-group" id="Q8F1" style="display: block;">
          <label class="control-label"><span class="cube">5</span>Doesyourschool serve traditional Indian  beverages?</label>
          <ul class="list-inline">
            <p> <?php echo (getFiled('Q8F1', $schoolUserID) != "") ? (getFiled('Q8F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </ul>
        </div>
        <?php if(getFiled('Q8F1', $schoolUserID) == "Y"){ ?>
        <div class="form-group" id="beverages" style="display: block;">
          <label class="control-label"><span class="cube">5(a)</span>Please provide details: </label>
          <table class="table table-bordered table-striped">
            <tr>
              <th>Traditional Indian beverages </th>
              <th> Number of servings sold  when on  the menu </th>
            </tr>
            <tr>
              <td> Nimboo Pani</td>
              <td><?php echo (getFiled('Q8F1S1', $schoolUserID) != "") ? getFiled('Q8F1S1', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> Sweet Lassi</td>
              <td><?php echo (getFiled('Q8F1S2', $schoolUserID) != "") ? getFiled('Q8F1S2', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> Salted  Butter Milk</td>
              <td><?php echo (getFiled('Q8F1S3', $schoolUserID) != "") ? getFiled('Q8F1S3', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> Aam Panna</td>
              <td><?php echo (getFiled('Q8F1S4', $schoolUserID) != "") ? getFiled('Q8F1S4', $schoolUserID) : "N/A"; ?> </td>
            </tr>
            <tr>
              <td> Others</td>
              <td><?php echo (getFiled('Q8F1S5', $schoolUserID) != "") ? getFiled('Q8F1S5', $schoolUserID) : "N/A"; ?></td>
            </tr>
          </table>
        </div>
        <?php }} ?>
        <div class="form-group">
          <label>
          <h6> Task 4: What kind  of food does your school promote?</h6>
          </label>
        </div>
        <div class="form-group">
          <label class="control-label"><span class="cube">6</span> Does the school distribute packaged food items as rewards during schools events?</label>
          <ul class="list-inline">
            <p> <?php echo (getFiled('Q9F1', $schoolUserID) != "") ? (getFiled('Q9F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
          </ul>
        </div>
      </div>
      <?php if(getFiled('Q9F1', $schoolUserID) == "Y"){ ?>
      <div class="form-group" id="Q9F2" style="display: block;">
        <label class="control-label"><span class="cube">6(a)</span>Please provide details: </label>
        <br/>
        <?php echo (getFiled('Q9F2', $schoolUserID) != "") ? getFiled('Q9F2', $schoolUserID) : "N/A"; ?> <br>
      </div>
      <div class="form-group" id="Q9F2" style="display: none;">
        <label class="control-label"><span class="cube">6(a)</span>Please provide details:</label>
        <?php echo (getFiled('Q9F2', $schoolUserID) != "") ? getFiled('Q9F2', $schoolUserID) : "N/A"; ?> <br>
      </div>
      <?php } ?>
      <div class="form-group">
        <label class="control-label"><span class="cube">7</span>Does the school distribute chocolates/similar
        products as refreshments during schools events?</label>
        <ul class="list-inline">
          <p> <?php echo (getFiled('Q10F1', $schoolUserID) != "") ? (getFiled('Q10F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </ul>
      </div>
      <?php if(getFiled('Q10F1', $schoolUserID) == "Y"){ ?>
      <div class="form-group" id="Q10F2" style="display: block;">
        <label class="control-label"><span class="cube">7(a)</span>Please provide the names: </label>
        <?php echo (getFiled('Q10F2', $schoolUserID) != "") ? getFiled('Q10F2', $schoolUserID) : "N/A"; ?>
        <!--<textarea type="text" id="Q10F2" rows="5" name="Q10F2" placeholder="" value=""></textarea>-->
        <br>
      </div>
      <?php } ?>
      <div class="form-group">
        <label class="control-label"><span class="cube">8</span>Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?</label>
        <ul class="list-inline">
          <p> <?php echo (getFiled('Q11F1', $schoolUserID) != "") ? (getFiled('Q11F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </ul>
      </div>
      <?php if(getFiled('Q11F1', $schoolUserID) == "Y"){ ?>
      <div class="form-group" id="Q11F2" style="display: block;">
        <label class="control-label"><span class="cube">8(a)</span> Please provide the names of sponsors:</label>
        <br/>
        <?php echo (getFiled('Q11F2', $schoolUserID) != "") ? getFiled('Q11F2', $schoolUserID) : "N/A"; ?>
        <!--<textarea type="text" id="Q11F2" rows="5" name="Q11F2" placeholder="asdfgh" value=""></textarea>-->
        <br>
      </div>
      <div class="form-group" id="Q11F3" style="display: block;">
        <label class="control-label"><span class="cube">8(b)</span>Are their banners, brochures, hoardings, stalls etc. put up during the events?</label>
        <ul class="list-inline">
          <p> <?php echo (getFiled('Q11F3', $schoolUserID) != "") ? (getFiled('Q11F3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </ul>
      </div>
      <?php } ?>
    </form>
  </div>
  <div class="form-group">
    <label>Please upload pictures of events sponsored by UPPF (ultra-processed packaged food) companies</label>
    <br>
    Please upload all supporting documents related to this section here. Note: files must be in one of the
    following formats: PDF Document (.pdf), Word Document .doc, .docx), Image File (.jpg, .jpeg). File size per document should not exceed <strong>100 KB.</strong><br>
    <br>
    <br>
  </div>
  <?php
    if (!empty($food_gsp_audit)) {
        ?>
  <table width="100%" class="table">
    <thead>
      <tr>
        <th>image</th>
        <th>File name</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($food_gsp_audit as $a) {?>
      <tr>
        <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
        <td><?php echo str_replace(str_replace(' ', '_', $school->name."_Audit_Team_doing_Survey_"), " ", $a->file_name);   ?></td>
        <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php } else { ?>
  <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
  <?php } ?>
  <div class="form-group">
    <label>
    <h6> Task 5: School Initiatives</h6>
    </label>
  </div>
  <div class="form-group">
    <label class="control-label"><span class="cube">9</span> Does your school measure height and weight  of all the students?</label>
    <ul class="list-inline">
      <p> <?php echo (getFiled('Q12F1', $schoolUserID) != "") ? (getFiled('Q12F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </ul>
  </div>
  <?php if(getFiled('Q12F1', $schoolUserID) == "Y"){ ?>
  <div class="form-group" id="Q12F2" style="display:block;">
    <label class="control-label"><span class="cube">9(a)</span>How regularly is height and weight of the students measured?</label>
    <div class="form-group">
      <p>
        <?php
                if (getFiled('Q12F2', $schoolUserID) == 1):
                    echo "Monthly";
                elseif (getFiled('Q12F2', $schoolUserID) == 2):
                    echo "Quarterly";
                elseif (getFiled('Q12F2', $schoolUserID) == 3):
                    echo "Bi-annually";
                elseif (getFiled('Q12F2', $schoolUserID) == 4):
                    echo "Annually";
                endif;
                ?>
      </p>
      </ul>
    </div>
  </div>
  <?php } ?>
  <div class="form-group">
    <label class="control-label"><span class="cube">10</span>Is cooking part of  any regular subjects or extracurricular activities?</label>
    <ul class="list-inline">
      <p> <?php echo (getFiled('Q13F1', $schoolUserID) != "") ? (getFiled('Q13F1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
    </ul>
  </div>
  <?php if(getFiled('Q13F1', $schoolUserID) == "Y"){ ?>
  <div class="form-group" id="Q13F2" style="display:block">
    <label for="username" class="control-label"><span class="cube">10(a)</span>If  yes, please share the details</label>
    <br/>
    <?php echo (getFiled('Q13F2', $schoolUserID) != "") ? getFiled('Q13F2', $schoolUserID) : "N/A"; ?> </div>
  <?php } ?>
  <div class="form-group">
    <label class="control-label">Please upload pictures your Audit Team doing the survey</label>
    <br>
    <br>
    Please upload all supporting documents related to this section Note: files must be in one of the
    following formats: PDF Document .pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg). File
    size per document should not  exceed <strong>100 KB.</strong><br>
    <div class="clearfix"> &nbsp; </div>
    <br>
    <br>
  </div>
  <div class="clearfix">&nbsp;</div>
  <?php
     if (!empty($uppc)) {
        ?>
  <table width="100%" class="table">
    <thead>
      <tr>
        <th>image</th>
        <th>File name</th>
        <th>Download</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($uppc as $a) {?>
      <tr>
        <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
        <td><?php echo str_replace(str_replace(' ', '_', $school->name."_UPPF_"), " ", $a->file_name);   ?></td>
        <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php } else { ?>
  <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
  <?php } ?>
  <div class="text-center"> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/energy/' . $id) ?>">PREVIOUS</a> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/land/' . $id) ?>">NEXT</a> </div>
</div>
<?php $this->load->view('admin/survey/footer'); ?>
