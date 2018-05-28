
<center><div id="chart_month"></div></center>

<script type="text/javascript">
Highcharts.chart('chart_month', {
  title: {
      text: 'กราฟรวมสรุปรายเดือน <?php echo $month; ?>'
  },
  xAxis: {
      categories: [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31]
  },

  yAxis: {
      title: {
          text: 'ชั่โมง'
      }
  },
  labels: {
      items: [{
          html: 'จำนวน ชั่วโมงทั้งหมด',
          style: {
              left: '50px',
              top: '18px',
              color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
          }
      }]
  },
  series: [
  {
      type: 'spline',
      name: 'อุณหภูมิ',
      data: [<?= $data[0]; ?>,<?= $data[1]; ?>,<?= $data[2]; ?>,
      <?= $data[3]; ?>,<?= $data[4]; ?>,<?= $data[5]; ?>,
      <?= $data[6]; ?>,<?= $data[7]; ?>,<?= $data[8]; ?>,
      <?= $data[9]; ?>,<?= $data[10]; ?>,<?= $data[11]; ?>,
      ],
      marker: {
          lineWidth: 2,
          lineColor: Highcharts.getOptions().colors[1],
          fillColor: 'white'
      }
  }]
});
</script>
