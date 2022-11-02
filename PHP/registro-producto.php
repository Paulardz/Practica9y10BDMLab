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
    <link rel="stylesheet" type="text/css" href="../CSS/registro-producto.css">
    <title>Registrar Producto</title>
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
        <table>
            <tr class="col-lg-12">
                <td class="col-lg-8">
                    <div class="document-center">
                        <!--This carousel-container only exists so we can do the 
            aspect ratio tricks in CSS-->
                        <div class="carousel-container">
                            <div class="carousel" id="carousel-1">
                                <!--The uppermost screen will appear first. This is due to JavaScript-->
                                <section class="carousel-screen">
                                    <div>

                                        <input type="file" accept="image/png, image/jpeg">
                                    </div>
                                </section>
                                <section class="carousel-screen">
                                    <div>
                                   
                                        <input type="file" accept="image/png, image/jpeg">
                                    </div>
                                </section>
                                <section class="carousel-screen">
                                    <div>
                                     
                                        <input type="file" accept="image/png, image/jpeg">
                                    </div>
                                </section>
                                <section class="carousel-screen">
                                    <div>
                                       
                                        <input type="file" accept="video/mp4, video/x-m4v, video/*">
                                    </div>
                                </section>
                                <!--These are not screens. They will always be on carousel-->
                                <section class="circle-container">
                                    <!--These 'circles' need to match the number of carousel screens-->
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                    <div class="circle"></div>
                                </section>
                                <div class="left-arrow">
                                    <span class="chevron left"></span>
                                </div>
                                <div class="right-arrow">
                                    <span class="chevron right"></span>
                                </div>
                            </div>
                        </div>

                    </div>
                </td>
                <td class="col-lg-4">
                    <h1><input type="text" value="Nombre del producto"></h1>
                    <br>
                    <hr>
                    <br>
                    <h2><input type="text" value="Descripcion"></h2>
                    <br>
                    <hr>
                    <br>
                    <h3><input type="text" value="Precio"></h3>
                </td>
            </tr>
        </table>
        <button>Publicar y solicitar autorizacion</button>
    </div>
    <footer></footer>
    <script src="../JS/producto.js"></script>
</body>

</html>