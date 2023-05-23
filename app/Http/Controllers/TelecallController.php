<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use App\Models\Fale_conosco;
use App\Models\Vagas_aberta;
use Dotenv\Parser\Value;
use Illuminate\Auth\Events\Login;
use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Object_;
use PhpParser\Node\Stmt\Global_;
use Ramsey\Uuid\Type\Integer;
use SebastianBergmann\Type\ObjectType;
use Symfony\Component\Console\Input\Input;
use Symfony\Contracts\EventDispatcher\Event;
use App\Http\Controllers\LogadoController;
use App\Http\Controllers\Logado;
use App\Models\proximos_evento;

class TelecallController extends Controller
{
    public function home()
    {
        return view('layouts.home');
    }

    public function index(Request $request)
    {

        $value = $request->input('checkbox');

       
        
        return view('welcome', ['value' => $value, 'request' => $request]);
    }

    public function storeFaleConosco(Request $request)
    {


        $fale_conosco = new Fale_conosco;




        $fale_conosco->nome = $request->nome;
        $fale_conosco->empresa = $request->empresa;
        $fale_conosco->telefone = $request->telefone;
        $fale_conosco->email = $request->email;
        $fale_conosco->mensagem = $request->mensagem;
        $fale_conosco->checkbox = $request->checkbox;

        if (
            (Fale_conosco::where('nome',
                $request->nome)->exists()) or
            (Fale_conosco::where('empresa',
                $request->empresa)->exists())
            or (Fale_conosco::where('telefone',
                $request->telefone)->exists())
            or (Fale_conosco::where('email',
                $request->email)->exists())
        ) {

            return redirect('/')->with('msgDadosExistentes','Dados Existentes!!');


        } elseif (
            $request->checkbox and (!$request->nome or !$request->empresa or
                !$request->telefone or !$request->email or !$request->mensagem)
        ) {

            return redirect('/')->with('msgCampoVazio','Campos Vazios!!');

        } elseif (
            !$request->checkbox and (!$request->nome or !$request->empresa or
                !$request->telefone or !$request->email or !$request->mensagem)
        ) {
            return redirect('/')->with('msgErrors2','Confirme e Preencha os Campos!!');
        } elseif (
            !$request->checkbox and ($request->nome or $request->empresa or
                $request->telefone or $request->email or $request->mensagem)
        ) {
            return redirect('/')->with('msgError','Confirme o Campo!!');

        } elseif (
            ($request->checkbox) and ($request->nome) and
            ($request->empresa) and
            ($request->telefone) and ($request->email)
            and ($request->mensagem)
        ) {

            $fale_conosco->save();
            return redirect('/')->with('msgEntraremosEmContato','Entraremos em Contato!!');



        }
    }








    public function error()
    {
        return view('error');
    }

    public function errors2()
    {
        return view('errors2');
    }

    public function dadosExistentes()
    {
        return view('dadosexistentes');
    }

    public function campoVazio()
    {
        return view('campoVazio');
    }

    public function entraremosEmContato()
    {
        return view('entraremosemcontato');
    }

    public function storeContato(Request $request)
    {
        $fale_conosco = new Fale_conosco;

        $select = $_POST["tipo_suporte"];


        $fale_conosco->nome = $request->nome;
        $fale_conosco->empresa = $request->empresa;
        $fale_conosco->telefone = $request->telefone;
        $fale_conosco->email = $request->email;
        $fale_conosco->mensagem = $request->mensagem;
        $fale_conosco->checkbox = $request->checkbox;
        $fale_conosco->tipo_suporte = $request->tipo_suporte;

        if (
            (Fale_conosco::where('nome',
                $request->nome)->exists()) or
            (Fale_conosco::where('empresa',
                $request->empresa)->exists())
            or (Fale_conosco::where('telefone',
                $request->telefone)->exists())
            or (Fale_conosco::where('email',
                $request->email)->exists())
        ) {

            return redirect('/contato')->with('msgDadosExistentesContato','Dados Existentes');


        } elseif (
            $request->checkbox and (!$request->nome or !$request->empresa or
                !$request->telefone or !$request->email or !$request->mensagem
                or !$request->tipo_suporte)
        ) {

            return redirect('/contato')->with('msgCampoVazioContato','Campos Vazios');

        } elseif (
            !$request->checkbox and (!$request->nome or !$request->empresa or
                !$request->telefone or !$request->email or !$request->mensagem or !$request->tipo_suporte)
        ) {
            return redirect('/contato')->with('msgErrors2Contato','Confirme e Preencha os Campos!!');
        } elseif (
            !$request->checkbox and ($request->nome or $request->empresa or
                $request->telefone or $request->email or $request->mensagem or $request->tipo_suporte)
        ) {
            return redirect('/contato')->with('msgErrorContato','Confirme o Campo!!');

        } elseif (
            ($request->checkbox) and ($request->nome) and
            ($request->empresa) and
            ($request->telefone) and ($request->email)
            and ($request->mensagem)
        ) {

            $fale_conosco->save();
            return redirect('/contato')->with('msgEntraremosEmContatoContato','Entraremos em contato!!');



        }
    }

