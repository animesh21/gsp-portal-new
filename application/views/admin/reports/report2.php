<h1>PARTICIPATION BY STATE</h1>
<div class="wrapper" style="padding:0px;">
  <div class="container">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
      <label for="pwd">Select First State :</label>
      <select class="form-control" id="stateList">
        <option value="">Select State</option>
      </select>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><br/>
      <input type="button" class="btn" style="background-color: rgb(232, 101, 73); color: #fff;" value="Show" name="compare" id="stateParticipation" >
    </div>
  </div>
</div>
<div class="wrapper">
  <div id="container"> </div>
</div>
<script type="text/javascript">
var state= [
   {
       "id":"1",
       "statename":"Andhra Pradesh (AP)",
	   "totalregisteration":"549",
	   "auditcomplete":"169",
	   "auditstartbutnotcomplete":"164",
	   "registerbutnotstart":"216"
   },
   {
       "id":"2",
       "statename":"Punjab (PB)",
	   "totalregisteration":"305",
	   "auditcomplete":"78",
	   "auditstartbutnotcomplete":"60",
	   "registerbutnotstart":"167"
   },
   {
       "id":"3",
       "statename":"Himachal Pradesh (HP)",
	   "totalregisteration":"268",
	   "auditcomplete":"133",
	   "auditstartbutnotcomplete":"53",
	   "registerbutnotstart":"82"
   },
   {
       "id":"4", 
       "statename":"Uttar Pradesh (UP)",
	   "totalregisteration":"183",
	   "auditcomplete":"104",
	   "auditstartbutnotcomplete":"28",
	   "registerbutnotstart":"51"
   },
   {
       "id":"5", 
       "statename":"Sikkim (SK)",
	   "totalregisteration":"164",
	   "auditcomplete":"63",
	   "auditstartbutnotcomplete":"22",
	   "registerbutnotstart":"79"
   },
   {
       "id":"6",
       "statename":"Rajasthan (RJ)",
	   "totalregisteration":"147",
	   "auditcomplete":"86",
	   "auditstartbutnotcomplete":"17",
	   "registerbutnotstart":"44"
   },
   {
       "id":"7", 
       "statename":"Odisha (OD)",
	   "totalregisteration":"144",
	   "auditcomplete":"18",
	   "auditstartbutnotcomplete":"24",
	   "registerbutnotstart":"102"
   },
   {
       "id":"8", 
       "statename":"Madhya Pradesh (MP)",
	   "totalregisteration":"116",
	   "auditcomplete":"56",
	   "auditstartbutnotcomplete":"20",
	   "registerbutnotstart":"40"
   },
   {
       "id":"9",
       "statename":"Delhi (DL)",
	   "totalregisteration":"114",
	   "auditcomplete":"49",
	   "auditstartbutnotcomplete":"9",
	   "registerbutnotstart":"56"
   },
   {
       "id":"10",
       "statename":"Haryana (HR)",
	   "totalregisteration":"111",
	   "auditcomplete":"45",
	   "auditstartbutnotcomplete":"14",
	   "registerbutnotstart":"52"
   },
   {
       "id":"11", 
       "statename":"Maharashtra (MH)",
	   "totalregisteration":"99",
	   "auditcomplete":"53",
	   "auditstartbutnotcomplete":"14",
	   "registerbutnotstart":"32"
   },
   {
       "id":"12",
       "statename":"Tamil Nadu (TN)",
	   "totalregisteration":"94",
	   "auditcomplete":"48",
	   "auditstartbutnotcomplete":"19",
	   "registerbutnotstart":"27"
   },
   {
       "id":"13", 
       "statename":"Karnataka (KA)",
	   "totalregisteration":"64",
	   "auditcomplete":"41",
	   "auditstartbutnotcomplete":"8",
	   "registerbutnotstart":"15"
   },
   {
       "id":"14",
       "statename":"Uttarakhand (UK)",
	   "totalregisteration":"63",
	   "auditcomplete":"40",
	   "auditstartbutnotcomplete":"13",
	   "registerbutnotstart":"10"
   },
   {
       "id":"15",  
       "statename":"Kerala (KL)",
	   "totalregisteration":"61",
	   "auditcomplete":"34",
	   "auditstartbutnotcomplete":"12",
	   "registerbutnotstart":"15"
   },
   {
       "id":"16", 
       "statename":"Telangana (TG)",
	   "totalregisteration":"56",
	   "auditcomplete":"33",
	   "auditstartbutnotcomplete":"5",
	   "registerbutnotstart":"18"
   },
   {
       "id":"17", 
       "statename":"Bihar (BR)",
	   "totalregisteration":"46",
	   "auditcomplete":"11",
	   "auditstartbutnotcomplete":"21",
	   "registerbutnotstart":"14"
   },
   {
       "id":"18",
       "statename":"West Bengal (WB)",
	   "totalregisteration":"46",
	   "auditcomplete":"16",
	   "auditstartbutnotcomplete":"12",
	   "registerbutnotstart":"18"
   },
   {
       "id":"19", 
       "statename":"Gujarat (GJ)",
	   "totalregisteration":"43",
	   "auditcomplete":"18",
	   "auditstartbutnotcomplete":"10",
	   "registerbutnotstart":"15"
   },
   {
       "id":"20", 
       "statename":"Assam (AS)",
	   "totalregisteration":"40",
	   "auditcomplete":"17",
	   "auditstartbutnotcomplete":"7",
	   "registerbutnotstart":"16"
   },
   {
       "id":"21", 
       "statename":"Jammu and Kashmir (JK)",

	   "totalregisteration":"36",
	   "auditcomplete":"27",
	   "auditstartbutnotcomplete":"3",
	   "registerbutnotstart":"6"
   },
   {
       "id":"22", 
       "statename":"Chhattisgarh (CG)",
	   "totalregisteration":"27",
	   "auditcomplete":"15",
	   "auditstartbutnotcomplete":"3",
	   "registerbutnotstart":"9"
   },
   {
       "id":"23", 
       "statename":"Jharkhand (JH)",
	   "totalregisteration":"23",
	   "auditcomplete":"8",
	   "auditstartbutnotcomplete":"4",
	   "registerbutnotstart":"11"
   },
   {
       "id":"24", 
       "statename":"Chandigarh (CH)",
	   "totalregisteration":"10",
	   "auditcomplete":"6",
	   "auditstartbutnotcomplete":"1",
	   "registerbutnotstart":"3"
   },
   {
       "id":"25",  
       "statename":"Goa (GA)",
	   "totalregisteration":"10",
	   "auditcomplete":"3",
	   "auditstartbutnotcomplete":"4",
	   "registerbutnotstart":"3"
   },
   {
       "id":"26",
       "statename":"Tripura (TR)",
	   "totalregisteration":"10",
	   "auditcomplete":"5",
	   "auditstartbutnotcomplete":"2",
	   "registerbutnotstart":"3"
   },
   {
       "id":"27",
       "statename":"Arunachal Pradesh (AR)",
	   "totalregisteration":"8",
	   "auditcomplete":"1",
	   "auditstartbutnotcomplete":"5",
	   "registerbutnotstart":"2"
   },
   {
       "id":"28",
       "statename":"Manipur (MN)",
	   "totalregisteration":"8",
	   "auditcomplete":"3",
	   "auditstartbutnotcomplete":"1",
	   "registerbutnotstart":"4"
   },
   {
       "id":"29",
       "statename":"Mizoram (MZ)",
	   "totalregisteration":"6",
	   "auditcomplete":"5",
	   "auditstartbutnotcomplete":"0",
	   "registerbutnotstart":"1"
   },
   {
       "id":"30",
       "statename":"Meghalaya (ML)",
	   "totalregisteration":"5",
	   "auditcomplete":"3",
	   "auditstartbutnotcomplete":"1",
	   "registerbutnotstart":"1"
   },
   {
       "id":"31",
       "statename":"Andaman and Nicobar (AN)",
	   "totalregisteration":"2",
	   "auditcomplete":"0",
	   "auditstartbutnotcomplete":"0",
	   "registerbutnotstart":"2"
   },
   {
       "id":"32",
       "statename":"Nagaland (NL)",
	   "totalregisteration":"2",
	   "auditcomplete":"",
	   "auditstartbutnotcomplete":"1",
	   "registerbutnotstart":"1"
   },
   {
       "id":"33",
       "statename":"Puducherry (PY)",
	   "totalregisteration":"2",
	   "auditcomplete":"0",
	   "auditstartbutnotcomplete":"1",
	   "registerbutnotstart":"1"
   },
   {
       "id":"34", 
       "statename":"Dadra and Nagar Haveli (DN)",
	   "totalregisteration":"1",
	   "auditcomplete":"0",
	   "auditstartbutnotcomplete":"1",
	   "registerbutnotstart":"1"
   }
];

 $(document).ready(function(){
   /*$.getJSON("<?php echo base_url(); ?>assets/state-data.json", function( data ) {*/
    $.each(state, function( key, val ) {
     $("#stateList").append("<option value="+val['id']+">"+val['statename']+"</option>")
     //console.log(val);
     });
   /* });*/
 });/*
$("#stateParticipation").click(function(){
        var q=$("#stateList").val();
        $.getJSON("<?php echo base_url(); ?>assets/state-data.json", function(data){ 
            $.each(data, function(i, item) {
                if (item.id===q) {
					alert(item.statename + " " + item.totalregisteration + " " + item.auditcomplete);
                }
            });
        });
    });*/
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
$("#stateParticipation").click(function(){
        var q=$("#stateList").val();
        /*$.getJSON("<?php echo base_url(); ?>assets/state-data.json", function(data){ */
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
                text: 'Participation Chart for'+val['statename']
            },
            tooltip: {
                pointFormat: '<b>{point.y} Schools</b>'
            },
                    exporting: { enabled: false },
        credits: {enabled: false},    
        plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
						 format: '{point.name}<br/><b> {point.y} Schools</b>',						  
                    },
                    showInLegend: true
                }
            },
            series: [{
                colorByPoint: true,
                data: [{name: 'Registered for Audit', y: parseInt(val['totalregisteration']) }, {name: 'Audit Not Started', y: parseInt(val['registerbutnotstart']) },{name: 'Audit Started', y: parseInt(val['auditstartbutnotcomplete']) }, {name: 'Audit Completed', y: parseInt(val['auditcomplete']) }]
            }]
        });
 }
          /*  });*/
        });
    })
		</script>
