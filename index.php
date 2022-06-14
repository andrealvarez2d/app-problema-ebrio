<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El problema del EBRIO</title>
    <style>
    html {
        height: 100%;
    }

    body {
        height: 100%;
        background: linear-gradient(to right, #8C579C, #24468E);
    }

    h1,
    h2,
    h3,
    p {
        color: white;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    </style>
</head>

<body>
    <center>
        <h1>Realizado por: Andrea Álvarez C.I. 27.847.021</h1>
        <h1>Desarrollar una aplicación que permita resolver el problema del EBRIO</h1>
        <h2>Supongamos que un ebrio está parado en una esquina, cuando decide caminar para que le pase el efecto “ya
            ustedes
            saben cuál”. Supongamos que existe una probabilidad igual de que se dirija al norte, sur, este u oeste al
            llegar
            a cada esquina. Si camina 10 calles, ¿Cuál es la probabilidad de que termine su recorrido a dos calles de
            donde
            lo empezó?
        </h2>

        <h2>Ingrese número de intentos:</h2>
        <form action="app.php" method="post">
            <input type="number" name="intentos" min="5" max="100">
            <input type="submit" name="btn" value="Aceptar">
            <input type="reset" name="btn" value="Borrar">
        </form>
    </center>
</body>

</html>