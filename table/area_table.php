<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
<link href="css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" media="all">

<?php
include "../get_data.php";
$data = get_dataAll();
$imgCorrect = "http://localhost/GraduateProject/img_option/correct.png";
$imgInCorrect = "http://localhost/GraduateProject/img_option/incorrect.png";
$plant = [];
$plant[0] = "ข้าว";
$plant[1] = "อ้อย";
$plant[2] = "มันสำปะหลัง";
$plant[3] = "ยางพารา";
$plant[4] = "ปาล์ม";



 ?>

<div class="header"><center><h1>ตาราง</h1></center></div>
<center><div class="content">
  <div id="table1" style="max-width: 1000px">
    <table class="ui celled table" style="width:100%">
      <thead  style="background-color:green;">
        <tr>
          <th>พืช</th>
          <th>ระดับความเหมาะสม</th>
          <th>อุณหภูมิ</th>
          <th>ความชื้น</th>
          <th>ปริมาณน้ำฝน</th>

        </tr>
      </thead>

      <tbody>
        <?php for($i=0;$i<5;$i++){ ?>
            <tr>
              <td><?php echo $plant[$i]; ?></td>
              <td>พอใช้</td>
              <td><img src="<?php echo $imgCorrect; ?>" style="width:60px;height:80px;"/></td>
              <td><img src="<?php echo $imgInCorrect; ?>" style="width:50px;height:60px;padding-top:10px;"/></td>
              <td><img src="<?php echo $imgCorrect; ?>" style="width:60px;height:80px;"/></td>
            </tr>
      <?php } ?>
      </tbody>

    </table>
  </div>
</div></center>
