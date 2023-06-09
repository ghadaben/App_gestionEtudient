<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\EtudientController;
use App\Http\Controllers\AbsanceController;
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
Route::POST("user",[UserAuth::class,'userLogin']);
Route::view("login",'login');




Auth::routes();

Route::get('/home', [App\Http\Controllers\EtudientController::class, 'index'])->name('home');
Route::resource('/home',EtudientController::class);
Route::get('/home/show/crud/{idEtudient}',[AbsanceController::class,'show']);
Route::get('/home/show/crud/{id}/ajouter',[AbsanceController::class,'create']);
Route::post('/home/show/crud/ajouter',[AbsanceController::class,'store']);




