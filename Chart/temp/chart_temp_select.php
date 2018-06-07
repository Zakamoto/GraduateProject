
<center><div id="chart_3hour_select1" style="width:1400px;"></div></center>

<script type="text/javascript">
        Highcharts.chart('chart_3hour_select1', {
          title: {
              text: 'กราฟแสดงความชื้นประจำวันเวลา'+time
          },
          xAxis: {
              categories: set_x
          },

          yAxis: {
              title: {
                  text: 'ความชื้นสัมพันธ์'
              }
          },
          series: [
          {
              type: 'spline',
              name: 'ความชื้นสัมพันธ์',
              data: <?php for($i){ $data[$i]; } ?>,
              marker: {
                  lineWidth: 2,
                  lineColor: Highcharts.getOptions().colors[1],
                  fillColor: 'white'
              }
          }]
        });
});
</script>
