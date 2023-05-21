<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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

    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/css/carreiras.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ asset('img/carreiras/loginLogo.png') }}"
                    alt="" width="200px" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a href="https://auth.solides.jobs/sign-in" class="btn btn-primary botaoCarreirasEntrar"
                        tabindex="-1" role="button" aria-disabled="true">Entrar</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container containerCarreiras2 d-flex justify-content-center w-auto">
        <div class="containerListaCarreiras " style="width: 900px;">
            <ul class="list-group listaCarreiras2 form-control w-auto">


                <div class="w-auto ">
                    <li class="list-group-item listaCarreiras  object-cover">
                        <!-- <div class="d-inline">  -->
                        <h1 class="tituloListaVagas d-flex text-left d-inline-block gap-3 w-auto">
                            {{ $carreirasCount }} Vagas Abertas


                            <div class="d-flex gap-3 w-auto">


                                <form action="/home/carreiras/search" method="GET">
                                <input class="form-control-lg searchCarreiras  w-auto" type="search" id="query" name="query"
                                    placeholder="Buscar Vaga" aria-label=".form-control-lg example" />

                                <select class="form-select selectCarreiras  w-auto "
                                    aria-label="Default select example">



                                    <option selected>-- Seleciona uma opção --</option>
                                    @foreach ($carreiras as $carreira)
                                        <option value="{{ $carreira->count() }}">{{ $carreira->local }}</option>
                                    @endforeach
                                </select>
                            </form>
                            </div>

                        </h1>
                        <!-- </div> -->


                    </li>
                </div>

                
                <li class="list-group-item listaCarreiras ">
                    
                    @if($search)
                    
                <li class="list-group-item" style="display: inline;">
                    
                    <div class="divLista w-auto">
                        <h1 class="tituloListaCarreiras">
                            {{ $carreira->vagas_nome }}
                        </h1>
                        <p class="text-center pLista">{{ $carreira->local }}</p>
                        <a href="https://auth.solides.jobs/sign-in" class="btn btn-primary linkCarreiras" tabindex="-1"
                            role="button" aria-disabled="true"><i class="fa-solid fa-briefcase"></i> Cadastrar</a><a
                            href="https://auth.solides.jobs/sign-in" class="btn btn-primary linkCarreiras"
                            tabindex="-1" role="button" aria-disabled="true"><i class="fa-solid fa-briefcase"></i>
                            {{$carreira->vagas_quantidade}} VAGAS</a>
                            
                    </div>
                    
                </li>
                
                @endif

               



            </ul>
        </div>
        <div class="col w-auto" style="margin-left: 20px">
            <h1 class="tituloRhTelecall container">RH Telecall</h1>

            <p class="container tituloRhTelecall2">Sua Escolha Inteligente</p>

            <div class="ratio ratio-16x9 w-auto">
                <iframe class="video" src="https://www.youtube.com/embed/Z4N6-XZY7V0" title="YouTube video"
                    allowfullscreen></iframe>
            </div>

            <p class="pCarreiras container">A Telecall é uma operadora de telecomunicações brasileira que oferece a
                seus
                clientes o mais
                alto padrão de qualidade, velocidade e acessibilidade em soluções de comunicação.
                Com mais de 20 anos de experiência na indústria global, a Telecall hoje é sinônimo de
                qualidade e eficiência. A Telecall está sediada no Brasil, com escritórios em Miami,
                Portugal e Inglaterra.</p>


            <div class="containerRedes container">
                <i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i>
                <i class="fab fa-instagram fa-2x" style="color: #ac2bac;"></i>
                <i class="fab fa-linkedin-in fa-2x" style="color: #0082ca;"></i>
                <i class="fab fa-youtube fa-2x" style="color: #ed302f;"></i>
            </div>


            <h6 class="depoimentos container w-auto">Depoimentos</h6>

            <div class="container containerCarrossel">
                <h2 class="font-weight-light"></h2>
                <div class="row mx-auto my-auto">
                    <div id="recipeCarousel" class="carousel slide w-100" data-ride="true" data-interval="0"
                        data-pause="hover">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-4">
                                    <div class="card card-body divCarrosselCaption">
                                        <img class="img-fluid imagemCarrossel"
                                            src="{{ asset('img/carreiras/depoimentosAlexandre.png') }}">
                                        <p class="pCarreirasCarrossel">Fazer parte do time da Telecall me traz uma
                                            gratidão imensa!
                                            Aqui somos desafiados a cada dia para sermos melhores, vencer
                                            obstáculos, buscar sonhos e ter coragem para enfrentar
                                            qualquer batalha! Além de acreditar na cultura e nos valores
                                            da empresa, tenho muita admiração e orgulho das pessoas que
                                            trabalham comigo.</p>
                                        <p class="nomeCarreirasCarrossel">- Alexandre Mendes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4">
                                    <div class="card card-body divCarrosselCaption">
                                        <img class="img-fluid imagemCarrossel"
                                            src="{{ asset('img/carreiras/Rai_de_Azevedo_Almeida.png_name_20220610-14073-1ab1hpc.png') }}">
                                        <p class="pCarreirasCarrossel">Trabalho na Telecall desde 2013, e
                                            desde então só tenho á agradecer, pois fui bem acolhida e me sinto
                                            parte dessa família desde o primeiro dia. Nesses nove anos tive
                                            oportunidades
                                            de crescimento e cresci, amadureci com cada aprendizado e quero buscar mais
                                            conquistas, conhecimentos, sabedoria, me dedicar sempre a vocês Telecall que
                                            são
                                            minha segunda família.</p>
                                        <p class="nomeCarreirasCarrossel">- Rai Almeida, Assistente Administrativo</p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="col-md-4 ">
                                    <div class="card card-body divCarrosselCaption">
                                        <img class="img-fluid imagemCarrossel"
                                            src="{{ asset('img/carreiras/Jandira_Costa_de_Oliveira_Cruz.png_name_20220610-14073-l0zs1g.png') }}">
                                        <p class="pCarreirasCarrossel">Trabalhar na Telecall é ser reconhecida não só
                                            pelo seu gestor,
                                            mas também pela diretoria, que nos trata como família. Cada dia é um desafio
                                            e uma aprendizagem
                                            e nos esforçamos para fazer a diferença. Somar sempre!!</p>
                                        <p class="nomeCarreirasCarrossel">- Jandira Costa, Analista Fiscal</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                                aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                                aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <footer class="py-2 my-4">

        <div class="footerA d-flex justify-content-center">


            <div>
                <a href="" class="text-center aFooter"> Central de ajuda | Suporte ao candidato </a>
            </div>

            <div>
                <a href="" class="text-center text-muted afooter">Sólides, tudo que o RH precisa em um só
                    lugar</a>
            </div>

        </div>
        <!-- Copyright -->
    </footer>
</body>

</html>
