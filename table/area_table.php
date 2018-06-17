<?php
include "../get_data.php";
if(isset($_POST['privince'])){
$province = $_POST['privince'];
$high = $_POST['high'];
$high = number_format($high,2,'.','');
$month = date('n');

$data = get_data_area($province,$month);
$product = [];
$product[0] = get_proAvg_rice($province);
$product[1] = get_proAvg_sugarcane($province);
$product[2] = get_proAvg_oilplam($province);
$product[3] = get_proAvg_rubber($province);
$product[4] = get_proAvg_cassava($province);

$result_rice = [0,0,0];
$result_sugarcane = [0,0,0,0];
$result_plam = [0,0,0,0];
$result_rubber = [0,0,0];
$result_cassava = [0,0,0];

$count = [];
$count_rice = 0;
$count_sugarcane = 0;
$count_plam = 0;
$count_rubber = 0;
$count_cassava = 0;

//grade rice
if($data[0]['TC']>17 && $data[0]['TC']<26)
  { $result_rice[0] = 1;$count_rice++; }
if($high<800)
  { $result_rice[1] = 1;$count_rice++; }
if($data[0]['Rain']>=150 && $data[0]['Rain']<=400)
  { $result_rice[2] = 1;$count_rice++; }

//grade sugarcane
if($data[0]['TC']>=25 && $data[0]['TC']<=35)
  { $result_sugarcane[0] = 1;$count_sugarcane++; }
if($high<1500)
  { $result_sugarcane[1] = 1;$count_sugarcane++; }
if($data[0]['Rain']>=100 && $data[0]['Rain']<=125)
  { $result_sugarcane[2] = 1;$count_sugarcane++; }
if($data[0]['RH']>44 && $data[0]['RH']<86)
  { $result_sugarcane[3] = 1;$count_sugarcane++; }

//grade plam
if($data[0]['TC']>24 && $data[0]['TC']<29)
  { $result_plam[0] = 1;$count_plam++; }
if($high<500)
  { $result_plam[1] = 1;$count_plam++; }
if($data[0]['Rain']>=150 && $data[0]['Rain']<166)
  { $result_plam[2] = 1;$count_plam++; }
if($data[0]['RH']<76)
  { $result_plam[3] = 1;$count_plam++; }

//grade rubber
if($data[0]['TC']>25 && $data[0]['TC']<31)
  { $result_rubber[0] = 1;$count_rubber++; }
if($high<200)
  { $result_rubber[1] = 1;$count_rubber++; }
if($data[0]['Rain']>=100 && $data[0]['Rain']<=125)
  { $result_rubber[2] = 1;$count_rubber++; }

  //grade cassava
  if($data[0]['TC']>=25 && $data[0]['TC']<38)
    { $result_cassava[0] = 1;$count_cassava++; }
  if($high<200)
    { $result_cassava[1] = 1;$count_cassava++; }
  if($data[0]['Rain']>=100 && $data[0]['Rain']<=125)
    { $result_cassava[2] = 1;$count_cassava++; }

/*
    print_r($result_rice);
    print_r($result_sugarcane);
    print_r($result_plam);
    print_r($result_rubber);
    print_r($result_cassava);
*/
/*
echo $count_rice;
echo $count_sugarcane;
echo $count_plam;
echo $count_rubber;
echo $count_cassava;
*/
$no_pass = "ทุกค่าไม่อยู่ในช่วงที่เหมาะสม";
$pass_1 = "อยู่ในช่วงที่เหมาะสมเป็นบางค่า";
$pass_2 = "อยู่ในช่วงที่เหมาะสมเป็นส่วนใหญ่่";
$pass_3 = "ทุกค่าอยู่ในช่วงที่เหมาะสม";


  if($count_rice==0)
    $result[0] = $no_pass;
  else if($count_rice==1)
    $result[0] = $pass_1;
  else if($count_rice==2)
    $result[0] = $pass_2;
  else
    $result[0] = $pass_3;

    if($count_sugarcane==0)
      $result[1] = $no_pass;
    else if($count_sugarcane==1)
      $result[1] = $pass_1;
    else if($count_sugarcane==2)
      $result[1] = $pass_2;
    else
      $result[1] = $pass_3;

      if($count_plam==0)
        $result[2] = $no_pass;
      else if($count_plam==1)
        $result[2] = $pass_1;
      else if($count_plam==2)
        $result[2] = $pass_2;
      else
        $result[2] = $pass_3;

        if($count_rubber==0)
          $result[3] = $no_pass;
        else if($count_rubber==1)
          $result[3] = $pass_1;
        else if($count_rubber==2)
          $result[3] = $pass_2;
        else
          $result[3] = $pass_3;

          if($count_cassava==0)
            $result[4] = $no_pass;
          else if($count_cassava==1)
            $result[4] = $pass_1;
          else if($count_cassava==2)
            $result[4] = $pass_2;
          else
            $result[4] = $pass_3;

$plant = [];
$plant[0] = "ข้าว";
$plant[1] = "อ้อย";
$plant[2] = "ปาล์ม";
$plant[3] = "ยางพารา";
$plant[4] = "มันสำปะหลัง";

if($data){ ?>
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="all">
<link href="css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" media="all">



<div class="header"><br/><center><h3>ตารางแสดงคุณสมบัติของพื้นที่</h3></center></div><br/>
<center><div class="content">
  <div id="table1" style="max-width: 1200px">
    <table class="ui celled table" style="width:100%">
      <thead  style="background-color:green;">
        <tr>
          <th>พืช</th>
          <th style="width:180px;"><p>ระดับความเหมาะสม</p></th>
          <th style="width:150px;"><p align="center">อุณหภูมิ</p></th>
          <th style="max-width:200px;"><p>ความสูงจากระดับน้ำทะเล</p></th>
          <th style="width:150px;"><p align="center">ปริมาณน้ำฝน</p></th>
          <th style="width:150px;"><p align="center">ความชื้น</p></th>
          <th style="max-width:170px;"><p>ผลผลิตเฉลี่ย</p><p>ในจังหวัดต่อไร่</p></th>

        </tr>
      </thead>

      <tbody>
        <?php
          for($i=0;$i<5;$i++){ ?>
            <tr>
              <td><?php echo $plant[$i]; ?></td>
              <td><?php echo $result[$i]; ?></td>
              <?php
              if($i==0){                //ข้าว
                for($j=0;$j<3;$j++){
                  if($result_rice[$j]==0) {?>
                      <td><center><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></center></td>
              <?php  }else { ?>
                <td><center><img src="img_option/correct.png" style="width:60px;height:80px;"/></center></td>
              <?php }
            } ?>
                  <td><p align="center">ยังไม่มีเกณฑ์ข้อมูล</p></td>
                  <td style="background-color:#58D68D;"><h6 align="right"><?php echo number_format((float)$product[0]['Sum'], 2, '.', ''); ?></h6></td><?php
            }
            else if($i==1){            //อ้อย
              for($j=0;$j<4;$j++){
                if($result_sugarcane[$j]==0) {?>
                    <td><center><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></center></td>
            <?php  }else { ?>
              <td><center><img src="img_option/correct.png" style="width:60px;height:80px;"/></center></td>
            <?php }
              }?>
                    <td style="background-color:#58D68D;"><h6 align="right"><?php echo number_format((float)$product[1]['Sum'], 2, '.', ''); ?></h6></td>  <?php
            }
            else if($i==2){
              for($j=0;$j<4;$j++){
                if($result_plam[$j]==0) {?>
                    <td><center><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></center></td>
            <?php  }else { ?>
              <td><center><img src="img_option/correct.png" style="width:60px;height:80px;"/></center></td>
            <?php }
              }?>
                    <td style="background-color:#58D68D;"><h6 align="right"><?php echo number_format((float)$product[2]['Sum'], 2, '.', ''); ?></h6></td>  <?php
            }
            else if($i==3){
              for($j=0;$j<3;$j++){
                if($result_rubber[$j]==0) {?>
                    <td><center><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></center></td>
            <?php  }else { ?>
              <td><center><img src="img_option/correct.png" style="width:60px;height:80px;"/></center></td>
            <?php }
              }?>
                    <td><p align="center">ยังไม่มีเกณฑ์ข้อมูล</p></td>
                    <td style="background-color:#58D68D;"><h6 align="right"><?php echo number_format((float)$product[3]['Sum'], 2, '.', ''); ?></h6></td>  <?php
            }
            else{
              for($j=0;$j<3;$j++){
                if($result_cassava[$j]==0) {?>
                    <td><center><img src="img_option/incorrect.png" style="width:55px;height:70px;padding-top:15px;"/></center></td>
            <?php  }else { ?>
              <td><center><img src="img_option/correct.png" style="width:60px;height:80px;"/></center></td>
            <?php }
              }?>
                    <td><p align="center">ยังไม่มีเกณฑ์ข้อมูล</p></td>
                    <td style="background-color:#58D68D;"><h6 align="right"><?php echo number_format((float)$product[4]['Sum'], 2, '.', ''); ?></h6></td>  <?php
            }
                ?>
                <td><button class="btn" data-toggle="modal" data-target="#pop_<?php echo $i;?>">info</button></td>
            </tr>
      <?php } ?>
      </tbody>

    </table>



<!--result-->
    <div id="pop_0" class="modal fade">
      <div class="modal-dialog">
    		<div class="modal-content">

    			<div class="modal-header">
    				<a>rice</a>
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
    			</div>

          <table class="ui celled table" style="width:98%">
            <thead  style="background-color:green;">
            <tr>
              <th></th>
              <th>ช่วงค่าที่เหมาะสม</th>
              <th>ค่าที่ได้จากพื้นที่</th>
            </tr>
           </thead>
           <tbody>
            <tr>
              <td>อุณหภูมิ</td>
              <td><center>18 - 25</center></td>
              <td><p align="right"><?php echo $data[0]['TC']; ?></p></td>
            </tr>
            <tr>
              <td>ความสูงจากระดับน้ำทะเล</td>
              <td><center>0 - 800</center></td>
              <td><p align="right"><?php echo $high; ?></p></td>
            </tr>
            <tr>
              <td>ปริมาณน้ำฝน</td>
              <td><center>150 - 400</center></td>
              <td><p align="right"><?php echo $data[0]['Rain']; ?></p></td>
            </tr>
            <tr>
              <td>ความชื้น</td>
              <td><center>ไม่มีเกณฑ์ข้อมูล</center></td>
              <td><p align="right"><?php echo $data[0]['RH'] ?></p></td>
            </tr>
            <tr>
              <td><p>ผลผลิตเฉลี่ยทั่วประเทศ</p>ต่อ 1 ไร(กก.)่</td>
              <td><center><?php echo number_format(get_proAvg_riceAll(),2,'.',''); ?></center></td>
              <td><p align="right"><?php echo number_format((float)$product[0]['Sum'], 2, '.', ''); ?></p></td>
            </tr>

           </tbody>
          </table>

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

          <table class="ui celled table" style="width:98%">
            <thead  style="background-color:green;">
            <tr>
              <th></th>
              <th>ช่วงค่าที่เหมาะสม</th>
              <th>ค่าที่ได้จากพื้นที่</th>
            </tr>
           </thead>
           <tbody>
            <tr>
              <td>อุณหภูมิ</td>
              <td><center>25 - 35</center></td>
              <td><p align="right"><?php echo $data[0]['TC']; ?></p></td>
            </tr>
            <tr>
              <td>ความสูงจากระดับน้ำทะเล</td>
              <td><center>0 - 1500</center></td>
              <td><p align="right"><?php echo $high; ?></p></td>
            </tr>
            <tr>
              <td>ปริมาณน้ำฝน</td>
              <td><center>100 - 125</center></td>
              <td><p align="right"><?php echo $data[0]['Rain']; ?></p></td>
            </tr>
            <tr>
              <td>ความชื้น</td>
              <td><center>45 - 85</center></td>
              <td><p align="right"><?php echo $data[0]['RH'] ?></p></td>
            </tr>
            <tr>
              <td><p>ผลผลิตเฉลี่ยทั่วประเทศ</p>ต่อ 1 ไร่(กก.)</td>
              <td><center><?php echo number_format(get_proAvg_sugarcaneAll(),2,'.',''); ?></center></td>
              <td><p align="right"><?php echo number_format((float)$product[1]['Sum'], 2, '.', ''); ?></p></td>
            </tr>
           </tbody>
          </table>

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

          <table class="ui celled table" style="width:98%">
            <thead  style="background-color:green;">
            <tr>
              <th></th>
              <th>ช่วงค่าที่เหมาะสม</th>
              <th>ค่าที่ได้จากพื้นที่</th>
            </tr>
           </thead>
           <tbody>
            <tr>
              <td>อุณหภูมิ</td>
              <td><center>25 - 28</center></td>
              <td><p align="right"><?php echo $data[0]['TC']; ?></p></td>
            </tr>
            <tr>
              <td>ความสูงจากระดับน้ำทะเล</td>
              <td><center>0 - 500</center></td>
              <td><p align="right"><?php echo $high; ?></p></td>
            </tr>
            <tr>
              <td>ปริมาณน้ำฝน</td>
              <td><center>150 - 165</center></td>
              <td><p align="right"><?php echo $data[0]['Rain']; ?></p></td>
            </tr>
            <tr>
              <td>ความชื้น</td>
              <td><center>ไม่เกิน 75</center></td>
              <td><p align="right"><?php echo $data[0]['RH'] ?></p></td>
            </tr>
            <tr>
              <td><p>ผลผลิตเฉลี่ยทั่วประเทศ</p>ต่อ 1 ไร่(กก.)</td>
              <td><center><?php echo number_format(get_proAvg_oilplamAll(),2,'.',''); ?></center></td>
              <td><p align="right"><?php echo number_format((float)$product[2]['Sum'], 2, '.', ''); ?></p></td>
            </tr>
           </tbody>
          </table>

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

          <table class="ui celled table" style="width:98%">
            <thead  style="background-color:green;">
            <tr>
              <th></th>
              <th>ช่วงค่าที่เหมาะสม</th>
              <th>ค่าที่ได้จากพื้นที่</th>
            </tr>
           </thead>
           <tbody>
            <tr>
              <td>อุณหภูมิ</td>
              <td><center>26 - 30</center></td>
              <td><p align="right"><?php echo $data[0]['TC']; ?></p></td>
            </tr>
            <tr>
              <td>ความสูงจากระดับน้ำทะเล</td>
              <td><center>0 - 200</center></td>
              <td><p align="right"><?php echo $high; ?></p></td>
            </tr>
            <tr>
              <td>ปริมาณน้ำฝน</td>
              <td><center>100 - 125</center></td>
              <td><p align="right"><?php echo $data[0]['Rain']; ?></p></td>
            </tr>
            <tr>
              <td>ความชื้น</td>
              <td><center>ไม่มีเกณฑ์ข้อมูล</center></td>
              <td><p align="right"><?php echo $data[0]['RH'] ?></p></td>
            </tr>
            <tr>
              <td><p>ผลผลิตเฉลี่ยทั่วประเทศ</p>ต่อ 1 ไร(กก.)่</td>
              <td><center><?php echo number_format(get_proAvg_rubberAll(),2,'.',''); ?></center></td>
              <td><p align="right"><?php echo number_format((float)$product[3]['Sum'], 2, '.', ''); ?></p></td>
            </tr>
           </tbody>
          </table>

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

          <table class="ui celled table" style="width:98%">
            <thead  style="background-color:green;">
            <tr>
              <th></th>
              <th>ช่วงค่าที่เหมาะสม</th>
              <th>ค่าที่ได้จากพื้นที่</th>
            </tr>
           </thead>
           <tbody>
            <tr>
              <td>อุณหภูมิ</td>
              <td><center>25 - 37</center></td>
              <td><p align="right"><?php echo $data[0]['TC']; ?></p></td>
            </tr>
            <tr>
              <td>ความสูงจากระดับน้ำทะเล</td>
              <td><center>0 - 200</center></td>
              <td><p align="right"><?php echo $high; ?></p></td>
            </tr>
            <tr>
              <td>ปริมาณน้ำฝน</td>
              <td><center>100 - 125</center></td>
              <td><p align="right"><?php echo $data[0]['Rain']; ?></p></td>
            </tr>
            <tr>
              <td>ความชื้น</td>
              <td><center>ไม่มีเกณฑ์ข้อมูล</center></td>
              <td><p align="right"><?php echo $data[0]['RH'] ?></p></td>
            </tr>
            <tr>
              <td><p>ผลผลิตเฉลี่ยทั่วประเทศ</p>ต่อ 1 ไร่(กก.)</td>
              <td><center><?php echo number_format(get_proAvg_cassavaAll(),2,'.',''); ?></center></td>
              <td><p align="right"><?php echo number_format((float)$product[4]['Sum'], 2, '.', ''); ?></p></td>
            </tr>
           </tbody>
          </table>

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
