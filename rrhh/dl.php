<?php
    include("../conection.php");
    if ($_GET) {
        $id = $_GET["id"];
        $sql = "SELECT p.nombre_completo, `antiguedad`, `condicion`, `estudios`, `area`, `persona_a_cargo`, `Disponibilidad` FROM rrhh_dl l, rrhh_dp p WHERE p.id = l.id;";
        $result = mysqli_query($connect, $sql);
        $datos = mysqli_fetch_array($result);
    }else{
        die("Necesito una persona");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Persona: <?php echo $datos['nombre_completo']?></h2>
    <table border="1">
        <tr>
            <th>Antigüedad</th>
            <th>Condición</th>
            <th>Estudios</th>
            <th>Área</th>
            <th>Persona a cargo</th>
            <th>Disponibilidad Horaria</th>
        </tr>
        <tr>
            <td><?php echo $datos['antiguedad'] ?></td>
            <td><?php echo $datos['condicion'] ?></td>
            <td><?php echo $datos['estudios'] ?></td>
            <td><?php echo $datos['area'] ?></td>
            <td><?php echo $datos['persona_a_cargo'] ?></td>
            <td><?php echo $datos['Disponibilidad'] ?></td>
        </tr>
    </table>
</body>
</html>