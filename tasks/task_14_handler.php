<?php
session_start();

$email = $_POST["email"];
$password = $_POST["password"];


include "connect_db.php";
$sql = "SELECT * FROM `task_14` WHERE (email = ?)";
$statement = $pdo->prepare($sql);
$statement->execute([$email]);
$result = $statement->fetch(PDO::FETCH_ASSOC);

if(empty($result)){
    $_SESSION["danger"] = "Неверный логин или пароль";
    header('Location: ./task_14.php');
    exit;
}

if(!password_verify($password, $result["hash"])) {
    $_SESSION["danger"] = "Неверный логин или пароль";
    header('Location: ./task_14.php');
    exit;
}

$_SESSION["success"] = $email;

header('Location: ./task_15.php');