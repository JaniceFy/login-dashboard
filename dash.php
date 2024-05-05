<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--========= CSS ============-->
    <link rel="stylesheet" href="css/styleDash.css">

    <!--========= Boxicons CSS ============-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Document</title>
</head>

<body>

    <header>
        <?php
        session_start();
        ?>
    </header>

    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image" id="image">
                    <img src="img/diamante.png" alt="logo">
                </span>


                <div class="text header-text">
                    <span class="vame">JanCode</span>
                    <span class="profession">Desarrollo web</span>
                </div>

                <i class="bx bx-chevron-right toggle"></i>

            </div>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class="bx bx-search icon"></i>
                    <input type="text" placeholder="Search...">
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Tablero</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-group icon"></i>
                            <span class="text nav-text">Clientes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-package icon"></i>
                            <span class="text nav-text">Proveedores</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class="bx bx-pie-chart-alt icon"></i>
                            <span class="text nav-text">Ventas</span>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="botton-content">
                <li class="">
                    <a href="#" onclick="window.location.href = 'cerrar.php';">
                        <i class="bx bx-log-out icon"></i>
                        <span class="text nav-text">Salir</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="moon-sun">
                        <i class="bx bx-moon icon moon"></i>
                        <i class="bx bx-sun icon sun"></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>
                    <div class="toogle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>

        </div>
    </nav>

    <section class="home">
        <div class="text"><?php echo 'Bienvenid@ > ' . $_SESSION['admin'] . '<br>' ?></div>
    </section>

    <script src="scriptDash.js"></script>

</body>

</html>l