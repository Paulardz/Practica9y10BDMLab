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
    <link rel="stylesheet" type="text/css" href="../CSS/historial.css">
    <title>Historial de Compras</title>
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
    <h1>Historial de Compras</h1>
    <hr>
        <table class="col-lg-12">
            <tr>
                <td class="col-lg-3">
                    <img src="../RESOURCE/IMAGES/usb.png" alt="" />
                </td>
                <td class="col-lg-6">
                    <h2>11 de Agosto de 2022</h2>
                    <ul>
                        <li>Lampara de escritorio</li>
                        <li>USB ADATA 126 GB</li>
                        <li>Disco duro 1 TB</li>
                    </ul>
                </td>
                <td class="col-lg-2">
                    <h1>$2,499</h1>
                </td>
            </tr>
        </table>
        <hr>
        <table class="col-lg-12">
            <tr>
                <td class="col-lg-3">
                    <img src="../RESOURCE/IMAGES/case.png" alt="" />
                </td>
                <td class="col-lg-6">
                    <h2>3 de Marzo de 2022</h2>
                    <ul>
                        <li>Funda para Iphone 11</li>
                        <li>Disco duro 2TB</li>
                    </ul>
                </td>
                <td class="col-lg-2">
                    <h1>$3,299</h1>
                </td>
            </tr>
        </table>
        <hr>
        <table class="col-lg-12">
            <tr>
                <td class="col-lg-3">
                    <img src="../RESOURCE/IMAGES/icon-256x256.png" alt="" />
                </td>
                <td class="col-lg-6">
                    <h2>12 de Febrero de 2022</h2>
                    <ul>
                        <li>ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>ipsum dolor sit amet consectetur, adipisicing elit.</li>
                    </ul>
                </td>
                <td class="col-lg-2">
                    <h1>$499</h1>
                </td>
            </tr>
        </table>
        <hr>
        <table class="col-lg-12">
            <tr>
                <td class="col-lg-3">
                    <img src="../RESOURCE/IMAGES/icon-256x256.png" alt="" />
                </td>
                <td class="col-lg-6">
                    <h2>3 de enero de 2022</h2>
                    <ul>
                        <li>ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>ipsum dolor sit amet consectetur, adipisicing elit.</li>
                        <li>ipsum dolor sit amet consectetur, adipisicing elit.</li>
                    </ul>
                </td>
                <td class="col-lg-2">
                    <h1>$789</h1>
                </td>
            </tr>
        </table>
        <hr>
    </div>
    <footer></footer>
</body>

</html>