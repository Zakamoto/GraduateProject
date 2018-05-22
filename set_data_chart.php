<?php

$type = $_POST['type'];
$year = $_POST['year'];
$month = $_POST['month'];

echo $type;



if($type == 1){
  echo 55555555555555555555;
  if($year == 0)
  $data = [1,2,3,4,5,6,7,8,9,10,11,12];
  else if($set == 1)
  $data = [12,11,10,9,8,7,6,5,4,3,2,1];
  else
  $data = [10,10,10,10,10,10,10,10,10,10,10];

  include 'chart/temp/chart_temp_someyear.php';
}
else{    //ข้อมูลแผนภูมิรายเดือน

  if($year == 0)
  $data = [1,2,3,4,5,6,7,8,9,10,11,12,13];
  else if($year == 1)
  $data = [13,12,11,10,9,8,7,6,5,4,3,2,1];
  else
  $data = [10,10,10,10,10,10,10,10,10,10,10,10];

  include 'chart/temp/chart_temp_month.php';
}
 ?>
