
<center><div id="chart_year2" style="width:1400px;"></div></center>

<script type="text/javascript">
<?php
include "../../get_data.php";
$place = $_POST['place'];
$year = $_POST['year'];
$data = get_year_place($place,$year);
?>
Highcharts.chart('chart_year2', {
  title: {
      text: 'กราฟความชื้นสรุปรวมรายปี'
  },
  xAxis: {
      categories: ['มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม'
      ,'มิถุนายน','กรกฎาคม','สิงหาคม','กันยายน','ตุลาคม','พศจิกายน','ธันวาคม']
  },

  yAxis: {
      title: {
          text: 'ความชื้นสัมพันธ์'
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
              $sum += $data[$x]['RH'];
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
