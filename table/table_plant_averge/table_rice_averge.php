<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
<link href="css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" media="all">

<?php
  $type = $_POST['type'];
  include '../../conDB.php';
  $con = conDB();
  $sum57 = 0;
  $sumAvg57 = 0;
  $sum58 = 0;
  $sumAvg58 = 0;
  $sum59 = 0;
  $sumAvg59 = 0;
  //ดึงข้อมูล
  switch ($type) {
    case "ข้าว": {
      $query = $con->query("SELECT num_product_tun, product_per_plant, year FROM rice_product");
      $query->execute();
      $data = $query->fetchAll(PDO::FETCH_ASSOC);
      for ($countYear = 0; $countYear < 3; $countYear++) {
        if ($countYear == 0) {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2557) {
              $sum57 += $data[$countData]['num_product_tun'];
              $sumAvg57 += $data[$countData]['product_per_plant'];
            }
          }         
          $sum57 = ($sum57 / 77);
          $sumAvg57 = ($sumAvg57 / 77);
        } else if ($countYear == 1) {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2558) {
              $sum58 += $data[$countData]['num_product_tun'];
              $sumAvg58 += $data[$countData]['product_per_plant'];
            }
          }
          $sum58 = $sum58 / 77;
          $sumAvg58 = $sumAvg58 / 77;
        } else {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2559) {
              $sum59 += $data[$countData]['num_product_tun'];
              $sumAvg59 += $data[$countData]['product_per_plant'];
            }
          }
          $sum59 = $sum59 / 77;
          $sumAvg59 = $sumAvg59 / 77;
        }
      }
      break;
    }
    case "ยางพารา": {
      $query = $con->query("SELECT num_product_tun, product_per_crop, year FROM rubber_product");
      $query->execute();
      $data = $query->fetchAll(PDO::FETCH_ASSOC);
      for ($countYear = 0; $countYear < 3; $countYear++) {
        if ($countYear == 0) {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2557) {
              $sum57 += $data[$countData]['num_product_tun'];
              $sumAvg57 += $data[$countData]['product_per_crop'];
            }
          }         
          $sum57 = ($sum57 / 67);
          $sumAvg57 = ($sumAvg57 / 67);
        } else if ($countYear == 1) {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2558) {
              $sum58 += $data[$countData]['num_product_tun'];
              $sumAvg58 += $data[$countData]['product_per_crop'];
            }
          }
          $sum58 = $sum58 / 67;
          $sumAvg58 = $sumAvg58 / 67;
        } else {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2559) {
              $sum59 += $data[$countData]['num_product_tun'];
              $sumAvg59 += $data[$countData]['product_per_crop'];
            }
          }
          $sum59 = $sum59 / 67;
          $sumAvg59 = $sumAvg59 / 67;
        }
      }
      break;
    }
    case "มันสำปะหลัง": {
      $query = $con->query("SELECT num_product_tun, product_per_crop, year FROM cassava_product");
      $query->execute();
      $data = $query->fetchAll(PDO::FETCH_ASSOC);
      for ($countYear = 0; $countYear < 3; $countYear++) {
        if ($countYear == 0) {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2557) {
              $sum57 += $data[$countData]['num_product_tun'];
              $sumAvg57 += $data[$countData]['product_per_crop'];
            }
          }         
          $sum57 = ($sum57 / 50);
          $sumAvg57 = ($sumAvg57 / 50);
        } else if ($countYear == 1) {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2558) {
              $sum58 += $data[$countData]['num_product_tun'];
              $sumAvg58 += $data[$countData]['product_per_crop'];
            }
          }
          $sum58 = $sum58 / 50;
          $sumAvg58 = $sumAvg58 / 50;
        } else {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2559) {
              $sum59 += $data[$countData]['num_product_tun'];
              $sumAvg59 += $data[$countData]['product_per_crop'];
            }
          }
          $sum59 = $sum59 / 50;
          $sumAvg59 = $sumAvg59 / 50;
        }
      }
      break;
    }
    case "อ้อย": {
      $query = $con->query("SELECT num_product_tun, product_per_crop, year FROM sugarcane_product");
      $query->execute();
      $data = $query->fetchAll(PDO::FETCH_ASSOC);
      for ($countYear = 0; $countYear < 3; $countYear++) {
        if ($countYear == 0) {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2557) {
              $sum57 += $data[$countData]['num_product_tun'];
              $sumAvg57 += $data[$countData]['product_per_crop'];
            }
          }         
          $sum57 = ($sum57 / 45);
          $sumAvg57 = ($sumAvg57 / 45);
        } else if ($countYear == 1) {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2558) {
              $sum58 += $data[$countData]['num_product_tun'];
              $sumAvg58 += $data[$countData]['product_per_crop'];
            }
          }
          $sum58 = $sum58 / 45;
          $sumAvg58 = $sumAvg58 / 45;
        } else {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2559) {
              $sum59 += $data[$countData]['num_product_tun'];
              $sumAvg59 += $data[$countData]['product_per_crop'];
            }
          }
          $sum59 = $sum59 / 45;
          $sumAvg59 = $sumAvg59 / 45;
        }
      }
      break;
    }
    case "ปาล์มน้ำมัน": {
      $query = $con->query("SELECT num_product_tun, product_per_crop, year FROM plam_product");
      $query->execute();
      $data = $query->fetchAll(PDO::FETCH_ASSOC);
      for ($countYear = 0; $countYear < 3; $countYear++) {
        if ($countYear == 0) {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2557) {
              $sum57 += $data[$countData]['num_product_tun'];
              $sumAvg57 += $data[$countData]['product_per_crop'];
            }
          }         
          $sum57 = ($sum57 / 66);
          $sumAvg57 = ($sumAvg57 / 66);
        } else if ($countYear == 1) {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2558) {
              $sum58 += $data[$countData]['num_product_tun'];
              $sumAvg58 += $data[$countData]['product_per_crop'];
            }
          }
          $sum58 = $sum58 / 66;
          $sumAvg58 = $sumAvg58 / 66;
        } else {
          for ($countData = 0; $countData < sizeof($data); $countData++) {
            if ($data[$countData]['year'] == 2559) {
              $sum59 += $data[$countData]['num_product_tun'];
              $sumAvg59 += $data[$countData]['product_per_crop'];
            }
          }
          $sum59 = $sum59 / 66;
          $sumAvg59 = $sumAvg59 / 66;
        }
      }
      break;
    }
  }
  
