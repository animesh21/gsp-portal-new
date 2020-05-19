<?php
// UPDATE `tbl_yoy` SET `state`="Arunachal Pradesh (AR)" WHERE `state`="3"
//        error_reporting(0);
  //        ini_set('memory_limit', '-1');
           
         // echo count($record1);
          // echo "<pre>";
          // print_r($record1);

          // exit;

          //for ($i = 0; $i < count($record1); $i++) {
     
         
      //    $total=$record1[$i]->air_points + $record1[$i]->energy_points + $record1[$i]->food_points + $record1[$i]->land_points + $record1[$i]->water_points + $record1[$i]->waste_points; 
      // $percentage= ($total/95)*100;
      // $percentage=number_format($percentage,2);

      
        
  
      // $data = array('data_2019'=>$percentage);
      //       $this->db->where('school_id',$record1[$i]->school_id);
      //       $this->db->update('tbl_yoy', $data);
      //       echo $this->db->last_query(); 
          
          
            
      // $data2 = array('school_id'=>$record1[$i]->school_id, 'school_name'=>$record1[$i]->name , 'state'=>$record1[$i]->state , 'district'=>$record1[$i]->district , 'data_2019'=>$percentage, 'data_2018'=>'NA','data_2017'=>'NA','data_2016'=>'NA','data_2015'=>'NA');
      // // $this->db->where('school_id',$record1[$i]->school_id);
      //         $this->db->insert('tbl_yoy', $data2 );
      //        echo $this->db->last_query();
    

    //https://github.com/animesh21/gsp-portal-new/tree/master/19/assets/files/pe1.xlsx
//   }
 // exit;
     ?>      


<style type="text/css">
  
