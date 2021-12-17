<?php 
    session_start();

    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    include "connect_db.php";
    //выборка по условию
    $sql = "SELECT * FROM users WHERE (email = ?)";
    $statement = $pdo->prepare($sql);
    $statement->execute([$email]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);

    if(!empty($result)) {
        $_SESSION["danger"] = "Этот эл адрес уже занят другим пользователем";
        header("Location: task_11.php");
        exit;
    }

    // добавление пользователя
    $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
    $statement = $pdo->prepare($sql);
    $statement->execute([$email, $password]);

    $_SESSION["success"] = "Пользователь добавлен";
    header("Location: task_11.php");