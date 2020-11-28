<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>


<main>
    <section class="container admin-container">
        <section class="main-wrapper">
            <section class="gutter"></section>
            <section class="resources backgroundWhite">
                <h1><?php echo $page_title; ?></h1>
                    <div class="panel-body" style="overflow: scroll;">
                        <div class="paging-header"><?php echo $display_info; ?></div>
                        <table id="example" class="table table-striped table-bordered" style="width:100%">

                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Date of birth</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Grade</th>
                                    <th>Total Points</th>
                                    <th>School Id</th>
                                    <th>School Name</th>
                                    <th>Pincode</th>
                                    <th>State</th>
                                    <th>District</th>
                                    <th>Reg. Date</th>
                                    <th>Gender</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead> 
                            <tbody>
                                <?php echo $user_data_list; ?>
                            </tbody>
                        </table>
                     </section>
                 </section>
             </section>
</main>

<script type="text/javascript">
 $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: true,
        "scrollX": true,
        buttons: [
        { extend: 'excel', className: 'btn-default', text: 'Export to Excel' }
        ]
    } );
    
    table.buttons().container()
    .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
} );
</script>

<style type="text/css">
.btn-default{
    background-color:#efeded;
    font-size: 18px;
    font-weight: bold;
    margin-left: 20px !important;
}

#example{
    margin-top: 10px;
}
</style>

 
