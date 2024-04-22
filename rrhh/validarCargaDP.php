<?php
    include("../conection.php");
    if ($_GET) {
        $nombre = $_GET["nombre"];
        $dni = $_GET["dni"];
        $birth = $_GET["birth"];
        $tel = $_GET['tel'];
        $address = $_GET['address'];
        $kids = $_GET['kids'];
        $obvs = $_GET['obvs'];
        
        $sql = "INSERT INTO `rrhh_dp`(`id`, `nombre_completo`, `dni`, `nacimiento`, `telefono`, `hijos`, `domicilio`, `observaciones`)
        VALUES (null, '$nombre', $dni, '$birth', $tel, $kids, '$address','$obvs')";
        $result = mysqli_query($connect, $sql);
        if (!$result) {
            echo "Error al subir";
            echo '<a href="index.html">Volver a inicio</a>';
        }else{
            echo "Subida éxitosa";
        }
    }else{
        echo "Se requieren datos";
    }
