<div class="top-area">
    <h2>2017 Registration</h2>
</div>
<div style="overflow: scroll"> 
    <table class="tablepluging display dataTable no-footer">
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
                <th>Password</th>
                <th>Reg. Date</th>
                <th>Comp. Date</th>
                <th>Completeness</th>
                <th>Total Classrooms</th>
                <th>Window Floor Ratio</th>
                <th>Vehicles Ownership</th>
                <th>School Owned Vehicles</th>
                <th>PUC done</th>
                <th>Vehicles with AC</th>
                <th>Vehicles more than 8 years Old</th>
                <th>Vehicles on CNG</th>
                <th>Details of Buses on CNG</th>
                <th>Details of Car on CNG</th>
                <th>Details of Van on CNG</th>
                <th>Total Population GQ</th>
                <th>Total Population in Air</th>
                <th>Sustainble Motorised Vehicles: Numbers</th>
                <th>Sustainble Motorised Vehicles: Percentgae</th>
                <th>Non Polluting Transport: Numbers</th>
                <th>Non Polluting Transport: Percentage</th>
                <th>Points in <br />
                    Air Section</th>
                <th>Energy: Per cap/day (MJ)</th>
                <th>Source of Energy</th>
                <th>Alternate Source <br />
                    of Energy</th>
                <th>Points in <br />
                    Energy Section</th>
                <th>Food Served in Canteen</th>
                <th>Packaged Food distribution as Rewards</th>
                <th>Details of Packaged Food</th>
                <th>Distribution of Chocolate/similar products during events</th>
                <th>Names of Products</th>
                <th>Events sponsored by Food companies</th>
                <th>Brand Banners</th>
                <th>Banners, brochures, hoardings, stalls put-up during events</th>
                <th>Points in <br />
                    Food Section</th>
                <th>Total of Green Cover(m<sup>2</sup>)</th>
                <th>Percentage of Green Cover(%)</th>
                <th>Use of Chemical based pesticides</th>
                <th>Points in Land Section</th>
                <th>Water: Total Consumption(ltrs)</th>
                <th>Water: per cap/day(ltrs)</th>
                <th>Load on Drinking Water Taps</th>
                <th>Load on Ablution Taps</th>
                <th>Load on Urinals</th>
                <th>Load on Water Closet</th>
                <th>Rainwater Harvesting System</th>
                <th>Type of Rainwater Harvesting System</th>
                <th>Waste Water Reuse/Recycle</th>
                <th>Treat Waste Water</th>
                <th>Points in Water Section</th>
                <th>Solid Waste Segregation</th>
                <th>Segregator at Source</th>
                <th>Waste Collection points with 0 bin</th>
                <th>Waste Collection points with 1 bin</th>
                <th>Waste Collection points with 2 bins</th>
                <th>Waste Collection points with 3 bins</th>
                <th>Waste: Per cap/day(Grams)</th>
                <th>Recyle Solid Waste</th>
                <th>Total Waste Generated(Grams)</th>
                <th>Total Waste Recycled(Grams)</th>
                <th>Percentage of Waste Recycled</th>
                <th>Composting Facility</th>
                <th>Composting Methodology</th>
                <th>Quantity of Compost generated per month</th>
                <th>Reuse Textbook</th>
                <th>Waste Disposal</th>
                <th>Burn Waste</th>
                <th>Where do you burn waste</th>
                <th>Kind of waste burnt</th>
                <th>E-waste Disposal</th>
                <th>Who collects E-waste</th>
                <th>Points in Waste Section</th>
                <th>Total Points</th>
                <!--<th>Bonus Points</th>-->
            </tr>
        </thead> 
        <tbody>
            <?php //echo '<pre>'; print_r($record); ?>
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
                    <td><?php echo $r->password; ?></td>
                    <td><?php echo date('d-m-Y H:i:s', strtotime($r->date_added)); ?></td>
                    <td><?php echo date('d-m-Y H:i:s', strtotime($r->date_added)); ?></td>
                    <td><?php echo $r->progress; ?></td>
                    <td> <?php echo (getFiled('Q4A1', $r->userid) != '') ? getFiled('Q4A1', $r->userid) : ""; ?></td>
                    <td>N/A</td>
                    <td><?php echo (getFiled('Q6A1', $r->userid) != '') ? $this->config->item(getFiled('Q6A1', $r->userid), 'vehicles') : "N/A"; ?></td>
                    <!--            School Owned Vehicle-->
                    <td>
                        Buses: <?php echo (getFiled('Q6A2S1B1', $r->userid) != '') ? getFiled('Q6A2S1B1', $r->userid) : 0; ?><br>
                        Cars: <?php echo (getFiled('Q6A2S1C1', $r->userid) != '') ? getFiled('Q6A2S1C1', $r->userid) : 0; ?><br>
                        Suv/Vans: <?php echo (getFiled('Q6A2S1V1', $r->userid) != '') ? getFiled('Q6A2S1V1', $r->userid) : 0; ?><br>
                        Other: <?php echo (getFiled('Q6A2S1O1', $r->userid) != '') ? getFiled('Q6A2S1O1', $r->userid) : 0; ?>
                    </td>
                    <!--            Ends Here-->
                    <!--PUC Done-->
                    <td>
                        Buses: <?php echo (getFiled('Q6A2S1B4', $r->userid) != '') ? getFiled('Q6A2S1B4', $r->userid) : 0; ?><br>
                        Cars: <?php echo (getFiled('Q6A2S1C4', $r->userid) != '') ? getFiled('Q6A2S1C4', $r->userid) : 0; ?><br>
                        Suv/Vans: <?php echo (getFiled('Q6A2S1V4', $r->userid) != '') ? getFiled('Q6A2S1V4', $r->userid) : 0; ?><br>
                        Other: <?php echo (getFiled('Q6A2S1O4', $r->userid) != '') ? getFiled('Q6A2S1O4', $r->userid) : 0; ?>
                    </td>
                    <!--            Ends Here-->
                    <!--Air Conditioned Vehicle-->
                    <td>
                        Buses: <?php echo (getFiled('Q6A2S1B3', $r->userid) != '') ? getFiled('Q6A2S1B3', $r->userid) : 0; ?><br>
                        Cars: <?php echo (getFiled('Q6A2S1C3', $r->userid) != '') ? getFiled('Q6A2S1C3', $r->userid) : 0; ?><br>
                        Suv/Vans: <?php echo (getFiled('Q6A2S1V3', $r->userid) != '') ? getFiled('Q6A2S1V3', $r->userid) : 0; ?><br>
                        Other: <?php echo (getFiled('Q6A2S1O3', $r->userid) != '') ? getFiled('Q6A2S1O3', $r->userid) : 0; ?>
                    </td>
                    <!--            Ends Here-->
                    <!--                    Vehicle More than 8 Year Old-->
                    <td>
                        Buses: <?php echo (getFiled('Q6A2S1B2', $r->userid) != '') ? getFiled('Q6A2S1B2', $r->userid) : 0; ?><br>
                        Cars: <?php echo (getFiled('Q6A2S1C2', $r->userid) != '') ? getFiled('Q6A2S1C2', $r->userid) : 0; ?><br>
                        Suv/Vans: <?php echo (getFiled('Q6A2S1V2', $r->userid) != '') ? getFiled('Q6A2S1V2', $r->userid) : 0; ?><br>
                        Other: <?php echo (getFiled('Q6A2S1O2', $r->userid) != '') ? getFiled('Q6A2S1O2', $r->userid) : 0; ?>
                    </td>
                    <!--                    Ends Here-->
                    <!--Total Vehicle ON CNG-->
                    <td> <?php echo (getFiled('Q6A2S3C5', $r->userid) != '') ? getFiled('Q6A2S3C5', $r->userid) : 0; ?></td>
                    <!--Ends Here-->
                    <!--Buses on CNG-->
                    <td> <?php echo (getFiled('Q6A2S3C1', $r->userid) != '') ? getFiled('Q6A2S3C1', $r->userid) : 0; ?></td>
                    <!--Ends Here-->
                    <!--Cars on CNG-->
                    <td> <?php echo (getFiled('Q6A2S3L2', $r->userid) != '') ? getFiled('Q6A2S3L2', $r->userid) : 0; ?></td>
                    <!--Ends Here-->
                    <!--Vans on CNG-->
                    <td> <?php echo (getFiled('Q6A2S3C3', $r->userid) != '') ? getFiled('Q6A2S3C3', $r->userid) : 0; ?></td>
                    <!--Ends Here-->
                    <!--Total Population in GQ-->
                    <td> <?php echo (getFiled('Q4G4S3', $r->userid) != '') ? getFiled('Q4G4S3', $r->userid) : 0; ?></td>
                    <!--Ends Here-->
                    <!--Total Population in Air-->
                    <td> <?php echo (getFiled('Q4G4S3', $r->userid) != '') ? getFiled('Q4G4S3', $r->userid) : 0; ?></td>
                    <!--Ends Here-->
                    <!--                     Sustainable Motorised Vehicles-->
                    <td> <?php echo getFiled('Q7A1S4', $r->userid) + getFiled('Q7A2S4', $r->userid) + getFiled('Q7A3S4', $r->userid) + getFiled('Q7A4S4', $r->userid) + getFiled('Q7A5S4', $r->userid) + getFiled('Q7A6S4', $r->userid) ?></td>
                    <!--Ends Here-->
                    <!--                     Sustainable Motorised Vehicles Percantage-->
                    <td> N/A</td>
                    <!--Ends Here-->
                    <!--                    Non Polluting Transport: Numbers-->
                    <td> <?php echo (getFiled('Q7A12S4', $r->userid) != '') ? getFiled('Q7A12S4', $r->userid) : 0; ?></td>
                    <!--Ends Here-->
                    <!--                    Non Polluting Transport: Numbers-->
                    <td>N/A</td>
                    <!--                    Ends Here-->
                    <!--                    Points in air section-->
                    <td><?php echo getAirPoints($r->userid); ?></td>
                    <!--Ends Here-->
                    <!-- Energy Per Cap Jool-->
                    <td> <?php echo (getFiled('Q6E15S2', $r->userid) != '') ? getFiled('Q6E15S2', $r->userid) : 0; ?></td>
                    <!--                    Ends Here-->
                    <!--                    Source Of Energy-->
                    <td>
                        <?php
                        $arr = array();
                        //Board
                        $arr[] = (getFiled('Q6E1S1', $r->userid) != '') ? (getFiled('Q6E1S1', $r->userid) != 0) ? "Electricity from the board" : "" : "";
                        //Electricity Disel
                        $arr[] = (getFiled('Q6E2S1', $r->userid) != '') ? (getFiled('Q6E2S1', $r->userid) != 0) ? "Electricity from generator(Diesel)" : "" : "";
                        //Petrol
                        $arr[] = (getFiled('Q6E3S1', $r->userid) != '') ? (getFiled('Q6E3S1', $r->userid) != 0) ? "Petrol" : "" : "";
                        //Diesel
                        $arr[] = (getFiled('Q6E4S1', $r->userid) != '') ? (getFiled('Q6E4S1', $r->userid) != 0) ? "Diesel" : "" : "";
                        //CNG
                        $arr[] = (getFiled('Q6E5S1', $r->userid) != '') ? (getFiled('Q6E5S1', $r->userid) != 0) ? "CNG" : "" : "";
                        //Kerosine
                        $arr[] = (getFiled('Q6E6S1', $r->userid) != '') ? (getFiled('Q6E6S1', $r->userid) != 0) ? "Kerosine" : "" : "";
                        //Coal
                        $arr[] = (getFiled('Q6E7S1', $r->userid) != '') ? (getFiled('Q6E7S1', $r->userid) != 0) ? "Coal" : "" : "";
                        //Wood
                        $arr[] = (getFiled('Q6E16S1', $r->userid) != '') ? (getFiled('Q6E16S1', $r->userid) != 0) ? "Wood" : "" : "";
                        //Animal Waste
                        $arr[] = (getFiled('Q6E8S1', $r->userid) != '') ? (getFiled('Q6E8S1', $r->userid) != 0) ? "Animal Waste" : "" : "";
                        //Solar
                        $arr[] = (getFiled('Q6E9S1', $r->userid) != '') ? (getFiled('Q6E9S1', $r->userid) != 0) ? "Solar" : "" : "";
                        //Wind
                        $arr[] = (getFiled('Q6E10S1', $r->userid) != '') ? (getFiled('Q6E10S1', $r->userid) != 0) ? "Wind" : "" : "";
                        //LPG
                        $arr[] = (getFiled('Q6E11S1', $r->userid) != '') ? (getFiled('Q6E11S1', $r->userid) != 0) ? "LPG" : "" : "";
                        //Piped Natural Gas
                        $arr[] = (getFiled('Q6E12S1', $r->userid) != '') ? (getFiled('Q6E12S1', $r->userid) != 0) ? "Piped Natural Gas" : "" : "";
                        //Biogas
                        $arr[] = (getFiled('Q6E13S1', $r->userid) != '') ? (getFiled('Q6E13S1', $r->userid) != 0) ? "Biogas" : "" : "";
                        //Other
                        $arr[] = (getFiled('Q6E14S1', $r->userid) != '') ? (getFiled('Q6E14S1', $r->userid) != 0) ? "Other" : "" : "";
                        echo implode(',', array_filter($arr));
                        ?>
                    </td>
                    <!--                        Ends Here-->
                    <!--                    Alertarnative Source OF Energy-->
                    <td><?php echo (getFiled('Q9E1', $r->userid) != '') ? (getFiled('Q9E1', $r->userid) == "N") ? "No" : "Yes" : "N/A"; ?></td>
                    <!--Ends Here-->
                    <!--                    Energy Ponits-->
                    <td><?php echo getEnergyPoints($r->userid); ?></td>
                    <!--                    Ends Here-->
                    <!--                    Food Served in Canteen-->
                    <td>
                        <?php
                        $val = getFiled('Q4F1', $r->userid);
                        if ($val == 'Y') {
                            $c = array();
                            if ((getFiled('Q6F2S1', $r->userid) != '') && (getFiled('Q6F2S1', $r->userid) != 0)) {
                                $c[] = "Savoury snacks and similar packaged food ";
                            }
                            if (getFiled('Q6F3S1', $r->userid) != '' && getFiled('Q6F3S1', $r->userid) != 0) {
                                $c[] = "Instant Noodles";
                            }
                            if (getFiled('Q6F4S1', $r->userid) != '' && getFiled('Q6F4S1', $r->userid) != 0) {
                                $c[] = "Potato fries and Burgers";
                            }
                            if (getFiled('Q6F5S1', $r->userid) != '' && getFiled('Q6F5S1', $r->userid) != 0) {
                                $c[] = "Confectionery items";
                            }
                            if (getFiled('Q6F6S1', $r->userid) != '' && getFiled('Q6F6S1', $r->userid) != 0) {
                                $c[] = "Ice-cream";
                            }
                            if (getFiled('Q6F7S1', $r->userid) != '' && getFiled('Q6F7S1', $r->userid) != 0) {
                                $c[] = "Carbonated beverages";
                            }
                            if (getFiled('Q6F8S1', $r->userid) != '' && getFiled('Q6F8S1', $r->userid) != 0) {
                                $c[] = "Sugar sweetened non-carbonated beverages";
                            }
                            if (getFiled('Q6F9S1', $r->userid) != '' && getFiled('Q6F9S1', $r->userid) != 0) {
                                $c[] = "Packaged/Bottled Nimboo Paani/ Lassi/ Flavoured milk";
                            }
                            if (getFiled('Q6F10S1', $r->userid) != '' && getFiled('Q6F10S1', $r->userid) != 0) {
                                $c[] = "Packaged/Bottled Energy Drinks";
                            }
                            echo implode(',', $c);
                        } else {
                            echo 'No Canteen';
                        }
                        ?>
                    </td>
                    <!--                    Ends Here-->
                    <!--Food Promotions Reviews-->
                    <td>
                        <?php echo (getFiled('Q9F1', $r->userid) != '') ? (getFiled('Q9E1', $r->userid) == "Y") ? "Yes" : "No" : "N/A"; ?>
                    </td>
                    <!--                    Ends Here-->
                    <!--                    Details Of Packed Food-->
                    <td>
                        <?php echo (getFiled('Q9F2', $r->userid) != '') ? getFiled('Q9F2', $r->userid) : "N/A"; ?>
                    </td>
                    <!--Ends Here-->
                    <!--Distribution of Chocolate/similar products during events-->
                    <td>
                        <?php echo (getFiled('Q10F1', $r->userid) != '') ? (getFiled('Q10F1', $r->userid) == "Y") ? "Yes" : "No" : "N/A"; ?>
                    </td>
                    <!--                    Ends Here-->
                    <!--                    Name of Products-->
                    <td>
                        <?php echo (getFiled('Q10F2', $r->userid) != '') ? getFiled('Q10F2', $r->userid) : "N/A"; ?>
                    </td>
                    <!--Ends Here-->
                    <!--Events sponsored by Food companies-->
                    <td><?php echo (getFiled('Q11F1', $r->userid) != '') ? getFiled('Q11F1', $r->userid) : "N/A"; ?></td>
                    <!--                    Ends Here-->
                    <!--                    Brand Banners-->
                    <td>
                        <?php
                        if (getFiled('Q11F1', $r->userid) == 'Y') {
                            echo (getFiled('Q11F2', $r->userid) != '') ? getFiled('Q11F2', $r->userid) : "N/A";
                        }
                        ?>
                    </td>
                    <!--Ends Here-->
                    <!--                    Banners, brochures, hoardings, stalls put-up during events-->
                    <td>
                        <?php echo (getFiled('Q11F3', $r->userid) != '') ? getFiled('Q11F3', $r->userid) : "N/A"; ?>
                    </td>
                    <!--Ends Here-->
                    <!--                    Points in Food Section-->
                    <td>
                        <?php echo getFoodPoints($r->userid); ?>
                    </td>
                    <td>
                        N/A
                    </td>
                    <td>
                        N/A
                    </td>
                    <td>
                        <?php echo (getFiled('Q6L1', $r->userid) != '') ? getFiled('Q6L1', $r->userid) : ""; ?>
                    </td>
                    <td>
                        <?php echo getLandPoints($r->userid); ?>
                    </td>
                    <!-- Ends Here-->
                    <!--                    Total Water Consumption-->
                    <td>
                        <?php echo (getFiled('Q4W11', $r->userid) != '') ? getFiled('Q4W11', $r->userid) : ""; ?>
                    </td>
                    <!--Ends Here-->
                    <!-- Water Per Day Cap Jool-->
                    <td>
                        <?php
                        $total_populatuion = getFiled('Q4G4S3', $r->userid);
                        $total_water_consumption = getFiled('Q4W11', $r->userid);
                        if (($total_populatuion != 0 ) && ($total_populatuion != "") && ($total_water_consumption != 0 ) && ($total_water_consumption != "")) {
                            echo $per = number_format($total_water_consumption / $total_populatuion, 2);
                        }
                        ?>
                    </td>
                    <!--                    Ends Here-->
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <!--                    Rain Water Harvesting-->
                    <td><?php echo (getFiled('Q8W2', $r->userid) != '') ? getFiled('Q8W2', $r->userid) : "N/A"; ?></td>
                    <!--Ends Here-->
                    <!--                    Types of Rain Water Harvesting System-->
                    <td><?php $arr = array('By Storing', '') ?></td>
                    <!--Ends Here-->
                    <td>N/A</td>
                    <td>N/A</td>
                    <td>N/A</td>
                    <!--                    Solid Waste Segregation-->
                    <td><?php echo (getFiled('Q4Wa1', $r->userid) != '') ? (getFiled('Q4Wa1', $r->userid) == 'Y') ? "Yes" : "No" : ""; ?></td>
                    <!--                     Ends Here-->
                    <td>
                        <!--Waste Solid Segregator at source-->
                        <?php
                        $st = getFiled('Q4Wa1', $r->userid);
                        if ($st == 'Y' && $st != '') {
                            $e = array();
                            if (getFiled('Q4Wa2S1', $r->userid) != "") {
                                $e[] = "Students and Teachers";
                            }
                            if (getFiled('Q4Wa2S2', $r->userid) != "") {
                                $e[] = "Housekeeping(Sweeper)";
                            }
                            if (getFiled('Q4Wa2S3', $r->userid) != "") {
                                $e[] = "Gardner";
                            }
                            if (getFiled('Q4Wa2S4', $r->userid) != "") {
                                $e[] = "Ragpickers";
                            }
                            if (getFiled('Q4Wa2S5', $r->userid) != "") {
                                $e[] = "Other";
                            }
                            echo implode($e, ', ');
                        }
                        ?>
                        <!--                        Ends Here-->
                    </td>
                    <!--                    No. of waste collection points with no bin-->
                    <td>
                        <?php echo (getFiled('Q5Wa11S1', $r->userid) != '') ? getFiled('Q5Wa11S1', $r->userid) : ""; ?>
                    </td>
                    <!--Ends Here-->
                    <!--                    Waste Collection Points with 1 Bin-->
                    <td>
                        <?php echo (getFiled('Q5Wa11S2', $r->userid) != '') ? getFiled('Q5Wa11S2', $r->userid) : ""; ?>
                    </td>
                    <!--Ends Here-->
                    <!--                    Waste Collection Points with 2 Bin-->
                    <td>
                        <?php echo (getFiled('Q5Wa11S3', $r->userid) != '') ? getFiled('Q5Wa11S3', $r->userid) : ""; ?>
                    </td>
                    <!--                    Ends Here-->
                    <!--                    Waste Collection Points with 3 Bin-->
                    <td>
                        <?php echo (getFiled('Q5Wa11S4', $r->userid) != '') ? getFiled('Q5Wa11S4', $r->userid) : ""; ?>
                    </td>
                    <!--                    Ends Here-->
                    <!--                    Waste Per Cap/Day-->
                    <td>
                        <?php
                        $biogradble = (getFiled('Q6Wa1S6', $r->userid) != '') ? getFiled('Q6Wa1S6', $r->userid) : 0;
                        $dry = (getFiled('Q6Wa2S9', $r->userid) != '') ? getFiled('Q6Wa2S9', $r->userid) : 0;
                        $domestic = (getFiled('Q6Wa3S4', $r->userid) != '') ? getFiled('Q6Wa3S4', $r->userid) : 0;
                        $ewaste = (getFiled('Q6Wa4S2', $r->userid) != '') ? getFiled('Q6Wa4S2', $r->userid) : 0;
                        $biomedical = (getFiled('Q6Wa5S2', $r->userid) != '') ? getFiled('Q6Wa5S2', $r->userid) : 0;
                        $sanotary = (getFiled('Q6Wa6S2', $r->userid) != '') ? getFiled('Q6Wa6S2', $r->userid) : 0;
                        $c_and_d = (getFiled('Q6Wa7S2', $r->userid) != '') ? getFiled('Q6Wa7S2', $r->userid) : 0;
                        $total_pop = (getFiled('Q4G4S3', $r->userid) != '') ? getFiled('Q4G4S3', $r->userid) : 0;
                        $perday = ($biogradble + $dry + $domestic + $ewaste + $biomedical + $sanotary + $c_and_d) * 1000;
                        if($total_pop!=0)
                        {
                            $percapita_person = $perday / $total_pop;
                            echo number_format((float) $percapita_person, 2, '.', '');
                        }
                        ?>
                    </td>
                    <!--Ends Here-->
                    <!--                    Recycle Solid Waste-->
                    <td>
                        <?php echo (getFiled('Q8Wa1', $r->userid) != '') ? getFiled('Q8Wa1', $r->userid) : ""; ?>
                    </td>
                    <!--Ends Here-->
                    <!--                    Total Waste Generated in Grams-->
                    <td>
                        <?php
                        $biogradble = (getFiled('Q6Wa1S5', $r->userid) != '') ? getFiled('Q6Wa1S5', $r->userid) : 0;
                        $dry = (getFiled('Q6Wa2S8', $r->userid) != '') ? getFiled('Q6Wa2S8', $r->userid) : 0;
                        $domestic = (getFiled('Q6Wa3S3', $r->userid) != '') ? getFiled('Q6Wa3S3', $r->userid) : 0;
                        echo ($biogradble+$dry+$domestic)*1000;
                        ?>
                    </td>
                    <!--Ends Here-->
                    <!-- Total Amount of Recycled Waste-->
                    <td>
                        <?php
                            $recycled=(getFiled('Q8Wa1', $r->userid) != '') ? getFiled('Q8Wa1', $r->userid) : "";
                            $value='';
                            if($recycled=='Y')
                            {
                                $biograde=(getFiled('Q8Wa1S5', $r->userid) != '') ? getFiled('Q8Wa1S5', $r->userid) : 0;
                                $dry=(getFiled('Q8Wa2S8', $r->userid) != '') ? getFiled('Q8Wa2S8', $r->userid) : 0;
                                $domestic=(getFiled('Q8Wa3S3', $r->userid) != '') ? getFiled('Q8Wa3S3', $r->userid) : 0;
                                $value=($biogradble+$dry+$domestic)*1000;
                            } else {
                                $value="";
                            }
                        ?>
                    </td>
                    <!--                    Ends Here-->
                </tr>
                <?php
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>