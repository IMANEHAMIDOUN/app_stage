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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('pdg');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('produits',[App\Http\Controllers\ProduitController::class,'index']);
Route::get('clients',[App\Http\Controllers\ClientController::class,'index']);
Route::get('fournisseurs',[App\Http\Controllers\FournisseurController::class,'index']);
Route::get('entrees',[App\Http\Controllers\EntreeController::class,'index']);
Route::get('sorties',[App\Http\Controllers\SortieController::class,'index']);

Route::get('/gererES', function () {
    return view('ES');
});