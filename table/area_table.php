<?php
include "../get_data.php";
if(isset($_POST['privince'])){
$province = $_POST['privince'];
$data = get_data_area($province);


$result_rice = [0,0,0];
$result_sugarcane = [0,0,0];
$result_plam = [0,0,0];
$result_rubber = [0,0,0];
$result_cassava = [0,0,0];


//grade rice
if($data[0]['TC']>17 && $data[0]['TC']<25)
  $result_rice[0] = 1;
if($data[0]['RH']>50 && $data[0]['RH']<60)
  $result_rice[1] = 1;
if($data[0]['Rain']>150 && $data[0]['Rain']<400)
  $result_rice[2] = 1;

//grade sugarcane
if($data[0]['TC']>25 && $data[0]['TC']<35)
  $result_sugarcane[0] = 1;
if($data[0]['RH']>70 && $data[0]['RH']<100)
  $result_sugarcane[1] = 1;
if($data[0]['Rain']>100 && $data[0]['Rain']<125)
  $result_sugarcane[2] = 1;

//grade plam
if($data[0]['TC']>24 && $data[0]['TC']<29)
  $result_plam[0] = 1;
if($data[0]['RH']>75 && $data[0]['RH']<90)
  $result_plam[1] = 1;
if($data[0]['Rain']>150 && $data[0]['Rain']<166)
  $result_plam[2] = 1;

//grade rubber
if($data[0]['TC']>25 && $data[0]['TC']<31)
  $result_rubber[0] = 1;
if($data[0]['RH']>80 && $data[0]['RH']<100)
  $result_rubber[1] = 1;
if($data[0]['Rain']>100 && $data[0]['Rain']<125)
  $result_rubber[2] = 1;

  //grade cassava
  if($data[0]['TC']>25 && $data[0]['TC']<35)
    $result_cassava[0] = 1;
  if($data[0]['RH']>70 && $data[0]['RH']<80)
    $result_cassava[1] = 1;
  if($data[0]['Rain']>100 && $data[0]['Rain']<125)
    $result_cassava[2] = 1;

/*
    print_r($result_rice);
    print_r($result_sugarcane);
    print_r($result_plam);
    print_r($result_rubber);
    print_r($result_cassava);
*/


$plant = [];
$plant[0] = "ข้าว";
$plant[1] = "อ้อย";
$plant[2] = "มันสำปะหลัง";
$plant[3] = "ยางพารา";
$plant[4] = "ปาล์ม";

if($data){ ?>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
<link href="css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" media="all">



<div class="header"><br/><center><h3>ตารางแสดงคุณสมบัติของพื้นที่</h3></center></div><br/>
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
        <?php
          for($i=0;$i<5;$i++){ ?>
            <tr>
              <td><?php echo $plant[$i]; ?></td>
              <td>พอใช้</td>
              <?php
              if($i==0){ //ข้าว
                  if($result_rice[0]==0) {?>
                      <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
              <?php  }else { ?>
                <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
              <?php }

                  if($result_rice[1]==0) {?>
                      <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
              <?php  }else { ?>
                <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
              <?php }

                  if($result_rice[2]==0) {?>
                      <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
              <?php  }else { ?>
                <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
              <?php }

            }
            else if($i==1){
              if($result_sugarcane[0]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }

              if($result_sugarcane[1]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }

              if($result_sugarcane[2]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }
            }
            else if($i==2){
              if($result_plam[0]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }

              if($result_plam[1]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }

              if($result_plam[2]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }
            }
            else if($i==3){
              if($result_rubber[0]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }

              if($result_rubber[1]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }

              if($result_rubber[2]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }
            }
            else{
              if($result_cassava[0]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }

              if($result_cassava[1]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }

              if($result_cassava[2]==0) {?>
                  <td><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></td>
          <?php  }else { ?>
            <td><img src="img_option/correct.png" style="width:60px;height:80px;"/></td>
          <?php }
            }
                ?>
                <td><button class="btn" data-toggle="modal" data-target="#pop_<?php echo $i;?>">info</button></td>
            </tr>
      <?php } ?>
      </tbody>

    </table>


    <div id="pop_0" class="modal fade">
      <div class="modal-dialog">
    		<div class="modal-content">

    			<div class="modal-header">
    				<a>rice</a>
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
    			</div>

    			<div class="modal-footer">
    				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    			</div>

    		</div>
      </div>
    </div>

    <div id="pop_1" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <a>sugarcane</a>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

    <div id="pop_2" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <a>plam</a>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

    <div id="pop_3" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <a>rubber</a>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

    <div id="pop_4" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-header">
            <a>cassava</a>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>

        </div>
      </div>
    </div>

  </div>
</div></center>

<?php } else {
  $picture = "miss_area";
  include '../img.php';
}
}
else {
  $picture = "area";
  include '../img.php';
}
?>
