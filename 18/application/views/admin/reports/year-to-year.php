<h1>Year To Year Comparison Dashboard</h1>
<?php 
 if(!empty($_GET['userid'])){
   $result=getYOYComparison($_GET['userid']);
 }
?>
<div class="wrapper" style="padding:0px;">
  <div class="container">
    <div class="col-md-3 text-center">
      <div class="gauge">
        <div id="gauge01" style="margin: 0 auto;width:100%"></div>
      </div>
      <strong>
      <?php if($result['data_2015']!=='NA' && !empty($result['data_2015'])){echo "Participated In Audit";}else{ echo "Not Participated In Audit"; } ?>
      </strong> </div>
    <div class="col-md-3 text-center">
      <div class="gauge">
        <div id="gauge02" style="margin: 0 auto;width:100%"></div>
      </div>
      <strong>
      <?php if($result['data_2016']!=='NA' && !empty($result['data_2016'])){echo "Participated In Audit";}else{ echo "Not Participated In Audit"; } ?>
      </strong> </div>
    <div class="col-md-3 text-center">
      <div class="gauge">
        <div id="gauge03" style="margin: 0 auto;width:100%"></div>
      </div>
      <strong>
      <?php if($result['data_2017']!=='NA' && !empty($result['data_2017'])){echo "Participated In Audit";}else{ echo "Not Participated In Audit"; } ?>
      </strong> </div>
    <div class="col-md-3 text-center">
      <div class="gauge">
        <div id="gauge04" style="margin: 0 auto;width:100%"></div>
      </div>
      <strong>
      <?php if($result['data_2018']!=='NA' && !empty($result['data_2018'])){echo "Participated In Audit";}else{ echo "Not Participated In Audit"; } ?>
      </strong> </div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div class="col-md-12">
      <h3 style="font-size:26px; text-align:center; font-weight:900; color:#e84b2a;">YEAR TO YEAR COMPARISON EXCEL DUMP</h3>
    </div>
    <div class="clearfix">&nbsp;</div>
    <div class="clearfix">&nbsp;</div>
    <div style="width:102%; overflow-y:scroll">
      <table id="example2" class="display dataTable no-footer" cellspacing="0" width="100%" role="grid" aria-describedby="example_info" style="width:100%;">
        <thead>
          <tr role="row">
            <th>S.No</th>
            <th>Audit Year</th>
            <th>School Id</th>
            <th>Name of the School/Institution</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>State</th>
            <th>District</th>
            <th>City</th>
            <th>Pin code</th>
            <th>STD Code</th>
            <th>Landline No.</th>
            <th>Mobile No.</th>
            <th>Principal's Name</th>
            <th>Principal Mobile</th>
            <th>GSP Coordintor Name</th>
            <th>GSP Coordintor Email</th>
            <th>GSP Coordintor Mobile</th>
            <th>School Category</th>
            <th>No.of Shifts</th>
            <th>Lowest Level</th>
            <th>Highest Level</th>
            <th>School type - Gender</th>
            <th>Board of Education</th>
            <th>Total Population</th>
            <th>Students</th>
            <th>Teachers</th>
            <th>Non-Teaching Staff</th>
            <th>Male</th>
            <th>Female</th>
            <th>No.of Classrooms</th>
            <th>Window-floor Ratio(%)</th>
            <th>Ownership of Vehicles</th>
            <th>No.of Vehicles</th>
            <th>No.of Vehicles more than eight years old</th>
            <th>No.of Vehicles with Air conditioner</th>
            <th>No.of Vehicles with PUC certificate</th>
            <th>No.of Vehicles with Authorised parking available</th>
            <th>Annual Road worthiness certificate</th>
            <th>No.of Others Bio fuel</th>
            <th>Subtotal Diesel</th>
            <th>Subtotal Petrol</th>
            <th>Subtotal LPG</th>
            <th>Subtotal CNG</th>
            <th>Subtotal Hybrid</th>
            <th>Subtotal Electric</th>
            <th>Subtotal Bio Fuel</th>
            <th>Sustainble Motorised Vehicles: Numbers</th>
            <th>Sustainble Motorised Vehicles: Percentgae</th>
            <th>Non Polluting Transport: Numbers</th>
            <th>Non Polluting Transport: Percentage</th>
            <th>No.of students suffer from respiratory problems</th>
            <th>Air Quality Monitoring in School</th>
            <th>Air Quality Monitoring in close to school</th>
            <th>School has its own vehicle</th>
            <th>Electricity from the board (MJ)</th>
            <th>Electricity from generator (MJ)</th>
            <th>Petrol (MJ)</th>
            <th>Diesel (MJ)</th>
            <th>CNG (MJ)</th>
            <th>Kerosene (MJ)</th>
            <th>Coal (MJ)</th>
            <th>Wood (MJ)</th>
            <th>Animal waste (MJ)</th>
            <th>Solar (MJ)</th>
            <th>Wind (MJ)</th>
            <th>LPG (MJ)</th>
            <th>Piped Natural Gas (MJ)</th>
            <th>Biogas (MJ)</th>
            <th>Others (MJ)</th>
            <th>Total MJ</th>
            <th>Per capita Energy Consumption</th>
            <th>No.of Air conditioner</th>
            <th>BEE Star rating Air conditioner</th>
            <th>No.of Refrigerator</th>
            <th>No.of Microwave</th>
            <th>No.of Tubelight</th>
            <th>No.of CFL bulb</th>
            <th>No.of LED bulb</th>
            <th>No.of Fans</th>
            <th>Alternate source of energy</th>
            <th>Solar</th>
            <th>Wind</th>
            <th>Hydro</th>
            <th>Biogas Plant</th>
            <th>Combination of solar and wind</th>
            <th>Use of Solar water heater</th>
            <th>Provision of packaged food</th>
            <th>Serve Mid-day Meal</th>
            <th>Students bring own lunch</th>
            <th>How many students bring home-made lunch</th>
            <th>how many bring packaged food as home-made lunch</th>
            <th>Teachers have responsibility to check</th>
            <th>Savouary Snacks count of flavour</th>
            <th>Savouary Snacks no.of item sold</th>
            <th>Month</th>
            <th>Instand Noodles count of flavour</th>
            <th>Instand Noodles no.of item sold</th>
            <th>Month</th>
            <th>Potato Fries Count of flavour</th>
            <th>Potato Fries no.of item sold</th>
            <th>Month</th>
            <th>Confectionary - count of flavour</th>
            <th>Confectionary no.of item sold</th>
            <th>Month</th>
            <th>Ice Cream count of flavour</th>
            <th>Ice Cream no.of items sold</th>
            <th>Month</th>
            <th>Carbonatd beverages count of flavour</th>
            <th>Carbonated beverages no.of items sold</th>
            <th>Month</th>
            <th>Sugar sweetened non-carbonated beverages count of flavour</th>
            <th>Sugar sweetened non-carbonated beverages no.of items sold</th>
            <th>Month</th>
            <th>Packaged/bottled nimboo paani/lassi/flavoured milk  - count of flavour</th>
            <th>Packaged/bottled nimboo paani/lassi/flavoured milk -no.of item sold</th>
            <th>Month</th>
            <th>Packaged/bottled energy drinks count of flavour</th>
            <th>Packaged/bottled energy drinks no.of items sold</th>
            <th>Month</th>
            <th>School serve traditional Indian snacks</th>
            <th>Samosas</th>
            <th>Idli/vada</th>
            <th>Pav Bhaji</th>
            <th>Momos</th>
            <th>Others</th>
            <th>Descriptions</th>
            <th>Schools serve traditional Indian beverages</th>
            <th>Nimboo Pani</th>
            <th>Sweet Lassi</th>
            <th>Salted Butter Milk</th>
            <th>Aam Panna</th>
            <th>Others</th>
            <th>Schools distributes packaged food items as rewards</th>
            <th>Details</th>
            <th>School distribute chocolates/similar products as refreshments during schools events</th>
            <th>Details</th>
            <th>School events sponsored by food companies/brands</th>
            <th>Details</th>
            <th>Are their banners, brochures, hoardings put up during the events</th>
            <th>School measure height and weight of all the student</th>
            <th>How regularly height & weight is measured</th>
            <th>Site area in square meter (m2)</th>
            <th>Ground coverage area</th>
            <th>Green Landscaped area on ground</th>
            <th>Play area that has grass on ground</th>
            <th>Green area on ground</th>
            <th>Play area that is paved/concrete on ground</th>
            <th>Surface parking area</th>
            <th>Service area on ground</th>
            <th>Roof and terrace area</th>
            <th>Green cover on exposed roof and terrace</th>
            <th>Total built-up/constructed area</th>
            <th>Total Area</th>
            <th>Total Green Area</th>
            <th>Percentage of Green Area</th>
            <th>Total Plants</th>
            <th>Native Plants</th>
            <th>Exotic Plants</th>
            <th>Total Animals</th>
            <th>Native Animals</th>
            <th>Exotic Animals</th>
            <th>Use of Chemical Pesticides</th>
            <th>Drinking</th>
            <th>Toilet flushing</th>
            <th>Personal cleaning</th>
            <th>Washing clothes</th>
            <th>Cooking</th>
            <th>Cleaning Utensils</th>
            <th>Washing Vegetables</th>
            <th>Mopping floors</th>
            <th>Gardening</th>
            <th>Others</th>
            <th>Total water consumption per day</th>
            <th>Per capita/day water consumption</th>
            <th>Ground Water as source</th>
            <th>Surface water as source</th>
            <th>Rainwater as source</th>
            <th>Recycled waste water as source</th>
            <th>Municipality as supplier</th>
            <th>Panchayat as supplier</th>
            <th>PHED as supplier</th>
            <th>Private Supplier</th>
            <th>School's own supply</th>
            <th>School gets daily water supply</th>
            <th>Do all tanks in the school have float valves installed to stop overflow</th>
            <th>Do the drinking water points have spill proof taps to check overflow</th>
            <th>Does your school use appliances with a quick-wash setting</th>
            <th>Are dual flush systems installed in the toilets</th>
            <th>Does your school encourage bottled water for drinking water</th>
            <th>Does your school grow local plant species which require limited amount of water to grow</th>
            <th>Has your school initiated any water conservation steps in the school or outside, in the past one year</th>
            <th>Does your school use a drip or irrigation system</th>
            <th>Do you have Rainwater harvesting (RWH) system in your school?</th>
            <th>Does your school harvest different catchments?</th>
            <th>Which is the catchment area being harvested by your school?</th>
            <th>How does your school harvest rainwater?</th>
            <th>Stored rainwater use (Drinking)</th>
            <th>Stored rainwater use (Gardening)</th>
            <th>Stored rainwater use (Mopping)</th>
            <th>Stored rainwater use (Toilets)</th>
            <th>Stored rainwater use (Washing vehicles)</th>
            <th>Stored rainwater use (Kitchen)</th>
            <th>Stored rainwater use (Shower, Brushing teeth, Bathing, Hand washing)</th>
            <th>Stored rainwater use (Swimming Pool)</th>
            <th>If your school only stores rainwater, please select the use of stored rainwater</th>
            <th>Does your school have rainwater storage tank?</th>
            <th>Total number of storage tanks</th>
            <th>Does your school have groundwater recharge structure?</th>
            <th>Total number of recharge structure</th>
            <th>Type of groundwater recharge</th>
            <th>If your school practices rainwater harvesting, then what is the ratio between storage and recharge</th>
            <th>How much area in your school is harvested?</th>
            <th>Q6(d) rainwater harvesting structures (Conduits)</th>
            <th>Q6(d) rainwater harvesting structures (Gutters)</th>
            <th>Q6(d) rainwater harvesting structures (Filter unit)</th>
            <th>Q6(d) rainwater harvesting structures (First flush)</th>
            <th>Q6(d) rainwater harvesting structures (Storage tank)</th>
            <th>Q6(d) rainwater harvesting structures (Collection sump)</th>
            <th>Q6(d) rainwater harvesting structures (Pump unit)</th>
            <th>Q6(d) rainwater harvesting structures (Recharge structure)</th>
            <th>RWH structures present in your school:</th>
            <th>Where is your filter unit</th>
            <th>Types of filter used in your school:</th>
            <th>Does your school clean your catchment and system</th>
            <th>When does your school clean the catchment and RWH system?</th>
            <th>Does your school monitor the rainwater harvesting structure for its efficiency?</th>
            <th>When does your school monitor the groundwater level?</th>
            <th>What is the trend of groundwater level in your school across the year</th>
            <th>How much was the increase?</th>
            <th>Does the school have separate toilets for males and females</th>
            <th>Are the toilets accessible and safe to use for children</th>
            <th>Are the toilets accessible and safe to use for differently abled children</th>
            <th>Are the toilets accessible and safe to use for differently abled staff (teaching and non-teaching)</th>
            <th>Are the toilets situated in the right location in terms of privacy and safety</th>
            <th>Is there sufficient light during day time</th>
            <th>No. of drinking water taps</th>
            <th>Load on DWT</th>
            <th>No.of hand pumps</th>
            <th>No. of ablution taps</th>
            <th>Load on Ablution Tap</th>
            <th>Toilet for Girls</th>
            <th>Toilet for Boys</th>
            <th>Common Toilets</th>
            <th>No. of Toilets (water closet)</th>
            <th>Load on Water Closet</th>
            <th>No. of urinals</th>
            <th>Load on urinals</th>
            <th>No. of water outlets</th>
            <th>Water storage system in the toilets?</th>
            <th>Is the water supply sufficient?</th>
            <th>Are the toilets cleaned?</th>
            <th>Does school treat waste water</th>
            <th>Does schools reuse treated wastewater</th>
            <th>How does your school reuse wastewater</th>
            <th>School reuse wastewater in (Flushing)</th>
            <th>School reuse wastewater in (Recharge Ground Water)</th>
            <th>Please specify the fate of wastewater</th>
            <th>School segregated solid waste</th>
            <th>Segregator at Source</th>
            <th>segregates the waste by (Students and teachers)</th>
            <th>segregates the waste by (Housekeeping)</th>
            <th>segregates the waste by (Gardener)</th>
            <th>segregates the waste by (Ragpickers)</th>
            <th>segregates the waste by (other)</th>
            <th>No.of category</th>
            <th>Collection points with no bins</th>
            <th>Collection points with one bin (mixed)</th>
            <th>Collection points with two bins</th>
            <th>Collection points with three bins</th>
            <th>Total Collection points</th>
            <th>Total biodegradable waste generated</th>
            <th>PCPD of biodegradable</th>
            <th>Total Dry/recyclable waste generated</th>
            <th>PCPD Dry/recyclable</th>
            <th>Total Domestic waste generated</th>
            <th>PCPD Domestic waste generated</th>
            <th>E-waste generated</th>
            <th>PCPD E-waste generated</th>
            <th>Biomedical waste generated</th>
            <th>PCPD Biomedical waste generated</th>
            <th>Sanitary Waste generated</th>
            <th>PCPD Sanitary Waste generated</th>
            <th>C&D waste generated</th>
            <th>PCPD C&D waste generated</th>
            <th>School recycle any generated waste?</th>
            <th>Total Waste Generated(kilogram)</th>
            <th>Total Waste Recycled(kilogram)</th>
            <th>Percentage of Waste Recycled(%)</th>
            <th>Total biodegradable waste recycled</th>
            <th>PCPD of biodegradable recycled</th>
            <th>Total Dry/recyclable waste recycled</th>
            <th>PCPD Dry/recyclable</th>
            <th>Hazardous and toxic waste (Paints, lab waste, etc) recycled</th>
            <th>Oil from DG sets recycled</th>
            <th>Total Domestic waste recycled</th>
            <th>PCPD Domestic waste recycled</th>
            <th>E-waste recycled</th>
            <th>PCPD E-waste recycled</th>
            <th>Biomedical waste recycled</th>
            <th>PCPD Biomedical waste recycled</th>
            <th>Sanitary Waste recycled</th>
            <th>PCPD Sanitary Waste recycled</th>
            <th>C&D waste recycled</th>
            <th>PCPD C&D waste recycled</th>
            <th>Composting facility</th>
            <th>Quantity of compost generated</th>
            <th>Reuse textbooks</th>
            <th>What is the final destination for waste from your school that is disposed of externally</th>
            <th>Does your school burn waste?</th>
            <th>Where does your school burn waste?</th>
            <th>What kind of waste is burnt/ incinerated?</th>
            <th>E-waste Disposal</th>
            <th>Who collects E-waste</th>
            <th>Are there awareness drives with regard to Reduce, Recycle and Reuse</th>
            <th>Is the study of the environment integrated into the curriculum?</th>
          </tr>
        </thead>
        <tbody>
          <?php if(!empty($_GET['userid'])){
		  $sr_no=0;
	      $school_id=$_GET['userid'];
	      $yoyData=getYOYComparisonAllData($school_id);
		  foreach($yoyData as $yoyDatas){
		 ?>
          <tr>
            <td><?php echo ++$sr_no; ?></td>
            <td><?php echo $yoyDatas->audit_year; ?></td>
            <td><?php echo $yoyDatas->school_id; ?></td>
            <td><?php echo $yoyDatas->name_of_the_school_institution; ?></td>
            <td><?php echo $yoyDatas->address_line_1; ?></td>
            <td><?php echo $yoyDatas->address_line_2; ?></td>
            <td><?php echo $yoyDatas->state; ?></td>
            <td><?php echo $yoyDatas->district; ?></td>
            <td><?php echo $yoyDatas->city; ?></td>
            <td><?php echo $yoyDatas->pin_code; ?></td>
            <td><?php echo $yoyDatas->std_code; ?></td>
            <td><?php echo $yoyDatas->landline_no; ?></td>
            <td><?php echo $yoyDatas->mobile_no; ?></td>
            <td><?php echo $yoyDatas->principals_name; ?></td>
            <td><?php echo $yoyDatas->principal_mobile; ?></td>
            <td><?php echo $yoyDatas->gsp_coordintor_name; ?></td>
            <td><?php echo $yoyDatas->gsp_coordintor_email; ?></td>
            <td><?php echo $yoyDatas->gsp_coordintor_mobile; ?></td>
            <td><?php echo $yoyDatas->school_category; ?></td>
            <td><?php echo $yoyDatas->no_of_shifts; ?></td>
            <td><?php echo $yoyDatas->lowest_level; ?></td>
            <td><?php echo $yoyDatas->highest_level; ?></td>
            <td><?php echo $yoyDatas->school_type___gender; ?></td>
            <td><?php echo $yoyDatas->board_of_education; ?></td>
            <td><?php echo $yoyDatas->total_population; ?></td>
            <td><?php echo $yoyDatas->students; ?></td>
            <td><?php echo $yoyDatas->teachers	; ?></td>
            <td><?php echo $yoyDatas->non_teaching_staff; ?></td>
            <td><?php echo $yoyDatas->male; ?></td>
            <td><?php echo $yoyDatas->female; ?></td>
            <td><?php echo $yoyDatas->no_of_classrooms; ?></td>
            <td><?php echo $yoyDatas->window_floor_ratio; ?></td>
            <td><?php echo $yoyDatas->ownership_of_vehicles; ?></td>
            <td><?php echo $yoyDatas->no_of_vehicles; ?></td>
            <td><?php echo $yoyDatas->no_of_vehicles_more_than_eight_years_old; ?></td>
            <td><?php echo $yoyDatas->no_of_vehicles_with_air_conditioner; ?></td>
            <td><?php echo $yoyDatas->no_of_vehicles_with_puc_certificate; ?></td>
            <td><?php echo $yoyDatas->no_of_vehicles_with_authorised_parking_available; ?></td>
            <td><?php echo $yoyDatas->annual_road_worthiness_certificate; ?></td>
            <td><?php echo $yoyDatas->no_of_others_bio_fuel; ?></td>
            <td><?php echo $yoyDatas->subtotal_diesel; ?></td>
            <td><?php echo $yoyDatas->subtotal_petrol; ?></td>
            <td><?php echo $yoyDatas->subtotal_lpg; ?></td>
            <td><?php echo $yoyDatas->subtotal_cng; ?></td>
            <td><?php echo $yoyDatas->subtotal_hybrid; ?></td>
            <td><?php echo $yoyDatas->subtotal_electric; ?></td>
            <td><?php echo $yoyDatas->subtotal_bio_fuel; ?></td>
            <td><?php echo $yoyDatas->sustainble_motorised_vehicles_numbers; ?></td>
            <td><?php echo $yoyDatas->sustainble_motorised_vehicles_percentgae; ?></td>
            <td><?php echo $yoyDatas->non_polluting_transport_numbers; ?></td>
            <td><?php echo $yoyDatas->non_polluting_transport_percentage; ?></td>
            <td><?php echo $yoyDatas->no_of_students_suffer_from_respiratory_problems; ?></td>
            <td><?php echo $yoyDatas->percentage_of_students_suffer_from_respiratory; ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->air_quality_monitoring_in_school); ?></td>
            <td><?php echo $yoyDatas->air_quality_monitoring_in_close_to_school; ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->school_has_its_own_vehicle); ?></td>
            <td><?php echo $yoyDatas->electricity_from_the_board_mj; ?></td>
            <td><?php echo $yoyDatas->electricity_from_generator_mj; ?></td>
            <td><?php echo $yoyDatas->petrol_mj; ?></td>
            <td><?php echo $yoyDatas->diesel_mj; ?></td>
            <td><?php echo $yoyDatas->cng_mj; ?></td>
            <td><?php echo $yoyDatas->kerosene_mj; ?></td>
            <td><?php echo $yoyDatas->coal_mj; ?></td>
            <td><?php echo $yoyDatas->wood_mj; ?></td>
            <td><?php echo $yoyDatas->animal_waste_mj; ?></td>
            <td><?php echo $yoyDatas->solar_mj; ?></td>
            <td><?php echo $yoyDatas->wind_mj; ?></td>
            <td><?php echo $yoyDatas->lpg_mj; ?></td>
            <td><?php echo $yoyDatas->piped_natural_gas_mj; ?></td>
            <td><?php echo $yoyDatas->biogas_mj; ?></td>
            <td><?php echo $yoyDatas->others_mj; ?></td>
            <td><?php echo $yoyDatas->total_mj; ?></td>
            <td><?php echo $yoyDatas->per_capita_energy_consumption; ?></td>
            <td><?php echo $yoyDatas->no_of_air_conditioner; ?></td>
            <td><?php echo $yoyDatas->bee_star_rating_air_conditioner; ?></td>
            <td><?php echo $yoyDatas->no_of_refrigerator; ?></td>
            <td><?php echo $yoyDatas->no_of_microwave; ?></td>
            <td><?php echo $yoyDatas->no_of_tubelight; ?></td>
            <td><?php echo $yoyDatas->no_of_cfl_bulb; ?></td>
            <td><?php echo $yoyDatas->no_of_led_bulb; ?></td>
            <td><?php echo $yoyDatas->no_of_fans; ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->alternate_source_of_energy); ?></td>
            <td><?php echo $yoyDatas->solar; ?></td>
            <td><?php echo $yoyDatas->wind; ?></td>
            <td><?php echo $yoyDatas->hydro; ?></td>
            <td><?php echo $yoyDatas->biogas_plant; ?></td>
            <td><?php echo $yoyDatas->combination_of_solar_and_wind; ?></td>
            <td><?php echo $yoyDatas->use_of_solar_water_heater; ?></td>
            <td><?php echo $yoyDatas->provision_of_packaged_food; ?></td>
            <td><?php echo $yoyDatas->serve_mid_day_meal; ?></td>
            <td><?php echo $yoyDatas->students_bring_own_lunch; ?></td>
            <td><?php echo $yoyDatas->how_many_students_bring_home_made_lunch; ?></td>
            <td><?php echo $yoyDatas->how_many_bring_packaged_food_as_home_made_lunch; ?></td>
            <td><?php echo $yoyDatas->teachers_have_responsibility_to_check; ?></td>
            <td><?php echo $yoyDatas->savouary_snacks_count_of_flavour; ?></td>
            <td><?php echo $yoyDatas->savouary_snacks_no_of_item_sold; ?></td>
            <td><?php echo $yoyDatas->month_1; ?></td>
            <td><?php echo $yoyDatas->instand_noodles_count_of_flavour; ?></td>
            <td><?php echo $yoyDatas->instand_noodles_no_of_item_sold; ?></td>
            <td><?php echo $yoyDatas->month_2; ?></td>
            <td><?php echo $yoyDatas->potato_fries_count_of_flavour; ?></td>
            <td><?php echo $yoyDatas->potato_fries_no_of_item_sold; ?></td>
            <td><?php echo $yoyDatas->month_3; ?></td>
            <td><?php echo $yoyDatas->confectionary_count_of_flavour; ?></td>
            <td><?php echo $yoyDatas->confectionary_no_of_item_sold; ?></td>
            <td><?php echo $yoyDatas->month_4; ?></td>
            <td><?php echo $yoyDatas->ice_cream_count_of_flavour; ?></td>
            <td><?php echo $yoyDatas->ice_cream_no_of_items_sold; ?></td>
            <td><?php echo $yoyDatas->month_5; ?></td>
            <td><?php echo $yoyDatas->carbonatd_beverages_count_of_flavour; ?></td>
            <td><?php echo $yoyDatas->carbonated_beverages_no_of_items_sold; ?></td>
            <td><?php echo $yoyDatas->month_6; ?></td>
            <td><?php echo $yoyDatas->sugar_sweetened_non_carbonated_beverages_count_of_flavour; ?></td>
            <td><?php echo $yoyDatas->sugar_sweetened_non_carbonated_beverages_no_of_items_sold; ?></td>
            <td><?php echo $yoyDatas->month_7; ?></td>
            <td><?php echo $yoyDatas->packaged_bottled_nimboo_paani_lassi_flavoured_milk_count_of_flav; ?></td>
            <td><?php echo $yoyDatas->packaged_bottled_nimboo_paani_lassi_flavoured_milk_no_of_item_so; ?></td>
            <td><?php echo $yoyDatas->month_8; ?></td>
            <td><?php echo $yoyDatas->packaged_bottled_energy_drinks_count_of_flavour; ?></td>
            <td><?php echo $yoyDatas->packaged_bottled_energy_drinks_no_of_items_sold; ?></td>
            <td><?php echo $yoyDatas->month_9; ?></td>
            <td><?php echo $yoyDatas->school_serve_traditional_indian_snacks; ?></td>
            <td><?php echo $yoyDatas->samosas; ?></td>
            <td><?php echo $yoyDatas->idli_vada; ?></td>
            <td><?php echo $yoyDatas->pav_bhaji; ?></td>
            <td><?php echo $yoyDatas->momos; ?></td>
            <td><?php echo $yoyDatas->others_1; ?></td>
            <td><?php echo $yoyDatas->descriptions; ?></td>
            <td><?php echo $yoyDatas->schools_serve_traditional_indian_beverages; ?></td>
            <td><?php echo $yoyDatas->nimboo_pani; ?></td>
            <td><?php echo $yoyDatas->sweet_lassi; ?></td>
            <td><?php echo $yoyDatas->salted_butter_milk; ?></td>
            <td><?php echo $yoyDatas->aam_panna; ?></td>
            <td><?php echo $yoyDatas->others_2; ?></td>
            <td><?php echo $yoyDatas->schools_distributes_packaged_food_items_as_rewards; ?></td>
            <td><?php echo $yoyDatas->details; ?></td>
            <td><?php echo $yoyDatas->school_distribute_chocolates_similar_products_as_refreshments; ?></td>
            <td><?php echo $yoyDatas->details_1; ?></td>
            <td><?php echo $yoyDatas->school_events_sponsored_by_food_companies_brands; ?></td>
            <td><?php echo $yoyDatas->details_2; ?></td>
            <td><?php echo $yoyDatas->are_their_banners_brochures_hoardings_put_up_during_the_events; ?></td>
            <td><?php echo $yoyDatas->school_measure_height_and_weight_of_all_the_student; ?></td>
            <td><?php echo $yoyDatas->how_regularly_height__weight_is_measured; ?></td>
            <td><?php echo $yoyDatas->site_area_in_square_meter; ?></td>
            <td><?php echo $yoyDatas->ground_coverage_area; ?></td>
            <td><?php echo $yoyDatas->green_landscaped_area; ?></td>
            <td><?php echo $yoyDatas->play_area_that_has; ?></td>
            <td><?php echo $yoyDatas->green_area_on_ground	; ?></td>
            <td><?php echo $yoyDatas->play_area_that_is_paved_concrete; ?></td>
            <td><?php echo $yoyDatas->surface_parking_area; ?></td>
            <td><?php echo $yoyDatas->service_area_on_ground; ?></td>
            <td><?php echo $yoyDatas->roof_and_terrace_area; ?></td>
            <td><?php echo $yoyDatas->green_cover_on_exposed_roof_and_terrace; ?></td>
            <td><?php echo $yoyDatas->total_built_up_constructed_area; ?></td>
            <td><?php echo $yoyDatas->total_area; ?></td>
            <td><?php echo $yoyDatas->total_green_area; ?></td>
            <td><?php echo $yoyDatas->percentage_of_green_area	; ?></td>
            <td><?php echo $yoyDatas->total_plants; ?></td>
            <td><?php echo $yoyDatas->native_plants; ?></td>
            <td><?php echo $yoyDatas->exotic_plants; ?></td>
            <td><?php echo $yoyDatas->total_animals; ?></td>
            <td><?php echo $yoyDatas->native_animals; ?></td>
            <td><?php echo $yoyDatas->exotic_animals; ?></td>
            <td><?php echo $yoyDatas->use_of_chemical_pesticides; ?></td>
            <td><?php echo $yoyDatas->drinking; ?></td>
            <td><?php echo $yoyDatas->toilet_flushing; ?></td>
            <td><?php echo $yoyDatas->personal_cleaning; ?></td>
            <td><?php echo $yoyDatas->washing_clothes; ?></td>
            <td><?php echo $yoyDatas->cooking; ?></td>
            <td><?php echo $yoyDatas->cleaning_utensils; ?></td>
            <td><?php echo $yoyDatas->washing_vegetables; ?></td>
            <td><?php echo $yoyDatas->mopping_floors; ?></td>
            <td><?php echo $yoyDatas->gardening; ?></td>
            <td><?php echo $yoyDatas->others_3	; ?></td>
            <td><?php echo $yoyDatas->total_water_consumption_per_day; ?></td>
            <td><?php echo $yoyDatas->per_capita_day_water_consumption	; ?></td>
            <td><?php echo $yoyDatas->ground_water_as_source; ?></td>
            <td><?php echo $yoyDatas->surface_water_as_source; ?></td>
            <td><?php echo $yoyDatas->rainwater_as_source; ?></td>
            <td><?php echo $yoyDatas->recycled_waste_water_as_source; ?></td>
            <td><?php echo $yoyDatas->municipality_as_supplier; ?></td>
            <td><?php echo $yoyDatas->panchayat_as_supplier; ?></td>
            <td><?php echo $yoyDatas->phed_as_supplier; ?></td>
            <td><?php echo $yoyDatas->private_supplier; ?></td>
            <td><?php echo $yoyDatas->schools_own_supply; ?></td>
            <td><?php echo $yoyDatas->school_gets_daily_water_supply; ?></td>
            <td><?php echo $yoyDatas->do_all_tanks_in_the_school_have_float_valves; ?></td>
            <td><?php echo $yoyDatas->do_the_drinking_water_points_have_spill; ?></td>
            <td><?php echo $yoyDatas->does_your_school_use_appliances_with; ?></td>
            <td><?php echo $yoyDatas->are_dual_flush_systems_installed_in_the_toilets; ?></td>
            <td><?php echo $yoyDatas->does_your_school_encourage_bottled_water; ?></td>
            <td><?php echo $yoyDatas->does_your_school_grow_local_plant_species_which; ?></td>
            <td><?php echo $yoyDatas->has_your_school_initiated_any_water_conservation; ?></td>
            <td><?php echo $yoyDatas->does_your_school_use_a_drip_or_irrigation_system; ?></td>
            <td><?php echo $yoyDatas->do_you_have_rainwater_harvesting_rwh_system_in_your_school; ?></td>
            <td><?php echo $yoyDatas->does_your_school_harvest_different; ?></td>
            <td><?php echo $yoyDatas->which_is_the_catchment_area_being_harvested_by_your_school; ?></td>
            <td><?php echo $yoyDatas->how_does_your_school_harvest_rainwater; ?></td>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_drinking)){echo $yoyDatas->stored_rainwater_use_drinking;}else{ echo "NA"; }; ?></td>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_gardening)){echo $yoyDatas->stored_rainwater_use_gardening;}else{ echo "NA"; }; ?></td>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_mopping)){echo $yoyDatas->stored_rainwater_use_mopping;}else{ echo "NA"; }; ?></td>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_toilets)){echo $yoyDatas->stored_rainwater_use_toilets;}else{ echo "NA"; }; ?></td>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_washing_vehicles)){echo $yoyDatas->stored_rainwater_use_washing_vehicles;}else{ echo "NA"; }; ?></td>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_kitchen)){echo $yoyDatas->stored_rainwater_use_kitchen;}else{ echo "NA"; }; ?></td>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_shower_brushing_teeth_bathing_hand_washing)){echo $yoyDatas->stored_rainwater_use_shower_brushing_teeth_bathing_hand_washing;}else{ echo "NA"; }; ?></td>
            <td><?php  if(!empty($yoyDatas->stored_rainwater_use_swimming_pool)){echo $yoyDatas->stored_rainwater_use_swimming_pool;}else{ echo "NA"; }; ?></td>
            <td><?php echo $yoyDatas->if_your_school_only_stores_rainwater_please; ?></td>
            <td><?php echo $yoyDatas->does_your_school_have_rainwater_storage_tank; ?></td>
            <td><?php echo $yoyDatas->total_number_of_storage_tanks; ?></td>
            <td><?php echo $yoyDatas->does_your_school_have_groundwater_recharge_structure; ?></td>
            <td><?php echo $yoyDatas->total_number_of_recharge_structure; ?></td>
            <td><?php echo $yoyDatas->type_of_groundwater_recharge; ?></td>
            <td><?php echo $yoyDatas->if_your_school_practices_rainwater_harvesting_then; ?></td>
            <td><?php echo $yoyDatas->how_much_area_in_your_school_is_harvested; ?></td>
            <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_conduits)){echo $yoyDatas->rainwater_harvesting_structures_conduits;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_gutters)){echo $yoyDatas->rainwater_harvesting_structures_gutters;}else{ echo "NA"; }  ?></td>
            <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_filter_unit)){echo $yoyDatas->rainwater_harvesting_structures_filter_unit;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_first_flush)){echo $yoyDatas->rainwater_harvesting_structures_first_flush;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_storage_tank)){echo $yoyDatas->rainwater_harvesting_structures_storage_tank;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_collection_sump)){echo $yoyDatas->rainwater_harvesting_structures_collection_sump;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->rainwater_harvesting_structures_collection_sump)){echo $yoyDatas->rainwater_harvesting_structures_pump_unit;}else{ echo "NA"; } ?></td>
            <td><?php echo $yoyDatas->rainwater_harvesting_structures_recharge_structure; ?></td>
            <td><?php echo $yoyDatas->rwh_structures_present_in_your_school; ?></td>
            <td><?php echo $yoyDatas->where_is_your_filter_unit; ?></td>
            <td><?php echo $yoyDatas->types_of_filter_used_in_your_school; ?></td>
            <td><?php echo $yoyDatas->does_your_school_clean_your_catchment_and_system; ?></td>
            <td><?php echo $yoyDatas->when_does_your_school_clean_the_catchment_and_rwh_system; ?></td>
            <td><?php echo $yoyDatas->does_your_school_monitor_the_rainwater_harvesting; ?></td>
            <td><?php echo $yoyDatas->when_does_your_school_monitor_the_groundwater_level; ?></td>
            <td><?php echo $yoyDatas->what_is_the_trend_of_groundwater_level; ?></td>
            <td><?php echo $yoyDatas->how_much_was_the_increase; ?></td>
            <td><?php echo $yoyDatas->does_the_school_have_separate_toilets_for_males_and_females; ?></td>
            <td><?php echo $yoyDatas->are_the_toilets_accessible_and_safe_to_use_for_children; ?></td>
            <td><?php echo $yoyDatas->are_the_toilets_accessible_and_safe_abled_children; ?></td>
            <td><?php echo $yoyDatas->are_the_toilets_accessible_and_safe_abled_staff_teaching; ?></td>
            <td><?php echo $yoyDatas->are_the_toilets_situated_in_the_right_location_in; ?></td>
            <td><?php echo $yoyDatas->is_there_sufficient_light_during_day_time; ?></td>
            <td><?php echo $yoyDatas->no__of_drinking_water_taps; ?></td>
            <td><?php echo $yoyDatas->load_on_dwt; ?></td>
            <td><?php echo $yoyDatas->no_of_hand_pumps; ?></td>
            <td><?php echo $yoyDatas->no__of_ablution_taps; ?></td>
            <td><?php echo $yoyDatas->load_on_ablution_tap; ?></td>
            <td><?php echo $yoyDatas->toilet_for_girls; ?></td>
            <td><?php echo $yoyDatas->toilet_for_boys; ?></td>
            <td><?php echo $yoyDatas->common_toilets; ?></td>
            <td><?php echo $yoyDatas->no__of_toilets_water_closet; ?></td>
            <td><?php echo $yoyDatas->load_on_water_closet; ?></td>
            <td><?php echo $yoyDatas->no__of_urinals; ?></td>
            <td><?php echo $yoyDatas->load_on_urinals; ?></td>
            <td><?php echo $yoyDatas->no__of_water_outlets; ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->water_storage_system_in_the_toilets); ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->is_the_water_supply_sufficient); ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->are_the_toilets_cleaned); ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->does_school_treat_waste_water); ?></td>
            <td><?php echo $yoyDatas->does_schools_reuse_treated_wastewater; ?></td>
            <td><?php echo $yoyDatas->how_does_your_school_reuse_wastewater; ?></td>
            <td><?php if(!empty($yoyDatas->school_reuse_wastewater_in_flushing)){echo $yoyDatas->school_reuse_wastewater_in_flushing;}else{ echo "NA"; }  ?></td>
            <td><?php if(!empty($yoyDatas->school_reuse_wastewater_in_recharge_ground_water)){echo $yoyDatas->school_reuse_wastewater_in_recharge_ground_water;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->please_specify_the_fate_of_wastewater)){
			echo $yoyDatas->please_specify_the_fate_of_wastewater; }else{ echo "NA"; } ?></td>
            <td><?php echo $yoyDatas->school_segregated_solid_waste; ?></td>
            <td><?php if(!empty($yoyDatas->segregator_at_source)){ echo $yoyDatas->segregator_at_source;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->segregates_the_waste_by_students_and_teachers)){echo $yoyDatas->segregates_the_waste_by_students_and_teachers;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->segregates_the_waste_by_housekeeping)){ echo $yoyDatas->segregates_the_waste_by_housekeeping;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->segregates_the_waste_by_gardener)){echo $yoyDatas->segregates_the_waste_by_gardener;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->segregates_the_waste_by_ragpickers)){echo $yoyDatas->segregates_the_waste_by_ragpickers;}else{ echo "NA"; } ?></td>
            <td><?php if(!empty($yoyDatas->segregates_the_waste_by_other)){echo $yoyDatas->segregates_the_waste_by_other;}else{ echo "NA"; } ?></td>
            <td><?php echo $yoyDatas->no_of_category; ?></td>
            <td><?php echo $yoyDatas->collection_points_with_no_bins; ?></td>
            <td><?php echo $yoyDatas->collection_points_with_one_bin_mixed; ?></td>
            <td><?php echo $yoyDatas->collection_points_with_two_bins; ?></td>
            <td><?php echo $yoyDatas->collection_points_with_three_bins; ?></td>
            <td><?php echo $yoyDatas->total_collection_points; ?></td>
            <td><?php echo $yoyDatas->total_biodegradable_waste_generated; ?></td>
            <td><?php echo $yoyDatas->pcpd_of_biodegradable; ?></td>
            <td><?php echo $yoyDatas->total_dry_recyclable_waste_generated; ?></td>
            <td><?php echo $yoyDatas->pcpd_dry_recyclable; ?></td>
            <td><?php echo $yoyDatas->total_domestic_waste_generated; ?></td>
            <td><?php echo $yoyDatas->pcpd_domestic_waste_generated; ?></td>
            <td><?php echo $yoyDatas->e_waste_generated; ?></td>
            <td><?php echo $yoyDatas->pcpd_e_waste_generated; ?></td>
            <td><?php echo $yoyDatas->biomedical_waste_generated; ?></td>
            <td><?php echo $yoyDatas->pcpd_biomedical_waste_generated; ?></td>
            <td><?php echo $yoyDatas->sanitary_waste_generated; ?></td>
            <td><?php echo $yoyDatas->pcpd_sanitary_waste_generated; ?></td>
            <td><?php echo $yoyDatas->cd_waste_generated; ?></td>
            <td><?php echo $yoyDatas->pcpd_cd_waste_generated; ?></td>
            <td><?php echo $yoyDatas->school_recycle_any_generated_waste; ?></td>
            <td><?php echo $yoyDatas->total_waste_generated_kilogram; ?></td>
            <td><?php echo $yoyDatas->total_waste_recycled_kilogram; ?></td>
            <td><?php echo $yoyDatas->percentage_of_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->total_biodegradable_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->pcpd_of_biodegradable_recycled; ?></td>
            <td><?php echo $yoyDatas->total_dry_recyclable_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->hazardous_and_toxic_waste_paints_lab_waste_etc_recycled; ?></td>
            <td><?php echo $yoyDatas->oil_from_dg_sets_recycled; ?></td>
            <td><?php echo $yoyDatas->total_domestic_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->pcpd_domestic_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->e_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->pcpd_e_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->biomedical_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->pcpd_biomedical_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->sanitary_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->pcpd_sanitary_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->cd_waste_recycled; ?></td>
            <td><?php echo $yoyDatas->pcpd_cd_waste_recycled; ?></td>
            <td><?php  getYOYComparisonYesNo($yoyDatas->composting_facility); ?></td>
            <td><?php echo $yoyDatas->quantity_of_compost_generated; ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->reuse_textbooks); ?></td>
            <td><?php echo $yoyDatas->what_is_the_final_destination_for_waste_from_your; ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->does_your_school_burn_waste); ?></td>
            <td><?php echo $yoyDatas->where_does_your_school_burn_waste; ?></td>
            <td><?php echo $yoyDatas->what_kind_of_waste_is_burnt__incinerated; ?></td>
            <td><?php if(!empty($yoyDatas->e_waste_disposal)){ echo $yoyDatas->e_waste_disposal;}else{ echo "NA";} ?></td>
            <td><?php if(!empty($yoyDatas->who_collects_e_waste)){ echo $yoyDatas->who_collects_e_waste;}else{ echo "NA";} ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->are_there_awareness_drives_with_regard); ?></td>
            <td><?php getYOYComparisonYesNo($yoyDatas->is_the_study_of_the_environment_integrated); ?></td>
          </tr>
          <?php }
	   }?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/highcharts-more.js"></script>
