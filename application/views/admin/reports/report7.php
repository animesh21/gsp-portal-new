<h1>PERFORMANCE COMPARISON REPORT</h1>
<div class="wrapper" style="padding:0px;">
  <div class="container"> 
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <label for="pwd">Select State :</label>
      <select class="form-control" id="stateList">
        <option value="">Select State</option>
      </select>
	 </div>
	 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <label for="pwd">Select State :</label>
      <select class="form-control" id="stateList2">
        <option value="">Select State</option>
      </select>
	 </div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><br/>
      <input type="button" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="show" id="stateParticipation">
    </div>
    </div>
</div>
<div class="wrapper">
  <div id="container"> </div>
  <div id="container2"> </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
var state=[{
		"id": "1",
		"statename": "Andhra Pradesh (AP)",
		"green": "3",
		"yellow": "54",
		"orange": "96",
		"red": "16"
	},
	{
		"id": "2",
		"statename": "Punjab (PB)",
		"green": "4",
		"yellow": "25",
		"orange": "42",
		"red": "7"
	},
	{
		"id": "3",
		"statename": "Himachal Pradesh (HP)",
		"green": "0",
		"yellow": "32",
		"orange": "84",
		"red": "19"
	},
	{
		"id": "4",
		"statename": "Uttar Pradesh (UP)",
		"green": "9",
		"yellow": "24",
		"orange": "54",
		"red": "18"
	},
	{
		"id": "5",
		"statename": "Sikkim (SK)",
		"green": "2",
		"yellow": "23",
		"orange": "36",
		"red": "2"
	},
	{
		"id": "6",
		"statename": "Rajasthan (RJ)",
		"green": "2",
		"yellow": "25",
		"orange": "46",
		"red": "14"
	},
	{
		"id": "7",
		"statename": "Odisha (OD)",
		"green": "0",
		"yellow": "5",
		"orange": "10",
		"red": "3"
	},
	{
		"id": "8",
		"statename": "Madhya Pradesh (MP)",
		"green": "5",
		"yellow": "19",
		"orange": "29",
		"red": "4"
	},
	{
		"id": "9",
		"statename": "Delhi (DL)",
		"green": "9",
		"yellow": "24",
		"orange": "11",
		"red": "5"
	},
	{
		"id": "10",
		"statename": "Haryana (HR)",
		"green": "7",
		"yellow": "16",
		"orange": "18",
		"red": "4"
	},
	{
		"id": "11",
		"statename": "Maharashtra (MH)",
		"green": "1",
		"yellow": "15",
		"orange": "33",
		"red": "4"
	},
	{
		"id": "12",
		"statename": "Tamil Nadu (TN)",
		"green": "2",
		"yellow": "22",
		"orange": "23",
		"red": "1"
	},
	{
		"id": "13",
		"statename": "Karnataka (KA)",
		"green": "1",
		"yellow": "16",
		"orange": "18",
		"red": "7"
	},
	{
		"id": "14",
		"statename": "Uttarakhand (UK)",
		"green": "2",
		"yellow": "10",
		"orange": "18",
		"red": "10"
	},
	{
		"id": "15",
		"statename": "Kerala (KL)",
		"green": "2",
		"yellow": "12",
		"orange": "15",
		"red": "5"
	},
	{
		"id": "16",
		"statename": "Telangana (TG)",
		"green": "2",
		"yellow": "9",
		"orange": "18",
		"red": "4"
	},
	{
		"id": "17",
		"statename": "Bihar (BR)",
		"green": "2",
		"yellow": "3",
		"orange": "6",
		"red": "0"
	},
	{
		"id": "18",
		"statename": "West Bengal (WB)",
		"green": "0",
		"yellow": "0",
		"orange": "14",
		"red": "2"
	},
	{
		"id": "19",
		"statename": "Gujarat (GJ)",
		"green": "0",
		"yellow": "3",
		"orange": "13",
		"red": "2"
	},
	{
		"id": "20",
		"statename": "Assam (AS)",
		"green": "0",
		"yellow": "4",
		"orange": "9",
		"red": "4"
	},
	{
		"id": "21",
		"statename": "Jammu and Kashmir (JK)",
		"green": "0",
		"yellow": "3",
		"orange": "20",
		"red": "4"
	},
	{
		"id": "22",
		"statename": "Chhattisgarh (CG)",
		"green": "0",
		"yellow": "10",
		"orange": "28",
		"red": "4"
	},
	{
		"id": "23",
		"statename": "Jharkhand (JH)",
		"green": "1",
		"yellow": "2",
		"orange": "5",
		"red": "0"
	},
	{
		"id": "24",
		"statename": "Chandigarh (CH)",
		"green": "0",
		"yellow": "2",
		"orange": "2",
		"red": "2"
	},
	{
		"id": "25",
		"statename": "Goa (GA)",
		"green": "0",
		"yellow": "2",
		"orange": "1",
		"red": "0"
	},
	{
		"id": "26",
		"statename": "Tripura (TR)",
		"green": "0",
		"yellow": "0",
		"orange": "3",
		"red": "2"
	},
	{
		"statename": "Arunachal Pradesh (AR)",
		"green": "0",
		"yellow": "0",
		"orange": "0",
		"red": "1"
	},
	{
		"id": "27",
		"statename": "Manipur (MN)",
		"green": "0",
		"yellow": "0",
		"orange": "3",
		"red": "0"
	},
	{
		"id": "28",
		"statename": "Mizoram (MZ)",
		"green": "0",
		"yellow": "0",
		"orange": "3",
		"red": "2"
	},
	{
		"id": "29",
		"statename": "Meghalaya (ML)",
		"green": "0",
		"yellow": "1",
		"orange": "2",
		"red": "0"
	},
	{
		"id": "30",
		"statename": "Andaman and Nicobar (AN)",
		"green": "0",
		"yellow": "0",
		"orange": "0",
		"red": "0"
	},
	{
		"id": "31",
		"statename": "Nagaland (NL)",
		"green": "0",
		"yellow": "0",
		"orange": "0",
		"red": "0"
	},
	{
		"id": "32",
		"statename": "Puducherry (PY)",
		"green": "0",
		"yellow": "0",
		"orange": "0",
		"red": "0"
	},
	{
		"id": "33",
		"statename": "Dadra and Nagar Haveli (DN)",
		"green": "0",
		"yellow": "0",
		"orange": "0",
		"red": "0"
	}
];
$(document).ready(function(){
  /* $.getJSON( "<?php echo base_url(); ?>assets/state-data.json", function( data ) {*/
    $.each(state, function( key, val ) {
     $("#stateList").append("<option value="+val['id']+">"+val['statename']+"</option>")
     //console.log(val);
     });
	 
	 $.each(state, function( key, val ) {
     $("#stateList2").append("<option value="+val['id']+">"+val['statename']+"</option>")
     //console.log(val);
     });
    /*});*/
 });
 
