@extends('layouts.home')

@section('title','Cadastrar')
@section('content')

<link rel="stylesheet" href="/css/cadastrar.css">
<section class="min-vh-100" style="margin: 50px 0;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Cadastro</p>

                                <form action="/cadastrar" method="POST" class="mx-1 mx-md-4">
                                    @csrf
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                        <div class="form flex-fill mb-0">
                                            <input type="text" id="nome" name="nome" class="form-control" />
                                            <label class="form-label" for="nome">Nome</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form flex-fill mb-0">
                                            <input type="email" pattern=".+@gmail\.com" placeholder="xxxx@gmail.com" id="email" name="email" class="form-control" />
                                            <label class="form-label" for="email">Email</label>
                                        </div>
                                    </div>

                                    
                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-sharp fa-solid fa-mobile fa-lg me-3 fa-fw" style="color: #000000;" ></i>
                                        <div class="form flex-fill mb-0" >
                                            <input type="tel" pattern="[0-9]{2}[0-9]{2}[0-9]{4}[0-9]{4}" id="telefone" name="telefone" class="form-control" placeholder="(+xx) xx-xxxx-xxxx" />
                                            <label class="form-label" for="telefone">Telefone</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                        <div class="form flex-fill mb-0">
                                            <input type="password" id="senha" name="senha" class="form-control" />
                                            <label class="form-label" for="senha">Senha</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                        <div class="form flex-fill mb-0">
                                            <input type="password" id="senha2" name="senha2" class="form-control" />
                                            <label class="form-label" for="senha2">Repita sua senha</label>
                                        </div>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="checked"
                                            id="checkbox" name="checkbox" />
                                        <label class="form-check-label" for="form2Example3">
                                            Concordo com os termos de serviço <a href="#!">Termos de Serviço</a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="submit" class="btn btn-primary btn-lg botaoRegistrar">Cadastrar</button>
                                       
                                    </div>
                                    @if (session('msgCadastrado'))
                                    <p class="msgGood">Cadastrado com Sucesso!!</p>
                                @endif

                                @if (session('msgCampoVazioCadastro'))
                                <p class="msgBad">Campos Vazios!!</p>
                                    
                                @endif

                                @if (session('msgSenhasNaoCombinam'))
                                <p class="msgBad">Os Campos Senhas não são Iguais!!</p>
                                    
                                @endif

                                @if (session('msgErrorCadastro'))
                                <p class="msgBad">Confirme o Campo!!</p>
                                    
                                @endif

                                @if (session('msgErrors2Cadastro'))
                                    <p class="msgBad">Confirme e Preencha os Campos</p>
                                @endif

                                @if (session('msgDadosExistentesCadastro'))
                                    <p class="msgBad">Dados Existentes!!</p>
                                @endif
                                    
                                
                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="{{asset('img/telecallLogin/telecallLogin2.png')}}" class="img-fluid" alt="Sample image">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    
@endsection