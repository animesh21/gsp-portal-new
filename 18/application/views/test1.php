<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div id="msg"></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3" id="test">
        <form enctype="multipart/form-data">
            <input type="file" name="file[]" data-fileuploader-fileMaxSize="0.1" id="file" multiple>
            <input type="hidden" name="Fules" value="" id="Fules_bill" />
        </form>
    </div>
</div>
<div class="row pull-right">
    <div class="col-md-12">
        <button class="btn btn-default" id="uploadFiles" type="button">UPLOAD</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Return to survey</button>
    </div>
</div>
<div class="clerarfix">&nbsp;</div>
<div class="clerarfix">&nbsp;</div>
<script>
    $(document).ready(function () {

        // enable fileuploader plugin
        $('#file').fileuploader({
            addMore: true,
            theme: 'onebutton',
            limit: 5,
            extensions: ['jpg', 'jpeg', 'png','pdf','doc','docx'],
            captions: {
                button: "Select File"
            }
        });

        //Upload Files
        $('#uploadFiles').on('click', function () {
            $('#msg').html('');
            var formdata = new FormData();
            var ins = document.getElementById('file').files.length;
            if (ins == 0)
            {
                $('#msg').html('<div class="alert alert-danger">' +
                        '<strong>&#x2716; Error!</strong> Please Select a File to upload' +
                        '</div>');
            } else
            {
                for (var x = 0; x < ins; x++) {
                    formdata.append("files[]", document.getElementById('file').files[x]);
                }
                formdata.append('Fuels', $('#Fules_bill').val());
                $.ajax({
                    url: '<?php echo base_url('upload_files'); ?>', // point to server-side PHP script 
                    dataType: 'text', // what to expect back from the PHP script
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formdata,
                    type: 'post',
                    success: function (response) {
                        if (response == "success")
                        {
                            $('#msg').html('<div class="alert alert-success">' +
                                    '<strong>&#10004; Success!</strong> Files uploaded successfully.' +
                                    '</div>');
                        } else if (response == "error")
                        {
                            $('#msg').html('<div class="alert alert-danger">' +
                                    '<strong>&#x2716; Error!</strong> There is an error uploading your files.' +
                                    '</div>');
                        }
                    }

                });
            }
        });
    });

	
/*This Function Used For Removing File*/
$("#uploadFiles").click(function(){
  $(".fileuploader-list-file").val("[]");
  $("#file").remove();
  $("#fileuploader-item").remove();
  $(".fileuploader-list-file").append('<input type="file" name="file[]" id="file" multiple="multiple" style="position: absolute; z-index: -9999; height: 0px; width: 0px; padding: 0px; margin: 0px; line-height: 0; outline: 0px; border: 0px; opacity: 0;">');
}); 
</script>
