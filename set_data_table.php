<?php

include "get_data.php";

$page = $_POST['page'];
$check = $_POST['type'];

switch($check) {
    case "rice":
        $data = get_chart_rice();
        include "table/table_rice.php";
        break;
    case "rubber":
        $data = get_chart_rubber();
        include "table/table_rubber.php";
        break;
    case "cassava":
        $data = get_chart_cassava();
        include "table/table_cassava.php";
        break;
    case "sugarcane":
        $data = get_chart_sugarcane();
        include "table/table_sugarcane.php";
        break;
    case "oilpalm":
        $data = get_chart_oilplam();
        include "table/table_oilpalm.php";
        break;
  }




?>
