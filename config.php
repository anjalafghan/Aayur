<?php
session_start();
$servername     =   "localhost";
$user           =   "aayurshoppy";
$password       =   "}YV}cC!grF6L";
$databaseName   =   "aayurshoppy";
$connect = mysqli_connect($servername,$user,$password,$databaseName);

if (!isset($_SESSION['lang'])) 
    $_SESSION['lang'] = "en";

    else if(isset($_GET['lang']) && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang'])){
        if ($_GET['lang'] == "en") {
            $_SESSION['lang'] = "en"; 
        }
        else{
            $_SESSION['lang'] = "mr";
        }
    }


require_once "languages/" . $_SESSION['lang']. ".php" ;
?>