    public function dadosExistentesContato()
    {
        return view('dadosexistentescontato');
    }

    public function entraremosEmContatoContato()
    {
        return view('entraremosemcontatocontato');
    }

    public function errorContato()
    {
        return view('errorcontato');
    }

    public function errors2Contato()
    {
        return view('errors2contato');
    }

    public function campoVazioContato()
    {
        return view('campovaziocontato');
    }




    public function wholesale()
    {
        return view('wholesale');
    }

    public function institucional()
    {
        return view('institucional');
    }

    public function faq()
    {
        return view('faq');
    }

    public function carreiras()
    {

        $carreiras = Vagas_aberta::all();





        $search = request('query');
        $selectCarreiras = request('selectCarreiras');


        if ($search) {
            $carreiras = Vagas_aberta::where([
                ['vagas_nome', 'like', '%' . $search . '%']
            ])->get();



            $carreirasCount = $carreiras->count();


        } else {
            $carreiras;
            $carreirasCount = $carreiras->count();
        }



        return view('carreiras', ['carreiras' => $carreiras, 'carreirasCount' => $carreirasCount, 'search' => $search]);

    }

    public function contato()
    {
        return view('contato');
    }

    public function login()
    {
        return view('login');
    }

    public function storeLogin(Request $request)
    {

        $login = new Cadastro;

       $senha = Cadastro::where('senha',request('senha'))->value('senha');
        $email = Cadastro::where('email',request('email'))->value('email');
       

        $login->email = $request->email;
        $login->senha = $request->senha;


    if (!$request->email OR !$request->senha) {

        return redirect('/login')->with('msgCampoVazioLogin','Campos vazios!!');

}
    elseif ($email == $request->email and $senha == $request->senha) {

    return redirect('/login')->with('msgLogado','Logado com Sucesso!!');


}
        elseif($senha != $request->senha or $email != $request->email)
{
            return redirect('/login')->with('msgLoginFailed','Campos Incorretos!!');


        } 
    }




  

  

    public function storeCadastrar(Request $request)
    {
       
        $cadastrar = new Cadastro;

        $cadastrar->nome = $request->nome;
        $cadastrar->email = $request->email;
        $cadastrar->telefone = $request->telefone;
        $cadastrar->senha = $request->senha;
        $cadastrar->senha2 = $request->senha2;
        $cadastrar->checkbox = $request->checkbox;



       if( ($request->checkbox) and ($request->nome)
        and
        ($request->telefone) and ($request->email)
        and ($request->senha) and ($request->senha2 == $request->senha)) {

            $cadastrar->save();
            return redirect('/cadastrado');

   
        

        }elseif (
            $request->checkbox and (!$request->nome or
                !$request->telefone or !$request->email or !$request->senha
                or !$request->senha2)
        ) {
           
            return  redirect('/campovaziocadastro');

               } elseif ($request->senha2 != $request->senha AND ($request->checkbox) and ($request->nome)
        and
        ($request->telefone) and ($request->email)
        ) {

            return redirect('senhasnaocombinam');
        

        }
        elseif (
            !$request->checkbox and ($request->nome or
                $request->telefone or $request->email or $request->senha or $request->senha2)
        ) {
            return redirect('/errorcadastro');

        } 

    elseif (
        !$request->checkbox AND (!$request->nome OR
            !$request->telefone OR !$request->email OR !$request->senha OR !$request->senha2) 
         
    ) {
        return redirect('/errors2cadastro');

    }

    elseif(
        (Cadastro::where('nome',
            $request->nome)->exists()) or
        (Cadastro::where('email',
            $request->email)->exists())
        or (Cadastro::where('telefone',
            $request->telefone)->exists())
        or (Cadastro::where('senha',
            $request->senha)->exists()) 
            or  (Cadastro::where('senha2',
            $request->senha)->exists()) 
    ) {



        return redirect('/dadosexistentescadastro');


    }
}

    public function cadastrar()
    {
       
        return view('cadastrar');
    }

    public function cadastrado() {
        return view('cadastrado');
    }

    public function senhasNaoCombinam() {
        return view('senhasnaocombinam');
    }

    public function errorCadastro()
    {
        return view('errorcadastro');
    }

    public function dadosExistentesCadastro()
    {
        return view('dadosexistentescadastro');
    }

    public function campoVazioCadastro()
    {
        return view('campovaziocadastro');
    }

    public function errors2Cadastro()
    {
        return view('errors2cadastro');
    }














}