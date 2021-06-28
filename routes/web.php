<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DayController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\MealController;
use App\Http\Controllers\WeekmealcatController;
use App\Http\Controllers\MealCategoryController;
use App\Http\Controllers\MealcatplanController;
use App\Http\Controllers\subscr_plansController;
use App\Http\Controllers\SubscribedController;
use App\Http\Controllers\SubscriptionPlanController;
use App\Http\Controllers\SubscriptionHistoryController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('subscribeds/indexes',[SubscribedController::class,'subscribeds'])->name('subscribeds');

//                        Auth Routes Start

Route::get('user/signup',[UserController::class,'signup_page'])->name('signup_page');
Route::post('user/signup',[UserController::class,'signup'])->name('signup');
Route::get('user/login',[UserController::class,'login_page'])->name('login_page');
Route::post('user/login',[UserController::class,'login'])->name('login');

Route::post('user/logout',[UserController::class,'logout'])->name('logout');

// Route::view('forgot_password', 'auth.reset_password')->name('password.reset');


//                        Auth Routes End


//                        User Routes Start


Route::group(['middleware'=>'auth'],function(){


    
Route::get('user/index',[UserController::class,'user'])->name('user_page');
Route::get('user/add_user',[UserController::class,'add_user'])->name('add_user');
Route::post('user/add_user_data',[UserController::class,'add_user_data'])->name('add_user_data');
Route::get('user/edituser/{id}',[UserController::class,'edit_user'])->name('edit_user');
Route::post('user/index',[UserController::class,'update_user'])->name('update_user');

});

//                        User Routes End


//                       Subscription Plans Routes Start


Route::group(['middleware'=>'auth'],function(){

    Route::get('Subscription-Plans/index',[SubscriptionPlanController::class,'plans'])->name('plans');
    Route::get('Subscription-Plans/add_plan',[SubscriptionPlanController::class,'add_plan'])->name('add_plan');
    
    Route::post('Subscription-Plans/index',[SubscriptionPlanController::class,'add_plan_data'])->name('add_plan_data');
    
    Route::get('Subscription-Plans/editplan/{id}',[SubscriptionPlanController::class,'edit_plan'])->name('edit_plan');
    
    Route::post('Subscription-Plan/index',[SubscriptionPlanController::class,'update_plan'])->name('update_plan');

    
});


//                       Subscription Plans Routes End


//                        Subscribed Routes Start



Route::group(['middleware'=>'auth'],function(){

    Route::get('subscribed/index',[SubscribedController::class,'subscribed'])->name('subscribed');
    Route::get('subscribed/edit_subscribed/{id}',[SubscribedController::class,'edit_subscribed'])->name('edit_subscribed');
    Route::post('subscribed/index',[SubscribedController::class,'update_subscribed'])->name('update_subscribed');
    

    
});


//                        Subscribed Routes End


//                        Subscription Routes Start

Route::group(['middleware'=>'auth'],function(){

    Route::get('user/subscribe_history',[SubscriptionHistoryController::class,'subscribe_history'])->name('subscribe_history');

});


//                        Subscription Routes End




//                         category Routes Start

Route::get('category/index',[CategoryController::class,'index'])->name('catgory_index');

Route::group(['middleware'=>'auth'],function(){

    
    Route::get('category/add_category',[CategoryController::class,'add_category'])->name('add_category');
    Route::post('category/add_category_data',[CategoryController::class,'add_category_data'])->name('add_category_data');
    Route::get('category/edit_category/{id}',[CategoryController::class,'edit_category'])->name('edit_category');
    Route::post('category/index',[CategoryController::class,'update_category'])->name('update_category');

    
});


//                           category Routes End


//                        Workout Caregory Routes Start


