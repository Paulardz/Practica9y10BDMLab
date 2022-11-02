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
    <link rel="stylesheet" type="text/css" href="../CSS/listas.css">
    <title>Listas de Deseos</title>
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
        <h1>°Favoritos°</h1>
        <table>
            <tr>
            <td class="col-lg-3">
                    <img src="../RESOURCE/IMAGES/TV.png" alt="" />
                </td>
                <td class="col-lg-6">
                    <h2>Television</h2>Television de plasma, año: 2020, Diseño delgado y con base resistente. 
                </td>
                <td class="col-lg-2">
                    <h1>$2,500</h1>
                </td>
                <td class="col-lg-1">
                    <button>Eliminar</button>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3">
                    <img src="../RESOURCE/IMAGES/mesa.png" alt="" />
                </td>
                <td class="col-lg-6">
                    <h2>Mesa de madera</h2>Mesa redonda de madera, hecha de roble y guardado con mucho cuidado.
                </td>
                <td class="col-lg-2">
                    <h1>$800</h1>
                </td>
                <td class="col-lg-1">
                    <button>Eliminar</button>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3">
                    <img src="../RESOURCE/IMAGES/lampara.png" alt="" />
                </td>
                <td class="col-lg-6">
                    <h2>Lampara de escritorio</h2>Lampara con diseño sencillo
                </td>
                <td class="col-lg-2">
                    <h1>$300</h1>
                </td>
                <td class="col-lg-1">
                    <button>eliminar</button>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3">
                    <img src="../RESOURCE/IMAGES/case.png" alt="" />
                </td>
                <td class="col-lg-6">
                    <h2>Funda de celular - Iphone 11</h2>Funda para celular con diseño ergonomico, con diferentes colores disponibles, preguntar por chat.
                </td>
                <td class="col-lg-2">
                    <h1>$400</h1>
                </td>
                <td class="col-lg-1">
                    <button>eliminar</button>
                </td>
            </tr>
            <tr>
                <td class="col-lg-3">
                    <img src="../RESOURCE/IMAGES/peluche.png" alt="" />
                </td>
                <td class="col-lg-6">
                    <h2>Peluche</h2>Peluche hecho a mano.
                </td>
                <td class="col-lg-2">
                    <h1>$199</h1>
                </td>
                <td class="col-lg-1">
                    <button>eliminar</button>
                </td>
            </tr>
          
        </table>
    </div>
    <footer></footer>
</body>

</html>