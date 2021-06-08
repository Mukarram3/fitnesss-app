<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;
    protected $table='workouts';
    protected $fillable = ['id','cat_id','title','image','description','status'];
    public function hasExercise(){

        return $this->hasMany(Exercise::class);

    }
    public function hasSubscription_plan(){

        return $this->hasMany(subscription_plan::class,'id');

    }
    public function hassubscribed(){

        return $this->hasMany(subscribed::class,'id');

    }

}
