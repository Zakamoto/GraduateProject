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

function get_year_place($place,$year){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  if($place != 0)
  $query = $con->query("SELECT TC,RH,Month FROM data WHERE data.Place='$place' AND data.Year=$year");
  else
  $query = $con->query("SELECT TC,RH,Month FROM data WHERE data.Year=$year");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);
  if($data){
      return $data;
  }
  else
    return false;
}

function get_month_place($place,$month,$year){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  $query = $con->query("SELECT TC,RH,Date FROM data WHERE data.Year=$year AND data.Place='$place' AND data.Month='$month'");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);
  if($data){
      return $data;
  }
  else
    return false;
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
    return false;
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
    return false;
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
    return false;
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
    return false;
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
    return false;
}

function get_proAvg_rice($province){
  $con = conDB();
  $query = $con->query("SELECT Sum, Name FROM ricepee WHERE Name='$province'");
  $query->execute();
  $data = $query->fetch(PDO::FETCH_ASSOC);

  if($data)
    return $data;
  else
    return 0;
}
function get_proAvg_riceAll(){
  $con = conDB();
  $query = $con->query("SELECT Sum, Name FROM ricepee");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);



  if($data){
    $sum=0;
    for($i=0;$i<sizeof($data);$i++){
      $sum += $data[$i]['Sum'];
    }
    $result = $sum/77;
    return $result;
  }
  else
    return 0;
}
function get_proAvg_rubber($province){
  $con = conDB();
  $query = $con->query("SELECT Sum, Name FROM rubber WHERE Name='$province'");
  $query->execute();
  $data = $query->fetch(PDO::FETCH_ASSOC);

  if($data)
    return $data;
  else
    return 0;
}
function get_proAvg_rubberAll(){
  $con = conDB();
  $query = $con->query("SELECT Sum, Name FROM rubber");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);



  if($data){
    $sum=0;
    for($i=0;$i<sizeof($data);$i++){
      $sum += $data[$i]['Sum'];
    }
    $result = $sum/67;
    return $result;
  }
  else
    return 0;
}
function get_proAvg_cassava($province){
  $con = conDB();
  $query = $con->query("SELECT Sum, Name FROM cassava WHERE Name='$province'");
  $query->execute();
  $data = $query->fetch(PDO::FETCH_ASSOC);

  if($data)
    return $data;
  else
    return 0;
}
function get_proAvg_cassavaAll(){
  $con = conDB();
  $query = $con->query("SELECT Sum, Name FROM cassava");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);



  if($data){
    $sum=0;
    for($i=0;$i<sizeof($data);$i++){
      $sum += $data[$i]['Sum'];
    }
    $result = $sum/50;
    return $result;
  }
  else
    return 0;
}
function get_proAvg_sugarcane($province){
  $con = conDB();
  $query = $con->query("SELECT Sum, Name FROM sugarcane WHERE Name='$province'");
  $query->execute();
  $data = $query->fetch(PDO::FETCH_ASSOC);

  if($data)
    return $data;
  else
    return 0;
}
function get_proAvg_sugarcaneAll(){
  $con = conDB();
  $query = $con->query("SELECT Sum, Name FROM sugarcane");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);



  if($data){
    $sum=0;
    for($i=0;$i<sizeof($data);$i++){
      $sum += $data[$i]['Sum'];
    }
    $result = $sum/45;
    return $result;
  }
  else
    return 0;
}
function get_proAvg_oilplam($province){
  $con = conDB();
  $query = $con->query("SELECT Sum, Name FROM oilplam WHERE Name='$province'");
  $query->execute();
  $data = $query->fetch(PDO::FETCH_ASSOC);

  if($data)
    return $data;
  else
    return 0;
}
function get_proAvg_oilplamAll(){
  $con = conDB();
  $query = $con->query("SELECT Sum, Name FROM oilplam");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);



  if($data){
    $sum=0;
    for($i=0;$i<sizeof($data);$i++){
      $sum += $data[$i]['Sum'];
    }
    $result = $sum/66;
    return $result;
  }
  else
    return 0;
}

function get_history_rice($place,$year){
  $con = conDB();

  $query = $con->query("SELECT product_per_plant FROM rice_product WHERE province='$place' AND year=$year");
  $query->execute();
  $data = $query->fetch(PDO::FETCH_ASSOC);

  if($data)
    return $data['product_per_plant'];
  else
    return 0;
}
function get_history_cassava($place,$year){
  $con = conDB();

  $query = $con->query("SELECT product_per_crop FROM cassava_product WHERE province='$place' AND year=$year");
  $query->execute();
  $data = $query->fetch(PDO::FETCH_ASSOC);

  if($data)
    return $data['product_per_crop'];
  else
    return 0;
}

function get_history_plam($place,$year){
  $con = conDB();

  $query = $con->query("SELECT product_per_crop FROM plam_product WHERE province='$place' AND year=$year");
  $query->execute();
  $data = $query->fetch(PDO::FETCH_ASSOC);

  if($data)
    return $data['product_per_crop'];
  else
    return 0;
}

function get_history_rubber($place,$year){
  $con = conDB();

  $query = $con->query("SELECT product_per_crop FROM rubber_product WHERE province='$place' AND year=$year");
  $query->execute();
  $data = $query->fetch(PDO::FETCH_ASSOC);

  if($data)
    return $data['product_per_crop'];
  else
    return 0;
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

function get_data_area($place,$month){
  $con = conDB();

  $query = $con->query("SELECT * FROM calarea WHERE Name='$place' AND Month=$month");
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
