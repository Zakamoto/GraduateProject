<?php

include "get_data.php";

//จาก marker.js
$type = $_POST['type'];



//echo $type+'<br/>';
//echo $year+'<br/>';



if($type == 1){     //ข้อมูลแผนภูมิรายปี
  $year = $_POST['year'];
  if($year == 0){
  $data1 = [1,2,3,4,5,6,7,8,9,10,11,12,13];
  $data2 = [2,3,4,5,6,7,8,9,10,11,12,13,14];
  $data3 = [3,4,5,6,7,8,9,10,11,12,13,14,15];
  }
  else if($year == 1){
  $data1 = [12,11,10,9,8,7,6,5,4,3,2,1];
  $data2 = [13,12,11,10,9,8,7,6,5,4,3,2];
  $data3 = [14,13,12,11,10,9,8,7,6,5,4,3,2];
  }
  else if($year == 2){
  $data1 = [10,10,10,10,10,10,10,10,10,10,10,10];
  $data2 = [15,15,15,15,15,15,15,15,15,15,15,15];
  $data3 = [20,20,20,20,20,20,20,20,20,20,20,20];
  }
  else
  {
  $data1 = [10,10,10,10,10,10,10,10,10,10,10,10];
  $data2 = [17,16,15,14,13,12,11,10,9,8,7,6,5];
  $data3 = [5,6,7,8,9,10,11,12,13,14,15,16,17];
  }

  include 'chart/temp/chart_temp_year.php';
}

else if($type==100){          //ลองใส่ข้อมูลจริงดู
  $year3 = $_POST['year3'];
  $month3 = $_POST['month3'];
  $date3 = $_POST['date3'];
  $place3 = $_POST['place'];

  $data = get_dataSelect($year3,$month3,$date3,$place3);

  if($data)
    {include 'Chart/temp/chart_temp_select.php';}
  else{
    $picture = "temp";
    include 'img.php';
  }

}

else{    //ข้อมูลแผนภูมิรายเดือน

  $year = $_POST['year'];
  $month = $_POST['month'];
  $place = $_POST['place'];

  $date_in_month = get_date_of_month($month);
  $data = get_month_place($place,$month,$year);

  if($data)
    {include 'chart/temp/chart_temp_month.php';}
  else{
    $picture = "temp";
    include 'img.php';
  }
}
 ?>
