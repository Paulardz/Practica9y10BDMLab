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
    <link rel="stylesheet" type="text/css" href="../CSS/producto.css">
    <title>Productos</title>
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
            <tr>
                <td class="col-lg-8">
                    <div class="document-center">
                        <!--This carousel-container only exists so we can do the 
            aspect ratio tricks in CSS-->
                        <div class="carousel-container">
                            <div class="carousel" id="carousel-1">
                                <!--The uppermost screen will appear first. This is due to JavaScript-->
                                <section class="carousel-screen">
                                    <div>
                                        <img src="../RESOURCE/IMAGES/case2.png" alt="" class="cardBackground" />
                                    </div>
                                </section>
                                <section class="carousel-screen">
                                    <div>
                                        <img src="../RESOURCE/IMAGES/case.png" alt="" class="cardBackground" />
                                    </div>
                                </section>
                                <section class="carousel-screen">
                                    <div>
                                        <img src="../RESOURCE/IMAGES/case3.png" alt="" class="cardBackground" />
                                    </div>
                                </section>
                                <section class="carousel-screen">
                                    <div>
                                        <img src="../RESOURCE/IMAGES/case5.png" alt="" class="cardBackground" />
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
                    <h1>Funda de celular - Iphone 11</h1>
                    <h2>Funda para celular con diseño ergonomico, con diferentes colores disponibles.</br> Preguntar por chat para mas informacion.</h2>
                    <br>
                    <h3>$400</h3>
                </td>
            </tr>
            <tr>
                <td class="col-lg-8">Presione las flechas para ver el resto de las imagenes del producto</td>
                <td class="col-lg-4">El vendedor acepta mensajes directos para cotizaciones!</td>
            </tr>
        </table>
        <div class="document-center">
            <div class="carousel-container">
                <div class="carousel" id="carousel-2">
                    <!--The uppermost screen will appear first. This is due to JavaScript-->
                    <section class="carousel-screen">
                        <div>
                            <Table>
                                <tr>
                                    <td>
                                        <img src="../RESOURCE/IMAGES/peluche.png" alt="">
                                        <p> Peluche. Peluche hecho a mano.  Puede hablar con el vendedor para hablar de cotizaciones. .........................................</p>
                                    <td>
                                        <img src="../RESOURCE/IMAGES/lampara.png" alt="">
                                        <p> Lampara de escritorio. Lampara con diseño sencillo. Puede hablar con el vendedor para hablar de cotizaciones. ................................</p>
                                    </td>
                                    <td>
                                        <img src="../RESOURCE/IMAGES/TV.png" alt="">
                                        <p> TV plano. Tv con base incluido con suporte en 4K. ...................................................</p>
                                    </td>
                                    <td>
                                        <img src="../RESOURCE/IMAGES/case.png" alt="">
                                        <p> ipsum dolor sit amet consectetur, adipisicing elit. Pariatur dignissimos accusantium, placeat, facere reprehenderit quod vel nihil consequuntur nisi sint rem dolorum blanditiis expedita numquam tenetur neque, ullam nostrum. Tempora!</p>
                                    </td>
                                    <td>
                                        <img src="../RESOURCE/IMAGES/mesa.png" alt="">
                                        <p> ipsum dolor sit amet consectetur, adipisicing elit. Pariatur dignissimos accusantium, placeat, facere reprehenderit quod vel nihil consequuntur nisi sint rem dolorum blanditiis expedita numquam tenetur neque, ullam nostrum. Tempora!</p>
                                    </td>

                                </tr>
                            </Table>
                        </div>
                    </section>


                    <!--These are not screens. They will always be on carousel-->
                    <section class="circle-container">
                        <!--These 'circles' need to match the number of carousel screens-->
                        <div class="circle"></div>
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
    </div>
    <footer></footer>
    <script src="../JS/producto.js"></script>
</body>

</html>