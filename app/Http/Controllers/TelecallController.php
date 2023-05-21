<?php

namespace App\Http\Controllers;

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
    public function home() {
        return view('layouts.home');
    }

    public function index(Request $request) {  
        $value = $request->input('checkbox');

        return view('welcome',['value' =>$value]);
    }

    public function storeFaleConosco(Request $request) {
        
        
        $fale_conosco = new Fale_conosco;

        


        $fale_conosco->nome = $request->nome;
        $fale_conosco->empresa = $request->empresa;
        $fale_conosco->telefone = $request->telefone;
        $fale_conosco->email = $request->email;
        $fale_conosco->mensagem = $request->mensagem;
        $fale_conosco->checkbox = $request->checkbox;

        if($request->checkbox != '') {
            $fale_conosco->save(); 
            return " <h1 style='color: green;'>Entraremos em contato! </h1>";
        } else {
            
            return '<h1 style="color: red;">Você não confirmou</h1>';
        
        }
    }

    public function wholesale() {
        return view('wholesale');
    }

    public function institucional() {
        return view('institucional');
    }

    public function faq() {
        return view('faq');
    }

    public function carreiras() {
        
        $carreiras = Vagas_aberta::all();
        
            
        

       
        $search = request('query');
        $selectCarreiras = request('selectCarreiras');
       

        if($search) {
            $carreiras = Vagas_aberta::where([
                ['vagas_nome','like','%'.$search.'%']
            ])->get();

         
            
            $carreirasCount = $carreiras->count();


        }  else {
            $carreiras;
            $carreirasCount = $carreiras->count();
        }

        

        return view('carreiras',['carreiras' => $carreiras,'carreirasCount' =>$carreirasCount,'search'=>$search]);
    
        }



    


       
            
       

    
 


    }
       
    

    
    
    
      
     
    

        
    

