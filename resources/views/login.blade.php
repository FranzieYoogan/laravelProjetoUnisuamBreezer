@extends('layouts.home')

@section('title','login')

@section('content')
    

<link rel="stylesheet" href="/css/login.css">
<section class="vh-100">
    <div class="container-fluid h-custom divLogin">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="{{asset('img/telecallLogin/telecallLogin2.png')}}"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
          <form action="/login" method="POST">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Faça o login pelo</p>
              <button type="button" class="btn btn-primary btn-bs-floating mx-1 botaoRedes">
                <i class="fab fa-facebook-f"></i>
              </button>
  
              <button type="button" class="btn btn-primary btn-bs-floating mx-1 botaoRedes">
                <i class="fab fa-twitter"></i>
              </button>
  
              <button type="button botaoRedes" class="btn btn-primary btn-bs-floating  mx-1 botaoRedes">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </div>
  
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0">Ou</p>
            </div>
  
            <!-- Email input -->
            <div class="form mb-4">
              <input type="email" pattern=".+@gmail\.com" id="email" name="email" class="form-control form-control-lg"
                placeholder="Entre um endereço de Email válido" />
              
            </div>
  
            <!-- Password input -->
            <div class="form mb-3">
              <input type="password" pattern="[A-Za-z0-9\W+]+" minlength="8" maxlength="8" id="senha" name="senha" class="form-control form-control-lg"
                placeholder="Entre sua senha" />
              
            </div>
  
            <div class="d-flex justify-content-end align-items-center">
              
             
              <a routerLink="/esqueci-minha-senha" class="text-body">Esqueceu sua senha?</a>
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">

              <button type="submit" class="btn btn-primary btn-lg botaoLogin"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>

                @if (session('msgLoginFailed'))
                    <p class="msgBad">Campos Incorretos!!</p>
                @endif

                @if(session('msgLogado'))
                <p class="msgGood">Logado Com Sucesso!!</p>
            @endif

            @if(session('msgCampoVazioLogin'))
            <p class="msgBad">Campos Vazios!!</p>
        @endif

              <p class="small fw-bold mt-2 pt-1 mb-0 " >Não possui uma conta? <a href="/cadastrar"
                  class="link-danger">Registrar-se</a></p>
            </div>
  
          </form>
        </div>
      </div>
    </div>
    
      <!-- Copyright -->
  
      <!-- Right -->
     
  </section>
    
@endsection