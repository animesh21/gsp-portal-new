<link rel="stylesheet"  href="<?php echo base_url() ?>assets/css/jquery.fileuploader.css" />
<link href="<?php echo base_url() ?>assets/css/jquery.fileuploader-theme-onebutton.css" media="all" rel="stylesheet">
<style>
    .alert{
        height: 50px !important;
        padding:15px !important;
        font-weight: bold;
        border-radius: 0px;
    }
    .alert-success
    {
        border: 2px solid green;
    }
    .alert-danger
    {
        border: 2px solid red;
    }
</style>
<div id="airModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="background: rgb(232, 101, 73); color:#fff;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload your files</h4>
            </div>

            <div class="modal-body" id="test">

            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.fileuploader.js"></script>
<script>
    //Get Data When Modal Open
    $("#airModal").on('shown.bs.modal', function (e) {
        var id = e.relatedTarget.dataset.id;
        $.get('<?php echo base_url('upload_files/getHtml') ?>', function (data) {
            $('#test').html(data);
            $('#Fules_bill').val(id);
            //alert($('#Fules_bill').val());
        });
    });
    //Remove Data When Modal Close
    $("#airModal").on("hidden.bs.modal", function () {
        $('#test').html("");
        var fd = $('#' + document.forms[0].id).serialize();
        ///alert(fd);
        var redirect = '';
        switch (document.forms[0].id)
        {
            case "air":
                redirect = "airprevious";
                break;
            case "food":
                redirect = "foodajax";
                break;
            case "energy":
                redirect = "energyajax";
                break;
            case "land":
                redirect = "landajax";
                break;
            case "water":
                redirect = "waterajax";
                break;
            case "PrimaryWater":
                redirect = "waterajax";
                break;
            case "waste":
                redirect = "wasteajax";
                break;
            case "PrimaryWaste":
                redirect = "wasteajax";
                break;
            case "PrimaryAir":
                //alert('Case Called');
                redirect="airprevious";
                break;
            case "PrimaryEnergy":
                redirect = "energyajax";
                break;
            case "PrimaryFood":
                redirect = "foodajax";
                break;
			case "PrimaryLand":
                redirect= "landajax";
        }

        //console.log(fd);
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url() ?>previous/' + redirect,
            data: fd,
            success: function (data) {
                location.reload();
            }
        });
    });
</script>