<script>
        $(function () {
            // Issue #602 workaround
            Highcharts.seriesTypes.gauge.prototype.drawLegendSymbol = 
            Highcharts.seriesTypes.column.prototype.drawLegendSymbol;
            var chartColors = ['#828282','#424242'];
            var gaugePBColors = ['#ff0000','#ffa500','#ffff00','#008000'];
            
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'gauge01',
                    type: 'gauge',
                    backgroundColor: 'none'
                },
                
                colors: [
                    chartColors[0],
                    chartColors[1]
                ],
                
                credits: {
                    enabled: false
                },
            
                title: {
                    text: 'GSP Audit 2015',
                    style: {
                        fontFamily: 'arial,helvetica,sans-serif',
                        color: chartColors[1],
                        fontWeight: 'bold',
                        fontSize: '24px'
                    }
                },
                
                legend: {
                    align: 'left',
                    verticalAlign: 'bottom',
                    layout: 'vertical',
                    x: 0,
                    y: -112,
                    floating: true,
                    borderWidth:0
                },
                
                navigation: {
                    buttonOptions: {
                        floating: true,
                        align: 'right',
                        verticalAlign: 'bottom',
                        y: -134,
                        backgroundColor: 'white',
                        borderWidth: 0,
                        symbolSize: 20
                    },
                    menuStyle: {
                        borderWidth: 0,
                        backgroundColor: '#424242',
                        borderRadius: '7px',
                        padding: '5px 0',
                        overflow: 'hidden',
                        BoxShadow: '2px 2px 4px rgba(255,0,0,1) !important'
                    },
                    menuItemStyle: {
                        fontSize: '12px',
                        color: '#ffffff',
                        padding: '3px 12px 5px'
                    },
                    menuItemHoverStyle: {
                        backgroundColor: '#828282'
                    }
                },
                
                exporting: {
                    buttons: {
                        exportButton: {
                            symbolFill: '#424242',
                            symbolStroke: '#424242',
                            hoverSymbolFill: '#828282',
                            hoverSymbolStroke: '#828282'
                        },
                        printButton: {
                            enabled: false
                        }
                    }
                },
                
                pane: [{
                    startAngle: -90,
                    endAngle: 90,
                    background: null
                }],                        
            
                yAxis: [{
                    min: 1,
                    max: 100,
                    lineColor: 'transparent',
                    tickWidth: 2,
                    tickLength: 12,
                    tickColor: 'transparent', /*'#ffffff',*/
                    minorTickColor: 'transparent',
                    labels: {
                        rotation: null,
                        distance: 15,
                        zIndex: 1
                    },
                    plotBands: [{
                        from: 0,
                        to: 34.9,
                        color: gaugePBColors[0],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 35,
                        to: 49.9,
                        color: gaugePBColors[1],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 50,
                        to: 69.9,
                        color: gaugePBColors[2],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 70,
                        to: 100,
                        color: gaugePBColors[3],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    }],
                    pane: 0
                }],
                
                plotOptions: {
                    gauge: {
                        dial: {
                            radius: '100%',
                            baseWidth: 7,
                            baseLength: 14,
                            rearLength: 0
                        },
                        pivot: {
                            radius: 3,
                            backgroundColor: chartColors[1]
                        },
                        showInLegend: true
                    }
                },
                    
                series: [{
                    name: 'School Performace GSP Audit 2015',
                    data: [<?php if(!empty($result['data_2015'])){ if($result['data_2015']!=='NA'){echo $result['data_2015'];}else{ echo "0"; }}else{ echo "0";} ?>],
                    dial: {
                        backgroundColor: chartColors[0]
                    },
                    yAxis: 0,
                    dataLabels: {
                        enabled: true,
                        x: 44,
                        y: -157,
                        color: chartColors[0],
                        borderWidth: 0,
                        borderRadius: 7,
                        backgroundColor: '#ffffff',
                        padding: 1,
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold',
                            lineHeight: '40px'
                        }
                    }
                }]
              }
            );
        });
    
