<?php

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
use App\Http\Controllers\EventController;

Route::get('/animes/welcome',[EventController::class, 'index']);

Route::get('/',[EventController::class, 'inicial']);

Route::get('/animes/listar',[EventController::class, 'listar_animes'])->middleware('auth');

Route::get('/animes/adicionar',[EventController::class, 'adicionar_animes'])->middleware('auth');
Route::get('/animes/{id}',[EventController::class, 'show'])->middleware('auth');
Route::post('/animes',[EventController::class,'store']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('/animes/welcome');
})->name('dashboard');
