<?php

function newConnection($db = 'curso_php')
{
    $server = 'db';
    $username = 'root';
    $password = '153624';

    try {
        $connection = new PDO(
            "mysql:host=$server;dbname=$db",
            $username,
            $password
        );

        return $connection;
    } catch (PDOException $pe) {
        die('Erro: ' . $pe->getMessage());
    }
}
