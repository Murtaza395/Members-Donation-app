<?php
session_start();
if(isset($_SESSION['rainbow_uid'])){
 header('Location:../index.php');
}