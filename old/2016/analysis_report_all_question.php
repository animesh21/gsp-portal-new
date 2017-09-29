<?php
session_start();
if ($_SESSION['username'] == "") {
    header('location:index.php');
}
include('config.php');
include('functions.php');
//$link = mysql_connect($servername, $username, $password) or die("Couldn't make connection.");
//$db = mysql_select_db($dbname, $link) or die("Couldn't select database");
//$total_count = mysql_query("select * from `lime_survey_266617` where `submitdate` is not null");

include('header.php');
?>
<script language="javascript" type="text/javascript">

    function popitup(url) {
        newwindow = window.open(url, 'name', 'height=200,width=600');
        if (window.focus) {
            newwindow.focus()
        }
        return false;
    }
</script>

<script type = 'text/javascript'>
    $(document).ready(function () {
        document.title = 'All Questions Report(GSP-Audit-2016)';
        $('#example').DataTable({
         //dom: 'lBfrtip',
            dom: 'Bfrtip',
            buttons: [
                'csv'
            ],
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
            "iDisplayLength": 25
        });
    });
</script>

<style>
    #example th{text-align: center}
</style>
<main class="bdr"  style='border: none;'>
    <div class="container" style="width: 100%">
        <div class="wrapper">
            <div class="top-area">
                <h2>All Responses</h2>
            </div>
            <?php
            if ($_REQUEST['para'] == "success") {
                ?> 
                <div style="text-align: center; color: green; font-size:16px; ">Response PDF has been successfully sent to the Co-ordinator's mail id.</div>
                <?php
            }
            ?>
            <div style="overflow: scroll">         


                <table id="example" class="display" cellspacing="0" width="40%">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Sch.Id</th>
                            <th>School Name</th>
                            <th>Address1</th>
                            <th>Address2</th>
                            <th>Country</th>
                            <th>State</th>
                            <th>District</th>
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

                            <th>Category</th>
                            <th>Shifts</th>

                            <th>Password</th>
                            <th>Reg. Date</th>
                            <th>Comp. Date</th>
                    <!-- <th>Completeness</th> -->


                            <!-- GENERAL QUESTIONS -->

                            <th>School Level(Lowest level of grade:)</th>
                            <th>School Level(Highest level of grade:)</th>
                            <th>Gender</th>
                            <th>Board</th>
                            <th>Name of State (State Board of Education)</th>
                            <th>Total Population</th>
                            <th>Male</th>
                            <th>Female</th>
                            <th>Students</th>
                            <th>Teachers</th>
                            <th>Non-teaching Staff</th>
                            <th>visitors_in_school</th>
                            <th>Total working days in year</th>
                            <th>GSP Audit Month</th>
                            <th>Location</th>

                            <!-- end GENERAL QUESTIONS-->

                            <!--  Start AIr section -->
                            <th>Q1(Air) How many classrooms does your school have?</th>
                            <th>Q2(Air) Window Floor Ratio</th>
                            <th>Q3(Air) What is the ownership of the vehicles used by your school</th>
                            <th>School Owned Vehicles</th>

                            <th>No of vehicles</th>
                            <th>Buses</th>
                            <th>Cars</th>
                            <th>Vans</th>
                            <th>Others</th>
                            <th>No of vehicles more than 5 years old</th>
                            <th>Buses more than 5 years old</th>
                            <th>Cars more than 5 years old</th>
                            <th>Vans more than 5 years old</th>
                            <th>others vehicles more than 5 years old</th>

                            <th>No of vehicles with AC</th>
                            <th>Buses with AC</th>
                            <th>Cars with AC</th>
                            <th>Vans with AC</th>
                            <th>Other vehicles with AC</th>
                            <th>No of vehicles PUC done</th>
                            <th>buses PUC done</th>
                            <th>cars PUC done</th>
                            <th>Vans PUC done</th>
                            <th>Other vehicles PUC done</th>

                            <th>Total parking Area</th>
                            <th>Buses parking Area</th>
                            <th>Cars parking Area</th>
                            <th>Vans parking Area</th>
                            <th>Other parking Area</th>


                            <th>Diesel Bus</th>
                            <th>Diesel Cars</th>
                            <th>Diesel Van</th>
                            <th>Diesel Other vehicles</th>

                            <th>Petrol Bus</th>
                            <th>Petrol Cars</th>
                            <th>Petrol Van</th>
                            <th>Petrol Other vehicles</th>

                            <th>LPG Bus</th>
                            <th>LPG Cars</th>
                            <th>LPG Van</th>
                            <th>LPG Other vehicles</th>

                            <th>CNG Bus</th>
                            <th>CNG Cars</th>
                            <th>CNG Van</th>
                            <th>CNG Other vehicles</th>



                            <th>Electric Buses</th><!--Q3b Electric Buses-->
                            <th>Electric Cars</th><!--Q3b Electric Cars-->
                            <th>Electric Vans</th><!--Q3b Electric Vans-->
                            <th>Electric Others vehicles</th><!--Q3b Electric others-->


                            <!-- Hybrid -->

                            <th>Hybrid Buses</th><!--Q3b Hybrid Buses-->
                            <th>Hybrid Cars</th><!--Q3b Hybrid Cars-->
                            <th>Hybrid Vans</th><!--Q3b Hybrid Vans-->
                            <th>Hybrid others</th><!--Q3b Hybrid others-->


                            <th>Transport_Use_Students-School bus</th>
                            <th>Transport_Use_Students-Public bus</th>
                            <th>Transport_Use_Students-School transport</th>
                            <th>Transport_Use_Students-Public transport</th>
                            <th>Transport_Use_Students-Taxi four-wheeler</th>
                            <th>Transport_Use_Students-Taxi three-wheeler</th>
                            <th>Transport_Use_Students-Personal four-wheeler</th>
                            <th>Transport_Use_Students-Personal two-wheeler</th>
                            <th>Transport_Use_Students-Bicycle</th>
                            <th>Transport_Use_Students-On foot</th>
                            <th>Transport_Use_Students-Others (non-motorized)</th>
                            
                             <th>Transport_Use_Teaching_Staff-School bus</th>
                            <th>Transport_Use_Teaching_Staff-Public bus</th>
                            <th>Transport_Use_Teaching_Staff-School transport</th>
                            <th>Transport_Use_Teaching_Staff-Public transport</th>
                            <th>Transport_Use_Teaching_Staff-Taxi four-wheeler</th>
                            <th>Transport_Use_Teaching_Staff-Taxi three-wheeler</th>
                            <th>Transport_Use_Teaching_Staff-Personal four-wheeler</th>
                            <th>Transport_Use_Teaching_Staff-Personal two-wheeler</th>
                            <th>Transport_Use_Teaching_Staff-Bicycle</th>
                            <th>Transport_Use_Teaching_Staff-On foot</th>
                            <th>Transport_Use_Teaching_Staff-Others (non-motorized)</th>
                            
                            <th>Transport_Use_Non_Teaching_Staff-School bus</th>
                            <th>Transport_Use_Non_Teaching_Staff-Public bus</th>
                            <th>Transport_Use_Non_Teaching_Staff-School transport</th>
                            <th>Transport_Use_Non_Teaching_Staff-Public transport</th>
                            <th>Transport_Use_Non_Teaching_Staff-Taxi four-wheeler</th>
                            <th>Transport_Use_Non_Teaching_Staff-Taxi three-wheeler</th>
                            <th>Transport_Use_Non_Teaching_Staff-Personal four-wheeler</th>
                            <th>Transport_Use_Non_Teaching_Staff-Personal two-wheeler</th>
                            <th>Transport_Use_Non_Teaching_Staff-Bicycle</th>
                            <th>Transport_Use_Non_Teaching_Staff-On foot</th>
                            <th>Transport_Use_Non_Teaching_Staff-Others (non-motorized)</th>                         

                            <th>Students_Suffer_from_respiratory_ailments</th>
                            <th>% of students suffer from respiratory</th>
                            <th>Air_quality_monitoring_equipment</th>

                            <!-- start energy question -->

                            <th>school_have_access_electricity_bill?</th>
                            <th>Status if school has uploaded electricity bill or not</th>
                            <th>school have its own vehicles</th>
                            
                            <th>Quantity_consumed (Electricity from the board)</th>
                            <th>Quantity_consumed (Electricity from generator)</th>
                            <th>Quantity_consumed (Petrol)</th>
                            <th>Quantity_consumed (Diesel)</th>
                            <th>Quantity_consumed (CNG)</th>
                            <th>Quantity_consumed (Kerosene)</th>
                            <th>Quantity_consumed (Coal )</th>
                            <th>Quantity_consumed (Wood)</th>
                            <th>Quantity_consumed (Animal waste)</th>
                            <th>Quantity_consumed (Solar)</th>
                            <th>Quantity_consumed (Wind)</th>
                            <th>Quantity_consumed (LPG)</th>
                            <th>Quantity_consumed (Piped Natural Gas)</th>
                            
                            
                            
                            

                            <th>Electricity (MJ)</th>
                            <th>Electricity from generator(MJ)</th>
                            <th>Petrol (MJ)</th>
                            <th>Diesel (MJ)</th>
                            <th>CNG (MJ)</th>

                            <th>Kerosene (MJ)</th>
                            <th>Coal (MJ)</th>
                            <th>Wood (MJ)</th>
                            <th>Animal Waste (MJ)</th>
                            <th>Solar (MJ)</th>


                            <th>Wind (MJ)</th>
                            <th>LPG (MJ)</th>
                            <th>PNG (MJ)</th>
                            <th>Status if uploaded any fuel bills</th>


<!--                            <th>What_appliances_does your school have?</th>-->

                            <th>No.of AC</th>
                            <th>AC with BEE Star Rating</th>
                            <th>No.of Refrigerator</th>
                            <th>Refrigerator with BEE star rating</th>
                            <th>No. of Microwave</th>
                            <th>Microwave with BEE star rating</th>
                            <th>No. of Tubelight </th>
                            <th>Tubelight with BEE star rating</th>
                            <th>No. of CFL bulbs</th>
                            <th>CFL bulbs with BEE star rating</th>
                            <th>No. of LED</th>
                            <th>LED with BEE star rating</th>
                            <th>No. of Fans</th>
                            <th>Fans with BEE star rating</th>
                            <th>Status if picture of 5 star rating applicances uploaded</th>

                            <th>average number of sunny_days_in_your_area</th>


                            <th>alternate sources of energy employed</th>
                            <th>Name the alternate sources of energy employed</th>


                            <th>Energy: Per cap/day (MJ)</th>
                            <th>Source of Energy</th>
                            <!--
                            <th>Points in <br />
                            Energy Section</th>
                            -->

                            <!-- food section start -->
                            <th>Q1.(Food) provision/space to sell packaged food </th>
                            <th>Savoury snacks and similar packaged food like chips, Kurkure, Cheetos, potato crisps, corn snacks, nuts and seeds, etc</th>
                            <th>Instant Noodles like Knorr, Cup-a-noodles, Top Ramen, Wai-wai, Yippee, Foodles, Maggi, etc</th>
                            <th>Potato fries and burgers</th>
                            <th>Confectionery items (chocolate, candies, gums)</th>
                            <th>Ice cream</th>
                            <th>Carbonated beverages</th>
                            <th>Sugar sweetened non-carbonated beverages</th>
                            <th>Packaged/bottled nimboo paani/lassi/flavoured milk</th>
                            <th>Packaged/bottled energy drinks</th>
                            
                            
                            
                            <th>School_Serve_Midday-meals?</th>
                            <th>students_carrying_lunch_from_home?</th>

                            <th>uploaded picture or not of lunch boxes</th>
                            <th>uploaded picture of canteen selling UPPF</th>
                            <th>Total no.of students bring home-made food</th>
                            <th>Total no.of of students bring packaged food</th>
                            <th>Teachers responsibility to check lunch from  home</th>


                            <th>Q3.(Food) Savoury snacks</th>
                            <th>Q3.(Food) Instant Noodles</th>
                            <th>Q3.(Food) Potato fries</th>
                            <th>Q3.(Food) Confectionery</th>
                            <th>Q3.(Food) Ice Cream</th>
                            <th>Q3.(Food) Carbonatde beverages</th>
                            <th>Q3.(Food) Sweetned non-carbonated beverage</th>
                            <th>Q3.(Food) Packaged bottled drings</th>
                            <th>Q3.(Food) Packaged bottled energy drinks</th>
                            <th>Q3.(Food) Uploaded picture of UPPF</th>



                            <th>Q4.(food) school serve traditional Indian snacks?</th>

                            <th>Samosas</th>
                            <th>Idli</th>
                            <th>Pavbhaji</th>
                            <th>Momos</th>
                            <th>Others</th>
                            <th>Uploaded pictures of traditional food in canteen?</th>


                            <th>Q5. school serve traditional Indian beverages?</th>

                            <th>Nimboo pani</th>
                            <th>Lassi</th>
                            <th>Butter Milk</th>
                            <th>Aam Panna</th>
                            <th>Others</th>



                            <th>Q6. Packaged Food distribution as Rewards</th>
                            <th>Details of Packaged Food</th>
                            <th>Q7. Distribution of Chocolate/similar products during events</th>
                            <th>Names_of_Products</th>
                            <th>Q8. Events sponsored by Food companies</th>
                            <th>Brand Banners</th>
                            <th>Banners, brochures, hoardings, stalls put-up during events</th>
                            <!-- <th>Points in <br />Food Section</th> -->
                            <th>Uploaded pictures</th>

                            <!--  End Food section -->


                            <!-- Start Land -->

                            <th>Total of Green Cover(m<sup>2</sup>)</th>
                            <th>Percentage of Green Cover(%)</th>


                            <th>Total Site area</th>
                            <th>Ground Coverage area</th>
                            <th>Green Landscaped area on-ground</th>
                            <th>Surface parking area</th>
                            <th>Play area paved/concrete on-ground</th>
                            <th>Play area has grass on ground</th>
                            <th>Service area on ground</th>
                            <th>Roof and terrace area</th>
                            <th>Green cover on exposed roof & Terrace</th>
                            <th>Total built-up/constructed area</th>
                            <th>No of Floors</th>
                            <th>Others</th>
                            <th>Native Plants</th>
                            <th>Exotic Plants</th>
                            <th>Native Animals </th>
                            <th>Exotic Animals</th>


                            <th>Use of Chemical based pesticides</th>
                            <th>Points in Land Section</th>
                            <!--End Start Land -->

                            <!-- start water section -->

                            <th>Water Consumption(Drinking)</th>
                            <th>Water Consumption(Toilet flushing)</th>
                            <th>Water Consumption(Personal cleaning)</th>
                            <th>Water Consumption(Washing clothes)</th>
                            <th>Water Consumption(Cooking)</th>
                            <th>Water Consumption(Cleaning Utensils)</th>
                            <th>Water Consumption(Washing Vegetables)</th>
                            <th>Water Consumption(Mopping floors)</th>
                            <th>Water Consumption(Gardening)</th>
                            
                            <th>Water: per cap/day(ltrs)</th>

                            <th>Water Source (Ground water)</th>
                             <th>Water Source (Surface water)</th>
                             <th>Water Source (Rain water)</th>
                            <th>Water Source (Recycled waste water)</th>
                            
                            
                            <th>Water Supplier (Municipality)</th>
                            <th>Water Supplier (Panchayat)</th>
                            <th>Water Supplier (Public Health Engineering Department (PHED))</th>
                            <th>Water Supplier (Private supplier)</th>
                            <th>Water Supplier (School�s own supply )</th>
                            
                            
                            
                            
                            <th>Does your school get daily water supply</th>
                            <th>If supply of water is not daily</th>



                            <!-- Q5. What are the water conservation practices your school follows -->

                            <th>Water sanitation policy</th>
                            <th>Eco-club</th>
                            <th>Tanks have float valves</th>
                            <th>Driking water points have spill proof taps</th>
                            <th>Appliances with quick wash settings</th>
                            <th>Dual flush</th>
                            <th>Encourage water bottle for drinking water</th>
                            <th>School grows plant that require limited water</th>
                            <th>Water conservation step in last one year</th>
                            <th>Drip irrigation</th>
                            <th>Any other step for water conservation</th>





                            <th>(RWH) system in your school?</th>
                            <th>Does your school harvest different catchments?</th>
                            <th>Harvested catchment area</th>
                            <th>How does your school harvest rainwater?</th>
                           <!--    <th> If your school only stores rainwater, please select the use of stored rainwater:</th>-->
                           <th>Stored rainwater use (Drinking)</th>
                           <th>Stored rainwater use (Gardening)</th>
                           <th>Stored rainwater use (Mopping)</th>
                           <th>Stored rainwater use (Toilets)</th>
                           <th>Stored rainwater use (Washing vehicles)</th>
                           <th>Stored rainwater use (Kitchen)</th>
                           <th>Stored rainwater use (Shower, Brushing teeth, Bathing, Hand washing)</th>
                           <th>Stored rainwater use (Swimming Pool)</th>

                                                        



                            <th>Does your school have rainwater storage tank?</th>
                            <th>Total capacity of storage tank (litres)</th>
                            <th>Total number of storage tanks</th>
                            <th>Location of tanks</th>

                            <th> Material options for tanks</th>
                            <th>Q6(b)(1) Does your school have groundwater recharge structure?</th>

                            <!--  Q6(b)(1)(i) Please share the total number of groundwater recharge structures -->
                            <th>Total number of recharge structure</th>
                            <th>ratio between storage and recharge?</th>
                            <th>Type of groundwater recharge</th>

                            <th>Q6(c) How much area in your school is harvested?</th>
                            
                            <th>Q6(d) rainwater harvesting structures (Conduits)</th>
                            <th>Q6(d) rainwater harvesting structures (Gutters)</th>
                            <th>Q6(d) rainwater harvesting structures (Filter unit)</th>
                            <th>Q6(d) rainwater harvesting structures (First flush)</th>
                            <th>Q6(d) rainwater harvesting structures (Storage tank)</th>
                            <th>Q6(d) rainwater harvesting structures (Collection sump)</th>
                            <th>Q6(d) rainwater harvesting structures (Pump unit)</th>
                            <th>Q6(d) rainwater harvesting structures (Recharge structure)</th>
                            
                            


                            <th>6(e)Rate your catchment on cleanliness</th>
                            <th>Q6(f)Does your school clean your catchment and system</th>
                            <th>Q6(f)(1) Please specify when does your school clean the catchment and RWH system?</th>
                            <th>Q6(g)Does your school monitor the rainwater harvesting structure for its efficiency?</th>

                            <th>Q6(g)(1)Please specify when does your school monitor the groundwater level?</th>

                            <th>Q6(h) What is the trend of groundwater level in your school across the year?</th>
                            <th>Q6(h)(1) Please specify how much was the increase?</th>
                            <th>Q6(i) RWH structure is more than a year old, is there any improvement in the groundwater quality </th>

                            <!-- 7 Please share details about sanitation and hygiene practices in your school: -->

                            <th>Separate toilets for males and females</th>
                            <th>Sufficient toilets for women</th>
                            <th>Sufficient toilets for men</th>
                            <th>Toilets accessible and safe for children use</th>
                            <th>Toilets accessible and safe for differently abled children use</th>
                            <th>Toilets accessible and safe for differently abled staff (teaching and non-teaching) use</th>
                            <th>Toilets situated in private and safe area</th>
                            <th>Sufficient light during day</th>


                            <th>Q8.How many drinking water taps do you have</th>
                            <th>Q9.How many hand pumps do you have?</th>
                            <th>Q10.How many ablution taps (taps used for washing hands only) do you have?</th>
                            <th>Q11.How many water closets (used for defecation and urination) do you have?</th>
                            <th>Q12.How many urinals (strictly used for urination only) do you have?</th>
                            <th>Q13.How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have</th>
                            <th>Q14.Is there a water storage system in place to supply water in the toilets?</th>
                            <th>Q15.Is the water supply sufficient?</th>
                            <th>Q16.Are the toilets cleaned?</th>
                            <th>16(a) If yes, please specify</th>
                            <th>Q17.Does your school treat wastewater?</th>
                            <th>Q18.Does your school reuse the treated wastewater?</th>
