@extends('layouts.home')

@section('title','entraremosEmContato')

@section('content')
    

<main>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://bbl245.p3cdn1.secureserver.net/wp-content/uploads/2022/10/PABX2.png?time=1680795724"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://bbl245.p3cdn1.secureserver.net/wp-content/uploads/2022/10/INTERNET-DEDICADA.png?time=1680795724"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://bbl245.p3cdn1.secureserver.net/wp-content/uploads/2022/10/CEL-EMPRESARIAL-2-1.png?time=1680795724"
                    class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="https://bbl245.p3cdn1.secureserver.net/wp-content/uploads/2022/10/banner-cel-empresarial-telecall-min.png?time=1680795724"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <div class="container cardContainer d-flex justify-content-center">
        <div class="row d-flex justify-content-center cardContainer2 ">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/index/globe-solid.svg') }}" class="card-img-top" alt="..." height="150px">
                <div class="card-body">
                    <h5 class="card-title">Internet</h5>
                    <p class="card-text">Solução de internet em Fibra com alta qualidade e disponibilidade. <br><br></p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/index/telefonia.svg') }}" class="card-img-top" alt="..." height="150px">
                <div class="card-body">
                    <h5 class="card-title">Telefonia</h5>
                    <p class="card-text">Solução inteligente de PABX IP na núvem para sua telefonia fixa. <br><br></p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('img/index/mobile-solid.svg') }}" class="card-img-top" alt="..." height="150px">
                <div class="card-body">
                    <h5 class="card-title">Mobilidade</h5>
                    <p class="card-text">Monte planos de celular personalizados para a sua empresa e pague apenas pelo
                        que precisa.
                        <br>
                    </p>
                    <a href="#" class="btn btn-primary">Saiba mais</a>
                </div>
            </div>


            <h1 class="tituloPlanosMobilidade">Conheça nossos planos de mobilidade</h1>
            <div class="container d-flex align-items-center">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('img/index/Planos-de-celular-empresarial-8.png') }}" class="img-thumbnail"
                            alt="...">
                    </div>
                    <div class="col">
                        <ul class="list-group list-group-flush itemLista ">
                            <li class="list-group-item itemLista"><img style="float: left"
                                    src="{{ asset('img/index/icone-planos-customizaveis-1-2048x2048.png') }}"
                                    width="40px" alt="" srcset="" class="imagemLista1">PLANOS
                                CUSTOMIZÁVEIS</li>
                            <li class="list-group-item itemLista"><img style="float: left"
                                    src="{{ asset('img/index/icone-traga-seu-celular-e-aparelho-3-2048x2048.png') }}"
                                    width="40px" alt="" srcset="" class="imagemLista2">TRAGA SEU
                                NÚMERO E APARELHO</li>
                            <li class="list-group-item itemLista"><img style="float: left"
                                    src="{{ asset('img/index/icone-receba-seu-chip-na-sua-empresa-2.png') }}"
                                    width="40px" alt="" srcset="" class="imagemLista3">RECEBA SEU
                                CHIP NA SUA EMPRESA</li>
                            <li class="list-group-item itemLista"><img style="float: left"
                                    src="{{ asset('img/index/icone-maior-rede-movel-do-brasil-2-2048x2048.png') }}"
                                    width="40px" alt="" srcset="" class="imagemLista4">MAIOR REDE
                                MÓVEL DO BRASIL</li>
                            <li class="list-group-item itemLista"><img style="float: left"
                                    src="{{ asset('img/index/icone-atendimento-diferenciado-1.png') }}" width="40px"
                                    alt="" class="imagemLista5">ATENDIMENTO DIFERENCIADO</li>
                        </ul>
                    </div>



                    <section class="pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="mb-3 tituloEventos">Próximos Eventos </h3>
                                </div>
                                <div class="col-6 text-right">
                                    <a class="btn btn-primary mb-3 mr-1" role="button" data-bs-slide="prev"
                                        href="#carouselExampleIndicators1">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-primary mb-3 " role="button" data-bs-slide="next"
                                        href="#carouselExampleIndicators1">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div id="carouselExampleIndicators1" class="carousel slide"
                                        data-bs-ride="carousel">

                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">

                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/cardsImages/Expo-ISP-10-12.05.png') }}">
                                                            <div class="card-body">
                                                                <h4 class="card-title">EXPOISP BRASIL OLINDA 2023</h4>
                                                                <p class="card-text">10 a 12 de maio</p>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/cardsImages/Abrint-24-a-26.05.png') }}">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Abrint Encontro Nacional 2023
                                                                </h4>
                                                                <p class="card-text">24 a 25 de maio</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/cardsImages/ITW-14-a-17.05.png') }}">
                                                            <div class="card-body">
                                                                <h4 class="card-title">ITW International Telecoms Week
                                                                    2023</h4>
                                                                <p class="card-text">14 a 17 de maio</p>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">


                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/cardsImages/gccm.png') }}">
                                                            <div class="card-body">
                                                                <h4 class="card-title">GCCM Rio de Janeiro <br><br>
                                                                </h4>
                                                                <p class="card-text">30 a 31 de agosto</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/cardsImages/ITW-14-a-17.05.png') }}">
                                                            <div class="card-body">
                                                                <h4 class="card-title">ITW International Telecoms Week
                                                                    2023</h4>
                                                                <p class="card-text">14 a 17 de maio</p>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/cardsImages/Abrint-24-a-26.05.png') }}">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Abrint Encontro Nacional 2023
                                                                </h4>
                                                                <p class="card-text">24 a 25 de maio</p>

                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h1 class="tituloMapaCard">Presença em todo Rio de Janeiro</h1>

                    <div class="container">
                        <div class="card text-bg-dark ">
                            <img src="{{ asset('img/index/mapa-fibra-rj.png') }}" class="card-img" alt="...">

                            <div class="card-img-overlay containerMapaCard   ">
                                <div class="containerMapaCard2">
                                    <h5 class="card-title tituloMapaCard">+ 800km de rede no Rio de Janeiro</h5>
                                    <p class="card-text textoMapaCard" style="color: black;">Soluções de acesso que
                                        possibilitam as empresas
                                        a se <br>
                                        conectarem a internet com a máxima qualidade,<br> disponibilidade e segurança
                                    </p>

                                    <a href="#" class="btn btn-primary botaoMapaCard">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <section class="pt-5 pb-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <h3 class="mb-3 tituloEventos tituloClientes">Nossos Clientes
                                        Os Que Acreditam Nos Nossos Serviços </h3>
                                </div>
                                <div class="col-6 text-right">
                                    <a class="btn btn-primary mb-3 mr-1" role="button" data-bs-slide="prev"
                                        href="#carouselExampleIndicators3">
                                        <i class="fa fa-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-primary mb-3 " role="button" data-bs-slide="next"
                                        href="#carouselExampleIndicators3">
                                        <i class="fa fa-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div id="carouselExampleIndicators3" class="carousel slide"
                                        data-bs-ride="carousel">

                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">

                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/clientes/czechTeam.png') }}"
                                                                width="200px" height="200px">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Czech Team</h4>
                                                                <p class="card-text">"Equipe e visitantes da casa da
                                                                    <br>
                                                                    República Tcheca durante os Jogos <br> Olímpicos Rio
                                                                    2016 ficaram muito <br>
                                                                    felizes. Os serviços prestados pela <br>
                                                                    Telecall foram um sucesso, <br>
                                                                    agradecemos toda a ajuda"</p>
                                                                <span class="clientesNomeSpan">Blanka Konečná
                                                                    <BR></span>
                                                                <span class="clientesTextoSpan">Project manager</span>

                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/clientes/avmedia.png') }}"
                                                                width="200px" height="200px">
                                                            <div class="card-body">
                                                                <h4 class="card-title">AVMEDIA</h4>
                                                                <p class="card-text">"Gostariamos de agradecer a
                                                                    Telecall por <br>
                                                                    toda a ajuda nos serviços prestados. Tudo <br>
                                                                    funcionou bem e os ténicos foram <br> muito
                                                                    prestativos"</p>
                                                                <span class="clientesNomeSpan">Michal Matko <BR></span>
                                                                <span class="clientesTextoSpan">AVMEDIA, a.s.</span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/clientes/progolf.png') }}"
                                                                width="200px" height="200px">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Progolf</h4>
                                                                <p class="card-text">Gostaríamos de agradecer a
                                                                    Telecall pelo <br>
                                                                    trabalho maravilhoso que realizaram. O <br>
                                                                    trabalho da equipe é sensacional, com <br>
                                                                    rapidez e atenção... parabéns a toda <br>
                                                                    equipe da Telecall e muito obrigada</p>

                                                                <span class="clientesNomeSpan">Suelen Santos
                                                                    <BR></span>
                                                                <span class="clientesTextoSpan">PROGOLF - CAMPO DE
                                                                    GOLFE OLÍMPICO - <br>
                                                                    BARRA DA TIJUCA</span>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">


                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/clientes/sls.png') }}"
                                                                width="200px" height="200px">
                                                            <div class="card-body">
                                                                <h4 class="card-title">SLS <br><br></h4>
                                                                <p class="card-text">" Fantástico trabalho da equipe
                                                                    Telecall. <br>
                                                                    Profissionais completamente <br>
                                                                    comprometidos. Uma entrega perfeita. " </p>
                                                                <span class="clientesNomeSpan">Leonardo Coehen
                                                                    <BR></span>
                                                                <span class="clientesTextoSpan">SLS World Championship
                                                                    Finals 2018</span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/clientes/rock-in-rio.png') }}"
                                                                width="200px" height="200px">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Rock in Rio</h4>
                                                                <p class="card-text">“É com o coração transbordando de
                                                                    <br>
                                                                    orgulho e gratidão que concluímos <br>
                                                                    uma edição do Rock in Rio. Toda a <br>
                                                                    magia que vivemos nesses 7 dias de <br>
                                                                    festival jamais seria possível sem a <br>
                                                                    participação de marcas e <br>
                                                                    profissionais como vocês que <br>
                                                                    acreditaram na gente e ajudaram a <br>
                                                                    tornar esse sonho realidade. A <br>
                                                                    edição 2017 ficará para a história e <br>
                                                                    agora nosso desafio é ainda maior. <br>
                                                                    Fica aqui mais uma vez, o nosso <br>
                                                                    muito obrigada e que venha 2019!!” </p>
                                                                <span class="clientesNomeSpan">Laila Dias <BR></span>
                                                                <span class="clientesTextoSpan">Account Executive -
                                                                    Brasil</span>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-3">
                                                        <div class="card">
                                                            <img class="img-fluid" alt="100%x280"
                                                                src="{{ asset('img/clientes/maratona.jpg') }}"
                                                                width="200px" height="200px">
                                                            <div class="card-body">
                                                                <h4 class="card-title">Rio Maratona</h4>
                                                                <p class="card-text">"A operação foi um sucesso, a <br>
                                                                    transmissão correu como desejado, <br>
                                                                    graças à Telecall. Agradecemos a <br> atenção, o
                                                                    cuidado e o esforço de <br>
                                                                    toda a equipe com o nosso produto... <br>
                                                                    Muito obrigado e parabéns pelo <br>
                                                                    excelente trabalho. Para nós, foi um <br>
                                                                    novo padrão de entrega e operação <br>
                                                                    excepcional ". </p>
                                                                <span class="clientesNomeSpan">Pedro Pereira
                                                                    <BR></span>
                                                                <span class="clientesTextoSpan">Diretoria de
                                                                    Projetos</span>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <form action="/entraremosemcontato" method="POST" class="container d-flex justify-content-center gap-5">
                        <!-- 2 column grid layout with text inputs for the first and last names -->

                        @csrf
                        <div class="">
                            <div class="container text-center">
                                <h1 class="tituloContato">Fale Conosco</h1>

                                <p>Para qualquer informação, dúvida ou comentário: <br>


                                    (21) 3030-1010

                                    0800 030 2016
                                </p>


                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form">
                                        <input type="text" id="nome" name="nome" class="form-control" />
                                        <label class="form-label" for="nome">Nome</label>
                                    </div>
                                </div>

                                <div class="form ">
                                    <input type="text" id="empresa" name="empresa" class="form-control" />
                                    <label class="form-label" for="empresa">Empresa</label>

                                </div>
                            </div>

                            <!-- Text input -->
                            <div class="form">
                                <input type="text" id="telefone" name="telefone" class="form-control" />
                                <label class="form-label" for="telefone">Telefone</label>
                            </div>

                            <!-- Text input -->


                            <!-- Email input -->
                            <div class="form">
                                <input type="email" id="email" name="email" class="form-control" />
                                <label class="form-label" for="email">Email</label>
                            </div>

                            <!-- Number input -->


                            <!-- Message input -->
                            <div class="form">
                                <textarea class="form-control" id="mensagem" name="mensagem" rows="4"></textarea>
                                <label class="form-label" for="mensagem">Mensagem</label>
                            </div>

                            <!-- Checkbox -->




                            <div class="form-check d-flex justify-content-lg-start mb-4">

                                <input class="form-check-input" type="checkbox" value="checked"
                                     id="checkbox"
                                    name="checkbox" />
                                <label class="form-check-label" for="checkbox">Confirmar </label>
                               

                            </div>


                            
                                <!-- Submit button -->
                                <button type="submit" class="btn btn-primary btn-block mb-4">Enviar</button>

                                <p style="color: green;">Entraremos em contato!!</p>
                        </div>

                        <div class="containerContato2">
                            <h1 class="tituloContato">Escritório</h1>
                            <h4>Brasil</h4>
                            <p>
                                Centro empresarial Mario Henrique Simonsen <br>
                                Av. das Américas, 3434 | Bloco 1, Sala 505 <br>
                                Barra da Tijuca | Rio de Janeiro, RJ</p>
                            <h4>Estados Unidos</h4>
                            <p>
                                848 Brickell Av – Suite 1235 | Miami, Florida, USA – 33131</p>
                            <h4>Portugal</h4>
                            <p>
                                Avenida da Liberdade nº 245, 4º piso, sala 402 | Lisboa, Portugal 1250-143</p>
                            <h4>Inglaterra</h4>
                            <p>
                                8 Devonshire Squae, Londom EC2M 4YJ</p>
                            <h4>Contatos</h4>
                            <p>
                                Email: suporte@telecall.com <br>
                                Tel: (21) 3030-1010 <br>
                                Wpp: (21)93618-0100</p>
                            <h4>Carreiras</h4>
                            <p>
                                <a href="home/carreiras">Clique aqui</a> para verificar as vagas disponíveis.
                            </p>
                        </div>
                    </form>


</main>


@endsection

    

    
