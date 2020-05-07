<?php
  //Local Server Information
  $server = "127.0.0.1";
  $username = "root";
  $password = "";
  $db = "bitbin";
  $charset = "utf8mb4";

  // Hides potential errors for the user.
  error_reporting(0);
  ini_set('display_errors', 0);

  //Check if connection was successful
  try {
    $pdo = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connectie met de database succesvol";
    
  } catch(PDOException $e) {
    die("Iets is verkeerd gegaan :(");
  }
  
?>

