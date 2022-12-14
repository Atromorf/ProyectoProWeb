<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weirdo Comics</title>

    <!-- FUENTE GOOGLE FONTS : Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- ICONS: Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- ICONS: Line Awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Animaciones AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">


    <!-- Mis Estilos -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

@if (session('confirmacion'))
    
    <script> Swal.fire(
        'Todo Correcto!',
        'Bienvenido {{ session('confirmacion')['usuario'] }} ya puede comprar!',
        'success'
        ) </script>

@endif


    <div class="hm-wrapper">

        <!-- =================================
           HEADER MENU
        ================================== -->
        <div class="hm-header">

            <div class="container">
                <div class="header-menu">

                    <div class="hm-logo">
                        <div class="header-title2">
                            <a href="/welcome"><h1  data-aos="fade-up" data-aos-duration="3000"><font color="negro">WEIRdo Comics</font></h1></a>
                        </div>
                    </div>

                    <nav class="hm-menu">
                        <ul>
                            <li><a href="/nosotros">Nosotros</a></li>
                            <li><a href="http://">Contacto</a></li>
                            <li><a href="/login">Ingresar</a></li>
                        </ul>


                        <div class="hm-icon-cart">
                            <a href="/tienda">
                                <i class="las la-shopping-cart"></i>
                            </a>
                        </div>

                        <div class="icon-menu">
                            <button type="button"><i class="fas fa-bars"></i></button>
                        </div>

                    </nav>

                </div>
            </div>

        </div>

        <!-- =================================
           HEADER MENU Movil
        ================================== -->
        <div class="header-menu-movil">
            <button class="cerrar-menu"><i class="fas fa-times"></i></button>
            <ul>
                <li><a href="/nosotros">Nosotros</a></li>
                <li><a href="">Contacto</a></li>
                <li><a href="/login">Iniciar</a></li>
            </ul>
        </div>

        <section class="bus">
            <form action="/BuscaC" method="POST">
                Comic<input type="text" name="txtBusquedaD" /> Articulo <input type="text" name="txtBusquedaDF" />
                <input type="submit" value="Buscar" />
            </form>
        </section>
        <!-- =================================
           HOME CATEGROIAS
        ================================== -->
        <div class="hm-page-block">
            <div class="container">
                <div class="header-title">
                    <h1  data-aos="fade-up" data-aos-duration="3000">Catalogo</h1>
                </div>

                <div class="hm-grid-category">

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="1000">
                        <a href="#">
                            <img src="img/Amazing.jpg" alt="">
                            <div class="c-info">
                                    <h3><font color="negro">The Amazing Spiderman No.87</font></h3>
                                    <h3><font color="negro">$850</font></h3>
                                    <h3><button type="button" class="btn btn-danger">Comprar</button></h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="1500">
                        <a href="#">
                            <img src="img/funco.jpg" alt="">
                            <div class="c-info">
                                    <h3><font color="negro">Funco Iron Spider Delux</font></h3>
                                    <h3><font color="negro">$1950</font></h3>
                                    <h3><button type="button" class="btn btn-danger">Comprar</button></h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="img/god.jpg" alt="">
                            <div class="c-info">
                                    <h3><font color="negro">Figura dios de la gerra</font></h3>
                                    <h3><font color="negro">$1900</font></h3>
                                    <h3><button type="button" class="btn btn-danger">Comprar</button></h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="img/Judgment-Day.jpg" alt="">
                            <div class="c-info">
                                    <h3><font color="negro">Avengers Judgment-Day</font></h3>
                                    <h3><font color="negro">$650</font></h3>
                                    <h3><button type="button" class="btn btn-danger">Comprar</button></h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="img/bats.jpg" alt="">
                            <div class="c-info">
                                    <h3><font color="negro">Playera de batman</font></h3>
                                    <h3><font color="negro">$550</font></h3>
                                    <h3><button type="button" class="btn btn-danger">Comprar</button></h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="img/dark.jpg" alt="">
                            <div class="c-info">
                                    <h3><font color="negro">Figura Dark souls</font></h3>
                                    <h3><font color="negro">$4528</font></h3>
                                    <h3><button type="button" class="btn btn-danger">Comprar</button></h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="img/luffy.jpg" alt="">
                            <div class="c-info">
                                    <h3><font color="negro">Figura Luffy(one piece)</font></h3>
                                    <h3><font color="negro">$14528</font></h3>
                                    <h3><button type="button" class="btn btn-danger">Comprar</button></h3>
                            </div>
                        </a>
                    </div>

                    <div class="grid-item" data-aos="fade-up" data-aos-duration="2000">
                        <a href="#">
                            <img src="img/jiraiya.jpg" alt="">
                            <div class="c-info">
                                    <h3><font color="negro">Figura Jiraiya(Naruto)</font></h3>
                                    <h3><font color="negro">$15000</font></h3>
                                    <h3><button type="button" class="btn btn-danger">Comprar</button></h3>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>


         <!-- =================================
           HOME PRODUCTOS DESTACADOS
        ================================== -->
        



         <!-- =================================
           FOOTER
        ================================== -->
        <footer>
            
            <div class="container">

                <div class="foo-row">
                    <div class="foo-col">
                        <h2>Envianos <br>un correo</h2>
                        <form action="" method="GET">

                            <div class="f-input">
                                <input type="text" placeholder="Ingrese su correo">
                                <button type="submit" class="hm-btn-round btn-primary"><i class="far fa-paper-plane"></i></button>
                            </div>
                        </form>

                    </div>

                    <div class="foo-col">
                        <ul>
                           <li><a href="http://">Productos</a></li>
                           <li><a href="http://">Campa??as</a></li>
                           <li><a href="nosotros">Nosotros</a></li>
                           <li><a href="http://">Contacto</a></li>
                        </ul>
                    </div>

                </div>

            </div>

        </footer>

        <div class="foo-copy">
            <div class="container">
                <p>Copyright?? 2022-Todos los derechos reservados Weirdo Comics</p>
            </div>
        </div>

    </div>
    
    <!-- Animaciones : AOS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <!-- Mi Script -->
    <script src="js/app.js"></script>

    <script>
    
        AOS.init({
            duration: 1200,
        })


    </script>
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> 

</body>
</html>