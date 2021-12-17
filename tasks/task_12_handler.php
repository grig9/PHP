<?php

session_start();

$_SESSION["info"] = $_POST["text"];

header("Location: task_12.php");