
<center><div id="chart_3hour_select1" style="width:1400px;"></div></center>

<script type="text/javascript">
        Highcharts.chart('chart_3hour_select1', {
          title: {
              text: 'กราฟแสดงอุณหภูมิ'
          },
          xAxis: {
              categories: [1,2,3,4,5]
          },

          yAxis: {
              title: {
                  text: 'อุณหภูมิ'
              }
          },
          series: [
          {
              type: 'spline',
              name: 'อุณหภูมิ',
              data: [<?= $data[0]['TC']; ?>,<?= $data[1]['TC']; ?>,<?= $data[2]['TC']; ?>,
              <?= $data[3]['TC']; ?>,<?= $data[4]['TC']; ?>
            ],
              marker: {
                  lineWidth: 2,
                  lineColor: Highcharts.getOptions().colors[1],
                  fillColor: 'white'
              }
          }]
        });
</script>