$("#stateParticipation").click(function(){
        var q=$("#stateList").val();
        /*$.getJSON("<?php echo base_url(); ?>assets/state-performance-data.json", function(data){ */
            $.each(state, function(i, val) {
                if (val.id===q) {
        Highcharts.chart('container',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: val['statename']+' Schools Performance'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools ({point.percentage:.1f}%)</b>'
            },
                    exporting: { enabled: false },
            credits: {enabled: false},
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                         enabled: true,
						 format: '{point.name}<br/><b>{point.y} Schools ({point.percentage:.1f}%)</b>',
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: '70% and above',color:'#00ae4f',y: parseInt(val['green'])}, {name: 'Between 50% to 69.9%',color:'#fcfc00',y: parseInt(val['yellow'])}, {name: 'Between 35% to 49.9%',color:'#fc9700',y: parseInt(val['orange'])}, {name: 'Between 0% to 34.9%',color:'#fc3300',y: parseInt(val['red'])}]
            }]
        });
		}
		/*});*/
     });
  })
  
  $("#stateParticipation").click(function(){
        var q=$("#stateList2").val();
        /*$.getJSON("<?php echo base_url(); ?>assets/state-performance-data.json", function(data){ */
            $.each(state, function(i, val) {
                if (val.id===q) {
        Highcharts.chart('container2',{
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: val['statename']+' Schools Performance'
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools ({point.percentage:.1f}%)</b>'
            },
                    exporting: { enabled: false },
            credits: {enabled: false},
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                         enabled: true,
						 format: '{point.name}<br/><b>{point.y} Schools ({point.percentage:.1f}%)</b>',
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: '70% and above',color:'#00ae4f',y: parseInt(val['green'])}, {name: 'Between 50% to 69.9%',color:'#fcfc00',y: parseInt(val['yellow'])}, {name: 'Between 35% to 49.9%',color:'#fc9700',y: parseInt(val['orange'])}, {name: 'Between 0% to 34.9%',color:'#fc3300',y: parseInt(val['red'])}]
            }]
        });
		}
		/*});*/
     });
  })
		</script>
