<?php 
  include "connect_db.php";

  $sql = "DELETE FROM task_8 WHERE id=:id";
  $statement = $pdo->prepare($sql);
  $statement->execute($_GET);
  
  header ("Location: task_8.php");
;?>