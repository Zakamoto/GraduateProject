<?php

include "conDB.php"; //connect database

function get_dataAll(){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  $query = $con->query("SELECT TC, RH, Year, Month, Date, Time, place.Name FROM data,place WHERE data.Place=place.Id");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);

  if($data){
      return $data;
  }
  else
    return false;
}

function get_year_place($place){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  if($place != 0)
  $query = $con->query("SELECT TC,RH,Month FROM data WHERE data.Place='$place' AND data.Year=2561");
  else
  $query = $con->query("SELECT TC,RH,Month FROM data WHERE data.Year=2561");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);
  if($data){
      return $data;
  }
  else
    return "ไม่พบข้อมูล";
}

function get_month_place($place,$month){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  $query = $con->query("SELECT TC,RH,Date FROM data WHERE data.Year=2561 AND data.Place='$place' AND data.Month='$month'");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);
  if($data){
      return $data;
  }
  else
    return "ไม่พบข้อมูล";
}

function get_month_place($place,$month){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  $query = $con->query("SELECT TC,RH,Date FROM data WHERE data.Year=2561 AND data.Place='$place' AND data.Month='$month'");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);
  if($data){
      return $data;
  }
  else
    return "ไม่พบข้อมูล";
}

function get_date_of_month($month){

  if($month==1||$month==3||$month==5||$month==7||$month==8||$month==10||$month==12)
    $data=31;
  else if($month==2)
    $data=28;
  else
    $data=30;


  if($data){
      return $data;
  }
  else
    return false;
}

function get_chart_rubber(){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  $query = $con->query("SELECT Sum, Name FROM rubber");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);
  $dataSort = array();
    for ($loopCount = 0; $loopCount < sizeof($data); $loopCount++) {
        $max = $data[$loopCount]['Sum'];
        $index = $loopCount;
        if ($loopCount <= (sizeof($data)-2)) {
            for ($loopCheck = ($loopCount + 1); $loopCheck < sizeof($data); $loopCheck++) {
              if ($data[$loopCheck]['Sum'] >= $max) {
                $max = $data[$loopCheck]['Sum'];
                $index = $loopCheck;
              }
            }
        $add = array($data[$index]);
        array_push($dataSort, $add);
        $data[$index]['Name'] = $data[$loopCount]['Name'];
        $data[$index]['Sum'] = $data[$loopCount]['Sum'];
        } else {
          $add = array($data[$loopCount]);
          array_push($dataSort, $add);
        }
    }
  $data = $dataSort;
  if($data){
      return $data;
  }
  else
    return "ไม่พบข้อมูล";
}
function get_chart_cassava(){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  $query = $con->query("SELECT Sum, Name FROM cassava");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);
  $dataSort = array();
    for ($loopCount = 0; $loopCount < sizeof($data); $loopCount++) {
        $max = $data[$loopCount]['Sum'];
        $index = $loopCount;
        if ($loopCount <= (sizeof($data)-2)) {
            for ($loopCheck = ($loopCount + 1); $loopCheck < sizeof($data); $loopCheck++) {
              if ($data[$loopCheck]['Sum'] >= $max) {
                $max = $data[$loopCheck]['Sum'];
                $index = $loopCheck;
              }
            }
        $add = array($data[$index]);
        array_push($dataSort, $add);
        $data[$index]['Name'] = $data[$loopCount]['Name'];
        $data[$index]['Sum'] = $data[$loopCount]['Sum'];
        } else {
          $add = array($data[$loopCount]);
          array_push($dataSort, $add);
        }
    }
  $data = $dataSort;
  if($data){
      return $data;
  }
  else
    return "ไม่พบข้อมูล";
}
function get_chart_oilplam(){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  $query = $con->query("SELECT Sum, Name FROM oilplam");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);
  $dataSort = array();
    for ($loopCount = 0; $loopCount < sizeof($data); $loopCount++) {
        $max = $data[$loopCount]['Sum'];
        $index = $loopCount;
        if ($loopCount <= (sizeof($data)-2)) {
            for ($loopCheck = ($loopCount + 1); $loopCheck < sizeof($data); $loopCheck++) {
              if ($data[$loopCheck]['Sum'] >= $max) {
                $max = $data[$loopCheck]['Sum'];
                $index = $loopCheck;
              }
            }
        $add = array($data[$index]);
        array_push($dataSort, $add);
        $data[$index]['Name'] = $data[$loopCount]['Name'];
        $data[$index]['Sum'] = $data[$loopCount]['Sum'];
        } else {
          $add = array($data[$loopCount]);
          array_push($dataSort, $add);
        }
    }
  $data = $dataSort;
  if($data){
      return $data;
  }
  else
    return "ไม่พบข้อมูล";
}
function get_chart_sugarcane(){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  $query = $con->query("SELECT Sum, Name FROM sugarcane");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);
  $dataSort = array();
    for ($loopCount = 0; $loopCount < sizeof($data); $loopCount++) {
        $max = $data[$loopCount]['Sum'];
        $index = $loopCount;
        if ($loopCount <= (sizeof($data)-2)) {
            for ($loopCheck = ($loopCount + 1); $loopCheck < sizeof($data); $loopCheck++) {
              if ($data[$loopCheck]['Sum'] >= $max) {
                $max = $data[$loopCheck]['Sum'];
                $index = $loopCheck;
              }
            }
        $add = array($data[$index]);
        array_push($dataSort, $add);
        $data[$index]['Name'] = $data[$loopCount]['Name'];
        $data[$index]['Sum'] = $data[$loopCount]['Sum'];
        } else {
          $add = array($data[$loopCount]);
          array_push($dataSort, $add);
        }
    }
  $data = $dataSort;
  if($data){
      return $data;
  }
  else
    return "ไม่พบข้อมูล";
}
function get_chart_rice(){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  $query = $con->query("SELECT Sum, Name FROM ricepee");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);
  $dataSort = array();
    for ($loopCount = 0; $loopCount < sizeof($data); $loopCount++) {
        $max = $data[$loopCount]['Sum'];
        $index = $loopCount;
        if ($loopCount <= (sizeof($data)-2)) {
            for ($loopCheck = ($loopCount + 1); $loopCheck < sizeof($data); $loopCheck++) {
              if ($data[$loopCheck]['Sum'] >= $max) {
                $max = $data[$loopCheck]['Sum'];
                $index = $loopCheck;
              }
            }
        $add = array($data[$index]);
        array_push($dataSort, $add);
        $data[$index]['Name'] = $data[$loopCount]['Name'];
        $data[$index]['Sum'] = $data[$loopCount]['Sum'];
        } else {
          $add = array($data[$loopCount]);
          array_push($dataSort, $add);
        }
    }
  $data = $dataSort;
  if($data){
      return $data;
  }
  else
    return "ไม่พบข้อมูล";
}

function get_place(){
  $con = conDB();

  $query = $con->query("SELECT * FROM place");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);

  if($data)
    return $data;
  else
    return false;
}

function get_dataSelect($y,$month,$date,$place){

  if($y==1){$year=2557;}
  else if($y==2){$year=2558;}
  else if($y==3){$year=2559;}
  else if($y==4){$year=2560;}
  else {$year=2561;}

  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล อุณหภูมิ + ความชื้น
  $query = $con->query("SELECT TC, RH, Time FROM data WHERE Place=$place AND Year=$year AND Month='$month' AND Date=$date");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);

  if($data){
      return $data;
  }
  else
    return false;
}


 ?>
