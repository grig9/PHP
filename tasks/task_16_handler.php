<?php

  for($i = 0; $i < count($_FILES["image"]["name"]); $i++) {
    upload_image(
      $_FILES["image"]["name"][$i], 
      $_FILES["image"]["tmp_name"][$i]
    );
  }

  function upload_image($file, $tmp_name) {
    $result = pathinfo($file);
    //создаем уникальное имя и вытаскиваем расширение файла 
    $filename = uniqid('image_', true) . "." . $result["extension"];
    //перемещаем файл из временного хранилища по указанному пути
    move_uploaded_file($tmp_name, "./images/". $filename);
    
    insert_image_db("images", "image", $filename);
  }

  function insert_image_db($tablename, $column, $value) {
    include "connect_db.php";
    $sql = "INSERT INTO $tablename ($column) VALUES (?)";
    $statement = $pdo->prepare($sql);
    $statement->execute([$value]);
  }

  header("Location: task_16.php");    