<?php

$serverName = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "crudtest";

$conn = mysqli_connect($servername,$dbUser,$dbPass,$dbName);

if(!$conn){
   die("Connection failed: ". mysqli_connect_error($conn));
}