<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subscription_plan extends Model
{
    use HasFactory;
    protected $table='subscription_plans';
    protected $fillable = ['id','workout_catid','meal_catid','name','duration','price','status'];
    public function hasMealcategory(){

        return $this->belongsTo(Mealcategory::class,'meal_catid');
        
    }
    public function hasWorkout(){

        return $this->belongsTo(Workout::class,'workout_catid');

    }
    public function hassubscribed(){

        return $this->hasMany(subscribed::class,'id');

    }

}
