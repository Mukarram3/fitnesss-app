<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscribed extends Model
{
    use HasFactory;
    protected $table='subscribeds';
    protected $fillable = ['id','user_id','cat_id','workout_id','meal_id ','plan_id','type','start_date','end_date','description','status'];

    public function hasWorkout(){

        return $this->belongsTo(Workout::class,'workout_id');

    }
    public function hasMealcategory(){

        return $this->belongsTo(Mealcategory::class,'meal_id');

    }
    public function hassubscrption_plan(){

        return $this->belongsTo(subscription_plan::class,'plan_id');

    }
    public function hasuser(){

        return $this->belongsTo(User::class,'user_id');

    }
    public function hasCategory(){

        return $this->belongsTo(Category::class,'cat_id');

    }

    public function hasMeal(){

        return $this->hasMany(Meal::class,'meal_catid');

    }

    

}
