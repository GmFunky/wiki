<?php 
session_start();
// var_dump($SESSION);
if(!isset($_SESSION["username"])){
      header("Location: login.php");
      exit();}
      ?>