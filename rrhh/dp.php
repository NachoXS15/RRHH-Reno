<?php
    include("../conection.php");
    $sql = "SELECT * FROM rrhh_dp";
    $result = mysqli_query($connect, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RR-HH</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Recursos Humanos</h2>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>DNI</th>
            <th>Fecha de Nacimiento</th>
            <th>Teléfono</th>
            <th>Domicilio</th>
            <th>Hijos</th>
            <th>Observaciones</th>
        </tr>
        <?php
            foreach ($result as $row) {
        ?>
            <tr>
                <td><?php echo $row['nombre_completo'] ?></td>
                <td><?php echo $row['dni'] ?></td>
                <td><?php echo $row['nacimiento'] ?></td>
                <td><?php echo $row['telefono'] ?></td>
                <td><?php echo $row['domicilio'] ?></td>
                <td><?php $hijos = $row['hijos'] ? $row['hijos'] : "No tiene";  echo $hijos?></td>
                <td><?php echo $row['observaciones'] ?></td>
                <td><a href="dl.php?id=<?php echo $row['id'] ?>">Dat. Laborales</a></td>
                <td><button>Editar</button></td>
                <td><button>Eliminar</button></td>
            </tr>
        <?php
            }
        ?>
    </table>

    <a href="addRegistro.php">Añadir registro</a>
</body>
</html>