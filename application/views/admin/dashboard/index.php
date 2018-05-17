<h1>Dashboard</h1>

<?php
echo '<pre>';
print_r($_SERVER);
echo "hiiiii";
echo basename($_SERVER['SCRIPT_NAME']);
echo $_SERVER['SCRIPT_NAME'] ;
echo "guru";
echo str_replace(basename($_SERVER['SCRIPT_NAME']),"",$_SERVER['SCRIPT_NAME']);
die();
?>

<div class="schools-statics "> <a href="<?php base_url()?>dashboard/year18" target="_blank">
        <div class="statics-circle"> <span>2</span>
            <label>Phase</label>
        </div>
    </a>
    <div class="title">2018</div>
</div>
<div class="schools-statics"> <a href="<?php base_url()?>dashboard/year" target="_blank">
        <div class="statics-circle"> <span>
		2
		</span>
            <label>Phase</label>
        </div>
    </a>
    <div class="title">2017</div>
</div>
