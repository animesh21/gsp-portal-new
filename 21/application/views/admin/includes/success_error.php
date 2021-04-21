<style>
    .alert
    {
        border: 1px solid !important;;
        border-radius: 0px !important;
    }
</style>
<?php
if($this->session->flashdata('error'))
{
    echo '<div class="alert alert-danger alert-dismissable">';
    echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    echo $this->session->flashdata('error');
    echo '</div></div>';
}

if($this->session->flashdata('success'))
{
    echo '<div class="alert alert-success alert-dismissable">';
    echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
    echo $this->session->flashdata('success');
    echo '</div>';
}
?>