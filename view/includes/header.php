<header class="header-basic">
    <div class="header-content">
        <div class="logo">
            <img src="/public/favicon.svg" width="40px">
            <div class="conteiner">
                <h1><b><a href="/">Piniors</a></b></h1>
            </div>
        </div>
        <div class="menu">
            <nav>
                <ul>
                    <li><a href="/blog">Blog</a></li>
                    <li><a href="/actividades">Actividades</a></li>
                    <?php
                    if (!isset($_SESSION["rol"])) {
                        ?>
                        <li><a href="/login">Inicia sesion</a></li>
                        <?php
                    }else if ($_SESSION["rol"] == "admin") {
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
</header>