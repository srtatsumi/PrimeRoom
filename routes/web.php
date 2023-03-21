<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PrpertyControl;
use App\Http\Controllers\UserController;


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
Route::get('/register/page',[LoginController::class, 'register'])->name('register');

Route::post('/register',[LoginController::class, 'registerPage'])->name('registerPage');
Route::post('/login',[LoginController::class, 'Login'])->name('Login');
Route::get('/logout',[LoginController::class, 'Logout'])->name('Logout');
// Route::get('/otp',[LoginController::class, 'otp'])->name('otp');getAllProperty  \
Route::get('/catalog',[LoginController::class, 'catalog'])->name('catalog');
Route::get('/about',[LoginController::class, 'about'])->name('about');
Route::get('/contactus',[LoginController::class, 'contactus'])->name('contactus');
Route::post('/sendMailContactUs',[LoginController::class, 'sendMailContactUs'])->name('sendMailContactUs');
Route::post('/enquirymail',[LoginController::class, 'enquirymail'])->name('enquirymail');



Route::get('/getAllProperty',[LoginController::class, 'getAllProperty'])->name('getAllProperty');
Route::get('/getPropertyDetails/{id}',[LoginController::class, 'getPropertyDetails'])->name('getPropertyDetails');
Route::post('/searchFilter',[LoginController::class, 'searchFilter'])->name('searchFilter');

Route::post('/checkotp',[LoginController::class, 'checkotp'])->name('checkotp');
Route::get('/enquiry',[LoginController::class, 'enquiry'])->name('enquiry');
// Route::get('/membership', ,[LoginController::class, 'enquiry'])->name('user');
Route::post('/subscription',[LoginController::class, 'subscription'])->name('subscription');





Route::middleware(['isRoles'])->group(function () {
    Route::get('/addAdminDashboard',[PrpertyControl::class, 'addAdminDashboard'])->name('addAdminDashboard');
    Route::get('/addPropertyForm',[PrpertyControl::class, 'addPropertyForm'])->name('addPropertyForm');
    Route::post('/addProperty',[PrpertyControl::class, 'addProperty'])->name('addProperty');
    


   
});

Route::middleware(['isUser'])->group(function () {
    Route::get('/user/dasboard',[UserController::class, 'dasborad'])->name('dasborad');
    Route::get('/user/profile',[UserController::class, 'UserProfile'])->name('userprofile');
    Route::get('/user/contact',[UserController::class, 'Contact'])->name('contactUs');
    Route::get('/user/membership',[UserController::class, 'Membership'])->name('membership');



});




// Route::get('/auth', function () {
//     return view('layouts.Auth');
// })->name('auth');
