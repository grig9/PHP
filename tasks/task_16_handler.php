<?php
    var_dump($_FILES["image"]);
  
    $temp = pathinfo($_FILES["image"]["name"]);
    //вытаскиваем расширение
    $extension = $temp["extension"];
    $new_name = uniqid('image_', true);
    
    $result = $new_name . "." . $extension;

    move_uploaded_file($_FILES["image"]["tmp_name"], "./images/". $result);

    include "connect_db.php";

  

    $sql = "INSERT INTO images (image) VALUES (:image)";
    $statement = $pdo->prepare($sql);
    $statement->execute(["image" => $result]);

    header("Location: task_16.php");    