.statics-circle {width: 50px; height: 50px; background: #e86549; color: #fff; text-align: center; border-radius: 50%; padding: 20px; transition: all 0.5s ease-in-out; border: 5px solid #e86549; margin: 0 auto;}

.fa-circle{
font-size: 15px;
color: #1caf0b;
}
.fa-file-excel-o{
      margin-left: -10px;
    margin-top: -12px;
    font-size: 25px !important;
}

.wrapper .top-area a {
    position: absolute;
    /*top:20;*/
    right: 350px;}

    .content-form center {
    padding: 10px 0;
    margin-left: 115px;
}
hr{
  color: none;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div>
  <div class="top-area">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-6"> <p style="font-size: 30px; color: #474747;">ALL EXCEL DUMP Of PRIMARY PHASE-2</p> </div>
        <div class="col-md-6" style="font-size: 20px; color: #474747"> <center> <a href="" class="statics-circle" target="_blank"><i class="fa fa-file-excel-o"></i></a>Download All Excel</center>
     </div> 
      </div>
    </div>
      <hr/>

  </div>
<div>

  <div style="overflow: scroll">
    <table class="display dataTable no-footer" id="tablePerformance">
      <thead>
        <tr>
          <th>S.No</th>
          <th>School Id</th>
          <th>Name of the School/Institution</th>
          <th>Address Line 1</th>
          <th>Address Line 2</th>
          <th>Country</th>
          <th>State</th>
          <th>District</th>
          <th>City</th>
          <th>Pin Code</th>
          <th>ISD Code</th>
          <th>STD Code</th>
          <th>Land Line No.</th>
          <th>Mobile No.</th>
          <th>Principal&#39;s Name</th>
          <th>School Email-id</th>
          <th>GSP Coordintor Name</th>
          <th>GSP Coordintor Email</th>
          <th>GSP Coordintor Mobile</th>
          <th>School Category</th>
          <th>No. of Shifts</th>
          <th>Lowest Level</th>
          <th>Highest Level</th>
          <th>School type-Gender</th>
          <th>Board of Education</th>
          <th>Total Population</th>
          <th>Students</th>
          <th>Teachers</th>
          <th>Non-Teaching Staff</th>
          <th>Male</th>
          <th>Female</th>
          <th>Visitors</th>
          <th>No. of Working Days</th>
          <th>Audit Period</th>
          <th>Location</th>
          <th>Type of Aid</th>
          <th>No. of Classrooms</th>
          <th>Total Number of Well-ventilated Classrooms in your School</th>
          <th>Window-floor Ratio(%)</th>
          <th>Ownership of Vehicles</th>
          <th>No. of Vehicles</th>
          <th>No. of Vehicles more than eight years old</th>
          <th>No. of Vehicles with Air Conditioner</th>
          <th>No. of Vehicles with PUC Certificate</th>
          <th>No. of Vehicles with Authorised parking available</th>
          <th>Annual Road worthiness certificate</th>
          <th>No. of Buses</th>
          <th>No. of Buses on Diesel</th>
          <th>No. of Buses Petrol</th>
          <th>No. of Buses LPG</th>
          <th>No. of Buses CNG</th>
          <th>No. of Buses Hybrid</th>
          <th>No. of Buses Electric</th>
          <th>No. of Buses Biofuel</th>
          <th>No. of Cars</th>
          <th>No. of Cars Diesel</th>
          <th>No. of Cars Petrol</th>
          <th>No. of Cars LPG</th>
          <th>No. of Cars CNG</th>
          <th>No. of Cars Hybrid</th>
          <th>No. of Cars Electric</th>
          <th>No. of Cars Biofuel</th>
          <th>No. of Vans</th>
          <th>No. of Vans Diesel</th>
          <th>No. of Vans Petrol</th>
          <th>No. of Vans LPG</th>
          <th>No. of Vans CNG</th>
          <th>No. of Vans Hybrid</th>
          <th>No. of Vans Electric</th>
          <th>No. of Vans Bio Fuel</th>
          <th>No. of Others</th>
          <th>No. of Others Diesel</th>
          <th>No. of Others Pterol</th>
          <th>No. of Others LPG</th>
          <th>No. of Others CNG</th>
          <th>No. of Others Hybrid</th>
          <th>No. of Others Electric</th>
          <th>No. of Others Bio-fuel</th>
          <th>Subtotal Diesel</th>
          <th>Subtotal Petrol</th>
          <th>Subtotal LPG</th>
          <th>Subtotal CNG</th>
          <th>Subtotal Hybrid</th>
          <th>Subtotal Electric</th>
          <th>Subtotal Bio Fuel</th>
          <th>School Bus Students</th>
          <th>School Bus Teachers</th>
          <th>School Bus Nonteaching</th>
          <th>School Bus Total</th>
          <th>Public Bus Students</th>
          <th>Public Bus Teachers</th>
          <th>Public Bus Non-teaching</th>
          <th>Public Bus Total</th>
          <th>School Transport Students</th>
          <th>School Transport Teachers</th>
          <th>School Transport Non-teaching</th>
          <th>School Transport Total</th>
          <th>Public Transport Students</th>
          <th>Public Transport Teachers</th>
          <th>Public Transport Non-teaching</th>
          <th>Public Transport Total</th>
          <th>Taxi four wheeler Students</th>
          <th>Taxi four wheeler Teachers</th>
          <th>Taxi four wheeler Non-teaching</th>
          <th>Taxi four wheeler Total</th>
          <th>Taxi three wheeler Students</th>
          <th>Taxi three wheeler Teachers</th>
          <th>Taxi three wheeler Non-teaching</th>
          <th>Taxi three wheeler Total</th>
          <th>Personal four wheeler Students</th>
          <th>Personal four wheeler Teacher</th>
          <th>Personal four wheeler Non-teaching</th>
          <th>Personal four wheeler Total</th>
          <th>Personal two wheeler Students</th>
          <th>Personal two wheeler Teachers</th>
          <th>Personal two wheeler Non-teaching</th>
          <th>Personal two wheeler Total</th>
          <th>Bicycle Students</th>
          <th>Bicycle Teachers</th>
          <th>Bicycle Non-teaching</th>
          <th>Bicycle Total</th>
          <th>On foot Students</th>
          <th>On foot Teachers</th>
          <th>On foot Non-teaching</th>
          <th>On foot Total</th>
          <th>Others Students</th>
          <th>Others Teachers</th>
          <th>Others Non-teaching</th>
          <th>Others Total</th>
          <th>Total of sustainable motorised Vehicle</th>
          <th>Total of Non-polluting mode</th>
          <th>Total of Private vehicles</th>
          <th>No. of students suffer from respiratory problems</th>
          <th>Total Points Air</th>
          <th>Electricity Bill</th>
          <th>School has its own vehicle</th>
          <th>Quantity consumed Electricity from Board (Kwh)</th>
          <th>Quantity consumed Electricity from Generator (Diesel)</th>
          <th>Quantity consumed Petrol (litres)</th>
          <th>Quantity consumed Diesel (lts)</th>
          <th>Quantity consumed CNG (Kg)</th>
          <th>Quantity consumed Kerosene (lts)</th>
          <th>Quantity consumed Coal (Kg)</th>
          <th>Quantity consumed Wood (kg)</th>
          <th>Quantity consumed Animal Waste (kg)</th>
          <th>Quantity consumed Solar (kwh)</th>
          <th>Quantity consumed Wind (kwh)</th>
          <th>Quantity consumed LPG (Kg)</th>
          <th>Quantity consumed PNG (Kg)</th>
          <th>Quantity consumed Biogas (Kg)</th>
          <th>Others</th>
          <th>No. of Air conditioner</th>
          <th>Size of Air conditioner</th>
          <th>BEE Star rating Air conditioner</th>
          <th>No. of Refrigerator</th>
          <th>Size of Refrigerator</th>
          <th>BEE Star rating Refrigerator</th>
          <th>No. of Microwave</th>
          <th>Size of Microwave</th>
          <th>BEE Star rating Microwave</th>
          <th>No. of Tubelight</th>
          <th>Size of Tubelight</th>
          <th>BEE Star rating Tubelight</th>
          <th>No. of CFL Bulb</th>
          <th>Size of CFL Bulb</th>
          <th>BEE Star rating CFL Bulb</th>
          <th>No. of LED Bulb</th>
          <th>Size of LED Bulb</th>
          <th>BEE Star rating LED Bulb</th>
          <th>No. of Fans</th>
          <th>Size of Fans</th>
          <th>BEE Star rating Fans</th>
          <th>Alternate source of Energy</th>
          <th>Solar</th>
          <th>Wind</th>
          <th>Hydro</th>
          <th>Biogas Plant</th>
          <th>Combination of Solar and Wind</th>
          <th>Use of Solar water heater</th>
          <th>Total points in Energy</th>
          <th>Provision of packaged food</th>
          <th>Serve Mid-day Meal</th>
          <th>If yes, then midday meal is served under:</th>
          <th>How many students bring home-made lunch</th>
          <th>How many bring packaged food as home-made lunch</th>
          <th>Teachers have responsibility to check</th>
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
          <th>Is cooking part of any regular subjects or extracurricular activities</th>
          <th>Details</th>
          <th>Total points Food</th>
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
          <th>Total number of floors (excluding ground floor)</th>
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
          <th>Total Points Land</th>
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
          <th>School gets daily water supply</th>
          <th>Duration of water supply</th>
          <th>Do you have Rainwater harvesting (RWH) system in your school</th>
          <th>Does your school harvest different catchments?</th>
          <th>Which is the catchment area being harvested by your school?</th>
          <th>How does your school harvest rainwater?</th>
          <th>If your school only stores rainwater, please select the use of stored rainwater</th>
          <th>Does your school have rainwater storage tank?</th>
          <th>Does your school have groundwater recharge structure?</th>
          <th>RWH structures present in your school</th>
          <th>Does your school clean your catchment and system</th>
          <th>Is there any improvement</th>
          <th>RWH Potential of schools with No RWH</th>
          <th>Does the school have separate toilets for males and females</th>
          <th>Are there sufficient toilets for women in your school</th>
          <th>Are there sufficient toilets for men in your school</th>
          <th>Are the toilets accessible and safe to use for children</th>
          <th>Are the toilets accessible and safe to use for differently abled children</th>
          <th>Are the toilets accessible and safe to use for differently abled staff (teaching and non-teaching)</th>
          <th>Are the toilets situated in the right location in terms of privacy and safety</th>
          <th>Is there sufficient light during day time</th>
          <th>Do you use soap to wash hands before and after lunch?</th>
          <th>Do you use soap to wash hands before and after using the toilet?</th>
          <th>No. of drinking water taps</th>
          <th>Load on DWT</th>
          <th>No. of Hand Pumps</th>
          <th>No. of Ablution taps</th>
          <th>Load on Ablution Tap</th>
          <th>Toilet for Girls</th>
          <th>Toilet for Boys</th>
          <th>Common Toilets</th>
          <th>No. of Toilets (water closet)</th>
          <th>Load on Water Closet</th>
          <th>No. of Urinals</th>
          <th>Load on Urinals</th>
          <th>No. of Water Outlets</th>
          <th>Water storage system in the toilets?</th>
          <th>Is the water supply sufficient?</th>
          <th>Are the toilets cleaned?</th>
          <th>Does school treat waste water</th>
          <th>Does schools reuse treated wastewater</th>
          <th>How does your school reuse wastewater</th>
          <th>Total points in Water</th>
          <th>School segregated solid waste</th>
          <th>No. of category</th>
          <th>Classroom no Bin</th>
          <th>Classroom (Mixed Bin)</th>
          <th>Classroom Two Bins</th>
          <th>Classroom Three Bins</th>
          <th>Classroom No. of collection points</th>
          <th>Playground no Bin</th>
          <th>Playground (Mixed Bin)</th>
          <th>Playground (Two Bins)</th>
          <th>Playground Three Bins</th>
          <th>Playground total Bins</th>
          <th>Common Area no Bin</th>
          <th>Common Area mixed Bin</th>
          <th>Common Area two Bins</th>
          <th>Common Area three Bins</th>
          <th>Common Area total Bins</th>
          <th>Staffroom no Bin</th>
          <th>Staffroom (Mixed Bin)</th>
          <th>Staffroom two Bins</th>
          <th>Staffroom three Bins</th>
          <th>Staffroom total Bins</th>
          <th>Laboratory no Bin</th>
          <th>Laboratory (Mixed Bin)</th>
          <th>Laboratory two Bins</th>
          <th>Laboratory three Bins</th>
          <th>Laboratory total Bins</th>
          <th>Canteen no Bin</th>
          <th>Canteen (Mixed)</th>
          <th>Canteen two Bins</th>
          <th>Canteen three Bins</th>
          <th>Canteen total Bins</th>
          <th>Clinic no Bin</th>
          <th>Clinic (mixed)</th>
          <th>Clinic two Bins</th>
          <th>Clinic three Bins</th>
          <th>Clinic total Bins</th>
          <th>Library no Bin</th>
          <th>Library (mixed)</th>
          <th>Library two Bins</th>
          <th>Library three Bins</th>
          <th>Library total Bins</th>
          <th>Toilet no Bin</th>
          <th>Toilet (mixed)</th>
          <th>Toilet two Bins</th>
          <th>Toilet three Bins</th>
          <th>Toilet total Bins</th>
          <th>Others no Bin</th>
          <th>Others (mixed)</th>
          <th>Others two Bins</th>
          <th>Others three Bins</th>
          <th>Others Total</th>
          <th>Collection points with no Bins</th>
          <th>Collection points with one Bin (mixed)</th>
          <th>Collection points with two Bins</th>
          <th>Collection points with three Bins</th>
          <th>Total Collection Points</th>
          <th>Garden waste generated</th>
          <th>Kitchen waste—Raw generated</th>
          <th>Kitchen waste—Cooked generated</th>
          <th>Wet waste generated</th>
          <th>Total biodegradable waste generated</th>
          <th>PCPD of biodegradable</th>
          <th>Plastic generated</th>
          <th>Paper generated</th>
          <th>Wood or classroom furniture generated</th>
          <th>Glass generated</th>
          <th>Metal generated</th>
          <th>Thermocol generated</th>
          <th>Tetra packs generated</th>
          <th>Total Dry/recyclable waste generated</th>
          <th>PCPD Dry/recyclable</th>
          <th>Hazardous and toxic waste (Paints, lab waste, etc)</th>
          <th>Oil from DG sets</th>
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
          <th>Garden waste recycled</th>
          <th>Kitchen waste—Raw recycled</th>
          <th>Kitchen waste—Cooked recycled</th>
          <th>Wet waste recycled</th>
          <th>Total biodegradable waste recycled</th>
          <th>PCPD of biodegradable recycled</th>
          <th>Plastic recycled</th>
          <th>Paper recycled</th>
          <th>Wood or classroom furniture recycled</th>
          <th>Glass recycled</th>
          <th>Metal recycled</th>
          <th>Thermocol recycled</th>
          <th>Tetra packs recycled</th>
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
          <th>Methodology of composting</th>
          <th>Quantity of compost generated</th>
          <th>Purpose of compost</th>
          <th>Reuse Text-books</th>
          <th>TVs BEE Star rating</th>
          <th>TVs Working</th>
          <th>TVs Non working</th>
          <th>TVs total</th>
          <th>VCR or DVD players BEE star rating</th>
          <th>VCR or DVD players working</th>
          <th>VCR or DVD players non-working</th>
          <th>VCR or DVD players total</th>
          <th>Refrigerators and freezers BEE star rating</th>
          <th>Refrigerators and freezers working</th>
          <th>Refrigerators and freezers non working</th>
          <th>Refrigerators and freezers total</th>
          <th>Washing machines BEE star rating</th>
          <th>Washing machines working</th>
          <th>Washing machines non working</th>
          <th>Washing machines total</th>
          <th>Air conditioners BEE star rating</th>
          <th>Air conditioners working</th>
          <th>Air conditioners non working</th>
          <th>Air conditioners total</th>
          <th>Heaters BEE Star rating</th>
          <th>Heaters working</th>
          <th>Heaters non-workin</th>
          <th>Heaters Total</th>
          <th>Microwaves BEE star rating</th>
          <th>Microwaves working</th>
          <th>Microwaves non-working</th>
          <th>Microwaves Total</th>
          <th>Ovens BEE star rating</th>
          <th>Ovens working</th>
          <th>Ovens non-working</th>
          <th>Ovens Total</th>
          <th>Toasters BEE star rating</th>
          <th>Toasters working</th>
          <th>Toasters non-working</th>
          <th>Toasters Total</th>
          <th>Electric kettles BEE star rating</th>
          <th>Electric kettles working</th>
          <th>Electric kettles non-working</th>
          <th>Electric kettles total</th>
          <th>Personal computers BEE star rating</th>
          <th>Personal computers working</th>
          <th>Personal computers non working</th>
          <th>Personal computers total</th>
          <th>Laptop BEE star rating</th>
          <th>Laptop working</th>
          <th>Laptop non working</th>
          <th>Laptop Total</th>
          <th>Notebook computers BEE star rating</th>
          <th>Notebook computers working</th>
          <th>Notebook computers non-working</th>
          <th>Notebook computers total</th>
          <th>Printers BEE star rating</th>
          <th>Printers working</th>
          <th>Printers non working</th>
          <th>Printers Total</th>
          <th>Copying equipment (photocopiers) BEE star rating</th>
          <th>Copying equipment (photocopiers) working</th>
          <th>Copying equipment (photocopiers) non-working</th>
          <th>Copying equipment (photocopiers) total</th>
          <th>Projectors BEE star rating</th>
          <th>Projectors working</th>
          <th>Projectors non-working</th>
          <th>Projectors Total</th>
          <th>Whiteboards BEE star rating</th>
          <th>Whiteboards working</th>
          <th>Whiteboards non-working</th>
          <th>Whiteboards Total</th>
          <th>Electrical & electronic typewriters BEE star rating</th>
          <th>Electrical and electronic typewriters working</th>
          <th>Electrical and electronic typewriters non-working</th>
          <th>Electrical and electronic typewriters total</th>
          <th>Pocket & desk calculators BEE star rating</th>
          <th>Pocket and desk calculators working</th>
          <th>Pocket and desk calculators non-working</th>
          <th>Pocket and desk calculators total</th>
          <th>Fax machines BEE star rating</th>
          <th>Fax machines working</th>
          <th>Fax machines non-working</th>
          <th>Fax machines Total</th>
          <th>Telex BEE star rating</th>
          <th>Telex working</th>
          <th>Telex non-working</th>
          <th>Telex total</th>
          <th>Telephones BEE star rating</th>
          <th>Telephones working</th>
          <th>Telephones non-working</th>
          <th>Telephones Total</th>
          <th>Pay telephones BEE star rating</th>
          <th>Pay telephones working</th>
          <th>Pay telephones non-working</th>
          <th>Pay telephones Total</th>
          <th>Mobiles BEE star rating</th>
          <th>Mobiles working</th>
          <th>Mobiles non-working</th>
          <th>Mobiles Total</th>
          <th>Answering systems BEE star rating</th>
          <th>Answering systems working</th>
          <th>Answering systems non-working</th>
          <th>Answering systems Total</th>
          <th>Induction cookers BEE star rating</th>
          <th>Induction cookers working</th>
          <th>Induction cookers non-working</th>
          <th>Induction cookers total</th>
          <th>Geysers/water heaters BEE star rating</th>
          <th>Geysers/water heaters working</th>
          <th>Geysers/water heaters non-working</th>
          <th>Geysers/water heaters total</th>
          <th>Do you know that your e-waste can be collected by an authorized dealer or dismantler?</th>
          <th>Who collects your e-waste, when not in working condition?</th>
          <th>What is the final destination for waste from your school that is disposed of externally</th>
          <th>Does your school burn waste?</th>
          <th>Where does your school burn waste?</th>
          <th>What kind of waste is burnt/ incinerated?</th>
          <th>Do you know that your E-waste can be collected by an authorised dealer or dismantler?</th>
          <th>Does the school have a policy on waste</th>
          <th>Are there awareness drives with regard to Reduce, Recycle and Reuse</th>
          <th>What form do these awareness drives take?</th>
          <th>Is the study of the environment integrated into the curriculum?</th>
          <th>Total Waste points</th>
          <th>Total Point</th>
          <th>Total Point In Percentage</th>
          <th>Remark</th>        
        </tr>
      </thead>
      <tbody>
        <?php
        error_reporting(0);
        // echo "<pre>";
        // print_r($record1[0]);exit;
          ini_set('memory_limit', '-1');
        
          for ($i = 0; $i < count($record1); $i++) { ?>
        <tr>
          <td><?php echo $i + 1; ?></td>
          <td><?php echo $record1[$i]->school_id; ?></td>
          <td><?php echo $record1[$i]->name; ?></td>
          <td><?php echo $record1[$i]->address1; ?></td>
          <td><?php echo $record1[$i]->address2; ?></td>
          <td><?php echo $record1[$i]->country; ?></td>
          <td><?php echo $record1[$i]->state_name; ?></td>
          <td><?php echo $record1[$i]->district_name; ?></td>
          <td><?php echo $record1[$i]->city; ?></td>
          <td><?php echo $record1[$i]->pincode; ?></td>
          <td><?php echo $record1[$i]->isd; ?></td>
          <td><?php echo $record1[$i]->std; ?></td>
          <td><?php echo $record1[$i]->landline; ?></td>
          <td><?php echo $record1[$i]->mobile; ?></td>
          <td><?php echo $record1[$i]->principal; ?></td>
          <td><?php echo $record1[$i]->schoolemail; ?></td>
          <td><?php echo $record1[$i]->codinator; ?></td>
          <td><?php echo $record1[$i]->codinator_mail; ?></td>
          <td><?php echo $record1[$i]->codinator_mobile; ?></td>
          <td><?php echo $record1[$i]->category; ?></td>
          <td><?php echo $record1[$i]->shifts; ?></td>
          <td><?php echo $record1[$i]->lowest_level; ?></td>
          <td><?php echo $record1[$i]->higest_level; ?></td>
          <td><?php echo $record1[$i]->gender; ?></td>
          <td><?php echo $record1[$i]->educatio_board; ?></td>
          <td><?php echo $record1[$i]->population; ?></td>
          <td><?php echo $record1[$i]->students; ?></td>
          <td><?php echo $record1[$i]->teachers; ?></td>
          <td><?php echo $record1[$i]->nonteachers; ?></td>
          <td><?php echo $record1[$i]->male; ?></td>
          <td><?php echo $record1[$i]->female; ?></td>
          <td><?php echo $record1[$i]->visitor; ?></td>
          <td><?php echo $record1[$i]->working_days; ?></td>
          <td><?php echo $record1[$i]->audit_period; ?></td>
          <td><?php echo $record1[$i]->location; ?></td>
          <td><?php echo $record1[$i]->aid; ?></td>
          <td><?php echo $record1[$i]->Q4A1; ?></td>
          <td><?php $ventilated = getFiledValue('Q5A2',$record1[$i]->userid); echo $ventilated[0]->answer; ?></td>
          <td>
    <?php $var = 0;
    if ((isset($record1[$i]->Q5A110S3) && $record1[$i]->Q5A110S3 != 0) && (isset($record1[$i]->Q5A110S2) && $record1[$i]->Q5A110S2 != 0))
      { $var = ($record1[$i]->Q5A110S3 / $record1[$i]->Q5A110S2) * 100; }
    echo number_format($var, 2); ?>
        </td>
        <td>
        <?php 
//      $arr = array(
//                            '1' => 'School does not use or own vehicles',
//                            '2' => 'Operator-owned vehicles',
//                            '3' => 'School-owned vehicles',
//                            '4' => 'A combination of school-owned and operator-owned vehicles',
//                            '5' => 'Hired vehicles (JNV schools)',
//                        );
      if($record1[$i]->Q6A1==1)
      {
          echo 'School does not use or own vehicles';
      }else if($record1[$i]->Q6A1==2)
      {
          echo 'Operator-owned vehicles';
      }else if($record1[$i]->Q6A1==3)
      {
          echo 'School-owned vehicles';
      }else if($record1[$i]->Q6A1==4)
      {
          echo 'A combination of school-owned and operator-owned vehicles';
      }else if($record1[$i]->Q6A1==5)
      {
          echo 'Hired vehicles (JNV schools)';
      }
      
        ?>
    </td>
        <td><?php echo $record1[$i]->Q6A2S1T1; ?></td>
        <td><?php echo $record1[$i]->Q6A2S1T2; ?></td>
        <td><?php echo $record1[$i]->Q6A2S1T3; ?></td>
        <td><?php echo $record1[$i]->Q6A2S1T4; ?></td>
        <td><?php echo $record1[$i]->Q6A2S1T5; ?></td>
        <td><?php echo $record1[$i]->Q6A2S1T6; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3D1+$record1[$i]->Q6A2S3P1+$record1[$i]->Q6A2S3L1+$record1[$i]->Q6A2S3C1+$record1[$i]->Q6A2S3E1+$record1[$i]->Q6A2S3H1+$record1[$i]->Q6A2S3B1; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3D1; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3P1; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3L1; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3C1; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3E1; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3H1; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3B1; ?></td>
        <td><?php echo $record1[$i]->total_cars; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3B1; ?></td>    
        <td><?php echo $record1[$i]->Q6A2S3D2; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3P2; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3L2; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3C2; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3E2; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3H2; ?></td>
        <td><?php echo $record1[$i]->total_vans; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3D3; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3P3; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3L3; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3C3; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3E3; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3H3; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3B3; ?></td>
        <td><?php echo $record1[$i]->total_other; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3D4; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3P4; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3L4; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3C4; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3E4; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3H4; ?></td>
        <td><?php echo $record1[$i]->Q6A2S3B4; ?></td>
        <td><?php echo $record1[$i]->total_disel; ?></td>
        <td><?php echo $record1[$i]->total_petrol; ?></td>
        <td><?php echo $record1[$i]->total_lpg; ?></td>
        <td><?php echo $record1[$i]->total_cng; ?></td>
        <td><?php echo $record1[$i]->total_hybrid; ?></td>
        <td><?php echo $record1[$i]->total_electric; ?></td>
        <td><?php echo $record1[$i]->total_biofuel; ?></td>
        <td><?php echo $record1[$i]->Q7A1S1; ?></td>
        <td><?php echo $record1[$i]->Q7A1S2; ?></td>
        <td><?php echo $record1[$i]->Q7A1S3; ?></td>
        <td><?php echo $record1[$i]->Q7A1S4; ?></td>
        <td><?php echo $record1[$i]->Q7A2S1; ?></td>
        <td><?php echo $record1[$i]->Q7A2S2; ?></td>
        <td><?php echo $record1[$i]->Q7A2S3; ?></td>
        <td><?php echo $record1[$i]->Q7A2S4; ?></td>
        <td><?php echo $record1[$i]->Q7A3S1; ?></td>
        <td><?php echo $record1[$i]->Q7A3S2; ?></td>
        <td><?php echo $record1[$i]->Q7A3S3; ?></td>
        <td><?php echo $record1[$i]->Q7A3S4; ?></td>
        <td><?php echo $record1[$i]->Q7A4S1; ?></td>
        <td><?php echo $record1[$i]->Q7A4S2; ?></td>
        <td><?php echo $record1[$i]->Q7A4S3; ?></td>
        <td><?php echo $record1[$i]->Q7A4S4; ?></td>
        <td><?php echo $record1[$i]->Q7A5S1; ?></td>
        <td><?php echo $record1[$i]->Q7A5S2; ?></td>
        <td><?php echo $record1[$i]->Q7A5S3; ?></td>
        <td><?php echo $record1[$i]->Q7A5S4; ?></td>
        <td><?php echo $record1[$i]->Q7A6S1; ?></td>
        <td><?php echo $record1[$i]->Q7A6S2; ?></td>
        <td><?php echo $record1[$i]->Q7A6S3; ?></td>
        <td><?php echo $record1[$i]->Q7A6S4; ?></td>
        <td><?php echo $record1[$i]->Q7A7S1; ?></td>
        <td><?php echo $record1[$i]->Q7A7S2; ?></td>
        <td><?php echo $record1[$i]->Q7A7S3; ?></td>
        <td><?php echo $record1[$i]->Q7A7S4; ?></td>
        <td><?php echo $record1[$i]->Q7A8S1; ?></td>
        <td><?php echo $record1[$i]->Q7A8S2; ?></td>
        <td><?php echo $record1[$i]->Q7A8S3; ?></td>
        <td><?php echo $record1[$i]->Q7A8S4; ?></td>
        <td><?php echo $record1[$i]->Q7A9S1; ?></td>
        <td><?php echo $record1[$i]->Q7A9S2; ?></td>
        <td><?php echo $record1[$i]->Q7A9S3; ?></td>
        <td><?php echo $record1[$i]->Q7A9S4; ?></td>
        <td><?php echo $record1[$i]->Q7A10S1; ?></td>
        <td><?php echo $record1[$i]->Q7A10S2; ?></td>
        <td><?php echo $record1[$i]->Q7A10S3; ?></td>
        <td><?php echo $record1[$i]->Q7A10S4; ?></td>
        <td><?php echo $record1[$i]->Q7A11S1; ?></td>
        <td><?php echo $record1[$i]->Q7A11S2; ?></td>
        <td><?php echo $record1[$i]->Q7A11S3; ?></td>
        <td><?php echo $record1[$i]->Q7A11S4; ?></td>
        <td><?php echo $record1[$i]->Q7A1S4+$record1[$i]->Q7A2S4+$record1[$i]->Q7A3S4+$record1[$i]->Q7A4S4+$record1[$i]->Q7A5S4+$record1[$i]->Q7A6S4; ?></td>
        <td><?php echo $record1[$i]->Q7A9S4+$record1[$i]->Q7A10S4+$record1[$i]->Q7A11S4 ; ?></td>
        <td><?php echo $record1[$i]->Q7A7S4+$record1[$i]->Q7A8S4 ; ?></td>
        <td><?php echo $record1[$i]->Q8A1; ?></td>
        <td><?php echo $record1[$i]->air_points; ?></td>
        <td><?php if($record1[$i]->Q4E1=='Y'){echo "Yes";} if($record1[$i]->Q4E1=='N'){echo "No";} ?></td>
        <td><?php if($record1[$i]->Q5E1=='Y'){echo "Yes";} if($record1[$i]->Q5E1=='N'){echo "No";}; ?></td>
        <td><?php $ventilated = getFiledValue('Q6E1',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E2',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E3',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E4',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E5',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E6',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E7',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E8',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E9',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E10',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E11',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E12',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E13',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php $ventilated = getFiledValue('Q6E14',$record1[$i]->userid); if($ventilated[0]->answer=="Y"){echo "Yes";} if($ventilated[0]->answer=="N"){echo "No";} ?></td>
        <td><?php if($record1[$i]->Q6E14S1=='000.000'){echo "No";} ?></td>
         <td><?php echo $record1[$i]->Q7E2S1; ?></td>
        <td><?php echo $record1[$i]->Q7E2S2; ?></td>
        <td><?php echo $record1[$i]->Q7E2S3; ?></td>
        <td><?php echo $record1[$i]->Q7E3S1; ?></td>
        <td><?php echo $record1[$i]->Q7E3S2; ?></td>
        <td><?php echo $record1[$i]->Q7E3S3; ?></td>
        <td><?php echo $record1[$i]->Q7E4S1; ?></td>
        <td><?php echo $record1[$i]->Q7E4S2; ?></td>
        <td><?php echo $record1[$i]->Q7E4S3; ?></td>
        <td><?php echo $record1[$i]->Q7E5S1; ?></td>
        <td><?php echo $record1[$i]->Q7E5S2; ?></td>
        <td><?php echo $record1[$i]->Q7E5S3; ?></td>
        <td><?php echo $record1[$i]->Q7E6S1; ?></td>
        <td><?php echo $record1[$i]->Q7E6S2; ?></td>
        <td><?php echo $record1[$i]->Q7E6S3; ?></td>
        <td><?php echo $record1[$i]->Q7E7S1; ?></td>
        <td><?php echo $record1[$i]->Q7E7S2; ?></td>
        <td><?php echo $record1[$i]->Q7E7S3; ?></td>
        <td><?php echo $record1[$i]->Q7E8S1; ?></td>
        <td><?php echo $record1[$i]->Q7E8S2; ?></td>
        <td><?php echo $record1[$i]->Q7E8S3; ?></td>
        <td><?php if($record1[$i]->Q9E1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q9E1=="N"){ echo "No"; }
        if($record1[$i]->Q9E1==""){ echo "000.000"; } ?></td>

        
        <td><?php if(($record1[$i]->Q9E1S1)==1) 
        {
          echo 'Solar';
        }
        
        if(($record1[$i]->Q9E1S1)!='1') 
        {
          echo '000.000';
        } 
        
        ?></td>
        <td><?php if(($record1[$i]->Q9E1S2)==1)
        {
          echo 'Wind';
        }
        
        if(($record1[$i]->Q9E1S2)!='1')
        {
          echo '000.000';
        } 
          ?></td>
        <td><?php if(( $record1[$i]->Q9E1S3)==1)
        {
          echo 'Hydro';
        }
        
        if(( $record1[$i]->Q9E1S3)!='1')
        {
          echo '000.000';
        }
          ?></td>
        <td><?php if(( $record1[$i]->Q9E1S5)==1)
        {
          echo 'Biogas Plant';
        }
        if(( $record1[$i]->Q9E1S5)!='1')
        {
          echo '000.000';
        }
          ?></td>
        <td><?php if(( $record1[$i]->Q9E1S4)==1) 
        {
          echo 'Combination of solar and wind';
        } 
        if(( $record1[$i]->Q9E1S4)!='1') 
        {
          echo '000.000';
        } 
        
        ?></td>

        <td><?php if($record1[$i]->Q10E1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q10E1=="N"){ echo "No"; }
        if($record1[$i]->Q10E1==""){ echo "000.000"; } ?></td>
        <td><?php echo $record1[$i]->energy_points; ?></td>
        <td><?php if($record1[$i]->Q4F1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q4F1=="N"){ echo "No"; }
        if($record1[$i]->Q4F1==""){ echo "000.000"; } ?></td>
        <td><?php if($record1[$i]->Q5F1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q5F1=="N"){ echo "No"; }
        if($record1[$i]->Q5F1==""){ echo "000.000"; } ?></td>
        <td><?php if($record1[$i]->Q5F1S1=='1'){echo "Government Scheme";}
        if($record1[$i]->Q5F1S1=='2'){echo "School’s personal initiative";}
        if($record1[$i]->Q5F1S1=='3'){echo "Others";} ?></td>
        <td><?php echo $record1[$i]->Q5F1S2; ?></td>
        <td><?php echo $record1[$i]->Q5F1S3; ?></td>
        <td><?php if($record1[$i]->Q5F1S4=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q5F1S4=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q5F1S4; } ?></td>
        <td><?php echo $record1[$i]->Q6F2S1; ?></td>
        <td><?php echo $record1[$i]->Q6F2S2; ?></td>
        <td><?php echo $record1[$i]->Q6F2S3; ?></td>
        <td><?php echo $record1[$i]->Q6F3S1; ?></td>
        <td><?php echo $record1[$i]->Q6F3S2; ?></td>
        <td><?php echo $record1[$i]->Q6F3S3; ?></td>
        <td><?php echo $record1[$i]->Q6F4S1; ?></td>
        <td><?php echo $record1[$i]->Q6F4S2; ?></td>
        <td><?php if($record1[$i]->Q10F1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q10F1=="N"){ echo "No"; }
        if($record1[$i]->Q10F1==""){ echo "000.000"; } ?></td>
        <td><?php echo $record1[$i]->Q10F2; ?></td>
        <td><?php if($record1[$i]->Q11F1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q11F1=="N"){ echo "No"; }
        if($record1[$i]->Q11F1==""){ echo "000.000"; } ?></td>
        <td><?php echo $record1[$i]->Q11F2; ?></td>
        <td><?php if($record1[$i]->Q11F3=="Y"){ echo "Yes"; }
        if($record1[$i]->Q11F3=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q11F3; } ?></td>
        <td><?php if($record1[$i]->Q12F1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q12F1=="N"){ echo "No"; }
        if($record1[$i]->Q12F1==""){ echo "000.000"; } ?></td>
        
        <td><?php if(( $record1[$i]->Q12F2)==1) 
        {
          echo 'Monthly';
        } 
        
        if(($record1[$i]->Q12F2)==2) 
        {
          echo 'Quarterly';
        } 
        
        if(( $record1[$i]->Q12F2)==3) 
        {
          echo 'Bi-annually';
        } 
        
        if(( $record1[$i]->Q12F2)==4) 
        {
          echo 'Annually ';
        } 
        if(( $record1[$i]->Q12F2)!=1&&2&&3&&4) 
        {
          echo '000.000 ';
        } 
        
        ?></td>
        
        <td><?php if($record1[$i]->Q13F1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q13F1=="N"){ echo "No"; }
        if($record1[$i]->Q13F1==""){ echo "000.000"; } ?></td>
        <td><?php echo $record1[$i]->Q13F2; ?></td>
        <td><?php echo $record1[$i]->food_points; ?></td>
        <td><?php echo $record1[$i]->Q4L1; ?></td>
<td><?php echo $record1[$i]->Q4L2; ?></td>
<td><?php echo $record1[$i]->Q4L3; ?></td>
<td><?php echo $record1[$i]->Q4L4; ?></td>
<td><?php echo $record1[$i]->Q4L5; ?></td>
<td><?php echo $record1[$i]->Q4L6; ?></td>
<td><?php echo $record1[$i]->Q4L7; ?></td>
<td><?php echo $record1[$i]->Q4L8; ?></td>
<td><?php echo $record1[$i]->Q4L9; ?></td>
<td><?php echo $record1[$i]->Q4L10; ?></td>
<td><?php echo $record1[$i]->Q4L11; ?></td>
<td><?php echo $record1[$i]->Q4L12; ?></td>
<td><?php echo $record1[$i]->Q4L1; ?></td>
<td><?php echo $record1[$i]->Q4L5; ?></td>
<td><?php echo $record1[$i]->PercentageArea; ?></td>
<td><?php echo $record1[$i]->Q5L1S3; ?></td>
<td><?php echo $record1[$i]->Q5L1S1; ?></td>
<td><?php echo $record1[$i]->Q5L1S2; ?></td>
<td><?php echo $record1[$i]->Q5L2S3; ?></td>
<td><?php echo $record1[$i]->Q5L2S1; ?></td>
<td><?php echo $record1[$i]->Q5L2S2; ?></td>
<td><?php if($record1[$i]->Q6L1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q6L1=="N"){ echo "No"; }
        if($record1[$i]->Q6L1==""){ echo "000.000"; } ?></td>
<td><?php echo $record1[$i]->land_points; ?></td>
<td><?php echo  $record1[$i]->Q4W1; ?></td>
<td><?php echo  $record1[$i]->Q4W2; ?></td>
<td><?php echo  $record1[$i]->Q4W3; ?></td>
<td><?php echo  $record1[$i]->Q4W4; ?></td>
<td><?php echo  $record1[$i]->Q4W5; ?></td>
<td><?php echo  $record1[$i]->Q4W6; ?></td>
<td><?php echo  $record1[$i]->Q4W7; ?></td>
<td><?php echo  $record1[$i]->Q4W8; ?></td>
<td><?php echo  $record1[$i]->Q4W9; ?></td>
<td><?php echo  $record1[$i]->Q4W10; ?></td>
<td><?php echo  $record1[$i]->Q4W11; ?></td>

<td><?php if($record1[$i]->population!="" && $record1[$i]->population!=0): echo  $record1[$i]->Q4W11/$record1[$i]->population; else: echo "000.000"; endif; ?></td>
<td><?php if($record1[$i]->Q5W1=='1'){echo "Ground water";} else{ echo'000.000';} ?></td>
<td><?php if($record1[$i]->Q5W2=='1'){echo "Surface water";} else{ echo'000.000';} ?></td>
<td><?php if($record1[$i]->Q5W3=='1'){echo "Rainwater";} else{ echo'000.000';} ?></td>
<td><?php if($record1[$i]->Q5W4=='1'){echo "Recycled wastewater";} else{ echo'000.000';} ?></td>
<td><?php if($record1[$i]->Q7W1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q7W1=="N"){ echo "No"; }
        if($record1[$i]->Q7W1==""){ echo "000.000"; } ?></td>
<td><?php if($record1[$i]->Q7W2=='1'){echo "≤1 hours";}
elseif($record1[$i]->Q7W2=='2'){echo "2-6 hours";}
elseif($record1[$i]->Q7W2=='3'){echo "7-12 hours";}
elseif($record1[$i]->Q7W2=='4'){echo "13-18 hours";}
elseif($record1[$i]->Q7W2=='5'){echo "19-24 hours";}
else{echo '000.000'; } ?></td>
<td><?php if($record1[$i]->Q8W2=="Y"){ echo "Yes"; }
        if($record1[$i]->Q8W2=="N"){ echo "No"; }
        if($record1[$i]->Q8W2==""){ echo "000.000"; } ?></td>
<td><?php echo  $record1[$i]->Q8W2S1; ?></td>
<td><?php if($record1[$i]->Q8W2S1S1=='1'){echo "Rooftop";}
elseif($record1[$i]->Q8W2S1S1=='2'){echo "Paved";}
elseif($record1[$i]->Q8W2S1S1=='3'){echo "Unpaved";}
elseif($record1[$i]->Q8W2S1S1=='4'){echo "Rooftop + paved";}
elseif($record1[$i]->Q8W2S1S1=='5'){echo "Paved + unpaved";}
elseif($record1[$i]->Q8W2S1S1=='6'){echo "Rooftop + unpaved";}
elseif($record1[$i]->Q8W2S1S1=='7'){echo "Rooftop + paved + unpaved";}
else{echo '000.000';} ?></td>
<td><?php if($record1[$i]->Q8W2S2=='1'){echo "By storing" ;}
elseif($record1[$i]->Q8W2S2=='2'){echo "By recharging groundwater" ;} 
elseif($record1[$i]->Q8W2S2=='3'){echo "Combination of both" ;} 
else{echo '000.000';}  ?></td>
<td><?php if($record1[$i]->Q8W2S31=='1'){echo"Conduits, ";}
if($record1[$i]->Q8W2S32=='1'){echo"Gutters, ";}
if($record1[$i]->Q8W2S33=='1'){echo"Filter unit, ";}
if($record1[$i]->Q8W2S34=='1'){echo"First flush, ";}
if($record1[$i]->Q8W2S35=='1'){echo"Storage tank, ";}
if($record1[$i]->Q8W2S36=='1'){echo"Collection sump, ";}
if($record1[$i]->Q8W2S37=='1'){echo"Pump unit, ";}
if($record1[$i]->Q8W2S38=='1'){echo"Recharge structure";}
if($record1[$i]->Q8W2S32!='1' && $record1[$i]->Q8W2S33!='1' && $record1[$i]->Q8W2S34!='1' && $record1[$i]->Q8W2S35!='1' && $record1[$i]->Q8W2S36!='1' && $record1[$i]->Q8W2S37!='1' && $record1[$i]->Q8W2S38!='1'){echo '000.000' ;}
?></td>
<td><?php if($record1[$i]->Q8W2S2S2=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8W2S2S2=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8W2S2S2; } ?></td>
<td><?php if($record1[$i]->Q8W2S2S7=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8W2S2S7=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8W2S2S7; } ?></td>
<td><?php if($record1[$i]->Q8W2S31=='1'){echo"Conduits, ";}
if($record1[$i]->Q8W2S32=='1'){echo"Gutters, ";}
if($record1[$i]->Q8W2S33=='1'){echo"Filter unit, ";}
if($record1[$i]->Q8W2S34=='1'){echo"First flush, ";}
if($record1[$i]->Q8W2S35=='1'){echo"Storage tank, ";}
if($record1[$i]->Q8W2S36=='1'){echo"Collection sump, ";}
if($record1[$i]->Q8W2S37=='1'){echo"Pump unit, ";}
if($record1[$i]->Q8W2S38=='1'){echo"Recharge structure";}
if($record1[$i]->Q8W2S32!='1' && $record1[$i]->Q8W2S33!='1' && $record1[$i]->Q8W2S34!='1' && $record1[$i]->Q8W2S35!='1' && $record1[$i]->Q8W2S36!='1' && $record1[$i]->Q8W2S37!='1' && $record1[$i]->Q8W2S38!='1'){echo '000.000' ;}
?></td>
<td><?php if($record1[$i]->Q8W2S61=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8W2S61=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8W2S61; } ?></td>
<td><?php echo $record1[$i]->Q8W2S13; ?></td>
<td><?php echo $record1[$i]->Q8W2S6; ?></td>
<td><?php if($record1[$i]->Q8W3S1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q8W3S1=="N"){ echo "No"; }
        if($record1[$i]->Q8W3S1==""){ echo "000.000"; } ?></td>
<td><?php if($record1[$i]->Q8W3S2=="Y"){ echo "Yes"; }
        if($record1[$i]->Q8W3S2=="N"){ echo "No"; }
        if($record1[$i]->Q8W3S2==""){ echo "000.000"; } ?></td>
<td><?php if($record1[$i]->Q8W3S3=="Y"){ echo "Yes"; }
        if($record1[$i]->Q8W3S3=="N"){ echo "No"; }
        if($record1[$i]->Q8W3S3==""){ echo "000.000"; } ?></td>
<td><?php if($record1[$i]->Q8W3S4=="Y"){ echo "Yes"; }
        if($record1[$i]->Q8W3S4=="N"){ echo "No"; }
        if($record1[$i]->Q8W3S4==""){ echo "000.000"; } ?></td>
<td><?php if($record1[$i]->Q8W3S5=="Y"){ echo "Yes"; }
        if($record1[$i]->Q8W3S5=="N"){ echo "No"; }
        if($record1[$i]->Q8W3S5==""){ echo "000.000"; } ?></td>
<td><?php if($record1[$i]->Q8W3S6=="Y"){ echo "Yes"; }
        if($record1[$i]->Q8W3S6=="N"){ echo "No"; }
        if($record1[$i]->Q8W3S6==""){ echo "000.000"; } ?></td>
<td><?php if($record1[$i]->Q8W3S7=="Y"){ echo "Yes"; }
        if($record1[$i]->Q8W3S7=="N"){ echo "No"; }
        if($record1[$i]->Q8W3S7==""){ echo "000.000"; } ?></td>
<td><?php if($record1[$i]->Q8W3S8=="Y"){ echo "Yes"; }
        if($record1[$i]->Q8W3S8=="N"){ echo "No"; }
        if($record1[$i]->Q8W3S8==""){ echo "000.000"; } ?></td>
<td><?php echo  "Yes"; ?></td>
<td><?php echo  "Yes"; ?></td>
<td><?php echo  $record1[$i]->Q9W1; ?></td>
<td><?php if($record1[$i]->population=="" && $record1[$i]->population==0): echo "000.000"; else:  echo $record1[$i]->population/$record1[$i]->Q9W1; endif; ?></td>
<td><?php echo  $record1[$i]->Q10W1; ?></td>
<td><?php echo  $record1[$i]->Q11W1; ?></td>
<td><?php if($record1[$i]->population=="" && $record1[$i]->population==0): echo "000.000";  else: echo $record1[$i]->population/$record1[$i]->Q11W1; endif; ?></td>
<td><?php echo  $record1[$i]->Q13W1S1; ?></td>
<td><?php echo  $record1[$i]->Q13W1S2; ?></td>
<td><?php echo  $record1[$i]->Q13W1S3; ?></td>
<td><?php echo  $record1[$i]->Q13W1S4; ?></td>
<td><?php if($record1[$i]->population=="" && $record1[$i]->population==0): echo "000.000";  else: echo $record1[$i]->population/$record1[$i]->Q13W1S4; endif; ?></td>
<td><?php echo  $record1[$i]->Q14W1; ?></td>
<td><?php if($record1[$i]->population=="" && $record1[$i]->population==0): echo "000.000";  else: echo $record1[$i]->population/$record1[$i]->Q14W1; endif; ?></td>
<td><?php echo  $record1[$i]->Q15W1; ?></td>
<td><?php if($record1[$i]->Q16W1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q16W1=="N"){ echo "No"; }
        if($record1[$i]->Q16W1==""){ echo "000.000"; } ?></td>
<td><?php echo  $record1[$i]->Q21W1; ?></td>
<td><?php if($record1[$i]->Q18W1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q18W1=="N"){ echo "No"; }
        if($record1[$i]->Q18W1==""){ echo "000.000"; } ?></td>
<td><?php if($record1[$i]->Q19W1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q19W1=="N"){ echo "No"; }
        if($record1[$i]->Q19W1==""){ echo "000.000"; } ?></td>
<td><?php if($record1[$i]->Q20W1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q20W1=="N"){ echo "No"; }
        if($record1[$i]->Q20W1==""){ echo "000.000"; } ?></td>
<td><?php echo  $record1[$i]->Q20W2; ?></td>
<td><?php echo  $record1[$i]->water_points; ?></td>
 <td><?php if($record1[$i]->Q4Wa1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q4Wa1=="N"){ echo "No"; }
        if($record1[$i]->Q4Wa1==""){ echo "000.000"; } ?></td>
        <td><?php if($record1[$i]->Q4Wa2=='1'){echo "Two";}
        if($record1[$i]->Q4Wa2=='2'){echo "Three";}
        if($record1[$i]->Q4Wa2=='3'){echo "More than three";}
        if($record1[$i]->Q4Wa2=='4'){echo "Not Applicable";}
         ?></td>
        <td><?php echo  abs($record1[$i]->Q5Wa1S1) ; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa1S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa1S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa1S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa1S5; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa2S1; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa2S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa2S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa2S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa2S5; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa3S1; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa3S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa3S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa3S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa3S5; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa4S1; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa4S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa4S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa4S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa4S5; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa5S1; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa5S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa5S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa5S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa5S5; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa6S1; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa6S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa6S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa6S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa6S5; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa7S1; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa7S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa7S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa7S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa7S5; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa8S1; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa8S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa8S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa8S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa8S5; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa9S1; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa9S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa9S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa9S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa9S5; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa10S1; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa10S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa10S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa10S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa10S5; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa11S1; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa11S2; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa11S3; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa11S4; ?></td>
        <td><?php echo  $record1[$i]->Q5Wa11S5; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa1S1; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa1S2; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa1S3; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa1S4; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa1S5; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa1S6; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa2S1; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa2S2; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa2S3; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa2S4; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa2S5; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa2S6; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa2S7; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa2S8; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa2S9; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa3S1; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa3S2; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa3S3; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa3S4; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa4S1; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa4S2; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa5S1; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa5S2; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa6S1; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa6S2; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa7S1; ?></td>
        <td><?php echo  $record1[$i]->Q6Wa7S2; ?></td>
        <td><?php if($record1[$i]->Q8Wa1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q8Wa1=="N"){ echo "No"; }
        if($record1[$i]->Q8Wa1==""){ echo "000.000"; } ?></td>
        <td><?php echo  $record1[$i]->Q8Wa1S1; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa1S2; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa1S3; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa1S4; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa1S5; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa1S6; ?></td>
        <td><?php if($record1[$i]->Q8Wa2S1=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8Wa2S1=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8Wa2S1; } ?></td>
        <td><?php if($record1[$i]->Q8Wa2S2=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8Wa2S2=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8Wa2S2; } ?></td>
        <td><?php if($record1[$i]->Q8Wa2S3=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8Wa2S3=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8Wa2S3; } ?></td>
        <td><?php if($record1[$i]->Q8Wa2S4=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8Wa2S4=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8Wa2S4; } ?></td>
        <td><?php if($record1[$i]->Q8Wa2S5=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8Wa2S5=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8Wa2S5; } ?></td>
        <td><?php if($record1[$i]->Q8Wa2S6=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8Wa2S6=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8Wa2S6; } ?></td>
        <td><?php if($record1[$i]->Q8Wa2S7=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8Wa2S7=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8Wa2S7; } ?></td>
        <td><?php if($record1[$i]->Q8Wa2S8=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8Wa2S8=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8Wa2S8; } ?></td>
        <td><?php if($record1[$i]->Q8Wa2S9=="Y"){ echo "Yes"; }
        elseif($record1[$i]->Q8Wa2S9=="N"){ echo "No"; }
        else{ echo $record1[$i]->Q8Wa2S9; } ?></td>
        <td><?php echo  $record1[$i]->Q8Wa3S1; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa3S2; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa3S3; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa3S4; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa4S1; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa4S2; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa5S1; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa5S2; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa6S1; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa6S2; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa7S1; ?></td>
        <td><?php echo  $record1[$i]->Q8Wa7S2; ?></td>
        <td><?php if($record1[$i]->Q9Wa1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q9Wa1=="N"){ echo "No"; }
        if($record1[$i]->Q9Wa1==""){ echo "000.000"; } ?></td>
        <td><?php if($record1[$i]->Q9Wa2S1=='') {echo '000.000';} else {echo $record1[$i]->Q9Wa2S1;} ?></td>
        <td><?php echo  $record1[$i]->Q9Wa3; ?></td>
         <td><?php if($record1[$i]->Q9Wa4S1!='') {echo $record1[$i]->Q9Wa4S1;} else {echo '000.000';} ?></td>
        <td><?php if($record1[$i]->Q10Wa1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q10Wa1=="N"){ echo "No"; }
        if($record1[$i]->Q10Wa1==""){ echo "000.000"; } ?></td>        
        <td><?php echo  $record1[$i]->Q12Wa1S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa1S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa1S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa1S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa2S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa2S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa2S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa2S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa3S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa3S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa3S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa3S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa4S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa4S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa4S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa4S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa5S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa5S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa5S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa5S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa6S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa6S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa6S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa6S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa7S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa7S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa7S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa7S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa8S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa8S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa8S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa8S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa9S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa9S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa9S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa9S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa10S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa10S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa10S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa10S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa11S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa11S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa11S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa11S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa12S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa12S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa12S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa12S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa13S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa13S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa13S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa13S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa15S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa15S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa15S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa15S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa16S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa16S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa16S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa16S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa17S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa17S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa17S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa17S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa18S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa18S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa18S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa18S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa19S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa19S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa19S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa19S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa20S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa20S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa20S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa20S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa21S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa21S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa21S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa21S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa22S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa22S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa22S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa22S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa23S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa23S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa23S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa23S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa24S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa24S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa24S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa24S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa25S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa25S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa25S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa25S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa26S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa26S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa26S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa26S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa27S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa27S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa27S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa27S4; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa28S1; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa28S2; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa28S3; ?></td>
        <td><?php echo  $record1[$i]->Q12Wa28S4; ?></td>
        <td><?php if($record1[$i]->Q13Wa1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q13Wa1=="N"){ echo "No"; }
        if($record1[$i]->Q13Wa1==""){ echo "000.000"; } ?></td>
        <td><?php if($record1[$i]->Q13Wa2=='1'){ echo "Kabadiwalla/Scrapdealer" ;}
        if($record1[$i]->Q13Wa2=='2'){ echo "Taken back by manufacturer/vendor" ;}
        if($record1[$i]->Q13Wa2=='3'){ echo "Authorised dealer" ;}
        if($record1[$i]->Q13Wa2=='4'){ echo "Authorised dismantler" ;}
        if($record1[$i]->Q13Wa2 !='1' && $record1[$i]->Q13Wa2 !='2' && $record1[$i]->Q13Wa2 !='3' && $record1[$i]->Q13Wa2 !='4'){ echo $record1[$i]->Q13Wa2 ;}
         ?></td>
        <td><?php if($record1[$i]->Q14Wa1=='1'){ echo "Open dumping" ;}
        if($record1[$i]->Q14Wa1=='2'){ echo "Designated dumping site (Dhalao)" ;}
        if($record1[$i]->Q14Wa1=='3'){ echo "Landfill Site" ;}
        if($record1[$i]->Q14Wa1=='4'){ echo "Don’t know" ;}
         ?></td>
        <td><?php if($record1[$i]->Q15Wa1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q15Wa1=="N"){ echo "No"; }
        if($record1[$i]->Q15Wa1==""){ echo "000.000"; } ?></td>
        <td><?php if($record1[$i]->Q15Wa2=='1'){ echo "Inside the school" ;}
        elseif($record1[$i]->Q15Wa2=='2'){ echo "Outside the school" ;}
        else {echo '000.000';} ?></td>
        <td><?php if($record1[$i]->Q15Wa2S1=='1'){echo "Horticultural, ";}
                  elseif($record1[$i]->Q15Wa2S2=='1'){echo "Plastic, ";}
                  elseif($record1[$i]->Q15Wa2S3=='1'){echo "Tyres, ";}
                  elseif($record1[$i]->Q15Wa2S4=='1'){echo "Paper, ";}
                  elseif($record1[$i]->Q15Wa2S5=='1'){echo " Sanitary waste";}
                  else{echo '000.000';} 

        ?></td>
        <td><?php echo  $record1[$i]->Q16Wa1; ?></td>
        <td><?php if($record1[$i]->Q17Wa1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q17Wa1=="N"){ echo "No"; }
        if($record1[$i]->Q17Wa1==""){ echo "000.000"; } ?></td>
        <td><?php if($record1[$i]->Q18Wa1=="Y"){ echo "Yes"; }
        if($record1[$i]->Q18Wa1=="N"){ echo "No"; }
        if($record1[$i]->Q18Wa1==""){ echo "000.000"; } ?></td>
        <td><?php if($record1[$i]->Q18Wa2S1=='1') {echo "As part of the curriculum, ";}
        elseif($record1[$i]->Q18Wa2S2=='2') {echo "As part of extracurricular activities such as guest lectures, ";}
        elseif($record1[$i]->Q18Wa2S3=='3') {echo "By the showcasing of posters and stickers";}
        else{echo '000.000';} ?></td>
        <td><?php echo  $record1[$i]->Q19Wa1; ?></td>
        <td><?php echo $record1[$i]->waste_points; ?></td>
    
    <td><?php echo $record1[$i]->air_points + $record1[$i]->energy_points + $record1[$i]->food_points + $record1[$i]->land_points + $record1[$i]->water_points + $record1[$i]->waste_points; ?></td>
    <td><?php 
      global $percentage;
      $total=$record1[$i]->air_points + $record1[$i]->energy_points + $record1[$i]->food_points + $record1[$i]->land_points + $record1[$i]->water_points + $record1[$i]->waste_points; 
      $percentage= ($total/95)*100;
            $percentage=number_format($percentage,1);
      echo $percentage;
     ?></td>
     <td> 
     <?php
      if($percentage>=70):
       echo "<label class='label label-success'>Green</label>";
      elseif($percentage>=50 && $percentage<=69.9):
             echo "<label class='label label-warning' style='background:yellow; color:black;'>Yellow</label>";
      elseif($percentage>=35 && $percentage<=49.9):
             echo "<label class='label label-success' style='background:orange; color:black;'>Orange</label>";
      elseif($percentage<=34.9):
             echo "<label class='label label-danger'>Red</label>";
      else:
        echo "Not Rated";
      endif;
      
    ?></td>
          </tr>
    <?php
}
?>
      </tbody>
    </table>
  </div>
</div>
