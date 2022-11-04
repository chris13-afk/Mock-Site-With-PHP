<?php
//connect to the server 
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginpro";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword,$dBName);

if(!$conn){
    die('Sorry, Try Again ' . mysqli_connect_error());
}