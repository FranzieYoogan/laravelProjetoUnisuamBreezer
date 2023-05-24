<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use App\Http\Controllers\Logado;
use App\Http\Controllers\LogadoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\TelecallController;


Route::get('/',[TelecallController::class,'index']);

Route::post('/welcome',[TelecallController::class,'storeFaleConosco']);

Route::get('/home/wholesale',[TelecallController::class,'wholesale']);

Route::get('/home/institucional',[TelecallController::class,'institucional']);

Route::get('/home/faq',[TelecallController::class,'faq']);

Route::get('/home/carreiras',[TelecallController::class,'carreiras']);

Route::get('/contato',[TelecallController::class,'contato']);

Route::post('/contato',[TelecallController::class,'storeContato']);

Route::get('/login',[TelecallController::class,'login']);

Route::POST('/login',[TelecallController::class,'storeLogin']);

Route::get('/cadastrar',[TelecallController::class,'cadastrar']);

Route::POST('/cadastrar',[TelecallController::class,'storeCadastrar']);









