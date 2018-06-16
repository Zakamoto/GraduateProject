
<center><div id="chart_cassava" style="width:1400px;"></div></center>

<script type="text/javascript">
        <?php
        include "../../get_data.php";
        $data = get_chart_cassava();
        ?>
        Highcharts.chart('chart_cassava', {
          title: {
              text: 'ข้อมูลเฉลี่ยผลผลิตต่อเนื้อที่เก็บเกี่ยว ปี 2557 - 2559'
          },
          xAxis: {
              categories: [
                            <?php for($i=0;$i<25;$i++){ ?>
                              <?= json_encode($data[$i][0]['Name']); ?>,
                            <?php } ?>
                          ]
          },

          yAxis: {
              title: {
                  text: 'กิโลกรัม'
              }
          },
          series: [
          {
              type: 'spline',
              name: 'กิโลกรัม',
              data: [
                      <?php for($i=0;$i<25;$i++){ ?>
                        <?= $data[$i][0]['Sum']; ?>,
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
