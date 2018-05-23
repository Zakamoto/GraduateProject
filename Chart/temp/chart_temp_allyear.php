
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
      data: [1,2,3,4,5,6,7,8,9,10,11,12,13],
      marker: {
          lineWidth: 2,
          lineColor: Highcharts.getOptions().colors[1],
          fillColor: 'white'
      }
  },
  {
      type: 'spline',
      name: 'เฉลี่ยปี 2558',
      data: [2,3,4,5,6,7,8,9,10,11,12,13,14],
      marker: {
          lineWidth: 2,
          lineColor: Highcharts.getOptions().colors[2],
          fillColor: 'white'
      }
  },
  {
      type: 'spline',
      name: 'เฉลี่ยปี 2559',
      data: [3,4,5,6,7,8,9,10,11,12,13,14,15],
      marker: {
          lineWidth: 2,
          lineColor: Highcharts.getOptions().colors[3],
          fillColor: 'white'
      }
  }]
});
</script>
