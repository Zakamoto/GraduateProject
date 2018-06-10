
<center><div id="chart_rice" style="width:1500px;"></div></center>

<script type="text/javascript">
        <?php
        include "../../get_data.php";
        $data = get_dataAll();
        ?>
        Highcharts.chart('chart_rice', {
          title: {
              text: 'กราฟแสดงอุณหภูมิ'
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
                  text: 'อุณหภูมิ'
              }
          },
          series: [
          {
              type: 'spline',
              name: 'column',
              data: [
                      <?php for($i=0;$i<sizeof($data);$i++){ ?>
                        <?= $data[$i]['TC']; ?>,
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
