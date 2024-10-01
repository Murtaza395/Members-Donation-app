<?php
//error_reporting(0);
$siteName = "demo.com";

//DEFINE("BASE_URL","http://cipetbhopal.com/");
//DEFINE("BASE_URL","http://localhost/SchoolFeesSystem/");
$Base_URL="http://localhost/SchoolFeesSystem/";
date_default_timezone_set('Asia/Calcutta'); 
$conn =  new mysqli('localhost','root','','tei');
if($conn->connect_error){
die("Failed to connect database ".$conn->connect_error );
}