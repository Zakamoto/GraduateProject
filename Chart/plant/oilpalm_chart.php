
<center><div id="chart_oilpalm" style="width:1400px;"></div></center>

<script type="text/javascript">
        <?php
        include "../../get_data.php";
        $data = get_chart_oilplam();
        ?>
        Highcharts.chart('chart_oilpalm', {
          title: {
              text: 'ข้อมูลเฉลี่ยผลผลิตต่อเนื้อที่ให้ผล ปี 2557 - 2559'
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
              name: 'ค่าเฉลี่ยทุกปี',
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
          },
          {
              type: 'spline',
              name: 'ผลผลิตต่อไร่ 2557',
              data: [
                      <?php for($i=0;$i<25;$i++){ ?>
                        <?= get_history_plam($data[$i][0]['Name'],2557); ?>,
                      <?php } ?>
                    ],
              marker: {
                  lineWidth: 2,
                  lineColor: Highcharts.getOptions().colors[2],
                  fillColor: 'white'
              }
          },
          {
              type: 'spline',
              name: 'ผลผลิตต่อไร่ 2558',
              data: [
                      <?php for($i=0;$i<25;$i++){ ?>
                        <?= get_history_plam($data[$i][0]['Name'],2558); ?>,
                      <?php } ?>
                    ],
              marker: {
                  lineWidth: 2,
                  lineColor: Highcharts.getOptions().colors[3],
                  fillColor: 'white'
              }
          },
          {
              type: 'spline',
              name: 'ผลผลิตต่อไร่ 2559',
              data: [
                      <?php for($i=0;$i<25;$i++){ ?>
                        <?= get_history_plam($data[$i][0]['Name'],2559); ?>,
                      <?php } ?>
                    ],
              marker: {
                  lineWidth: 2,
                  lineColor: Highcharts.getOptions().colors[4],
                  fillColor: 'white'
              }
          }
        ]
        });
</script>
