<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

define("DB_HOST", "DESKTOP-PD4I4FA");
define("DB_USER", "sa");
define("DB_PASSWORD", "123");
define("DB_NAME", "superlogica");
define("DB_DRIVER", "sqlsrv");


class Connection
{
    function __construct()
    {
    }

    /**
     * Montando Conexao com o Banco de Dados
     */
    public function Connection()
    {

        $pdoConfig = DB_DRIVER . ":" . "Server=" . DB_HOST . ";";
        $pdoConfig .= "Database=" . DB_NAME . ";";

        try {
            if (!isset($connection)) {
                $connection = new PDO($pdoConfig, DB_USER, DB_PASSWORD);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return $connection;
        } catch (PDOException $e) {
            $mensagem = "Drivers disponiveis: " . implode(",", PDO::getAvailableDrivers());
            $mensagem .= "\nErro: " . $e->getMessage();
            throw new Exception($mensagem);
        }
    }


    /**
    * @param string Fazendo Consulta na Tabela USERS
    * @param array Passando como parametro o login e o password
    */
    public function login($login, $pass)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("SELECT count(id) FROM users WHERE username = '$login' AND password = '$pass'");
            $query->execute();
            $row = $query->fetch(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
        }
    }


    /**
    * @param string Fazendo Inserção na Tabela USERS
    * @param array Passando como parametro o nome, usuario, cep, email, password
    */
    public function register($name, $userName, $zipCode, $email, $password)
    {
        // echo "INSERT INTO users VALUES ('$name', '$userName', '$zipCode', '$email', '$password')";
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare("INSERT INTO users VALUES ('$name', '$userName', '$zipCode', '$email', '$password')");
            $query->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
        }
    }

    public function dml($query)
    {
        try {
            $conexao = Connection::Connection();
            $query = $conexao->prepare($query);
            $query->execute();
            $row = $query->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        } catch (PDOException $e) {
        }
    }
}