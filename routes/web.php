<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EstablechimentController;
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
});

Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth', 'verified']], function(){

   //Rutas de establecimiento
	Route::prefix('establishment')->group(function () {
	    Route::get('/create', [EstablechimentController::class, 'create'])->name('establishment.create');
	    Route::get('/edit', [EstablechimentController::class, 'edit'])->name('establishment.edit');
	});
});


