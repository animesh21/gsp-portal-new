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
            <?php $i = 1;
            foreach ($record as $r) { ?>
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
                    <td> <?php echo (getFiled('Q6A2S1T2', $r->userid) != '') ? getFiled('Q6A2S1T2', $r->userid) : ""; ?></td>
                </tr>
    <?php $i++;
} ?>
        </tbody>
    </table>
</div>