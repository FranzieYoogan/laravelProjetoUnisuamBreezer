@extends('layouts.home')

@section('title','contato')

@section('content')
    

<link rel="stylesheet" href="/css/contato.css">
<div class="card text-bg-dark imagemContatoContainer">
    <img src="{{asset('img/contato/contato2.jpeg')}}" class="card-img imagemContato" alt="Stony Beach"/>
    <div class="card-img-overlay textoImagem d-flex justify-content-start">
      <div class="h1TituloContainer"></div>
      <h5 class="card-text hTitulo">Contato</h5>
      
      
    </div>
  </div>



<div class="container d-flex justify-content-center containerPrincipal">

   
    <div class="row containerPrincipal2">       
       <div class="container containerTelefone1">
        <p class="pTelefone1">Ligue ou envie um WhatsApp para nós</p>
        <h1 class="h1Telefone">(21) 3030-1010</h1>
      </div>

        <div class="container containerTelefone2">
          <a href="" class="linkTelefone"><i class="fa-brands fa-whatsapp"></i> Whatsapp Comercial</a>
          <a href="" class="linkTelefone"><i class="fa-brands fa-whatsapp"></i> Whatsapp Suporte</a>
          <a href="" class="linkTelefone"><i class="fa-brands fa-whatsapp"></i> Whatsapp Financeiro</a>
        </div>
      
        <div class="container containerEmail">
          <p class="pEmail">Envie um Email</p>
          <p class="pEmailTitulo">suporte@telecall.com</p>
          <p>Respondemos em até 24h</p>

        </div>

        <div class="container containerEscritorios">
         <p class="pEscritorios">Escritórios</p>
         
         <p class="pTituloEscritorios">Brasil</p>
         <p>Centro empresarial Mario Henrique Simonsen Av. das Américas, 3434 | Bloco 1, Sala 505 Barra da Tijuca | Rio de Janeiro, RJ</p>
         
         <p class="pTituloEscritorios">Estados Unidos</p>
         <p>848 Brickell Av - Suite 1235 - Miami FL - 33131</p>

         <p class="pTituloEscritorios">Portugal</p>
         <p>Avenida da Liberdade nº 245, 4º piso, sala 402 Lisboa, Portugal, 1250-143</p>

         <p class="pTituloEscritorios">Inglaterra</p> 
          <p>8 Devonshire Squae, Londom EC2M 4YJ</p>
        </div>
    </div>


    <form class="containerForm" action="/dadosexistentescontato" method="POST">
      @csrf
      <div class="mb-3 ">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Nunca iremos compartilhar seu email com outra pessoa</div>
      </div>
      <div class="mb-3">
        <label for="empresa" class="form-label">Empresa</label>
        <input type="text" class="form-control" id="empresa" name="empresa">
      </div>
      <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input type="tel" class="form-control" id="telefone" name="telefone">
      </div>
      <div class="mb-3">
        <select class="form-select" id="tipo_suporte" name="tipo_suporte" required="required" aria-label="Default select example">
          <option selected>-- Seleciona uma opção</option>
          <option value="comercial">Comercial</option>
          <option value="suportecnico">Suporte Técnico</option>
          <option value="administrativoFinanceiro">Administrativo / Financeiro</option>
          <option value="outros">Outros</option>
        </select>
      </div>

      <div class="mb-3">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Deixe uma mensagem" id="mensagem" name="mensagem" style="height: 100px;"></textarea>
          <label for="mensagem">Mensagem</label>
        </div>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="checkbox" name="checkbox" value="checked">
        <label class="form-check-label" for="checkbox">Confirmar</label>
      </div>
      <button type="submit" class="btn btn-primary botaoEnviar">Enviar</button>
      <p style="color: red">Dados existentes!!</p>
    </form>
    

</div>
    
@endsection