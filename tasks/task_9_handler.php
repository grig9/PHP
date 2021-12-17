<?php
  include "connect_db.php";

  // добавление информации
  $sql = "INSERT INTO task_9 (text) VALUES (:simpleinput)";
  $statement = $pdo->prepare($sql);
  $statement->execute($_POST);
    var_dump($_POST);
  // переадресация на главную страницу
  header ("Location: task_9.php");