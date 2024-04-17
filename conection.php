<?php
    try {
        $connect = new mysqli("localhost","root","","renovacion");
    } catch (\Throwable $th) {
        echo "Error al conectar". $th->getMessage();
    }
