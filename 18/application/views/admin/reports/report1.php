<h1>PARTICIPATION BY ZONE </h1>
<div class="wrapper">
  <div id="container"> </div>
  <p><strong>Export Graph:</strong></p>
  <select id="ExportOption" style="border-radius:0px;">
    <option value="PNG">PNG Image</option>
    <option value="JPEG">JPEG Image</option>
    <option value="PDF">PDF Document</option>
    <option value="SVG">SVG Vector Image</option>
  </select>
  <button id="buttonExport" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Export chart</button>
  <button id="buttonPrint" class="btn btn-danger" style="background: #e86549 !important; border:1px solid #e86549; border-radius:0px;">Print chart</button>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script type="text/javascript">
  var chart= Highcharts.chart('container',{
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
// the button handler    
    $('#buttonExport').click(function() {
        var e = document.getElementById("ExportOption");
        var ExportAs = e.options[e.selectedIndex].value;   
        
        if(ExportAs == 'PNG')
        {
            chart.exportChart({type: 'image/png', filename: 'my-png'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'JPEG')
        {
            chart.exportChart({type: 'image/jpeg', filename: 'my-jpg'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'PDF')
        {
            chart.exportChart({type: 'application/pdf', filename: 'my-pdf'}, {subtitle: {text:''}});
        }
        if(ExportAs == 'SVG')
        {
            chart.exportChart({type: 'image/svg+xml', filename: 'my-svg'}, {subtitle: {text:''}});
        }
    }); 

    $('#buttonPrint').click(function() {
        chart.setTitle(null, { text: ' ' });
        chart.print();
        chart.setTitle(null, { text: 'Click and drag in the plot area to zoom in' });
    });
</script>
