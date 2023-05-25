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
          <x-auth-session-status class="mb-4 msgGood" :status="session('status')" />
          <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="form">
              <x-text-input type="email" pattern=".+@gmail\.com" id="email" name="email" :value="old('email')" required autofocus class="form-control my-3" placeholder="Email" />
              <x-input-error :messages="$errors->get('email')" class="mt-2 msgBad" />
          </div>
          <x-primary-button type="submit" class="btn btn-primary w-100 botaoEsqueci">Resetar Senha</x-primary-button>
          
          <div class="d-flex justify-content-between mt-4">
              <a class="anchorCor" href="/logintelecall">Login</a>
              <a class="anchorCor" href="/cadastrar">Cadastrar</a>
          </div>
        </form>
      </div>
  </div>
</div>
    
@endsection