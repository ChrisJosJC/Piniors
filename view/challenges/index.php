<?php 

function acortarurl($url){
    $longitud = strlen($url);
    if($longitud > 45){
        $longitud = $longitud - 30;
        $parte_inicial = substr($url, 0, -$longitud);
        $parte_final = substr($url, -15);
        $nueva_url = $parte_inicial."[ ... ]".$parte_final;
        return $nueva_url;
    }else{
        return $url;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public\styles\challege.css">
    <title>Retos de programacion</title>
</head>
<body>
<?php include("view/includes/header.php") ?>
    <main>
        <aside>
            <h1>Escribe tus propios programas desde la web</h1>
            <p>Deja de preocuparte por todas esos editos y comienza a desarrollar tu propio codigo desde tu navegador con Piniors. Compartelo y guardalo para siempre. </p>
            <button data-href="" id="btn-share">Compartir</button>
        </aside>
        <div class="container">
            <textarea id="html" placeholder="HTML5">
<h1>Preview de la pagina principal</h1>
            </textarea>
            <textarea id="js" placeholder="Javascript">console.log("Hola mundo")</textarea>
            <textarea id="css" placeholder="CSS">
h1{
    color:#000;
    font-family:Poppins;
}
body{
    display:grid;
    place-items:center;
    height:100%;
    box-sizing:border-box;
}
            </textarea>
            <iframe srcdoc="" id="preview"></iframe>
        </div>
    </main>
    <script defer src="/public/script/challenge.js"></script>
</body>
</html>