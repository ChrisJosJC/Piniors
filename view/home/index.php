<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piniors</title>
    <link rel="stylesheet" href="<?php echo constant("URL") ?>public/styles/home.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">

    <meta property="og:title" content="Piniors">
    <meta property="og:type" content="page" />
    <meta property="og:description" content="No seas un pino para siempre!">
    <meta property="og:image" content="https://piniors.com/public/img/DarkLogoLogo.png">
    <meta property="og:url" content="https://piniors.com/">
    <meta name="twitter:card" content="summary_large_image">
</head>

<body>
    <?php include("view/includes/header.php") ?>
    <header id="img-banner">

    </header>
    <section>
        <div class="container reveal">
            <h1 class="heading-one">Aprende. Genera. <span id="build">Construye en...</span><b>PINIORS</b></h1>
            <a href="/login" class="link">Iniciar ya</a>
            <img src="/public/img/idea_bomb.png" id="idea" />
            <!-- <div class="cards">
                <div class="animado">
                    <img src="/public/icons/book.svg" width="200px" height="200px">
                    <img src="/public/icons/plus.svg" width="50px" height="50px" class="icon">
                </div>
                <div class="animado">
                    <img src="/public/icons/coffee.svg" width="200px" height="200px" alt="">

                </div>
                <div class="animado last">
                    <img src="/public/icons/equal.svg" width="50px" height="50px" class="icon">
                    <img src="/public/icons/website.svg" width="200px" height="200px" id="roc">

                </div>
            </div> -->

            <section class="info">
                <div class="care">
                    <h2>Nuestros servicios</h2>
                    <p>Piniors es una plataforma en la que todos pueden adquirir conocimiento de programación de manera
                        efectiva y accesible. Creemos firmemente que aprender a programar no solo es una habilidad
                        valiosa
                        en el mundo actual, sino que tambien puede ser una experiencia enriquecedora y divertida.</p>
                    <div class="car">
                        <hr>
                        <h2>Nuestros objetivos</h2>
                    </div>
                    <p>El objetivo de Piniors es el análisis y la lógica de programación en los desarrolladores juniors
                        ofreciendo un espacio recreativo, para todos aquellos usuarios que se encuentran deseosos de
                        poder
                        mejorar su lógica de programación al enfrentarse a problemas y juegos que pueden ayudarle a
                        mejorar
                        lo que es su velocidad de escritura, sintaxis de código, reconocimiento de lenguajes, desarrollo
                        teorico de programación.</p>
                    <a href="/login" class="link">Iniciar ya</a>

                </div>
                <img src="/public/img/coder.gif" alt="">
            </section>
        </div>

    </section>

    <?php include('view/includes/footer.php') ?>
    <script src="/public/script/ejemplo.js"></script>
    <script src="/public/script/care.js"></script>
    <script src="/public/script/car.js"></script>
</body>

</html>