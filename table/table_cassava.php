<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
<link href="css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" media="all">


<?php

  $start = $page;

 ?>

<html>
  <body>
<div class="header"><center><h1>ตารางข้อมูล มันสำปะหลัง</h1></center></div>
<center>
  <div class="content">
  <div id="table1" style="max-width: 600px">
    <table class="ui celled table" style="width:100%">
      <thead  style="background-color:green;">
        <tr>
          <th>ลำดับ</th>
          <th>จังหวัด</th>
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
                  <td><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ''); ?></p></td>
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
                  <td><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ''); ?></p></td>
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
                  <td><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ''); ?></p></td>
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
                  <td><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ''); ?></p></td>
                </tr>
        <?php
              }
              break;
            }
              case "5": {
                for($i=40;$i<sizeof($data);$i++){ ?>
                  <tr>
                  <td><p align="center"><?php echo ($i+1); ?></p></td>
                  <td><?php echo $data[$i][0]['Name']; ?></td>
                  <td><p align="right"><?php echo number_format((float)$data[$i][0]['Sum'], 2, '.', ''); ?></p></td>
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
