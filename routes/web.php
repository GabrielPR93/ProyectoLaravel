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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get("/show", [App\Http\Controllers\JugadorController::class, 'show'])->name("show");
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post("/store",[App\Http\Controllers\JugadorController::class, 'store'])->name("store");
Route::get("/create",[App\Http\Controllers\JugadorController::class, 'create'])->name("create");
Route::get("/inicio",[App\Http\Controllers\JugadorController::class, 'inicio'])->name("inicio");

Route::delete("/{id}", [App\Http\Controllers\JugadorController::class, 'destroy'])->name("destroy");