<!--                            <th>Q18(a)How does your school reuse wastewater?</th>-->
                            
                            <th>Q18(a)school reuse wastewater in (Gardening)</th>
                            <th>Q18(a)school reuse wastewater in (Flushing)</th>
                            <th>Q18(a)school reuse wastewater in (Recharge Ground Water)</th>
                        
                            
                            <th>18(a) Please specify the fate of wastewater </th>

                            <!-- Start waste section -->
                            <th>Q.1 (waste) Does your school segregate solid waste?</th>
<!--                            <th>Q.1(a) Who segregates the waste at source?</th>-->
                            
                            <th>Q.1(a) segregates the waste by (Students and teachers)</th>
                            <th>Q.1(a) segregates the waste by (Housekeeping)</th>
                            <th>Q.1(a) segregates the waste by (Gardener)</th>
                            <th>Q.1(a) segregates the waste by (Ragpickers)</th>
                            <th>Q.1(a) segregates the waste by (other)</th>
                           

                            <th>Total Waste Collection points with 0 bin</th>
                            <th>Total Waste Collection points with 1 bin</th>
                            <th>Total Waste Collection points with 2 bins</th>
                            <th>Total Waste Collection points with 3 bins</th>
                            <th>Waste: Per cap/day(Grams)</th>

                            <th>Type of waste: Garden/Horticultural waste</th>
                            <th>Kitchen waste</th>
                            <th>Paper</th>
                            <th>Plastic</th>
                            <th>Wood, glass, metal, classroom furniture</th>
                            <th>E-waste</th>
                            <th>Biomedical waste</th>
                            <th>Sanitary waste</th>
                            <th>Construction and Demolition (C & D) waste</th>
                            <th>Hazardous waste</th>

                            <th>Recyle Solid Waste</th>
                            <th>Total Waste Generated(Grams)</th>

                            <th>Total Waste Recycled(Grams)</th>

                            <th>Percentage of Waste Recycled(%)</th>

                            <th>Composting Facility</th>
                            <th>Composting Methodology</th>
                            <th>Quantity of Compost generated per month</th>
                            <th>Purpose of compost that is generated per month</th>
                            <th>Reuse Textbook</th>

<!--                            <th>Internal or external waste recycling procedures are applied to waste(Local kabadiwala)</th>
                            <th>Internal or external waste recycling procedures are applied to waste(Authorised dealer)</th>
                            <th>Internal or external waste recycling procedures are applied to waste(Dumped at a designated community site)</th>
                            <th>Internal or external waste recycling procedures are applied to waste(Internal procedure)</th>-->
                            
                            <!-- 7 Please fill the table below to understand whether waste recycling procedures are applied to waste. -->
                            
                            <!-- Paper -->
                            <th>waste recycling procedures - Paper (Local scrap collector)</th>
                            <th>waste recycling procedures - Paper (Authorised dealer)</th>
                            <th>waste recycling procedures - Paper (Dumped at a designated community site)</th>
                            <th>waste recycling procedures - Paper (Internal procedure)</th>
                            
                            <!-- Plastic -->
                            <th>waste recycling procedures - Plastic (Local scrap collector)</th>
                            <th>waste recycling procedures - Plastic (Authorised dealer)</th>
                            <th>waste recycling procedures - Plastic (Dumped at a designated community site)</th>
                            <th>waste recycling procedures - Plastic (Internal procedure)</th>
                            
                            <!-- Horticultural waste -->
                            <th>waste recycling procedures - Horticultural waste (Local scrap collector)</th>
                            <th>waste recycling procedures - Horticultural waste (Authorised dealer)</th>
                            <th>waste recycling procedures - Horticultural waste (Dumped at a designated community site)</th>
                            <th>waste recycling procedures - Horticultural waste (Internal procedure)</th>
                            
                            <!-- E-waste -->
                            <th>waste recycling procedures - E-waste (Local scrap collector)</th>
                            <th>waste recycling procedures - E-waste (Authorised dealer)</th>
                            <th>waste recycling procedures - E-waste (Dumped at a designated community site)</th>
                            <th>waste recycling procedures - E-waste (Internal procedure)</th>
                            
                             <!-- Hazardous waste -->
                            <th>waste recycling procedures - Hazardous waste (Local scrap collector)</th>
                            <th>waste recycling procedures - Hazardous waste (Authorised dealer)</th>
                            <th>waste recycling procedures - Hazardous waste (Dumped at a designated community site)</th>
                            <th>waste recycling procedures - Hazardous waste (Internal procedure)</th>
                            
                              <!-- Wood, glass, metal -->
                            <th>waste recycling procedures - Wood, glass, metal (Local scrap collector)</th>
                            <th>waste recycling procedures - Wood, glass, metal (Authorised dealer)</th>
                            <th>waste recycling procedures - Wood, glass, metal (Dumped at a designated community site)</th>
                            <th>waste recycling procedures - Wood, glass, metal (Internal procedure)</th>
                            
                            <!-- Biomedical waste  -->
                            <th>waste recycling procedures - Biomedical waste  (Local scrap collector)</th>
                            <th>waste recycling procedures - Biomedical waste  (Authorised dealer)</th>
                            <th>waste recycling procedures - Biomedical waste  (Dumped at a designated community site)</th>
                            <th>waste recycling procedures - Biomedical waste  (Internal procedure)</th>
                            

                            <th>Waste Disposal</th>
                            <th>Burn Waste</th>
                            <th>Where do you burn waste</th>
                            <th>Kind of waste burnt</th>

                            <th>Does_your_school_have_the_following (Working conditions)</th>
                            <th>Does_your_school_have_the_following (Non-working condition)</th>

                            <th>E-waste Disposal</th>
                            <th>Who collects E-waste</th>

                            <th>school have a policy on waste</th>
                            <th>Are there awareness drives with regard to Reduce, Recycle and Reuse?</th>
                            
                            
                            <th>awareness drives take (As part of the curriculum)</th>
                            <th>awareness drives take (As part of extracurricular activities such as guest lectures)</th>
                            <th>awareness drives take (By the showcasing of posters and stickers)</th>
                            
                            
                            <th>Is the study of the environment integrated into the curriculum?</th>
                            <!--
                            <th>Points in Waste Section</th>
                            <th>Total Points</th>
                            <th>Total Points</th>
                            -->



                            <th>
                                Q1.Feedback:Has your school participated in the Green Schools Programme (GSP) Audit before?
                            </th>
                            <th>
                                Q1(a).Feedback:If yes, then in which year did your school first participate in the GSP Audit?
                            </th>
                            <th>
                                Q1(b).Feedback:If yes, how many times have you done the audit?
                            </th>
                            <th>
                                Q2.Feedback: Have teachers from your school participated in teacher interactive workshops organized by the GSP team?
                            </th>

                            <th>
                                Q3.Feedback: Did you find the online information relevant to your environmental education activities?
                            </th>

                            <th>
                                Q3a.Feedback:If no,then please share your suggestions.
                            </th>

                            <th>
                                Q4.Feedback: Was the audit easy-to-understand and self-explanatory?
                            </th>
                            <th>
                                Q5. Did you understand the present format of the GSP?
                            </th>
                            <th>
                                Q6.Do you think your school will be a Green School (resource efficient) by 2019
                            </th>
                            <th>
                                Q6a. If no, why?
                            </th>

                            <th>
                                Q7.What would be the help required to make your school a Green School?
                            </th>

                            <th>
                                Q8.How would you rate the overall design of the audit?
                            </th>

                            <th>
                                Q9.Would your school like to recommend any topic/s that you strongly
                            </th>

                            <th>
                                Q10.Could you finish all the tasks in given period of time online
                            </th>

                            <th>
                                Q11.How many times did you contact the Green Schools Programme Team for guidance and counseling?
                            </th>

                            <th>
                                Q12.Water being the focus this year
                            </th>

                            <th>
                                Q12a.If no, please share your suggestions:
                            </th>

                            <th>
                                Q13. Did your students enjoy doing the Water activities?
                            </th>
                            <th>
                                Q13a. Did your students enjoy doing the Water activities?
                            </th>
                            
                           <th>Air Points</th>
                            <th>Energy Points</th>
                            <th>Food Points</th>
                            <th>Land Points</th>
                            <th>Water Points</th>
                            <th>Waste Points</th>
                            <th>Total Points</th>
                            <th>Percentage Score</th>
                            <th>Completeness</th>
                            <th>Category</th>
                        </tr>




                    </thead> 
                    <tbody>

<?php
$sql_data = mysql_query("SELECT survey.*,tokentbl.tid as tid, tokentbl.attribute_1,tokentbl.attribute_5, tokentbl.attribute_7,tokentbl.attribute_12, tokentbl.attribute_14, tokentbl.token,tokentbl.datetime,tokentbl.completed,tokentbl.attribute_6 FROM lime_survey_266617 AS survey,lime_tokens_266617 AS tokentbl WHERE survey.token=tokentbl.token and tokentbl.completed!='N' AND survey.`submitdate` IS NOT NULL ORDER BY `startdate` DESC");

