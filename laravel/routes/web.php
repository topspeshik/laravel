<?php

use App\Http\Controllers\UserController;
use App\Mail\WelcomeMail;
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

Route::get('/', [UserController::class,'home'])->name('home');

Route::get('/login', [UserController::class,'login'])->name('login');

Route::get('/registration', [UserController::class,'registration'])->name('registration');

Route::post('/registration/check', [UserController::class,'registration_check'])->name('registration_check');

Route::get('/registration/delete/{id}', [UserController::class,'delete_mess'])->name('delete-mess');

Route::get('/registration/send/{id}', [UserController::class,'send_mess'])->name('send-mess');

//Route::get('/user/{id}/{name}', function ($id, $name) {
//    return 'ID: '. $id.'. Name: '.$name;
//});

//Route::get('/email', function() {
//   Mail::to('yegor.nazarenko.01@mail.ru')->send(new WelcomeMail());
//   return new WelcomeMail();
//});

