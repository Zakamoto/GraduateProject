<?php

include "get_data.php";
$area = $_POST['area'];
$month = date('n');
$result = get_data_area($area,$month);

if($result)
  echo 1;
else
  echo 0;

 ?>
