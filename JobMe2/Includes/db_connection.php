<?php

$database['database_host'] = "localhost";
$database['database_user'] = "root";
$database['database_pass'] = "";
$database['database_name'] = "19119509";

foreach($database as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DATABASE_HOST, DATABASE_USER,DATABASE_PASS,DATABASE_NAME);
if (!$connection) {
  die("Connection to data base failed ");

}



$query = "SET NAMES utf8";
mysqli_query($connection,$query);

 ?>