?>
<html>
  <body>
<div class="header"><center><h1>ตารางแสดงข้อมูลเฉลี่ย<?php echo $type;?>ทั้งประเทศ</h1></center></div>
<center>
  <div class="content">
  <div id="table1" style="max-width: 800px">
    <table class="ui celled table">
      <thead  style="background-color:green;">
        <tr>
          <th>ปี</th>
          <th>ผลผลิตรวมทุกจังหวัด (ตัน)</th>
          <th>ผลผลิตต่อเนื้อที่เพาะปลูก 1 ไร่ (กก)</th>
        </tr>
      </thead>

      <tbody>
            <tr>
              <td>2557</td>
              <td><p align="right"><?php echo number_format((float)$sum57, 2, '.', ''); ?></p></td>
              <td><p align="right"><?php echo number_format((float)$sumAvg57, 2, '.', ''); ?></p></td>
            </tr>
            <tr>
              <td>2558</td>
              <td><p align="right"><?php echo number_format((float)$sum58, 2, '.', ''); ?></p></td>
              <td><p align="right"><?php echo number_format((float)$sumAvg58, 2, '.', ''); ?></p></td>
            </tr>
            <tr>
              <td>2559</td>
              <td><p align="right"><?php echo number_format((float)$sumAvg59, 2, '.', ''); ?></p></td>
              <td><p align="right"><?php echo number_format((float)$sumAvg59, 2, '.', ''); ?></p></td>
            </tr>
            <tr>
              <td>เฉลี่ย</td>
              <td><p align="right">
                <?php 
                $sumAllAVG = ($sum57 + $sum58 + $sum59)/3;
                echo number_format((float)$sumAllAVG, 2, '.', ''); ?></p>
              </td>
              <td><p align="right">
              <?php 
                $sumAVG = ($sumAvg57 + $sumAvg58 + $sumAvg59)/3;
                echo number_format((float)$sumAVG, 2, '.', ''); ?>
              </p></td>
            </tr>
      </tbody>

    </table>
  </div>
</div></center>
<?php
$con=null;
 ?>
        </body>
</html>