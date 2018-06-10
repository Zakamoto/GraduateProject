<?php

include "get_data.php";

$page = $_POST['page'];

$data = get_dataAll();

include "table/table1.php";

?>
