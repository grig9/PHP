<?php
  include "connect_db.php";

  // Обновление записи о пользователе
  $sql = "UPDATE task_8 SET `First_name`=:firstname, `Last_name`=:lastname,  `User_name`=:Username WHERE id=:id";
  $statement = $pdo->prepare($sql);
  $statement->execute($_POST);

  // переадресация на главную страницу
  header ("Location: task_8.php");