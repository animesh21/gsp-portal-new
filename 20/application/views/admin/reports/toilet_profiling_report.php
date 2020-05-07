<div class="top-area">
  <h2>TOILET PROFILING REPORT</h2>
</div>
<div class="row">
  <div class="col-md-12">
    <table id="example1" class="display dataTable no-footer">
      <thead>
        <tr role="row">
          <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No: activate to sort column descending" style="width: 28px;">S.No</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Region: activate to sort column ascending" style="width: 41px;">Region</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="State: activate to sort column ascending" style="width: 46px;">State</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Shift: activate to sort column ascending" style="width: 33px;">Shift</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" style="width: 51px;">Location</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Category: activate to sort column ascending" style="width: 57px;">Category</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Actual Load(Drinking Water Taps): activate to sort column ascending" style="width: 102px;">Actual Load(Drinking Water Taps)</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Ablution Taps: activate to sort column ascending" style="width: 51px;">Ablution Taps</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Urinals: activate to sort column ascending" style="width: 42px;">Urinals</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="No. of Toilets(Water Closets)Girls: activate to sort column ascending" style="width: 92px;">No. of Toilets(Water Closets)Girls</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="No. of Toilets(Water Closets)Boys: activate to sort column ascending" style="width: 92px;">No. of Toilets(Water Closets)Boys</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="No. of Toilets(Water Closets)Common: activate to sort column ascending" style="width: 108px;">No. of Toilets(Water Closets)Common</th>
          <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 30px;">Total</th>
        </tr>
      </thead>
      <tbody>
        <?php 
	   $srno=0;
	   for($i=0; $i<sizeof($records); ++$i){ 
	   ?>
        <tr role="row" class="odd">
          <td><?php echo ++$srno; ?></td>
          <td><?php echo $records[$i]['region']; ?></td>
          <td><?php echo $records[$i]['statename']; ?></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
