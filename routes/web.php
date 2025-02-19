<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthentificationController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[ProductController::class,'index']);

Route::get('/register',[AuthentificationController::class,'RegisterForm']);
Route::post('/register',[AuthentificationController::class,'register']);

Route::post('/test', function () {
    return "Route fonctionne !";
});