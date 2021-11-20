<?php

include ("../../Classes/Connection.php");
$conn = new \Connection();

$conn->login = $_POST['login'];
$conn->password = $_POST['password'];

$logar = $conn->login($_POST['login'], $_POST['password']);

session_start();
$_SESSION['login'] = $_POST['login'];

foreach($logar as $log) {
    if ($log >= 1) {
        header('Location: ../../menu.php');
    } else {
        header('Location: ../../index.php');
    }
}