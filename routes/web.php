<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\tableGenerator;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::view('/register', 'registration.registration')->name('registerView');
Route::get('/register',[RegistrationController::class,'getView'])->name('registerView');
Route::post('/register',[RegistrationController::class,'store']);

Route::view('/','login.login')->name('loginView');
Route::post('/login',[RegistrationController::class,'login']);

// Route::view('/home','home.home')->name('homeView');
Route::get('/home',[tableGenerator::class,'getData'])->name('homeView');

// PARSING ID AND VIEW UPDATE PAGE
Route::get('/update/{id}',[RegistrationController::class,'getUpdate'])->name('update');

Route::post('/update/updateUser',[RegistrationController::class,'setUpdate'])->name('updateUser');

Route::get('/delete/{id}',[RegistrationController::class,'deleteUser'])->name('delete');
