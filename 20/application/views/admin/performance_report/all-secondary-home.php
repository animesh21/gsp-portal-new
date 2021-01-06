<div>
  <div class="top-area">
    <h2>ALL EXCEL DUMP Of SECONDARY PHASE-1</h2>
  </div>
  <div style="overflow: scroll">
    <table class="display dataTable no-footer" id="tablePerformance">
      <thead>
    <tr>
    <th>S.No</th>
    <th>School Id</th>
    <th>Name of the School/Institution</th>
    
    
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
        <td><?php echo $record1[$i]->school_id; ?></td>
        <td><?php echo $record1[$i]->name; ?></td>
   
          </tr>
    <?php
}
?>
     
      </tbody>

    </table>
  </div>
</div>