</script>
<script>
        $(function () {
            // Issue #602 workaround
            Highcharts.seriesTypes.gauge.prototype.drawLegendSymbol = 
            Highcharts.seriesTypes.column.prototype.drawLegendSymbol;
            var chartColors = ['#828282','#424242'];
            var gaugePBColors = ['#ff0000','#ffa500','#ffff00','#008000'];
            
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'gauge02',
                    type: 'gauge',
                    backgroundColor: 'none'
                },
                
                colors: [
                    chartColors[0],
                    chartColors[1]
                ],
                
                credits: {
                    enabled: false
                },
            
                title: {
                    text: 'GSP Audit 2016',
                    style: {
                        fontFamily: 'arial,helvetica,sans-serif',
                        color: chartColors[1],
                        fontWeight: 'bold',
                        fontSize: '24px'
                    }
                },
                
                legend: {
                    align: 'left',
                    verticalAlign: 'bottom',
                    layout: 'vertical',
                    x: 0,
                    y: -112,
                    floating: true,
                    borderWidth:0
                },
                
                navigation: {
                    buttonOptions: {
                        floating: true,
                        align: 'right',
                        verticalAlign: 'bottom',
                        y: -134,
                        backgroundColor: 'white',
                        borderWidth: 0,
                        symbolSize: 20
                    },
                    menuStyle: {
                        borderWidth: 0,
                        backgroundColor: '#424242',
                        borderRadius: '7px',
                        padding: '5px 0',
                        overflow: 'hidden',
                        BoxShadow: '2px 2px 4px rgba(255,0,0,1) !important'
                    },
                    menuItemStyle: {
                        fontSize: '12px',
                        color: '#ffffff',
                        padding: '3px 12px 5px'
                    },
                    menuItemHoverStyle: {
                        backgroundColor: '#828282'
                    }
                },
                
                exporting: {
                    buttons: {
                        exportButton: {
                            symbolFill: '#424242',
                            symbolStroke: '#424242',
                            hoverSymbolFill: '#828282',
                            hoverSymbolStroke: '#828282'
                        },
                        printButton: {
                            enabled: false
                        }
                    }
                },
                
                pane: [{
                    startAngle: -90,
                    endAngle: 90,
                    background: null
                }],                        
            
                yAxis: [{
                    min: 1,
                    max: 100,
                    lineColor: 'transparent',
                    tickWidth: 2,
                    tickLength: 12,
                    tickColor: 'transparent', /*'#ffffff',*/
                    minorTickColor: 'transparent',
                    labels: {
                        rotation: null,
                        distance: 15,
                        zIndex: 1
                    },
                    plotBands: [{
                        from: 0,
                        to: 34.9,
                        color: gaugePBColors[0],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 35,
                        to: 49.9,
                        color: gaugePBColors[1],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 50,
                        to: 69.9,
                        color: gaugePBColors[2],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 70,
                        to: 100,
                        color: gaugePBColors[3],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    }],
                    pane: 0
                }],
                
                plotOptions: {
                    gauge: {
                        dial: {
                            radius: '100%',
                            baseWidth: 7,
                            baseLength: 14,
                            rearLength: 0
                        },
                        pivot: {
                            radius: 3,
                            backgroundColor: chartColors[1]
                        },
                        showInLegend: true
                    }
                },
                    
            
                series: [{
                    name: 'School Performace GSP Audit 2016',
                    data: [<?php if(!empty($result['data_2016'])){ if($result['data_2016']!=='NA'){echo str_replace(array('$', '%'), '', $result['data_2016']);}else{ echo "0"; }}else{ echo "0";} ?>],
                    dial: {
                        backgroundColor: chartColors[0]
                    },
                    yAxis: 0,
                    dataLabels: {
                        enabled: true,
                        x: 44,
                        y: -157,
                        color: chartColors[0],
                        borderWidth: 0,
                        borderRadius: 7,
                        backgroundColor: '#ffffff',
                        padding: 1,
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold',
                            lineHeight: '40px'
                        }
                    }
                }]
              }
            );
        });
    
