<?php
  session_start();

  include "connect_db.php";
  //выборка по условию
  $sql = "SELECT * FROM task_10 WHERE text=:text";
  $statement = $pdo->prepare($sql);
  $statement->execute($_POST);
  $result = $statement->fetch(PDO::FETCH_ASSOC);

  if(!empty($result)){
    $_SESSION["danger"] = "Такая запись уже есть в таблице";
    header ("Location: task_10.php");
    exit;
  }
  // добавление информации
  $sql = "INSERT INTO task_10 (text) VALUES (:text)";
  $statement = $pdo->prepare($sql);
  $statement->execute($_POST);

  $_SESSION["success"] = "Запись успешно добавлено в таблицу";
  
  header ("Location: task_10.php");