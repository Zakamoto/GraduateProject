<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
<link href="css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" media="all">


<?php

  $start = $page;

 ?>

<html>
  <body>
<div class="header"><center><h1>ตารางข้อมูล ปาล์มน้ำมัน</h1></center></div>
<center>
  <div class="content">
  <div id="table1" style="max-width: 800px">
    <table class="ui celled table" style="width:100%">
      <thead  style="background-color:green;">
          <th>ลำดับ</th>
          <th>จังหวัด</th>
          <th>ผลผลิต 2557 (กิโลกรัม)</th>
          <th>ผลผลิต 2558 (กิโลกรัม)</th>
          <th>ผลผลิต 2559 (กิโลกรัม)</th>
          <th>ผลผลิต (กิโลกรัม)</th>
        </tr>
      </thead>

      <tbody>
            <?php
            switch ($start) {
              case "0":
              case "1": {
                for($i=0;$i<10;$i++){ ?>
                  <tr>
                  <td><p align="center"><?php echo ($i+1); ?></p></td>
                  <td><?php echo $data[$i][0]['Name']; ?></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2557),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2558),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2559),2,'.',','); ?></p></td>
                  <td style="background-color:#58D68D;"><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ','); ?></p></td>
                </tr>
        <?php
              }
              break;
            }
              case "2": {
                for($i=10;$i<20;$i++){ ?>
                  <tr>
                  <td><p align="center"><?php echo ($i+1); ?></p></td>
                  <td><?php echo $data[$i][0]['Name']; ?></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2557),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2558),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2559),2,'.',','); ?></p></td>
                  <td style="background-color:#58D68D;"><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ','); ?></p></td>
                </tr>
        <?php
              }
              break;
            }
              case "3": {
                for($i=20;$i<30;$i++){ ?>
                  <tr>
                  <td><p align="center"><?php echo ($i+1); ?></p></td>
                  <td><?php echo $data[$i][0]['Name']; ?></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2557),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2558),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2559),2,'.',','); ?></p></td>
                  <td style="background-color:#58D68D;"><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ','); ?></p></td>
                </tr>
        <?php
              }
              break;
            }
              case "4": {
                for($i=30;$i<40;$i++){ ?>
                  <tr>
                  <td><p align="center"><?php echo ($i+1); ?></p></td>
                  <td><?php echo $data[$i][0]['Name']; ?></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2557),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2558),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2559),2,'.',','); ?></p></td>
                  <td style="background-color:#58D68D;"><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ','); ?></p></td>
                </tr>
        <?php
              }
              break;
            }
              case "5": {
                for($i=40;$i<50;$i++){ ?>
                  <tr>
                  <td><p align="center"><?php echo ($i+1); ?></p></td>
                  <td><?php echo $data[$i][0]['Name']; ?></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2557),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2558),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2559),2,'.',','); ?></p></td>
                  <td style="background-color:#58D68D;"><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ','); ?></p></td>
                </tr>
        <?php
              }
              break;
            }
              case "6": {
                for($i=50;$i<60;$i++){ ?>
                  <tr>
                  <td><p align="center"><?php echo ($i+1); ?></p></td>
                  <td><?php echo $data[$i][0]['Name']; ?></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2557),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2558),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2559),2,'.',','); ?></p></td>
                  <td style="background-color:#58D68D;"><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ','); ?></p></td>
                </tr>
        <?php
              }
              break;
            }
              case "7": {
                for($i=60;$i<sizeof($data);$i++){ ?>
                  <tr>
                  <td><p align="center"><?php echo ($i+1); ?></p></td>
                  <td><?php echo $data[$i][0]['Name']; ?></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2557),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2558),2,'.',','); ?></p></td>
                  <td><p align="right"><?php echo number_format((float)get_history_plam($data[$i][0]['Name'],2559),2,'.',','); ?></p></td>
                  <td style="background-color:#58D68D;"><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ','); ?></p></td>
                </tr>
        <?php
              }
              break;
            }
          } ?>
      </tbody>

    </table>
  </div>

</div></center>
        </body>
</html>
