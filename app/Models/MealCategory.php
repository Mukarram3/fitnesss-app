<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mealcategory extends Model
{
    use HasFactory;
    protected $table='mealcategories';
    protected $fillable = ['id','cat_id','title','image','description','status'];
    public function hasMeal(){

        return $this->hasMany(Meal::class,'id');

    }
    public function hasSubscription_plan(){

        return $this->hasMany(subscription_plan::class,'id');

    }
    public function hassubscribed(){

        return $this->hasMany(subscribed::class,'id');

    }
    
}
