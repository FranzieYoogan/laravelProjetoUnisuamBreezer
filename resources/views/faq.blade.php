@extends('layouts.home')

@section('title','faq')
@section('content')

<link rel="stylesheet" href="/css/faq.css">
    
<div class="container containerTituloFaq">
    <p class="tituloFaq"> Perguntas <span class="enfase"> Frequentes </span>
    </p>
  </div>
  
  
  
  <div class=" container d-flex justify-content-center " style="margin-bottom: 30px;">
  
  
  <div class="row w-100 ">
    <div class="col-3 ">
      <!-- Tab navs -->
      <div class="nav flex-column nav-tabs text-center" id="v-tabs-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-tabs-home-tab" data-mdb-toggle="tab" href="#v-tabs-home" role="tab"
          aria-controls="v-tabs-home" aria-selected="true">Internet</a>
        <a class="nav-link" id="v-tabs-profile-tab" data-mdb-toggle="tab" href="#v-tabs-profile" role="tab"
          aria-controls="v-tabs-profile" aria-selected="false">Telefonia Fixa</a>
        <a class="nav-link" id="v-tabs-messages-tab" data-mdb-toggle="tab" href="#v-tabs-messages" role="tab"
          aria-controls="v-tabs-messages" aria-selected="false">Telefonia Móvel</a>
      </div>
      <!-- Tab navs -->
    </div>
  
    <div class="col-9">
      <!-- Tab content -->
      <div class="tab-content" id="v-tabs-tabContent">
        
        
        <div class="tab-pane fade show active" id="v-tabs-home" role="tabpanel" aria-labelledby="v-tabs-home-tab">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Como realizar um teste de velocidade?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Acessar o site https://www.speedtest.net
                    Importante o teste ser realizado com o servidor Telecall selecionado.</strong>
                </div>
              </div>
            </div>
          </div>
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  O que é a velocidade de download?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>É a velocidade do recebimento de dados (exemplo: arquivo, vídeo, streaming etc.) de um
                    computador a partir de outra máquina por meio da internet.</strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  O que é a velocidade de upload?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>É a velocidade do envio de dados (exemplo: arquivo, vídeo, streaming etc.) de um
                    computador a partir de uma máquina para outra por meio da internet.</strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseFour">
                  Quais fatores externos podem influenciar os resultados do teste?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Para garantir resultados mais precisos é necessário considerar algumas questões:
                    Enquanto o teste estiver em execução, o usuário não deve usar o computador para outras funções,
                    especialmente aplicações que precisam do acesso à internet.
                    Estas aplicações conflitam com o teste e podem gerar um resultado impreciso;
                    Outros aparelhos que utilizem a mesma conexão de internet simultaneamente na rede também podem
                    afetar os resultados;
                    A conexão via cabo de rede entre o computador e o modem é a ideal para a realização do
                    teste.</strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseFive">
                  O que é latência e como é medida?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Latência é o tempo para que um sinal (bit) ou pacote de informações chegue ao seu destino
                    a partir de um computador.</strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseSix">
                  O que é perda de pacotes?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>A perda de pacotes ocorre quando um conteúdo digital, não chega ao seu destino.
                    Essa situação pode acontecer por falha de equipamento, problema no cabo de rede, alto consumo de
                    banda ou por baixa qualidade da conexão.</strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseSeven">
                  O que e um Teste de Ping?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>O Ping é um comando que serve para testar a conectividade entre elementos de rede
                    (máquinas/sites).
                    Ele basicamente envia dados para esses elementos e fica aguardando as respostas. Se o
                    equipamento responder, significa que está ativo/alcançável.</strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseEight">
                  Como realizar um teste de Ping?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Numa máquina windows, abrir o Prompt de Comando.
                    Digitar PING “endereço de destino” (exemplo: www.telecall.com)
                    A resposta será a quantidade de pacotes enviada, a quantidade recebida e a porcentagem de perda
                    (caso houver).</strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseNine">
                  Não consigo abrir nenhum site. O que fazer?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Verificar se o modem está ligado e todos os leds verdes. Caso tenha algum vermelho, entrar
                    em contato para abertura do chamado.
                    Verificar se está conectado (cabo ou wifi) ao modem.
                    Caso positivo, realizar teste de ping para a página que não abre
                    Realizar teste de ping para DNS do Google (8.8.8.8)
                    Se testes forem positivos, verificar configuração de DNS no dispositivo.
                    Se todos os testes forem negativos, reiniciar o modem e realizar os testes novamente.
                    Se testes forem negativos, entrar em contato para abertura de chamado.</strong>
                </div>
              </div>
            </div>
          </div>
        </div>
  
  
  
        <div class="tab-pane fade" id="v-tabs-profile" role="tabpanel" aria-labelledby="v-tabs-profile-tab">
         
         
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseTen">
                  PABX IP VIRTUAL
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Como efetuar chamadas
                    Fixo / Móvel: Discar somente o número
  
                    DDD Fixo / Móvel: 0 + código da cidade + número de destino
  
                    DDI Fixo / Móvel: 00 + Código do país + Código da cidade + número de destino.
  
                    Re-discar última chamada
                    Tecla RD “Redial”
  
                    Como programar transferência “Siga-me”
                    Digite *2 + Número a ser encaminhado as chamadas
  
                    Como Desprogramar transferência “Siga-me”
                    Digite *3
  
                    Como identificar o IP do meu ramal.
                    Modelo T19 e T20 = Entre as quatro setas apertar o botão do meio com o telefone no gancho. O IP
                    irá aparecer no visor do telefone. Ex: 192.168.1.10
  
                    Como verificar as mensagens na caixa postal
                    Basta discar 555 do próprio ramal que irá entrar no menu caixa postal e ouvir as
                    mensagens.</strong>
                </div>
              </div>
            </div>
          </div>
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseEleven" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Os funcionários da minha empresa precisam de treinamentos para usar o sistema VoIP da Telecall?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseEleven" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Não. Basta retirar o aparelho de telefônico do gancho, receber o sinal de discagem e
                    discar o número desejado. É muito simples! Caso precise de orientações para conhecer melhor como
                    utilizar uma linha VoiP da Telecall, a nossa equipe de suporte estará sempre à disposição para
                    atendimento.</strong>
                </div>
              </div>
            </div>
          </div>
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseSeventeen" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Se um cliente vai para outro estado ou para o exterior, é possível levar a própria linha VoIP,
                  conectá-la na internet e realizar as ligações normalmente?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseSeventeen" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Sim. O telefone VoIP Telecall pode ser usado por pessoas em residências ou empresas do
                    mundo todo, que tenham uma boa Internet banda larga ou dedicada.
                    Obs: Em alguns casos específicos pode ser necessário contatar o SAC Telecall.</strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
  
  
        </div>
  
  
  
  
        <div class="tab-pane fade" id="v-tabs-messages" role="tabpanel" aria-labelledby="v-tabs-messages-tab">
          
          
          
          
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseTwelve" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Como vejo a se a minha rede de dados está corretamente configurada (APN)?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwelve" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Passo a passo de como configurar a APN Mobile </strong>
                </div>
              </div>
            </div>
          </div>
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseThirteen" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Como realizo chamadas do meu Telecall Móvel?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseThirteen" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Chamada local (para fixo e móvel): digite o n° do telefone ou + 55 + código de localidade
                    + Nº do telefone
  
                    Chamada de longa distância nacional (para fixo e móvel): digite zero + código de localidade + Nº
                    do telefone ou + 55 + código de localidade + Nº do telefone
  
                    Chamada de longa distância internacional: contatar 3030-1010 ou 0800 030 2016 </strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseFourteen" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Como realizo chamadas do meu Telecall Móvel quando estiver em roaming?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFourteen" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Chamada local: n° do telefone ou + 55 + código de localidade + Nº do telefone
  
                    Chamada de longa distância nacional (para fixo e móvel): digite zero + código de localidade + Nº
                    do telefone ou + 55 + código de localidade + Nº do telefone </strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseFifteen" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Como programo transferência de chamadas (siga-me) em meu Telecall Móvel?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseFifteen" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Digite *21* 0 + código de localidade + Nº do telefone de destino ou através da
                    funcionalidade de transferência no menu do seu aparelho. </strong>
                </div>
              </div>
            </div>
          </div>
  
  
  
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseSixteen" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Como desativo transferência de chamadas(siga-me) em meu Telecall Móvel?
                </button>
              </h2>
              <div id="panelsStayOpen-collapseSixteen" class="accordion-collapse collapse show">
                <div class="accordion-body">
                  <strong>Digite #21# ou através no menu transferência do seu aparelho. </strong>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Tab content -->
    </div>
  </div>
  
  </div>
    
@endsection