<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//                        User Sign Up/Login
Route::post('user/signup',[apiController::class,'signup'])->name('signup');
Route::post('user/login',[apiController::class,'login'])->name('login');


Route::group(['middleware' => 'auth:api'], function(){

    Route::post('details',[apiController::class,'details']);

    });

    Route::get('categories',[apiController::class,'categories']);
    Route::get('doctors',[apiController::class,'doctors']);

    Route::post('comments',[apiController::class,'comments']);


?>
