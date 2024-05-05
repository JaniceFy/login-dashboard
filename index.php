<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Login</title>
</head>

<body>
    <div class="split-screen">
        <div class="left">
            <section class="copy">
                <h1>¡Bienvenido!</h1>
                <p>Nos alegra verte otra vez. Inicia sesión para continuar.</p>
            </section>
        </div>
        <div class="right">

            <?php
            error_reporting(0);
            session_start();
            if (!isset($_SESSION['admin'])) {
            ?>



                <form name="frmLogin" method="POST" action="login.php">
                    <section class="copy">
                        <h2>Iniciar sesión</h2>
                    </section>
                    <div class="input-container name">
                        <label for="usuario">Usuario</label>
                        <input type="text" id="usuario" name="txtUsuario" placeholder="Ingrese su usuario">
                    </div>

                    <div class="pass">
                        <label for="password">Contraseña</label>
                        <div class="input-container password">
                            <input type="password" id="password" name="txtPassword" placeholder="Ingrese su contraseña">
                            <i class="far fa-eye-slash"></i>
                        </div>
                    </div>


                    <div class="input-container cta">
                        <label class="checkbox-container">
                            <input type="checkbox">
                            <span class="checkmark"></span> 
                            Recordar contraseña
                        </label>
                    </div>


                    <button type="submit" class="signup-btn">Ingresar</button>

                <?php
                    } else {
                        header('location:dash.php');
                    }
                    if (isset($_SESSION['error'])) {
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    }
                ?>

                </form>
        </div>
    </div>
    <script>
        const eyeIcon = document.querySelector('.far.fa-eye-slash');
        const passwordInput = document.getElementById('password');

        eyeIcon.addEventListener('click', () => {
            const type = passwordInput.type === 'password' ? 'text' : 'password';
            passwordInput.type = type;

            eyeIcon.classList.toggle('fa-eye-slash');
            eyeIcon.classList.toggle('fa-eye');
        });
    </script>
</body>

</html>