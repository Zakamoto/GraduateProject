<?php

function conDB(){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tcandrh";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname; charset=utf8mb4;", $username, $password);
    }
   catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

return $conn;

}

?>
