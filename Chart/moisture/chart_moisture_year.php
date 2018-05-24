
<center><div id="chart_year2" style="width:1400px;"></div></center>

<script type="text/javascript">
Highcharts.chart('chart_year2', {
  title: {
      text: 'กราฟความชื้นสรุปรวมรายปี'
  },
  xAxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
  },

  yAxis: {
      title: {
          text: 'ความชื้นสัมพันธ์'
      }
  },
  series: [
  {
      type: 'spline',
      name: 'เฉลี่ยปี 2557',
      data: [<?=$data1[0];?>,<?=$data1[1];?>,<?=$data1[2];?>,
      <?=$data1[3];?>,<?=$data1[4];?>,<?=$data1[5];?>,
      <?=$data1[6];?>,<?=$data1[7];?>,<?=$data1[8];?>,
      <?=$data1[9];?>,<?=$data1[10];?>,<?=$data1[11];?>,
    ],
      marker: {
          lineWidth: 2,
          lineColor: Highcharts.getOptions().colors[1],
          fillColor: 'white'
      }
  },
  {
      type: 'spline',
      name: 'เฉลี่ยปี 2558',
      data: [<?=$data2[0];?>,<?=$data2[1];?>,<?=$data2[2];?>,
      <?=$data2[3];?>,<?=$data2[4];?>,<?=$data2[5];?>,
      <?=$data2[6];?>,<?=$data2[7];?>,<?=$data2[8];?>,
      <?=$data2[9];?>,<?=$data2[10];?>,<?=$data2[11];?>,
    ],
      marker: {
          lineWidth: 2,
          lineColor: Highcharts.getOptions().colors[2],
          fillColor: 'white'
      }
  },
  {
      type: 'spline',
      name: 'เฉลี่ยปี 2559',
      data: [<?=$data3[0];?>,<?=$data3[1];?>,<?=$data3[2];?>,
      <?=$data3[3];?>,<?=$data3[4];?>,<?=$data3[5];?>,
      <?=$data3[6];?>,<?=$data3[7];?>,<?=$data3[8];?>,
      <?=$data3[9];?>,<?=$data3[10];?>,<?=$data3[11];?>,
    ],
      marker: {
          lineWidth: 2,
          lineColor: Highcharts.getOptions().colors[3],
          fillColor: 'white'
      }
  }]
});
</script>
