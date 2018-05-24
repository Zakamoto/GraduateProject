<?php

$page = $_POST['page'];

$data = array(100);
for($i=0;$i<100;$i++){
  $data[$i] = $i+100;
}

include "table/table1.php";

?>
