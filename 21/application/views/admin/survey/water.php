<?php $this->load->view('admin/survey/header'); ?>

<div class="container">
  <div class="content-form">
    <div class="intro">
      <h1>WATER <span class="h5">(<?php echo $school->name;
?>)</span></h1>
      <div class="video"><a class="lptext" href="#" data-toggle="modal" data-target="#videoModal"><!--<img src="http://greenschoolsprogramme.org/audit2015/upload/templates/tfr_responsive/images/video-icon.png" style="width: 45px; height: 40px; margin-top:47px;">--></a></div>
    </div>
    <br>
    To understand water, it is important to know the source of water in your school premise. As you know, most
    cities in India have to deal with depleting water supply, marked by falling ground water levels, vanishing water
    bodies, severe pollution and urban floods. With their own supplies drying up, cities are forced to source water
    from further and further away. This is expensive. The questions below will help students to understand where
    their water is coming from – at a cost. <br>
    <br>
    <strong>The unit of measurement to be used in the Water section is Litre (L).</strong> <br>
    <br>
    <form action="http://localhost/gsp-portal-new/water/set" id="water" method="post" accept-charset="utf-8">
      <div class="form-group">
        <label>
        <h6> Task 1: Choose your Water Audit Team</h6>
        </label>
        <br>
        Before you start, you must put together a team. An ideal team would consist of one teacher (Science or
        Social Science) to guide you during the audit. You would also require the help of the administrative staff
        of your school and other staff, such as the plumber, electrician and other maintenance staff. And, most
        importantly, five to 10 of your schoolmates </div>
      <div class="form-group">
        <label class="control-label">Teachers (maximum of three teachers can be part of the team):</label>
        <table class="table table-bordered table-striped">
          <tr>
            <th>Sr.No </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Email ID </th>
          </tr>
          <tr>
            <td>1</td>
            <td><?php echo (getFiled('Q1W1S1', $schoolUserID) != "") ? getFiled('Q1W1S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q1W1S3', $schoolUserID) != "") ? getFiled('Q1W1S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q1W1S2', $schoolUserID) != "") ? getFiled('Q1W1S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>2</td>
            <td><?php echo (getFiled('Q1W2S1', $schoolUserID) != "") ? getFiled('Q1W2S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q1W2S3', $schoolUserID) != "") ? getFiled('Q1W2S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q1W3S1', $schoolUserID) != "") ? getFiled('Q1W3S1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>3</td>
            <td><?php echo (getFiled('Q1W3S1', $schoolUserID) != "") ? getFiled('Q1W3S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q1W3S3', $schoolUserID) != "") ? getFiled('Q1W3S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q1W3S2', $schoolUserID) != "") ? getFiled('Q1W3S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </div>
      <div class="form-group">
        <label class="control-label">Administrative staff (maximum of five staff can be part of the team):</label>
        <table class="table table-bordered table-striped">
          <tr>
            <th>Sr.No </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Email ID </th>
          </tr>
          <tr>
            <td>1</td>
            <td><?php echo (getFiled('Q2W1S1', $schoolUserID) != "") ? getFiled('Q2W1S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q2W1S2', $schoolUserID) != "") ? getFiled('Q2W1S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q2W1S3', $schoolUserID) != "") ? getFiled('Q2W1S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>2</td>
            <td><?php echo (getFiled('Q2W2S1', $schoolUserID) != "") ? getFiled('Q2W2S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q2W2S3', $schoolUserID) != "") ? getFiled('Q2W2S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q2W2S2', $schoolUserID) != "") ? getFiled('Q2W2S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>3</td>
            <td><?php echo (getFiled('Q2W3S1', $schoolUserID) != "") ? getFiled('Q2W3S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q2W3S3', $schoolUserID) != "") ? getFiled('Q2W3S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q2W3S2', $schoolUserID) != "") ? getFiled('Q2W3S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>4</td>
            <td><?php echo (getFiled('Q2W4S1', $schoolUserID) != "") ? getFiled('Q2W4S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q2W4S3', $schoolUserID) != "") ? getFiled('Q2W4S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q2W4S2', $schoolUserID) != "") ? getFiled('Q2W4S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>5</td>
            <td><?php echo (getFiled('Q2W5S1', $schoolUserID) != "") ? getFiled('Q2W5S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q2W5S3', $schoolUserID) != "") ? getFiled('Q2W5S3', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q2W5S2', $schoolUserID) != "") ? getFiled('Q2W5S2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </div>
      <div class="form-group">
        <label class="control-label">Students (maximum of ten students can be part of the team):</label>
        <table class="table table-bordered table-striped">
          <tr>
            <th>Sr.No </th>
            <th> First Name </th>
            <th> Last Name </th>
            <th> Grade </th>
          </tr>
          <tr>
            <td>1</td>
            <td><?php echo (getFiled('Q3W1S1', $schoolUserID) != "") ? getFiled('Q3W1S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q3W1S2', $schoolUserID) != "") ? getFiled('Q3W1S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q3W1S3', $schoolUserID) != "") ? getFiled('Q3W1S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>2</td>
            <td><?php echo (getFiled('Q3W2S1', $schoolUserID) != "") ? getFiled('Q3W2S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q3W2S2', $schoolUserID) != "") ? getFiled('Q3W2S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q3W2S3', $schoolUserID) != "") ? getFiled('Q3W2S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>3</td>
            <td><?php echo (getFiled('Q3W3S1', $schoolUserID) != "") ? getFiled('Q3W3S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q3W3S2', $schoolUserID) != "") ? getFiled('Q3W3S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q3W3S3', $schoolUserID) != "") ? getFiled('Q3W3S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>4</td>
            <td><?php echo (getFiled('Q3W4S1', $schoolUserID) != "") ? getFiled('Q3W4S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q3W4S2', $schoolUserID) != "") ? getFiled('Q3W4S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q3W4S3', $schoolUserID) != "") ? getFiled('Q3W4S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>5</td>
            <td><?php echo (getFiled('Q3W5S1', $schoolUserID) != "") ? getFiled('Q3W5S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q3W5S2', $schoolUserID) != "") ? getFiled('Q3W5S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q3W5S3', $schoolUserID) != "") ? getFiled('Q3W5S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>6</td>
            <td><?php echo (getFiled('Q3W6S1', $schoolUserID) != "") ? getFiled('Q3W6S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q3W6S2', $schoolUserID) != "") ? getFiled('Q3W6S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q3W6S3', $schoolUserID) != "") ? getFiled('Q3W6S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>7</td>
            <td><?php echo (getFiled('Q3W7S1', $schoolUserID) != "") ? getFiled('Q3W7S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q3W7S2', $schoolUserID) != "") ? getFiled('Q3W7S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q3W7S3', $schoolUserID) != "") ? getFiled('Q3W7S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>8</td>
            <td><?php echo (getFiled('Q3W8S1', $schoolUserID) != "") ? getFiled('Q3W8S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q3W8S2', $schoolUserID) != "") ? getFiled('Q3W8S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q3W8S3', $schoolUserID) != "") ? getFiled('Q3W8S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>9</td>
            <td><?php echo (getFiled('Q3W9S1', $schoolUserID) != "") ? getFiled('Q3W9S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q3W9S2', $schoolUserID) != "") ? getFiled('Q3W9S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q3W9S3', $schoolUserID) != "") ? getFiled('Q3W9S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td>10</td>
            <td><?php echo (getFiled('Q3W10S1', $schoolUserID) != "") ? getFiled('Q3W10S1', $schoolUserID) : "N/A"; ?></td>
            <td><?php echo (getFiled('Q3W10S2', $schoolUserID) != "") ? getFiled('Q3W10S2', $schoolUserID) : "N/A"; ?> </td>
            <td><?php echo (getFiled('Q3W10S3', $schoolUserID) != "") ? getFiled('Q3W10S3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
      </div>
      <div class="form-group">
        <label>
        <div class="question-text">
          <h6> Task 2: How much water does your school use?</h6>
          <p> To find total consumption, monitor water consumption over a period of three working days, spread
            over one month and take the average.The observations should be carried out when more than 90% of
            school strength is present</p>
          <p> For example: you can monitor the water consumption on August 5, August 15 and August 25. Add all
            three total consumptions and then divide it with number of days of observation (that is three
            days). You will get an average per day water consumption.</p>
          <p><strong>To collect data: </strong><a class="kplink" href="http://www.greenschoolsprogramme.org/knowledge-bank/water/" target="_blank"> </a></p>
          <p><strong>The bill method:</strong> If the school’s water meter is monitored regularly—water bills
            by the government/municipality state the actual amount used—students can simply compile bills to
            assess total consumption.</p>
          <p><strong>Monitoring overhead tanks:</strong> If the bills are irregular and incorrect, then
            monitor the overhead tanks. Note the difference in levels of water in your overhead tank between
            the beginning and the end of the day. Ensure that the tanks are full when the day begins. Check
            the water level when school is over by noting the difference in levels of water in your overhead
            tank between beginning and end of a day. Estimate consumption.</p>
          <p><strong>Using the motor method:</strong> If your school uses groundwater, take a bucket and know
            its measurement. Then switch on the underground-water pump. Let the water run out of the
            hosepipe into the bucket. Check how long it takes to fill up the bucket. You can now calculate
            the flow of water in litres per minute. Find out (from the gardener or other administrative
            staff) the number of hours the pump motor runs per day. Multiply the number of hours the motor
            runs by 60 to get the number of minutes the motor runs. Multiply the number of minutes the motor
            is run by how much water comes out from the hose pipe in a minute. The administrative staff and
            the plumber would be helpful in gauging the above. Conduct an audit for two or three days and
            then take an average to find the total consumption.</p>
        </div>
        </label>
      </div>
      <div class="question-text"><span class="cube">1</span> Calculate your school’s water consumption, per activity:
        <p>&nbsp; </p>
        <p><strong>&nbsp;To collect data:</strong></p>
        <p> The school will use a glass (250 ml) for drinking during the audit period; they should know the volume
          of flush tank (if they have a flush) or volume of bucket they are using for washing clothes, etc.</p>
        <p> To measure total water used in Kitchen, first measure the quantity of water (in litres) that could be
          used, before commencing the activity. Example: Use buckets, utensils, jars of known volume. Please
          monitor over a period of 15 working days.</p>
        <p><strong>Gardening:</strong> To measure total water used in Gardening, first find out what is the method
          of watering garden.</p>
        <ul>
          <li> If water from water storage tank is used with hose pipes then measure the capacity of storage tank.
            Fill the storage tank before watering session. After watering the plants, measure the water left in
            the tank. Subtract the quantity of water left in the tank by total storage capacity of the tank.&nbsp; </li>
          <li> If garden is watered manually with buckets then measure the capacity of the bucket and multiply by
            number of times the bucket is filled to water plants. </li>
          <li> If sprinkler irrigation is used to water garden, then measure the quantity of water released by the
            sprinklers and multiply it by the time the sprinkler system &nbsp;works.&nbsp; </li>
        </ul>
      </div>
      <div class="form-group">
        <label class="control-label"><span class="cube">1</span>Total water consumption of your school</label>
        <table class="table table-bordered table-striped">
          <tr>
            <th> Activity </th>
            <th>Total Quantity (litres per day) </th>
          </tr>
          <tr>
            <td> Drinking </td>
            <td><?php echo (getFiled('Q4W1', $schoolUserID) != "") ? getFiled('Q4W1', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Toilet flushing</td>
            <td><?php echo (getFiled('Q4W2', $schoolUserID) != "") ? getFiled('Q4W2', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Personal cleaning </td>
            <td><?php echo (getFiled('Q4W3', $schoolUserID) != "") ? getFiled('Q4W3', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Washing clothes</td>
            <td><?php echo (getFiled('Q4W4', $schoolUserID) != "") ? getFiled('Q4W4', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Cooking</td>
            <td><?php echo (getFiled('Q4W5', $schoolUserID) != "") ? getFiled('Q4W5', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Cleaning Utensils</td>
            <td><?php echo (getFiled('Q4W6', $schoolUserID) != "") ? getFiled('Q4W6', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Washing Vegetables</td>
            <td><?php echo (getFiled('Q4W7', $schoolUserID) != "") ? getFiled('Q4W7', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Mopping floors</td>
            <td><?php echo (getFiled('Q4W8', $schoolUserID) != "") ? getFiled('Q4W8', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Gardening</td>
            <td><?php echo (getFiled('Q4W9', $schoolUserID) != "") ? getFiled('Q4W9', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Others</td>
            <td><?php echo (getFiled('Q4W10', $schoolUserID) != "") ? getFiled('Q4W10', $schoolUserID) : "N/A"; ?> </td>
          </tr>
          <tr>
            <td> Total</td>
            <td><?php echo (getFiled('Q4W11', $schoolUserID) != "") ? getFiled('Q4W11', $schoolUserID) : "N/A"; ?> </td>
          </tr>
        </table>
        <!--
                <div class="form-group row">
                    <div class="col-xs-3">
                        <label class="text-gray">Service Area on ground</label>
                    </div>
                    <div class="col-xs-5">
                        <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()"
                               id="Q4W6" type="number" min="0" name="Q4W6"
                               placeholder="3"
                               value=""/>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-xs-3">
                        <label class="text-gray">Roof and terrace area</label>
                    </div>
                    <div class="col-xs-5">
                        <input class="form-control space-textbox" onkeyup="WaterConsumption()" onchange="WaterConsumption()"
                               id="Q4W7" type="number" min="0" name="Q4W7"
                               placeholder="4"
                               value=""/>
                    </div>
                </div>
                -->
      </div>
      <div class="form-group">
        <label>
        <h6>Task 3: What Are The Sources, Supply and Storage of Water in your School? </h6>
        </label>
        <p> To understand water, it is important to know the source of water in your school premises. As you know,
          most cities in India have to deal with depleting water supply, marked by falling ground water levels,
          vanishing water bodies, severe pollution and urban floods. With their own supplies drying up, cities are
          forced to source water from further and further away. This is expensive.<br>
        </p>
        <p> The questions below will help students to understand where their water is coming from – at a cost. </p>
      </div>
      <div class="form-group">
        <label class="control-label"><span class="cube">2</span>Where does the water your school uses, come from?
        (please tick the correct options):</label>
        <div class="form-group">
          <ul>
            <?php
                        if (getFiled('Q5W1', $schoolUserID) == 1):
                            echo "Ground water";
                            echo "<br/>";
                        endif;
                        if (getFiled('Q5W2', $schoolUserID) == 1):
                            echo "Surface water";
                            echo "<br/>";
                        endif;
                        if (getFiled('Q5W3', $schoolUserID) == 1):
                            echo "Rain water";
                            echo "<br/>";
                        endif;
                        if (getFiled('Q5W4', $schoolUserID) == 1):
                            echo "Recycled waste water";
                        endif;
                        ?>
          </ul>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label"> <span class="cube">3</span>Who supplies the water in your school? (please tick
        the correct options):</label>
        <br>
        <ul class="list-unstyled">
          <?php
                    if (getFiled('Q6W1', $schoolUserID) == 1):
                        echo "Municipality";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q6W2', $schoolUserID) == 1):
                        echo "Panchayat";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q6W3', $schoolUserID) == 1):
                        echo "Public Health Engineering Department (PHED)";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q6W4', $schoolUserID) == 1):
                        echo "Private supplier";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q6W5', $schoolUserID) == 1):
                        echo "School’s own supply (bore well, rainwater harvesting facility, etc)";
                    endif;
                    ?>
        </ul>
      </div>
      <div class="form-group">
        <label class="control-label"> <span class="cube">4</span>Does your school get daily water supply?</label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q7W1', $schoolUserID) != "") ? (getFiled('Q7W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <?php if(getFiled('Q7W1', $schoolUserID) == "Y"){ ?>
      <div class="form-group" id="Q7W2" style="display: block;">
        <label class="control-label"> <span class="cube">4(a)</span>Does your school get daily water supply?</label>
        <div class="form-group">
          <ul class="list-unstyled">
            <p>
              <?php
                            if (getFiled('Q7W2', $schoolUserID) == 1):
                                echo "≤1 hours";
                            elseif (getFiled('Q7W2', $schoolUserID) == 2):
                                echo "2-6 hours";
                            elseif (getFiled('Q7W2', $schoolUserID) == 3):
                                echo "7-12 hours";
                            elseif (getFiled('Q7W2', $schoolUserID) == 4):
                                echo "13-18 hours";
                            elseif (getFiled('Q7W2', $schoolUserID) == 5):
                                echo "19-24 hours";
                            endif;
                            ?>
            </p>
          </ul>
        </div>
      </div>
      <?php }else{ ?>
      <div class="form-group" id="Q7W3">
        <label class="control-label"> <span class="cube">4(b)</span>Does your school get daily water supply?</label>
        <div class="form-group">
          <ul>
            <p>
              <?php
                            if (getFiled('Q7W3', $schoolUserID) == 1):
                                echo "≤1 day";
                            elseif (getFiled('Q7W3', $schoolUserID) == 2):
                                echo "2 days in a week";
                            elseif (getFiled('Q7W3', $schoolUserID) == 3):
                                echo "3 days in a week";
                            elseif (getFiled('Q7W3', $schoolUserID) == 4):
                                echo "Every alternate day in a week";

                            endif;
                            ?>
            </p>
          </ul>
        </div>
      </div>
      <?php } ?>
      <div class="form-group">
        <label>
        <h6>Task 4: What are the water conservation practices followed in your school?</h6>
        </label>
        <div class="form-group">
          <label class="control-label"><span class="cube">5</span> What are the water conservation
          practices your school follows </label>
          <table class="table table-bordered table-striped">
            <tr>
              <th> Activity </th>
              <th>Total Quantity (litres per day) </th>
            </tr>
            <tr>
              <td> Does your school have any water and
                sanitation policy?</td>
              <td><p> <?php echo (getFiled('Q8W1S1', $schoolUserID) != "") ? (getFiled('Q8W1S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>If your school has an eco-club, do
                they have water component?</td>
              <td><p> <?php echo (getFiled('Q8W1S2', $schoolUserID) != "") ? (getFiled('Q8W1S2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td> Do all tanks in the school have
                float valves installed to stop overflow? </td>
              <td><p> <?php echo (getFiled('Q8W1S3', $schoolUserID) != "") ? (getFiled('Q8W1S3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>Do the drinking water points have
                spill proof taps to check overflow?</td>
              <td><p> <?php echo (getFiled('Q8W1S4', $schoolUserID) != "") ? (getFiled('Q8W1S4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td> Does your school use appliances
                with a quick-wash setting?</td>
              <td><p> <?php echo (getFiled('Q8W1S5', $schoolUserID) != "") ? (getFiled('Q8W1S5', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td> Are dual flush systems installed in
                the toilets?</td>
              <td><p> <?php echo (getFiled('Q8W1S6', $schoolUserID) != "") ? (getFiled('Q8W1S6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td> Does your school encourage bottled
                water for drinking water?</td>
              <td><p> <?php echo (getFiled('Q8W1S7', $schoolUserID) != "") ? (getFiled('Q8W1S7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td> Does your school grow local plant
                species which require limited amount of water to grow?</td>
              <td><p> <?php echo (getFiled('Q8W1S8', $schoolUserID) != "") ? (getFiled('Q8W1S8', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>Has your school initiated any water
                conservation steps in the school or outside, in the past one year?</td>
              <td><p> <?php echo (getFiled('Q8W1S9', $schoolUserID) != "") ? (getFiled('Q8W1S9', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>Does your school use a drip or
                irrigation system?</td>
              <td><p> <?php echo (getFiled('Q8W1S10', $schoolUserID) != "") ? (getFiled('Q8W1S10', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>Any other step taken for water
                conservation? (if Yes, please specify)</td>
              <td><p> <?php echo (getFiled('Q8W1S11', $schoolUserID) != "") ? (getFiled('Q8W1S11', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="form-group">
        <label>Upload supporting documents</label>
        <br>
        <label style="font-color: white !important; ">Please upload all supporting documents related
        to this section here. Note: files must be in one of the following formats: PDF Document
        (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg)</label>
        <br>
        <br>
      </div>
      <div class="clearfix">&nbsp;</div>
      <?php if (!empty($task4supporting)) { ?>
      <table width="100%" class="table">
        <thead>
          <tr>
            <th>image</th>
            <th>File name</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($task4supporting as $a) { ?>
          <tr>
            <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
            <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Task_4_Supporting_docs_"), " ", $a->file_name); ?></td>
            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?>
      <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
      <?php } ?>
      <div class="clearfix">&nbsp;</div>
      <div class="form-group">
        <label>
        <h6>Task 5: Does your school harvest rainwater? </h6>
        </label>
        <br>
        Rainfall (precipitation) is the primary source of freshwater on land. In this section, you
        will find out how much rainwater your school can catch, and how much your school can
        harvest. Rainwater harvesting is a traditional, time-tested method of collecting rainwater
        and using it to recharge groundwater or storing it for other uses.<br>
        To know the types of catchment </div>
      <div class="form-group">
        <label><span class="cube">6</span>Do you have Rainwater harvesting (RWH) system in your
        school?</label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q8W2', $schoolUserID) != "") ? (getFiled('Q8W2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <?php if(getFiled('Q5W3', $schoolUserID) == 1){ ?>
      <div class="form-group" id="Q8W2S1" style="display:block;">
        <label><span class="cube">6(a)</span>Does your school harvest different catchments? </label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q8W2S1', $schoolUserID) != "") ? (getFiled('Q8W2S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <div class="form-group" id="Q8W2S1S1" style="display: block;">
        <label><span class="cube">6(a)(1)</span>Which is the catchment area being harvested by your
        school? </label>
        <div class="form-group">
          <ul>
            <?php
                        if (getFiled('Q8W2S1S1', $schoolUserID) == 1):
                            echo "Rooftop";
                        elseif (getFiled('Q8W2S1S1', $schoolUserID) == 2):
                            echo "Paved";
                        elseif (getFiled('Q8W2S1S1', $schoolUserID) == 3):
                            echo "Unpaved";
                        elseif (getFiled('Q8W2S1S1', $schoolUserID) == 4):
                            echo "Rooftop + paved";
                        elseif (getFiled('Q8W2S1S1', $schoolUserID) == 5):
                            echo "Paved + unpaved";
                        elseif (getFiled('Q8W2S1S1', $schoolUserID) == 6):
                            echo "Rooftop + unpave";
                        elseif (getFiled('Q8W2S1S1', $schoolUserID) == 7):
                            echo "Rooftop + paved + unpaved";

                        endif;
                        ?>
          </ul>
        </div>
      </div>
      <div class="form-group" id="Q8W2S2" style="display:block;">
        <label><span class="cube">6(b)</span> How does your school harvest rainwater? </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S2', $schoolUserID) == 1):
                        echo "By storing";
                    elseif (getFiled('Q8W2S2', $schoolUserID) == 2):
                        echo "By recharging groundwater";
                    elseif (getFiled('Q8W2S2', $schoolUserID) == 3):
                        echo "Combination of both";
                    endif;
                    ?>
        </div>
      </div>
      <?php if(getFiled('Q8W2S2', $schoolUserID) == 1 || getFiled('Q8W2S2', $schoolUserID) == 3){ ?>
      <div class="form-group" id="Q8W2S2S1">
        <label><span class="cube">6(b)(1)</span>If your school only stores rainwater, please select
        the use of stored rainwater: </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S2S1', $schoolUserID) == 1):
                        echo "Drinking";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S2', $schoolUserID) == 1):
                        echo "Gardening";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S3', $schoolUserID) == 1):
                        echo "Mopping";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S4', $schoolUserID) == 1):
                        echo " Toilets";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S5', $schoolUserID) == 1):
                        echo "Washing vehicles";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S6', $schoolUserID) == 1):
                        echo "Kitchen (Cooking/Washing vegetables and utensils)";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S7', $schoolUserID) == 1):
                        echo "Shower, Brushing teeth, Bathing, Hand washing";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S8', $schoolUserID) == 1):
                        echo "Swimming Pool";
                    endif;
                    if (getFiled('Q8W2S2S9', $schoolUserID) == 1):
                        echo "Fire fighting";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S10', $schoolUserID) == 1):
                        echo "Desert coolers";
                    endif;
                    ?>
        </div>
      </div>
      <div class="form-group" id="Q8W2S2S2">
        <label><span class="cube">6(b)(2)</span> Does your school have rainwater storage tank? </label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q8W2S2S2', $schoolUserID) != "") ? (getFiled('Q8W2S2S2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <?php if(getFiled('Q8W2S2S2', $schoolUserID) == "Y"){ ?>
      <div class="form-group" id="Q8W2S2S3">
        <label><span class="cube">6(b)(2) A</span>If yes, please provide: </label>
        <div class="form-group">
          <label class="text-gray"> Total number of storage tank (litres): </label>
          <br/>
          <?php echo (getFiled('Q8W2S2S3', $schoolUserID) != "") ? getFiled('Q8W2S2S3', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group" id="Q8W2S2S4">
        <label><span class="cube">6(b)(2) B</span>If yes, please provide: </label>
        <div class="form-group">
          <label class="radio-inline text-gray"> Total capacity of each storage tank
          (litres): </label>
          <br/>
          <?php echo (getFiled('Q8W2S2S4', $schoolUserID) != "") ? getFiled('Q8W2S2S4', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group" id="Q8W2S2S5">
        <label><span class="cube">6(b)(2) C</span>Location of tanks: </label>
        <div class="form-group">
          <ul>
            <?php
                        if (getFiled('Q8W2S2S5', $schoolUserID) == 1):
                            echo "Underground";
                        elseif (getFiled('Q8W2S2S5', $schoolUserID) == 2):
                            echo "Over ground";
                        elseif (getFiled('Q8W2S2S5', $schoolUserID) == 3):
                            echo "Semi underground";
                        elseif (getFiled('Q8W2S2S5', $schoolUserID) == 4):
                            echo "Over- ground + semi underground ";
                        elseif (getFiled('Q8W2S2S5', $schoolUserID) == 5):
                            echo "Underground + semi underground";
                        elseif (getFiled('Q8W2S2S5', $schoolUserID) == 6):
                            echo "Underground + Over- ground + semi underground ";

                        endif;
                        ?>
          </ul>
        </div>
      </div>
      <div class="form-group" id="Q8W2S2S6">
        <label><span class="cube">6(b)(2) D</span> Material options for tanks: </label>
        <div class="form-group">
          <ul>
            <?php
                        if (getFiled('Q8W2S2S6', $schoolUserID) == 1):
                            echo "PVC";
                        elseif (getFiled('Q8W2S2S6', $schoolUserID) == 2):
                            echo "RCC";
                        elseif (getFiled('Q8W2S2S6', $schoolUserID) == 3):
                            echo "Brick";
                        elseif (getFiled('Q8W2S2S6', $schoolUserID) == 4):
                            echo "Combination of PVC + RCC + brick ";


                        endif;
                        ?>
          </ul>
        </div>
      </div>
      <?php } ?>
      <div class="form-group" id="Q8W2S27">
        <label><span class="cube">6(b)(3)</span>Does your school have groundwater recharge
        structure? </label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q8W2S2S7', $schoolUserID) != "") ? (getFiled('Q8W2S2S7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <?php if(getFiled('Q8W2S2S7', $schoolUserID) == "Y"){ ?>
      <div class="form-group" id="Q8W2S2S8">
        <label><span class="cube">6(b)(3) i</span>If yes, please provide: </label>
        <div class="form-group">
          <label class="radio-inline text-gray"> Please share the total number of groundwater
          recharge structures </label>
          <br/>
          <?php echo (getFiled('Q8W2S2S8', $schoolUserID) != "") ? getFiled('Q8W2S2S8', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group" id="Q8W2S2S9">
        <label><span class="cube">6(b)(3) ii</span>Please tick the type of groundwater recharge
        structure used in your school: </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S2S91', $schoolUserID) == 1):
                        echo "Percolation pit/tank";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S92', $schoolUserID) == 1):
                        echo "Recharge through abandoned dug well";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S93', $schoolUserID) == 1):
                        echo "Recharge through abandoned tube well/bore well";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S94', $schoolUserID) == 1):
                        echo " Recharge pits";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S95', $schoolUserID) == 1):
                        echo "Recharge trenches";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S96', $schoolUserID) == 1):
                        echo "Recharge through ponds/water bodies";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S2S97', $schoolUserID) == 1):
                        echo "Soak pit";
                        echo "<br/>";
                    endif;
                    ?>
        </div>
      </div>
      <?php } ?>
      <div class="form-group" id="Q8W2S2S10">
        <label><span class="cube">6(b)(4)</span>If your school practices rainwater harvesting, then
        what is the ratio between storage and recharge </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S2S10', $schoolUserID) == 1):
                        echo "Storage = Recharge";
                    elseif (getFiled('Q8W2S2S10', $schoolUserID) == 2):
                        echo "Storage &gt; Recharge";
                    elseif (getFiled('Q8W2S2S10', $schoolUserID) == 3):
                        echo "Recharge &gt; Storage";
                    elseif (getFiled('Q8W2S2S10', $schoolUserID) == 4):
                        echo "Only recharge ";
                    elseif (getFiled('Q8W2S2S10', $schoolUserID) == 5):
                        echo "Only storage ";


                    endif;
                    ?>
        </div>
      </div>
      <?php } ?>
      <div class="form-group" id="Q8W2S3">
        <label><span class="cube">6(c)</span>How much area in your school is harvested? </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S4', $schoolUserID) == 1):
                        echo "10 to 20 per cent";
                    elseif (getFiled('Q8W2S4', $schoolUserID) == 2):
                        echo "21 to 30 per cent";
                    elseif (getFiled('Q8W2S4', $schoolUserID) == 3):
                        echo "31 to 40 per cent";
                    elseif (getFiled('Q8W2S4', $schoolUserID) == 4):
                        echo "41 to 50 per cente ";
                    elseif (getFiled('Q8W2S4', $schoolUserID) == 5):
                        echo "51 to 60 per cent";
                    elseif (getFiled('Q8W2S4', $schoolUserID) == 6):
                        echo "61 to 70 per cent";
                    elseif (getFiled('Q8W2S4', $schoolUserID) == 7):
                        echo "71 to 80 per cent";
                    elseif (getFiled('Q8W2S4', $schoolUserID) == 8):
                        echo " 81 to 90 per cent";
                    elseif (getFiled('Q8W2S4', $schoolUserID) == 9):
                        echo "91 to 100 per cent";


                    endif;
                    ?>
        </div>
      </div>
      <div class="form-group" id="Q8W2S4">
        <label><span class="cube">6(d)</span>Please select (from the list given below) the rainwater
        harvesting structures present in your school: </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S31', $schoolUserID) == 1):
                        echo "Conduits";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S32', $schoolUserID) == 1):
                        echo "Gutters";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S33', $schoolUserID) == 1):
                        echo "Filter unit";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S34', $schoolUserID) == 1):
                        echo " First flush";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S35', $schoolUserID) == 1):
                        echo "Storage tank";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S36', $schoolUserID) == 1):
                        echo "Collection sump";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S37', $schoolUserID) == 1):
                        echo "Pump unit";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S38', $schoolUserID) == 1):
                        echo "Recharge structure";
                        echo "<br/>";
                    endif;
                    ?>
        </div>
      </div>
      <?php } if(getFiled('Q8W2S33', $schoolUserID) == 1) { ?>
      <div class="form-group" id="Q8W2S4S1">
        <label><span class="cube">6(d)(1)</span> Where is your filter unit? </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S4S1', $schoolUserID) == 1):
                        echo "Before storage tank";
                    elseif (getFiled('Q8W2S4S1', $schoolUserID) == 2):
                        echo "Before recharge system";
                    elseif (getFiled('Q8W2S4S1', $schoolUserID) == 3):
                        echo "Before both storage tank and recharge systemt";
                    elseif (getFiled('Q8W2S4S1', $schoolUserID) == 4):
                        echo "We do not use filters";
                    endif;
                    ?>
        </div>
      </div>
      <div class="form-group" id="Q8W2S4S2">
        <label><span class="cube">6(d)(2)</span>Types of filter used in your school: </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S4S21', $schoolUserID) == 1):
                        echo "Sand gravel filter";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S4S22', $schoolUserID) == 1):
                        echo "Charcoal filter";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S4S23', $schoolUserID) == 1):
                        echo "Readymade on line filter";
                        echo "<br/>";
                    endif;
                    if (getFiled('Q8W2S4S24', $schoolUserID) == 1):
                        echo " Chemical used";
                        echo "<br/>";
                    endif;
                    ?>
        </div>
      </div>
      <?php } ?>
      <div class="form-group" id="Q8W2S5">
        <label><span class="cube">6(e)</span>Rate your catchment on cleanliness: </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S5', $schoolUserID) == 1):
                        echo "Good";
                    elseif (getFiled('Q8W2S5', $schoolUserID) == 2):
                        echo "Average";
                    elseif (getFiled('Q8W2S5', $schoolUserID) == 3):
                        echo "Poor";

                    endif;
                    ?>
        </div>
      </div>
      <br>
      <div class="form-group" id="file" style="display:block;">
        <label>Please upload a flow chart (hand drawn) of the wastewater treatment process.<br>
        <!--                    <button class="btn uploadbtn upload" data-id="Water Treatment Process" data-toggle="modal" data-target="#uploadModal" type="button">UPLOAD FILES
                                        </button>-->
        </label>
        <?php if (!empty($waterTreatment)) { ?>
        <table width="100%" class="table">
          <thead>
            <tr>
              <th>image</th>
              <th>File name</th>
              <th>Download</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($waterTreatment as $a) { ?>
            <tr>
              <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
              <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Water_Treatment_Process_"), " ", $a->file_name); ?></td>
              <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
        <?php } else { ?>
        <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
        <?php } ?>
      </div>
      <div class="form-group" id="Q8W2S61" style="display:block;">
        <label><span class="cube">6(f)</span>Does your school clean your catchment and system </label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q8W2S61', $schoolUserID) != "") ? (getFiled('Q8W2S61', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <div class="form-group" id="Q8W2S7" style="display: block;">
        <label><span class="cube">6(f)(1)</span>Please specify when does your school clean the
        catchment and RWH system? </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S7', $schoolUserID) == 1):
                        echo "Pre-monsoon";
                    elseif (getFiled('Q8W2S7', $schoolUserID) == 2):
                        echo "Post-monsoon";
                    elseif (getFiled('Q8W2S7', $schoolUserID) == 3):
                        echo "Do not follow any such pattern";

                    endif;
                    ?>
        </div>
      </div>
      <div class="form-group" id="Q8W2S8">
        <label><span class="cube">6(g)</span>Does your school monitor the rainwater harvesting
        structure for its efficiency? </label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q8W2S8', $schoolUserID) != "") ? (getFiled('Q8W2S8', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <div class="form-group" id="Q8W2S9" style="display: block;">
        <label><span class="cube">6(g)(1)</span>Please specify when does your school monitor the
        groundwater level? </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S9', $schoolUserID) == 1):
                        echo "Pre-monsoon";
                    elseif (getFiled('Q8W2S9', $schoolUserID) == 2):
                        echo "Post-monsoon";
                    elseif (getFiled('Q8W2S9', $schoolUserID) == 3):
                        echo "Do not follow any such pattern";

                    endif;
                    ?>
        </div>
      </div>
      <div class="form-group" id="Q8W2S10">
        <label><span class="cube">6(h)</span>What is the trend of groundwater level in your school
        across the year? </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S10', $schoolUserID) == 1):
                        echo "If there was a decrease, please specify";
                    elseif (getFiled('Q8W2S10', $schoolUserID) == 2):
                        echo "If there was an increase, please specify ";
                    elseif (getFiled('Q8W2S10', $schoolUserID) == 3):
                        echo "No change ";

                    endif;
                    ?>
        </div>
      </div>
      <?php if(getFiled('Q8W2S10', $schoolUserID) == 1){ ?>
      <div class="form-group" id="Q8W2S11" >
        <label><span class="cube">6(h)(1)</span>Please specify how much was the decrease? </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S11', $schoolUserID) == 1):
                        echo "Less than a meter annually";
                    elseif (getFiled('Q8W2S11', $schoolUserID) == 2):
                        echo "1-5 meter annually ";
                    elseif (getFiled('Q8W2S11', $schoolUserID) == 3):
                        echo "More than 5 meters annually ";

                    endif;
                    ?>
        </div>
      </div>
      <?php }elseif(getFiled('Q8W2S10', $schoolUserID) == 2){ ?>
      <div class="form-group" id="Q8W2S12">
        <label><span class="cube">6(h)(1)</span>Please specify how much was the increase? </label>
        <div class="form-group">
          <?php
                    if (getFiled('Q8W2S12', $schoolUserID) == 1):
                        echo "Less than a meter annually";
                    elseif (getFiled('Q8W2S12', $schoolUserID) == 2):
                        echo "1-5 meter annually ";
                    elseif (getFiled('Q8W2S12', $schoolUserID) == 3):
                        echo "More than 5 meters annually ";

                    endif;
                    ?>
        </div>
      </div>
      <?php } ?>
      <div class="form-group" id="Q8W2S13">
        <label><span class="cube">6(i)</span>If your school's RWH structure is more than a year old,
        is there any improvement in the groundwater quality after the implementation of the RWH
        structure?</label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q8W2S13', $schoolUserID) != "") ? (getFiled('Q8W2S13', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <div class="form-group" id="Q8W2S6" style="display:none;">
        <label><span class="cube">6(a)</span> Calculate your school’s rainwater harvesting potential
        (in litres).</label>
        <input class="form-control space-textbox" id="Q8W2S6A" type="number" min="0" name="Q8W2S6" placeholder="" value="">
      </div>
      <div class="form-group">
        <label>To calculate the maximum rainwater harvesting potential:</label>
        <br>
        <br>
        Area = length X breadth<br>
        Roof top potential (cu.m ) = Rooftop area (in sq m) x mm (if in mm then convert to m) of
        rainfall x 0.85<br>
        Paved potential (cu.m.) = Paved area (sq m) x mm (if in mm then convert to m) of rainfall x
        0.70<br>
        Unpaved potential (cu.m.) = Unpaved area (sq m) x mm (if in mm then convert to m) of
        rainfall x 0.30<br>
        <b>Maximum rainwater harvesting potential of the school</b>= Maximum Rooftop potential
        ___(cu.m) + Maximum Paved potential__ (cu.m) + Maximum Unpaved potential ______(cu.m)<br>
        Run-off coefficient is the amount of rainwater retained in an area and mainly dependent on
        roof type and catchment.<br>
        <div class="form-group ">
          <table class="table table-bordered col-xs-8">
            <thead>
              <tr>
                <td> Area</td>
                <td> Catchment Run-off coefficient</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td> Roof</td>
                <td> 0.85</td>
              </tr>
              <tr>
                <td> Paved area Driveways/courtyards, roads</td>
                <td> 0.70</td>
              </tr>
              <tr>
                <td> Unpaved area garden, playground</td>
                <td> 0.30</td>
              </tr>
            </tbody>
          </table>
          <br>
          Note: *For Average Rainfall Data refer to Knowledge Bank: <a class="kplink" href="&#10;http://www.greenschoolsprogramme.org/knowledge-bank/water/annexure-i/" target="_blank"> </a>www.greenschoolsprogramme.org<br>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label>
        <h6>Task 6: Are the plumbing and sanitation facilities in your school adequate?</h6>
        </label>
        <br>
        Hygiene and sanitation facilities are vitally important for a child’s health. Lack of these
        hampers attendance, especially of girls in senior grades. </div>
      <br>
      <div class="form-group">
        <label class="control-label"><span class="cube">7</span>Please share details about
        sanitation and hygiene practices in your school: </label>
        <div class="form-group">
          <table class="table table-bordered table-striped">
            <tr>
              <td> Does the school have separate toilets
                for males and females?</td>
              <td><p> <?php echo (getFiled('Q8W3S1', $schoolUserID) != "") ? (getFiled('Q8W3S1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>Are there sufficient toilets for women
                in your school?</td>
              <td><p> <?php echo (getFiled('Q8W3S2', $schoolUserID) != "") ? (getFiled('Q8W3S2', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td> Are there sufficient toilets for men in
                your school? </td>
              <td><p> <?php echo (getFiled('Q8W3S3', $schoolUserID) != "") ? (getFiled('Q8W3S3', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td>Are the toilets accessible and safe to
                use for children?</td>
              <td><p> <?php echo (getFiled('Q8W3S4', $schoolUserID) != "") ? (getFiled('Q8W3S4', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td> Are the toilets accessible and safe to
                use for differently abled children?</td>
              <td><p> <?php echo (getFiled('Q8W3S5', $schoolUserID) != "") ? (getFiled('Q8W3S5', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td> Are the toilets accessible and safe to
                use for differently abled staff (teaching and non-teaching)?</td>
              <td><p> <?php echo (getFiled('Q8W3S6', $schoolUserID) != "") ? (getFiled('Q8W3S6', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td> Are the toilets situated in the right
                location in terms of privacy and safety?</td>
              <td><p> <?php echo (getFiled('Q8W3S7', $schoolUserID) != "") ? (getFiled('Q8W3S7', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
            <tr>
              <td> Is there sufficient light during day
                time?</td>
              <td><p> <?php echo (getFiled('Q8W3S8', $schoolUserID) != "") ? (getFiled('Q8W3S8', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p></td>
            </tr>
          </table>
        </div>
      </div>
      <br>
      <div class="form-group">
        <label><span class="cube">8</span>How many drinking water taps do you have?</label>
        <br/>
        <?php echo (getFiled('Q9W1', $schoolUserID) != "") ? getFiled('Q9W1', $schoolUserID) : "N/A"; ?> </div>
      <br>
      <div class="form-group">
        <label><span class="cube">9</span>How many hand pumps do you have?</label>
        <br/>
        <?php echo (getFiled('Q10W1', $schoolUserID) != "") ? getFiled('Q10W1', $schoolUserID) : "N/A"; ?> </div>
      <br>
      <div class="form-group">
        <label><span class="cube">10</span>How many ablution taps (taps used for washing hands only)
        do you have?</label>
        <br/>
        <?php echo (getFiled('Q11W1', $schoolUserID) != "") ? getFiled('Q11W1', $schoolUserID) : "N/A"; ?> </div>
      <br>
      <!--div class="form-group">
<label><span class="cube">11</span>How many water closets (used for defecation and urination) do you have?</label>
<input class="form-control space-textbox" type="number" min="0" name="Q12W1" placeholder="" value=""/>
</div-->
      <br>
      <div class="form-group">
        <label class="control-label"><span class="cube">11</span>How many water closets (used for
        defecation and urination) do you have?</label>
        <div class="form-group row">
          <div class="col-xs-2">
            <label class="text-gray">Number of toilets</label>
          </div>
          <div class="col-xs-2">
            <label class="text-gray"> Girls</label>
            <br/>
            <?php echo (getFiled('Q13W1S1', $schoolUserID) != "") ? getFiled('Q13W1S1', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2">
            <label class="text-gray">Boys</label>
            <br/>
            <?php echo (getFiled('Q13W1S2', $schoolUserID) != "") ? getFiled('Q13W1S2', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2">
            <label class="text-gray">Common</label>
            <br/>
            <?php echo (getFiled('Q13W1S3', $schoolUserID) != "") ? getFiled('Q13W1S3', $schoolUserID) : "N/A"; ?> </div>
          <div class="col-xs-2">
            <label class="text-gray">Total</label>
            <br/>
            <?php echo (getFiled('Q13W1S4', $schoolUserID) != "") ? getFiled('Q13W1S4', $schoolUserID) : "N/A"; ?> </div>
        </div>
        <div class="form-group">
          <label><span class="cube">12</span>How many urinals (strictly used for urination only)
          do you have?</label>
          <br/>
          <?php echo (getFiled('Q14W1', $schoolUserID) != "") ? getFiled('Q14W1', $schoolUserID) : "N/A"; ?> </div>
        <div class="form-group">
          <label><span class="cube">13</span>How many other water outlets (example: taps in play
          fields, sprinklers, swimming pool) do you have?</label>
          <br/>
          <?php echo (getFiled('Q15W1', $schoolUserID) != "") ? getFiled('Q15W1', $schoolUserID) : "N/A"; ?> </div>
      </div>
      <div class="form-group">
        <label> Water supply and cleaning of toilets in your school: </label>
      </div>
      <div class="form-group">
        <label class="control-label"><span class="cube">14</span>Is there a water storage system in
        place to supply water in the toilets?</label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q16W1', $schoolUserID) != "") ? (getFiled('Q16W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label"><span class="cube">15</span>Is the water supply
        sufficient?</label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q21W1', $schoolUserID) != "") ? (getFiled('Q21W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label"><span class="cube">16</span>Are the toilets cleaned?</label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q18W1', $schoolUserID) != "") ? (getFiled('Q18W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <?php if(getFiled('Q18W1', $schoolUserID) == "Y"){ ?>
      <div class="form-group" id="Q18W2" style="display: block;">
        <label class="control-label"><span class="cube">16(a)</span>If yes, please
        specify</label>
        <div class="form-group">
          <?php
                    if (getFiled('Q18W2', $schoolUserID) == 1):
                        echo "Once a day";
                    elseif (getFiled('Q18W2', $schoolUserID) == 2):
                        echo "Twice a day";
                    elseif (getFiled('Q18W2', $schoolUserID) == 3):
                        echo "More than twice a day ";

                    endif;
                    ?>
        </div>
      </div>
      <?php } ?>
      <div class="form-group">
        <label>
        <h6>Task 7: Does your school reuse/recycle waste water? </h6>
        </label>
        <br>
        Water recycling is the process of treating waste or used water, in order to upgrade
        its quality, so that it can be used again. When water, once used for a particular
        purpose, is put to use again, it is then being reused. </div>
      <div class="form-group">
        <label class="control-label"><span class="cube">17</span>Does your school treat
        wastewater?</label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q19W1', $schoolUserID) != "") ? (getFiled('Q19W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <?php if(getFiled('Q19W1', $schoolUserID) == "Y"){ ?>
      <div class="form-group" id="Q20W1Q">
        <label class="control-label"><span class="cube">17(a)(i)</span>Where does the water get treated?</label>
        <div class="form-group">
          <?php
                    if (getFiled('Q19W11', $schoolUserID) == 1):
                        echo "Inside your school  )".", ";
					endif;	
                    if (getFiled('Q19W11', $schoolUserID) == 2):
                        echo "Outside your school ".", ";
					endif;
                    ?>
        </div>
      </div>
      <?php if (getFiled('Q19W11', $schoolUserID) == 1): ?>
      <div class="form-group" id="Q20W1Q">
        <label class="control-label"><span class="cube">17(a)(ii)</span>Who treats the wastewater outside your school?</label>
        <div class="form-group">
          <?php
                    if (getFiled('Q19W12', $schoolUserID) == 1):
                        echo "Municipality".", ";
					endif;	
                    if (getFiled('Q19W12', $schoolUserID) == 2):
                        echo "Physical Health Engineering Department (PHED) ".", ";
					endif;
					if (getFiled('Q19W12', $schoolUserID) == 2):
                        echo "Panchayat ".", ";
					endif;
					if (getFiled('Q19W12', $schoolUserID) == 2):
                        echo "Community driven initiative ".", ";
					endif;
                    ?>
        </div>
      </div>
      <?php endif;	?>
      <?php }else{ ?>
      <div class="form-group" id="Q20W1Q">
        <label class="control-label"><span class="cube">17(b)</span>Please specify the fate of wastewater?</label>
        <div class="form-group">
          <?php
                    if (getFiled('Q19W13', $schoolUserID) == 1):
                        echo "Wastewater flows directly to the drains)".", ";
					endif;	
                    if (getFiled('Q19W131', $schoolUserID) == 2):
                        echo "Used for groundwater recharge ".", ";
					endif;	
                    if (getFiled('Q19W132', $schoolUserID) == 3):
                        echo "Used for gardening and horticulture".", ";
                    endif;
                    ?>
        </div>
      </div>
      <br/>
      <div class="form-group">
        <label class="control-label"><span class="cube">17(b)(i)</span> Does your school buy treated waste water?</label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q19W14', $schoolUserID) != "") ? (getFiled('Q19W14', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <?php } ?>
      <div class="form-group">
        <label class="control-label"><span class="cube">18</span> Does your school reuse the wastewater from RO plant or Air conditioner drain pipes?</label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q19W15', $schoolUserID) != "") ? (getFiled('Q19W15', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <?php if(getFiled('Q19W15', $schoolUserID) == "Y"){ ?>
      <div class="form-group" id="Q20W1Q">
        <label class="control-label"><span class="cube">18(i)</span>How does your
        school reuse waste water?</label>
        <div class="form-group">
          <?php
                    if (getFiled('Q19W16', $schoolUserID) == 1):
                        echo "Used for cleaning purposes (mopping, washing vehicles, etc)".",";
					endif;	
                    if (getFiled('Q19W161', $schoolUserID) == 2):
                        echo "Used for gardening and horticulture ".",";
					endif;	
                    if (getFiled('Q19W162', $schoolUserID) == 3):
                        echo "Flushing".",";
                    endif;
                    ?>
        </div>
      </div>
      <br/>
      <?php }else{ ?>
      <div class="form-group" id="Q19W2">
        <label class="control-label"><span class="cube">18(i)</span>If no, How does your school reuse wastewater from RO plant or AC?</label>
        <div class="form-group">
          <?php
                    if (getFiled('Q19W17', $schoolUserID) == 1):
                        echo " Wastewater flows directly to the drains";
                    endif;
                    ?>
        </div>
      </div>
      <br/>
      <?php } ?>
      <div class="form-group">
        <label class="control-label"><span class="cube">19</span>Does your school reuse the
        treated wastewater?</label>
        <div class="form-group">
          <p> <?php echo (getFiled('Q20W1', $schoolUserID) != "") ? (getFiled('Q20W1', $schoolUserID) == "Y") ? "Yes" : "No" : "N/A"; ?></p>
        </div>
      </div>
      <?php if(getFiled('Q20W1', $schoolUserID) == "Y"){ ?>
      <div class="form-group" id="Q20W1Q">
        <label class="control-label"><span class="cube">19(a)</span>How does your
        school reuse waste water?</label>
        <div class="form-group">
          <?php
                    if (getFiled('Q20W2', $schoolUserID) == 1):
                        echo "Grdening";
                    elseif (getFiled('Q20W2', $schoolUserID) == 2):
                        echo "Flushing";
                    elseif (getFiled('Q20W2', $schoolUserID) == 3):
                        echo " Recharge Ground Water";

                    endif;
                    ?>
        </div>
      </div>
      <?php }else{ ?>
      <div class="form-group" id="Q19W2">
        <label class="control-label"><span class="cube">19(a)</span>Please specify the fate of wastewater:</label>
        <div class="form-group">
          <?php
                    if (getFiled('Q20W3', $schoolUserID) == 1):
                        echo "Wastewater flows directly to the drains";
                    elseif (getFiled('Q20W3', $schoolUserID) == 2):
                        echo "Used for groundwater recharge";
                    elseif (getFiled('Q20W3', $schoolUserID) == 3):
                        echo " Used for gardening and horticulture";

                    endif;
                    ?>
        </div>
      </div>
      <?php } ?>
      <div class="form-group">
        <label>Please upload a flow chart (hand drawn) of the wastewatertreatment process.</label>
        <br>
      </div>
      <?php if (!empty($flowChartHandDrawn)) { ?>
      <table width="100%" class="table">
        <thead>
          <tr>
            <th>image</th>
            <th>File name</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($flowChartHandDrawn as $a) { ?>
          <tr>
            <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
            <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Flow_Chart_Hand_Drwan_"), " ", $a->file_name); ?></td>
            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?>
      <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
      <?php } ?>
      <div class="form-group" id="WastePolicy">
        <label class="control-label">Please upload supportingdocuments:</label>
        <br>
        •Pictures of audit team doing survey<br>
        Please upload all supporting documents related to this section here.
        Note, files must be one of the following formats: PDF Document
        (.pdf), Word Document (.doc, .docx), Image File (.jpg, .jpeg) <br>
        File size per document should not exceed <strong>100 KB.</strong> <br>
        <br>
      </div>
      <?php
            if (!empty($supportDocWater)) {
                ?>
      <table width="100%" class="table">
        <thead>
          <tr>
            <th>image</th>
            <th>File name</th>
            <td>Download</td>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($supportDocWater as $a) { ?>
          <tr>
            <td><img src="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name ?>" class="img-responsive" width="100" height="100" /></td>
            <td><?php echo str_replace(str_replace(' ', '_', $school->name . "_Supporting_Document_Water_"), " ", $a->file_name); ?></td>
            <td><a href="<?php echo base_url() ?>uploads/files/<?php echo $a->file_name; ?>" download="<?php echo $a->file_name; ?>"><span class="glyphicon glyphicon-download-alt"></span></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
      <?php } else { ?>
      <div class="alert alert-danger alert-dismissable"> <strong>No Uploaded Document!</strong> </div>
      <?php } ?>
      <div class="text-center"> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/land/' . $id) ?>">PREVIOUS</a> <a class="btn org-btn" href="<?php echo base_url('admin/audit_started/waste/' . $id) ?>">NEXT</a> </div>
    </form>
  </div>
</div>
<?php $this->load->view('admin/survey/footer'); ?>
