<?php

$server = "127.0.0.1";
$username = "root";
$database = "sistem_informasi_akademik";
$conn = new mysqli($server, $username, "", $database);

if($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
}

?>