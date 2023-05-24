@extends('layouts.home')

@section('title','EsqueciSenha')
@section('content')
    

<link rel="stylesheet" href="/css/esqueciSenha.css">
<div class="container d-flex justify-content-center" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="card text-center d-flex justify-content-center" style="width: 300px;">
      <div class="card-header h5 text-white  fundoTitulo">Resete de Senha</div>
      <div class="card-body px-5">
          <p class="card-text py-2">
              Entre seu Email e iremos enviá-lo um Email com instruções para o resete de sua senha.
          </p>
          <form action="/esquecisenha" method="POST">
          <div class="form">
              <input type="email" pattern=".+@gmail\.com" id="email" name="email" class="form-control my-3" placeholder="Email" />
              
          </div>
          <button type="submit" class="btn btn-primary w-100 botaoEsqueci">Resete de senha</button>
          
          <div class="d-flex justify-content-between mt-4">
              <a class="anchorCor" href="/login">Login</a>
              <a class="anchorCor" href="/cadastrar">Cadastrar</a>
          </div>
        </form>
      </div>
  </div>
</div>
    
@endsection