Route::group(['middleware'=>'auth'],function(){


    Route::get('workout_category/index',[WorkoutController::class,'workoutcategory_index'])->name('workoutcategory_index');
    Route::get('workout_category/add_workout_category',[WorkoutController::class,'add_workoutcategory'])->name('add_workoutcategory');
    Route::post('workout_category/add_workoutcat_data',[WorkoutController::class,'add_workoutcat_data'])->name('add_workoutcat_data');
    Route::get('workout_category/edit_workoutcategory/{id}',[WorkoutController::class,'edit_workoutcategory'])->name('edit_workoutcategory');
    Route::post('workout_category/index',[WorkoutController::class,'update_workout_cat'])->name('update_workout_cat');
    
});

//                          Workout Caregory Routes End


//                          Exercises Routes Start




Route::group(['middleware'=>'auth'],function(){

    Route::get('workout_category/exercises',[ExerciseController::class,'exercises'])->name('exercises');
    Route::get('category/add_exercise',[ExerciseController::class,'add_exercise'])->name('add_exercise');
    Route::post('workout_category/add_exercise_data',[ExerciseController::class,'add_exercise_data'])->name('add_exercise_data');
    Route::get('workout_category/edit_exercise/{id}',[ExerciseController::class,'edit_exercise'])->name('edit_exercise');
    Route::post('workout_category/exercises',[ExerciseController::class,'update_exercise'])->name('update_exercise');
    Route::post('exercise/index',[ExerciseController::class,'update_exercise_status'])->name('update_exercise_status');

    
});


//                          Exercises Routes End


//                          Meal category Routes Start



Route::group(['middleware'=>'auth'],function(){

    Route::get('meal_category/index',[MealCategoryController::class,'mealcategoryindex'])->name('mealcategoryindex');
    Route::get('meal_category/add_meal_category',[MealCategoryController::class,'add_meal_category'])->name('add_meal_category');
    Route::post('meal_category/add_mealcat_data',[MealCategoryController::class,'add_mealcat_data'])->name('add_mealcat_data');
    Route::get('meal_category/edit_mealcategory/{id}',[MealCategoryController::class,'edit_mealcategory'])->name('edit_mealcategory');
    Route::post('meal_category/index',[MealCategoryController::class,'update_meal_cat'])->name('update_meal_cat');

    
});

//                         Meal category Routes End


//                      Weeks Meal Category


Route::group(['middleware'=>'auth'],function(){

    Route::get('meal_category_weeks/index',[WeekmealcatController::class,'index'])->name('mealcategoryweeks');

});


//                       Days Meal Category Routes


Route::group(['middleware'=>'auth'],function(){

    Route::get('meal_category_days/index',[DayController::class,'index'])->name('mealcategorydays');

});



//                          Meal category plans routes

Route::group(['middleware'=>'auth'],function(){

Route::get('meal_category_plan/index',[MealcatplanController::class,'index'])->name('mealcategoryplanindex');
Route::get('meal_category_plan/create',[MealcatplanController::class,'create'])->name('add_meal_category_plans');
Route::post('meal_category_plan/store',[MealcatplanController::class,'store'])->name('add_mealcatplans_data');
Route::get('meal_category_plan/edit_plan/{id}',[MealcatplanController::class,'edit'])->name('edit_plan');
Route::post('meal_category_plan/index',[MealcatplanController::class,'update'])->name('update_plan_data');


});

//                         Meals Routes Start


Route::group(['middleware'=>'auth'],function(){


    Route::get('meal/index',[MealController::class,'mealindex'])->name('mealindex');
    Route::get('meal/add_meal',[MealController::class,'add_meal'])->name('add_meal');
    Route::post('meals/add_meal_data',[MealController::class,'add_meal_data'])->name('add_meal_data');
    Route::get('meal/edit_meal/{id}',[MealController::class,'edit_meal'])->name('edit_meal');
    Route::post('meal/index',[MealController::class,'update_meal_data'])->name('update_meal_data');
    Route::post('meals/index',[MealController::class,'update_meal_status'])->name('update_meal_status');
    Route::get('meal/ingredients/{id}',[MealController::class,'ingredients'])->name('ingredients');
    Route::get('meal/steps/{id}',[MealController::class,'steps'])->name('steps');
    
});


//                         Meals Routes End







