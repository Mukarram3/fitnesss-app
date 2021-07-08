<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use App\Http\Controllers\ForgotPasswordController;
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

Route::group(['middleware' => 'auth:api'], function(){



    });


//                        User Sign Up/Login


Route::post('user/signup',[apiController::class,'signup'])->name('signup');
Route::post('user/login',[apiController::class,'login'])->name('login');
Route::post('forget_password/email',[ForgotPasswordController::class,'forgot']);
Route::post('forget_password/reset',[ForgotPasswordController::class,'reset']);

//                         Workout


Route::get('workout_category/index',[apiController::class,'workoutcategory_index'])->name('workoutcategory_index');

Route::get('workout_category/exercises',[apiController::class,'exercises'])->name('exercises');



//                         Meal Category Routes

Route::get('meal_category/index',[apiController::class,'mealcategoryindex'])->name('mealcategoryindex');
Route::get('meal_categorypaid/index',[apiController::class,'mealcategorypaidindex'])->name('mealcategorypaidindex');
Route::get('mealcategoryplan/index',[apiController::class,'mealcategoryplanindex'])->name('mealcategoryplanindex');
Route::get('weekdaysmealcat/index',[apiController::class,'weekdaysmealcat'])->name('weekdaysmealcat');


//                          Meal Plans


Route::get('meal_category/plans',[apiController::class,'plans'])->name('mealcatplans');

//                        Meal Category Weeks

Route::get('meal_category/weeks',[apiController::class,'weeks'])->name('mealcatweeks');

//                     Meal Category Days


Route::get('meal_category/days',[apiController::class,'days'])->name('mealcatdays');


//                           Meal



Route::get('meal/index',[apiController::class,'mealindex'])->name('mealindex');

