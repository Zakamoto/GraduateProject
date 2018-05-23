
<center><div id="chart_3hour" style="width:1400px;"></div></center>

<script type="text/javascript">
$.ajax({
    url: 'getxml.php',   // เรียกไฟล์ชือ getxml.php
    data: {
      format: 'json'    // รูปแบบข้อมูล เป็น json
    },
    error: function() {
      alert("ไม่สามารถดึงข้อมูลได้");  // ถ้า error
    },
    dataType: 'json',    // ชนิดข้อมูล json
      success: function(data) {    // การทำงานลังจาก load ข้อมูลทั้งหมดมาแล้ว
        var temp_value = [];
        var set_x = [];
        var time = data.Header['LastBuiltDate'];
        console.log(time);
        for(var i = 0; i < data.Stations.length ; i++){
          set_x[i] = data.Stations[i]['Province'];
          temp_value[i] = data.Stations[i]['Observe']['Temperature']['Value'];
        }
        Highcharts.chart('chart_3hour', {
          title: {
              text: 'กราฟแสดงอุณหภูมิประจำวันเวลา'+time
          },
          xAxis: {
              categories: set_x
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
              data: temp_value,
              marker: {
                  lineWidth: 2,
                  lineColor: Highcharts.getOptions().colors[1],
                  fillColor: 'white'
              }
          }]
        });
},
type: 'GET'
});
</script>
