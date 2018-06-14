
<center><div id="chart_sugarcane" style="width:1500px;"></div></center>

<script type="text/javascript">
        <?php
        include "../../get_data.php";
        $data = get_chart_sugarcane();
        ?>
        Highcharts.chart('chart_sugarcane', {
          title: {
              text: 'ข้อมูลเฉลี่ยผลผลิตต่อไร่ ปี 2557 - 2559'
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
                  text: 'ตัน/ไร่'
              }
          },
          series: [
          {
              type: 'spline',
              name: 'ตัน',
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
