<?php

class Connection
{
    private static $instance = null;

    public static function getInstance()
    {
        if (!self::$instance) {
            try {
                $host = "localhost";
                $db = "livraria";
                $user = "root";
                $pass = "1234";

                self::$instance = new PDO(
                    "mysql:host=$host;charset=utf8",
                    $user,
                    $pass
                );

                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                self::$instance->exec("CREATE DATABASE IF NOT EXISTS $db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

                self::$instance->exec("USE $db");
            } catch (PDOException $e) {
                die("Erro ao conectar ao banco de dados: " . $e->getMessage());
            }
        }
        return self::$instance;
    }
}
