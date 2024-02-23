<?php

use App\Http\Controllers\LoginController;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

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

/*
Route::get('/',function(){
return view('home');
});*/
Route::view('/','welcome');
Route::view('/login','livewire.login-register')->middleware('guest');
Route::view('/home','home')->middleware('auth');
//Route::get('/register', Register::class)->name('register');
Route::view('/register','register');

Route::post('/register', [Register:: class, 'register']);
Route::post('/login', [LoginController:: class, 'login']);
Route::post('/logout', [LoginController:: class, 'logout']);

