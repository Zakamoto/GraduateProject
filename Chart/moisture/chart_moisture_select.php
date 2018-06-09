
<center><div id="chart_3hour_select2" style="width:1400px;"></div></center>

<script type="text/javascript">
        Highcharts.chart('chart_3hour_select2', {
          title: {
              text: 'กราฟแสดงความชื้น'
          },
          xAxis: {
              categories: [1,2,3,4,5]
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
              data: [<?= $data[0]['RH']; ?>,<?= $data[1]['RH']; ?>,<?= $data[2]['RH']; ?>,
              <?= $data[3]['RH']; ?>,<?= $data[4]['RH']; ?>
            ],
              marker: {
                  lineWidth: 2,
                  lineColor: Highcharts.getOptions().colors[1],
                  fillColor: 'white'
              }
          }]
        });
</script>
