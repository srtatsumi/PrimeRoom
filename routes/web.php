<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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


Route::get('/',[LoginController::class, 'index'])->name('index');

Route::get('/login',[LoginController::class, 'loginPage'])->name('loginPage');
Route::post('/register',[LoginController::class, 'registerPage'])->name('registerPage');
Route::post('/login',[LoginController::class, 'Login'])->name('Login');
Route::get('/logout',[LoginController::class, 'Logout'])->name('Logout');






// Route::get('/auth', function () {
//     return view('layouts.Auth');
// })->name('auth');
