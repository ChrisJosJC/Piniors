<header class="header-basic">
    <div class="header-content">
        <div class="logo">
            <i style='font-size: 1rem;' class='fa-solid fa-arrow-left' onclick='comeBack()'></i>
            <img src="/public/favicon.svg" width="40px">
            <div class="conteiner">
                <h1><b><a href="/">Piniors</a></b></h1>
            </div>
        </div>
        <div class="menu">
            <nav>
                <ul id="links-pc">
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/actividades">Actividades</a></li>
                    <?php
                    if (!isset($_SESSION["rol"])) {
                    ?>
                        <li><a href="/login">Inicia sesion</a></li>
                    <?php
                    } else if ($_SESSION["rol"] == "admin") {
                    ?>
                        <li><a href="/panel">Panel</a></li>
                        <li><a href="/login/logout"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                    <?php
                    } else {
                    ?>
                        <li><a href="/dashboard">Panel</a></li>
                        <li><a href="/login/logout"><i class="fa-solid fa-right-from-bracket"></i></a></li>
                    <?php
                    }
                    ?>
                </ul>
            </nav>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
</header>
<div id="myLinks">
<a href="/blog">Blog</a>
                    <a href="/actividades">Actividades</a>
                    <?php
                    if (!isset($_SESSION["rol"])) {
                    ?>
                        <a href="/login">Inicia sesion</a>
                    <?php
    }else if ($_SESSION["rol"] == "admin") {
    ?>
        <a href="/panel">Panel</a>
        <a href="/login/logout">Cerrar sesion <i class="fa-solid fa-right-from-bracket"></i></a>
    <?php
    } else {
    ?>
        <a href="/dashboard">Panel</a>
        <a href="/login/logout">Cerrar sesion <i class="fa-solid fa-right-from-bracket"></i></a>
    <?php
    }
    ?>
</div>
<script>
    function myFunction() {
        var x = document.getElementById("myLinks");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    function comeBack() {
        history.back()
    }
</script>
<script defer src="https://kit.fontawesome.com/3f1ffa954b.js" crossorigin="anonymous"></script>

