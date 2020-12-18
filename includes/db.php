<?php
if($_SERVER['HTTP_HOST']=='api.thecassava.co' || $_SERVER['HTTP_HOST']=='www.api.thecassava.co'){
  // production server
  // define("SERVER_TYPE","PROD");
  $servername = "localhost:3306";
  $username = "superuser";
  $password = "V84_wnqCM4ocfjzv";
  $db="cassava_prod_";
}
else{
  //development server
  // define("SERVER_TYPE","DEV");
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "cassava";
}



// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('Asia/Kolkata');

?>
