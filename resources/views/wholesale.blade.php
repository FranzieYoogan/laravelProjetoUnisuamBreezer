@extends('layouts.home')

@section('content')
@section('title','wholesale')
    
<link rel="stylesheet" href="/css/wholesale.css">
<div class="containerImageOverlay1">
    <div class="card text-bg-dark ">
      <img src="{{asset('img/wholesale/706488-Man-Made-Favela-Brazil-House-Rio-de-Janeiro-1080P.jpg')}}" class="card-img containerImageOverlayWholesale" alt="..." >
      <div class="card-img-overlay textoImageOverlayWholesale d-block">
        
          <div class="divImageOverlayWholesale">
          <h5 class="card-title h5ImageOverlayWholesale">Wholesale</h5>
      </div>
        <p class="card-text pImageOverlayWholesale">Mais de 20 anos de experiência em 
          soluções de comunicação.</p>
       
      </div>
    </div>
  </div>

  <div class="container d-flex justify-content-center">

    <div class="containerPTexto1">
    <p class="pTexto1Wholesale">Com início em 1998 oferecendo serviços de voz no Japão, a divisão internacional Telecall Wholesale foi criada com o objetivo de apoiar o setor de varejo da empresa. Desde seu lançamento, a Telecall Wholesale sempre teve muita pressão interna para oferecer serviços de alta qualidade com tarifas competitivas em um mercado extremamente competitivo. Com essa filosofia, a Telecall focou no mercado internacional e alcançou uma cobertura global com parceiros estratégicos, obtendo hoje, mais de 600 interconexões com algumas das maiores operadoras do mundo.</p><p class="pTexto1Wholesale">
        Com uma enorme capacidade de lidar com diferentes mercados e culturas, a Telecall Wholesale pôde apoiar e adaptar-se quando a empresa lançou em 2005, um produto de varejo nos EUA, um dos mercados mais competitivos do mundo</p> <p class="pTexto1Wholesale">
        Outro desafio veio em 2010, quando a Telecall decidiu construir sua própria rede de fibra óptica na cidade do Rio de Janeiro, no Brasil, e começou a oferecer serviços empresariais de voz e dados.</p><p class="pTexto1Wholesale">
        
        Em um curto espaço de tempo a Telecall vem ganhando respeito nacional e internacional, e fez história ao participar com muito sucesso nos Jogos Olímpicos de 2014 no Brasil e do Rock in Rio em 2017.</p> <p class="pTexto1Wholesale">
        
        Após quase 20 anos de sucesso e crescimento exponencial, a Telecall Wholesale é conhecida hoje como uma Global Carrier, com sólidas relações comerciais, capaz de se adaptar e lidar com os constantes desafios e mudanças do mundo dos negócios.</p>


    </div>

    
</div>

<div class="container" style="margin-top: 30px;">

<div class="containerImageOverlayMapaWholesale2">
    <div class="card text-bg-dark ">
      <img src="{{asset('img/wholesale/mapa-interconexoes-1024x459.png')}}" class="card-img containerImageOverlayMapaWholesale d-flex justify-content-center" alt="..." >
      <div class="card-img-overlay textoImageOverlayMapaWholesale">
        
          <div class="divImageOverlayMapaWholesale">
          <h5 class="card-title h5ImageOverlayMapaWholesale">interconexões</h5>
      </div>

       
      </div>
    </div>
  </div>


</div>    

<div class="container containerParceirosWholesale">

<div class="containerH1ParceirosWholesale">

    <h1 class="h1ParceirosWholesale">Parceiros</h1>
</div>

    <img src="{{asset('img/wholesale/parceiros.png')}}" class="img-fluid" alt="...">
</div>




    
@endsection