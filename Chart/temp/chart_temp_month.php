
<center><div id="chart_month" style="width:1400px;"></div></center>
<script type="text/javascript">

<?php

if($month==1){$nameM="มกราคม";}
else if($month==2){$nameM="กุมภาพันธ์";}
else if($month==3){$nameM="มีนาคม";}
else if($month==4){$nameM="เมษายน";}
else if($month==5){$nameM="พฤษภาคม";}
else if($month==6){$nameM="มิถุนายน";}
else if($month==7){$nameM="กรกฎาคม";}
else if($month==8){$nameM="สิงหาคม";}
else if($month==9){$nameM="กันยายน";}
else if($month==10){$nameM="ตุลาคม";}
else if($month==11){$nameM="พฤศจิกายน";}
else{$nameM="ธันวาคม";}

?>


Highcharts.chart('chart_month', {
  title: {
      text: 'กราฟรวมสรุปรายเดือน <?php echo $nameM; ?>'
  },
  xAxis: {
      categories: [<?php for($i=1;$i<=$date_in_month;$i++){ ?><?=$i?>,<?php }?>]
  },

  yAxis: {
      title: {
          text: 'ชั่วโมง'
      }
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
