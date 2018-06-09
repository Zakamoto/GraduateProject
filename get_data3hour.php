<?php

include "conDB.php"; //connect database

function get_data3hour($y,$month,$date,$time){

  if($y==1){$year=2557;}
  else if($y==2){$year=2558;}
  else if($y==3){$year=2559;}
  else if($y==4){$year=2560;}
  else {$year=2561;}

  //เชื่อม database
  $con = conDB();

  $query = $con->query("SELECT * FROM data WHERE Year=$year AND Month='$month' AND no_Date=$date AND no_Time=$time");
  $query->execute();
  $data = $query->fetchAll(PDO::FETCH_ASSOC);

if($data){
    return $data;
}
else
  return "ไม่พบข้อมูล";
}

 ?>
