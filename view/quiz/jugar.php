<?php


//Si el usuario no esta logeado lo enviamos al index
if (!$_SESSION['usuario']) {
    header("Location:/quiz");
}

//
include("admin/funciones.php");

$confi = obtenerConfiguracion();
$totalPreguntasPorJuego = $confi['totalPreguntas'];

//Variables que contral la partida


if (isset($_POST['siguiente'])) { //Ya esta jugando
    //Aumento 1 en las estadísticas
    aumentarRespondidas();
    $num = $_SESSION['numPreguntaActual'];
    $_SESSION["answers"][$num] = $_POST["respuesta"];
    $_SESSION["valAnswers"][$num] = $_SESSION["respuesta_correcta"] == $_POST["respuesta"];

    //Controlar si la respuesta esta bien
    if ($_SESSION['respuesta_correcta'] == $_POST['respuesta']) {
        $_SESSION['correctas'] = $_SESSION['correctas'] + 1;
        $num = $_SESSION['numPreguntaActual'];
        $_SESSION["answers"][$num] = $_POST["respuesta"];
    }

    //
    $_SESSION['numPreguntaActual'] = $_SESSION['numPreguntaActual'] + 1;
    if ($_SESSION['numPreguntaActual'] < ($totalPreguntasPorJuego)) {
        $preguntaActual = obtenerPreguntaPorId($_SESSION['idPreguntas'][$_SESSION['numPreguntaActual']]);
        $_SESSION['respuesta_correcta'] = $preguntaActual['correcta'];
    } else {
        //Lo enviamos al pagina de los resultados
        //Calculo la cantidad de respuestas incorrectas y lo guardo en una variable global
        $_SESSION['incorrectas'] = $totalPreguntasPorJuego - $_SESSION['correctas'];
        //Obetengo el nombre de la categoria y lo ponogo en una variable global
        $_SESSION['nombreCategoria'] = obtenerNombreTema($_SESSION['idCategoria']);
        $_SESSION['score'] = ($_SESSION['correctas'] * 100) / $totalPreguntasPorJuego;
        header("Location: /quiz/final");
    }

} else { //comenzó a jugar
    $_SESSION['correctas'] = 0;
    $_SESSION['numPreguntaActual'] = 0;
    $_SESSION['preguntas'] = obtenerIdsPreguntasPorCategoria($_SESSION['idCategoria']);
    $_SESSION['idPreguntas'] = array();
    $_SESSION["valAnswers"] = [];
    $_SESSION["answers"] = [];

    foreach ($_SESSION['preguntas'] as $idPregunta) {
        array_push($_SESSION['idPreguntas'], $idPregunta['id']); // Item agregado
    }

    //Desordeno el arreglo
    shuffle($_SESSION['idPreguntas']);
    $preguntaActual = obtenerPreguntaPorId($_SESSION['idPreguntas'][0]);
    $_SESSION['respuesta_correcta'] = $preguntaActual['correcta'];
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />    <title>QUIZ GAME</title>
    <link rel="stylesheet" href="/public/styles/quiz.css?v?=7">
</head>

<body>
    <?php include("view/includes/header.php") ?>
    <div class="container-juego" id="container-juego">
        <header class="header">
            <div class="categoria">
                <?php echo obtenerNombreTema($preguntaActual['tema']) ?>
            </div>
            <a href="/quiz/home">Piniors</a>
        </header>
        <div class="info">
            <div class="estadoPregunta">
                Pregunta <span class="numPregunta">
                    <?php echo $_SESSION['numPreguntaActual'] + 1 ?>
                </span> de
                <?php echo $totalPreguntasPorJuego ?>
            </div>
            <h3>
                <?php echo $preguntaActual['pregunta'] ?>
            </h3>
            <form action="/quiz/jugar" method="POST">
                <div class="opciones">
                    <label for="respuesta1" onclick="seleccionar(this)" class="op1">
                        <p>
                            <?php echo $preguntaActual['opcion_a'] ?>
                        </p>
                        <input type="radio" name="respuesta" value="A" id="respuesta1" required>
                    </label>
                    <label for="respuesta2" onclick="seleccionar(this)" class="op2">
                        <p>
                            <?php echo $preguntaActual['opcion_b'] ?>
                        </p>
                        <input type="radio" name="respuesta" value="B" id="respuesta2" required>
                    </label>
                    <label for="respuesta3" onclick="seleccionar(this)" class="op3">
                        <p>
                            <?php echo $preguntaActual['opcion_c'] ?>
                        </p>
                        <input type="radio" name="respuesta" value="C" id="respuesta3" required>
                    </label>
                </div>
                <div class="boton">
                    <input type="submit" value="Siguiente" name="siguiente">
                </div>
            </form>
        </div>
    </div>
    <script src="/public/script/juego.js"></script>
    <script>

        console.log(
            <?php echo json_encode($_SESSION["answers"]); ?>,
            <?php echo json_encode($_SESSION["valAnswers"]); ?>
        )
    </script>
</body>

</html>