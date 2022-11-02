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
    <link rel="stylesheet" type="text/css" href="../CSS/reporte-ventas.css">
    <title>Reporte de Ventas</title>
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
        <h1>Reporte de Ventas</h1>
        <table class="col-lg-12">
            <thead>
                <th class="col-lg-2">Imagen </th>
                <th class="col-lg-4">Nombre producto</th>
                <th class="col-lg-2">Cantidad</th>
                <th class="col-lg-2">Precio Unitario</th>
                <th class="col-lg-2">Total</th>
            </thead>
            <tr>
                <td class="col-lg-2">
                    <img src="../RESOURCE/IMAGES/usb.png" alt="" />
                </td>
                <td class="col-lg-4">
                    <h2>USB ADATA 126 GB</h2>
                </td>
                <td class="col-lg-2">
                    <h2>3</h2>
                </td>
                <td class="col-lg-2">
                    <h2>$149</h2>
                </td>
                <td class="col-lg-2">
                    <h2>$447</h2>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2">
                    <img src="../RESOURCE/IMAGES/case.png" alt="" />
                </td>
                <td class="col-lg-4">
                    <h2>Funda para Iphone 11</h2>
                </td>
                <td class="col-lg-2">
                    <h2>1</h2>
                </td>
                <td class="col-lg-2">
                    <h2>$499</h2>
                </td>
                <td class="col-lg-2">
                    <h2>$499</h2>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2">
                    <img src="../RESOURCE/IMAGES/icon-256x256.png" alt="" />
                </td>
                <td class="col-lg-4">
                    <h2>Producto</h2>
                </td>
                <td class="col-lg-2">
                    <h2>Cantidad</h2>
                </td>
                <td class="col-lg-2">
                    <h2>Precio Unitario</h2>
                </td>
                <td class="col-lg-2">
                    <h2>TOTAL</h2>
                </td>
            </tr>
            <tr>
                <td class="col-lg-2">
                    <img src="../RESOURCE/IMAGES/icon-256x256.png" alt="" />
                </td>
                <td class="col-lg-4">
                    <h2>Producto</h2>
                </td>
                <td class="col-lg-2">
                    <h2>Cantidad</h2>
                </td>
                <td class="col-lg-2">
                    <h2>Precio Unitario</h2>
                </td>
                <td class="col-lg-2">
                    <h2>TOTAL</h2>
                </td>
            </tr>
        </table>
    </div>
    <footer></footer>
</body>

</html>