$i = 0;
while ($sql_data_array = mysql_fetch_assoc($sql_data)) {


    $sql_score_total = mysql_query("select SUM(score) as score2,SUM(bonus) as bonus from calculation where token='" . $sql_data_array['token'] . "'");
    $sql_score = mysql_result($sql_score_total, 0, 0);
    $sql_bonus = mysql_result($sql_score_total, 0, 1);

    $token = $sql_data_array['token'];
    $sql_score_air = GetAirPoints($token); //Air Section Score

    $sql_score_energy = GetEnergyPoints($token); //Energy Section Score

    $sql_score_food = GetFoodPoints($token); //Food Section Score  

    $sql_score_land = GetLandPoints($token); //Land Section Score  
    $sql_score_water = GetWaterPoints($token); //water Section Score  
    $sql_score_waste = GetWastePoints($token); //Waste Section Score  


    $i++;
    ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $sql_data_array['tid']; ?></td>
                                <td><?php echo $sql_data_array['attribute_1']; ?></td>
                                <td><?php echo $sql_data_array['266617X34X1591']; ?></td>
                                <td><?php echo $sql_data_array['266617X34X1592']; ?></td>
                                <td><?php echo "India"; ?></td>
    <?php
    $sql_state = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `states_india` WHERE `state_id` = '" . $sql_data_array['attribute_5'] . "'"));

    $statename = $sql_state['name'];
    ?>
                                <td><?php echo $statename; ?></td>
                                <td><?php echo $sql_data_array['attribute_6']; ?></td>
                                <td><?php echo $sql_data_array['attribute_7']; ?></td>
                                <td>
    <?php
    if ($sql_data_array['266617X34X1596'] != "" && $sql_data_array['266617X34X1596'] != 0)
        //echo number_format($sql_data_array['266617X34X1596'], $decimals = 0, $dec_point = ".", $thousands_sep = "");
       echo number_format($sql_data_array['266617X34X1596'], 2,".","");
    ?>
                                </td>
                                <td><?php echo (int) number_format($sql_data_array['266617X34X1597SQ001'], $decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
                                <td><?php echo number_format($sql_data_array['266617X34X1597SQ003'], $decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
                                <td><?php echo number_format($sql_data_array['266617X34X1597SQ002'], $decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>
                                <td><?php echo $sql_data_array['attribute_12']; ?></td>
                                <td><?php echo $sql_data_array['266617X34X1602']; ?></td>
                                <td><?php echo $sql_data_array['attribute_14']; ?></td>
                                <td><?php echo $sql_data_array['266617X34X1604']; ?></td>
                                <td><?php echo $sql_data_array['266617X34X1605']; ?></td>
                                <td><?php echo number_format($sql_data_array['266617X34X1606SQ002'], $decimals = 0, $dec_point = ".", $thousands_sep = "");
                                ?></td>

                                <td>
                                    <?php
                                    $school_type = array(1 => "Day Scholar", 2 => "Day Boarding", 3 => "Residential", 4 => "Day Scholar + Day Boarding", 5 => "Day Boarding + Residential", 6 => "Day Scholar + Residential", 7 => "Day Scholar + Day Boarding + Residential");

                                    $type = $sql_data_array['266617X34X1608'];
                                    echo $school_type[$type];
                                    ?>
                                </td>
                                <td><?php if ($sql_data_array['266617X34X1609'] == "A1") {
                                    echo "Morning";
                                } elseif ($sql_data_array['266617X34X1609'] == "A2") {
                                    echo "Evening";
                                } elseif ($sql_data_array['266617X34X1609'] == "A3") {
                                    echo "Both";
                                } ?>
                                </td>

                                <td><?php echo $sql_data_array['token']; ?></td>
                                <td><?php echo date('d-m-Y', strtotime($sql_data_array['datetime'])); ?></td>
                                <td><?php if ($sql_data_array['completed'] != "N") {
                                    echo date('d-m-Y', strtotime($sql_data_array['completed']));
                                } else {
                                    echo "N/A";
                                } ?></td>

    <!--<td><?php echo $sql_comp['completeness']; ?></td> -->


                                <!-- start General Questions. -->	

                                <td> 
                                    <?php echo $sql_data_array['266617X32X1674SQ001']; ?>
                                </td>
                                <td>
                                    <?php echo $sql_data_array['266617X32X1674SQ002']; ?>
                                </td>
                                <td><?php if ($sql_data_array['266617X32X27'] == "A1") {
                                    echo "Only Boys";
                                } elseif ($sql_data_array['266617X32X27'] == "A3") {
                                    echo "Only Girls";
                                } elseif ($sql_data_array['266617X32X27'] == "A2") {
                                    echo "Mixed/Co-education";
                                } ?></td>
                                <td>
                                    <?php
                                    $b = array();
                                    if ($sql_data_array['266617X32X28'] == "1") {
                                        $b[] = "State Board of Education";
                                    }
                                    if ($sql_data_array['266617X32X28'] == "2") {
                                        $b[] = "Central Board of Secondary Education";
                                    }
                                    if ($sql_data_array['266617X32X28'] == "3") {
                                        $b[] = "Indian Certificate of Secondary Education";
                                    }
                                    if ($sql_data_array['266617X32X28'] == "4") {
                                        $b[] = "International Baccalaureate (IB)/International General Certificate of Secondary Education (IGCSE) combination";
                                    }
                                    if ($sql_data_array['266617X32X28'] == "-oth-") {
                                        $b[] = "Other:" . $sql_data_array['266617X32X28other'];
                                    }
                                    echo implode($b, ',');
                                    ?>
                                </td> 
                                <td>
    <?php
    $sql_state = mysql_fetch_assoc(mysql_query("SELECT `name` FROM `states_india` WHERE `state_id` = '" . $sql_data_array['attribute_5'] . "'"));

    echo $statename = $sql_state['name'];
    ?>
                                </td>

                                <!-- Total population -->
                                <td><?php echo $sql_data_array['266617X32X33SQ004_SQ003']; ?></td>
                                <!-- Male -->
                                <td><?php echo $sql_data_array['266617X32X33SQ004_SQ001']; ?></td>
                                <!--Female -->
                                <td><?php echo $sql_data_array['266617X32X33SQ004_SQ002']; ?></td>
                                <!-- students -->
                                <td><?php echo $sql_data_array['266617X32X33SQ001_SQ003']; ?></td>
                                <!-- Teachers -->
                                <td><?php echo $sql_data_array['266617X32X33SQ002_SQ003']; ?></td>
                                <!-- Non-teaching Staff -->
                                <td><?php echo $sql_data_array['266617X32X33SQ003_SQ003']; ?></td>


                                <td><?php echo abs($sql_data_array['266617X32X2297']); ?></td>
                                <td><?php echo abs($sql_data_array['266617X32X40']); ?></td>
                                <td>
                                    <?php
                                    $gspaudit = array();
                                    if ($sql_data_array['266617X32X43SQ001_SQ001'] != "") {
                                        $gspaudit[] = "Jan";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ003'] != "") {
                                        $gspaudit[] = "Feb";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ002'] != "") {
                                        $gspaudit[] = "Mar";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ004'] != "") {
                                        $gspaudit[] = "Apr";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ005'] != "") {
                                        $gspaudit[] = "May";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ006'] != "") {
                                        $gspaudit[] = "Jun";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ007'] != "") {
                                        $gspaudit[] = "Jul";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ008'] != "") {
                                        $gspaudit[] = "Aug";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ009'] != "") {
                                        $gspaudit[] = "Sep";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ010'] != "") {
                                        $gspaudit[] = "Oct";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ011'] != "") {
                                        $gspaudit[] = "Nov";
                                    }
                                    if ($sql_data_array['266617X32X43SQ001_SQ012'] != "") {
                                        $gspaudit[] = "Dec";
                                    }

                                    echo implode($gspaudit, ',');
                                    ?>


                                </td>
                                <td><?php if ($sql_data_array['266617X32X56'] == "A1") {
                                    echo "Urban Area";
                                } elseif ($sql_data_array['266617X32X56'] == "A2") {
                                    echo "Rural Area";
                                } ?></td>

                                <!--end General Questions -->

                                <!-- Start Air Section Questions -->

                                <td>
                                    <?php echo number_format($sql_data_array['266617X4X1127'], $decimals = 0, $dec_point = ".", $thousands_sep = ""); ?>
                                </td>
                                <!-- total classrooms-->

                                <td>
                                    <!-- Air Q2. window floor ratio-->
                                    <?php
                                    $sql_floor_details = mysql_query("select 266617X4X2197SQ001_SQ001, 266617X4X2197SQ002_SQ001, 266617X4X2197SQ003_SQ001, 266617X4X2197SQ004_SQ001, 266617X4X2197SQ005_SQ001, 266617X4X2197SQ006_SQ001, 266617X4X2197SQ007_SQ001, 266617X4X2197SQ008_SQ001, 266617X4X2197SQ009_SQ001, 266617X4X2197SQ010_SQ001, 266617X4X2197SQ011_SQ004 from `lime_survey_266617` where `token`='" . $sql_data_array['token'] . "'");
                                    $resultSet = array();
                                    while ($result = mysql_fetch_assoc($sql_floor_details)) {
                                        $resultSet = $result;
                                        $total_percentage_ventilated = number_format($result['266617X4X2197SQ011_SQ004'], 2);
                                    }
                                    $non_empty_records = count(array_filter($resultSet)) - 1;

                                    $avg = $total_percentage_ventilated / $non_empty_records;
                                    echo $view_avg = number_format($avg, 2)
                                    ?>
                                </td>



                                <td><!-- Vehicles Owned-->
    <?php
    if ($sql_data_array['266617X4X164'] == "A1") {
        echo "School does not use or own vehicles";
    } elseif ($sql_data_array['266617X4X164'] == "A2") {
        echo "Operator-owned vehicles";
    } elseif ($sql_data_array['266617X4X164'] == "A3") {
        echo "School-owned vehicles";
    } elseif ($sql_data_array['266617X4X164'] == "A4") {
        echo "A combination of school-owned and operator-owned vehicles";
    }
    ?>
                                </td>

                                <td>
                                    <?php if ($sql_data_array['266617X4X165SQ001_SQ003'] == 0 || $sql_data_array['266617X4X165SQ001_SQ003'] == '00') {
                                        echo 0;
                                    } else {
                                        echo $sql_data_array['266617X4X165SQ001_SQ003'];
                                    } ?>
                                </td> <!-- School Owned Vehicles-->




                                <td><?php echo $sql_data_array['266617X4X165SQ001_SQ003']; ?><!-- No of vehicles --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ001_SQ001']; ?><!-- Buses --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ001_SQ002']; ?><!--Cars --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ001_SQ008']; ?><!--Vans--></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ001_SQ007']; ?><!--Others--></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ002_SQ003']; ?><!-- No of vehicles more than 5 years old --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ002_SQ001']; ?><!-- Buses more than 5 years old --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ002_SQ002']; ?><!--Cars more than 5 years old --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ002_SQ008']; ?><!-- Vans more than 5 years old --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ002_SQ007']; ?> <!-- others vehicles more than 5 years old --></td>

                                <td><?php echo $sql_data_array['266617X4X165SQ004_SQ003']; ?><!-- No of vehicles with AC --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ004_SQ001']; ?><!-- Buses with AC --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ004_SQ002']; ?> <!-- Cars with AC --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ004_SQ008']; ?><!-- Vans with AC --></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ004_SQ007']; ?><!-- Other vehicles with AC --></td>

                                <td><?php echo $sql_data_array['266617X4X165SQ005_SQ003']; ?><!-- No of vehicles PUC done--></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ005_SQ001']; ?><!-- buses PUC done--></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ005_SQ002']; ?><!-- cars PUC done--></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ005_SQ008']; ?><!-- Vans PUC done--></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ005_SQ007']; ?><!-- Other vehicles PUC done--></td>

                                <td><?php echo $sql_data_array['266617X4X165SQ001_SQ003']; ?><!-- No of vehicles have parking facility--></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ006_SQ001']; ?><!-- Buses with parking facility--></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ006_SQ002']; ?><!-- Cars with parking facility--></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ006_SQ008']; ?><!-- Vans with parking facility--></td>
                                <td><?php echo $sql_data_array['266617X4X165SQ006_SQ007']; ?><!-- Other vehicles with parking facility--></td>


                                <td> 
    <?php echo ((int) $sql_data_array['266617X4X2217SQ001_SQ001']); ?><!--Q3b	Diesel Buses -->
                                </td>

                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ002_SQ001']); ?> <!--Q3b	Diesel car --></td>
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ003_SQ001']); ?></td> <!--Q3b	Diesel vans -->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ005_SQ001']); ?></td> <!--Q3b	Diesel Other vehicles -->

                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ001_SQ002']); ?></td> <!-- petrol bus-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ002_SQ002']); ?></td> <!-- petrol Cars-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ003_SQ002']); ?></td><!--Q3b petrol vans-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ005_SQ002']); ?></td><!--Q3b petrol Other vehicles-->

                                <!-- LPG -->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ001_SQ003']); ?></td><!--Q3b LPG buses-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ002_SQ003']); ?></td><!--Q3b LPG Cars-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ003_SQ003']); ?></td><!--Q3b LPG vans-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ003_SQ003']); ?></td><!--Q3b LPG others-->

                                <!-- CNG -->

                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ001_SQ004']); ?></td><!--Q3b CNG Buses-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ002_SQ004']); ?></td><!--Q3b CNG Cars-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ003_SQ004']); ?></td><!--Q3b CNG Vans-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ005_SQ004']); ?></td><!--Q3b CNG others-->


                                <!-- Electric -->

                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ001_SQ005']); ?></td><!--Q3b Electric Buses-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ002_SQ005']); ?></td><!--Q3b Electric Cars-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ003_SQ005']); ?></td><!--Q3b Electric Vans-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ005_SQ005']); ?></td><!--Q3b Electric others-->


                                <!-- Hybrid -->

                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ001_SQ006']); ?></td><!--Q3b CNG Buses-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ002_SQ006']); ?></td><!--Q3b CNG Cars-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ003_SQ006']); ?></td><!--Q3b CNG Vans-->
                                <td><?php echo ((int) $sql_data_array['266617X4X2217SQ005_SQ006']); ?></td><!--Q3b CNG others-->

                                <!--Que.4. (Air) Please specify how many members of the school community use each type of transport -->

    <?php
    if ($sql_data_array['266617X4X176SQ001_SQ001'] != "" && $sql_data_array['266617X4X176SQ001_SQ001'] != 0) {
        $Schoolbus_student = $sql_data_array['266617X4X176SQ001_SQ001'];
    }
    else 
        { 
                $Schoolbus_student = 0;     
         } 
    

    if ($sql_data_array['266617X4X176SQ002_SQ001'] != "" && $sql_data_array['266617X4X176SQ002_SQ001'] != 0) {
        $Publicbus_student = $sql_data_array['266617X4X176SQ002_SQ001'];
    }
     else 
        { 
                $Publicbus_student = 0;     
         } 

    if ($sql_data_array['266617X4X176SQ003_SQ001'] != "" && $sql_data_array['266617X4X176SQ003_SQ001'] != 0) {
        $schooltrnotherthenbus_student = $sql_data_array['266617X4X176SQ003_SQ001'];
    }
     else 
        { 
                $schooltrnotherthenbus_student = 0;     
         } 

    if ($sql_data_array['266617X4X176SQ0012_SQ001'] != "" && $sql_data_array['266617X4X176SQ0012_SQ001'] != 0) {
        $pbtotbusmcarpool_student = $sql_data_array['266617X4X176SQ0012_SQ001'];
    }
     else 
        { 
                $pbtotbusmcarpool_student = 0;     
         } 
    if ($sql_data_array['266617X4X176SQ005_SQ001'] != "" && $sql_data_array['266617X4X176SQ005_SQ001'] != 0) {
        $Taxifourwheeler_student = $sql_data_array['266617X4X176SQ005_SQ001'];
    }
    
     else 
        { 
                $Taxifourwheeler_student = 0;     
         } 

    if ($sql_data_array['266617X4X176SQ006_SQ001'] != "" && $sql_data_array['266617X4X176SQ006_SQ001'] != 0) {
        $Taxithreewheeler_student = $sql_data_array['266617X4X176SQ006_SQ001'];
    }
     else 
        { 
                $Taxithreewheeler_student = 0;     
         } 


    if ($sql_data_array['266617X4X176SQ007_SQ001'] != "" && $sql_data_array['266617X4X176SQ007_SQ001'] != 0) {
        $Personalfourwheeler_student = $sql_data_array['266617X4X176SQ007_SQ001'];
    }
    
     else 
        { 
                $Personalfourwheeler_student = 0;     
         } 

    if ($sql_data_array['266617X4X176SQ008_SQ001'] != "" && $sql_data_array['266617X4X176SQ008_SQ001'] != 0) {
        $Personal_two_wheeler_student = $sql_data_array['266617X4X176SQ008_SQ001'];
    }
    
     else 
        { 
                $Personal_two_wheeler_student = 0;     
         } 

    if ($sql_data_array['266617X4X176SQ009_SQ001'] != "" && $sql_data_array['266617X4X176SQ009_SQ001'] != 0) {
        $Bicycle_student = $sql_data_array['266617X4X176SQ009_SQ001'];
    }
    
     else 
        { 
                $Bicycle_student = 0;     
         } 

    if ($sql_data_array['266617X4X176SQ010_SQ001'] != "" && $sql_data_array['266617X4X176SQ010_SQ001'] != 0) {
        $Onfoot_student =  $sql_data_array['266617X4X176SQ010_SQ001'];
    }
    
     else 
        { 
                $Onfoot_student = 0;     
         } 
    if ($sql_data_array['266617X4X176SQ011_SQ001'] != "" && $sql_data_array['266617X4X176SQ011_SQ001'] != 0) {
        $Others_student = $sql_data_array['266617X4X176SQ011_SQ001'];
    }
    
     else 
        { 
                $Others_student = 0;     
         } 
