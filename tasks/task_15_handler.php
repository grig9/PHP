<?php
    session_start();

    unset($_SESSION["username"]);

    header("Location: ./task_14.php");