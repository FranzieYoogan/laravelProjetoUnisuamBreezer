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

Route::get('home/wholesale',[TelecallController::class,'wholesale']);
