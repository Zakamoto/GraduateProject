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
    return "ไม่พบข้อมูล";
}

function get_chart_rubber(){
  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล
  $query = $con->query("SELECT Sum, Name FROM rubber");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);

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

  if($data){
      return $data;
  }
  else
    return "ไม่พบข้อมูล";
}

function get_dataSelect($y,$month,$date,$time){

  if($y==1){$year=2557;}
  else if($y==2){$year=2558;}
  else if($y==3){$year=2559;}
  else if($y==4){$year=2560;}
  else {$year=2561;}

  //เชื่อม database
  $con = conDB();

  //ดึงข้อมูล อุณหภูมิ + ความชื้น
  $query = $con->query("SELECT TC, RH, place.Name FROM data,place WHERE data.Place=place.Id AND Year=$year AND Month='$month' AND Date=$date AND Time=$time");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);

  if($data){
      return $data;
  }
  else
    return "ไม่พบข้อมูล";
}


 ?>
