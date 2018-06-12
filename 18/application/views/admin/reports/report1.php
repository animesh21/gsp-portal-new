<h1>PARTICIPATION BY ZONE </h1>
  <div class="wrapper">
    <div id="container"> </div>
  </div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
    Highcharts.chart('container',{
        chart: {
            type: 'column'
        },
        title: {
            text: 'Schools Participation Report'
        },
        xAxis: {
            categories: [
                'North',
                'South',
                'East',
                'West',
                'North East',
                'Central'
            ],
            crosshair: true
        },
        exporting: { enabled: false },
        credits: {enabled: false},
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0;font-size:12px;">{series.name}: </td>' +
                '<td style="padding:0;font-size:12px;">{point.y:.1f}</td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Registered for Audit',
            data: <?php echo json_encode($audit_register); ?> //NORTH
            //Registration, Audit Started, Audit Completed, Feedback Recieved
        }, {
            name: 'Audit Started',
            data: <?php echo json_encode($audit_start); ?> //South

        }, {
            name: 'Audit Completed',
            data: <?php echo json_encode($audit_complete); ?> //East

        }		
		],
});
</script>
