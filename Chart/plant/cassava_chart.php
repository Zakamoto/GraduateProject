
<center><div id="chart_cassava" style="width:1500px;"></div></center>

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
                            <?php for($i=0;$i<sizeof($data);$i++){ ?>
                              <?= json_encode($data[$i]['Name']); ?>,
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
                      <?php for($i=0;$i<sizeof($data);$i++){ ?>
                        <?= $data[$i]['Sum']; ?>,
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
