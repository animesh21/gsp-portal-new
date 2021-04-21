</div>
<!--close content-form-->
</div>
<!--close container-->
<footer>
    <div class="container">
        <p>Copyright &COPY; 2020 Centre for Science and Environment</p>
    </div>
    <!--close container-->
</footer>
<!--close footer-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url() ?>assets/front/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/front/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/dataTables.buttons.min.js"></script>

<script src="<?php echo base_url(); ?>assets/front/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/front/js/chosen.jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        //alert("test");
        
        $('#example1').DataTable({
            dom: 'lfrtip',
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
            "iDisplayLength": 25
        });
        $('#tablePerformance').DataTable({
            dom: 'lBfrtip',
            buttons: [
                'excel'
            ],
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
            "iDisplayLength": 25
        });
        $('.tablepluging').DataTable({
            dom: 'lfrtip',
            "aLengthMenu": [[10, 25, 50, 75, -1], [10, 25, 50, 75, "All"]],
            "iDisplayLength": 25
        });
    });
</script>
<div id="shadowbox_overlay"></div>
<div id="shadowbox_container">
    <div id="shadowbox">
        <div id="shadowbox_title">
            <div id="shadowbox_title_inner"></div>
        </div>
        <div id="shadowbox_body">
            <div id="shadowbox_body_inner"></div>
            <div id="shadowbox_loading"></div>
        </div>
        <div id="shadowbox_toolbar">
            <div id="shadowbox_toolbar_inner"></div>
        </div>
    </div>
</div>

</body>
</html>
