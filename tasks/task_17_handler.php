<?php
  include "connect_db.php";
  $id = $_GET["id"];
  $image = $_GET["image"];

  var_dump($_GET); 
  var_dump($file["filename"]); 
  // die;
  unlink("./images/" .$image);
  

  $statement = $pdo->prepare("DELETE FROM images WHERE id=:id");
  $statement->execute(["id" => $id]);

  

  // $statement = $pdo->prepare("SELECT * FROM images WHERE id=:id");
  // $statement->execute(["id" => $id]);
  // $result = $statement->fetch(PDO::FETCH_ASSOC);




  header("Location: ./task_16.php");