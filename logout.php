<?php
session_start(); 
echo "Logging you out, please wait!";

session_unset(); 
session_destroy(); 


header("Refresh:2; url=login.php");
exit();

