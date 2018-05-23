
<center><div id="chart_year" style="width:1400px;"></div></center>

<script type="text/javascript">
Highcharts.chart('chart_year', {
  title: {
      text: 'กราฟรวมสรุปรายปี'
  },
  xAxis: {
      categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May','Jun','Jul','Aug','Sep','Oct','Nov','Dec']
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
      name: 'เฉลี่ยปี 2557',
      data: [<?=$data[0];?>,<?=$data[1];?>,<?=$data[2];?>,
      <?=$data[3];?>,<?=$data[4];?>,<?=$data[5];?>,
      <?=$data[6];?>,<?=$data[7];?>,<?=$data[8];?>,
      <?=$data[9];?>,<?=$data[10];?>,<?=$data[11];?>,
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
      data: [<?=$data[0]+1;?>,<?=$data[1]+1;?>,<?=$data[2]+1;?>,
      <?=$data[3]+1;?>,<?=$data[4]+1;?>,<?=$data[5]+1;?>,
      <?=$data[6]+1;?>,<?=$data[7]+1;?>,<?=$data[8]+1;?>,
      <?=$data[9]+1;?>,<?=$data[10]+1;?>,<?=$data[11]+1;?>,
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
      data: [<?=$data[0]+2;?>,<?=$data[1]+2;?>,<?=$data[2]+2;?>,
      <?=$data[3]+2;?>,<?=$data[4]+2;?>,<?=$data[5]+2;?>,
      <?=$data[6]+2;?>,<?=$data[7]+2;?>,<?=$data[8]+2;?>,
      <?=$data[9]+2;?>,<?=$data[10]+2;?>,<?=$data[11]+2;?>,
    ],
      marker: {
          lineWidth: 2,
          lineColor: Highcharts.getOptions().colors[3],
          fillColor: 'white'
      }
  }]
});
</script>