</script>
<script>
        $(function () {
            // Issue #602 workaround
            Highcharts.seriesTypes.gauge.prototype.drawLegendSymbol = 
            Highcharts.seriesTypes.column.prototype.drawLegendSymbol;
            var chartColors = ['#828282','#424242'];
            var gaugePBColors = ['#ff0000','#ffa500','#ffff00','#008000'];
            
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'gauge03',
                    type: 'gauge',
                    backgroundColor: 'none'
                },
                
                colors: [
                    chartColors[0],
                    chartColors[1]
                ],
                
                credits: {
                    enabled: false
                },
            
                title: {
                    text: 'GSP Audit 2017',
                    style: {
                        fontFamily: 'arial,helvetica,sans-serif',
                        color: chartColors[1],
                        fontWeight: 'bold',
                        fontSize: '24px'
                    }
                },
                
                legend: {
                    align: 'left',
                    verticalAlign: 'bottom',
                    layout: 'vertical',
                    x: 0,
                    y: -112,
                    floating: true,
                    borderWidth:0
                },
                
                navigation: {
                    buttonOptions: {
                        floating: true,
                        align: 'right',
                        verticalAlign: 'bottom',
                        y: -134,
                        backgroundColor: 'white',
                        borderWidth: 0,
                        symbolSize: 20
                    },
                    menuStyle: {
                        borderWidth: 0,
                        backgroundColor: '#424242',
                        borderRadius: '7px',
                        padding: '5px 0',
                        overflow: 'hidden',
                        BoxShadow: '2px 2px 4px rgba(255,0,0,1) !important'
                    },
                    menuItemStyle: {
                        fontSize: '12px',
                        color: '#ffffff',
                        padding: '3px 12px 5px'
                    },
                    menuItemHoverStyle: {
                        backgroundColor: '#828282'
                    }
                },
                
                exporting: {
                    buttons: {
                        exportButton: {
                            symbolFill: '#424242',
                            symbolStroke: '#424242',
                            hoverSymbolFill: '#828282',
                            hoverSymbolStroke: '#828282'
                        },
                        printButton: {
                            enabled: false
                        }
                    }
                },
                
                pane: [{
                    startAngle: -90,
                    endAngle: 90,
                    background: null
                }],                        
            
                yAxis: [{
                    min: 1,
                    max: 100,
                    lineColor: 'transparent',
                    tickWidth: 2,
                    tickLength: 12,
                    tickColor: 'transparent', /*'#ffffff',*/
                    minorTickColor: 'transparent',
                    labels: {
                        rotation: null,
                        distance: 15,
                        zIndex: 1
                    },
                    plotBands: [{
                        from: 0,
                        to: 34.9,
                        color: gaugePBColors[0],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 35,
                        to: 49.9,
                        color: gaugePBColors[1],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 50,
                        to: 69.9,
                        color: gaugePBColors[2],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 70,
                        to: 100,
                        color: gaugePBColors[3],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    }],
                    pane: 0
                }],
                
                plotOptions: {
                    gauge: {
                        dial: {
                            radius: '100%',
                            baseWidth: 7,
                            baseLength: 14,
                            rearLength: 0
                        },
                        pivot: {
                            radius: 3,
                            backgroundColor: chartColors[1]
                        },
                        showInLegend: true
                    }
                },
                    
            
                series: [{
                    name: 'School Performace GSP Audit 2017',
                    data: [<?php if(!empty($result['data_2017'])){ if($result['data_2017']!=='NA'){echo $result['data_2017'];}else{ echo "0"; }}else{ echo "0";} ?>],
                    dial: {
                        backgroundColor: chartColors[0]
                    },
                    yAxis: 0,
                    dataLabels: {
                        enabled: true,
                        x: 44,
                        y: -157,
                        color: chartColors[0],
                        borderWidth: 0,
                        borderRadius: 7,
                        backgroundColor: '#ffffff',
                        padding: 1,
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold',
                            lineHeight: '40px'
                        }
                    }
                }]
              }
            );
        });
    
