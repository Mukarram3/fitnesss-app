<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ForgotPasswordController;

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

//                        Auth Routes Start

Route::get('user/signup',[AuthController::class,'signup_page'])->name('signup_page');
Route::post('user/signup',[AuthController::class,'signup'])->name('signup');
Route::get('user/login',[AuthController::class,'login_page'])->name('login_page');
Route::post('user/login',[AuthController::class,'login'])->name('login');

Route::post('user/logout',[AuthController::class,'logout'])->name('logout');

// Route::view('forgot_password', 'auth.reset_password')->name('password.reset');


//                        Auth Routes End

//           Reset Password Routes Start

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('login',[ForgotPasswordController::class,'resetpassword'])->name('login-forgwtpassword');

//           Reset Password routes end


//                        User Routes Start


Route::group(['middleware'=>'auth'],function(){

Route::get('user/index',[UserController::class,'user'])->name('user_page');
Route::get('/user-profile',[UserController::class, 'userprofile'])->name('userprofile');
Route::get('/getUserList',[UserController::class, 'getUserList'])->name('getUserList');
Route::post('user/del_user',[UserController::class,'del_user'])->name('del_user');
Route::post('user/delall_user',[UserController::class,'delall_user'])->name('delall_user');
Route::post('user/add_user_data',[UserController::class,'add_user_data'])->name('add_user_data');
Route::post('/getUserDetails',[UserController::class, 'getUserDetails'])->name('get.user.details');
Route::post('/updateUserDetails',[UserController::class, 'updateuserdetails'])->name('update.user.details');

});

//                        User Routes End

//                      Payment Gateway routes start

Route::get('/stripe-payment', [StripeController::class, 'handleGet']);
Route::post('/stripe-payment', [StripeController::class, 'handlePost'])->name('stripe.payment');


//                      Payment Gateway routes end
