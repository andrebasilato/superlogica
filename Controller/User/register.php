<?php

include ("../../Classes/Connection.php");
$conn = new \Connection();

// nome, login, cep, email, senha

$conn->name = $_POST['name'];
$conn->userName = $_POST['userName'];
$conn->zipCode = $_POST['zipCode'];
$conn->email = $_POST['email'];
$conn->password = $_POST['password'];

$name = $_POST['name'];
$userName = $_POST['userName'];
$zipCode = str_replace("-", "", $_POST['zipCode']);
$email = $_POST['email'];
$password = $_POST['password'];


$registers = $conn->register($name, $userName, $zipCode, $email, $password);

session_start();
$_SESSION['login'] = $userName;

echo '<script>
alert("Cadastro feito com Sucesso.");

window.location.href = "../../index.php";
</script>';