</script>
<script>
        $(function () {
            // Issue #602 workaround
            Highcharts.seriesTypes.gauge.prototype.drawLegendSymbol = 
            Highcharts.seriesTypes.column.prototype.drawLegendSymbol;
            var chartColors = ['#828282','#424242'];
            var gaugePBColors = ['#ff0000','#ffa500','#ffff00','#008000'];
            
            var chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'gauge04',
                    type: 'gauge',
                    backgroundColor: 'none'
                },
                
                colors: [
                    chartColors[0],
                    chartColors[1]
                ],
                
                credits: {
                    enabled: false
                },
            
                title: {
                    text: 'GSP Audit 2018',
                    style: {
                        fontFamily: 'arial,helvetica,sans-serif',
                        color: chartColors[1],
                        fontWeight: 'bold',
                        fontSize: '24px'
                    }
                },
                
                legend: {
                    align: 'left',
                    verticalAlign: 'bottom',
                    layout: 'vertical',
                    x: 0,
                    y: -112,
                    floating: true,
                    borderWidth:0
                },
                
                navigation: {
                    buttonOptions: {
                        floating: true,
                        align: 'right',
                        verticalAlign: 'bottom',
                        y: -134,
                        backgroundColor: 'white',
                        borderWidth: 0,
                        symbolSize: 20
                    },
                    menuStyle: {
                        borderWidth: 0,
                        backgroundColor: '#424242',
                        borderRadius: '7px',
                        padding: '5px 0',
                        overflow: 'hidden',
                        BoxShadow: '2px 2px 4px rgba(255,0,0,1) !important'
                    },
                    menuItemStyle: {
                        fontSize: '12px',
                        color: '#ffffff',
                        padding: '3px 12px 5px'
                    },
                    menuItemHoverStyle: {
                        backgroundColor: '#828282'
                    }
                },
                
                exporting: {
                    buttons: {
                        exportButton: {
                            symbolFill: '#424242',
                            symbolStroke: '#424242',
                            hoverSymbolFill: '#828282',
                            hoverSymbolStroke: '#828282'
                        },
                        printButton: {
                            enabled: false
                        }
                    }
                },
                
                pane: [{
                    startAngle: -90,
                    endAngle: 90,
                    background: null
                }],                        
            
                yAxis: [{
                    min: 1,
                    max: 100,
                    lineColor: 'transparent',
                    tickWidth: 2,
                    tickLength: 12,
                    tickColor: 'transparent', /*'#ffffff',*/
                    minorTickColor: 'transparent',
                    labels: {
                        rotation: null,
                        distance: 15,
                        zIndex: 1
                    },
                    plotBands: [{
                        from: 0,
                        to: 34.9,
                        color: gaugePBColors[0],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 35,
                        to: 49.9,
                        color: gaugePBColors[1],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 50,
                        to: 69.9,
                        color: gaugePBColors[2],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    },{
                        from: 70,
                        to: 100,
                        color: gaugePBColors[3],
                        innerRadius: '50%',
                        outerRadius: '100%'
                    }],
                    pane: 0
                }],
                
                plotOptions: {
                    gauge: {
                        dial: {
                            radius: '100%',
                            baseWidth: 7,
                            baseLength: 14,
                            rearLength: 0
                        },
                        pivot: {
                            radius: 3,
                            backgroundColor: chartColors[1]
                        },
                        showInLegend: true
                    }
                },
                    
            
                series: [{
                    name: 'School Performace GSP Audit 2018',
                    data: [<?php if(!empty($result['data_2018'])){ if($result['data_2018']!=='NA'){echo $result['data_2018'];}else{ echo "0"; }}else{ echo "0";} ?>],
                    dial: {
                        backgroundColor: chartColors[0]
                    },
                    yAxis: 0,
                    dataLabels: {
                        enabled: true,
                        x: 44,
                        y: -157,
                        color: chartColors[0],
                        borderWidth: 0,
                        borderRadius: 7,
                        backgroundColor: '#ffffff',
                        padding: 1,
                        style: {
                            fontSize: '20px',
                            fontWeight: 'bold',
                            lineHeight: '40px'
                        }
                    }
                }]
              }
            );
        });
    
</script>
<style type="text/css">
.gauge {
    max-width: 370px;
    padding-top: 10px;
    height: 300px;
    overflow: hidden;
    border-radius: 7px;
    background-color: #ffffff;
}
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
