<div>
  <div class="top-area">
    <h2>ALL EXCEL DUMP Of Audit@Home</h2>
  </div>
  <div style="overflow: scroll">
    <table class="display dataTable no-footer" id="tablePerformance">
      <thead>
    <tr>
    <th>S.No</th>
    <th>School Id</th>
    <th>Name of the School/Institution</th>
    <th>Grade</th>
    <th>Gender</th>
    <th>Mobile</th>
    <th>Email</th>
    <th>District</th>
    <th>School Name</th>
    <th>School Address</th>
    <th>Pincode</th>
    <th>Did your school participate in the GSP Audit 2019</th>
    <th>How do you travel for everyday activities?</th>
    <th>How many 2-wheeler and/or 4-wheeler vehicles does your family own?</th>
    <th>Which fuel does the vehicle(s) use?</th>
    <th>Does your vehicle(s) have PUC (Pollution Under Control) Certification?</th>
    <th>How would you rate the ventilation in your house?</th>
    <th>Do you know about the air quality index (AQI)?</th>
    <th>Do you think that there is air pollution inside your home (indoor air pollution)?</th>
    <th>Air Score</th>
    <th>Do you get an electricity bill every month?</th>
    <th>Do you know how to read an electricity bill?</th>
    <th>If you compare your monthly electricity bill now to what it was before the lockdown, the amount has… <2/th>
    <th>Do you use renewable energy in any form in the house?</th>
    <th>How do you operate electronic appliances, such as computer, television, etc.?</th>
    <th>What type of lighting do you have at home?</th>
    <th>Energy Score</th>
    <th>For how many days do you buy groceries at a time?</th>
    <th>How often do you read the food labels on packaged products, like biscuit, chocolate, etc. before consuming them?</th>
    <th>What do you do with the left over food?</th>
    <th>Approximately, what percentage of the food in your house is packaged, processed food?</th>
    <th>Which of the following constitutes the biggest part of your everyday diet?</th>
    <th>Food Score</th>
    <th>Do you have indoor and/or outdoor plants at home?</th>
    <th>How many types of plants are there around you?</th>
    <th>Do you use chemical pesticides to take care of the plants?</th>
    <th>Land Score</th>
    <th>How much water do you consume per person per day on average?</th>
    <th>How do you usually prefer to take a bath?</th>
    <th>Do you have an RO water purifier at home?</th>
    <th>What do you do with the excess water from the RO water purifier?</th>
    <th>Are there any water leakages in the washroom or other areas in your house?</th>
    <th>How many taps/ handpumps in your house have soap or handwash next to them?</th>
    <th>Does your house have a dual flush system in the toilet?</th>
    <th>Have you noticed any rainwater harvesting (RWH) structures around your house or in the locality? Example: recharge trenches or storage containers.</th>
    <th>How would you rate the quality and working conditions of these RWH structures?</th>
    <th>Water Score</th>
    <th>Do you segregate solid waste into wet and dry?</th>
    <th>How many dustbins are there in your house to collect different types of waste?</th>
    <th>How frequently do you or your parents get new mobile phones?</th>
    <th>How do you dispose of electronic waste like old phones, computers, etc? </th>
    <th>How do you dispose of sanitary waste?</th>
    <th>Do you practise composting at home?</th>
    <th>Do you share and reuse books rather than buying every time?</th>
    <th>Where do you dispose of the single-use masks and gloves used to protect yourself from the coronavirus?</th>
    <th>Waste Score</th>
    </tr>
      </thead>
      <tbody>
        <?php
    error_reporting(0);
          ini_set('memory_limit', '-1');
          for ($i = 0; $i < count($record1); $i++) {
        ?>
          <tr>
        <td><?php echo $i + 1; ?></td>
        <td><?php echo $record1[$i]->userid; ?></td>
        <td><?php echo $record1[$i]->name; ?></td>
        <td><?php echo $record1[$i]->grade; ?></td>
        <td><?php echo $record1[$i]->gender; ?></td>
        <td><?php echo $record1[$i]->mobile; ?></td>
        <td><?php echo $record1[$i]->email; ?></td>
        <td><?php echo $record1[$i]->district; ?></td>
        <td><?php echo $record1[$i]->school_name; ?></td>
        <td><?php echo $record1[$i]->school_address; ?></td>
        <td><?php echo $record1[$i]->pincode; ?></td>
        <td><?php echo $record1[$i]->participate; ?></td>
        <td><?php echo $record1[$i]->Q1A1; ?></td>
        <td><?php echo $record1[$i]->Q2A1; ?></td>
        <td><?php echo $record1[$i]->Q3A1; ?></td>
        <td><?php echo $record1[$i]->Q4A1; ?></td>
        <td><?php echo $record1[$i]->Q5A1; ?></td>
        <td><?php echo $record1[$i]->Q6A1; ?></td>
        <td><?php echo $record1[$i]->Q7A1; ?></td>
        <td><?php echo $record1[$i]->ascore; ?></td>
        <td><?php echo $record1[$i]->Q1E1; ?></td>
        <td><?php echo $record1[$i]->Q2E1; ?></td>
        <td><?php echo $record1[$i]->Q3E1; ?></td>
        <td><?php echo $record1[$i]->Q4E1; ?></td>
        <td><?php echo $record1[$i]->Q5E1; ?></td>
        <td><?php echo $record1[$i]->Q6E1; ?></td>
        <td><?php echo $record1[$i]->escore; ?></td>
        <td><?php echo $record1[$i]->Q1F1; ?></td>
        <td><?php echo $record1[$i]->Q2F1; ?></td>
        <td><?php echo $record1[$i]->Q3F1; ?></td>
        <td><?php echo $record1[$i]->Q4F1; ?></td>
        <td><?php echo $record1[$i]->Q5F1; ?></td>
        <td><?php echo $record1[$i]->fscore; ?></td>
        <td><?php echo $record1[$i]->Q1L1; ?></td>
        <td><?php echo $record1[$i]->Q2L1; ?></td>
        <td><?php echo $record1[$i]->Q3L1; ?></td>
        <td><?php echo $record1[$i]->lscore; ?></td>
        <td><?php echo $record1[$i]->Q1W1; ?></td>
        <td><?php echo $record1[$i]->Q2W1; ?></td>
        <td><?php echo $record1[$i]->Q3W1; ?></td>
        <td><?php echo $record1[$i]->Q4W1; ?></td>
        <td><?php echo $record1[$i]->Q5W1; ?></td>
        <td><?php echo $record1[$i]->Q6W1; ?></td>
        <td><?php echo $record1[$i]->Q7W1; ?></td>
        <td><?php echo $record1[$i]->Q8W1; ?></td>
        <td><?php echo $record1[$i]->Q9W1; ?></td>
        <td><?php echo $record1[$i]->wscore; ?></td>
        <td><?php echo $record1[$i]->Q1WS1; ?></td>
        <td><?php echo $record1[$i]->Q2WS1; ?></td>
        <td><?php echo $record1[$i]->Q3WS1; ?></td>
        <td><?php echo $record1[$i]->Q4WS1; ?></td>
        <td><?php echo $record1[$i]->Q5WS1; ?></td>
        <td><?php echo $record1[$i]->Q6WS1; ?></td>
        <td><?php echo $record1[$i]->Q7WS1; ?></td>
        <td><?php echo $record1[$i]->Q8WS1; ?></td>
        <td><?php echo $record1[$i]->wascore; ?></td>

   
          </tr>
    <?php
}
?>
     
      </tbody>

    </table>
  </div>
</div>
