<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[ProductController::class,'index']);

Route::get('/register',[AuthentificationController::class,'RegisterForm']);
Route::post('/register',[AuthentificationController::class,'register']);

Route::get('/login',[AuthentificationController::class,'LoginForm']);
Route::post('/login',[AuthentificationController::class,'Login']);

Route::get('/admin/salle',[AdminController::class,'SalleIndex']);

Route::post('/admin/salle',[AdminController::class,'CreateSalle']);

Route::get('/admin/salle',[AdminController::class,'SalleRender']);

Route::post('/admin/delete/salle',[AdminController::class,'DeleteSalle']);
// Route::post('/admin/salle/update',[AdminController::class,'EditSalle']);
// Route::get('/admin/salle/update',[AdminController::class,'EditSalle']);
Route::get('/admin/salle/update/{id}',[AdminController::class,'Edit']);
Route::put('/admin/salle/update/{id}',[AdminController::class,'EditSalle']);

Route::get('/salles/home',[ClientController::class,'index']);
Route::get('/salles/home',[ClientController::class,'SalleRender']);

Route::get('/confirmation/reservation/{id}',[ClientController::class,'CheckoutReservation']);
Route::post('/confirmation/reservation/{id}',[ClientController::class,'CheckoutreservationSend']);

Route::get('/reservation/list',[ClientController::class,'RenderReservation']);

Route::get('/reservation/cancel/{id}',[ClientController::class,'ReservationCancel']);

Route::get('/confirmation', function (){
    return view('/ConfirmationRéservation');
});