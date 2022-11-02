<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesion o Registrate</title>

    <link rel="stylesheet" href="https://sdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/aebefc0ddc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/Login.css">
</head>

<body>
    <header>
    <a href="main.php"><img src="../RESOURCE/IMAGES/logo.png" alt="alt" id="Mylogo"></a>
                <nav class="mahead">
            <ul class="nav_links">
                <li><button type="button" id="maedit">Editar Perfil</button></li>
                <li><input class="searchbox" type="search"><button type="button" id="busca"><i class="fa fa-search"></i></button></li>
                <li>
                    <form method="GET" action="inicioSesionServlet" target=""><input type="submit" id="p_cerrar" value="Cerrar Sesion"></form>
                </li>
            </ul>
        </nav>
    </header>
    <div class="container-fluid">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form" id="LoginForm">
                    <h2 class="title">Sign In</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre de Usuario" id="LoginUser" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" id="LoginPass" />
                    </div>
                    <input type="submit" value="Iniciar Sesión" class="btn solid">
                    <p class="social-text">O inicia Sesión con tus Redes Sociales</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>

            <div class="signup-signup">
                <form action="#" class="sign-up-form" id="RegisterForm">
                    <h2 class="title">Sign Up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nombre de Usuario" id="RegisterUser" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Correo Electronico" id="RegisterEmail" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña" id="RegisterPass" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Contraseña " id="RegisterPass" />
                    </div>
                    <input type="submit" value="Registrame" class="btn solid">
                    <p class="social-text">O Registrate con tus Redes Sociales</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>
                </form>
            </div>

        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Eres Nuevo?</h3>
                    <p> Registarte para que puedas disfrutar de nuestros beneficios!</p>
                    <button class="btn transparent" id="sign-up-btn">Registrate</button>
                </div>
                <img src="../RESOURCE/IMAGES/signUp.svg" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Ya estas con nosotros?</h3>
                    <p> Inicia sesion para continuar disfrutando de los beneficios de tu cuenta!</p>
                    <button class="btn transparent" id="sign-in-btn">Inicia Sesión</button>
                </div>
                <img src="../RESOURCE/IMAGES/Login_web.svg" alt="" class="image">
            </div>
        </div>
    </div>
    <footer>
    </footer>
    <script src="../JS/Login.js"></script>
</body>

</html>