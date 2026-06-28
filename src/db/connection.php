<?php

function newConnection($db = 'curso_php')
{
    $server = 'db';
    $username = 'root';
    $password = '153624';

    $connection = new mysqli($server, $username, $password, $db);

    if ($connection->connect_error) {
        die('Connection failed: ' . $connection->connect_error);
    }

    return $connection;
}
