@extends('layouts.home')

@section('title','EsqueciSenha')
@section('content')
    

<link rel="stylesheet" href="/css/esqueciSenha.css">
<div class="container d-flex justify-content-center" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="card text-center d-flex justify-content-center" style="width: 300px;">
      <div class="card-header h5 text-white  fundoTitulo">Resete de Senha</div>
      <div class="card-body px-5">
          <p class="card-text py-2">
              Digite as informações para alterar sua senha
          </p>
          
          <form action="{{ route('password.store') }}"  method="POST">
            @csrf
                    <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

          <div class="form">
              <x-text-input type="email" pattern=".+@gmail\.com" id="email" name="email" :value="old('email')" required autofocus class="form-control my-3" placeholder="Email" />
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
          </div>

         

        <div class="form">
            <x-text-input type="password" pattern="[A-Za-z0-9\W+]+" id="password" name="password" required autocomplete="new-password"  class="form-control my-3" placeholder="Digite sua Senha" />
          
        </div>

        <div class="form">
            <x-text-input type="password" pattern="[A-Za-z0-9\W+]+" id="password_confirmation" name="password_confirmation" required autocomplete="new-password"  class="form-control my-3" placeholder="Digite sua senha novamente" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

          <button type="submit" class="btn btn-primary w-100 botaoEsqueci">Resetar Senha</button>
          
          <div class="d-flex justify-content-between mt-4">
              <a class="anchorCor" href="/logintelecall">Login</a>
              <a class="anchorCor" href="/cadastrar">Cadastrar</a>
          </div>
        </form>
      </div>
  </div>
</div>
    
@endsection