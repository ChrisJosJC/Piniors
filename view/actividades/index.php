<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades Piniors</title>
    <link rel="stylesheet" href="/public/styles/actividades.css">
</head>

<body>
    <?php include("view/includes/header.php") ?>


    <div class="cam">
        <h1>PINIORS</h1>
    </div>
    
    <h2>Actividades</h2>
    <div class="car">

        <div class="contenedor">

            <div class="caja-animado">

                <h2>Editor de codigo</h2>
                <p>Actividad en la cual podrás almacenar y ver una previsualización
                    del código en tiempo real utilizando HTML, CSS y JAVASCRIPT.</p>
                <a href="#"> <button class="btn">Jugar ya mismo</button></a>
            </div>

            <div class="caja-animado">
                <h2>Quiz</h2>
                <p>un juego de preguntas acerca de distintos temas en el cual
                    demostrarás tus conocimientos sobre estos, desde historia,
                    deporte, programación, física y comida.</p>
                <a href="#"> <button class="btn">Jugar ya mismo</button></a>
            </div>
        </div>


        <div class="conte">
            <div class="caja-animado1">
                <h2>Memoria</h2>
                <p>Juego en el cual podrás mejorar tu capacidad de memorizar las cosas, en este caso, los números.</p>
                <a href="#"> <button class="btn">Jugar ya mismo</button></a>
            </div>

            <div class="caja-animado1">
                <h2>Lenguaje</h2>
                <p>Juego en el cual podrás mejorar tu capacidad de memorizar las cosas, en este caso, los números.</p>
                <a href="#"> <button class="btn">Jugar ya mismo</button></a>
            </div>
        </div>
    </div>
    <?php include('view/includes/footer.php') ?>

    <script src="/public/script/actividad.js"></script>
    <script src="/public/script/actividades.js"></script>
</body>

</html>