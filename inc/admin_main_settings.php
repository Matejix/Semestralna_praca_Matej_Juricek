<?php 
  include 'main_settings.php';

  if(!isset($_SESSION['logged']) || $_SESSION['isAdmin'] != '1'){
    header("Location: index.php");
  }
?>