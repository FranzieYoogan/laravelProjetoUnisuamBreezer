<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

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

Route::get('/error',[TelecallController::class,'error']);

Route::post('/error',[TelecallController::class,'storeFaleConosco']);

Route::post('/entraremosemcontato',[TelecallController::class,'storeFaleConosco']);

Route::get('/entraremosemcontato',[TelecallController::class,'entraremosEmContato']);

Route::get('/campovazio',[TelecallController::class,'campoVazio']);

Route::post('/campovazio',[TelecallController::class,'storeFaleConosco']);

Route::get('/errors2',[TelecallController::class,'errors2']);

Route::post('/errors2',[TelecallController::class,'storeFaleConosco']);

Route::get('/dadosexistentes',[TelecallController::class,'dadosExistentes']);

Route::post('/dadosexistentes',[TelecallController::class,'storeFaleConosco']);

Route::get('/contato',[TelecallController::class,'contato']);

Route::post('/contato',[TelecallController::class,'storeContato']);

Route::get('/dadosexistentescontato',[TelecallController::class,'dadosExistentesContato']);

Route::post('/dadosexistentescontato',[TelecallController::class,'storeContato']);

Route::get('/entraremosemcontatocontato',[TelecallController::class,'entraremosEmContatoContato']);

Route::post('/entraremosemcontatocontato',[TelecallController::class,'storeContato']);

Route::get('/errorcontato',[TelecallController::class,'errorContato']);

Route::post('/errorcontato',[TelecallController::class,'storeContato']);

Route::get('/errors2contato',[TelecallController::class,'errors2Contato']);

Route::post('/errors2contato',[TelecallController::class,'storeContato']);

Route::get('/campovaziocontato',[TelecallController::class,'campoVazioContato']);

Route::post('/campovaziocontato',[TelecallController::class,'storeContato']);

Route::get('/login',[TelecallController::class,'login']);

Route::POST('/login',[TelecallController::class,'storeLogin']);

Route::get('/getlogin',[TelecallController::class,'getLogin']);

Route::POST('/getlogin',[TelecallController::class,'storeLogin']);

Route::get('/loginfailed',[TelecallController::class,'loginFailed']);

Route::POST('/loginfailed',[TelecallController::class,'storeLogin']);


