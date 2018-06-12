
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
          text: 'องศา/เซลเซียส'
      }
  },
  series: [
  {
      type: 'column',
      name: 'วันที่',
      data: [
          <?php 
            if($month==1||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12)
            $dataSort = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
            else if($month==2)
            $dataSort = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
            else
            $dataSort = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
            
            for ($i = 0; $i < sizeof($data); $i++) {
                $dataSort[$data[$i]['Date']] = $data[$i]['TC'];
            }
            if($month==1||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12)
                for($i=0;$i<31;$i++){ ?>
                    <?= $dataSort[$i] ?>,
                <?php } 
            else if($month==2)
                for($i=0;$i<28;$i++){ ?>
                    <?= $dataSort[$i] ?>,
                <?php }
            else
                for($i=0;$i<30;$i++){ ?>
                    <?= $dataSort[$i] ?>,
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
