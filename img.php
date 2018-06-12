<?php

if($picture=="temp") { ?>

  <br/>
  <center><h4>ไม่พบข้อมูลที่ค้นหา</h4><br/>
  <img src="img_weather/temp_icon.png"></img>
  </center><br/>

<?php } else if($picture=="water") { ?>

  <br/>
  <center><h4>ไม่พบข้อมูลที่ค้นหา</h4><br/>
  <img src="img_weather/water.png"></img>
  </center><br/>

<?php } else if($picture=="area") { ?>

  <br/>
  <center><h4>ตารางแสดงคุณสมบัติของพื้นที่</h4><br/>
  <img src="img_option/GPS2.png" style="width:400px;height:400px;"></img>
  </center><br/>

<?php }else { ?>


  <br/>
  <center><h4>ไม่พบข้อมูลในพื้นที่</h4><br/>
  <img src="img_option/incorrect.png" style="width:300px;height:300px;"></img>
  </center><br/>

<?php } ?>
