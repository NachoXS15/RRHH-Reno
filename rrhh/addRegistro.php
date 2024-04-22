<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Crear Registro</h2>
    <form action="validarCargaDP.php" method="get">
        <section>
            <label for="nombre">Nombre y Apellido Completo</label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <label for="DNI">DNI</label>
            <input type="text" name="dni" id="DNI">
            <br>
            <label for="birth">Fecha de Nacimiento</label>
            <input type="date" name="birth" id="birth">
            <br>
            <label for="tel">Teléfono</label>
            <input type="tel" name="tel" id="tel">
            <br>
            <label for="domicilio">Domicilio</label>
            <input type="text" name="address" id="address">
            <br>
            <label for="hijos">Cantidad de hijos</label>
            <input type="number" name="kids" id="kids">
            <br>
            <br>
            <label for="obvs">Observaciones</label> <br>
            <textarea name="obvs" id="" cols="30" rows="10"></textarea>
        </section>
        <section>
            <label for=""></label>
        </section>
        <br><br>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
        
    </form>
</body>
</html>