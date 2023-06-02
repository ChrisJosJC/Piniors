<?php

error_reporting(E_ALL); // Error/Exception engine, always use E_ALL

ini_set('ignore_repeated_errors', TRUE); // always use TRUE

ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

ini_set('log_errors', TRUE); // Error/Exception file logging engine.

ini_set("error_log", "error.log");
error_log("Hello, errors!");

require_once 'libs/database.php';
require_once 'libs/Controller.php';
require_once 'libs/View.php';
require_once 'libs/Model.php';
require_once 'libs/app.php';

require_once 'config/dotenv.php';
require_once 'config/config.php';
$app = new App();

?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo sentimos Gama...</title>
</head>
<body>
    <main><h1>Our apologies...</h1>
    <h2>We're gonna do it better next, Gama!</h2></main>

    <style>
        body{
            display:grid;
            place-items: center;
            width: 100%;
            height: 100svh;
            margin: 0;
            box-sizing: border-box;
            background-color: #faa013;
            font-family: 'Poppins';
        }
        h1{
            font-weight:800;
            font-size:6rem;
        }
    </style>
</body>
</html> -->