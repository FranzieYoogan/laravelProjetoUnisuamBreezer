<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        $fale_conosco->tipo_suporte = $request->tipo_suporte;

        if (
            
            (Fale_conosco::where('empresa',
                $request->empresa)->exists())
            or (Fale_conosco::where('telefone',
                $request->telefone)->exists())
            or (Fale_conosco::where('email',
                $request->email)->exists())
        ) {

            return redirect('/')->with('msgDadosExistentes','Dados Existentes');

        }  elseif (
            $request->tipo_suporte == '-- Seleciona uma opção --' and !$request->checkbox and ($request->nome or $request->empresa or
                $request->telefone or $request->email or $request->mensagem)
        ) {
            return redirect('/')->with('msgErrorCheckSelect','Confirme e Selecione uma Opção'); 


         
         
        }     elseif (
            $request->tipo_suporte == '-- Seleciona uma opção --' and ($request->nome or $request->empresa or
                $request->telefone or $request->email or $request->mensagem or $request->checkbox )
        ) {
            return redirect('/')->with('msgErrorSelect','Selecione uma opção'); 

         } elseif (
            $request->checkbox and (!$request->nome or !$request->empresa or
                !$request->telefone or !$request->email or !$request->mensagem
                or $request->tipo_suporte == '-- Seleciona uma opção --')
        ) {

            return redirect('/')->with('msgCampoVazio','Campos Vazios');

        } elseif (
            !$request->checkbox and (!$request->nome or !$request->empresa or
                !$request->telefone or !$request->email or !$request->mensagem or $request->tipo_suporte == '-- Seleciona uma opção --')
        ) {
            return redirect('/')->with('msgErrors2','Confirme, selecione uma opção e Preencha os Campos!!');
        } elseif (
            !$request->checkbox and ($request->nome or $request->empresa or
                $request->telefone or $request->email or $request->mensagem or $request->tipo_suporte != '-- Seleciona uma opção --')
        ) {
            return redirect('/')->with('msgError','Confirme o Campo!!');

         } elseif (
            ($request->checkbox) and ($request->nome) and
            ($request->empresa) and
            ($request->telefone) and ($request->email) and ($request->mensagem)
            and ($request->tipo_suporte != '-- Seleciona uma opção --')
        ) {

            

            $fale_conosco->save();
            return redirect('/')->with('msgEntraremosEmContato','Entraremos em contato!!');



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

        


        $fale_conosco->nome = $request->nome;
        $fale_conosco->empresa = $request->empresa;
        $fale_conosco->telefone = $request->telefone;
        $fale_conosco->email = $request->email;
        $fale_conosco->mensagem = $request->mensagem;
        $fale_conosco->checkbox = $request->checkbox;
        $fale_conosco->tipo_suporte = $request->tipo_suporte;

        if (
            
            (Fale_conosco::where('empresa',
                $request->empresa)->exists())
            or (Fale_conosco::where('telefone',
                $request->telefone)->exists())
            or (Fale_conosco::where('email',
                $request->email)->exists())
        ) {

            return redirect('/contato')->with('msgDadosExistentesContato','Dados Existentes');


        }  elseif (
            $request->tipo_suporte == '-- Seleciona uma opção --' and !$request->checkbox and ($request->nome or $request->empresa or
                $request->telefone or $request->email or $request->mensagem)
        ) {
            return redirect('/contato')->with('msgErrorCheckSelectContato','Confirme e Selecione uma Opção'); 


         }    elseif (
            $request->tipo_suporte == '-- Seleciona uma opção --' and ($request->nome or $request->empresa or
                $request->telefone or $request->email or $request->mensagem or $request->checkbox )
        ) {
            return redirect('/contato')->with('msgErrorSelectContato','Selecione uma opção'); 


         }
         elseif (
            $request->checkbox and (!$request->nome or !$request->empresa or
                !$request->telefone or !$request->email or !$request->mensagem
                or $request->tipo_suporte == '-- Seleciona uma opção --')
        ) {

            return redirect('/contato')->with('msgCampoVazioContato','Campos Vazios');

        } elseif (
            !$request->checkbox and (!$request->nome or !$request->empresa or
                !$request->telefone or !$request->email or !$request->mensagem or $request->tipo_suporte == '-- Seleciona uma opção --')
        ) {
            return redirect('/contato')->with('msgErrors2Contato','Confirme, selecione uma opção e Preencha os Campos!!');
        } elseif (
            !$request->checkbox and ($request->nome or $request->empresa or
                $request->telefone or $request->email or $request->mensagem or $request->tipo_suporte != '-- Seleciona uma opção --')
        ) {
            return redirect('/contato')->with('msgErrorContato','Confirme o Campo!!');

         } elseif (
            ($request->checkbox) and ($request->nome) and
            ($request->empresa) and
            ($request->telefone) and ($request->email) and ($request->mensagem)
            and ($request->tipo_suporte != '-- Seleciona uma opção --')
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

    public function loginTelecall()
    {
        return view('logintelecall');
    }

    public function storeLogin(Request $request)
    {

        $login = new User;

       $senha = User::where('password',request('password'))->value('password');
        $email = User::where('email',request('email'))->value('email');
       

        


    if (!$request->email OR !$request->password) {

        return redirect('/logintelecall')->with('msgCampoVazioLogin','Campos vazios!!');

}
    elseif ($email == $request->email and $senha == $request->password) {

    return redirect('/logintelecall')->with('msgLogado','Logado com Sucesso!!');


}
        elseif($senha != $request->password or $email != $request->email)
{
            return redirect('/logintelecall')->with('msgLoginFailed','Campos Incorretos!!');


        } 
    }




  

  

    public function storeCadastrar(Request $request)
    {
       
        $cadastrar = new User;

        $cadastrar->name = $request->name;
        $cadastrar->email = $request->email;
        $cadastrar->telefone = $request->telefone;
        $cadastrar->password = $request->password;
        $cadastrar->password2 = $request->password2;
        $cadastrar->checkbox = $request->checkbox;



       if( ($request->checkbox) and ($request->name)
        and
        ($request->telefone) and ($request->email)
        and ($request->password) and ($request->password2 == $request->password) and !(User::where('email',
        $request->email)->exists())
    and !(User::where('telefone',
        $request->telefone)->exists())) {

            $cadastrar->save();
            return redirect('/cadastrar')->with('msgCadastrado','Cadastrado com Sucesso!!');

   
        

        }elseif (
            $request->checkbox and (!$request->name or
                !$request->telefone or !$request->email or !$request->password
                or !$request->password2)
        ) {
           
            return  redirect('/cadastrar')->with('msgCampoVazioCadastro','Campos Vazios');

               } elseif ($request->password2 != $request->password AND ($request->checkbox) and ($request->name)
        and
        ($request->telefone) and ($request->email)
        ) {

            return redirect('/cadastrar')->with('msgSenhasNaoCombinam','Os campos senha não são iguais!!');
        

        }
        elseif (
            !$request->checkbox and ($request->name or
                $request->telefone or $request->email or $request->password or $request->password2)
        ) {
            return redirect('/cadastrar')->with('msgErrorCadastro','Confirme o Campo!!');

        } 

    elseif (
        !$request->checkbox AND (!$request->name OR
            !$request->telefone OR !$request->email OR !$request->password OR !$request->password2) 
         
    ) {
        return redirect('/cadastrar')->with('msgErrors2Cadastro','Confirme e Preencha os Campos!!');

    }

    elseif(
        
        (User::where('email',
            $request->email)->exists())
        or (User::where('telefone',
            $request->telefone)->exists())
        
    ) {



        return redirect('/cadastrar')->with('msgDadosExistentesCadastro','Dados Existentes');


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

    public function esqueciSenha() {


        return view('esquecisenha');
    }

    public function storeEsqueciSenha(Request $request) {

        $email = new Cadastro;

        if ($request->email == $email->email) {
            return redirect('password.email');
        }

       
    }














}