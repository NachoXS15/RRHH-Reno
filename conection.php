<?php
    $host = getenv("DB_HOST");
    $user = getenv("DB_USER");
    $pass = getenv("DB_PASS");
    $db = getenv("DB_NAME");
    try {
        $connect = new mysqli($host, $user, $pass, $db);
        echo "Conexión exitosa";
    } catch (\Throwable $th) {
        echo "Error al conectar". $th->getMessage();
    }
