<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>


    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>



    <link rel="stylesheet" href="/css/home.css">
</head>

<body>



    <header>
        <nav class="navbar bg-dark  navbar-expand-lg " data-bs-theme="dark">
            <div class="container-fluid ">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarNavDropdown">

                    <div class=" navbar-collapse">

                        <ul class="navbar-nav mr-auto ">

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href=""><i
                                        class="fa-solid fa-building"></i>
                                    Empresas</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="/home/wholesale"
                                    ariaCurrentWhenActive="page">Wholesale</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/home/institucional">Institucional</a>
                            </li>
                        </ul>

                    </div>



                    <div class="divMenu2  navbar-collapse navPositioning">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link "
                                    href="https://api.whatsapp.com/send?phone=552130301010&text=%23Comercial"><i
                                        class="fa-brands fa-whatsapp"></i> whatsapp</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="/home/faq"><i class="fa-solid fa-circle-question"></i>
                                    FAQ</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="/home/carreiras"><i class="fa-solid fa-user-tie"></i>
                                    Carreiras</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href=""><i class="fa-solid fa-address-book"></i> Contato</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href=""><i class="fa-solid fa-user"></i> Área do Cliente</a>
                            </li>
                        </ul>
                    </div>



                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-lg " style="background-color: #CA1C2A;">
            <div class="container-fluid d-flex ">
                <a class="navbar-brand" href="/"><img src="{{ asset('img/index/navLogo.png') }}" alt=""
                        height="60px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup1" aria-controls="navbarNavAltMarkup1" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse navPositioning  " id="navbarNavAltMarkup1">




                    <div class="navbar">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                            <li class="nav-item dropdown ">
                                <a class="nav-link dropdown-toggle" style="color: white;" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Internet
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="">Internet Dedicada</a></li>
                                    <li><a class="dropdown-item">Banda Larga</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item">Wifi</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color: white;" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Telefonia
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item">PABX Ip Virtual</a></li>
                                    <li><a class="dropdown-item">E1-SIP-Trunk</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item">Números 0800 e 40xx</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color: white;" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Rede e Infraestrutura
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item">Ponto-a-Ponto</a></li>
                                    <li><a class="dropdown-item">Mpls</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item">Fibra apagada e Dutos</a></li>
                                    <li><a class="dropdown-item">Co-locations</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color: white;" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Mobilidade
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item">Celular Empresarial</a></li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item">MVNA/E</a></li>

                                </ul>
                            </li>


                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" style="color: white;" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Outras Soluções
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item">Outsourcing de Hardware</a></li>



                                </ul>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" style="color: white;">Eventos</a>
                            </li>
                        </ul>
                    </div>
                </div>


            </div>
        </nav>


    </header>


    @yield('content')
    <footer>
        <!-- Footer -->
        <footer class="text-center text-lg-start bg-black text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">

                    <span style="color: white;">Entre em contato conosco pelas nossas redes</span>

                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-facebook-f"></i>
                    </a>


                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 link-secondary">
                        <i class="fab fa-linkedin"></i>
                    </a>

                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4 tituloFooter">
                                TeleCall
                            </h6>
                            <p style="color: white;">
                                A Telecall é uma operadora de telecomunicações brasileira que oferece a seus clientes o
                                mais
                                alto padrão de qualidade, velocidade e acessibilidade em soluções de comunicação.
                                Serviços que
                                incluem uma ampla gama de valores agregados, oferecendo aos clientes operações mais
                                produtivas,
                                inovadoras e eficazes. Com mais de 20 anos de experiência na indústria global, a
                                Telecall hoje é
                                sinônimo de qualidade e eficiência.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4 tituloFooter">
                                Internet
                            </h6>
                            <p>
                                <a href="#!" class="text-light">Link Dedicado</a>
                            </p>
                            <p>
                                <a href="#!" class="text-light">Banda Larga</a>
                            </p>
                            <p>
                                <a href="#!" class="text-light">Wi-fi</a>
                            </p>

                            <h6 class="text-uppercase fw-bold mb-4 tituloFooter">
                                Outras Soluções
                            </h6>
                            <p>
                                <a href="#!" class="text-light">Outsourcing de Hardware</a>
                            </p>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4 tituloFooter">
                                Telefonia
                            </h6>
                            <p>
                                <a href="#!" class="text-light">PABX IP Virtual</a>
                            </p>
                            <p>
                                <a href="#!" class="text-light">E1</a>
                            </p>
                            <p>
                                <a href="#!" class="text-light">Números 0800 e 40xx</a>
                            </p>

                            <h6 class="text-uppercase fw-bold mb-4 tituloFooter">
                                Mobilidade
                            </h6>
                            <p>
                                <a href="#!" class="text-light">Celular Empresarial</a>
                            </p>
                            <p>
                                <a href="#!" class="text-light">MVNA</a>
                            </p>

                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4 tituloFooter">Rede e Infraestrutura</h6>
                            <p>
                                <a href="#!" class="text-light ">Ponto-a-Ponto</a>
                            </p>
                            <p>
                                <a href="#!" class="text-light">MPLS</a>
                            </p>
                            <p>
                                <a href="#!" class="text-light">Fibra Apagada e Dutos</a>
                            </p>
                            <p>
                                <a href="#!" class="text-light">Co-location</a>
                            </p>


                        </div>




                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>

            </section>
            <!-- Section: Links  -->
        </footer>
</body>

</html>
