
<center><div id="chart_3hour_select1" style="width:1400px;"></div></center>

<script type="text/javascript">
        Highcharts.chart('chart_3hour_select1', {
          title: {
              text: 'กราฟแสดงอุณหภูมิ'
          },
          xAxis: {
              categories: [
                            <?php for($i=0;$i<24;$i++){ ?>
                              <?= $i ?>,
                            <?php } ?>
                          ]
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
              data: [
                      <?php 
                      $dataSort = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
                      for ($i = 0; $i < sizeof($data); $i++) {
                        $dataSort[$data[$i]['Time']] = $data[$i]['RH'];
                      }
                        for($i=0;$i<24;$i++){ ?>
                              <?= $dataSort[$i] ?>,
                        <?php } ?>
                    ],
              marker: {
                  lineWidth: 2,
                  lineColor: Highcharts.getOptions().colors[1],
                  fillColor: 'white'
              }
          }]
        });
</script>