?>                       <td><?php echo $Schoolbus_student;?> </td>
                            <td><?php echo $Publicbus_student;?> </td>
                            <td><?php echo $schooltrnotherthenbus_student;?> </td>
                            <td><?php echo $pbtotbusmcarpool_student;?> </td>
                            <td><?php echo $Taxifourwheeler_student;?> </td>
                            <td><?php echo $Taxithreewheeler_student;?> </td>
                            <td><?php echo $Personalfourwheeler_student;?> </td>
                            <td><?php echo $Personal_two_wheeler_student;?> </td>
                            <td><?php echo $Bicycle_student;?> </td>
                            <td><?php echo $Onfoot_student;?> </td>
                            <td><?php echo $Others_student;?> </td>


                                <?php
                                if ($sql_data_array['266617X4X176SQ001_SQ002'] != "" && $sql_data_array['266617X4X176SQ001_SQ002'] != 0) {
                                    $Schoolbus_teach = $sql_data_array['266617X4X176SQ001_SQ002'];
                                }
                                 else 
                                { 
                                        $Schoolbus_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ002_SQ002'] != "" && $sql_data_array['266617X4X176SQ002_SQ002'] != 0) {
                                    $Publicbus_teach = $sql_data_array['266617X4X176SQ002_SQ002'];
                                }
                                
                                 else 
                                { 
                                        $Publicbus_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ003_SQ002'] != "" && $sql_data_array['266617X4X176SQ003_SQ002'] != 0) {
                                    $schooltrnotherthenbus_teach = $sql_data_array['266617X4X176SQ003_SQ002'];
                                }
                                
                                 else 
                                { 
                                        $schooltrnotherthenbus_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ0012_SQ002'] != "" && $sql_data_array['266617X4X176SQ0012_SQ002'] != 0) {
                                    $pbtotbusmcarpool_teach = $sql_data_array['266617X4X176SQ0012_SQ002'];
                                }
                                
                                 else 
                                { 
                                        $pbtotbusmcarpool_teach = 0;     
                                 } 
                                if ($sql_data_array['266617X4X176SQ005_SQ002'] != "" && $sql_data_array['266617X4X176SQ005_SQ002'] != 0) {
                                    $Taxifourwheeler_teach = $sql_data_array['266617X4X176SQ005_SQ002'];
                                }
                                
                                 else 
                                { 
                                        $Taxifourwheeler_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ006_SQ002'] != "" && $sql_data_array['266617X4X176SQ006_SQ002'] != 0) {
                                    $Taxithreewheeler_teach = $sql_data_array['266617X4X176SQ006_SQ002'];
                                }
                                
                                 else 
                                { 
                                        $Taxithreewheeler_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ007_SQ002'] != "" && $sql_data_array['266617X4X176SQ007_SQ002'] != 0) {
                                    $Personalfourwheeler_teach = $sql_data_array['266617X4X176SQ007_SQ002'];
                                }
                                
                                 else 
                                { 
                                        $Personalfourwheeler_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ008_SQ002'] != "" && $sql_data_array['266617X4X176SQ008_SQ002'] != 0) {
                                    $Personal_two_wheeler_teach = $sql_data_array['266617X4X176SQ008_SQ002'];
                                }
                                
                                 else 
                                { 
                                        $Personal_two_wheeler_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ009_SQ002'] != "" && $sql_data_array['266617X4X176SQ009_SQ002'] != 0) {
                                    $Bicycle_teach = $sql_data_array['266617X4X176SQ009_SQ002'];
                                }
                                
                                 else 
                                { 
                                        $Bicycle_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ010_SQ002'] != "" && $sql_data_array['266617X4X176SQ010_SQ002'] != 0) {
                                    $Onfoot_teach = $sql_data_array['266617X4X176SQ010_SQ002'];
                                }
                                
                                 else 
                                { 
                                        $Onfoot_teach = 0;     
                                 } 
                                if ($sql_data_array['266617X4X176SQ011_SQ002'] != "" && $sql_data_array['266617X4X176SQ011_SQ002'] != 0) {
                                    $Others_teach = $sql_data_array['266617X4X176SQ011_SQ002'];
                                }
                                
                                 else 
                                { 
                                        $Others_teach = 0;     
                                 } 
                                ?>
                             
                                
                            <td><?php echo $Schoolbus_teach;?> </td>
                            <td><?php echo $Publicbus_teach;?> </td>
                            <td><?php echo $schooltrnotherthenbus_teach;?> </td>
                            <td><?php echo $pbtotbusmcarpool_teach;?> </td>
                            <td><?php echo $Taxifourwheeler_teach;?> </td>
                            <td><?php echo $Taxithreewheeler_teach;?> </td>
                            <td><?php echo $Personalfourwheeler_teach;?> </td>
                            <td><?php echo $Personal_two_wheeler_teach;?> </td>
                             <td><?php echo $Bicycle_teach;?> </td>
                            <td><?php echo $Onfoot_teach;?> </td>
                            <td><?php echo $Others_teach; ?> </td>

                                <?php
                                if ($sql_data_array['266617X4X176SQ001_SQ003'] != "" && $sql_data_array['266617X4X176SQ001_SQ003'] != 0) {
                                    $Schoolbus_non_teach = $sql_data_array['266617X4X176SQ001_SQ003'];
                                }
                                
                                  else 
                                { 
                                        $Schoolbus_non_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ002_SQ003'] != "" && $sql_data_array['266617X4X176SQ002_SQ003'] != 0) {
                                    $Publicbus_non_teach = $sql_data_array['266617X4X176SQ002_SQ003'];
                                }
                                
                                  else 
                                { 
                                        $Publicbus_non_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ003_SQ003'] != "" && $sql_data_array['266617X4X176SQ003_SQ003'] != 0) {
                                    $schooltrnotherthenbus_non_teach = $sql_data_array['266617X4X176SQ003_SQ003'];
                                }
                                
                                  else 
                                { 
                                        $schooltrnotherthenbus_non_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ0012_SQ003'] != "" && $sql_data_array['266617X4X176SQ0012_SQ003'] != 0) {
                                    $pbtotbusmcarpool_non_teach = $sql_data_array['266617X4X176SQ0012_SQ003'];
                                }
                                
                                  else 
                                { 
                                        $pbtotbusmcarpool_non_teach = 0;     
                                 } 
                                if ($sql_data_array['266617X4X176SQ005_SQ003'] != "" && $sql_data_array['266617X4X176SQ005_SQ003'] != 0) {
                                    $Taxifourwheeler_non_teach = $sql_data_array['266617X4X176SQ005_SQ003'];
                                }
                                
                                  else 
                                { 
                                        $Taxifourwheeler_non_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ006_SQ003'] != "" && $sql_data_array['266617X4X176SQ006_SQ003'] != 0) {
                                    $Taxithreewheeler_non_teach = $sql_data_array['266617X4X176SQ006_SQ003'];
                                }
                                
                                  else 
                                { 
                                        $Taxithreewheeler_non_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ007_SQ003'] != "" && $sql_data_array['266617X4X176SQ007_SQ003'] != 0) {
                                    $Personalfourwheeler_non_teach = $sql_data_array['266617X4X176SQ007_SQ003'];
                                }
                                
                                
                                  else 
                                { 
                                        $Personalfourwheeler_non_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ008_SQ003'] != "" && $sql_data_array['266617X4X176SQ008_SQ003'] != 0) {
                                    $Personal_two_wheeler_non_teach = $sql_data_array['266617X4X176SQ008_SQ003'];
                                }
                                
                                  else 
                                { 
                                        $Personal_two_wheeler_non_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ009_SQ003'] != "" && $sql_data_array['266617X4X176SQ009_SQ003'] != 0) {
                                    $Bicycle_non_teach = $sql_data_array['266617X4X176SQ009_SQ003'];
                                }
                                
                                  else 
                                { 
                                        $Bicycle_non_teach = 0;     
                                 } 

                                if ($sql_data_array['266617X4X176SQ010_SQ003'] != "" && $sql_data_array['266617X4X176SQ010_SQ003'] != 0) {
                                    $Onfoot_non_teach = $sql_data_array['266617X4X176SQ010_SQ003'];
                                }
                                
                                  else 
                                { 
                                        $Onfoot_non_teach = 0;     
                                 } 
                                if ($sql_data_array['266617X4X176SQ011_SQ003'] != "" && $sql_data_array['266617X4X176SQ011_SQ003'] != 0) {
                                    $Others_non_teach = $sql_data_array['266617X4X176SQ011_SQ003'];
                                }
                                
                                  else 
                                { 
                                        $Others_non_teach = 0;     
                                 } 
                                ?>

                                
                             <td><?php echo $Schoolbus_non_teach;?> </td>
                            <td><?php echo $Publicbus_non_teach;?> </td>
                            <td><?php echo $schooltrnotherthenbus_non_teach;?> </td>
                            <td><?php echo $pbtotbusmcarpool_non_teach;?> </td>
                            <td><?php echo $Taxifourwheeler_non_teach;?> </td>
                            <td><?php echo $Taxithreewheeler_non_teach;?> </td>
                            <td><?php echo $Personalfourwheeler_non_teach;?> </td>
                            <td><?php echo $Personal_two_wheeler_non_teach;?> </td>
                             <td><?php echo $Bicycle_non_teach;?> </td>
                            <td><?php echo $Onfoot_non_teach;?> </td>
                            <td><?php echo $Others_non_teach;?> </td>
                                
                                <!-- Q5.(Air) How many students suffer from respiratory ailments  -->
                                <td><?php echo $respiratoryailments = abs($sql_data_array['266617X4X184']); ?></td>

                                <td>
                                <?php $totalstudent = $sql_data_array['266617X4X176SQ004_SQ001'];
                                echo number_format(($respiratoryailments / $totalstudent) * 100, 2);
                                echo "%";
                                ?>
                                </td>

                                <!-- Q6.(Air) Does the school laboratory have air quality monitoring equipment? -->
                                <td><?php if ($sql_data_array['266617X4X187'] == "Y") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?></td>


                                <!-- Start Energy Section Question -->

                                <!--Q.1.Does your school have access to an electricity bill? -->
                                <td><?php if ($sql_data_array['266617X8X237'] == "Y") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?></td>

                                <!--Q.2.(Energy) Does your school have access to an electricity bill? -->
                                <td><?php if ($sql_data_array['266617X8X2274'] == "Y") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?></td>

                                <td><?php if ($sql_data_array['266617X8X2412'] != "") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?></td>


    <?php
    if ($sql_data_array['266617X8X2180SQ001_SQ001'] != "" && $sql_data_array['266617X8X2180SQ001_SQ001'] != 0) {
        $Electricityfromtheboard = $sql_data_array['266617X8X2180SQ001_SQ001'];
    }
    else
    {
      $Electricityfromtheboard = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ014_SQ001'] != "" && $sql_data_array['266617X8X2180SQ014_SQ001'] != 0) {
        $Electricityfromgenerator = $sql_data_array['266617X8X2180SQ014_SQ001'];
    }
    else
    {
      $Electricityfromgenerator = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ002_SQ001'] != "" && $sql_data_array['266617X8X2180SQ002_SQ001'] != 0) {
        $Petrol = $sql_data_array['266617X8X2180SQ002_SQ001'];
    }
    else
    {
      $Petrol = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ003_SQ001'] != "" && $sql_data_array['266617X8X2180SQ003_SQ001'] != 0) {
        $Diesel = $sql_data_array['266617X8X2180SQ003_SQ001'];
    }
    else
    {
       $Diesel = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ004_SQ001'] != "" && $sql_data_array['266617X8X2180SQ004_SQ001'] != 0) {
        $CNG = $sql_data_array['266617X8X2180SQ004_SQ001'];
    }
    else
    {
      $CNG = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ005_SQ001'] != "" && $sql_data_array['266617X8X2180SQ005_SQ001'] != 0) {
        $Kerosene = $sql_data_array['266617X8X2180SQ005_SQ001'];
    }
    else
    {
      $Kerosene = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ006_SQ001'] != "" && $sql_data_array['266617X8X2180SQ006_SQ001'] != 0) {
        $Coal = $sql_data_array['266617X8X2180SQ006_SQ001'];
    }
    else
    {
      $Coal = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ007_SQ001'] != "" && $sql_data_array['266617X8X2180SQ007_SQ001'] != 0) {
        $Wood = $sql_data_array['266617X8X2180SQ007_SQ001'];
    }
    else
    {
      $Wood = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ008_SQ001'] != "" && $sql_data_array['266617X8X2180SQ008_SQ001'] != 0) {
        $Animalwaste = $sql_data_array['266617X8X2180SQ008_SQ001'];
    }
    else
    {
      $Animalwaste = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ009_SQ001'] != "" && $sql_data_array['266617X8X2180SQ009_SQ001'] != 0) {
        $Solar = $sql_data_array['266617X8X2180SQ009_SQ001'];
    }
    else
    {
     $Solar = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ010_SQ001'] != "" && $sql_data_array['266617X8X2180SQ010_SQ001'] != 0) {
        $Wind = $sql_data_array['266617X8X2180SQ010_SQ001'];
    }
    else
    {
      $Wind = 0;   
    }
    if ($sql_data_array['266617X8X2180SQ011_SQ001'] != "" && $sql_data_array['266617X8X2180SQ011_SQ001'] != 0) {
        $LPG = $sql_data_array['266617X8X2180SQ011_SQ001'];
    }
    else
    {
       $LPG = 0;   
    }

    if ($sql_data_array['266617X8X2180SQ015_SQ001'] != "" && $sql_data_array['266617X8X2180SQ015_SQ001'] != 0) {
        $Othersspecify = $sql_data_array['266617X8X2180SQ015_SQ001'];
    }
    else
    {
      $Othersspecify = 0;   
    }
    ?>

                                <td><?php echo $Electricityfromtheboard ?></td>
                                <td><?php echo $Electricityfromgenerator; ?></td>
                                <td><?php echo $Petrol; ?></td>
                                <td><?php echo $Diesel; ?></td>
                                <td><?php echo $CNG; ?></td>
                                <td><?php echo $Kerosene; ?></td>
                                <td><?php echo $Coal; ?></td>
                                <td><?php echo $Wood; ?></td>
                                <td><?php echo $Animalwaste; ?></td>
                                <td><?php echo $Solar; ?></td>
                                <td><?php echo $Wind; ?></td>
                                <td><?php echo $LPG; ?></td>
                                <td><?php echo $Othersspecify; ?></td>


                                <td><?php echo $sql_data_array['266617X8X2180SQ001_SQ002']; ?></td>
                                <td><?php echo $sql_data_array['266617X8X2180SQ014_SQ002']; ?></td>
                                <td><?php echo $sql_data_array['266617X8X2180SQ002_SQ002']; ?></td>
                                <td><?php echo $sql_data_array['266617X8X2180SQ003_SQ002']; ?></td> 
                                <td><?php echo $sql_data_array['266617X8X2180SQ004_SQ002']; ?>  <!-- CNG (MJ) --></td>

                                <td><?php echo $sql_data_array['266617X8X2180SQ005_SQ002']; ?> <!--Kerosene (MJ)--></td>
                                <td><?php echo $sql_data_array['266617X8X2180SQ006_SQ002']; ?> <!--Coal (MJ)--></td>
                                <td><?php echo $sql_data_array['266617X8X2180SQ007_SQ002']; ?><!-- Wood (MJ)--></td>
                                <td><?php echo $sql_data_array['266617X8X2180SQ008_SQ002']; ?> <!--Animal Waste (MJ)--></td>
                                <td><?php echo $sql_data_array['266617X8X2180SQ009_SQ002']; ?><!-- Solar (MJ)--></td>


                                <td><?php echo $sql_data_array['266617X8X2180SQ010_SQ002']; ?><!-- Wind (MJ)--></td>
                                <td><?php echo $sql_data_array['266617X8X2180SQ011_SQ002']; ?> <!--LPG (MJ)--></td>
                                <td><?php echo $sql_data_array['266617X8X2180SQ015_SQ002']; ?> <!--PNG (MJ)--></td>
                                <td><?php if ($sql_data_array['266617X8X2668'] != "") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?></td>




                                <!--Q4. What appliances does your school have? -->
                              
                                <td><?php echo $sql_data_array['266617X8X2415SQ001_SQ001']; ?></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ001_SQ003']; ?></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ002_SQ001']; ?> <!-- No.of Refrigerator--></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ002_SQ003']; ?><!-- Refrigerator with BEE star rating --></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ003_SQ001']; ?><!-- No. of Microwave --></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ003_SQ003']; ?><!-- Microwave with BEE star rating--></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ004_SQ001']; ?><!-- No. of Tubelight --></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ004_SQ003']; ?><!-- Tubelight with BEE star rating--></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ005_SQ001']; ?></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ005_SQ003']; ?><!--  CFL bulbs with BEE star rating--></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ006_SQ001']; ?><!-- No. of LED --></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ006_SQ003']; ?><!-- LED with BEE star rating--></td>

                                <td><?php echo $sql_data_array['266617X8X2415SQ007_SQ001']; ?><!-- No. of Fans--></td>
                                <td><?php echo $sql_data_array['266617X8X2415SQ007_SQ003']; ?><!-- Fans with BEE star rating--></td>

                                <td><?php if ($sql_data_array['266617X8X2669'] != "") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?> <!-- Status if picture of 5 star rating applicances uploaded --></td>


                                <!--Q5.(Energy) What is the average number of sunny days in your area?  -->
                                <td><?php echo abs($sql_data_array['266617X8X260']); ?></td>

                                <td><?php if ($sql_data_array['266617X8X261'] == "Y") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?></td>



                                <td>
                                <?php
                                $alternate_source = array();
                                if ($sql_data_array['266617X8X262SQ001'] != "") {
                                    $alternate_source[] = "Solar";
                                }
                                if ($sql_data_array['266617X8X262SQ002'] != "") {
                                    $alternate_source[] = "Wind";
                                }
                                if ($sql_data_array['266617X8X262SQ003'] != "") {
                                    $alternate_source[] = "Hydro";
                                }
                                if ($sql_data_array['266617X8X262SQ004'] != "") {
                                    $alternate_source[] = "Combination of solar and wind";
                                }

                                echo implode($alternate_source, ',');
                                ?>

                                </td>



                                <td><!-- ENERGY PER DAY-->
    <?php
    $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003'];
    $a = $sql_data_array['266617X8X2180SQ013_SQ002'] / 30;
    echo number_format($a / $total_population_gq, 2);
    ?> 
                                </td>
                                <td><!-- ENERGY SOURCES-->
    <?php
    $a = array();
    if ($sql_data_array['266617X8X2180SQ001_SQ001'] != "" && $sql_data_array['266617X8X2180SQ001_SQ001'] != 0) {
        $a[] = "Electricity from the board";
    }

    if ($sql_data_array['266617X8X2180SQ014_SQ001'] != "" && $sql_data_array['266617X8X2180SQ014_SQ001'] != 0) {
        $a[] = "Electricity from generator";
    }

    if ($sql_data_array['266617X8X2180SQ002_SQ001'] != "" && $sql_data_array['266617X8X2180SQ002_SQ001'] != 0) {
        $a[] = "Petrol";
    }
    if ($sql_data_array['266617X8X2180SQ003_SQ001'] != "" && $sql_data_array['266617X8X2180SQ003_SQ001'] != 0) {
        $a[] = "Diesel";
    }if ($sql_data_array['266617X8X2180SQ004_SQ001'] != "" && $sql_data_array['266617X8X2180SQ004_SQ001'] != 0) {
        $a[] = "CNG";
    }if ($sql_data_array['266617X8X2180SQ005_SQ001'] != "" && $sql_data_array['266617X8X2180SQ005_SQ001'] != 0) {
        $a[] = "Kerosene";
    }if ($sql_data_array['266617X8X2180SQ006_SQ001'] != "" && $sql_data_array['266617X8X2180SQ006_SQ001'] != 0) {
        $a[] = "Coal";
    }if ($sql_data_array['266617X8X2180SQ007_SQ001'] != "" && $sql_data_array['266617X8X2180SQ007_SQ001'] != 0) {
        $a[] = "Wood";
    }if ($sql_data_array['266617X8X2180SQ008_SQ001'] != "" && $sql_data_array['266617X8X2180SQ008_SQ001'] != 0) {
        $a[] = "Animal waste";
    }if ($sql_data_array['266617X8X2180SQ009_SQ001'] != "" && $sql_data_array['266617X8X2180SQ009_SQ001'] != 0) {
        $a[] = "Solar";
    }if ($sql_data_array['266617X8X2180SQ010_SQ001'] != "" && $sql_data_array['266617X8X2180SQ010_SQ001'] != 0) {
        $a[] = "Wind";
    }if ($sql_data_array['266617X8X2180SQ011_SQ001'] != "" && $sql_data_array['266617X8X2180SQ011_SQ001'] != 0) {
        $a[] = "LPG";
    }
    if ($sql_data_array['266617X8X2180SQ015_SQ001'] != "" && $sql_data_array['266617X8X2180SQ015_SQ001'] != 0) {
        $a[] = "Piped Natural Gas";
    }
    //if($sql_data_array['266617X8X2180SQ012_SQ001'] != "" && $sql_data_array['266617X8X2180SQ012_SQ001'] != 0)
    //{
    //	$a[] = "Others (specify)";
    //}
    echo implode($a, ', ');
    ?>   
                                </td>


            <!-- <td>dddddddddd<?php echo number_format($sql_score_energy, 2); ?></td> -->

                                <!-- Food section Start  -->

                                <!--Q1.(Food) Does your school have a provision/space to sell packaged food items within the campus. -->
                                <td>
                                    <?php if ($sql_data_array['266617X36X1858'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    } ?>
                                </td>

                            
                                    <?php
                                   // if ($sql_data_array['266617X36X1858'] == "Y") {
                                        $c = array();
                                        if ($sql_data_array['266617X36X1871SQ001_SQ002'] != "" && $sql_data_array['266617X36X1871SQ001_SQ002'] != 0) {
                                            $c[0] = $sql_data_array['266617X36X1871SQ001_SQ002'];
                                        }
                                        if ($sql_data_array['266617X36X1871SQ002_SQ002'] != "" && $sql_data_array['266617X36X1871SQ002_SQ002'] != 0) {
                                            $c[1] = $sql_data_array['266617X36X1871SQ002_SQ002'];
                                        }
                                        if ($sql_data_array['266617X36X1871SQ003_SQ002'] != "" && $sql_data_array['266617X36X1871SQ003_SQ002'] != 0) {
                                            $c[2] = $sql_data_array['266617X36X1871SQ003_SQ002'];
                                        }if ($sql_data_array['266617X36X1871SQ004_SQ002'] != "" && $sql_data_array['266617X36X1871SQ004_SQ002'] != 0) {
                                            $c[3] = $sql_data_array['266617X36X1871SQ004_SQ002'];
                                        }if ($sql_data_array['266617X36X1871SQ005_SQ002'] != "" && $sql_data_array['266617X36X1871SQ005_SQ002'] != 0) {
                                            $c[4] = $sql_data_array['266617X36X1871SQ005_SQ002'];
                                        }if ($sql_data_array['266617X36X1871SQ006_SQ002'] != "" && $sql_data_array['266617X36X1871SQ006_SQ002'] != 0) {
                                            $c[5] = $sql_data_array['266617X36X1871SQ006_SQ002'];
                                        }if ($sql_data_array['266617X36X1871SQ007_SQ002'] != "" && $sql_data_array['266617X36X1871SQ007_SQ002'] != 0) {
                                            $c[6] = $sql_data_array['266617X36X1871SQ007_SQ002'];
                                        }if ($sql_data_array['266617X36X1871SQ008_SQ002'] != "" && $sql_data_array['266617X36X1871SQ008_SQ002'] != 0) {
                                            $c[7] = $sql_data_array['266617X36X1871SQ008_SQ002'];
                                        }if ($sql_data_array['266617X36X1871SQ009_SQ002'] != "" && $sql_data_array['266617X36X1871SQ009_SQ002'] != 0) {
                                            $c[8] = $sql_data_array['266617X36X1871SQ009_SQ002'];
                                        }
                                       // echo implode($c, ', ');
                                   // } else {
                                        //echo "No Canteen";
                                    //}
                                    ?>  
                                <td><?php echo $c[0]; ?></td>
                                <td><?php echo $c[1]; ?></td>
                                <td><?php echo $c[2]; ?></td>
                                <td><?php echo $c[3]; ?></td>
                                <td><?php echo $c[4]; ?></td>
                                <td><?php echo $c[5]; ?></td>
                                <td><?php echo $c[6]; ?></td>
                                <td><?php echo $c[7]; ?></td>
                                <td><?php echo $c[8]; ?></td>
                                

                                <td><?php if ($sql_data_array['266617X36X1859'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?></td>
                                <td><?php if ($sql_data_array['266617X36X1860'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?></td>


                                <td><?php if ($sql_data_array['266617X36X2666'] != "") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?></td>
                                <td><?php if ($sql_data_array['266617X36X2667'] != "") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?></td>
                                <td><?php echo $sql_data_array['266617X36X1861']; ?> <!-- Total no.of students bring home-made food --></td>
                                <td><?php echo $sql_data_array['266617X36X1862']; ?> <!-- Total no.of of students bring packaged food --></td>

                                <td><?php if ($sql_data_array['266617X36X1863'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?> <!-- Teachers responsibility to check lunch from  home--></td>

                                <td><?php echo $sql_data_array['266617X36X1871SQ001_SQ001']; ?><!--Q3.(Food) Savoury snacks --></td>
                                <td><?php echo $sql_data_array['266617X36X1871SQ002_SQ001']; ?><!--Q3.(Food) Instant Noodles --></td>
                                <td><?php echo $sql_data_array['266617X36X1871SQ003_SQ001']; ?> <!-- Q3.(Food) Potato fries --></td>
                                <td><?php echo $sql_data_array['266617X36X1871SQ004_SQ001']; ?><!--Q3.(Food) Confectionery --></td>
                                <td><?php echo $sql_data_array['266617X36X1871SQ005_SQ001']; ?><!--Q3.(Food) Ice Cream --></td>
                                <td><?php echo $sql_data_array['266617X36X1871SQ006_SQ001']; ?><!-- Q3.(Food) Carbonatde beverages --></td>
                                <td><?php echo $sql_data_array['266617X36X1871SQ007_SQ001']; ?><!--Q3.(Food) Sweetned non-carbonated beverage--></td>
                                <td><?php echo $sql_data_array['266617X36X1871SQ008_SQ001']; ?><!--Q3.(Food) Packaged bottled drings--></td>
                                <td><?php echo $sql_data_array['266617X36X1871SQ009_SQ001']; ?><!--Q3.(Food) Packaged bottled energy drinks--></td>
                                <td><?php if ($sql_data_array['266617X36X2667'] != "") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?><!--Q3.(Food) Uploaded picture of UPPF--></td>


                                <td>
                                    <?php
                                    if ($sql_data_array['266617X36X2238'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>

                                <td><?php echo $sql_data_array['266617X36X2239SQ001_SQ001']; ?><!-- Samosas --></td>
                                <td><?php echo $sql_data_array['266617X36X2239SQ002_SQ001']; ?><!--Idli --></td>
                                <td><?php echo $sql_data_array['266617X36X2239SQ003_SQ001']; ?><!--Pavbhaji --></td>
                                <td><?php echo $sql_data_array['266617X36X2239SQ004_SQ001']; ?><!-- Momos --></td>
                                <td><?php echo $sql_data_array['266617X36X2239SQ005_SQ001']; ?><!-- Others--></td>
                                <td><?php if ($sql_data_array['266617X36X2664'] != "") {
                                    echo "Yes";
                                } else {
                                    "No";
                                } ?></td>



                                <td> 
    <?php
    if ($sql_data_array['266617X36X2246'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>


                                <td><?php echo $sql_data_array['266617X36X2247SQ001_SQ001']; ?> <!-- Nimboo pani--></td>
                                <td><?php echo $sql_data_array['266617X36X2247SQ003_SQ001']; ?><!-- Lassi--></td>
                                <td><?php echo $sql_data_array['266617X36X2247SQ002_SQ001']; ?><!--Butter Milk--></td>
                                <td><?php echo $sql_data_array['266617X36X2247SQ004_SQ001']; ?><!--Aam Panna --></td>
                                <td><?php echo $sql_data_array['266617X36X2247SQ005_SQ001']; ?><!--Others --></td>



                                <td><!--Food Promotions (7)-->
                                    <?php
                                    if ($sql_data_array['266617X36X1864'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>
                                <td><?php echo $sql_data_array['266617X36X1865']; ?></td><!--Packaged food details-->
                                <td>
                                    <!--(food) Q.7. Does the school distribute chocolates/similar products as refreshments during schools events? -->
    <?php
    if ($sql_data_array['266617X36X1866'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>
                                <td><?php echo $sql_data_array['266617X36X1867']; ?></td>
                                <!--details-->

                                <td><!-- (food) Q.8.  Are your school events such as quiz shows, talent shows, debates sponsored by food companies/brands?-->
    <?php
    if ($sql_data_array['266617X36X1868'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>
                                <td><?php echo $sql_data_array['266617X36X1869']; ?></td><!--Details-->
                                <td><!--Events sponsored by Food companies-->
                                    <?php
                                    if ($sql_data_array['266617X36X1870'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>
                                <!-- <td><?php //echo number_format($sql_score_food, 2); ?></td> -->
                                <!--Food Points-->

                                <td><?php if ($sql_data_array[''] != "") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?><!--Uploaded pictures --></td>

                                <!--	End Food section -->


                                <td><!--Start Section LAND green area-->
                                    <?php
                                    $green_area = $sql_data_array['266617X7X1810SQ002_SQ002'] + $sql_data_array['266617X7X1810SQ012_SQ002'] + $sql_data_array['266617X7X1810SQ006_SQ002'];
                                    //echo number_format($green_area,2);
                                    echo $green_area;
                                    ?>
                                </td>


                                <td><!--LAND percentage of green area-->
                                    <?php
                                    $green_area = $sql_data_array['266617X7X1810SQ002_SQ002'] + $sql_data_array['266617X7X1810SQ012_SQ002'] + $sql_data_array['266617X7X1810SQ006_SQ002'];
                                    $total_area = $sql_data_array['266617X7X1810SQ010_SQ002'];  //Site area in square meter (m2)
                                    echo $perc_green_area = number_format(($green_area * 100) / $total_area, 2);
                                    //echo " sss %";
                                    ?> 

                                </td>

                                <td><?php echo $sql_data_array['266617X7X1810SQ010_SQ002']; ?><!-- Total Site area --></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ001_SQ002']; ?><!--Ground Coverage area--></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ002_SQ002']; ?><!--Green Landscaped area on-ground--></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ004_SQ002']; ?><!--Surface parking area--></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ005_SQ002']; ?><!--Play area paved/concrete on-ground--></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ006_SQ002']; ?><!--Play area has grass on ground--></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ007_SQ002']; ?><!--Service area on ground--></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ011_SQ002']; ?><!--Roof and terrace area--></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ012_SQ002']; ?><!--Green cover on exposed roof & Terrace--></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ013_SQ002']; ?><!--Total built-up/constructed area--></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ014_SQ002']; ?><!--No of Floors--></td>
                                <td><?php echo $sql_data_array['266617X7X1810SQ008_SQ002']; ?><!--Others--></td>
                                <td><?php echo $sql_data_array['266617X7X189SQ001_SQ002']; ?><!--Native Plants--></td>
                                <td><?php echo $sql_data_array['266617X7X189SQ001_SQ003']; ?><!--Exotic Plants--></td>
                                <td><?php echo $sql_data_array['266617X7X189SQ003_SQ002']; ?><!--Native Animals --></td>
                                <td><?php echo $sql_data_array['266617X7X189SQ003_SQ003']; ?><!--Exotic Animals--></td>



                                <td><!--LAND Pestiside Use-->
    <?php
    if ($sql_data_array['266617X7X196'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>



                                <td><?php echo number_format($sql_score_land, 2); ?></td>
                                <!-- End Land Section Questions -->


                                <!-- Start Water Section Questions -->

                               
      <!--Q1.  Calculate your school�s water consumption, per activity -->
    <?php
    if ($sql_data_array['266617X37X1883SQ001_SQ001'] != "") {
        $Drinking = $sql_data_array['266617X37X1883SQ001_SQ001'];
    }
    if ($sql_data_array['266617X37X1883SQ002_SQ001'] != "") {
        $Toilet_flushing = $sql_data_array['266617X37X1883SQ002_SQ001'];
    }

    if ($sql_data_array['266617X37X1883SQ003_SQ001'] != "") {
        $Personal_cleaning = $sql_data_array['266617X37X1883SQ003_SQ001'];
    }

    if ($sql_data_array['266617X37X1883SQ004_SQ001'] != "") {
        $Washing_clothes = $sql_data_array['266617X37X1883SQ004_SQ001'];
    }

    if ($sql_data_array['266617X37X1883SQ005_SQ001'] != "") {
        $Cooking = $sql_data_array['266617X37X1883SQ005_SQ001'];
    }
    if ($sql_data_array['266617X37X1883SQ006_SQ001'] != "") {
        $Cleaning_Utensils = $sql_data_array['266617X37X1883SQ006_SQ001'];
    }

    if ($sql_data_array['266617X37X1883SQ007_SQ001'] != "") {
        $Washing_Vegetables = $sql_data_array['266617X37X1883SQ007_SQ001'];
    }

    if ($sql_data_array['266617X37X1883SQ008_SQ001'] != "") {
        $Mopping_floors = $sql_data_array['266617X37X1883SQ008_SQ001'];
    }

    if ($sql_data_array['266617X37X1883SQ009_SQ001'] != "") {
        $Gardening = $sql_data_array['266617X37X1883SQ009_SQ001'];
    }
    ?>                      
                                    
                                    <td><?php echo $Drinking; ?></td>
                                    <td><?php echo $Toilet_flushing; ?></td>
                                    <td><?php echo $Personal_cleaning; ?></td>
                                    <td><?php echo $Washing_clothes; ?></td>
                                    <td><?php echo $Cooking; ?></td>
                                    <td><?php echo $Cleaning_Utensils; ?></td>
                                    <td><?php echo $Washing_Vegetables; ?></td>
                                    <td><?php echo $Mopping_floors; ?></td>
                                    <td><?php echo $Gardening; ?></td>
                                <!--Water Total Consumption-->

                                <td>
                                    <!--Water Per capita/day-->
    <?php
    $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003'];
    $total_water_consumption = $Drinking + $Toilet_flushing + $Personal_cleaning + $Washing_clothes + $Cooking + $Cleaning_Utensils + $Washing_Vegetables +$Mopping_floors + $Gardening;
    //(liters per capita per day)
    echo $per = number_format($total_water_consumption / $total_population_gq, 4);
    ?>
                                </td>


                                    <?php
                                    if ($sql_data_array['266617X37X1884SQ001'] == "Y") {
                                        $Groundwater = "Yes";
                                    }
                                    else
                                    {
                                      $Groundwater = "No";  
                                    }

                                    if ($sql_data_array['266617X37X1884SQ002'] == "Y") {
                                        $Surfacewater = "Yes";
                                    }
                                     else
                                    {
                                      $Surfacewater = "No";  
                                    }

                                    if ($sql_data_array['266617X37X1884SQ003'] == "Y") {
                                        $Rain_water = "Yes";
                                    }
                                     else
                                    {
                                      $Rain_water = "No";  
                                    }

                                    if ($sql_data_array['266617X37X1884SQ004'] == "Y") {
                                        $Recycled_waste_water = "Yes";
                                    }
                                     else
                                    {
                                      $Recycled_waste_water = "No";  
                                    }
                                    ?>
                              
                                <td><?php echo $Groundwater; ?></td>
                                <td><?php echo $Surfacewater; ?></td>
                                <td><?php echo $Rain_water; ?></td>
                                <td><?php echo $Recycled_waste_water; ?></td>
                          

                                    <?php
                                    //Q3. Who supplies the water in your school? 
                                    if ($sql_data_array['266617X37X2303SQ001'] == "Y") {
                                        $MunicipalityGroundwater = "Yes";
                                    }
                                      else
                                    {
                                      $MunicipalityGroundwater = "No";  
                                    }

                                    if ($sql_data_array['266617X37X2303SQ002'] == "Y") {
                                        $PanchayatGroundwater = "Yes";
                                    }
                                      else
                                    {
                                      $PanchayatGroundwater = "No";  
                                    }

                                    if ($sql_data_array['266617X37X2303SQ003'] == "Y") {
                                        $PublicsupplierGroundwater = "Yes";
                                    }
                                      else
                                    {
                                      $PublicsupplierGroundwater = "No";  
                                    }

                                    if ($sql_data_array['266617X37X2303SQ004'] == "Y") {
                                        $PrivatesupplierGroundwater = "Yes";
                                    }
                                      else
                                    {
                                      $PrivatesupplierGroundwater = "No";  
                                    }

                                    if ($sql_data_array['266617X37X2303SQ005'] == "Y") {
                                        $ownsupply_Groundwater = "Yes";
                                    }
                                      else
                                    {
                                      $ownsupply_Groundwater = "No";  
                                    }
                                    ?>
                               
                                    <td><?php echo $MunicipalityGroundwater; ?></td>
                                    <td><?php echo $PanchayatGroundwater; ?></td>
                                    <td><?php echo $PublicsupplierGroundwater; ?></td>
                                    <td><?php echo $PrivatesupplierGroundwater; ?></td>
                                    <td><?php echo $ownsupply_Groundwater; ?></td>



                                <!-- Q4. Does your school get daily water supply? -->
                                <td><?php if ($sql_data_array['266617X37X1885'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?></td>  

                                <!-- 4(b) If supply of water is not daily, please tick the correct option -->
                                <td><?php
                                $school_type = array('A1' => "=1 day", 'A2' => "2 days in a week", 'A3' => "3 days in a week", 'A4' => "Every alternate day in a week");

                                $type = $sql_data_array['266617X37X1887'];
                                echo $school_type[$type];
                                ?>
                                </td>

                                <!-- Q5. What are the water conservation practices your school follows -->

                                <td><?php if ($sql_data_array['266617X37X2320SQ001'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- Water sanitation policy--></td>
                                <td><?php if ($sql_data_array['266617X37X2320SQ002'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- Eco-club--></td>
                                <td><?php if ($sql_data_array['266617X37X2320SQ003'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- Tanks have float valves--></td>
                                <td><?php if ($sql_data_array['266617X37X2320SQ004'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- Driking water points have spill proof taps--></td>
                                <td><?php if ($sql_data_array['266617X37X2320SQ005'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- Appliances with quick wash settings--></td>
                                <td><?php if ($sql_data_array['266617X37X2320SQ006'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- Dual flush --></td>
                                <td><?php if ($sql_data_array['266617X37X2320SQ007'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- Encourage water bottle for drinking water--></td>
                                <td><?php if ($sql_data_array['266617X37X2320SQ008'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- School grows plant that require limited water--></td>
                                <td><?php if ($sql_data_array['266617X37X2320SQ009'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- Water conservation step in last one year--></td>
                                <td><?php if ($sql_data_array['266617X37X2320SQ010'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- Drip irrigation--></td>
                                <td><?php if ($sql_data_array['266617X37X2320SQ011'] == "A1") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?><!-- Any other step for water conservation--></td>


                                <!--Q6. Do you have Rainwater harvesting (RWH) system in your school? -->

                                <td><?php
                                if ($sql_data_array['266617X37X1900'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                                ?></td>

                                <!-- 6(a) Does your school harvest different catchments? -->	
                                <td>
    <?php if ($sql_data_array['266617X37X2353'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    } ?>
                                </td>


                                <!--6(a)(1)  Which is the catchment area being harvested by your school? -->
                                <td>
                                    <?php
                                    $harvest_catchment = array('A1' => "Rooftop", 'A2' => "Paved", 'A3' => "Unpaved", 'A4' => "Rooftop + Paved", 'A5' => "Paved + Unpaved", 'A6' => "Rooftop + Unpaved", 'A7' => "Rooftop + Paved + Unpaved");
                                    $type = $sql_data_array['266617X37X2354'];
                                    echo $harvest_catchment[$type];
                                    ?>
                                </td>


                                <!--6(b) How does your school harvest rainwater? -->
                                <td>
                                    <?php
                                    $harvest_type = array('A1' => "By storing", 'A2' => "By recharging groundwater", 'A3' => "Combination of both");
                                    $type = $sql_data_array['266617X37X2355'];
                                    echo $harvest_type[$type];
                                    ?>
                                </td>

                                <!-- 6(b)(1) If your school only stores rainwater, please select the use of stored rainwater -->	
                                    <?php
                                    if ($sql_data_array['266617X37X23561'] == "Y") 
                                        $Drinking = "Yes";
                                   else
                                       $Drinking = "No";

                                    if ($sql_data_array['266617X37X23562'] == "Y") 
                                        $Gardening = "Yes";
                                    else
                                       $Gardening = "No";

                                    if ($sql_data_array['266617X37X23563'] == "Y")
                                        $Mopping = "Yes";
                                     else
                                       $Mopping = "No";

                                    if ($sql_data_array['266617X37X23564'] == "Y")
                                        $Toilets = "Yes";
                                     else
                                       $Toilets = "No";
                                    if ($sql_data_array['266617X37X23565'] == "Y") 
                                        $Washingvehicles = "Yes";
                                      else
                                       $Washingvehicles = "No";

                                    if ($sql_data_array['266617X37X23566'] == "Y") 
                                        $Kitchen = "Yes";
                                     else
                                       $Kitchen = "No";

                                    if ($sql_data_array['266617X37X23567'] == "Y") 
                                        $Shower = "Yes";
                                     else
                                       $Shower = "No";

                                    if ($sql_data_array['266617X37X23567'] == "Y") 
                                        $SwimmingPool = "Yes";
                                     else
                                       $SwimmingPool = "No";
                                   
                                    ?>	
                                
                                <td><?php echo $Drinking; ?></td>
                                <td><?php echo $Gardening; ?></td>
                                <td><?php echo $Mopping; ?></td>
                                <td><?php echo $Toilets; ?></td>
                                <td><?php echo $Washingvehicles; ?></td>
                                <td><?php echo $Kitchen; ?></td>
                                <td><?php echo $Shower; ?></td>
                                <td><?php echo $SwimmingPool; ?></td>

                                <!-- 6(b)(2) Does your school have rainwater storage tank? -->

                                <td>
                                <?php
                                if ($sql_data_array['266617X37X2366'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                                ?>
                                </td>


                                <td><?php echo $sql_data_array['266617X37X2368']; ?></td>
                                <td><?php echo $sql_data_array['266617X37X2369']; //$urinals = $sql_data_array['266617X37X1895']; $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; echo number_format($urinalload = $total_population/$urinals,2); ?></td><!--Load of  drinking Water taps-->
                                <!-- Location of tanks: -->
                                <td><?php
                            $location_tank = array(1 => "Underground", 2 => "Over ground", 3 => "Semi underground", 4 => "Underground + Over-ground", 5 => "Over- ground + Semi underground", 6 => "Underground + Over-ground + Semi underground");

                            $type = $sql_data_array['266617X37X2370'];
                            echo $location_tank[$type];
                            //$wc = $sql_data_array['266617X37X1896SQ005_SQ004']; $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; echo number_format($wcload = $total_population/$wc,2); 
                                ?></td><!--Load of  abulution taps-->






                                <td>
                                    <!--  Material options for tanks: -->
    <?php
    $material = array(1 => "PVC", 2 => "RCC", 3 => "Brick", 4 => "Combination of PVC + RCC + Brick");

    $type = $sql_data_array['266617X37X2371'];
    echo $material[$type];
    ?>

                                </td>

                                <!--  Q6(b)(1) Does your school have groundwater recharge structure? -->
                                <td><?php if ($sql_data_array['266617X37X2372'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?></td>

                                <!--  Q6(b)(1)(i) Please share the total number of groundwater recharge structures -->
                                <td><?php echo $sql_data_array['266617X37X2642']; ?><!--Total number of recharge structure --></td>
                                <td><?php echo ""; ?><!--If combination of storage and recharge, then what is the ratio between storage and recharge? --></td>

                                <td> <?php
                                    $typeofgroundwater = array(1 => "Percolation pit/tank", 2 => "Recharge through abandoned dug well", 3 => "Recharge through abandoned tube well/bore well", 4 => "Recharge pits", 5 => "Recharge trenches", 6 => "Recharge through ponds/water bodies", 7 => "Soak pit");

                                    $type = $sql_data_array['266617X37X2643'];
                                    echo $typeofgroundwater[$type];
                                    ?><!-- Type of groundwater recharge --></td>

                                <!--Q(6c) How much area in your school is harvested -->
                                <td>
    <?php
    $harvested = array(1 => "10 to 20 per cent", 2 => "21 to 30 per cent", 3 => "31 to 40 per cent", 4 => "41 to 50 per cent", 5 => "51 to 60 per cent", 6 => "61 to 70 per cent", 7 => "71 to 80 per cent", 8 => "81 to 90 per cent", 9 => "91 to 100 per cent");
    $type = $sql_data_array['266617X37X2376'];
    echo $harvested[$type];
    ?>
                                </td>

                                <!--Q(6.d.) Please select (from the list given below) the rainwater harvesting structures present in your school -->
                                    <?php
                                    if ($sql_data_array['266617X37X23771'] == "Y") 
                                        $Conduits = "Yes";
                                    else
                                        $Conduits = "No";

                                    if ($sql_data_array['266617X37X23772'] == "Y")
                                        $Gutters = "Yes";
                                      else
                                        $Gutters = "No";

                                    if ($sql_data_array['266617X37X23773'] == "Y")
                                        $Filter_unit = "Yes";
                                    else
                                        $Filter_unit = "No";

                                    if ($sql_data_array['266617X37X23774'] == "Y")
                                        $Firstflush = "Yes";
                                      else
                                        $Firstflush = "No";
                                    if ($sql_data_array['266617X37X23775'] == "Y")
                                        $Storagetank = "Yes";
                                   else
                                        $Storagetank = "No";
                                    if ($sql_data_array['266617X37X23776'] == "Y")
                                        $Collectionsump = "Yes";
                                      else
                                        $Collectionsump = "No";

                                    if ($sql_data_array['266617X37X23777'] == "Y")
                                        $Pumpunit = "Yes";
                                   else
                                        $Pumpunit = "No";
                                    if ($sql_data_array['266617X37X23778'] == "Y")
                                        $Rechargestructure = "Yes";
                                     else
                                        $Rechargestructure = "No";
                                    ?>

<!--                                <td><?php echo $Conduits . " " . $Gutters . " " . $Filter_unit . " " . $Firstflush . " " . $Storagetank . " " . $Collectionsump . " " . $Pumpunit . " " . $Rechargestructure; ?></td>-->
                                
                                <td><?php echo $Conduits; ?></td>
                                <td><?php echo $Gutters; ?></td>
                                <td><?php echo $Filter_unit; ?></td>
                                <td><?php echo $Firstflush; ?></td>
                                <td><?php echo $Storagetank; ?></td>
                                <td><?php echo $Collectionsump; ?></td>
                                <td><?php echo $Pumpunit; ?></td>
                                <td><?php echo $Rechargestructure; ?></td>


                                <td><!-- 6(e) Rate your catchment on cleanliness-->
                                <?php
                                $catchment = array(1 => "Good", 2 => "Average", 3 => "Poor");
                                $type = $sql_data_array['266617X37X2396'];
                                echo $catchment[$type];
                                ?>
                                </td>

                                <td><!--Q.6(f) Does your school clean your catchment and system (structure?)-->
                                <?php
                                if ($sql_data_array['266617X37X2398'] == "Yes") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                                ?>
                                </td>
                                <td><!--Q.6(f)(1) Please specify when does your school clean the catchment and RWH system?-->
    <?php
    $rwh_catchement = array(1 => "Pre-monsoon", 2 => "Post-monsoon", 3 => "Do not follow any such pattern");
    $type = $sql_data_array['266617X37X2399'];
    echo $rwh_catchement[$type];
    ?>
                                </td>

                                <td><!--Q.6(g) Does your school monitor the rainwater harvesting structure for its efficiency?-->
                                    <?php
                                    if ($sql_data_array['266617X37X2400'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>


                                <td><!--Q.6(g)(1) Please specify when does your school monitor the groundwater level?-->
                                    <?php
                                    $groundwater_level = array(1 => "Pre-monsoon", 2 => "Post-monsoon", 3 => "Do not follow any such pattern");
                                    $type = $sql_data_array['266617X37X2401'];
                                    echo $groundwater_level[$type];
                                    ?>
                                </td>




                                <td>
                                    <!-- 6(h) What is the trend of groundwater level in your school across the year. -->
                                    <?php
                                    $ground_water = array(1 => "If there was a decrease, please specify", 2 => "If there was an increase, please specify", 3 => "No change");
                                    $type = $sql_data_array['266617X37X2402'];
                                    echo $ground_water[$type];
                                    ?>
                                </td>

                                <td>
                                    <!-- 6(h)(1) Please specify how much was the increase? -->

    <?php
    $increase = array(1 => "Less than a metre annually", 2 => "1-5 metre annually", 3 => "More than 5 metres annually");
    $type = $sql_data_array['266617X37X2403'];
    echo $increase[$type];
    ?>

                                </td>
                                <td>
                                    <!--6(i) If your school's RWH structure is more than a year old, is there any improvement in the groundwater quality after the implementation of the RWH structure? -->
    <?php
    if ($sql_data_array['266617X37X2405'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>

                                <!-- 7 Please share details about sanitation and hygiene practices in your school: -->


                                <td><?php if ($sql_data_array['266617X37X2337SQ001'] == "A1") {
        echo "Yes";
    } else {
        echo "No";
    } ?><!--Separate toilets for males and females--></td>
                                <td><?php if ($sql_data_array['266617X37X2337SQ002'] == "A1") {
        echo "Yes";
    } else {
        echo "No";
    } ?> <!-- Sufficient toilets for women --></td>

                                <td><?php if ($sql_data_array['266617X37X2337SQ003'] == "A1") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?> <!-- Sufficient toilets for men --></td>
                                <td><?php if ($sql_data_array['266617X37X2337SQ004'] == "A1") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?><!-- Toilets accessible and safe for children use --></td>
                                <td><?php if ($sql_data_array['266617X37X2337SQ005'] == "A1") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?> <!-- Toilets accessible and safe for differently abled children use --></td>
                                <td><?php if ($sql_data_array['266617X37X2337SQ006'] == "A1") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?><!-- Toilets accessible and safe for differently abled staff (teaching and non-teaching) use --></td>
                                <td><?php if ($sql_data_array['266617X37X2337SQ007'] == "A1") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?><!-- Toilets situated in private and safe area --></td>
                                <td><?php if ($sql_data_array['266617X37X2337SQ008'] == "A1") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?><!-- Sufficient light during day --></td>

                                <td>
                                    <!-- Q.8 How many drinking water taps do you have? -->
                                    <?php echo $sql_data_array['266617X37X1893']; ?>
                                </td>

                                <td>
                                    <!-- Water Q.9 How many hand pumps do you have? -->
                                    <?php echo $sql_data_array['266617X37X2346']; ?>
                                </td>

                                <td>
                                    <!-- Q.10  How many ablution taps (taps used for washing hands only) do you have? -->
                                    <?php echo $sql_data_array['266617X37X1894']; ?>
                                </td>

                                <td>
                                    <!-- Q.11  How many water closets (used for defecation and urination) do you have? -->
                                    <?php
                                    if ($sql_data_array['266617X37X1896SQ005_SQ001'] != "") {
                                        $girl = "Girls:" . $sql_data_array['266617X37X1896SQ005_SQ001'];
                                    }
                                    if ($sql_data_array['266617X37X1896SQ005_SQ003'] != "") {
                                        $boys = "	Boys:" . $sql_data_array['266617X37X1896SQ005_SQ003'];
                                    }
                                    if ($sql_data_array['266617X37X1896SQ005_SQ002'] != "") {
                                        $common = " Common:" . $sql_data_array['266617X37X1896SQ005_SQ002'];
                                    }

                                    echo $girl . " " . $boys . " " . $common;
                                    ?>
                                </td>


                                <td>
                                    <!-- Q12.How many urinals (strictly used for urination only) do you have? -->
                                    <?php
                                    echo $sql_data_array['266617X37X1895'];
                                    ?>
                                </td>
                                <td>
                                    <!-- Q13.How many other water outlets (example: taps in play fields, sprinklers, swimming pool) do you have -->
                                    <?php
                                    echo (int) $sql_data_array['266617X37X2347'];
                                    ?>
                                </td>
                                <td>
                                    <!-- Q14.Is there a water storage system in place to supply water in the toilets? -->
                                    <?php
                                    if ($sql_data_array['266617X37X2349'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <!-- Q15.Is the water supply sufficient? -->

                                    <?php
                                    if ($sql_data_array['266617X37X2350'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>

                                </td>
                                <td>
                                    <!-- Q16.Are the toilets cleaned? -->
                                    <?php
                                    if ($sql_data_array['266617X37X2351'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <!-- 16(a) If yes, please specify -->
                                    <?php
                                    $q16a = array('A1' => "Once a day", 'A2' => "Twice a day", 'A3' => "More than twice a day");
                                    $type = $sql_data_array['266617X37X2352'];
                                    echo $q16a[$type];
                                    ?>
                                </td>
                                <td>
                                    <!-- Q17.Does your school treat wastewater? -->
                                    <?php
                                    if ($sql_data_array['266617X37X2332'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <!-- Q18.Does your school reuse the treated wastewater? -->
    <?php
    if ($sql_data_array['266617X37X2654'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>
                                
                                    <!-- Q18(a). How does your school reuse wastewater? -->
    <?php
    $reuse = array();
    if ($sql_data_array['266617X37X26551'] == "Y")
    $Gardening = "Yes";
    else
    $Gardening = "No";
       
    if ($sql_data_array['266617X37X26552'] == "Y")
    $Flushing = "Yes";
     else
    $Flushing = "No";
    
    
    if ($sql_data_array['266617X37X26553'] == "Y")
    $Recharge = "Yes";
    else
    $Recharge = "No";
    
       //echo implode($reuse, ',');
    ?>
                                    <td><?php echo  $Gardening; ?></td>
                                    <td><?php echo  $Flushing; ?></td>
                                    <td><?php echo  $Recharge; ?></td>
                              
                                <td> <!-- 18(a) Please specify the fate of wastewater  -->
                                    <?php
                                    $wastewater = array(1 => "Wastewater flows directly to the drains", 2 => "Used for groundwater recharge", 3 => "Used for gardening and horticulture");
                                    $type = $sql_data_array['266617X37X2660'];
                                    echo $wastewater[$type];
                                    ?>
                                </td>


                                <!-- Waste Section start -->

                                <td><!--Waste Solid Segregation-->
    <?php
    if ($sql_data_array['266617X38X2032'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>

<!--                                <td>Q1(a) Who segregates the waste at source? -->
                                    <?php
                                    $e = array();
                                    if ($sql_data_array['266617X38X2033SQ001'] == "Y")
                                        $Studentsandteachers = "Yes";
                                    else 
                                        $Studentsandteachers = "No";
                                    if ($sql_data_array['266617X38X2033SQ002'] == "Y")
                                        $Housekeeping = "Yes";
                                    else 
                                        $Housekeeping = "No";
                                    if ($sql_data_array['266617X38X2033SQ003'] == "Y")
                                        $Gardener = "Yes";
                                    else 
                                        $Gardener = "No";
                                    if ($sql_data_array['266617X38X2033SQ004'] == "Y")
                                        $Ragpickers = "Yes";
                                     else 
                                        $Ragpickers = "No";
                                    if ($sql_data_array['266617X38X2033other'] != "")                                    
                                        $other = $sql_data_array['266617X38X2033other'];
                                     else 
                                        $other = "No";
                                    //echo implode($e, ', ');
                                    ?>
<!--                                </td>-->
                                    <td><?php echo $Studentsandteachers;  ?></td>
                                    <td><?php echo $Housekeeping;  ?></td>
                                    <td><?php echo $Gardener;  ?></td>
                                    <td><?php echo $Ragpickers;  ?></td>
                                    <td><?php echo $other;  ?></td>
                                    



                                <td><?php echo $sql_data_array['266617X38X2143SQ011_SQ001']; ?></td>
                                <td><?php echo $sql_data_array['266617X38X2143SQ011_SQ002']; ?></td>
                                <td><?php echo $sql_data_array['266617X38X2143SQ011_SQ003']; ?></td><!--Rooms with no bins-->
                                <td><?php echo $sql_data_array['266617X38X2143SQ011_SQ005']; ?></td><!--Rooms with one bins-->

                                <td><!--Waste: Per cap/day(grams)-->
                                    <?php
                                  $total_population_gq = $sql_data_array['266617X32X33SQ004_SQ003']; 
                                  $total_waste_generated = $sql_data_array['266617X38X2125SQ009_SQ001'] * 1000 ;
                                  $perday = $total_waste_generated / 30;                              
                                  $percapita_person = $perday / $total_population_gq;
                                  //echo $percapita = number_format($percapita_person, 2, '.', '');
                                  echo number_format((float)$percapita_person, 2, '.', '');  
                                    ?>

                                </td><!--Rooms with two bins-->

                                <td><?php echo $sql_data_array['266617X38X2125SQ001_SQ001']; ?> <!-- Type of waste: Garden/Horticultural waste --></td>
                                <td><?php echo $sql_data_array['266617X38X2125SQ002_SQ001']; ?><!-- Kitchen waste --></td>
                                <td><?php echo $sql_data_array['266617X38X2125SQ003_SQ001']; ?><!-- Paper --></td>
                                <td><?php echo $sql_data_array['266617X38X2125SQ004_SQ001']; ?><!-- Plastic --></td>
                                <td><?php echo $sql_data_array['266617X38X2125SQ005_SQ001']; ?><!-- Wood, glass, metal, classroom furniture --></td>
                                <td><?php echo $sql_data_array['266617X38X2125SQ006_SQ001']; ?><!-- E-waste --></td>
                                <td><?php echo $sql_data_array['266617X38X2125SQ007_SQ001']; ?><!-- Biomedical waste --></td>
                                <td><?php echo $sql_data_array['266617X38X2125SQ008_SQ001']; ?><!-- Sanitary waste --></td>
                                <td><?php echo $sql_data_array['266617X38X2125SQ010_SQ001']; ?><!-- Construction and Demolition (C & D) waste --></td>
                                <td><?php echo $sql_data_array['266617X38X2125SQ011_SQ001']; ?><!-- Hazardous waste --></td>




                                <td><!--Waste Recycle-->
    <?php
    if ($sql_data_array['266617X38X2041'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td> 
                                <!--Total Waste Generated(grams)-->
                                <?php
                                $generated_waste = $sql_data_array['266617X38X2125SQ009_SQ001'] * 1000; // In Grams
                                ?>                                
                                <td><?php echo number_format($generated_waste,2, '.', '') ; ?></td>
                                <td><?php
                                // Total Waste Recycled(grams)
                                $recycled_waste = $sql_data_array['266617X38X2042SQ010_SQ001'] * 1000;
                                 echo number_format((float) $recycled_waste, 2, '.', '');
                                ?>
                                </td>  
                                <td><?php
                                //Percentage of Waste Recycled(%)
                                    $per_wr =(($recycled_waste/$generated_waste)*100);
                                      echo number_format((float)$per_wr, 2, '.', '');  // Outputs -> 105.00
                                      //echo "%";
                                    //$total_waste = $sql_data_array['266617X38X2125SQ009_SQ001'];                                    
                                    //$total_population = $sql_data_array['266617X32X33SQ004_SQ003'];
                                    //$per_day_waste_generation = $total_waste / 30;
                                    //$per_capita_waste_generation = $per_day_waste_generation / $total_population;
                                    //echo number_format($per_capita_waste_generation, 2);
                                    ?>

                                </td>
                                <td><!--Waste Composting Facility-->
    <?php
    if ($sql_data_array['266617X38X2064'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>
                                <td><!--Waste Composting Methodology-->
                                    <?php
                                    $f = array();
                                    if ($sql_data_array['266617X38X2065SQ001'] != "") {
                                        $f[] = "Natural composting without added microbes";
                                    }
                                    if ($sql_data_array['266617X38X2065SQ002'] != "") {
                                        $f[] = "Mechanical composting (with electricity/ machines)";
                                    }
                                    if ($sql_data_array['266617X38X2065othercbox'] != "") {
                                        $f[] = "Other: ";
                                        $f[] = $sql_data_array['266617X38X2065othercbox'];
                                    }
                                    echo implode($f, ',');
                                    ?>
                                </td>
                                <td><?php echo number_format($sql_data_array['266617X38X2068'], $decimals = 0, $dec_point = ".", $thousands_sep = ""); ?></td>

                                <td>
    <?php
    $purpose = array();
    if ($sql_data_array['266617X38X2069SQ001'] != "") {
        $purpose[] = "For horticultural purposes";
    }
    if ($sql_data_array['266617X38X2069SQ002'] != "") {
        $purpose[] = "For school garden";
    }
    if ($sql_data_array['266617X38X2069SQ003'] != "") {
        $purpose[] = "For sale";
    }
    if ($sql_data_array['266617X38X2069SQ004'] != "") {
        $purpose[] = "For charity";
    }
    echo implode($purpose, ',');
    ?>
                                    <!-- purpose of the compost that is generated per month? -->
                                </td>

                                <td><!--Waste Reuse Textbook-->
    <?php
    if ($sql_data_array['266617X38X2074'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>



                               <?php
                                    //question No.7 Waste section.
                                    //Paper
                                                                      
                                    if ($sql_data_array['266617X38X2171SQ001_SQ001'] == 1) 
                                        $paper_kabadi = "Yes";
                                    else
                                        $paper_kabadi = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ001_SQ002'] == 1) 
                                         $paper_authorised = "Yes";
                                    else
                                        $paper_authorised = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ001_SQ003'] == 1) 
                                         $paper_dumped = "Yes";
                                    else
                                        $paper_dumped = "No";
                                    
                                    if ($sql_data_array['266617X38X2171SQ001_SQ004'] == 1) 
                                         $paper_internal = "Yes";
                                    else
                                        $paper_internal = "No";                                   
                                    ?>
                                
                                <td><?php echo $paper_kabadi; ?></td>
                                <td><?php echo $paper_authorised; ?></td>
                                <td><?php echo $paper_dumped; ?></td>
                                <td><?php echo $paper_internal; ?></td>
                                
                                <?php
                                //question No.7 Waste section.
                                    //Plastic
                                                                      
                                    if ($sql_data_array['266617X38X2171SQ002_SQ001'] == 1) 
                                        $plastic_kabadi = "Yes";
                                    else
                                        $plastic_kabadi = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ002_SQ002'] == 1) 
                                         $plastic_authorised = "Yes";
                                    else
                                        $plastic_authorised = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ002_SQ003'] == 1) 
                                         $plastic_dumped = "Yes";
                                    else
                                        $plastic_dumped = "No";
                                    
                                    if ($sql_data_array['266617X38X2171SQ002_SQ004'] == 1) 
                                         $plastic_internal = "Yes";
                                    else
                                        $plastic_internal = "No";                                   
                                    ?>
                                
                                <td><?php echo $plastic_kabadi; ?></td>
                                <td><?php echo $plastic_authorised; ?></td>
                                <td><?php echo $plastic_dumped; ?></td>
                                <td><?php echo $plastic_internal; ?></td>
                                
                                
                                 <?php
                                //question No.7 Waste section.
                                    //Horticultural waste
                                                                      
                                    if ($sql_data_array['266617X38X2171SQ003_SQ001'] == 1) 
                                        $horticultural_kabadi = "Yes";
                                    else
                                        $horticultural_kabadi = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ003_SQ002'] == 1) 
                                         $horticultural_authorised = "Yes";
                                    else
                                        $horticultural_authorised = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ003_SQ003'] == 1) 
                                         $horticultural_dumped = "Yes";
                                    else
                                        $horticultural_dumped = "No";
                                    
                                    if ($sql_data_array['266617X38X2171SQ003_SQ004'] == 1) 
                                         $horticultural_internal = "Yes";
                                    else
                                        $horticultural_internal = "No";                                   
                                    ?>
                                
                                <td><?php echo $horticultural_kabadi; ?></td>
                                <td><?php echo $horticultural_authorised; ?></td>
                                <td><?php echo $horticultural_dumped; ?></td>
                                <td><?php echo $horticultural_internal; ?></td>
                                
                                
                                <?php
                                //question No.7 Waste section.
                                    //E-waste
                                                                      
                                    if ($sql_data_array['266617X38X2171SQ004_SQ001'] == 1) 
                                        $ewaste_kabadi = "Yes";
                                    else
                                        $ewaste_kabadi = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ004_SQ002'] == 1) 
                                         $ewaste_authorised = "Yes";
                                    else
                                        $ewaste_authorised = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ004_SQ003'] == 1) 
                                         $ewaste_dumped = "Yes";
                                    else
                                        $ewaste_dumped = "No";
                                    
                                    if ($sql_data_array['266617X38X2171SQ004_SQ004'] == 1) 
                                         $ewaste_internal = "Yes";
                                    else
                                        $ewaste_internal = "No";                                   
                                    ?>
                                
                                <td><?php echo $ewaste_kabadi; ?></td>
                                <td><?php echo $ewaste_authorised; ?></td>
                                <td><?php echo $ewaste_dumped; ?></td>
                                <td><?php echo $ewaste_internal; ?></td>
                                
                                <?php
                                //question No.7 Waste section.
                                    //Hazardous waste
                                                                      
                                    if ($sql_data_array['266617X38X2171SQ007_SQ001'] == 1) 
                                        $hazardous_kabadi = "Yes";
                                    else
                                        $hazardous_kabadi = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ007_SQ002'] == 1) 
                                         $hazardous_authorised = "Yes";
                                    else
                                        $hazardous_authorised = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ007_SQ003'] == 1) 
                                         $hazardous_dumped = "Yes";
                                    else
                                        $hazardous_dumped = "No";
                                    
                                    if ($sql_data_array['266617X38X2171SQ007_SQ004'] == 1) 
                                         $hazardous_internal = "Yes";
                                    else
                                        $hazardous_internal = "No";                                   
                                    ?>
                                
                                <td><?php echo $hazardous_kabadi; ?></td>
                                <td><?php echo $hazardous_authorised; ?></td>
                                <td><?php echo $hazardous_dumped; ?></td>
                                <td><?php echo $hazardous_internal; ?></td>
                                
                                
                                <?php
                                //question No.7 Waste section.
                                    //Wood, glass, metal
                                                                      
                                    if ($sql_data_array['266617X38X2171SQ005_SQ001'] == 1) 
                                        $woodglass_kabadi = "Yes";
                                    else
                                        $woodglass_kabadi = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ005_SQ002'] == 1) 
                                         $woodglass_authorised = "Yes";
                                    else
                                        $woodglass_authorised = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ005_SQ003'] == 1) 
                                         $woodglass_dumped = "Yes";
                                    else
                                        $woodglass_dumped = "No";
                                    
                                    if ($sql_data_array['266617X38X2171SQ005_SQ004'] == 1) 
                                         $woodglass_internal = "Yes";
                                    else
                                        $woodglass_internal = "No";                                   
                                    ?>
                                
                                <td><?php echo $woodglass_kabadi; ?></td>
                                <td><?php echo $woodglass_authorised; ?></td>
                                <td><?php echo $woodglass_dumped; ?></td>
                                <td><?php echo $woodglass_internal; ?></td>
                                
                                <?php
                                //question No.7 Waste section.
                                    //Biomedical waste
                                                                      
                                    if ($sql_data_array['266617X38X2171SQ008_SQ001'] == 1) 
                                        $biomedical_waste_kabadi = "Yes";
                                    else
                                        $biomedical_waste_kabadi = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ008_SQ002'] == 1) 
                                         $biomedical_waste_authorised = "Yes";
                                    else
                                        $biomedical_waste_authorised = "No";                                    
                                    if ($sql_data_array['266617X38X2171SQ008_SQ003'] == 1) 
                                         $biomedical_waste_dumped = "Yes";
                                    else
                                        $biomedical_waste_dumped = "No";
                                    
                                    if ($sql_data_array['266617X38X2171SQ008_SQ004'] == 1) 
                                         $biomedical_waste_internal = "Yes";
                                    else
                                        $biomedical_waste_internal = "No";                                   
                                    ?>
                                
                                <td><?php echo $biomedical_waste_kabadi; ?></td>
                                <td><?php echo $biomedical_waste_authorised; ?></td>
                                <td><?php echo $biomedical_waste_dumped; ?></td>
                                <td><?php echo $biomedical_waste_internal; ?></td>
                                
                                

                                <td><!--Question No.8 Waste Dispose-->
                                    <?php
                                    if ($sql_data_array['266617X38X2076'] == "A1") {
                                        
                                        echo "Open dumping";
                                    } elseif ($sql_data_array['266617X38X2076'] == "A2") {
                                        
                                        echo "Designated dumping site (Dhalao)";
                                    } elseif ($sql_data_array['266617X38X2076'] == "A3") {
                                        
                                        echo "Landfill Site";
                                    } elseif ($sql_data_array['266617X38X2076'] == "A4") {
                                        
                                        echo "Don�t know";
                                    }
                                    ?>
                                </td><!--Quantity of Compost generated per month-->
                                <td>
                                    <?php
                                    if ($sql_data_array['266617X38X2081'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>
                                <td> 
                                    <?php
                                    if ($sql_data_array['266617X38X2082'] == "A1") {
                                        echo "Inside the school";
                                    } elseif ($sql_data_array['266617X38X2082'] == "A2") {
                                        echo "Outside the school";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $g = array();
                                    if ($sql_data_array['266617X38X2083SQ001'] != "") {
                                        $g[] = "Horticultural";
                                    }
                                    if ($sql_data_array['266617X38X2083SQ002'] != "") {
                                        $g[] = "Plastic";
                                    }
                                    if ($sql_data_array['266617X38X2083SQ003'] != "") {
                                        $g[] = "Tyres";
                                    }
                                    echo implode($g, ', ');
                                    ?>
                                </td>





                                    <?php
                                    //waste section question no.10
                                    if ($sql_data_array['266617X38X2087SQ001_SQ002'] != "" && $sql_data_array['266617X38X2087SQ001_SQ002'] != 0) {
                                        $TVs = "TVs:" . $sql_data_array['266617X38X2087SQ001_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ002_SQ002'] != "" && $sql_data_array['266617X38X2087SQ002_SQ002'] != 0) {
                                        $VCRorDVDplayers = " VCR or DVD players:" . $sql_data_array['266617X38X2087SQ002_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ003_SQ002'] != "" && $sql_data_array['266617X38X2087SQ003_SQ002'] != 0) {
                                        $Refrigerators = " Refrigerators and freezers:" . $sql_data_array['266617X38X2087SQ003_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ004_SQ002'] != "" && $sql_data_array['266617X38X2087SQ004_SQ002'] != 0) {
                                        $Washing = " Washing machines:" . $sql_data_array['266617X38X2087SQ004_SQ002'];
                                    }
                                    if ($sql_data_array['266617X38X2087SQ005_SQ002'] != "" && $sql_data_array['266617X38X2087SQ005_SQ002'] != 0) {
                                        $Aircond = " Air conditioners:" . $sql_data_array['266617X38X2087SQ005_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ006_SQ002'] != "" && $sql_data_array['266617X38X2087SQ006_SQ002'] != 0) {
                                        $Heaters = " Heaters:" . $sql_data_array['266617X38X2087SQ006_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ007_SQ002'] != "" && $sql_data_array['266617X38X2087SQ007_SQ002'] != 0) {
                                        $Microwaves = " Microwaves:" . $sql_data_array['266617X38X2087SQ007_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ008_SQ002'] != "" && $sql_data_array['266617X38X2087SQ008_SQ002'] != 0) {
                                        $Ovens = " Ovens:" . $sql_data_array['266617X38X2087SQ008_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ009_SQ002'] != "" && $sql_data_array['266617X38X2087SQ009_SQ002'] != 0) {
                                        $Toasters = " Toasters:" . $sql_data_array['266617X38X2087SQ009_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ010_SQ002'] != "" && $sql_data_array['266617X38X2087SQ010_SQ002'] != 0) {
                                        $ElectricKettles = " Electric Kettles:" . $sql_data_array['266617X38X2087SQ010_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ011_SQ002'] != "" && $sql_data_array['266617X38X2087SQ011_SQ002'] != 0) {
                                        $Personalcomputers = " Personal computers:" . $sql_data_array['266617X38X2087SQ011_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ012_SQ002'] != "" && $sql_data_array['266617X38X2087SQ012_SQ002'] != 0) {
                                        $Laptop = " Laptop:" . $sql_data_array['266617X38X2087SQ012_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ014_SQ002'] != "" && $sql_data_array['266617X38X2087SQ014_SQ002'] != 0) {
                                        $Notepadcomputers = " Notepad computers:" . $sql_data_array['266617X38X2087SQ014_SQ002'];
                                    }



                                    if ($sql_data_array['266617X38X2087SQ015_SQ002'] != "" && $sql_data_array['266617X38X2087SQ015_SQ002'] != 0) {
                                        $Printers = " Printers:" . $sql_data_array['266617X38X2087SQ015_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ016_SQ002'] != "" && $sql_data_array['266617X38X2087SQ016_SQ002'] != 0) {
                                        $Photocopiers = " Photocopiers:" . $sql_data_array['266617X38X2087SQ016_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ017_SQ002'] != "" && $sql_data_array['266617X38X2087SQ017_SQ002'] != 0) {
                                        $Projectors = " Projectors:" . $sql_data_array['266617X38X2087SQ017_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ018_SQ002'] != "" && $sql_data_array['266617X38X2087SQ018_SQ002'] != 0) {
                                        $Whiteboards = " Whiteboards:" . $sql_data_array['266617X38X2087SQ018_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ019_SQ002'] != "" && $sql_data_array['266617X38X2087SQ019_SQ002'] != 0) {
                                        $typewriters = " Typewriters:" . $sql_data_array['266617X38X2087SQ019_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ020_SQ002'] != "" && $sql_data_array['266617X38X2087SQ020_SQ002'] != 0) {
                                        $calculators = " Pocket & desk calculators:" . $sql_data_array['266617X38X2087SQ020_SQ002'];
                                    }



                                    if ($sql_data_array['266617X38X2087SQ021_SQ002'] != "" && $sql_data_array['266617X38X2087SQ021_SQ002'] != 0) {
                                        $Faxmachines = " Fax machines:" . $sql_data_array['266617X38X2087SQ021_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ022_SQ002'] != "" && $sql_data_array['266617X38X2087SQ022_SQ002'] != 0) {
                                        $Telex = " Telex:" . $sql_data_array['266617X38X2087SQ022_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ023_SQ002'] != "" && $sql_data_array['266617X38X2087SQ023_SQ002'] != 0) {
                                        $Telephones = " Telephones:" . $sql_data_array['266617X38X2087SQ023_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ024_SQ002'] != "" && $sql_data_array['266617X38X2087SQ024_SQ002'] != 0) {
                                        $Pay_telephones = " Pay telephones:" . $sql_data_array['266617X38X2087SQ024_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ025_SQ002'] != "" && $sql_data_array['266617X38X2087SQ025_SQ002'] != 0) {
                                        $Mobiles = " Mobiles:" . $sql_data_array['266617X38X2087SQ025_SQ002'];
                                    }

                                    if ($sql_data_array['266617X38X2087SQ026_SQ002'] != "" && $sql_data_array['266617X38X2087SQ026_SQ002'] != 0) {
                                        $Answeringsystems = " Answering systems:" . $sql_data_array['266617X38X2087SQ026_SQ002'];
                                    }
                                    ?>



                                <td>
                                <?php echo $TVs . " " . $VCRorDVDplayers . " " . $Refrigerators . " " . $Washing . " " . $Aircond . " " . $Heaters . " " . $Microwaves . " " . $Ovens . " " . $Toasters . " " . $ElectricKettles . " " . $Personalcomputers . " " . $Laptop . " " . $Notepadcomputers . " " . $Printers . " " . $Photocopiers . " " . $Projectors . " " . $Whiteboards . " " . $typewriters . " " . $calculators . " " . $Faxmachines . " " . $Telex . " " . $Telephones . " " . $Pay_telephones . " " . $Mobiles . " " . $Answeringsystems; ?>  


                                </td>



                                <?php
                                //waste section question no.10 non Woking condition.
                                if ($sql_data_array['266617X38X2087SQ001_SQ003'] != "" && $sql_data_array['266617X38X2087SQ001_SQ003'] != 0) {
                                    $TVs_non_work = "TVs:" . $sql_data_array['266617X38X2087SQ001_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ002_SQ003'] != "" && $sql_data_array['266617X38X2087SQ002_SQ003'] != 0) {
                                    $VCRorDVDplayers_non_work = " VCR or DVD players:" . $sql_data_array['266617X38X2087SQ002_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ003_SQ003'] != "" && $sql_data_array['266617X38X2087SQ003_SQ003'] != 0) {
                                    $Refrigerators_non_work = " Refrigerators and freezers:" . $sql_data_array['266617X38X2087SQ003_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ004_SQ003'] != "" && $sql_data_array['266617X38X2087SQ004_SQ003'] != 0) {
                                    $Washing_non_work = " Washing machines:" . $sql_data_array['266617X38X2087SQ004_SQ003'];
                                }
                                if ($sql_data_array['266617X38X2087SQ005_SQ003'] != "" && $sql_data_array['266617X38X2087SQ005_SQ003'] != 0) {
                                    $Aircond_non_work = " Air conditioners:" . $sql_data_array['266617X38X2087SQ005_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ006_SQ003'] != "" && $sql_data_array['266617X38X2087SQ006_SQ003'] != 0) {
                                    $Heaters_non_work = " Heaters:" . $sql_data_array['266617X38X2087SQ006_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ007_SQ003'] != "" && $sql_data_array['266617X38X2087SQ007_SQ003'] != 0) {
                                    $Microwaves_non_work = " Microwaves:" . $sql_data_array['266617X38X2087SQ007_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ008_SQ003'] != "" && $sql_data_array['266617X38X2087SQ008_SQ003'] != 0) {
                                    $Ovens_non_work = " Ovens:" . $sql_data_array['266617X38X2087SQ008_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ009_SQ003'] != "" && $sql_data_array['266617X38X2087SQ009_SQ003'] != 0) {
                                    $Toasters_non_work = " Toasters:" . $sql_data_array['266617X38X2087SQ009_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ010_SQ003'] != "" && $sql_data_array['266617X38X2087SQ010_SQ003'] != 0) {
                                    $ElectricKettles_non_work = " Electric Kettles:" . $sql_data_array['266617X38X2087SQ010_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ011_SQ003'] != "" && $sql_data_array['266617X38X2087SQ011_SQ003'] != 0) {
                                    $Personalcomputers_non_work = " Personal computers:" . $sql_data_array['266617X38X2087SQ011_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ012_SQ003'] != "" && $sql_data_array['266617X38X2087SQ012_SQ003'] != 0) {
                                    $Laptop_non_work = " Laptop:" . $sql_data_array['266617X38X2087SQ012_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ013_SQ003'] != "" && $sql_data_array['266617X38X2087SQ013_SQ003'] != 0) {
                                    $Notebookcomputers_non_work = " NoteBook computers:" . $sql_data_array['266617X38X2087SQ013_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ014_SQ003'] != "" && $sql_data_array['266617X38X2087SQ014_SQ003'] != 0) {
                                    $Notepadcomputers_non_work = " Notepad computers:" . $sql_data_array['266617X38X2087SQ014_SQ003'];
                                }



                                if ($sql_data_array['266617X38X2087SQ015_SQ003'] != "" && $sql_data_array['266617X38X2087SQ015_SQ003'] != 0) {
                                    $Printers_non_work = " Printers:" . $sql_data_array['266617X38X2087SQ015_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ016_SQ003'] != "" && $sql_data_array['266617X38X2087SQ016_SQ003'] != 0) {
                                    $Photocopiers_non_work = " Photocopiers:" . $sql_data_array['266617X38X2087SQ016_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ017_SQ003'] != "" && $sql_data_array['266617X38X2087SQ017_SQ003'] != 0) {
                                    $Projectors_non_work = " Projectors:" . $sql_data_array['266617X38X2087SQ017_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ018_SQ003'] != "" && $sql_data_array['266617X38X2087SQ018_SQ003'] != 0) {
                                    $Whiteboards_non_work = " Whiteboards:" . $sql_data_array['266617X38X2087SQ018_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ019_SQ003'] != "" && $sql_data_array['266617X38X2087SQ019_SQ003'] != 0) {
                                    $typewriters_non_work = " Typewriters:" . $sql_data_array['266617X38X2087SQ019_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ020_SQ003'] != "" && $sql_data_array['266617X38X2087SQ020_SQ003'] != 0) {
                                    $calculators_non_work = " Pocket & desk calculators:" . $sql_data_array['266617X38X2087SQ020_SQ003'];
                                }



                                if ($sql_data_array['266617X38X2087SQ021_SQ003'] != "" && $sql_data_array['266617X38X2087SQ021_SQ003'] != 0) {
                                    $Faxmachines_non_work = " Fax machines:" . $sql_data_array['266617X38X2087SQ021_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ022_SQ003'] != "" && $sql_data_array['266617X38X2087SQ022_SQ003'] != 0) {
                                    $Telex_non_work = " Telex:" . $sql_data_array['266617X38X2087SQ022_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ023_SQ003'] != "" && $sql_data_array['266617X38X2087SQ023_SQ003'] != 0) {
                                    $Telephones_non_work = " Telephones:" . $sql_data_array['266617X38X2087SQ023_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ024_SQ003'] != "" && $sql_data_array['266617X38X2087SQ024_SQ003'] != 0) {
                                    $Pay_telephones_non_work = " Pay telephones:" . $sql_data_array['266617X38X2087SQ024_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ025_SQ003'] != "" && $sql_data_array['266617X38X2087SQ025_SQ003'] != 0) {
                                    $Mobiles_non_work = " Mobiles:" . $sql_data_array['266617X38X2087SQ025_SQ003'];
                                }

                                if ($sql_data_array['266617X38X2087SQ026_SQ003'] != "" && $sql_data_array['266617X38X2087SQ026_SQ003'] != 0) {
                                    $Answeringsystems_non_work = " Answering systems:" . $sql_data_array['266617X38X2087SQ026_SQ003'];
                                }
                                ?>



                                <td>
                                <?php echo $TVs_non_work . " " . $VCRorDVDplayers_non_work . " " . $Refrigerators_non_work . " " . $Washing_non_work . " " . $Aircond_non_work . " " . $Heaters_non_work . " " . $Microwaves_non_work . " " . $Ovens_non_work . " " . $Toasters_non_work . " " . $ElectricKettles_non_work . " " . $Personalcomputers_non_work . " " . $Laptop_non_work . " " . $Notepadcomputers_non_work . " " . $Printers_non_work . " " . $Photocopiers_non_work . " " . $Projectors_non_work . " " . $Whiteboards_non_work . " " . $typewriters_non_work . " " . $calculators_non_work . " " . $Faxmachines_non_work . " " . $Telex_non_work . " " . $Telephones_non_work . " " . $Pay_telephones_non_work . " " . $Mobiles_non_work . " " . $Answeringsystems_non_work; ?>  


                                </td>


                                <td><!--Waste E-Waste Displosal-->
                                <?php
                                if ($sql_data_array['266617X38X2114'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                                ?>
                                </td>
                                <td> <?php
                                if ($sql_data_array['266617X38X2115'] == "A1") {
                                    echo "Kabadiwalla/ Scrapdealer ";
                                } elseif ($sql_data_array['266617X38X2115'] == "A2") {
                                    echo "Taken back by manufacturer ";
                                } elseif ($sql_data_array['266617X38X2115'] == "A4") {
                                    echo "Authorised dealer ";
                                } elseif ($sql_data_array['266617X38X2115'] == "A5") {
                                    echo "Authorised dismantler ";
                                } elseif ($sql_data_array['266617X38X2115'] == "-oth-") {
                                    echo "Other: ";
                                    echo $sql_data_array['266617X38X2115other'];
                                }
                                ?>
                                </td>

                                <td><?php if ($sql_data_array['266617X38X2121'] == "Y") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?></td>
                                <td>
                                <?php if ($sql_data_array['266617X38X2122'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                } ?>
                                </td>
                                
                                <?php
                                  // 13(a) What form do these awareness drives take?                             
                              
                                if ($sql_data_array['266617X38X2123SQ001'] == "Y")
                                    $curriculum= "Yes";
                                    else 
                                   $curriculum= "No";
                                
                                if ($sql_data_array['266617X38X2123SQ002'] == "Y")
                                    $extracurricular= "Yes";
                                    else 
                                   $extracurricular= "No";
                                
                                if ($sql_data_array['266617X38X2123SQ003'] == "Y") 
                                    $showcasing= "Yes";
                                    else 
                                   $showcasing= "No";
                                
                                ?>
                                <td><?php echo $curriculum;  ?></td>
                                <td><?php echo $extracurricular;  ?></td>
                                <td><?php echo $showcasing;  ?></td>

                                <td><?php if ($sql_data_array['266617X38X2124'] == "Y") {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?></td>

                                <!--
                                <td><?php echo number_format($sql_score_waste, 2); ?></td>
                                <td><?php echo number_format($sql_score, 2); ?></td>
                                <td><?php echo number_format($sql_bonus, 2); ?></td>
                                -->

                                <td>
                                    <!--Q1.Feedback: Has your school participated in the Green Schools Programme (GSP) Audit before? -->
                                <?php
                                if ($sql_data_array['266617X39X2426'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                                ?>
                                </td>
                                <td>
                                    <!--Q1(a).Feedback:  If yes, then in which year did your school first participate in the GSP Audit? -->
                                <?php echo $sql_data_array['266617X39X2427']; ?>
                                </td>
                                <td>
                                    <!--Q1(b).Feedback: If yes, how many times have you done the audit? -->
                                <?php echo $sql_data_array['266617X39X2428']; ?>
                                </td>
                                <td>
                                    <!--Q2.Feedback: Have teachers from your school participated in teacher interactive workshops organized by the GSP team? -->
                                <?php
                                if ($sql_data_array['266617X39X2429'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                                ?>
                                </td>

                                <td>
                                    <!--Q3.Feedback: Did you find the online information relevant to your environmental education activities? -->
                                <?php
                                if ($sql_data_array['266617X39X2430'] == "Y") {
                                    echo "Yes";
                                } else {
                                    echo "No";
                                }
                                ?>

                                </td>

                                <td>
                                    <!--Q3a.Feedback:  If no, then please share your suggestions: -->
                                <?php echo $sql_data_array['266617X39X2431']; ?>
                                </td>

                                <td>
                                    <!--Q4.Feedback: Was the audit easy-to-understand and self-explanatory? -->
    <?php
    if ($sql_data_array['266617X39X2432'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>
                                <td>
                                    <!-- Q5. Did you understand the present format of the GSP? -->
                                    <?php
                                    if ($sql_data_array['266617X39X2433'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <!-- Q6.  Do you think your school will be a Green School (resource efficient) by 2019? -->
                                    <?php
                                    if ($sql_data_array['266617X39X2434'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <!-- Q6a. If no, why? -->
                                    <?php echo $sql_data_array['266617X39X2435']; ?>
                                </td>

                                <td>
                                    <!-- Q7.  What would be the help required to make your school a Green School? -->
                                    <?php echo $sql_data_array['266617X39X2436']; ?>
                                </td>

                                <td>
                                    <!-- Q8. How would you rate the overall design of the audit? -->
                                    <?php
                                    if ($sql_data_array['266617X39X2437SQ001'] == "A1") {
                                        echo "Good";
                                    }

                                    if ($sql_data_array['266617X39X2437SQ001'] == "A2") {
                                        echo "Average";
                                    }

                                    if ($sql_data_array['266617X39X2437SQ001'] == "A3") {
                                        echo "Bad";
                                    }
                                    ?>
                                </td>

                                <td>
                                    <!-- Q9.Would your school like to recommend any topic/s that you strongly feel should be added or deleted in the audit? -->
                                    <?php
                                    if ($sql_data_array['266617X39X2442'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>

                                <td>
                                    <!-- Q10.  What would be the help required to make your school a Green School? -->
    <?php
    if ($sql_data_array['266617X39X2444'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>

                                <td>
                                    <!-- Q11.How many times did you contact the Green Schools Programme Team for guidance and counseling? -->

                                    <?php
                                    $gspguidance = array(1 => "Never", 2 => "Once", 3 => "Twice", 4 => "More than twice");
                                    $type = $sql_data_array['266617X39X2445'];
                                    echo $gspguidance[$type];
                                    ?>
                                </td>

                                <td>
                                    <!-- Q12.Water being the focus this year -->
    <?php
    if ($sql_data_array['266617X39X2446'] == "Y") {
        echo "Yes";
    } else {
        echo "No";
    }
    ?>
                                </td>

                                <td>
                                    <!-- Q12a.If no, please share your suggestions: -->

                                    <?php echo $sql_data_array['266617X39X2447']; ?>
                                </td>

                                <td>
                                    <!-- Q13. Did your students enjoy doing the Water activities? -->
                                    <?php
                                    if ($sql_data_array['266617X39X2448'] == "Y") {
                                        echo "Yes";
                                    } else {
                                        echo "No";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <!-- Q13a. Did your students enjoy doing the Water activities? -->
    <?php echo $sql_data_array['266617X39X2451']; ?>
                                </td>
                                
                                <!-- NEW ADDITION -->
                                <?php
                            $totalpoints=number_format(GetAirPoints($token)+GetEnergyPoints($token)+GetFoodPoints($token)+GetLandPoints($token)+GetWaterPoints(                             $token)+GetWastePoints($token), 2); 
                            $totalpointspercent=number_format((($totalpoints*100)/157),2); 
 if($totalpointspercent>=70)
 {
	$catclass="cat_green";  
	$category="Green";
 }elseif($totalpointspercent>=50)
 {
	 $catclass="cat_yellow";
	 $category="Yellow";
 }elseif($totalpointspercent>=35)
 {
	 $catclass="cat_orange";
	 $category="Orange";
 }elseif($totalpointspercent<35)
 {
	 $catclass="cat_red";
	 $category="Red";
 }
         $sql_query_progress = "SELECT completeness FROM `lime_answers_for_progress` WHERE token='$token'";
         $sql_progress_array = mysql_query($sql_query_progress);
         $sql_completeness_row = mysql_fetch_assoc($sql_progress_array);
         
         ?>          
      <td><?php echo number_format(GetAirPoints($token), 2); ?></td>
     <td><?php echo number_format(GetEnergyPoints($token), 2); ?></td>
     <td><?php echo number_format(GetFoodPoints($token), 2); ?></td>
     <td><?php echo number_format(GetLandPoints($token), 2); ?></td>
     <td><?php echo number_format(GetWaterPoints($token), 2); ?></td>
     <td><?php echo number_format(GetWastePoints($token), 2); ?></td>
     <td><?php echo $totalpoints; ?></td>
     <td><?php echo $totalpointspercent; ?>%</td>
    <td><?php echo $sql_completeness_row['completeness']; ?>%</td>
    <td class="<?php echo $catclass; ?>"><?php echo $category; ?></td> 
                                  <!-- NEW ADDITION -->

                            </tr>
    <?php
// }
}
?>
                                <?php

                                function GetScoreBySection($token, $sectionid) {

                                    $sqlscore = mysql_query("select SUM(score) as score from calculation where token= '" . $token . "' AND section_id='$sectionid'");
                                    $totalscorebysection = mysql_result($sqlscore, 0, 0);

                                    return $totalscorebysection;
                                }
                                ?>




                    </tbody> 
                </table> 




            </div>
        </div>

    </div>
</main>
<footer>
    <div class="text-center">Copyright &copy; <?php echo date('Y'); ?> Centre for Science and Environment</div>
</footer>

</body>

</html>