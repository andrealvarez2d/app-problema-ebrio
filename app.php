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
        <?php
        if(isset($_POST['btn']) && $_POST['btn'] == 'Aceptar'){

        $numAciertos = 0; //contador del numero de aciertos
        $intentos = $_POST['intentos']; //numero de intetos
        $probabilidad = 0; //variable de la probabilidad

        for($i=1; $i<=$intentos; $i++){
            $x = 0; //direccion este-oeste
            $y = 0; //direccion norte-sur
            $cuadrasCaminadas = 0; //# de cuadras caminadas

            echo '<h2>Intento '.$i.'</h2>';

            while ($cuadrasCaminadas != 10){
                $r = rand(0,99); //# aleatorio que representa la probabilidad de direccion

                //evaluar la probabilidad de direccion
                if($r >= 0 AND $r < 25){
                    $y++; //norte
                } elseif($r >= 25 AND $r < 50){
                    $y--; //sur
                }elseif($r >= 50 AND $r < 75){
                    $x++; //este
                }elseif($r >= 75 AND $r < 100){
                    $x--; //oeste
                }

                //incrementar el # de cuadras caminadas
                $cuadrasCaminadas++;

                //mostrar variables posicion X y Y
                echo '<h3>caminata '.$cuadrasCaminadas.'</h3>';
                echo '<p>Posición X: '.$x.' Posición Y: '.$y.'</p>';
                echo '<br>';
            }

            //comprobar si llego a dos calles
                if($y == 0 AND $x == 2 OR $y == 0 AND $x == -2 OR $y == 2 AND $x == 0 OR $y == -2 AND $x == 0) {
                echo '<h3>llego a dos calles</h3>';
                $numAciertos++;
            }

            //mostrar posicion final
            echo '<h3>La posición final es: X: '.$x.', Y: '.$y.'</h3>';
            echo'<br>';
            }

            //calcular y mostrar la probabilidad
            $probabilidad = ($numAciertos/$intentos)*100;
            echo'<h2>probabilidad: '.number_format($probabilidad, 2).' %</h2>';
    }
        ?>
    </center>
</body>

</html>

</html>