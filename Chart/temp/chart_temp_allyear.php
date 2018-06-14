<center><div id="chart_year" style="width:1400px;"></div></center>
<?php
include "../../get_data.php";
$place = $_POST['place'];
$year = $_POST['year'];
$data = get_year_place($place,$year);
?>
<script type="text/javascript">
Highcharts.chart('chart_year', {
  title: {
      text: 'กราฟรวมสรุปรายปี'
  },
  xAxis: {
      categories: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม'
      ,'มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พศจิกายน','ธันวาคม']
  },

  yAxis: {
      title: {
          text: 'องศา'
      }
  },
  series: [
  {
      type: 'column',
      name: 'เฉลี่ยปี 2561',
      data: [
        <?php
            for ($i = 1,$sum = 0; $i <= 12; $i++,$sum = 0) {
                for ($x= 0; $x < sizeof($data);$x++) {
                    if ($data[$x]['Month'] == $i)
                    $sum += $data[$x]['TC'];
                }
                ?>
                <?= $sum; ?>,
        <?php
            }
        ?>
      ],
      marker: {
          lineWidth: 2,
          lineColor: Highcharts.getOptions().colors[1],
          fillColor: 'white'
      }
  }]
});
</script>
