<?php
ob_start(); //Turns on output buffering
session_start();

date_default_timezone_set("Europe/Prague");

try {
    $con = new PDO("mysql:dbname=FreediveTube;host=localhost", "root", "");
  //$con = new PDO("mysql:dbname=freefhzn_freedivetube;host=localhost", "freefhzn_rangapin", "db_password");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
