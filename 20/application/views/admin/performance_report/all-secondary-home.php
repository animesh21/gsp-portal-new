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
    <th>Participate</th>
    <th>Air1</th>
    <th>Air2</th>
    <th>Air3</th>
    <th>Air4</th>
    <th>Air5</th>
    <th>Air6</th>
    <th>Air7</th>
    <th>Air Score</th>
    <th>Energy1</th>
    <th>Energy2</th>
    <th>Energy3<2/th>
    <th>Energy4</th>
    <th>Energy5</th>
    <th>Energy6</th>
    <th>Energy Score</th>
    <th>Food1</th>
    <th>Food2</th>
    <th>Food3</th>
    <th>Food4</th>
    <th>Food5</th>
    <th>Food Score</th>
    <th>Land1</th>
    <th>Land2</th>
    <th>Land3</th>
    <th>Land Score</th>
    <th>Water1</th>
    <th>Water2</th>
    <th>Water3</th>
    <th>Water4</th>
    <th>Water5</th>
    <th>Water6</th>
    <th>Water7</th>
    <th>Water8</th>
    <th>Water9</th>
    <th>Water Score</th>
    <th>Waste1</th>
    <th>Waste2</th>
    <th>Waste3</th>
    <th>Waste4</th>
    <th>Waste5</th>
    <th>Waste6</th>
    <th>Waste7</th>
    <th>Waste8</th>
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
