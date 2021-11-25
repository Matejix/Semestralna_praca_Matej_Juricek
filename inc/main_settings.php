<?php 
  session_start();
  include 'db_connect.php';
  global $db, $conn;
  $db = new Database();
  $conn = $db->getConnection();
?>