<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use App\Http\Controllers\Logado;
use App\Http\Controllers\LogadoController;
use auth\controllers\PasswordResetLinkController;
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

Route::get('/logintelecall',[TelecallController::class,'loginTelecall']);

Route::POST('/logintelecall',[TelecallController::class,'storeLogin']);

Route::get('/cadastrar',[TelecallController::class,'cadastrar']);

Route::POST('/cadastrar',[TelecallController::class,'storeCadastrar']);

Route::get('esquecisenha',[TelecallController::class,'esqueciSenha']);

Route::POST('esquecisenha',[TelecallController::class,'storeEsqueciSenha']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
