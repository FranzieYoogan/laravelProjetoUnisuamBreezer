<?php

namespace App\Http\Controllers;

use App\Models\cadastro;
use App\Models\Fale_conosco;
use App\Models\Vagas_aberta;
use Dotenv\Parser\Value;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Cast\Object_;
use Ramsey\Uuid\Type\Integer;
use SebastianBergmann\Type\ObjectType;
use Symfony\Component\Console\Input\Input;
use Symfony\Contracts\EventDispatcher\Event;


class TelecallController extends Controller
{
    public function home()
    {
        return view('layouts.home');
    }

    public function index(Request $request)
    {

           

      

        $value = $request->input('checkbox');

        return view('welcome', ['value' => $value,'request'=>$request]); 
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

        if ((Fale_conosco::where('nome',$request->nome)->exists()) OR
         (Fale_conosco::where('empresa',$request->empresa)->exists()) 
         OR (Fale_conosco::where('telefone',$request->telefone)->exists()) 
         OR (Fale_conosco::where('email',$request->email)->exists()) 
          )
            
         {
           
            return redirect('/dadosexistentes');
         
           
        } elseif (
            $request->checkbox and (!$request->nome or !$request->empresa or
                !$request->telefone or !$request->email or !$request->mensagem)
        ) {

            return redirect('/campovazio');

        } elseif (
            !$request->checkbox and (!$request->nome or !$request->empresa or
                !$request->telefone or !$request->email or !$request->mensagem)
        ) {
            return redirect('/errors2');
        } elseif (
            !$request->checkbox and ($request->nome or $request->empresa or
                $request->telefone or $request->email or $request->mensagem)
        ) {
            return redirect('/error');

         } elseif(($request->checkbox) and ($request->nome)  and
         ($request->empresa) and 
         ($request->telefone) and   ($request->email) 
          and ($request->mensagem))  {

            $fale_conosco->save();
            return redirect('/entraremosemcontato');
          
             
            
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

    public function storeContato(Request $request) {
        $fale_conosco = new Fale_conosco;

        $select = $_POST["tipo_suporte"];


    $fale_conosco->nome = $request->nome;
    $fale_conosco->empresa = $request->empresa;
    $fale_conosco->telefone = $request->telefone;
    $fale_conosco->email = $request->email;
    $fale_conosco->mensagem = $request->mensagem;
    $fale_conosco->checkbox = $request->checkbox;
    $fale_conosco->tipo_suporte = $request->tipo_suporte;

    if ((Fale_conosco::where('nome',$request->nome)->exists()) OR
     (Fale_conosco::where('empresa',$request->empresa)->exists()) 
     OR (Fale_conosco::where('telefone',$request->telefone)->exists()) 
     OR (Fale_conosco::where('email',$request->email)->exists()) 
      )
        
     {
       
        return redirect('/dadosexistentescontato');
     
       
    } elseif (
        $request->checkbox and (!$request->nome or !$request->empresa or
            !$request->telefone or !$request->email or !$request->mensagem 
            or !$request->tipo_suporte)
    ) {

        return redirect('/campovaziocontato');

    } elseif (
        !$request->checkbox and (!$request->nome or !$request->empresa or
            !$request->telefone or !$request->email or !$request->mensagem or !$request->tipo_suporte)
    ) {
        return redirect('/errors2contato');
    } elseif (
        !$request->checkbox and ($request->nome or $request->empresa or
            $request->telefone or $request->email or $request->mensagem or $request->tipo_suporte)
    ) {
        return redirect('/errorcontato');

     } elseif(($request->checkbox) and ($request->nome)  and
     ($request->empresa) and 
     ($request->telefone) and   ($request->email) 
      and ($request->mensagem))  {

        $fale_conosco->save();
        return redirect('/entraremosemcontatocontato');
      
         
        
      }
    }

    public function dadosExistentesContato() {
        return view('dadosexistentescontato');
    }

    public function entraremosEmContatoContato() {
        return view('entraremosemcontatocontato');
    }

    public function errorContato() {
        return view('errorcontato');
    }

    public function errors2Contato() {
        return view('errors2contato');
    }

    public function campoVazioContato() {
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

    public function contato() {
        return view('contato');
    }

    public function login() {
        return view('login');
    }

    public function storeLogin(Request $request) {

        $login = new Cadastro;
       
        $login->email = $request->email;
        $login->senha = $request->senha;

    if($login->email != $request->email OR $login->senha != $request->senha OR !$request->email
    OR !$request->senha) {
        return redirect('/loginfailed');
    }elseif($login->email == $request->email AND $login->senha == $request->senha) {

            return redirect('/getlogin');

 
}
    }

public function getLogin() {
    return view('getlogin');
}

public function loginFailed() {
    return view('loginfailed');
}

    public function storeCadastro() {

        $cadastro = new cadastro;

    }














}