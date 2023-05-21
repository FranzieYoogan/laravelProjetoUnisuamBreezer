@extends('layouts.home')

@section('title','institucional')
@section('content')
    
<link rel="stylesheet" href="/css/institucional.css">
<div class="card text-bg-dark">
    <img src="{{asset('img/institucional/pexels-sevenstorm-juhaszimrus-443383.jpg')}}" class="card-img" alt="..." height="300px">
    <div class="card-img-overlay imagemOverlay">
      <h1 class="card-title tituloInstitucional">Telecall</h1>
      <p class="card-text pInstitucional">Sua escolha inteligente</p>
      
    </div>
  </div>





  <div class="row containerTotal" >
  <div class="col-md-8" >
    <!-- Spied element -->
    <div style="height: 500px;"
      data-mdb-spy="scroll"
      data-mdb-target="#scrollspy1"
      data-mdb-offset="0"
      class="scrollspy-example"
    >
      <section id="example-1">
        <div class="container containerInstitucional1">
        <h1>Sobre a empresa</h1>
            <p> Telecall é uma operadora regulada pela ANATEL (Licenças SCM, STFC e SMP), proprietária de uma rede de fibra de alta capacidade, oferecendo a seus clientes o mais alto padrão de qualidade, velocidade e acessibilidade em soluções telefônicas e de internet. Serviços que incluem uma ampla gama de valores agregados, oferecendo aos clientes operações mais produtivas, dinâmicas e eficazes.
            
            Com a aquisição da licença SMP, a Telecall agora também opera serviços móveis (voz e dados), oferecendo aos clientes corporativos uma variedade de planos e comodidades de valor agregado. Além disso, Telecall opera como uma MVNE e MVNA, oferecendo seus sistemas e redes para outras empresas que estão interessadas em lançar suas próprias operações móveis para alavancar suas marcas.
            Com experiência acumulada de mais de 20 anos e a busca constante por inovação e tecnologia, a Telecall é hoje referência no segmento de telecomunicações e sinônimo de qualidade e eficiência.
            A Telecall foi fundada em 1998 e está sediada no Brasil, com escritórios em Miami, Portugal e Inglaterra.</p>
        </div>

      </section>
      <section id="example-2">
        <div class="container containerInstitucional1">
        <h1>Linha do tempo</h1>
<p> + 20  anos de experiência global em soluções de comunicação </p>
</div>
<img src="{{asset('img/institucional/linha-do-tempo-nova.jpg')}}" class="img-fluid" alt="...">
      </section>
      <section id="example-3">
        <div class="container containerInstitucional1">
       <h1>Missão</h1>
       <p>Garanta os melhores serviços e custos otimizados para sua empresa, com toda mobilidade e segurança que só a Telecall oferece para você no mercado.</p>
        
        <h1>Visão</h1>
        <p> Ser reconhecida pela busca constante em soluções de comunicações diferenciadas com mobilidade e ajudando na produtividade das empresas.</p>
        
         
        <h1>Valores</h1>
        <p> Nosso valores representam a base do desenvolvimento do nosso negócio. <br>
        
        1. Equipe, somos um time de elos fortes. <br>
        
        2. Ética e respeito no ambiente pessoal e profissional. <br><br>
        
        3. Faça o que goste e tenha foco. <br><br>
        
        4. Comprometa-se e entregue o prometido. <br><br>
        
        5. Senso de urgência e de importância. <br><br>
        
        6. Temos como base nosso DNA e pilares, inspire-se neles. <br> <br>
        
        7. Fazer mais e melhor com menos. <br><br>
        
        8. Busca de desenvolvimento pessoal e profissional. <br><br>
        
        9. Respeito pelo presente e pelo próximo observando sempre o crescimento sustentável. <br><br>
        
        10. Surpreenda o cliente, a si mesmo e, a nossa equipe.</p>

       <h1>Ser Telecall</h1>
<p>Ser Telecall é a busca constante do aperfeiçoamento, é ver o futuro como meta presente e ser um time com competitividade e produtividade no sangue.</p>
    </div>

      
        </section>

       
    
          
          
      
      <section id="example-4">
        <div class="containerInstitucional1">
        <h1>Presença Mundial</h1>

        <img src="{{asset('img/institucional/mapa-presenca-mundial.png')}}" class="img-fluid" alt="...">
    </div>
      </section>

      <section id="example-5">
        <div class="container containerInstitucional1">
       <h1>Fibra Telecall</h1>
       <img src="{{asset('img/institucional/fibratelecall1.png')}}" class="img-fluid" alt="...">
       <p>Backbone de fibra ótica no Rio de Janeiro com +700km de rede</p>

       <h1>Fibra Telecall</h1>
       <img src="{{asset('img/institucional/fibratelecall2.png')}}" class="img-fluid" alt="...">
       <p>Backbone de fibra ótica em São Paulo com +100km de rede</p>
    </div>
</section>

      
    </div>
    </div>
    <!-- Spied element -->
  
  

  <div class="col-md-4 ">
    <!-- Scrollspy -->

    <div class="containerScrollspy container">
    <div id="scrollspy1" class="sticky-top " style="padding: 10px;">
      <ul class="nav flex-column nav-pills menu-sidebar">
        <li class="nav-item">
          <a href="/home/institucional/#example-1"   class="nav-link linkInstitucional active"    style="font-size: 15px; ">Sobre a Empresa</a>
        
        
        </li>
        <li class="nav-item">
          <a class="nav-link linkInstitucional active "  href="/home/institucional/#example-2"   style="font-size: 15px; ">Linha do Tempo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link linkInstitucional" href="/home/institucional/#example-3" style="font-size: 15px; ">Missão, Visão e Valores</a>
        
        </li>
        <li class="nav-item">
          <a class="nav-link linkInstitucional" href="/home/institucional/#example-4" style="font-size: 15px;">Presença Mundial</a>
        </li>

        <li class="nav-item">
            <a class="nav-link linkInstitucional" href="/home/institucional/#example-5" style="font-size: 15px;">Fibra Telecall</a>
          </li>
      </ul>
    </div>
    </div>
    <!-- Scrollspy -->
  </div>
    
@endsection