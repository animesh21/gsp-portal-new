<div class="top-area">
    <h2>2017 Registration<a href="<?php echo base_url('admin/Performance_report/excel') ?>"><button class="exportBtn">Export to Excel</button></a></h2>
</div>
<div style="overflow: scroll"> 
    <table class="display dataTable no-footer" id="tablePerformance">
        <thead>
            <tr> 
                <th>S.No</th>
                <th>Sch.Id</th>
                <th>School Name</th>
                <th>Address1</th>
                <th>Address2</th>
                <th>State</th>
                <th>City</th>
                <th>Pincode</th>
                <th>ISD Code</th>
                <th>STD Code</th>
                <th>Landline No.</th>
                <th>School Email</th>
                <th>Principal Name</th>
                <th>Principal Mobile</th>
                <th>Coordinator Name</th>
                <th>Coordinator Email</th>
                <th>Coordinator Mobile</th>
                <th>School Category</th>
                <th>No of Shifts</th>
                
                <th>Has your school participated in the Green Schools Programme (GSP) Audit before?</th>
                <th> If your answer is yes, in which year did your school first participate in the audit?</th>
                <th> If your answer is yes, how many times have you done the audit?</th>
                <th>Did you find the online information relevant to your environmental education activities?</th>
                <th> If your answer is no, please share your suggestions:</th>
                <th>Was the audit easy to understand and self-explanatory?</th>
                <th>Do you think your school will be a Green School (resource efficient) by 2019?</th>
                <th> If your answer is no, why?</th>
                <th>What would be the help required to make your school a Green School?</th>
                <th>Content</th>
                <th>Distribution of time among tasks</th>
                <th>Sequencing of questions</th>
                <th>Would your school like to recommend any topic/s that you strongly feel should be added or deleted in the audit?</th>
                <th>If your answer is yes, please share your suggestions:</th>
                <th>Could you finish all the tasks in given period of time (August?October)?</th>
                <th>How many times did you contact the Green Schools Programme Team for guidance and counseling?</th>
                <th> Water being the focus of this year, did you find the questionnaire in Water section helpful to make schools understand how to become water efficient?</th>
                <th>If your answer is no, please share your suggestions </th>
                <th>Did your students enjoy doing Water activities?</th>
                <th>If your answer is yes, why did they enjoy doing outdoor activities?</th>
                <th><strong>Air Points</strong></th>
                <th><strong>Energy Points</strong></th>
                <th><strong>Food Points</strong></th>
                <th><strong>Land Points</strong></th>
                <th><strong>Water Points</strong></th>
                <th><strong>Waste Points</strong></th>
                <th><strong>Total Points</strong></th>
                <th><strong>Per centage</strong></th>
                <th><strong>Rating Category</strong></th>
                <th><strong>2016's Category</strong></th>
                <th><strong>2015's Category</strong></th>
          </tr>
        </thead> 
        <tbody>  
            
            <!--------------------------------FEEDBACK------------------------------------------->

            <?php
            $i = 1;
            foreach ($record as $r) {
                ?>
                <tr> 
                
                 <td><?php echo $i; ?></td>
                    <td><?php echo $r->id; ?></td>
                    <td><?php echo $r->name; ?></td>
                    <td><?php echo $r->address1; ?></td>
                    <td><?php echo $r->address2; ?></td>
                    <td><?php echo $r->state_name; ?></td>
                    <td><?php echo $r->city; ?></td>
                    <td><?php echo $r->pincode; ?></td>
                    <td><?php echo '91'; ?></td>
                    <td><?php echo $r->std; ?></td>
                    <td><?php echo $r->telephone; ?></td>
                    <td><?php echo $r->schoolemail; ?></td>
                    <td><?php echo $r->principle_name; ?></td>
                    <td><?php echo $r->mobile; ?></td>
                    <td><?php echo $r->coname; ?></td>
                    <td><?php echo $r->coemail; ?></td>
                    <td><?php echo $r->comobile; ?></td>
                    <!--                    School Category-->
                    <td>
                        <?php
                        $arr = array(
                            '1' => 'Day Scholar',
                            '2' => 'Day Boarding',
                            '3' => 'Residential',
                            '4' => 'Day Scholar + Day Boarding',
                            '5' => 'Day Boarding + Residential',
                            '6' => 'Day Scholar + Residential',
                            '7' => 'Day Scholar + Day Boarding + Residential'
                        );
                        $vale = (getFiled('Q1S1', $r->userid) != '') ? getFiled('Q1S1', $r->userid) : "";
                        if ($vale != '') {
                            echo $arr[$vale];
                        }
                        //echo $arr[];
                        ?>
                    </td>
                    <!--                    No of Shifts-->
                    <td>
                        <?php
                        $arr1 = array(
                            '1' => 'Morning',
                            '2' => 'Evening',
                            '3' => 'Both',
                        );
                        if (getFiled('Q2S1', $r->userid) != '') {
                            echo $arr1[getFiled('Q2S1', $r->userid)];
                        }
                        ?>
                    </td>    
                    
                <!-----------------------Has your school participated in the Green Schools Programme (GSP) Audit before?----------------------->
                <td><?php echo (getFiled('Q1Fe1', $r->userid) != "") ? (getFiled('Q1Fe1', $r->userid) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
                <!----------------------- If your answer is yes, in which year did your school first participate in the audit?----------------------->
                <td><?php echo "NA"; ?></td>
                <!----------------------- If your answer is yes, how many times have you done the audit?----------------------->
                <td><?php echo "NA"; ?></td>
                <!-----------------------Did you find the online information relevant to your environmental education activities?----------------------->
                <td><?php echo (getFiled('Q1Fe2', $r->userid) != "") ? (getFiled('Q1Fe2', $r->userid) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
                <!----------------------- If your answer is no, please share your suggestions:----------------------->
                <td><?php echo "NA"; ?></td>
                <!-----------------------Was the audit easy to understand and self-explanatory?----------------------->
                <td><?php echo (getFiled('Q1Fe3', $r->userid) != "") ? (getFiled('Q1Fe3', $r->userid) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
                <!-----------------------Do you think your school will be a Green School (resource efficient) by 2019?----------------------->
                <td><?php echo (getFiled('Q1Fe4', $r->userid) != "") ? (getFiled('Q1Fe4', $r->userid) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
                <!----------------------- If your answer is no, why?----------------------->
                <td><?php echo "NA"; ?></td>
                <!-----------------------What would be the help required to make your school a Green School?----------------------->
                <td><?php echo "NA"; ?></td>
                <!-----------------------Content----------------------->
                <td>
                    <?php
                    if (getFiled('Q8Fe1', $r->userid) == 1):
                    echo "Good";

                    endif;
                    if (getFiled('Q8Fe1', $r->userid) == 2):
                    echo "Avarage";

                    endif;
                    if (getFiled('Q8Fe1', $r->userid) == 3):
                    echo "Bad";

                    endif;
                    ?> 
                </td>
                <!---------------------------Distribution of time among tasks------------------------------->
                <td>
                    <?php
                    if (getFiled('Q8Fe2', $r->userid) == 1):
                    echo "Good";

                    endif;
                    if (getFiled('Q8Fe2', $r->userid) == 2):
                    echo "Avarage";

                    endif;
                    if (getFiled('Q8Fe2', $r->userid) == 3):
                    echo "Bad";

                    endif;
                    ?> 
                </td>

                <!-----------------------Sequencing of questions----------------------->
                <td>
                    <?php
                    if (getFiled('Q8Fe3', $r->userid) == 1):
                    echo "Good";

                    endif;
                    if (getFiled('Q8Fe3', $r->userid) == 2):
                    echo "Avarage";

                    endif;
                    if (getFiled('Q8Fe3', $r->userid) == 3):
                    echo "Bad";

                    endif;
                    ?> 
                </td>
                <!-----------------------Would your school like to recommend any topic/s that you strongly feel should be added or deleted in the audit?----------------------->
                <td>
                    <?php echo (getFiled('Q1Fe7', $r->userid) != "") ? (getFiled('Q1Fe7', $r->userid) == "Y") ? "Yes" : "No" : "N/A"; ?>
                </td>
                <!-----------------------If your answer is yes, please share your suggestions:----------------------->
                <td><?php echo "NA"; ?></td>
                <!-----------------------Could you finish all the tasks in given period of time (August?October)?----------------------->
                <td> <?php echo (getFiled('Q1Fe7', $r->userid) != "") ? (getFiled('Q1Fe7', $r->userid) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
                <!-----------------------How many times did you contact the Green Schools Programme Team for guidance and counseling?----------------------->
                <td>
                    <?php
                    if (getFiled('Q1Fe9', $r->userid) == 1):
                    echo "Never";
                    elseif (getFiled('Q1Fe9', $r->userid) == 2):
                    echo "Once";
                    elseif (getFiled('Q1Fe9', $r->userid) == 3):
                    echo " Twice";
                    elseif (getFiled('Q1Fe9', $r->userid) == 4):
                    echo "More than twice";
                    endif;
                    ?>
                </td>
                <!----------------------- Water being the focus of this year, did you find the questionnaire in Water section helpful to make schools understand how to become water efficient?----------------------->
                <td>
                    <?php echo (getFiled('Q1Fe10', $r->userid) != "") ? (getFiled('Q1Fe10', $r->userid) == "Y") ? "Yes" : "No" : "N/A"; ?>
                </td>
                <!-----------------------If your answer is no, please share your suggestions ----------------------->
                <td><?php echo "NA"; ?></td>
                <!-----------------------Did your students enjoy doing Water activities?----------------------->
                <td><?php echo (getFiled('Q1Fe11', $r->userid) != "") ? (getFiled('Q1Fe11', $r->userid) == "Y") ? "Yes" : "No" : "N/A"; ?></td>
                <!-----------------------If your answer is yes, why did they enjoy doing outdoor activities?----------------------->
                <td>
                    <?php echo (getFiled('Q1Fe12', $r->userid) != "") ? getFiled('Q1Fe12', $r->userid) : "N/A"; ?>
                </td>
                <!-----------------------<strong>Air Points</strong>----------------------->
                <td><strong><?php echo getAirPoints($r->userid); ?></strong></td>
<!-----------------------<strong>Energy Points</strong>----------------------->
                <td><strong><?php echo getEnergyPoints($r->userid); ?></strong></td>
<!-----------------------<strong>Food Points</strong>----------------------->
                <td><strong><?php echo getFoodPoints($r->userid); ?></strong></td>
<!-----------------------<strong>Land Points</strong>----------------------->
                <td><strong><?php echo getLandPoints($r->userid); ?></strong></td>
<!-----------------------<strong>Water Points</strong>----------------------->
                <td><strong><?php echo getWaterPoints($r->userid); ?></strong></td>
<!-----------------------<strong>Waste Points</strong>----------------------->
                <td><strong><?php echo getWastePoints($r->userid); ?></strong></td>
<!-----------------------<strong>Total Points</strong>----------------------->
                <td><strong><?php echo getTotalPoints($r->userid); ?></strong></td>
<!-----------------------<strong>Per centage</strong>----------------------->
                <td><strong><?php echo "NA"; ?></strong></td>
<!-----------------------<strong>Rating Category</strong>----------------------->
                <td><strong><?php echo "NA"; ?></strong></td>
<!-----------------------<strong>2016's Category</strong>----------------------->
                <td><strong><?php echo "NA"; ?></strong></td>
<!-----------------------<strong>2015's Category</strong>----------------------->
                <td><strong><?php echo "NA"; ?></strong></td>





            </tr>
            <?php
            $i++;
            }
            ?>
            </tbody>
    </table>
</div>
            