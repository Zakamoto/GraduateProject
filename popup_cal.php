<?php

include "get_data.php";
$area = $_POST['area'];
$result = get_data_area($area);

if($result)
  echo 1;
else
  echo 0;

 ?>
