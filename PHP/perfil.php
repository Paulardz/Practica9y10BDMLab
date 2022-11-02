<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://sdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/aebefc0ddc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/perfil.css">
    <title>Perfil</title>
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
        <div class="row">
            <div class="col-lg-2">
               <img src="../RESOURCE/IMAGES/iconuser.png" alt="" />
            </div>
            <div class="col-lg-5">

            </div>
            <div class="col-lg-5">
                <h1>Carrito De compras</h1>
                <h3><a href="carrito.php">Carrito</a></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <h3>°Maria Paula Rodriguez Escamilla</h3>
                <h4>°Mujer</h4>
                <h4>°paulardze@gmail.com</h4>
                <h5>°Administrador</h5>
            </div>
            <div class="col-lg-5">
                <h1>Metodos de Pago</h1>
                <ul>
                    <li>PayPal</li>
                    <li>Tarjeta de Credito 2363</li>
                </ul>
            </div>
            <div class="col-lg-5">
                <h1>Listas</h1>
                <ul>
                    <li>Favoritos</li>
                    <li>Compras de navidad</li>
                    <li>Cumpleaños</li>
                    <li>Ver mas tarde...</li>
                </ul>
            </div>
        </div>
    </div>
    <footer></footer>
</body>

</html>