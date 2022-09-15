<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})-> middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Rotas de teste - HOME
Route::get('/home',function()
{
    return view('base.index');
})->name('base.index');
//CONTATO
Route::get('/contato',function()
{
    return view('base.contato');
})->name('base.contato');

Route::post('/cadastro', function(Request $request){
    dd($request);
})->name('base.cadastro');


// CADASTRO >>>>>>>
Route::prefix('cadastros')->group(function()
{
    Route::get('/', [CadastroController::class, 'index'])->name('cadastro.index');
});

require __DIR__.'/auth.php';



